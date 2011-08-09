<?php
/**
 * $Id: admin.php 19260 2006-06-12 13:08:15Z markwest $
 *
 * * pnRender *
 *
 * Zikula wrapper class for Smarty
 *
 * * License *
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU GENERAL PUBLIC LICENSE (GPL)
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY -- without even the implied warranty -- of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * @author      Zikula Development Team
 * @version     .7/.8
 * @link        http://www.zikula.org                 Zikula home page
 * @link        http://smarty.php.net                 Smarty home page
 * @license      http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @package     Zikula_System_Modules
 * @subpackage  pnRender
 */

/**
 * translated by
 * @author Mateo Tibaquira [mateo]
 */

define('_PNDEBUG_TITLE',          'Consola de Depuración de pnRender');
define('_PNDEBUG_PNDEBUGFOUNDAT', 'Uso del plugin pndebug en la línea <strong>%line%</strong> de la plantilla <strong>%path%/%template%</strong>');
define('_PNDEBUG_THEME',          'Theme (módulo)');
define('_PNDEBUG_COMPILE_CHECK',  'Chequeo de compilación de pnRender');
define('_PNDEBUG_FORCE_COMPILE',  'Forzar recompilación en pnRender');
define('_PNDEBUG_BASEURL',        'URL');
define('_PNDEBUG_BASEURI',        'URI');
define('_PNDEBUG_INCLUDEDTEMPLATES', 'plantillas incluidas & archivos de configuración (tiempo de carga en segundos)');
define('_PNDEBUG_NOTEMPLATES', 'no se incluyeron plantillas');
define('_PNDEBUG_ASSIGNEDVARS' ,'variables asignadas en la plantilla');
define('_PNDEBUG_NOVARS', 'no hay variables asignadas en la plantilla');
define('_PNDEBUG_SESSIONVARS', 'Variables de sesión de Zikula');
define('_PNDEBUG_CONFIGVARS', 'variables de archivo de configuración asignada (fuera del alcance de la plantilla)');
define('_PNDEBUG_NOCONFIGVARS', 'no hay variables de configuración asignadas');
