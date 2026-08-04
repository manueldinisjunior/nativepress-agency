<?php
/**
 * Title: About us section
 * Slug: nativepress/about
 * Categories: featured
 * Keywords: about, agency, company
 * Description: A concise about section for an agency website.
 * Viewport Width: 1200
 */

register_block_pattern(
	'nativepress/about',
	array(
		'title'         => __( 'About us section', 'nativepress' ),
		'description'   => _x( 'A concise about section for an agency website.', 'Pattern description', 'nativepress' ),
		'categories'    => array( 'featured' ),
		'keywords'      => array( 'about', 'agency', 'company' ),
		'viewportWidth' => 1200,
		'content'       => <<<HTML
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"64px","left":"24px","right":"24px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:64px;padding-right:24px;padding-bottom:64px;padding-left:24px">
	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"32px","left":"32px"}}}} -->
	<div class="wp-block-columns">
		<!-- wp:column {"width":"40%"} -->
		<div class="wp-block-column" style="flex-basis:40%">
			<!-- wp:heading {"level":2,"fontSize":"x-large"} -->
			<h2 class="wp-block-heading has-x-large-font-size">Wir verbinden Strategie, Klarheit und Handwerk.</h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"60%"} -->
		<div class="wp-block-column" style="flex-basis:60%">
			<!-- wp:paragraph -->
			<p>Wir helfen Gründern und internen Teams dabei, Ideen in ausgereifte digitale Produkte zu verwandeln, die sich mühelos bedienen lassen. Jedes Projekt beginnt mit Zielgruppen-Insight, Inhaltsstruktur und einer klaren Roadmap für Wachstum.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p>Unser Prozess bleibt kollaborativ und transparent, damit Sie sichere Entscheidungen treffen können, während wir schnelle Erfolge und langfristigen Wert liefern.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
HTML
	)
);
