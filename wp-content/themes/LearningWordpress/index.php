<?php
get_header();?>
    <div class="site-content clearfix">
        <div class="main-column">
            <?php

            if(have_posts()) :
                while(have_posts()):the_post();
                    get_template_part('content',get_post_format());
                endwhile;

            else :?>
                <p> No contents Found</p>
            <?php endif;?>

        </div>
<!--end main-column-->
        <div class="secondary-column">
            <?php dynamic_sidebar('sidebar1');?>
        </div>
        <!--end secondary-column-->
    </div>
<!--end container-->

<?php
get_footer();
?>

