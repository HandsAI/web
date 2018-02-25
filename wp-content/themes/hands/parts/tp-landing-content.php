<?php

$content = apply_filters('the_content', $post->post_content);

?>
<div class="landing-content medium-padding">
    <div class="container">
        <div class="text">
            <h1><?php echo $post->post_title?></h1>
            <p></p>
            <?php echo $content?>
            <div class="clearfix"></div>
        </div>
    </div>
</div>