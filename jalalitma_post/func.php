<?php
function date_tma_daywtitel() {
    return  (  get_the_title() .' '. jdatetma(' Y F j') );
}

function date_tma_dayw() {
    return jdatetma('j F Y');
}
//l
function date_tma_daywtitelday() {
    return  (  get_the_title() .' '. jdatetma('Y l j F') );
}
function date_tma_mj($atts) {
    // [datetmamj day=1 d4='-']
     $atts = shortcode_atts( array(
        'day' => date("Y"),
        'd4' => '-',
    ), $atts, 'datetmamj' );
 
 $day=$atts['day'];
 $d4=$atts['d4'];
 
 $d1=date("Y");
 $d2=date("m");
 if($day>date("d")){
 $d3=date("d");
 }else{
 $d3=date("d")-$day;    
 }
    return  ( gregorian_to_jalalitma($d1,$d2,$d3,$d4) ) ;
    
}

//----------------------------------------------------
//include func
function register_shortcodestma(){
    require_once('inc/jdftma.php');
    date_default_timezone_set("Iran");
    
add_shortcode( 'datetmadayw', 'date_tma_dayw' );
//date_tma_daywtitel
add_shortcode( 'datetmadaywtitel', 'date_tma_daywtitel' );


add_shortcode( 'datetmadaywtitelday', 'date_tma_daywtitelday' );
//date_tma_mj
add_shortcode( 'datetmamj', 'date_tma_mj' );

}
add_action( 'init', 'register_shortcodestma');
