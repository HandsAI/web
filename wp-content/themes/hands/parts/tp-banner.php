<?php

$imagen_banner = get_field('imagen_banner', $post->ID);
$titulo_banner = get_field('titulo_banner', $post->ID);

?>
<div class="banner cover" style="background-image: url('<?php echo $imagen_banner ? $imagen_banner : _dir . 'banner.jpg'?>')">
    <div class="container">
        <h2 class="wow animated slideInRight" data-wow-duration="1s"><?php echo $titulo_banner ? $titulo_banner : $post->post_title?></h2>
    </div>
</div>