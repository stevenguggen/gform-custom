<?php

namespace MyPlugin;
use MyPlugin\Shortcodes\Shortcode as Shortcode;

class My_Plugin {

  public function __construct(){
		register_activation_hook( MY_PLUGIN_PATH.'/'.MY_PLUGIN_FILE, array($this, 'plugin_activated'));
    register_deactivation_hook( MY_PLUGIN__PATH.'/'.MY_PLUGIN_FILE, array($this, 'plugin_deactivated'));
    $this->_init();
	}

	public function plugin_activated(){

	}

	public function plugin_deactivated(){

	}

	protected function _init(){
    new Shortcode;
	}

}
