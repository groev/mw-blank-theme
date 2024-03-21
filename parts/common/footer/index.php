<footer class="rs-footer">
    <div class="rs-footer-inner">
        <div class="rs-footer-grid">
            <?php
if (have_rows('footer_columns', 'option')):
    while (have_rows('footer_columns', 'option')): the_row();?>
				                        <div class="rs-footer-col">
				                            <?php the_sub_field('column');?>
				                        </div>
				                    <?php endwhile;
endif;?>
</div>

        <div class="rs-footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> <?php the_field('name', 'option');?></p>
            <?php wp_nav_menu(array('theme_location' => 'footer-menu', 'container_class' => 'footer-nav'));?>
        </div>
    </div>
</footer>