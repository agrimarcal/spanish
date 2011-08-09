<?php

// installer page language strings
define('_INSTALLER', 'Instalación de Zikula');
define('_INSTALLERPLEASEREFERTOGUIDE', 'Por favor consulta la <a style="color:red" href="docs/install.html" onclick="window.open(\'docs/install.html\');return false;">
Guía de instalación</a> durante este proceso');
define('_INSTALLERQUALITY', 'NOTA: Las distribuciones oficiales de Zikula SÓLO estan disponibles en zikula.org. Para certeza de la calidad, por favor asegurate que estás instalando una distribución oficial.');

// installer tasks
define('_INSTALLERTASKS', 'Tareas del instalador');
define('_INSTALLERTASK0', 'Existing Install Login');
define('_INSTALLERTASK1', 'Escoger lenguaje');
define('_INSTALLERTASK2', 'Aceptar licencia');
define('_INSTALLERTASK3', 'Requerimientos del sistema');
define('_INSTALLERTASK4', 'Información de la Base de Datos');
define('_INSTALLERTASK5', 'Seleccionar tipo de instalación');
define('_INSTALLERTASK6', 'Crear el usuario Administrador');
define('_INSTALLERTASK7', 'Seleccionar página de inicio');
define('_INSTALLERTASK8', 'Seleccionar theme');
define('_INSTALLERTASK9', 'Listo!');

// installer resources
define('_INSTALLERESOURCES', 'Recursos útiles');
define('_INSTALLERGUIDE', 'Guía de instalación');
define('_INSTALLERDOCS', 'Documentación de Zikula');
define('_INSTALLERFORUMS', 'Foros de soporte');

// standard buttons
define('_RECHECK', 'Volver a verificar');

// task templates
// _lang.htm
define('_INSTALLERCHOOSELANG', 'Escoger lenguaje');

// _licence.htm
define('_INSTALLERTHISSCRIPT', 'Este script instalará la base de datos de Zikula y te ayudará a ajustar las variables que necesitas para comenzar.
Te llevará a través de serie de páginas. Cada página establece una porción diferente del script. Estimamos que este proceso completo
tomará acerca de diez minutos. En el momento que te quedes atascado, por favor visita nuestro foro de soporte para ayudarte.');
define('_INSTALLERLICENSE', 'Por favor, lea nuestra licencia a través de la GNU Licencia Pública General. Zikula es desarrollado como software libre,
pero existen ciertos requisitos para la distribución y edición.');
define('_INSTALLERGNUURL1', 'http://www.gnu.org/licenses/gpl.html');
define('_INSTALLERGNULINKTEXT1', 'GNU Licencia Pública General');
define('_INSTALLERGNUURL2', 'http://www.gnu.org/philosophy/');
define('_INSTALLERGNULINKTEXT2', 'Filosofía del proyecto GNU');
define('_ACCEPTLICENCE', 'Aceptar Licencia');

// _requirements.htm
define('_INSTALLERPHP', 'PHP');
define('_INSTALLERPHPMBSTRINGOK', 'Tu instalación PHP tiene las funciones de cadenas multi-byte disponibles.');
define('_INSTALLERPHPMBSTRINGNOTOK', 'Tu instalación PHP no tiene las funciones de cadenas multi-byte disponibles. Zikula no será capaz de manejar caracteres multi-byte.');
define('_INSTALLERPHPTOKENOK', 'Tu instalación PHP tiene las funciones token disponibles.');
define('_INSTALLERPHPTOKENNOTOK', 'Tu instalación PHP no tiene las funciones token disponibles - son requeridas por el sistema de renderizado de Zikula.');
define('_INSTALLERPHPVEROK', 'Tu versión de PHP es %v y cumple el requisito del sistema de mínimo la versión 4.3.0.');
define('_INSTALLERPHPVERNOTOK', 'Tu versión de PHP es %v y no cumple el requisito del sistema de mínimo la versión 4.3.0.');
define('_INSTALLERFILESYSTEMPERMS', 'Permisos del sistema de archivos');
define('_INSTALLERFILEWRITABLE', '%f es escribible.');
define('_INSTALLERFILENOTWRITABLE', 'No se puede escribir en %f - por favor asegúrate que los permisos del archivo son correctos.');
define('_INSTALLERWPPERMISSIONURL', 'http://www.wikipedia.org/wiki/File_system_permissions');
define('_INSTALLERWPPERMISSIONLINKTEXT', 'Permisos del sistema de archivos');
define('_INSTALLERPERSONALCONFIG', 'Archivo de configuración personal');
define('_INSTALLERPERSONALCONFIGDOESNOTEXIST', '%f no existe');
define('_INSTALLERPERSONALCONFIGEXISTS', '%f existe. Renombra este archivo antes de continuar con esta instalación.');

// _dbinformation.htm
// database field labels
define('_INSTALLERDBTYPE', 'Tipo de Base de Datos');
define('_INSTALLERDBTABLETYPE', 'Tipo de Tabla (sólo para MySQL)');
define('_INSTALLERDBHOST', 'Servidor');
define('_INSTALLERDBUSERNAME', 'Usuario');
define('_INSTALLERDBPASSWORD', 'Constraseña');
define('_INSTALLERDBNAME', 'Nombre de la Base de Datos');
define('_INSTALLERTABLEPREFIX', 'Prefijo de tablas (para compartir tablas)');
define('_INSTALLERCREATEDB', 'Crear la base de datos');
define('_INSTALLERCREATEDBFAILED', 'No se pudo crear la base de datos - por favor verifica la información y asegurate de tener los suficientes privilegios');
define('_INSTALLERDBINFOFROMHOST', 'Las credenciales de la Base de Datos te las proporciona tu host o administrador.');
define('_INSTALLERCONNECTDBFAILED', 'No se pudo conectar a la base de datos - por favor verifica la información del formulario');

// database types (used in dbtypes plugin)
define('_INSTALLERDBTYPEMYSQL', 'MySQL');
define('_INSTALLERDBTYPEMYSQLI', 'MySQL Improved');
define('_INSTALLERDBTYPEMSSQL', 'MSSql (Alpha)');
define('_INSTALLERDBTYPEOCI', 'Oracle (Alpha) via oci8 driver');
define('_INSTALLERDBTYPEORACLE', 'Oracle (Alpha) via oracle driver');
define('_INSTALLERDBTYPEPOSTGRES', 'Postgres');


// _login.htm
define('_INSTALLERADMINLOGINREQUIRED', 'EL script ha detectado una instalación existente. Debes iniciar sesión como administrador para proceder.');
define('_INSTALLERLOGINUSERNAME', 'Usuario administrador:');
define('_INSTALLERLOGINPASSWORD', 'Contraseña:');
define('_INSTALLERLOGINFAILED', 'Inicio de sesión fallido, verifica tus datos e inténtalo de nuevo.');
define('_INSTALLERNOTADMINUSER', 'El usuario que has usado no tiene privilegios administrativos.');


// _installationtype.htm
define('_INSTALLERSELECTTYPE', 'Por favor selecciona el tipo de instalación');
define('_INSTALLERBASIC', 'Basica - sólo son instalados los módulos requiridos para la operación básica del sitio');
define('_INSTALLERCOMPLETE', 'Completa - todos los módulos encontrados en el sistema son instalados.');
define('_INSTALLERBLOG', 'Blog - se instalan los módulos que sirven para montar un Blog');

// _createadmin.htm
define('_INSTALLERADMINNAME', 'Nombre');
define('_INSTALLERADMINUSERNAME', 'Nombre de Usuario');
define('_INSTALLERADMINPASSWORD', 'Contraseña');
define('_INSTALLERADMINRETYPEPASSWORD', 'Contraseña de nuevo');
define('_INSTALLERADMINEMAIL', 'Correo electrónico');
define('_INSTALLERADMINURL', 'URL');
define('_INSTALLERPASSWORDCOMPAREFAILED', 'Falla al crear el usuario administrador - por favor verifica tus credenciales');
define('_INSTALLEREMAILVALIDATEFAILED', 'Falla al validar el correo electrónico del administrador - por favor verificalo');
define('_INSTALLERURLVALIDATECOMPAREFAILED', 'Falla al validar la url del administrador - por favor verificala');
define('_INSTALLERUSERVALIDATECOMPAREFAILED', 'Espacios y símbolos no son permitidos en el nombre de usuario');

// _gotosite.htm
define('_INSTALLERCREDITS', 'Los Créditos');
define('_INSTALLERTEAM', 'Estos son los scripts y las personas que hacen posible a Zikula. Tomate algún tiempo y permítele saber a esas personas cuanto aprecias sus trabajos.
Si quieres ser listado aquí, contáctanos acerca de ser parte del Equipo de Desarrollo. Siempre estamos buscando algo de ayuda.');
define('_INSTALLERPROBLEMS', 'Ahora has completado la instalación de Zikula. Si encuentras cualquier tipo de problemas, háganoslo saber.  Y asegúrate de borrar este script.
No lo vas a necesitar de nuevo.');
define('_INSTALLERGOTOSITE', 'Ir a tu sitio Zikula');

// _selectmodule.htm
define('_INSTALLERSELECTMODULE', 'Selecciona el módulo encargado de la página de inicio');
define('_INSTALLERMODULES', 'Los módulos son usados para extender la funcionalidad de un sitio. Muchos más están disponibles en el <a href="http://code.zikula.org/community-spanish/downloads">Paquete de Complementos (ValueAddons)</a> y la <a href="http://community.zikula.org/module-Database-main-tid-3.htm">Base de Datos de Módulos</a> de terceras partes. Por favor selecciona el módulo encargado de la página de inicio de tu nuevo sitio. <strong>Nota:</strong> Puedes cambiar esto luego.');
define('_INSTALLERPNMODULESSURL', 'http://community.zikula.org/module-Database-main-tid-3.htm');
define('_INSTALLERPNMODULES', 'Base de Datos de Módulos');

// _selecttheme.htm
define('_INSTALLERSELECTHEME', 'Selecciona el theme por defecto');
define('_INSTALLERTHEMES', 'Los themes son usados para alterar completamente la apariencia del sitio. Zikula incluye un número pequeño de themes por defecto. Muchos más están disponibles en la <a href="http://community.zikula.org/module-Database-main-tid-4.htm">Base de Datos de Themes</a>. Por favor selecciona un theme por defecto para tu nuevo sitio - puedes cambiarlo luego.');
define('_INSTALLERPNTHEMESURL', 'http://community.zikula.org/module-Database-main-tid-4.htm');
define('_INSTALLERPNTHEMES', 'Base de Datos de Themes');

// modify_config.php
define('_INSTALLERMODIFYFILE_1','Error: no se puede de abrir para lectura:');
define('_INSTALLERMODIFYFILE_2','Error: no se puede de abrir para escritura:');
define('_INSTALLERMODIFYFILE_3','0 líneas cambiadas, no hizo nada');
