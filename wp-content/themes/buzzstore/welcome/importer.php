<?php
/**
 *
 * @package Buzzstore
 */
 
function buzzstore_import_files() {
  return array(
    array(
      'import_file_name'           => 'Buzzstore Demo Import',
      'local_import_file'            => trailingslashit( get_template_directory() ) . 'welcome/demo-data/buzzstore-content.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'welcome/demo-data/buzzstore-widgets.wie',
      'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'welcome/demo-data/buzzstore-customizer.dat',
    )
  );
}
add_filter( 'pt-ocdi/import_files', 'buzzstore_import_files' );

function buzzstore_after_import_setup() {
	// Assign menus to their locations.
	$main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
	$top_menu = get_term_by( 'name', 'Top Menu', 'nav_menu' );

	set_theme_mod( 'nav_menu_locations', array(
			'primary' => $main_menu->term_id,
			'topmenu' => $top_menu->term_id,
		)
	);

	// Assign front page and posts page (blog page).
	$front_page_id = get_page_by_title( 'Home' );
	$blog_page_id  = get_page_by_title( 'Blogs' );

	update_option( 'show_on_front', 'page' );
	update_option( 'page_on_front', $front_page_id->ID );
	update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'buzzstore_after_import_setup' );

add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );