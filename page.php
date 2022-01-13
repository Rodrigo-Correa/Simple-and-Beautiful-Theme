
<!-- Add header (header.php) -->
<?php get_header(); ?>

		<main class="wrap">

			<section class="content-area content-thin">
			
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
				<article class="article-full">
				
					<div class="page-title">
					
						<h1><?php the_title(); ?></h1>
					
					</div>
					
					<?php the_content(); ?>
				
				</article>
				
				<?php endwhile; else : ?>
				
				<article>
				
					<p>Sorry, no page was found!</p>
				
				</article>
				
				<?php endif; ?>
			
			</section>
			
			<!-- Add Sidebar (sidebar.php) -->
			<?php get_sidebar(); ?>

		</main>

<!-- Add footer (footer.php) -->
<?php get_footer(); ?>