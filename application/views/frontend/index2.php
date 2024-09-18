<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>PTR-Niger e-Learning Platform</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() . './assets2/images/Icon-ptr_niger.png'; ?>">

    <!-- CSS (Font, Vendor, Icon, Plugins & Style CSS files) -->

    <!-- Font CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&amp;display=swap" rel="stylesheet">

    <!-- Vendor CSS (Bootstrap & Icon Font) -->
    <link rel="stylesheet" href="<?php echo base_url() . './assets2/css/vendor/fontawesome-all.min.css'; ?>">
    <link rel="stylesheet" href="<?php echo base_url() . './assets2/css/vendor/edumall-icon.css'; ?>">
    <link rel="stylesheet" href="<?php echo base_url() . './assets2/css/vendor/bootstrap.min.css'; ?>">

    <!-- Plugins CSS (All Plugins Files) -->
    <link rel="stylesheet" href="<?php echo base_url() . './assets2/css/plugins/aos.css'; ?>">
    <link rel="stylesheet" href="<?php echo base_url() . './assets2/css/plugins/swiper-bundle.min.css'; ?>">
    <link rel="stylesheet" href="<?php echo base_url() . './assets2/css/plugins/perfect-scrollbar.css'; ?>">
    <link rel="stylesheet" href="<?php echo base_url() . './assets2/css/plugins/jquery.powertip.min.css'; ?>">
    <link rel="stylesheet" href="<?php echo base_url() . './assets2/css/plugins/glightbox.min.css'; ?>">
    <link rel="stylesheet" href="<?php echo base_url() . './assets2/css/plugins/flatpickr.min.css'; ?>">
    <link rel="stylesheet" href="<?php echo base_url() . './assets2/css/plugins/ion.rangeSlider.min.css'; ?>">
    <link rel="stylesheet" href="<?php echo base_url() . './assets2/css/plugins/select2.min.css'; ?>">

    <!-- Style CSS -->
    <link rel="stylesheet" href="<?php echo base_url() . './assets2/css/style.css'; ?>">

