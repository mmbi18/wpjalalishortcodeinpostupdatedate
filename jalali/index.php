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

function date_tma_dayw() {

    require_once('inc/jdftma.php');
    echo jdate_tma('Y F j');
}
add_shortcode( 'datetmadayw', 'date_tma_dayw' );


?>