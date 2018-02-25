<?php

namespace ots;
//canpalte
?>
 

    <?php 
    $q=0;
    $j=0;
    //$members="";
    if ( $members->have_posts() ) : ?>

        <?php while ( $members->have_posts() ) : $members->the_post(); 

         $back_img="";
         if( has_post_thumbnail( @$member ) ) {
           $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
           $back_img= esc_url($featured_img_url); 
          } 

          $email= get_post_meta( get_the_ID(), 'team_member_email', true ) ;
          $linkedin= get_post_meta( get_the_ID(), 'team_member_linkedin', true ) ;
          
          

        if($q==4)
          $q=0;

        if($q==0)
        {
        

            if($j>0)
            {
            ?>  
            </div> </div> </div>
            <?php }

            ?>
            <!-- ================= slide  -->
                  <div class="slide" data-thumb="images/slider/boxed/thumbs/2.jpg">
                  <div class="container clearfix">
                  <div class="row">
           
            <?php 

            $j++;
            } 
            $q++;
            ?>


                <div class="col-sm-12 col-md-3">
                    <div style="text-align: center" class="thumbnail" id="tm_thumbnail">
                    <a href="#" data-toggle="modal" data-target="#myModal5">
                      <img class="img-circle" id="team_img" height="190" style="background: url('<?php echo $back_img?>');" draggable="false">
                      <div class="ch-info">
                          <h3>Use what you have</h3>
                          <p>by Francisco Ramirez</p>
                      </div>
                    </a>
                    <div class="caption">
                      <h5><?php the_title() ?></h5>
                    </div>
                    <div id="tm_contact0">

                     <span><?php //esc_html_e( get_post_meta( get_the_ID(), 'team_member_title', true ) ); ?></span>
                            
                            
                     <?php if($linkedin!=""){?>
                    <a href="<?php echo $linkedin;?>" class="social-icon inline-block si-small si-light si-rounded si-linkedin">
                        <i class="icon-linkedin"></i>
                        <i class="icon-linkedin"></i>
                    </a>
                    <?php } ?>
                    <?php if($email!=""){?>
                    <a href="mailto:<?php echo $email;?>" class="social-icon inline-block si-small si-light si-rounded si-email">
                        <i class="icon-email3"></i>
                        <i class="icon-email3"></i>
                     </a>
                     <?php } ?>
                      </div>
                    </div>
                  </div>
                        


                

            
            <?php wp_reset_postdata(); ?>

        <?php endwhile; ?>

    <?php else : ?>

        <?php _e( 'There are no team members to display.', 'ots' ); ?>

    <?php endif; ?>

    <div class="clear"></div>

</div>
