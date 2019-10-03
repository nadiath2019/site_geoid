<?php
/**
 * The template for displaying search results pages
 */
get_header(); ?>

<main id="main" role="main">
	<div class="container">
		<header role="banner" class="page-header">
			<?php if ( have_posts() ) : ?>
				<h1 class="search-title">
					<?php /* translators: %s: search term */ printf( esc_html__( 'Search Results for: %s','safha-one-page'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
			<?php else : ?>
				<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'safha-one-page' ); ?></h1>
			<?php endif; ?>
		</header>
		<div class="row">
			<?php
			    $layout_setting = get_theme_mod( 'safha_one_page_layout_settings', __('Right Sidebar','safha-one-page') );
		    if($layout_setting == 'Left Sidebar'){ ?>
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

					else : ?>

						<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'safha-one-page' ); ?></p>
						<?php
							get_search_form();

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
			<?php }else if($layout_setting == 'Right Sidebar'){ ?>
				<div class="col-lg-8 col-md-8">
					<?php
					if ( have_posts() ) :

						/* Start the Loop */
						while ( have_posts() ) : the_post();
							
							get_template_part( 'template-parts/post/content', get_post_format() );

						endwhile;

					else : ?>

						<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'safha-one-page' ); ?></p>
						<?php
							get_search_form();

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
			<?php }else if($layout_setting == 'One Column'){ ?>
				<div class="content-area">
					<?php
					if ( have_posts() ) :

						/* Start the Loop */
						while ( have_posts() ) : the_post();
							
							get_template_part( 'template-parts/post/content', get_post_format() );

						endwhile;

					else : ?>

						<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'safha-one-page' ); ?></p>
						<?php
							get_search_form();

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
				<div class="col-lg-9 col-md-9">
					<div class="row">
						<?php
						if ( have_posts() ) :

							/* Start the Loop */
							while ( have_posts() ) : the_post();
								
								get_template_part( 'template-parts/post/gridlayout' );

							endwhile;

						else : ?>

							<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'safha-one-page' ); ?></p>
							<?php
								get_search_form();

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
			<?php }else {?>
				<div class="col-lg-8 col-md-8">
					<?php
					if ( have_posts() ) :

						/* Start the Loop */
						while ( have_posts() ) : the_post();
							
							get_template_part( 'template-parts/post/content', get_post_format() );

						endwhile;

					else : ?>

						<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'safha-one-page' ); ?></p>
						<?php
							get_search_form();

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
			<?php } ?>
		</div>
	</div>
</main>

<?php get_footer();
