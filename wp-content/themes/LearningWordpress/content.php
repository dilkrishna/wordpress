<article class="post <?php if(has_post_thumbnail()){?>has-thumbnails<?php } ?>">

    <div class="post-thumbnails">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small-thumbnails'); ?></a>
    </div>

    <h2> <a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
    <P class="post-info"> <?php the_time('F j ,Y, g:i');?> | By <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'))?>"><?php  the_author(); ?></a> Posted in
        <?php
        $categories = get_the_category();
        $separator = ',';
        $output ='';

        if($categories){
            foreach($categories as $category){
                $output .='<a href="'.get_category_link($category->term_id).'">'.$category->cat_name.'</a>' .$separator;
            }
            echo trim($output, $separator);
        }

        ?>
    </P>
    <?php the_content('Continue Reading &raquo;'); ?>
    <!--                <p>-->
    <!--                --><?php //echo get_the_excerpt(); ?>
    <!--                <a href="--><?php //the_permalink()?><!-- ">Read More &raquo;</a>-->
    <!--                </P>-->

</article>