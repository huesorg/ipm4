<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
	<div id="stickyPostTitle" class="unactiveSticky">


		<ul id="stickyTitle" class="grid grid--center grid--justifyCenter grid--fit">
			<li class="grid-cell">Jump to</li>
			<li class="grid-cell">
				<a href="#home--intro" title="Intro">About</a>
			</li>
			<li class="grid-cell">
				<a href="#home--content" title="Intro">News</a>
			</li>
			<li class="grid-cell">
				<a href="#home--subscribe" title="Intro">Subscribe</a>
			</li>
			<li class="grid-cell">
				<a href="/donate" title="Donate">Donate</a>
			</li>
		</ul>
	</div><!--/stickyPostTitle-->
	<div id="home--hero">
		<span class="connectorText">The Latest</span>
		<?php $heroArticleQuery = new WP_Query(
			array(
				'posts_per_page' => 1,
				'post_type' => 'post',
				'tax_query' => array( //getting all posts in a custom taxonomy
					array(
					'taxonomy' => 'sections', //name of tax
					'field' => 'slug', //can be by slug, name, or id
					'terms' => 'articles-books' //the slug of the custom tax
					),
				),
			)
		);

		while($heroArticleQuery->have_posts()) : $heroArticleQuery->the_post();?>
		<article id="post-<?php the_ID(); ?>" <?php post_class('teaser loopCard'); ?> role="article">
			<div class="loopImage featuredImage">
				<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
					<?php the_post_thumbnail('medium_large'); ?>
				</a>
			</div><!--/teaserImage-->

			<div class="loopTitle">
				<h3>
					<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
						<?php the_title(); ?>
					</a>
				</h3>
				<h4><?php echo get_the_excerpt()?></h4>
				<span class="byline">By <a href="https://itspronouncedmetrosexual.com/about/about-sam-killermann" title="About the Author: Sam Killermann">Sam Killermann</a></span>
			</div>
			<div class="loopContent entry-content">
				<?php the_content('Keep reading...');?>
			</div>

		</article> <!-- end teaser -->
		<?php endwhile; wp_reset_postdata(); ?>


	</div><!--/hero-->
	<div id="home--intro">
		<h1>
			<img alt="It's Pronounced Metrosexual" src="<?php echo get_template_directory_uri(); ?>/library/images/ipm-logo-690-100.png"/>
		</h1>
		<div id="home--intro--about" class="grid grid--center grid--justifyCenter grid--full medium-grid--fit">
			<div class="gradient-warm grid-cell">
				<span class="connectorText">is a</span>
				<h2>Free Online Resource</h2>
				<p>Educating millions of readers on themes of <a class="yellow" href="http://itspronouncedmetrosexual.com/category/gender-2/" title="Posts about Gender">gender</a>, <a class="purple" href="http://itspronouncedmetrosexual.com/category/sexuality-2/" title="Posts about Sexuality">sexuality</a>, &amp; <a class="blue" href="http://itspronouncedmetrosexual.com/category/socialjustice" title="Posts about Social Justice">social justice</a>, the <a href="http://itspronouncedmetrosexual.com/articles-books" title="Articles and Books">articles</a>, <a href="http://itspronouncedmetrosexual.com/edugraphics-printables" title="Articles and Books">edugraphics</a>, and other resources you'll find here are all <a href="http://itspronouncedmetrosexual.com/uncopyright" title="Uncopyright Statement">uncopyrighted</a> &mdash; yours to use to do good however you see fit. <a title="About IPM" href="https://itspronouncedmetrosexual.com/about">Read more about It's Pronounced Metrosexual.</a></p>
			</div>
			<!-- <div class="gradient-cool grid-cell disabled">
				<h2>Social Justice Comedy Show (Closed)</h2>
				<p>Performed at hundreds of colleges, universities, and high schools around North America, IPM's <a href="http://itspronouncedmetrosexual.com/campus-programs" title="Campus Programs">campus programs</a> use humor and storytelling to introduce audiences to themes of gender and social justice.</p>
			</div> -->
			<div class="grid-cell gradient-cool">
				<span class="connectorText">by</span>
				<h2>Sam Killermann</h2>
				<p>
					I'm a social justice advocate, gender &amp; sexuality educator, author, artist, and comedian. I created IPM back in 2011 as a combination of all those different parts of me. <a title="About Sam Killermann" href="https://itspronouncedmetrosexual.com/about/about-sam-killermann/">Read more.</a></strong>&nbsp; &nbsp;<strong><a title="Be Sam Killermann's Boss(es)" target="_blank" href="https://bemyboss.es">Be My Boss.</a></strong>
				</p>

				<img class="self-portrait" src="<?php echo get_template_directory_uri(); ?>/library/images/hi-im-sam-bottom-shadow.png" alt="Sam Killermann Self Portrait">
			</div>
		</div>
		<!-- <div id="home--intro--sam" class="grid gradient-ipm grid--center grid--justifyCenter">
			<div class="grid-cell">
				<span class="connectorText">created by</span>
				<h2>Sam Killermann <span>(that's me!)</span></h2>
				<p>
					I'm a social justice advocate, gender &amp; sexuality educator, author, artist, and comedian. I created IPM back in 2011 as a combination of all those different parts of me. <br/><strong><a title="About Sam Killermann" href="https://itspronouncedmetrosexual.com/about/about-sam-killermann/">Read more about moi.</a></strong>&nbsp; &nbsp;
					<strong><a title="Be Sam Killermann's Boss(es)" target="_blank" href="https://bemyboss.es">Be My Boss.</a></strong>
				</p>
			</div>
		</div> -->
		<div id="home--intro--usages" class="grid grid--full medium-grid--fit">
			<span class="connectorText">everything published is</span>
			<div id="usages--free" class="grid-cell grid--top">
				<h2>Free!</h2>
				<p>
					Download articles, read chapters of my books (or the entire things), print, re-print, distribute, make giant posters for parades, etc. &mdash; do whatever &mdash; and pay $0. No pay wall, no licensing fees, no annoying ad-blocker warnings, nada.
				</p>
			</div>
			<div id="usages--uncopyrighted" class="grid-cell grid--center">
				<h2>Uncopyrighted!</h2>
				<p>
					Yep, that means exactly you think it means. Everything here is <em>yours</em> to use, and you don't need to ask permission. I uncopyrighted everything <a href="http://itspronouncedmetrosexual.com/2013/11/uncopyright/" alt="Uncopyright Announcement">back in 2013</a>, and reflected on the decision (happily) <a href="http://itspronouncedmetrosexual.com/2014/12/uncopyright-reflection/" alt="Uncopyright Reflection">in 2014</a>.
				</p>
			</div>
			<div id="usages--reader-funded" class="grid-cell grid--bottom">
				<h2>Reader-funded!</h2>
				<p>
					Your access is guaranteed by a small group of generous humans who give monthly to help me <a href="https://www.patreon.com/itspronouncedmetrosexual" title="IPM Patreon">afford hosting &amp; overhead costs for the site</a>, and another group of people who <a href="https://www.patreon.com/killermann" title="Sam Killermann Patreon">employ me to create everything</a> -- keeping this whole operation running &mdash; independent &amp; free of advertising.
				</p>
			</div>
		</div><!--/grid-->
	</div>

	<?php getPatreonAsk();?>

	<div id="home--content" class="grid grid--full medium-grid--fit">
		<div id="main" class="grid grid--center grid--justifyCenter grid-cell gradient-grey" role="main">
			<div class="grid-cell grid-cell--autoSize">
				<span class="connectorText">Welcome to my corner of the internet!</span>

				<h2>News &amp; Noteworthy</h2>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(' entry-content'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

					<section class="" itemprop="articleBody">
						<?php the_content(); ?>
					</section> <!-- end article section -->

				</article> <!-- end article -->

				<?php endwhile; endif; wp_reset_query(); ?> <!--reset page intro -->
			</div>
		</div><!--/main-->
		<div class="grid-cell grid grid--justifyCenter grid--center gradient-grey">
			<div class="grid-cell">
				<h2>Popular</h2>

				<?php $popular_today_query = new WP_Query(
					array(
						'post_type' => 'post',
	                    'orderby' => 'RAND',
						'posts_per_page' => 1,
						'tag' => 'greatest-of-all-time',
					)
                );

				while($popular_today_query->have_posts()) : $popular_today_query->the_post();?>
				<article id="post-<?php the_ID(); ?>" <?php post_class('loopCard shadowbox'); ?> role="article">
					<div class="loopImage featuredImage">
						<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
							<?php the_post_thumbnail('medium_large'); ?>
						</a>
					</div><!--/teaserImage-->

					<div class="loopText">
						<h3 class="loopTitle">
							<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
								<?php the_title(); ?>
							</a>
						</h3>
					</div>

				</article> <!-- end teaser -->
				<?php endwhile; wp_reset_postdata(); ?>

			</div><!--/grid-cell-->
		</div>
	</div>

	<div id="home--subscribe" class="subscribeSection">
		<?php getSubscribeOptions();?>
	</div><!--/home-subscribe-->

	<h2>Helping you better help other people be better people.</h2>

<?php get_footer(); ?>