</head>
<body>
<?php $cart_items = $this->session->userdata('cart_items'); ?>
<?php $user_id = $this->session->userdata('user_id'); ?>
<?php $user_login = $this->session->userdata('user_login'); ?>
<?php $admin_login = $this->session->userdata('admin_login'); ?>
<?php if($user_id > 0){$user_details = $this->user_model->get_all_user($user_id)->row_array();} ?>
<main class="main-wrapper">
    <!-- Header start -->
    <div class="header-section header-sticky">

        <!-- Header Top Start -->
        <div class="header-top-02 d-none d-sm-block">
            <div class="container">

                <!-- Header Top Bar Wrapper Start -->
                <div class="header-top-bar-wrap d-sm-flex justify-content-between">

                    <div class="header-top-bar-wrap__info">
                        <ul class="header-top-bar-wrap__info-list header-top-bar-wrap__info-list-02">
                            <li><a href="tel:+22794203434"><i class="fas fa-phone"></i> <span class="info-text">(+227) 94203434</span></a></li>
                            <li><a href="contact@ptr-niger.com"><i class="far fa-envelope"></i> <span class="info-text">contact@ptr-niger.com</span></a></li>
                        </ul>
                    </div>

                    <div class="header-top-bar-wrap__info d-sm-flex">

                        <ul class="header-top-bar-wrap__info-social header-top-bar-wrap__info-social-02">
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="www.facebook.com/ptrniger" target ="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href ="https://instagram.com/ptr_niger" target="_blank" ><i class="fab fa-instagram"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/76802154" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>

                </div>
                <!-- Header Top Bar Wrapper End -->

            </div>
        </div>
        <!-- Header Top End -->

        <!-- Header Main Start -->
        <div class="header-main-06 header-transparent">
            <div class="container">
                <!-- Header Main Wrapper Start -->
                <div class="header-main-wrapper">

                    <!-- Header Logo Start -->
                    <div class="header-logo">
                        <a class="header-logo__logo" href="index-main.html"><img src="<?php echo base_url() . './assets2/images/LogoPTR-Niger-V2_Propos-Correction2.gif'; ?>" width="296" height="64" alt="Logo"></a>
                    </div>
                    <!-- Header Logo End -->

                    <!-- Header Inner Start -->
                    <div class="header-inner">

                        <!-- Header Navigation Start -->
                        <div class="header-navigation d-none d-xl-block">
                            <nav class="menu-primary">
                                <ul class="menu-primary__container">
                                    <li><a class="active" href="#"><span>Accueil</span></a>






                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('home/page'); ?>"><span>Formations</span></a>

                                    </li>

                                    <li>
                                        <a href="#"> <span>Nos Services</span></a>
                                        <ul class="sub-menu">
                                            <li><a href="blog-grid-01.html"><span>Impression tout support</span></a></li>
                                            <li><a href="blog-grid-02.html"><span>Site Web</span></a></li>
                                            <li><a href="blog-grid-left-sidebar.html"><span>Réseaux & Systèmes</span></a></li>
                                            <li><a href="blog-grid-right-sidebar.html"><span>Infographie</span></a></li>
                                            <li><a href="blog-list-style-01.html"><span>Maintenaces Informatiques</span></a></li>
                                            <li><a href="blog-list-style-02.html"><span>Installations</span></a></li>
                                            <li>
                                                <a href="#"><span>Logiciels</span></a>
                                                <ul class="sub-menu">
                                                    <li><a href="blog-details-left-sidebar.html"><span>Vente de Licences</span></a></li>
                                                    <li><a href="blog-details-right-sidebar.html"><span>Logiciels sur Mésures</span></a></li>
                                                    <li><a href="blog-details.html"><span>Création</span></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="#"><span>Blog</span></a>
                                        <ul class="sub-menu">
                                            <li><a href="blog-list-style-02.html"><span>Voir les articles</span></a></li>
                                            <li>
                                                <a href="#"><span>Partager votre avis</span></a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="#"> <span>Contacts</span></a>
                                    </li>

                                    <?php if($user_login): ?>
                                        <li class="wisth_tgl_div"> <!-- Début du bloc de liste de souhaits -->
                                            <a class="menu_wisth_tgl mt-1">
                                                <i class="fa-regular fa-heart"></i>
                                                <?php if(count($my_wishlist_items) > 0): ?>
                                                    <span class="menu_number" id="wishlistItemsCounter">
                        <?php echo count($my_wishlist_items); ?>
                    </span>
                                                <?php endif; ?>
                                            </a>
                                            <div class="menu_pro_wish">
                                                <div class="overflow-control" id="wishlistItems">
                                                    <?php include "wishlist_items.php"; ?>
                                                </div>
                                                <div class="menu_pro_btn">
                                                    <a href="<?php echo site_url('home/my_wishlist'); ?>" class="btn btn-primary text-white">
                                                        <?php echo get_phrase('Go to wishlist'); ?>
                                                    </a>
                                                </div>
                                            </div>
                                        </li> <!-- Fin du bloc de liste de souhaits -->

                                        <li class="notification-area"> <!-- Début du bloc de notification -->
                                            <div class="wisth_tgl_2div" id="headerNotification">
                                                <?php include "notifications.php"; ?>
                                            </div>
                                        </li> <!-- Fin du bloc de notification -->
                                    <?php endif; ?>

                                    <?php if(!$user_login): ?>
                                        <li><a href="<?php echo site_url('login'); ?>" class=" text-danger"><span><?php echo get_phrase('Login'); ?></span></a></li>
                                        <li><a href="<?php echo site_url('sign_up'); ?>" class=" text-capitalize text-warning" style="min-width: 70px"><span>Inscription</span></a></li>
                                    <?php endif; ?>
















                                </ul>
                            </nav>
                        </div>
                        <!-- Header Navigation End -->



                        <!-- Header Mobile Toggle Start -->
                        <div class="header-toggle">
                            <button class="header-toggle__btn d-xl-none" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMobileMenu">
                                <span class="line"></span>
                                <span class="line"></span>
                                <span class="line"></span>
                            </button>
                        </div>
                        <!-- Header Mobile Toggle End -->

                    </div>
                    <!-- Header Inner End -->

                </div>
                <!-- Header Main Wrapper End -->
            </div>
        </div>
        <!-- Header Main End -->

    </div>
    <!-- Header End -->
    <!-- Slider Section Start -->
    <div class="slider-section-03">
        <div class="container">

            <!-- Slider Widget Start -->
            <div class="slider-widget-02">

                <!-- Slider Caption Start -->
                <div class="slider-caption-03 text-center" data-aos="fade-up" data-aos-duration="1000">
                    <h2 class="slider-caption-03__main-title">Bienvenue Chez<mark>PTR-Niger !!!</mark></h2>
                </div>
                <!-- Slider Caption End -->

                <!-- Slider Search Start -->
                <div class="slider-search" data-aos="fade-up" data-aos-duration="1000">
                    <form action="#">
                        <input class="slider-search__field" placeholder="Qu'es-ce que vous voulez apprendre ?">
                        <button type="submit" class="slider-search__submit">
                            <i class="search-btn-icon fas fa-search"></i>
                        </button>
                    </form>
                </div>
                <!-- Slider Search End -->

            </div>
            <!-- Slider Widget End -->

            <!-- Slider Widget Box Start -->
            <div class="slider-widget-box">
                <div class="row gy-6 gx-md-7">
                    <div class="col-sm-4">

                        <!-- Slider Widget Box Item Start -->
                        <div class="slider-widget-box-item" data-aos="fade-up" data-aos-duration="1000">
                            <div class="slider-widget-box-item__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="64px" height="64px" viewBox="0 0 64 64" xml:space="preserve">
                                        <polyline fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" points="5,41 11,1 53,1 59,41 "></polyline>
                                    <path fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M21,41c0,6.075,4.925,11,11,11s11-4.925,11-11h16v22  H5V41H21z"></path>
                                    <line fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" x1="12" y1="31" x2="52" y2="31"></line>
                                    <line fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" x1="14" y1="21" x2="50" y2="21"></line>
                                    <line fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" x1="16" y1="11" x2="48" y2="11"></line>
                                    </svg>
                            </div>
                            <div class="slider-widget-box-item__coption">
                                <h4 class="slider-widget-box-item__title">10,00 <br> Cours Onlines</h4>
                                <p>Profitez des meilleurs programmes de formations</p>
                            </div>
                        </div>
                        <!-- Slider Widget Box Item End -->

                    </div>
                    <div class="col-sm-4">

                        <!-- Slider Widget Box Item Start -->
                        <div class="slider-widget-box-item" data-aos="fade-up" data-aos-duration="1000">
                            <div class="slider-widget-box-item__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="64px" height="64px" viewBox="0 0 64 64" xml:space="preserve">
                                        <polygon fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" points="32,47 12,62 20,38 2,24 24,24 32,1 40,24   62,24 44,38 52,62 "></polygon>
                                    </svg>
                            </div>
                            <div class="slider-widget-box-item__coption">
                                <h4 class="slider-widget-box-item__title">Excellents <br> Formateurs</h4>
                                <p>Apprendre des meilleurs, vous garantie de devenir un !</p>
                            </div>
                        </div>
                        <!-- Slider Widget Box Item End -->

                    </div>
                    <div class="col-sm-4">

                        <!-- Slider Widget Box Item Start -->
                        <div class="slider-widget-box-item" data-aos="fade-up" data-aos-duration="1000">
                            <div class="slider-widget-box-item__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="64px" height="64px" viewBox="0 0 64 64" xml:space="preserve">
                                        <polyline fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" points="32,12 32,32 41,41 "></polyline>
                                    <line fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" x1="4" y1="32" x2="8" y2="32"></line>
                                    <line fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" x1="56" y1="32" x2="60" y2="32"></line>
                                    <line fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" x1="32" y1="60" x2="32" y2="56"></line>
                                    <line fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" x1="32" y1="8" x2="32" y2="4"></line>
                                    <path fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M32,63c17.121,0,31-13.879,31-31S49.121,1,32,1"></path>
                                    <path fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M32,63C14.879,63,1,49.121,1,32  c0-6.713,2.134-12.926,5.759-18l5.62-5.621"></path>
                                    <polyline fill="none" stroke="#000000" stroke-width="2" stroke-linejoin="bevel" stroke-miterlimit="10" points="13,19 13,8 2,8   "></polyline>
                                    </svg>
                            </div>
                            <div class="slider-widget-box-item__coption">
                                <h4 class="slider-widget-box-item__title">Programmes <br> Flexibles</h4>
                                <p>Quand vous voulez en fonctions de votre temps libre</p>
                            </div>
                        </div>
                        <!-- Slider Widget Box Item End -->

                    </div>
                </div>
            </div>
            <!-- Slider Widget Box End -->

        </div>

        <img class="slider-section-03__image-01" src="<?php echo base_url() . './assets2/images/home-03-hero-image-03.jpg'; ?>" alt="image" width="250" height="315">
        <img class="slider-section-03__image-02" src="<?php echo base_url() . './assets2/images/home-03-hero-image-02.jpg'; ?>" alt="image" width="231" height="284">
        <img class="slider-section-03__image-03" src="<?php echo base_url() . './assets2/images/home-03-hero-image-01.jpg'; ?>" alt="image" width="173" height="171">

        <!-- Slider Widget Box Start -->

        <!-- Slider Widget Box End -->

        <div class="slider-section-03__shape-wrapper scene">
            <img class="slider-section-03__shape-01" data-depth="0.4" src="<?php echo base_url() . './assets2/images/shape/edumall-shape-01.png'; ?>" alt="Shape" width="179" height="178">
            <img class="slider-section-03__shape-02" data-depth="-0.4" src="<?php echo base_url() . './assets2/images/shape/edumall-shape-grid-dots-02.png'; ?>" alt="Shape" width="136" height="136">
            <div class="slider-section-03__shape-03" data-depth="0.4"></div>
            <div class="slider-section-03__shape-04" data-depth="-0.6"></div>
            <img class="slider-section-03__shape-05" data-depth="-0.6" src="<?php echo base_url() . './assets2/images/shape/edumall-shape-01.png'; ?>" alt="Shape" width="179" height="178">
        </div>


    </div>
    <!-- Slider Section End -->
    <!-- Offcanvas Start -->
    <div class="offcanvas offcanvas-end offcanvas-mobile" id="offcanvasMobileMenu" style="background-image: url(assets/images/mobile-bg.jpg);">
        <div class="offcanvas-header bg-white">
            <div class="offcanvas-logo">
                <a class="offcanvas-logo__logo" href="#"><img src="<?php echo base_url() . './assets2/images/LogoPTR-Niger-V2_Propos-Correction2.gif'; ?>" width="296" height="34" alt="Logo"></a>

            </div>
            <button type="button" class="offcanvas-close" data-bs-dismiss="offcanvas"><i class="fal fa-times"></i></button>
        </div>

        <div class="offcanvas-body">
            <nav class="canvas-menu">
                <ul class="offcanvas-menu">
                    <li><a class="active" href="#"><span>Accueil</span></a>






                    </li>
                    <li>
                        <a href="<?php echo site_url('home/page'); ?>"><span>Formations</span></a>

                    </li>

                    <li>
                        <a href="#"> <span>Nos Services</span></a>
                        <ul class="sub-menu">
                            <li><a href="blog-grid-01.html"><span>Impression tout support</span></a></li>
                            <li><a href="blog-grid-02.html"><span>Site Web</span></a></li>
                            <li><a href="blog-grid-left-sidebar.html"><span>Réseaux & Systèmes</span></a></li>
                            <li><a href="blog-grid-right-sidebar.html"><span>Infographie</span></a></li>
                            <li><a href="blog-list-style-01.html"><span>Maintenaces Informatiques</span></a></li>
                            <li><a href="blog-list-style-02.html"><span>Installations</span></a></li>
                            <li>
                                <a href="#"><span>Logiciels</span></a>
                                <ul class="sub-menu">
                                    <li><a href="blog-details-left-sidebar.html"><span>Vente de Licences</span></a></li>
                                    <li><a href="blog-details-right-sidebar.html"><span>Logiciels sur Mésures</span></a></li>
                                    <li><a href="blog-details.html"><span>Création</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><span>Blog</span></a>
                        <ul class="sub-menu">
                            <li><a href="blog-list-style-02.html"><span>Voir les articles</span></a></li>
                            <li>
                                <a href="#"><span>Partager votre avis</span></a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"> <span>Contacts</span></a>
                    </li>

















                </ul>
            </nav>
        </div>

        <!-- Header User Button Start -->
        <div class="offcanvas-user d-lg-none">


            <?php if(!$user_login): ?>
                <div class="">
                    <a href="<?php echo site_url('login'); ?>" class=" btn btn-secondary btn-hover-secondarys" ><?php echo get_phrase('Login'); ?></a>
                </div>
                <div class="">
                    <a href="<?php echo site_url('sign_up'); ?>" class=" btn btn-primary btn-hover-primary" >Inscription</a>
                </div>

            <?php endif; ?>

        </div>
        <!-- Header User Button End -->

    </div>
    <!-- Offcanvas End -->
    <!-- Course Section Start -->
    <div class="courses-section section-padding-02">
        <div class="container">

            <!-- Section Title Start -->
            <div class="section-title text-center" data-aos="fade-up" data-aos-duration="1000">
                <h2 class="section-title__title">Les <mark>Meilleures</mark> Formations </h2>
            </div>

            <?php if(get_frontend_settings('latest_course_section') == 1): ?>
                <!---------- Latest courses Section start --------------->
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tab1">
                        <div class="row g-6">
                            <?php
                            $latest_courses = $this->crud_model->get_latest_10_course();
                            foreach ($latest_courses as $latest_course) :
                                $lessons = $this->crud_model->get_lessons('course', $latest_course['id']);
                                $instructor_details = $this->user_model->get_all_user($latest_course['creator'])->row_array();
                                $course_duration = $this->crud_model->get_total_duration_of_lesson_by_course_id($latest_course['id']);
                                $total_rating =  $this->crud_model->get_ratings('course', $latest_course['id'], true)->row()->rating;
                                $number_of_ratings = $this->crud_model->get_ratings('course', $latest_course['id'])->num_rows();
                                $average_ceil_rating = $number_of_ratings > 0 ? ceil($total_rating / $number_of_ratings) : 0;
                                ?>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="course-item" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="course-header">
                                            <div class="course-header__thumbnail">
                                                <a href="<?php echo site_url('home/course/' . rawurlencode(slugify($latest_course['title'])) . '/' . $latest_course['id']); ?>">
                                                    <img src="<?php echo $this->crud_model->get_course_thumbnail_url($latest_course['id']); ?>" style="width: 330px; height: 221px" alt="courses">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="course-info">
                                            <div class="row">
                                                <div class="col"><span class="course-info__badge-text badge-all"><?php echo get_phrase($latest_course['level']); ?></span></div>
                                                <div class="col"><span class="course-info__badge-text badge-border">Durée: <?php echo $course_duration; ?></span></div>
                                            </div>
                                            <h3 class="course-info__title-02"><a href="#"><?php echo $latest_course['title']; ?></a></h3>
                                            <a href="#" class="course-info__instructor"><?php echo $instructor_details['first_name'] . ' ' . $instructor_details['last_name']; ?></a>
                                            <div class="course-info__price">
                                                <span class="sale-price"><?php echo $latest_course['is_free_course'] ? 'Gratuit' : currency($latest_course['price']); ?></span>
                                            </div>
                                            <div class="course-info__rating">

                                                <span>(<?php echo $number_of_ratings; ?>)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            <?php if (empty($latest_courses)) : ?>
                                <h1 class="text-center">Aucune Formation disponible</h1>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <!---------- Latest courses Section End --------------->
            <?php endif; ?>


        </div>
    </div>
    <!-- Course Section End -->

    <!-- Call To Action Start -->
    <div class="call-to-action section-padding-01">
        <div class="container">

            <!-- Call To Action Wrapper Start -->
            <div class="call-to-action__wrapper">

                <!-- Call To Action Icon Start -->
                <div class="call-to-action__icon" data-aos="zoom-in" data-aos-duration="1000">
                    <i class="fas fa-bolt"></i>
                </div>
                <!-- Call To Action Icon End -->

                <!-- Call To Action Content Start -->
                <div class="call-to-action__content">

                    <div class="call-to-action__shape-01"></div>
                    <div class="call-to-action__shape-02"></div>
                    <div class="call-to-action__shape-03"></div>

                    <div class="call-to-action__caption">
                        <h3 class="call-to-action__sub-title">Let Us Help</h3>
                        <h3 class="call-to-action__main-title">Finding Your Right Courses</h3>
                    </div>
                    <div class="call-to-action__btn">
                        <a class="btn btn-secondary btn-hover-primary" href="course-category.html">Get started</a>
                    </div>

                </div>
                <!-- Call To Action Content End -->

            </div>
            <!-- Call To Action Wrapper End -->

        </div>
    </div>
    <!-- Call To Action End -->

    <!-- Counter Start -->
    <div class="counter-section bg-color-02">
        <div class="container">

            <div class="row gy-10 align-items-center">
                <div class="col-xl-3 col-lg-4">

                    <!-- Section Title Start -->
                    <div class="section-title mb-0" data-aos="fade-up" data-aos-duration="1000">
                        <h4 class="section-title__sub-title">Nos Chiffres</h4>
                        <h2 class="section-title__title-02">Accomplissez vos rêves avec <mark>PTR-Niger</mark></h2>
                    </div>
                    <!-- Section Title End -->

                </div>
                <div class="col-xl-9">

                    <div class="row ps-xl-10">
                        <div class="col-md-3 col-6" data-aos="fade-up" data-aos-duration="1000">

                            <!-- Counter Item Start -->
                            <div class="counter-item">
                                <div class="counter-item__icon">
                                    <img src="<?php echo base_url() . './assets2/images/icon/counter-media-01.png'; ?>" alt="Icon" width="42" height="48">
                                </div>
                                <div class="counter-item__content">
                                    <span class="counter-item__count">+3,000</span>
                                    <p class="counter-item__text">Personnes Encadrées</p>
                                </div>
                            </div>
                            <!-- Counter Item End -->

                        </div>
                        <div class="col-md-3 col-6" data-aos="fade-up" data-aos-duration="1000">

                            <!-- Counter Item Start -->
                            <div class="counter-item">
                                <div class="counter-item__icon">
                                    <img src="<?php echo base_url() . './assets2/images/icon/counter-media-02.png'; ?>" alt="Icon" width="39" height="48">
                                </div>
                                <div class="counter-item__content">
                                    <span class="counter-item__count">+25,0</span>
                                    <p class="counter-item__text">Promotions Certifiées</p>
                                </div>
                            </div>
                            <!-- Counter Item End -->

                        </div>
                        <div class="col-md-3 col-6" data-aos="fade-up" data-aos-duration="1000">

                            <!-- Counter Item Start -->
                            <div class="counter-item">
                                <div class="counter-item__icon">
                                    <img src="<?php echo base_url() . './assets2/images/icon/counter-media-03.png'; ?>" alt="Icon" width="48" height="48">
                                </div>
                                <div class="counter-item__content">
                                    <span class="counter-item__count">100%</span>
                                    <p class="counter-item__text">Pratiques et Professionnelles</p>
                                </div>
                            </div>
                            <!-- Counter Item End -->

                        </div>
                        <div class="col-md-3 col-6" data-aos="fade-up" data-aos-duration="1000">

                            <!-- Counter Item Start -->
                            <div class="counter-item">
                                <div class="counter-item__icon">
                                    <img src="<?php echo base_url() . './assets2/images/icon/counter-media-04.png'; ?>" alt="Icon" width="48" height="48">
                                </div>
                                <div class="counter-item__content">
                                    <span class="counter-item__count">100,00</span>
                                    <p class="counter-item__text">Formateurs de très haut niveau</p>
                                </div>
                            </div>
                            <!-- Counter Item End -->

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- Counter End -->

    <!-- Event Start -->
    <div class="event-section section-padding-01">
        <div class="container">
            <div class="row gy-10 align-items-center">
                <div class="col-xl-3 col-lg-5 col-md-6 col-sm-7">

                    <!-- Section Title Start -->
                    <div class="section-title mb-0 pe-lg-8" data-aos="fade-up" data-aos-duration="1000">
                        <h4 class="section-title__sub-title">EVENTS</h4>
                        <h2 class="section-title__title-02">Les grands <br> <mark>Evènements</mark></h2>
                        <p>Nous ne laissons pas les grnades occasons passer inaperçues !</p>
                    </div>
                    <!-- Section Title End -->

                    <div class="section-btn" data-aos="fade-up" data-aos-duration="1000">
                        <a href="https://www.facebook.com/PTRNiger" class="btn btn-light btn-hover-primary">Voir plus</a>
                    </div>

                </div>

                <div class="col-xl-9">
                    <!-- Event Active Start -->
                    <div class="event-active swiper-button-style" data-aos="fade-up" data-aos-duration="1000">
                        <div class="swiper">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <!-- Event Item Start -->
                                    <div class="event-item">
                                        <div class="event-item__image">
                                            <a href="#"><img src="<?php echo base_url() . './assets2/images/event/happy-cute-brunette-caucasian-grad-girl-sourit-camarades-classe-floue-sont-derriere.jpg'; ?>" alt="event" width="330" height="186"></a>
                                        </div>
                                        <div class="event-item__content text-center">
                                            <span class="event-item__date">20 Avril, 2023</span>
                                            <h3 class="event-item__title"><a href="https://web.facebook.com/PTRNiger/posts/pfbid03CiSnmoKWK8yB4GtHPRm4QhnTrQoofcqPxGHtJDfXxqm4e573MZ3tsKYacionTjvl">Graduation S08 & Rupture Collective</a></h3>
                                            <p class="event-item__location"><i class="far fa-map-marker-alt"></i> PTR-Niger</p>
                                        </div>
                                    </div>
                                    <!-- Event Item End -->
                                </div>

                                <div class="swiper-slide">
                                    <!-- Event Item Start -->
                                    <div class="event-item">
                                        <div class="event-item__image">
                                            <a href="#"><img src="<?php echo base_url() . './assets2/images/event/dusit-thani-abu-dhabi1.jpg'; ?>" alt="event" width="330" height="186"></a>
                                        </div>
                                        <div class="event-item__content text-center">
                                            <span class="event-item__date">12 Janvier, 2023</span>
                                            <h3 class="event-item__title"><a href="https://web.facebook.com/successschoolofficiel/posts/pfbid0s11jrG78Kzmj9rf2UD7P6Ayq2fmvn8Qr1y2XKJXRP1iXHVpjZLu6gYYqPL6j18Url">Success School Business Travel</a></h3>
                                            <p class="event-item__location"><i class="far fa-map-marker-alt"></i> Dusit Thani ABU Dhabi</p>
                                        </div>
                                    </div>
                                    <!-- Event Item End -->
                                </div>

                                <div class="swiper-slide">
                                    <!-- Event Item Start -->
                                    <div class="event-item">
                                        <div class="event-item__image">
                                            <a href="#"><img src="<?php echo base_url() . './assets2/images/event/PDM Kinokuniya.jpg'; ?>" alt="event" width="330" height="186"></a>
                                        </div>
                                        <div class="event-item__content text-center">
                                            <span class="event-item__date">11 Janvier, 2022</span>
                                            <h3 class="event-item__title"><a href="https://web.facebook.com/successschoolofficiel/posts/pfbid032w6Y7M5DtNbC7Zryg4jgJzJhAc6ENZS3eBngQxuWkskJ2vXbqhP8jU1U8ta3kPpNl">Visite d'une des plus grandes chaîne de Librairie au Monde</a></h3>
                                            <p class="event-item__location"><i class="far fa-map-marker-alt"></i> UAE Kinokuniya Bookstore</p>
                                        </div>
                                    </div>
                                    <!-- Event Item End -->
                                </div>

                                <div class="swiper-slide">
                                    <!-- Event Item Start -->
                                    <div class="event-item">
                                        <div class="event-item__image">
                                            <a href="#"><img src="<?php echo base_url() . './assets2/images/event/vue-arriere-audience-ecoute-intervenants-scene-dans-salle-conference-seminaire.jpg'; ?>" alt="event" width="330" height="186"></a>
                                        </div>
                                        <div class="event-item__content text-center">
                                            <span class="event-item__date">28 Juillet, 2022</span>
                                            <h3 class="event-item__title"><a href="https://web.facebook.com/successschoolofficiel/posts/pfbid034EZTdPbVPWPahX5Ei1ZbQY51XWHK7qnyaEWUz1aUoUokQoJ7DEd4e3fTpguf7V3Jl">Conférence Millionnaires Codes SUMIT</a></h3>
                                            <p class="event-item__location"><i class="far fa-map-marker-alt"></i> Bravia Hôtel of Niamey</p>
                                        </div>
                                    </div>
                                    <!-- Event Item End -->
                                </div>

                                <div class="swiper-slide">
                                    <!-- Event Item Start -->
                                    <div class="event-item">
                                        <div class="event-item__image">
                                            <a href="#"><img src="<?php echo base_url() . './assets2/images/event/SW4.jpg'; ?>" alt="event" width="330" height="186"></a>
                                        </div>
                                        <div class="event-item__content text-center">
                                            <span class="event-item__date">28 Janvier, 2023</span>
                                            <h3 class="event-item__title"><a href="https://web.facebook.com/successschoolofficiel/posts/pfbid02tMkdPANUFTiC87L1i254r9Y42FWjZYi6zt56qVhR1KSbCXADYmDmsAVohqfbCXMyl">Week-end de la Réussite 4</a></h3>
                                            <p class="event-item__location"><i class="far fa-map-marker-alt"></i> Mahatma Ghandi Conference Center of Niamey</p>
                                        </div>
                                    </div>
                                    <!-- Event Item End -->
                                </div>

                                <div class="swiper-slide">
                                    <!-- Event Item Start -->
                                    <div class="event-item">
                                        <div class="event-item__image">
                                            <a href="#"><img src="<?php echo base_url() . './assets2/images/event/PDM and Mentor Dosso.jpg'; ?>" alt="event" width="330" height="186"></a>
                                        </div>
                                        <div class="event-item__content text-center">
                                            <span class="event-item__date">6 Mai, 2023</span>
                                            <h3 class="event-item__title"><a href="https://www.facebook.com/MoubarakPDM/posts/pfbid02JYzeWTrpJZYiyUd1nSg4FGnbquoaVPeknju7UJQx4VNy7BriNyHw85KKbwABpVTpl">Business Conférence</a></h3>
                                            <p class="event-item__location"><i class="far fa-map-marker-alt"></i> Université de Dosso </p>
                                        </div>
                                    </div>
                                    <!-- Event Item End -->
                                </div>

                                <div class="swiper-slide">
                                    <!-- Event Item Start -->
                                    <div class="event-item">
                                        <div class="event-item__image">
                                            <a href="#"><img src="<?php echo base_url() . './assets2/images/event/Graduation PTR-Niger.jpg'; ?>" alt="event" width="330" height="186"></a>
                                        </div>
                                        <div class="event-item__content text-center">
                                            <span class="event-item__date">Octobre, 2021</span>
                                            <h3 class="event-item__title"><a href="https://www.facebook.com/permalink.php?story_fbid=pfbid02Urp1R6vE3E1te8abuHb6MtLH9o3GTWzskW8J3h9NiMSWd7HFPPiVMWcvEjsCRSDnl&id=100006357547049">Graduation Informatique Bureautique</a></h3>
                                            <p class="event-item__location"><i class="far fa-map-marker-alt"></i> Namey - Niger</p>
                                        </div>
                                    </div>
                                    <!-- Event Item End -->
                                </div>

                                <div class="swiper-slide">
                                    <!-- Event Item Start -->
                                    <div class="event-item">
                                        <div class="event-item__image">
                                            <a href="#"><img src="<?php echo base_url() . './assets2/images/event/main-tenant-petit-globe-casquette-graduation-fond-exterieur-lumineux-ensoleille-mettant-valeur-possibilites-infinies-education-reussite.jpg'; ?>" alt="event" width="330" height="186"></a>
                                        </div>
                                        <div class="event-item__content text-center">
                                            <span class="event-item__date">Mai, 2021</span>
                                            <h3 class="event-item__title"><a href="https://www.facebook.com/PTRNiger/posts/2916251085302704/">Certification & IFTAR</a></h3>
                                            <p class="event-item__location"><i class="far fa-map-marker-alt"></i> PTR-Niger</p>
                                        </div>
                                    </div>
                                    <!-- Event Item End -->
                                </div>

                            </div>
                        </div>

                        <div class="swiper-button-next"><i class="fal fa-angle-right"></i></div>
                        <div class="swiper-button-prev"><i class="fal fa-angle-left"></i></div>
                    </div>
                    <!-- Event Active End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Event End -->

    <!-- Testimonial Start -->
    <div class="testimonial-section bg-color-01 section-padding-01">
        <div class="container">

            <!-- Section Title Start -->
            <div class="section-title text-center" data-aos="fade-up" data-aos-duration="1000">
                <h4 class="section-title__sub-title">TEMOIGNAGE</h4>
                <h2 class="section-title__title-02">Ce que nos étudiants disent de nos formations</h2>
            </div>
            <!-- Section Title End -->

            <!-- Testimonial Start -->
            <div class="testimonial-active-02" data-aos="fade-up" data-aos-duration="1000">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <!-- Testimonial Item Start -->
                            <div class="testimonial-item-02">

                                <div class="testimonial-image">
                                    <img src="<?php echo base_url() . './assets2/images/avatar/Aish Pic.jpg'; ?>" alt="Avatar" width="70" height="70">
                                </div>

                                <div class="testimonial-caption-02">
                                    <h3 class="testimonial-caption-02__title">Très Instructives !</h3>
                                    <p>Les programmes de PTR-Niger que j'ai suivis m'ont appris que les nouvelles techniques qui me simplifient la vie ! Merci énormément !</p>
                                </div>

                                <div class="testimonial-info-02__caption">
                                    <h5 class="testimonial-info-02__name">Aïchatou I. Oumarou</h5>
                                    <p class="testimonial-info-02__designation">/ Etudiante en Pharmacie, Entrepreneure </p>
                                </div>

                            </div>
                            <!-- Testimonial Item End -->
                        </div>
                        <div class="swiper-slide">
                            <!-- Testimonial Item Start -->
                            <div class="testimonial-item-02">

                                <div class="testimonial-image">
                                    <img src="<?php echo base_url() . './assets2/images/avatar/Jalil.jpg'; ?>" alt="Avatar" width="70" height="70">
                                </div>

                                <div class="testimonial-caption-02">
                                    <h3 class="testimonial-caption-02__title"> La Perfection !</h3>
                                    <p>Le meilleur programme de formation qui n'a jamais existé ! 100% Pratique et orientée professionelle ! Merci...</p>
                                </div>

                                <div class="testimonial-info-02__caption">
                                    <h5 class="testimonial-info-02__name">Abdoul Jalil</h5>
                                    <p class="testimonial-info-02__designation">/ Lauréat, IB08</p>
                                </div>

                            </div>
                            <!-- Testimonial Item End -->
                        </div>
                        <div class="swiper-slide">
                            <!-- Testimonial Item Start -->
                            <div class="testimonial-item-02">

                                <div class="testimonial-image">
                                    <img src="<?php echo base_url() . './assets2/images/avatar/Yattara.jpg'; ?>" alt="Avatar" width="70" height="70">
                                </div>

                                <div class="testimonial-caption-02">
                                    <h3 class="testimonial-caption-02__title">Super Intéressant !</h3>
                                    <p>L'informatique est incontournable, se faire former à PTR-Niger est indispensable ! Merci pour tout...</p>
                                </div>

                                <div class="testimonial-info-02__caption">
                                    <h5 class="testimonial-info-02__name">Nadia Yattara</h5>
                                    <p class="testimonial-info-02__designation">/ Gestionnaire, Comptable</p>
                                </div>

                            </div>
                            <!-- Testimonial Item End -->
                        </div>
                        <div class="swiper-slide">
                            <!-- Testimonial Item Start -->
                            <div class="testimonial-item-02">

                                <div class="testimonial-image">
                                    <img src="<?php echo base_url() . './assets2/images/avatar/Isak.jpg'; ?>" alt="Avatar" width="70" height="70">
                                </div>

                                <div class="testimonial-caption-02">
                                    <h3 class="testimonial-caption-02__title"> Le Digital à ma portée </h3>
                                    <p>Pour apprendre seurieusement le métier du numérique, je vous récommande PTR-Niger, ils font l'affaire !</p>
                                </div>

                                <div class="testimonial-info-02__caption">
                                    <h5 class="testimonial-info-02__name">Oustaz Issaka</h5>
                                    <p class="testimonial-info-02__designation">/ Formateur Polytechnicien !</p>
                                </div>

                            </div>
                            <!-- Testimonial Item End -->
                        </div>
                        <div class="swiper-slide">
                            <!-- Testimonial Item Start -->
                            <div class="testimonial-item-02">

                                <div class="testimonial-image">
                                    <img src="<?php echo base_url() . './assets2/images/avatar/avatar-01.jpg'; ?>" alt="Avatar" width="70" height="70">
                                </div>

                                <div class="testimonial-caption-02">
                                    <h3 class="testimonial-caption-02__title">Great quality!</h3>
                                    <p>I wanted to place a review since their support helped me within a day or so, which is nice! Thanks and 5 stars!</p>
                                </div>

                                <div class="testimonial-info-02__caption">
                                    <h5 class="testimonial-info-02__name">Oliver Beddows</h5>
                                    <p class="testimonial-info-02__designation">/ Designer, Manchester</p>
                                </div>

                            </div>
                            <!-- Testimonial Item End -->
                        </div>
                        <div class="swiper-slide">
                            <!-- Testimonial Item Start -->
                            <div class="testimonial-item-02">

                                <div class="testimonial-image">
                                    <img src="<?php echo base_url() . './assets2/images/avatar/avatar-02.jpg'; ?>" alt="Avatar" width="70" height="70">
                                </div>

                                <div class="testimonial-caption-02">
                                    <h3 class="testimonial-caption-02__title">Code Quality</h3>
                                    <p>I wanted to place a review since their support helped me within a day or so, which is nice! Thanks and 5 stars!</p>
                                </div>

                                <div class="testimonial-info-02__caption">
                                    <h5 class="testimonial-info-02__name">Oliver Beddows</h5>
                                    <p class="testimonial-info-02__designation">/ Designer, Manchester</p>
                                </div>

                            </div>
                            <!-- Testimonial Item End -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonial End -->

        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Blog End -->
    <div class="blog section section-padding-01">
        <div class="container">
            <div class="row gy-10">
                <div class="col-xl-3">

                    <!-- Section Title Start -->
                    <div class="section-title" data-aos="fade-up" data-aos-duration="1000">
                        <h4 class="section-title__sub-title">Autres Projets</h4>
                        <h2 class="section-title__title-02">PTR-Niger <br> And <mark>Connexes</mark></h2>
                    </div>
                    <!-- Section Title End -->

                    <!-- list Blog Start -->
                    <div class="list-blog">
                        <ul class="list-blog__items" data-aos="fade-up" data-aos-duration="1000">
                            <li>
                                <h3 class="list-blog__title"><a href="https://www.facebook.com/profile.php?id=100093048846506">Sucsess Publishing</a></h3>
                            </li>
                            <li>
                                <h3 class="list-blog__title"><a href="https://www.facebook.com/profile.php?id=100092707390538">DIGIDEV ACADEMY</a></h3>
                            </li>
                            <li>
                                <h3 class="list-blog__title"><a href="https://www.facebook.com/MoubarakPDM/">Moubarak_PDM</a></h3>
                            </li>
                        </ul>
                    </div>
                    <!-- list Blog End -->

                </div>
                <div class="col-xl-9">
                    <div class="row gy-6">
                        <div class="col-lg-4 col-md-6">
                            <!-- Blog Item Start -->
                            <div class="blog-item" data-aos="fade-up" data-aos-duration="1000">
                                <div class="blog-item__image">
                                    <a href="https://youtu.be/NPm-6T72LYs"><img src="<?php echo base_url() . './assets2/images/blog/PDM Youtube.png'; ?>" alt="Blog" width="330" height="179"></a>
                                </div>
                                <div class="blog-item__content">
                                    <div class="blog-item__meta">
                                        <span class="meta-action"><i class="far fa-calendar"></i> Novembre, 2022</span>
                                        <span class="meta-action"><i class="far fa-eye"></i> 4,036 views</span>
                                    </div>
                                    <h3 class="blog-item__title"><a href="https://youtu.be/NPm-6T72LYs">Intro, Moubarak_PDM</a></h3>
                                    <p>Chaîne Youtube sur l'enseignement du succès</p>
                                    <a class="blog-item__more btn btn-light btn-hover-white" href="https://www.youtube.com/@moubarak_pdm">voir plus</a>
                                </div>
                            </div>
                            <!-- Blog Item End -->
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <!-- Blog Item Start -->
                            <div class="blog-item" data-aos="fade-up" data-aos-duration="1000">
                                <div class="blog-item__image">
                                    <a href="https://youtu.be/2DeqZFugF7Y"><img src="<?php echo base_url() . './assets2/images/blog/Logo-Digidev-ACADEMY-05.jpg'; ?>" alt="Blog" width="330" height="179"></a>
                                </div>
                                <div class="blog-item__content">
                                    <div class="blog-item__meta">
                                        <span class="meta-action"><i class="far fa-calendar"></i> Juillet, 2023</span>
                                        <span class="meta-action"><i class="far fa-eye"></i> 370 views</span>
                                    </div>
                                    <h3 class="blog-item__title"><a href="https://youtu.be/2DeqZFugF7Y">DIGIDEV ACADEMY</a></h3>
                                    <p>Enseignement sur les Domaines du Marketing Digital</p>
                                    <a class="blog-item__more btn btn-light btn-hover-white" href="https://www.facebook.com/profile.php?id=100092707390538">Read More</a>
                                </div>
                            </div>
                            <!-- Blog Item End -->
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <!-- Blog Item Start -->
                            <div class="blog-item" data-aos="fade-up" data-aos-duration="1000">
                                <div class="blog-item__image">
                                    <a href="https://www.facebook.com/profile.php?id=100093048846506"><img src="<?php echo base_url() . './assets2/images/blog/Mock-UP-LdK.jpg'; ?>" alt="Blog" width="330" height="179"></a>
                                </div>
                                <div class="blog-item__content">
                                    <div class="blog-item__meta">
                                        <span class="meta-action"><i class="far fa-calendar"></i> Septembre, 2022</span>
                                        <span class="meta-action"><i class="far fa-eye"></i> 287 views</span>
                                    </div>
                                    <h3 class="blog-item__title"><a href="https://www.facebook.com/profile.php?id=100093048846506">Success Publishing</a></h3>
                                    <p>Maison d'édition de livres best-sellers</p>
                                    <a class="blog-item__more btn btn-light btn-hover-white" href="www.success-publishing.ptr-niger.com">Read More</a>
                                </div>
                            </div>
                            <!-- Blog Item End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->

    <!-- Footer Start -->
    <div class="footer-section">

        <!-- Footer Copyright Area End -->
        <div class="footer-copyright footer-bg-2">
            <div class="container">
                <div class="copyright-wrapper-02 text-center">
                    <p class="footer-widget__copyright">&copy; 2023 <span> Plateform E-Learning </span> De <i class="fa fa-heart"></i> by <a href="https://facebook.com/PTRNiger">PTR-Niger</a></p>
                </div>
            </div>
        </div>
        <!-- Footer Copyright Area End -->

    </div>
    <!-- Footer End -->

    <!--Back To Start-->
    <button id="backBtn" class="back-to-top backBtn">
        <i class="arrow-top fal fa-long-arrow-up"></i>
        <i class="arrow-bottom fal fa-long-arrow-up"></i>
    </button>

