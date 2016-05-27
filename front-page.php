<?php get_header(); //template name: homepage?>
<!--style="background-image: url('<?php the_field('h1-background');?>');"-->
<main role="main" class="page-content home-page" id="top">
  <section class="home--header">
    <div class="wrapper head--padding text-center">

      <h1 class="wow fadeInDown animated"><?php the_field('h1-input'); ?></h1>
      <p class="content wow fadeInLeft animated animate_steps1"><?php the_field('h1-text'); ?></p>
      <a class="btn wow fadeInUp animated animate_steps2" href="<?php the_field('h1-button--link'); ?>"><?php the_field('h1-button--text'); ?></a>
    </div>
  </section>

  <section class="section--first">
    <div class="wrapper content">

      <div class="grid-full text-center">

        <p class="header--sub"><?php the_field('h2-title'); ?></p>
        <h2><?php the_field('h2-input'); ?></h2>
        <p><?php the_field('text-input-1'); ?></p>

        <blockquote class="wow fadeInUp animated">
          <p class="testiominal"><?php the_field('testimonial-text'); ?></p>
          <p class="author"><strong> - <?php the_field('testimonial-author'); ?></strong></p>
        </blockquote>

    </div>

  </section>

  
  <section id="services" class="section--second text-center">

    <div class="wrapper">
      <div class="content--med">
        <h4><?php the_field('h3-input'); ?></h4>
    
        <p><?php the_field('text-input-2'); ?></p>
      </div>


      <div class="content">
        <ul class="services">
        <?php if( have_rows('service-repeater') ):
            while ( have_rows('service-repeater') ) : the_row();             
        ?>

          <li class="grid-half wow fadeInUp animated">
            <img src="<?php the_sub_field('service-emblem'); ?>">
            <h3><?php  the_sub_field('service-title'); ?></h3>
            <p><?php the_sub_field('service-text'); ?></p>
          </li>
        
        <?php endwhile; else : endif; ?>
        </ul>
      </div>
    </div>

  </section>

  <div class="clearfix"></div>

  <section class="section--cta">
    <div class="wrapper text-center">
      <p><?php the_field('cta-1'); ?></p>
      <a class="btn" href="<?php the_field('cta-1--link'); ?>" title="<?php the_field('cta-1--title'); ?>"> <?php the_field('cta-1--text'); ?></a>
    </div>
  </section>


  <section class="section--third" style="display: none;">
    <div class="wrapper content">

      <div class="grid-full text-center">
        <h5><?php the_field('h5-title'); ?></h5>
        <p style="font-size: 18px;"><?php the_field('h5-text'); ?></p>

        <?php if( have_rows('work--items') ): ?>
          <?php while( have_rows('work--items') ): the_row(); ?>

            <div class="work--item">
              <img class="work--bg_img" src="<?php the_sub_field('work_background'); ?>">
              <div class="work--textposition">
                <p class="work--text hidemobile"><?php the_sub_field('work_text'); ?></p>
                <p class="work--header"><?php the_sub_field('work_header'); ?></p>
                <p class="work--text showmobile"><?php the_sub_field('work_text'); ?></p>
                <p class="work--bullets"><?php the_sub_field('work_bullets'); ?></p>
              </div>
            </div>
          
          <?php endwhile; ?>  
        <?php endif; ?>   

      </div>
    
    </div>

    <div class="wrapper text-center">
      <p><?php the_field('cta-2'); ?></p>
      <a class="btn" href="<?php the_field('cta-2--link'); ?>" title="<?php the_field('cta-2--title'); ?>"> <?php the_field('cta-2--text'); ?></a>
    </div>    

    <div class="clearfix"></div>  


  </section>




  <section class="section--spacer section--first">
    <div class=" wrapper content">
      <h4 class="text-center"><?php the_field('h4-input');?></h4>    

        <?php
            $args = array (
                'posts_per_page'   => 1,
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
        <a class="btn btn-small" href = "<?php the_permalink();?>"> Read more </a>
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
  </div>
  </section>

</main>

<?php get_footer(); ?>
