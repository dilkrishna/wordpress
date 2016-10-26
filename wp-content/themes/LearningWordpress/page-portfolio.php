<?php
get_header();

if(have_posts()) :
    while(have_posts()):the_post();?>
        <article class="post">
            <!-- column container -->
                <div class="column-container clearfix">

                    <div class="title-column">
                        <h1> <?php the_title(); ?></h1>
                    </div>
                    <div class="text-column ">
                        <?php the_content(); ?>
                    </div>
            </div>
        </article>
    <?php endwhile;

else :?>
    <p> No contents Found</p>
<?php endif;

get_footer();
?>