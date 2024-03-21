<div  class='block block-bildlink align-<?php echo $block['align'] ?>'>
    <div class='block-content'>
        <h2><?php the_field('headline')?></h2>
        <?php if (get_field('link')) {?>
         <a class='link' href='<?php echo get_field('link')['url'] ?>'><?php echo get_field('link')['title'] ?></a>
         <?php }?>
        </div>
        <div class="block-image">
            <img src="<?php the_field('bild');?>" />
        </div>
</div>

