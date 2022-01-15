
<!-- Add header (header.php) -->
<?php get_header(); ?>

		<main class="wrap">

			<section class="content-area content-thin">

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<article class="article-loop">

						<div class="post-container">		

							<!-- Displays the featured image -->
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail(); ?></a>

							<!-- Displays the post title -->
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

							<!-- Displays the post information -->
							<div class="post-information">

								<span class="post-date"><?php the_time('F j, Y'); ?> | </span> <span class="post-author">By: </span> <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) );  ?>" title="Posts by <?php  the_author();?>"><?php the_author(); ?></a> <span class="post-author">|</span> <?php the_category(', '); ?>

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
			
			<!-- Add Sidebar (sidebar.php) -->			
			<?php get_sidebar(); ?>			

		</main>
 
 <!-- Add footer (footer.php) -->
<?php get_footer(); ?>