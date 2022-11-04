<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary">
		<?php esc_html_e('Skip to content', 'reason'); ?>
	</a>

	<header class="header">
		<div class="header__top">
			<div class="container">
				<button class="header__search" type="button">
					<?php esc_html_e('Search', 'reason'); ?>
				</button>
	
				<div>
					<a class="header__top-link header__top-link--learn" href="#">
						<?php esc_html_e('Learn', 'reason'); ?>
					</a>
					<a class="header__top-link header__top-link--donate" href="#">
						<?php esc_html_e('Donate', 'reason'); ?>
					</a>
				</div>
			</div>
		</div>

		<nav class="header__nav nav">
			<div class="container">
				<?php the_custom_logo(); ?>

				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
				?>
			</div>
		</nav>

		<?php if (is_front_page() && is_home()): ?>
		<div class="header__branding">
			<div class="container">
				<h1 class="header__title title">
					<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
						<?php bloginfo('name'); ?>
					</a>
				</h1>
				<?php
					$reason_description = get_bloginfo('description', 'display');
					if ($reason_description || is_customize_preview()):
				?>
					<p class="header__introduction">
						<?php echo $reason_description; ?>
					</p>
				<?php endif; ?>
	
				<a class="header__cta btn" href="#">
					<?php esc_html_e('Get involved now!', 'reason'); ?>
				</a>
			</div>
		</div>
		<?php endif; ?>
	</header>
