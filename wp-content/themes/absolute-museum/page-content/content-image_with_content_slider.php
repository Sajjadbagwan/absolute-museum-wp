<?php 
$postId = $args['postid'];

$content = get_sub_field('image_with_content_slider_image_content');
$image = get_sub_field('image_with_content_slider_image');


if ( !empty($image)) : ?>
    <section class="our-projects no-pd">
        <div class="container">
            <div class="row two-halves gray-bg">
                <div>

				<?php if (!empty($image)) : ?>
                    <div class="our-project-image">
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" style="height:200px;width:200px;">
                    </div>
                <?php endif; ?>
                <?php if (!empty($content)) : ?>
                        <div class="section-content">
                        <?php foreach ($content as $contents) : ?>
                                <p><?php  if(!empty($contents['	img_slider_title'])) { echo $contents['	img_slider_title']; }?></p>
                                <p><?php if(!empty($contents['image_slider_title'])) {  echo $contents['image_slider_title']; } ?></p>
                                <p><?php  if(!empty($contents['image_slider_description'])) { echo $contents['image_slider_description']; }?></p>
                                <p><?php  if(!empty($contents['image_slider_name_company'])) { echo $contents['image_slider_name_company']; }?></p>
                                <a href="<?php echo esc_url($contents['button']['url']); ?>" ><?php echo esc_html($contents['button']['title']); ?></a>
                              <?php endforeach; ?>
                        </div>
                        <?php endif; ?>


                </div>
              
            </div>
        </div>
    </section>
<?php endif; ?>
