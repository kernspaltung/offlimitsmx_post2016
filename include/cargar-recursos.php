<?php

function cargar_estilos() {
   wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() . "/bower_components/font-awesome/css/font-awesome.min.css");
   wp_enqueue_style("google-fonts", "https://fonts.googleapis.com/css?family=Permanent+Marker|Special+Elite|Averia+Sans+Libre|Open+Sans");
   wp_enqueue_style('js_utils', get_stylesheet_directory_uri() . "/recursos/js_utils/dist/stylesheet/js_utils.min.css");
   wp_enqueue_style('slick', get_stylesheet_directory_uri() . "/bower_components/slick-carousel/slick/slick.css");
   wp_enqueue_style('slick-theme', get_stylesheet_directory_uri() . "/bower_components/slick-carousel/slick/slick-theme.css");
   wp_enqueue_style('app', get_stylesheet_directory_uri() . "/css/app.css");
}


function cargar_scripts() {

   wp_enqueue_script('jquery', get_stylesheet_directory_uri() . "/bower_components/jquery/dist/jquery.min.js", array('jquery') );
   wp_enqueue_script('what-input', get_stylesheet_directory_uri() . "/bower_components/what-input/what-input.js", array('jquery') );
   wp_enqueue_script('foundation', get_stylesheet_directory_uri() . "/bower_components/foundation-sites/dist/foundation.js", array('jquery') );
   wp_enqueue_script('imgLiquid', get_stylesheet_directory_uri() . "/bower_components/imgLiquid/js/imgLiquid-min.js", array('jquery') );
   wp_enqueue_script('slick', get_stylesheet_directory_uri() . "/bower_components/slick-carousel/slick/slick.min.js", array('jquery') );
   wp_enqueue_script('blazy', get_stylesheet_directory_uri() . "/bower_components/bLazy/blazy.min.js" );
   wp_enqueue_script('js_utils', get_stylesheet_directory_uri() . "/recursos/js_utils/dist/js/js_utils.min.js", array('jquery') );
   wp_enqueue_script('app', get_stylesheet_directory_uri() . "/js/app.js", array('jquery','blazy') );

}

add_action('wp_enqueue_scripts', 'cargar_scripts' );

add_action('wp_enqueue_scripts', 'cargar_estilos' );

?>
