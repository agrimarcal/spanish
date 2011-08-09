<?php
/**
 * Zikula Application Framework
 * @copyright (c) 2001, Zikula Development Team
 * @link http://www.zikula.org
 * @version $Id: userapi.php 22138 2007-06-01 10:19:14Z markwest $
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 * @package Zikula_System_Modules
 * @subpackage SecurityCenter
*/

/**
 * translated by
 * @author Mateo Tibaquira [mateo]
 */

define('_SECURITYCENTER_EMAILEMAILSECTIONBREAKER','\n=====================================\n');
define('_SECURITYCENTER_EMAILATTENTION','Para la atención del administrador del sitio %sitename.\n');
define('_SECURITYCENTER_ANTICRACKERATDATEANDTIME','El %date a las %time');
define('_SECURITYCENTER_EMAILDETECTEDANDBLOCKED',' el código de Zikula detectó que alguien trató de enviar información a tu sitio que pudo haber sido planeado como un ataque. No entre en pánico: podría ser inofensivo -- quizás esta detección fue provocada por algo que usted hizo! De todos modos, fue detectado y bloqueado.\n');
define('_SECURITYCENTER_EMAILFILELINEANDTYPE','La actividad sospechosa fué reconocida en el archivo %file en la línea %line, y es del tipo %type. \n');
define('_SECURITYCENTER_EMAILADDINITIONALINFO','Información adicional entregada por el código que detectó esto: %info');
define('_SECURITYCENTER_EMAILSTARTFULLREPORT','\n\nAbajo usted encontrará mucha información acerca de este ataque, esto puede ayudarle a usted para que encuentre lo que ocurrió y tal vez a quien lo hizo.\n\n');
define('_SECURITYCENTER_EMAILUSERINFOHEADER','Información acerca de este usuario:\n');
define('_SECURITYCENTER_EMAILNOTLOGGEDIN','Esta persona no estaba conectada.\n');
define('_SECURITYCENTER_ANTICRACKERUSERINFO','Nombre de usuario:  %uname\nCorreo electrónico registrado de este usuario: %email\nNombre verdadero registrado de este usuario: %name');
define('_SECURITYCENTER_EMAILIPNUMBERS','Dirección IP: [nota: si estás tratando con un cracker real, esta dirección IP puede que no sea la del computador de el/ella]\n\t IP de acuerdo a HTTP_CLIENT_IP: %HTTP_CLIENT_IP\n\t IP de acuerdo a REMOTE_ADDR: %REMOTE_ADDR\n\t IP de acuerdo a GetHostByName(\$REMOTE_ADDR): %$REMOTE_ADDR\n\n');
define('_SECURITYCENTER_EMAILREQUESTARRAY','Información en el arreglo \$_REQUEST \n');
define('_SECURITYCENTER_EMAILGETARRAY','Información en el arreglo \$_GET\nEsto es acerca de las variables que pueden haber estado presentes en la URL o en un formulario tipo \'GET\'.\n');
define('_SECURITYCENTER_EMAILPOSTARRAY','Información en el arreglo \$_POST\nEsto es acerca de elementos de formulario visibles e invisibles.\n');
define('_SECURITYCENTER_EMAILBROWSERINFO','Información del navegador\n');
define('_SECURITYCENTER_EMAILSERVERARRAY','Información en el arreglo \$_SERVER\n');
define('_SECURITYCENTER_EMAILENVARRAY','Información en el arreglo \$_ENV\n');
define('_SECURITYCENTER_EMAILCOOKIEARRAY','Información en el arreglo \$_COOKIE\n');
define('_SECURITYCENTER_EMAILFILESARRAY','Información en el arreglo \$_FILES\n');
define('_SECURITYCENTER_EMAILSESSIONARRAY','Información en el arreglo \$_SESSION\nEsta es la información de la sesión. Las variables\nempezando con ZSV son ZikulaSessionVariables.\n');
define('_SECURITYCENTER_EMAILEMAILSUBJECT','Intento de ataque a tu sitio? (tipo: %hack_type)');
