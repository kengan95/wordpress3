<?php
/**
 * Title: Portfolio Project List
 * Slug: portfolio-wp/portfolio-project-list
 * Categories: portfolio-wp-portfolios
 *
 * @package Portfolio WP
 * @since Portfolio WP 1.0
 */

if( ! PWP_EDD::is_valid() ){ return; };
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"className":"portfolio-pattern portfolio-list","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull portfolio-pattern portfolio-list" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"align":"wide","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"humongous"} -->
<h2 class="wp-block-heading alignwide has-humongous-font-size" style="text-transform:uppercase">Portfolio</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Hello. This is my work. These are recent samples of the rad stuff I’ve been working on.</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":0,"query":{"perPage":"8","pages":0,"offset":0,"postType":"jetpack-portfolio","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"taxQuery":{"jetpack-portfolio-type":[]}},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"style":{"typography":{"lineHeight":"0"}},"layout":{"type":"default"}} -->
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}},"border":{"bottom":{"color":"var:preset|color|dark-gray","width":"2px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="border-bottom-color:var(--wp--preset--color--dark-gray);border-bottom-width:2px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:0;padding-bottom:var(--wp--preset--spacing--50);padding-left:0"><!-- wp:columns {"verticalAlignment":"center","align":"full","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignfull are-vertically-aligned-center" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:post-title {"isLink":true,"fontSize":"x-large"} /-->

<!-- wp:post-featured-image {"className":"hidden"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"25%","className":"categories"} -->
<div class="wp-block-column is-vertically-aligned-center categories" style="flex-basis:25%"><!-- wp:post-terms {"term":"jetpack-portfolio-type","style":{"typography":{"lineHeight":1.6}},"fontSize":"medium"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"25%","className":"tags"} -->
<div class="wp-block-column is-vertically-aligned-center tags" style="flex-basis:25%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"jetpack-portfolio-tag","separator":"","style":{"typography":{"lineHeight":"3.2","textTransform":"uppercase"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"10%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:10%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:read-more {"content":"\u003cimg class=\u0022wp-image-319\u0022 style=\u0022width: 36px;\u0022 src=\u0022<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/arrow.png\u0022 alt=\u0022\u0022\u003e"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

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