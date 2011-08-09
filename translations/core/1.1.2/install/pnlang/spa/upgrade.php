<?php

// language defines for the upgrade process
define('_UPG_DONOTFORGETTOREMOVEFILES', 'No olvides borrar los archivos install.php, upgrade.php, upgrade10xto11x.php y la carpeta install de tu sitio. Estos no son necesitados luego y pueden comprometer el sitio si alguien los encuentra.');
define('_UPG_NEWFEATURESINTRO', 'Aqui una breve introducción a los cambios en Zikula 1.1.0. Para una lista más detallada de cambios y arreglos véase <a href="http://code.zikula.org/core/milestone/1.1.0">esta lista</a>');
define('_UPG_THANKSFORUPGRADINGTO110', 'Gracias por actualizarse a Zikula 1.1.0');
define('_UPG_CONTINUETO110NEWS', '<a href="upgrade10xto11x.php?action=learnmore&amp;lang=%lang%">Click aqui</a> para saber más acerca de las nuevas características en esta versión o <a href="admin.php">ve al panel de administración de tu sitio</a>.');
define('_UPG_110FEATURE01', 'añadido: Hooks de inicio del sistema (init): ejecutan funcionalidades en el arranque del sistema, ej. para incluir códigos de ejecución de módulos como <a title="scribite!: el administrador de editores WYSIWYG para Zikula" href="http://code.zikula.org/scribite">Scribite!</a> - que ya no necesita cambios en el theme (<a href="http://code.zikula.org/core/ticket/214">#214</a>).');
define('_UPG_110FEATURE02', 'añadido: El plugin modulestylesheet no se necesita más, los estilos son cargados automáticamente cuando una función de un módulo es llamada. Si usas este plugin en las plantillas de tu theme, verás un aviso sólo mostrado al administrador (<a href="http://code.zikula.org/core/ticket/269">#269</a>).');
define('_UPG_110FEATURE03', 'añadido: Selecciona tu módulo para gestionar perfiles: Escoge entre Profile, <a href="http://code.zikula.org/myprofile">MyProfile</a> y cualquier otro módulo que se identifique como capaz de mostrar la información de usuario (<a href="http://code.zikula.org/core/ticket/249">#249</a>).');
define('_UPG_110FEATURE04', 'añadido: El módulo MailUsers fue integrado al módulo Users (<a href="http://code.zikula.org/core/ticket/69">#69</a>).');
define('_UPG_110FEATURE05', 'añadido: El módulo Members_List fue integrado al módulo Profile (<a href="http://code.zikula.org/core/ticket/68">#68</a>).');
define('_UPG_110FEATURE06', 'añadido: Funcionalidades mejoradas de Pages, Feeds y AuthLDAP (<a href="http://code.zikula.org/core/ticket/94">#94</a>, <a href="http://code.zikula.org/core/ticket/100">#100</a>, <a href="http://code.zikula.org/core/ticket/103">#103</a>, <a href="http://code.zikula.org/core/ticket/108">#108</a>, <a href="http://code.zikula.org/core/ticket/120">#120</a>, <a href="http://code.zikula.org/core/ticket/222">#222</a>, <a href="http://code.zikula.org/core/ticket/263">#263</a>, <a href="http://code.zikula.org/core/ticket/264">#264</a>, <a href="http://code.zikula.org/core/ticket/337">#337</a>).');
define('_UPG_110FEATURE07', 'arreglado: varios bugs en ObjectLib (<a href="http://code.zikula.org/core/ticket/215">#215</a>, <a href="http://code.zikula.org/core/ticket/291">#291</a>).');
define('_UPG_110FEATURE08', 'arreglado: muchos otros bugs');

