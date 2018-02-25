<?php

$slider_shortcode = get_field('slider_shortcode', $post->ID);

if($slider_shortcode){?>
<div class="myslider">
    <?php echo do_shortcode($slider_shortcode)?>
</div>
<?php }?>