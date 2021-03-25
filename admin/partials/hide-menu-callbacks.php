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
}
?>
