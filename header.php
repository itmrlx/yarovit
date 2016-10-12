<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/favicon-160.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo('template_url'); ?>/img/favicon-114.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo('template_url'); ?>/img/favicon-72.png">
	<link rel="apple-touch-icon-precomposed" href="<?php bloginfo('template_url'); ?>/img/favicon-57.png">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/global.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
	<?php wp_head(); ?>
</head>
<body>
	<!-- header panel -->
	<div class="wrapper header-panel">
		<div class="container">
				<?php $lang_slutsk = icl_get_languages(); ?>
				<?php if($lang_slutsk[ru][active] == 1): ?>
					<p><?php the_field('adres','option'); ?></p>
					<a href="tel:<?php echo str_replace(array(" ","(",")","-"),"",get_field(phone,option)); ?>"><?php the_field('phone','option'); ?></a>
					<a href="<?=$lang_slutsk[ru][url];?>" class="lang ru active">RUS</a>
					<a href="<?=$lang_slutsk[en][url];?>" class="lang en">ENG</a>
				<?php elseif($lang_slutsk[en][active] == 1): ?>
					<p><?php the_field('adres_en','option'); ?></p>
					<a href="tel:<?php echo str_replace(array(" ","(",")","-"),"",get_field(phone_en,option)); ?>"><?php the_field('phone_en','option'); ?></a>
					<a href="<?=$lang_slutsk[ru][url];?>" class="lang ru">RUS</a>
					<a href="<?=$lang_slutsk[en][url];?>" class="lang en active">ENG</a>
				<?php endif; ?>
		</div>
	</div>

	<header class="wrapper header-t<?php if(!is_home()): ?> not-home<?php endif; ?>">
		<div class="container">
			<div class="row">
				<div class="col-xs-2 logo-container">
					<?php $lang_slutsk = icl_get_languages(); ?>
					<?php if($lang_slutsk[ru][active] == 1): ?>
						<a href="/ru/" class="logo" style="background-image: url(<?php the_field_option('logo'); ?>);"></a>
					<?php elseif($lang_slutsk[en][active] == 1): ?>
						<a href="/en/" class="logo" style="background-image: url(<?php the_field_option('logo'); ?>);"></a>
					<?php endif; ?>
				</div>
				<div class="col-xs-8 menu-container">
					<div class="burger-menu">
						<span></span>
						<span></span>
						<span></span>
					</div>
					<?php 
						$args = array(
						  'theme_location'  => 'main-menu',
						  'container'       => '', 
						  'menu_class'      => 'pro-menu', 
						);
						wp_nav_menu( $args );
					?>
				</div>
				<div class="col-xs-2 callback-container">
					<a href="#fform" class="callback fancybox" onclick="fform('<?php the_field_option('callto'); ?>','<?php the_field_option('callto'); ?>');"><?php the_field_option('callto'); ?></a>
				</div>
			</div>
		</div>
		<?php if(is_home()): ?>
			<h1 class="title"><?php the_field_option('h_title'); ?></h1>
		<?php endif; ?>

		<?php if(!is_home()): ?>
			<div class="container">
				<?php dimox_breadcrumbs(); ?>
			</div>
		<?php endif; ?>
	</header>