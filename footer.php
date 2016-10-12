	<!-- price -->
	<div class="wrapper price-wr">
		<div class="container">
			<div class="row">
				<div class="col-xs-6">
					<div class="title"><?php the_field_option('price'); ?></div>
				</div>
				<div class="col-xs-6">
					<form id="form-price" class="form-price">
						<div class="form-group for-robots" style="display: none;">
							<input class="form-control" type="text" name="email" />
							<input class="form-control modal-form-value" type="text" name="title" value="<?php the_field_option('price'); ?>" />
						</div>
						<div class="form-group">
							<input class="form-control" name="mail" type="email" placeholder="Email" />
							<button type="submit" class="btn btn-send"><?php the_field_option('get'); ?></button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- footer -->
	<footer class="footer-b">
		<div class="container">
			<div class="row">
				<div class="col-xs-4">
					<div class="contacts-container">
						<?php $lang_slutsk = icl_get_languages(); ?>
						<?php if($lang_slutsk[ru][active] == 1): ?>
							<a href="/ru/" class="logo" style="background-image: url(<?php the_field_option('logo'); ?>);"></a>
						<?php elseif($lang_slutsk[en][active] == 1): ?>
							<a href="/en/" class="logo" style="background-image: url(<?php the_field_option('logo'); ?>);"></a>
						<?php endif; ?>
						<div class="clearfix"></div>
						<?php $lang_slutsk = icl_get_languages(); ?>
						<?php if($lang_slutsk[ru][active] == 1): ?>
							<p class="adres"><?php the_field('adres','option'); ?></p>
							<a class="tel" href="tel:<?php echo str_replace(array(" ","(",")","-"),"",get_field(phone,option)); ?>"><?php the_field('phone','option'); ?></a>
							<a class="mail" href="mailto:<?php the_field('email','option'); ?>"><?php the_field('email','option'); ?></a>
						<?php elseif($lang_slutsk[en][active] == 1): ?>
							<p class="adres"><?php the_field('adres_en','option'); ?></p>
							<a class="tel" href="tel:<?php echo str_replace(array(" ","(",")","-"),"",get_field(phone_en,option)); ?>"><?php the_field('phone_en','option'); ?></a>
							<a class="mail" href="mailto:<?php the_field('email_en','option'); ?>"><?php the_field('email_en','option'); ?></a>
						<?php endif; ?>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="title"><?php the_field_option('nav'); ?></div>
					<?php 
						$args = array(
						  'theme_location'  => 'main-menu',
						  'container'       => '', 
						  'menu_class'      => '', 
						);
						wp_nav_menu( $args );
					?>
				</div>
				<div class="col-xs-4">
					<div class="title"><?php the_field_option('feedback'); ?></div>
						<form id="form-footer" class="form-footer">
							<div class="form-group">
								<input class="form-control" name="name" type="text" placeholder="<?php the_field_option('yourname'); ?>" />
							</div>
							<div class="form-group">
								<input class="form-control" name="tel" type="tel" placeholder="<?php the_field_option('pphone'); ?>" required />
							</div>
							<div class="form-group">
								<textarea class="form-control" name="comment" cols="30" rows="5" placeholder="<?php the_field_option('msg'); ?>"></textarea>
							</div>
							<div class="form-group for-robots" style="display: none;">
								<input class="form-control" type="text" name="email" />
								<input class="form-control modal-form-value" type="text" name="Форма в подвале сайта" />
							</div>
							<button type="submit" class="btn btn-send alignright"><?php the_field_option('send'); ?></button>
							<div class="clearfix"></div>
						</form>
				</div>
			</div>
		</div>
	</footer>

	<!-- copyright -->
	<div class="wrapper copyright">
		<div class="container">
			<?php $lang_slutsk = icl_get_languages(); ?>
			<?php if($lang_slutsk[ru][active] == 1): ?>
				<p class="webber">Разработка сайта<a href="http://webber.by"><img src="<?php bloginfo('template_url'); ?>/img/webber-gray.svg" alt="Webber создание сайтов">Webber Studio</a></p>
			<?php elseif($lang_slutsk[en][active] == 1): ?>
				<p class="webber">Created by<a href="http://webber.by"><img src="<?php bloginfo('template_url'); ?>/img/webber-gray.svg" alt="Webber создание сайтов">Webber Studio</a></p>
			<?php endif; ?>
		</div>
	</div>

	<!-- modal -->
	<div id="fform" style="display: none;">
		<form id="form-id" class="form-class">
			<div class="modal-form-title"><?php the_field_option('feedback'); ?></div>
			<div class="form-group">
				<label>* <?php the_field_option('yourname'); ?>:</label>
				<input class="form-control" name="name" type="text" required />
			</div>
			<div class="form-group">
				<label>Email:</label>
				<input class="form-control" name="mail" type="email" />
			</div>
			<div class="form-group">
				<label>* <?php the_field_option('pphone'); ?>:</label>
				<input class="form-control" name="tel" type="tel" required />
			</div>
			<div class="form-group">
				<label><?php the_field_option('msg'); ?>:</label>
				<textarea class="form-control" name="comment" cols="30" rows="5"></textarea>
			</div>
			<div class="form-group for-robots" style="display: none;">
				<input class="form-control" type="text" name="email" />
				<input class="form-control modal-form-value" type="text" name="title" />
			</div>
			<button type="submit" class="btn btn-send"><?php the_field_option('send'); ?></button>
		</form>
	</div>

	<script src="<?php bloginfo('template_url'); ?>/js/min/jquery-3.0.0-min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/min/jquery.fancybox-min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/min/slick-min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/min/script-min.js"></script>
	<script>
		send_form('form-price', 'phpform', '<?php the_field_option('thxprice'); ?>.');
		send_form('form-footer', 'phpform', '<?php the_field_option('thxfoo'); ?>');
		send_form('form-id', 'phpform', '<?php the_field_option('thxoth'); ?>');
	</script>
	<?php wp_footer(); ?>
</body>
</html>