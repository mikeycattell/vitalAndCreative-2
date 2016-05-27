<?php
/*
Template Name: contact page
*/
?>
 
<?php get_header('blog'); ?>

<main role="main" class="page-content all-post" id="top">
	
  <section class="home--header">
    <div class="wrapper head--padding text-center">

      <h1 class="wow fadeInDown animated"><?php the_field('title-input'); ?></h1>
      <p class="content wow fadeInLeft animated animate_steps1"><?php the_field('h1-text'); ?></p>
      
    </div>
  </section>

	
			<!--<section class="home-header" style="background-image: url('<?php the_field('single-image');?>');">
				<div class="wrapper head--padding text-center">

					<header>
						<h1><?php the_field('title-input'); ?></h1>
					</header>

				</div>
			</section>-->

		<section class="section--first">
			<div class="wrapper content text-center"> 

				<p class="header--sub"><?php the_field('header--sub'); ?></p>

				<h2><?php the_field('h2-input'); ?></h2>
				<p><?php the_field('h2-paragraph'); ?></p>

			</div>
		</section>

		<section class="section--second">
			<div class="wrapper content"> 
				<?php echo do_shortcode('[contact-form-7 id="4" title="Contact form 1"]'); ?>
			</div>
		</section>


	

</main>

<?php get_footer(); ?>