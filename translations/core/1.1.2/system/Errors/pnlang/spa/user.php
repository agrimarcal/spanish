<?php
/**
 * Zikula Application Framework
 *
 * @copyright (c) 2004, Zikula Development Team
 * @link http://www.zikula.org
 * @version $Id: user.php 22138 2007-06-01 10:19:14Z markwest $
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 * @package Zikula_System_Modules
 * @subpackage  Zikula_Errors
 */

/**
 * translated by
 * @author Mateo Tibaquira [mateo]
 */

// 404 template
define('_ERRORS_404', 'Página no encontrada');
define('_ERRORS_MAILED','Los detalles de este error son automáticamente enviados al correo electrónico del administrador del sitio.');
define('_ERRORS_SORRY_404','Lo sentimos. La página que solicitaste, %page%, no existe en "%sitename%".');
define('_ERRORS_SEARCH', 'Buscar');
define('_ERRORS_USESEARCH', 'También puedes <a href="%url%">buscar</a> en este sitio para encontrar lo que estás buscando.');

// 403 template
define('_ERRORS_403', 'Acceso Denegado');
define('_ERRORS_LOGIN', 'Iniciar sesión');
define('_ERRORS_LOGINTEXT', 'No estás conectado. <a href="%url%">Iniciando sesión</a> <em>quizás</em> tengas permisos de acceder a esta página.');
define('_ERRORS_SORRY_403', 'Disculpa! No tienes autorización para acceder a esta página');

// error type text
define('_ERRORS_USER_NOTICE', 'Error no crítico');
define('_ERRORS_USER_NOTICE_TEXT', 'Ha ocurrido un error no crítico. El siguiente mensaje de error fue retornado por el sistema');
define('_ERRORS_USER_WARNING', 'Advertencia');
define('_ERRORS_USER_WARNING_TEXT', 'Ha ocurrido un error no crítico. El siguiente mensaje de error fue retornado por el sistema');
define('_ERRORS_USER_ERROR', 'Error crítico');
define('_ERRORS_USER_ERROR_TEXT', 'Ha ocurrido un error desconocido. El siguiente mensaje de error fue retornado por el sistema');
define('_ERRORS_USER_UNKNOWN', 'Error desconocido');
define('_ERRORS_USER_UNKNOWN_TEXT', 'Ha ocurrido un error desconocido. El siguiente mensaje de error fue retornado por el sistema');

// system error template
define('_ERRORS_SYSTEMERROR', 'Error del Sistema');
define('_ERRORS_TECHNICALINFO', 'Información técnica adicional');
// additional text appended to any error mesages should the user have administrative permissions
// format is error message (_ERRORS_LOCATION)
define('_ERRORS_LOCATION', 'archivo <strong>%file%</strong> en la línea %line%');

// general error template
define('_ERRORS_ERROR', 'Error en %sitename%');
