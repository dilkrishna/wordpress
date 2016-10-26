
        <!--footer widget-->
        <?php if(is_active_sidebar('footer1')):?>
        <div class="footer-widget clearfix">
            <?php dynamic_sidebar('footer1');?>
        </div>
        <?php endif ?>

        <?php if(is_active_sidebar('footer2')):?>
            <div class="footer-widget">
                <?php dynamic_sidebar('footer2');?>
            </div>
        <?php endif ?>

        <?php if(is_active_sidebar('footer3')):?>
            <div class="footer-widget">
                <?php dynamic_sidebar('footer3');?>
            </div>
        <?php endif ?>

        <?php if(is_active_sidebar('footer4')):?>
            <div class="footer-widget">
                <?php dynamic_sidebar('footer4');?>
            </div>
        <?php endif ?>
    <div class="clearfix"></div>
    <footer class="site-footer">
        <nav class="site-nav">
            <?php $args = array(
                'theme_location' => 'footer'
            )

            ?>
            <?php  wp_nav_menu($args);?>
            
        <p><?php bloginfo('name')?>  &copy <?php echo date('Y')?></p>
        </nav>
        <?php wp_footer();?>
    </footer>
</div>
<!--end footer->

</body>
</html>