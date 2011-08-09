<?php
/**
 * Zikula Application Framework
 *
 * @copyright (c) 2002, Zikula Development Team
 * @link http://www.zikula.org
 * @version $Id: admin.php 22259 2007-06-25 12:59:35Z markwest $
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 * @package     Zikula_System_Modules
 * @subpackage  Zikula_Admin
 */

/**
 * translated by
 * @author Mateo Tibaquira [mateo]
 */

// general defines
define('_ADMIN', 'Administración');
define('_ADMINPANEL', 'Panel de Administración');
define('_ADMIN_ONLINEMANUAL', 'Ayuda en línea');
define('_ADMIN_TITLE', 'Gestor del panel de administración');
define('_ADMIN_PNSECURITYANALYZER', 'Advertencias del Analizador de Seguridad');
define('_MODULESCATEGORIZATION', 'Categorización de los Módulos');
define('_MODIFYADMINPANELCONFIG', 'Configuración del Panel');
define('_MODULECATEGORIESLISTVIEW', 'Lista de Categorías');
define('_NEWMODULECATEGORY', 'Crear una Categoría');
define('_ADMIN_NEWCATEGORY', 'Nueva Categoría');
define('_ADMIN_EXISTINGCATEGORY', 'Categoría Existente');

// menu
define('_VIEWMODULECATEGORIES', 'Lista de Categorías de Módulos');
define('_ADMIN_MODIFYMODULECATEGORY', 'Modicar categoría de módulos');
define('_ADMIN_CREATEMODULECATEGORY', 'Crear categoría de módulos');
define('_ADMIN_DELETEMODULECATEGORY', 'Borrar categoría de módulos');
define('_ADMIN_CONFIRMDELETEMODULECATEGORY', 'Realmente quieres borrar esta categoría de módulos?');

// error messages
define('_ADMIN_DELETEFAILEDDEFAULT', 'Disculpa! No puedes borrar la categoría por defecto del Panel de Administración.');
define('_ADMIN_DELETEFAILEDSTART', 'Disculpa! No puedes borrar la categoría que se muestra por defecto en el Panel de Administración.');
define('_ADMIN_FAILEDADDMODTOCAT', 'Error! No se pudo añadir un módulo a la categoría.');
define('_ADMIN_NOADMINLINKS', 'Esta categoría de administración está vacía. Probablemente terminaste aquí porque tienes acceso administrativo a un módulo que no está en la categoría por defecto.');

// modify config
define('_ADMIN_GENERALSETTINGS', 'Ajustes generales');
define('_ADMIN_DISPLAYICONS', 'Mostrar íconos');
define('_ADMIN_DISPLAYNAMETYPE', 'Visualización de los nombres de los módulos'); 
define('_ADMIN_DISPLAYNAMETYPE_DISPLAYNAME', 'Nombre público'); 
define('_ADMIN_DISPLAYNAMETYPE_REALNAME', 'Nombre real'); 
define('_ADMIN_DISPLAYNAMETYPE_BOTH', 'Ambos');
define('_ADMIN_IGNOREINSTALLERCHECK', 'Ignorar la verificación del instalador');
define('_ADMIN_IGNOREINSTALLERCHECKWARNING', 'Advertencia! Sólo habilita la opción anterior si este sitio está aislado de Internet, de otro modo la seguridad puede estár comprometida si omites remover el script de Instalación de la raiz del sitio.');
define('_ADMIN_PANELDISPLAYSETTINGS', 'Ajustes de la Pantalla');
define('_ADMIN_MODULESPERPAGE', 'Módulos por página');
define('_ADMIN_MODULESPERROW', 'Módulos por fila');
define('_ADMIN_THEME', 'Theme a usar');
define('_ADMIN_THEMESITE', 'Usar el Theme del sitio');
define('_ADMIN_SKIN', 'Estilos a usar');
define('_ADMIN_STARTCATEGORY', 'Categoría inicialmente seleccionada');
define('_ADMIN_DEFAULTCATEGORY', 'Categoría por defecto para Módulos recien instalados');

