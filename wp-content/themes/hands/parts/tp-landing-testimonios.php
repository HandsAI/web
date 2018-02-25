<?php

$titulo_testimonios = get_field('titulo_testimonios', $post->ID);
$testimonios_asociados = get_field('testimonios_asociados', $post->ID);

?>
<div class="testimonios medium-padding">
    <div class="container">
        <h3 class="bot-xs bot-sm bot-md bot-lg">
            <?php echo $titulo_testimonios?>
        </h3>
        <div class="clearfix"></div>
        <?php if(is_array($testimonios_asociados)){?>
        <div id="testimonios">
            <?php foreach ($testimonios_asociados as $t) {?>
            <div class="testimonio">
                <div class="cover pict" <?php if(has_post_thumbnail($t['testimonio']->ID)){?>style="background-image: url('<?php echo wp_get_attachment_url(get_post_thumbnail_id($t['testimonio']->ID))?>')"<?php }?>></div>
                <div class="content">
                    <?php echo $t['testimonio']->post_content?>
                    <div class="t text-right">
                        <b><?php echo $t['testimonio']->post_title?></b>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>   
            <?php }?>
        </div>
        <?php }?>
    </div>
    <div class="clearfix"></div>
</div>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('#testimonios').slick({
            infinite: true,
            dots: true,
            prevArrow: false,
            nextArrow: false,
            slidesToShow: 2,
            slidesToScroll: 2,
            autoplay: true,
            autoplaySpeed: 8000,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                      slidesToShow: 1,
                      slidesToScroll: 1
                    }
                }
            ]
        });
    });
</script>