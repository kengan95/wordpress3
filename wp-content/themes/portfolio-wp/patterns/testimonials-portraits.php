<?php
/**
 * Title: Testimonials Portraits
 * Slug: portfolio-wp/testimonials-portraits
 * Categories: portfolio-wp-testimonials
 *
 * @package Portfolio WP
 * @since Portfolio WP 1.0
 */

 $license = get_option( 'portfolio-wp_license_key' );
 $status  = get_option( 'portfolio-wp_license_key_status' );

 if ( false !== $status && 'valid' == $status ) {

?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"className":"testimonials-pattern","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull testimonials-pattern" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center">Some Things People Say</h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"0"}},"backgroundColor":"bg-light"} -->
<div class="wp-block-column is-vertically-aligned-center has-bg-light-background-color has-background"><!-- wp:media-text {"mediaId":510,"mediaLink":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/people/male-bw-01.jpg","mediaType":"image","imageFill":true} -->
<div class="wp-block-media-text is-stacked-on-mobile is-image-fill"><figure class="wp-block-media-text__media" style="background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/people/male-bw-01.jpg);background-position:50% 50%"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/people/male-bw-01.jpg" alt="" class="wp-image-510 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--20)"><!-- wp:quote {"className":"is-style-plain"} -->
<blockquote class="wp-block-quote is-style-plain"><!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"0","top":"0px"}}}} -->
<p style="margin-top:0px;margin-bottom:0">“Portfolio WP turned our website dreams into reality. Their theme's flexibility and design excellence elevated our online presence beyond expectations. Truly transformative.”</p>
<!-- /wp:paragraph --></blockquote>
<!-- /wp:quote -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><strong>Rob Talfort</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">Creative Director</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:media-text --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"blockGap":"0"}},"backgroundColor":"bg-light"} -->
<div class="wp-block-column is-vertically-aligned-center has-bg-light-background-color has-background"><!-- wp:media-text {"mediaId":506,"mediaLink":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/people/female-bw-01.jpg","mediaType":"image","imageFill":true} -->
<div class="wp-block-media-text is-stacked-on-mobile is-image-fill"><figure class="wp-block-media-text__media" style="background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/people/female-bw-01.jpg);background-position:50% 50%"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/people/female-bw-01.jpg" alt="" class="wp-image-506 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--20)"><!-- wp:quote {"className":"is-style-plain"} -->
<blockquote class="wp-block-quote is-style-plain"><!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"0","top":"0px"}}}} -->
<p style="margin-top:0px;margin-bottom:0">“Portfolio WP turned our website dreams into reality. Their theme's flexibility and design excellence elevated our online presence beyond expectations. Truly transformative.”</p>
<!-- /wp:paragraph --></blockquote>
<!-- /wp:quote -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><strong>Jane Cooper</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">Marketing Coordinator</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:media-text --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<?php } ?>