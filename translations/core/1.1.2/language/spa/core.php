<?php
/**
 * Zikula Application Framework
 *
 * @copyright (c) 2001, Zikula Development Team
 * @link http://www.zikula.org
 * @version $Id: core.php 22926 2007-10-10 07:32:28Z markwest $
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 */

// date and time defines
define('_DATE','Fecha');
define('_DATEBRIEF',' %d de %b/%Y');
define('_DATELONG','%A, %d de %B, %Y');
define('_DATESTRING','%A, %B %d @ %H:%M:%S');
define('_DATESTRING2', '%A, %B %d');
define('_DATETIMEBRIEF','%d de %b de %Y - %I:%M %p');
define('_DATETIMELONG','%A, %d de %B, %Y - %I:%M %p');
define('_DATEINPUT', '%Y-%m-%d'); // Dateformat for input fields (parsable - do not try other formats!)
define('_DATETIMEINPUT', '%Y-%m-%d %H:%M'); // Date+time format for input fields (parsable - do not try other formats!)
define('_DATEFIRSTWEEKDAY', 0); // 0 = Sunday, 1 Monday and so on
define('_DAY_OF_WEEK_LONG','Domingo Lunes Martes Miércoles Jueves Viernes Sábado');
define('_DAY_OF_WEEK_SHORT','Dom Lun Mar Mie Jue Vie Sab');
define('_MONTH_LONG','Enero Febrero Marzo Abril Mayo Junio Julio Agosto Septiembre Octubre Noviembre Diciembre');
define('_MONTH_SHORT','Ene Feb Mar Abr May Jun Jul Ago Sep Oct Nov Dic');
define('_TIME', 'Hora');
define('_TIMEBRIEF','%I:%M %p');
define('_TIMELONG','%T %p');
define('_TIMEFORMAT', 12);  // use 12/24 depending on country
define('_SECOND', 'segundo');
define('_SECONDS', 'segundos');
define('_MINUTE', 'minuto');
define('_MINUTES', 'minutos');
define('_DAY', 'día');
define('_DAYS', 'días');
define('_WEEK', 'semana');
define('_WEEKS', 'semanas');
define('_MONTH', 'mes');
define('_MONTHS', 'meses');
define('_YEAR', 'año');
define('_YEARS', 'años');
define('_NOTAVALIDCATEGORY', 'Categoría no válida');
define('_NOTAVALIDDATE', 'Fecha no válida');
define('_NOTAVALIDINT', 'Entero no válido');
define('_NOTAVALIDNUMBER', 'Número inválido');
define('_NOTAVALIDEMAIL', 'Correo electrónico no válido');
define('_NOTAVALIDURL', 'URL no válida');

// time zone defines
define('_TIMEZONES','GMT-12 GMT-11 HST GMT-9:30 AKST PST MST CST EST AST GMT-3:30 GMT-3 GMT-2 GMT-1 GMT CET EET GMT+3 GMT+3:30 GMT+4 GMT+4:30 GMT+5 GMT+5:30 GMT+5:45 GMT+6 GMT+6:30 GMT+7 AWST ACDT JST ACST AEST GMT+11 GMT+11:30 GMT+12 GMT+12:45 GMT+13 GMT+14');
define('_TZOFFSETS','-12 -11 -10 -9.5 -9 -8 -7 -6 -5 -4 -3.5 -3 -2 -1 0 1 2 3 3.5 4 4.5 5 5.5 5.75 6 6.5 7 8 9 9.5 10 10.5 11 11.5 12 12.75 13 14');

// locale defines
define('_CHARSET','ISO-8859-1');
define('_LOCALE','es_ES');
define('_LOCALEWIN', 'spa');
define('_ERROR_LOCALENOTSET', 'No se pudo establecer localización: %locale%');
define('_PERMLINK_LOCALESEARCH', 'ÀÁÂÃÅàáâãåÒÓÔÕØòóôõøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛùúûÿÑñ');
define('_PERMLINK_LOCALEREPLACE', 'AAAAAaaaaaOOOOOoooooEEEEeeeeCcIIIIiiiiUUUuuuyNn');
define('_ALPHABET', 'A,B,C,D,E,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T,U,V,W,X,Y,Z');

