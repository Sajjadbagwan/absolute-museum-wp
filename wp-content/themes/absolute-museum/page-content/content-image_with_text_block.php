<?php 
$postId = $args['postid'];

$title = get_sub_field('image_with_text_block_title');
$description = get_sub_field('image_with_text_block_title');
$buttons = get_sub_field('image_with_text_block_button');
$image = get_sub_field('image_with_tblock');

if (!empty($title) || !empty($description) || !empty($buttons) || !empty($image)) : ?>
    <section class="our-projects no-pd">
        <div class="container">
            <div class="row two-halves gray-bg">
                <div>

				<?php if (!empty($image)) : ?>
                    <div class="our-project-image">
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" style="height:200px;width:200px;">
                    </div>
                <?php endif; ?>
                    <?php if (!empty($title)) : ?>
                        <h2><?php echo esc_html($title); ?></h2>
                    <?php endif; ?>
                    <?php if (!empty($description)) : ?>
                        <p><?php echo $description; ?></p>
                    <?php endif; ?>
                    <?php if (!empty($buttons)) : ?>
                        <div class="section-buttons">
                         <a href="<?php echo esc_url($buttons['url']); ?>" >
									<?php echo esc_html($buttons['title']); ?></a>
                        </div>
                    <?php endif; ?>
                </div>
              
            </div>
        </div>
    </section>
<?php endif; ?>
