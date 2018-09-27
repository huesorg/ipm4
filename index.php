<?php

global $wp_query;
$modifications = array();
if( !empty( $_GET['catname'] ) ) {
	$modifications['category_name'] = $_GET['catname'];
}

$args = array_merge(
	$wp_query->query_vars,
	$modifications
);

query_posts( $args );

get_header(); ?>

<header class="article-header">

	<h1 class="page-title">All Articles, Posts, &amp; Resources</h1>

</header> <!-- end article header -->

<div id="content">
	<div id="sidebar" role="complementary">
		<div class="post-filters">
			<h3>Filter Posts</h3>
			<form class="grid gradient-grey grid--justifyCenter grid--center">
				<div class="grid-cell">
					<label for="orderby">Order By</label>
					<select id="orderby" name="orderby">
						<?php
							$orderby_options = array(
								'post_date' => 'Date',
								'post_title' => 'Title'
							);
							foreach( $orderby_options as $value => $label ) {
								echo "<option ".selected( $_GET['orderby'], $value )." value='$value'>$label</option>";
							}
						?>
					</select>
				</div>
				<div class="grid-cell">
					<label for="orderby">Up or down?</label>
					<select id="order" name="order">
						<?php
							$order_options = array(
								'DESC' => 'Descending',
								'ASC' => 'Ascending'
							);
							foreach( $order_options as $value => $label ) {
								echo "<option ".selected( $_GET['order'], $value )." value='$value'>$label</option>";
							}
						?>
					</select>
				</div>
				<div class="grid-cell">
					<label for="catname">Category</label>
					<select id="catname" name="catname">
						<?php
							$order_options = array(
								'' => 'All',
								'gender-2' => 'Gender',
								'sexuality-2' => 'Sexuality',
								'socialjustice' => 'Social Justice',
								'edugraphics' => 'Edugraphics',
								'op-ed' => 'Opinion Editorial'
							);
							foreach( $order_options as $value => $label ) {
								echo "<option ".selected( $_GET['catname'], $value )." value='$value'>$label</option>";
							}
						?>
					</select>
				</div>
				<div class="grid-cell">
					<button class="button button-grey" type="submit">Go!</button>
				</div>
			</form>
		</div><!--/post-filters-->

		<?php getPatreonAsk();?>
	</div><!--/sidebar-->

	<div id="main" role="main">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<?php loopTeaser();?>

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
							<p><?php _e("This is the error message in the index.php template.", "bonestheme"); ?></p>
					</footer>
				</article>

		<?php endif; ?>

	</div> <!-- end #main -->


</div> <!-- end #content -->

<?php get_footer(); ?>
