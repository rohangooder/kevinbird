<?php
/**
 * Template Name: Page (Full width)
 * Description: Page template full width.
 *
 */

get_header();

the_post();
?>
<div id="post-<?php the_ID(); ?>" <?php post_class( 'content container-fluid p-0' ); ?>>
	<?php
		the_content();

		wp_link_pages(
			array(
				'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'kevinbird' ) . '">',
				'after'    => '</nav>',
				'pagelink' => esc_html__( 'Page %', 'kevinbird' ),
			)
		);
		edit_post_link(
			esc_attr__( 'Edit', 'kevinbird' ),
			'<span class="edit-link">',
			'</span>'
		);
	?>
</div><!-- /#post-<?php the_ID(); ?> -->
<?php

get_footer();
