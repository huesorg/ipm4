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

		<article id="post-<?php the_ID(); ?>" <?php post_class(' pageIntro'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

			<section class="" itemprop="articleBody">
				<?php the_content(); ?>
			</section> <!-- end article section -->

		</article> <!-- end article -->

		<?php endwhile; endif; wp_reset_query(); ?> <!--reset page intro -->


		<div id="popularByCat">
			<h3 class="pageSubhead">Most Popular Articles</h3>
			<div class="grid grid--flexCells grid--guttersLg grid--full small-grid--fit">
				<div class="grid-cell">
					<div class="card all-time">
						<span class="title">All-Time Top 3</span>
						<?php wpp_get_mostpopular("post_type=post&range='all'&stats_comments=0&limit=3&pages='0'&order_by='views'"); ?>
					</div>
				</div>
				<div class="grid-cell">
					<div class="card edugraphics">
						<span class="title"><a class="green" href="<?php echo home_url(); ?>/category/edugraphics">Edugraphics</a> Top 3</span>
						<?php wpp_get_mostpopular("post_type=post&range='all'&cat='70'&stats_comments=0&limit=3&pages='0'&order_by='views'"); ?>
					</div>
				</div>
				<div class="grid-cell">
					<div class="card opEd">
						<span class="title"><a class="orange" alt="All Op-Ed" href="<?php echo home_url(); ?>/category/op-ed">Opinion Editorial</a> Top 3</span>
						<?php wpp_get_mostpopular("post_type=post&range='all'&stats_comments=0&cat='67'&limit=3&pages='0'&order_by='views'"); ?>
					</div>
				</div>
			</div>

			<div class="grid grid--flexCells grid--guttersLg small-grid--fit">
				<div class="grid-cell">
					<div class="card socialJustice">
						<span class="title"><a class="blue" alt="All Social Justice" href="<?php echo home_url(); ?>/category/socialjustice">Social Justice</a> Top 3</span>
						<?php wpp_get_mostpopular("post_type=post&range='all'&cat='27'&stats_comments=0&limit=3&pages='0'&order_by='views'"); ?>
					</div>
				</div>

				<div class="grid-cell">
					<div class="card gender">
						<span class="title"><a class="yellow" alt="All Gender" href="<?php echo home_url(); ?>/category/gender-2">Gender</a> Top 3</span>
						<?php wpp_get_mostpopular("post_type=post&range='all'&cat='96'&stats_comments=0&limit=3&pages='0'&order_by='views'"); ?>
					</div>
				</div>
				<div class="grid-cell">
					<div class="card sexuality">
						<span class="title"><a class="purple" alt="All Sexuality" href="<?php echo home_url(); ?>/category/sexuality-2">Sexuality</a> Top 3</span>
						<?php wpp_get_mostpopular("post_type=post&range='all'&cat='82'&stats_comments=0&limit=3&pages='0'&order_by='views'"); ?>
					</div>
				</div>
			</div><!--/grid-->

		</div><!--/popularByCat-->

		<?php getPatreonAsk();?>

		<div id="recentUpdates">

			<h3 class="pageSubhead">Recent Articles</h3>

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

		</div><!--/recentUpdates-->
		<a href="http://itspronouncedmetrosexual.com/all-articles/" class="button button-wide" alt="All Articles">View All Articles</a>
	</div><!--/main-->

	<div id="myBooks" role="complementary">

		<h3 class="pageSubhead">My Books</h3>

			<!--GUIDE TO GENDER -->
			<div class="bookCard">
				<a class="grid grid--center grid--justifyCenter" href="http://amzn.to/2hx0gba" alt="A Guide to Gender (2nd Edition): The Social Justice Advocate's Handbook">
					<h4 class="grid-cell">A Guide to Gender (2nd Edition): The Social Justice Advocate's Handbook</h4>
					<img class="grid-cell" alt="A Guide to Gender (2nd Edition): The Social Justice Advocate's Handbook" src="<?php echo get_template_directory_uri(); ?>/library/images/book-mockup-guide-to-gender-2nd-edition-sam-killermann.jpg"/>
					<p class="grid-cell">
						<em><a href="http://guidetogender.com" alt="The Social Justice Advocate's Handbook: A Guide to Gender"><strong>A Guide to Gender</strong></a></em> is all about gender from a (you guessed it) social justice perspective. It's a 2-time best-seller in Gender on Amazon, has been adopted by dozens of gender studies professors as an intro book, and was written for a general audience.
					</p>
				</a>
				<ul class="grid grid--center grid--justifyCenter">
					<li class="grid-cell">
						<a class="button" alt="Get A Guide to Gender" href="http://guidetogender.com">
							Book Website
						</a>
					</li>
					<li class="grid-cell">
						<a class="button accent-button" alt="Buy A Guide to Gender on Amazon" href="http://www.amazon.com/gp/product/0989760200/ref=as_li_tl?ie=UTF8&camp=1789&creative=390957&creativeASIN=0989760200&linkCode=as2&tag=itspronmetr-20&linkId=JU2MWWAS3YSZMMCY">
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
				<a class="grid grid--center grid--justifyCenter" href="http://amzn.to/2hx0gba" alt="A Guide to Gender (2nd Edition): The Social Justice Advocate's Handbook">
					<h4 class="grid-cell">Unlocking the Magic of Facilitation: 11 Key Concepts You Didn't Know You Didn't Know</h4>
					<img class="grid-cell" alt="Unlocking the Magic of Facilitation: 11 Key Concepts You Didn't Know You Didn't Know" src="<?php echo get_template_directory_uri(); ?>/library/images/book-mockup-unlocking-the-magic-of-facilitation.jpg"/>
					<p class="grid-cell">
						<em><a href="http://facilitationmagic.com" alt="Unlocking the Magic of Facilitation: 11 Key Concepts You Didn't Know You Didn't Know"><strong>Unlocking the Magic of Facilitation</strong></a></em> is the book we wrote to help you help others understand everything on this site. It's for facilitators of all stripes, educators, and trainers, and is the perfect complement to <i>A Guide to Gender</i>. It's the "HOW?" where the rest of this site is the "WHAT?" and "WHY?"
					</p>
				</a>
				<ul class="grid grid--center grid--justifyCenter">
					<li class="grid-cell">
						<a class="button" alt="Get Unlocking the Magic of Facilitation" href="http://facilitationmagic.com">
							Book Website
						</a>
					</li>
					<li class="grid-cell">
						<a class="button accent-button" alt="Buy Unlocking the Magic of Facilitation on Amazon" href="http://bit.ly/UtMoFaz">
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
