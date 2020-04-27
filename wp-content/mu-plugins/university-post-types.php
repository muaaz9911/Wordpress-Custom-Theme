<?php

function university_post_types() {
  register_post_type('event', array(
      'supports' => array('title','editor' , 'excerpt','thumbnail'  ),
      'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Events',
      'add_new_item' => 'Add New Event',
      'edit_item' => 'Edit Event',
      'all_items' => 'All Events',
      'singular_name' => 'Event'
    ),
    'menu_icon' => 'dashicons-calendar'
  ));

register_post_type('Program', array(
      'supports' => array('title','editor' , 'excerpt' ,'thumbnail' ),
      'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'programs',
      'add_new_item' => 'Add New program',
      'edit_item' => 'Edit program',
      'all_items' => 'All programs',
      'singular_name' => 'program'
    ),
    'menu_icon' => 'dashicons-calendar'
  ));


register_post_type('Professor', array(
      'supports' => array('title','editor' , 'excerpt' , 'thumbnail' ),
    'public' => true,
    'labels' => array(
      'name' => 'Professors',
      'add_new_item' => 'Add New Professor',
      'edit_item' => 'Edit Professor',
      'all_items' => 'All Professors',
      'singular_name' => 'Professor'
    ),
    'menu_icon' => 'dashicons-calendar'
  ));

}

add_action('init', 'university_post_types');