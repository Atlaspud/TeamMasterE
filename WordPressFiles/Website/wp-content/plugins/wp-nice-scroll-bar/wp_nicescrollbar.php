<?php 
/*
Plugin Name: WP Nice Scroll Bar
Plugin URI: http://sit-groupbd.boxhost.me/plugins
Description: This plugin is nice scrollbar in your wordpress site when up and down than show it
Author: Habibur Rahaman
Author URI: http://sit-groupbd.boxhost.me
Version:1.0.1
*/

/*Adding latest jQuery from wordpress */
function scrollbar_latest_jquery(){
	wp_enqueue_script('jquery');
	}
add_action('init', 'scrollbar_latest_jquery');

define('WP_NICE_SCROLLBAR', WP_PLUGIN_URL . '/' . plugin_basename(dirname(__FILE__)). '/');

wp_enqueue_script('wp-nice-scrollbar-main-js', WP_NICE_SCROLLBAR.'js/jquery.nicescroll.min.js', array('jquery'));

wp_enqueue_style('nice-scrollbar-custom-css',WP_NICE_SCROLLBAR.'css/nice_scrollbar.css');


function wp_nice_scrollbar_active(){ ?>
	<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery("html").niceScroll({
				cursorcolor:"#4d4d4d",
				cursorborder:"0px",
				cursorwidth:"7px",
			});
		});
	</script>

<?php
}
add_action('wp_head','wp_nice_scrollbar_active');
?>