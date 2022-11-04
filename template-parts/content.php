<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if (is_singular()):
			the_title('<h1 class="entry-title">', '</h1>');
		else:
			the_title(
				'<h2 class="entry-title"><a href="' . 
				esc_url(get_permalink()) . 
				'" rel="bookmark">', 
				'</a></h2>'
			);
		endif;

		if ('post' === get_post_type()):
			?>
			<div class="entry-meta">
				<?php if (get_field('location')): ?>
					<?php the_field('location'); ?>
				<?php endif;
				if (get_field('date_time') && get_field('location')): ?> - <?php endif;
				if (get_field('date_time')): ?>
					<?php the_field('date_time'); ?>
				<?php endif; ?>
			</div>
		<?php endif; ?>
	</header>

	<?php reason_s_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', '_s' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', '_s' ),
				'after'  => '</div>',
			)
		);
		?>
	</div>
</article>