<?php
/*
Template Name: Internal Show Pages
*/
?>

<?php get_header(); ?>

			<div id="content" class="theShow">

				<div id="inner-content" class="wrap ">
						<header class="article-header">

							<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>

						</header> <!-- end article header -->

						<div id="main" class="eightcol first " role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="https://schema.org/BlogPosting">

								<section class="entry-content " itemprop="articleBody">
										<nav class="showNav ">
											<ul>
												<li>
													<a href="<?php echo home_url(); ?>/about-the-show/" alt="About the Show">
														<i class="fa fa-fw pull-left fa-question-circle"></i> <span>About the Show</span>
													</a>
												</li>
												<li>
													<a href="<?php echo home_url(); ?>/praise" alt="Praise and Reactions">
														<i class="fa fa-fw pull-left fa-comments"></i> <span>Praise &amp; Reactions</span>
													</a>
												</li>
												<li>
													<a href="<?php echo home_url(); ?>/videos-and-media/" alt="Videos and Media">
														<i class="fa fa-fw pull-left fa-picture-o"></i> <span>Videos &amp; Photos</span>
													</a>
												</li>
												<li>
													<a href="<?php echo home_url(); ?>/pricing" alt="Pricing and Contracts">
														<i class="fa fa-fw pull-left fa-money"></i> <span>Pricing &amp; Contracts</span>
													</a>
												</li>
											</ul>
										</nav>

										<?php the_content(); ?>
								</section> <!-- end article section -->

								<footer class="article-footer">
									<?php the_tags('<span class="tags">' . __('Tags:', 'bonestheme') . '</span> ', ', ', ''); ?>

								</footer> <!-- end article footer -->

							</article> <!-- end article -->

							<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry ">
										<header class="article-header">
											<h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e("This is the error message in the page.php template.", "bonestheme"); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</div> <!-- end #main -->

						<div class="last fourcol">

							<ul class="callToAction">
								<li>
									<a class="button" alt="Book Sam Today" href="<?php echo home_url()?>/book">
										Book Sam Today!</em><br/>
										<span>Bring IPM to your campus</span>
									</a>
								</li>
								<li><a class="button accent-button" alt="Email for More Info" target="_blank" href="mailto:sam@itspronouncedmetrosexual.com?subject=IPM%20Inquiry&cc=cmapa@novlmgmt.com">Email for More Info<i class="fa fa-envelope-o fa-lg fa-fw pull-right"></i></a></li>
							</ul>

						</div>

						<?php get_sidebar('pageSidebar'); ?>

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
