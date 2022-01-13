
<!-- Add header (header.php) -->
<?php get_header(); ?>

		<main class="wrap">

			<section class="content-area content-thin">
			
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<article class="article-full">

					<div class="post-header">

						<h1><?php the_title(); ?></h1>

						<!-- Displays the post information -->
						<div class="post-information">

							<span class="post-date"><?php the_time('F j, Y'); ?> | </span> <span class="post-author">By: </span> <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) );  ?>" title="Posts by <?php  the_author();?>"><?php the_author(); ?></a> <span class="post-author">|</span> <?php the_category(', '); ?>

						</div>
						
					</div>
					
					<div class="post-content">
					
						<?php the_content(); ?>
					
					</div>

					<div class="post-comments">
					
						<!-- Displays the comments template (comments.php)
						Comments_template() | Function | WordPress Developer Resources
						https://developer.wordpress.org/reference/functions/comments_template/ -->
						<?php comments_template(); ?>
					
					</div>

				</article>
				
				<?php endwhile; else : ?>
				
				<article>
					
					<p>Sorry, no post was found!</p>
					
				</article>

				<?php endif; ?>

				<div class="post-navigation">
							
					<!-- Add the next post and previous post links -->
					<?php previous_post_link('%link', 'Previous'); ?> | <?php next_post_link('%link', 'Next'); ?><br>

				</div>

			</section>

			<!-- Add Sidebar (sidebar.php) -->
			<?php get_sidebar(); ?>

		</main>

<!-- Add footer (footer.php) -->
<?php get_footer(); ?>