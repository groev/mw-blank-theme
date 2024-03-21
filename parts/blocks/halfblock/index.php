<div class='halfblock <?php if (get_field('padded')) {echo 'row-small';}?> color-<?php the_field('background_color');?>'>
  <?php if (get_field('image_alignment') == 'right') {?>
    <div class='block-content'>
      <?php echo get_field('text') ?>
      <?php if (get_field('link')) {?>
         <a class='link' href='<?php echo get_field('link')['url'] ?>'><?php echo get_field('link')['title'] ?></a>
      <?php }?>
    </div>
    <div class='block-image' style='background-image:url(<?php echo get_field('image') ?>)'></div>
  <?php } else {?>
    <div class='block-image' style='background-image:url(<?php echo get_field('image') ?>)'></div>
    <div class='block-content'>
      <?php echo get_field('text') ?>
      <?php if (get_field('link')) {?>
         <a class='link' href='<?php echo get_field('link')['url'] ?>'><?php echo get_field('link')['title'] ?></a>
      <?php }?>
    </div>
  <?php }?>
</div>