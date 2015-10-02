<?php get_header(); ?>

<div class="article-container">

	<div class="article-posts">

		<div class="element-post-page">

			<div class="layout-container">

				<div class="layout-span-three">

					<h5><a href="<?php print $_SERVER['HTTP_REFERER'];?>">← Back </a></h5>

				</div>

				<div class="layout-span-six">

					<h1><?php the_title(); ?></h1>

					<?php while ( have_posts() ) : the_post(); ?> 
        
						<?php the_content(); ?>
    				
    				<?php endwhile; wp_reset_query(); ?>

				</div>

			</div>

		</div>

	</div>

</div>

<?php get_footer(); ?>
