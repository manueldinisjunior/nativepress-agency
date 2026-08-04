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
	<h2 class="wp-block-heading has-text-align-center has-x-large-font-size">Services built for momentum</h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center">From the first spark of an idea to a polished launch, we keep the experience strategic and scalable.</p>
	<!-- /wp:paragraph -->
	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"24px","left":"24px"}}}} -->
	<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"border":{"width":"1px","color":"#e2e8f0"},"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}}}} -->
			<div class="wp-block-group has-border-color" style="border-color:#e2e8f0;border-width:1px;padding:24px">
				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading">Brand strategy</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p>Clarify your positioning, messaging, and customer journey so every touchpoint feels cohesive.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"border":{"width":"1px","color":"#e2e8f0"},"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}}}} -->
			<div class="wp-block-group has-border-color" style="border-color:#e2e8f0;border-width:1px;padding:24px">
				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading">Web design</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p>Create modern interfaces that balance clarity, conversion, and accessibility from day one.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"border":{"width":"1px","color":"#e2e8f0"},"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}}}} -->
			<div class="wp-block-group has-border-color" style="border-color:#e2e8f0;border-width:1px;padding:24px">
				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading">Development</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p>Launch fast with reliable WordPress builds, performance tuning, and a solid support plan.</p>
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
