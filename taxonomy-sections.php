<?php get_header(); ?>
<header class="archive-header">
	<h1 class="page-title"><?php single_cat_title(); ?></h1>

	<?php
		if ( !get_query_var( 'paged' ) ) {
			echo "<div class='catIntro'>";
			echo wpautop( apply_filters( 'the_content', term_description() ) );
			echo "</div>";
		}
	?>
</header>

<div id="content" class="no-sidebar">

		<main id="main" class="" role="main">
			<?php if (have_posts()) : while (have_posts()) : the_post();

				if( get_field('downloadable_pdf') ):
					loopBlogged();

				else :

					loopTeaser();

				endif;

			endwhile; ?>
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


		</main> <!-- end #main -->


</div> <!-- end #content -->

<?php get_footer(); ?>
