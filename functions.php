<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	// wp_enqueue_style( 'responsive-style', get_stylesheet_directory_uri() . '/responsive.css' );
}

// if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
// function my_jquery_enqueue() {
//    wp_deregister_script('jquery');
//    wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js", false, null);
//    wp_enqueue_script('jquery');
// }

function charis_sutehall_child_scripts() {
    if( is_front_page() ) {
      // wp_enqueue_script( 'charis-sutehall-slidr', get_stylesheet_directory_uri() . '/js/slidr.js',  '', '', true );
    }
  	// wp_enqueue_script( 'charis-sutehall-slidr-custom', get_template_directory_uri() . '/js/slidr-custom.js', array('charis-sutehall-slidr'),  true );
    wp_enqueue_script( 'charis-sutehall-modernizr', get_stylesheet_directory_uri() . '/js/modernizr.custom.js', '', '', true );
    wp_enqueue_script( 'charis-sutehall-toucheffects', get_stylesheet_directory_uri() . '/js/toucheffects.js',  '', '', true );
}
add_action( 'wp_enqueue_scripts', 'charis_sutehall_child_scripts' );

//enqueues our external font awesome stylesheet
function enqueue_our_required_stylesheets(){
	wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'googe-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto+Slab:100,300,400' );
}
add_action('wp_enqueue_scripts','enqueue_our_required_stylesheets');

// Add SVG Support to media uploader
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

// Ensure cart contents update when products are added to the cart via AJAX

function my_header_add_to_cart_fragment( $fragments ) {
   	ob_start();
   	$count = WC()->cart->cart_contents_count;
?>
<a href="http://www.charissutehall.co.uk/?page_id=6" class="basket">
	<button class="basket-mobile">
			<!-- Basket Count -->
			<?php
				$count = WC()->cart->cart_contents_count;
				if ( $count > 0 ) {
					echo "<span class='basket-count'>{$count}</span>";
				}
			?>
	</button>
</a>
<?php
	$fragments['button.basket-mobile'] = ob_get_clean();

    return $fragments;
}
add_filter( 'woocommerce_add_to_cart_fragments', 'my_header_add_to_cart_fragment' );

// Remove login error messages
add_filter('login_errors',create_function('$a', "return null;"));

// List only 3 related products
function woo_related_products_limit() {
global $product;

$args['posts_per_page'] = 6;
return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'related_products_args' );
function related_products_args( $args ) {

$args['posts_per_page'] = 3; // 4 related products
$args['columns'] = 3; // arranged in 2 columns
return $args;
}


// Change number of products that are displayed per page (shop page)

add_filter( 'loop_shop_per_page', 'new_loop_shop_per_page', 9 );

function new_loop_shop_per_page( $cols ) {
  // $cols contains the current number of products per page based on the value stored on Options -> Reading
  // Return the number of products you wanna show per page.
  $cols = 9;
  return $cols;
}

// Add custom image size for commissions page
add_image_size( 'commissions-thumb', 740, 300, true );

// Remove version numbers from static resources to enable caching
function ewp_remove_script_version( $src ) {
	return remove_query_arg( 'ver', $src );
}
add_filter( 'script_loader_src', 'ewp_remove_script_version', 15, 1 );
add_filter( 'style_loader_src', 'ewp_remove_script_version', 15, 1 );
