<?php
/**
 * Zikula Application Framework
 *
 * @copyright (c) 2001, Zikula Development Team
 * @link http://www.zikula.org
 * @version $Id: upgrade.php 24364 2008-06-09 12:06:20Z markwest $
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 * @author Drak
 */

// file_put_contents emulation for php 4 - code from http://uk2.php.net/manual/en/function.file-put-contents.php#68329
if ( !function_exists('file_put_contents') && !defined('FILE_APPEND') ) {
    define('FILE_APPEND', 1);
    function file_put_contents($n, $d, $flag = false) {
        $mode = ($flag == FILE_APPEND || strtoupper($flag) == 'FILE_APPEND') ? 'a' : 'w';
        $f = @fopen($n, $mode);
        if ($f === false) {
            return 0;
        } else {
            if (is_array($d)) $d = implode($d);
            $bytes_written = fwrite($f, $d);
            fclose($f);
            return $bytes_written;
        }
    }
}

ini_set('max_execution_time' , 86400);

// load zikula core
define('_PNINSTALLVER', '1.1.0');

// include config file for retrieving name of temporary directory 
include_once 'config/config.php'; 
$tempDir = (isset($PNConfig['System']['temp']) ? $PNConfig['System']['temp'] : 'pnTemp'); 

$action = (isset($_GET['action']) ? $_GET['action'] : (isset($_POST['action']) ? $_POST['action'] : false));

$lang = (isset($_GET['lang']) ? $_GET['lang'] : (isset($_POST['lang']) ? $_POST['lang'] : 'eng'));
if (file_exists($tempDir . '/upgrade_languages')) {
    $installed_languages = unserialize(file_get_contents('pnTemp/upgrade_languages'));
    $lang = (in_array($lang, $installed_languages)) ? $lang : 'eng';
    if (file_exists($langfile = 'install/pnlang/' . $lang . '/upgrade.php')) {
        include_once $langfile;
        include "language/$lang/core.php";
    } else {
        include_once 'install/pnlang/eng/upgrade.php';
        include_once 'language/eng/core.php';
        $lang = 'eng';
    }
} else {
    $lang = 'eng';
    include_once 'install/pnlang/eng/upgrade.php';
    include_once 'language/eng/core.php';
}

// login to supplied admin credentials for the second part of the installation
if ($action === 'regenerate' || $action === 'install' || $action === 'upgrademodules') {
    include 'includes/pnAPI.php';
    if (!pnInit(PN_CORE_ALL & ~PN_CORE_TOOLS & ~PN_CORE_DECODEURLS & ~PN_CORE_SESSIONS)) { 
        Loader::requireOnce('includes/templates/dbconnectionerror.htm'); 
        pnShutDown(); 
    } 
    
    $username = FormUtil::getPassedValue('username');
    $password = FormUtil::getPassedValue('password');
    if (!pnUserLogin($username, $password)) {
        // force action to login
        $action = 'login';
    }
}

switch ($action)
{
    case 'upgrade' :
        _upg_upgrade($lang);
        break;
    case 'start':
        _upg_start($lang);
        break;
    case 'login':
        _upg_login(true, $lang);
        break;
    case 'regenerate':
        _upg_regenerate($lang, $username, $password);
        break;
    case 'install':
        _upg_install($lang, $username, $password);
        break;
    case 'upgrademodules':
        _upg_upgrademodules($lang, $username, $password);
        break;
    default:
        // select language
        //include_once 'install/pnlang/eng/upgrade.php';
        _upg_selectlanguage();
}

