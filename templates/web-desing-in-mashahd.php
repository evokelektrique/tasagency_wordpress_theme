<?php
/**
 * Template Name: Web Design In Mashhad
 */
get_header(); ?>


<div class="container">
  <div class="web-design-intro-section intro-section-container container">
    <div class="content">
      <h4 class="first-head-text primary-text">ویترین آنلاین کسب و کار خود را بسازید</h4>
      <h1 class="primary-dark main-head-text">طراحی وب سایت</h1>
      <p class="p description-text description-color">
        ما چرخه کامل فرآیند هایی که برای ایجاد یک وب سایت کامل نیاز هست را انجام میدهیم، از ابتدای مسیر تا تحویل وب سایتی بر اساس آخرید فناوری های روز، آماده برای رشد دادن کسب و کار شما
      </p>
      <div class="btnGroup">
        <a href="https://tasagency.net/about">
          <button class="primaryBtn btnJumper">مشاوره رایگان</button>
        </a>
        <a href="#services">
          <button class="secondaryBtn">مشاهده تعرفه ها</button>
        </a>
      </div>
    </div>
    <div class="imageHeader">
    </div>
  </div>
  <div class="features-section-container">
    <div class="features-section-content">
      <h5 class="first-head-text primary-text">ویژگی های ما</h5>
      <h2 class="primary-dark main-head-text">چرا از خدمات طراحی رابط و تجربه کاربری تاس استفاده کنید؟</h2>
        <p class="p description-text description-color">چه چیزی، طراحی UI و طراحی ux ما را نسبت به اکثر همکارانمان متفاوت میکند؟</p>
    </div>
    <div class="features">
      <div class=col>
        <div class="feature">
          <div class="iconContainer">
            <img class="blurred" src="<?= get_template_directory_uri() . '/dist' ?>/images/analysis-blur.png" alt="" />
            <img class="normal" src="<?= get_template_directory_uri() . '/dist' ?>/images/analysis.png" alt="" />
          </div>
          <h5 class="primary-dark">سئو بهینه</h5>
          <p class="p-small description-color">دل به دریا نمیزنیم...! پس از شناخت رقبایتان، متمایز شدن شما را تضمین میکنیم.</p>
        </div>
        <div class="feature">
          <div class="iconContainer">
            <img class="blurred" src="<?= get_template_directory_uri() . '/dist' ?>/images/ux-blur.png" alt="" />
            <img class="normal" src="<?= get_template_directory_uri() . '/dist' ?>/images/ux.png" alt="" />
          </div>
          <h5 class="primary-dark">طراحی بصری جذاب</h5>
          <p class="p-small description-color">بیایید از احساسات کاربرانمان سو استفاده کنیم! آنها را وادار خواهیم کرد، تا عاشق برندتان شوند  :)</p>
        </div>
      </div>
      <div class="col">
        <div class="feature">
          <div class="iconContainer">
            <img class="blurred" src="<?= get_template_directory_uri() . '/dist' ?>/images/design-blur.png" alt="" />
            <img class="normal" src="<?= get_template_directory_uri() . '/dist' ?>/images/design.png" alt="" />
          </div>
          <h5 class="primary-dark">طراحی واکنش گرا</h5>
          <p class="p-small description-color">تنها یک وب سایت کاربردی نخواهید داشت، آن را با یک طراحی زیبا تکمیل خواهیم کرد</p>
        </div>
        <div class="feature">
          <div class="iconContainer">
            <img class="blurred" src="<?= get_template_directory_uri() . '/dist' ?>/images/user-test-blur.png" alt="" />
            <img class="normal" src="<?= get_template_directory_uri() . '/dist' ?>/images/user-test.png" alt="" />
          </div>
          <h5 class="primary-dark">پشتیبانی قدرتمند</h5>
          <p class="p-small description-color">هنوز به انتهای داستان نرسیدیم، باید مطمئن شویم  که طراحی ما، نمره قبولی از کاربران شما میگیرد...</p>
        </div>
      </div>
    </div>
    <div class="cta">
      <button class="primaryBtn btnJumper">سفارش</button>
    </div>
  </div>
