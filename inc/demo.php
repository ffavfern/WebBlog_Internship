<?php
/**
 * Theme Demo Importer
 *
 * https://ocdi.com/quick-integration-guide/
 */

function ocdi_import_files() {
  return [
    [
      'import_file_name'           => 'Plant with Sale Page',
      'categories'                 => [ 'Sale Page'],
      'import_file_url'            => 'http://seedcdn.com/demo/plant/v1/content.xml',
      'import_widget_file_url'     => 'http://seedcdn.com/demo/plant/v1/widgets.wie',
      'import_customizer_file_url' => 'http://seedcdn.com/demo/plant/v1/customizer.dat',
      'import_preview_image_url'   => 'http://seedcdn.com/demo/plant/v1/preview.jpg',
      'preview_url'                => 'https://plant.seeddemo.com/',
    ],
	[
      'import_file_name'           => 'Ongkorn • เว็บองค์กร',
      'categories'                 => [ 'Corporate'],
      'import_file_url'            => 'http://seedcdn.com/demo/ongkorn/v1/content.xml',
      'import_widget_file_url'     => 'http://seedcdn.com/demo/ongkorn/v1/widgets.wie',
      'import_customizer_file_url' => 'http://seedcdn.com/demo/ongkorn/v1/customizer.dat',
      'import_preview_image_url'   => 'http://seedcdn.com/demo/ongkorn/v1/preview.jpg',
      'preview_url'                => 'https://ongkorn.seeddemo.com/',
    ],
  ];
}
add_filter( 'ocdi/import_files', 'ocdi_import_files' );

function ocdi_register_plugins( $plugins ) {
  $theme_plugins = [
    [ // A WordPress.org plugin repository example.
      'name'     => 'Forminator',
      'slug'     => 'forminator',
      'required' => true,
	],
	[ 
      'name'     => 'GenerateBlocks',
      'slug'     => 'generateblocks',
      'required' => true,
    ]
  ];
 
  return array_merge( $plugins, $theme_plugins );
}
add_filter( 'ocdi/register_plugins', 'ocdi_register_plugins' );


function ocdi_after_import_setup() {

	// Assign menus
    $main_menu = get_term_by( 'slug', 'main', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
			'primary' => $main_menu->term_id, 
            'mobile' => $main_menu->term_id,
        )
    );

    // Assign front page.
    $front_page_id = get_page_by_path( 'home' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );

}
add_action( 'ocdi/after_import', 'ocdi_after_import_setup' );


// Disable GenerateBlocsk Redirect
function ocdi_change_activation_redirect( ) {
	return false;
}
add_filter( 'generateblocks_do_activation_redirect', 'ocdi_change_activation_redirect', 10, 3 );