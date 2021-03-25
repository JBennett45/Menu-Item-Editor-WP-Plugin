<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://www.jbdev.co.uk
 * @since      1.0.0
 *
 * @package    Menu_Item_Editor
 * @subpackage Menu_Item_Editor/admin
 */


 // admin tab instructions //
 include( plugin_dir_path( __FILE__ ) . 'partials/admin-menu-editor.php');


/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Menu_Item_Editor
 * @subpackage Menu_Item_Editor/admin
 * @author     Jon Bennett <bennett_708@hotmail.com>
 */
class Menu_Item_Editor_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */

	 // Welcome Panel ..
		public function __construct( $plugin_name, $version ) {
			$this->plugin_name = $plugin_name;
			$this->version = $version;
			// create fluidly welcome tab //
			add_action( 'admin_menu', 'adminEditor_menu' );
			function adminEditor_menu() {
				// Add the menu item and page
				$plugin_Title = 'Menu Editor';
				$menu_title = 'Menu Editor';
				$capability = 'manage_options';
				$slug = 'menu-item-editor';
				$callback = 'adminEditor_menuoutput';
				$icon = 'dashicons-welcome-widgets-menus';
				$position = 100;
				add_menu_page( $plugin_Title, $menu_title, $capability, $slug, $callback, $icon, $position );
			}
			/* Options page callback */
			function adminEditor_menuoutput() {
				adminEditor_welcomepanel();
			}
			// end welcome tab //
		}
	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Menu_Item_Editor_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Menu_Item_Editor_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/menu-item-editor-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Menu_Item_Editor_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Menu_Item_Editor_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/menu-item-editor-admin.js', array( 'jquery' ), $this->version, false );

	}

}