/* "Stop" messages following security analyzer check for installer files and PSAK prior to admin panel being displayed */
define('_ADMIN_PSAKWARNING', 'Detente por favor! el Swiss Army Knife (archivo \'psak.php\') está en la raiz del sitio, pero debe ser removido antes de poder acceder al Panel de Administración.');
define('_ADMIN_INSTALLWARNING','Detente por favor! El archivo de instalación \'install.php\' y la carpeta \'install\' están en la raiz del sitio, pero deben ser removidos antes de poder acceder al Panel de Administración.');
define('_ADMIN_UPGRADEWARNING', 'Detente por favor! El script de actualización (archivo \'upgrade.php\') está en la raiz del sitio, pero debe ser removido antes de poder acceder al Panel de Administración.'); 
define('_ADMIN_UPGRADE10XWARNING', 'Detente por favor! El script de actualización (archivo \'upgrade10xto11x.php\') está en la raiz del sitio, pero debe ser removido antes de poder acceder al Panel de Administración.');
 
// Zikula security analyzer defines
define('_ADMIN_UPGRADE_PHP','El archivo de instalación \'upgrade.php\' está en la raiz del sitio, pero debería ser removido.');
define('_ADMIN_UPGRADE10X_PHP','El archivo de instalación \'upgrade10xto11x.php\' está en la raiz del sitio, pero debería ser removido.'); 
define('_ADMIN_CONFIG_PHP','El archivo de configuració­n \'config/config.php\' es escribible, pero debería ser de sólo lectura (644 o 444).');
define('_ADMIN_MAGIC_QUOTES','La directiva PHP \'magic_quotes_gpc\' está en ON, pero debería estar en OFF.');
define('_ADMIN_REGISTER_GLOBALS','La directiva PHP \'register_globals\' está en ON, pero debería estar en OFF.');
define('_ADMIN_PNTEMP_HTACCESS','No está el archivo \'.htaccess\' en la carpeta de temporales (\'/pnTemp\' u otro nombre), pero debería estar presente.');
define('_ADMIN_SAFEHTML', 'El filtro de salida SafeHTML no está habilitado en el módulo Centro de Seguridad, pero preferiblemente debería estarlo.');
define('_ADMIN_SECURITYCENTERNOTINSTALLED', 'El módulo Centro de Seguridad no está instalado, pero preferiblemente debería estarlo.');
define('_ADMIN_SECURITYCENTERNOTENABLED', 'El módulo Centro de Seguridad no está activado, pero preferiblemente debería estarlo.');
define('_ADMIN_LEGACY_MODE','El soporte a módulos antiguos está habilitado, pero preferiblemente debería estar deshabilitado.');

