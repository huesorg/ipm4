<?php
/*
Template Name: Popular Posts
*/
?>

<?php get_header(); ?>
<header class="article-header">

	<h1 class="page-title"><?php the_title(); ?></h1>

</header> <!-- end article header -->

<div id="content" class="no-sidebar">

	<main id="main" role="main">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="https://schema.org/BlogPosting">

			<section class="featuredImage">
				<?php the_post_thumbnail('full'); ?>
			</section>

			<section class="entry-content " itemprop="articleBody">
				<?php the_content(); ?>
			</section> <!-- end article section -->

		</article> <!-- end article -->

		<?php endwhile; else : ?>

				<article id="post-not-found" class="hentry ">
						<header class="article-header">
							<h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
					</header>
						<section class="entry-content">
							<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
					</section>
					<footer class="article-footer">
							<p><?php _e("This is the error message in the page-custom.php template.", "bonestheme"); ?></p>
					</footer>
				</article>

		<?php endif; ?>
	</main> <!-- end #main -->

	<section id="popular">
			<div class="shareBrag" id="GOATs">
				<h2>🐐 Greatest of All Time (G.O.A.T.s)</h2>
				<p>
					The special few posts that have been <strong class="count">Shared Over Half a Million Times</strong> on social media.
				</p>
			</div>
			<div class="flickable-posts-wrap">
				<?php $goatQuery = new WP_Query(
					array(
						'posts_per_page' => -1,
						'tag' => 'greatest-of-all-time',
					)
				); ?>

				<ul class="flickable-posts">
					<li class="flickable-post badge">
						<img alt="Box full of awards with a goat on it." src="<?php echo get_template_directory_uri(); ?>/library/images/badge-goat.svg"/>
					</li>
					<?php while($goatQuery->have_posts()) : $goatQuery->the_post();?>
					<li class="flickable-post shadowbox loopCard">
						<a href="<?php the_permalink() ?>" rel="bookmark">
							<div class="loopImage featuredImage">
								<?php the_post_thumbnail('thumbnail');?>
							</div>
							<div class="loopText">
								<h4 class="loopTitle"><?php the_title(); ?></h4>
							</div>
						</a>
					</li>
					<?php endwhile; wp_reset_postdata(); ?>
				</ul>
			</div><!--/flickable-posts-wrap-->
			<div class="shareBrag" id="Greatest-Hits">
				<h2>🏆 Greatest Hits</h2>
				<p>
					These posts have been <strong class="count">Shared Over 100,000 Times</strong> on social media.
				</p>
			</div>
			<div class="flickable-posts-wrap">
				<?php $greatestHitsQuery = new WP_Query(
					array(
						'posts_per_page' => -1,
						'tag' => 'greatest-hits',
					)
				); ?>
				<ul class="flickable-posts">
					<li class="flickable-post badge">
						<img alt="Trophy with a thumbs up at the top" src="<?php echo get_template_directory_uri(); ?>/library/images/badge-greatest-hits.svg"/>
					</li>
					<?php while($greatestHitsQuery->have_posts()) : $greatestHitsQuery->the_post();?>
					<li class="flickable-post shadowbox loopCard">
						<a href="<?php the_permalink() ?>" rel="bookmark">
							<div class="loopImage featuredImage">
								<?php the_post_thumbnail('thumbnail');?>
							</div>
							<div class="loopText">
								<h4 class="loopTitle"><?php the_title(); ?></h4>
							</div>
						</a>
					</li>
					<?php endwhile; wp_reset_postdata(); ?>
				</ul>
			</div><!--/flickable-posts-wrap-->
			<div class="shareBrag" id="Bona-Fide-Hits">
				<h2>🏅 Bona Fide Hits</h2>
				<p>
					Posts that are approaching <strong class="count">100,000 Shares</strong> on social media.
				</p>
			</div>
			<div class="flickable-posts-wrap">
				<?php $bonaFideHitsQuery = new WP_Query(
					array(
						'posts_per_page' => -1,
						'tag' => 'bona-fide-hit',
					)
				); ?>
				<ul class="flickable-posts">
					<li class="flickable-post badge">
						<img alt="A Gold-plated Record" src="<?php echo get_template_directory_uri(); ?>/library/images/badge-bona-fide-hit.svg"/>
					</li>
					<?php while($bonaFideHitsQuery->have_posts()) : $bonaFideHitsQuery->the_post();?>
					<li class="flickable-post shadowbox loopCard">
						<a href="<?php the_permalink() ?>" rel="bookmark">
							<div class="loopImage featuredImage">
								<?php the_post_thumbnail('thumbnail');?>
							</div>
							<div class="loopText">
								<h4 class="loopTitle"><?php the_title(); ?></h4>
							</div>
						</a>
					</li>
					<?php endwhile; wp_reset_postdata(); ?>
				</ul>
			</div><!--/flickable-posts-wrap-->
			<div class="shareBrag" id="Rising-Stars">
				<h2>🌟 Rising Stars</h2>
				<p>
					Posts that are approaching <strong class="count">50,000 Shares</strong> on social media, leaving orbit.
				</p>
			</div>
			<div class="flickable-posts-wrap">
				<?php $risingStarQuery = new WP_Query(
					array(
						'posts_per_page' => -1,
						'tag' => 'rising-star',
					)
				); ?>
				<ul class="flickable-posts">
					<li class="flickable-post badge">
						<img alt="A Shooting Star" src="<?php echo get_template_directory_uri(); ?>/library/images/badge-rising-star.svg"/>
					</li>
					<?php while($risingStarQuery->have_posts()) : $risingStarQuery->the_post();?>
					<li class="flickable-post shadowbox loopCard">
						<a href="<?php the_permalink() ?>" rel="bookmark">
							<div class="loopImage featuredImage">
								<?php the_post_thumbnail('thumbnail');?>
							</div>
							<div class="loopText">
								<h4 class="loopTitle"><?php the_title(); ?></h4>
							</div>
						</a>
					</li>
					<?php endwhile; wp_reset_postdata(); ?>
				</ul>
			</div><!--/flickable-posts-wrap-->
			<div class="shareBrag" id="Sensations">
				<h2>😍 Sensations</h2>
				<p>
					Posts that are approaching <strong class="count">10,000 Shares</strong> on social media, and have circled the globe.
				</p>
			</div>
			<div class="flickable-posts-wrap">
				<?php $sensationsQuery = new WP_Query(
					array(
						'posts_per_page' => -1,
						'tag' => 'sensation',
					)
				); ?>
				<ul class="flickable-posts">
					<li class="flickable-post badge">
						<img alt="A Shooting Star" src="<?php echo get_template_directory_uri(); ?>/library/images/badge-sensation.svg"/>
					</li>
					<?php while($sensationsQuery->have_posts()) : $sensationsQuery->the_post();?>
					<li class="flickable-post shadowbox loopCard">
						<a href="<?php the_permalink() ?>" rel="bookmark">
							<div class="loopImage featuredImage">
								<?php the_post_thumbnail('thumbnail');?>
							</div>
							<div class="loopText">
								<h4 class="loopTitle"><?php the_title(); ?></h4>
							</div>
						</a>
					</li>
					<?php endwhile; wp_reset_postdata(); ?>
				</ul>
			</div><!--/flickable-posts-wrap-->
			<div class="shareBrag" id="Crowd-Pleasers">
				<h2>👏 Crowd-Pleasers</h2>
				<p>
					Posts with over <strong class="count">1,000 Shares</strong> on social media.
				</p>
			</div>
			<div class="flickable-posts-wrap">
				<?php $crowdpleasersQuery = new WP_Query(
					array(
						'posts_per_page' => -1,
						'tag' => 'crowd-pleaser',
					)
				); ?>
				<ul class="flickable-posts">
					<li class="flickable-post badge">
						<img alt="A bunch of balloons with thumbs ups on them" src="<?php echo get_template_directory_uri(); ?>/library/images/badge-crowd-pleaser.svg"/>
					</li>
					<?php while($crowdpleasersQuery->have_posts()) : $crowdpleasersQuery->the_post();?>
					<li class="flickable-post shadowbox loopCard">
						<a href="<?php the_permalink() ?>" rel="bookmark">
							<div class="loopImage featuredImage">
								<?php the_post_thumbnail('thumbnail');?>
							</div>
							<div class="loopText">
								<h4 class="loopTitle"><?php the_title(); ?></h4>
							</div>
						</a>
					</li>
					<?php endwhile; wp_reset_postdata(); ?>
				</ul>
			</div><!--/flickable-posts-wrap-->
			<div class="shareBrag" id="Crowd-Pleasers">
				<h2>🌱 Seedlings</h2>
				<p>
					Posts with almost <strong class="count">1,000 Shares</strong> that have taken root, but need still need some light to grow.
				</p>
			</div>
			<div class="flickable-posts-wrap">
				<?php $seedlingsQuery = new WP_Query(
					array(
						'posts_per_page' => -1,
						'tag' => 'seedling',
					)
				); ?>
				<ul class="flickable-posts">
					<li class="flickable-post badge">
						<img alt="A potted plant starting to grow" src="<?php echo get_template_directory_uri(); ?>/library/images/badge-seedling.svg"/>
					</li>
					<?php while($seedlingsQuery->have_posts()) : $seedlingsQuery->the_post();?>
					<li class="flickable-post shadowbox loopCard">
						<a href="<?php the_permalink() ?>" rel="bookmark">
							<div class="loopImage featuredImage">
								<?php the_post_thumbnail('thumbnail');?>
							</div>
							<div class="loopText">
								<h4 class="loopTitle"><?php the_title(); ?></h4>
							</div>
						</a>
					</li>
					<?php endwhile; wp_reset_postdata(); ?>
				</ul>
			</div><!--/flickable-posts-wrap-->
			<div class="shareBrag bigpad" id="Honorably-Unmentioned">
				<h2>💩 Honorably Unmentioned</h2>
				<p>
					The posts <strong class="count">that don't have 500 Shares</strong> (and maybe never will) don't get a fancy badge, and aren't listed here. <a href="https://itspronouncedmetrosexual.com/all-articles">But you can find them by their inauspiciousness</a> (none of the tags mentioned above) and &mdash; if you find one worth voting for &mdash; have your say on social media, planting a seed that others might help grow.
				</p>
			</div>

		</section><!--/popular-->


</div> <!-- end #content -->

<?php get_footer(); ?>
