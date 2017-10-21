<?php

  namespace GformCustom\Classes;

  class Enqueues {

    public function __construct(){

      $this->register_df_scripts();

      //enqueue default scripts
      $this->enqueue_default_scripts();

      //localize standard php variables
      $this->localize_js_vars();

      //register styles
      $this->register_df_styles();

      // enqueue default styles
      $this->enqueue_default_styles();

    }


    public function register_df_styles(){
      wp_register_style('gc-styles-css', GFORM_CUSTOM_URL . "dist/css/style.css");

    }

    public function enqueue_default_styles(){
      wp_enqueue_style('gc-styles-css');
    }

    public function register_df_scripts(){

      //default scripts and object classes
      wp_register_script('gc-scripts-js', GFORM_CUSTOM_URL . 'dist/js/scripts.js', array('jquery','wp-api'));

    }

    public function enqueue_default_scripts(){
      wp_enqueue_script( 'gc-scripts-js');

    }

    public function localize_js_vars(){
      wp_localize_script( 'gc-scripts-js', 'site_url', site_url() );

    }



  }

 ?>
