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
				<p>Hi! I'm <a href="https://www.itspronouncedmetrosexual.com/about/about-sam-killermann/" title="Learn about Sam Killermann">Sam Killermann</a>. I write, doodle, code, and fund this site... all by lonesome &mdash; at least, that <em>was</em> true, up until I started asking for help with <a href="https://itspronouncedmetrosexual.com/2018/09/the-state-of-this-site-or-funding-online-work-in-2018-an-infographic/" title="Funding this Site">funding the site 2018</a>, and people started <a href="https://bit.ly/bemyboss" title="Be Sam Killermann's Boss(es)">employing me to create things in 2019</a>. <strong>If you dig what I'm doing here, I could really use the help:</strong></p>
				<?php ipm_support_menu(); ?>
			</nav>
			<div id="mask"></div>

			<!-- <div id="ipmNews" class="hide">
				<h3>🆘 I need your help! ⛑</h3>
				<p>If you appreciate what I'm doing here, please become a patron (starting at $1) so we can afford hosting that will prevent the site from going down.</p>
				<button id="closeIpmNews" class="hideIpmNews" onClick="ga('send', 'event', { eventCategory: 'Donations', eventAction: 'button_click', eventLabel: 'X-out News'});">
					<img title="Close Menu" src="<?php echo get_template_directory_uri(); ?>/library/images/ipm-icon-close.svg"/>
				</button>
				<ul>
					<li>
						<a id="becomePatron" href="https://bit.ly/2pfQrTl" target="_blank" class="newsButton" onClick="ga('send', 'event', { eventCategory: 'Donations', eventAction: 'button_click', eventLabel: 'Become Patron'});">
							<span>Become a</span> Patron 🤗
						</a>
					</li>
					<li>
						<a id="oneTimeDonation" href="https://bit.ly/2DtqMK1" class="newsButton" onClick="ga('send', 'event', { eventCategory: 'Donations', eventAction: 'button_click', eventLabel: '1 Time Donation'});">
							<span>Make a</span> 1-time Donation
						</a>
					</li>
					<li>
						<a id="readMore" href="https://bit.ly/2BWhEjl" class="hideIpmNews newsButton" onClick="ga('send', 'event', { eventCategory: 'Donations', eventAction: 'button_click', eventLabel: 'Read More'});">
							Read more.
						</a>
					</li>
					<li>
						<a href="#" id="noThanks" class="hideIpmNews newsButton"
						onClick="ga('send', 'event', { eventCategory: 'Donations', eventAction: 'button_click', eventLabel: 'No Thanks'});">
							No, thanks.
						</a>
					</li>
				</ul>
			</div>-->
