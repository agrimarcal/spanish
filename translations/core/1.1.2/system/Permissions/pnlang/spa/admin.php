<?php
/**
 * Zikula Application Framework
 * @copyright (c) 2002, Zikula Development Team
 * @link http://www.zikula.org
 * @version $Id: admin.php 22138 2007-06-01 10:19:14Z markwest $
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 * @package Zikula_System_Modules
 * @subpackage Permissions
*/

/**
 * translated by
 * @author Mateo Tibaquira [mateo]
 */

// general
define('_PERMISSIONS','Permisos');
define('_PERMISSIONS_COMPONENT','Componente');
define('_PERMISSIONS_INSTANCE','Instancia');

// singular/plural
define('_PERMISSIONS_PERMISSION', 'Regla de Permiso');
define('_PERMISSIONS_PERMISSION_LC', 'regla de permiso');
define('_PERMISSIONS_PERMISSIONS', 'Reglas de Permisos');

// links
define('_PERMISSIONS_MODIFYPERMISSION', 'Modicar permiso');
define('_PERMISSIONS_CREATEPERMISSION', 'Crear permiso');
define('_PERMISSIONS_VIEWPERMISSIONS', 'Ver permisos');
define('_PERMISSIONS_DELETEPERMISSION', 'Borrar permiso');
define('_PERMISSIONS_CONFIRMDELETE', 'Realmente quieres borrar este permiso?');

// view template
define('_PERMISSIONS_APPEND', 'Agregar una nueva regla de permiso');
define('_PERMISSIONS_BEFOREALTTEXT','Insertar una regla antes');
define('_PERMISSIONS_CHECK', 'Verificar permiso');
define('_PERMISSIONS_CHECKCOMPONENT', 'Componente a verificar');
define('_PERMISSIONS_CHECKINSTANCE', 'Instancia a verificar');
define('_PERMISSIONS_CHECKLEVEL', 'Nivel de acceso');
define('_PERMISSIONS_CHECKPERMISSIONS', 'Verificar permiso de usuario');
define('_PERMISSIONS_CHECKRESULT', 'Resultado de la verificación');
define('_PERMISSIONS_DRAGANDDROPHINT','Arregla tus permisos usando arrastrar y soltar. El orden será grabado inmediatamente.');
define('_PERMISSIONS_GROUPPERMS','Grupo');
define('_PERMISSIONS_LOCKADMINLOCKEDHINT','La regla de permiso que has definido como tu principal permiso de administración (resaltada en la siguiente lista) ha sido <strong>bloqueda</strong> lo que significa que no la puedes editar, mover o borrar. Si esta regla no está de primera otras se podrán mover alrededor de ella de todas maneras! Ve a la configuración del módulo para desbloquearla si es necesario.');
define('_PERMISSIONS_LOCKADMINUNLOCKEDHINT','La regla de permiso que has definido como tu principal permiso de administración (resaltada en la siguiente lista) está <strong>desbloqueda</strong> lo que significa que ahora la puedes editar, mover o borrar. Ve a la configuración del módulo para bloquearla.');
define('_PERMISSIONS_PERMISSIONLOCKED', 'Este permiso ha sido bloqueado, modifica la configuración del módulo de Permisos para desbloquearlo');
define('_PERMISSIONS_PERMLEVEL','Nivel de permiso');
define('_PERMISSIONS_VWFILTER','Filtro');

// filter drop down
define('_PERMISSIONS_ALLGROUPS','Todos los grupos');
define('_PERMISSIONS_UNREGISTEREDGROUP','No registrados');

// view registered permission schemas
define('_PERMISSIONS_INFO','Información de los Permisos');
define('_PERMISSIONS_REGISTEREDCOMP','Componente registrado');
define('_PERMISSIONS_INSTANCETEMP','Plantilla de la Instancia');

// listedit template
define('_PERMISSIONS_SEQUENCE','Sec.');

// modify config template
define('_PERMISSIONS_ADMINPERMISSIONID', 'ID del permiso principal de administración');
define('_PERMISSIONS_DISPLAYWARNING','Mostrar barra de advertencia cuando la lista esté filtrada');
define('_PERMISSIONS_ENABLEFILTER','Habilitar filtros en la lista de permisos');
define('_PERMISSIONS_LOCKADMINPERMISSION', 'Bloquear el permiso principal de administración');
define('_PERMISSIONS_ROWHEIGHTVIEW','Alto mínimo de la fila al ver (en pixeles)');
define('_PERMISSIONS_ROWHEIGHTEDIT','Alto mínimo de la fila al editar (en pixeles)');

// siernbar template
define('_PERMISSIONS_PARTLY','Vista parcial de la lista de permisos');
define('_PERMISSIONS_SHOWING','Grupo: ');

// status/error messages
define('_PERMISSIONS_COMP_INPUTERR',' [Entrada ilegal en el componente!] ');
define('_PERMISSIONS_DEC','Regla de permiso decrementada');
define('_PERMISSIONS_DECERR_NOSWAP','Ningun permiso está debajo de esta regla');
define('_PERMISSIONS_DECINCERR_NOID','Error! No existe una regla con tal ID: ');
define('_PERMISSIONS_DECINCERR_NOSWAPPART','Error! Intercambio de permisos en la vista parcial sólo puede ser aplicada si las reglas afectadas están visibles. Por favor usa la vista completa');
define('_PERMISSIONS_DELETINGPERMISSION', '...borrando regla de permiso...');
define('_PERMISSIONS_ERRORUPDATINGCONFIG', 'Error actualizando configuración: id de permiso desconocido');
define('_PERMISSIONS_WARN_FILTERACTIVE','<strong>- VISTA PARCIAL -</strong>');
define('_PERMISSIONS_GRANTED', 'permiso concedido');
define('_PERMISSIONS_INC','Regla de permiso incrementada');
define('_PERMISSIONS_INCERR_NOSWAP','Ningun permiso está arriba de esta regla');
define('_PERMISSIONS_INSERR','Error! No s epudo actualizar la secuencia de permisos');
define('_PERMISSIONS_INST_INPUTERR',' [Entrada ilegal en la instancia!] ');
define('_PERMISSIONS_LISTNONEFOUND','Error! No se encontró ningún permiso de este tipo. Plor favor agrega alguno primero');
define('_PERMISSIONS_NOTGRANTED', 'permiso denegado');
define('_PERMISSIONS_TESTINGPERMISSION', '...evaluando permiso...');
define('_PERMISSIONS_UNKNOWNUSER', 'usuario desconocido');
define('_PERMISSIONS_UPDATINGPERMISSION', '...actualizando regla de permiso...');
define('_PERMISSIONS_VWSHOWONLY','Sólo mostrar permisos que aplican a: ');
define('_PERMISSIONS_YOUCANNOTDELETETHEMAINADMINPERMISSION', 'Advertencia: No puedes borrar la regla principal de administración');
