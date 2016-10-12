<?php get_header(); ?>

	<div class="container">
		<div class="white-container">
			<h1 class="header"><?php the_title(); ?></h1>
			<div class="content">
				<?php the_content(); ?>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

<?php get_footer(); ?>