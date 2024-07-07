<?php
/**
 * Title: Portfolio Staggered Posts
 * Slug: portfolio-wp/portfolio-staggered-posts
 * Categories: portfolio-wp-portfolios
 *
 * @package Portfolio WP
 * @since Portfolio WP 1.0
 */

?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"className":"portfolio-pattern portfolio-staggered","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull portfolio-pattern portfolio-staggered" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"fontSize":"gigantic"} -->
<h2 class="wp-block-heading has-gigantic-font-size">Selected <mark style="background-color:#FDF800" class="has-inline-color">Works</mark></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"200","lineHeight":"1.3"}},"fontSize":"extra-large"} -->
<p class="has-extra-large-font-size" style="font-style:normal;font-weight:200;line-height:1.3">This is only a fragment of the stuff made. <br>What set me apart remains confidential.</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":2,"query":{"perPage":3,"pages":0,"offset":0,"postType":"jetpack-portfolio","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[]},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default"}} -->
<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0"}},"className":"portfolio-content","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide portfolio-content"><!-- wp:post-featured-image {"isLink":true,"width":"","height":""} /-->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"className":"content-overlay","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide content-overlay"><!-- wp:post-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"300","letterSpacing":"0px"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontSize":"large"} /-->

<!-- wp:post-terms {"term":"jetpack-portfolio-tag","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"400"}},"className":"tags"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query-no-results -->
<!-- wp:heading -->
<h2 class="wp-block-heading">No Results</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Try creating posts or changing the options for the Query Loop block.</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
