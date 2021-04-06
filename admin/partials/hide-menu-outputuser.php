<?php
$hiddenArray = [];
$options = get_option( 'jb_api_settings' );
echo '<strong id="currentSetting">Current settings:</strong>';
if(is_array($options)) {
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
    array_push($hiddenArray, "Dashboard updates sub menu");
  }
  // posts //
  if($options['adminmenu_hidepostswp'] == 1) {
    array_push($hiddenArray, "Posts");
  }
  // media //
  if($options['adminmenu_hidemediaswp'] == 1) {
    array_push($hiddenArray, "Media");
  }
  // pages //
  if($options['adminmenu_hidepagesswp'] == 1) {
    array_push($hiddenArray, "Pages");
  }
  // commments //
  if($options['adminmenu_hidecommentsswp'] == 1) {
    array_push($hiddenArray, "Comments");
  }
  // apperence //
  if($options['adminmenu_hideappswp'] == 1) {
    array_push($hiddenArray, "Appearence");
  }
  // plugins //
  if($options['adminmenu_hidepluginswp'] == 1) {
    array_push($hiddenArray, "Plugins");
  }
  // users //
  if($options['adminmenu_hideuserswp'] == 1) {
    array_push($hiddenArray, "Users");
  }
  // tools //
  if($options['adminmenu_hidetoolswp'] == 1) {
    array_push($hiddenArray, "Tools");
  }
  // settings //
  if($options['adminmenu_hidesettingswp'] == 1) {
    array_push($hiddenArray, "Setings");
  }
  echo implode(', ', $hiddenArray);
  echo '<br><em>Are currently hidden from the dashboard.</em>';
}
else {
  echo 'You aren\'t hiding any menu items currently.';
}

?>
