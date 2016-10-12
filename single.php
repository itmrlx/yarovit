<?php get_header(); ?>

	<div class="container">
		<div class="white-container">
			<h1 class="header"><?php the_title(); ?></h1>
			<div class="content">
				<?php the_content(); ?>
				<div class="clearfix"></div>
				<div class="centered">
					<a href="#fform" class="btn btn-primary big fancybox" onclick="fform('<?php the_title(); ?>','<?php the_title(); ?>');"><?php the_field_option('buy'); ?></a>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

<?php get_footer(); ?>