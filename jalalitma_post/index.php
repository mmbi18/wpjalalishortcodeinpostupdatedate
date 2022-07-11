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
 * Description: Prints "1401-04-20" in WordPress in post short code [datetmadayw] [datetmamj day=1 d4='-'] [datetmadaywtitelday]
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

    include(plugin_dir_path( __FILE__ ) . '/func.php');

?>