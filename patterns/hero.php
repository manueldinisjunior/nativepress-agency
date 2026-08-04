<?php
/**
 * Title: Hero section
 * Slug: nativepress/hero
 * Categories: featured
 * Keywords: hero, agency, homepage
 * Description: A bold hero section for a modern web agency homepage.
 * Viewport Width: 1200
 */

register_block_pattern(
	'nativepress/hero',
	array(
		'title'         => __( 'Hero section', 'nativepress' ),
		'description'   => _x( 'A bold hero section for a modern web agency homepage.', 'Pattern description', 'nativepress' ),
		'categories'    => array( 'featured' ),
		'keywords'      => array( 'hero', 'agency', 'homepage' ),
		'viewportWidth' => 1200,
		'content'       => <<<HTML
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"80px","bottom":"80px","left":"24px","right":"24px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:80px;padding-right:24px;padding-bottom:80px;padding-left:24px">
	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"32px","left":"32px"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center">
		<!-- wp:column {"width":"55%"} -->
		<div class="wp-block-column" style="flex-basis:55%">
			<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.2em"}},"textColor":"primary"} -->
			<p class="has-primary-color has-text-color">NativePress Agency</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":1,"fontSize":"xx-large"} -->
			<h1 class="wp-block-heading has-xx-large-font-size">We build digital experiences that help ambitious brands grow.</h1>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"fontSize":"large"} -->
			<p class="has-large-font-size">Strategy, design, and development for modern companies ready to stand out online.</p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#contact">Book a call</a></div>
				<!-- /wp:button -->
				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#services">Explore services</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"45%"} -->
		<div class="wp-block-column" style="flex-basis:45%">
			<!-- wp:group {"style":{"color":{"background":"#f8fafc"},"border":{"radius":"24px"},"spacing":{"padding":{"top":"32px","bottom":"32px","left":"32px","right":"32px"}}}} -->
			<div class="wp-block-group has-background" style="border-radius:24px;padding:32px;background-color:#f8fafc">
				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading">Trusted by growing teams</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p>From launch sites to conversion-focused marketing experiences, we keep the process simple and measurable.</p>
				<!-- /wp:paragraph -->
				<!-- wp:list -->
				<ul>
					<li>Design systems and UI kits</li>
					<li>Fast, accessible WordPress builds</li>
					<li>Clear reporting and ongoing support</li>
				</ul>
				<!-- /wp:list -->
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
