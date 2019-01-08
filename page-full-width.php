<?php
/*
Template Name: Full-Width Page (No Sidebars)
*/
?>

<?php get_header(); ?>
<header class="article-header">

	<h1 class="page-title"><?php the_title(); ?></h1>

</header> <!-- end article header -->

<div id="content">

	<div id="main" role="main">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

			<section class="featuredImage">
				<?php the_post_thumbnail('full'); ?>
			</section>

			<section class="entry-content " itemprop="articleBody">
				<?php the_content(); ?>
			</section> <!-- end article section -->

			<footer class="article-footer">
				<p class=""><?php the_tags('<span class="tags">' . __('Tags:', 'bonestheme') . '</span> ', ', ', ''); ?></p>

			</footer> <!-- end article footer -->

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

	</div> <!-- end #main -->

</div> <!-- end #content -->

<?php get_footer(); ?>
