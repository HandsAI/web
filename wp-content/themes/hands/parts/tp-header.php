<?php

// logo
$logo = get_field('logo', 'option');
$texto_cabecera = get_field('texto_cabecera', 'option');
global $provincia;



    //provinvia
    global $prov;
    $prov = 'leon';
    $logo_url= get_bloginfo( 'url' );
    
    $provincia = get_field('provincia', get_the_ID());

    if( $provincia=="valladolid")
    {
        $logo_url="../../../valladolid";
        $url_servicio='../../../servicios-valladolid';
        $url_privacidad='../../../politica-privacidad-valladolid';
    }

    if($provincia=="palencia")
    {
        $logo_url="../../../palencia";
        $url_servicio='../../../servicios-palencia';
        $url_privacidad='../../../politica-privacidad-palencia';
    }

    if( $provincia=="leon")
    {
        $logo_url="../../../leon";
        $url_servicio='../../../servicios-leon';
        $url_privacidad='../../../politica-privacidad-leon';
        
    }


?>

<!--<div id="right_menu" class="transition">-->
    <?php //wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary')); ?>
<!--</div>-->
<div id="right_menu" class="transition">
    <div class="menu-header">

    <ul id="menu-menu" class="menu">
    <li id="menu-item-146" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-146"><a href="<?php echo $logo_url;?>">Inicio</a></li>
    <li id="menu-item-145" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-145"><a href="<?php echo $url_servicio?>">Servicios</a></li>
    <li id="menu-item-143" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-143"><a href="<?php echo $url_privacidad?>">Política de Privacidad </a></li>
    </ul>
    </div>
</div>


<div id="header" class="transition">
    <div class="container">
        <div class="data">
            <div class="actions inline-top hidden-xs">
                <div class="social socialA">
                    <?php echo do_shortcode('[vinculos_redes]')?>
                </div>
                <div class="phone">
                
                <a href="#solicitar" class="no-decore wow animated slideInRight animated" data-wow-duration="1s" data-toggle="modal" role="button" style="visibility: visible; animation-duration: 1s; animation-name: slideInRight;">
                <?php echo $texto_cabecera?>
                </a>

    
                </div>
            </div>
            <a href="#header" onclick="jQuery('.hamburger, #right_menu').toggleClass('open');">
                <div class="hamburger transition inline-top">
                    <div class="inner">
                        <div class="hamburger-inner"></div>
                    </div>
                </div>
            </a>            
        </div>
        <a href="<?php echo $logo_url?>">
            <img class="site-logo" src="<?php echo $logo?>" alt="<?php bloginfo( 'name' );?>"/>
        </a>
    </div>
</div>