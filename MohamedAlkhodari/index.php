<?php 
include('../database.php');
?>
<!DOCTYPE html>
<html lang="ar">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="keywords" content="سيارات مستعملة في الإمارات، سيارات مستعملة في الشارقة،سيارات مستعملة في الشارقة،سيارات مستعملة في عجمان، بيع السيارات في الإمارات، سيارات مستعملة للبيع في الإمارات">
        <meta name="title" content="سيارات مستعملة للبيع في أبوظبي، دبي، الشارقة، الإمارات | سيارات مستعملة في الإمارات - معرض الخضري للسيارات">
        <meta name="description" content="أفضل معرض للسيارات المستعملة لشراء وبيع السيارات الفاخرة المستعملة في الشارقة، عجمان، دبي، الإمارات. اعثر على أكبر تشكيلة من السيارات المستعملة للبيع في الإمارات. اشتري سيارات مستعملة في الإمارات. معرض الخضري للسيارات المستعملة">

        <!--=============== FAVICON ===============-->
        <link rel="shortcut icon" href="../../assets/img/DarkLogo.png" type="image/x-icon" class="favicon" />

        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@400;500;600;700&family=Noto+Sans+Arabic:wght@700&family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@500&display=swap" rel="stylesheet" />

        <!--=============== REMIX ICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="../assets/css/all.min.css" />
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="../assets/css/style.css" />

        <!--=============== SWIPER CSS ===============-->
        <link rel="stylesheet" href="../assets/css/swiper-bundle.min.css" />

        <!--================== Unicons CSS =================-->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />

        <title>ALKHODARI SHOWROOMS</title>
    </head>

    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="index.html" class="nav__logo">
                    <i> <img alt="ligtlogo" class="site_logo default-logo" src="../assets/img/LightLogo.png" /> </i>
                    <i> <img alt="darklogo" class="site_logo dark-mode-logo" src="../assets/img/DarkLogo.png" /> </i>
                </a>
                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#galary" class="nav__link">المعرض</a>
                        </li>
                        <li class="nav__item">
                            <a href="#location" class="nav__link">اتصل بنا</a>
                        </li>
                        <li class="nav__item">
                            <a href="#aboutUs" class="nav__link">من نحن</a>
                        </li>
                        <li class="nav__item">
                            <a href="#showrooms" class="nav__link"> معارضنا </a>
                        </li>
                        <li class="nav__item">
                            <a href="../index.html" class="nav__link active-link">الصفحة الرئيسية</a>
                        </li>
                    </ul>

                    <div class="nav__close" id="nav-close">
                        <i class="ri-close-line"></i>
                    </div>
                </div>

                <!-- Togglar Button -->
                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-menu-line"></i>
                </div>
            </nav>
        </header>

        <!--************* MAIN CODE ****************-->

        <main class="main">
            <section class="mainSlider">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="slide-content">
                                <!-- <div class="sliderLogo animate-element">
                                    <img src="../assets/img/DarkLogo.png" loading="lazy" alt="لوجو معرض الخضري" />
                                </div> -->
                                <!-- <div class="slideP animate-element">
                                    <p>اهلا بكم</p>
                                </div>
                                <div class="slideH2 animate-element">
                                    <p>في معلاض محمد الخضري</p>
                                </div> -->
                            </div>
                            <img class="animate-element" src="../assets/img/banner2.jpg" alt="mohamed alkhodari">
                        </div>
                    </div>
                </div>
            </section>

            <section id="showrooms" class="banner">
                <div class="banner-content">
                    <h2>سياراتنا</h2>
                </div>
            </section>

  <!--==================== cards ====================-->
  <section class="cars">
    <div class="allCards">
        <?php include('get_cars.php'); ?>
    </div>