/* Defines for the Admin module's help page (davidnelson) */
define('_ADMINGENERALSETTINGSHELP', 'Actualmente existe sólo una opción en la sección configuración general:');
define('_ADMINDISPLAYSETTINGSHELP', 'Hay seis configuración de la pantalla:');
define('_ADMINCATEGORYCONFIGURATIONHELP', 'En la sección de Categorización de los Módulos, puedes elegir dos cosas:');
define('_ADMIN_DEFAULTCATEGORYEXPLAINED', 'Abra la lista desplegable y elija la categoría en la que se pondrán a todos los módulos recién instalados y activados.');
define('_YOUGETTHEMESSAGE','Ves el mensaje:');
define('_ADMINADDCATEGORYHELP','Te permite agregar una nueva categoría a la lista de pestañas. Tu puedes editar las siguientes:');
define('_ADMINADDCATEGORYHELP1', 'Digita el nombre a ser mostrado en las pestañas de categorías.');
define('_ADMINADDCATEGORYHELP2', 'Digita una descripción informativa a ser mostrada después del nombre d ela categoría, cuando esa categoría sea mostrada en el Panel de Administración.');
define('_ADMINUPDATECATEGORY','Editar');
define('_ADMINUPDATECATEGORYHELP','Te permite editar el nombre y la descripción de una categoría existente.');
define('_ADMINDELETECATEGORY','Borrar');
define('_ADMINDELETECATEGORYHELP','Te permite borrar una categoría del menú de pestañas. Se te pedirá confirmación antes de que se borre la categoría.');
define('_ADMINVIEW','Vista de la lista de categorías');
define('_ADMINVIEWHELP','Muestra la lista de las categorías incluidas en el menú de pestañas. En la columna de \'Acciones\' a la derecha, tu puedes escoger entre editar y borrar una categoría:');
define('_ADMINMODIFYCONFIGHELP','La \'Configuración del Panel\' contiene tres secciones: \'Ajustes generales\', \'Ajustes de la Pantalla\' y \'Categorización de los Módulos\'. Cada una se explica a continuación:');
define('_MODULECATEGORIZATION', 'Selección de las Categorías de Módulos');
define('_ADMIN_DISPLAYICONSEXPLAINED','Cuando se activa, esta opción hace que sean mostrados los íconos gráficos de cada módulo en el Panel de Administración.');
define('_ADMIN_MODULESPERPAGEEXPLAINED','Digita el número total de Módulos a ser mostrados en cada página del Panel de Administración.');
define('_ADMIN_MODULESPERROWEXPLAINED','Digita el número total de Módulos a ser mostrados en cada línea del Panel de Administración.');
define('_ADMIN_THEMEEXPLAINED','Abre la lista desplegable y selecciona el Theme a ser aplicado al Panel de Administración.');
define('_ADMIN_SKINNSEXPLAINED','Abre la lista desplegable y selecciona los Estilos a ser usados en el Panel de Administración.');
define('_ADMIN_STARTCATEGORYEXPLAINED','Abre la lista desplegable y selecciona la categoría a ser mostrada cuando se abra el Panel de Administración por primera vez.');
define('_ADMINIGNOREINSTALLERCHECKHELP','Esta opción te permite deshabilitar la verificación del Analizador de Seguridad para ver si el instalador está en la carpeta raiz de tu sitio. Preferiblemente, deberías dejar esta opción habilitada, pues un fallo de seguridad podría ocurrir fácilmente si se omite eliminar los componentes del instalador después de completar la instalación.');
define('_ADMINSECURITYWARNINGSHELP','En el Panel de Administración, se mostrarán advertencias de seguridad  si el Analizador detecta potenciales vulnerabilidades en la instalación de tu sitio. Si no ves las advertencias quiere decir que no se encontraron vulnerabilidades. Por favor lee la documentación de seguridad para más información relacionada. Debajo están las explicaciones para cada vulnerabilidad posiblemente identificada.');
define('_ADMIN_INSTALLWARNING_HELP','Después de completar el proceso de instalación, es muy importante borrar el archivo instalador \'install.php\' y la carpeta \'install\' de la carpeta raiz del sitio, especificamente si el sitio está disponible en Internet, sino podría haber una violación de seguridad. Si el Analizador detecta esta vulnerabilidad, tienes que removerlos antes de poder acceder al Panel de Administración. Adicionalmente, por favor consulta la documentación para más información acerca de cómo configurar óptimamente el sitio desde el punto de vista de seguridad.');
define('_ADMIN_PSAKWARNING_HELP','La herramienta Swiss Army Knife (un archivo llamado \'psak.php\') es muy útil para resolver ciertos problemas, pero no la debes dejar en ninguna carpeta accesible desde Internet, porque esta deja una oportunidad fácil para violar la seguridad.  Si el Analizador detecta esta vulnerabilidad, debes remover el archivo \'psak.php\' antes de poder acceder al Panel de Administración.');
define('_ADMIN_CONFIG_PHP_HELP','Cuando un sitio es originalmente instalado, el script de Instalación crea un archivo de configuración llamado \'config.php\' que está localizado en el subdirectorio \'config\' dentro de la carpeta raiz del sitio. Este no debe ser dejado con permiso de escritura, porque deja una oportunidad para violar la seguridad. Tu debes ajustar los permisos de ese archivo a sólo lectura (644 o 444). Adicionalmente, por favor consulta la documentación para más información acerca de cómo configurar óptimamente el sitio desde el punto de vista de seguridad.');
define('_ADMIN_LEGACY_MODE_HELP','Tienes la posibilidad de habilitar el soporte para Módulos Zikula antiguos. No obstante, los Módulos antiguos pueden tener agujeros de seguridad que comprometan la seguridad del sitio. Se te recomienda usar sólo versiones actualizadas de los Módulos que son compatibles con el API (Interfaz para Programación de Aplicacion) oficial del proyecto. En este caso, el soporte para módulos antiguos puede ser deshabilitado (esta es la configuración por defecto cuando un sitio es instalado por primera vez).');
define('_ADMIN_MAGIC_QUOTES_HELP','En algunos entornos de alojamiento, la bandera de PHP \'magic_quotes_gpc\' puede estar en ON. No obstante, esto crea una oportunidad para violaciones de seguridad. Si el sitio es accesible desde Internet, se te recomienda asegurarte que \'magic_quotes_gpc\' esté en OFF. Para instrucciones acerca de cómo hacer esto, por favor consulta la documentación de seguridad.');
define('_ADMIN_PNTEMP_HTACCESS_HELP','Si está bien instalado, un sitio incluirá un archivo \'.htaccess\' en la carpeta de archivos temporales (que es llamada \'/pnTemp\', a menos que otro nombre sea utilizado). Sin embargo, algunos métodos usador para transferir los archivos del paquete al espacio web puede dar lugar a este archivo no ha sido transferido. En este caso, se te recomienda crear uno (y asegurarte que el archivo \'.htaccess\' existe en algunas otras carpetas, también). para más información acerca de esto, por favor consulta la documentación de seguridad.');
define('_ADMIN_REGISTER_GLOBALS_HELP','En algunos entornos de alojamiento, la bandera de PHP \'register_globals\' puede estar en ON. Nos obstante, esto puede crear una oportunidad para violaciones de seguridad. Si el sitio es accesible desde Internet, se te recomienda asegurarte que \'register_globals\' esté en OFF. Para instrucciones acerca de cómo hacer esto, por favor consulta la documentación de seguridad.');
define('_ADMIN_SAFEHTML_HELP','El filtro de salida SafeHTML es una característica del Módulo de Centro de Seguridad que mejora la seguridad del sitio, y el Analizador de seguridad ha detectado que no está habilitado. Se te recomienda asegurarte que está habilitado. También verás este mensaje si el Módulo Centro de Seguridad no está instalado o no está habilitado. Para má sinformación acerca de esto, por favor consulta la ayuda en línea del Centro de Seguridad.');
define('_ADMIN_SECURITYCENTERNOTINSTALLED_HELP','Cuando un sitio es originalmente instalado, el Centro de Seguridad está instalado y activado por defecto. Tu verás el mensaje anterior si el Centro de Seguridad ha sido removido. Se te recomienda dejar el Centro de Seguridad instalado, ya que aumenta la seguridad de tu sitio.');
define('_ADMIN_SECURITYCENTERNOTENABLED_HELP','Cuando un sitio es originalmente instalado, el Centor de Seguridad está instalado y activado por defecto. Tu verás el mensaje anterior si el Centro de Seguridad ha sido desactivado. Se te recomienda dejar el Centro de Seguridad activado, ya que aumenta la seguridad de tu sitio.');
define('_ADMIN_UPGRADE_PHP_HELP','El archivo \'upgrade.php\' es usado por el script de Instalación si un sitio Zikula 1.0.x previamente existente es actualizado a una versión más reciente. Una vez que el nuevo sitio está funcionando correctamente, deberías borrar este archivo pues no es requerido más y puede crear una posible violación de seguridad.');
define('_ADMIN_MODULESCATEGORIZATIONEXPLAINED', 'Verás la lista de todos los Módulos actualmente instalados y activados. Abra la lista desplegable junto a cada módulo y elija el módulo de la categoría en la que dicho módulo debe colocarse.');
