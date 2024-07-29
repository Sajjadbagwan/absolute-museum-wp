<?php 
$postId = $args['postid'];


$image = get_sub_field('ic_img_section');
$image_side= get_sub_field('ic_image_side');

$image_content= get_sub_field('ic_content');

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
                    <p><?php  echo $image_side; ?></p>

                <?php if (!empty($image_content)) : ?>
                        <div class="section-content">

                    <p><?php  if(!empty($image_content['ic_title'])) { echo $image_content['ic_title']; }?></p>
                                <p><?php if(!empty($image_content['ic_title2'])) {  echo $image_content['ic_title2']; } ?></p>
                                <p><?php  if(!empty($image_content['ic_description'])) { echo $image_content['ic_description']; }?></p>
                                <a href="<?php echo esc_url($image_content['ic_button']); ?>" ><?php echo esc_html($image_content['ic_button']); ?></a>
                            
                        </div>
                        <?php endif; ?>  
                </div>
              
            </div>
        </div>
    </section>
<?php endif; ?>