</section>


            <section class="section">
                <div class="findUs">
                    <div class="location">
                        <!-- Google Maps holder -->
                        <div class="googleMapHolder">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d115379.62222794342!2d55.4129599608361!3d25.35075763563617!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f59705baa6473%3A0x57b8f40f02313a1e!2z2YXYudix2LYg2YXYrdmF2K8g2KfZhNiu2LbYsdmKINmE2KrYrNin2LHYqSDYp9mE2LPZitin2LHYp9iqINin2YTZhdiz2KrYudmF2YTYqQ!5e0!3m2!1sen!2sae!4v1689809257625!5m2!1sen!2sae"
                                width="100%"
                                height="300"
                                style="height: 350px; border: 1px solid #900000;"
                                allowfullscreen=""
                                loading="lazy"
                            ></iframe>
                        </div>
                    </div>
                    <div class="contactInformation">
                        <!-- Phone Number -->
                        <div class="contactItem">
                            <i class="fas fa-phone"></i>
                            <a href="tel:+1234567890" class="contactInfo">+1234567890</a>
                        </div>

                        <!-- Location -->
                        <div class="contactItem">
                            <i class="fas fa-map-marker-alt"></i>
                            <p class="contactInfo">الرقعة الحمراء في الشارقة سوق الحراج - معرض رقم 078</p>
                        </div>

                        <!-- Work Time -->
                        <div class="contactItem">
                            <i class="fas fa-clock"></i>
                            <p class="contactInfo">الاثنين - الجمعة 8:00 صباحا - 8:00 مساء</p>
                        </div>
                    </div>
                </div>
            </section>

        </main>
        <!--==================== FOOTER ====================-->
        <footer class="footer section">
            <div class="footer__container container">
                <div class="footer__content w30">
                    <a href="index.html" class="footer__logo">
                        <i> <img style="width: 50%;" alt="ligtlogo" class="site_logo footer-default-logo" src="../assets/img/LightLogo.png" /> </i>
                        <i> <img style="width: 50%; display: none;" alt="darklogo" class="site_logo footer-dark-mode-logo" src="../assets/img/DarkLogo.png" /> </i>
                    </a>
                    <p class="footer__description">
                        بيع وشراء السيارات المستعملة. أفضل العروض والصفقات على موقعنا. تصفح السيارات المتاحة واختر ما يناسبك. خدماتنا وعروضنا الحصرية بانتظارك.
                    </p>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">اوتومول</h3>

                    <ul class="footer__links">
                        <li>
                            <a href="#aboutUs" class="footer__links">من نحن</a>
                        </li>
                        <li>
                            <a href="#galary" class="footer__links">معرض الصور</a>
                        </li>
                        <li>
                            <a href="#location" class="footer__links">كيف تصل الينا</a>
                        </li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">معارضنا</h3>
                    <ul class="footer__links">
                        <li>
                            <a href="MohamedAlkhodari/index.html" class="footer__links">معرض محمد الخضري</a>
                        </li>
                        <li>
                            <a href="MohamedAlkhodari/index.html" class="footer__links">معرض احمد الخضري</a>
                        </li>
                        <li>
                            <a href="MohamedAlkhodari/index.html" class="footer__links">معرض حيان الخضري</a>
                        </li>
                    </ul>                </div>

                <div class="footer__content">
                    <h3 class="footer__title">اتصل بنا</h3>

                    <ul class="footer__social">
                        <p>+971505053952</p>
                        <p>+971505058962</p>
                    </ul>
                </div>
            </div>
            <span class="footer__copy"> معنا، تجربة قيادة لا تُنسى. أفضل الخيارات، أعلى جودة. انطلق بثقة وأمان. رضاك هدفنا الأول. </span>
        </footer>


        <script src="https://unpkg.com/scrollreveal"></script>
        <!--=============== SCROLL REVEAL - PAGE ANNIMATION ===============-->
        <script src="../assets/js/scrollrevealAnimation.min.js"></script>

        <!--=============== SWIPER JS - PRODUCT SLIDER ===============-->
        <script src="../assets/js/swiper-bundle.min.js"></script>

        <!--=============== MAIN JS ===============-->
        <script src="../assets/js/main.js"></script>

        <button id="darkModeButton" onclick="toggleDarkMode()">
            <span class="dark-icon">🌙</span>
            <span class="light-icon">☀️</span>
        </button>
    </body>
</html>
