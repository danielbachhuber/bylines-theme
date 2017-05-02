<?php get_header(); ?>

<div class="site-content">

	<div class="row home-section-intro home-section">
		<div class="column medium-8 medium-centered text-center">
			<h1>Bylines</h1>
			<div class="tagline">Modern multi-author publishing for WordPress</div>
		</div>
	</div>

	<div id="features" class="home-section-features home-section">
		<div class="row">
			<div class="column text-center">
				<h2>Features</h2>
			</div>
		</div>
		<div class="row medium-up-3">
			<div class="column feature">
				<p>Assign multiple authors to posts.</p>
			</div>
			<div class="column feature">
				<p>Create bylines without creating WordPress user accounts.</p>
			</div>
			<div class="column feature">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/unit-tests.png" />
				<p>Fully supported modern architecture with unit test coverage.</p>
			</div>
		</div>
	</div>

	<div id="pricing" class="home-section-pricing home-section">
		<div class="row">
			<div class="column text-center">
				<h2>Pricing</h2>
			</div>
		</div>
		<div class="row plan-group medium-up-3">
			<div class="column plan">
				<h3>Blogger</h3>
				<div class="inner">
					<div class="price">$89</div>
					<div class="explanation"><p>Get updates &amp; support for a year<br> on <strong>1 site</strong>.</p></div>
					<div class="buy"><a class="button large" href="https://handbuilt.memberful.com/checkout?plan=20963">Buy Now</a></div>
				</div>
			</div>
			<div class="column plan">
				<h3>Publisher</h3>
				<div class="inner">
					<div class="price">$249</div>
					<div class="explanation"><p>Get updates &amp; support for a year<br> on <strong>5 sites</strong>.</p></div>
					<div class="buy"><a class="button large" href="https://handbuilt.memberful.com/checkout?plan=20964">Buy Now</a></div>
				</div>
			</div>
			<div class="column plan">
				<h3>Enterprise</h3>
				<div class="inner">
					<div class="price">$499</div>
					<div class="explanation"><p>Get updates &amp; support for a year<br> on <strong>unlimited sites</strong>.</p></div>
					<div class="buy"><a class="button large" href="https://handbuilt.memberful.com/checkout?plan=20965">Buy Now</a></div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="column medium-8 medium-centered text-center">
				<p>All plans are subject to the <a href="<?php echo esc_url( home_url( 'terms/' ) ); ?>">terms &amp; conditions</a>.</p>
			</div>
		</div>
	</div>

</div>

<?php get_footer(); ?>
