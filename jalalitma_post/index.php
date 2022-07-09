<?php
/** 
 * Hello admin site & user 
 * 
 * @package post update bot
 * @author mohammad bagheri
 * @copyright 2022 mohammad bagheri & t-ma.ir devloper 
 * @license GPL-2.0-or-later 
 * 
 * @mmbi18
 * Plugin Name:  post update bot
 * Plugin URI: https://t-ma.ir
 * Description: Prints "1401-04-17" in WordPress in post short code. 
 * Version: 0.0.1 
 * Author: mohammad bagheri
 * Author URI: https://t-ma.ir 
 * Text Domain: ir iran date in post 
 * License: GPL v2 or later 
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt */
// Add Shortcode



define('APFSURL', WP_PLUGIN_URL."/".dirname( plugin_basename( __FILE__ ) ) );
define('APFPATH', WP_PLUGIN_DIR."/".dirname( plugin_basename( __FILE__ ) ) );


if ( ! defined( 'ABSPATH' ) ) { 
    exit; // Exit if accessed directly
}

function date_tma_daywtitel() {

    require_once('inc/jdftma.php');
    date_default_timezone_set("Iran");
//echo date("h:i:s");

    return  (  get_the_title() .' '. jdatetma(' Y F j') );
}

function date_tma_dayw() {

    require_once('inc/jdftma.php');
    date_default_timezone_set("Iran");
//echo date("h:i:s");
    return jdatetma('Y F j');
}
//l
function date_tma_daywtitelday() {

    require_once('inc/jdftma.php');
    date_default_timezone_set("Iran");
//echo date("h:i:s");

    return  (  get_the_title() .' '. jdatetma('l Y F j') );
}
function register_shortcodestma(){

add_shortcode( 'datetmadayw', 'date_tma_dayw' );
//date_tma_daywtitel
add_shortcode( 'datetmadaywtitel', 'date_tma_daywtitel' );


add_shortcode( 'datetmadaywtitelday', 'date_tma_daywtitelday' );

}
add_action( 'init', 'register_shortcodestma');

?>