<div class='row fulltext'>
  <h1><?php the_field('headline');?></h1>
  <p><?php the_field('text');?></p>
  <?php if (get_field('link')) {?>
  <a class='link' href='<?php echo get_field('link')['url'] ?>'><?php echo get_field('link')['title'] ?></a>
  <?php }?>
</div>