function _upg_header()
{
    echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">'."\n";
    echo '<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-us">'."\n";
    echo '<head>'."\n";
    echo '<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />'."\n";
    echo '<title>' . _UPG_TITLE .'</title>'."\n";
    echo '<link rel="stylesheet" href="install/pnstyle/upgrade.css" type="text/css" />' . "\n";
    echo '</head>' . "\n";
    echo '<body>'."\n";
    echo '<div id="nonFooter"><div id="header">'."\n";
    echo '<div id="headertopleft"><img src="install/pnimages/top1.jpg" alt="" /></div>'."\n";
    echo '<div id="headertopright"><img src="install/pnimages/top2.jpg" alt="" /></div>'."\n";
    echo '</div>'."\n";
    echo '<div id="contents">';
    echo '<h1>' . _UPG_SUBTITLE . '</h1>'."\n";
    echo '<p>' . _UPG_DESCRIPTION . '</p>';
}

function _upg_footer()
{
    echo '</div></div>'."\n";
    echo '<div id="footer">'."\n";
    echo '<p>'._UPG_FOOTERINFO.'</p>';
    echo '</div>'."\n";
    echo '</body>'."\n";
    echo '</html>';
}

function _upg_start($lang = 'eng')
{
    _upg_header();
    echo '<p><strong>' . _UPG_BACKUPNOTICE . '</strong></p>';
    echo '<p><strong>' . _UPG_TIMEHINT . '</strong></p>'."\n";
    if (!ini_set('memory_limit', '64M')) {
        echo '<p><strong>' . _UPG_MEMHINT . '</strong></p>'."\n";
    }
    _upg_continue('upgrade', _UPG_STARTUPGRADE, null, null, $lang);
    _upg_footer();
}

function _upg_upgrade($lang = 'eng')
{
    // Need to use $_SESSION here because PN cleans out all globals
    $_SESSION['_PNUpgrader']['_PNUpgradeFrom76x'] = true;
    include 'includes/pnAPI.php';
    if (!pnInit(PN_CORE_ALL & ~PN_CORE_THEME & ~PN_CORE_AJAX & ~PN_CORE_SESSIONS & ~PN_CORE_TOOLS)) { 
        Loader::requireOnce('includes/templates/dbconnectionerror.htm'); 
        pnShutDown(); 
    }

    _upg_header();
    echo '<p><strong>' . _UPG_BACKUPNOTICE . '</strong></p>';
    echo '<ul id="upgradelist">'."\n";

    // users table pre-update processing
    require_once 'system/Users/pninit.php';
    echo '<li>' . _UPG_BACKINGUPDB;

    users_migrate_userdatafields76x_pre();
    echo _UPG_DONE . '</li>';
    pnConfigSetVar('sessionname', 'ZIKULASID');
    echo '<li>' . _UPG_USERDBSTRUCTUREUPGRADED . '</li>';

    // backup blocks for later use
    require_once 'system/Blocks/pninit.php';
    blocks_upgradefrom76_pre();

    // upgrade modules table to work with 0.8 framework
    Loader::requireOnce('system/Modules/pninit.php');
    modules_init_changestructure();
    echo '<li>' . _UPG_MODULEDBSTRUCTUREUPGRADED . '</li>';

    // reload new modules pntables info
    unset($_SESSION['_PNUpgrader']['_PNUpgradeFrom76x']);
    pnModDBInfoLoad('Modules', 'Modules', true);

    // force load the modules admin API
    pnModAPILoad('Modules', 'admin', true);

    // regenerate the modules list
    pnModAPIFunc('Modules', 'admin', 'regenerate');

    // required
    require_once 'includes/ThemeUtil.class.php';
    pnModLangLoad('Modules', 'admin', true);

    $modules = array('Theme' => 'upgrade',
                     'Profile' => 'upgrade',
                     'Blocks' => 'upgrade',
                     'Users' => 'upgrade');

    foreach ($modules as $module => $action) {
        $_SESSION['_PNUpgrader']['_PNUpgradeFrom76x'] = true;
        if (pnModAPIFunc('Modules', 'admin', $action, array('id' => pnModGetIDFromName($module)))) {
            pnModAPIFunc('Modules', 'admin', 'setstate', array('id' => pnModGetIDFromName($module), 'state' => PNMODULE_STATE_ACTIVE));
            echo "<li>$action $module: " . _UPG_SUCCESSFUL . '</li>';
        } else {
            echo "<li class=\"upgradeerror\">$action $module: " . _UPG_FAILED . '</li>';
        }
    }

    users_76xupgrade_activate();
    echo '<li>' . _UPG_USERSACTIVATED . '</li>'."\n";

    // update the default blocks - this can only be done after all modules are installe.
    echo '<li>' . _UPG_BLOCKSTABLEUPGRADED . '</li>';
    blocks_upgradefrom76_post();

    // regenerate the modules list to pick up any final changes
    pnModAPIFunc('Modules', 'admin', 'regenerate');

    // ensure that the default theme is extralite
    pnConfigSetVar('Default_Theme', 'ExtraLite');
    echo '<li>' . _UPG_RESETTHEMETOEXTRALITE . '</li>';

    // migrate the DUD
    users_migrate_userdatafields76x_post();
    echo '<li>' . _UPG_DUDMIGRATED . '</li>';

    // migrate the search module (re-initialize it - there's no upgrade path)
    Loader::requireOnce('system/Search/pninit.php');
    pnModDBInfoLoad('Search');
    search_delete();
    search_init();
    echo '<li>' . _UPG_SEARCHMODULEREINSTALLED . '</li>';

    echo '</ul>'."\n";
    unset($_SESSION['_PNUpgrader']['_PNUpgradeFrom76x']);

    _upg_login(false, $lang);
    _upg_footer();
}

