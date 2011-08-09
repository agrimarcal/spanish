<?php
/**
 * Zikula Application Framework
 *
 * @copyright (c) 2001, Zikula Development Team
 * @link http://www.zikula.org
 * @version $Id: admin.php 22138 2007-06-01 10:19:14Z markwest $
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 * @package Zikula_System_Modules
 * @subpackage  Zikula_Mailer
 */

/**
 * translated by
 * @author Mateo Tibaquira [mateo]
 */

// general 
define('_MAILER','Correo Zikula');

// navigation
define('_MAILER_TESTCONFIG', 'Probar configuración');

// modify config
define('_MAILER_CHARSET', 'Conjunto de caracteres predeterminado (por defecto: %charset%)');
define('_MAILER_CONTENTTYPE', 'Enviar emails HTML por defecto');
define('_MAILER_ENCODING', 'Codificación predeterminada (por defecto: 8-bit)');
define('_MAILER_GENERALSETTINGS', 'Ajustes generales');
define('_MAILER_MSMAILHEADERS', 'Usar las cabeceras del cliente de correo de Microsoft');
define('_MAILER_SENDMAILSETTINGS', 'Configuración de SendMail');
define('_MAILER_TRANSPORT', 'Transporte del correo predeterminado');
define('_MAILER_WORDWRAP', 'Word wrap (por defecto: 50)');

// send mail settings
define('_MAILER_SENDMAIL', 'Sendmail');
define('_MAILER_SENDMAILPATH', 'Ruta a Sendmail');

// smtp settings
define('_MAILER_SMTPAUTH', 'Habilitar autenticación SMTP');
define('_MAILER_SMTPMAIL', 'SMTP');
define('_MAILER_SMTPPASSWORD', 'Contraseña SMTP');
define('_MAILER_SMTPPORT','Puerto SMTP (por defecto: 25)');
define('_MAILER_SMTPSERVER','Servidor SMTP (por defecto: localhost)');
define('_MAILER_SMTPSETTINGS', 'Configuación SMTP');
define('_MAILER_SMTPTIMEOUT', 'Tiempo de espera SMTP (en segundos -- por defecto: 10)');
define('_MAILER_SMTPUSERNAME', 'Nombre de usuario SMTP');

// other mail transports
define('_MAILER_PHPMAIL', 'PHP mail()');
define('_MAILER_QMAIL', 'QMail');

// test configuration
define('_MAILER_HTML', 'Mensaje en formato HTML');
define('_MAILER_BODY', 'Mensaje');
define('_MAILER_FROMADDRESS', 'Desde el email');
define('_MAILER_FROMNAME', 'Remitente');
define('_MAILER_PNMAIL', 'Mandar el mensaje via pnMail API');
define('_MAILER_SUBJECT', 'Asunto');
define('_MAILER_TOADDRESS', 'Email de destino');
define('_MAILER_TONAME', 'Destinatario');

// errors/statuses
define('_MAILER_MESSAGESENT', 'Mensaje enviado');
define('_MAILER_MESSAGENOTSENT', 'Mensaje no enviado');
