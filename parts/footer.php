<footer class="footer">
  <div class="innerContainer">
    <div class="description">
      <a href="https://tasagency.net">
        <img src="<?= get_template_directory_uri() . '/dist' ?>/images/logo.svg" alt="" />
      </a>
      <p class="p-small">
       ما یک آژانس دیجیتال مارکتینگ تمام خدمت هستیم که کلیه خدماتی که کسب و کارشما، برای رشد در فضای دیجیتال به آنها نیاز دارد را برنامه ریزی و اجرا میکنیم.
      </p>
    </div>
    <ul class="listItems">
      <h6 class="listHeader">خدمات اصلی ما</h6>
      <a href="https://tasagency.net/ui-ux-design">
        <li class="p-small">طراحی UI</li>
      </a>
      <a href="https://tasagency.net/social">
        <li class="p-small">مدیریت پیج اینستاگرام</li>
      </a>
      <a href="https://tasagency.net/seo">
        <li class="p-small">سئو سایت</li>
      </a>
      <a href="https://tasagency.net/web-design">
        <li class="p-small">طراحی سایت</li>
      </a>
      <a href="https://tasagency.net/logo">
        <li class="p-small">طراحی لوگو</li>
      </a>
    </ul>
    <ul class="listItems">
      <h6 class="listHeader">خدمات دیگر</h6>
      <a href="https://tasagency.net/content-production">
        <li class="p-small">تولید محتوا</li>
      </a>
      <a href="https://tasagency.net/web-design-in-mashhad">
        <li class="p-small">طراحی سایت در مشهد</li>
      </a>
      <a href="https://tasagency.net/seo-in-mashhad">
        <li class="p-small">سئو در مشهد</li>
      </a>
      <a href="https://tasagency.net/motion">
        <li class="p-small">طراحی موشن گرافیک</li>
      </a>
      <a href="https://tasagency.net/photography">
        <li class="p-small">عکاسی</li>
      </a>
    </ul>
    <div class="contactUs">
      <h6 class="listHeader">راه های تماس</h6>
      <div class="items">
        <div class="item location">
          <img src="<?= get_template_directory_uri() . '/dist' ?>/images/footer-location.svg" alt="" />
          <p class="p-small">مشهد، تقاطع قرنی و مجد، برج ساینا طبقه سوم اداری، واحد 303</p>
        </div>
        <div class="item phone">
          <img src="<?= get_template_directory_uri() . '/dist' ?>/images/footer-phone.svg" alt="" />
          <p class="p-small">0513 713 5338 - 0930 491 4235</p>
        </div>
      </div>
    </div>
  </div>
  <hr class="divider" />
  <div class="copyright">
    <a href="https://tasagency.net">
      <p style="cursor: 'pointer'" class="p-small">طراحی شده با عشق توسط تیم آژانس تاس</p>
    </a>
    <div class="social">
      <a href="https://t.me/tasagency_net">
        <div><img src="<?= get_template_directory_uri() . '/dist' ?>/images/footer-telegram.svg" alt="Telegram" /></div>
      </a>
      <a href="#">
        <div><img src="<?= get_template_directory_uri() . '/dist' ?>/images/footer-twitter.svg" alt="Twiiter" /></div>
      </a>
      <a href="https://www.linkedin.com/company/tas-agency">
        <div><img src="<?= get_template_directory_uri() . '/dist' ?>/images/footer-linkedin.svg" alt="Linkedin" /></div>
      </a>
      <a href="https://instagram.com/tasagency_net">
        <div><img src="<?= get_template_directory_uri() . '/dist' ?>/images/footer-instagram.svg" alt="Instagram" /></div>
      </a>
    </div>
  </div>
</footer>
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
  const contactUsTitle = document.querySelector('#contactus-title');
  const contactUsDropdown = document.querySelector('#contactus-dropdown-title');
  function toggleContactUsDropdown() {
    contactUsDropdown.classList.toggle('dropdownHidden');
  }
  function selectDropdownItem(e) {
    contactUsTitle.value = e.innerText;
    contactUsDropdown.classList.toggle('dropdownHidden');
  }
</script>
<script>
  const audio = document.getElementById("customer-audio"); 
  const btnIcon = document.getElementById("audio-icon"); 
  let isPlaying = false;
  function toggleAudio() {
    if(!isPlaying) {
      audio.play();
      isPlaying = !isPlaying;
      btnIcon.src = "<?= get_template_directory_uri() . '/dist' ?>/images/pause.svg"
    }
    else {
      audio.pause();
      isPlaying = !isPlaying;
      audio.currentTime = 0;
      btnIcon.src = "<?= get_template_directory_uri() . '/dist' ?>/images/play.svg"
    }
  }
</script>
<script type="module">
  import Swiper from 'https://unpkg.com/swiper@7/swiper-bundle.esm.browser.min.js'

  const portfolioSwiper = new Swiper('.portfolios-slider-container', {
    breakpoints: {
      1280: {
        slidesPerView: 3,
        spaceBetween: 24,
      },
      992: {
        slidesPerView: 2.2,
        spaceBetween: 15,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 10,
      },
      690: {
        slidesPerView: 2,
        spaceBetween: 5,
      },
      270: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
    },
    loop: true,
    navigation: {
      nextEl: ".portfolios-swiper-button-next",
      prevEl: ".portfolios-swiper-button-prev"
    }
  })
  const blogSwiper = new Swiper(".blogs-slider-container", {
    breakpoints: {
      1024: {
        slidesPerView: 3,
        spaceBetween: 24,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 16,
      },
      576: {
        slidesPerView: 0.5,
        spaceBetween: 16,
      },
    },
    loop: true,
    centeredSlides: true,
    navigation: {
      nextEl: ".blogs-swiper-button-next",
      prevEl: ".blogs-swiper-button-prev"
    }
  })
  const experienceSwiper = new Swiper(".customers-slider-container", {
    breakpoints: {
      1024: {
        slidesPerView: 1,
        spaceBetween: 30,
      },
      768: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      576: {
        slidesPerView: 0.5,
        spaceBetween: 0,
      },
    },
    loop: true,
    centeredSlides: true,
    navigation: {
      nextEl: ".customers-swiper-button-next",
      prevEl: ".customers-swiper-button-prev"
    }
  })
</script>