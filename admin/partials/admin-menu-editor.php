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
    __( '', 'menu-item-editor' ), // title //
    'jb_api_settings_section_callback', // callback //
    'jbPlugin' // page group name //
  );
  // Fields //
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
  // -- pages removal -- //
  add_settings_field(
    'adminmenu_hidepagesswp',
    __( 'Hide Pages Tab', 'menu-item-editor' ),
    'adminmenu_hidepagesswp_cb',
    'jbPlugin',
    'jbPlugin_section'
  );
  // -- comments removal -- //
  add_settings_field(
    'adminmenu_hidecommentsswp',
    __( 'Hide Comments Tab', 'menu-item-editor' ),
    'adminmenu_hidecommentsswp_cb',
    'jbPlugin',
    'jbPlugin_section'
  );
  // -- appearence removal -- //
  add_settings_field(
    'adminmenu_hideappswp',
    __( 'Hide Appearence Tab', 'menu-item-editor' ),
    'adminmenu_hideappswp_cb',
    'jbPlugin',
    'jbPlugin_section'
  );
  // -- plugin removal -- //
  add_settings_field(
    'adminmenu_hidepluginswp',
    __( 'Hide Plugins Tab', 'menu-item-editor' ),
    'adminmenu_hidepluginswp_cb',
    'jbPlugin',
    'jbPlugin_section'
  );
  // -- user removal -- //
  add_settings_field(
    'adminmenu_hideuserswp',
    __( 'Hide User Tab', 'menu-item-editor' ),
    'adminmenu_hideuserswp_cb',
    'jbPlugin',
    'jbPlugin_section'
  );
  // -- tools removal -- //
  add_settings_field(
    'adminmenu_hidetoolswp',
    __( 'Hide Tools Tab', 'menu-item-editor' ),
    'adminmenu_hidetoolswp_cb',
    'jbPlugin',
    'jbPlugin_section'
  );
  // -- settings removal -- //
  add_settings_field(
    'adminmenu_hidesettingswp',
    __( 'Hide Settings Tab', 'menu-item-editor' ),
    'adminmenu_hidesettingswp_cb',
    'jbPlugin',
    'jbPlugin_section'
  );
}
// description //
function jb_api_settings_section_callback(  ) {
  echo __( 'Control which menu items are shown in the admin menu. By ticking an item below will hide that tab from the admin menu.', 'menu-item-editor' );
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
function remove_wp_pageswp_tab() {
  remove_menu_page( 'edit.php?post_type=page' );
}
function remove_wp_commentsswp_tab() {
  remove_menu_page( 'edit-comments.php' );
}
function remove_wp_appear_tab() {
  remove_menu_page( 'themes.php' );
}
function remove_wp_pluginwp_tab() {
  remove_menu_page( 'plugins.php' );
}
function remove_wp_userwp_tab() {
  remove_menu_page( 'users.php' );
}
function remove_wp_toolswp_tab() {
  remove_menu_page( 'tools.php' );
}
function remove_wp_settingsswp_tab() {
  remove_menu_page( 'options-general.php' );
}
// the above functions are managed and called in hide-menu-callbacks based on user input //
// show panel //
function adminEditor_welcomepanel(  ) { ?>

  <div class="mie_admin_hdr">
    <h1>WordPress Menu Item Editor</h1>
  </div>
  <div class="mie_admin_wrap">
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
  </div>
  <?php
}
