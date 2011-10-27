=== Strip Non Registered Shortcodes for WordPress ===
Contributors: antondev
Tags: content management, shortcodes
Requires at least: 3.0.1
Tested up to: 3.2.1
Stable tag: trunk
Version: 1.0

This plugin was developed for your convenience. It easily strips all of non-registered shortcodes.

== Description ==

  This plugin was developed for your convenience.
  It easily strips all of non-registered shortcodes, just activate it 
  (! Non-registered shortcodes are non-system WordPress shortcodes and shortcodes which were not included by "add_shortcode" function in the current template.)
  The plugin doesn't delete your shortcodes from data base it just hides them.
  Deactivate plugin for virgin view of your web-site content.

For example:

  You have changed template of your web-site and all of your shortcodes from previous template now are non-registered,
  they will be rendered on your web-site like:         
  
 "simplecontent [nonregtag] simplecontent simplecontent simplecontent simplecontent simplecontent 
  simplecontent simplecontent simplecontent simplecontent simplecontent simplecontent 
  simplecontent simplecontent [nonregshortcode title="sometitle"]scontent[/nonregshortcode] simplecontent simplecontent"(originally content)
  
after activation of the plugin you get something like:

 "simplecontent simplecontent simplecontent simplecontent simplecontent simplecontent
  simplecontent simplecontent simplecontent simplecontent simplecontent simplecontent
  simplecontent simplecontent scontent simplecontent simplecontent" (stripped content)
 
if you want to return your original content just deactivate the plugin.  

== Installation ==

1. Upload `strip_nonreg_scodes.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress



If you have any problem with integration of the plugin or if some adjustment is needed you can contact me by email (gurantman@gmail.com)


