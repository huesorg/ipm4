<?php

/**************************************
TEASER LOOP
**************************************/

function loopTeaser() {?>
<article id="post-<?php the_ID(); ?>" <?php post_class('teaser loopCard'); ?> role="article">

	<div class="loopTitle">
		<h3>
			<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
				<?php the_title(); ?>
			</a>
		</h3>

		<div class="grid">
			<ul class="grid grid-cell--center grid-cell--autoSize teaserCats">
				<?php
				$homeURL = home_url();
				$directoryURL = get_template_directory_uri();

				foreach((get_the_category()) as $category) {
					if($category->slug == 'socialjustice'){
						echo '<li class="catsocialjustice"><a href="' . $homeURL .'/category/socialjustice" alt="All Posts Categorized Sexuality"><img src="' . $directoryURL . '/library/images/ipm-icon-social-justice.svg" alt="Social Justice Category Icon"><div>Social Justice</div></a></li>';
					}
					if($category->slug == 'gender-2'){
						echo '<li class="catgender"><a href="' . $homeURL .'/category/gender-2" alt="All Posts Categorized Gender"><img src="' . $directoryURL . '/library/images/ipm-icon-gender.svg" alt="Gender Category Icon"><div>Gender</div></a></li>';
					}
					if($category->slug == 'sexuality-2'){
						echo '<li class="catsexuality"><a href="' . $homeURL .'/category/sexuality-2" alt="All Posts Categorized Sexuality"><img src="' . $directoryURL . '/library/images/ipm-icon-sexuality.svg" alt="Sexuality Category Icon"><div>Sexuality</div></a></li>';
					}
					if($category->slug == 'op-ed'){
						echo '<li class="catoped"><a href="' . $homeURL .'/category/op-ed" alt="All Posts Categorized Opinion"><img src="' . $directoryURL . '/library/images/ipm-icon-op-ed.svg" alt="Opinion Category Icon"><div>Opinion</div></a></li>';
					}
					if($category->slug == 'edugraphics'){
						echo '<li class="catedugraphics"><a href="' . $homeURL .'/category/edugraphics" alt="All Posts Categorized Edugraphics"><img src="' . $directoryURL . '/library/images/ipm-icon-edugraphics.svg" alt="Edugraphics Category Icon"><div>Edugraphics</div></a></li>';
					}
				} ?>
			</ul>

			<div class="grid-cell loopText grid-cell--center">
				<div class="byline">
					<p>
						By <a href="htps://www.itspronouncedmetrosexual.com/about/about-sam-killermann" title="About the Author: Sam Killermann">Sam Killermann</a> 
						on <?php the_date(); ?>. <span class="updated">Last updated <?php the_modified_date(); ?></span>
					</p>
				</div>
			</div><!--/teaserText-->



		</div><!--/grid-->
	</div>

	<div class="loopImage featuredImage">
		<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
			<?php the_post_thumbnail('medium_large'); ?>
		</a>

		<h4><?php echo get_the_excerpt()?></h4>

	</div><!--/teaserImage-->


</article> <!-- end teaser -->
<?php
}

/**************************************
BLOGGED LOOP
**************************************/

function loopBlogged() {?>

	<article id="post-<?php the_ID(); ?>" <?php post_class('loopCard blogged'); ?> role="article">

		<div class="loopImage bloggedLeft grid-cell grid--justifyCenter flex-column grid--center featuredImage">
			<?php
			if ( has_post_thumbnail() ) {?>
				<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
    				<?php the_post_thumbnail('thumbnail'); ?>
    			</a>
			<?php } else {?>
				<div class="noPostThumb">
					<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
						<img alt="Missing Thumbnail" src="<?php echo get_template_directory_uri(); ?>/library/images/no-thumbnail.jpg">
					</a>
				</div>
			<?php }?>

			<?php if( get_field('downloadable_pdf') ): ?>

				<ul class="bloggedLinks">
					<li>
						<a class="download" target="_blank" href="<?php the_field('downloadable_pdf')?>" title="Download .PDF">
							.PDF
						</a>
					</li>
				    <li>
				    	<a class="readThis" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
			    			View
			    		</a>
			    	</li>
			 	</ul>

			<?php endif; ?>


		</div><!--/bloggedImage-->

		<div class="loopText grid-cell">
			<h3 class="loopTitle">
	    		<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
	    			<?php the_title(); ?>
	    		</a>
	    	</h3>

	    	<?php the_excerpt()?>

		</div><!--/bloggedText-->
    </article> <!-- end blogged -->
<?php
}

/**************************************
MINIMAL LOOP
**************************************/

function loopMinimal() {?>

	<article id="post-<?php the_ID(); ?>" <?php post_class('loopCard minimal'); ?> role="article">

		<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">

			<div class="loopImage featuredImage">
				<?php the_post_thumbnail('medium'); ?>
			</div><!--/bloggedImage-->

			<div class="loopText">
				<h4 class="loopTitle">
		    		<?php the_title(); ?>
		    	</h4>
			</div><!--/bloggedText-->

		</a>
    </article> <!-- end blogged -->
<?php
}


/**************************************
SHADOWBOX LOOP
**************************************/

function loopShadowbox() {?>

	<article id="post-<?php the_ID(); ?>" <?php post_class('loopCard shadowbox'); ?> role="article">

		<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">

			<div class="loopImage featuredImage">
				<?php the_post_thumbnail('medium_large');?>
			</div><!--/shadowboxImage-->

			<div class="loopText">
		    	<h3 class="loopTitle"><?php the_title(); ?></h3>
				<p><span><?php echo get_the_excerpt()?></span></p>
			</div><!--/shadowboxText-->
		</a>
	</article> <!-- end blog entry -->
<?php
}


?>
