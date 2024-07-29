<?php
/**
 * Template Name: Homepage
 */
get_header();
include('flexible-blocks.php');


$postId = get_the_ID();
$args['postid'] = $postId;
$availableLayouts = [
    'download_brochure',
    'hp_applications'
	
];

if (have_rows('home_page', $postId)) {
	while (have_rows('home_page', $postId)) {
		the_row();
		$layout = get_row_layout();

		if (in_array($layout, $availableLayouts, true)) {
            
            echo '<hr>';	
            echo get_template_part('page-content/content', $layout, $args);

            echo '<hr>';	
    }
	}
}

get_footer();
?>
