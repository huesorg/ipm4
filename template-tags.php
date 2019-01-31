<?php

/* Snapshot */

function getSnapshot() {?>

<div class="authorSnapshot">
	<h4>About the Author</h4>
	<img src="<?php echo get_template_directory_uri();?>/library/images/sam-killermann-2016-headshot.jpg" alt="Sam Killermann Headshot"/>
	<p>
		Hi! I'm <a href="https://bit.ly/16fQZbg" target="_blank" alt="Sam Killermann">Sam Killermann</a>, an activist, educator, and artist who is employed by <a href="https://bit.ly/bemyboss" title="Be Sam Killermann's Boss(es)">a collective of bosses</a> to create for global justice. I write everything here, do the doodles, and even coded the site itself. Here are some other sites I've made that you might dig:
	</p>
	<ul>
		<li>
			<a href="https://bit.ly/2eyLccA" alt="The Safe Zone Project">
				The Safe Zone Project</a> (a free online resource for LGBTQ awareness and allyship training workshops)
		</li>
		<!-- <li>
			<a href="https://bit.ly/2eKSzZs" alt="hues">The hues Store</a> (merch supporting this site and my work)
		</li> -->
		<li>
			<a href="https://bit.ly/2dDlEtE" alt="The Sexualitree">
				The Sexualitree</a> (a comprehensive sexuality model, curriculum, &amp; downloads)
		</li>
		<li>
			<a href="https://bit.ly/1MAfukv" alt="I Heart the Singular They">
				I <3 Singular They</a> (a love letter I wrote to a pronoun... yep. Oh, and I animated it!)
		</li>
	</ul>
</div>

<?php }

add_action('bones_hook_before_sidebar','getSnapshot');


/************* PATREON STUFF *********************/

function getPatreonAsk() {?>
    <div class="fundedByPatreon">
        <div class="grid grid--fit">
            <p class="grid-cell">
                <strong><?php
                    if( is_single() ){
                        echo '"';
                        echo the_title();
                        echo '"';
                    } else {echo 'IPM';}
                ?> is reader &amp; patron funded, 100% free and uncopyrighted.</strong>
                <span>Join or donate to help support social justice media.</span>
            </p>

            <div class="funding--buttons grid-cell">
                <a class="button" href="https://www.itspronouncedmetrosexual.com/support/" target="_blank" title="Support It's Pronounced Metrosexual" onClick="ga('send', 'event', { eventCategory: 'Donations', eventAction: 'button_click', eventLabel: 'Support the Site'});">
                    <div>🖥 Support the Site</div>
                </a>
                <a class="button" href="https://www.itspronouncedmetrosexual.com/support/author" title="Support the Author" onClick="ga('send', 'event', { eventCategory: 'Donations', eventAction: 'button_click', eventLabel: 'Support the Author'});">
                    <div>👨‍💻 Support the Author</div>
                </a>
                <!-- <a class="button" href="https://bit.ly/2pfQrTl" target="_blank" alt="Become an IPM Patron" onClick="ga('send', 'event', { eventCategory: 'Donations', eventAction: 'button_click', eventLabel: 'Patronize'});">
                    <div>🤗 Become a Member</div>
                </a> -->
                <!-- <a class="button" href="https://www.itspronouncedmetrosexual.com/donate/" alt="Donate" onClick="ga('send', 'event', { eventCategory: 'Donations', eventAction: 'button_click', eventLabel: 'Donate'});">
                    <div>💳 Donate</div>
                </a> -->
            </div>
        </div>
    </div><!--/fundedbypatreon--><?php
}

/*********************************************
***************SHORTIES***********************
*********************************************/

function getShortieIntro() {

	if ( has_category('shorties') ){

		function word_count() {
			//count words
			$content = get_post_field( 'post_content', $post->ID );
			$words_to_count = strip_tags($content);
			$pattern = "/[^(\w|\d|\'|\"|\.|\!|\?|;|,|\\|\/|\-\-|:|\&|@)]+/";
			$words_to_count = preg_replace ($pattern, " ", $words_to_count);
			$words_to_count = trim($words_to_count);
			$word_count = count(explode(" ",$words_to_count));
		    return $word_count;
		}

		function shorty_score() {

			$shorty_score = word_count();
			$fail = "failed. Please forgive me 🙏";
			$squeaked = "barely squeaked by 😅";
			$win = "nailed it 🙌";

			if ($shorty_score < 300){
			    return $win;
			}

			elseif ($shorty_score == 300){
			    return $squeaked;
			}
			else {
			    return $fail;
			}
		}

		?>
		<div class="catSplaining">
			<p>
				<strong>This is a <a href="https://www.itspronouncedmetrosexual.com/category/shorties/" alt="Shorties!">Shorty</a>,</strong> where my goal is to convey an idea in 300 or fewer words. I used <?php  echo word_count();?>, so I <?php echo shorty_score();?>
			</p>
		</div>
	<?php }
}


