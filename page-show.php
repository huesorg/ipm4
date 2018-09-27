<?php
/*
Template Name: The Show
*/
?>

<?php get_header(); ?>

			<div id="content" class="theShow">

				<div id="inner-content" class="wrap ">

						<header class="article-header">

							<h1 class="page-title"><?php the_title(); ?></h1>

						</header> <!-- end article header -->

						<div id="youtubeShow" class="">
							<div class="youtubeWrap bigYoutube eightcol first">
								<div class="youtube">
									<iframe src="http://www.youtube.com/embed/t4JdYgxnciI" width="560" height="315" frameborder="0"></iframe>
								</div>
							</div>

							<div id="main" class=" fourcol last" role="main">

								<ul class="callToAction">
									<li>
										<a class="button" alt="Book Sam Today" href="<?php echo home_url()?>/book">
											<i class="fa fa-smile-o fa-3x fa-fw pull-right"></i>
											Book Sam Today!</em><br/>
											<span>Bring IPM to your campus</span>
										</a>
									</li>
									<li><a class="button accent-button" alt="Learn About the Show" href="<?php echo home_url(); ?>/about-the-show/">Learn About the Show<i class="fa fa-question-circle fa-lg fa-fw pull-right"></i></a></li>
								</ul>

								<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

								<article id="post-<?php the_ID(); ?>" <?php post_class(' pageIntro'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

									<section class="" itemprop="articleBody">
										<?php the_content(); ?>
									</section> <!-- end article section -->

								</article> <!-- end article -->

							</div><!--/main-->

							<?php endwhile; endif; wp_reset_query(); ?> <!--reset page intro -->



						</div><!--/youtubeShow-->

						<div id="aboutShow" class="fourcol first ">
							<p class="introParagraph">Audience members connect with the show because it’s real life: true stories collected and sewn together to create an hour-long show ripe with laughs and mental challenges.</p>

							<p>As Sam tells his story, he creates a visceral metaphor for stereotyping as a form of oppression. The issues and overarching themes he discusses can be applied to all groups – but most of the stories are about sexuality and gender, and the snap judgments people make about Sam’s... well, both. It’s an easy, low-budget way to create a high-impact experience for audience members. All you need is a stage, a stool, a chair, and a microphone. Sam will do the rest.</p>

							<p>The show will leave you laughing, thinking, and full of questions — which is why it’s always followed by a [generally rousing] Q&A. Sam ends the evening by giving the audience a nudge towards a practical way to effect meaningful positive change in their lives and community.</p>
						</div><!--/aboutShow-->

						<div id="praiseShow" class="fourcol ">
							<h2>Praise for the Show</h2>
							<blockquote>Sam’s presence, performance, and impact were of such cruciality at this time, in this space. The reverberations are still felt - there is more respectful curiosity, pause in judgments, more courage in [his] wake</blockquote>

							<p>Hear what <strong>Marc West, as Director of Student Life and Involvement</strong> at Baldwin Wallace College had to say:</p>
							<div class="youtube">
								<iframe src="http://www.youtube.com/embed/jUVJH4BPmQc" height="344" width="556" frameborder="0"></iframe>
							</div>

							<blockquote>It’s Pronounced Metrosexual is a great way to start talking about issues of diversity and inequality.</blockquote>

							<a class="button" href="<?php echo home_url()?>/praise" alt="Praise and Reactions">Hear more reactions to the show <i class="fa fa-comments fa-lg"></i></a>

						</div><!--/praiseShow-->

						<div id="mediaShow" class="fourcol last ">
							<p class="introParagraph">Let us help you turn a great show into a greatly-attended show.</p>
							<h2>Media &amp; Promo Goodness</h2>
							<a href="<?php echo get_template_directory_uri(); ?>/library/downloads/ipm-stock-images.zip" alt="Download Promotional Image Zip">
								<img src="<?php echo get_template_directory_uri(); ?>/library/images/dl-sam-killermann-ipm-headshots.jpg" alt="Download Promotional Image Zip">
							</a>
							<p>Hopefully you'll agree that it's great to work with someone who doesn't just do the fancy onstage stuff, but also does all the imagey-wimagey, promo-createy behind-the-scenes stuff. <strong>Click above to download a stock image .zip with headshots of Sam, IPM Logos, and other goodies.</p>


						</div><!--/showNav-->

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
