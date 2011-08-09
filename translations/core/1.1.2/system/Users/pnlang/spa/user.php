<?php
/**
 * Zikula Application Framework
 *
 * @copyright (c) 2001, Zikula Development Team
 * @link http://www.zikula.org
 * @version $Id: user.php 22851 2007-10-07 17:08:59Z landseer $
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 * @package Zikula_System_Modules
 * @subpackage Users
*/

/**
 * translated by
 * @author Mateo Tibaquira [mateo]
 */

// general
define('_USERS', 'Cuentas de Usuario');

// view template
define('_USERS_REGISTER', 'Registrarse');
define('_USERS_REGISTRATIONANDLOGIN', 'Iniciar sesión & Registro');
define('_USERS_RETRIEVEPASS', 'Recuperar de contraseña perdida');
define('_USERS_SELECTOPTION', 'Por favor escoge una opción:');

// loginscreen template
define('_USERS_REMEMBERME', 'Recordarme');

// check age template
//define('_USERS_CONSENT', '(Haciendo click en el enlace de arriba certificas que tienes %a% años o más, o que tienes consentimiento de tus padres para registrarte aquí.)');
define('_USERS_MUSTBE', 'Se requiere que tengas %a% años o más, o tener consentimiento de tus padres para crear una cuenta en este sitio. Por favor haz la selección apropiada abajo:');
define('_USERS_OVERAGE', 'Tengo %a% o más, o tengo consentimiento de mis padres.');
define('_USERS_REGISTRATION', 'Registro de nueva cuenta');
define('_USERS_UNDERAGE', 'Soy menor de %a%, y no tengo consentimiento de mis padres.');

// registration page
define('_USERS_SUBMITREGISTRATION', 'Enviar Registro');
define('_USERS_ADDITIONALINFO', 'Información Adicional');
define('_USERS_ALLOWEMAILVIEW','Permitirle a otros usuarios ver tu correo electrónico');
define('_USERS_COOKIEWARNING','Debido a que varias características de este sitio usan cookies, se recomienda tener habilitadas las cookies en la configuración de tu navegador.');
define('_USERS_EMAILAGAIN','Correo electrónico (verificación)');
define('_USERS_PASSWDAGAIN','Contraseña (verificación)');
define('_USERS_PASSWILLSEND','Cuando el registro sea completado, tu contraseña será enviada al correo electrónico ingresado.');
//define('_USERS_REGNEWUSER','Registro de nuevo usuario');
define('_USERS_REGISTRATIONAGREEMENT','Estoy de acuerdo con los <a href="%touurl%">Términos de Uso</a> y las <a href="%ppurl%">Políticas de Privacidad</a> de este sitio');
define('_USERS_REGISTRATIONAGREEMENTTOU','Estoy de acuerdo con los <a href="%touurl%">Términos de Uso</a> de este sitio'); 
define('_USERS_REGISTRATIONAGREEMENTPP','Estoy de acuerdo con la <a href="%ppurl%">Política de Privacidad</a> de este sitio'); 
define('_USERS_REGISTRATIONCHECK', 'Verifica tus datos');
//define('_USERS_REGISTERNOW','Regístrate ahora! Es gratis!');
//define('_USERS_WEDONTGIVE','Tu información personal no será vendida o entregada a otros.');
define('_USERS_REQUIREDLABEL', '*'); 
define('_USERS_REQUIREDTEXT','* Indica un campo obligatorio.');

// terms of use (tied to the legal module
define('_USERS_CONFIRMTERMSOFUSEHINT', 'Los Términos de Uso han cambiado. Por favor lee y acepta la nueva versión activando la siguiente casilla de verificación. Si no los aceptas, desafortunadamente, no serás capaz de iniciar sesión.');
define('_USERS_CONFIRMTERMSOFUSE', 'Acepto los <a href="' . pnConfigGetVar('entrypoint', 'index.php') . '?module=Legal&amp;func=termsofuse">Términos de Uso</a>');

// finished registration template
define('_USERS_RETURNTOSTART', 'Regresar a la página de inicio');

// lost password template
define('_USERS_CONFIRMATIONCODE','Código de confirmación');
define('_USERS_NOPROBLEM','Por favor suministra YA SEA tu nombre de usuario Ó tu correo electrónico a continuación y haz click en el botón \'Enviar\'. Deja abierta ésta página. A tu correo electrónico llegará un código de confirmación. Revisa tu correo, copia tu código de confirmación y vuelve a esta página: digita YA SEA tu nombre de usuario Ó correo electrónico más el código de confirmación que recibiste en el siguiente formulario, y haz click en el botón \'Enviar\'. Una nueva contraseña será generado y enviado a tu correo, y entonces podrás iniciar sesión con esa nueva contraseña.');
define('_USERS_PASSWORDLOST','Recuperación de Contraseña Perdida');
define('_USERS_SENDPASSWORD','Enviar');

// login/logout templates
define('_USERS_LOGGINGREDIRECT', 'Si no eres redireccionado automáticamente, entonces haz click aquí.');
define('_USERS_LOGGINGYOUIN', 'Iniciando sesión. Por favor espera...');
define('_USERS_YOUARELOGGEDOUT', 'Sesión cerrada exitosamente.');
define('_USERS_YOUARENOTLOGGEDOUT', 'Tu sesión no ha sido cerrada.');