</main>


<!-- Log In Modal Start -->
<div class="modal fade" id="registerModal">
    <div class="modal-dialog modal-dialog-centered modal-register">

        <!-- Modal Wrapper Start -->
        <div class="modal-wrapper">
            <button class="modal-close" data-bs-dismiss="modal"><i class="fal fa-times"></i></button>

            <!-- Modal Content Start -->
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Se Connecter</h5>
                    <p class="modal-description">Avez-vous dejà un compte ? <button data-bs-toggle="modal" data-bs-target="#loginModal">Log in</button></p>
                </div>
                <div class="modal-body">

                    <form action="#">
                        <div class="row gy-5">
                            <div class="col-md-6">
                                <div class="modal-form">
                                    <label class="form-label">Prénom</label>
                                    <input type="text" class="form-control" placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="modal-form">
                                    <label class="form-label">Nom de Famille</label>
                                    <input type="text" class="form-control" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="modal-form">
                                    <label class="form-label">Nom d'utilisateur</label>
                                    <input type="text" class="form-control" placeholder="username">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="modal-form">
                                    <label class="form-label">Email</label>
                                    <input type="text" class="form-control" placeholder="Your Email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="modal-form">
                                    <label class="form-label">Mot de passe</label>
                                    <input type="password" class="form-control" placeholder="Password">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="modal-form">
                                    <label class="form-label">Confirmer mot de passe</label>
                                    <input type="password" class="form-control" placeholder="Re-Enter Password">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="modal-form form-check">
                                    <input type="checkbox" id="privacy">
                                    <label for="privacy">Accepter les Termes et Politique d'utilisation</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="modal-form">
                                    <button class="btn btn-primary btn-hover-secondary w-100">Enregistrer</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <!-- Modal Content End -->

        </div>
        <!-- Modal Wrapper End -->

    </div>
