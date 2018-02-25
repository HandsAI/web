<?php

$imagen_parallax = get_field('imagen_parallax', $post->ID);
$titulo_parallax = get_field('titulo_parallax', $post->ID);
$contenido_parallax = get_field('contenido_parallax', $post->ID);
$texto_enlace_parallax = get_field('texto_enlace_parallax', $post->ID);
$url_parallax = get_field('url_parallax', $post->ID);

?>
<div class="parallax large-padding" style="background-image: url('<?php echo $imagen_parallax?>')" data-stellar-background-ratio="0.1" >
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-5">
                <h3 class="bot-all wow animated slideInDown" data-wow-duration="1s">
                    <?php echo $titulo_parallax?>
                </h3>
                <div class="bot-all content wow animated bounceInUp" data-wow-duration="1s">
                    <?php echo $contenido_parallax?>
                </div>
                <a href="<?php $url_parallax?>" class="wow animated bounceIn" data-wow-duration="1s">
                    <?php echo $texto_enlace_parallax?>
                </a>
            </div>
        </div>
    </div>
</div>