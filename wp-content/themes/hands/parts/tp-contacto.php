<?php
global $provincia;

//$titulo_formulario = get_field('titulo_formulario', 'option');
$contenido_formulario = get_field('contenido_formulario', 'option');
$formulario = get_field('formulario', 'option');
$titulo_formulario="Contacta con Eudita ".ucwords($provincia);

if( $provincia=="valladolid")
{
    $contact=do_shortcode('[contact-form-7 id="227" title="Formulario contacto"]');
}

if($provincia=="palencia")
{
    $contact=do_shortcode('[contact-form-7 id="225" title="Formulario contacto"]');
}

if( $provincia=="leon")
{
    $contact=do_shortcode('[contact-form-7 id="224" title="Formulario contacto"]');
}
 

?>
<div class="contacto bg-defaul">
    <div class="container">
        <div class="col-xs-12 bot-xs col-sm-6 col-md-7 col-lg-8">
            <div class="medium-padding wow animated slideInLeft" data-wow-duration="1s">
                <h2 class="bot-all"><?php echo $titulo_formulario?></h2>
                <div class="content">
                    <?php echo $contenido_formulario?>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-5 col-lg-4">
            <div class="wow animated slideInRight" data-wow-duration="1s">
                <?php echo do_shortcode('[contact-form-7 id="' . $formulario . '" title="Formulario contacto"]')?>
                <?php //echo $contact?>
            </div>
        </div>
    </div>
</div>