<?php
/**
 * Zikula Application Framework
 *
 * @copyright (c) 2002, Zikula Development Team
 * @link http://www.zikula.org
 * @version $Id: admin.php 22776 2007-10-04 12:16:17Z markwest $
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 * @package Zikula_System_Modules
 * @subpackage Settings
 */

/**
 * translated by
 * @author Mateo Tibaquira [mateo]
 */

define('_SETTINGS_ACTAUTODETECT', 'Auto-detectar el lenguaje desde la configuración del navegador');
define('_SETTINGS_ACTMULTILINGUAL','Activar caracterí­sticas multilenguaje');
define('_SETTINGS_ADMINEMAIL','Correo electrónico del administrador');
define('_SETTINGS_ADMINGRAPHIC','Habilitar gráficas en el Panel de Administración');
define('_SETTINGS_ALLOWUSERS','Permitirle a otros usuarios ver tu correo electrónico');
define('_SETTINGS_ANONYMOUSSESSIONS', 'Usar sesiones para usuarios no registrados');
define('_SETTINGS_AUTHKEYUA', 'Asignar una authkey al UserAgent'); //'Bind authkey al UserAgent'

define('_SETTINGS_BACKENDCONF','Ajustes del Back-End');
define('_SETTINGS_BACKENDLANG','Lenguaje del Back-end');
define('_SETTINGS_BACKENDTITLE','Título del Back-end');
define('_SETTINGS_BASESITECONFIG', 'Ajustes Generales');
define('_SETTINGS_BASESITEINFO', 'Información general');
define('_SETTINGS_HTMLENTITIESBOX', 'Entidades HTML');
define('_SETTINGS_HTMLALLOWEDBOX', 'Etiquetas HTML');
define('_SETTINGS_MULTILINGUALBOX', 'Lenguaje del Sistema');
define('_SETTINGS_BROWSERBOX', 'Explorador');
define('_SETTINGS_SERVERBOX', 'Servidor');
define('_SETTINGS_SCREENMESSAGESBOX', 'Mensajes de Error');
define('_SETTINGS_ERRORLOGGINGBOX', 'Registro de Errores');

define('_SETTINGS_CENSORTEXT','Habilitar censura');

define('_SETTINGS_DB', 'Base de datos (recomendado)');
define('_SETTINGS_DETECTLANGUAGE','Detectar lenguaje');
define('_SETTINGS_DYNKEYWORDS','Meta-keywords dinámicas');

define('_SETTINGS_ENTRYPOINT', 'Punto de entrada del sitio');
define('_SETTINGS_ENTRYPOINTDESC', '(por defecto: index.php)');
define('_SETTINGS_ENTRYPOINTERROR', 'Error! Punto de entrada no válido o el archivo de punto de entrada no existe en la raiz del sitio');
define('_SETTINGS_ENTRYPOINTTIP', 'Tip: El archivo de punto de entrada debe existir en la raiz del sitio antes de ser configurado aquí.');
define('_SETTINGS_ERRORDISPLAY','Mensajes de Error');
define('_SETTINGS_ERRORHANDLING','Manejo de Errores');
define('_SETTINGS_ERRORREPORTINGLEVEL', 'Nivel de reporte');
define('_SETTINGS_ERRORLOGGING','Errores a registrar');
define('_SETTINGS_ERRORLOGTYPE','Tipo de registro de errores');
define('_SETTINGS_ERRORMAILTO','Enviar correos de errores a');
define('_SETTINGS_ERRORREPORTING','Reporte de Errores');

define('_SETTINGS_FILE', 'Archivo');

define('_SETTINGS_GC_PROBABILITY', 'Probabilidad de recolección de basura');
define('_SETTINGS_GC_RATIO', '/10000');
define('_SETTINGS_GENERAL', 'Ajustes generales');
define('_SETTINGS_GENSITEINFO','Ajustes generales');

define('_SETTINGS_HTMLALLOWENTITIES','Traducir entidades HTML embebidas en caracteres');
define('_SETTINGS_HTMLOPT','Configuración HTML');
define('_SETTINGS_HTMLTAGABOUT', 'Acerca de "&lt;%t%&gt;"');
define('_SETTINGS_HTMLTAGALLOWED','Permitido');
define('_SETTINGS_HTMLTAGALLOWEDWITHPARAMS','Permitido con Atributos');
define('_SETTINGS_HTMLTAGNAME','Etiqueta');
define('_SETTINGS_HTMLTAGNOTALLOWED','No permitida');
define('_SETTINGS_HTMLTAGUSAGE', 'Uso (desde <a href="http://www.w3schools.com">W3Schools</a>)');
define('_SETTINGS_HTMLWARNING','Advertencia! Habilitando las etiquetas &lt;img&gt;, &lt;span&gt;, &lt;marquee&gt;, &lt;script&gt;, &lt;embed&gt;, &lt;object&gt; o &lt;iframe&gt; incrementas la oportunidad de ataques en contra de los usuarios del sitio que pueden revelar su información personal. Así que se recomienda dejar esas etiquetas como \'No Permitidas\' a menos que estes seguro que realmente entiendes las consecuencias de habilitarlas.');
define('_SETTINGS_INVALIDEMAIL', 'Correo electrónico inválido - por favor verificalo');
define('_SETTINGS_JSQUICKTAGS', 'Usar botones JS Quicktag');
define('_SETTINGS_JSQUICKTAGSNOTE', 'Nota: JS Quicktags añade un conjunto de botones para etiquetas HTML comunes para las áreas de texto habilitadas. Un área de texto \'habilitada\' tendrá una etiqueta de plantilla Quicktags en la plantilla. Deshabilita esta opción si usas un editor visual.');
define('_SETTINGS_KEYEXPIRY', 'Tiempo límite para las authkeys en segundos (por defecto: 0)');

