<?php
/**
 * Zikula Application Framework
 *
 * @copyright (c) 2001, Zikula Development Team
 * @link http://www.zikula.org
 * @version $Id: admin.php 23002 2007-10-16 12:02:13Z markwest $
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 * @package Zikula_System_Modules
 * @subpackage Theme
*/

/**
 * translated by
 * @author Mateo Tibaquira [mateo]
 */

// general
define('_THEME_ENGINE', 'Motor de Themes Xanthia');

// singular/plural
define('_THEME_PAGECONFIGURATION' , 'Configuración de página');
define('_THEME_PAGECONFIGURATIONS' , 'Configuraciones de página');
define('_THEME_PAGECONFIGURATIONASSIGNMENT' , 'Asignación de Configuración de Página');
define('_THEME_PAGECONFIGURATIONASSIGNMENT_LC', 'asignación de la configuración de página');
define('_THEME_PAGECONFIGURATIONASSIGNMENTS' , 'Asignaciones de las configuraciones de página');
define('_THEME_PALETTE', 'Paleta');
define('_THEME_THEME', 'Theme');
define('_THEME_THEME_LC', 'theme');
define('_THEME_THEMES', 'Themes');
define('_THEME_VARIABLE', 'Variable');

// nav menu
define('_THEME_NEW_DISABLED', 'La creación del Theme creation está deshabilitada porque la carpeta no es escribible');
define('_THEME_REGENERATE', 'Regenerar lista de themes');
define('_THEME_VIEWTHEMES', 'Ver themes');
define('_THEME_CREATETHEME', 'Crer theme');
define('_THEME_MODIFYTHEME', 'Modicar theme');
define('_THEME_DELETETHEME', 'Borrar theme');
define('_THEME_CONFIRMDELETETHEME', 'Realmente quieres borrar este theme?');
define('_THEME_CREATEPAGECONFIGURATIONASSIGNMENT', 'Crear asignación de configuración de página');
define('_THEME_MODIFYPAGECONFIGURATIONASSIGNMENT', 'Modificar asignación de configuración de página');
define('_THEME_MODIFYPAGECONFIGURATION', 'Modificar configuración de página');
define('_THEME_DELETEPAGECONFIGURATIONASSIGNMENT', 'Borrar asignación de configuración de página');
define('_THEME_CONFIRMDELETEPAGECONFIGURATIONASSIGNMENT', 'Realmente quieres borrar esta asignación de configuración de página?');
define('_THEME_CREATEPALETTE', 'Crer nueva paleta');
define('_THEME_ADDNEWVARIABLE', 'Añadir nueva variable del theme');


// status/error messages
define('_THEME_UNABLETODELETEFILES', 'Los archivos del theme no pueden ser borrados porque el sistema no tiene permisos de escritura en la carpeta themes y/o a la carpeta themes/%themedirectory%.');
define('_THEME_CACHE_CLEARED', 'Caché vaciado');
define('_THEME_COMPILED_CLEARED', 'Las plantillas compiladas han sido borradas');
define('_THEME_COULDNOTINCLUDE', 'No se pudo incluir el archivo de versión del theme: %file%');
define('_THEME_DEFAULTCHANGED', 'Theme por defecto cambiado');
define('_THEME_ERRORDELETINGTHEMEFILES', 'Un error ocurrió mientras se intentaba borrar los archivos del theme en el sistema de ficheros, por favor borralos usando tu cliente FTP favorito.');
define('_THEME_FAILEDCREATECONFIGDIR', 'Falla creando la carpeta de configuración del theme');
define('_THEME_FAILEDTOOPENFILEFORWRITING', 'Falla al tratar de abrir archivo para escribir: %file%');
define('_THEME_FAILEDTOWRITETOFILE', 'Falla al escribir al archivo: %file%');
define('_THEME_INCORRECTTYPE', 'Este theme no puede ser actualizado porque no es un theme Xanthia 2');
define('_THEME_REGENERATED', 'Lista de themes regenerada');
define('_THEME_SETTINGSUPDATED', 'Configuración actualizada');
define('_THEME_THEMEDIRMUSTBEWRITABLE', 'La carpeta del Theme debe ser escribible');
define('_THEME_THEMEFILESDELETED', 'Archivos del theme han sido eliminados exitosamente del sistema de archivos.');
define('_THEME_UNDEFINEDBLOCKPOSITIONS', '<p>Las siguientes posiciones de bloques, usados por esta configuración de página, no están definifas en el módulo de Bloques;</p>%p%<p>Click en una posición de bloques para crearla.</p>');
define('_THEME_UPGRADED', 'Theme actualizado');

// view template
define('_THEME_AVAILABLETHEMES', 'Themes disponibles');
define('_THEME_CREDITS', 'Créditos');
define('_THEME_DEFAULT', 'Theme por defecto');
define('_THEME_SETASDEFAULT', 'Poner como predeterminado');
define('_THEME_UPGRADE', 'Actualizar');

