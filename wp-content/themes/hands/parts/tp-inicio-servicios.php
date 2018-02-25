<?php

$imagen_servicios = get_field('imagen_servicios', $post->ID);
$titulo_servicios = get_field('titulo_servicios', $post->ID);
$contenido_servicios = get_field('contenido_servicios', $post->ID);
$pagina_servicios = get_field('pagina_servicios', $post->ID);

/*
$args = array(
    'post_type' => 'servicio',
    'orderby' => 'rand',
    'posts_per_page' => 4
);
*/

$args = array(
    'post_type' => 'page',
    'orderby' => 'rand',
    'posts_per_page' => 200

);

$id=get_the_ID();
$servicios = new WP_Query($args);


   
?>
<div id="servicios">
    <div class="row nomargin">
        <div class="col-xs-12 col-md-6 nopadding">
            <div class="simg cover wow animated slideInLeft" data-wow-duration="1s" style="background-image: url('<?php echo $imagen_servicios?>')">
                <div class="content">
                    <div class="t">
                        <?php echo $titulo_servicios?>
                    </div>
                    <div class="c">
                        <?php echo $contenido_servicios?>
                    </div>
                    <a class="transition" href="<?php echo get_permalink($pagina_servicios)?>">
                        Ver todos
                    </a>
                </div>
            
            </div>
        </div>
        <div class="col-xs-12 col-md-6 nopadding">
            <div class="row nomargin">
                <?php 

                 $num=0;
                foreach ($servicios->posts as $s) {
                
                $landing = get_field('landing', $s->ID);
                $url = get_field('url', $s->ID);
                $show=0;
                $provincia = get_field('provincia', $s->ID);
               // echo "IDx: $id $provincia";
                if( ($id=="617") && ($provincia=="valladolid"))
                    $show=1;

                if( ($id=="149") && ($provincia=="palencia"))
                    $show=1;

                if( ($id=="321") && ($provincia=="leon"))
                    $show=1;

                if($num==4)
                    $show=0;

                if( ($s->ID=="606") || ($s->ID=="607") || ($s->ID=="99") || ($s->ID=="6") || ($s->ID=="9") || ($s->ID=="149") || ($s->ID=="147") || ($s->ID=="321") || ($s->ID=="660") || ($s->ID=="662") || ($s->ID=="663") || ($s->ID=="617")   )
                    $show=0;

               // echo "****".$s->ID." / Show: ".$show;

                if($show==1){   
                    $num++;

                




                //foreach ($servicios->posts as $s) {
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

<?php 
    $num=0;
    foreach ($servicios->posts as $s) {
    
    $landing = get_field('landing', $s->ID);
    $url = get_field('url', $s->ID);
    $show=0;
    $provincia = get_field('provincia', $s->ID);

    if( ($id=="147") && ($provincia=="valladolid"))
        $show=1;

    if( ($id=="149") && ($provincia=="palencia"))
        $show=1;

    if( ($id=="155") && ($provincia=="leon"))
        $show=1;

    if($num==4)
        $show=0;

    if( ($s->ID=="606") || ($s->ID=="607") || ($s->ID=="99") || ($s->ID=="6") || ($s->ID=="9")   )
        $show=0;

    if($show==1){   
        $num++;


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
                <a class="link" href="/<?php echo $landing ? get_permalink($landing) : $url?>">
                    <span class="v">Seguir leyendo</span>
                </a>
                <?php }?>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>

<?php }
 } ?>
