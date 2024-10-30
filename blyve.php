<?php
/*
Plugin Name: Live Blog
Plugin URI: http://blyve.com
Description: Used by thousands of live bloggers, Blyve is the best way for you to live blog your event.  To get started: 1) Click the "Activate" link to the left of this description, 2) Sign up at http://blyve.com and create your live event (take note of the ID in the browser bar, you'll need that). 3) Start a new post on your blog and add the shortcode using the ID you took note of: [blyve id="2134df834jhdf9" width="400" height="550"].  That's it!  Once you publish your post, your audience will be able to see your live event.  Be sure to stay on blyve.com to provide updates and manage your event.
Version: 1.0.2
Author: Blyve
Author URI: http://blyve.com
License: GPL2
*/

function blyve_func ($atts)
{
   extract (
      shortcode_atts (array ('id' => null, 'width' => 400, 'height' => 550), $atts)
   );

   return <<<EOT
<iframe id="BlyveEvent" width="$width" height="$height" frameborder="0" src="http://blyve.com/embed/$id"> </iframe><div><a href="http://www.blyve.com" title="Blyve liveblog liveblogging platform" style="display: block; color: #000000; font-weight: normal; font-size: 10px; text-decoration: underline;" target="_blank">Powered by Blyve</a></div>
EOT;
}

add_shortcode ('blyve', 'blyve_func');
?>
