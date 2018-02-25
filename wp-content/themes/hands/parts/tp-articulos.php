<?php

$listado_articulos = get_field('listado_articulos', $post->ID);

if(is_array($listado_articulos)){ 
    
    $is_left = true;
    
    foreach ($listado_articulos as $key => $a) {?>
<div class="article <?php if(!$is_left){ echo 'is_right'; }?>">
    <div class="row nomargin">
        <div class="col-xs-12 col-sm-5 nopadding <?php if(!$is_left){ echo 'visible-xs'; }?> wow animated slideInLeft" data-wow-duration="1s">
            <div class="img cover" style="background-image: url('<?php echo $a['imagen_articulo']?>')"></div>
        </div>
        <div class="col-xs-12 col-sm-7 nopadding">
            <div class="content wow animated bounceIn" data-wow-duration="1s">
                <h3 class="title bot-all">
                    <?php echo $a['titulo_articulo']?>
                </h3>
                <div class="text bot-all transition" id="text-<?php echo $key?>">
                    <?php echo $a['contenido_articulo']?>
                </div>
                <a class="anime_text transition" data-target="#text-<?php echo $key?>">
                    <span class="v">Seguir leyendo</span>
                    <span class="h">Cerrar</span>
                </a>
                <div class="clearfix"></div>
            </div>
        </div>
        <?php if(!$is_left){?>
        <div class="col-xs-12 col-sm-5 nopadding hidden-xs wow animated slideInRight" data-wow-duration="1s">
            <div class="img cover" style="background-image: url('<?php echo $a['imagen_articulo']?>')"></div>
        </div>
        <?php }?>
    </div>
</div>
    <?php $is_left = !$is_left; }

} ?>
