<?php
/**
 * Title: About Multi-Column
 * Slug: portfolio-wp/about-multi-column
 * Categories: portfolio-wp-about
 *
 * @package Portfolio WP
 * @since Portfolio WP 1.0
 */

if( ! PWP_EDD::is_valid() ){ return; };
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"className":"about-pattern is-style-default","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull about-pattern is-style-default" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"align":"wide","style":{"typography":{"lineHeight":"1.3","letterSpacing":"0px"}},"fontSize":"gigantic"} -->
<h2 class="wp-block-heading alignwide has-gigantic-font-size" style="letter-spacing:0px;line-height:1.3">Hey, <span style="font-size: 90%;">👋</span><br>I'm <span class="highlighter">Emily Jackson.</span></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"80px"} -->
<div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"16%"} -->
<div class="wp-block-column" style="flex-basis:16%"><!-- wp:image {"id":391,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
<figure class="wp-block-image size-full is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/people/female-02.jpg" alt="" class="wp-image-391"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"56%"} -->
<div class="wp-block-column" style="flex-basis:56%"><!-- wp:paragraph -->
<p><strong>ABOUT</strong><br>As a seasoned Staff Product Designer, I bring over ten years of experience to the table, crafting innovative designs that stand at the crossroads of technology and creativity. My journey in design is driven by an unwavering passion for exploring how design principles can seamlessly integrate with cutting-edge technology to create compelling user experiences.<br><br>Currently, my exploration has led me to dive deep into the realms of SwiftUI &amp; 3D design, where I am constantly pushing the boundaries of what's possible. Additionally, my fascination with Augmented Reality (AR) technology and its myriad applications has opened up new avenues for innovation, allowing me to experiment with how AR can transform everyday interactions.<br><br>Through my work, I aim to continue blending the art of design with the science of technology, creating memorable products that not only look beautiful but also enhance the way we interact with the world around us.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"width":"2px"}},"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#" style="border-width:2px">Resume</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph -->
<p><strong>GET IN TOUCH</strong><br><a href="mailto:team@portfoliowp.com">team@portfoliowp.com</a><br>(555) 555-8575</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"80px"} -->
<div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Education &amp; Experience</h2>
<!-- /wp:heading --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"16%"} -->
<div class="wp-block-column" style="flex-basis:16%"></div>
<!-- /wp:column -->

<!-- wp:column {"fontSize":"small"} -->
<div class="wp-block-column has-small-font-size"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|medium-gray"}}}},"textColor":"medium-gray"} -->
<p class="has-medium-gray-color has-text-color has-link-color">2009</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong>BACHELOR DEGREE<br></strong>Rutgers University</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Design &amp; Information Technology</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"fontSize":"small"} -->
<div class="wp-block-column has-small-font-size"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|medium-gray"}}}},"textColor":"medium-gray"} -->
<p class="has-medium-gray-color has-text-color has-link-color">2009 - 2014</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong>MOBILE UI / UX LEAD<br></strong>AT&amp;T Mobile<br><br><strong>CREATIVE DIRECTOR<br></strong>Fusion Design</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong>MOBILE DESIGN LEAD</strong><br>Travelocity</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"fontSize":"small"} -->
<div class="wp-block-column has-small-font-size"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|medium-gray"}}}},"textColor":"medium-gray"} -->
<p class="has-medium-gray-color has-text-color has-link-color">2014 - 2023</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong>STAFF INTERACTION DESIGNER<br></strong>Google Android</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong>UX LEAD - THE GOOGLE APP<br></strong>Google iOS</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong>10+ PATENTS</strong><br>Google</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->