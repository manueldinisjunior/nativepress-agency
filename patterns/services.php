<?php
/**
 * Title: Services section
 * Slug: nativepress/services
 * Categories: featured
 * Keywords: services, agency, offerings
 * Description: A services section with three key offerings.
 * Viewport Width: 1200
 */

register_block_pattern(
	'nativepress/services',
	array(
		'title'         => __( 'Services section', 'nativepress' ),
		'description'   => _x( 'A services section with three key offerings.', 'Pattern description', 'nativepress' ),
		'categories'    => array( 'featured' ),
		'keywords'      => array( 'services', 'agency', 'offerings' ),
		'viewportWidth' => 1200,
		'content'       => <<<HTML
<!-- wp:group {"align":"full","id":"services","style":{"spacing":{"padding":{"top":"64px","bottom":"64px","left":"24px","right":"24px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" id="services" style="padding-top:64px;padding-right:24px;padding-bottom:64px;padding-left:24px">
	<!-- wp:heading {"level":2,"textAlign":"center","fontSize":"x-large"} -->
	<h2 class="wp-block-heading has-text-align-center has-x-large-font-size">Services that move businesses forward</h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center">Three core offerings for brand, product, and cloud growth.</p>
	<!-- /wp:paragraph -->
	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"24px","left":"24px"}}}} -->
	<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"border":{"width":"1px","color":"#E8E6E1"},"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}}}} -->
			<div class="wp-block-group has-border-color" style="border-color:#E8E6E1;border-width:1px;padding:24px">
				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading">Web App Development</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p>Fast, scalable applications and WordPress builds with a strong focus on performance and usability.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"border":{"width":"1px","color":"#E8E6E1"},"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}}}} -->
			<div class="wp-block-group has-border-color" style="border-color:#E8E6E1;border-width:1px;padding:24px">
				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading">Branding</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p>Clear, memorable brand systems and visuals crafted for modern agencies and startups.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"border":{"width":"1px","color":"#E8E6E1"},"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}}}} -->
			<div class="wp-block-group has-border-color" style="border-color:#E8E6E1;border-width:1px;padding:24px">
				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading">Cloud Services</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p>Cloud architecture, deployment, and optimisation built to keep your digital products stable and resilient.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
HTML
	)
);
