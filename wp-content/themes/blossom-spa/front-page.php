<?php
/**
 * Front Page
 * 
 * @package Blossom_Spa
 */
  get_header();?>
<h1>front</h1>
  <?php

$home_sections = blossom_spa_get_home_sections();

if ( 'posts' == get_option( 'show_on_front' ) ) { //Show Static Blog Page
    include( get_home_template() );
}elseif( $home_sections ){ 
  
    //If any one section are enabled then show custom home page.
    foreach( $home_sections as $section ){
        get_template_part( 'sections/' . esc_attr( $section ) );  
    }
   
}else {
    //If all section are disabled then show respective page template. 
    include( get_page_template() );
}

get_footer();