</div>
<div class="steps-guide-container">
  <div class="wrapper">
    <div class="steps">
      <div
        class="step"
        onmouseenter="activateFirstStep()"
      >
        <div class="head">
          <img src="<?= get_template_directory_uri() . '/dist' ?>/images/step-search.svg" alt="" />
          <h5 class="main-head-text">دریافت خلاصه و بریف پروژه</h5>
        </div>
        <p class="p-small description-color">در ابتدا با گفت و گو با شما درباره پروژه و نیاز های کسب و کارتان، ما یک خلاصه از پروژه تهیه میکنیم، که راهنمای ما برای رساندن شما به اهداف و مقصدتان خواهد بود.</p>
      </div>
      <img id="step-1" class="firstImage stepsImage stepActive" src="<?= get_template_directory_uri() . '/dist' ?>/images/steps-guide-webdesign-1.png" alt="" />
      <div
        class="step"
        onmouseenter="activateSecondStep()"
      >
        <div class="head">
          <img src="<?= get_template_directory_uri() . '/dist' ?>/images/step-wireframe.svg" alt="" />
          <h5 class="main-head-text">طراحی و برنامه نویسی</h5>
        </div>
        <p class="p-small description-color">بعد از گذر از مرحله قبل و فهم مسئله، شروع به تولید  ایده و راه حل های خلاقانه، ارزیابی آنها و ایجاد نمونه های اولیه از ایده های برتر میکنیم، ایده ها تست شده، بهترین آنها انتخاب میشود.</p>
      </div>
      <img id="step-2" class="secondImage stepsImage" src="<?= get_template_directory_uri() . '/dist' ?>/images/steps-guide-webdesign-1.png" alt="" />
      <div
        class="step"
        onmouseenter="activateThirdStep()"
      >
        <div class="head">
          <img src="<?= get_template_directory_uri() . '/dist' ?>/images/step-final.svg" alt="" />
          <h5 class="main-head-text">تست نهایی و آموزش نحوه کار</h5>
        </div>
        <p class="p-small description-color">در این مرحله ایده انتخاب شده را پرورش میدهیم تا به یک راه حل کاربردی و چشم نواز برسیم، اما این پایان فرآیند نیست و ما چندبار ایده را با کاربران نهایی ارزیابی میکنیم.</p>
      </div>
      <img id="step-3" class="thirdImage stepsImage" src="<?= get_template_directory_uri() . '/dist' ?>/images/steps-guide-webdesign-1.png" alt="" />
    </div>
  </div>
</div>
<div class="project-portfolios-section-container">
    <div class="project-portfolios-section-content">
      <h2 class="main-head-text primary-dark">نمونه کارهای ما</h2>
      <p class="description-color description-text">هیچ چیز جای تجربه را نمیگیرد، برخی از تجربه های ما در طراحی UI و طراحی UX</p>
    </div>
    <div class="portfolio">
      <div class="portfolioWrapper">
        <div class="mobileCta">
          <button class="secondaryBtn">مشاهده جزئیات</button>
        </div>
        <img src="<?= get_template_directory_uri() . '/dist' ?>/images/portfolio-1.png" alt="" />
        <div class="portfolioContent">
          <h5 class="first-head-text primary-text">پروژه پلاک</h5>
          <h3 class="main-head-text primary-dark">یک انتخاب هوشمندانه</h3>
          <p class="description-text description-color">پلاک یک محصول در حوزه املاک و مستغلاته که به کاربران کمک میکنه تا هر چه سریعتر و هوشمندانه تر مسکن مورد نظر خودشان را پیدا کنند، ما در این پروژه، مشاور تجربه کاربری و طراحی رابط کاربری را به عهده داشتیم.</p>
          <button class="secondaryBtn">مشاهده جزئیات</button>
        </div>
      </div>
    </div>
  <div class="portfolioFluid">
    <div class="portfolioWrapper">
      <div class="portfolioContent">
          <h5 class="first-head-text primary-text">پروژه حامیران همراه</h5>
          <h3 class="main-head-text white-color">اصالت، خریدنی نیست...</h3>
          <p class="description-text white-color">شرکت حامیران، به عنوان یکی از بزرگترین وارد کنندگان گوشی همراه و لوازم جانبی در شرق کشور فعالیت میکند، افتخار داشتیم تا به عنوان طراح رابط کاربری و خدمات بهبود تجربه کاربری با ایشان همکاری داشته باشیم.</p>
          <button class="secondaryBtn">مشاهده جزئیات</button>
      </div>
      <img src="<?= get_template_directory_uri() . '/dist' ?>/images/portfolio-2.png" alt="" />
      <div class="mobileCta">
        <button class="secondaryBtn">مشاهده جزئیات</button>
      </div>
    </div>
  </div>
  <div class="cta">
    <button class="primaryBtn btnJumper">مشاهده همه نمونه کارها</button>
  </div>
