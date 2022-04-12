<?php
/**
 * Add Backend styles for Gutenberg.
 */
add_action('admin_enqueue_scripts', 'seed_add_gutenberg_assets');
function seed_add_gutenberg_assets() {
    wp_enqueue_style('s-gutenberg', get_theme_file_uri('/css/wp-gutenberg.css'), false);
    if ( class_exists( 'WooCommerce' ) ) {
        wp_enqueue_style('s-woo', get_theme_file_uri('/css/woo.css'), false);
        wp_enqueue_style('s-woo-th', get_theme_file_uri('/css/woo-th.css'), false);
    }
    wp_enqueue_script('s-keenslider', get_theme_file_uri('/js/keen-slider.js'), array(), '5.2.0', true);
    wp_enqueue_script('s-blocks', get_theme_file_uri('/js/wp-blocks.js'), array(), '1.0.0', true);
}


/**
 * Custom Block Category
 * https://developer.wordpress.org/block-editor/developers/filters/block-filters/#managing-block-categories
 */
function seed_plugin_block_categories( $categories, $post ) {
    return array_merge(
        $categories,
        array(
            array(
                'slug' => 'seedthemes',
                'title' => __( 'SeedThemes', 'plant' ),
            ),
        )
    );
}
add_filter( 'block_categories', 'seed_plugin_block_categories', 10, 2 );


/**
 * Gutenberg layout class
 * @link https://www.billerickson.net/change-gutenberg-content-width-to-match-genesis-layout/
 *
 * @param string $classes
 * @return string
 */

function seed_gutenberg_body_class( $classes ) {
	$screen = get_current_screen();
	if( ! $screen->is_block_editor() ) {
        return $classes;
    }
    $class = '';
	$post_id = isset( $_GET['post'] ) ? intval( $_GET['post'] ) : false;
    if( $post_id ) {
        $class = strstr(esc_html(get_page_template_slug($post_id)) , '/');
        $class = str_replace( '/', '', $class);
        $class = str_replace( '.php', '', $class);
    }
	
	$classes .= ' template-' . $class . ' ';
	return $classes;
}
add_filter( 'admin_body_class', 'seed_gutenberg_body_class' );




/**
 * ACF Blocks
 */
function register_acf_block_types() {
    acf_register_block_type(array(
        'name'              => 'post-grid',
        'title'             => __('Post Grid'),
        'description'       => __('Custom Post Grid from SeedThemes.'),
		'render_template'   => 'template-parts/blocks/post-grid.php',
        'category'          => 'seedthemes',
        'icon'              => 'screenoptions',
        'keywords'          => array( 'post', 'grid', 'postgrid', 'seed' , 'plant' ),
    ));
    acf_register_block_type(array(
        'name'              => 'post-slider',
        'title'             => __('Post Slider'),
        'description'       => __('Custom Post Grid from SeedThemes.'),
		'render_template'   => 'template-parts/blocks/post-slider.php',
        'category'          => 'seedthemes',
        'icon'              => 'slides',
        'keywords'          => array( 'post', 'slider', 'postslider', 'seed' , 'plant' ),
    ));
    acf_register_block_type(array(
        'name'              => 'product-grid',
        'title'             => __('Product Grid'),
        'description'       => __('Custom Product Grid from SeedThemes.'),
		'render_template'   => 'template-parts/blocks/product-grid.php',
        'category'          => 'seedthemes',
        'icon'              => 'screenoptions',
        'keywords'          => array( 'product', 'grid', 'productgrid', 'seed', 'plant'   ),
    ));
    acf_register_block_type(array(
        'name'              => 'product-slider',
        'title'             => __('Product Slider'),
        'description'       => __('Custom Product Slider from SeedThemes.'),
		'render_template'   => 'template-parts/blocks/product-slider.php',
        'category'          => 'seedthemes',
        'icon'              => 'slides',
        'keywords'          => array( 'product', 'slider', 'productslider', 'seed', 'plant'   ),
    ));
}

// Check if function exists and hook into setup.
if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'register_acf_block_types');
}