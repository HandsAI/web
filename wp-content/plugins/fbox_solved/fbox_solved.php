<?php

/*
Plugin Name: FBOX - Solved
Plugin URI: http://kreativeimagen.com
Description: Plugin para insertar fancybox al sitio worpdress, evitando bugs del plugin oficial.
Version: 1.0
Author: Dayron Rámida Coll
Author URI: www.creare-up.com/dvdayron
*/

function fbox_include_scripts(){
    
    $jquery_include = plugins_url('fbox_solved/fancybox/jquery.js'); ?>
    <script>
        !window.jQuery && document.write('<script src="<?php echo $jquery_include?>"><\/script>');
    </script>
    <?php
    
    wp_enqueue_style('fancyboxcss', plugins_url('fbox_solved/fancybox/jquery.fancybox-1.3.4.css') );
    wp_enqueue_script('jquery.mousewheel', plugins_url('fbox_solved/fancybox/jquery.mousewheel-3.0.4.pack.js'));
    wp_enqueue_script('jquery.fancybox', plugins_url('fbox_solved/fancybox/jquery.fancybox-1.3.4.js'));
    wp_enqueue_script('fbox_functions', plugins_url('fbox_solved/functions.js'));
}

//incluir scripts de cabecera
add_action( 'wp_head', 'fbox_include_scripts' ); 