// common footer defines
define('_CMSHOMELINK', '<a href="http://www.zikula.org">Zikula</a>');
define('_XHTMLVALIDATORLINK', '<a href="http://validator.w3.org/check?uri=referer">XHTML</a>');
define('_CSSVALIDATORLINK', '<a href="http://jigsaw.w3.org/css-validator/">CSS</a>');
define('_ISPOWEREDBY', 'es soportado por');

// common words
define('_ZIKULA', 'Zikula');
define('_ALL','Todos');
define('_AND','y');
define('_BY','por');
define('_DOWN','Abajo');
define('_FOR', 'para');
define('_NO','No');
define('_NO_SHORT','N');
define('_OF','de');
define('_OK','OK');
define('_ON','en');
define('_OR', 'o');
define('_TO','A');
define('_UP','Arriba');
define('_URL', 'URL');
define('_YES','Si');
define('_YES_SHORT','S');

// on/off states
define('_ONOFF_ON','Encendido');
define('_ONOFF_OFF', 'Apagado');
define('_OFF_UC','APAGADO');
define('_ON_UC','ENCENDIDO');

// standard permissions levels
define('_ACCESS_ADD','Añadir');
define('_ACCESS_ADMIN','Administrar');
define('_ACCESS_COMMENT','Comentar');
define('_ACCESS_DELETE','Borrar');
define('_ACCESS_EDIT','Editar');
define('_ACCESS_MODERATE','Moderar');
define('_ACCESS_NONE','Ninguno');
define('_ACCESS_OVERVIEW','Ver');
define('_ACCESS_READ','Leer');

// extended (pnobjlib) permission levels
define('_PN_TEXT_PERMISSION_BASIC_PRIVATE', 'Privado');
define('_PN_TEXT_PERMISSION_BASIC_GROUP', 'Grupo');
define('_PN_TEXT_PERMISSION_BASIC_PUBLIC', 'Público');
define('_PN_TEXT_PERMISSION_BASIC_USER', 'Usuario');
define('_PN_TEXT_PERMISSION_LEVEL_NONE', 'Ninguno');
define('_PN_TEXT_PERMISSION_LEVEL_READ', 'Leer');
define('_PN_TEXT_PERMISSION_LEVEL_WRITE', 'Escribir');
define('_PN_TEXT_NOAUTH_NONE', 'No tienes derechos para Acceder a este módulo.');
define('_PN_TEXT_NOAUTH_OVERVIEW', 'No tienes derechos para Ver este módulo.');
define('_PN_TEXT_NOAUTH_READ',  'No tienes derechos para Leer este módulo.');
define('_PN_TEXT_NOAUTH_COMMENT', 'No tienes derechos para Comentar en este módulo.');
define('_PN_TEXT_NOAUTH_MODERATION', 'No tienes derechos para Moderar en este módulo.');
define('_PN_TEXT_NOAUTH_EDIT', 'No tienes derechos para Editar en este módulo.');
define('_PN_TEXT_NOAUTH_ADD', 'No tienes derechos para Añadir en este módulo.');
define('_PN_TEXT_NOAUTH_DELETE', 'No tienes derechos para Borrar en este módulo.');
define('_PN_TEXT_NOAUTH_ADMIN', 'No tienes derechos para Administrar este módulo.');