</div>
<!-- Log In Modal End -->

<!-- Edumall Demo Option Start -->
<div class="edumall-demo-option">

    <div class="edumall-demo-option__toolbar">
        <button class="toolbar-action demo-open" data-bs-tooltip="tooltip" data-bs-placement="left" title="Select Demo"><i class="far fa-ruler-triangle"></i></button>
        <a class="toolbar-action" href="https://hasthemes.com/contact-us/" data-bs-tooltip="tooltip" data-bs-placement="left" title="Support Channel"><i class="far fa-life-ring"></i></a>
        <a class="toolbar-action" href="https://1.envato.market/c/417168/275988/4415?subId1=hastheme&amp;subId2=demo&amp;subId3=https%3A%2F%2Fthemeforest.net%2Fuser%2Fbootxperts%2Fportfolio&amp;u=https%3A%2F%2Fthemeforest.net%2Fuser%2Fbootxperts%2Fportfolio" data-bs-tooltip="tooltip" data-bs-placement="left" title="Purchase EduMall"><i class="far fa-shopping-cart"></i></a>
    </div>

    <div class="edumall-demo-option__panel">

        <div class="edumall-demo-option__header">
            <h5 class="edumall-demo-option__title">EduMall - Professional LMS Education Center HTML Template</h5>
            <a class="edumall-demo-option__btn btn btn-primary btn-hover-secondary" href="https://1.envato.market/c/417168/275988/4415?subId1=hastheme&amp;subId2=demo&amp;subId3=https%3A%2F%2Fthemeforest.net%2Fuser%2Fbootxperts%2Fportfolio&amp;u=https%3A%2F%2Fthemeforest.net%2Fuser%2Fbootxperts%2Fportfolio"><i class="far fa-shopping-cart"></i> Buy Now</a>
        </div>

        <div class="edumall-demo-option__body">
            <!-- <div class="edumall-demo-option-item">
            <a href="" data-bs-tooltip="tooltip" data-bs-placement="top" title="Landing Page">
                <img src="<?php echo base_url() .'./assets2/images/demo/landing.jpg'; ?>" alt="">
            </a>
        </div> -->
            <div class="edumall-demo-option-item">
                <a href="index-main.html" data-bs-tooltip="tooltip" data-bs-placement="top" title="Main Demo">
                    <img src="<?php echo base_url() . './assets2/images/demo/home-01.jpg'; ?>" alt="Home" width="130" height="158">
                </a>
            </div>
            <div class="edumall-demo-option-item">
                <a href="index-course-hub.html" data-bs-tooltip="tooltip" data-bs-placement="top" title="Course Hub">
                    <img src="<?php echo base_url() . './assets2/images/demo/home-02.jpg'; ?>" alt="Home" width="130" height="158">
                </a>
            </div>
            <div class="edumall-demo-option-item">
                <a href="index-online-academy.html" data-bs-tooltip="tooltip" data-bs-placement="top" title="Online Academy">
                    <img src="<?php echo base_url() . './assets2/images/demo/home-03.jpg'; ?>" alt="Home" width="130" height="158">
                </a>
            </div>
            <div class="edumall-demo-option-item">
                <a href="index-education-center.html" data-bs-tooltip="tooltip" data-bs-placement="top" title="Education Center">
                    <img src="<?php echo base_url() . './assets2/images/demo/home-04.jpg'; ?>" alt="Home" width="130" height="158">
                </a>
            </div>
            <div class="edumall-demo-option-item">
                <a href="index-university.html" data-bs-tooltip="tooltip" data-bs-placement="top" title="University">
                    <img src="<?php echo base_url() . './assets2/images/demo/home-05.jpg'; ?>" alt="Home" width="130" height="158">
                </a>
            </div>
            <div class="edumall-demo-option-item">
                <a href="index-language-academic.html" data-bs-tooltip="tooltip" data-bs-placement="top" title="Language Academic">
                    <img src="<?php echo base_url() . './assets2/images/demo/home-06.jpg'; ?>" alt="Home" width="130" height="158">
                </a>
            </div>
            <div class="edumall-demo-option-item">
                <a href="index-single-instructor.html" data-bs-tooltip="tooltip" data-bs-placement="top" title="Single Instructor">
                    <img src="<?php echo base_url() . './assets2/images/demo/home-07.jpg'; ?>" alt="Home" width="130" height="158">
                </a>
            </div>
            <div class="edumall-demo-option-item">
                <a href="index-dev.html" data-bs-tooltip="tooltip" data-bs-placement="top" title="Dev">
                    <img src="<?php echo base_url() . './assets2/images/demo/home-08.jpg'; ?>" alt="Home" width="130" height="158">
                </a>
            </div>
            <div class="edumall-demo-option-item">
                <a href="index-online-art.html" data-bs-tooltip="tooltip" data-bs-placement="top" title="Online Art">
                    <img src="<?php echo base_url() . './assets2/images/demo/home-09.jpg'; ?>" alt="Home" width="130" height="158">
                </a>
            </div>
        </div>

    </div>

