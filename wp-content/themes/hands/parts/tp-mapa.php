<?php

$url_mapa = get_field('url_mapa', 'option');

global $provincia;

if( $provincia=="valladolid")
{
    $url_mapa = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1746.3046049064635!2d-5.580971247495633!3d42.59938641981089!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x25bfdd5a20f8f4a8!2sEudita+Censors+Juries+S+L+P!5e0!3m2!1ses!2ses!4v1491827797701';

}

if($provincia=="palencia")
{
    $url_mapa = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2964.5181967450685!2d-4.534143390449949!3d42.01061464492048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd47b0487c06ad61%3A0xd178c4ef6306aaf0!2sCalle+Jos%C3%A9+Zorrilla%2C+1%2C+34001+Palencia!5e0!3m2!1ses!2ses!4v1494241377595';
}

if( $provincia=="leon")
{
    $url_mapa = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1746.3046049064635!2d-5.580971247495633!3d42.59938641981089!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x25bfdd5a20f8f4a8!2sEudita+Censors+Juries+S+L+P!5e0!3m2!1ses!2ses!4v1491827797701';
}



?>
<div class="gmap">
    <iframe src="<?php echo $url_mapa?>" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
</div>