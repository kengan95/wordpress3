(function ($) {
  'use strict'

  function generalFunctions() {
    // Start Marquee
    $('.marquee').each(function () {
      var $this = $(this); // Store the current .marquee
      for(var i = 0; i < 1; i++) {
        var $cloneOfGroup = $this.find('.marquee__group:first').clone(); // Clone the first .marquee__group
        // Add aria-hidden to all elements in the clone
        $cloneOfGroup.find('*').attr('aria-hidden', 'true');
        // Append the clone to the current .marquee
        $this.append($cloneOfGroup);
      }
    });
    $('.marquee .marquee__group').each(function () {
      var $this = $(this); // Store the current .marquee__group
      for(var i = 0; i < 1; i++) {
        var $cloneOfText = $this.contents().clone().attr('aria-hidden', 'true'); // Clone the text and add aria-hidden
        // Append the cloned text to the current .marquee__group
        $this.append($cloneOfText);
      }
    });

    // Filters Panel
    // Initially hide the filters-panel
    $(".filters-panel").css({
      'right': '-100%',
      'position': 'fixed'
    });
    // Open the filters-panel
    $(".product-filter-button").click(function() {
      $(".filters-panel").animate({
        right: '0'
      });
    });
    // Close the filters-panel
    $(".product-filter-close").click(function() {
      $(".filters-panel").animate({
        right: '-100%'
      });
    });

    // Tiled gallery captions
    $('.tiled-gallery__gallery a:has(img[data-image-caption])').each(function() {
      // Extract the caption from the data attribute
      var caption = $(this).find('img').attr('data-image-caption');

      // Check if the caption exists and is not empty
      if (caption && caption.trim() !== '') {
        // Create a new <div> element to hold the caption text
        // You can replace <div> with <p> or any other tag as needed
        var captionEl = $('<div>', {
          class: 'image-caption', // Add a class for possible styling
          html: caption // Set the inner HTML to the caption text
        });

        // Insert the caption element directly after the <a> tag
        $(this).after(captionEl);
      }
    });

    // Portfolio list pattern image reveal
    $('.wp-block-post').hover(function(e) {
      // Find the hidden image within this list item
      var $hiddenImage = $(this).find('.wp-block-post-featured-image.hidden');
  
      // Show the hidden image and apply initial styling
      $hiddenImage.css({
        'display': 'block', // Show the image
        'position': 'absolute',
        'z-index': '99', // Ensure it appears above other content
        'pointer-events': 'none', // Allows mouse events to pass through it
        'min-width': '480px', // Optional: Set max width to control image size
        'max-width': '480px', // Optional: Set max width to control image size
        'height': 'auto' // Maintain aspect ratio
      });
  
      // Move the image with the cursor
      $(document).mousemove(function(e) {
        $hiddenImage.offset({
          top: e.pageY + 24, // Offset from the cursor or as needed
          left: e.pageX + 24
        });
      });
    }, function() {
      // On hover out, hide the image
      $(this).find('.wp-block-post-featured-image.hidden').css('display', 'none');
    });
  }

  $(document)
    .ready(generalFunctions)
})(jQuery)
