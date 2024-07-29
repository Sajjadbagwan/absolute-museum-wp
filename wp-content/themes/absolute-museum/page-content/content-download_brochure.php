<?php 
$postId = $args['postid'];
$download_brochure = get_sub_field('download_brochure');

$brochure_image=get_sub_field('download_brochure_image');
$brochure_title =get_sub_field('download_brochure_title');
$brochure_desc =get_sub_field('download_brochure_description');
$brochure_download =get_sub_field('download_brochure_download');

?>

    <section class="home-logos no-pd">
        <div class="container-fluid">
            <div class="logo-slider ">
			<p><?php  if(!empty($brochure_title)) { echo $brochure_title; }?></p>
            <p><?php  if(!empty($brochure_desc)) { echo $brochure_desc; }?></p>	
			<p><?php  if(!empty($brochure_download)) { echo $brochure_download; }?></p>	
            </div>

				<div>
					<img src="<?php echo esc_url($brochure_image['url']); ?>" alt="<?php echo esc_attr($brochure_image['alt']); ?>"
					style="height:200px;width:300px;">
				

				</div>

        </div>
    </section>

