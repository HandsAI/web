jQuery(document).ready(function(){
    
    // fancyboxiframe
    jQuery("a.fancyboxiframe, a.fancybox.iframe").fancybox({
        'width'             : '75%',
        'height'            : '75%',
        'overlayColor'      : '#000',
        'overlayOpacity'    : 0.8,
        'transitionIn'      : 'elastic',
        'transitionOut'     : 'elastic',
        'type'              : 'iframe'/*,
        afterLoad           : function(e) {
            jQuery(e.inner).find('iframe').attr({
                'webkitallowfullscreen': true,
                'mozallowfullscreen': true,
                'allowfullscreen' : 'allowfullscreen'
            });
            alert('afterLoad');
        },
        onComplete          : function(){   
            alert('onComplete');
            jQuery('#fancybox-frame').attr('allowfullscreen', 'allowfullscreen');
        }*/
    });
    
    // fancybox
    jQuery("a.fancybox").fancybox({
        'width'             : '75%',
        'height'            : '75%',
        'overlayColor'      : '#000',
        'overlayOpacity'    : 0.8,
        'transitionIn'      : 'elastic',
        'transitionOut'     : 'elastic',
        padding : 2
    });
    
});