// common actions & results
define('_ACTIONS', 'Acciones');
define('_ACTION', 'Acción');
define('_ACTIVATE','Activar');
define('_ACTIVE','Activo');
define('_ACTIVATED', 'Activado');
define('_ADD','Añadir');
define('_BACK', 'Volver');
define('_CANCEL', 'Cancelar');
define('_CLEAR', 'Limpiar');
define('_CLOSE', 'Cerrar');
define('_CONFIRM', 'Confirmar');
define('_CONTINUE', 'Continuar');
define('_COMMIT', 'Actualizar');
define('_COPY', 'Copiar');
define('_CREATE', 'Crear');
define('_DEACTIVATE','Desactivar');
define('_DEACTIVATED', 'Desactivado');
define('_DEFAULT', 'Por defecto');
define('_DEFAULTS', 'Por defecto');
define('_DELETE','Borrar');
define('_DETAILS', 'Detalles');
define('_EDIT','Editar');
define('_FILTER', 'Filtrar');
define('_FORWARD', 'Avanzar');
define('_HELP', 'Ayuda');
define('_HELPPAGE', 'Página de Ayuda');
define('_MESSAGESYOUMIGHTSEE', 'Los mensajes que podrías ver');
define('_CONFIRMATIONPROMPT', 'Confirmación');
define('_IGNORE','Ignorar');
define('_INACTIVE','Inactivo');
define('_LOGIN','Iniciar sesión');
define('_LOGIN_FLC','Iniciar Sesión');
define('_LOGOUT','Cerrar sesión');
define('_MODIFY','Modificar');
define('_MOVE', 'Mover');
define('_NEW','Nuevo');
define('_NEXT', 'Siguiente');
define('_OPEN', 'Abrir');
define('_PREVIOUS', 'Anterior');
define('_REMOVE', 'Remover');
define('_RESET', 'Restaurar');
define('_SAVE', 'Grabar');
define('_SEARCH', 'Buscar');
define('_STATE','Estado');
define('_SUBMIT','Enviar');
define('_UPDATE', 'Actualizar');
define('_VIEW', 'Ver');

//common module names
define('_COMMENTS', 'Comentarios');
define('_DOWNLOADS', 'Descargas');
define('_SUBMITNEWS', 'Enviar artículo');
define('_USERSMANAGER', 'Administrador de Usuarios');
define('_WEB_LINKS', 'Enlaces Web');

//common module fields
define('_PROPERTIES', 'Propiedades');
define('_CONTENT', 'Contenido');
define('_DESCRIPTION', 'Descripción');
define('_EMAIL' ,'Correo electrónico');
define('_ID', 'ID');
define('_LANGUAGE', 'Lenguaje');
define('_META', 'Meta datos');
define('_META_FLC', 'Meta Datos');
define('_NAME', 'Nombre');
define('_OPTIONAL', 'Opcional');
define('_OPTIONS', 'Opciones');
define('_PASSWORD', 'Contraseña');
define('_REQUIRED', 'Requerido');
define('_TITLE', 'Título');
define('_USERID', 'ID Usuario');
define('_USERNAME' ,'Nombre Usuario');
define('_USERNAME_FLC', 'Nombre usuario');
define('_VALUE', 'Valor');
define('_LINKSPERPAGE', 'Enlaces por página');

// permalinks system
define('_PERMALINKS', 'PermaLinks');
define('_PERMALINKTITLE', 'Título en la URL para el PermaLink');
define('_PERMALINKTITLEBLANK', '(Vacío = auto-generar)');
define('_PURGEPERMALINKS', 'Purgar PermaLinks');
define('_PURGEPERMALINKSSUCCESFUL', 'Los permalinks fueron purgados exitosamente');
define('_PURGEPERMALINKSFAILED', 'La purga de permalinks falló');
define('_ADDCATEGORYTITLETOPERMALINK', 'Añadir título de categoría al PermaLink');

// member descriptors
define('_GUEST','usuario anónimo');
define('_GUEST0','usuarios anónimos');
define('_GUESTS','usuarios anónimos');
define('_MEMBER','usuario registrado');
define('_MEMBER0','usuarios registrados');
define('_MEMBERS','usuarios registrados');

// member states
define('_ONLINE','en línea');
define('_OFFLINE','desconectado');

// common zikula terms
define('_BLOCK' ,'Bloque');
define('_BLOCKS' ,'Bloques');
define('_CUSTOMARGS', 'Argumentos personalizados');
define('_FUNCTIONTYPE', 'Tipo de función type');
define('_FUNCTIONTYPES', 'Tipo(s) de función');
define('_FUNCTION', 'Función');
define('_FUNCTIONS', 'Funciones');
define('_HOOK', 'Hook');
define('_HOOKS', 'Hooks');
define('_LEGACY', 'Legado');
define('_MODULE', 'Módulo');
define('_MODULES', 'Módulos');
define('_PARAMETERS', 'Parámetros');
define('_PLUGIN', 'Plugin');
define('_PLUGINS', 'Plugins');
define('_PROFILE', 'Personal Info');
define('_TEMPLATE', 'Plantilla');
define('_TEMPLATES', 'Plantillas');
define('_THEME', 'Theme');
define('_THEMES', 'Themes');

