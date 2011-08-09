<?php
/**
 * Zikula Application Framework
 *
 * @copyright (c) 2001, Zikula Development Team
 * @link http://www.zikula.org
 * @version $Id: stories.php 22139 2007-06-01 10:57:16Z markwest $
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 * @package Zikula_Value_Addons
 * @subpackage News
*/

/**
 * translated by
 * @author Mateo Tibaquira [mateo]
 */

define('_STORIES_ADDITIONALINFO', 'Información adicional del bloque');

define('_STORIES_BASICINFO', 'Información básica del bloque');

define('_STORIES_CATEGORIES_REGISTRY', 'Registro de categorías');
define('_STORIES_CATEGORY', 'Selecciona 0 o más categorías');
define('_STORIES_COUNTER', 'Número de lecturas');

define('_STORIES_DATEFORMAT', 'Formato de la fecha');
define('_STORIES_DATEFORMATLINK', 'Descripción strftime');
define('_STORIES_DISPCOMMENTS', 'Mostrar el número de comentarios');
define('_STORIES_DISPDATE', 'Mostrar la fecha del artículo');
define('_STORIES_DISPHOMETEXT', 'Mostrar el resumen del artículo');
define('_STORIES_DISPLAYALL', 'Mostrar todos los artículos');
define('_STORIES_DISPLAYFRONTPAGE', 'Mostrar sólo los artículos de la página principal');
define('_STORIES_DISPLAYNONFRONTPAGE', 'Mostrar sólo los artículos no publicados en la principal');
define('_STORIES_DISPNEWIMAGE', 'Mostrar una imágen para los titulares recientes');
define('_STORIES_DISPREADS', 'Mostrar el número de lecturas');
define('_STORIES_DISPUNAME', 'Mostrar el nombre del autor');

define('_STORIES_EMPTYRESULT', 'No hay artículos recientes');

define('_STORIES_FADESCROLLING', 'Deslizador con desvanecimiento');

define('_STORIES_HOMETEXTCLASS', 'Clase CSS opcional para el texto resumen'); 
define('_STORIES_HOMETEXTWARNING', 'Al delimitar el resumen, los elementos HTML incompletos serán corregidos por el plugin truncatehtml.');
define('_STORIES_HOMETEXTWRAPTEXT', 'Texto sufijo para delimitar el resumen'); 

define('_STORIES_MARQUEESCROLLING', 'Deslizador como marquesina');
define('_STORIES_MAXDAYS', 'Límite máximo de días de publicado (0 : sin límite)');
define('_STORIES_MAXHOMETEXTLENGTH', 'Largo máximo del texto resumen (0 : sin límite)'); 
define('_STORIES_MAXNUM', 'Número máximo de artículos a mostrar');
define('_STORIES_MAXTITLELENGTH', 'Largo máximo del título (0 : sin límite)');

define('_STORIES_NEWIMAGEALT', 'NUEVO');
define('_STORIES_NEWIMAGELIMIT', 'Límite de días para considerar un artículo como reciente');
define('_STORIES_NEWIMAGESET', 'El conjunto de imágenes a usar (plugin pnimg)');
define('_STORIES_NEWIMAGESRC', 'El nombre de la imágen a usar (plugin pnimg)');
define('_STORIES_NEWSSETTING', 'Configuración del módulo');
define('_STORIES_NOSCROLLING', 'Sin deslizador');

define('_STORIES_ORDER', 'Artículos ordenados por');

define('_STORIES_PAUSESCROLLING', 'Deslizador vertical con pausa');

define('_STORIES_SCROLLDELAY', 'Retraso entre fotogramas/ retraso de inicio para marquesina (msec)');
define('_STORIES_SCROLLING', 'Usar deslizador para los elementos');
define('_STORIES_SCROLLINGDESC', 'Los artículos pueden ser puestos en un deslizador dinámico.<br />El dezlizador vertical con pausa está basado en <a href="http://www.dynamicdrive.com/dynamicindex2/crosstick.htm">Pausing up/down</a>, el deslizador con desvanecimiento (efecto de gradiente seco sólo en IE) basado en <a href="http://www.dynamicdrive.com/dynamicindex2/memoryticker.htm">memoryticker</a> y el Deslizador como marquesina está basado en <a href="http://www.dynamicdrive.com/dynamicindex2/cmarquee2.htm" target="_new">Marquee II</a>.');
define('_STORIES_SCROLLMSPEED', 'Velocidad de la marquesina 1-10');
define('_STORIES_SCROLLSTYLE', 'Definiciones de estilos para el deslizador');
define('_STORIES_SELECTNONE', 'Ninguno');
define('_STORIES_SHOWEMPTYRESULT', 'Mostrar \''._STORIES_EMPTYRESULT.'\' cuando no hay artículos en vez de el bloque vacío');
define('_STORIES_SPLITCHAR', 'Caracter de corte para la información adicional');

define('_STORIES_TEMPLATE_BLOCK', 'Plantilla para mostrar el bloque (dejar vacía por defecto)');
define('_STORIES_TEMPLATE_OVERRIDE', 'Especificación de plantillas personalizadas');
define('_STORIES_TEMPLATE_OVERRIDE_INFO', 'Si no quieres usar las plantillas predeterminadas, tienes que especificar otra aqui. Cada elemento por defecto es formateado con news_block_storiesext_row.htm. La plantila por defecto para el bloque depende de la configuración del deslizador, la estática por defecto es news_block_storiesext.htm y para los deslizadores es news_block_storiesext_scrollNAME.htm.');
define('_STORIES_TEMPLATE_ROW', 'Plantilla para formatear cada elemento (dejar vacía por defecto)');
define('_STORIES_TITLEWRAPTXT', 'Texto sufijo para delimitar el título');

define('_STORIES_WHICHSTORIES', 'Artículos a mostrar (página principal)');
