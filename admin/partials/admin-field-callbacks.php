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
// hide appearence menu //
function adminmenu_hideappswp_cb() {
    $options = get_option( 'jb_api_settings' );
    if(is_array( $options )) {
      $options['adminmenu_hideappswp'] = empty( $options['adminmenu_hideappswp'] ) ? 0 : 1;
    }
    else {
      $options = [];
      $options['adminmenu_hideappswp'] = empty( $options['adminmenu_hideappswp'] ) ? 0 : 1;
    }
    ?>
    <input type="checkbox" name='jb_api_settings[adminmenu_hideappswp]' value="1" <?php checked( 1,  $options['adminmenu_hideappswp']); ?> />
<?php
}
// hide plugins menu //
function adminmenu_hidepluginswp_cb() {
    $options = get_option( 'jb_api_settings' );
    if(is_array( $options )) {
      $options['adminmenu_hidepluginswp'] = empty( $options['adminmenu_hidepluginswp'] ) ? 0 : 1;
    }
    else {
      $options = [];
      $options['adminmenu_hidepluginswp'] = empty( $options['adminmenu_hidepluginswp'] ) ? 0 : 1;
    }
    ?>
    <input type="checkbox" name='jb_api_settings[adminmenu_hidepluginswp]' value="1" <?php checked( 1,  $options['adminmenu_hidepluginswp']); ?> />
<?php
}
// hide users menu //
function adminmenu_hideuserswp_cb() {
    $options = get_option( 'jb_api_settings' );
    if(is_array( $options )) {
      $options['adminmenu_hideuserswp'] = empty( $options['adminmenu_hideuserswp'] ) ? 0 : 1;
    }
    else {
      $options = [];
      $options['adminmenu_hideuserswp'] = empty( $options['adminmenu_hideuserswp'] ) ? 0 : 1;
    }
    ?>
    <input type="checkbox" name='jb_api_settings[adminmenu_hideuserswp]' value="1" <?php checked( 1,  $options['adminmenu_hideuserswp']); ?> />
<?php
}
// hide tools menu //
function adminmenu_hidetoolswp_cb() {
    $options = get_option( 'jb_api_settings' );
    if(is_array( $options )) {
      $options['adminmenu_hidetoolswp'] = empty( $options['adminmenu_hidetoolswp'] ) ? 0 : 1;
    }
    else {
      $options = [];
      $options['adminmenu_hidetoolswp'] = empty( $options['adminmenu_hidetoolswp'] ) ? 0 : 1;
    }
    ?>
    <input type="checkbox" name='jb_api_settings[adminmenu_hidetoolswp]' value="1" <?php checked( 1,  $options['adminmenu_hidetoolswp']); ?> />
<?php
}
// hide settings menu //
function adminmenu_hidesettingswp_cb() {
    $options = get_option( 'jb_api_settings' );
    if(is_array( $options )) {
      $options['adminmenu_hidesettingswp'] = empty( $options['adminmenu_hidesettingswp'] ) ? 0 : 1;
    }
    else {
      $options = [];
      $options['adminmenu_hidesettingswp'] = empty( $options['adminmenu_hidesettingswp'] ) ? 0 : 1;
    }
    ?>
    <input type="checkbox" name='jb_api_settings[adminmenu_hidesettingswp]' value="1" <?php checked( 1,  $options['adminmenu_hidesettingswp']); ?> />
<?php
}
?>
