<?php get_header(); ?>

<div class="intro">

	<div class="albumart">
		<img src="<?php echo get_theme_mod('coverart_control'); ?>">
	</div>

	<div class="subtitle2">
		<?php bloginfo('description'); ?>
	</div>

</div>

	<main class="main" role="main">

		<!-- section -->
		<section>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
