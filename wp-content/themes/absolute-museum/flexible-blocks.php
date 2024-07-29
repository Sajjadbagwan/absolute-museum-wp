<?php

$postId = get_the_ID();
$args['postid'] = $postId;
$availableLayouts = [
    'usp_name_block',
    'prod_logo_block',
    'image_with_text_block',
    'image_with_content_slider',
    'image_with_content'
	
];

if (have_rows('page_content', $postId)) {
	while (have_rows('page_content', $postId)) {
		the_row();
		$layout = get_row_layout();

		if (in_array($layout, $availableLayouts, true)) {
            
            echo '<hr>';	
            echo get_template_part('page-content/content', $layout, $args);

            echo '<hr>';	
    }
	}
}


