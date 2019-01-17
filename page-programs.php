<?php
/*
Template Name: Programs Page
*/
?>

<?php get_header(); ?>

			<div id="content" class="programsPage">
				<address class="closed">
					<p><strong><a href="https://www.itspronouncedmetrosexual.com/about-sam-killermann/" title="About Sam Killermann">Sam</a> here. Sorry to be the bearer of bad news, but I'm "closing" the campus programs aspect of IPM.</strong> There are lots of reasons for this decision, but the short version is I couldn't do it <a href="https://www.itspronouncedmetrosexual.com/2018/02/announcement-im-no-longer-affiliated-talent-agency-manager/" title="No longer with a manager">without my manager</a> slash <a href="https://www.youtube.com/watch?v=MqBNSMbEzI0" title="Supercut of I'm Getting too old for this">I'm gettin' too old for this</a>. For now, I'm leaving this page up to help spread the word about this change, and also as a time capsule of sorts.</p>
					<p><strong>Caveat</strong>: If you've already booked a program with me, or through my former manager, I'll definitely perform it. But I'm not accepting any new gigs (from the moment you're reading this notice until indefinitely). </p>
					<p>This site was formerly funded entirely by my campus programs. <strong>I'm hoping to be able to sustain it by the end of the year with <a href="https://patreon.com/ItsPronouncedMetrosexual" title="IPM Patreon">patronage</a> &amp; reader <a href="https://www.itspronouncedmetrosexual.com/donate/" title="Donate to IPM">donations</a></strong>. Fingers crossed. </p>
					<p><3 sK</p>
				</address>
				<div id="inner-content" class="wrap clearfix">
					<header class="article-header">
						<h1 class="page-title"><?php the_title(); ?></h1>
					</header> <!-- end article header -->
					<section class="featuredImage">
						<?php the_post_thumbnail('full'); ?>
					</section>

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class('programsIntro'); ?> role="article" itemscope itemtype="https://schema.org/BlogPosting">
							<a class="disabled button button-wide" onClick="ga('send', 'event', { eventCategory: 'Speaking', eventAction: 'button_click', eventLabel: 'Campus Programs Intro'});"  alt="Sam Killermann Speaking Form">Jump to Programs Request Form 👉</a>

						<section class="entry-content clearfix" itemprop="articleBody">
							<?php the_content(); ?>
						</section> <!-- end article section -->

						<?php endwhile; endif; wp_reset_query(); ?> <!--reset page intro -->

					</article> <!-- end article -->

					<article id="IPM" class="program">
						<div class="grid grid--guttersXl grid--full medium-grid--fit">
							<section class="logoQuote grid-cell">
								<div class="programLogo">
									<img src="<?php echo get_template_directory_uri(); ?>/library/images/IPM-Show-Logo-Tagline-900.png" alt="It's Pronounced Metroseual Show Logo"/>
								</div>

								<div class="testimonial gradient-warm">
									<blockquote>
										"[Sam's] performance was really good. He really talks about stereotypes &mdash; and how to look beyond stereotypes &mdash; and how to really treat people for who they are, instead of thinking how they want to be treated."

										<cite>Marc West, Dir. Student Live &amp; Involvement, Baldwin Wallace College</cite>
									</blockquote>

								</div>
							</section>

							<section class="grid-cell entry-content programDescription">
								<h2>It's Pronounced Metrosexual (the show)</h2>

								<p>Nowadays, it's hard to open your computer without hearing about privilege and oppression -- but it's hard to make sense of what it all means, why it matters, and what we can do about it. Prepare yourself for a lot of laughs -- and learning -- as comedian and activist Sam Killermann explains how oppression works (using embarrassing and unfortunately-true stories), and gives you some useful info that will make your life, and the life for those around you, a little bit shinier.</p>

								<h3>Learning Outcomes</h3>

								<ul class="outcomes grid">
									<li class="grid-cell">Recognize the Stages of the Cycle of Oppression</li>
								 	<li class="grid-cell">Understand our individual roles in reinforcing, and ending, oppression</li>
								 	<li class="grid-cell">Identify tools, like the Platinum Rule, we can use to do good</li>
								</ul>
							</section>
						</div>

					</article>

					<article id="UtCoG" class="program">
						<div class="grid grid--guttersXl grid--full medium-grid--fit">
							<section class="grid-cell logoQuote">
								<div class="programLogo">
									<img src="<?php echo get_template_directory_uri(); ?>/library/images/UtCoG-Show-Logo-900.png" alt="It's Pronounced Metroseual Show Logo"/>
								</div>

								<div class="testimonial gradient-cool">
									<blockquote>
										“Sam’s presentation on gender identity was exactly what we were hoping for – inspiring, enlightening, entertaining and engaging! The students and chaperones who attended our Teen Conference are still talking about Sam’s keynote and how impactful it was!! Sam was an absolute pleasure to work with!! We hope to work with him again in the future!”

										<cite>Ali Glaser, VP Community Services, Planned Parenthood CGNNJ</cite>
									</blockquote>

								</div>

							</section>

							<section class="entry-content grid-cell programDescription">
								<h2>Understanding the Complexities of Gender</h2>
								<p>Gender is everywhere. You have one, I have one, he has one, and so do they. It's been on the tip of our nation's tongue, yet we all have a hard time talking about it. In this hour-long talk, with a mix of storytelling and spoken word, comedian and activist (and author of <em>A Guide to Gender</em>) Sam Killermann elaborates on his hit TEDxTalk, clears up some common misconceptions, and gives tips for how to talk about gender in ways that invite everyone to the conversation.</p>

								<h3>Learning Outcomes</h3>

								<ul class="outcomes grid">
									<li class="grid-cell">Gain a working understanding of important gender definitions</li>
									<li class="grid-cell">Disentangle gender identity, gender expression, biological sex, and sexual orientation</li>
								 	<li class="grid-cell">Recognize individual &amp; shared experience of gender, &amp; identify steps to creating welcoming settings for folks of all genders</li>
								</ul>
							</section>
						</div>

					</article>
				</div><!--/innercontent-->
			</div><!--/content-->

			<section id="contactSection">

				<article id="programsContact" role="article" itemscope itemtype="https://schema.org/BlogPosting">
					<h2>Bring Sam to Your Campus or Org</h2>

					<section class="featuredImage">
						<img src="https://www.itspronouncedmetrosexual.com/wp-content/uploads/2018/01/sam-killermann-stage-utcog.jpg" alt="Sam Killermann Understanding the Complexities of Gender Stage">

					</section>

					<section class="entry-content clearfix" itemprop="articleBody">

						<p><strong>Please only use this form if you're a staff member, administrator, or student leader who is looking to bring Sam in to perform/speak.</strong></p>
						<p>For general contact, or other ways to say "Hi!", please <a href="https://www.itspronouncedmetrosexual.com/contact/" alt="General Contact">go here</a> instead.</p>
						<p>Still here? Great! Click the button below and fill out to the best of your ability (put an N/A in if a question doesn't apply), and I'll be in touch soon.</p>
						<p>
							<a class="disabled button button-wide button-large" onClick="ga('send', 'event', { eventCategory: 'Speaking', eventAction: 'button_click', eventLabel: 'Campus Programs Footer'});"  alt="Sam Killermann Speaking Form">Inquire about Booking Sam 👍</a>
						</p>

						<!-- <form class="formspree" action="https://formspree.io/yo@ItsPronouncedMetrosexual.com" method="POST">
							<p id="name" class="inputWrap">
								<input name="Name" type="text" placeholder="Your Name" />
							</p>
							<p id="email" class="inputWrap">
								<input name="Email" type="text" placeholder="your@email.edu" />
							</p>
							<p id="position" class="inputWrap">
								<input name="Role" type="text" placeholder="Your Title, Role, or Position" />
							</p>
							<p id="school" class="inputWrap">
								<input name="School" type="text" placeholder="School, University, Org" />
							</p>
							<p id="dates" class="inputWrap">
								<input name="Dates" type="text" placeholder="Potential Date(s) of Engagement" />
							</p>
							<p id="subject" class="inputWrap">
								<div class="checkboxWrap clearfix">
									<input type="checkbox" name="Program" id="OptionIPM" value="It's Pronounced Metrosexual" />
									<label for="OptionIPM">It's Pronounced Metrosexual</label>
								</div>
								<div class="checkboxWrap clearfix">
										<input type="checkbox" name="Program" id="OptionUtCoG" value="Understanding the Complexities of Gender" />
									<label for="OptionUtCoG">Understanding the Complexities of Gender</label>
								</div>
								<div class="checkboxWrap clearfix">
									<input type="checkbox" name="Program" id="OptionOther" value="Other" />
									<label for="OptionOther">Other Speaking/Performing (Explain Below)</label>
								</div>
							</p>
							<input style="display: none;" name="_subject" type="hidden" value="IPM Programs Contact" /><input style="display: none;" name="_next" type="hidden" value="https://www.itspronouncedmetrosexual.com/program-contact-success" />
							<input type="hidden" name="_cc" value="sam@itspronouncedmetrosexual.com, cmapa@novlmgmt.com" />
							<input style="display: none;" name="_gotcha" type="text" />
							<p id="message" class="inputWrap">
								<textarea name="Message" rows="8" placeholder="Tell us anything else you think will be helpful as we put this thing together."></textarea>
							</p>

							<p id="submit" class="inputWrap">
								<button id="submit" class="button" type="submit" value="Send">
									Send Form
								</button>
							</p>
						</form> -->
					</section> <!-- end article section -->
				</article> <!-- end article -->
			</section><!--/contactsection-->

<?php get_footer(); ?>
