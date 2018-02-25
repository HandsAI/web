<?php

//$telefono = get_field('telefono', 'option');

global $provincia;


if( $provincia=="valladolid")
{
    $telefono='983 63 60 36';
}

if($provincia=="palencia")
{
    $telefono='979 69 29 67';
}

if( $provincia=="leon")
{
    $telefono='987 070 007';
}

?>
<div class="call small-padding bg-defaul">
    <div class="container">
        <div class="col-xs-12 bot-xs col-sm-6">
            <div class="phone wow animated slideInLeft" data-wow-duration="1s">
                LLÁMENOS<br>
                <b><?php echo $telefono?></b>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6">
            <a href="#solicitar" class="no-decore wow animated slideInRight" data-wow-duration="1s" data-toggle="modal" role="button">
                solicita información sin compromiso
            </a>
        </div>
    </div>
</div>