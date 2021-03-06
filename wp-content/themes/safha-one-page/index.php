<?php
/**
 * The main template file
 */
get_header(); ?>

<main id="main" role="main">
	<div class="container">
		<?php if ( is_home() && ! is_front_page() ) : ?>
			<header role="banner" class="page-header">
				<h1 class="page-title"><?php single_post_title(); ?></h1>
			</header>
		<?php else : ?>
		<header role="banner" class="page-header">
			<h2 class="page-title"><?php esc_html_e( 'Posts', 'safha-one-page' ); ?></h2>
		</header>
		<?php endif; ?>		
			<?php
			    $layout_setting = get_theme_mod( 'safha_one_page_layout_settings', __('Right Sidebar','safha-one-page') );
		    if($layout_setting == 'Left Sidebar'){ ?>
			    <div class="row">
				    <div id="sidebox" class="col-lg-4 col-md-4">
						<?php dynamic_sidebar('sidebox-1'); ?>
					</div>
					<div class="col-lg-8 col-md-8">
						<?php
						if ( have_posts() ) :

							/* Start the Loop */
							while ( have_posts() ) : the_post();
								
								get_template_part( 'template-parts/post/content', get_post_format() );

							endwhile;

							else :

								get_template_part( 'template-parts/post/content', 'none' );

							endif;
						?>
						<div class="navigation">
			                <?php
			                    
			                    the_posts_pagination( array(
			                        'prev_text'          => __( 'Previous page', 'safha-one-page' ),
			                        'next_text'          => __( 'Next page', 'safha-one-page' ),
			                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'safha-one-page' ) . ' </span>',
			                    ) );
			                ?>
			   	 		</div>
					</div>
				</div>
			<?php }else if($layout_setting == 'Right Sidebar'){ ?>
				<div class="row">
					<div class="col-lg-8 col-md-8">
						<?php
						if ( have_posts() ) :

							/* Start the Loop */
							while ( have_posts() ) : the_post();
								
								get_template_part( 'template-parts/post/content', get_post_format() );

							endwhile;

							else :

								get_template_part( 'template-parts/post/content', 'none' );

							endif;
						?>
						<div class="navigation">
			                <?php
			                    
			                    the_posts_pagination( array(
			                        'prev_text'          => __( 'Previous page', 'safha-one-page' ),
			                        'next_text'          => __( 'Next page', 'safha-one-page' ),
			                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'safha-one-page' ) . ' </span>',
			                    ) );
			                ?>
		       	 		</div>
					</div>
					<div id="sidebox" class="col-lg-4 col-md-4">
						<?php dynamic_sidebar('sidebox-1'); ?>
					</div>
				</div>
			<?php }else if($layout_setting == 'One Column'){ ?>
				<div class="col-lg-12 col-md-12">
					<?php
					if ( have_posts() ) :

						/* Start the Loop */
						while ( have_posts() ) : the_post();
							
							get_template_part( 'template-parts/post/content', get_post_format() );

						endwhile;

						else :

							get_template_part( 'template-parts/post/content', 'none' );

						endif;
					?>
					<div class="navigation">
		                <?php
		                    
		                    the_posts_pagination( array(
		                        'prev_text'          => __( 'Previous page', 'safha-one-page' ),
		                        'next_text'          => __( 'Next page', 'safha-one-page' ),
		                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'safha-one-page' ) . ' </span>',
		                    ) );
		                ?>
	       	 		</div>
				</div>
			<?php }else if($layout_setting == 'Grid Layout'){ ?>
				<div class="row">
					<div class="col-lg-9 col-md-9">
						<div class="row">
							<?php
							if ( have_posts() ) :

								/* Start the Loop */
								while ( have_posts() ) : the_post();
									
									get_template_part( 'template-parts/post/gridlayout' );

								endwhile;

								else :

									get_template_part( 'template-parts/post/content', 'none' );

								endif;
							?>
							<div class="navigation">
				                <?php
				                    
				                    the_posts_pagination( array(
				                        'prev_text'          => __( 'Previous page', 'safha-one-page' ),
				                        'next_text'          => __( 'Next page', 'safha-one-page' ),
				                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'safha-one-page' ) . ' </span>',
				                    ) );
				                ?>
		       	 			</div>
		       	 		</div>
					</div>
					<div id="sidebox" class="col-lg-3 col-md-3">
						<?php dynamic_sidebar('sidebox-2'); ?>
					</div>
				</div>
			<?php }else {?>
				<div class="row">
					<div class="col-lg-8 col-md-8">
						<?php
						if ( have_posts() ) :

							/* Start the Loop */
							while ( have_posts() ) : the_post();
								
								get_template_part( 'template-parts/post/content', get_post_format() );

							endwhile;

							else :

								get_template_part( 'template-parts/post/content', 'none' );

							endif;
						?>
						<div class="navigation">
			                <?php
			                    
			                    the_posts_pagination( array(
			                        'prev_text'          => __( 'Previous page', 'safha-one-page' ),
			                        'next_text'          => __( 'Next page', 'safha-one-page' ),
			                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'safha-one-page' ) . ' </span>',
			                    ) );
			                ?>
		       	 		</div>
					</div>
					<div id="sidebox" class="col-lg-4 col-md-4">
						<?php dynamic_sidebar('sidebox-1'); ?>
					</div>
				</div>
			<?php } ?>
	</div>
</main>

<?php get_footer();