<?php
/**
update_option('siteurl','http://ourtownnashville.org');
update_option('home','http://ourtownnashville.org');

 * Twenty Twelve functions and definitions.
 *
 * Sets up the theme and provides some helper functions, which are used
 * in the theme as custom template tags. Others are attached to action and
 * filter hooks in WordPress to change core functionality.
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development and
 * http://codex.wordpress.org/Child_Themes), you can override certain functions
 * (those wrapped in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before the parent
 * theme's file, so the child theme functions would be used.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are instead attached
 * to a filter or action hook.
 *
 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

/**
 * Sets up the content width value based on the theme's design and stylesheet.
 */
/*
function postimage($size=medium,$num=1,$lighbox=1) {
	if ( $images = get_children(array(
		'post_parent' => get_the_ID(),
		'post_type' => 'attachment',
		'numberposts' => $num,
		'order' => 'ASC',
		'orderby' => 'ID',
		'post_mime_type' => 'image',)))
	{
		foreach( $images as $image ) {
			$attachmenturl=wp_get_attachment_url($image->ID);
			$attachmentimage=wp_get_attachment_image($image->ID, $size );
			$img_title = $image->post_title;
			$img_desc = $image->post_excerpt;
			if ($size != "full"){
				echo '<a href="'.$attachmenturl.'" rel="lightbox" title="'.$img_desc.'">'.$attachmentimage.'</a>'.$img_title.'';
			} else {
				echo '<img src="'.$attachmenturl.'">';
			}
		}
	} else {
		echo "No Image";
	}
}
*/

// let's create the function for the custom type
function phase_two_events() { 
	// creating (registering) the custom type 
	register_post_type( 'phase_two_events', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
		// let's now add all the options for this post type
		array( 'labels' => array(
			'name' => __( 'Phase Two Events', 'bonestheme' ), /* This is the Title of the Group */
			'singular_name' => __( 'Event', 'bonestheme' ), /* This is the individual type */
			'all_items' => __( 'All Events', 'bonestheme' ), /* the all items menu item */
			'add_new' => __( 'Add New', 'bonestheme' ), /* The add new menu item */
			'add_new_item' => __( 'Add New Event', 'bonestheme' ), /* Add New Display Title */
			'edit' => __( 'Edit', 'bonestheme' ), /* Edit Dialog */
			'edit_item' => __( 'Edit Events', 'bonestheme' ), /* Edit Display Title */
			'new_item' => __( 'New Event', 'bonestheme' ), /* New Display Title */
			'view_item' => __( 'View Event', 'bonestheme' ), /* View Display Title */
			'search_items' => __( 'Search Events', 'bonestheme' ), /* Search Custom Type Title */ 
			'not_found' =>  __( 'Nothing found in the Database.', 'bonestheme' ), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __( 'Nothing found in Trash', 'bonestheme' ), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'This is where you add or edit your Phase Two Events', 'bonestheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 5, /* this is what order you want it to appear in on the left hand side menu  
			'menu_icon' => get_stylesheet_directory_uri() . 'images/custom-post-icon.png', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'phase-two-event', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'phase-two-events', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'revisions')
		) /* end of options */
	); /* end of register post type */
	
	/* this adds your post categories to your custom post type */
	register_taxonomy_for_object_type( 'category', 'phase-two-events' );
	/* this adds your post tags to your custom post type */
	register_taxonomy_for_object_type( 'post_tag', 'phase-two-events' );
	
}

	// adding the function to the Wordpress init
	add_action( 'init', 'phase_two_events');


/*
function the_post_thumbnail_caption() {
  global $post;

  $thumbnail_id    = get_post_thumbnail_id($post->ID);
  $thumbnail_image = get_posts(array('p' => $thumbnail_id, 'post_type' => 'attachment'));

  if ($thumbnail_image && isset($thumbnail_image[0])) {
    echo '<span>'.$thumbnail_image[0]->post_excerpt.'</span>';
  }
}
*/
function add_events_category_automatically($post_ID) {
	global $wpdb;
	if(!has_term('','category',$post_ID)){
		$cat = array(9);
		wp_set_object_terms($post_ID, $cat, 'category');
	}
}
add_action('publish_events', 'add_events_category_automatically');

//open album in lightbox

function nggGetGallery( $galleryID, $template = '', $images = false ) {

    global $nggRewrite;

    $ngg_options = nggGallery::get_option('ngg_options');

    //Set sort order value, if not used (upgrade issue)
    $ngg_options['galSort'] = ($ngg_options['galSort']) ? $ngg_options['galSort'] : 'pid';
    $ngg_options['galSortDir'] = ($ngg_options['galSortDir'] == 'DESC') ? 'DESC' : 'ASC';

    // get gallery values
    //TODO: Use pagination limits here to reduce memory needs
    $picturelist = nggdb::get_gallery($galleryID, $ngg_options['galSort'], $ngg_options['galSortDir']);
    return $picturelist;
}




function set_newuser_cookie() {
	if ( !is_admin() && !isset($_COOKIE['ourtown_newvisitor'])) {
		setcookie('ourtown_newvisitor', 0, time()+3600*24*100, COOKIEPATH, COOKIE_DOMAIN, false);
	}
}
add_action( 'init', 'set_newuser_cookie');


function register_my_menu() {
  register_nav_menu('phase-two',__( 'Phase Two' ));
}
add_action( 'init', 'register_my_menu' );

function updateNumbers() {
/* numbering the published posts: preparation: create an array with the ID in sequence of publication date, /
/ save the number in custom field 'incr_number' of post with ID  /
/ to show in post (within the loop) use <?php echo get_post_meta($post->ID,'incr_number',true); ?>
/ alchymyth 2010 */
global $wpdb;
$querystr = "SELECT $wpdb->posts.* FROM $wpdb->posts WHERE $wpdb->posts.post_status = 'publish' AND $wpdb->posts.post_type = 'phase_two_events' ";
$pageposts = $wpdb->get_results($querystr, OBJECT);
$counts = 0 ;
if ($pageposts):
foreach ($pageposts as $post):
setup_postdata($post);
$counts++;
add_post_meta($post->ID, 'incr_number', $counts, true);
update_post_meta($post->ID, 'incr_number', $counts);
endforeach;
endif;
}  

add_action ( 'publish_post', 'updateNumbers' );
add_action ( 'deleted_post', 'updateNumbers' );
add_action ( 'edit_post', 'updateNumbers' );

?>
