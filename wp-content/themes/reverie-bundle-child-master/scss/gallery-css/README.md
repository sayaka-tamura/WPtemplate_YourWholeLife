## Acknowledgements
This code uses examples and ideas from this tutorial: [http://logoscreative.co/taking-control-of-wordpress-gallery-styling-without-a-plugin](http://logoscreative.co/taking-control-of-wordpress-gallery-styling-without-a-plugin)

The polaroid css is taken from this tutorial: [http://zurb.com/playground/css3-polaroids](http://zurb.com/playground/css3-polaroids)

## Instructions

1. Open functions.php and copy the lines indicated
2. Paste those lines into your functions.php
3. Use one of the css files to help you get started
    * blank.css just gives you some of the rules you can use
    * circle-images.css shows you how to make the images circles and float them next to each other
    * polaroid effect.css shows how to make the images look like polaroids.  

## Notes
Tips on implementing the styles

1. Don't add any columns if you want it to be responsive and be able to change the number of columns wit media queries. When you add columns WordPress adds br elements with clears on them.

        So the gallery should look something like `[gallery link="file" ids="219,217,143,133" columns="0"]`

2. The size of the thumbnail is controlled by the setting in Settings > Media for thumbnail.

3. If you have to change the size after you have uploaded images, you can use the Force Regenerate Thumbnails plugin to regenerate them, but it takes a while so give yourself time and don't do it too often.

    Search for it in your Plugins area or take a look at its page: https://wordpress.org/plugins/force-regenerate-thumbnails
    
4. When you're creating a gallery make sure to choose the file as the link (not attachment). An example of the kind of shortcode you should have is:
    `[gallery link="file" columns="0" ids="219,217,143,133"]`

### Gallery Shortcodes
You can create gallerys through the wysiwyg post tool which is just a way of writing gallery shortcodes. If you go into the text view tab you can see the shortcodes. You can also just edit or add them there too. 

For more information on Gallery Shortcodes visit the [WordPress Codex page](http://codex.wordpress.org/Gallery_Shortcode)
