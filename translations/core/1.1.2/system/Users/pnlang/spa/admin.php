<?php
/**
 * Zikula Application Framework
 *
 * @copyright (c) Zikula Development Team
 * @link http://www.zikula.org
 * @version $Id: admin.php 22758 2007-09-28 07:23:59Z markwest $
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 * @package     Zikula_System_Modules
 * @subpackage  Users
*/

/**
 * translated by
 * @author Mateo Tibaquira [mateo]
 */

// general
define('_SENDMAIL', 'Enviar un correo');
define('_PASSWORDAGAIN', 'Contraseña (repetir para verificar)');
define('_USERADMINISTRATION', 'Administrador de Usuarios');
define('_USERS_NEWUSER', 'Nuevo Usuario');
define('_WARNINGALLFIELDSREQUIRED', 'Recordatorio: Por favor introduce la información en todos los campos. En los campos de \'Contraseña\', digita la misma contraseña en cada una.');

// singular/plural
define('_USERS_USER', 'Usuario');
define('_USERS_USER_LC', 'usuario');
define('_USERS_USERS', 'Usuarios');

// navigation
define('_USERS_DYNAMICDATA','Administrador de cuentas');
define('_USERS_PENDINGAPPLICATIONS', 'Registros en espera');
define('_MODIFYUSERSCONFIG', 'Administrador de configuración de usuarios');
define('_SEARCHUSERS', 'Buscar Usuarios');
define('_USERS_MAILUSERS', 'Enviar correo');
define('_USERPROPERTIES', 'Propiedades de usuario');
define('_USERS_VIEWUSERS', 'Ver usuarios');
define('_USERS_CREATEUSER', 'Crear usuario');
define('_USERS_MODIFYUSER', 'Modificar usuario');
define('_USERS_DELETEUSER', 'Borrar usuario');
define('_USERS_CONFIRMDELETE', 'Realmente quieres borrar este usuario?');


// modify config template
//  general settings
define('_USERS_ANONYMOUSNAME','Nombre para el usuario anónimo');
define('_USERS_GENERALSETTINGS', 'Configuración general');
define('_USERS_HASHMETHOD','Método de codificación de contraseñas (por defecto SHA256)');
define('_USERS_IMAGEPATH','Ruta a las imágenes del panel de la cuenta');
define('_USERS_LOGINVIA', 'Credencial requerida para iniciar sesión');
define('_USERS_UNIQUEMAILADDRESSWARNING', 'Si la \'Credencial requerida para iniciar sesión\' es el \'Correo electrónico\', entonces la siguiente opción \'Cada correo electrónico sólo se puede registrar una vez\' debe ponerse en \'Si\'.');
define('_USERS_MINAGE', 'Edad mínima (0 = no se verifica la edad)');
define('_USERS_PASSWDLEN', 'Largo mínimo de contraseñas de usuario');
define('_USERS_SAVELASTLOGINDATE', 'Guardar el último inicio de sesión de los usuarios en la base de datos');
define('_USERS_SPAMQUESTION', 'Pregunta para protección del spam');
define('_USERS_SPAMQUESTIONHINT', 'Establece una pregunta individual para protegerse de los registros-spam');
define('_USERS_SPAMANSWER', 'Respuesta de la protección del spam');
define('_USERS_SPAMANSWERHINT', 'Respuesta a la pregunta para protección del spam hecha durante el registro del usuario');

//  registration options
define('_USERS_ALLOWREGISTRATIONS', 'Permitir nuevos registros de usuarios');
define('_USERS_ALLOWREGISTRATIONSDISABLED', 'Mensaje que se muestra si nuevos registros están deshabilitados');
define('_USERS_ILLEGALDOMAINS', 'Dominios ilegales (separados por comas)');
define('_USERS_ILLEGALUNAME', 'Nombres de usuario reservados (separados por espacios)');
define('_USERS_ILLEGALUSERAGENTS', 'Agentes de usuario prohibidos (separados por comas)');
define('_USERS_REGISTRATIONSETTINGS', 'Registro de Usuario');
define('_USERS_MODERATION', 'El registro de usuario es moderado');
define('_USERS_NOTIFYEMAIL', 'Correo electrónico a donde notificar de nuevos registros (vacío para ninguno)');
define('_USERS_OPTIONALITEMS', 'Mostrar el panel de propiedades de la cuenta');
define('_USERS_UNIQUEEMAIL', 'Cada correo electrónico sólo se registra una vez');
define('_USERS_VERIFYEMAIL', 'Verificar correo electrónico durante el registro ');
define('_USERS_VERIFYEMAIL_YES_ACTIVEMAIL', 'Si. El usuario escoge la contraseña, y activa la cuenta desde el correo');
define('_USERS_VERIFYEMAIL_YES_PASSWORDMAIL','Si. Una contraseña generada por el sistema se le envía al correo electrónico');
define('_USERS_IDNNAMES','Dominios-IDN:');
define('_USERS_IDNNAMESDESC', 'Permitir caractéres especiales en las direcciones de correo y URLs');

// login options
define('_USERS_LOGINSETTINGS', 'Configuración de incio de sesión del usuario');
define('_USERS_LOGIN_REDIRECT_WCAG', 'Entrada y salida compatible con la WCAG');
define('_USERS_LOGIN_REDIRECT_META', 'Usar meta-refresh');