add_action('bones_hook_after_article_stuff','getShortieIntro');


/*********************************************
***************SINGLE FOOTER HOOKS************
*********************************************/


function getEndOfTransmission() {

	if( get_field('author_patron_count', 'option') ): ?>

	<div id="endOfTransmission">
		<p>
			<span class="gifted-to-you-by"><a href="htps://www.itspronouncedmetrosexual.com/about/about-sam-killermann" title="About Sam Killermann" target="_blank"><svg id="heart-sK" alt="heart sK" style="width:auto;height:1.2em;margin-top:-.1em;"xmlns="http://www.w3.org/2000/svg" viewBox="0 0 133.83 66.6"><defs><style>.cls-1,.cls-2{fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:5px;}.cls-1{stroke:#eb366e;}.cls-2{stroke:#000;}</style></defs><title>heart sK</title><path id="heart" class="cls-1" d="M22,36.39S20.5,26.67,11.64,23.5s-12.6,3.94-3,16.8S23.61,63.9,23.2,54.23,22.48,20.75,34.14,9.61C43.25.9,51.06,5.09,50.45,17.53c-.76,15.4-20.05,37.6-20.05,37.6"/><path id="sK" class="cls-2" d="M63,36.06a15.16,15.16,0,0,0-11-5.5C44,30.15,37.8,37,54.4,49.41s-19,22.07-11.93,4.84C46.05,45.53,58.78,34.86,64.77,24,71.94,11,74.91-2.56,73.24,5.35c-3.07,14.52-3.71,54.27-3.13,51.17,4.08-21.92,33.81-52.2,31-50.35S69.39,35.07,74.91,33.64,129,21.09,130.83,24.16"/></svg></a>
			<strong>+ <a href="https://bit.ly/2MkVIkN" target="_blank" title="My Bosses on Patreon">My <?php the_field('author_patron_count', 'option')?> Bosses.</a></strong></span>
			Pay part of my salary to fund more work like this: <a href="https://bit.ly/bemyboss" title="Be Sam Killermann's Boss(es)">Be My Boss</a>.
		</p>
	</div>

<?php endif;
}

add_action('bones_hook_post_footer','getEndOfTransmission');

function getSJDFooter() {

	if(has_tag('social-justice-dogma')) {?>

	<div id="socialJusticeDogmaFooter" class="grid grid--center grid--justifyCenter">
		<p class="grid-cell">
			This post is part of the <strong><a href="https://www.itspronouncedmetrosexual.com/tag/social-justice-dogma/" alt="Social Justice Dogma Series">Social Justice Dogma Series</a></strong>. The Social Justice Dogma, as defined in the <a href="https://www.itspronouncedmetrosexual.com/2017/12/introduction-social-justice-dogma/" alt="Introduction to Social Justice Dogma">first article</a> in this series, is <strong>"The set of beliefs, stances, and acceptable actions laid down by the authorities within the social justice movement that we hold as incontrovertibly true."</strong>
		</p>
	</div>

	<?php }
}

add_action('bones_hook_post_footer','getSJDFooter');


function getFollowIPMSingle(){?>
	<div id="followIPM" class="shadow">
		<div class="grid grid--justifyCenter small-grid--fit grid--full">
			<div id="subscribeFeedburner" class="grid-cell mailchimp">
				<h3>Get New Posts Delivered to Your Email Inbox</h3>

				<!-- <form action="https://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow">
					<div class="grid inputGrid">
						<input class="grid-cell" placeholder="your@email.com" name="email" type="text" />
						<input name="uri" type="hidden" value="ItsPronouncedMetrosexual" />
						<input name="loc" type="hidden" value="en_US" />
						<button type="submit" value="Subscribe" onClick="ga('send', 'event', { eventCategory: 'Subscriptions', eventAction: 'button_click', eventLabel: 'Feedburner-Single-Footer'});">Want.</button>
					</div>
				</form>

				<p class="description">Totally free, totally automagic (delivered by <a href="https://feeds.feedburner.com/ItsPronouncedMetrosexual" alt="IPM Feedburner">Feedburner</a>), never spammy, and <strong>you will only get an email when there's a new article, edugraphic, or blog post</strong> (no other announcements). Only the freshest.</p> -->

				<!-- Begin Mailchimp Signup Form -->
				<form action="https://itspronouncedmetrosexual.us6.list-manage.com/subscribe/post?u=baa3ac0aa5ef20a1189b13625&amp;id=4c17540fc5" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>

					<div class="mc-field-group">
						<input type="email" value="" aria-label="Email Address" placeholder="your@email.com" name="EMAIL" class="required email" id="mce-EMAIL">
						<button type="submit" aria-label="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">👍</button>
					</div>
					<!-- <div id="mailchimp-excited">
						<ul>
							<li><strong>Excited about new... </strong></li>
							<li><input type="checkbox" value="1" name="group[10421][1]" id="mce-group[10421]-10421-0"><label for="mce-group[10421]-10421-0">Articles</label></li>
							<li><input type="checkbox" value="2" name="group[10421][2]" id="mce-group[10421]-10421-1"><label for="mce-group[10421]-10421-1">Books</label></li>
							<li><input type="checkbox" value="4" name="group[10421][4]" id="mce-group[10421]-10421-2"><label for="mce-group[10421]-10421-2">Edugraphics</label></li>
							<li><input type="checkbox" value="8" name="group[10421][8]" id="mce-group[10421]-10421-3"><label for="mce-group[10421]-10421-3">Videos</label></li>
							<li><input type="checkbox" value="16" name="group[10421][16]" id="mce-group[10421]-10421-4"><label for="mce-group[10421]-10421-4">Podcasts</label></li>
							<li><input type="checkbox" value="32" name="group[10421][32]" id="mce-group[10421]-10421-5"><label for="mce-group[10421]-10421-5">Online Courses</label></li>
							<li><input type="checkbox" value="64" name="group[10421][64]" id="mce-group[10421]-10421-6"><label for="mce-group[10421]-10421-6">Activities / Lesson Plans</label></li>
						</ul>
					</div>-->


					<div id="mce-responses" class="clear">
						<div class="response" id="mce-error-response" style="display:none"></div>
						<div class="response" id="mce-success-response" style="display:none"></div>
					</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
				    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_baa3ac0aa5ef20a1189b13625_4c17540fc5" tabindex="-1" value=""></div>

				</form>

				<p class="description">Totally free (for you), never spammy, and totally automagic (delivered by <a href="http://eepurl.com/di45Q1" alt="IPM Feedburner">Mailchimp</a> &mdash; view <a target="_blank" href="https://us6.campaign-archive.com/home/?u=baa3ac0aa5ef20a1189b13625&id=4c17540fc5" title="Archive of Emails">the archive</a> to see what to expect). <strong>You will only get an email when there's a new article, edugraphic, or blog post</strong> (no other announcements). Only the freshest.</p>

				<!--End mc_embed_signup-->

			</div>

		</div>

	</div><!--/followipm-->
<?php }

add_action('bones_hook_post_footer','getFollowIPMSingle');


/* Books in Sidebar */

function getSidebarBooks() {?>

	<div class="sidebarBook">

		<h4>Would you like to better understand gender?</h4>
		<a href="https://amzn.to/2li0YWS" alt="A Guide to Gender (2nd Edition) on Amazon">
			<img src="<?php echo get_template_directory_uri();?>/library/images/book-mockup-guide-to-gender-2nd-edition-sam-killermann.jpg" alt="A Guide to Gender (2nd Edition)"/>
		</a>
		<p>
			Great! I wrote a book for you! It's called <em><a href="https://guidetogender.com" alt="Website">A Guide to Gender (2nd Edition): The Social Justice Advocate's Handbook</a></em>. It's just like this website, but instead of being made out of code, it's made out of murdered trees.
			<br/><span class="sidebarBook__get"><a class="button accent-button" href="https://amzn.to/2li0YWS" alt="Guide to Gender Paperback">Paperback</a> | <a class="button accent-button" href="https://guidetogender.com/get" alt="Guide to Gender E-Book">E-Book</a></span>
		</p>
	</div>

	<div class="sidebarBook">
		<h4>Or would you like to learn about facilitation?</h4>
		<a href="https://amzn.to/2dDFVuJ" alt="Unlocking the Magic of Facilitation on Amazon">
			<img src="<?php echo get_template_directory_uri();?>/library/images/book-mockup-unlocking-the-magic-of-facilitation.jpg" alt="Unlocking the Magic of Facilitation"/>
		</a>
		<p>
			Then you'll appreciate this book I co-authored it with Meg Bolger. It's called <em><a href="https://facilitationmagic.com" alt="Unlocking the Magic of Facilitation Website">Unlocking the Magic of Facilitation: 11 Key Concepts You Didn't Know You Didn't know</a></em>. It's the HOW where this website is the WHAT.
			<br/><span class="sidebarBook__get"><a class="button accent-button" href="https://amzn.to/2dDFVuJ" alt="Guide to Gender Paperback">Paperback</a> | <a class="button accent-button" href="https://gum.co/utmof" alt="Unlocking the Magic of Facilitation E-Book">E-Book</a></span>
		</p>
	</div>


	<?php
}

add_action('bones_hook_before_sidebar','getSidebarBooks');

function getSubscribeOptions() {?>
	<h2>Too Many Ways to Subscribe:</h2>
	<span>Choose the 1 (or 5) that seems the most like what you're looking for.</span>
	<div class="grid grid--justifyCenter small-grid--fit grid--full">
		<div id="subscribeFeedburner" class="grid-cell">
			<h3>1. Get New Posts Delivered to Your Email Inbox</h3>
			<div class="description">Totally free, totally automagic (delivered by <a href="https://feeds.feedburner.com/ItsPronouncedMetrosexual" alt="IPM Feedburner">Feedburner</a>), never spammy, and you will only get an email when there's a new article, edugraphic, or blog post (no other announcements).</div>

			<!-- <a class="button button-wide" href="https://feedburner.google.com/fb/a/mailverify?uri=ItsPronouncedMetrosexual" target="_blank" onClick="ga('send', 'event', { eventCategory: 'Subscriptions', eventAction: 'button_click', eventLabel: 'Feedburner'});">Get New Posts via Email</a> -->

			<a class="button button-wide" href="http://eepurl.com/di45Q1" target="_blank" onClick="ga('send', 'event', { eventCategory: 'Subscriptions', eventAction: 'button_click', eventLabel: 'Feedburner'});">Get New Posts via Email</a>

			<div class="fomo">FOMO Level:
				<div class="level zero">1%</div>
			</div>
		</div>
		<div id="subscribeMailchimp" class="grid grid--justifyCenter grid--center grid-cell">
			<div class="grid-cell grid-cell--center">
				<h3>2. General IPM Email List</h3>
				<div class="description">I write a couple emails a year with new articles &amp; edugraphics, updates about the site, new resources, and plans for the future.</div>
				<a target="_blank" href="https://eepurl.com/df71xH" alt="Join General Mailing List" class="button button-wide" onClick="ga('send', 'event', { eventCategory: 'Subscriptions', eventAction: 'button_click', eventLabel: 'General Mailing List'});">Join General Mailing List</a>
			</div>
			<div class="fomo">FOMO Level:
				<div class="level low">Low</div>
			</div>
		</div>
	</div>
	<div class="grid grid--justifyCenter small-grid--fit grid--full">
		<div id="subscribe--facebook" class="grid grid--justifyCenter grid--center grid-cell">
			<a class="grid-cell grid-cell--center" target="_blank" href="https://facebook.com/metrosam" alt="IPM Facebook Page" onClick="ga('send', 'event', { eventCategory: 'Subscriptions', eventAction: 'button_click', eventLabel: 'Facebook'});">3. Facebook</a>
			<div class="fomo">FOMO Level:
				<div class="level ninety-nine">99.99%</div>
			</div>
		</div>
		<div id="subscribe--twitter" class="grid grid--justifyCenter grid--center grid-cell">
			<a class="grid-cell grid-cell--center" href="https://twitter.com/actuallymetro" target="_blank" alt="IPM Twitter" onClick="ga('send', 'event', { eventCategory: 'Subscriptions', eventAction: 'button_click', eventLabel: 'Twitter'});">4. Twitter</a>
			<div class="fomo">FOMO Level:
				<div class="level medium">Medium</div>
			</div>
		</div>
		<div id="subscribe--tumblr" class="grid grid--justifyCenter grid--center grid-cell">
			<a class="grid-cell grid-cell--center" target="_blank" href="https://actuallymetro.tumblr.com" alt="IPM Tumblr" onClick="ga('send', 'event', { eventCategory: 'Subscriptions', eventAction: 'button_click', eventLabel: 'Tumblr'});">5. Tumblr</a>
			<div class="fomo">FOMO Level:
				<div class="level medium">Medium</div>
			</div>
		</div>
	</div>

	<span><strong>FOMO Level</strong> is the likelihood you'll miss out on new stuff using each subscription method.</span>
	<?php
}

/* Sidebar Campus Programs Ad

function getSidebarCampusPrograms() {?>
	<div id="campusProgramsSidebar">
		<a href="https://www.itspronouncedmetrosexual.com/campus-programs" alt="Campus Programs">
			<img src="<?php echo get_template_directory_uri(); ?>/library/images/sidebar-campus-programs.png" alt="Campus Programs"/>
			<span>100% of the profits from Sam's campus programs &amp; social justice comedy shows help support this site, keep the lights on, &amp; enable everything to be given away free.</span>
			<button class="button">Learn More</button>
		</a>
	</div>
	<?php
}

add_action('bones_hook_before_sidebar','getSidebarCampusPrograms'); */

?>
