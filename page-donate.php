<?php
/*
Template Name: Donate Page
*/
?>
<?php get_header(); ?>

<header class="page-header">

	<h1 class="page-title"><?php the_title(); ?></h1>

	<p class="subtitle">
		<strong>Thank you for considering a donation</strong>. To make it as easy as possible, I've got a <em>lot</em> of options below, including <a href="#DonatePaypal" alt="Intro">Paypal</a>, <a href="#DonateCrypto" alt="Crypto">Crypto</a>, <a href="#Patreon" alt="Patreon">Patreon</a>, and even <a href="#DonateCheck" alt="Check">check</a>. If you want to support the site, and there's something missing that you'd like me to add, please <a href="http://itspronouncedmetrosexual.com/contact" alt="contact">reach out</a>.
	</p>
	<p class="subtitle">
		Reader-funding is a new experiment as of 2018, and <a href="http://itspronouncedmetrosexual.com/2018/09/the-state-of-this-site-or-funding-online-work-in-2018-an-infographic/" title="The State of this Site (Or “Funding Online Work in 2018, an Infographic”)" target="_blank">I wrote all about it 6 months in</a> (disclosing numbers, and some other thoughts), in case you want to read about how it's going.
	</p>
	<p class="subtitle">
		<3 sK
	</p>

	<div id="stickyPostTitle" class="unactiveSticky">

		<ul id="stickyTitle" class="grid grid--center grid--justifyCenter grid--fit">
			<li class="grid-cell">Jump to</li>
			<li class="grid-cell">
				<a href="#DonatePaypal" alt="PayPal">PayPal</a>
			</li>
			<li class="grid-cell">
				<a href="#DonateCrypto" alt="Crypto">Crypto</a>
			</li>
			<li class="grid-cell">
				<a href="#Patreon" alt="Patreon">Patreon</a>
			</li>
			<li class="grid-cell">
				<a href="#DonateCheck" alt="Check">Check</a>
			</li>
		</ul>
	</div><!--/stickyPostTitle-->

</header> <!-- end article header -->

