<?php
/*
Template Name: Videos & Podcasts
*/
?>
<?php get_header(); ?>

<header class="page-header">

	<h1 class="page-title"><?php the_title(); ?></h1>

</header> <!-- end article header -->

<div id="content" class="halfsies">

	<main id="main" role="main">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class('subtitle'); ?> role="article" itemscope itemtype="https://schema.org/BlogPosting">

			<section class="entry-content" itemprop="articleBody">
				<?php the_content(); ?>
			</section> <!-- end article section -->

		</article> <!-- end article -->

		<?php endwhile; endif; wp_reset_query(); ?> <!--reset page intro -->

		<section id="videos">
			<h2>A Few Videos that Already Exist</h2>
			<article class="vidcard loopCard">
				<div class="loopText">
					<h3 class="loopTitle"><span class="flag">Full</span> Understanding the Complexities of Gender TEDxTalk by Sam Killermann</h3>
				</div>
				<div class="youtube">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/NRcPXtqdKjE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				</div>
			</article>
			<article class="vidcard loopCard">
				<div class="loopText">
					<h3 class="loopTitle"><span class="flag">Clip</span> Gender Revolution with Katie Couric: The Genderbread Person</h3>
				</div>
				<div class="youtube">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/89Az3m-qJeU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				</div>
			</article>
			<article class="vidcard loopCard">
				<div class="loopText">
					<h3 class="loopTitle"><span class="flag new-flag">New!</span> Gender: From Boxes to "-Ness", A Journey of Understanding with Sam Killermann at Nerd Nite</h3>
				</div>
				<div class="youtube">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/q8bSIuyJHD8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				</div>
			</article>
		</section>

	</main><!--main-->

	<section id="podcasts" class="sidebar" role="sidebar">
		<h2>Listen to my Social Justice Podcast</h2>
		<article class="vidcard loopCard">
			<div class="loopText">
				<h3 class="loopTitle"><span class="flag new-flag">NEW!</span> The Heretic Podcast: Social Justice, Minus Dogma (with <a href="https://hereticpodcast.com/about/about-the-team/about-the-host/" title="About the Host">Sam Killermann</a>)</h3>
				<p>
					<a href="https://hereticpodcast.com" title="The Heretic Podcast: Social Justice Minus Dogma">Heretic</a> is about the social justice movement and the unwritten rules that underpin (and may undermine) it. It's an extension of the articles I've been posting here in the <a href="https://www.itspronouncedmetrosexual.com/tag/social-justice-dogma/" title="Social Justice Dogma Series">Social Justice Dogma Series</a>, featuring interviews that dig into different tenets.
				</p>
				<iframe src="https://anchor.fm/heretic/embed" frameborder="0" height="102" width="100%" scrolling="yes"></iframe>

			</div>
			<div class="loopImage">
				<a href="https://hereticpodcast.com" title="The Heretic Podcast: Social Justice Minus Dogma">
					<img src="https://hereticpodcast.com/wp-content/uploads/2018/09/Heretic-Podcast-Facebook-Image-2018.png" alt="The Heretic Podcast: Social Justice Minus Dogma"/>
				</a>
			</div>
		</article>

	</section>
</div><!--/content-->
<div class="footerPatreon" style="margin-top:4vw;">
	<?php getPatreonAsk();?>
</div>
<?php get_footer(); ?>
