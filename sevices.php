<?php get_header(); //template name: services?>

<main role="main" class="page-content all-post">
  <section class="home--header" style="background-image: url('<?php the_field('h1-background');?>');">
    <div class="wrapper head--padding text-center">
    <header>
      <h1><?php the_field('h1-input'); ?></h1>
    </header>

    </div>
  </section>

  <section class="wrapper content">
      <h2><?php the_field('text-input-2'); ?></h2>
  </section>

  <section class="wrapper content">
      <?php if( have_rows('servicemain-repeater') ):
          while ( have_rows('servicemain-repeater') ) : the_row();             
      ?>
      <div style="background: #f6f9fa; border: #d6d6d6; margin: 0 0 20px; padding: 40px 20px;">
        <div class="grid-third">
          <img src="<?php the_sub_field('service_image'); ?>">
        </div>

        <div class="grid-two-thirds">
          <h2><?php the_sub_field('service-title'); ?></h2>
          <p><?php the_sub_field('service-text'); ?></p>
        </div>
        <div class="clearfix"></div>
      </div>

      <div class="clearfix"></div>


      <?php endwhile; else : endif; ?>  

  </section>

  <div class="clearfix"></div>

  <section class="section--spacer" style="background-color: #ff1744; color: white;">
    <div class="wrapper text-center">
      <p><?php the_field('h3-input'); ?></p>
      <a class="btn" href="#"> cta button </a>
    </div>
  </section>
  

</main>
<?php get_footer(); ?>
