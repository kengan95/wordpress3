<?php
/**
 * Title: Newsletter Centered
 * Slug: portfolio-wp/newsletter-centered
 * Categories: portfolio-wp-newsletters
 *
 * @package Portfolio WP
 * @since Portfolio WP 1.0
 */

?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"bg-light","className":"newsletter-pattern","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull newsletter-pattern has-bg-light-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:heading {"textAlign":"center","style":{"typography":{"lineHeight":"1.1"}},"fontSize":"huge"} -->
<h2 class="wp-block-heading has-text-align-center has-huge-font-size" style="line-height:1.1">Get <span class="highlighter"><mark style="background-color:#FDF800" class="has-inline-color">Updates.</mark></span></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"align":"center","placeholder":"Type / to choose a block, or press space to summon the AI Copilot","style":{"typography":{"fontSize":"1.15rem"}}} -->
<p class="has-text-align-center" style="font-size:1.15rem">Get the latest theme updates and insights straight to your inbox. No clutter, just the good stuff – we promise.</p>
<!-- /wp:paragraph -->

<!-- wp:jetpack/contact-form {"subject":"[Portfolio WP.] Home","to":"itsdavidmorgan@gmail.com","style":{"spacing":{"padding":{"top":"16px","right":"16px","bottom":"16px","left":"16px"}}}} -->
<div class="wp-block-jetpack-contact-form" style="padding-top:16px;padding-right:16px;padding-bottom:16px;padding-left:16px"><!-- wp:jetpack/field-name {"required":true,"requiredText":"(required)","width":50,"fieldBackgroundColor":"#ffffff"} /-->

<!-- wp:jetpack/field-email {"required":true,"requiredText":"(required)","width":50,"fieldBackgroundColor":"#ffffff"} /-->

<!-- wp:jetpack/button {"element":"button","text":"Subscribe","lock":{"remove":true}} /-->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"extra-small"} -->
<p class="has-text-align-center has-extra-small-font-size" style="margin-top:0;margin-bottom:0">By submitting your information, you're giving us permission to email you. You may unsubscribe at any time.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:jetpack/contact-form --></div>
<!-- /wp:group -->
