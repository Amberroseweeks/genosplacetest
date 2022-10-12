<?php
/**
 * Title: Pattern Test
 * Slug: genos-place-test/pattern-test
 * Categories: featured
 * Block Types: core/image, core/columns
 *
 * @package genos-place-test
 * @since 1.0.0
 */

?>
<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide">
	<!-- wp:column --><div class="wp-block-column"><!-- wp:image {"align":"center","width":200,"height":200,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
	<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/woman-tshirt.jpg' ) ); ?>" alt="" width="200" height="200"/></figure></div>
	<!-- /wp:image -->
	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center"><?php echo esc_html_x( 'Sample content. Replace the text with your own content.', 'sample content', 'genos-place-test' ); ?></p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->
	<!-- wp:column -->
	<div class="wp-block-column solid-bg-color"><!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center"><?php echo esc_html_x( 'Sample content. Replace the text with your own content.', 'sample content', 'genos-place-test' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:image {"align":"center","width":200,"height":200,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} -->
	<div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/woman-curls.jpg' ) ); ?>" alt="" width="200" height="200"/></figure></div>
	<!-- /wp:image --></div>
	<!-- /wp:column --></div>
<!-- /wp:columns -->
