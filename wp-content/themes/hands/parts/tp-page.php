<?php

$content = apply_filters('the_content', $post->post_content);

?>
<div class="page-content medium-padding">
    <div class="container">
        <?php echo $content?>
    </div>
</div>