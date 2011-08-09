<?php
/**
 * Zikula Application Framework
 *
 * @copyright (c) 2002, Zikula Development Team
 * @link http://www.zikula.org
 * @version $Id$
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 * @package Zikula_System_Modules
 * @subpackage Profile
 */

/**
 * translated by
 * @author Mateo Tibaquira [mateo]
 */

// general
define('_PROFILE_DUD','Gestor de las Cuentas');
define('_MODIFYACCOUNTPANELCONFIG', 'Configuración del Gestor de Cuentas');
define('_NEWPANELCONTROL', 'Crear una Propiedad del Perfil');
define('_ACCOUNTPANELCONTROLSLISTVIEW', 'Lista de Propiedades del Perfil');
define('_DISPLAYSETTINGS', 'Configuración de Pantalla');
define('_PROFILE_CREATEPROPERTY', 'Crear propiedad de cuenta');
define('_PROFILE_VIEWPROPERTIES', 'Ver propiedades');
define('_PROFILE_MODIFYPROPERTY', 'Modificar propiedad');
define('_PROFILE_DELETEPROPERTY', 'Borrar propiedad');
define('_PROFILE_CONFIRMDELETEPROPERTY', 'Realmente quieres borrar esta propiedad?');

// view template
define('_PROFILE_DRAGANDDROPHINT', 'Tip: Puedes arreglar el orden de las propiedades individuales, usando arrastrar y soltar. El orden de visualización será grabado cuando sueltes la propiedad en el lugar deseado.');
define('_PROFILE_NA','N/A');

// modify config template
define('_PROFILE_DISPLAYGRAPHICS', 'Mostrar gráficas en la cuenta de usuario');
define('_PROFILE_ITEMSPERROW','Enlaces por fila');

// new/modify templates
define('_PROFILE_ADDINSTRUCTIONS', 'Recordatorio: Después de crear una nueva etiqueta de propiedad (como _MIETIQUETA), debes crear una definición en \'config/languages/eng/global.php\' para proporcionar un texto a mistrar para la nueva etiqueta. Para _MIETIQUETA, la definición puede ser: define(\'_MIETIQUETA\', \'Mi etiqueta\');');
define('_PROFILE_DISPLAYTYPE', 'Tipo de despliegue');
define('_PROFILE_FIELDCOMBONOTE', 'Recordatorio: Preceda cada opción con @@. Para cajas combo: id1,etiqueta1;id2,etiqueta2;id3,etiqueta3;... Separe cada propiedad individual con un punto y coma (\';\'). Separe el ID y la etiqueta de cada propiedad con una coma (\',\').');
define('_PROFILE_FIELDLABEL_FLC','Etiqueta de la Propiedad');
define('_PROFILE_FIELDLABEL','Etiqueta de la propiedad');
define('_PROFILE_FIELDLENGTH','Longitud');
define('_PROFILE_FIELDTYPE_FLC','Tipo de Dato');
define('_PROFILE_FIELDTYPE','Tipo de dato');
define('_PROFILE_FIELDSTATUS', 'Estado');
define('_PROFILE_FIELDVALIDATION','Reglas de validación');
define('_PROFILE_LISTOPTIONS', 'Lista de contenidos');
define('_PROFILE_STRINGINSTRUCTIONS', 'Recordatorio: El campo \'Longitud\' es sólo para cadenas. Déjalo vacío para otros tipos. Valores aceptables: 1-255.');
define('_PROFILE_VALIDATION', 'Validación');
define('_PROFILE_VIEWABLEBY', 'Visible para');

// error/status messages
define('_PROFILE_ACTIVATIONFAILED', 'Error! Activación fallida');
define('_PROFILE_DEACTIVATIONFAILED', 'Error! Desactivación fallida');
define('_PROFILE_EMPTYLABEL', 'Error! La propiedad debe tener una etiqueta interna, como: _MIETIQUETA');
define('_PROFILE_LABELEXISTS', 'Error! Esa etiqueta ya existe');

// viewable by drop down
define('_PROFILE_VIEWBYOPTIONADM', 'Administradores solamente');
define('_PROFILE_VIEWBYOPTIONUSR', 'Usuarios registrados solamente');
define('_PROFILE_VIEWBYOPTIONALL', 'Todo el mundo');

// field types
define('_PROFILE_CORE','Núcleo');
define('_PROFILE_COREREQUIRED','Núcleo, Requerido');
define('_PROFILE_FLOAT','Float');
define('_PROFILE_FLOATREQUIRED','Float, Requerido');
define('_PROFILE_INTEGER','Entero');
define('_PROFILE_INTEGERREQUIRED','Entero, Requerido');
define('_PROFILE_MANDATORY','Obligatorio');
define('_PROFILE_STRING','Cadena');
define('_PROFILE_STRINGREQUIRED','Cadena, Requerido');
define('_PROFILE_TEXT','Texto');
define('_PROFILE_TEXTREQUIRED','Texto, Requerido');

// field control types
define('_PROFILE_FIELDTEXT', 'Caja de texto');
define('_PROFILE_FIELDTEXTAREA', 'Área de texto');
define('_PROFILE_FIELDCHECKBOX', 'Casillas de verificación');
define('_PROFILE_FIELDRADIO', 'Botones Radio');
define('_PROFILE_FIELDSELECT', 'Lista desplegable');
define('_PROFILE_FIELDDATE', 'Calendario');
define('_PROFILE_FIELDEXTDATE', 'Fecha (extendida)');
define('_PROFILE_FIELDCOMBOTEXT', 'Combo box (texto)');

