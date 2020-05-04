<?php
/*
Template Name: Page Services
*/
?>
<?php get_header();?>
<section class="speaking__slider">
		<div class="container">
			<div class="title--blue speaking__title" data-aos="fade-up" data-aos-duration="1000">
        <?php the_field("services_title"); ?>
      </div>
			<div class="swiper-container speaking__swiper-container">
				<!-- Additional required wrapper -->
				<div class="swiper-wrapper">
						<!-- Slides -->
      <?php
      if( have_rows('slider_rep') ):
          while ( have_rows('slider_rep') ) : the_row();
      ?>
						<div class="swiper-slide">
							<div class="row">
								<div class="col-md-6">
									<div class="speaking__slider-image"  data-aos="fade-up" data-aos-duration="1000" data-aos-delay="150">
                    <?php
                    $image = get_sub_field('slider_rep_image');
                    $size = 'full';
                    if( $image ) {
                        echo remove_width_and_height_attribute(wp_get_attachment_image( $image, $size,"",array("class"=>"speaking__slider-img") ));
                    }
                    ?>
									</div>
								</div>
								<div class="col-md-6">
									<div class="speaking__slider-text" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
										<div class="title speaking__slider-title">
											<?php the_sub_field('slider_rep_title'); ?>
										</div>
										<div class="speaking__slider-subtitle">
											<div class="name__surname"><?php the_sub_field('slider_rep_text_black'); ?></div>
											<div class="company__name"><?php the_sub_field('slider_rep_text_color'); ?></div>
										</div>
									</div>
								</div>
							</div>
						</div>
      <?php
      endwhile;
      endif;
      ?>

				</div>
				<!-- If we need pagination -->
				<div class="swiper-pagination"></div>
				<!-- If we need navigation buttons -->
				<!-- <div class="swiper-button-prev"></div> -->
				<div class="swiper-button-next">
					<a class="link-stretch" href="#">
						Next
					</a>
				</div>
		</div>
		</div>
	</section>

	<section class="speaking__text">
		<div class="container">
			<div class="row">
				<div class="speaking__text-block" data-aos="fade-up" data-aos-duration="1000">
					<?php the_field("services_text_block"); ?>
				</div>
			</div>
		</div>
	</section>

	<section class="speaking__block--odd">
		<div class="container">
			<div class="row">
        <?php
            $i=0;
        if( have_rows('images_block_rep') ):
            while ( have_rows('images_block_rep') ) : the_row();
            $i++;
        ?>
        <?php if($i==1){ ?>
  				<div class="col-12 col-md-5" data-aos="fade-up" data-aos-duration="1000">
  					<div class="speaking__block--left-odd">
  					<!--	<img class="speaking__block-inner-img" src="<?php echo get_template_directory_uri(); ?>/images/dest/222.png" alt="">-->
            <?php
            $image = get_sub_field('images_block_rep_image');
            $size = 'full';
            if( $image ) {
                echo remove_width_and_height_attribute(wp_get_attachment_image( $image, $size,"",array("class"=>"speaking__block-inner-img") ));
            }
            ?>
  							<p class="speaking__descr">
  								<?php the_sub_field("images_block_rep_text"); ?>
  							</p>
  					</div>
  				</div>
        <?php } ?>
        <?php if($i==2){ ?>
  				<div class="col-12 col-md-6 offset-md-1" data-aos="fade-up" data-aos-duration="1000">
  					<div class="speaking__block--right-odd" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="150">
  						<!--<img class="speaking__block-inner-img" src="<?php echo get_template_directory_uri(); ?>/images/dest/333.png" alt="">-->
              <?php
              $image = get_sub_field('images_block_rep_image');
              $size = 'full';
              if( $image ) {
                  echo remove_width_and_height_attribute(wp_get_attachment_image( $image, $size,"",array("class"=>"speaking__block-inner-img") ));
              }
              ?>
  							<p class="speaking__descr">
  								<?php the_sub_field("images_block_rep_text"); ?>
  							</p>
  					</div>
  				</div>
        <?php } ?>
        <?php if($i==3){ ?>
          <div class="col-12 col-md-6 offset-md-6" data-aos="fade-up" data-aos-duration="1000">
  					<div class="speaking__block--right-even">
  					<!--	<img class="speaking__block-inner-img" src="<?php echo get_template_directory_uri(); ?>/images/dest/444.png" alt=""> -->
            <?php
            $image = get_sub_field('images_block_rep_image');
            $size = 'full';
            if( $image ) {
                echo remove_width_and_height_attribute(wp_get_attachment_image( $image, $size,"",array("class"=>"speaking__block-inner-img") ));
            }
            ?>
  							<p class="speaking__descr">
  								<?php the_sub_field("images_block_rep_text"); ?>
  							</p>
  					</div>
  				</div>
      <?php } ?>
      <?php if($i==3){$i=0;} ?>
        <?php
        endwhile;
        endif;
        ?>

			</div>
		</div>
	</section>
<?php if(!get_field('why_me_hide')){ ?>
	<section class="speaking__text">
		<div class="container">
			<div class="row">
				<div class="speaking__text-block" data-aos="fade-up" data-aos-duration="1000">
					<div class="title--blue"><?php the_field('why_me_title'); ?></div>
					<?php the_field('why_me_text'); ?>
				</div>
			</div>
		</div>
	</section>
<?php } ?>

	<section class="speaking__contacts">
		<div class="container">
			<div class="row">
				<div class="speaking__contacts-block">
					<div class="speaking__contacts-text" data-aos="fade-up" data-aos-duration="1000">
						<?php the_field('contact_block_title'); ?>
					</div>
					<div class="speaking__contacts-email" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="150">
						<?php the_field('contact_block_mail'); ?>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php get_footer();?>