</div>
<!-- Edumall Demo Option End -->

<!-- JS Vendor, Plugins & Activation Script Files -->

<!-- Vendors JS -->
<script src="<?php echo base_url() . './assets2/js/vendor/modernizr-3.11.7.min.js'; ?>"></script>
<script src="<?php echo base_url() . './assets2/js/vendor/jquery-3.6.0.min.js'; ?>"></script>
<script src="<?php echo base_url() . './assets2/js/vendor/jquery-migrate-3.3.2.min.js'; ?>"></script>
<script src="<?php echo base_url() . './assets2/js/vendor/bootstrap.bundle.min.js'; ?>"></script>

<!-- Plugins JS -->
<script src="<?php echo base_url() . './assets2/js/plugins/aos.js'; ?>"></script>
<script src="<?php echo base_url() . './assets2/js/plugins/parallax.js'; ?>"></script>
<script src="<?php echo base_url() . './assets2/js/plugins/swiper-bundle.min.js'; ?>"></script>
<script src="<?php echo base_url() . './assets2/js/plugins/perfect-scrollbar.min.js'; ?>"></script>
<script src="<?php echo base_url() . './assets2/js/plugins/jquery.powertip.min.js'; ?>"></script>
<script src="<?php echo base_url() . './assets2/js/plugins/nice-select.min.js'; ?>"></script>
<script src="<?php echo base_url() . './assets2/js/plugins/glightbox.min.js'; ?>"></script>
<script src="<?php echo base_url() . './assets2/js/plugins/jquery.sticky-kit.min.js'; ?>"></script>
<script src="<?php echo base_url() . './assets2/js/plugins/imagesloaded.pkgd.min.js'; ?>"></script>
<script src="<?php echo base_url() . './assets2/js/plugins/masonry.pkgd.min.js'; ?>"></script>
<script src="<?php echo base_url() . './assets2/js/plugins/flatpickr.js'; ?>"></script>
<script src="<?php echo base_url() . './assets2/js/plugins/range-slider.js'; ?>"></script>
<script src="<?php echo base_url() . './assets2/js/plugins/select2.min.js'; ?>"></script>


<!-- Activation JS -->
<script src="<?php echo base_url() . './assets2/js/main.js'; ?>"></script>

</body>
</html>