<div id="content">

	<div id="main" role="main">
		<h2 id="DonatePaypal">Paypal / Credit Card</h2>

		<article class="loopCard">
			<div class="loopText">
				<h3 class="loopTitle">Make a One-Time Contribution</h3>
				<p>Any amount (even $1) helps</p>
			</div>

			<div class="paypal">
				<form class="paypalForm" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
				<input type="hidden" name="cmd" value="_s-xclick">
				<input type="hidden" name="hosted_button_id" value="BMGTDBTXYL62U">

				<button name="submit" type="submit" class="button button-large">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 379 379.58"><g id="p"><path d="M120,190.47c.06,5.56,2,13.28,7.47,15.91,6.88,3.29,12.09-4,13.68-9.87,1.91-7.13.63-14.89.37-22.15-.33-9.11-.08-18.25-.53-27.35-.29-6-1.33-14.2-7.44-17.16-7.26-3.51-12.43,4.38-13.88,10.53-1.65,7-.59,14.39-.35,21.45C119.66,171.37,119.92,180.93,120,190.47Z"/><path d="M154.26,122.5c.87,22.18-1.72,45.09.94,67.15.75,6.27,2.76,14.71,10.59,14.67,7.6,0,10.24-7.22,10.91-13.67.76-7.32-.41-14.7-.63-22-.4-13.66.56-27.38,0-41-.29-7-1.27-16.58-10-17.78C158.54,108.79,154,115.71,154.26,122.5Z"/><path d="M188.1,117.15c0,8.1,0,16.19,0,24.28,0,6.4-.23,13.79,3.46,19.35,3.5,5.29,9.69,6.79,14.33,1.9s4.86-12.87,5-19.25c.15-7.54.06-15.12.06-22.66,0-6-.42-13.94-5.61-17.94C196.23,95.84,188.05,109.37,188.1,117.15Z"/><path d="M223.76,156.13c1.78,11.1,14.45,14.35,19.11,3.2,2.67-6.37,1.53-13.82,1.4-20.51-.14-7.57,1.06-15.31-.16-22.82-1.61-10-13.06-18.13-19.23-6.29-3.35,6.42-2.2,14.32-2.06,21.26C223,139.36,222.43,147.79,223.76,156.13Z"/><path d="M126.88,249.06c5.6,23.79,33.36,28.1,54,29.36,8.88.54,18,.17,26.85-.14,7.86-.28,16-.38,23.36-3.42,9.2-3.81,18.27-9.5,23.45-18.26,5.84-9.89,5.29-22.52,5.52-33.62.18-8.64.26-17.32-.41-25.94-.53-6.75-1-13.46-7.41-17.14-12.89-7.39-31.06-3.29-45-2.55-8.31.44-22-1.79-22.53,10.48-.55,13,14.78,11.44,23.31,10.85,7.31-.5,14.65-.66,22-1,1.83-.07,7.27-1.3,8.62-.08s.13,6.7.1,8.52c-.17,9.13.07,18.25-.45,27.38-.55,9.64-2.41,15.56-11.68,20.09-7.53,3.68-16,3.44-24.22,3.43-8.73,0-17.52-.26-26.23-1-11.95-1-22.56-4.66-29.65-14.6-3-4.29-7-7.24-12.54-5.41A11.09,11.09,0,0,0,126.88,249.06Z"/></g></svg>
					One-Time<br/> Donation
				</button>
				<img src="<?php echo get_template_directory_uri(); ?>/library/images/accepting-all-major-credit-cards.jpg" alt="Accepting all major credit cards" class="credit-cards"/>


				<img style="position:absolute;top:-99999px;left:-99999px;" alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>

			</div>
		</article>
		<article class="loopCard">
			<div class="loopText">
				<h3 class="loopTitle">Make a Montly Contribution</h3>
			</div>
			<div class="paypal">
				<form class="paypalForm paypal--subscription" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
				<input type="hidden" name="cmd" value="_s-xclick">
				<input type="hidden" name="hosted_button_id" value="4D2VHSEDTKCT4">
				<label for="os0">Level of Support</label>
				<select name="os0">
					<option value="Massive">Massive: $100.00 per Month</option>
					<option value="Huge">Huge: $50.00 per Month</option>
					<option value="Big">Big: $20.00 per Month</option>
					<option value="Solid">Solid: $10.00 per Month</option>
					<option value="Stout">Stout: $5.00 per Month</option>
					<option value="Small & Mighty">Small & Mighty: $1.00 per Month</option>
				</select>

				<input type="hidden" name="currency_code" value="USD">

				<button name="submit" type="submit" class="button button-wide">

					Start Monthly Donation
				</button>
				<img src="<?php echo get_template_directory_uri(); ?>/library/images/accepting-all-major-credit-cards.jpg" alt="Accepting all major credit cards" class="credit-cards"/>


				<img style="position:absolute;top:-99999px;left:-99999px;" alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>


			</div>
		</article>
		<article class="loopCard">
			<div class="loopText">
				<h3 class="loopTitle">Make a Yearly Contribution</h3>
			</div>

			<div class="paypal">
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="QDBRG5WBQCABL">
					<label for="os0">Level of Support</label>
					<select name="os0">
						<option value="Massive">Massive: $100.00 per Year</option>
						<option value="Huge">Huge: $50.00 per Year</option>
						<option value="Big">Big: $20.00 per Year</option>
						<option value="Solid">Solid: $10.00 per Year</option>
						<option value="Stout">Stout: $5.00 per Year</option>
						<option value="Small & Mighty">Small & Mighty: $1.00 per Year</option>
					</select>

					<input type="hidden" name="currency_code" value="USD">

					<button name="submit" type="submit" class="button button-wide">
						Start Yearly Donation
					</button>
					<img src="<?php echo get_template_directory_uri(); ?>/library/images/accepting-all-major-credit-cards.jpg" alt="Accepting all major credit cards" class="credit-cards"/>


					<img style="position:absolute;top:-99999px;left:-99999px;" alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>

			</div>
		</article>

		<h2 id="DonateCrypto">Cryptocurrencies</h2>
		<article class="loopCard cryptos">
			<div class="loopText accordion">
				<p>
					I can accept donations via the following cryptos. Click for wallet address and QR code.
				</p>
				<h3 class="loopTitle accordion-toggle">Litecoin (LTC)</h3>
				<div class="accordion-content">
					<pre>LhVFBFTapkwAJcYH4QSRgWK9xeJotkHfcj</pre>
					<img src="http://itspronouncedmetrosexual.com/wp-content/uploads/2018/02/crypto-wallet-ltc.png" alt="LTC Address"/>
				</div>
				<h3 class="loopTitle accordion-toggle">Ethereum (ETH)</h3>
				<div class="accordion-content">
					<pre>0x41A31Fd0e8474aF80915411E7EfE04C5a1299b6a</pre>
					<img src="http://itspronouncedmetrosexual.com/wp-content/uploads/2018/02/crypto-wallet-eth.png" alt="ETH Address"/>
				</div>
				<h3 class="loopTitle accordion-toggle">Bitcoin (BTC)</h3>
				<div class="accordion-content">
					<pre>1AsBMiLizNCqK9mCG9x9RbDQbTwqcswfEY</pre>
					<img src="http://itspronouncedmetrosexual.com/wp-content/uploads/2018/02/crypto-wallet-btc.png" alt="BTC Address"/>
				</div>
				<h3 class="loopTitle accordion-toggle">Bitcoin Cash (BCH)</h3>
				<div class="accordion-content">
					<pre>qpst7zvud82u5knrp38g73w8yfyz5gjhwslarrwqhy</pre>
					<img src="http://itspronouncedmetrosexual.com/wp-content/uploads/2018/02/crypto-wallet-bch.png" alt="BCH Address"/>
				</div>


			</div>

		</article>


	</div><!--main-->

	<div id="otherDonations" role="main">
		<h2 id="Patreon">Patreon</h2>
		<article class="loopCard">
			<div class="loopText">
				<h3 class="loopTitle">Patreon is a platform that helps people support creators</h3>
				<p>You choose how much you want to contribute each month, and get exclusive access to community, comments, and content I publish there.</p>
				<a class="button button-large button-wide" href="http://bit.ly/2pfQrTl" target="_blank" alt="Become an IPM Patron" onClick="ga('send', 'event', { eventCategory: 'Donations', eventAction: 'button_click', eventLabel: 'Patronize Page-Donate'});">
					Become an IPM Patron
				</a>
			</div>

		</article>

		<h2 id="DonateCheck">Snailmail (Check or Other)</h2>
		<article class="loopCard snailmail">
			<div class="loopText">
				<h3 class="loopTitle">Want to send something in the mail?</h3>
				<p>I love mail! Here's my mailing address:</p>
				<p><big>
					It's Pronounced Metrosexual<br/>
					P.O. Box 684412<br/>
					Austin, TX 78768
				</big></p>
				<p>If you're sending a check, <strong>please make checks out to "hues"</strong> (IPM is part of the <a href="http://hues.xyz" alt="hues">hues global justice collective</a>).</p>
			</div>

		</article>

	</div>


	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class('pageIntro'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

		<section class="entry-content" itemprop="articleBody">
			<?php the_content(); ?>
		</section> <!-- end article section -->

	</article> <!-- end article -->

	<?php endwhile; endif; wp_reset_query(); ?> <!--reset page intro -->

	<div class="fundedByPatreon footerPatreon" style="margin-top:4vw;">
		<div class="grid grid--fit">
			<p class="grid-cell">
				<strong>This free resource is hosted thanks to funding from IPM Patrons.</strong>
				<span>Join and help support social justice media.</span>
			</p>

			<a class="button grid-cell" href="http://bit.ly/2pfQrTl" target="_blank" alt="Become an IPM Patron" onClick="ga('send', 'event', { eventCategory: 'Donations', eventAction: 'button_click', eventLabel: 'Patronize Page-Donate'});">
				<div>🤗  Become a Patron</div>
			</a>
		</div>
	</div>
</div><!--/content-->

<?php get_footer(); ?>
