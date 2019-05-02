<?php get_header(); ?>

<section class="featuredImage desktopHide">
	<?php the_post_thumbnail('medium_large'); ?>
</section>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<header class="page-header">
	<section class="articleDetails">
		<div class="shareBrag">
			<?php if (has_tag('greatest-of-all-time')) : ?>
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
				By <a href="#About-the-Author">Sam Killermann</a>, in <?php the_category(' / ') ?>, tagged
				<?php the_tags('',', ',''); ?>
			</p>
		</div>
	</section>
	<section class="mobileHide featuredImage">
		<?php the_post_thumbnail('full'); ?>
	</section>
</header> <!-- end article header -->

<section id="content">

	<aside id="articleStuff" role="complementary">
		<div class="mobileHide byline">
			<p>
				By <a href="#About-the-Author">Sam Killermann</a>, in <?php the_category(' / ') ?>, tagged
				<?php the_tags('',', ',''); ?>
			</p>
		</div>

		<?php if( get_field('downloadable_pdf') ): ?>

		<div class="downloadSidebar">
			<a class="button button-wide" href="<?php the_field('downloadable_pdf')?>" alt="Download as PDF" onClick="ga('send', 'event', { eventCategory: 'Free Resources', eventAction: 'button_click', eventLabel: 'Download Sidebar'});">🖨  Download .PDF</a>
		</div>

		<?php endif; ?>

		<?php getPatreonAsk();?>

		<?php bones_hook_after_article_stuff();?>

	</aside>
	<main id="main" role="main">

			<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="https://schema.org/BlogPosting">

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

	</main> <!-- end #main -->
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
	<div id="singlefooter">

		<div id="About-the-Author" class="authorSnapshot clearfix">
			<h2>About the Author</h2>
			<a href="https://www.itspronouncedmetrosexual.com/2012/12/reasons-people-believe-feminism-hates-men/" title="Hi! I'm a feminist!"><img class="snapshot-portrait" src="<?php echo get_template_directory_uri();?>/library/images/hi-im-sam-bottom-shadow.png" alt="Sam Killermann Self Portrait"/></a>
			<p>
				Hi! I'm <a href="https://bit.ly/16fQZbg" target="_blank" alt="Sam Killermann">Sam Killermann</a>. I created <a href="https://www.ItsPronouncedMetrosexual.com/about" title="About It's Pronounced Metrosexual">It's Pronounced Metrosexual</a> in 2011, write everything here, do the doodles, and I even coded the site itself. Generally speaking, I'm an activist, educator, and artist who is employed by <a href="https://bit.ly/bemyboss" title="Be Sam Killermann's Boss(es)">a collective of bosses</a> to create for global justice.
			</p>
			<p>
				If you appreciate what I'm doing here, I bet you'll dig these other projects I created:
			</p>
			<ul>
				<li>
					<div class="snapshot-icon">
						🏳️‍🌈
					</div>
					<span>
						<a href="https://bit.ly/2eyLccA" alt="The Safe Zone Project">
						The Safe Zone Project</a> (a free online resource for LGBTQ+ trainings)
					</span>
				</li>
				<li>
					<div class="snapshot-icon">
						🌳
					</div>
					<span>
						<a href="https://bit.ly/2dDlEtE" alt="The Sexualitree">The Sexualitree</a> (a comprehensive sexuality model, curriculum, &amp; downloads)
					</span>
				</li>
				<li>
					<div class="snapshot-icon">
						💜
					</div>
					<span>
						<a href="https://bit.ly/1MAfukv" alt="I Heart the Singular They">I <3 Singular They</a> (an animated love letter to a pronoun... yep.)
					</span>
				</li>
			</ul>
		</div>


		<div id="relatedFooter" class="text-center">
			<h2>To Read Next</h2>
			<div class="flickable-posts-wrap">
				<?php $readnextquery = new WP_Query(
					array(
						'posts_per_page' => 7,
						'offset' => 0,
						'post__not_in' => array (get_the_ID()),
						'orderby' => 'post_date',
						'order' => 'DESC',
					)
				); ?>

				<ul class="flickable-posts">
					<?php while($readnextquery->have_posts()) : $readnextquery->the_post();?>
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

		</div>
		<div class="footerPatreon">
			<?php getPatreonAsk();?>
		</div>

		<div id="single--subscribe" class="subscribeSection">
			<?php getSubscribeOptions();?>
		</div><!--/home-subscribe-->
	</div>

</section> <!-- end #content -->


<?php get_footer(); ?>
