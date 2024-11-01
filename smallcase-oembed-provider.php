<?php
/**
 * Plugin Name: smallcase oEmbed Provider
 * Description: The plugin extends Wordpress's automatic embed feature, allowing you to directly embed smallcase cards from the embed URL
 * Version: 1.1
 * Author: smallcase
 * Author URI: https://www.smallcase.com
 * License: GPLv2
 * Requires at least: 2.9
 */

function add_smallcase_oembed_provider () {
  // This adds a URL format and oEmbed provider URL pair
  // More at https://developer.wordpress.org/reference/functions/wp_oembed_add_provider/
  wp_oembed_add_provider( '#https://(www\.)?smallcase\.com/embed*#i', "https://www.smallcase.com/embed/api/oembed", true);
}

add_action( 'init', 'add_smallcase_oembed_provider' );
