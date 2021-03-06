<?php
/*
Template Name: post page
*/
?>

<?php get_header('blog'); ?>

	<main role="main" class="all-post">

		<section class="home--header"> 
        <div class="wrapper head--padding text-center">
            <h1><?php the_field('title-input'); ?></h1>
        </div>

        </section>

  <section class="section--spacer wrapper">
    <div class="grid-three-fourths">
    
      <?php
          $args = array (
              'posts_per_page'   => -1,
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
        <div style="margin-bottom: 60px;">
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


        <div class="grid-fourth"> 

        <?php get_search_form(); ?>
		<?php if ( ! dynamic_sidebar( 'primary' ) ) : ?>

   			<aside id="categories" class="widget">
			<ul>
			<?php wp_list_categories( 'title_li=' ); ?>
			</ul>
		    </aside>

		<?php endif; ?>
    
		<!--<aside id="search-3" class="widget widget_search"><form role="search" method="get" class="search-form" action="">
        <label>
        <input type="search" class="search-field" placeholder="Search This website" value="" name="s" title="Search for:">
        </label>
        
      </form>
      </aside>-->
    </div>  

	</section>
	</main>

<?php get_footer(); ?>