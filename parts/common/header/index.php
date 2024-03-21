<header class="gl-header">
    <?php wp_nav_menu(array('theme_location' => 'main-menu', 'container_class' => 'main-nav'));?>
    <a href="/" class="mobile-logo"><img src="<?php the_field('logo', 'option');?>" /></a>
    <div class="hamburger">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <div class="close">

        </div>
    <style>
        .logo a {
            background-image: url('<?php the_field('logo', 'option');?>');
        }
    </style>
    <div class="phone">
    Tel.: <a href="tel:<?php the_field('phone', 'option');?>"><?php the_field('phone', 'option');?></a>
    </div>  
</header>
