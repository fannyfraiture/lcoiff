<?php

// Disable Gutenberg -------------------------------------
add_filter("use_block_editor_for_post_type", "disable_gutenberg_editor");
function disable_gutenberg_editor()
{
	return false;
}


//   Clean up dashboard
  function my_wpadmin_sidebar_menu() {
     remove_menu_page( 'index.php' );  // 'Dashboard'
  	 remove_menu_page( 'edit.php' );  // 'Posts'
    remove_menu_page( 'themes.php' );   // 'Appearance'
    remove_menu_page( 'upload.php' );   // 'Media'
    remove_menu_page( 'edit-comments.php' );
    remove_submenu_page('upload.php','media-new.php'); 
    remove_submenu_page('plugins.php','plugin-install.php'); //plugins
    remove_submenu_page('plugins.php','plugin-editor.php');


}
 add_action('admin_menu','my_wpadmin_sidebar_menu', 999);



// WP ADMIN SIDEBAR MENU REORDER -----------------------------------------

function my_wpadmin_sidebar_menu_reorder($menu_ord) {

    if (!$menu_ord) return true;

	// GET ALL CPT NAMES
	$post_types = get_post_types();
	$post_types = array_diff($post_types, 
		["post", "page", "attachment", "revision", 
			"nav_menu_item", "acf-field-group", "acf-field", "custom_css", "customize_changeset", "oembed_cache"]);
	
	// print_r($menu_ord);

    return array(
        'separator1',
        'edit.php?post_type=page',
        // 'post.php?post=' . $GLOBALS['page_accueil_id'] . '&action=edit',
        'edit.php?post_type=entreprise',
        'separator2',
        'nav-menus.php',
        'upload.php',
        'users.php',
        'separator-last',
        'plugins.php',
        'options-general.php',
        'aceide',
        'admin.php?page=cptui_manage_post_types',
        'edit.php?post_type=acf-field-group',
    	'infos',
    );
}
// Activate custom_menu_order
// add_filter('custom_menu_order', 'my_wpadmin_sidebar_menu_reorder'); 
// add_filter('menu_order', 'my_wpadmin_sidebar_menu_reorder');