<?php get_header(); //template name: services?>

<main role="main" class="page-content home-page">
  <section class="home--header" style="background-image: url('<?php the_field('h1-background');?>');">
    <div class="wrapper head--padding ">

      <h1><?php the_field('h1-input'); ?></h1>
      <a href = "#" class = "btn"> Button text </a>
    </div>
  </section>

  <section class="wrapper" style="padding: 50px 0;">
    <div class="content">

      <div class="grid-third">
        <img src="<?php the_field('image-input-1'); ?>">
      </div>

      <div class="grid-two-thirds">
        <h2><?php the_field('h2-input'); ?></h2>
        <p><?php the_field('text-input-1'); ?></p>
      </div>


    </div>

  </section>

  <section class="section--spacer text-center" style="background-color: #ff1744; color: white;">


    <div class="wrapper">
      <div class="content">
        <h3><?php the_field('h3-input'); ?></h3>
    
        <p><?php the_field('text-input-2'); ?></p>
      </div>
      <?php if( have_rows('service-repeater') ):
          while ( have_rows('service-repeater') ) : the_row();             
      ?>

      <div class="grid-third"> <img src="<?php the_sub_field('service-emblem'); ?>">
        <h5><?php  the_sub_field('service-title'); ?></h5>
        <p><?php the_sub_field('service-text'); ?></p>
      </div>

      <?php endwhile; else : endif; ?>
    </div>

  </section>

  <div class="clearfix"></div>

  <section class="section--spacer" style="background-color: #ff1744">
    <div class="wrapper text-center">
      <p>asdasdasdasd</p>
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
      <div class="grid-half" style="min-height: 350px;" >
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
