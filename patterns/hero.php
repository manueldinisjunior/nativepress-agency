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
			<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.2em"}},"textColor":"accent"} -->
			<p class="has-accent-color has-text-color" style="font-weight:600;text-transform:uppercase;letter-spacing:0.2em;">Creative technology partner</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":1,"fontSize":"xx-large"} -->
			<h1 class="wp-block-heading has-xx-large-font-size">Digital experiences built for real growth</h1>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"fontSize":"large"} -->
			<p class="has-large-font-size">We combine development, design, cloud and security to help ambitious businesses move forward.</p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#contact">Start a project</a></div>
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
				<h3 class="wp-block-heading">Scaling digital teams with native experiences</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p>Fast, scalable websites and applications built around your business goals. Clean visual systems, strong performance, and no unnecessary complexity.</p>
				<!-- /wp:paragraph -->
				<!-- wp:list -->
				<ul>
					<li>Web app development</li>
					<li>Design systems and branding</li>
					<li>Cloud & security solutions</li>
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
