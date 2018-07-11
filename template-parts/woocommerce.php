<?php
function _s_wrapper_start() {  
    echo '<div id="primary" class="content-area">';
}
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
add_action( 'woocommerce_before_main_content', '_s_wrapper_start', 10 ); 

function _s_wrapper_end() {
    echo '</div>';
}
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );  
add_action( 'woocommerce_after_main_content', '_s_wrapper_end', 10 );