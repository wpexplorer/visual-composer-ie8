<?php
/*
Plugin Name Visual Composer ie8 Support
Plugin URI: http://www.wpexplorer.com
Description Loads a vc-ie8.css file for columns support for the Visual Composer plugin by WPBakery
Version: 1.0
Author: WPExplorer
Author URI: http://www.wpexplorer.com
License: GPLv2
*/
function vcie8_head() {
	echo '<!--[if IE 8]><link rel="stylesheet" type="text/css" href="'. plugins_url( 'css/vc-ie8.css', __FILE__) .'" media="screen"><![endif]-->';
}
add_action( 'wp_head', 'vcie8_head' );
