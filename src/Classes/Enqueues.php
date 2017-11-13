<?php

  namespace GformCustom\Classes;

  class Enqueues {

    public function __construct(){

      $this->register_scripts();

      //enqueue default scripts
      $this->enqueue_default_scripts();

      //localize standard php variables
      $this->localize_js_vars();

      //register styles
      $this->register_styles();

      // enqueue default styles
      $this->enqueue_default_styles();

    }


    public function register_styles(){
      wp_register_style('gc-styles-css', GFORM_CUSTOM_URL . "/css/main.css");
      wp_register_style('gc-gmaps-css', "https://fonts.googleapis.com/css?family=Roboto:300,400,500");
      wp_register_style('jquery-ui-css', "//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css");


    }

    public function enqueue_default_styles(){
      wp_enqueue_style('gc-styles-css');
      wp_enqueue_style('gc-gmaps-css');
      wp_enqueue_style('jquery-ui-css');

    }

    public function register_scripts(){

      //default scripts and object classes
      wp_register_script( 'gc-scripts-js', GFORM_CUSTOM_URL . 'dist/js/scripts.js', array('jquery','wp-api'));

      //google places autocomplete
      wp_register_script( 'google-maps-js', ( is_ssl() ? 'https' : 'http' ) . '://maps.googleapis.com/maps/api/js?key=AIzaSyASGfbU9cwfKWcKPr3t5sFHKyUcUocZj-g&libraries=places', null, true );
      wp_register_script( 'google-place-js', GFORM_CUSTOM_URL .'dist/js/googleplace.js', array('jquery','google-maps-js'), null, true );
      wp_register_script( 'google-maps-main-js', GFORM_CUSTOM_URL . 'dist/js/gmaps.js', array('jquery','google-maps-js','google-place-js'),null,true);

      //jquery ui slider

      wp_register_script( 'gc-range-slider', GFORM_CUSTOM_URL . 'dist/js/range-slider.js', array('jquery','jquery-ui-core','jquery-ui-slider'),null,true);

    }

    public function enqueue_default_scripts(){
      wp_enqueue_script( 'gc-scripts-js' );
      wp_enqueue_script( 'google-maps-js' );
      wp_enqueue_script( 'google-place-js' );
      wp_enqueue_script( 'google-maps-main-js' );
      wp_enqueue_script( 'gc-range-slider' );

    }

    public function localize_js_vars(){
      wp_localize_script( 'gc-scripts-js', 'site_url', site_url() );
    }

  }

 ?>