function _upg_selectlanguage()
{
    _upg_header();
    
    echo '<h2>Por favor selecciona tu lenguaje</h2>';
    // the following text is not a define by intention
    echo '<p>Si tu lenguaje no aparece aquí o ves algunas líneas extrañas como _UPG_DESCRIPTION, debes instalar la versión más reciente de los archivos de tu lenguaje. Por favor contacta a la comunidad local que corresponda acerca de este asunto. Puedes continuar la instalación en inglés y añadir los archivos de tu lenguaje luego.</p>';
    echo '<ul style="text-align: center; list-style-type: none;">' . "\n";
    $langbasedir = 'install/pnlang/';
    $dh = opendir($langbasedir);
    while(($lang = readdir($dh)) !== false) {
        if ($lang != '.' && $lang != '..' && $lang != '.svn' && $lang != 'CVS' && $lang != 'index.html' && is_dir("$langbasedir/$lang")) {
            $path = "$langbasedir/$lang/upgrade.php";
            if (file_exists($path)) {
                $languages[] = $lang;
                echo '<li style="margin: 1em 0;"><a href="upgrade.php?action=start&amp;lang=' . $lang . '"><img src="images/flags/flag-' . $lang . '.png" alt="" /></a></li>';
                
            }
        }
    }
    closedir($dh);
    $tempDir = (isset($PNConfig['System']['temp']) ? $PNConfig['System']['temp'] : 'pnTemp'); 
    file_put_contents($tempDir . '/upgrade_languages', serialize($languages));
    echo '</ul>'."\n";

    _upg_footer();
}

function _upg_regenerate($lang = 'eng', $username, $password)
{
    // update pnModVars to be serialized
    pnModDBInfoLoad('modules');
    $pntables = pnDBGetTables();
    $columns = $pntables['module_vars_column'];
    $where = "WHERE $columns[modname] <> '/PNConfig'";
    $objArray = DBUtil::selectObjectArray('module_vars', $where);

    foreach($objArray as $key => $v) {
        $value = $objArray[$key]['value'];
        if (!DataUtil::is_serialized($value)) {
            $updateObj = $objArray[$key];
            $updateObj['value'] = serialize($value);
            DBUtil::updateObject($updateObj, 'module_vars');
        }
    }

    pnUserSetVar('lang', $lang);
    
    // ensure that the default theme is extralite
    pnConfigSetVar('Default_Theme', 'ExtraLite');
    // manually upgrade the modules module
    Loader::requireOnce('system/Modules/pninit.php');
    modules_init_changestructure();

    // regenerate the modules list
    pnModAPIFunc('Modules', 'admin', 'regenerate');
    _upg_header();
    echo '<ul id="upgradelist">'."\n";
    echo '<li>' . _UPG_MODULELISTREGENERATED . '</li>'."\n";
    echo '</ul>'."\n";
    _upg_continue('install', _UPG_INSTALLNEWMODULES, $username, $password, $lang);
    _upg_footer();
}

