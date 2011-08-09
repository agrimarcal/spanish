<?php
/**
 * Zikula Application Framework
 *
 * @copyright (c) 2001, Zikula Development Team
 * @link http://www.zikula.org
 * @version $Id: admin.php 22612 2007-08-16 14:11:54Z markwest $
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 * @package Zikula_System_Modules
 * @subpackage  SysInfo
 */

/**
 * translated by
 * @author Mateo Tibaquira [mateo]
 */

define('_SYSINFO', 'Información del Sistema');

define('_SYSINFO_ADODB', 'Capa de Base de Datos ADODB');
define('_SYSINFO_ADODBVERSION', 'Versión ADODB');

define('_SYSINFO_CONFIRMFLUSHCACHE', 'Confirmar la limpieza del caché de la Base de Datos');
define('_SYSINFO_CACHEFLUSHED', 'Caché de la Base de Datos limpiado');
define('_SYSINFO_CACHEDIRECTORY', 'Carpeta del caché');

define('_SYSINFO_DATABASETYPE', 'Tipo de Base de Datos');
define('_SYSINFO_DATAPROVIDER', 'Proveedor de la Base de Datos');
define('_SYSINFO_DATABASEHOST', 'Servidor de la Base de Datos');
define('_SYSINFO_DATABASENAME', 'Nombre de la Base de Datos name');
define('_SYSINFO_DATABASEDESCRIPTION', 'Descripción del servidor');
define('_SYSINFO_DATABASEVERSION', 'Versión de la Base de Datos:');
define('_SYSINFO_DISPLAYNAME', 'Mostrar Nombre');

define('_SYSINFO_EXTADODB', 'La <a href="http://adodb.sourceforge.net/#extension">extensión-ADOdb</a> aumenta hasta el 100% en velocidad porque sustituye partes de ADOdb con código C');
define('_SYSINFO_EXTMYSQL', 'Puedes correr Zikula desde esta base de datos si esta extensión está cargada');
define('_SYSINFO_EXTMYSQLI', 'Puedes correr Zikula desde esta base de datos si esta extensión está cargada');
define('_SYSINFO_EXTPATCHSUHOSIN', 'El <a href="http://www.suhosin.org">Parche-Suhosin</a> es un sistema de protección avanzado para las instalaciones PHP');
define('_SYSINFO_EXTSUHOSIN', 'La <a href="http://www.suhosin.org">Extensión-Suhosin</a> es un sistema de protección avanzado para las instalaciones PHP');
define('_SYSINFO_EXTTEXTMOD', 'Esta es una lista de todos los módulos disponibles en tu sitio web (instalados o no) y las versiones de esos módulos.');
define('_SYSINFO_EXTTEXTTHEME', 'Esta es una lista de todos los themes instalados en tu sitio web y las versiones de esos themes.');

define('_SYSINFO_FILE', 'Archivo');
define('_SYSINFO_FLUSHCACHE', 'Vaciar cache');
define('_SYSINFO_FOLDER', 'Carpeta');
define('_SYSINFO_FSTYPE', 'Tipo');

define('_SYSINFO_GENERALINFO', 'Información General');

define('_SYSINFO_ISWRITABLE', 'Por favor verifica si todos los Archivos y Carpetas escribibles están asegurados de accesos externos.<br />Para una mejor seguridad la carpeta pnTemp debe ser ubicada fuera de la raiz web, la ruta actual a la carpeta pnTemp es: ');

define('_SYSINFO_LOADED', 'Cargada');

define('_SYSINFO_MODSECURITY_APACHE2', 'Apache2 y <a href="http://www.modsecurity.org">modsecurity</a> recomendados');

define('_SYSINFO_NAME', 'Nombre');
define('_SYSINFO_NOOPTIONALEXTENSIONS', 'No figuran extensiones opcionales');
define('_SYSINFO_NOREQUIREDEXTENSIONS', 'No figuran extensiones requeridas');
define('_SYSINFO_NOOPTIONALPATCHES', 'No figuran parches opcionales');
define('_SYSINFO_NOTLOADED', 'No Cargada');

define('_SYSINFO_OPTIONALDPHPEXT', 'Extensiones de PHP Opcionales');
define('_SYSINFO_OPTIONALDPHPPATCHES', 'Parches de PHP Opcionales');

