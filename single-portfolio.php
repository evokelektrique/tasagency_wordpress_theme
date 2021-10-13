<?php get_header(); ?>
<?php setPostViews(get_the_ID()); ?>

<div class="container portfolio-container">
   <div class="single-post-portfolio-header">
      <img
      class="single-post-thumbnail"
      src="<?php the_post_thumbnail_url(''); ?>"
      alt="<?php the_title(); ?>"
      />
      <div class="portfolio-content header">
         <h2 class="main-head-text primary-dark"><?php the_title(); ?></h2>
         <div class="portfolio-category">
            <img src="<?= get_template_directory_uri() . "/dist" ?>/images/category.svg" alt="" />
            <p class="p-small dark-4">
               <div>
                  <?php
                  $terms = get_the_terms( $post->ID , 'p_category' );
                  foreach($terms as $term):
                     $link = get_term_link( $term );
                  ?>
                     <a href="<?= $link ?>"><?= $term->name ?></a>،
                  <?php endforeach ?>
               </div>
            </p>
         </div>
         <div class="portfolio-date">
            <img src="<?= get_template_directory_uri() . "/dist" ?>/images/blog-calendar.svg" alt="" />
            <p id="date" class="p-small dark-4">
               <script type="text/javascript">
                  const date = new Date("<?= get_the_date(); ?>").toLocaleDateString('fa-IR', { year: 'numeric', month: 'long', day: 'numeric' })
                  document.getElementById("date").innerHTML = date.toString()
               </script>
            </p>
         </div>
         <p>
            <?php the_content(); ?>
         </p>
      </div>
   </div>
   <div class="portfolio-main-content">
      <img src="" alt="" />
   </div>
</div>


<?php get_footer(); ?>
