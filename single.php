<?php get_header(); ?>

<main role="main" class="all-post" id="<?php echo get_post_type(); ?>-single">
	
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<section class="home-header" style="background-image: url('<?php the_field('single-image');?>');">
				<div class="wrapper head--padding text-center">

					<header>
						<h1><?php the_title(); ?></h1>


					</header>
					<a href = "#" class = "btn"> Button text </a>
				</div>
			</section>


			<div class="wrapper content"> 

				<div class="singleBlogPost">

					<article>
						<p>Date posted: <?php the_date(); ?></p>
						<p><?php the_content(); ?></p>
					</article>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>


	<section class="section--spacer wrapper content--med">

		<h2>Read more like this:</h2>


		<?php
		$args = array (
			'posts_per_page'   => 4,
			'post_type' => 'post'
			);
		$posts_only_query = new WP_Query($args);
		if($posts_only_query->have_posts()): ?>



		<?php
		while($posts_only_query->have_posts()):
			$posts_only_query->the_post();
		if(($post_count/4)==floor($post_count/4)):
			echo '';
		endif;
		?>
		<div class="grid-half" style="min-height: 280px;">
			<p class="" style="font-size: 26px; margin: 0 0 3px;
			"><a href = "<?php the_permalink();?>"><?php the_title(); ?></a></p>
			<p style="font-size: 14px; font-style: italic; color: #9d9d9d;">Date written: &nbsp <?php the_date(); ?></p>
			<?php the_excerpt(); ?>
			<a href = "<?php the_permalink();?>"> read more </a>
		</div>
		<?php
		$post_count++;
		if(($post_count/4)==floor($post_count/4)):
			echo '';
		endif;
		endwhile;
		?>
	<?php endif; ?>


	<?php wp_reset_postdata(); ?>

</section>		

</div>

</main>

<?php get_footer(); ?>