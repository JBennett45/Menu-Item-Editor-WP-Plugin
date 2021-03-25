<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.jbdev.co.uk
 * @since      1.0.0
 *
 * @package    Menu_Item_Editor
 * @subpackage Menu_Item_Editor/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Menu_Item_Editor
 * @subpackage Menu_Item_Editor/includes
 * @author     Jon Bennett <bennett_708@hotmail.com>
 */
class Menu_Item_Editor_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'menu-item-editor',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
