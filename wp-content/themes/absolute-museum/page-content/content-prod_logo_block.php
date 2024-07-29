<?php 
$postId = $args['postid'];
$prod_title = get_sub_field('prod_title');

$prod_desc =get_sub_field('prod_description');

$prod_logo =get_sub_field('prod_logo');


?>
<p><?php  if(!empty($prod_title)) { echo $prod_title; }?></p>

<p><?php  if(!empty($prod_desc)) { echo $prod_desc; }?></p>

<?php foreach ($prod_logo as $logo) { ?>
					
						<?php
							$logoUrl = $logo['prod_logo']['url'];
							$logoAlt = $logo['prod_logo']['alt'];
						?>
					<div>
						<img src="<?php echo esc_url($logoUrl); ?>" alt="<?php echo esc_attr($logoAlt); ?>">
					

					</div>
<?php } ?>

