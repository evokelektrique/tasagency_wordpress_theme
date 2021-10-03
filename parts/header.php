<header class="navigation-header-container">
   <div id="fixed-header-container" class="container">
      <div class="wrapper">
         <div class="col">
            <div class="mobileLogo">
               <div class="mobileNavigation">
                  <div class="humberger">
                     <svg onclick="toggleMobileMenu()" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" class="t-rightButton-0-1-195">
                        <path class="svg-c1" d="M23.7 21.122H6.98a.98.98 0 1 0 0 1.961H23.7a.98.98 0 1 0 0-1.961zm0-7.562H6.98a.981.981 0 1 0 0 1.961H23.7a.981.981 0 1 0 0-1.961zM6.98 7.96H23.7a.981.981 0 1 0 0-1.961H6.98a.981.981 0 1 0 0 1.961z"></path>
                     </svg>
                  </div>
                  <!-- Mobile Nav Menu -->
                  <ul class="mobileMenu mobileMenuHidden">
                     <li><a href="#">خانه</a></li>
                     <li><a href="#">طراحی وبسایت</a></li>
                     <li><a href="#">طراحی UI</a></li>
                     <li><a href="#">سئو سایت</a></li>
                     <li><a href="#">تولید محتوا</a></li>
                     <li><a href="#">طراحی موشن گرافیک</a></li>
                     <li><a href="#">نمونه کار ها</a></li>
                     <li><a href="#">اخبار دیجیتال مارکتینگ</a></li>
                     <li><a href="#">درباره ما</a></li>
                     <li><a href="#">بلاگ</a></li>
                  </ul>
                  <div onclick="toggleMobileMenu()" class="backDrop backDropHidden"></div>
               </div>
               <a href="https://tasagency.net/">
                  <img class="logo" src="<?= get_template_directory_uri() . '/dist' ?>/images/logo.svg" alt="Tasagency" />
               </a>
            </div>
            <!-- Header Nav Menu -->
            <?php
            // wp_nav_menu([
            //    'walker'         => new Header_walker(),
            //    'theme_location' => 'main-menu',
            // ]);
             ?>
            <ul class="menu">
               <li><a href="#">خانه</a></li>
               <div class="dropdownItem">
                  <li class="p-small">
                     خدمات ما
                     <img src="<?= get_template_directory_uri() . '/dist' ?>/images/dropdown.svg" alt="" />
                  </li>
                  <ul class="dropdownBox">
                     <li><a href="#">طراحی وبسایت</a></li>
                     <li><a href="#">طراحی UI</a></li>
                     <li><a href="#">سئو سایت</a></li>
                     <li><a href="#">تولید محتوا</a></li>
                     <li><a href="#">طراحی موشن گرافیک</a></li>
                  </ul>
               </div>
               <li><a href="#">نمونه کار ها</a></li>
               <li><a href="#">اخبار دیجیتال مارکتینگ</a></li>
               <li><a href="#">درباره ما</a></li>
               <li><a href="#">بلاگ</a></li>
            </ul>
         </div>
         <div class="col">
            <div class="socialIcons">
               <a href="https://t.me/tasagency_net">
                  <img src="<?= get_template_directory_uri() . '/dist' ?>/images/header-telegram.svg" alt="" />
               </a>
               <a href="https://instagram.com/tasagency_net">
                  <img src="<?= get_template_directory_uri() . '/dist' ?>/images/header-instagram.svg" alt="" />
               </a>
               <a href="https://www.linkedin.com/company/tas-agency">
                  <img src="<?= get_template_directory_uri() . '/dist' ?>/images/header-linkedin.svg" alt="" />
               </a>
            </div>
         </div>
      </div>
   </div>
</header>
