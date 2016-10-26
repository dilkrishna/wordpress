<?php
/*
 * Template Name: Special Template
 */

get_header();

if(have_posts()) :
    while(have_posts()):the_post();?>
        <article class="post">
            <h2> <a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
            <div class="info-box">
                <h2>Disclaimer Title</h2>
                <p> This is Dummy text.This is Dummy text.This is Dummy text.This is Dummy text.This is Dummy text.This is Dummy text.This is Dummy text.</p>
            </div>
            <p> <?php the_content(); ?></p>
        </article>
    <?php endwhile;

else :?>
    <p> No contents Found</p>
<?php endif;

get_footer();
?>