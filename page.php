<?php
/**
 * Template Name: Page (Default)
 * Description: Page template with Sidebar on the left side.
 *
 */

get_header();

the_post();

function custom_breadcrumbs() {
    // Get the current post/page object
    $post = get_queried_object();

    // Output the breadcrumb navigation
    echo '<div id="breadcrumb" class="breadcrumbs">';
    echo '<a href="' . get_home_url() . '">Home</a>';

    // Check if it's a page (post type: page)
    if (is_page()) {
        $ancestors = get_post_ancestors($post->ID);

        // Loop through the ancestors and output their links
        if ($ancestors) {
            $ancestors = array_reverse($ancestors);
            foreach ($ancestors as $ancestor) {
                echo '<span class="separator">/</span>';
                echo '<a href="' . get_permalink($ancestor) . '">' . get_the_title($ancestor) . '</a> ';
            }
        }
        echo ' <span class="separator"><img src="/wp-content/uploads/2023/06/right_arrow.svg" alt="Sepearator"></span>';
        echo ' <span class="current">' . get_the_title($post->ID) . '</span>';
    }

    // Check if it's a single post (post type: post)
    elseif (is_single()) {
        $categories = get_the_category();

        // Output the category links
        if ($categories) {
            foreach ($categories as $category) {
                echo '<span class="separator">/</span>';
                echo '<a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
            }
        }
        echo '<span class="separator">/</span>';
        echo '<span class="current">' . get_the_title() . '</span>';
    }

    echo '</div>';
}

if (has_post_thumbnail()) {
    $featured_image_url = get_the_post_thumbnail_url(null, 'full');
} else {
    $featured_image_url = '';
}
?>



<?php if($featured_image_url): ?>
<div id="banner" class="container-fluid" style="background-image: url(<?php echo $featured_image_url; ?>);">
	<div class="row m-0">
		<div class="col-lg-12">
			<h1>About the Bird</h1>
		</div>
	</div>
</div>
<?php endif; ?>

<div class="container">
	<div class="row">
		<div class="col-lg-12">
		<?php custom_breadcrumbs(); ?>
		</div>
	</div>
</div>

<div class="container">
	<div class="row m-0">
		<?php
		if (is_active_sidebar('primary_widget_area')) {
			?>
			<div class="col-lg-8">
				<div id="post-<?php the_ID(); ?>">
					<?php
						the_content();
					?>
				</div><!-- /#post-<?php the_ID(); ?> -->
				
			</div><!-- /.col -->
			<div class="col-lg-4">
				<?php get_sidebar();; ?>
			</div>
			<?php
		} else {
			?>
			<div class="col-lg-12">
				<div id="post-<?php the_ID(); ?>" <?php post_class( 'content' ); ?>>
					<?php the_content(); ?>
				</div><!-- /#post-<?php the_ID(); ?> -->
			</div><!-- /.col -->
			<?php
		}
		?>
	</div><!-- /.row -->
</div>
<?php
get_footer();