// other common terms
define('_DIRECTORY', 'Directorio');
define('_POWEREDBY', 'Soportado por');
define('_VERSION', 'Versión');
define('_COPYRIGHT', 'Copyright');
define('_VALIDXHTML', 'XHTML válido');
define('_VALIDCSS', 'CSS válido');
define('_MOREINFOHERE_LC', 'más información aquí');
define('_MOREINFOHERE_UC', 'Más información aquí');
define('_PERMITTEDHTMLTAGSREMINDER', 'Etiquetas HTML permitidas:');
define('_PERMITTEDHTMLTAGSSHORTREMINDER', 'HTML permitido');
define('_PUNC_PERIOD', '.');
define('_PUNC_COLON', ':');
define('_PUNC_SEMICOLON', ';');
define('_PUNC_QUESTIONMARK', '?');
define('_PUNC_OPENPARENTHESIS','(');
define('_PUNC_CLOSEPARENTHESIS', ')');
define('_PUNC_OPENDOUBLEQUOTE', '"');
define('_PUNC_CLOSEDOUBLEQUOTE', '"');
define('_PUNC_OPENSINGLEQUOTE', '\'');
define('_PUNC_CLOSESINGLEQUOTE', '\'');


// module system
define('_BADAUTHKEY', '\'authkey\' no válida:  esto probablemente significa que has presionado el botón \'Atras\', o que el \'authkey\' de la página ha expirado. Por favor actualiza la página y vuelve a intentarlo.');
define('_CANCELDELETE', 'Cancelar la eliminación del elemento.');
define('_CANCELEDIT', 'Cancelar la edición del elemento.');
define('_CONFIGUPDATED', 'Hecho! Configuración del módulo actualizada.');
define('_CONFIGUPDATEFAILED', 'Error! No se pudo actualizar la configuración del módulo.');
define('_CONFIRMDELETE', 'Confirmar borrado?');
define('_CONFIRMDELETEITEM', 'Realmente desea borrar %i%?');
define('_CREATEDBY', 'Creado por %username%');
define('_CREATEDBYON', 'Creado por %username% en %date%');
define('_CREATEDON', 'Creado el %date%');
define('_CREATEITEM', 'Crear %i%');
define('_CREATEFAILED','Error! Intento de creación fallido.');
define('_CREATEINDEXFAILED', 'Error! Creación de índice fallido.');
define('_CREATEITEMSUCCEDED','Hecho! %i% creado.');
define('_CREATESUCCEDED','Hecho! Elemento creado.');
define('_CREATETABLEFAILED','Error! Creación de tabla fallida.');
define('_DELETEITEM', 'Borrar %i%');
define('_DELETEFAILED','Error! Intento de borrado fallido.');
define('_DELETEITEMSUCCEDED','Hecho! %i% borrado.');
define('_DELETESUCCEDED','Hecho! Elemento borrado.');
define('_DELETETABLEFAILED','Error! Eliminación de tabla fallida.');
define('_DROPCOLUMNFAILED', 'Error! Eliminación de columna fallida.');
define('_DROPINDEXFAILED', 'Error! Eliminación de índice fallida.');
define('_FAILEDTOLOADMODULE', 'Error! No se pudo cargar el módulo <strong>%m%<strong>.');
define('_FAILEDTOLOADMODULEATFUNC', 'Error! No se pudo cargar el módulo <strong>%m%</strong> (en la función: <strong>%f%</strong>).');
define('_GETFAILED', 'Error! No se logró cargar los elementos.');
define('_GETITEMSFAILED', 'Error! No se logró cargar %i%.');
define('_GENERALSETTINGS', 'Ajustes generales');
define('_LOADAPIFAILED', 'Error! No se logró cargar el API de módulo.');
define('_LOADFAILED','Error! No se logró cargar el módulo.');
define('_MODARGSERROR','Error! Argumentos erróneos. Por favor verifica los datos e inténtalo de nuevo.');
define('_MODIFYCONFIG', 'Configuración');
define('_MODIFYCONFIGITEM', 'Ajustes para %1%');
define('_MODIFYITEM', 'Editar %i%');
define('_MODULENOAUTH', 'Disculpa! No tienes autorización para ejecutar esa acción en este módulo.');
define('_MODULENODIRECTACCESS', 'Disculpa! Este módulo no puede ser accedido directamente.');
define('_MODULENOTAVAILABLE', 'Disculpa! El módulo <strong>%m%</strong> no está disponible.');
define('_MODULERETURNED', 'El módulo <strong>%m%</strong>, la función <strong>%f%</strong> retornó:');
define('_MUSTBENUMERIC', 'El campo \'%s%\' debe ser numérico.');
define('_NEWITEM', 'Crear %i%');
define('_NOITEMSFOUND', 'No se encontraron elementos.');
define('_NOFOUND', 'No se encontraron %i%.');
define('_NOSUCHITEM', 'No se encontró tal elemento.');
define('_NOSUCHITEMFOUND', 'No se encontró tal %i%.');
define('_REGISTERFAILED', 'Error! Registro de hook fallido.');
define('_RENAMECOLUMNFAILED', 'Error! Renombramiento de columna fallido.');
define('_RENAMETABLEFAILED', 'Error! Renombramiento de tabla fallido.');
define('_SEARCHITEMS', 'Buscar %i%');
define('_SEARCHRESULTSFOUND', '%x% resultado(s) encontrado(s).');
define('_SEARCHRESULTSNOITEMSFOUND', 'No se encontraron %i%.');
define('_TEMPLATENOTAVAILABLE', 'En el módulo %m%, no se encontró la plantilla %t%');
define('_TRANSACTIONFAILED', 'Transacción fallida ... Revirtiendo!');
define('_UNABLETOLOADCLASS', 'Error! No se pudo cargar la clase [%s]');
define('_UNABLETOLOADMODULECLASS', 'Error! No se pudo cargar la clase [%s] del módulo [%s]');
define('_UNABLETOLOADMODULEARRAYCLASS', 'Error! No se pudo cargar la clase [%s] del módulo [%s]');
define('_UNKNOWNFUNC', 'Error! Llamada de función desconocida:');
define('_UNKNOWNUSER', 'usuario desconocido');
define('_UNREGISTERFAILED', 'Error! No se logró desregistrar hook.');
define('_UPDATEITEM', 'Actualizar %i%');
define('_UPDATECONFIG', 'Actualizar Configuración');
define('_UPDATEDBY', 'Última actualización por %username%');
define('_UPDATEDBYON', 'Última actualización por %username% el %date%');
define('_UPDATEDON', 'Actualizado en %date%');
define('_UPDATEFAILED','Error! Intento de actualización fallido.');
define('_UPDATETABLEFAILED','Error! Actualización de tabla fallida.');
define('_UPDATEITEMSUCCEDED','Hecho! Actualización de %i% exitosa.');
define('_UPDATESUCCEDED','Hecho! Elemento actualizado.');
define('_VIEWCONFIG', 'Ver Configuración');
define('_VIEWITEMS', 'Lista de %i%');

