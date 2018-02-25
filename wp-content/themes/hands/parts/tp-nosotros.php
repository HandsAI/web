<?php

$imagen_1_nosotros = get_field('imagen_1_nosotros', $post->ID);
$titulo_nosotros = get_field('titulo_nosotros', $post->ID);
$contenido_nosotros = get_field('contenido_nosotros', $post->ID);
$imagen_2_nosotros = get_field('imagen_2_nosotros', $post->ID);

$frase_1_nosotros = get_field('frase_1_nosotros', $post->ID);
$imagen_3_nosotros = get_field('imagen_3_nosotros', $post->ID);
$frase_2_nosotros = get_field('frase_2_nosotros', $post->ID);

$titulo_2_nosotros = get_field('titulo_2_nosotros', $post->ID);
$contenido_2_nosotros = get_field('contenido_2_nosotros', $post->ID);
$bloques_nosotros = get_field('bloques_nosotros', $post->ID);

?>
<div id="nosotros">
    <div class="row nomargin">
        <div class="col-xs-12 col-sm-4 nopadding">
            <div class="img cover wow animated slideInleft" data-wow-duration="1s" style="background-image: url('<?php echo $imagen_1_nosotros?>')"></div>
        </div>
        <div class="col-xs-12 col-sm-4 nopadding">
            <div class="content wow animated bounceIn" data-wow-duration="1s">
                <h3 class="title bot-all">
                    <?php echo $titulo_nosotros?>
                </h3>
                <div class="text bot-all transition" id="text-nosotros">
                    <?php echo $contenido_nosotros?>
                </div>
                <a class="anime_text transition" data-target="#text-nosotros">
                    <span class="v">Ver más</span>
                    <span class="h">Cerrar</span>
                </a>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 nopadding">
            <div class="img cover wow animated slideInRight" data-wow-duration="1s" style="background-image: url('<?php echo $imagen_1_nosotros?>')"></div>
        </div>
    </div>
    <div class="frase">
        <div class="row nomargin">
            <div class="col-xs-12 col-sm-4 col-md-3 nopadding">
                <div class="t wow animated slideInLeft" data-wow-duration="1s">
                    <?php echo $frase_1_nosotros?>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-6 nopadding">
                <div class="img cover wow animated bounceIn" data-wow-duration="1s" style="background-image: url('<?php echo $imagen_3_nosotros?>')"></div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-3 nopadding">
                <div class="t wow animated slideInRight" data-wow-duration="1s">
                    <?php echo $frase_2_nosotros?>
                </div>
            </div>
        </div>
    </div>
    <div class="second">
        <div class="row">
            <div class="col-xs-12 col-sm-7 col-md-8">
                <div class="content wow animated slideInLeft" data-wow-duration="1s">
                    <h3 class="title bot-all">
                        <?php echo $titulo_2_nosotros?>
                    </h3>
                    <div class="bot-all transition">
                        <?php echo $contenido_2_nosotros?>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-5 col-md-4">
                <div class="content wow animated slideInRight" data-wow-duration="1s">
                    <?php if(is_array($bloques_nosotros)){
                        foreach ($bloques_nosotros as $b) {?>
                    <div class="b bot-all">
                        <h4><?php echo $b['titulo_bloque']?></h4>
                        <div>
                            <?php echo $b['contenido_bloque']?>
                        </div>
                    </div>
                        <?php }
                    }?>
                </div>
            </div>
        </div>
    </div>
</div>