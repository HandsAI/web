<?php 

$copyright = get_field('copyright', 'option');

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
<div id="footer" role="contentinfo">
    <div class="actions small-padding">
        <div class="container">
            <div class="social socialA bot-all">
                <?php echo do_shortcode('[vinculos_redes]')?>
            </div>
            <div class="clearfix"></div>
            
            <div>
            <div class="menu-menu-pie-container"><ul id="menu-menu-pie" class="menu"><li id="menu-item-27" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-27"><a href="<?php echo $logo_url;?>">Inicio</a></li>
            <li id="menu-item-29" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-29">
            <a href="<?php echo $url_servicio?>">Servicios</a>
            </li>
            <li id="menu-item-29" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-29">
            <a href="<?php echo $url_privacidad?>">Politica de Privacidad</a>
            </li>
            </ul>
            </div>
            </div>


            <?php //if(!function_exists('dynamic_sidebar') ||
                //!dynamic_sidebar('footer-sidebar')) :?>
            <?php //endif; ?>
            <div class="clearfix"></div>
        </div>        
    </div>
    <div class="copy small-padding">
        <div class="container">
            <?php echo $copyright?>
        </div>
    </div>
</div><!-- #footer -->