define('_SETTINGS_LANGDETECTBROWSER','Lenguaje del explorador');
define('_SETTINGS_LANGDETECTOFF','Sin detección');
define('_SETTINGS_LOCALEFORMAT','Formato de hora local');
define('_SETTINGS_LOGALLERRORS','Registrar todos los avisos, advertencias y errores');
define('_SETTINGS_LOGERRORSONLY','Registrar errores reales solamente');
define('_SETTINGS_LOGFILEPERMODULE','Escribir a un archivo específico para cada módulo');
define('_SETTINGS_LOGNOERRORS','No registrar ningún error');

define('_SETTINGS_MESSAGEMODULE', 'Módulo usado para mensajería privada'); 
define('_SETTINGS_MESSAGEMODULE_NONE', 'Sin mensajería privada');
define('_SETTINGS_METAKEYWORDS','Meta-keywords');
define('_SETTINGS_METATAGSETTINGS', 'Ajustes de Meta-Etiquetas');
define('_SETTINGS_MISCSETTINGS', 'Ajustes miscelaneos');
define('_SETTINGS_MLOPT', 'Localización');
define('_SETTINGS_MLSETTINGS', 'Configuración de Localización');

define('_SETTINGS_OTHERSEC', 'Opciones del Servidor');
define('_SETTINGS_COOKIES', 'Configuración de las Cookies');

define('_SETTINGS_PASSBYMAIL','(Enviar la contraseña a los usuario por correo electrónico después de registrarse)');
define('_SETTINGS_PHPSYSTEMLOG', 'Usar el sistema de registro de PHP configurado en el php.ini');
define('_SETTINGS_PROFILEMODULE', 'Módulo usado para administrar los perfiles de usuario'); 
define('_SETTINGS_PROFILEMODULE_NONE', 'Sin perfiles de usuario');

define('_SETTINGS_REFERERONPRINT','Verificar referencia en las páginas imprimibles');

