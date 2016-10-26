<?php
get_header();

if(have_posts()) :
    while(have_posts()):the_post();?>
        <article class="post">

            <?php if(has_child() OR $post->post_parent>0){?>
                <nav class="site-nav children_links clearfix"
                    <span class="parents_links"><a href="<?php echo get_the_permalink(get_top_ancestors_list()); ?>"><?php echo  get_the_title(get_top_ancestors_list()); ?></a> </span>
                    <ul>
                        <?php
                        $args = array(
                            'child_of'=> get_top_ancestors_list(),
                            'title_li'=> ''
                        );
                        ?>


                        <?php  wp_list_pages($args);?>
                    </ul>
                </nav>
                <h2> <a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
                <p> <?php the_content(); ?></p>
            <?php }?>
        </article>
    <?php endwhile;

else :?>
    <p> No contents Found</p>
<?php endif;

get_footer();
?>