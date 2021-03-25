<?php
// hide dashboard updater //
function adminmenu_hideupdates_cb() {
    $options = get_option( 'jb_api_settings' );
    if(is_array( $options )) {
      $options['adminmenu_hideupdates'] = empty( $options['adminmenu_hideupdates'] ) ? 0 : 1;
    }
    else {
      $options = [];
      $options['adminmenu_hideupdates'] = empty( $options['adminmenu_hideupdates'] ) ? 0 : 1;
    }
    ?>
    <input type="checkbox" name='jb_api_settings[adminmenu_hideupdates]' value="1" <?php checked( 1,  $options['adminmenu_hideupdates']); ?> />
<?php
}
// hide posts menu //
function adminmenu_hidepostswp_cb() {
    $options = get_option( 'jb_api_settings' );
    if(is_array( $options )) {
      $options['adminmenu_hidepostswp'] = empty( $options['adminmenu_hidepostswp'] ) ? 0 : 1;
    }
    else {
      $options = [];
      $options['adminmenu_hidepostswp'] = empty( $options['adminmenu_hidepostswp'] ) ? 0 : 1;
    }
    ?>
    <input type="checkbox" name='jb_api_settings[adminmenu_hidepostswp]' value="1" <?php checked( 1,  $options['adminmenu_hidepostswp']); ?> />
<?php
}
// hide posts menu //
function adminmenu_hidemediaswp_cb() {
    $options = get_option( 'jb_api_settings' );
    if(is_array( $options )) {
      $options['adminmenu_hidemediaswp'] = empty( $options['adminmenu_hidemediaswp'] ) ? 0 : 1;
    }
    else {
      $options = [];
      $options['adminmenu_hidemediaswp'] = empty( $options['adminmenu_hidemediaswp'] ) ? 0 : 1;
    }
    ?>
    <input type="checkbox" name='jb_api_settings[adminmenu_hidemediaswp]' value="1" <?php checked( 1,  $options['adminmenu_hidemediaswp']); ?> />
<?php
}
// hide pages menu //
function adminmenu_hidepagesswp_cb() {
    $options = get_option( 'jb_api_settings' );
    if(is_array( $options )) {
      $options['adminmenu_hidepagesswp'] = empty( $options['adminmenu_hidepagesswp'] ) ? 0 : 1;
    }
    else {
      $options = [];
      $options['adminmenu_hidepagesswp'] = empty( $options['adminmenu_hidepagesswp'] ) ? 0 : 1;
    }
    ?>
    <input type="checkbox" name='jb_api_settings[adminmenu_hidepagesswp]' value="1" <?php checked( 1,  $options['adminmenu_hidepagesswp']); ?> />
<?php
}
// hide comments menu //
function adminmenu_hidecommentsswp_cb() {
    $options = get_option( 'jb_api_settings' );
    if(is_array( $options )) {
      $options['adminmenu_hidecommentsswp'] = empty( $options['adminmenu_hidecommentsswp'] ) ? 0 : 1;
    }
    else {
      $options = [];
      $options['adminmenu_hidecommentsswp'] = empty( $options['adminmenu_hidecommentsswp'] ) ? 0 : 1;
    }
    ?>
    <input type="checkbox" name='jb_api_settings[adminmenu_hidecommentsswp]' value="1" <?php checked( 1,  $options['adminmenu_hidecommentsswp']); ?> />
<?php
}

?>
