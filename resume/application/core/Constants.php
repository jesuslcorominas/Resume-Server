<?php
defined('BASEPATH') or exit('No direct script access allowed');

define('KITCHEN', 'kitchen');
define('BATHROOM', 'bathroom');
define('MASTERROOM', 'masterroom');
define('TERRACE', 'terrace');

define('UPLOAD_DIR', 'static/uploads/');

define('SECTIONS', serialize($sections = array(
    KITCHEN => array(
        'cocina-moldura',
        'cocina-fregadero',
        'cocina-caldera',
        'cocina-calentador',
        'cocina-instalacion_electrica_modelo_serie',
        'cocina-mobiliario',
        'cocina-tirador_normal',
        'cocina-tirador_unero',
        'cocina-granito_nacional',
        'cocina-granito_importacion'
    ),
    BATHROOM => array(
        'bano-moldura',
        'bano-inodoro',
        'bano-bide',
        'bano-lavabo',
        'bano-mueble',
        'bano-espejo',
        'bano-banera',
        'bano-mampara',
        'bano-instalacion-electrica',
        'griferia-lavabo',
        'griferia-ducha',
        'griferia-columnas',
        'griferia-banera',
        'griferia-bide',
        'griferia-auxiliar-inodoro',
        'griferia-accesorios'
    ),
    MASTERROOM => array(
        'habitacion_moldura',
        'habitacion_puerta_madera',
        'habitacion_puerta_lacada',
        'habitacion_puerta_manilla',
        'habitacion_empotrado_roble',
        'habitacion_empotrado_lacado',
        'habitacion_empotrado_sapelly',
        'habitacion_empotrado_wengue',
        'habitacion_ventanas'
    ),
    TERRACE => array(
        'terraza_moldura',
        'terraza_puerta_madera',
        'terraza_puerta_lacada',
        'terraza_puerta_manilla',
        'terraza_ventanas_modelos_tipicos'
    )
)));

define('FIELDS', serialize($fields = array(
    KITCHEN => array(
        'moldura_producto_array' => 'moldura_producto_grupo_id',
        'fregadero_producto_array' => 'fregadero_producto_grupo_id',
        'calentador_producto_array' => 'calentador_producto_grupo_id',
        'caldera_producto_array' => 'caldera_producto_grupo_id',
        'instalacion_electrica_producto_array' => 'instalacion_electrica_producto_grupo_id',
        'tirador_normal_producto_array' => 'tirador_normal_producto_grupo_id',
        'tirador_unero_producto_array' => 'tirador_unero_producto_grupo_id',
        'granito_nacional_producto_array' => 'granito_nacional_producto_grupo_id',
        'granito_importacion_producto_array' => 'granito_importacion_producto_grupo_id',
        'mobiliario_producto_array' => 'mobiliario_producto_grupo_id'
    ),
    BATHROOM => array(
        'inodoro_producto_array' => 'inodoro_grupo_producto_id',
        'bide_producto_array' => 'bide_grupo_producto_id',
        'lavabo_producto_array' => 'lavabo_grupo_producto_id',
        'mueble_producto_array' => 'mueble_grupo_producto_id',
        'espejo_producto_array' => 'espejo_grupo_producto_id',
        'banera_producto_array' => 'banera_grupo_producto_id',
        'griferia_lavabo_producto_array' => 'griferia_lavabo_producto_id',
        'griferia_ducha_producto_array' => 'griferia_ducha_grupo_producto_id',
        'griferia_columnas_producto_array' => 'griferia_columnas_grupo_producto_id',
        'griferia_banera_producto_array' => 'griferia_banera_producto_id',
        'griferia_bide_producto_array' => 'griferia_bide_grupo_producto_id',
        'griferia_auxiliar_inodoro_producto_array' => 'griferia_auxiliar_inodoro_grupo_producto_id',
        'griferia_accesorios_producto_array' => 'griferia_accesorios_producto_id',
        'instalacion_electrica_producto_array' => 'instalacion_electrica_grupo_producto_id'
    ),
    MASTERROOM => array(
        'moldura_producto_array' => 'moldura_producto_grupo_id',
        'ventanas_producto_array' => 'ventanas_producto_grupo_id',
        'puerta_madera_producto_array' => 'puerta_madera_producto_grupo_id',
        'puerta_lacada_producto_array' => 'puerta_lacada_producto_grupo_id',
        'puerta_manilla_producto_array' => 'puerta_manilla_producto_grupo_id',
        'empotrado_roble_producto_array' => 'empotrado_roble_producto_grupo_id',
        'empotrado_lacado_producto_array' => 'empotrado_lacado_producto_grupo_id',
        'empotrado_sapelly_producto_array' => 'empotrado_sapelly_producto_grupo_id',
        'empotrado_wengue_producto_array' => 'empotrado_wengue_producto_grupo_id'
    ),
    TERRACE => array(
        'moldura_producto_array' => 'moldura_producto_grupo_id',
        'puerta_madera_producto_array' => 'puerta_madera_producto_grupo_id',
        'puerta_lacada_producto_array' => 'puerta_lacada_producto_grupo_id',
        'puerta_manilla_producto_array' => 'puerta_manilla_producto_grupo_id',
        // 'ventanas_irregular_producto_array' => 'ventanas_irregular_producto_grupo_id',
       'ventanas_producto_array' => 'ventanas_producto_grupo_id'
    )
)));
?>