// upgrade76.php
define('_UPG_PROCEEDTOUPGRADE', 'Proceder a Actualizar');
define('_UPG_TITLE', 'Zikula serie v1.0 - Script de Actualizacion (para PostNuke .76x)');
define('_UPG_TITLE10X', 'Zikula serie Zikula v1.1.0 - Script de Actualizacion (para Zikula 1.0.x)');
define('_UPG_SUBTITLE', 'Script de Actualizacion de PostNuke (sólo para versiones .76x)');
define('_UPG_SUBTITLE10X', 'Script de Actualizacion de Zikula (sólo para versiones 1.0.x)');
define('_UPG_DESCRIPTION', 'Este script actualizará PostNuke v0.76x a Zikula v1.0. Actualizaciones desde versiones anteriores de PostNuke no están soportadas por este script.');
define('_UPG_DESCRIPTION10X', 'Este script actualizará Zikula 1.0.x a Zikula v1.1.x. Actualizaciones desde versiones anteriores no están soportadas por este script.');
define('_UPG_BACKUPNOTICE', 'ANTES de proceder deberías hacer una copia de respaldo de tu base de datos');
define('_UPG_BACKUPHINT', 'Una herramienta recomendada para grabar y restaurar tu base de datos es <a href="http://mysqldumper.de/en/">MySQLDumper</a>. La mayoría de hostings ofrece también <a href="http://www.phpmyadmin.net">phpMyAdmin</a> el cual puede hacer lo mismo, pero con menos comodidad.');
define('_UPG_BACKINGUPDB', 'Respaldando la base de datos de usuarios... ');
define('_UPG_DONE', 'hecho');
define('_UPG_USERDBSTRUCTUREUPGRADED', 'Estructura de la base de datos de Usuarios actualizada.');
define('_UPG_MODULEDBSTRUCTUREUPGRADED', 'Estructura de la base de datos de los Módulos actualizada.');
define('_UPG_SUCCESSFUL', 'exitosa');
define('_UPG_FAILED', 'FALLIDA!');
define('_UPG_BLOCKSTABLEUPGRADED', 'Tablas de Bloques actualizada');
define('_UPG_RESETTHEMETOEXTRALITE', 'Theme reseteado a ExtraLite');
define('_UPG_DUDMIGRATED', 'Datos dinámicos de Usuario migrados');
define('_UPG_SEARCHMODULEREINSTALLED', 'Módulo de búsqueda reinstalado');
define('_UPG_FOOTERINFO', 'Para más información acerca del proceso de actualización, por favor lee la <a href="docs/upgrade.html">documentacion de actualización</a>, o visita el <a href="http://zikula.es/foros">foro de soporte</a> de la Comunidad Zikula en español');
define('_UPG_TIMEHINT', 'Advertencia: Dependiendo del número de usuarios en tu sitio, esto puede tardar un tiempo. Si no estás seguro, primero prueba la actualización en una instalación local.');
define('_UPG_STARTUPGRADE', 'Click aquí para comenzar el proceso de actualización.');
define('_UPG_USERSACTIVATED', 'usuarios existentes han sido activados');
define('_UPG_MEMHINT', 'Los límites de memoria no pudieron ser cambiados (a 64M), puedes tener problemas si tu sitio es muy grande.');

// upgrade.php
define('_UPG_CONTINUETOYOURSITE', 'Ir a tu sitio');
define('_UPG_MODULELISTREGENERATED', 'Lista de módulos regenerada');
define('_UPG_INSTALLNEWMODULES', 'Instalar nuevos módulos del sistema');
define('_UPG_STARTNEWMODULEINSTALL', 'Comenzando la instalación de los nuevos módulos del sistema');
define('_UPG_INITIALISED', 'inicializado');
define('_UPG_NOTINITIALISED', 'no inicializado');
define('_UPG_NONEWMODSNEEDINIT', 'No se requiere inicializar ningún nuevo módulo del sistema');
define('_UPG_INSTALLOFMODULESCOMPLETE', 'Instalación de nuevos módulos del sistema completada');
define('_UPG_UPGRADEALLMODULES', 'Actualizar todos los módulos');
define('_UPG_STARTINGUPGRADE', 'Comenzando actualización');
define('_UPG_UPGRADED', 'actualizado');
define('_UPG_NOTUPGRADED', 'no actualizado');
define('_UPG_NOMODSNEEDUPGRADE', 'Ningún módulo requiere ser actualizado');
define('_UPG_FINISHEDUPGRADE', 'Actualización finalizada - ');
define('_UPG_GOTOADMINPANEL', 'Ir al panel de administración de <a href="%s">%s</a>');
define('_UPG_FORTHENEXTSTEPSPLEASELOGIN', 'Para los siguientes pasos de la actualización necesitas iniciar sesión. Por favor provee las credenciales de tu cuenta de administrador');
define('_UPG_USERNAME', 'Usuario');
define('_UPG_PASSWORD', 'Contraseña');
define('_UPG_SUBMIT', 'Enviar');
define('_UPG_LOGINFAILED', 'Error al iniciar sesión en el sitio');