</div>
<div class="container">
  <div class="pricings-section-container">
    <div class="pricings-section-content">
      <h5 class="primary-text first-head-text">لیست پکیج ها</h5>
      <h2 class="main-head-text primary-dark">تعرفه کارهای ما</h2>
      <p class="description-color description-text">تعرفه خدمات طراحی سایت، در آژانس دیجیتال مارکتینگ تاس</p>
    </div>
    <div class="pricings">
      <div class="priceTable">
        <img class="planImage" style="filter: 'drop-shadow(-24px 16px 12px rgba(255, 116, 85, 0.28))'" src="<?= get_template_directory_uri() . '/dist' ?>/images/Pawn.svg" alt="" />
        <h4 class="main-head-text">سایت شخصی</h4>
        <div class="price">
          <h2 class="primary-text" style="font-size: '35px'">تماس بگیرید</h2>
        </div>
        <p class="p-small description">مناسب برای کسب و کارهای تازه و فروشگاه های محلی</p>
        <p class="p-small feature">22 پست</p>
        <div class="p-small feature">
          <p class="p-small">16 استوری</p>
          <img class="info" src="<?= get_template_directory_uri() . '/dist' ?>/images/info-icon.svg" alt="" />
          <p class="tooltip">در این بخش ما به کمک اطلاعات کمی و کیفی بدست آمده، کاربران ررا در چند گروه مختلف دسته بندی میکنیم که به این گروه پرسونا میگن و کمک میکند که پیشبینی درست تری از آینده داشته باشیم</p>
        </div>
        <p class="p-small feature">تست کاربرد پذیری</p>
        <p class="p-small feature">طراحی اکتشافی</p>
        <p class="p-small feature">تحلیل وضعیت</p>
        <p class="p-small feature">طراحی استایل گاید</p>
        <p class="p-small feature lastFeature">طراحی فرآیند ها</p>
        <button>سفارش</button>
      </div>
      <div class="priceTable">
        <img class="planImage" style="filter: 'drop-shadow(-24px 16px 12px rgba(255, 116, 85, 0.28))'" src="<?= get_template_directory_uri() . '/dist' ?>/images/ecommerce-ui.svg" alt="" />
        <h4 class="main-head-text">سایت فروشگاهی</h4>
        <div class="price">
          <h2 class="primary-text" style="font-size: '28px'">7,900,000</h2>
          <p class="p-small">تومان</p>
        </div>
        <p class="p-small description">مناسب برای کسب و کارها یا شرکت های توسعه نرم افزاری</p>
        <p class="p-small feature">رﻋﺎﯾﺖ اﺻﻮل UX</p>
        <p class="p-small feature">طراحی آیکون های یکپارچه</p>
        <p class="p-small feature">طراحی طبق هویت بصری برند</p>
        <p class="p-small feature">طراحی استایل گاید</p>
        <p class="p-small feature">تست کاربرد پذیری</p>
        <p class="p-small feature lastFeature">پشتیبانی یکساله</p>
        <button>سفارش</button>
      </div>
      <div class="priceTable">
        <img class="planImage" style="filter: 'drop-shadow(-24px 16px 12px rgba(255, 116, 85, 0.28))'" src="<?= get_template_directory_uri() . '/dist' ?>/images/news-website.svg" alt="" />
        <h4 class="main-head-text">سایت خبری</h4>
        <div class="price">
          <h2 class="primary-text" style="font-size: '28px'">4,900,000</h2>
          <p class="p-small">تومان</p>
        </div>
        <p class="p-small description">مناسب برای فروشگاهایی که میخواهند فروش آنلاینشان را شروع کنند</p>
        <p class="p-small feature">طراحی متناسب با زمینه کاری</p>
        <p class="p-small feature">رﻋﺎﯾﺖ اﺻﻮل UX</p>
        <p class="p-small feature">طراحی آیکون های یکپارچه</p>
        <p class="p-small feature">طراحی طبق هویت بصری برند</p>
        <p class="p-small feature">طراحی استایل گاید</p>
        <p class="p-small feature">تست کاربرد پذیری</p>
        <p class="p-small feature lastFeature">پشتیبانی یکساله</p>
        <button>سفارش</button>
      </div>
      <div class="priceTable">
        <img class="planImage" style="filter: 'drop-shadow(-24px 16px 12px rgba(255, 116, 85, 0.28))'" src="<?= get_template_directory_uri() . '/dist' ?>/images/ui-company.svg" alt="" />
        <h4 class="main-head-text">سایت فروشگاهی</h4>
        <div class="price">
          <h2 class="primary-text" style="font-size: '28px'">5,900,000</h2>
          <p class="p-small">تومان</p>
        </div>
        <p class="p-small description">مناسب برای شرکت هایی که نیاز به وبسایتی برای معرفی خود دارند</p>
        <p class="p-small feature">5 تا 7 صفحه</p>
        <p class="p-small feature">رﻋﺎﯾﺖ اﺻﻮل UX</p>
        <p class="p-small feature">طراحی آیکون های یکپارچه</p>
        <p class="p-small feature">طراحی طبق هویت بصری برند</p>
        <p class="p-small feature">طراحی استایل گاید</p>
        <p class="p-small feature">تست کاربرد پذیری</p>
        <p class="p-small feature lastFeature">پشتیبانی یکساله</p>
        <button>سفارش</button>
      </div>
    </div>
  </div>

  <div class="blogs-section-container">
    <div class="content">
      <h5 class="cta-text first-head-text">بلاگ ما</h5>
      <h2 class="primary-dark main-head-text">آخرین یافته ها و نوشته ها</h2>
      <p class="description-color description-text">اینجا محتوایی تولید می‌کنیم که دانستنش سرعت شما را در رسیدن به اهدافتان بیشتر می‌کند.</p>
    </div>
    <div class="swiper blogs-slider-container">
      <div class="swiper-wrapper">
         <?php
         $posts = new WP_Query(array(
            'posts_per_page' => 4,
            'orderby' => 'date'
         ));
         ?>
     <?php if ($posts->have_posts()) : while ($posts->have_posts()) : $posts->the_post();?>
        <div class="swiper-slide">
          <div class="blog-post-box-container">
            <div class="postThumbnail">
              <img src="<?= get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
            </div>
            <div class="details">
              <div>
                <img src="<?= get_template_directory_uri() . '/dist' ?>/images/Time.svg" alt="" />
                <p class="label small-text-color"><?php echo esc_html( human_time_diff( get_the_time('U'), current_time('timestamp') ) ); ?></p>
              </div>
              <div>
                <img src="<?= get_template_directory_uri() . '/dist' ?>/images/Calendar.svg" alt="" />
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
        <?php endwhile;?>
        <?php endif;wp_reset_postdata();?>
      </div>
    </div>
    <div class="prevArrow blogs-swiper-button-prev swiper-button-next">
      <img src="<?= get_template_directory_uri() . '/dist' ?>/images/slider-arrow.svg" alt="" />
    </div>
    <div class="blogs-swiper-button-next swiper-button-next">
      <img src="<?= get_template_directory_uri() . '/dist' ?>/images/slider-arrow.svg" alt="" />
    </div>
    <div class="cta-btn-container">
      <a href="#"><button class="btnJumper primaryBtn">رفتن به بلاگ</button></a>
    </div>
  </div>


  <div class="questions-section-container">
    <div class="questions-section-content">
      <h2 class="main-head-text primary-dark">سوالات پر تکرار</h2>
      <p class="description-color description-text">توی این قسمت سوالاتی که ممکنه براتون پیش بیاد رو جواب دادیم </p>
    </div>
    <div class="questions">
      <div class="questionContainer">
        <div class="question" onclick="useQuestion1()">
          <p>تعرفه ارائه استاتژی و مدیریت شبکه های اجتماعی</p>
          <img id="first-question-arrow" class="question1" src="<?= get_template_directory_uri() . '/dist' ?>/images/arrow-down.svg" alt="" />
        </div>
        <div id="answer1" class="answer">
          <p class="small-text-color p-small">بابکارگیری تمامی ظرفیت ها و قواعد علم مارکتینگ بالاترین نرخ بازدهی تبلیغاتی را در کوتاه ترین زمان ممکن برای شما به ارمغان خواهیم آوردبابکارگیری تمامی ظرفیت ها و قواعد علم مارکتینگ بالاترین نرخ بازدهی تبلیغاتی را در کوتاه ترین زمان ممکن برای شما به ارمغان خواهیم آورد</p>
        </div>
      </div>
      <div class="questionContainer">
        <div class="question" onclick="useQuestion2()">
          <p>چرا باید سوالی داشته باشیم</p>
          <img id="second-question-arrow" class="question2" src="<?= get_template_directory_uri() . '/dist' ?>/images/arrow-down.svg" alt="" />
        </div>
        <div id="answer2" class="answer">
          <p class="small-text-color p-small">بابکارگیری تمامی ظرفیت ها و قواعد علم مارکتینگ بالاترین نرخ بازدهی تبلیغاتی را در کوتاه ترین زمان ممکن برای شما به ارمغان خواهیم آوردبابکارگیری تمامی ظرفیت ها و قواعد علم مارکتینگ بالاترین نرخ بازدهی تبلیغاتی را در کوتاه ترین زمان ممکن برای شما به ارمغان خواهیم آورد</p>
        </div>
      </div>
      <div class="questionContainer">
        <div class="question" onclick="useQuestion3()">
          <p>آیا صادق میتواند روی حرفش باشد و کار را به موقع تحویل دهد</p>
          <img id="third-question-arrow" class="question3" src="<?= get_template_directory_uri() . '/dist' ?>/images/arrow-down.svg" alt="" />
        </div>
        <div id="answer3" class="answer">
          <p class="small-text-color p-small">بابکارگیری تمامی ظرفیت ها و قواعد علم مارکتینگ بالاترین نرخ بازدهی تبلیغاتی را در کوتاه ترین زمان ممکن برای شما به ارمغان خواهیم آوردبابکارگیری تمامی ظرفیت ها و قواعد علم مارکتینگ بالاترین نرخ بازدهی تبلیغاتی را در کوتاه ترین زمان ممکن برای شما به ارمغان خواهیم آورد</p>
        </div>
      </div>
      <div class="questionContainer">
        <div class="question" onclick="useQuestion4()">
          <p>آیا بهترین طراحی رابط کاربری در مشهد همکار صادق است؟</p>
          <img id="fourth-question-arrow" class="question4" src="<?= get_template_directory_uri() . '/dist' ?>/images/arrow-down.svg" alt="" />
        </div>
        <div id="answer4" class="answer">
          <p class="small-text-color p-small">بابکارگیری تمامی ظرفیت ها و قواعد علم مارکتینگ بالاترین نرخ بازدهی تبلیغاتی را در کوتاه ترین زمان ممکن برای شما به ارمغان خواهیم آوردبابکارگیری تمامی ظرفیت ها و قواعد علم مارکتینگ بالاترین نرخ بازدهی تبلیغاتی را در کوتاه ترین زمان ممکن برای شما به ارمغان خواهیم آورد</p>
        </div>
      </div>
    </div>
  </div>
  <div class="whatsup-section-container">
    <div class="whatsup-section-content">
      <h2 class="primary-dark main-head-text">چه خبر..!؟</h2>
      <p class="description-color description-text">خلاصه پر خواننده ترین و بروزترین اخبار طراحی از سراسر وب را در این بخش بخوانید</p>
      <a href="/news.html"><button class="primaryBtn">مشاهده همه</button></a>
    </div>
    <div class="newsSlider">
      <div class="slidesContainer">
        <div class="swiper whatsup-slider-container">
          <div class="swiper-wrapper">
             <?php
             $posts = new WP_Query(array(
                'posts_per_page' => 6,
                'orderby' => 'date'
             ));
             ?>
            <?php if ($posts->have_posts()) : while ($posts->have_posts()) : $posts->the_post();?>
            <div class="swiper-slide">
              <div class="whatsup-box-container">
                <img src="<?= get_the_post_thumbnail_url(); ?>" alt="" />
                <p class="label small-text-color"><?= get_the_date(); ?></p>
                <h6 class="main-head-text primary-dark"><?php the_title(); ?></h6>
                <a href="<?= get_the_permalink(); ?>" class="cta-text">مشاهده</a>
              </div>
            </div>

            <?php endwhile;?>
            <?php endif;wp_reset_postdata();?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="seo-section-container">
    <div class="seo-section-content">
      <h5 class="first-head-text primary-text">:)</h5>
      <h2 class="primary-dark main-head-text">صرفا برای سئو</h2>
      <p class="p-small description-text description-color">محتوای این قسمت رو میتونید نخونید، چون برای گوگل نوشتیم :)</p>
    </div>
    <div class="scrollContent">
      <div class="scrollWrapper">
      <p class="primary-dark">طراحی ui</p>
      <p class="p-small small-text-color textDescription">
      وقتی موفق شدید کاربرانتون رو با تبلیغات و سئو به سایت خودتون جذب کنید باید برای مرحله بعدی آماده باشید تا استقبال گرمی ازشون به عمل بیارید. یعنی با طراحی UI حرفه ای، سایتی زیبا اما کاربردی بهشون ارائه کنید که رنگ ها و طراحی عناصرش به قدری جذاب و دلنشین هست که کاربران دوست دارند در اون وقت بگذرونند. ریزترین جزییات طراحی UI مثل تطبیق فونت با موضوع فعالیت تا مسائل بزرگتری مثل واضح بودن کاربری کلیدها و سایر عناصر روی انتخاب مخاطبان شما تاثیر زیادی داره!
      تیم طراحان UI تاس با دانش آکادمیکی که در موضوعاتی مثل روش های مارکتینگ، روانشناسی مشتری، زیبا شناسی و اصول گرافیک و البته دانش فنی که داره، می تونه با سایت شما هم مثل سایت ده ها برندی که پیش از این به نرخ تبدیل بالا و نرخ پرش پایین رسیدن، همکاری داشته باشه.
      اگر سایتی رو می خواین که:
      ساده و کاربردی باشه
      بر اساس استانداردها و ترندهای روز طراحی شده باشه
      بتونه نرخ تعامل کاربران با برند و محصولات شما رو بالا ببره
      فرایند خرید اینترنتی رو ساده و ترغیب کننده ترتیب بده
      بر اساس روانشناسی مشتریان خاص برند شما طراحی شده باشه
      فقط کافیه تلفن رو بردارید و با شماره های ما تماس بگیرید تا مشاوره رایگان طراحی UI دریافت کنید.
      </p>
      </div>
    </div>
  </div>
