<?php
/*

Plugin Name: PxFinder-Box
Plugin URI: http://pxfinder.com/pxfinder-box
Description: Simple image viewer.
Version: 0.2
Author: munimumu
Author URI: http://pxfinder.com/
Licence: MIT License

Copyright 2014 PxFinder

*/

function pfb() {
	if(is_single()) :
?>
<script>
	jQuery(function(){
		var trigger = jQuery(".entry-content").find("a[href$='.jpg'], a[href$='.png'], a[href$='.jpeg']");
		jQuery(trigger).pfb();
	});
</script>
<?php
	endif;
}

if (!is_admin()) {
	wp_enqueue_script('jquery');
	wp_enqueue_script('pxfinder-box', plugins_url().'/pxfinder-box/pxfinder-box.min.js', array('jquery'), '0.1', true);
	wp_enqueue_style('pxfinder-box', plugins_url().'/pxfinder-box/pxfinder-box.min.css', false, '0.1');
	add_action('wp_footer', 'pfb');
}
?>
