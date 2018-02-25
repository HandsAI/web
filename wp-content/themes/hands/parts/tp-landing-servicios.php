<?php

$imagen_servicios = get_field('imagen_servicios', $post->ID);
$titulo_servicios = get_field('titulo_servicios', $post->ID);
$contenido_servicios = get_field('contenido_servicios', $post->ID);
$pagina_servicios = get_field('pagina_servicios', $post->ID);

//$servicios = get_field('servicios', $post->ID);

$args = array(
    'post_type' => 'page',
    'orderby' => 'menu_order',
    'orderby' => 'rand',
    'posts_per_page' => -1
);
 
$servicios = new WP_Query($args);
$id=get_the_ID();
$provinciax = get_field('provincia', $id);

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
                <?php //foreach ($servicios as $se) { 
                    //$s = $se['servicio']; ?>

            <?php 
            $num=0;
            foreach ($servicios->posts as $s) {
                $show=0;
                $provincia = get_field('provincia', $s->ID);

                if( $provinciax == $provincia)
                    $show=1;


                if( ($s->ID=="606") || ($s->ID=="607") || ($s->ID=="99") || ($s->ID=="6") || ($s->ID=="9") || ($s->ID=="149") || ($s->ID=="147") || ($s->ID=="321") || ($s->ID=="660") || ($s->ID=="662") || ($s->ID=="663")  || ($s->ID=="617")   )
                 $show=0;

                if($num>=6)
                    $show=0;

                if($show==1){
                    $num++;
                ?>

                <div class="col-xs-12 col-sm-3 col-md-6 nopadding">
                    <div class="servicio wow animated bounceIn" data-wow-duration="1s">
                        <div class="i cover transition" style="background-image: url('<?php echo wp_get_attachment_url(get_post_thumbnail_id($s->ID))?>')"></div>
                        <a href='/<?php echo $s->post_name ?>' class="no-decore"  role="button">
                            <div class="opacer transition">
                                <div class="content transition">
                                    <div class="t transition">
                                        <?php echo $s->post_title?>
                                    </div>
                                    <div class="c">
                                        <?php echo sub($s->post_content, 100)?>
                                    </div>
                                    <div class="a">
                                        <a class="a" href='/<?php echo $s->post_name ?>'>Ver más</a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <?php }
                }?>
            </div>
        </div>
    </div>
</div>

