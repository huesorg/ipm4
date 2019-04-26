<?php
/*
Author: Eddie Machado
URL: htp://themble.com/bones/

This is where you can drop your custom functions or
just edit things like thumbnail sizes, header images,
sidebars, comments, ect.
*/

/************* INCLUDE NEEDED FILES ***************/

require_once('loops.php'); // Where all the loopCard functions are stored
require_once('hooks.php'); // Where all the custom hooks are registered and stored
require_once('template-tags.php'); // Where all the custom hooks are registered and stored


/*
1. library/bones.php
	- head cleanup (remove rsd, uri links, junk css, ect)
	- enqueueing scripts & styles
	- theme support functions
	- custom menu output & fallbacks
	- related post function
	- page-navi function
	- removing <p> from around images
	- customizing the post excerpt
	- custom google+ integration
	- adding custom fields to user profiles
*/
require_once('library/bones.php'); // if you remove this, bones will break
/*
2. library/custom-post-type.php
	- an example custom post type
	- example custom taxonomy (like categories)
	- example custom taxonomy (like tags)
*/
require_once('library/custom-post-type.php'); // you can disable this if you like
/*
3. library/admin.php
	- removing some default WordPress dashboard widgets
	- an example custom dashboard widget
	- adding custom login css
	- changing text in footer of admin
*/
// require_once('library/admin.php'); // this comes turned off by default
/*
4. library/translation/translation.php
	- adding support for other languages
*/
// require_once('library/translation/translation.php'); // this comes turned off by default

/************* ADD FEATURED IMAGE TO RSS *************/

function rss_post_thumbnail($content) {
global $post;
if(has_post_thumbnail($post->ID)) {
    $content = $content = '<p>' . get_the_post_thumbnail( $post->ID, 'large', array( 'style' => 'max-width:100%; height:auto; margin:1.5em auto;' ) ) . '</p>' . $content;
    }
    return $content;
}
// add_filter('the_excerpt_rss', 'rss_post_thumbnail');
add_filter('the_content_feed', 'rss_post_thumbnail');

/************* ENABLE HTML IN CATEGORY DESCRIPTIONS ********************/


foreach ( array( 'pre_term_description' ) as $filter ) {
    remove_filter( $filter, 'wp_filter_kses' );
}

foreach ( array( 'term_description' ) as $filter ) {
    remove_filter( $filter, 'wp_kses_data' );
}

/************* ACTIVE SIDEBARS ********************/

