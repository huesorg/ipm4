<?php get_header(); ?>
<header class="article-header">

	<h1 class="archive-title"><span><?php _e('search results for:', 'bonestheme'); ?></span> <?php echo esc_attr(get_search_query()); ?></h1>

</header> <!-- end article header -->

<div id="content">

	<div id="main" role="main">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<?php loopMinimal();?>

		<?php endwhile; ?>

				<?php if (function_exists('bones_page_navi')) { ?>
						<?php bones_page_navi(); ?>
				<?php } else { ?>
						<nav class="wp-prev-next">
								<ul class="">
									<li class="prev-link"><?php next_posts_link(__('&laquo; Older Entries', "bonestheme")) ?></li>
									<li class="next-link"><?php previous_posts_link(__('Newer Entries &raquo;', "bonestheme")) ?></li>
								</ul>
						</nav>
				<?php } ?>

			<?php else : ?>

					<article id="post-not-found" class="hentry ">
						<header class="article-header">
						</header>
						<section class="entry-content">
							<p><strong>Sorry! No results.</strong> Use the search bar to try another search, or just head <a href="http://itspronouncedmetrosexual.com">home</a> and browse from there.</p>
						</section>
						<footer class="article-footer">
						</footer>
					</article>

					<h3>Or get started learning with one of these articles:</h3>
					<div class="">
						<?php wpp_get_mostpopular("post_type=post&cat=131&stats_comments=0&limit=20&pages='0'&order_by='views'&thumbnail_selection='usergenerated'&thumbnail_width='60'&thumbnail_height='60'"); ?>
					</div>

			<?php endif; ?>

		</div> <!-- end #main -->

</div> <!-- end #content -->

<?php get_footer(); ?>
