<?php get_header(); ?>

<section class="featuredImage desktopHide">
	<?php the_post_thumbnail('medium_large'); ?>
</section>

<div id="content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<header class="page-header">
		<section class="articleDetails">
			<div class="shareBrag">
				<?php if (has_tag('g-o-a-t')) : ?>
					<span class="shareCount goat">
						🐐 Over <strong class="count">500K</strong> Shares 📣
					</span>
				<?php elseif (has_tag('greatest-hits')) : ?>
					<span class="shareCount greatest-hits">
						🏆 Over <strong class="count">100K</strong> Shares 📣
					</span>
				<?php elseif (has_tag('bona-fide-hit')) : ?>
					<span class="shareCount bona-fide-hit">
						🏅 Approaching <strong class="count">100K</strong> Shares 📣
					</span>
				<?php elseif (has_tag('rising-star')) : ?>
					<span class="shareCount rising-star">
						🌟 Approaching <strong class="count">50K</strong> Shares 📣
					</span>
				<?php elseif (has_tag('sensation')) : ?>
					<span class="shareCount sensation">
						😍 Approaching <strong class="count">10K</strong> Shares 📣
					</span>
				<?php elseif (has_tag('crowd-pleaser')) : ?>
					<span class="shareCount crowd-pleaser">
						👏 Over <strong class="count">1,000</strong> Shares 📣
					</span>
				<?php elseif (has_tag('seedling')) : ?>
					<span class="shareCount seedling">
						🌱 Almost <strong class="count">1,000</strong> Shares 📣
					</span>
				<?php endif;  ?>

				<div class="shareBox">
					<div class="shareBox--inner">
						<span>Add your voice 👇</span>
						<a onClick="ga('send', 'event', { eventCategory: 'Social', eventAction: 'button_click', eventLabel: 'Facebook Share'});" target="_blank" class="facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>" title="Share on Facebook">Share on Facebook</a>
						<a onClick="ga('send', 'event', { eventCategory: 'Social', eventAction: 'button_click', eventLabel: 'Twitter Share'});" target="_blank" class="twitter" href="https://twitter.com/home?status=<?php the_permalink();?>%20by%20%40Killermann%20on%20%40ActuallyMetro" title="Tweet">Tweet</a>
					</div>
				</div>
			</div>
			<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>

			<div class="excerpt">
				<?php the_excerpt()?>
			</div>

			<div class="byline desktopHide">
				<p>
					By <?php the_author_posts_link(); ?>
					on <?php the_date(); ?> in <?php the_category(' / ') ?> tagged
					<?php the_tags('',', ',''); ?>. <span class="updated">Updated <?php the_modified_date(); ?></span>
				</p>
			</div>
		</section>
		<section class="mobileHide featuredImage">
			<?php the_post_thumbnail('full'); ?>
		</section>
	</header> <!-- end article header -->
	<div id="articleStuff" role="complementary">
		<div class="mobileHide byline">
			<p>
				By <?php the_author_posts_link(); ?>
				on <?php echo get_the_date(); ?> in <?php the_category(' / ') ?> tagged
				<?php the_tags('',', ',''); ?>. <p><strong class="updated pink">Updated <?php the_modified_date('m/d/Y'); ?></strong></p>
			</p>
		</div>

		<?php if( get_field('downloadable_pdf') ): ?>

		<div class="downloadSidebar">
			<a class="button button-wide" href="<?php the_field('downloadable_pdf')?>" alt="Download as PDF" onClick="ga('send', 'event', { eventCategory: 'Free Resources', eventAction: 'button_click', eventLabel: 'Download Sidebar'});">🖨  Download .PDF</a>
		</div>

		<?php endif; ?>

		<?php getPatreonAsk();?>

		<?php bones_hook_after_article_stuff();?>

	</div>
	<div id="main" role="main" class="grid-cell">

			<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

				<section class="entry-content " itemprop="articleBody">
					<?php bones_hook_post_intro();?>
					<?php the_content(); ?>
				</section> <!-- end article section -->

				<footer class="article-footer">

					<?php bones_hook_post_footer();?>

				</footer> <!-- end article footer -->

			</article> <!-- end article -->


		<div id="stickyPostTitle" class="mobileHide unactiveSticky">

			<ul id="stickyTitle">
				<?php if( get_field('downloadable_pdf') ): ?>
				<li class="downloadSticky">
					<a href="<?php the_field('downloadable_pdf')?>" alt="Download as PDF" onClick="ga('send', 'event', { eventCategory: 'Free Resources', eventAction: 'button_click', eventLabel: 'Download Sticky'});">Download .PDF</a>
				</li>
				<?php endif; ?>
				<li class="titleSticky"><span><?php the_title(); ?></span></li>
				<li><a onClick="ga('send', 'event', { eventCategory: 'Social', eventAction: 'button_click', eventLabel: 'Facebook Share'});" target="_blank" class="facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>" title="Share on Facebook">Share on Facebook</a></li>
			</ul>
		</div><!--/stickyPostTitle-->

	</div> <!-- end #main -->
	<?php endwhile; else : ?>
	<article id="post-not-found" class="hentry grid-cell">
			<header class="page-header">
				<h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
			</header>
			<section class="entry-content">
				<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
			</section>
	</article>
	<?php endif; ?>
	<?php get_sidebar(); ?>
	<div class="footerPatreon">
		<?php getPatreonAsk();?>
	</div>

	<div id="single--subscribe" class="subscribeSection">
		<?php getSubscribeOptions();?>
	</div><!--/home-subscribe-->

</div> <!-- end #content -->


<?php get_footer(); ?>
