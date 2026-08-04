<?php
/**
 * Title: Newsletter signup
 * Slug: nativepress/newsletter
 * Categories: form
 * Keywords: newsletter, subscribe, form
 * Description: A simple newsletter signup section that can be used in footer or page layouts.
 * Viewport Width: 1200
 */

register_block_pattern(
	'nativepress/newsletter',
	array(
		'title'         => __( 'Newsletter-Anmeldung', 'nativepress-agency' ),
		'description'   => _x( 'Ein zentrierter Newsletter-Anmeldebereich für Footer oder Seiten.', 'Pattern description', 'nativepress-agency' ),
		'categories'    => array( 'form' ),
		'keywords'      => array( 'newsletter', 'subscribe', 'email', 'form' ),
		'viewportWidth' => 1200,
		'content'       => <<<'HTML'
<!-- wp:group {"align":"full","style":{"color":{"background":"#ffffff"},"spacing":{"padding":{"top":"48px","bottom":"48px","left":"24px","right":"24px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#ffffff;padding-top:48px;padding-right:24px;padding-bottom:48px;padding-left:24px">
	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"24px","left":"24px"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center">
		<!-- wp:column {"width":"66.66%"} -->
		<div class="wp-block-column" style="flex-basis:66.66%">
			<!-- wp:heading {"level":3,"textAlign":"center"} -->
			<h3 class="has-text-align-center">Wöchentlicher Newsletter</h3>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"33.33%"} -->
		<div class="wp-block-column" style="flex-basis:33.33%">
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"style":{"border":{"radius":"0"}},"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link" href="#">Abonnieren</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
HTML
	)
);
