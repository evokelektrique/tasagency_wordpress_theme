<?php
/**
 * Template Name: News
 */

get_header();
?>

<?php
$posts = new WP_Query(array(
   'post_type' => 'post',
   'category_name' => 'news',
   'posts_per_page' => -1,
   'orderby' => 'date'
));
?>



   <div class="news-container">
     <div class="categories">
       <ul>
         <li class="label">
           <?php the_title(); ?>
         </li>
       </ul>
     </div>
     <?php if ($posts->have_posts()) : while ($posts->have_posts()) : $posts->the_post();?>
      <?php $terms = get_the_terms($post->ID, 'category'); ?>
      <div class="news-posts-container" style="display: flex; flex-direction: column;">
        <div class="news-box-main-container">
          <p class="category"><?= $terms[0]->name ?></p>
          <div class="news-box-container">
              <div class="socialMedia">
                <div class="copyModal copyModalHidden">لینک کپی شد!</div>
                <button>
                  <img src="<?= get_template_directory_uri() . "/dist" ?>/images/blog/share/share-btn.svg" alt="" />
                </button>
                <button onclick="
                  window.open('https://t.me/share/url?url=<?= get_permalink(); ?>')
                ">
                  <img src="<?= get_template_directory_uri() . "/dist" ?>/images/blog/share/telegram.svg" alt="" />
                </button>
                <button onclick="
                  window.open('https://www.linkedin.com/cws/share?url=<?= get_permalink(); ?>')
                ">
                  <img src="<?= get_template_directory_uri() . "/dist" ?>/images/blog/share/linkedin.svg" alt="" />
                </button>
              </div>
              <div class="news-box-content-container">
                <h2 class="primary-dark main-head-text"><?php the_title(); ?></h2>
                <div class="url">
                  <img src="<?= get_template_directory_uri() . "/dist" ?>/images/earth-logo.svg" alt="" />
                  <p class="small-text-color">tasagency.net</p>
                </div>
                <p class="p-small small-text-color description">
                  <?php the_excerpt(); ?>
                </p>
                <a href="<?php the_permalink(); ?>" class="cta-text">ادامه مطلب</a>
              </div>
              <div class="thumbnail">
                <p class="tag">اسم تگ</p>
                <img src="<?= get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
              </div>
          </div>
        </div>
      </div>
      <?php endwhile;?>
      <?php endif;wp_reset_postdata();?>
     </div>
    </div>



<?php get_footer(); ?>
