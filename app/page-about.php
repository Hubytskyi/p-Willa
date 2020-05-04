<?php
/*
Template Name: Page About
*/
?>
<?php get_header();?>
<section class="bio bio__about">
		<div class="bio__header" data-aos="fade-up" data-aos-duration="1000"><?php the_field('about_title'); ?></div>
		<div class="bio__bg" data-aos="fade-up" data-aos-duration="1000">
			<?php
			$image = get_field('about_image');
			$size = 'full';
			if( $image ) {
					echo wp_get_attachment_image( $image, $size,"",array("class"=>"bio__img") );
			}
			?>
		</div>
		<div class="container container-bio__about">
			<div class="row">
				<div class="col-md-6 offset-md-6">
					<div class="bio__box">
						<div class="title--blue bio__title" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300"><?php the_field('about_subtitle'); ?></div>
						<div class="bio__text" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
							<?php
		          while( have_posts() ) : the_post();
		          		the_content();
		          endwhile;
		          ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="willa-circle about__willa-circle">
			<svg class="svg-circle" viewBox="0 0 70 70" width="100%">
				<defs>
					<path d="M35,35m-23,0a23,23 0 1,1 46,0a23,23 0 1,1 -46,0" fill="lightpink" id="tophalf"/>
				</defs>
				<text style="font: initial;">
					<textPath class="circle__text-path" xlink:href="#tophalf" startOffset="0%">Willa</textPath>
					<textPath class="circle__text-path" xlink:href="#tophalf" startOffset="25%">Willa</textPath>
					<textPath class="circle__text-path" xlink:href="#tophalf" startOffset="50%">Willa</textPath>
					<textPath class="circle__text-path" xlink:href="#tophalf" startOffset="75%">Willa</textPath>
				</text>
			</svg>
		</div>
	</section>
<?php get_footer();?>