// Central administration define
define('_ADMINMENU','Interfaz de Administración');

// defines for the pager plugin
define('_FIRSTPAGE', 'Primera');
define('_FIRSTPAGE_TITLE', 'Primerá página');
define('_ITEMSPERPAGE', 'Elementos por página');
define('_PREVIOUSPAGE', 'Anterior');
define('_PREVIOUSPAGE_TITLE', 'Página anterior');
define('_LASTPAGE', 'Última');
define('_LASTPAGE_TITLE', 'Última página');
define('_NEXTPAGE', 'Siguiente');
define('_NEXTPAGE_TITLE', 'Siguiente página');
define('_NONEXTPAGE', 'No hay más páginas');
define('_NOPREVIOUSPAGE', 'No hay páginas anteriores');
define('_PAGE', 'Página');
define('_PERPAGE', '%i% por página');
define('_TOTAL', 'Total');

// WorkflowUtil
define('_WF_STATEERROR', 'Error de Estado de Workflow');

// Form utilities
define('_PNFORM_MANDATORYERROR', 'Una entrada en este campo es obligatoria.');
define('_PNFORM_MANDATORYSELECTERROR', 'Una selección aquí es obligatoria.');
define('_PNFORM_MAXLENGTHERROR', 'Ingrese un texto de no más de %s caractéres.');
define('_PNFORM_SELECTDATE', 'Seleccione la fecha');
define('_PNFORM_RANGEERROR', 'El valor no está en un rango aceptable.');
define('_PNFORM_RANGEMINERROR', 'El valor debe ser %i% o mayor.');
define('_PNFORM_RANGEMAXERROR', 'El valor debe ser %i% o menor.');
define('_PNFORM_UPLOADERROR', 'Error subiendo archivo.');

