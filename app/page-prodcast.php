<?php
/*
Template Name: Page Prodcast
*/
?>
<?php get_header();?>
<section class="podcast__head" data-aos="fade-up" data-aos-duration="1000">
  <div class="container">
    <div class="row">
      <div class="podcast__head-title">
        <h1 class="podcast__head-title-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="150"><?php the_field('prodcast_header_title'); ?></h1>
        <span class="podcast__head-subtitle-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300"><?php the_field('prodcast_header_subtitle'); ?></span>
      </div>
    </div>
  </div>
  <div class="podcast__head--right">
    <?php get_template_part( 'parts/prodcast/header-ul' ); ?>
  </div>
  <div class="go-to__box go-to__media-page item__skew--hover item__skew--hover-podcast">
    <a class="link__circle link__circle--media-page" href="#">Episode 1</a>
  </div>
</section>

<section class="podcast__text">
  <div class="container">
    <div class="title--blue" data-aos="fade-up" data-aos-duration="1000"><?php the_field('prodcast_header_text_title'); ?></div>
    <div class="podcast__text-descr" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="150">
      <?php the_field('prodcast_header_text', false, false); ?>
    </div>
  </div>
</section>


<section class="podcast__items post-listing" data-aos="fade-up" data-aos-duration="1000">
<?php
$i=0;
if( have_rows('prodcast_rep') ):
    while ( have_rows('prodcast_rep') ) : the_row();
        $i++;
        $prodcast_rep_episode = get_sub_field('prodcast_rep_episode');
        $prodcast_rep_title = get_sub_field('prodcast_rep_title');
        $prodcast_rep_subtitle = get_sub_field('prodcast_rep_subtitle');
        $prodcast_rep_text_line1 = get_sub_field('prodcast_rep_text_line1');
        $prodcast_rep_text_line2 = get_sub_field('prodcast_rep_text_line2');
        $prodcast_rep_image = get_sub_field('prodcast_rep_image');
        $prodcast_rep_iframe = get_sub_field('prodcast_rep_iframe');
        include(locate_template('parts/prodcast/item.php'));
        if($i>=2){break;}
    endwhile;
endif;
?>
</section>




<section class="podcast__text">
  <div class="container">
    <div class="title--blue"><?php the_field('markers_title'); ?></div>
    <div class="podcast__text-descr"><?php the_field('markers_text',false,false); ?></div>
  </div>
</section>

<section class="podcast__columns">
  <div class="container">
    <div class="row justify-content-between">
      <?php
      if( have_rows('makers_rep') ):
          while ( have_rows('makers_rep') ) : the_row();
      ?>
        <div class="col-md-3">
          <div class="podcast__column">
            <?php
            $image = get_sub_field('makers_rep_image_id');
            $size = 'full';
            if( $image ) {
                echo remove_width_and_height_attribute(wp_get_attachment_image( $image, $size,"",array("class"=>"column__img") ));
            }
            ?>
            <div class="column__name"><?php the_sub_field('makers_rep_title');  ?></div>
            <div class="column__text">
              <?php the_sub_field('makers_rep_text');  ?>
            </div>
          </div>
        </div>
      <?php
          endwhile;
      endif;
      ?>
    </div>
  </div>
</section>
<?php
global $wp_query;
$cur_page_id = $wp_query->post->ID;
$count_rows = count(get_field('prodcast_rep'));
?>

<div class="div_pagedc">
  <input class="displaynone" type="text" id="cur_page_id" value="<?php echo $cur_page_id;?>">
  <input class="displaynone" type="text" id="count_rows" value="<?php echo $count_rows;?>">
</div>
<?php get_footer();?>
