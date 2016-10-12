<?php get_header(); ?>

	<!-- fruits -->
	<div class="container fruits-wr">
		<div class="fruits-container">
			<div class="header"><span><?php the_field_option('fruits'); ?></span></div>
			<div class="clearfix"></div>
			<div class="slider-fruits">
				<?php $lang_slutsk = icl_get_languages(); ?>
				<?php if($lang_slutsk[ru][active] == 1): ?>
					<?php $query_my = new WP_Query('category_name=fruits&showposts=12'); ?>
					<?php if($query_my->have_posts()) : ?>
						<?php while($query_my->have_posts()) : $query_my->the_post(); ?>
							<div class="slide">
								<?php $addimg = get_field('add_img'); ?>
								<img src="<?php echo $addimg['sizes']['product']; ?>" alt="<?php echo $addimg['url']; ?>">
								<h2 class="title"><?php the_title(); ?></h2>
								<a href="<?php the_permalink(); ?>" class="btn btn-fruit"><?php the_field_option('more'); ?></a>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				<?php elseif($lang_slutsk[en][active] == 1): ?>
					<?php $query_my = new WP_Query('category_name=fruits-en&showposts=12'); ?>
					<?php if($query_my->have_posts()) : ?>
						<?php while($query_my->have_posts()) : $query_my->the_post(); ?>
							<div class="slide">
								<?php $addimgen = get_field('add_img_en'); ?>
								<img src="<?php echo $addimgen['sizes']['product']; ?>" alt="<?php echo $addimgen['url']; ?>">
								<h2 class="title"><?php the_title(); ?></h2>
								<a href="<?php the_permalink(); ?>" class="btn btn-fruit"><?php the_field_option('more'); ?></a>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>

	<!-- services -->
	<div class="container services-container">
		<div class="title"><span><span><?php the_field_option('our_services'); ?></span></span></div>
		<div class="row">
				<?php $lang_slutsk = icl_get_languages(); ?>
				<?php if($lang_slutsk[ru][active] == 1): ?>
					<?php $query_my = new WP_Query('category_name=services&showposts=3'); ?>
					<?php if($query_my->have_posts()) : ?>
						<?php while($query_my->have_posts()) : $query_my->the_post(); ?>
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
					<?php endif; ?>
				<?php elseif($lang_slutsk[en][active] == 1): ?>
					<?php $query_my = new WP_Query('category_name=services-en&showposts=3'); ?>
					<?php if($query_my->have_posts()) : ?>
						<?php while($query_my->have_posts()) : $query_my->the_post(); ?>
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
					<?php endif; ?>
				<?php endif; ?>
		</div>
	</div>

	<!-- advantages -->
	<div class="container advantages-container">
		<div class="row">
				<div class="col-xs-3">
					<div class="advantage n1">
						<img src="<?php the_field_option('adimg1'); ?>" alt="advantage">
						<div class="title"><?php the_field_option('adtext1'); ?></div>
					</div>
				</div>
				<div class="col-xs-3">
					<div class="advantage n2">
						<img src="<?php the_field_option('adimg2'); ?>" alt="advantage">
						<div class="title"><?php the_field_option('adtext2'); ?></div>
					</div>
				</div>
				<div class="col-xs-3">
					<div class="advantage n3">
						<img src="<?php the_field_option('adimg3'); ?>" alt="advantage">
						<div class="title"><?php the_field_option('adtext3'); ?></div>
					</div>
				</div>
				<div class="col-xs-3">
					<div class="advantage n4">
						<img src="<?php the_field_option('adimg4'); ?>" alt="advantage">
						<div class="title"><?php the_field_option('adtext4'); ?></div>
					</div>
				</div>
		</div>
	</div>

<?php get_footer(); ?>