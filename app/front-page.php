<?php
/*
Template Name: Page home
*/
?>
<?php get_header();?>
<div class="podcast__popup" data-aos="fade-up" data-aos-duration="1000">
  <a class="popup__link-block" href="<?php echo get_field('popup_href'); ?>">
      <span class="popup__title"><?php the_field('popup_title'); ?></span>
    <div class="podcast__popup-inner">
      <?php
      $image = get_field('popup_image_id');
      $size = 'full'; // (thumbnail, medium, large, full or custom size)
      if( $image ) {
          echo wp_get_attachment_image( $image, $size,"",array("class"=>"popup__img") );
      }
      ?>
			<div class="popup__bg-overlay"></div>
			<span class="popup-circle"></span>
      <div class="go-to__popup-podcast" >
        <span class="link__popup" href="podcast.html"><?php the_field('popup_text'); ?></span>
      </div>
    </div>
  </a>
</div>

<section class="welcome">
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="welcome__image">
        <?php
        $image = get_field('welcome_image');
        $size = 'full';
        if( $image ) {
            echo wp_get_attachment_image( $image, $size,"",array("class"=>"welcome__img") );
        }
        ?>
      </div>
    </div>
    <div class="col-md-6">
      <div class="welcome__text" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
        <div class="title welcome__title">
          <?php the_field('welcome_title'); ?>
        </div>
        <a class="link-stretch" href="<?php echo get_field('welcome_href'); ?>">
          <?php echo get_field('welcome_href_text'); ?>
        </a>
      </div>
    </div>
  </div>
</div>
</section>

<section class="bio bio-home" data-aos="fade-up" data-aos-duration="1000">
<div class="willa-circle bio__willa-circle">
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
<div class="bio__bg" data-aos="fade-up" data-aos-duration="1000">
  <?php
    $image = get_field('bio_image');
    $size = 'full';
    if( $image ) {
     echo remove_width_and_height_attribute(wp_get_attachment_image( $image, $size,"",array("class"=>"bio__img") ));
    }
    ?>
</div>
<div class="container container-bio__about">
  <div class="row">
    <div class="col-md-6 offset-md-6">
      <div class="bio__box">
        <div class="title--blue bio__title" data-aos="fade-up" data-aos-duration="1000"><?php the_field('bio_title'); ?></div>
        <div class="bio__text" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
          <?php the_field('bio_text',false, false); ?>
        </div>
        <div class="go-to__box go-to-bio item__skew--hover">
          <a class="link__circle link__circle--bio" href="<?php echo get_field('bio_href'); ?>"><?php the_field('bio_href_text'); ?></a>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<?php
if( have_rows('brands_rep') ){
  $brands_rep = get_field('brands_rep');
}
 ?>
<section class="brands" data-aos="fade-up" data-aos-duration="1000">
<div class="container container__mini">
  <div class="row">
      <div class="col-6 col-md-3" >
        <div data-aos="fade-up" data-aos-duration="1000">
            <?php
              $image = $brands_rep[0]["brands_rep_img"];
              $size = 'full';
              if( $image ) {
                  echo remove_width_and_height_attribute(wp_get_attachment_image( $image, $size,"",array("class"=>"brands__img") ));
              }
              ?>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
          <?php
            $image = $brands_rep[1]["brands_rep_img"];
            $size = 'full';
            if( $image ) {
                echo remove_width_and_height_attribute(wp_get_attachment_image( $image, $size,"",array("class"=>"brands__img") ));
            }
            ?>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
          <?php
            $image = $brands_rep[2]["brands_rep_img"];
            $size = 'full';
            if( $image ) {
                echo remove_width_and_height_attribute(wp_get_attachment_image( $image, $size,"",array("class"=>"brands__img") ));
            }
            ?>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
          <?php
            $image = $brands_rep[3]["brands_rep_img"];
            $size = 'full';
            if( $image ) {
                echo remove_width_and_height_attribute(wp_get_attachment_image( $image, $size,"",array("class"=>"brands__img") ));
            }
            ?>
        </div>
      </div>
  </div>
</div>
</section>

<section class="media latest-media" data-aos="fade-up" data-aos-duration="1000">
<div class="container container__mini">
  <div class="title--blue latest-media__title--blue"><?php the_field("media_title"); ?></div>
  <div class="row">
    <div class="col-md-5">
      <div class="media__box--left" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
        <a class="link__media" href="<?php echo get_field("media_lf_href"); ?>">
          <?php
            $image = get_field('media_lf_image_id');
            $size = 'full';
            if( $image ) {
                echo remove_width_and_height_attribute(wp_get_attachment_image( $image, $size,"",array("class"=>"media__img") ));
            }
            ?>
          <h1 class="title media__title--left"><?php the_field("media_lf_title"); ?></h1>
          <p class="subtitle media__subtitle">
            <?php the_field("media_lf_text",false, false); ?>
          </p>
          <span class="link-stretch link-stretch__media-home">
            <?php the_field("media_lf_href_text"); ?>
          </span>
        </a>
      </div>
    </div>
    <div class="col-md-5 offset-md-2">
      <div class="media__box--right" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="450">
        <div class="media__video">
          <?php if(get_field("media_rt_youtube_src")){ ?>
            <iframe class="home__video-item" src="<?php echo get_field('media_rt_youtube_src'); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          <?php } ?>
        </div>
        <a class="link__media" href="<?php echo get_field("media_rt_href"); ?>">
          <h1 class="title media__title--right"><?php the_field("media_rt_title"); ?></h1>
          <p class="media__subtitle">
            <?php the_field("media_rt_text",false, false); ?>
          <span class="link-stretch link-stretch__media-home">
            <?php echo get_field("media_rt_href_text"); ?>
          </span>
        </a>
        <div class="go-to__box go-to-media item__skew--hover">
          <a class="link__circle link__circle--media" href="<?php echo get_field("media_rt_href_goto"); ?>"><?php the_field("media_rt_href_goto_text"); ?></a>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<?php get_footer();?>
