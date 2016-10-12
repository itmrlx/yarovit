<?php get_header(); ?>

	<div class="container">
		<div class="white-container">
			<h1 class="header">404</h1>
			<div class="content">
				<?php $lang_slutsk = icl_get_languages(); ?>
				<?php if($lang_slutsk[ru][active] == 1): ?>
					<p>Такой страницы нет, воспользуйтесь навигацией по сайту.</p>
				<?php elseif($lang_slutsk[en][active] == 1): ?>
					<p>Use the navigation on the site.</p>
				<?php endif; ?>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

<?php get_footer(); ?>