<?php
	/**
	* French translation.
	* 
	* @package french_translation
	* @author Raccourci, Human Connect
	* @link http://www.elgg.org/
	*/
	
	if (!elgg_get_config("system_cache_enabled") || !elgg_get_config("i18n_loaded_from_cache")) {
		register_translations(dirname(__FILE__) . "/languages/", true);
	}
	