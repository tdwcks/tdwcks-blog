<?php /* Template Name: Home Page Template */ get_header(); ?>

<div class="article-container">

	<div class="article-posts">

		<?php

			$args = array(
				'posts_per_page' => 20,
			);

			$query = new WP_Query($args);
		?>

		<?php while( $query->have_posts() ) : $query->the_post(); ?>

		<?php 
		$content = get_the_content();
		$trimmed_content = wp_trim_words( $content, 40, NULL );
		?>

		<a href="<?php the_permalink(); ?>" class="element-post">

		<div class="layout-container">

			<div class="layout-span-three">

				<h5><?php the_date(); ?></h5>

			</div>

			<div class="layout-span-six">

				<h1><?php the_title(); ?></h1>

				<p><?php echo $trimmed_content ?></p>

			</div>

			<div class="layout-span-three layout-column-right">

				<h5 class="type-right">Read More →</h5>

			</div>

		</div> <!-- layout-container -->

		</a> <!-- article-posts -->

		<?php endwhile; ?>

		<?php wp_reset_query();?>

	</div>

	<div class="article-info">

		<?php $recent = new WP_Query("page_id=20"); while($recent->have_posts()) : $recent->the_post();?>

		<div class="element-post-page">

			<div class="layout-container">

				<div class="layout-shift-three layout-span-six">

					<h1><?php the_title(); ?></h1>

					<?php the_content(); ?>

				</div>

			</div>

		</div>

		<?php endwhile; ?>

	</div>

</div>


<?php get_footer(); ?>
