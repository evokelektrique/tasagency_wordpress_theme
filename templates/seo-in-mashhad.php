<?php
/**
 * Template Name: Seo
 */
get_header(); ?>



<div class="container">
  <div class="intro-section-container container">
    <div class="content">
      <h4 class="first-head-text primary-text">از ابتدا سخت و چالش برانگیز بوده</h4>
      <h1 class="primary-dark main-head-text">طراحی UI (رابط کاربری)</h1>
      <p class="p description-text description-color">
        به عبارتی ترکیب کردن هنر و تکنولوژی، اما همواره برای ما لذت بخش است.
        و همیشه، همه تلاشمان را برای بدست آوردن بهترین نتایج کرده ایم...
        خدمات طراحی تجربه UX و رابط کاربری UI تاس، تمام موارد مورد نیاز کسب و کار شما، جهت تبدیل شدن به یک کسب و کار بهتر برای کاربرانتان را پوشش میدهد.
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
      <img src="<?= get_template_directory_uri() . '/dist' ?>/images/SEO/Seo-boy.png" class="seoboy" alt="" />
      <img src="<?= get_template_directory_uri() . '/dist' ?>/images/SEO/BG-Elements.svg" class="seo-image-header-backgroundel" alt="" />
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
            <img class="blurred" src="<?= get_template_directory_uri() . '/dist' ?>/images/UI-UX/Discover Blured.svg" alt="" />
            <img class="normal" src="<?= get_template_directory_uri() . '/dist' ?>/images/UI-UX/Discover.svg" alt="" />
          </div>
          <h5 class="primary-dark">تحلیل و رصد رقبا</h5>
          <p class="p-small description-color">دل به دریا نمیزنیم...! پس از شناخت رقبایتان، متمایز شدن شما را تضمین میکنیم.</p>
        </div>
        <div class="feature">
          <div class="iconContainer">
            <img class="blurred" src="<?= get_template_directory_uri() . '/dist' ?>/images/UI-UX/Good ux Blured.svg" alt="" />
            <img class="normal" src="<?= get_template_directory_uri() . '/dist' ?>/images/UI-UX/Good ux.svg" alt="" />
          </div>
          <h5 class="primary-dark">تجربه کاربری عالی</h5>
          <p class="p-small description-color">بیایید از احساسات کاربرانمان سو استفاده کنیم! آنها را وادار خواهیم کرد، تا عاشق برندتان شوند  :)</p>
        </div>
      </div>
      <div class="col">
        <div class="feature">
          <div class="iconContainer">
            <img class="blurred" src="<?= get_template_directory_uri() . '/dist' ?>/images/UI-UX/Good Visaul Blured.svg" alt="" />
            <img class="normal" src="<?= get_template_directory_uri() . '/dist' ?>/images/UI-UX/Good Visaul.svg" alt="" />
          </div>
          <h5 class="primary-dark">طراحی چشم نواز</h5>
          <p class="p-small description-color">تنها یک وب سایت کاربردی نخواهید داشت، آن را با یک طراحی زیبا تکمیل خواهیم کرد</p>
        </div>
        <div class="feature">
          <div class="iconContainer">
            <img class="blurred" src="<?= get_template_directory_uri() . '/dist' ?>/images/UI-UX/test Blured.svg" alt="" />
            <img class="normal" src="<?= get_template_directory_uri() . '/dist' ?>/images/UI-UX/test.svg" alt="" />
          </div>
          <h5 class="primary-dark">تست کاربردپذیری</h5>
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
          <h5 class="main-head-text">تحقیفات بازار و مصاحبه با کاربر</h5>
        </div>
        <p class="p-small description-color">پس از دریافت بریف و گفت و گو با کارفرما، طراحان ما شروع به کاوش در دنیای کاربران میکنند و نیاز ها و مشکلاتشان را پیدا میکنیم.</p>
      </div>
      <img id="step-1" class="firstImage stepsImage stepActive" src="<?= get_template_directory_uri() . '/dist' ?>/images/steps-guide-1.png" alt="" />
      <div
        class="step"
        onmouseenter="activateSecondStep()"
      >
        <div class="head">
          <img src="<?= get_template_directory_uri() . '/dist' ?>/images/step-wireframe.svg" alt="" />
          <h5 class="main-head-text">طراحی وایرفریم و نمونه اولیه</h5>
        </div>
        <p class="p-small description-color">بعد از گذر از مرحله قبل و فهم مسئله، شروع به تولید  ایده و راه حل های خلاقانه، ارزیابی آنها و ایجاد نمونه های اولیه از ایده های برتر میکنیم، ایده ها تست شده، بهترین آنها انتخاب میشود.</p>
      </div>
      <img id="step-2" class="secondImage stepsImage" src="<?= get_template_directory_uri() . '/dist' ?>/images/steps-guide-2.png" alt="" />
      <div
        class="step"
        onmouseenter="activateThirdStep()"
      >
        <div class="head">
          <img src="<?= get_template_directory_uri() . '/dist' ?>/images/step-final.svg" alt="" />
          <h5 class="main-head-text">طراحی نهایی و تست کاربرد پذیری</h5>
        </div>
        <p class="p-small description-color">در این مرحله ایده انتخاب شده را پرورش میدهیم تا به یک راه حل کاربردی و چشم نواز برسیم، اما این پایان فرآیند نیست و ما چندبار ایده را با کاربران نهایی ارزیابی میکنیم.</p>
      </div>
      <img id="step-3" class="thirdImage stepsImage" src="<?= get_template_directory_uri() . '/dist' ?>/images/steps-guide-3.png" alt="" />
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
      <p class="description-color description-text">تعرفه خدمات طراحی UI و طراحی UX، در آژانس دیجیتال مارکتینگ تاس</p>
    </div>
    <div class="pricings">
      <div class="priceTable">
        <img class="planImage" style="filter: 'drop-shadow(-24px 16px 12px rgba(255, 116, 85, 0.28))'" src="<?= get_template_directory_uri() . '/dist' ?>/images/ux-design.png" alt="" />
        <h4 class="main-head-text"> طراحی UX</h4>
        <div class="price">
          <h2 class="primary-text" style="font-size: '28px'"> تماس بگیرید</h2>
        </div>
        <p class="p-small description">مناسب برای کسب و کارهایی که به تجربه مشتریانشان اهمیت میدهند</p>
        <p class="p-small feature">طراحی پرسشنامه کاربری</p>
        <div class="p-small feature">
          <p class="p-small">طراحی پرسونا</p>
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
        <img class="planImage" style="filter: 'drop-shadow(-24px 16px 12px rgba(255, 116, 85, 0.28))'" src="<?= get_template_directory_uri() . '/dist' ?>/images/ui-phone.png" alt="" />
        <h4 class="main-head-text">UI اپلیکیشن موبایل</h4>
        <div class="price">
          <h2 class="primary-text" style="font-size: '28px'">12,700,000</h2>
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
        <img class="planImage" style="filter: 'drop-shadow(-24px 16px 12px rgba(255, 116, 85, 0.28))'" src="<?= get_template_directory_uri() . '/dist' ?>/images/ecommerce-ui.png" alt="" />
        <h4 class="main-head-text">UI سایت فروشگاهی</h4>
        <div class="price">
          <h2 class="primary-text" style="font-size: '28px'">14,800,000</h2>
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
        <img class="planImage" style="filter: 'drop-shadow(-24px 16px 12px rgba(255, 116, 85, 0.28))'" src="<?= get_template_directory_uri() . '/dist' ?>/images/ui-company.png" alt="" />
        <h4 class="main-head-text">UI سایت شرکتی</h4>
        <div class="price">
          <h2 class="primary-text" style="font-size: '28px'">11,900,000</h2>
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


<?php get_footer(); ?>
