
<!-- Add header (header.php) -->
<?php get_header(); ?>

<main class="wrap">

	<section class="content-area content-thin">

		<?php 
		// Check if there are any posts to display
		if ( have_posts() ) : ?>

		<div class="archive-title">

			<!-- Single_cat_title() | Function | WordPress Developer Resources
			https://developer.wordpress.org/reference/functions/single_cat_title/ -->
			<h1><?php single_cat_title( 'Category: ', true ); ?></h1>

			<?php
			// Display optional category description
			if ( category_description() ) : ?>
				<div class="archive-description"><?php echo category_description(); ?></div>
			<?php endif; ?>

		</div>

		<?php
		// The Loop
		while ( have_posts() ) : the_post(); ?>

			<article class="article-loop">

				<div class="post-container">					

					<!-- Displays the featured image -->
					<?php the_post_thumbnail(); ?>

					<!-- Displays the post title -->
					<h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					
					<!-- Displays the post information -->
					<div class="post-information">					

					<span class="post-date"><?php the_time('F j, Y'); ?> | </span> <span class="post-author">By: </span> <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) );  ?>"><?php the_author(); ?></a> <span class="post-author">|</span> <?php the_category(', '); ?>

					</div>

				</div>

				<!-- Displays the post excerpt -->

				<div class="post-excerpt">
				
					<?php the_excerpt(); ?>
					
					<!-- Read more button -->
					<div class="read-more">
					
						<a href="<?php the_permalink(); ?>" class="read-more-button" title="<?php the_title_attribute(); ?>">Read more</a>							
						
					</div>

				</div>

			</article>

		<?php endwhile; 

		else: ?>			

			<p>Sorry, no posts matched your criteria.</p>

		<?php endif; ?>

		<div class="navigation" style="text-align: center;">
			
			<!-- Add a numeric posts pagination -->
			<?php $args = array(

				'format'             => '?paged=%#%',						
				'aria_current'       => 'page',
				'show_all'           => false,
				'prev_next'          => true,
				'prev_text'          => __( '« Previous' ),
				'next_text'          => __( 'Next »' ),
				'end_size'           => 1,
				'mid_size'           => 2,
				'type'               => 'plain',
				'add_args'           => false,
				'add_fragment'       => '',
				'before_page_number' => '',
				'after_page_number'  => '',						
				);					

				echo paginate_links( $args ); 
				//Similar function: the_posts_pagination();

			?>

		</div>

	</section>

	<?php get_sidebar(); ?>

</main>
 
<?php get_footer(); ?>