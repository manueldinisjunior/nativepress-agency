<?php
/**
 * Title: Call to action
 * Slug: nativepress/call-to-action
 * Categories: featured
 * Keywords: call to action, cta, agency
 * Description: A simple call-to-action section for an agency website.
 * Viewport Width: 1200
 */

register_block_pattern(
	'nativepress/call-to-action',
	array(
		'title'         => __( 'Call to action', 'nativepress' ),
		'description'   => _x( 'A simple call-to-action section for an agency website.', 'Pattern description', 'nativepress' ),
		'categories'    => array( 'featured' ),
		'keywords'      => array( 'call to action', 'cta', 'agency' ),
		'viewportWidth' => 1200,
		'content'       => <<<HTML
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"48px","bottom":"48px","left":"24px","right":"24px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:48px;padding-right:24px;padding-bottom:48px;padding-left:24px">
	<!-- wp:group {"style":{"color":{"background":"#f8fafc"},"spacing":{"padding":{"top":"32px","bottom":"32px","left":"32px","right":"32px"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group has-background" style="padding:32px;background-color:#f8fafc">
		<!-- wp:heading {"level":2,"textAlign":"center"} -->
		<h2 class="wp-block-heading has-text-align-center">Ready to launch your next chapter?</h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center">Let’s discuss your goals and turn your ideas into a digital experience that works.</p>
		<!-- /wp:paragraph -->
		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#contact">Start a project</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
HTML
	)
);
