<?php get_header(); ?>

<?php if (is_category()) { ?>
<h1 class="page-title">
	<?php single_cat_title(); ?>
</h1>

<?php
	if ( !get_query_var( 'paged' ) ) {
		echo "<div class='catIntro'>";
		echo wpautop( apply_filters( 'the_content', term_description() ) );
		echo "</div>";
	}
?>

<?php } elseif (is_tag()) { ?>
<h1 class="page-title">
	<?php single_cat_title(); ?>
</h1>

<?php
	if ( !get_query_var( 'paged' ) ) {
		echo "<div class='catIntro'>";
		echo wpautop( apply_filters( 'the_content', term_description() ) );
		echo "</div>";
	}
?>

<?php } elseif (is_author()) {
global $post;
$author_id = $post->post_author;
?>
<h1 class="page-title">

	<span><?php _e("All posts by", "bonestheme"); ?></span> <?php the_author_meta('display_name', $author_id); ?>

</h1>
<?php } elseif (is_day()) { ?>
<h1 class="page-title">
	<span><?php _e("Daily Archives:", "bonestheme"); ?></span> <?php the_time('l, F j, Y'); ?>
</h1>

<?php } elseif (is_month()) { ?>
	<h1 class="page-title">
		<span><?php _e("Monthly Archives:", "bonestheme"); ?></span> <?php the_time('F Y'); ?>
	</h1>

<?php } elseif (is_year()) { ?>
	<h1 class="page-title">
		<span><?php _e("Yearly Archives:", "bonestheme"); ?></span> <?php the_time('Y'); ?>
	</h1>
<?php } ?>
<div id="content">
	<div id="main" role="main">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php loopTeaser();?> <!--THE LOOP from Loops.php -->
		<?php endwhile; ?>
				<?php if (function_exists('bones_page_navi')) { ?>
					<?php bones_page_navi(); ?>
				<?php } else { ?>
					<nav class="wp-prev-next">
						<ul>
							<li class="prev-link"><?php next_posts_link(__('&laquo; Older Entries', "bonestheme")) ?></li>
							<li class="next-link"><?php previous_posts_link(__('Newer Entries &raquo;', "bonestheme")) ?></li>
						</ul>
					</nav>
				<?php } ?>

		<?php else : ?>

				<article id="post-not-found" class="hentry">
					<header class="article-header">
						<h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
					</header>
					<section class="entry-content">
						<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
					</section>
					<footer class="article-footer">
							<p><?php _e("This is the error message in the archive.php template.", "bonestheme"); ?></p>
					</footer>
				</article>

		<?php endif; ?>

	</div> <!-- end #main -->

	<?php get_sidebar('pageSidebar'); ?>


</div> <!-- end #content -->

<?php get_footer(); ?>