// Sidebars & Widgetizes Areas
function bones_register_sidebars() {
	register_sidebar(array(
		'id' => 'sidebar1',
		'name' => __('Sidebar 1', 'bonestheme'),
		'description' => __('The first (primary) sidebar.', 'bonestheme'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	/*
	to add more sidebars or widgetized areas, just copy
	and edit the above sidebar code. In order to call
	your new sidebar just use the following code:

	Just change the name to whatever your new
	sidebar's id is, for example:*/

	register_sidebar(array(
		'id' => 'pagesidebar',
		'name' => __('Page Sidebar', 'bonestheme'),
		'description' => __('The sidebar that appears on pages.', 'bonestheme'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	/*
	To call the sidebar in your template, you can just copy
	the sidebar.php file and rename it to your sidebar's name.
	So using the above example, it would be:
	sidebar-sidebar2.php

	*/
} // don't remove this bracket!

// CUSTOM TAXONOMY

    register_taxonomy( 'sections',
    	array('post'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
    	array('hierarchical' => true,     /* if this is true, it acts like categories */
    		'labels' => array(
    			'name' => __( 'Sections', 'bonestheme' ), /* name of the custom taxonomy */
    			'singular_name' => __( 'Section', 'bonestheme' ), /* single taxonomy name */
    			'search_items' =>  __( 'Search Sections', 'bonestheme' ), /* search title for taxomony */
    			'all_items' => __( 'All Sections', 'bonestheme' ), /* all title for taxonomies */
    			'parent_item' => __( 'Parent Section', 'bonestheme' ), /* parent title for taxonomy */
    			'parent_item_colon' => __( 'Parent Section:', 'bonestheme' ), /* parent taxonomy title */
    			'edit_item' => __( 'Edit Section', 'bonestheme' ), /* edit custom taxonomy title */
    			'update_item' => __( 'Update Section', 'bonestheme' ), /* update title for taxonomy */
    			'add_new_item' => __( 'Add New Section', 'bonestheme' ), /* add new title for taxonomy */
    			'new_item_name' => __( 'New Section', 'bonestheme' ) /* name title for taxonomy */
    		),
    		'show_admin_column' => true,
    		'show_ui' => true,
            'show_in_rest' => true,
    		'query_var' => true,
    		'rewrite' => array( 'slug' => 'section' ),
    	)
    );


//Page Slug Body Class
function add_slug_body_class( $classes ) {
    global $post;
    if ( isset( $post ) ) {
    $classes[] = $post->post_type . '-' . $post->post_name;
    }
    return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );

/************* ACF OPTIONS PAGE *********************/

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
		'page_title' 	=> 'Patronage',
		'menu_title'	=> 'Patronage',
		'menu_slug' 	=> 'patronage',
		'capability'	=> 'edit_posts',
	));

}

/**
 * ALGOLIA
 * Don't index pages where the robot index option
 * in the Yoast SEO plugin is set to noindex.
 *
 * @param bool    $should_index
 * @param WP_Post $post
 *
 * @return bool
 */

function filter_post( $should_index, WP_Post $post )
{
    if ( false === $should_index ) {
        return false;
    }

    return get_post_meta($post->ID, '_yoast_wpseo_meta-robots-noindex', true) == 1 ? false : true;
}

// Hook into Algolia to manipulate the post that should be indexed.
add_filter( 'algolia_should_index_searchable_post', 'filter_post', 10, 2 );


/*------------------------------------*\
	Lazy Load All the Images
\*------------------------------------*/

/**
 * Use Lozad (lazy loading) for images within the posts
 */

add_filter('the_content', function ($content) {

	// Bail on amp
	if (function_exists( 'is_amp_endpoint' ) && is_amp_endpoint()) {
		return $content;
	}
	//-- Change src/srcset to data attributes.
	$content = preg_replace("/<img(.*?)(src=|srcset=)(.*?)>/i", '<img$1data-$2$3>', $content);

	//-- Add .lazy-load class to each image that already has a class.
	$content = preg_replace('/<img(.*?)class=\"(.*?)\"(.*?)>/i', '<img$1class="$2 lazy-load"$3>', $content);

	//-- Add .lazy-load class to each image that doesn't already have a class.
	$content = preg_replace('/<img((?:(?!class=).)*?)>/i', '<img class="lazy-load"$1>', $content);

	return $content;
});

/**
* Use Lozad (lazy loading) for attachments/featured images
*/
add_filter('wp_get_attachment_image_attributes', function ($attr, $attachment) {
	// Bail on admin
	if (is_admin()) {
	 	return $attr;
	}

	// Bail on amp
	if (function_exists( 'is_amp_endpoint' ) && is_amp_endpoint()) {
		return $attr;
	}

	$attr['data-src'] = $attr['src'];
	$attr['data-src-set'] = $attr['src-set'];
	$attr['class'] .= ' lazy-load';
	unset($attr['src']);
	unset($attr['src-set']);

	return $attr;
}, 10, 2);


/************* ADS SHORTCODE *********************/


function heyHeyLook(){

    if ( has_tag( 'guide-to-gender') ) {
        $heyHeyLookContent = '
        <aside class="heyHeyLook g2g2">
            <a class="image" href="https://bit.ly/2m4IAFr" title="A Guide to Gender 2nd Edition by Sam Killermann">
            <img src="'. get_template_directory_uri() .'/library/images/a-guide-to-gender-2nd-edition-sam-killermann-200.jpg" alt="A Guide to Gender 2nd Edition by Sam Killermann">
            </a>
            <div class="aside--text">
                <p><strong>The post you\'re reading right now</strong> is included in my book, <em>A Guide to Gender</em>. You can get the 2nd Edition now (and read the expanded version of this post):<br/>
                    <a href="https://amzn.to/2li0YWS" alt="Get A Guide to Gender 2nd Edition Paperback">Paperback</a> <a href="https://amzn.to/2li3Pzn" alt="Get A Guide to Gender 2nd Edition Kindle">Kindle</a> <a href="https://gum.co/g2g2" alt="Get A Guide to Gender 2nd Edition PDF">.PDF (pay-what-you-want/can) </a>
                </p>
            </div>
        </aside>';
    }

    else {
        $heyHeyLookContent = '
    	<aside class="heyHeyLook wednesdayEmail">
    		<p><strong>Most Wednesdays 💌</strong> I publish new Social Justice, Gender, &amp; Sexuality Resources &xrarr;</p>
            <a class="button" title="Join my mailing list" href="http://bit.ly/2MmE28c" target="_blank">
                Get the Email.
            </a>
    	</aside>';
    }
    return $heyHeyLookContent;
}

add_shortcode('adsmall', 'heyHeyLook');


/* OLD CTAs

<div class="heyHeyLook alignright">
    <a href="https://bit.ly/2m4IAFr" alt="A Guide to Gender 2nd Edition by Sam Killermann">
    <img src="https://www.itspronouncedmetrosexual.com/wp-content/themes/ipmtheme/library/images/a-guide-to-gender-2nd-edition-sam-killermann-600.jpg" alt="A Guide to Gender 2nd Edition by Sam Killermann">
    </a>
    <h3><a href="https://bit.ly/2m4IAFr" alt="A Guide to Gender 2nd Edition by Sam Killermann">My New(-ish) Book!</a></h3>
    <small>Get the 2nd Edition of my first book <em><a href="https://bit.ly/2m4IAFr" alt="A Guide to Gender 2nd Edition by Sam Killermann">A Guide to Gender</a></em>: it is fully revised, expanded, and shinier than ever!</small></br>
    <small>
        <strong><a href="https://amzn.to/2li0YWS" alt="Get A Guide to Gender 2nd Edition Paperback">Paperback</a></strong> | <strong><a href="https://amzn.to/2li3Pzn" alt="Get A Guide to Gender 2nd Edition Kindle">Kindle</a></strong> | <strong><a href="https://gum.co/g2g2" alt="Get A Guide to Gender 2nd Edition PDF">Pay-What-You-Want/Can .PDF</a></strong>
    </small>
</div>

*/


/************* SEARCH FORM LAYOUT *****************/

// Search Form
function bones_wpsearch($form) {
	$form = '<div class="searchContainer"><form role="search" method="get" class="searchform" >
	<label class="screen-reader-text" for="s">' . __('Search for:', 'bonestheme') . '</label>
	<input type="search" value="' . get_search_query() . '" name="s" id="s" placeholder="'.esc_attr__('Search','bonestheme').'" />
	</form></div>';
	return $form;
} // don't remove this bracket!


?>
