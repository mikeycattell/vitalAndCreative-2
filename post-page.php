<?php
/*
Template Name: post page
*/
?>

<?php get_header(); ?>

	<main role="main" class="all-post">

		<section class="home--header" style="background-image: url('<?php the_field('post-background');?>');"> 
        <div class="wrapper head--padding text-center">

          <header>
            <h1><?php the_field('title-input'); ?></h1>
          </header>
        </div>

        </section>

  <section class="section--spacer wrapper content">
    <div class="grid-two-thirds">
    
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
        
          <p class="" style="font-size: 26px; margin: 0 0 3px;
          "><a href = "<?php the_permalink();?>"><?php the_title(); ?></a></p>
          <p style="font-size: 14px; font-style: italic; color: #9d9d9d;">Date written: &nbsp <?php the_date(); ?></p>
          <?php the_excerpt(); ?>
          <a class="btn" href = "<?php the_permalink();?>"> read more </a>
        
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


        <div class="grid-third"> 
		<!--<?php if ( ! dynamic_sidebar( 'primary' ) ) : ?>

   			<aside id="categories" class="widget">
			<ul>
			<?php wp_list_categories( 'title_li=' ); ?>
			</ul>
		    </aside>

		<?php endif; ?>
    -->
		<aside id="search-3" class="widget widget_search"><form role="search" method="get" class="search-form" action="">
        <label>
        <input type="search" class="search-field" placeholder="Search This website" value="" name="s" title="Search for:">
        </label>
        
      </form>
      </aside>
    </div>  

	</section>
	</main>

<?php get_footer(); ?>