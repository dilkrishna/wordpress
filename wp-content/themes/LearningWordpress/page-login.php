<?php
get_header();

if(have_posts()) :
    while(have_posts()):the_post();?>
        <article class="post">
            <!-- column container -->
                <div class="column-container clearfix">
                    <form name="customer_details" method="POST" onsubmit="return form_validation()" action="../customer-details.php">
                        Your Name: <input type="text" id="customer_name" name="customer_name" /><br />
                        Your Email: <input type="text" id="customer_email" name="customer_email" /><br />
                        Sex: <input type="radio" name="customer_sex" value="male">Male <input type="radio" name="customer_sex" value="female">Female<br />
                        Your Age: <input type="text" id="customer_age" name="customer_age" /><br />
                        <input type="submit" value="Submit"/>
                    </form>
            </div>
        </article>
    <?php endwhile;

else :?>
    <p> No contents Found</p>
<?php endif;

get_footer();
?>