// new/modify template
define('_USERS_GROUP', 'Grupo');
define('_USERS_GROUPMEMBERSHIP', 'Membresía a grupos');
define('_USERS_MEMBEROF', 'Miembro');

// search template
// Note: all of the strings ending in 'Contains' precede an input field so incomplete sentences here are fine.
define('_USERS_ANYGROUP', 'Cualquier grupo');
define('_USERS_CLICKTOFINDALL', 'Para listar a todos los usuarios, deja todos los campos en blanco');
define('_USERS_REGDATEAFTER', 'Fecha de registro antes de (yyyy-mm-dd)');
define('_USERS_REGDATEBEFORE', 'Fecha de registro después de (yyyy-mm-dd)');
define('_USERS_STATUS', 'Estado del usuario');
define('_USERS_USERGROUPIS', 'Miembro de');
define('_USERS_SEARCHSUBSTRING', 'Palabras parciales que coincidan con todos los campos');

// search results
define('_USERS_DESELECTALL', 'Deseleccionar todos');
define('_USERS_MAIL', 'Correo');
define('_USERS_SELECTALL', 'Seleccionar todos');

// pending applications template
define('_USERS_VIEWAPPLICATIONS', 'Ver solicitudes de usuarios');
define('_USERS_APPROVEUSERAPPLICATION', 'Aprobar nuevo usuario');
define('_USERS_APPROVEUSERAPPLICATIONBUT', 'Aprobar');
define('_USERS_CONFIRMAPPLICATION', 'Confirmar acción para la solicitud de este usuario');
define('_USERS_DENYUSERAPPLICATION', 'Denegar nuevo usuario');

// application details template
define('_USERS_VIEWAPPLICATION', 'Ver aplicación de usuario');

// user statuses
define('_USERS_ACTIVE', 'Activo');
define('_USERS_INACTIVE', 'Inactivo');
define('_USERS_MUSTACCEPTTOU', 'Inactivo hasta que acepte los Términos de Uso');
define('_USERS_SEARCHRESULTS','Resultados de la búsqueda');

// error status messages
define('_USERS_MAILSENT','Correo enviado');
define('_USERS_MAILSENTFAILED','Error! Envío del correo Fallido');
define('_USERS_NOPASS','Error! Sorry! Falta la contraseña');
define('_USERS_NOUSERSELECTED','Error! Ningun usuario(s) ha(n) sido seleccionado(s)');

// mail users template
define('_USERS_SEND_MAIL','Enviar mensaje(s) de correo');
define('_USERS_NM_AIMCONTAINS','el nombre AIM contiene:');
define('_USERS_NM_ANY', 'Cualquiera');
define('_USERS_NM_EMAIL','Correo:');
define('_USERS_NM_EMAILCONTAINS','and Email contains:');
define('_USERS_NM_ERROR2','No especificaste el nombre de Remitente');
define('_USERS_NM_ERROR3','Dirección de Responder-a inválida');
define('_USERS_NM_ERROR4','No especificaste el asunto');
define('_USERS_NM_ERROR5','No especificaste un mensaje para el(los) usuario(s)');
define('_USERS_NM_FINISH','Todos están finalizados');
define('_USERS_NM_FROM','Remitente:');
define('_USERS_NM_HOMEPAGECONTAINS','el Sitio web continene:');
define('_USERS_NM_ICQCONTAINS','el número ICQ contiene:');
define('_USERS_NM_MAILUSERWHERE','Enviar un correo a el(los) usuario(s) que:');
define('_USERS_NM_MESSAGE','Mensaje:');
define('_USERS_NM_MODNAME','Correo a Usuarios');
define('_USERS_NM_MSNMCONTAINS','y la cuenta de MSN contiene:');
define('_USERS_NM_NOMATCHUSER','No hubo coincidencias.');
define('_USERS_NM_NOWPROCCESS',' Ahora procesar la siguiente página...');
define('_USERS_NM_OK',' OK.');
define('_USERS_NM_PAGE1',' Página ');
define('_USERS_NM_PAGE2',' de ');
define('_USERS_NM_PAGE3',' ');
define('_USERS_NM_PAGE4',' ');
define('_USERS_NM_REALNAMECONTAINS','y el Nombre Real contiene:');
define('_USERS_NM_REGDATEAFTER','y la Fecha de Registro es después de:<br />(yyyy-mm-dd)');
define('_USERS_NM_REGDATEBEFORE','y la Fecha de Registro es antes de:<br />(yyyy-mm-dd)');
define('_USERS_NM_REPLYTOADDRESS','Responder al correo:');
define('_USERS_NM_RESET','Restaurar');
define('_USERS_NM_SEND','Enviar');
define('_USERS_NM_SEND2','correos pos página');
define('_USERS_NM_SENDING','Enviando...');
define('_USERS_NM_SENDNEXTPAGE','Enviar Siguiente Página');
define('_USERS_NM_SIGNCONTAINS','y la Firma contiene:');
define('_USERS_NM_SUBJECT','Asunto:');
define('_USERS_NM_TESTING','Probando...');
define('_USERS_NM_TESTONLY','Sólo probar.');
define('_USERS_NM_USERGROUPIS','y su Grupo es:');
define('_USERS_NM_USERNAMEIS', 'Nombre de Usuario es:');
define('_USERS_NM_USERNAMECONTAINS','Nombre de Usuario contiene:');
define('_USERS_NM_USERS',' usuarios');
define('_USERS_NM_YIMCONTAINS','y la cuenta de Yahoo contiene:');
