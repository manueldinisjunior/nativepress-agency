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
			<h2 class="wp-block-heading has-x-large-font-size">We combine strategy, clarity, and craft.</h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"60%"} -->
		<div class="wp-block-column" style="flex-basis:60%">
			<!-- wp:paragraph -->
			<p>We help founders and in-house teams turn ideas into polished digital products that feel effortless to use. Every project starts with audience insight, content structure, and a clear roadmap for growth.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph -->
			<p>Our process stays collaborative and transparent so you can make confident decisions while we ship quick wins and long-term value.</p>
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
