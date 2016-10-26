<! DOCTYPE html> 
<html <?php language_attributes();?>>
     <head>
         <meta charset="<?php bloginfo('charset')?>">
         <meta name="viewport" content="width=device-width">
         <title><?php bloginfo('name')?></title>
         <?php  wp_head() ; ?>

     </head>
<body <?php body_class();?>>
<script>
    window.fbAsyncInit = function() {
    FB.init({
    appId      : '363292937338571',
    xfbml      : true,
    version    : 'v2.8'
    });
    };

    (function(d, s, id){
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) {return;}
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<div  class=" container">
    <header class="site-header">
        <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name') ?></a></h1>
        <div class="hd-search">
            <?php get_search_form();?>
        </div>

        <h5><?php bloginfo('description'); ?></h5>
        <div class="fb-like fb-api"
             data-width="450"
             data-show-faces="true"
             data-share="true">
        </div>
        <nav class="site-nav">
            <?php $args = array(
                'theme_location' => 'primary'
            )

            ?>
            <?php  wp_nav_menu($args);?>
        </nav>
    </header>


