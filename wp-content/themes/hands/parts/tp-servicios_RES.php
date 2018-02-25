<?php

$args = array(
    'post_type' => 'servicio',
    'orderby' => 'menu_order',
    'order' => 'DESC',
    'posts_per_page' => -1
);

$servicios = new WP_Query($args);
$id=get_the_ID();

?>
<div class="row nomargin">
    <?php foreach ($servicios->posts as $s) {
        $show=0;
        $provincia = get_field('provincia', $s->ID);

        if( ($id=="147") && ($provincia=="valladolid"))
            $show=1;

        if( ($id=="149") && ($provincia=="palencia"))
            $show=1;

        if( ($id=="155") && ($provincia=="leon"))
            $show=1;

        if($show==1){
        ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 nopadding">
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
    <?php 
        }
    }?>
</div>
<?php foreach ($servicios->posts as $s) {
    
    $provincia = get_field('provincia', $s->ID);
    $landing = get_field('landing', $s->ID);
    $url = get_field('url', $s->ID);

//    print_r($s);
    
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
                <?php //if($landing || $url){?>
                <!--<a class="link" href="<?php echo $landing ? get_permalink($landing) : $url?>">-->
                <a class="link" href="<?php echo $s->post_name?>">
                    <span class="v">Seguir leyendo</span>
                </a>
                <?php //}?>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>

<?php } ?>