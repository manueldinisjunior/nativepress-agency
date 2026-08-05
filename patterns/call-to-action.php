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
		'title'         => __( 'Handlungsaufforderung', 'nativepress-agency' ),
		'description'   => _x( 'Ein einfacher Call-to-Action-Bereich für eine Agentur-Website.', 'Pattern description', 'nativepress-agency' ),
		'categories'    => array( 'featured' ),
		'keywords'      => array( 'call to action', 'cta', 'agency' ),
		'viewportWidth' => 1200,
		'content'       => <<<HTML
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"48px","bottom":"48px","left":"24px","right":"24px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull nativepress-home-cta" style="padding-top:48px;padding-right:24px;padding-bottom:48px;padding-left:24px">
	<!-- wp:group {"style":{"color":{"background":"#f8fafc"},"spacing":{"padding":{"top":"32px","bottom":"32px","left":"32px","right":"32px"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group has-background" style="padding:32px;background-color:#17213f">
		<!-- wp:heading {"level":2,"textAlign":"center"} -->
		<h2 class="wp-block-heading has-text-align-center">Bereit für den nächsten Schritt?</h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center">Lassen Sie uns Ihre Ziele besprechen und Ihre Ideen in eine funktionierende digitale Lösung verwandeln.</p>
		<!-- /wp:paragraph -->
		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#contact">Projekt starten</a></div>
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
