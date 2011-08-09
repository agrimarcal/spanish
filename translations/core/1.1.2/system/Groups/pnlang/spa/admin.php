<?php
/**
 * Zikula Application Framework
 *
 * @copyright (c) 2001, Zikula Development Team
 * @link http://www.zikula.org
 * @version $Id: admin.php 22262 2007-06-25 13:40:29Z markwest $
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 * @package Zikula_System_Modules
 * @subpackage  Zikula_Groups
 */

/**
 * translated by
 * @author Mateo Tibaquira [mateo]
 */

// general
define('_GROUPS_PENDINGACCEPT', 'Aceptar');
define('_GROUPS_PENDINGDENY', 'Denegar');

// singular/plural
define('_GROUPS_GROUP', 'Grupo');
define('_GROUPS_GROUPS', 'Grupos');

// menus
define('_GROUPS_VIEWGROUPS', 'Ver los grupos');
define('_GROUPS_MODIFYGROUP', 'Modicar grupo');
define('_GROUPS_CREATEGROUP', 'Crear grupo');

// ajax interface
define('_GROUPS_ADDINGNEW', '-nuevo grupo-');
define('_GROUPS_DELETINGGROUP', '...borrando grupo...');
define('_GROUPS_UPDATINGGROUP', '...actualizando grupo...');

// group states and types
define('_GROUPS_CLOSED', 'Cerrado');
define('_GROUPS_CORE', 'Núcleo');
define('_GROUPS_NEWGROUPINDB', 'Nuevo grupo en la BD');
define('_GROUPS_OPEN', 'Abierto');
define('_GROUPS_PRIVATESHORT', 'Privado');
define('_GROUPS_PUBLICSHORT', 'Público');
define('_GROUPS_TYPE', 'Tipo');

// notifation methods
define('_GROUPS_NOTIFYBYEMAIL', 'Email');
define('_GROUPS_NOTIFYBYPM','mensaje Privado');
define('_GROUPS_NOTIFYNONE', 'Ninguna');

// view template
define('_GROUPS_APPEND', 'Agregar un nuevo Grupo');
define('_GROUPS_USERCOMMENT', 'Comentario');
define('_GROUPS_ISDEFAULTUSERGROUP', '(*) = grupo de usuarios por defecto - no puede ser borrado');
define('_GROUPS_MEMBERSHIP', 'Grupo de miembros');
define('_GROUPS_NBUMAX', 'Maximo Asignado');
define('_GROUPS_NBUSERS', 'Miembros');
define('_GROUPS_PENDINGTITLE', 'Solicitud(es) en espera');

// modify config template
define('_GROUPS_ADMMAILWARNING', 'Recibir correo de nuevas solicitudes');
define('_GROUPS_DEFAULTGROUP', 'Grupo inicial para los usuarios');
define('_GROUPS_HIDECLOSEDGROUPS', 'Ocultar grupos cerrados');

// group applications template
define('_GROUPS_DEFAULTACCEPTTEXT', 'Tu solicitud fué aceptada. Tienes todos los privilegios dados al grupo que te registraste.');
define('_GROUPS_DEFAULTDENYREASON', 'Sentimos anunciarte que tu solicitud al grupo privado fue rechazada.');

// group membership template
define('_GROUPS_ADDUSER', 'Añadir usuario a grupo');
define('_GROUPS_NOMOREUSERS', 'Usuarios disponibles para añadirse a este grupo.');
define('_GROUPS_REMOVEUSER', 'Eliminar al usuario del grupo');
define('_GROUPS_UID', 'ID Usuario');

// user pending template
define('_GROUPS_REASON', 'Motivo');
define('_GROUPS_SENDREASONBYMAIL', 'Enviar Motivo/Notificación');
define('_GROUPS_USERAPPLICATION', 'Solicitud del usuario');
define('_GROUPS_USERAPPLICATIONTEXT', 'Texto del usuario');

// errors/statuses
define('_GROUPS_ACCEPTTITLE', 'Añadido al grupo %group%');
define('_GROUPS_ACCEPTUSERFAILED', 'Accept action failed');
define('_GROUPS_ADDERROR', 'Error creando nuevo grupo');
define('_GROUPS_ALREADYEXISTS', 'Ese grupo ya existe');
define('_GROUPS_DEFAULTGROUPCANNOTBEDELETED',  'El grupo de usuarios por defecto no puede ser borrado');
define('_GROUPS_DELETEERROR', 'Un error ocurrió mientras se borraba el grupo ');
define('_GROUPS_DENYTITLE', 'Disculpa! Tu solicitud para el grupo %group% fue rechazada');
define('_GROUPS_DENYUSERFAILED', 'Acción de Denegar fallida');
define('_GROUPS_MISSINGNAME', 'Falta el nombre de grupo');
define('_GROUPS_USERADDED', 'Usuario añadido al grupo');
define('_GROUPS_USERDENIED', 'Solicitud de usuario denegada');
define('_GROUPS_USERNOTADDED', 'El usuario no fue añadido al grupo');
define('_GROUPS_USERREMOVED', 'Usuario removido del grupo');
define('_GROUPS_USERREMOVEDERROR', 'Hubo un problema mientras se removía al usuario');
