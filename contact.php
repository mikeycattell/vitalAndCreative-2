<?php
/*
Template Name: contact page
*/
?>

<?php get_header(); ?>

<main role="main" class="page-content all-post">
	
	
			<section class="home-header" style="background-image: url('<?php the_field('single-image');?>');">
				<div class="wrapper head--padding text-center">

					<header>
						<h1><?php the_field('title-input'); ?></h1>
					</header>

				</div>
			</section>


			<div class="wrapper content"> 

				<h2 class=" text-center">Interested in working together?</h2>

				<p class=" text-center">I'd love to know more about your company. <br>
				Fill out the form below and let's get started.</p>

				<?php echo do_shortcode('[contact-form-7 id="4" title="Contact form 1"]'); ?>

			</div>


	

</main>

<?php get_footer(); ?>