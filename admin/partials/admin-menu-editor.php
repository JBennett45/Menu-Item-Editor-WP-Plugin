<?php
/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://www.jbdev.co.uk
 * @since      1.0.0
 *
 * @package    Versioncontrolhelper
 * @subpackage Versioncontrolhelper/admin/partials
 */

// init //
add_action( 'admin_init', 'plugin_fields_api_init' );
// include field callbacks //
include( plugin_dir_path( __FILE__ ) . 'admin-field-callbacks.php');
// include hide callbacks //
include( plugin_dir_path( __FILE__ ) . 'hide-menu-callbacks.php');

function plugin_fields_api_init(  ) {
  // setting //
  register_setting(
    'jbPlugin', // settings group name //
    'jb_api_settings' // option name to be saved to //
  );
  // section //
  add_settings_section(
    'jbPlugin_section', // ID //
    __( 'Remove WordPress default menu items', 'menu-item-editor' ), // title //
    'jb_api_settings_section_callback', // callback //
    'jbPlugin' // page group name //
  );
  // checkboxes //
  // -- dashboard 'updates' sub menu removal -- //
  add_settings_field(
    'adminmenu_hideupdates',
    __( 'Hide Dashboard Updates Tab', 'menu-item-editor' ),
    'adminmenu_hideupdates_cb',
    'jbPlugin',
    'jbPlugin_section'
  );
  // -- posts removal -- //
  add_settings_field(
    'adminmenu_hidepostswp',
    __( 'Hide Posts Tab', 'menu-item-editor' ),
    'adminmenu_hidepostswp_cb',
    'jbPlugin',
    'jbPlugin_section'
  );
  // -- media removal -- //
  add_settings_field(
    'adminmenu_hidemediaswp',
    __( 'Hide Media Tab', 'menu-item-editor' ),
    'adminmenu_hidemediaswp_cb',
    'jbPlugin',
    'jbPlugin_section'
  );
}
// description //
function jb_api_settings_section_callback(  ) {
  echo __( 'Control the menu items that are shown or hidden, ticking an item below will hide that tab from the admin menu.', 'menu-item-editor' );
}
// removal of admin panels //
function remove_wp_updates_tab() {
  remove_submenu_page( 'index.php', 'update-core.php' );
}
function remove_wp_postwp_tab() {
  remove_menu_page( 'edit.php' );
}
function remove_wp_mediawp_tab() {
  remove_menu_page( 'upload.php' );
}

// the above functions are managed and called in hide-menu-callbacks based on user input //

// show panel //
function adminEditor_welcomepanel(  ) { ?>
  <form action='options.php' method='post'>
    <?php
      settings_fields( 'jbPlugin' );
      do_settings_sections( 'jbPlugin' );
      submit_button();
    ?>
    <?php
      $options = get_option( 'jb_api_settings' );
      var_dump($options);
    ?>
  </form>
  <?php
}
