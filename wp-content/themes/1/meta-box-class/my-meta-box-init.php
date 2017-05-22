<?php
require_once("my-meta-box-class.php");

if (is_admin()){
  
  $prefix = 'tm_';

  $config = array(
    'id'             => 'meta_box',
    'title'          => __('Post Icons', CURRENT_THEME),
    'pages'          => array('post'),
    'context'        => 'normal',
    'priority'       => 'high',
    'fields'         => array(),
    'local_images'   => false,
    'use_with_theme' => true
  );

  $my_meta =  new AT_Meta_Box($config);
  //text field
  $my_meta->addText($prefix.'text_field_id',array('name'=> __('Post Icon', CURRENT_THEME), 'desc' => __('Please enter name of FontAwesome icon.', CURRENT_THEME)));
  
  $my_meta->Finish();

}
