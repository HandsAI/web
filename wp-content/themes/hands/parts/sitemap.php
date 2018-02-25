<?php 

/*Template Name: Sitemap */ 

$post = get_post( ); 
get_header();

$header_title = get_field('sitemap_header_title', $post->ID);
$header_sub_title = get_field('sitemap_header_sub_title', $post->ID);



?>

        
        <!-- Page Title
        ============================================= -->
        <section id="page-title" class="page-title-parallax" style="background-image: url('<?php echo get_bloginfo('template_directory'); ?>/files/images/parallax/9.jpg'); padding: 120px 0;" data-stellar-background-ratio="0.3">

            <div class="container clearfix">
                <h1 data-animate="fadeInUp">SiteMap</h1>
                
            </div>

        </section><!-- #page-title end -->

        <?php 
        //echo do_shortcode('[wp_sitemap_page]');
        $pages=do_shortcode('[wp_sitemap_page only="page"]');
        $pages= str_replace('"><a', '"><i class="icon-file-alt"></i> &nbsp;<a', $pages);
        $pages= str_replace('<div class="wsp-container">', '', $pages);
        $pages= str_replace('</div>', '', $pages);
        

        $category=do_shortcode('[wp_sitemap_page only="post" sort="count" display_category_title_wording="false"]');
        $category= str_replace('"><a', '"><i class="icon-file-alt"></i> &nbsp;<a', $category);
        $category= str_replace('<div class="wsp-container">', '', $category);
        $category= str_replace('</div>', '', $category);

        $jobs=do_shortcode('[wp_sitemap_page only="jobpost"]');
        $jobs= str_replace('><a', '><i class="icon-file-alt"></i> &nbsp;<a', $jobs);
        $jobs= str_replace('<div class="wsp-container">', '', $jobs);
        $jobs= str_replace('</div>', '', $jobs);


        $team_member=do_shortcode('[wp_sitemap_page only="team_member"]');
        $team_member= str_replace('><a', '><i class="icon-file-alt"></i> &nbsp;<a', $team_member);
        $team_member= str_replace('<div class="wsp-container">', '', $team_member);
        $team_member= str_replace('</div>', '', $team_member);

        $solution=do_shortcode('[wp_sitemap_page only="solution"]');
        $solution= str_replace('><a', '><i class="icon-file-alt"></i> &nbsp;<a', $solution);
        $solution= str_replace('<div class="wsp-container">', '', $solution);
        $solution= str_replace('</div>', '', $solution);

        ?>

      
        <!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap">

                <div class="container clearfix">

                    <div class="col_one_third nobottommargin">
 
                        <h3>Pages</h3>
                        <ul class="iconlist nobottommargin">
                            <?php echo $pages;?>
                        </ul>

                        <div class="line"></div>

                        <h3>Jobs</h3>

                        <ul class="iconlist nobottommargin">
                            <?php echo $jobs;?>
                        </ul>

                    </div>

                    <div class="col_one_third nobottommargin">

                        <h3>Blog Posts</h3>
                        <ul class="iconlist iconlist2 nobottommargin">
                            <?php echo $category;?>
                        </ul>

                        

                       


                    </div>

                    <div class="col_one_third nobottommargin col_last">

                        <h3>Solutions</h3>
                        <ul class="iconlist nobottommargin">
                            <?php echo $solution;?>
                        </ul>

                         <div class="line"></div>

                        <h3>Team Members</h3>

                        <ul class="iconlist nobottommargin">
                            <?php echo $team_member;?>
                        </ul>

                    </div>

                </div>

            </div>

        </section><!-- #content end -->





<?php get_footer(); ?>