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
				<a href="#home--intro" alt="Intro">About</a>
			</li>
			<li class="grid-cell">
				<a href="#home--content" alt="Intro">News</a>
			</li>
			<li class="grid-cell">
				<a href="#home--subscribe" alt="Intro">Subscribe</a>
			</li>
			<li class="grid-cell">
				<a href="/donate" alt="Intro">Donate</a>
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
				<span class="byline">By <?php the_author_posts_link(); ?></span>
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
		<span class="connectorText">is a</span>
		<div id="home--intro--resource-show" class="grid grid--center grid--justifyCenter grid--full medium-grid--fit">
			<div class="gradient-warm grid-cell">
				<h2>Free Online Resource</h2>
				<p>Educating millions of readers on themes of <a class="yellow" href="http://itspronouncedmetrosexual.com/category/gender-2/" alt="Posts about Gender">gender</a>, <a class="purple" href="http://itspronouncedmetrosexual.com/category/sexuality-2/" alt="Posts about Sexuality">sexuality</a>, &amp; <a class="blue" href="http://itspronouncedmetrosexual.com/category/socialjustice" alt="Posts about Social Justice">social justice</a>, the <a href="http://itspronouncedmetrosexual.com/articles-books" alt="Articles and Books">articles</a>, <a href="http://itspronouncedmetrosexual.com/edugraphics-printables" alt="Articles and Books">edugraphics</a>, and other resources you'll find here are all <a href="http://itspronouncedmetrosexual.com/uncopyright" alt="Uncopyright Statement">uncopyrighted</a> &mdash; yours to use to do good however you see fit.</p>
				<img src="" alt=""/>
			</div>
			<span class="connectorText">and</span>
			<div class="gradient-cool grid-cell">
				<h2>Social Justice Comedy Show</h2>
				<p>Performed at hundreds of colleges, universities, and high schools around North America, IPM's <a href="http://itspronouncedmetrosexual.com/campus-programs" alt="Campus Programs">campus programs</a> use humor and storytelling to introduce audiences to themes of gender and social justice.</p>
			</div>
		</div><!--/grid-->
		<div id="home--intro--sam" class="grid gradient-ipm grid--center grid--justifyCenter">
			<div class="grid-cell">
				<span class="connectorText">created by</span>
				<h2>Sam Killermann <span>(that's me!)</span></h2>
				<p>
					I'm a social justice advocate, gender &amp; sexuality educator, author, artist, and comedian. I created IPM back in 2011 as a combination of all those different parts of me. <strong><a title="About Sam Killermann" href="http://itspronouncedmetrosexual.com/about-sam-killermann/">Read more about moi.</a></strong>
				</p>
			</div>
			<div class="grid-cell grid grid-cell--autoSize">
				<img src="<?php echo get_template_directory_uri(); ?>/library/images/hi-im-sam-bottom-shadow.png" alt="">
			</div>
		</div><!--/grid-->
		<div id="home--intro--usages" class="grid grid--full medium-grid--fit gradient-fullrainbow">
			<span class="connectorText">everything published is</span>
			<div class="grid-cell grid--top">
				<h2>Free!</h2>
				<p>
					Download articles, read chapters of my books (or the entire things), print, re-print, distribute, make giant posters for parades, etc. &mdash; do whatever &mdash; and pay $0. No pay wall, no licensing fees, no annoying ad-blocker warnings, nada.
				</p>
			</div>
			<div class="grid-cell grid--center">
				<h2>Uncopyrighted!</h2>
				<p>
					Yep, that means exactly you think it means. Everything here is <em>yours</em> to use, and you don't need to ask permission. I uncopyrighted everything <a href="http://itspronouncedmetrosexual.com/2013/11/uncopyright/" alt="Uncopyright Announcement">back in 2013</a>, and reflected on the decision (happily) <a href="http://itspronouncedmetrosexual.com/2014/12/uncopyright-reflection/" alt="Uncopyright Reflection">in 2014</a>.
				</p>
			</div>
			<div class="grid-cell">
				<h2>Reader-funded!</h2>
				<p>
					Your access is guaranteed by <a href="https://www.patreon.com/itspronouncedmetrosexual" alt="IPM Patreon">a small group of generous humans</a> who give monthly to help me afford hosting costs, and keep this whole operation running &mdash; independent &amp; free of advertising.
				</p>
			</div>
		</div><!--/grid-->
	</div>

	<?php getPatreonAsk();?>

	<div id="home--content" class="grid grid--full medium-grid--fit">
		<div id="main" class="grid grid--center grid--justifyCenter grid-cell gradient-grey" role="main">
			<span class="connectorText">Welcome to my corner of the internet!</span>
			<div class="grid-cell grid-cell--autoSize">
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
