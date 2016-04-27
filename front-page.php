<?php get_header(); //template name: homepage?>

<main role="main" class="page-content home-page">
  <section class="home--header" style="background-image: url('<?php the_field('h1-background');?>');">
    <div class="wrapper head--padding ">

      <h1><?php the_field('h1-input'); ?></h1>
      <a href = "#" class = "btn"> Button text </a>
    </div>
  </section>

  <section class="wrapper" style="padding: 50px 0 10px;">
    <div class="content">

      <div class="grid-four-tenths">
        <img src="<?php the_field('image-input-1'); ?>" style="
        -webkit-box-shadow: 0px 16px 32px 0px rgba(0, 0, 0, 0.14);
      -moz-box-shadow: 0px 16px 32px 0px rgba(0, 0, 0, 0.14);
      box-shadow: 0px 16px 42px 0px rgba(0, 0, 0, 0.14);">
      </div>

      <div class="grid-six-tenths">
        <h2><?php the_field('h2-input'); ?></h2>
        <p><?php the_field('text-input-1'); ?></p>
      </div>


    </div>

  </section>

  <!--<section class="wrapper">
    <div class="content">
      <hr>
    </div>
  </section>  -->

  <section class="text-center" style="background: #f2f2f2; border-top: 0px solid #d6d6d6; padding: 40px 0; margin: 40px 0 0;">


    <div class="wrapper">
      <div class="content">
        <h3 style="margin: 0; padding: 0 0 25px;"><?php the_field('h3-input'); ?></h3>
    
        <div style="margin: 0; padding: 0 0 20px;"><?php the_field('text-input-2'); ?></div>
      </div>
      <?php if( have_rows('service-repeater') ):
          while ( have_rows('service-repeater') ) : the_row();             
      ?>

      <div class="grid-third" style="margin-bottom: 40px;">
        <div style="background: #fff;padding: 30px; box-sizing: border-box;       -webkit-box-shadow: 0px 16px 42px 0px rgba(0, 0, 0, 0.14);
      -moz-box-shadow: 0px 16px 42px 0px rgba(0, 0, 0, 0.14);
      box-shadow: 0px 16px 42px 0px rgba(0, 0, 0, 0.14);">
          <img style="padding: 0 0 10px;" src="<?php the_sub_field('service-emblem'); ?>">
          <h5><?php  the_sub_field('service-title'); ?></h5>
          <p><?php the_sub_field('service-text'); ?></p>
        </div>
      </div>

      <?php endwhile; else : endif; ?>
    </div>

  </section>

  <div class="clearfix"></div>

  <section class="section--spacer" style="background-color: #ff1744; color: #fff;">
    <div class="wrapper minicontent text-center">
      <p class="font20">Reference site about Lorem Ipsum.</p>
      <a class="btn" href="#"> cta button </a>
    </div>
  </section>
  
  <section class="section--spacer wrapper content">
    <div class=" mini-content text-center">
      <h4><?php the_field('h4-input');?></h4>
      <p><?php the_field('text-input-3');?></p>
      <h2><?php the_field('recent-post-input');?></h2>
    </div>
    
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
      <div class="grid-half" style="min-height: 350px; margin-bottom: 30px;" >
        <p class="" style="font-size: 26px; margin: 0 0 3px;
        "><a href = "<?php the_permalink();?>"><?php the_title(); ?></a></p>
        <p style="font-size: 14px; font-style: italic; color: #9d9d9d;">Date written: &nbsp <?php the_date(); ?></p>
        <?php the_excerpt(); ?>
        <a class="btn btn-secondary" href = "<?php the_permalink();?>"> read more </a>
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

</main>
<?php get_footer(); ?>
