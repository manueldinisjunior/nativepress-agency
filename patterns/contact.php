<?php
/**
 * Title: Contact section
 * Slug: nativepress/contact
 * Categories: featured
 * Keywords: contact, agency, form
 * Description: A contact section for an agency website with an integration area.
 * Viewport Width: 1200
 */

register_block_pattern(
	'nativepress/contact',
	array(
		'title'         => __( 'Contact section', 'nativepress' ),
		'description'   => _x( 'A contact section for an agency website with an integration area.', 'Pattern description', 'nativepress' ),
		'categories'    => array( 'featured' ),
		'keywords'      => array( 'contact', 'agency', 'form' ),
		'viewportWidth' => 1200,
		'content'       => <<<HTML
<!-- wp:group {"align":"full","id":"contact","style":{"color":{"background":"#0f172a"},"spacing":{"padding":{"top":"64px","bottom":"64px","left":"24px","right":"24px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background" id="contact" style="padding-top:64px;padding-right:24px;padding-bottom:64px;padding-left:24px;background-color:#0f172a">
	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"32px","left":"32px"}}}} -->
	<div class="wp-block-columns">
		<!-- wp:column {"width":"45%"} -->
		<div class="wp-block-column" style="flex-basis:45%">
			<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.2em"}},"textColor":"base"} -->
			<p class="has-base-color has-text-color" style="font-weight:600;text-transform:uppercase;letter-spacing:0.2em;">Contact</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"textColor":"base","fontSize":"x-large"} -->
			<h2 class="wp-block-heading has-base-color has-text-color has-x-large-font-size">Let’s create your next digital advantage.</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"base"} -->
			<p class="has-base-color has-text-color">Tell us where you want to go. We will help you create the digital foundation to get there.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"textColor":"base"} -->
			<p class="has-base-color has-text-color">+49 177 7941499<br/>manueldinisjunior@gmail.com</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"55%"} -->
		<div class="wp-block-column" style="flex-basis:55%">
			<!-- wp:group {"style":{"color":{"background":"#ffffff"},"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}}}} -->
			<div class="wp-block-group has-background" style="padding:24px;background-color:#ffffff">
				<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}}} -->
				<p>Form integration area</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph -->
				<p>Drop in your preferred form plugin here, such as Fluent Forms, Contact Form 7, or a custom integration.</p>
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
