<?php
/**
 * Title: Contact Form
 * Slug: portfolio-wp/contact-form
 * Categories: portfolio-wp-contact
 *
 * @package Portfolio WP
 * @since Portfolio WP 1.0
 */

if( ! PWP_EDD::is_valid() ){ return; };
?>

<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"className":"contact-pattern","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull contact-pattern" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"verticalAlignment":"top","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|80"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:40%"><!-- wp:heading {"textAlign":"left","style":{"typography":{"lineHeight":"1"}},"fontSize":"gigantic"} -->
<h2 class="wp-block-heading has-text-align-left has-gigantic-font-size" style="line-height:1">Work<br>with me.</h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"fontSize":"normal"} -->
<p class="has-normal-font-size">Are you ready to create unconventional content that supercharges your business and brand image?</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"normal"} -->
<p class="has-normal-font-size">Fill out this form for a chance to win a free content consultation.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"normal"} -->
<p class="has-normal-font-size">If you would rather just send an email, you can reach us at <a href="mailto:team@portfoliowp.com">team@portfoliowp.com</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:spacer {"height":"80px"} -->
<div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"type":"constrained","contentSize":"520px","justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:jetpack/contact-form {"subject":"[Portfolio WP.] Contact Patterns","to":"itsdavidmorgan@gmail.com"} -->
<div class="wp-block-jetpack-contact-form"><!-- wp:jetpack/field-name {"required":true,"requiredText":"(required)","borderRadius":8,"fieldBackgroundColor":"#F0F0F0"} /-->

<!-- wp:jetpack/field-email {"required":true,"requiredText":"(required)","borderRadius":8,"fieldBackgroundColor":"#F0F0F0"} /-->

<!-- wp:jetpack/field-textarea {"label":"Message","requiredText":"(required)","borderRadius":8,"fieldBackgroundColor":"#F0F0F0"} /-->

<!-- wp:jetpack/button {"element":"button","text":"Contact Us","textColor":"dark-gray","backgroundColor":"accent-primary","width":"50%","lock":{"remove":true},"className":"is-style-outline"} /--></div>
<!-- /wp:jetpack/contact-form --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->