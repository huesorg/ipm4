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

/************* THUMBNAIL SIZE OPTIONS *************/


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
    		'query_var' => true,
    		'rewrite' => array( 'slug' => 'section' ),
    	)
    );

/************* CIRCLE SHARE *********************/

function circleShare() {

	  $shareExcerpt = get_the_excerpt();
	  $tags = array("<p>", "</p>");
	  $shareExcerpt = urlencode(html_entity_decode(str_replace($tags, "", $shareExcerpt)));

	  $uncodedThumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
	  $shareThumb = urlencode(html_entity_decode($uncodedThumb[0]));?>

	<ul class="circleShare">
		<li>
			<a id="fb" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_the_title());?>" target="_blank" alt="Share on Facebook">
				<i class="fa fa-facebook"></i>
			</a>
		</li>
		<li>
			<a id="tw" href="https://twitter.com/share?text=<?php echo urlencode(get_the_title());?>&url=<?php echo urlencode(the_permalink());?>&via=ActuallyMetro" target="_blank" alt="Share on Twitter">
				<i class="fa fa-twitter"></i>
			</a>
		</li>
		<li>
			<a id="tu" href="http://www.tumblr.com/share/link?url=<?php echo urlencode(get_the_title());?>&name=<?php echo urlencode(get_the_title());?>&description=<?php echo $shareExcerpt?>" target="_blank" alt="Share on Tumblr">
				<i class="fa fa-tumblr"></i>
			</a>
		</li>
		<li>
			<a id="go" href="https://plus.google.com/share?url=<?php echo urlencode(the_permalink());?>" alt="Share on Google Plus" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=no,scrollbars=no,height=400,width=600');return false">
				<i class="fa fa-google-plus"></i>
			</a>
		</li>
		<li>
			<a target="_blank" id="pi" href="http://pinterest.com/pin/create/button/?url=<?php echo urlencode(the_permalink());?>&media=<?php echo $shareThumb?>&description=<?php echo $shareExcerpt?>">
					<i class="fa fa-pinterest"></i>
			</a>
		</li>
	</ul>
<?php
}

//Page Slug Body Class
function add_slug_body_class( $classes ) {
    global $post;
    if ( isset( $post ) ) {
    $classes[] = $post->post_type . '-' . $post->post_name;
    }
    return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );

function getPatreonAsk() {?>
    <div class="fundedByPatreon">
        <div class="grid grid--fit">
            <p class="grid-cell">
                <strong><?php
                    if( is_single() ){
                        echo '"';
                        echo the_title();
                        echo '"';
                    } else {echo 'IPM';}
                ?> is reader &amp; patron funded, 100% free and uncopyrighted.</strong>
                <span>Join or donate to help support social justice media.</span>
            </p>

            <div class="funding--buttons grid-cell">
                <a class="button" href="http://bit.ly/2pfQrTl" target="_blank" alt="Become an IPM Patron" onClick="ga('send', 'event', { eventCategory: 'Donations', eventAction: 'button_click', eventLabel: 'Patronize'});">
                    <div>🤗 Become a Supporting Patron</div>
                </a>
                <a class="button" href="http://itspronouncedmetrosexual.com/donate/" alt="Donate" onClick="ga('send', 'event', { eventCategory: 'Donations', eventAction: 'button_click', eventLabel: 'Donate'});">
                    <div>💳 Donate</div>
                </a>
            </div>
        </div>
    </div><!--/fundedbypatreon--><?php
}

/************* ADS SHORTCODE *********************/

function heyHeyLook(){
    $heyHeyLookContent = '
	<div class="heyHeyLook alignright">
		<a href="http://bit.ly/2m4IAFr" alt="A Guide to Gender 2nd Edition by Sam Killermann">
		<img src="http://itspronouncedmetrosexual.com/wp-content/themes/ipmtheme/library/images/a-guide-to-gender-2nd-edition-sam-killermann-600.jpg" alt="A Guide to Gender 2nd Edition by Sam Killermann">
		</a>
        <h3><a href="http://bit.ly/2m4IAFr" alt="A Guide to Gender 2nd Edition by Sam Killermann">My New(-ish) Book!</a></h3>
        <small>Get the 2nd Edition of my first book <em><a href="http://bit.ly/2m4IAFr" alt="A Guide to Gender 2nd Edition by Sam Killermann">A Guide to Gender</a></em>: it is fully revised, expanded, and shinier than ever!</small></br>
        <small>
            <strong><a href="http://amzn.to/2li0YWS" alt="Get A Guide to Gender 2nd Edition Paperback">Paperback</a></strong> | <strong><a href="http://amzn.to/2li3Pzn" alt="Get A Guide to Gender 2nd Edition Kindle">Kindle</a></strong> | <strong><a href="http://gum.co/g2g2" alt="Get A Guide to Gender 2nd Edition PDF">Pay-What-You-Want/Can .PDF</a></strong>
        </small>
	</div>';
    return $heyHeyLookContent;
}

add_shortcode('adsmall', 'heyHeyLook');


/************* SEARCH FORM LAYOUT *****************/

// Search Form
function bones_wpsearch($form) {
	$form = '<div class="searchContainer"><form role="search" method="get" class="searchform" action="' . home_url( '/' ) . '" >
	<label class="screen-reader-text" for="s">' . __('Search for:', 'bonestheme') . '</label>
	<input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="'.esc_attr__('To search, type and hit enter...','bonestheme').'" />
	<input type="submit" class="searchsubmit" value="'. esc_attr__('Search') .'" />
	</form></div>';
	return $form;
} // don't remove this bracket!


?>
