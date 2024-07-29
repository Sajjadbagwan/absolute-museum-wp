<?php 
$postId = $args['postid'];
$hp_application_title = get_sub_field('hp_application_title');
$hp_application_title2 = get_sub_field('hp_application_title2');

$hp_application_fields=get_sub_field('hp_application_fields');

?>
    <section class="home-logos no-pd">
        <div class="container-fluid">
            <div class="logo-slider ">
			<p><?php  if(!empty($hp_application_title)) { echo $hp_application_title; }?></p>

           <p><?php  if(!empty($hp_application_title2)) { echo $hp_application_title2; }?></p>
					<?php foreach ($hp_application_fields as $logo) { ?>
					
						<?php
							$logoUrl = $logo['hp_application_img']['url'];
							$logoAlt = $logo['hp_application_img']['title'];
						?>
					<div>
						<img src="<?php echo esc_url($logoUrl); ?>" alt="<?php echo esc_attr($logoAlt); ?>">
					<a href="<?php echo $logo['hp_application_button']['url']; ?>"><?php echo $logo['hp_application_button']['title']; ?></a>
					</div>
					<?php } ?>
            </div>
        </div>
    </section>