define('_SYSINFO_PATH', 'Ruta');
define('_SYSINFO_PHP_ALLOW_URL_FOPEN', 'allow_url_fopen=on - debería estar off');
define('_SYSINFO_PHP_ALLOW_URL_INCLUDE', 'allow_url_include=on - debería estar off');
define('_SYSINFO_PHP_ADDITIONAL_SECURITY', 'Te recomendamos suscribirte a la <a href="http://groups.google.com/group/zikula-announce/">Lista de Correo de Anuncios Zikula</a><br />Seguidores de Seguridad: <a href="http://secunia.com/search?search=zikula&x=0&y=0">Secunia</a>, <a href="http://securitytracker.com/search/search2.html?cx=007223271850322448217%3Akrkjeopp4tm&cof=FORID%3A9&ie=UTF-8&q=zikula&sa=Search#204">Securitytracker</a>, <a href="http://cve.mitre.org/cgi-bin/cvekey.cgi?keyword=zikula">Vulnerabilidades y Exposiciones Comunes</a>.');
define('_SYSINFO_PHP_CONFIG', 'Configuración de PHP');
define('_SYSINFO_PHP_DISABLE_FUNCTIONS', 'verifica disable_functions por: show_source, system, shell_exec, passthru, exec, popen, proc_open');
define('_SYSINFO_PHP_DISABLE_FUNCTIONS_CURRENT', 'actuamente disable_functions tiene:');
define('_SYSINFO_PHP_DISPLAY_ERRORS', 'display_errors=on - debería estar off');
define('_SYSINFO_PHP_DISPLAY_STARTUP_ERRORS', 'display_startup_errors=on - debería estar off');
define('_SYSINFO_PHP_EXPOSE_PHP', 'expose_php=on - debería estar off');
define('_SYSINFO_PHP_MAGIC_QUOTES_GPC', 'magic_quotes_gpc=on - debería estar off');
define('_SYSINFO_PHP_MAGIC_QUOTES_RUNTIME', 'magic_quotes_runtime=on - debe estar off, Zikula no soporta esto');
define('_SYSINFO_PHP_MODULES', 'Módulos de PHP');
define('_SYSINFO_PHP_RECOMMENDED_SECURITY_SETTINGS', 'El Equipo de Desarollo de Zikula recomienda la siguiente configuración para una mejor seguridad.<br />Chequea la <a href="http://php.net/manual/en/ini.php">Lista de directivas php.ini</a> y <a href="http://php.net/manual/es/configuration.changes.php">Como cambiar los valores de configuración</a> para más información acerca de la configuración de PHP.');
define('_SYSINFO_PHP_REGISTER_GLOBALS', 'register_globals=on - debería estar off');
define('_SYSINFO_PHP_VARIABLES', 'Variables de PHP');
define('_SYSINFO_PHP_VERSION', 'Versión de PHP:');

define('_SYSINFO_QUERYCACHEINTERVAL', 'Intervalo de caché entre consultas a la BD (segundos)');

define('_SYSINFO_REASON', 'Motivo');
define('_SYSINFO_REQUIREDPHPEXT', 'Extensiones PHP requeridas');

define('_SYSINFO_SERVERENV', 'Entorno del Servidor');
define('_SYSINFO_SERVERINFO', 'Información del Servidor:');
define('_SYSINFO_STATUS', 'Estado');
define('_SUHOSIN_PATCH', 'Suhosin');
define('_SYSINFO_SUMMARY', 'Sumario');
define('_SYSINFO_SYSTEMSUMMARY', 'Resumen del Sistema');
define('_SYSINFO_SYSSUMTEXT', 'Este es un corto resumen del sistema el cual puede ser usado para ayudar a diagnosticar problemas con tu instalación.');

define('_SYSINFO_VERSION', 'Versión');

define('_SYSINFO_ZIKULA_EXTENSIONS', 'Extensiones de Zikula');
define('_SYSINFO_ZIKULA_TEMP', 'Zikula comprobación de pnTemp');
define('_SYSINFO_ZIKULA_FILESYSTEM', 'Comprobar el sistema de ficheros');
define('_SYSINFO_ZIKULA_VERSION', 'Versión de Zikula:');
