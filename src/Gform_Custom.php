<?php

namespace GformCustom;
use GformCustom\Classes\Shortcodes as Shortcodes;
use GformCustom\Classes\Enqueues as Enqueues;
use GformCustom\Classes\Gforms as Gforms;


class Gform_Custom {

  public function __construct(){
		register_activation_hook( GFORM_CUSTOM_PATH.'/'.GFORM_CUSTOM_FILE, array($this, 'plugin_activated'));
    register_deactivation_hook( GFORM_CUSTOM__PATH.'/'.GFORM_CUSTOM_FILE, array($this, 'plugin_deactivated'));
    $this->_init();
	}

	public function plugin_activated(){

	}

	public function plugin_deactivated(){

	}

	protected function _init(){
    new Shortcodes;
    new Enqueues;
    new Gforms;
	}

}
