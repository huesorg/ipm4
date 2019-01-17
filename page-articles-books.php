<?php
/*
Template Name: Articles & Books
*/
?>

<?php get_header(); ?>
<header class="page-header">
	<h1 class="page-title"><?php the_title(); ?></h1>
</header> <!-- end article header -->
<div id="content">
	<div id="main" role="main">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(' pageIntro'); ?> role="article" itemscope itemtype="https://schema.org/BlogPosting">

			<section class="" itemprop="articleBody">
				<?php the_content(); ?>
			</section> <!-- end article section -->
			<p>
				<a class="button" href="#recentUpdates">Jump to the Latest &darr;</a>
			</p>

		</article> <!-- end article -->

		<?php endwhile; endif; wp_reset_query(); ?> <!--reset page intro -->

		<section id="popular">
			<div class="shareBrag">
				<h3 class="pageSubhead">🐐 Greatest of All Time (G.O.A.T.s)</h3>
				<span>
					Shared over <strong class="count">500,000</strong> times
				</span>
			</div>
			<div class="flickable-posts-wrap">
				<?php $goatQuery = new WP_Query(
					array(
						'posts_per_page' => -1,
						'tag' => 'greatest-of-all-time',
					)
				); ?>

				<ul class="flickable-posts">
					<?php while($goatQuery->have_posts()) : $goatQuery->the_post();?>
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
			<div class="shareBrag">
				<h3 class="pageSubhead">🏆 Greatest Hits</h3>
				<span>
					Shared over <strong class="count">100,000</strong> times
				</span>
			</div>
			<div class="flickable-posts-wrap">
				<?php $greatestHitsQuery = new WP_Query(
					array(
						'posts_per_page' => -1,
						'tag' => 'greatest-hits',
					)
				); ?>

				<ul class="flickable-posts">
					<?php while($greatestHitsQuery->have_posts()) : $greatestHitsQuery->the_post();?>
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
			<div class="shareBrag">
				<h3 class="pageSubhead">🏅 Bona Fide Hits</h3>
				<span>
					Approaching <strong class="count">100,000</strong> social media shares
				</span>
			</div>
			<div class="flickable-posts-wrap">
				<?php $bonaFideHitsQuery = new WP_Query(
					array(
						'posts_per_page' => -1,
						'tag' => 'bona-fide-hit',
					)
				); ?>

				<ul class="flickable-posts">
					<?php while($bonaFideHitsQuery->have_posts()) : $bonaFideHitsQuery->the_post();?>
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
			<div class="text-center bigpad">
				<a class="button" title="All Popular Posts" href="https://itspronouncedmetrosexual.com/popular">View All Popular Posts &rarr;</a>
			</div>

		</section><!--/popular-->

		<?php getPatreonAsk();?>

		<section id="recentUpdates">

			<h3 class="pageSubhead">The Latest</h3>

			<?php $articlesBooksQuery = new WP_Query(
				array(
				    'posts_per_page' => 7,
				    'post_type' => 'post',
				    'tax_query' => array( //getting all posts in a custom taxonomy
				        array(
				        'taxonomy' => 'sections', //name of tax
				        'field' => 'slug', //can be by slug, name, or id
				        'terms' => 'articles-books' //the slug of the custom tax
				        ),
				    ),
				    'orderby' => 'published',
				    'order' => 'DESC'
				)
			);

			while($articlesBooksQuery->have_posts()) : $articlesBooksQuery->the_post();

		    	loopTeaser();

			endwhile; wp_reset_postdata(); ?>

		</section><!--/recentUpdates-->
		<a href="https://www.itspronouncedmetrosexual.com/all-articles/" class="button button-wide" alt="All Articles">View All Articles</a>
	</div><!--/main-->

	<div id="myBooks" role="complementary">

		<h3 class="pageSubhead">My Books</h3>

			<!--GUIDE TO GENDER -->
			<div class="bookCard">
				<a href="https://amzn.to/2hx0gba" alt="A Guide to Gender (2nd Edition): The Social Justice Advocate's Handbook">
					<img alt="A Guide to Gender (2nd Edition): The Social Justice Advocate's Handbook" src="<?php echo get_template_directory_uri(); ?>/library/images/book-mockup-guide-to-gender-2nd-edition-sam-killermann.jpg"/>
					<h4>A Guide to Gender (2nd Edition): The Social Justice Advocate's Handbook</h4>
					<p>
						<em><a href="https://guidetogender.com" alt="The Social Justice Advocate's Handbook: A Guide to Gender"><strong>A Guide to Gender</strong></a></em> is all about gender from a (you guessed it) social justice perspective. It's a 2-time best-seller in Gender on Amazon, has been adopted by dozens of gender studies professors as an intro book, and was written for a general audience.
					</p>
				</a>
				<ul>
					<li>
						<a class="button" alt="Get A Guide to Gender" href="https://guidetogender.com">
							Book Website
						</a>
					</li>
					<li>
						<a class="button accent-button" alt="Buy A Guide to Gender on Amazon" href="https://www.amazon.com/gp/product/0989760200/ref=as_li_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=0989760200&linkCode=as2&tag=itspronmetr-20&linkId=JU2MWWAS3YSZMMCY">
							Amazon
						</a>
					</li>
				</ul>
			</div><!--/bookcard-->

			<!-- Begin MailChimp Signup Form -->
			<div class="mailchimp ">
				<h4>The Social Justice Advocate's Handbook Mailing List</h4>
				<p>Get an email when I have updates on books in the series (publication dates, new editions, free downloads, etc.). Only a few emails a year, <em>just</em> about these books &mdash; my promise.</p>
				<form action="//impetus.us14.list-manage.com/subscribe/post?u=ae112598ccb37a2483ce8c20b&amp;id=dffb8137fe" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="clearfix validate" target="_blank" novalidate>

				<div class="mc-field-group">
					<input type="email" value="" placeholder="your@email.com" name="EMAIL" class="required email" id="mce-EMAIL">
					<button type="submit" name="subscribe" id="mc-embedded-subscribe">
				    	Want.
				    </button>
				</div>
					<div id="mce-responses" class="clear">
						<div class="response" id="mce-error-response" style="display:none"></div>
						<div class="response" id="mce-success-response" style="display:none"></div>
					</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
				    <div style="position: absolute; left: -5000px;"><input type="text" name="b_baa3ac0aa5ef20a1189b13625_4c17540fc5" tabindex="-1" value=""></div>
				</form>

			</div><!--End mc_embed_signup-->


			<!--UTMOF-->
			<div class="bookCard">
				<a href="https://amzn.to/2hx0gba" alt="A Guide to Gender (2nd Edition): The Social Justice Advocate's Handbook">
					<img alt="Unlocking the Magic of Facilitation: 11 Key Concepts You Didn't Know You Didn't Know" src="<?php echo get_template_directory_uri(); ?>/library/images/book-mockup-unlocking-the-magic-of-facilitation.jpg"/>
					<h4>Unlocking the Magic of Facilitation: 11 Key Concepts You Didn't Know You Didn't Know</h4>
					<p>
						<em><a href="https://facilitationmagic.com" alt="Unlocking the Magic of Facilitation: 11 Key Concepts You Didn't Know You Didn't Know"><strong>Unlocking the Magic of Facilitation</strong></a></em> is the book we wrote to help you help others understand everything on this site. It's for facilitators of all stripes, educators, and trainers, and is the perfect complement to <i>A Guide to Gender</i>. It's the "HOW?" where the rest of this site is the "WHAT?" and "WHY?"
					</p>
				</a>
				<ul>
					<li>
						<a class="button" alt="Get Unlocking the Magic of Facilitation" href="https://facilitationmagic.com">
							Book Website
						</a>
					</li>
					<li>
						<a class="button accent-button" alt="Buy Unlocking the Magic of Facilitation on Amazon" href="https://bit.ly/UtMoFaz">
							Amazon
						</a>
					</li>
				</ul>
			</div><!--/bookcard-->

			<!-- <div class="bookCard preorder ">
				<div class="comingSoon">Coming Soon</div>
				<div class="">
					<p class="text">
						<em>The Social Justice Advocate's Handbook: <strong>A Guide to Sexuality</strong></em> is a comprehensive, no-shame, objective look at something we're all afraid to talk about, but spend a lot of time thinking about. It's centered upon my "-ness" approach to sexuality model. Out later this year.
					</p>
					<img alt="The Social Justice Advocate's Handbook: A Guide to Sexuality" src="<?php echo get_template_directory_uri(); ?>/library/images/sjah-blank-cover.jpg"/>
				</div>
			</div><!--/bookCard-->


		<!-- <div class="bookCard preorder ">
			<div class="comingSoon">Coming Soon</div>
			<div class="">
				<p class="text">
					<em>The Social Justice Advocate's Handbook: <strong>A Guide to Revolution</strong></em> is a walk down an important road for people who want to change the world. You say you want a revolution? I'm dissecting major revolutions that have happened throughout history, and providing a few models for what makes 'em tick.
				</p>
				<img alt="The Social Justice Advocate's Handbook: A Guide to Sexuality" src="<?php echo get_template_directory_uri(); ?>/library/images/sjah-blank-cover.jpg"/>
			</div>
		</div><!--/bookCard-->


		<div id="browseByCat" class="">
			<h3>Browse by Category</h3>
			<ul>
				<li class=""><a class="blue" href="<?php echo home_url(); ?>/category/socialjustice" alt="Social Justice Posts"><img src="<?php echo get_template_directory_uri();?>/library/images/cat-socialjustice.png" alt="Category Icon"/>Social Justice</a></li>

				<li class=""><a class="yellow" href="<?php echo home_url(); ?>/category/gender-2" alt="Gender Posts"><img src="<?php echo get_template_directory_uri();?>/library/images/cat-gender-2.png" alt="Category Icon"/>Gender</a></li>

				<li class=""><a class="purple" href="<?php echo home_url(); ?>/category/sexuality-2" alt="Sexuality Posts"><img src="<?php echo get_template_directory_uri();?>/library/images/cat-sexuality-2.png" alt="Category Icon"/>Sexuality</a></li>

				<li class=""><a class="green" href="<?php echo home_url(); ?>/category/edugraphics" alt="Edugraphics"><img src="<?php echo get_template_directory_uri();?>/library/images/cat-edugraphics.png" alt="Category Icon"/>Edugraphics</a></li>

				<li class=""><a class="orange" href="<?php echo home_url(); ?>/category/op-ed" alt="Op-Ed Posts"><img src="<?php echo get_template_directory_uri();?>/library/images/cat-op-ed.png" alt="Category Icon"/>Op-Ed</a></li>
			</ul>
		</div>

	</div><!--/myBooks-->
</div><!--/content-->
<?php get_footer(); ?>