// modify config
define('_THEME_ALLOWUSERSTOCHANGE', 'Permitirle a los usuarios cambiar el theme');
define('_THEME_CACHETIME','Cantidad de tiempo a cachear las páginas');
define('_THEME_CACHETIMENOTE1', 'Un tiempo de caché de 0 siempre se regenerará - equivalente a no tener caché.');
define('_THEME_CACHETIMENOTE2', ' Un tiempo de caché de -1 hará que las páginas cacheadas nunca expiren');
define('_THEME_CACHINGOPTONS', 'Caché');
define('_THEME_COMPILATIONOPTONS', 'Compilación');
define('_THEME_DELETECACHEDTEMPLATES', 'Borrar plantillas cacheadas');
define('_THEME_DELETECOMPILEDTEMPLATES', 'Borrar plantillas compiladas');
define('_THEME_FILTEROPTIONS', 'Filtros');
define('_THEME_FORCETEMPLATECHECK', 'Forzar recompilación de plantillas');
define('_THEME_GENERALSETTINGS', 'Ajustes Generales');
define('_THEME_MAXSIZEDEFAULTHINT', '(por defecto: 30)');
define('_THEME_MAXSIZEFORLINKS', 'Limitar texto de enlaces a x Bytes');
define('_THEME_MAKEURLSCLICKABLE', 'Hacer las urls clickeables');
define('_THEME_NOCACHE', 'Módules a excluir del caché');
define('_THEME_SELECTIONOPTONS', 'Selección de theme');
define('_THEME_TEMPLATECHECK','Verificar versiones actualizadas de las plantillas');
define('_THEME_TRIMWHITESPACE', 'Usar el filtro de salida trimwhitespace');
define('_THEME_USECACHE','Habilitar caché');

// new template
define('_THEME_2COLLEFT', '2 columnas - menú izquierdo');
define('_THEME_2COLRIGHT', '2 columnas - menú derecho');
define('_THEME_3COL', '3 columnas - menus en los flancos');
define('_THEME_ADMINTHEME', 'Theme de admin');
define('_THEME_ADMINTHEMENOTE', 'Themes usados para mostrar el panel de administración');
define('_THEME_CONFIRMDELETEFILES', 'Borrar los archivos del theme si es posible');
define('_THEME_DISPLAYNAME', 'Nombre público');
define('_THEME_LAYOUT', 'Diseño');
define('_THEME_LAYOUTSBLUEROBOT', 'Diseños desde el <a href="http://www.bluerobot.com/web/layouts/">Depósito de diseños</a> en <a href="http://www.bluerobot.com/">BlueRobot.com</a>.');
define('_THEME_NOLAYOUT', 'Plantilla vacía');
define('_THEME_SYSTEMTHEME', 'Theme del sistema');
define('_THEME_SYSTEMTHEMENOTE', 'Themes usados para los servicios del backend (ej. RSS)');
define('_THEME_USERTHEME', 'Theme de usuarios');
define('_THEME_USERTHEMENOTE', 'Themes seleccionable por los usuarios que ven el sitio');

// modify menu template
define('_THEME_PALETTES', 'Paletas de colores');
define('_THEME_SETTINGS', 'Ajustes');
define('_THEME_VARIABLES', 'Variables');

// pageconfigurations templates
define('_THEME_ADMINPAGES', 'Admin pages');
define('_THEME_BLOCKINSTANCETEMPLATES', 'Plantillas para instancias de Bloques');
define('_THEME_BLOCKPOSITIONTEMPLATES', 'Plantillas para posiciones de Bloques');
define('_THEME_BLOCKTYPETEMPLATES', 'Plantillas para tipos de Bloques');
define('_THEME_BLOCKWRAPPER', 'Mostrar DIVision contenedora de bloque');
define('_THEME_CONFIGURATIONEXISTS', 'Existe el archivo de configuración?');
define('_THEME_CONFIGURATIONEXISTSNOTE', 'Cualquier archivo de configuración que no exista necesita ser creado en <em>%path%</em>.');
define('_THEME_CONFIGURATIONFILE', 'Archivo de configuración');
define('_THEME_CONFIGURATIONNAME', 'Nombre');
define('_THEME_CUSTOMARGSNOTE', 'Lista de argumentos encontrados en la URL de la página separados por /.');
define('_THEME_DEFAULTTEMPLATE', 'Plantilla por defecto');
define('_THEME_BLOCKTEMPLATE', 'Plantilla de Bloque');
define('_THEME_HOMEPAGE', 'Homepage');
define('_THEME_MASTER', 'Master');
define('_THEME_MODULEWRAPPER', 'Mostrar DIVision contenedora de módulo');
define('_THEME_PAGEPALETTE', 'Paleta');
define('_THEME_PAGESETTINGS', 'Configuración de página');
define('_THEME_PAGETEMPLATE', 'Plantilla de página');
define('_THEME_UNTITLEDBLOCK', 'Bloque sin título de tipo %k%, ID %b%');

// set as default template
define('_THEME_SETDEFAULT', 'Establecer como theme por defecto');
define('_THEME_DEFAULTNOTE', 'Esto establecerá a %t% como el theme activo para todos los usuarios de tu sitio!');
define('_THEME_RESETUSERSELECTED', 'Restaurar sobre-escritura del theme preferido por el usuario');

// colour palettes
define('_THEME_PALETTE_ALLREQUIRED', 'Please ensure that you input all single fields, otherwise your palette can not be saved.');

// theme types
define('_THEME_AUTOTHEME', 'Autotheme');
define('_THEME_LEGACY', 'Legado');
define('_THEME_OLDXANTHIA', 'Xanthia 2.0');
define('_THEME_XANTHIA', 'Xanthia 3.0');

// theme version file parameters
define('_THEME_AUTHOR', 'Autor');
define('_THEME_CHANGELOG', 'RegistroCambios');
define('_THEME_CONTACT', 'Contacto');
define('_THEME_DIRECTORY', 'Carpeta');
define('_THEME_HELP', 'Ayuda');
define('_THEME_LICENSE', 'Licencia');
define('_THEME_OFFICIAL', 'Oficial');
define('_THEME_REGID', 'ID de Registro');
define('_THEME_STATE', 'Estado');
define('_THEME_TYPE', 'Tipo');
define('_THEME_VERSION', 'Versión');
define('_THEME_XHTML', 'XHTML válido');