function _upg_install($lang = 'eng', $username, $password)
{
    // force load the modules admin API
    pnModAPILoad('Modules', 'admin', true);

    _upg_header();
    echo '<p>' . _UPG_STARTNEWMODULEINSTALL . '</p>'."\n";

    // ensure that all non-active system modules are installed
    $newsystemmods = pnModAPIFunc('Modules', 'admin', 'list', array('state' => PNMODULE_STATE_UNINITIALISED, 'type' => 3));
    if (is_array($newsystemmods) && !empty($newsystemmods)) {
        echo '<ul id="upgradelist">'."\n";
        foreach ($newsystemmods as $newsystemmod) {
            if (pnModAPIFunc('Modules', 'admin', 'initialise', array('id' => $newsystemmod['id']))) {
                pnModAPIFunc('Modules', 'admin', 'setstate', array('id' => $newsystemmod['id'], 'state' => PNMODULE_STATE_ACTIVE));
                echo '<li>'.DataUtil::formatForDisplay($newsystemmod['name']).' ' . _UPG_INITIALISED . '</li>'."\n";
            } else {
                echo '<li class="upgradeerror">'.DataUtil::formatForDisplay($newsystemmod['name']).' ' . _UPG_NOTINITIALISED . '</li>'."\n";
            }
        }
        echo '</ul>'."\n";
    } else {
        echo '<p>' . _UPG_NONEWMODSNEEDINIT . '</p>';
    }

    // regenerate the modules list to pick up any final changes
    pnModAPIFunc('Modules', 'admin', 'regenerate');

    // clear errors
    unset($_SESSION['PNSV_PNErrorMsg']);
    unset($_SESSION['PNSV_PNErrorMsgType']);
    unset($_SESSION['PNSV_PNStatusMsg']);

    echo '<p>' . _UPG_INSTALLOFMODULESCOMPLETE . '</p>'."\n";
    _upg_continue('upgrademodules', _UPG_UPGRADEALLMODULES, $username, $password, $lang);
    _upg_footer();
}

