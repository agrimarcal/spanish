<?php 
/**
 * translated by
 * @author Mateo Tibaquira [mateo]
 */

define('_THUMBNAIL_TITLE_PREFERENCES',		'Preferencias del módulo Thumbnail');
define('_THUMBNAIL_PREFERENCES_SIZE',		'Tamaño estandar de la miniatura');
define('_THUMBNAIL_PREFERENCES_OVERRIDE',	'Permitir invocar al módulo para usar otro tamaño');

define('_THUMBNAIL_TITLE_CHECKSETTINGS',	'Verificar configuración');

define('_THUMBNAIL_SETTINGS',			'Ajustes');
define('_THUMBNAIL_SETTING',			'Configuración');
define('_THUMBNAIL_MASTERVALUE',			'Valor maestro');
define('_THUMBNAIL_LOCALVALUE',			'Valor local');
define('_THUMBNAIL_COMMENTS',			'Comentarios');
define('_THUMBNAIL_VALUE',			'Valor');
define('_THUMBNAIL_FEATURES',			'Características');
define('_THUMBNAIL_FUNCTIONS',			'Funciones');
define('_THUMBNAIL_FUNCTION_EXISTS',			'funcion_existe:');
define('_THUMBNAIL_SCALE',			'&lt;-- malo . . . . . bueno --&gt;');

/* Check settingts */
define('_THUMBNAIL_CHECKSETTINGS_DESC',			'Este script analiza tu configuración (phpThumb.config.php y servidor/PHP) para <a href="http://phpthumb.sourceforge.net"><strong>phpThumb()</strong></a>');


/* phpThum Stuff */
define('_THUMBNAIL_TITLE_PHPTHUMB_SETTINGS',			'configuración phpThumb');

/* Settings */

