<?php get_header('blog'); ?>

<main role="main" class="all-post" id="<?php echo get_post_type(); ?>-single">
	
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<section class="home-header">
				<div class="wrapper head--padding text-center">
					<h1 class="blog--header"><?php the_title(); ?></h1>
					<p style="font-size: 14px; font-style: italic; color: #9d9d9d;">Date posted: <?php the_date(); ?></p>
				</div>
			</section>


			<section class="section--spacer wrapper content">
			    <div class="grid-three-fourths">

							<div class="singleBlogPost">

								<article>
									<p><?php the_content(); ?></p>
								</article>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>

		        <div class="grid-fourth"> 
				<?php if ( ! dynamic_sidebar( 'primary' ) ) : ?>

		   			<aside id="categories" class="widget">
					<ul>
					<?php wp_list_categories( 'title_li=' ); ?>
					</ul>
				    </aside>

				<?php endif; ?>
		    
		    	</div> 				
			</section>

 			


	<section class="section--spacer wrapper" style="display: none;">

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
		<div class="grid-full">
			<p class="font25" style="margin: 0 0 5px;"><a href = "<?php the_permalink();?>"><?php the_title(); ?></a></p>
			<p style="font-size: 14px; font-style: italic; color: #9d9d9d;">Date written: <?php the_date(); ?></p>
			<?php the_excerpt(); ?>
			<a href = "<?php the_permalink();?>"> Read more </a>
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