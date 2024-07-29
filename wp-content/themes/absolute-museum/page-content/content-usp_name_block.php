<?php 
$postId = $args['postid'];
$usp_name = get_sub_field('usp_name');

?>
<?php if (!empty($usp_name)): ?>
    <section class="home-logos no-pd">
        <div class="container-fluid">
            <div class="logo-slider ">
				
					<?php foreach ($usp_name as $logo) { ?>
						<p> <?php  echo $logo['usp_name']?></p>
						<p> <?php  echo $logo['usp_description']?></p>
						<?php
							$logoUrl = $logo['usp_logo']['url'];
							$logoAlt = $logo['usp_logo']['alt'];
						?>
					<div>
						<img src="<?php echo esc_url($logoUrl); ?>" alt="<?php echo esc_attr($logoAlt); ?>">
					
					</div>
					<?php } ?>
            </div>
        </div>
    </section>
<?php endif; ?>