//Cache directory
define('_THUMBNAIL_CACHE_DIR_DESC',			'Nota: esta carpeta debe ser escribible (usualmente chmod 777 es necesario) para que funcione el cache.
        Si la carpeta no es escribible no aparecerá ningún error pero el caché será deshabilitado.');
define('_THUMBNAIL_CACHE_DIR_CONF',			'Configuración de la carpeta para el cache');
define('_THUMBNAIL_CACHE_DIR',			'Carpeta del cache');
define('_THUMBNAIL_SET_CACHE_DIR',			'establece cual es la carpera donde se guardan los elementos cacheados');
define('_THUMBNAIL_CACHE_DIR_WARNING_OFF',			'Advertencia de cache deshabilitado');
define('_THUMBNAIL_CACHE_DIR_WARNING_DESC',			'Si la [<em>Carpeta del cache</em>] no existe o no es escribible, y la [Advertencia de cache deshabilitado] está deshabilitada, una imágen de error será generada ya sea para establecer una carpeta vñalida o desactivar la alarma (y evitar confindir a la gente que no sabe del cache)');

//Cache culling
define('_THUMBNAIL_CACHE_CULLING',			'Cache selectivo');
define('_THUMBNAIL_CACHE_CULLING_DESC',			'phpThumb puede automáticamente limitar los contenidos de la carpeta del cache
        basado en la fecha de último acceso y/o el número de archivos y/o tamaño total del archivo.');
define('_THUMBNAIL_CACHE_CULLING_CACHE_MAX_AGE',			'Edad máxima del cache');
define('_THUMBNAIL_CACHE_CULLING_CACHE_MAX_AGE_DESC',			'[VACÍO] nunca borra las miniaturas cacheadas basado en la fecha de último acceso
                borra las miniaturas cacheadas que no han sido accedidas en más de [Edad máxima del cache] días (este valor es el tiempo máximo en días desde el último acceso para evitar el borrado).');
define('_THUMBNAIL_CACHE_CULLING_CACHE_MAX_SIZE',			'Tamaño máximo del cache');
define('_THUMBNAIL_CACHE_CULLING_CACHE_MAX_SIZE_DESC',			'[VACÍO] nunca borra las miniaturas cacheadas basado en el tamaño en bytes de la carpeta
                borra las miniaturas cacheadas que no han sido visitadas recientemente cuando ha más de [Tamaño máximo del cache]MB de archivos cacheados (el valor es el máximo tamaño de bytes de todos los archivos cacheados).');  
define('_THUMBNAIL_CACHE_CULLING_CACHE_MAX_FILES',			'Máximo de archivos cacheados');
define('_THUMBNAIL_CACHE_CULLING_CACHE_MAX_FILES_DESC',			'[VACÍO] nunca borra las miniaturas cacheadas basado en el número de archivos cacheados
                borra las miniaturas cacheadas que no han sido visitadas recientemente cuando hay más de [Máximo de archivos cacheados] archivos cacheados (el valor es el número máximo de archivos cacheados a guardar).');    
                
//Source image cache configuration
define('_THUMBNAIL_SOURCE_IMG_CACHE_CONF',			'Configuración del cache de imágenes externas');
define('_THUMBNAIL_SOURCE_IMG_CACHE_ENABLED',			'Habilitar cache externo');
define('_THUMBNAIL_SOURCE_IMG_CACHE_ENABLED_DESC',			'si está habilitado, las imágenes obtenidas via HTTP son cacheadas en la [Carpeta de cache externo].');
            
define('_THUMBNAIL_CACHE_SOURCE_DIR',			'Carpeta de cache externo');
define('_THUMBNAIL_CACHE_SOURCE_DIR_DESC',			'establece la ruta de la carpeta donde se almacena el cache de imágenes externas no procesadas');

//cache source modification date configuration
define('_THUMBNAIL_CACHE_SOURCE_MOD_DATE_CONF',			'Configuración de fechas de modificación del cache externo');
define('_THUMBNAIL_CACHE_SOURCE_FILETIME_IGNORE_LOCAL',			'Ignorar la fecha de modificación de imágenes externas');
define('_THUMBNAIL_CACHE_SOURCE_FILETIME_IGNORE_LOCAL_DESC',			'si está habilitado, las imágenes locales no se les comprobarán fechas de modificación y la imágen del cache será usada si está disponible, aún si en la fuente original ha cambiado o se ha eliminado.');
define('_THUMBNAIL_CACHE_SOURCE_FILETIME_IGNORE_REMOTE',			'Ignorar la fecha de modificación remota');
define('_THUMBNAIL_CACHE_SOURCE_FILETIME_IGNORE_REMOTE_DESC',			'si está habilitado, a las imágenes remotas no se les comprobarán fechas de modificación y la imágen del caché será usada si está disponible, aún si en la fuente original ha cambiado o se ha eliminado. 
                 <strong>ADVERTENCIA</strong>: el rendimiento del cache puede CAER mucho si esta opción está deshabilitada.');
                
//Simplified cache filename configuration
define('_THUMBNAIL_SIMPLE_CACHE_FILENAME_CONF',			'Configuración de nombres de archivo del cache simplificados');
define('_THUMBNAIL_SIMPLE_CACHE_FILENAME_CONF_DESC',			'En vez de crear un nombre de archivo único para el cache para todas las combinaciones de parámetros, crea archivos de cache "simples" (ej.: "imagen_thumb.jpg")<br />
        Si el [Nombre en el cache] no es vacío, los parámetros GET (excepto \'src\') son ignorados y solamente los parámetros $PHPTHUMB_DEFAULTS
        (definidos al final de phpThumb.config.php) son usados para el procesamiento.<br />
        El caracter \'*\' DEBE ser usado para representar el nombre de la imágen fuente.');
        
define('_THUMBNAIL_CACHE_DEFAULT_ONLY_SUFFIX',			'Nombre en el cache');
define('_THUMBNAIL_CACHE_DEFAULT_ONLY_SUFFIX_DESC',			'[VACÍO] cacheado en la manera normal de phpThumb<br />
            el nombre \'*_thumb\' aplicado a la imagen \'imagen.jpg\' se convierte en \'imagen_thumb.jpg\' (o \'imagen_thumb.png\' si la salida PNG es seleccionada, etc)<br />
            el nombre \'small-*\' aplicado a la imagen \'imagen.jpg\' se convierte en \'small-imagen.jpg\' (o \'small-imagen.png\' si la salida PNG es seleccionada, etc).');
            
define('_THUMBNAIL_CACHE_FORCE_PASSTHRU',			'Forzar cache Passthru');
define('_THUMBNAIL_CACHE_FORCE_PASSTHRU_DESC',			'si está habilitado, los datos d ela imágen cacheada serán siempre pasados al explorador; si está deshabilitado, se usará la redirección HTTP.');

//Temp directory configuration
define('_THUMBNAIL_TEMP_DIR_CONF',			'Configuración de la carpeta temporal');   
define('_THUMBNAIL_TEMP_DIR_CONF_DESC',			'phpThumb() quizá necesite crar archivos temporales. Usualmente la carpeta temporal del sistema es escribible y puede ser usada.
        Deja este valor como NULL en la mayoría de casos. Si obtienes errores acerca de "falla al abrir &lt;nombre-de-archivo&gt; para escritura"
        deberás cambiar este valor por una ruta absoluta a una carpeta con permisos de escritura.');
define('_THUMBNAIL_TEMP_DIR',			'Carpeta temporal');

//Max pixels in source img
define('_THUMBNAIL_MAX_PIXELS_SOURCE_IMG_HEAD',			'Número máximo de pixeles en una imágen para tratar de procesarla');
define('_THUMBNAIL_MAX_PIXELS_SOURCE_IMG_HEAD_DESC',			'Si es cero, entonces no hay límite en las dimensiones de la imágen fuente.
        Si no es cero entonces este es el máximo número de pixeles en la imágen fuente
        que puede ser procesado normalmente, de otra manera la miniatura EXIF embebida será
        usada (si está disponible) o un aviso de "imágen my grande" será mostrado.
        Esto es para ser usado con imágenes fuentes muy grandes (> 1600x1200) y límites bajos
        de memoria PHP. Si PHP excede el límite de memoria el script usualmente muere y no arroja
        una salida visible. Para calcular este número, multiplica las dimensiones de la imágen
        más grande que puedas procesar conm tu límite de memoria (ej. 1600 * 1200 = 1920000)
        Como una guía general, este número será cerca del 20% de tu configuración de memoria PHP,
        así 8M = 1,677,722; 16M = 3,355,443; 32M = 6,710,886; etc.');
define('_THUMBNAIL_MAX_PIXELS_SOURCE_IMG',			'Máximo de pixeles por imágen');
define('_THUMBNAIL_MAX_PIXELS_SOURCE_IMG_DESC',			'        <ul>
            <li>0 sin límite de memoria</li>
            <li>1920000 permite procesar imágenes de 1600x1200 (2Mpx), no mayores (cerca de 10MB se requieren)</li>
            <li>3355443 límite de memoria de 16MB</li>
            <li>3871488 permite procesar imágenes de 2272x1704 (4Mpx), no mayores (cerca de 16MB se requieren)</li>
        </ul>');    
  
//ImageMagick configuration
define('_THUMBNAIL_IMG_MAGIC_CONF',			'Configuración de ImageMagick');
define('_THUMBNAIL_IMG_MAGIC_CONF_DESC',			'Si una imágen fuente es más grande que el límite de memoria definido anteriormente
        [Máximo de pixeles por imágen] Y el programa ImageMagick\'s está disponible, phpThumb()
        llamará a ImageMagick para generar la miniatura de la imágen fuente para evadir
        la limitación de memoria. Dejando el valor como NULL hará que phpThumb() intente
        detectar la presencia de ImageMagick con `which`.');
define('_THUMBNAIL_IMG_MAGIC_PAHT',			'Ruta a ImageMagick');
define('_THUMBNAIL_IMG_MAGIC_PAHT_DESC',			'Windows: establece la ruta absoluta o vacía para no usar Image Magic<br />
                *nix: ruta absoluta a "convert", o dejar como NULL si "convert" está en la ruta');
                
//Default output configuration
define('_THUMBNAIL_DEFAULT_OUTPUT_CONF',			'Configuración de slaida por defecto');
define('_THUMBNAIL_DEFAULT_OUTPUT_FORMAT',			'Formato de salida');
define('_THUMBNAIL_DEFAULT_OUTPUT_FORMAT_DESC',			'formato de salida predeterminado (\'jpeg\', \'png\' o \'gif\') - las miniaturas serán generadas en este formato (si está disponible en tu versión de GD).');
define('_THUMBNAIL_DEFAULT_OUTPUT_MAXWIDTH',			'Ancho máx. de salida');
define('_THUMBNAIL_DEFAULT_OUTPUT_MAXWIDTH_DESC',			'ancho de miniatura máximo por defecto. Si es cero entonces el ancho por defecto es el ancho de la imágen fuente.');
define('_THUMBNAIL_DEFAULT_OUTPUT_MAXHEIGHT',			'Alto máx. de salida');
define('_THUMBNAIL_DEFAULT_OUTPUT_MAXHEIGHT_DESC',			'alto de miniatura máximo por defecto. Si es cero entonces el alto por defecto es el alto de la imágen fuente.');        
define('_THUMBNAIL_DEFAULT_OUTPUT_INTERLACE',			'Entrelazado de la salida');
define('_THUMBNAIL_DEFAULT_OUTPUT_INTERLACE_DESC',			'si está habilitado aplica una salida entrelazada para GIF/PNG, y una progresiva para JPEG; si no, aplica una no-entrelazada para GIF/PNG, y la básica JPEG.');

//Error message configuration
define('_THUMBNAIL_ERR_MSG_CONF',			'Configuración de mensajes de error');
define('_THUMBNAIL_ERR_IMG_WIDTH',			'Ancho de la imágen de error');
define('_THUMBNAIL_ERR_IMG_WIDTH_DESC',			'ancho por defecto de las imágenes de error');
define('_THUMBNAIL_ERR_IMG_HEIGHT',			'Alto de la imágen de error');
define('_THUMBNAIL_ERR_IMG_HEIGHT_DESC',			'alto por defecto de las imágenes de error');
define('_THUMBNAIL_ERR_MSG_IMG_DEFAULT',			'Mensaje por defecto de la imágen de error');
define('_THUMBNAIL_ERR_MSG_IMG_DEFAULT_DESC',			'Establece el nombre de de la imágen de error genérica (ej. \'/images/error.png\') que quieres que sea mostrada en vez de cualquier mensaje de error que pueda ocurrir. Esta opción es sobre-escrita por el parámetro \'err\', que hace lo mismo.');

define('_THUMBNAIL_ERR_IMG_BGCOLOR',			'Color de fondo del error');
define('_THUMBNAIL_ERR_IMG_BGCOLOR_DESC',			'color de fondo para las imágenes con mensajes de error.');
define('_THUMBNAIL_ERR_IMG_TEXTCOLOR',			'Color de la letra');
define('_THUMBNAIL_ERR_IMG_TEXTCOLOR_DESC',			'color del texto de los mensajes de error.');
define('_THUMBNAIL_ERR_IMG_FONTSIZE',			'Tamaño de la letra');
define('_THUMBNAIL_ERR_IMG_FONTSIZE_VAL_SAMALLEST',			'(el más pequeño)');
define('_THUMBNAIL_ERR_IMG_FONTSIZE_VAL_LARGEST',			'(el más grande)');
define('_THUMBNAIL_ERR_IMG_FONTSIZE_DESC',			'tamaño de los textos en los mensajes de error, de 1 (el más pequeño) a 5 (el más grande)');
define('_THUMBNAIL_ERR_DIE_MSG',			'die si hay un error');
define('_THUMBNAIL_ERR_DIE_MSG_DESC',			'die con mensaje de error si hay un error fatal (recomendado con phpThumb.php autónomo).');
define('_THUMBNAIL_ERR_SILENT_DIE',			'die silencioso si hay un error');
define('_THUMBNAIL_ERR_SILENT_DIE_DESC',			'simplemente die sin salida de ningún tipo si hay un error fatal (no recomendado)');
define('_THUMBNAIL_ERR_DIE_SOURCE_FAIL',			'Die si no hay imágen fuente');
define('_THUMBNAIL_ERR_DIE_SOURCE_FAIL_DESC',			'die con mensaje de error si la imágen fuente no puede ser procesada por phpThumb() (usualmente porque la imágen fuente está corrupta de alguna forma).
            Si está deshabilitada la imágen fuente será pasada sin procesamiento, sino (por defecto), un mensaje de error es mostrado.');



//Off-server Thumbnailing Configuration
define('_THUMBNAIL_OFF_SRV_TMBN_CONF',			'Configuración de miniaturas fuera del servidor');
define('_THUMBNAIL_OFF_SRV_TMBN_CONF_ENABLED',			'Habilitar');
define('_THUMBNAIL_OFF_SRV_TMBN_CONF_ENABLED_DESC',			'Si esta opción está deshabilitada permitira procesar miniaturas desde cualquier dominio externo');
define('_THUMBNAIL_OFF_SRV_TMBN_CONF_VALID_DOMAINS',			'Dominios válidos');
define('_THUMBNAIL_OFF_SRV_TMBN_CONF_VALID_DOMAINS_DESC',			'Esta es la lista de dominios a los cuales es permitido crear miniaturas.
                El valor por defecto del dominio actual debe estar bien en la mayoría de los casos, pero si es necesario puedes añadir más dominios aquí, en el formato www.ejemplo.com; www.ejemplo1.com.');
define('_THUMBNAIL_OFF_SRV_TMBN_CONF_ERASE_IMG',			'Borrar imágen');
define('_THUMBNAIL_OFF_SRV_TMBN_CONF_ERASE_IMG_DESC',			'si está habilitada, la miniatura es rellenada con $PHPTHUMB_CONFIG[\'nohotlink_fill_color\'] antes de aplicar el texto, sino, el texto es escrito sobre la miniatura.');
define('_THUMBNAIL_OFF_SRV_TMBN_CONF_ERR_MSG_TXT',			'Texto del mensaje');
define('_THUMBNAIL_OFF_SRV_TMBN_CONF_ERR_MSG_TXT_DESC',			'Texto del mensaje de error.');

//Off-server Linking Configuration
define('_THUMBNAIL_OFF_SRV_LINKING_CONF',			'Configuración de enlazado fuera del servidor');
define('_THUMBNAIL_OFF_SRV_LINKING_CONF_ENABLED',			'Habilitar');
define('_THUMBNAIL_OFF_SRV_LINKING_CONF_ENABLED_DESC',			'Si esta opción está deshabilitada permitira que las miniaturas sean enlazadas desde cualquier dominio, sino, sólo los dominios listados a continuación en [Dominios válidos] serán permitidos.');
define('_THUMBNAIL_OFF_SRV_LINKING_CONF_VALID_DOMAINS',			'Dominios válidos');
define('_THUMBNAIL_OFF_SRV_LINKING_CONF_VALID_DOMAINS_DESC',			'Esta es la lista de dominios para los cuales la generación de miniaturas está permitida.
                 El valor por defecto del dominio actual puede estar bien en la mayoría de los casos, pero si es necesario, tu puedes añadir más dominios aquí, en el formato www.ejemplo.com; www.ejemplo1.com.');
define('_THUMBNAIL_OFF_SRV_LINKING_CONF_REQ_REFERER',			'Requerir referencia');
define('_THUMBNAIL_OFF_SRV_LINKING_CONF_REQ_REFERER_DESC',			'Si está deshabilitado, permitirá llamadas autónomas a phpThumb(). Si está habilitado entonces sólo peticiones con un valor $_SERVER[\'HTTP_REFERER\'] en [Dominios válidos] son permitidos.');

define('_THUMBNAIL_OFF_SRV_LINKING_CONF_ERASE_IMG',			'Borrar imágen');
define('_THUMBNAIL_OFF_SRV_LINKING_CONF_ERASE_IMG_DESC',			'si está habilitada, la miniatura es rellenada con $PHPTHUMB_CONFIG[\'nohotlink_fill_color\'] antes que el texto sea aplicado, sino, el texto es escrito sobre la miniatura.');
define('_THUMBNAIL_OFF_SRV_LINKING_CONF_ERR_MSG_TXT',			'Texto del mensaje');
define('_THUMBNAIL_OFF_SRV_LINKING_CONF_ERR_MSG_TXT_DESC',			'Texto del mensaje de error. El nombre de tu servidor será añadido a este texto'); 
 
//Border &amp; Background default colors
define('_THUMBNAIL_BORDER_BACKGROUND_CONF',			'Colores por defecto de borde &amp; fondo'); 
define('_THUMBNAIL_BORDER_BACKGROUND_BORDER_COLOR',			'Color de borde (hex)');                 
define('_THUMBNAIL_BORDER_BACKGROUND_BORDER_COLOR_DESC',			'Color de borde por defecto - en notacion hexadecimal de colores HTML.');                
define('_THUMBNAIL_BORDER_BACKGROUND_BACKGROUND_COLOR',			'Color de fondo (hex)');                 
define('_THUMBNAIL_BORDER_BACKGROUND_BACKGROUND_COLOR_DESC',			'Color de fondo predeterminado cuando el aspecto de la miniatura no se ajusta a la domension ajustada - en notacion hexadecimal de colores HTML'); 

//Watermark configuration
define('_THUMBNAIL_WATERMARK_CONF',			'Configuración de marca de agua');                
define('_THUMBNAIL_WATERMARK_TTF_DIR',			'Carpeta de TTFs');
define('_THUMBNAIL_WATERMARK_TTF_DIR_DESC',			'Carpeta base donde están los archivos de las fuentes TTF');


//MySQL configuration
define('_THUMBNAIL_MYSQL_CONF',			'Configuración de MySQL');   
define('_THUMBNAIL_MYSQL_CONF_DESC',			'Quizás quieras estraer datos de una base de datos en lugar de un archivo físico
        Si es así, modifica la línea $PHPTHUMB_CONFIG[\'mysql_query\'] para adaptar la estructura de tu base de datos
        Nota: los datos extraídos debe ser los datos binarios de la imágen, no una URL o el nombre de archivo
        mira http://www.billy-corgan.com/blog/archive/000143.php para un breve tutorial sobre esta sección.
        <strong>Por razones de seguridad esta opción sólo puede ser cambiada en el archivo de configuración.</strong>');   

//Security configuration
define('_THUMBNAIL_SECURITY_CONF',			'Configuración de seguridad');
define('_THUMBNAIL_SECURITY_HIGH_SEC_ENABLED',			'Habilitar seguridad máxima');   
define('_THUMBNAIL_SECURITY_HIGH_SEC_ENABLED_DESC',			'si está habilitada, requiere una [Contraseña de alta seguridad] de al menos 5 caractéres, y requiere el uso de la función phpThumbURL() (al final del archivo phpThumb.config.php) para generar URLs codificadas.'); 
define('_THUMBNAIL_SECURITY_HIGH_SEC_PW',			'Contraseña de alta seguridad');  
define('_THUMBNAIL_SECURITY_HIGH_SEC_PW_DESC',			'requerida si está habilitada [Habilitar seguridad máxima], debe ser de al menos 5 caractéres de largo');  
define('_THUMBNAIL_SECURITY_DISABLE_DEBUG',			'Deshabilitar depuración');
define('_THUMBNAIL_SECURITY_DISABLE_DEBUG_DESC',			'previene a phpThumb de mostrar cualquier información de tu sistema. Si se deshabilita, phpThumbDebug y los mensajes de error serán deshabilitados.');
define('_THUMBNAIL_SECURITY_ALLOW_SRC_ABOVE_DOCROOT',			'Permitir SRC antes de DOCROOT');
define('_THUMBNAIL_SECURITY_ALLOW_SRC_ABOVE_DOCROOT_DESC',			'si sí, permite a src estar en cualquier lugar de sistema de archivos; sino (por defecto), sólo permite src dentro del document_root.');
define('_THUMBNAIL_SECURITY_ALLOW_SRC_ABOVE_PHPTHUMB',			'Permitir SRC antes de phpThumb');
define('_THUMBNAIL_SECURITY_ALLOW_SRC_ABOVE_PHPTHUMB_DESC',			'si sí (por defecto), permite a src estar en cualquier lugar de sistema de archivos; sino, sólo se permitirán src dentro de una sub-carpeta de phpThumb.');
define('_THUMBNAIL_SECURITY_ALLOW_PARAM_FILE',			'Permitir el parámetro File');
define('_THUMBNAIL_SECURITY_ALLOW_PARAM_FILE_DESC',			'si sí, permite el uso del parámetro \'file\'; sino (por defecto), el parámetro \'file\' es deshabilitado/ignorado.');
define('_THUMBNAIL_SECURITY_ALLOW_PARAM_GOTO',			'Permitir parámetro Goto');
define('_THUMBNAIL_SECURITY_ALLOW_PARAM_GOTO_DESC',			'si sí, permite el uso del parámetro \'goto\'; sino (por defecto), el parámetro \'goto\' es deshabilitado/ignorado.');

//Compatability settings

define('_THUMBNAIL_COMPATIBILITY_SETTINGS',			'Ajustes de compatibilidad');
define('_THUMBNAIL_COMPATIBILITY_DISABLE_PATHINFO_SETTINGS',			'Desactivar Parsing Pathinfo');
define('_THUMBNAIL_COMPATIBILITY_DISABLE_PATHINFO_SETTINGS_DESC',			'si sí, $_SERVER[PATH_INFO] no es analizado. Quizás sean necesarias algunas configuraciones del servidor para para permitir un comportamiento normal');
define('_THUMBNAIL_COMPATIBILITY_DISABLE_IMAGECOPYRESAMPLED',			'Desactivar Imagecopyresampled');
define('_THUMBNAIL_COMPATIBILITY_DISABLE_IMAGECOPYRESAMPLED_DESC',			'si sí, ImageCopyResampled es reemplazada con ImageCopyResampleBicubic. Quizás necesite de versiones buggy versions de PHP-GD.');
define('_THUMBNAIL_COMPATIBILITY_DISABLE_ONLYCREATEABLE_PASSTHRU',			'Desactivar onlycreateable passthru');
define('_THUMBNAIL_COMPATIBILITY_DISABLE_ONLYCREATEABLE_PASSTHRU_DESC',			'si sí, cualquier imágen que pueda ser analizada por GetImageSize() puede transmitirse; sino, sólo imágenes que puedan ser convertidas a GD por las funciones ImageCreateFrom(JPEG|GIF|PNG) son permitidas.');

//Speed optimizations configuration
define('_THUMBNAIL_SPEED_CONFIG',			'Configuración de optimización de velocidad');
define('_THUMBNAIL_SPEED_PREFER_IMAGEMAGICK',			'Preferir Imagemagick');
define('_THUMBNAIL_SPEED_PREFER_IMAGEMAGICK_DESC',			'Si sí, usa ImageMagick para redimensionar las miniaturas si es posible, ya que es usualmente más rápida que las funciones GD; sino, sólo usa ImageMagick si el límite de memoria PHP es muy bajo.');
define('_THUMBNAIL_SPEED_USE_EXIF_THUMBNAIL',			'usar miniaturas exif por velocidad');
define('_THUMBNAIL_SPEED_USE_EXIF_THUMBNAIL_DESC',			'Si sí, y miniaturas EXIF está disponible, y es más grande o igual a las dimensiones de la salida, usa miniaturas EXIF en vez de la fuente actual para generar miniaturas. El beneficio es sólo velocidad, evitando redimensionar grandes imágenes.');                  

//Set parameters
define('_THUMBNAIL_SET_PARAM',			'Si cualquiera de los parametros son constantes para TODAS las imágenes, puedes establecerlos aquí');
define('_THUMBNAIL_SET_PARAM_GETSTRING_OVERRIDE',			'Parámetros sobre-escriben valores por defecto');
define('_THUMBNAIL_SET_PARAM_GETSTRING_OVERRIDE_DESC',			'Si está habilitado, cualquier parámetro en la URL sobre-escribirá los valores por defecto establecidos aquí; sino, los parámetros aquí definidos no pueden ser sobre-escritos en la URL.');
define('_THUMBNAIL_SET_PARAM_DISABLE_GETPARAMS',			'Deshabilitar los parámetros');
define('_THUMBNAIL_SET_PARAM_DISABLE_GETPARAMS_DESC',			'Sí lo deshabilita, los parámetros GET serán ignorados (a excepción de \'src\') y sólo luego los parámetros por defecto serán usados; sino, ambos serán usados (deèndiendo de $PHPTHUMB_DEFAULTS_GETSTRINGOVERRIDE). Se auto-habilitará si !empty($PHPTHUMB_CONFIG[\'cache_default_only_suffix\']).');