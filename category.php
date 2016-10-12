<?php get_header(); ?>

<?php $lang_slutsk = icl_get_languages(); ?>
<?php if($lang_slutsk[ru][active] == 1): ?>
	<?php if(is_category('fruits')): ?>
		<div class="container">
			<div class="white-container">
				<h1 class="header"><?php the_field_option('fruits'); ?></h1>
				<div class="content">
					<div class="row products">
						<?php if(have_posts()) : ?>
						<?php while(have_posts()) : the_post(); ?>
							<div class="col-xs-3 product">
								<?php $addimg = get_field('add_img'); ?>
								<img src="<?php echo $addimg['sizes']['product']; ?>" alt="<?php echo $addimg['url']; ?>">
								<h2 class="title"><?php the_title(); ?></h2>
								<a href="<?php the_permalink(); ?>" class="btn btn-fruit"><?php the_field_option('more'); ?></a>
							</div>
						<?php endwhile; ?>
						<div class="centered">
							<?php if(function_exists('proPagination')) { proPagination(); } ?>
						</div>
						<?php endif; ?>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	<?php elseif(is_category('services')): ?>
		<div class="container services-container">
			<div class="title"><span><span>Наши услуги</span></span></div>
			<div class="row">
			<!-- CONTENT-->
				<?php if(have_posts()) : ?>
				<?php while(have_posts()) : the_post(); ?>
					<div class="col-xs-4">
						<div class="service-card">
							<?php $addimg = get_field('add_img'); ?>
							<img src="<?php echo $addimg['sizes']['service']; ?>" alt="<?php echo $addimg['url']; ?>">
							<h3 class="title-s"><?php the_title(); ?></h3>
							<div class="desc"><?php echo wp_trim_words(get_the_content(),20,'...'); ?></div>
							<a href="<?php the_permalink(); ?>" class="btn btn-transparent"><?php the_field_option('more'); ?></a>
						</div>
					</div>
				<?php endwhile; ?>
				<div class="centered">
					<?php if(function_exists('proPagination')) { proPagination(); } ?>
				</div>
				<?php endif; ?>
			<!-- / CONTENT -->
			</div>
		</div>
	<?php endif; ?>
<?php elseif($lang_slutsk[en][active] == 1): ?>
	<?php if(is_category('fruits-en')): ?>
		<div class="container">
			<div class="white-container">
				<h1 class="header"><?php the_field_option('fruits'); ?></h1>
				<div class="content">
					<div class="row products">
						<?php if(have_posts()) : ?>
						<?php while(have_posts()) : the_post(); ?>
							<div class="col-xs-3 product">
								<?php $addimgen = get_field('add_img_en'); ?>
								<img src="<?php echo $addimgen['sizes']['product']; ?>" alt="<?php echo $addimgen['url']; ?>">
								<h2 class="title"><?php the_title(); ?></h2>
								<a href="<?php the_permalink(); ?>" class="btn btn-fruit"><?php the_field_option('more'); ?></a>
							</div>
						<?php endwhile; ?>
						<div class="centered">
							<?php if(function_exists('proPagination')) { proPagination(); } ?>
						</div>
						<?php endif; ?>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	<?php elseif(is_category('services-en')): ?>
		<div class="container services-container">
			<div class="title"><span><span>Наши услуги</span></span></div>
			<div class="row">
			<!-- CONTENT-->
				<?php if(have_posts()) : ?>
				<?php while(have_posts()) : the_post(); ?>
					<div class="col-xs-4">
						<div class="service-card">
							<?php $addimgen = get_field('add_img_en'); ?>
							<img src="<?php echo $addimgen['sizes']['service']; ?>" alt="<?php echo $addimgen['url']; ?>">
							<h3 class="title-s"><?php the_title(); ?></h3>
							<div class="desc"><?php echo wp_trim_words(get_the_content(),20,'...'); ?></div>
							<a href="<?php the_permalink(); ?>" class="btn btn-transparent"><?php the_field_option('more'); ?></a>
						</div>
					</div>
				<?php endwhile; ?>
				<div class="centered">
					<?php if(function_exists('proPagination')) { proPagination(); } ?>
				</div>
				<?php endif; ?>
			<!-- / CONTENT -->
			</div>
		</div>
	<?php endif; ?>
<?php endif; ?>

<?php get_footer(); ?>