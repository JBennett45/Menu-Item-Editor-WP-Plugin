<?php
// control menu //
$options = get_option( 'jb_api_settings' );
// check something exists //
if(is_array($options)) {
  // remove nothing error //
  $options['adminmenu_hideupdates'] = empty( $options['adminmenu_hideupdates'] ) ? 0 : 1;
  $options['adminmenu_hidepostswp'] = empty( $options['adminmenu_hidepostswp'] ) ? 0 : 1;
  $options['adminmenu_hidemediaswp'] = empty( $options['adminmenu_hidemediaswp'] ) ? 0 : 1;
  $options['adminmenu_hidepagesswp'] = empty( $options['adminmenu_hidepagesswp'] ) ? 0 : 1;
  $options['adminmenu_hidecommentsswp'] = empty( $options['adminmenu_hidecommentsswp'] ) ? 0 : 1;
  $options['adminmenu_hidepluginswp'] = empty( $options['adminmenu_hidepluginswp'] ) ? 0 : 1;
  $options['adminmenu_hideuserswp'] = empty( $options['adminmenu_hideuserswp'] ) ? 0 : 1;
  $options['adminmenu_hidetoolswp'] = empty( $options['adminmenu_hidetoolswp'] ) ? 0 : 1;
  $options['adminmenu_hidesettingswp'] = empty( $options['adminmenu_hidesettingswp'] ) ? 0 : 1;
  $options['adminmenu_hideappswp'] = empty( $options['adminmenu_hideappswp'] ) ? 0 : 1;
  // db updater //
  if($options['adminmenu_hideupdates'] == 1) {
    add_action( 'admin_init', 'remove_wp_updates_tab' );
  }
  // posts //
  if($options['adminmenu_hidepostswp'] == 1) {
    add_action( 'admin_init', 'remove_wp_postwp_tab' );
  }
  // media //
  if($options['adminmenu_hidemediaswp'] == 1) {
    add_action( 'admin_init', 'remove_wp_mediawp_tab' );
  }
  // pages //
  if($options['adminmenu_hidepagesswp'] == 1) {
    add_action( 'admin_init', 'remove_wp_pageswp_tab' );
  }
  // commments //
  if($options['adminmenu_hidecommentsswp'] == 1) {
    add_action( 'admin_init', 'remove_wp_commentsswp_tab' );
  }
  // apperence //
  if($options['adminmenu_hideappswp'] == 1) {
    add_action( 'admin_init', 'remove_wp_appear_tab' );
  }
  // plugins //
  if($options['adminmenu_hidepluginswp'] == 1) {
    add_action( 'admin_init', 'remove_wp_pluginwp_tab' );
  }
  // users //
  if($options['adminmenu_hideuserswp'] == 1) {
    add_action( 'admin_init', 'remove_wp_userwp_tab' );
  }
  // tools //
  if($options['adminmenu_hidetoolswp'] == 1) {
    add_action( 'admin_init', 'remove_wp_toolswp_tab' );
  }
  // settings //
  if($options['adminmenu_hidesettingswp'] == 1) {
    add_action( 'admin_init', 'remove_wp_settingsswp_tab' );
  }
}
?>
