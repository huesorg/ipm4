<?php
/*
Template Name: Activities & Courses
*/
?>
<?php get_header(); ?>
<nav id="stickyPostTitle" role="navigation" class="unactiveSticky">
	<ul id="stickyTitle" class="grid grid--center grid--justifyCenter grid--fit">
		<li class="grid-cell">Jump to</li>
		<li class="grid-cell">
			<a href="#Activities" title="Jump to Activities Section">Activities</a>
		</li>
		<li class="grid-cell">
			<a href="#Courses" title="Jump to Courses Section">Classes</a>
		</li>
		<li class="grid-cell">
			<a href="#MailingList" title="Jump to Get Alerts">Get Alerts</a>
		</li>
		<li class="grid-cell">
			<a href="#Top" title="Jump to Top">Top</a>
		</li>
	</ul>
</nav><!--/stickyPostTitle-->

<header class="page-header">

	<h1 class="page-title"><?php the_title(); ?></h1>

</header> <!-- end article header -->

<div id="content" class="halfsies">
	<aside id="TheHotness" class="featuredClass sidebar" role="complementary">
		<article class="vidcard loopCard">
			<div class="loopText">
				<h3 class="loopTitle"><a href="http://bit.ly/2xeaD9z" title="Social Justice, Minus Dogma Online Course + Community"><span class="flag">New!</span> Social Justice, Minus Dogma Online Course + Community</a></h3>
				<p>
					Charting a path toward equity. It's 6 modules that are spread over 6 weeks (or go at your own pace), with a dedicated community for discussion and continuing education.
				</p>
				<p style="font-size: .8em">
					<strong>Fun Fact:</strong>It was created by Sam Killermann in response to the ask of over 15,000 IPM readers this past Spring, 2,046 of whom pre-registered.
				</p>
				<a class="button" href="http://bit.ly/2N7jftl" title="Join Now" target="_blank">Join Now</a> <a href="http://bit.ly/2xeaD9z" title="Learn More" target="_blank">Learn More</a>
			</div>
			<div class="loopImage">
				<a href="http://bit.ly/2xeaD9z" title="Social Justice, Minus Dogma Online Course + Community">
					<img src="<?php echo get_template_directory_uri(); ?>/library/images/sjmd-course-featured-image.jpg" alt="Three people pointing at computer"/>
				</a>
			</div>
			<!-- <div class="loopText">
				<h3 class="loopTitle"><a href="https://bit.ly/2MpXkg4" title="Self-Guided Foundational Safe Zone Training"><span class="flag">New Course!</span> Self-Guided Foundational Safe Zone (LGBTQ+) Training</a></h3>
				<p>
					This class is co-facilitated by Meg Bolger &amp; me (<a href="https://www.itspronouncedmetrosexual.com/about/about-sam-killermann/" title="About Sam Killermann">Sam Killermann</a>), and is an introduction to LGBTQ+ identities &amp; inclusion, gender, and sexuality &mdash; at your own pace, online. Including: vocab, privilege, Genderbread, and scenarios.
				</p>
				<a class="button" href="https://bit.ly/2o0IoXj" title="Start Now" target="_blank">Start Now</a> <a href="https://bit.ly/2MpXkg4" title="Learn More" target="_blank">Learn More</a>
			</div>
			<div class="loopImage">
				<a href="https://bit.ly/2MpXkg4" title="Self-Guided Foundational Safe Zone (LGBTQ+) Training">
					<img src="<?php echo get_template_directory_uri(); ?>/library/images/szp-online-courses-featured-image.jpg" alt="Person learning on computer"/>
				</a>
			</div> -->
		</article>
	</aside>
	<main id="main" role="main">
		<section id="top">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(' pageIntro'); ?> role="article" itemscope itemtype="https://schema.org/BlogPosting">

				<section itemprop="articleBody">
					<?php the_content(); ?>
				</section> <!-- end article section -->

				<p>
					<a href="#Courses">Jump to my Courses &darr;</a>
				</p>

			</article> <!-- end article -->

			<?php endwhile; endif; wp_reset_query(); ?> <!--reset page intro -->

		</section>

		<section id="Activities">
			<h2>Activities</h2>
			<div class="pageIntro">
			<p class="introParagraph">I can't think of a better way to help a group learn about gender, sexuality, and social justice than through engaging activities. A powerpoint or book chapter will never compare.</p>
			<p>That's why I've spent years collaborating with Meg Bolger on <a href="https://thesafezoneproject.com/?utm_source=ipm&utm_medium=activities-classes" title="The Safe Zone Project">TheSafeZoneProject.com</a>, a free online resource for powerful, effective LGBTQ+ education and allyship training resources.</p>
			<p>Here are a few of my favorite activities we've published:</p>

			<div class="grid grid--flexCells grid--gutters">
				<div class="grid-cell">
					<article class="szpActivity">
						<a href="https://thesafezoneproject.com/activities/privilege-for-sale/?utm_source=ipm&utm_medium=activities-classes" title="Privilege for Sale on The Safe Zone Project">
							<h4>
								Privilege for Sale
							</h4>
							<p>
								This small group activity asks participants to "Imagine you live in a world without any privileges." Then "Which would you choose to buy access to?"
							</p>
						</a>
					</article>
				</div>
				<div class="grid-cell">
					<article class="szpActivity">
						<a href="https://thesafezoneproject.com/activities/core-vocabulary/?utm_source=ipm&utm_medium=activities-classes" title="Core Vocabulary on The Safe Zone Project">
							<h4>
								Core Vocabulary
							</h4>
							<p>
								An activity to get to know common (and some less common) LGBTQ-related vocabulary!
							</p>
						</a>
					</article>
				</div>
			</div><!--/grid-->
			<div class="grid grid--flexCells grid--gutters">
				<div class="grid-cell">
					<article class="szpActivity">
						<a href="https://thesafezoneproject.com/activities/genderbread-person/?utm_source=ipm&utm_medium=activities-classes" title="Genderbread Person Activity on The Safe Zone Project">
							<h4>
								Genderbread Person
							</h4>
							<p>
								This activity ensures participants understand the important difference between gender, sex, and sexual orientation.
							</p>
						</a>
					</article>
				</div>
				<div class="grid-cell">
					<article class="szpActivity">
						<a href="https://thesafezoneproject.com/activities/identity-signs/?utm_source=ipm&utm_medium=activities-classes" title="Identity Signs on The Safe Zone Project">
							<h4>
								Identity Signs
							</h4>
							<p>
								This activity focuses on what are our salient identities in particular circumstances. How do our different identities intersect, interact, and affect our daily lives.
							</p>
						</a>
					</article>
				</div>
			</div>

			<div><!--fishtank-->
				<a class="fishtank" href="https://thesafezoneproject.com/activities/?utm_source=ipm&utm_medium=activities-classes" title="All Activities on The Safe Zone Project">
					<img src="<?php echo get_template_directory_uri();?>/library/images/fishtank-szp.png" title="The Safe Zone Project"/>
				</a><!--/fishtank-->
			</div>
			<a class="button button-wide" href="https://thesafezoneproject.com/activities/type/large-group/?utm_source=ipm&utm_medium=activities-classes" title="Large Group">
				View all Large Group Activities
				<i class="fa fa-share"></i>
			</a>
			<a class="button button-wide" href="https://thesafezoneproject.com/activities/type/small-group/?utm_source=ipm&utm_medium=activities-classes" title="Small Group">
				View all Small Group Activities
				<i class="fa fa-share"></i>
			</a>
			<a class="button button-wide" href="https://thesafezoneproject.com/activities/type/reflective/?utm_source=ipm&utm_medium=activities-classes" title="Reflective">
				View all Reflective Activities
				<i class="fa fa-share"></i>
			</a>
			<div id="submitActivity">
				<h3>Submit an activity!</h3>
				<address>Have an activity you’ve created based on one of the articles or graphics here on the site? Want to share your ingenuity with the community? Awesome. <3 You. Use the <a href="https://www.itspronouncedmetrosexual.com/contact" title="Contact Me">contact form</a>, or just send it via email to sam@itspronouncedmetrosexual.com with the subject “IPM Activity.”</address>
			</div>

		</section>
		<section id="Courses">
			<h2>Courses &amp; Trainings</h2>
			<div class="pageIntro">
				<p class="introParagraph">Maybe you're looking for something a little more involved than an activity. Allow me to present Courses: what happens when you put a bunch of activities in a sequence.</p>

				<p>If taking a course with me sounds like something you'd like to do, here's what's currently open for enrollment:</p>
				<article class="IPMclass">
					<a href="http://bit.ly/2xeaD9z" title="Social Justice, Minus Dogma Online Course + Community">
						<h4>Social Justice, Minus Dogma Online Course + Community</h4>
						<p>
							Charting a path toward equity, SJMD is 6 modules that are spread over 6 weeks (or go at your own pace), with a dedicated community for discussion and continuing education.
						</p>
					</a>
				</article>
				<article class="IPMclass">
					<a href="https://thesafezoneproject.com/resources/courses/self-guided-foundational-safe-zone-training/?utm_source=ipm&utm_medium=activities-classes" title="Learn More about Self-Guided Safe Zone Training">
						<h4>Self-Guided Foundational Safe Zone (LGBTQ+) Training</h4>
						<p>
							This class is co-facilitated by Meg Bolger &amp; me, and is an introduction to LGBTQ+ identities &amp; inclusion, gender, and sexuality &mdash; at your own pace, online. Including: vocab, privilege, Genderbread, and scenarios.
						</p>
					</a>
				</article>
			</div>
		</section>
		<section id="MailingList" class="classesMailingList">
			<!-- Begin MailChimp Signup Form -->
			<h2>Want an alert when I add a new course?</h2>
			<p>Click the big ol button below, give me a good email to reach out to, and make sure the "Activities &amp; Classes" box is checked. After that, we should be all set, and I'll make sure to email you every once in a while with class updates.</p>
			<p><a class="button accent-button button-wide" href="http://itspronouncedmetrosexual.us17.list-manage.com/subscribe?u=a0b762405771bc100c33afcd3&id=d6240df40a&group[4141][4]=true" title="Get Alerted when I open a new course" target="_blank">Get New Course Alerts</a></p>
		</section><!--/classesMailingList-->
	</main><!--/main-->
</div><!--/content-->
<div class="footerPatreon" style="margin-top:4vw;">
	<?php getPatreonAsk();?>
</div>
<?php get_footer(); ?>
