<?php
/**
 * Zikula Application Framework
 *
 * @copyright (c) 2001, Zikula Development Team
 * @link http://www.zikula.org
 * @version $Id: admin.php 22223 2007-06-14 10:37:21Z davidnelson $
 * @license GNU/GPL - http://www.gnu.org/copyleft/gpl.html
 * @package Zikula_Value_Addons
 * @subpackage News
*/

/**
 * translated by
 * @author Mateo Tibaquira [mateo]
 */

// view template
define('_NEWS_DIRECTACCESS', 'Acceder un artículo antiguo con su ID:');
define('_NEWS_INFUTURE', 'Programada');
define('_NEWS_INHOMEQUESTION', 'Página Frontal');
define('_NEWS_LASTUPDATED', 'Última modificación');
define('_NEWS_NEWSPUBLISHER', 'Publicador de Noticias');
define('_NEWS_UNKNOWN', 'Desconocido');

// menu
define('_NEWS_CONFIRMDELETE', 'Realmente quieres borrar este artículo?');
define('_NEWS_CREATE', 'Crear artículo');
define('_NEWS_DELETE', 'Borrar artículo');
define('_NEWS_MODIFY', 'Editar artículo');
define('_NEWS_VIEW', 'Lista de artículos');

// ajax modify
define('_NEWS_MAKEPENDING', 'Establecer estado pendiente'); // Set Pending Status

// modify config
define('_MODIFYNEWSCONFIG', 'Configuración del sistema de Noticias');
define('_NEWS_CATIMAGEPATH', 'Ruta a las imágenes de las categorías');
define('_NEWS_CATIMAGEINFO', 'Cada categoría usada en este módulo puede tener una imágen asociada. Esas imágenes se ubican en la carpeta con la ruta especificada anteriormente. Dentro del panel de administración de categorías, puedes establecer la imágen asociada añadiendo un atributo llamado \'topic_image\' con el nombre de archivo de la imágen.');
define('_NEWS_DISPLAY', 'Ajustes de visualización');
define('_NEWS_ENABLEAJAXEDIT', 'Activar edición de artículos con AJAX');
define('_NEWS_STORIESHOME','Número de artículos en la primera página');
define('_NEWS_ITEMSONINDEXPAGE', 'Número de artículos en el índice de noticias');
define('_NEWS_REFERERONPRINT','Verificar referencia en páginas para imprimir');
define('_NEWS_STORIESORDER','Ordenar los artículos por');
define('_NEWS_STORIESORDER0','ID del artículo');
define('_NEWS_STORIESORDER1','Fecha/Hora de publicación');
define('_NEWS_TOPICPROPERTY', 'Categoría a usar para las variables del obsoleto módulo Topics');
define('_NEWS_URLS', 'Permalinks');
define('_NEWS_URLSCUSTOM', 'Personalizado');
define('_NEWS_URLSCUSTOMREQUIRED', 'Recordatorio: Una estructura personalizada debe contener por lo menos %storyid% o %storytitle%.');
define('_NEWS_URLSCUSTOMSTRUCTURE', 'Estructura personalizada');
define('_NEWS_URLSDATENAME', 'Basado en fecha y nombre');
define('_NEWS_URLSHELP', 'Selecciona un formato predefinido para el Permalink, o haz uno tu mismo');
define('_NEWS_URLSNUMERIC' , 'Numérico');
define('_NEWS_URLTITLE', 'permalink-del-articulo');
define('_NEWS_URLVARS', 'Valores posibles para la estructura personalizada');
define('_NEWS_URLVARSDAY', 'Día');
define('_NEWS_URLVARSMONTHNUM', 'Número del mes (1-12)');
define('_NEWS_URLVARSMONTHNAME', 'Nombre del mes (ene-dic)');
define('_NEWS_URLVARSSTORYID', 'ID del artículo');
define('_NEWS_URLVARSSTORYTITLE', 'Título del artículo');
define('_NEWS_URLVARSYEAR', 'Año (incluyendo el siglo)');
