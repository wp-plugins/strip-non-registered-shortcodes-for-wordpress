<?php

/*
 Plugin Name: Strip non-registered Shortcodes
Plugin URI: http://codecanyon.net/
Description: Plugin strips all of yours unregistered shortcodes
Version: 1.0
Author: heyman
Author URI: mailto:gurantman@gmail.com
License: GPLv2 or later
 */
 
 

function strip_nonscodes($text){
      
    global $shortcode_tags;
    
    if(!(empty($shortcode_tags) || !is_array($shortcode_tags))){                    
     
        $exclude_codes = join( '|', array_map('preg_quote', array_keys($shortcode_tags)));           

        $text = preg_replace("/\[(?!(".$exclude_codes."))(.*?)(?:(\/))?\](?:(.+?)\[\/\2\])?/s",'', $text);  #strip shortcode       
    }
  
    return $text;
}
add_filter('the_content','strip_nonscodes');

?>