// categories system
define('_ALLCATEGORIES', 'Todas');
define('_CATEGORY', 'Categoría');
define('_CATEGORY_LC', 'categoría');
define('_CATEGORIES', 'Categorías');
define('_CATEGORIESMAPPINGS', 'Relaciones Multi-Categoría');
define('_CATEGORIESMAPPINGSCOUNT', 'Número de Relaciones Multi-Categoría');
define('_CHOOSECATEGORY', 'Escoje una categoría');
define('_CHOOSEMODULE', 'Escoje un Módulo');
define('_CHOOSETABLE', 'Escoje una Tabla');
define('_CHOOSEONE', 'Escoje uno');
define('_ENABLECATEGORIZATION', 'Habilitar categorización');
define('_NOASSIGNEDCATEGORIES', 'No hay categorías asignadas');
define('_MODULECATEGORY', 'Categoría de Módulo');
define('_MODULECATEGORY_LC', 'categoría de módulo');
define('_MODULECATEGORIES', 'Categorías de Módulo');
define('_CATEGORIZATION', 'Categorización');

// attributes system
define('_ATTRIBUTE', 'Atributo');
define('_ATTRIBUTES', 'Atributos');
define('_ATTRIBUTE_NEW', 'Nuevo atributo');
define('_ENABLEATTRIBUTION', 'Habilitar atributos');

// 'templates' for error message
define('_ERROR_ADMIN', '%message% %func% archivo %file% en la línea %line% .');

// userlinks plugin
define('_YOURACCOUNT', 'Tu Cuenta');
define('_CREATEACCOUNT', 'Registrar nueva cuenta');

// onlune plugin
define('_CURRENTLYONLINE', 'Actualmente hay %numguests% %gueststext% y %numusers% %userstext% en línea.');

// user welcome plugin
define('_WELCOMEUSER', 'Bienvenido %username%');

// login/logout procedure
define('_UNABLETOSAVELOGINDATE', 'Error! No se logró guardar la fecha de registro de entrada.');
define('_LOGOUTFORCED', 'Tu sesión ha sido cerrada por un administrador. Por favor inicia sesión de nuevo.');

// jscalendar
define('_DATE_SELECTOR', 'Selector de fecha');

// mailer
define('_ERROR_SENDINGMAIL', 'Un error ocurrió mientras se enviaba un email');
define('_ERROR_SENDINGMAIL_ADMINLOG', 'Un error ocurrió mientras se enviaba un email desde %fromname% (%fromaddress%) para %toname% (%toaddress%) con asunto \'%subject\': %errorinfo%');
define('_ERROR_UNKNOWNMAILERERROR', 'error de mailer desconocido');

// module vars
define('_ERROR_NONULLVALUEALLOWED', 'Variables de módulos con valor NULO no son permitidas (%modname%/%varname%)');

// site disabled template
define('_THISSITEDISABLED', 'Este sitio ha sido deshabilitado');
define('_ADMINLOGINREQUIRED', 'Credenciales de administrador requeridas para proceder');
define('_ADMINLOGIN', 'Ingreso de administrador');

// exit functionality
define('_EXITINSTALLERROR', 'Error de instalación:');
define('_EXITHANDLER', 'Gestor de salida: ');
define('_EXITSTACKTRACE', 'Pila de seguimiento:');
