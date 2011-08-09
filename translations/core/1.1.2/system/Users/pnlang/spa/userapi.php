<?php
/**
 * Zikula Application Framework
 *
 * @copyright (c) 2001, Zikula Development Team
 * @link http://www.zikula.org
 * @version $Id: userapi.php 22281 2007-06-26 19:27:44Z markwest $
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 * @author Xiaoyu Huang
 * @package Zikula_System_Modules
 * @subpackage Users
*/

/**
 * translated by
 * @author Mateo Tibaquira [mateo]
 */

// welcome e-mail
define('_USERS_YOURACCOUNTPENDING', 'Tu solicitud de registro esta pendiente para ser revisada por el administrador del sitio. Por favor se paciente. La confirmación se te enviará por correo electrónico después de la revisión.');
define('_USERS_FOLLOWINGMEM','La información almacenada sobre usted es la siguiente:');
define('_USERS_KEEPTHISEMAILSAFE', 'Por favor manten este mensaje de correo electrónico seguro: es el único recordatorio de tu contraseña.');
define('_USERS_USEDEMAILTOREGISTER','Tu ó alguien más ha usado tu correo electrónico (%email%) para registrar una cuenta en %sitename%.');
define('_USERS_WELCOMESUBJECT','Contraseña para %uname% desde %sitename%');
define('_USERS_WELCOMETOSITE', 'Bienvenido a %sitename% (%siteurl%)!');
define('_USERS_YOURAPPLICATIONAPPROVED', 'Gracias por tu comprensión. Su solicitud de registro ha sido aprobada. Tu contraseña fue enviada en el mensaje que recibiste previamente.');
define('_USERS_YOUCANCHANGEITAT','Puedes cambiarla despues de iniciar sesión en %url%');

// password e-mail
define('_USERS_ACCOUNTHASEMAIL','la cuenta de usuario \'%uname%\' en %sitename% tiene este correo electrónico asociado a esta.');
define('_USERS_AWEBUSERHASREQUESTEDPASSWORD','Alguien con esta dirección IP %hostname% acaba de solicitar que se envíe una contraseña.');
define('_USERS_IFYOUDIDNOTASK','Si tu no hiciste esta petición, no te preocupes. Tu estas viendo este mensaje, no \'ellos\'. Si esto fue un error simplemente ingresa con tu nueva contraseña.');
define('_USERS_PASSWORDFOR','Contraseña para %uname%');
define('_USERS_YOURNEWPASSWORDIS','Tu nueva contraseña es: %password%.');

// lost password code e-mail
define('_USERS_CODEFOR','Cñodigo de confirmación para %uname%');
define('_USERS_AWEBUSERHASREQUESTEDCODE', 'Alguien con la dirección IP %hostname% acaba de solicitar un código de confirmación para cambiar tu contraseña.');
define('_USERS_YOURCODEIS','Tu código de confirmación es: %code%');
define('_USERS_WITHTHISCODE','Con este código de confirmación, puedes crear una nueva contraseña haciendo click en %url%');
define('_USERS_IFYOUDIDNOTASK2','Si no solicitaste este código, no te preocupes. Sólo borra este mensaje.');

// activation e-mail
define('_USERS_ACTIVATIONSUBJECT', 'Activación de %uname%');
define('_USERS_ACIVATEYOURACCOUNTLINK', 'Por favor haz click en el siguiente enlace para completar el proceso de registro.');
define('_USERS_ONCEACTIVATED', 'Una vez activada, la información de su cuenta será la siguiente:');

// admin notification e-mail
define('_USERS_NOTIFYREGEMAILSUBJECT','Un nuevo usuario se ha registrado en el sitio!'); 
define('_USERS_NOTIFYREGEMAILBODY','Un nuevo miembro se ha registrado en el sitio. Nombre de usuario: %uname% '); 
define('_USERS_NOTIFYACTEMAILSUBJECT','Una nueva cuenta de usuario ha sido activada en el sitio!'); 
define('_USERS_NOTIFYACTEMAILBODY','Una nueva cuenta de usuario ha sido activada en el sitio. Nombre de usuario: %uname% '); 

// session expired template
define('_USERS_SESSIONEXPIREDHEADER', 'Tu sesión ha expirado.');
define('_USERS_SESSIONEXPIREDTEXT', 'Por tu seguridad, esta sesión ha expirado porque has estado inactivo. Por favor <a href="%u%">inicia sesión</a> de nuevo para acceder a los servicios.');
