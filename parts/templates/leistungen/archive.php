<div class="leistung-intro">
<?php the_field('leistungen_intro', 'option'); ?>
</div>
<div class="leistung-grid">
<?php 
    $posts = array(
        'post_type' => 'leistung',
        'posts_per_page' => -1,
        'orderby' => 'menu_order',
        'order' => 'ASC'
    );
    $query = new WP_Query($posts);
    if ($query->have_posts()):
        while ($query->have_posts()): $query->the_post();?>
            <div class="leistung">
                <img src="<?php the_field('icon');?>" />
                <h2><?php the_title(); ?></h2>
                <div class="leistung-content">
                    <?php the_field('text'); ?>
                </div>
            </div>
        <?php endwhile;?>
    <?php endif;?>
    </div>