<?php
/**
 * Title: Widgets block section
 * Slug: nativepress/widgets
 * Categories: widgets
 * Keywords: widgets, sidebar, search, posts
 * Description: A starter widget-style section with search, latest posts, and categories.
 * Viewport Width: 1200
 */

register_block_pattern(
	'nativepress/widgets',
	array(
		'title'         => __( 'Widgets section', 'nativepress-agency' ),
		'description'   => _x( 'A starter sidebar-style widget section with search, latest posts, and categories.', 'Pattern description', 'nativepress-agency' ),
		'categories'    => array( 'widgets' ),
		'keywords'      => array( 'widgets', 'sidebar', 'search', 'posts', 'categories' ),
		'viewportWidth' => 1200,
		'content'       => <<<'HTML'
<!-- wp:group {"style":{"spacing":{"padding":{"top":"48px","bottom":"48px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:48px;padding-bottom:48px">
	<!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"blockGap":{"top":"32px","left":"32px"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-top">
		<!-- wp:column {"width":"33.33%"} -->
		<div class="wp-block-column" style="flex-basis:33.33%">
			<!-- wp:search {"label":"Search","showLabel":true,"buttonText":"Go","displayButton":true} /-->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"33.33%"} -->
		<div class="wp-block-column" style="flex-basis:33.33%">
			<!-- wp:latest-posts {"displayPostDate":true,"layout":{"type":"list"}} /-->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"33.33%"} -->
		<div class="wp-block-column" style="flex-basis:33.33%">
			<!-- wp:categories {"showPostCounts":false,"displayAsDropdown":false} /-->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
HTML
	)
);
