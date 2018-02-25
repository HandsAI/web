<?php

$imagen_servicios = get_field('imagen_servicios', $post->ID);
$titulo_servicios = get_field('titulo_servicios', $post->ID);
$contenido_servicios = get_field('contenido_servicios', $post->ID);
$pagina_servicios = get_field('pagina_servicios', $post->ID);

$servicios = get_field('servicios', $post->ID);

?>
<div id="servicios" class="landing">
    <div class="row nomargin">
        <div class="col-xs-12 col-md-6 nopadding">
            <div class="contenta wow animated slideInLeft" data-wow-duration="1s">
                <div class="t">
                    <?php echo $titulo_servicios?>
                </div>
                <div class="clearfix"></div>
                <div class="c">
                    <?php echo $contenido_servicios?>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="simg cover" style="background-image: url('<?php echo $imagen_servicios?>')"></div>
        </div>
        <div class="col-xs-12 col-md-6 nopadding">
            <div class="row nomargin">
                <?php foreach ($servicios as $se) { $s = $se['servicio']; ?>
                <div class="col-xs-12 col-sm-3 col-md-6 nopadding">
                    <div class="servicio wow animated bounceIn" data-wow-duration="1s">
                        <div class="i cover transition" style="background-image: url('<?php echo wp_get_attachment_url(get_post_thumbnail_id($s->ID))?>')"></div>
                        <a href="#service-modal-<?php echo $s->ID?>" class="no-decore" data-toggle="modal" role="button">
                            <div class="opacer transition">
                                <div class="content transition">
                                    <div class="t transition">
                                        <?php echo $s->post_title?>
                                    </div>
                                    <div class="c">
                                        <?php echo sub($s->post_content, 100)?>
                                    </div>
                                    <div class="a">
                                        Ver más
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
</div>

<?php foreach ($servicios as $se) {
    
    $s = $se['servicio'];
    
    $landing = get_field('landing', $s->ID);
    $url = get_field('url', $s->ID);
    
    ?>

<!-- Service modal <?php echo $s->ID?> -->
<div class="modal fade" tabindex="-1" role="dialog" id="service-modal-<?php echo $s->ID?>" aria-labelledby="service-modal-<?php echo $s->ID?>" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <h3 class="title bot-all"><?php echo $s->post_title?></h3>
                <div class="content bot-all">
                    <?php echo apply_filters('the_content', $s->post_content)?>
                </div>
                <?php if($landing || $url){?>
                <a class="link" href="<?php echo $landing ? get_permalink($landing) : $url?>">
                    <span class="v">Seguir leyendo</span>
                </a>
                <?php }?>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>

<?php } ?>
