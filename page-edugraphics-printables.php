<?php
/*
Template Name: Edugraphics & Printables
*/
?>

<?php get_header(); ?>

<header class="page-header">

	<h1 class="page-title"><?php the_title(); ?></h1>

</header> <!-- end article header -->
<div id="content">
	<div id="main" role="main">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(' pageIntro'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

			<section class="" itemprop="articleBody">
				<?php the_content(); ?>
			</section> <!-- end article section -->

		</article> <!-- end article -->

		<?php endwhile; endif; wp_reset_query(); ?> <!--reset page intro -->


		<div id="edugraphics">

			<h3 class="pageSubhead">Recent Edugraphics <a href="http://itspronouncedmetrosexual.com/category/edugraphics/" alt="All Edugraphics">(show all)</a></h3>

			<?php $edugraphics_query = new WP_Query(
				array(
				    'posts_per_page' => 5,
				    'post_type' => 'post',
				    'tax_query' => array( //getting all posts in a custom taxonomy
				        array(
				        'taxonomy' => 'sections', //name of tax
				        'field' => 'slug', //can be by slug, name, or id
				        'terms' => 'edugraphics' //the slug of the custom tax
				        ),
				    ),
				    'orderby' => 'published',
				    'order' => 'DESC'
				)
			);

			while($edugraphics_query->have_posts()) : $edugraphics_query->the_post();

		    	loopShadowbox();

			endwhile; wp_reset_postdata(); ?>

			<a href="http://itspronouncedmetrosexual.com/category/edugraphics/" class="button button-wide" alt="All Edugraphics">View All Edugugraphics</a>

		</div><!--/edugraphics-->

	</div> <!-- end #main -->


	<div id="printables" role="main">
		<?php getPatreonAsk();?>
		<h3 class="pageSubhead">Recent Printable Resources <a href="http://itspronouncedmetrosexual.com/category/printable-resources/" alt="All Printables">(show all)</a></h3>

		<?php $printables_query = new WP_Query(
			array(
				'posts_per_page' => 10,
				'post_type' => 'post',
				'tax_query' => array( //getting all posts in a custom taxonomy
					array(
					'taxonomy' => 'sections', //name of tax
					'field' => 'slug', //can be by slug, name, or id
					'terms' => 'printables' //the slug of the custom tax
					),
				),
				'orderby' => 'published',
				'order' => 'DESC'
			)
		);

		while($printables_query->have_posts()) : $printables_query->the_post();

			if( get_field('downloadable_pdf') ):
				loopBlogged();
			endif;

		endwhile; wp_reset_postdata(); ?>

		<a href="http://itspronouncedmetrosexual.com/category/printable-resources/" class="button button-wide" alt="All Printables">View All Printable Resources</a>

	</div><!--/printables-->


</div> <!-- end #content -->

<?php get_footer(); ?>
