<?php
get_header();

if(have_posts()) :
    ?><h2><?php
        if(is_category()){
            single_cat_title();
        }
        elseif(is_author()){
            echo 'Author Archive :'.get_the_author();
        }
        elseif(is_tag()){
            single_tag_title();
        }
        elseif(is_day()){
            echo 'Daily Archive :'.get_the_date();
        }
        elseif(is_month()){
            echo 'Monthly Archive :'.get_the_date('F j');
        }
        elseif(is_year()){
            echo 'Year :'.get_the_date('Y');
        }
        else{
            echo 'Archive';
        }

        ?></h2>

    <?php
        while(have_posts()):the_post();
            get_template_part('content',get_post_format());
        endwhile;

else :?>
    <p> No contents Found</p>
<?php endif;

get_footer();
?>

