<?php get_header(); ?>

<?php
while ( have_posts() ) : the_post();
?>
<?php setPostViews(get_the_ID()); ?>
<div class="single-blog-container" style="margin: 150px auto">
  <div class="single-blog-thumbnail">
    <img class="thumbnailImage" src="<?= get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
    <div class="thumbnailContent">
      <h1 class="main-head-text primary-dark">
        <?php the_title(); ?>
      </h1>
      <p class="small-text-color thumbnailDescription">
        <?php the_excerpt(); ?>
      </p>
      <div class="thumbnailInfo">
        <div class="thumbnail-date">
          <img src="<?= get_template_directory_uri() . "/dist" ?>/images/blog-calendar.svg" alt="" />
          <p class="p-small dark-4" id="date">
            <?php the_date(); ?>
          </p>
        </div>
        <div class="thumbnail-category">
          <img src="<?= get_template_directory_uri() . "/dist" ?>/images/category.svg" alt="" />
          <p class="p-small dark-4">
            <?php $terms = get_the_terms( $post->ID, 'category' ); ?>
            <div>
               <?php foreach($terms as $term): ?>
               <a href="<?php get_term_link( $term ); ?>"><?= $term->name ?></a>،
               <?php endforeach ?>
            </div>
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="single-blog-main-content">
    <div>
      <div class="blogPostContent">
        <div class="post">
          <?php the_content(); ?>
        </div>
        <div class="author">
         <?php echo get_avatar( get_the_author_meta( 'ID' ) ); ?>
          <div class="authorContent">
            <h6 class="primary-dark"><?php the_author() ?></h6>
            <p class="p-small description-color">
               <?php $author_id = get_the_author_meta( 'ID' ); ?>
               <?= get_the_author_meta('description', $author_id); ?>
            </p>
          </div>
        </div>
      </div>
      <?php
      $terms = get_the_terms( $post->ID, 'category' );

      // Change it if you want ?
      $related_count = 5;

      if ( empty( $terms ) ) $terms = array();

      $term_list = wp_list_pluck( $terms, 'slug' );

      $related_args = array(
         'post_type' => 'post',
         'posts_per_page' => $related_count,
         'post_status' => 'publish',
         'post__not_in' => array( $post->ID ),
         'orderby' => 'rand',
         'tax_query' => array(
            array(
               'taxonomy' => 'category',
               'field' => 'slug',
               'terms' => $term_list
            )
         )
      );
      $query = new WP_Query( $related_args );
      if($query->have_posts()):
      ?>
      <div class="relatedPosts">
        <h3>پیشنهاد میکنیم مقالات زیر را از دست ندهید</h3>
        <div class="posts">
         <?php while($query->have_posts()): $query->the_post(); ?>
          <div class="relatedPostContainer">
            <img src="<?= get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
            <a href="<?php the_permalink(); ?>">
              <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
            </a>
          </div>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        </div>
      </div>
      <?php endif ?>

      <!-- Comments Container -->
      <div class="comments-section-container">

         <!-- Form -->
         <?php comments_template(); ?>

      </div>
    </div>


    <div class="sidebar">
      <?php
      $terms = get_the_terms( $post->ID, 'category' );

      // Change it if you want ?
      $related_count = 5;

      if ( empty( $terms ) ) $terms = array();

      $term_list = wp_list_pluck( $terms, 'slug' );

      $related_args = array(
         'post_type' => 'post',
         'posts_per_page' => $related_count,
         'post_status' => 'publish',
         'post__not_in' => array( $post->ID ),
         'orderby' => 'rand',
         'tax_query' => array(
            array(
               'taxonomy' => 'category',
               'field' => 'slug',
               'terms' => $term_list
            )
         )
      );
      $query = new WP_Query( $related_args );
      if($query->have_posts()):
      ?>
      <div class="sidebarRelatedPosts">
        <h3 class="primary-text">مقالات مرتبط</h3>
        <ul>
         <?php while($query->have_posts()): $query->the_post(); ?>
          <a href="<?php the_permalink(); ?>"><li><?php the_title(); ?></li></a>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        </ul>
      </div>
      <?php endif ?>
      <div class="share-post-container">
        <div class="copyModal copyModalHidden">لینک کپی شد!</div>
        <button>
          <img src="<?= get_template_directory_uri() . "/dist" ?>/images/blog/share/share-btn.svg" alt="" />
        </button>
        <button onclick="
          window.open(`https://t.me/share/url?url=${window.location.href}`)
        ">
          <img src="<?= get_template_directory_uri() . "/dist" ?>/images/blog/share/telegram.svg" alt="" />
        </button>
        <button onclick="
          window.open(`https://www.linkedin.com/cws/share?url=${window.location.href}`)
        ">
          <img src="<?= get_template_directory_uri() . "/dist" ?>/images/blog/share/linkedin.svg" alt="" />
        </button>
        <button>
          <p>1</p>
          <img src="<?= get_template_directory_uri() . "/dist" ?>/images/blog/share/Comment.svg" alt="" />
        </button>
        <button onclick="LikeButton()">
          <p>0</p>
          <img src="<?= get_template_directory_uri() . "/dist" ?>/images/blog/share/like.svg" alt="" />
        </button>
        <button onclick="DislikeButton()">
          <p>0</p>
          <img src="<?= get_template_directory_uri() . "/dist" ?>/images/blog/share/dislike.svg" alt="" />
        </button>
      </div>
    </div>
  </div>
</div>

<?php endwhile;?>
<?php get_footer(); ?>
