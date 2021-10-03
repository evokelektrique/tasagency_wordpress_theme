<?php
/**
 * Template Name: Portfolio
 */
get_header();
?>
<!-- Projects Header -->
<div class="projects-header-section">
  <div class="projects-header-container">
    <h1>نمونه کارهای آژانس دیجیتال مارکتینگ <span>تاس</span></h1>
    <p>پروژه های موفق مارا در این قسمت ببینید.</p>
  </div>
</div>

<!-- Projects Container -->
<div class="projects-content-container">
   <div class="portfolios">
      <?php
      $currentPage = get_query_var('paged');
      $posts = new WP_Query(array(
      'post_type' => 'portfolio',
      'posts_per_page' => 10,
      'paged' => $currentPage
      ));
      if ($posts->have_posts()) : while ($posts->have_posts()) : $posts->the_post();
         $terms = get_the_terms( $post->ID , 'p_category' );
      ?>
<!--
      <div class="cat"><?php foreach ( $terms as $term ) {echo $term->name;} ?></div>
      <div class="entry">
      <h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
      </div>
      <a href="<?php the_permalink() ?>" title="مشاهده نمونه کار <?php the_title(); ?>">مشاهده</a>
      </article>
 -->
      <!-- Portfolio box -->
      <div class="portfolioBox">
         <img class="thumbnail" src="<?php the_post_thumbnail_url(''); ?>" alt="<?php the_title(); ?>" />
         <div class="categoryTag">
            <img src="<?= get_template_directory_uri() . "/dist" ?>/images/Category-portfolio.svg" alt="" />
            <p class="label small-text-color"><?= $terms[0]->name ?></p>
         </div>
         <a href="<?php the_permalink() ?>">
            <h6 class="postName primary-dark"><?php the_title(); ?></h6>
         </a>
         <a href="<?php the_permalink() ?>">
            <button class="cta-text" href="">مشاهده پروژه</button>
         </a>
      </div>
      <?php endwhile; else: ?><?php endif; ?>
   </div>
</div>







<!-- Pagination -->
<?=
 "<nav class='pagenavi'><div class='nav-links'>" . paginate_links(array(
   'total' => $posts->max_num_pages,
   'next_text'          => '<i class="fas fa-chevron-left"></i>',
   'prev_text'          => '<i class="fas fa-chevron-right"></i>',
   'mid_size'           => 2,
)) . "</div></nav>";
?>

<?php get_footer(); ?>
