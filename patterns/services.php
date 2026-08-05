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
<div class="wp-block-group alignfull nativepress-home-services" id="services" style="padding-top:64px;padding-right:24px;padding-bottom:64px;padding-left:24px">
	<!-- wp:heading {"level":2,"textAlign":"center","fontSize":"x-large"} -->
	<h2 class="wp-block-heading has-text-align-center has-x-large-font-size">Dienstleistungen, die Unternehmen voranbringen</h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center">Drei Kernangebote für Marke, Produkt und Cloud-Wachstum.</p>
	<!-- /wp:paragraph -->
	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"24px","left":"24px"}}}} -->
	<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"border":{"width":"1px","color":"#E8E6E1"},"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}}}} -->
			<div class="wp-block-group has-border-color nativepress-service-card" style="border-color:#E8E6E1;border-width:1px;padding:24px">
				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading">Web-App-Entwicklung</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p>Schnelle, skalierbare Anwendungen und WordPress-Lösungen mit starkem Fokus auf Performance und Benutzerfreundlichkeit.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"border":{"width":"1px","color":"#E8E6E1"},"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}}}} -->
			<div class="wp-block-group has-border-color nativepress-service-card" style="border-color:#E8E6E1;border-width:1px;padding:24px">
				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading">Markenführung</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p>Klare, einprägsame Markensysteme und visuelle Identitäten für moderne Agenturen und Startups.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"border":{"width":"1px","color":"#E8E6E1"},"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}}}} -->
			<div class="wp-block-group has-border-color nativepress-service-card" style="border-color:#E8E6E1;border-width:1px;padding:24px">
				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading">Cloud-Lösungen</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p>Cloud-Architektur, Bereitstellung und Optimierung, damit Ihre digitalen Produkte stabil und resilient bleiben.</p>
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
