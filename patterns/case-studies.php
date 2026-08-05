<?php
/**
 * Title: Case studies section
 * Slug: nativepress/case-studies
 * Categories: featured
 * Keywords: case studies, projects, portfolio
 * Description: A case studies section for agency work highlights.
 * Viewport Width: 1200
 */

register_block_pattern(
	'nativepress/case-studies',
	array(
		'title'         => __( 'Case studies section', 'nativepress' ),
		'description'   => _x( 'A case studies section for agency work highlights.', 'Pattern description', 'nativepress' ),
		'categories'    => array( 'featured' ),
		'keywords'      => array( 'case studies', 'projects', 'portfolio' ),
		'viewportWidth' => 1200,
		'content'       => <<<HTML
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"64px","bottom":"64px","left":"24px","right":"24px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:64px;padding-right:24px;padding-bottom:64px;padding-left:24px">
	<!-- wp:heading {"level":2,"textAlign":"center","fontSize":"x-large"} -->
			<h2 class="wp-block-heading has-text-align-center has-x-large-font-size">Ausgewählte Projekte</h2>
	<!-- /wp:heading -->
	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"24px","left":"24px"}}}} -->
	<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"color":{"background":"#f8fafc"},"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}}}} -->
			<div class="wp-block-group has-background" style="padding:24px;background-color:#f8fafc">
				<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}}} -->
				<p>Northstar Studio</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph -->
				<p>Wir haben den Conversion-Funnel überarbeitet und die qualifizierten Anfragen innerhalb von drei Monaten deutlich gesteigert.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"color":{"background":"#f8fafc"},"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}}}} -->
			<div class="wp-block-group has-background" style="padding:24px;background-color:#f8fafc">
				<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}}} -->
				<p>Summit Labs</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph -->
				<p>Eine inhaltsorientierte Seitenarchitektur schuf eine überzeugende Geschichte für das Produkt.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"color":{"background":"#f8fafc"},"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}}}} -->
			<div class="wp-block-group has-background" style="padding:24px;background-color:#f8fafc">
				<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}}} -->
				<p>Brightline Health</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph -->
				<p>Ein flexibles Redaktionssystem vereinfacht Aktualisierungen, ohne die Performance zu beeinträchtigen.</p>
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
