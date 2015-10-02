<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="article-container">

	<div class="article-posts">

		<div class="element-post-page">

			<div class="layout-container">

				<div class="layout-span-three">

					<h5><a href="<?php print $_SERVER['HTTP_REFERER'];?>">← Back </a></h5>

				</div>

				<div class="layout-span-six">

					<h1><?php the_title(); ?></h1>

					<h4><?php echo the_date(); ?></h4>

					<?php the_content(); ?>

				</div>

			</div>

		</div>

	</div>

	<?php endwhile;
	else:
	endif ?>

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