define('_SETTINGS_SAFEHTMLWARNING', 'Advertencia! El uso del <a href="%url%">filtro de salida SafeHTML</a> anulará los ajustes de algunas etiquetas HTML (ej. object y embed)');
define('_SETTINGS_SECHIGH','Alta (cerrar sesión después de X mins de inactividad)');
define('_SETTINGS_SECINACTIVELENGTH','Sesión expira despues de');
define('_SETTINGS_SECINACTIVETXT','minutos de inactividad');
define('_SETTINGS_SECLEVEL','Nivel de seguridad');
define('_SETTINGS_SECLOW','Baja (permanece en el sistema hasta que el usuario cierre sesión)');
define('_SETTINGS_SECMEDIUM','Media (cerrar sesión despues de X mins de inactividad a menos que use \'Recordarme\')');
define('_SETTINGS_SECMEDLENGTH','Automaticamente cierra sesión después de');
define('_SETTINGS_SECMEDTXT','días (si usa \'Recordarme\')');
define('_SETTINGS_SECOPT','Seguridad');
define('_SETTINGS_SELLANGUAGE','Lenguaje por defecto a usar en el sitio');
define('_SETTINGS_SESSIONIPCHECK', 'Verificar IP en las sesiones (podría no trabajar correctamente para usuarios AOL)');
define('_SETTINGS_SESSIONNAME', 'Nombre de la cookie de sesión');
define('_SETTINGS_SESSIONNAMEWARNING', 'Advertencia! Si cambias el \'Nombre de la cookie de sesión\', se cerrará la sesión de todos los usuarios en línea automáticamente, y tendrán que volver a iniciar sesión.');
define('_SETTINGS_SESSIONPATHNOTWRITABLE', 'Ruta de los archivos de sesiones no es escribible!');
define('_SETTINGS_SESSIONREGENERATE', 'Regenerar ID de sesión al iniciar/cerrar sesión');
define('_SETTINGS_SESSIONRANDREGENERATE', 'Periodicamente regenerar ID de sesión');
define('_SETTINGS_SESSIONREGENERATEFREQ', 'Probabilidad de regeneración');
define('_SETTINGS_SESSIONREGENERATEFREQ_RATIO', '% (0 para deshabilitar)');
define('_SETTINGS_SESSIONS', 'Configuración de las Sesiones');
define('_SETTINGS_SESSIONSAVEPATH', 'Ruta para grabar los archivos de sesión');
define('_SETTINGS_SESSIONSAVEPATHTIP', 'Recordatorio: Si cambias el \'Lugar para guardar sesiones\' a \'Archivo\' entonces debes el campo \'Ruta para grabar los archivos de sesión\'. La ruta debe ser escribible.');
define('_SETTINGS_SHORTURLS', 'Configuración de URLs cortas');
define('_SETTINGS_SHORTURLSDIRECTORY', 'Directorio');
define('_SETTINGS_SHORTURLSENABLE', 'Habilitar URLs cortas');
define('_SETTINGS_SHORTURLSFILE', 'Archivo');
define('_SETTINGS_SHORTURLSHTACCESS', 'Importante! debes poner el archivo \'.htaccess\' correspondiente en la raiz del sitio si tienes el \'Tipo de URL generadas\' en \'Archivo\', o si pusiste \'Si\' en \'Quitar el punto de entrada de las URL tipo Directorio\' o si es usado un separador en el título del PermaLink. Copias de cada .htaccess puedes encontrarlas en la carpeta docs.');
define('_SETTINGS_SHORTURLSNOTE', "Tip: Si corres PHP como CGI, tienes que asegurarte que la línea 'cgi.fix_pathinfo = 0' está presente en la configuración de tu archivo php.ini para que las URLs cortas funcionen correctamente.");
define('_SETTINGS_SHORTURLSSTRIPENTRYPOINT', 'Quitar el punto de entrada de las URL tipo Directorio');
define('_SETTINGS_SHORTURLSTYPE', 'Tipo de URLs generadas');
define('_SETTINGS_SHORTURLS_DEFAULTMODULE', 'Módulo a usar cuando el permalink no contiene el nombre del módulo'); 
define('_SETTINGS_SHORTURLS_EXTENSION', 'Extensión para URLs tipo Archivo');
define('_SETTINGS_SHORTURLS_NODEFAULTMODULE', 'Sin módulo predeterminado'); 
define('_SETTINGS_SHORTURLS_SEPARATOR', 'Separador para los títulos de los permalink');
define('_SETTINGS_SHOWALLERRORS','Mostrar todos los avisos, advertencias y errores - sólo disponible en sistemas en desarrollo');
define('_SETTINGS_SHOWERRORSONLY','Mostrar sólo errores reales');
define('_SETTINGS_SHOWNOERRORS','Suprimir todos los errores');
define('_SETTINGS_SIGNCOOKIES', 'Firmar cookies');
define('_SETTINGS_SIGNINGKEY', 'Llave de la forma');
define('_SETTINGS_SINGLELOGFILE','Escribir en un archivo de registro global');
define('_SETTINGS_SITECONFIG','Paneles para Ajustes Globales');
define('_SETTINGS_SITELOGO','Logo del Back-end');
define('_SETTINGS_SITENAME', 'Nombre del Sitio');
define('_SETTINGS_SITEOFF', 'Deshabilitar sitio');
define('_SETTINGS_SITEOFFREASON', 'Razón(es) para deshabilitar el sitio');
define('_SETTINGS_SITESECUREURL','Nombre de servidor seguro');
define('_SETTINGS_SITESECUREURL1','Recordatorio: Si usas un nombre de servidor diferente para sesiones seguras HTTPS e insertas una dirección en el campo \'SNombre de servidor seguro\' box, asegurate de incluir una barra diagonal (\'/\') al final de la dirección.');
define('_SETTINGS_SITESLOGAN','Línea de descripción');
define('_SETTINGS_STARTARGS', 'Argumentos de la función inicial');
define('_SETTINGS_STARTARGSDESCR', '(separados por comas)');
define('_SETTINGS_STARTDATE','Fecha de lanzamiento del sitio');
define('_SETTINGS_STARTFUNC','Función inicial');
define('_SETTINGS_STARTMODULE', 'Configuración de la Página de Inicio');
define('_SETTINGS_STARTPAGE','Módulo inicial');
define('_SETTINGS_STARTPAGEDESCR','(\'index.php\' apunta aquí)');
define('_SETTINGS_STARTPAGE_NOMODULE', 'Sin módulo de inicio (estática)'); 
define('_SETTINGS_STARTTYPE', 'Tipo de la función inicial');

define('_SETTINGS_TIMEZONEOFFSET', 'Zona horaria de los usuarios no registrados');
define('_SETTINGS_TIMEZONESERVER', 'Zona horaria del servidor');

define('_SETTINGS_USECOMPRESSION','Activar compresión');
define('_SETTINGS_USERCONFIGURATION', 'Configuración de usuario');

define('_SETTINGS_WHERETOSAVE', 'Guardar sesiones en');
define('_SETTINGS_WHERETOSAVETXT1', "Si cambias esta opción, tu sesión será cerrada inmediatamente y tendrás que iniciar sesión nuevamente.");

