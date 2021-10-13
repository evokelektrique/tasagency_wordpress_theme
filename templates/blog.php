<?php
/**
 * Template Name: Blog
 */
get_header(); ?>


<div class="blogs-header">
  <div class="blogs-header-container container">
    <h1>بلاگ آژانس دیجیتال مارکتینگ <span>تاس</span></h1>
    <p>به جدید ترین مقالات روز دنیا را که توسط تیم تولید محتوای ما تولید شده دسترسی داشته باشید</p>
  </div>
</div>
<div class="container">
  <div class="blog">
    <div class="blogHeader">
      <div class="categories col">
        <div class="dropdown">
          <div  id="dropdown-blog-category-input" class="dropdownInput">
            <img src="/images/arrow-dropdown.svg" alt="" />
            <p>دسته بندی محتوا</p>
          </div>
            <?php
            $idNews = get_term_by('slug', 'news', 'category');
            $args = array(
               'orderby' => 'name',
               'order' => 'ASC',
               'parent' => 0,
               'exclude' => $idNews->term_id
            );
            $terms =  get_categories($args);
            ?>
          <ul id="dropdown-blog-category-list" class="">
            <?php foreach($terms as $term):
               $class = ( is_category( $term->name ) ) ? 'selectedCategory' : '';
               ?>
              <li class="label <?= $class ?>"><a href="<?= get_term_link( $term ) ?>"><?= $term->name ?></a></li>
            <?php endforeach; ?>
          </ul>
        </div>
        <ul class="categoriesList">
         <?php foreach($terms as $term):
            $class = ( is_category( $term->name ) ) ? 'selectedCategory' : '';
            ?>
           <li class="label <?= $class ?>"><a href="<?= get_term_link( $term ) ?>"><?= $term->name ?></a></li>
         <?php endforeach; ?>
        </ul>
      </div>
      <div class="col">
        <div class="search-input-container">
          <img src="<?= get_template_directory_uri() . "/dist" ?>/images/blog/Search.svg" alt="" />
          <form method="get">
            <input type="text" name="s" placeholder="جست و جو کنید" />
          </form>
        </div>
      </div>
    </div>
    <div class="mainBlogSection">
      <div class="mainSection">
          <div class="mainContent">

            <?php
            $currentPage = get_query_var('paged');
            $posts = new WP_Query(array(
               'post_type' => 'post',
               'posts_per_page' => 1,
               'paged' => $currentPage,
               'cat'   => -$idNews->term_id
            ));
            if ($posts->have_posts()) : while ($posts->have_posts()) : $posts->the_post(); $category = get_queried_object();
            ?>
            <div class="postBox">
              <div class="blog-post-box-container">
                <div class="postThumbnail">
                  <img src="<?= get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
                </div>
                <div class="details">
                  <div>
                    <img src="<?= get_template_directory_uri() . "/dist" ?>/images/Time.svg" alt="" />
                    <p class="label small-text-color">
                     <?php echo esc_html( human_time_diff( get_the_time('U'), current_time('timestamp') ) ) . ' پیش'; ?>
                    </p>
                  </div>
                  <div>
                    <img src="<?= get_template_directory_uri() . "/dist" ?>/images/Calendar.svg" alt="" />
                    <p class="label small-text-color"><?php the_date(); ?></p>
                  </div>
                </div>
                <div class="postContent">
                  <a href="#"><h6 class="postName primary-dark"><?php the_title(); ?></h6></a>
                  <div class="main-head-text p-small description-color">
                    <?php the_excerpt() ?>
                  </div>
                  <a href="<?= get_the_permalink(); ?>" class="cta-text">ادامه مطلب</a>
                </div>
              </div>
            </div>
          </div>
         <?php endwhile; ?>
         <?php endif;?>

          <ul class="pagination">
         <?php echo
         paginate_links(array(
            'total' => $posts->max_num_pages,
            'next_text'          => '',
            'prev_text'          => '',
            'mid_size'           => 1
         ));
         ?>
          </ul>


      </div>
      <div class="sidebar">
        <div class="popular-posts-container">
          <h4 class="primary-dark">پربازدید ترین های ماه</h4>
          <ul>
            <?php
             query_posts('meta_key=post_views_count&posts_per_page=5&orderby=meta_value_num&
             order=DESC');
             if (have_posts()) : while (have_posts()) : the_post();
             ?>
              <a href="<?= get_the_permalink(); ?>">
                <div>
                  <li class="description-color"><h6><?php the_title(); ?></h6></li>
                  <p class="dark-4 label"><?= get_the_date(); ?></p>
                </div>
              </a>
            <?php
            endwhile; endif;
            wp_reset_query();
            ?>
          </ul>
        </div>
        <div class="social-media-container">
          <img class="logo" src="/images/blog/logo.svg" alt="" />
          <h6 class="primary-dark main-head-text">آژانس دیجیتال مارکتینگ</h6>
          <p class="p-small description-color">
          دنبال آموزش آپدیت گورخر گوگل می‌گردید؟ جای درستی را برای خواندن انتخاب کرده‌اید! امروزه، گوگل از الگوریتم‌های بسیار هوشمندی استفاده...
          </p>
          <div class="socialmedia-icons-container">
            <a href=""><img src="<?= get_template_directory_uri() . "/dist" ?>/images/blog/socialmedia/instagram.svg" alt="Instagram" /></a>
            <a href=""><img src="<?= get_template_directory_uri() . "/dist" ?>/images/blog/socialmedia/Telegram.svg" alt="Telegram" /></a>
            <a href=""><img src="<?= get_template_directory_uri() . "/dist" ?>/images/blog/socialmedia/Twitter.svg" alt="Twitter" /></a>
            <a href=""><img src="<?= get_template_directory_uri() . "/dist" ?>/images/blog/socialmedia/linkedin.svg" alt="linkedin" /></a>
            <a href=""><img src="<?= get_template_directory_uri() . "/dist" ?>/images/blog/socialmedia/youtube.svg" alt="youtube" /></a>
            <a href=""><img src="<?= get_template_directory_uri() . "/dist" ?>/images/blog/socialmedia/aparat.svg" alt="aparat" /></a>
            <a href=""><img src="<?= get_template_directory_uri() . "/dist" ?>/images/blog/socialmedia/virgool.svg" alt="virgool" /></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="feed-section-container">
    <img class="overlayBackground" src="<?= get_template_directory_uri() . "/dist" ?>/images/blog/subscribe-bg.svg" alt="" />
    <div class="feed-section-content">
      <h2 class="main-head-text primary-dark">عضویت در خبرنامه</h2>
      <p class="description-color">مطالب داغ و بروز رو از دست نده و از همه چی بیخبر نباش</p>
      <form class="feed-form">
        <input type="text" placeholder="ایمیل خودت رو اینجا بنویس" />
        <button type="submit">عضو شدن</button>
        <button class="feed-mobileSubmit" type="submit">عضو شدن</button>
      </form>
    </div>
  </div>
  <div class="blogs-section-container" style="margin: 200px auto;">
    <div class="content">
      <h2 class="primary-dark main-head-text">محبوب ترین نوشته ها</h2>
      <p class="description-color description-text">اینجا محتوایی تولید می‌کنیم که دانستنش سرعت شما را در رسیدن به اهدافتان بیشتر می‌کند.</p>
    </div>
    <div class="swiper blogs-slider-container">
      <div class="swiper-wrapper">
         <?php
         query_posts('meta_key=post_views_count&posts_per_page=5&orderby=meta_value_num&
               order=DESC');
         if (have_posts()) : while (have_posts()) : the_post();
         ?>
        <div class="swiper-slide">
          <div class="blog-post-box-container">
            <div class="postThumbnail">
              <img src="<?= get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
            </div>
            <div class="details">
              <div>
                <img src="<?= get_template_directory_uri() . "/dist" ?>/images/Time.svg" alt="" />
                <p class="label small-text-color"><?php echo esc_html( human_time_diff( get_the_time('U'), current_time('timestamp') ) ); ?></p>
              </div>
              <div>
                <img src="<?= get_template_directory_uri() . "/dist" ?>/images/Calendar.svg" alt="" />
                <p class="label small-text-color"><?= get_the_date(); ?></p>
              </div>
            </div>
            <div class="postContent">
              <a href="<?= get_the_permalink(); ?>"><h6 class="postName primary-dark"><?php the_title(); ?></h6></a>
              <div class="main-head-text p-small description-color">
               <?php the_excerpt() ?>
               </div>
              <a href="<?= get_the_permalink(); ?>" class="cta-text">ادامه مطلب</a>
            </div>
          </div>
        </div>
        <?php
        endwhile; endif;
        wp_reset_query();
        ?>
      </div>
    </div>
    <div class="prevArrow blogs-swiper-button-prev swiper-button-next">
      <img src="<?= get_template_directory_uri() . "/dist" ?>/images/slider-arrow.svg" alt="" />
    </div>
    <div class="blogs-swiper-button-next swiper-button-next">
      <img src="<?= get_template_directory_uri() . "/dist" ?>/images/slider-arrow.svg" alt="" />
    </div>
    <div class="cta-btn-container">
      <a href="#"><button class="btnJumper primaryBtn">رفتن به بلاگ</button></a>
    </div>
  </div>
  <div class="our-instagram-container">
    <div class="our-instagram-header-container">
      <h2 class="primary-dark main-head-text">اینستاگرام ما</h2>
      <p class="description-text description-color">محتوا های آموزشی ما را در اینستاگرام دنبال کنید</p>
    </div>
    <div class="our-instagram-content-container">
      <div class="our-instagram-posts">
          <img src="<?= get_template_directory_uri() . "/dist" ?>/images/blog/instagram/1.jpg" alt="target-marketing" />
          <img src="<?= get_template_directory_uri() . "/dist" ?>/images/blog/instagram/2.jpg" alt="best-way-to-see-future" />
          <img src="<?= get_template_directory_uri() . "/dist" ?>/images/blog/instagram/3.jpg" alt="grow-instagram-like" />
          <img src="<?= get_template_directory_uri() . "/dist" ?>/images/blog/instagram/4.jpg" alt="powerfull-business" />
          <img src="<?= get_template_directory_uri() . "/dist" ?>/images/blog/instagram/5.jpg" alt="what-is-green-content" />
          <img src="<?= get_template_directory_uri() . "/dist" ?>/images/blog/instagram/6.jpg" alt="5-rules-of-Illunmusk" />
      </div>
      <a href="https://instagram.com/tasagency_net"><button class="primaryBtn btnJumper">
        رفتن به اینستاگرام
      </button></a>
    </div>
  </div>
</div>





<script>
  const headerContainer = document.querySelector('#fixed-header-container')
  window.addEventListener("scroll", () => {
    if (window.pageYOffset > 100) {
      headerContainer.classList.add('smallHeader')
    } else {
      headerContainer.classList.remove('smallHeader')
    }
  }
  );
  const mobileMenu = document.querySelector('.mobileMenu');
  const backDrop = document.querySelector('.backDrop');
  function toggleMobileMenu() {
    mobileMenu.classList.toggle('mobileMenuHidden');
    backDrop.classList.toggle('backDropHidden');
  }
  const dropdownInputCategory = document.querySelector('#dropdown-blog-category-input');
  const dropdownListCategory = document.querySelector('#dropdown-blog-category-list');
  dropdownInputCategory.addEventListener('click', () => {
    dropdownListCategory.classList.toggle('showDropdown')
  })
</script>
<?php get_footer(); ?>
