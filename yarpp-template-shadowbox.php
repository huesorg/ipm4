<?php
/*
YARPP Template: Shadowbox
*/
?>

<?php if (have_posts()):?>
<ul>
	<?php while (have_posts()) : the_post(); ?>
	<li class="shadowbox loopCard">
		<a href="<?php the_permalink() ?>" rel="bookmark">
			<div class="loopImage featuredImage">
				<?php the_post_thumbnail('thumbnail');?>
			</div>
			<div class="loopText">
				<h4 class="loopTitle"><?php the_title(); ?></h4>
			</div>
		</a>
	</li>
	<?php endwhile; ?>
</ul>

<?php else:
query_posts("orderby=rand&order=asc&limit=1");
the_post();?>
<p>No related posts were found, so here's a consolation prize: <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>.</p>
<?php endif; ?>