</div>

<script>
  const firstStep = document.querySelector('#step-1')
  const secondStep = document.querySelector('#step-2')
  const thirdStep = document.querySelector('#step-3')
  function activateFirstStep() {
    firstStep.classList.add('stepActive')
    secondStep.classList.remove('stepActive')
    thirdStep.classList.remove('stepActive')
  }
  function activateSecondStep() {
    firstStep.classList.remove('stepActive')
    secondStep.classList.add('stepActive')
    thirdStep.classList.remove('stepActive')
  }
  function activateThirdStep() {
    firstStep.classList.remove('stepActive')
    secondStep.classList.remove('stepActive')
    thirdStep.classList.add('stepActive')
  }

  const firstAnswer = document.querySelector('#answer1')
  const secondAnswer = document.querySelector('#answer2')
  const thirdAnswer = document.querySelector('#answer3')
  const fourthAnswer = document.querySelector('#answer4')
  const firstArrow = document.querySelector('#first-question-arrow')
  const secondArrow = document.querySelector('#second-question-arrow')
  const thirdArrow = document.querySelector('#third-question-arrow')
  const fourthArrow = document.querySelector('#fourth-question-arrow')
  function useQuestion1() {
    firstAnswer.classList.toggle('showAnswer')
    firstArrow.classList.toggle('opened')
  }
  function useQuestion2() {
    secondAnswer.classList.toggle('showAnswer')
    secondArrow.classList.toggle('opened')
  }
  function useQuestion3() {
    thirdAnswer.classList.toggle('showAnswer')
    thirdArrow.classList.toggle('opened')
  }
  function useQuestion4() {
    fourthAnswer.classList.toggle('showAnswer')
    fourthArrow.classList.toggle('opened')
  }
</script>
<script type="module">
  const whatsupSwiper = new Swiper(".whatsup-slider-container", {
    breakpoints: {
      1280: {
        slidesPerView: 3.5,
        spaceBetween: 5,
      },
      992: {
        slidesPerView: 3.5,
        spaceBetween: 10,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 5,
      },
      690: {
        slidesPerView: 1,
        spaceBetween: 5,
      },
      270: {
        slidesPerView: 1,
        spaceBetween: 5,
      },
    },
    loop: true,
  })
</script>

<?php get_footer(); ?>
