<?php
/**
 * Title: Newsletter Columns
 * Slug: portfolio-wp/newsletter-columns
 * Categories: portfolio-wp-newsletters
 *
 * @package Portfolio WP
 * @since Portfolio WP 1.0
 */

 if( ! PWP_EDD::is_valid() ){ return; };
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"className":"newsletter-pattern","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull newsletter-pattern" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"textAlign":"left","style":{"typography":{"lineHeight":"1.1"}},"fontSize":"huge"} -->
<h2 class="wp-block-heading has-text-align-left has-huge-font-size" style="line-height:1.1">Newsletters are for boomers.</h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"align":"left","placeholder":"Type / to choose a block, or press space to summon the AI Copilot","style":{"typography":{"fontSize":"1.15rem"}}} -->
<p class="has-text-align-left" style="font-size:1.15rem">But don’t worry, we like a good newsletter too. Submit your info and we promise not to spam ya.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:jetpack/contact-form {"subject":"[Portfolio WP.] Home","to":"itsdavidmorgan@gmail.com","style":{"spacing":{"padding":{"top":"16px","right":"16px","bottom":"16px","left":"16px"}}}} -->
<div class="wp-block-jetpack-contact-form" style="padding-top:16px;padding-right:16px;padding-bottom:16px;padding-left:16px"><!-- wp:jetpack/field-name {"required":true,"requiredText":"(required)","fieldBackgroundColor":"#F0F0F0"} /-->

<!-- wp:jetpack/field-email {"required":true,"requiredText":"(required)","fieldBackgroundColor":"#F0F0F0"} /-->

<!-- wp:jetpack/button {"element":"button","text":"Subscribe","width":"50%","lock":{"remove":true},"className":"is-style-fill"} /--></div>
<!-- /wp:jetpack/contact-form --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
