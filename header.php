<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php wp_title(''); ?></title>

		<!-- mobile meta (hooray!) -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>


		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/favicon-16x16.png">
		<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/manifest.json">
		<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/safari-pinned-tab.svg" color="#eb366e">
		<meta name="theme-color" content="#eb366e">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

		<!-- drop Google Analytics Here -->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-23726157-1', 'itspronouncedmetrosexual.com');
		  ga('send', 'pageview');

		</script>
		<!-- end analytics -->
	</head>
	<body <?php body_class(); ?>>
		<div id="container">
			<header class="header" role="banner">
				<div id="inner-header" class="flex flex-row">
					<a class="mainNavToggle" href="#" onClick="ga('send', 'event', { eventCategory: 'Navigation', eventAction: 'button_click', eventLabel: 'Main-Nav'});">
						<img alt="IPM Menu" src="<?php echo get_template_directory_uri(); ?>/library/images/ipm-icon-menu.svg"/>
						<span>Menu</span>
					</a>
					<div id="logo">
						<a id="logo" title="IPM" href="<?php echo home_url(); ?>" rel="nofollow">
							<img alt="It's Pronounced Metrosexual" src="<?php echo get_template_directory_uri(); ?>/library/images/ipm-icon-logo.svg"/  onClick="ga('send', 'event', { eventCategory: 'Navigation', eventAction: 'button_click', eventLabel: 'Logo'});">
						</a>
						<!-- <a id="beta" href="<?php echo home_url(); ?>/beta" alt="IPM is currently in Beta">
							beta
						</a> -->
					</div>
					<nav id="siteSections">
						<ul class="flex flex-row">
							<li id="about">
								<a href="<?php echo home_url(); ?>/about" title="About the Site &amp; Sam Killermann" onClick="ga('send', 'event', { eventCategory: 'Navigation', eventAction: 'button_click', eventLabel: 'About the Site'});">
									<strong>About</strong>
									<span>the Site</span>
								</a>
							</li>
							<!-- <li id="campusprograms" class="is-current-page">
								<a href="<?php echo home_url(); ?>/campus-programs" title="Campus Programs" onClick="ga('send', 'event', { eventCategory: 'Navigation', eventAction: 'button_click', eventLabel: 'Campus Programs'});">
									<div id="CampusProgramsFlag" class="newsFlag closed">Closed</div>
									<strong>Campus</strong>
									<span>Programs</span>
								</a>
							</li> -->
							<li id="articles">
								<a href="<?php echo home_url(); ?>/articles-books" title="Articles &amp; Books" onClick="ga('send', 'event', { eventCategory: 'Navigation', eventAction: 'button_click', eventLabel: 'Articles-Books'});">
									<strong>Articles</strong>
									<span><span class="amp">&amp;</span>&nbsp;Books</span>
								</a>
							</li>
							<li id="edugraphics">
								<a href="<?php echo home_url(); ?>/edugraphics-printables" title="Edugraphics &amp; Printables" onClick="ga('send', 'event', { eventCategory: 'Navigation', eventAction: 'button_click', eventLabel: 'Edugraphics-Printables'});">
									<strong>Edugraphics</strong>
									<span><span class="amp">&amp;</span>&nbsp;Printables</span>
								</a>
							</li>
							<li id="activities">
								<a href="<?php echo home_url(); ?>/activities-classes" title="Activities &amp; Classes" onClick="ga('send', 'event', { eventCategory: 'Navigation', eventAction: 'button_click', eventLabel: 'Activities-Classes'});">
									<div id="NewClassesFlag" class="newsFlag hide">New</div>
									<strong>Activities</strong>
									<span><span class="amp">&amp;</span>&nbsp;Classes</span>
								</a>
							</li>
							<li id="videos">
								<a href="<?php echo home_url(); ?>/videos-podcasts" title="Videos &amp; Podcasts" onClick="ga('send', 'event', { eventCategory: 'Navigation', eventAction: 'button_click', eventLabel: 'Videos-Podcasts'});">
									<div id="NewPodcastFlag" class="newsFlag hide">New</div>
									<strong>Videos</strong>
									<span><span class="amp">&amp;</span>&nbsp;Pods</span>
								</a>
							</li>
							<li id="donate">
								<a href="<?php echo home_url(); ?>/donate" title="Donate &amp; Support IPM" onClick="ga('send', 'event', { eventCategory: 'Navigation', eventAction: 'button_click', eventLabel: 'Donate'});">
									<strong>Donate</strong>
								</a>
							</li>
						</ul>
					</nav>
					<a class="supportNavToggle" title="Support Sam Killermann &amp; IPM" href="#" onClick="ga('send', 'event', { eventCategory: 'Navigation', eventAction: 'button_click', eventLabel: 'Help Out'});">
						<img alt="Support It's Pronounced Metrosexual" src="<?php echo get_template_directory_uri(); ?>/library/images/ipm-icon-support.svg"/>
						<span>Help Out</span>
					</a>
				</div>
			</header> <!-- end header -->

			<nav class="siteNav" id="mainNav">
				<a id="closeMainNav" class="closeNav mainNavToggle" title="Close Menu" href="#">
					<img alt="Close Menu" src="<?php echo get_template_directory_uri(); ?>/library/images/ipm-icon-close.svg"/>
					<span>Close</span>
				</a>
				<?php get_search_form(); ?>
				<?php ipm_main_menu(); ?>

			</nav>

			<nav class="siteNav" id="supportNav">
				<a id="closeSupportNav" class="closeNav supportNavToggle" title="Close Menu" href="#">
					<img alt="Close Menu" src="<?php echo get_template_directory_uri(); ?>/library/images/ipm-icon-close.svg"/>
					<span>Close</span>
				</a>
				<p>Hi! I'm <a href="https://www.itspronouncedmetrosexual.com/about/about-sam-killermann/" title="Learn about Sam Killermann">Sam Killermann</a>. I write, doodle, code, and fund this site... all by lonesome &mdash; at least, that <em>was</em> true, up until I started asking for help with <a href="htps://www.itspronouncedmetrosexual.com/2018/09/the-state-of-this-site-or-funding-online-work-in-2018-an-infographic/" title="Funding this Site">funding the site 2018</a>, and people started <a href="https://bit.ly/bemyboss" title="Be Sam Killermann's Boss(es)">employing me to create things in 2019</a>. <strong>If you dig what I'm doing here, I could really use the help:</strong></p>
				<?php ipm_support_menu(); ?>
			</nav>
			<div id="mask"></div>

			<div id="ipmNews" class="hide">
				<button id="closeIpmNews" title="Close Question" class="hideIpmNews" onClick="ga('send', 'event', { eventCategory: 'SJD Mooc Invite', eventAction: 'button_click', eventLabel: 'X-out Question'});">
					<img title="Close Menu" src="<?php echo get_template_directory_uri(); ?>/library/images/ipm-icon-close.svg"/>
				</button>
				<div id="MOOC-question">
					<h3>Over 1,000 of you requested it, so...</h3>
					<p>I'm currently working on creating an online course/community about <strong>Social Justice, Minus Dogma</strong>. You want an invite when it's open?</p>

					<ul>
						<li>
							<a id="yesMOOC" class="newsButton" href="#" onClick="ga('send', 'event', { eventCategory: 'SJD Mooc Invite', eventAction: 'button_click', eventLabel: 'Yes'});">
								<span>👍 Yes,</span> please
							</a>
						</li>
						<li>
							<a id="noMOOC" class="newsButton" href="#" onClick="ga('send', 'event', { eventCategory: 'SJD Mooc Invite', eventAction: 'button_click', eventLabel: 'No'});">
								<span>👎 No,</span> thanks
							</a>
						</li>
					</ul>
				</div>

				<div id="yesMOOC-email" class="hide mailchimp">
					<h3>Great! Drop your email address below 👇</h3>
					<p>I'm looking forward to learning with you!</p>
					<form action="https://itspronouncedmetrosexual.us20.list-manage.com/subscribe/post?u=2c47c23edde65a6e045cbe108&amp;id=d6f2aace37" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>

						<div class="mc-field-group">
							<input type="email" value="" placeholder="your@email.com" name="EMAIL" class="required email" id="mce-EMAIL">
							<button type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">👍</button>
						</div>
						<div id="mce-responses" class="clear">
							<div class="response" id="mce-error-response" style="display:none"></div>
							<div class="response" id="mce-success-response" style="display:none"></div>
						</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
					    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_2c47c23edde65a6e045cbe108_d6f2aace37" tabindex="-1" value=""></div>
					</form>
				</div>

				<div id="noMOOC-response" class="hide">
					<h3>No prob. Sorry to interrupt!</h3>
					<p>This message should auto-hide in the future, and you can click the <strong>X</strong> to hide it now.</p>
				</div>
				<p>(<a href="https://itspronouncedmetrosexual.com/tag/social-justice-dogma/" title="Social Justice Dogma Articles">read about Social Justice Dogma here</a>)</p>
			</div>
