<div class='row content-group'>
    <h1><?php echo get_field('headline') ?></h1>
    <p><?php echo get_field('text') ?></p>
    <div class='content-group-items'>
        <?php if (get_field('items')) {foreach (get_field('items') as $item) {
    if (!$item['link']) {
        $item['link'] = array(
            'title' => 'Read more',
            'url' => "#",
            'target' => '_self',
        )
        ;
    }
    ?>
                <a href='<?php echo $item['link']['url'] ?>' class='item'>
                    <div class='item-image' style='background-image:url(<?php echo $item['image'] ?>)'></div>
                    <p><?php echo $item['text'] ?></p>
                 <div class='more'> <?php echo $item['link']['title'] ?></div>
             </a>
        <?php }?>
        <?php }?>
    </div>
</div>
