
<!doctype html>
<html <?php language_attributes();?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset');?>">
		<title><?php the_field('name', 'option');?> - <?php wp_title('');?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name');?>" href="<?php bloginfo('rss2_url');?>" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php the_field('description')?>" />
		<link rel="icon" href="<?php the_field('favicon', 'option');?>" />

		<?php wp_head();?>




	</head>
	<body <?php body_class();?>>
		<div class="gl-wrapper">
			<?php get_template_part('parts/common/header/index');?>
			<main>

