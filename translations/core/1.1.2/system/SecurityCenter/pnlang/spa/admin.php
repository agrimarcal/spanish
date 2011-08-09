<?php
/**
 * Zikula Application Framework
 * @copyright (c) 2001, Zikula Development Team
 * @link http://www.zikula.org
 * @version $Id: admin.php 22264 2007-06-25 14:01:19Z markwest $
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 * @package Zikula_System_Modules
 * @subpackage SecurityCenter
 */

/**
 * translated by
 * @author Mateo Tibaquira [mateo]
 */

// general
define('_SECURITYCENTER','Centro de Seguridad');

// singular/plural
define('_SECURITYCENTER_HACKATTEMPT', 'Ataque');
define('_SECURITYCENTER_HACKATTEMPT_LC', 'ataque');
define('_SECURITYCENTER_HACKATTEMPTS', 'Ataques');

// navigation
define('_SECURITYCENTER_VIEWHACKATTEMPTSFROMDB','Ver %i% en la base de datos');
define('_SECURITYCENTER_VIEWLOGGEDEVENTS', 'Ver Eventos Registrados');
define('_SECURITYCENTER_VIEWHACKATTEMPTS', 'Ver ataques');
define('_SECURITYCENTER_DELETEHACKATTEMPT', 'Borrar ataque');
define('_SECURITYCENTER_CONFIRMDELETEHACKATTEMPT', 'Realmente quieres borrar este ataque?');

// view templates
define('_SECURITYCENTER_CLEAR_FITLER', 'Limpiar filtro');
define('_SECURITYCENTER_COMPONENT', 'Componente');
define('_SECURITYCENTER_FILE','Archivo');
define('_SECURITYCENTER_FUNCTION', 'Función');
define('_SECURITYCENTER_INFO','Información adicional');
define('_SECURITYCENTER_LINE','Línea');
define('_SECURITYCENTER_MESSAGE', 'Mensaje');
define('_SECURITYCENTER_SECURITY', 'Seguridad');
define('_SECURITYCENTER_TYPE','Tipo');
define('_SECURITYCENTER_USERID','ID Usuario');
define('_SECURITYCENTER_VIEW_FILTER', 'Filtro');
define('_SECURITYCENTER_VIEW_LOGEVENT', 'Ver Eventos Registrados');

// options available for a hack attempt
define('_SECURITYCENTER_BROWSERINFO', 'Ver información de navegador');
define('_SECURITYCENTER_COOKIEARRAY', 'Ver arreglo \'cookie\'');
define('_SECURITYCENTER_ENVARRAY', 'Ver arreglo \'env\'');
define('_SECURITYCENTER_FILESARRAY', 'Ver arreglo \'files\'');
define('_SECURITYCENTER_GETARRAY', 'Ver arreglo \'get\'');
define('_SECURITYCENTER_POSTARRAY', 'Ver arreglo \'post\'');
define('_SECURITYCENTER_REQUESTARRAY', 'Ver arreglo \'request\'');
define('_SECURITYCENTER_SERVERARRAY',' Ver arreglo \'server\'');
define('_SECURITYCENTER_SESSIONARRAY', 'Ver arreglo \'session\'');

// display template
define('_SECURITYCENTER_VARIABLE', 'Variable');
define('_SECURITYCENTER_VARIABLEVALUE', 'Valor de variable');

// modify config
define('_SECURITYCENTER_DISPLAYEMAIL','Notificar los ataques via e-mail');
define('_SECURITYCENTER_DISPLAYENABLE','Habilitar Protección a Intrusos');
define('_SECURITYCENTER_DISPLAYLOGTODB','Registrar ataques en la base de datos');
define('_SECURITYCENTER_FILTERCOOKIEVARS', 'Sanear las variables \'$_COOKIE\'');
define('_SECURITYCENTER_FILTERGETVARS', 'Sanear las variables \'$_GET\'');
define('_SECURITYCENTER_FILTERPOSTVARS', 'Sanear las variables \'$_POST\'');
define('_SECURITYCENTER_FULLCONTENT', 'Contenido adicional para el mensaje de correo completo');
define('_SECURITYCENTER_GENERALCONFIG','Configuración general');
define('_SECURITYCENTER_MAILTEXT', 'Texto del correo');
define('_SECURITYCENTER_ONLYSENDSUMMARYBYEMAIL','Cuando se registre en la base de datos, sólo mandar un texto resumen al correo electrónico');
define('_SECURITYCENTER_OUTPUTFILTER','Ajustes de filtro de salida');
define('_SECURITYCENTER_OUTPUTFILTERINTERNAL','filtro de salida interno');
define('_SECURITYCENTER_OUTPUTFILTERSAFEHTML','Usar SafeHTML como filtro de salida');
define('_SECURITYCENTER_SELECTOUTPUTFILTER','Seleccionar filtro de salida');
define('_SECURITYCENTER_SUMMARYCONTENT', 'Contenido resumen');
define('_SECURITYCENTER_VARIABLECLEANSING', 'Limpiado de variables HTTP');
