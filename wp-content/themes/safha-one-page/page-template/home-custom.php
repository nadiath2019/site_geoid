<?php
/**
 * Template Name: Home Custom Page
 */
get_header(); ?>

<main id="main" role="main">
  <?php do_action( 'safha_one_page_before_slider' ); ?>

  <?php if( get_theme_mod('safha_one_page_slider_arrows') != ''){ ?>
    <section id="slider">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"> 
        <?php $slider_pages = array();
          for ( $count = 1; $count <= 4; $count++ ) {
            $mod = intval( get_theme_mod( 'safha_one_page_slide_page' . $count ));
            if ( 'page-none-selected' != $mod ) {
              $slider_pages[] = $mod;
            }
          }
          if( !empty($slider_pages) ) :
          $args = array(
            'post_type' => 'page',
            'post__in' => $slider_pages,
            'orderby' => 'post__in'
          );
          $query = new WP_Query( $args );
          if ( $query->have_posts() ) :
            $i = 1;
        ?>
        <div class="carousel-inner" role="listbox">
          <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
          <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
            <img role="img" src="<?php the_post_thumbnail_url('full'); ?>"/>
            <div class="carousel-caption">
              <div class="inner_carousel">
                <h2><?php the_title();?></h2>
                <p><?php $excerpt = get_the_excerpt(); echo esc_html( safha_one_page_string_limit_words( $excerpt,20 ) ); ?></p>
                <div class ="readbutton">
                  <a href="<?php the_permalink(); ?>"> <?php echo esc_html(get_theme_mod('safha_one_page_slide_page',__('Read More','safha-one-page'))); ?></a>
                </div>
              </div>
            </div>
          </div>
          <?php $i++; endwhile; 
          wp_reset_postdata();?>
        </div>
        <?php else : ?>
        <div class="no-postfound"></div>
          <?php endif;
        endif;?>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
        </a>
      </div> 
      <div class="clearfix"></div>
    </section> 
  <?php }?> 

  <?php do_action( 'safha_one_page_after_slider' ); ?>

  <?php if( get_theme_mod('safha_one_page_features_title') != '' || get_theme_mod('safha_one_page_features_category') != '' || get_theme_mod('safha_one_page_text') != ''){ ?>
    <section id="features">
      <div class="container">
        <?php if( get_theme_mod('safha_one_page_features_title') != ''){ ?>
          <h3><?php echo esc_html(get_theme_mod('safha_one_page_features_title','')); ?></h3>
          <hr>
        <?php }?>
        <?php if( get_theme_mod( 'safha_one_page_text','' ) != '') { ?>
          <p><?php echo esc_html( get_theme_mod('safha_one_page_text','') ); ?></p>
        <?php } ?>
        <div class="row">
          <?php 
            $catData=  get_theme_mod('safha_one_page_features_category');
              if($catData){
              $page_query = new WP_Query(array( 'category_name' => esc_html( $catData ,'safha-one-page')));?>
                <?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>
                  <div class="col-lg-4 col-md-4">
                    <div class="features-content">
                      <img role="img" src="<?php the_post_thumbnail_url('full'); ?>"/>
                      <h4><a href="<?php echo esc_url( get_permalink() );?>"><?php the_title();?></a></h4>
                      <p><?php $excerpt = get_the_excerpt(); echo esc_html( safha_one_page_string_limit_words( $excerpt,12 ) ); ?></p>
                    </div>
                  </div>
                  <?php endwhile;
                wp_reset_postdata();
              } ?>
        </div>
      </div>
    </section>
  <?php }?>

  <?php do_action( 'safha_one_page_after_features' ); ?>

  <div class="container">
    <?php while ( have_posts() ) : the_post();?>
      <?php the_content(); ?>
    <?php endwhile; // End of the loop.
    wp_reset_postdata(); ?>
  </div>  
</main>

<?php get_footer(); ?>