<?php
/**
 * Zikula Application Framework
 * @copyright (c) 2002, Zikula Development Team
 * @link http://www.zikula.org
 * @version $Id: admin.php 22596 2007-08-14 16:14:18Z pcornelissen $
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 * @package Zikula_System_Modules
 * @subpackage  Zikula_Modules
*/

/**
 * translated by
 * @author Mateo Tibaquira [mateo]
 */

// hooks
define('_MODULES_SETSYSTEMHOOKS', 'Hooks del sistema');
define('_MODULES_ENABLEHOOKSEXTENDED', 'Hooks para habilitarle a éste módulo (configuración extendida)');
define('_MODULES_ENABLEHOOKS', 'Hooks para habilitarle a éste módulo');
define('_MODULES_EXTENDEDHOOKS', 'Configuración Extendida de Hooks');
define('_MODULES_EXTENDEDHOOKSWARNING', 'Advertencia! Aquí tu puedes habilitar hooks individualmente y cambiar el orden en el que son invocados. SI no estás seguro acerca de las consecuencias, déjalo como está.<br /><br />Puedes mover los hooks usando arrastrar&soltar sobre las secciones. Mover un hook de una seccion a otra no funciona pues no tiene sentido.');
define('_MODULES_STANDARDHOOKS', 'Configuración Estandar de Hooks');

// module dependencies
define('_MODULES_DEPENDENCYSTATE', 'Nivel');
define('_MODULES_DEPENDENCY_NOTFOUND', 'No encontrado en el sistema');
define('_MODULES_DEPENDENCY_NOTFOUNDREGENERATE', 'Asegúrate que este módulo esté presente en el sistema (y la lista de módulos esté regenerada!)');
define('_MODULES_DEPENDENCY_REQUIRED', 'Requerido');
define('_MODULES_DEPENDENCY_OPTIONAL', 'Opcional');
define('_MODULES_DEPENDENCY_RECOMMENDED', 'Recomendado');
define('_MODULES_HASDEPENDENCIES', 'Este módulo tiene dependencias que acualmente no están en el sistema actualmente.');
define('_MODULES_REMOVEDEPENDENTS', 'Este módulo es usado por otros módulos presentes en tu sistema. Cualquier módulo con dependiente obligatoriamente será removido cuando se remueva éste módulo.');

// errors, warnings and statuses
define('_MODULES_HASBLOCKSLEFT', 'Este módulo tiene algunos bloques activos, necesitas removerlos primero!');
define('_MODULES_MANDATORYCOREMODULE', 'Este módulo es necesitado obligatoriamente por el sistema y no puede ser desactivado');
define('_MODULES_MODULEISSTARTMODULE', 'Este módulo no puede ser desactivado porque está configurado como el módulo de inicio.');
define('_MODULES_ACTIVATED', 'Módule activado');
define('_MODULES_BLOCKSEXIST', 'Este módulo no puede ser removido pues hay bloques relacionados a este módulo activo.');
define('_MODULES_CONFIRMDELETE', 'Advertencia: Esta acción removerá permanentemente todos los datos asociados con este módulo incluyendo la información almacenada por los hooks de este módulo!');
define('_MODULES_DEACTIVATED', 'Módulo desactivado');
define('_MODULES_DUPLICATEDISPLAYNAME', 'No se puede modificar el nombre público del módulo - existe un módulo que ya lo tiene!');
define('_MODULES_FILESMISSING', 'Archivos perdidos');
define('_MODULES_INITIALISED', 'Módulo instalado');
define('_MODULES_ITEMSPERPAGENUMERIC', 'El parámetro \'Elementos por página\' debe ser un entero positivo. El valor que has introducido ha sido corregido.');
define('_MODULES_NOHOOKS', 'No hay hooks instalados');
define('_MODULES_NOSUCHMODID', 'Error! No existe tal ID de módulo');
define('_MODULES_NOMODID', 'No se ha especificado el ID del módulo');
define('_MODULES_NOMODS', 'No hay módulos disponibles');
define('_MODULES_UPGRADED', 'Nueva versión instalada');
define('_MODULES_REGENERATED', 'Lista de módulos regenerada desde el sistema de archivos');
define('_MODULES_REMOVED', 'Módulo desinstalado');
define('_MODULES_UPDATEDINFORMATION', 'información del módulo actualizada');

define('_MODULES_ERRORS', 'La lista de módulos no pudo ser regenerada');
define('_MODULES_ERRORS_EXPLAIN', 'La lista de módulos no pudo ser regenerada porque los siguientes errores fueron encontrados en el sistema de archivos. Necesitas corregirlos para poder proceder.');
define('_MODULES_ERRORS_MODULENAMES', 'La siguiente tabla muestra una lista de modulos los cuales parecen aparecer en más de una carpeta. Necesitas borrar uno de los dos');
define('_MODULES_ERRORS_DISPLAYNAMES', 'La siguiente tabla muestra una lista de nombres públicos de módulos que parecen aparecer en más de una carpeta. Necesitas corregir o borrar uno de los dos.');

// interface components
define('_MODULES_ADMIN', 'Ir al panel de administración de los módulos');
define('_MODULES_CONFIRMINITIALISE', 'Confirme la inicialización del módulo');
define('_MODULES_DELETE', 'Remover módulo');
define('_MODULES_DISPNAME', 'Nombre público');
define('_MODULES_GENERATE', 'Generar la lista de módulos');
define('_MODULES_INITIALISE', 'Instalar');
define('_MODULES_FILTERBYSTATE', 'Filtrar por estado');
define('_MODULES_INVALID', 'Inválido');
define('_MODULES_LOADLEGACY', 'Cargar el soporte de módulos antiguos');
define('_MODULES_MODIFY', 'Modificar módulo');
define('_MODULES_NAME', 'Nombre del módulo');
define('_MODULES_NEWDESCRIPTION', 'Digita la nueva descripción');
define('_MODULES_NEWNAME', 'Digita el nuevo nombre');
define('_MODULES_REGENERATE', 'Regenerar Lista');
define('_MODULES_UNINIT', 'No instalado');
define('_MODULES_UPGRADE', 'Actualizar');
define('_MODULES_REMOVE', 'Remover módulo');
define('_MODULES_STATE', 'Estado');
define('_MODULES_VERSION', 'Versión');