// status/error messages
define('_USERS_ACTIVATIONINFO', 'Usa el enlace en el correo para activar tu cuenta.');
define('_USERS_AGEREQUIREMENTNOTMET','Error! debes tener %a% años o más, o tener consentimiento de tus padres para registrarte aquí.');
define('_USERS_APPLICATIONRECEIVED', 'Gracias por registrarte! Tu solicitud será revisada en breve.');
define('_USERS_CODEMAILED','Código enviado al correo de %uname%');
define('_USERS_EMAILDOMAINBANNED','Error! este dominio de correo ha sido baneado para los registros.');
define('_USERS_EMAILREGISTERED','Error! este correo electrónico ya está registrado');
define('_USERS_EMAILSDIFF', 'No digistaste el mismo correo electrónico en ambos cajas de texto. Por favor corrije y vuelve a intentarlo.');
define('_USERS_ERRORINREQUIREDFIELDS', 'Error! uno o más campos requeridos los dejaste en blanco o incompletos.');
define('_USERS_ERRORMUSTAGREE','Por favor confirma si aceptas los Términos de Uso y las Políticas de Privacidad.');
define('_USERS_ERRORMUSTAGREETOU','Por favor confirma si aceptas los Términos de Uso.'); 
define('_USERS_ERRORMUSTAGREEPP','Por favor confirma si aceptas las Políticas de Privacidad.'); 
define('_USERS_INVALIDREGCODE','Error! has suministrado un código de registro no válido');
define('_USERS_LOGININCOMPLETE', 'Inicio de sesión incompleto, por favor lee la siguiente nota');
define('_USERS_LOGININCORRECT','Error! Nombre de usuario no reconocido o contraseña no válida. Por favor vuelve a intentarlo...');
define('_USERS_MISSINGUSERNAME','Por favor digita un nombre de usuario.<br /><a href="javascript:history.back()">Click aquí para volver</a>.');
define('_USERS_NOPROBLEMDETECTED', 'La información parece válida, haz click en \'Enviar Registro\' para continuar.');
define('_USERS_NOTALLOWREG','Disculpa! El registro de nuevos usuarios está actualmente deshabilitado');
define('_USERS_NOTALLOWREGREASONS','Razones:');
define('_USERS_NOUSERINFOFOUND','Error! no se encontro la cuenta de usuario correspondiente');
define('_USERS_PASSWORDMAILED','Contraseña enviada al correo electrónico de %uname%');
define('_USERS_PASSWORDREQUIRED','Error! por favor digita una contraseña.');
define('_USERS_PPROFILEMODULENOTAVAILABLE','Error! por favor instala el módulo Profile primero!');
define('_USERS_REGISTRATIONFAILED','Error! registro fallido. Por favor contacta al administrador.');
define('_USERS_USERACTIVATIONFAILED', 'Error! la activación de tu cuenta ha fallado. Por favor contacta al administrador.');
define('_USERS_USERACTIVATED','Cuenta activada');
define('_USERS_USERAGENTBANNED','Error! ese agente de usuario está baneado');
define('_USERS_USERNAMEINVALID','Disculpa! ese nombre de usuario no es aceptable. Por favor corrige e intenta de nuevo.');
define('_USERS_USERNAMENOSPACES','Error! tu nombre de usuari on o puede contener ningún espacio');
define('_USERS_USERNAMETAKEN','Error! ese nombre de usuario ya está registrado');
define('_USERS_USERNAMERESERVED','Error! ese nombre de usuario está reservado');
define('_USERS_USERNAMETOOLONG','Error! ese nombre de usuario es muy largo. Tiene que tener menos de 25 letras de largo');
define('_USERS_YOUAREREGISTERED','Ahora estás registrado!. Deberás recibir tu información de la cuenta, incluyendo tu contraseña, al correo electrónico que has proporcionado.');
define('_USERS_YOURPASSMUSTBETHISLONG','Error! tu contraseña debe tener al menos %x% caracteres');
define('_USERS_ACCOUNTPOSSIBLYINACTIVE', 'Si acabas de registrarte, por favor revisa tu correo electrónico para activar tu cuenta antes de iniciar sesión.');

// users block - these defines are here because the blockey is 'user'
// hence this file is loaded by the block
define('_USERS_USERSBLOCK', 'Bloque personal');
define('_USERS_USERSBLOCKCONFIG', 'Configurar bloque personal');
define('_USERS_USERBLOCKENABLEHELP', 'Contenido del bloque');
define('_USERS_USERBLOCKENABLE', 'habilitar tu bloque de menú personal');
//define('_USERS_USERBLOCKCONTENTTIP', 'Tip: puedes usar código HTML para incluir enlaces a páginas web en este sitio o en otro.');
define('_USERS_USERBLOCKUPDATED', 'Hecho! Bloque personal actualizado');
define('_USERS_USERBLOCKMENUFOR', 'Menú de %user%');

//new reg template
define('_USERS_REGTEXT', 'En este sitio tu puedes crear tu propio perfil de usuario en sólo 4 pasos. Una vez que estés registrado ganarás acceso a características avanzadas.');
define('_USERS_REG_STEP1', 'Paso 1: Escoge tu nombre de usuario');
define('_USERS_REG_STEP2', 'Paso 2: Digita tu correo electrónico');
define('_USERS_REG_STEP2_WITHPASSWORD', 'Step 2: Digita tu contraseña y tu correo electrónico');
define('_USERS_REG_STEP3', 'Paso 3: Acepta los Términos de Uso y escoge la visibilidad de tu correo electrónico');
define('_USERS_REG_STEP4_ADDITIONALINFO', 'Paso 4: El registro a este sitio requiere la siguiente información adicional');
define('_USERS_REG_STEP4_SPAM', 'Paso 4: En orden de prevenir registros automáticos por favor responde la siguiente pregunta');
define('_USERS_REG_STEP5_SPAM', 'Paso 5: En orden de prevenir registros automáticos por favor responde la siguiente pregunta');
define('_USERS_REG_LASTSTEP', 'Finalmente, verifica tus datos y envíalos!');