function _upg_upgrademodules($lang = 'eng', $username, $password)
{
    // force load the modules admin API
    pnModAPILoad('Modules', 'admin', true);

    _upg_header();
    echo '<p>' . _UPG_STARTINGUPGRADE . '</p>'."\n";

    // ensure that the header_footer module is actually active
    $hfinfo = pnModGetInfo(pnModGetIDFromName('Header_Footer'));
    if ($hfinfo['state'] == 2) {
        pnModAPIFunc('Modules', 'admin', 'setstate', array('id' => $hfinfo['id'], 'state' => PNMODULE_STATE_ACTIVE));
    }

    // get a list of modules needing upgrading
    $newmods = pnModAPIFunc('Modules', 'admin', 'list', array('state' => PNMODULE_STATE_UPGRADED, 'type' => 3));
    $newmods = array_merge($newmods, pnModAPIFunc('Modules', 'admin', 'list', array('state' => PNMODULE_STATE_UPGRADED, 'type' => 2)));
    $newmods = array_merge($newmods, pnModAPIFunc('Modules', 'admin', 'list', array('state' => PNMODULE_STATE_UPGRADED, 'type' => 1)));
    if (is_array($newmods) && !empty($newmods)) {
        echo '<ul id="upgradelist">'."\n";
        foreach ($newmods as $newmod) {
            if (pnModAPIFunc('Modules', 'admin', 'upgrade', array('id' => $newmod['id']))) {
                pnModAPIFunc('Modules', 'admin', 'setstate', array('id' => $newmod['id'], 'state' => PNMODULE_STATE_ACTIVE));
                echo '<li class="upgradeok">'.DataUtil::formatForDisplay($newmod['name']).' ' . _UPG_UPGRADED . '</li>'."\n";
            } else {
                echo '<li class="upgradeerror">'.DataUtil::formatForDisplay($newmod['name']).' ' . _UPG_NOTUPGRADED . '</li>'."\n";
            }
        }
        echo '</ul>'."\n";
    } else {
        echo '<p>' . _UPG_NOMODSNEEDUPGRADE . '</p>';
    }

    // regenerate the modules list to pick up any final changes
    pnModAPIFunc('Modules', 'admin', 'regenerate');
    
    // store the recent version in a config var for later usage. This enables us to determine the version we ar eupgrading from
    pnConfigSetVar('core_version', PN_VERSION_NUM);

    // clear errors
    unset($_SESSION['PNSV_PNErrorMsg']);
    unset($_SESSION['PNSV_PNErrorMsgType']);
    unset($_SESSION['PNSV_PNStatusMsg']);

    echo '<p>' . _UPG_FINISHEDUPGRADE ."\n";
    echo sprintf(_UPG_GOTOADMINPANEL, DataUtil::formatForDisplay(pnGetBaseURL()), DataUtil::formatForDisplay(pnConfigGetVar('sitename'))) .'</p>'."\n";
    _upg_footer();
}

function _upg_login($showheader = true, $lang = 'eng')
{
    if ($showheader == true) {
        _upg_header();
        echo '<p><strong>' . _UPG_LOGINFAILED . '</strong></p>'."\n";
    }
    echo '<p>' . _UPG_FORTHENEXTSTEPSPLEASELOGIN . '</p>'."\n";
    echo '<form action="upgrade.php" method="post" enctype="application/x-www-form-urlencoded">'."\n";
    echo '<ul id="upgradeform">'."\n";
    echo '<li><label for="username">' . _UPG_USERNAME . ':</label><input id="username" type="text" name="username" size="25" maxlength="25" /></li>'."\n";
    echo '<li><label for="password">' . _UPG_PASSWORD . ':</label><input id="password" type="password" name="password" size="25" maxlength="40" /></li>'."\n";
    echo '<li class="submit"><input type="hidden" name="action" value="regenerate" />'."\n";
    echo '<input type="hidden" name="lang" value="'.htmlspecialchars($lang).'" />'."\n";
    echo '<input name="submit" type="submit" value="' . _UPG_SUBMIT . '" /></li>'."\n";
    echo '</ul>'."\n";
    echo '</form>'."\n";
    if ($showheader == true) {
        _upg_footer();
    }
}

function _upg_continue($action, $text, $username, $password, $lang)
{
    echo '<form method="post" action="upgrade.php">'."\n";
    echo '<div style="text-align: left;">'."\n";
    if ($username <> null && $password <> null) {
        echo '<input type="hidden" name="username" value="'.DataUtil::formatForDisplay($username).'" />'."\n";
        echo '<input type="hidden" name="password" value="'.DataUtil::formatForDisplay($password).'" />'."\n";
    }
    if ($lang <> null) {
        echo '<input type="hidden" name="lang" value="'.htmlspecialchars($lang).'" />'."\n";
    }
    echo '<input type="hidden" name="action" value="'.htmlspecialchars($action).'" />'."\n";
    echo '<input type="submit" name="submit" value="'.htmlspecialchars($text).'" />'."\n";
    echo '</div>'."\n";
    echo '</form>'."\n";
    return;
}
