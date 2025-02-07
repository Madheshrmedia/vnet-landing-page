<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vnet - Education Study Center </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">

    <link rel="icon" type="image/png" href="/image/favicon.png">
  






    <style>
        .values-slider {
            max-width: 1200px;
            overflow: hidden;
            margin: 3rem auto 1rem auto;
        }

        /* Value Slider */
        .values-slider .value {
            box-sizing: border-box;
            border-radius: 10px;
            background-color: #4CAF50;
            color: #FFFFFF !important;
            background-size: 100%;
            text-align: left;
            margin: 0 auto;
            padding: 45px;
            color: #666;
            max-width: 400px;
            min-height: 230px;
        }

        .values-slider .value .head {}

        .values-slider .value .head h3 {
            display: inline-block;
            font: bold 24px 'open sans';
            position: relative;
            top: -20px;
        }

        .values-slider .value .head .line {
            display: inline-block;
            width: 40px;
            height: 1px;
            background: #eacfb1;
            margin: 0 15px;
            position: relative;
            top: -25px;
        }

        .values-slider .value .head .value-icon {
            display: inline-block;
            width: 55px;
            height: auto;
        }

        .values-slider .value .head .value-icon svg {
            width: 100%;
            height: auto;
        }

        .values-slider .value .value-text {
            font: 12px quicksand;
            line-height: 20px;
            margin-top: 10px;
        }

        .values-slider .owl-item .item {
            filter: blur(3px);
            transform: scale(.75);
            transition: all .5s;
        }

        .owl-carousel .owl-item img {
            display: block;
            width: 16%;
        }

        .values-slider .owl-item.active.center .item {
            filter: blur(0);
            transform: scale(1);
            transition: all .5s;
        }

        .values-slider .owl-nav {
            position: absolute;
            top: 35%;
            width: 100%;
        }


        .values-slider .owl-nav .owl-prev {
            float: left;
        }

        .values-slider .owl-nav .owl-prev span,
        .values-slider .owl-nav .owl-next span {
            color: #666;
            font-size: 48px;
            border-radius: 100%;
            width: 65px;
            height: 65px;
            line-height: 65px;
            text-align: center;
        }

        .values-slider .owl-nav .owl-next {
            float: right;
        }

        /* -------------- */
        .header-logo {
            width: 125px;
        }

        .nav-item {
            margin-right: 25px;
        }

        .dropdown-item {
            font-weight: 300 !important;
            color: #002A5C !important;
            font-size: 14px !important;
        }

        .header-icon {
            width: 25px;
            margin-right: 10px;
        }

        .booknow-btn {
            text-decoration: none;
            padding: 8px 17px;
            background: #4CAF50;
            color: white;
            margin-left: 30px;
            border-radius: 5px;
        }

        .call-img {
            width: 60px;
        }

        .cl-btn {
            text-decoration: none;
            color: #4CAF50;
            padding-left: 10px;
            font-size: 20px;
        }

        .cl-btn span {
            font-size: 16px;
            color: black;
        }

        nav {
            background: white;
        }

        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .banner_cont {
            padding: 0px;
        }

        .ab-icon {
            width: 30px;
            height: 30px;
        }

        .ab-subcont {
            padding-left: 15px;
            font-size: 22px;
            font-weight: bold;
            color: #002A5C;
            line-height: 25px;
        }

        .ab-subcont span {
            font-size: 16px;
            font-weight: normal;
            color: black;
        }

        .ab-cont {
            text-transform: uppercase;
            font-weight: bold;
        }

        .ab-head {
            color: #002A5C;
        }

        .why-left {
            background-color: #002A5C;
            color: white;
            border-radius: 15px;
            border-color: transparent;
        }

        .ab-ticon {
            width: 25px;
            height: 25px;
        }

        .why-rhead {
            font-size: 25px;
        }

        .abt-card {
            border-color: #009688;
        }

        .why-right {
            font-size: 22px;
            font-weight: 500;
            color: #002A5C;
        }

        .co-topcent {
            text-transform: uppercase;
            font-weight: 400;
        }

        .co-head {
            color: #002A5C;
        }

        .co-container {
            margin-top: 100px;
        }

        .co-slider {
            margin-top: 50px;
        }

        .co-card {
            border-radius: 15px;
        }

        .co-ticon {
            width: 16px !important;
        }

        .co-btn {
            background: #E3F2FD;
            font-size: 16px;
            border: 1px solid #009688;
            /* Corrected this line */
            border-radius: 16px;
            padding: 5px 15px;
        }

        .co-card-body {
            padding: 40px 30px 20px 30px;
        }

        .co-cardhead {
            font-size: 24px;
            color: #4CAF50;
            margin-top: 15px;
        }

        .co-pcont {
            margin-bottom: 0rem;
            font-size: 16px;
        }

        .fl-container {
            margin-top: 100px;
        }

        /* ----------- */

        .mob_banner_cont {
            display: none;
        }

        .banner_cont {
            display: block;
        }

        #doc {
            height: 33px !important;
        }

        .fl-col {
            padding: 0px;
        }

        .co-head-text {
            padding-top: 20px;
            padding-bottom: 20px;

        }

        .co-head {
            line-height: 70px;

        }

        .fapa-cont {
            color: #034833;
            background-color: #E3F2FD;
            border: 1px solid #009688;
            border-radius: 38px;
            padding: 8px 25px;
            font-weight: bold;
            font-size: 30px;
        }

        @media only screen and (max-width: 600px) {
            .fl-in_container {
                width: 100%;
            }

            .banner_cont {
                display: none;
            }

            .mob_banner_cont {
                display: block;
                padding: 0px !important;
            }

            .co-head {
                font-size: 14px;
            }

            .form-wrap {
                padding: 20px !important;
            }

            .ab-head {
                font-size: 27px;
            }

            .co-topcent {
                margin-top: 10px;
                margin-bottom: -1rem;
            }

            .fapa {
                font-size: 20px;
            }

            .fapa-cont {
                color: #034833;
                background-color: #E3F2FD;
                border: 1px solid #009688;
                border-radius: 38px;
                padding: 8px 25px;
                font-weight: bold;
                font-size: 20px;
            }

            .footer-maincard {
                margin-top: 10rem !important;
            }

            .co-head-text {
                padding-top: 0px;
                padding-bottom: 0px;
            }

            .co-head {
                line-height: 20px;
            }

        }
    </style>
</head>

<body>
    <!-- header -->
    <header class="header header-sticky" id="headerall">

        <!-- header -->
        <nav class="navbar navbar-expand-lg navbar-light shadow px-5  sticky-top">
            <div class="container-fluid nav-container">
                <a class="navbar-brand" href="./index.php"><img src="./image/logo.png" alt="Vnet vincerent  solution"
                        class="header-logo"></a>
                <button class="navbar-toggler " type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">

                    <span><i class="fas fa-bars" style="color:black"></i></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="./#aboutus_frame">About Us </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./#co_container">Distance Education</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Professional services
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="https://vnetpro.in/"
                                        target="_blank">Apprenticeship</a></li>
                                <li><a class="dropdown-item" href="https://vnetpro.in/" target="_blank">HR Services &
                                        Recruitment</a></li>
                                <li><a class="dropdown-item" href="https://vnetpro.in/" target="_blank">Registrations &
                                        Certifications</a></li>
                                <li><a class="dropdown-item" href="https://vnetpro.in/" target="_blank">Skill
                                        Development Schemes</a></li>
                                <li><a class="dropdown-item" href="https://vnetpro.in/" target="_blank">Corporate
                                        Insurance</a></li>

                            </ul>
                        </li>
                        <li class="nav-item mobile_dis">
                            <a class="nav-link" href="./#paymentframes">Payment</a>
                        </li>
                        <li class="nav-item mobile_dis">
                            <a class="nav-link" href="./#centercontent_form">Contact us </a>
                        </li>
                    </ul>
                    <div class="d-flex header-cont ">
                        <img src="./image/cl-icon.png" class="call-img" alt="call icon">

                        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="cl-btn">
                            <span>Need help?</span><br>
                            +91 88671 32805
                        </a>

                    </div>
                </div>
            </div>
        </nav>

    </header>
    <!-- end header -->

    <!-- banner slider -->
    <div class="container-fluid banner_cont">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="./image/banner-1.webp" alt="vnet"></div>
                <div class="swiper-slide"><img src="./image/banner2.webp" alt="vnet"></div>
                <div class="swiper-slide"><img src="./image/banner3.webp" alt="vnet"></div>
            </div>
        </div>
    </div>
    <!-- banner end -->

    <!-- mobile banner slider -->
    <div class="container-fluid mob_banner_cont">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="./image/mob-ban3.webp" alt="vnet"></div>
                <div class="swiper-slide"><img src="./image/mob-ban1.webp" alt="vnet"></div>
                <div class="swiper-slide"><img src="./image/mob-ban2.webp" alt="vnet"></div>
            </div>
        </div>
    </div>
    <!-- mobile banner end -->

    <!-- about us frame -->
    <div class="container" id="aboutus_frame">
        <div class="row my-5">
            <div class="col-md-11 mx-auto">
                <!-- about us -->
                <div class="row">
                    <div class="col-md-6">
                        <img src="./image/ab.webp" class="img-fluid" alt="vnet">
                    </div>
                    <div class="col-md-6">
                        <p class="ab-cont">
                            about us
                        </p>
                        <h1 class="ab-head">
                            Ensuring Quality Education,
                            Transforming Lives
                        </h1>
                        <p class="ab-fullcont py-3">
                            Vincerenet Solutions is a brain child of globally certified career counselors, founded in
                            2017 and has been offering education consultation under the brand Vnet Education which has
                            emerged as one of the top study centers in Bangalore.
                            <br>
                            <br>
                            At Vnet Education, we believe that education should be accessible to everyone, regardless of
                            their location or circumstances. As a trusted leader in distance education, we are committed
                            to bridging the gap between aspirations and achievements by offering top-tier courses from
                            renowned universities.
                        </p>

                        <div class="ab-point d-flex mb-3">
                            <img src="./image/ab-i.png" class="ab-icon" alt="vent">
                            <p class="ab-subcont">
                                Our Vision:
                                <br>
                                <span class="ab-subcontpt">
                                    To make online /distance education accessible to individuals and working
                                    professionals,
                                    enabling them to achieve their dreams and excel in their careers.
                                </span>

                            </p>
                        </div>

                        <div class="ab-point d-flex ">
                            <img src="./image/ab-i.png" class="ab-icon" alt="vent">
                            <p class="ab-subcont">
                                Our Vision:
                                <br>
                                <span class="ab-subcontpt">
                                    &bull; To provide flexible and affordable education options that cater to diverse
                                    needs.
                                </span>
                                <br>
                                <span class="ab-subcontpt">
                                    &bull; To create a seamless learning experience through technology-driven
                                    solutions.
                                </span>
                            </p>
                        </div>

                    </div>
                </div>
                <!-- why us -->
                <div class="row">
                    <div class="col-md-6">
                        <button class="why-left px-3 py-1">
                            UGC accredited and NAAC certified Universities
                        </button>
                        <img src="./image/ab-li.webp" class="img-fluid mt-5" alt="vnet">
                    </div>
                    <div class="col-md-6">
                        <p class="why-right">
                            Why Choose Us?
                        </p>
                        <div class="row">
                            <div class="col-md-6 mt-4">
                                <div class="card abt-card">
                                    <div class="card-body">
                                        <h2 class="why-rhead">
                                            Expert Partnerships
                                        </h2>

                                        <div class="why-rcont d-flex mb-3 align-items-center">
                                            <img src="./image/ab-t.png" class="ab-ticon" alt="vent">
                                            <p class="why-pcont ps-3">
                                                Collaborations with leading universities ensure high-quality education.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-4">
                                <div class="card abt-card">
                                    <div class="card-body">
                                        <h2 class="why-rhead">
                                            Flexible Learning
                                        </h2>

                                        <div class="why-rcont d-flex mb-3 align-items-center">
                                            <img src="./image/ab-t.png" class="ab-ticon" alt="vent">
                                            <p class="why-pcont ps-3">
                                                Online classes or self-study with online or offline examinations.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                </div>
                            </div>
                            <div class="col-md-6 mt-5">
                                <div class="card abt-card">
                                    <div class="card-body">
                                        <h2 class="why-rhead">
                                            Affordable Fees
                                        </h2>

                                        <div class="why-rcont d-flex mb-3 align-items-center">
                                            <img src="./image/ab-t.png" class="ab-ticon" alt="vent">
                                            <p class="why-pcont ps-3">
                                                Transparent and competitive fee structures.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                </div>
                            </div>
                            <div class="col-md-6 mt-5">
                                <div class="card abt-card">
                                    <div class="card-body">
                                        <h2 class="why-rhead">
                                            Easy EMI Options
                                        </h2>

                                        <div class="why-rcont d-flex mb-3 align-items-center">
                                            <img src="./image/ab-t.png" class="ab-ticon" alt="vent">
                                            <p class="why-pcont ps-3">
                                                Semester wise payments or monthly EMI options available.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- about us end -->

        </div>
    </div>

    <!-- Courses Offered -->
    <div class="container co-container" id="co_container">
        <div class="row">
            <div class="col-md-11 mx-auto">
                <p class="co-topcent">
                    Courses Offered
                </p>

                <h1 class="mt-4 co-head">
                    Explore Our Courses
                </h1>

                <div class="row co-slider">
                    <div class="col-md-12">
                        <div class="swiper co-swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide align-items-baseline">
                                    <div class="card co-card">
                                        <div class="card-body co-card-body text-start">
                                            <button class="co-btn">
                                                Duration: 3 years
                                            </button>

                                            <h3 class="co-cardhead mb-3">
                                                Bachelor of Arts (BA)
                                            </h3>

                                            <div class="why-rcont d-flex mb-3 align-items-center">
                                                <img src="./image/co-t.png" class="co-ticon" alt="vent">
                                                <p class="co-pcont ps-3">
                                                    Recognition- UGC & NAAC A*
                                                </p>
                                            </div>
                                            <div class="why-rcont d-flex mb-3 align-items-center">
                                                <img src="./image/co-t.png" class="co-ticon" alt="vent">
                                                <p class="co-pcont ps-3">
                                                    Learning Mode- Online classes/Self Study
                                                </p>
                                            </div>
                                            <div class="why-rcont d-flex mb-3 align-items-center">
                                                <img src="./image/co-t.png" class="co-ticon" alt="vent">
                                                <p class="co-pcont ps-3">
                                                    Exam Mode- Online/Offline
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide align-items-baseline">
                                    <div class="card co-card">
                                        <div class="card-body co-card-body text-start">
                                            <button class="co-btn">
                                                Duration: 3 years
                                            </button>

                                            <h3 class="co-cardhead mb-3">
                                                Bachelor of Commerce (B.Com)
                                            </h3>

                                            <div class="why-rcont d-flex mb-3 align-items-center">
                                                <img src="./image/co-t.png" class="co-ticon" alt="vent">
                                                <p class="co-pcont ps-3">
                                                    Recognition- UGC & NAAC A*
                                                </p>
                                            </div>
                                            <div class="why-rcont d-flex mb-3 align-items-center">
                                                <img src="./image/co-t.png" class="co-ticon" alt="vent">
                                                <p class="co-pcont ps-3">
                                                    Learning Mode- Online classes/Self Study
                                                </p>
                                            </div>
                                            <div class="why-rcont d-flex mb-3 align-items-center">
                                                <img src="./image/co-t.png" class="co-ticon" alt="vent">
                                                <p class="co-pcont ps-3">
                                                    Exam Mode- Online/Offline
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide align-items-baseline">
                                    <div class="card co-card">
                                        <div class="card-body co-card-body text-start">
                                            <button class="co-btn">
                                                Duration: 3 years
                                            </button>

                                            <h3 class="co-cardhead mb-3">
                                                Bachelor of Business Administration (BBA)
                                            </h3>

                                            <div class="why-rcont d-flex mb-3 align-items-center">
                                                <img src="./image/co-t.png" class="co-ticon" alt="vent">
                                                <p class="co-pcont ps-3">
                                                    Recognition- UGC & NAAC A*
                                                </p>
                                            </div>
                                            <div class="why-rcont d-flex mb-3 align-items-center">
                                                <img src="./image/co-t.png" class="co-ticon" alt="vent">
                                                <p class="co-pcont ps-3">
                                                    Learning Mode- Online classes/Self Study
                                                </p>
                                            </div>
                                            <div class="why-rcont d-flex mb-3 align-items-center">
                                                <img src="./image/co-t.png" class="co-ticon" alt="vent">
                                                <p class="co-pcont ps-3">
                                                    Exam Mode- Online/Offline
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide align-items-baseline">
                                    <div class="card co-card">
                                        <div class="card-body co-card-body text-start">
                                            <button class="co-btn">
                                                Duration: 3 years
                                            </button>

                                            <h3 class="co-cardhead mb-3">
                                                Bachelor of Science (B.Sc)
                                            </h3>

                                            <div class="why-rcont d-flex mb-3 align-items-center">
                                                <img src="./image/co-t.png" class="co-ticon" alt="vent">
                                                <p class="co-pcont ps-3">
                                                    Recognition- UGC & NAAC A*
                                                </p>
                                            </div>
                                            <div class="why-rcont d-flex mb-3 align-items-center">
                                                <img src="./image/co-t.png" class="co-ticon" alt="vent">
                                                <p class="co-pcont ps-3">
                                                    Learning Mode- Self Study
                                                </p>
                                            </div>
                                            <div class="why-rcont d-flex mb-3 align-items-center">
                                                <img src="./image/co-t.png" class="co-ticon" alt="vent">
                                                <p class="co-pcont ps-3">
                                                    Exam Mode- Online/Offline
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide align-items-baseline">
                                    <div class="card co-card">
                                        <div class="card-body co-card-body text-start">
                                            <button class="co-btn">
                                                Duration: 3 years
                                            </button>

                                            <h3 class="co-cardhead mb-3">
                                                Bachelor of Computer Applications (BCA)
                                            </h3>

                                            <div class="why-rcont d-flex mb-3 align-items-center">
                                                <img src="./image/co-t.png" class="co-ticon" alt="vent">
                                                <p class="co-pcont ps-3">
                                                    Recognition- UGC & NAAC A*
                                                </p>
                                            </div>
                                            <div class="why-rcont d-flex mb-3 align-items-center">
                                                <img src="./image/co-t.png" class="co-ticon" alt="vent">
                                                <p class="co-pcont ps-3">
                                                    Learning Mode- Online classes/Self Study
                                                </p>
                                            </div>
                                            <div class="why-rcont d-flex mb-3 align-items-center">
                                                <img src="./image/co-t.png" class="co-ticon" alt="vent">
                                                <p class="co-pcont ps-3">
                                                    Exam Mode- Online/Offline
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide align-items-baseline">
                                    <div class="card co-card">
                                        <div class="card-body co-card-body text-start">
                                            <button class="co-btn">
                                                Duration: 2 years
                                            </button>

                                            <h3 class="co-cardhead mb-3">
                                                Master of Arts (MA)
                                            </h3>

                                            <div class="why-rcont d-flex mb-3 align-items-center">
                                                <img src="./image/co-t.png" class="co-ticon" alt="vent">
                                                <p class="co-pcont ps-3">
                                                    Recognition- UGC & NAAC A*
                                                </p>
                                            </div>
                                            <div class="why-rcont d-flex mb-3 align-items-center">
                                                <img src="./image/co-t.png" class="co-ticon" alt="vent">
                                                <p class="co-pcont ps-3">
                                                    Learning Mode- Online classes/Self Study
                                                </p>
                                            </div>
                                            <div class="why-rcont d-flex mb-3 align-items-center">
                                                <img src="./image/co-t.png" class="co-ticon" alt="vent">
                                                <p class="co-pcont ps-3">
                                                    Exam Mode- Online/Offline
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide align-items-baseline">
                                    <div class="card co-card">
                                        <div class="card-body co-card-body text-start">
                                            <button class="co-btn">
                                                Duration: 2 years
                                            </button>

                                            <h3 class="co-cardhead mb-3">
                                                Master of Commerce (M.Com)
                                            </h3>

                                            <div class="why-rcont d-flex mb-3 align-items-center">
                                                <img src="./image/co-t.png" class="co-ticon" alt="vent">
                                                <p class="co-pcont ps-3">
                                                    Recognition- UGC & NAAC A*
                                                </p>
                                            </div>
                                            <div class="why-rcont d-flex mb-3 align-items-center">
                                                <img src="./image/co-t.png" class="co-ticon" alt="vent">
                                                <p class="co-pcont ps-3">
                                                    Learning Mode- Online classes/Self Study
                                                </p>
                                            </div>
                                            <div class="why-rcont d-flex mb-3 align-items-center">
                                                <img src="./image/co-t.png" class="co-ticon" alt="vent">
                                                <p class="co-pcont ps-3">
                                                    Exam Mode- Online/Offline
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide align-items-baseline">
                                    <div class="card co-card">
                                        <div class="card-body co-card-body text-start">
                                            <button class="co-btn">
                                                Duration: 2 years
                                            </button>

                                            <h3 class="co-cardhead mb-3">
                                                Master of Business Administration (MBA)
                                            </h3>

                                            <div class="why-rcont d-flex mb-3 align-items-center">
                                                <img src="./image/co-t.png" class="co-ticon" alt="vent">
                                                <p class="co-pcont ps-3">
                                                    Recognition- UGC & NAAC A*
                                                </p>
                                            </div>
                                            <div class="why-rcont d-flex mb-3 align-items-center">
                                                <img src="./image/co-t.png" class="co-ticon" alt="vent">
                                                <p class="co-pcont ps-3">
                                                    Learning Mode- Online classes/Self Study
                                                </p>
                                            </div>
                                            <div class="why-rcont d-flex mb-3 align-items-center">
                                                <img src="./image/co-t.png" class="co-ticon" alt="vent">
                                                <p class="co-pcont ps-3">
                                                    Exam Mode- Online/Offline
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide align-items-baseline">
                                    <div class="card co-card">
                                        <div class="card-body co-card-body text-start">
                                            <button class="co-btn">
                                                Duration: 2 years
                                            </button>

                                            <h3 class="co-cardhead mb-3">
                                                Master of Science (M.Sc)
                                            </h3>

                                            <div class="why-rcont d-flex mb-3 align-items-center">
                                                <img src="./image/co-t.png" class="co-ticon" alt="vent">
                                                <p class="co-pcont ps-3">
                                                    Recognition- UGC & NAAC A*
                                                </p>
                                            </div>
                                            <div class="why-rcont d-flex mb-3 align-items-center">
                                                <img src="./image/co-t.png" class="co-ticon" alt="vent">
                                                <p class="co-pcont ps-3">
                                                    Learning Mode- Self Study
                                                </p>
                                            </div>
                                            <div class="why-rcont d-flex mb-3 align-items-center">
                                                <img src="./image/co-t.png" class="co-ticon" alt="vent">
                                                <p class="co-pcont ps-3">
                                                    Exam Mode- Online/Offline
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide align-items-baseline">
                                    <div class="card co-card">
                                        <div class="card-body co-card-body text-start">
                                            <button class="co-btn">
                                                Duration: 2 years
                                            </button>

                                            <h3 class="co-cardhead mb-3">
                                                Master of Computer Applications (MCA)
                                            </h3>

                                            <div class="why-rcont d-flex mb-3 align-items-center">
                                                <img src="./image/co-t.png" class="co-ticon" alt="vent">
                                                <p class="co-pcont ps-3">
                                                    Recognition- UGC & NAAC A*
                                                </p>
                                            </div>
                                            <div class="why-rcont d-flex mb-3 align-items-center">
                                                <img src="./image/co-t.png" class="co-ticon" alt="vent">
                                                <p class="co-pcont ps-3">
                                                    Learning Mode- Online classes/Self Study
                                                </p>
                                            </div>
                                            <div class="why-rcont d-flex mb-3 align-items-center">
                                                <img src="./image/co-t.png" class="co-ticon" alt="vent">
                                                <p class="co-pcont ps-3">
                                                    Exam Mode- Online/Offline
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide align-items-baseline">
                                    <div class="card co-card">
                                        <div class="card-body co-card-body text-start">
                                            <button class="co-btn">
                                                Duration: 2 years
                                            </button>

                                            <h3 class="co-cardhead mb-3">
                                                Master of Social Work (MSW)
                                            </h3>

                                            <div class="why-rcont d-flex mb-3 align-items-center">
                                                <img src="./image/co-t.png" class="co-ticon" alt="vent">
                                                <p class="co-pcont ps-3">
                                                    Recognition- UGC & NAAC A*
                                                </p>
                                            </div>
                                            <div class="why-rcont d-flex mb-3 align-items-center">
                                                <img src="./image/co-t.png" class="co-ticon" alt="vent">
                                                <p class="co-pcont ps-3">
                                                    Learning Mode- Online classes/Self Study
                                                </p>
                                            </div>
                                            <div class="why-rcont d-flex mb-3 align-items-center">
                                                <img src="./image/co-t.png" class="co-ticon" alt="vent">
                                                <p class="co-pcont ps-3">
                                                    Exam Mode- Online/Offline
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide align-items-baseline">
                                    <div class="card co-card">
                                        <div class="card-body co-card-body text-start">
                                            <button class="co-btn">
                                                Duration: 6 months
                                            </button>

                                            <h3 class="co-cardhead mb-3">
                                                10th & 12th (SSLC & PUC- NIOS)
                                            </h3>

                                            <div class="why-rcont d-flex mb-3 align-items-center">
                                                <img src="./image/co-t.png" class="co-ticon" alt="vent">
                                                <p class="co-pcont ps-3">
                                                    Recognition- Open Schooling
                                                </p>
                                            </div>
                                            <div class="why-rcont d-flex mb-3 align-items-center">
                                                <img src="./image/co-t.png" class="co-ticon" alt="vent">
                                                <p class="co-pcont ps-3">
                                                    Learning Mode- Self Study
                                                </p>
                                            </div>
                                            <div class="why-rcont d-flex mb-3 align-items-center">
                                                <img src="./image/co-t.png" class="co-ticon" alt="vent">
                                                <p class="co-pcont ps-3">
                                                    Exam Mode- Offline
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end Courses Offered -->

    <!-- Flexible Learning frame -->
    <div class="container-fluid fl-container">
        <div class="row">
            <div class="col-md-12 fl-col mx-auto position-relative text-center">
                <img src="./image/fl.webp" class="img-fluid w-100" alt="vnet">
                <div class="position-absolute top-50 start-50 translate-middle fl-in_container">
                    <h1 class="co-head  text-white text-bold">Flexible Learning,<br> Unlimited Possibilities</h1>
                    <p class="text-white co-head-text">Explore affordable, accredited courses tailored to your career
                        goals.</p>
                    <a href="./#co_container" type="button" class="btn bg-green view-btn text-white">
                        View Courses <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                        </svg>
                    </a>
                    <style>
                        .view-btn {
                            position: relative;
                            overflow: hidden;
                        }

                        .view-btn .arrow {
                            display: inline-block;
                            transition: transform 0.3s ease-in-out;
                        }

                        .view-btn:hover .arrow {
                            transform: translateX(8px);
                        }

                        .bg-green {
                            background-color: #4CAF50;
                            border-radius: 50px;
                            padding: 11px;
                        }
                    </style>
                    <a href="./#centercontent_form" type="button" class="btn bg-transparent text-white">Contact us</a>
                </div>
            </div>

        </div>
    </div>
    <!-- end Flexible Learning -->
    <!-- start testimonial frame -->
    <style>
        .user-info {
            display: flex;
            align-items: center;
            /* Align items vertically */
            gap: 10px;
            /* Space between avatar and name */
            font-size: 18px;
        }

        .avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
        }
    </style>
    <div class="container" id="centercontent">
        <p class="co-topcent">
            Testimonials
        </p>
        <h1 class="mt-4 co-head">
            Hear From Our Students
        </h1>


        <div class="values-slider">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="value">
                        <p>Choosing Vnet Education was the best decision I made for my education. Their guidance and
                            support throughout my MBA journey were outstanding. From helping me choose the right
                            university to assisting with my course structure, everything was seamless. I couldn't have
                            done it without their expertise.</p>
                        <div class="user-info">
                            <img src="./image/icon1.png" alt="Avatar" class="avatar" width="20">
                            <span>– Soumya Rani<br><span style="font-size:14px">MBA</span> </span>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="value">
                        <p>As a B.Com student, I wanted a consultancy that truly understood my aspirations. Vnet
                            Education went above and beyond to provide me with the resources and advice I needed. Their
                            attention to detail and personalized approach made all the difference. Highly recommended!
                        </p>
                        <div class="user-info">
                            <img src="./image/icon2.png" alt="Avatar" class="avatar" width="20">
                            <span>– Gourubhai<br><span style="font-size:14px">B.Com (Pursuing)</span> </span>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="value">
                        <p>The team at Vnet Education was incredibly helpful in shaping my career. They provided
                            detailed insights about the BBA program, and their support in navigating the admissions
                            process was exceptional. Thanks to them, I’m thriving in my course and looking forward to a
                            bright future.</p>
                        <div class="user-info">
                            <img src="./image/icon2.png" alt="Avatar" class="avatar" width="20">
                            <span>– Ravi Kiran<br><span style="font-size:14px">BBA</span> </span>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="value">
                        <p>Starting my BBA journey was made so much easier with Vnet's support. They were always
                            available to answer my questions, and their step-by-step assistance helped me build
                            confidence in my choices. I truly appreciate their dedication to students' success.
                        </p>
                        <div class="user-info">
                            <img src="./image/icon2.png" alt="Avatar" class="avatar" width="20">
                            <span>– Chandru B <br><span style="font-size:14px">BBA</span> </span>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="value">
                        <p>After completing my PUC, I was unsure about the next steps in my education. Vnet Education
                            guided me with clarity and professionalism, helping me chart a clear path for my future.
                            Their encouragement and expertise have been invaluable.
                        </p>
                        <div class="user-info">
                            <img src="./image/icon2.png" alt="Avatar" class="avatar" width="20">
                            <span>– Santosh<br><span style="font-size:14px">PUC</span> </span>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="value">
                        <p>Vnet Education has been a game-changer for my education. Their expertise and personalized
                            approach made the process of enrolling in my BBA program stress-free. With their support, I
                            feel confident in achieving my academic and career goals. Thank you for being such a
                            reliable guide!
                        </p>
                        <div class="user-info">
                            <img src="./image/icon2.png" alt="Avatar" class="avatar" width="20">
                            <span>– Surendhar<br><span style="font-size:14px">BBA (Pursuing)</span> </span>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="value">
                        <p>The guidance and support I received from Vnet Education have been exceptional. They helped me
                            find the perfect B.Com program and made the entire admission process seamless. Their
                            dedication to student success is truly commendable. I’m grateful for their support!
                        </p>
                        <div class="user-info">
                            <img src="./image/icon1.png" alt="Avatar" class="avatar" width="20">
                            <span>– Veena<br><span style="font-size:14px">B.Com (Pursuing)</span> </span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- end testimonial frame -->
    <!-- start contact frame -->
    <style>
        .formcontainer {
            border: 1px solid #E3E3E3;
            border-radius: 12px;
            padding: 2rem;
            margin: 2rem 0;
            color: #002A5C;
            text-align: left;
        }

        #contactform {
            text-align: center;

        }

        .map-container {
            width: 100%;
            height: 400px;
        }
    </style>
    <div class="container" id="centercontent_form">

        <h1 class="mt-4 co-head text-center">
            Contact us
        </h1>
        <div class="formcontainer">
            <div class="row">
                <div class="col-md-5 col-sm-12">
                    <h5> <i class="fas fa-envelope me-3" style="visibility:hidden"></i>Vincerenet Solutions (Vnet
                        Education)</h5><br>
                    <p><i class="fas fa-home me-3"></i> No-7, 2nd Floor, YRL B. Sardar
                        Basha
                        Tower, Hemavathi Block, Bettadasanapura, Electronic City Phase-1, Bangalore-560100</p>
                    <p><i class="fas fa-phone-alt me-3"></i>+91 88671 32805, 81972 41034
                    </p>
                    <p> <i class="fas fa-envelope me-3"></i>admissions@vneteducation.com,
                        contact@vneteducation.com
                    </p>

                    <div class="map-container">
                        <!-- <iframe style="width:100%"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3889.005612494828!2d77.63524547454564!3d12.907360416284465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae14914a64cf51%3A0x5142e68feee0c831!2sVincerenet%20Solutions%20(Vnet)!5e0!3m2!1sen!2sin!4v1738561482502!5m2!1sen!2sin"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade" width="50%" height="300" style="border:0;"
                            allowfullscreen="" loading="lazy">
                        </iframe> -->
                        <iframe style="width:100%"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d124442.34398106135!2d77.51451445795041!3d12.919079063299051!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae6bfbc9d90b85%3A0x458d2211da69683a!2sVincerenet%20Solutions!5e0!3m2!1sen!2sin!4v1738732692960!5m2!1sen!2sin"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="50%"
                            height="100%" style="border:0;height: 100%;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                <div class="col-md-7 col-sm-12" id="contactform">
                    <h4 style=" text-transform: uppercase;margin-bottom: 2rem;">Contact Form</h4>

                    <!-- ---------------- -->
                    <style>
                        .container {
                            max-width: 1230px;
                            width: 100%;
                        }

                        h1 {
                            font-weight: 700;
                            font-size: 45px;
                            font-family: 'Roboto', sans-serif;
                        }


                        #description {
                            font-size: 24px;
                        }

                        .form-wrap {
                            background: #F1F5EB;
                            width: 100%;
                            max-width: 850px;
                            padding: 50px;
                            margin: 0 auto;
                            position: relative;
                            -webkit-border-radius: 10px;
                            -moz-border-radius: 10px;
                            border-radius: 10px;
                            -webkit-box-shadow: 0px 0px 40px rgba(0, 0, 0, 0.15);
                            -moz-box-shadow: 0px 0px 40px rgba(0, 0, 0, 0.15);
                            box-shadow: 0px 0px 40px rgba(0, 0, 0, 0.15);
                        }

                        .form-group {
                            margin-bottom: 25px;
                            text-align: left;
                        }

                        .form-group>label {
                            display: block;
                        }

                        .form-control {
                            height: 50px;
                            background: #FFFFFF;
                            border-color: #E3DBD8;
                            border-radius: 30px;
                            padding: 0 15px;
                            -webkit-transition: all 0.3s ease-in-out;
                            -moz-transition: all 0.3s ease-in-out;
                            -o-transition: all 0.3s ease-in-out;
                            transition: all 0.3s ease-in-out;
                        }

                        .form-control:focus {
                            border-color: #00bcd9;
                            -webkit-box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
                            -moz-box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
                            box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
                        }

                        textarea.form-control {
                            height: 160px;
                            padding-top: 15px;
                            resize: none;
                        }

                        .btn {
                            padding: .657rem .75rem;
                            font-size: 18px;
                            letter-spacing: 0.050em;
                            -webkit-transition: all 0.3s ease-in-out;
                            -moz-transition: all 0.3s ease-in-out;
                            -o-transition: all 0.3s ease-in-out;
                            transition: all 0.3s ease-in-out;
                        }

                        .btn-primary {
                            color: #fff;
                            background-color: #00bcd9;
                            border-color: #00bcd9;
                        }

                        .btn-primary:hover {
                            color: #00bcd9;
                            background-color: #ffffff;
                            border-color: #00bcd9;
                            -webkit-box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
                            -moz-box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
                            box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
                        }

                        .btn-primary:focus,
                        .btn-primary.focus {
                            color: #00bcd9;
                            background-color: #ffffff;
                            border-color: #00bcd9;
                            -webkit-box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
                            -moz-box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
                            box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
                        }

                        .btn-primary:not(:disabled):not(.disabled):active,
                        .btn-primary:not(:disabled):not(.disabled).active,
                        .show>.btn-primary.dropdown-toggle {
                            color: #00bcd9;
                            background-color: #ffffff;
                            border-color: #00bcd9;
                        }

                        .btn-primary:not(:disabled):not(.disabled):active:focus,
                        .btn-primary:not(:disabled):not(.disabled).active:focus,
                        .show>.btn-primary.dropdown-toggle:focus {
                            -webkit-box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
                            -moz-box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
                            box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
                        }

                        #submit,
                        #submits {
                            width: 100%;
                            background-color: #4CAF50;
                            border-radius: 40px;
                            border: none;
                        }
                    </style>
                    <div class="container">

                    
                    <div class="form-wrap">
    <form id="survey-form">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email">Your Email</label>
                    <input type="email" name="email" id="email" placeholder="Your Email" class="form-control" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="phone">Your Phone</label>
                    <input type="number" name="phone" id="phone" placeholder="Your Phone" class="form-control" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="address">Your Address</label>
                    <input type="text" name="address" id="address" class="form-control" required>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Interested Course</label>
                    <textarea id="comments" class="form-control" name="comment" placeholder="Enter your comment here..." required></textarea>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 address">
                <button type="submit" id="submit" class="btn btn-primary btn-block">Send Message</button>
            </div>
        </div>
    </form>
    
    <p id="success-message" style="display:none;color:green;">Email Sent Successfully!</p>
    <p id="error-message" style="display:none;color:red;">Failed to send email.</p>
</div>
                    </div>
                 
                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function(){
    $("#survey-form").submit(function(e){
        e.preventDefault(); // Prevent form from reloading the page
        
        $.ajax({
            type: "POST",
            url: "send_mail.php", // The PHP file to handle the email sending
            data: $(this).serialize(),
            success: function(response) {
                if(response.includes("success")){
                    $("#success-message").show();
                    $("#error-message").hide();
                    $("#survey-form")[0].reset();
                } else {
                    $("#error-message").show();
                    $("#success-message").hide();
                }
            }
        });
    });
});
</script>

                    <!-- ----------------------- -->


                    <!-- ----------------------- -->

                </div>
            </div>
        </div>

    </div>

    <!-- end contact frame -->
    <!-- start payment frame -->
    <div class="paymentframe">
        <div class="container" id="paymentframes">
            <div class="row">
                <div class="col-md-6">
                    <img src="./image/payment.webp" alt="image" id="imagecont">
                </div>
                <div class="col-md-6 col-sm-12">


                    <p class="co-topcent">
                        Payment
                    </p>
                    <h1 class="mt-4 co-head">
                        Easy and Secure Payments
                    </h1>
                    <div class="payment">
                        <form  id="survey-forms">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label id="name-label" for="name">Name</label>
                                        <input type="text" name="name" id="name" class="form-control"
                                            style="border-radius: 5px">
                                    </div>
                                </div>

                            </div>
                            <div class="row">

                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label id="email-label" for="email1">Your Email ID</label>
                                        <input type="email1" name="email1" id="email1" placeholder="Your Email"
                                            class="form-control" style="border-radius: 5px">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label id="phone-label" for="phone1">Your Phone</label>
                                        <input type="number" name="phone1" id="phone1" placeholder="Your Phone"
                                            class="form-control" style="border-radius: 5px">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label id="course-label" for="course">Course</label>
                                        <input type="text" name="course" id="course" class="form-control"
                                            style="border-radius: 5px">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label id="file-label" for="doc">Upload Payment Proof (Screenshot)</label>
                                        <input type="file" name="doc" id="doc" class="form-control"
                                            style="border-radius: 5px">
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12 address">
                                    <button type="submit" id="submits" class="btn btn-primary btn-block">Send</button>
                                </div>
                            </div>
                            <p id="success-message1" style="display:none;color:green;">Email Sent Successfully!</p>
                            <p id="error-message1" style="display:none;color:red;">Failed to send email.</p>
                        </form>
                    </div>
                </div>
            </div>
            <!-- start assistance frame -->
            <div class="assistance" style="padding-top:5px;padding-bottom:5px;">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <h1 class="mt-4 fapa" style="color:#034833">
                            For any payment assistance
                        </h1>

                    </div>
                    <div class="col-md-6 col-sm-6 position-relative text-center">
                        <img src="./image/map1.webp" class="img-fluid w-100" alt="vnet">
                        <div class="position-absolute top-50 start-50 translate-middle">
                            <p class="fapa-cont">
                                +918867132805</p>
                        </div>
                    </div>
                </div>
            </div>
            <style>
                .assistance {
                    position: absolute;
                    bottom: -10%;
                    left: 50%;
                    transform: translateX(-50%);
                    width: 80%;
                    margin: auto;
                    background-color: white;
                    border: 1px solid #D0CECE;
                    padding: 50px;
                    border-radius: 10px;
                    box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.2);
                }
            </style>
            <!-- end assistance frame -->
        </div>

    </div>
    <!-- end payment frame -->


    <!-- Footer -->
    <footer class="text-center text-lg-start text-muted pt-1">
        <style>
            #imagecont {
                width: 100%;
                padding-top: 6rem;
            }

            .form-group>label {
                margin-bottom: 8px;
            }

            #payment .form-control {
                border-radius: 6px !important;
            }

            #paymentframes {
                position: relative;
                border-radius: 1rem;
                padding: 3rem 3rem 10rem 3rem;
                background-color: #F1F5EB;
            }

            #centercontent {
                text-align: center;
                margin: 5rem auto;
            }

            .follow-up-link img {
                width: 56px;
                height: 56px;
            }

            .copy-right-content {
                background-color: black;
                color: white;
                border-top: 1px solid #4d4b4b;
            }

            .footer-maincard {
                margin-top: 17rem;
                background-color: #000000;
            }

            .footer-heading {
                color: white;
                line-height: 25px;
            }

            .footer-contenty {
                color: #B0C491;
            }

            .footer-content {
                color: #FFFFFF;
            }

            .UmBQi {
                background-color: #fdfdfd !important;
            }



            .text-reset {
                color: white !important;
                text-decoration: none;
            }

            .ic-ft {
                color: #4CAF50;
            }

            .rm {
                color: white;
            }

            .uslink {
                padding-left: 40px !important;
            }

            .ser-menu {
                padding-left: 25px;
            }

            .payment {
                background-color: #FFFFFF;
                border-radius: 30px;
                padding: 1.3rem;

            }
        </style>

        <!-- Section: Links  -->
        <section class="footer-maincard pt-1">
            <div class="container text-center text-md-start mt-3">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-4 mx-auto mb-4 mt-4">
                        <!-- Content -->
                        <img src="./image/foot-logo.png" style="width:170px;" class="img-fluid" alt="">
                        <div class="footer-content">
                            <p class="mt-2">
                                We are the pioneers in providing end-end consultation in correspondence, distance
                                learning and online education. We also excel in providing professional services like
                                implementation of NAPS/NATS, HR Services, Recruitment, e-Filings, POSH Compliance,
                                certifications and end-end compliance for the industries across India.
                            </p>
                            <div class="footer-follow d-flex mt-4" id="footersocial">
                                <a href="#" target="_blank" class="follow-up-link me-2">
                                    <img src="./image/ft-fb.png" class="img-fluid" alt="">
                                </a>

                                <a href="#" target="_blank" class="follow-up-link me-2">
                                    <img src="./image/li.png" class="img-fluid" alt="">
                                </a>
                                <a href="#" target="_blank" class="follow-up-link me-2">
                                    <img src="./image/ft-ig.png" class="img-fluid" alt="">
                                </a>

                            </div>
                        </div>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 mt-4 uslink">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold footer-heading mb-4">
                            Useful Link
                        </h6>
                        <p class="footer-contenty">
                            <a href="./#aboutus_frame" class="text-reset"><i
                                    class="fas fa-chevron-right me-2 ic-ft"></i>About Us
                            </a>
                        </p>
                        <p class="footer-contenty">
                            <a href="./#co_container" class="text-reset"><i
                                    class="fas fa-chevron-right me-2 ic-ft"></i>Courses
                            </a>
                        </p>
                        <p class="footer-contenty">
                            <a href="./#centercontent_form" class="text-reset"><i
                                    class="fas fa-chevron-right me-2 ic-ft"></i>Contact Us
                            </a>
                        </p>
                        <p class="footer-contenty">
                            <a href="./" class="text-reset"><i class="fas fa-chevron-right me-2 ic-ft"></i>Home
                            </a>
                        </p>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-3 col-xl-2 mx-auto mb-4 mt-4 ser-menu">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold footer-heading mb-4">
                            Professional Services
                        </h6>
                        <p class="footer-contenty">
                            <a href="https://vnetpro.in/" target="_blank" class="text-reset"><i
                                    class="fas fa-chevron-right me-2 ic-ft"></i>NAPS & NATS (Apprenticeship)
                            </a>
                        </p>
                        <p class="footer-contenty">
                            <a href="https://vnetpro.in/" target="_blank" class="text-reset"><i
                                    class="fas fa-chevron-right me-2 ic-ft"></i>HR Services
                            </a>
                        </p>
                        <p class="footer-contenty">
                            <a href="https://vnetpro.in/" target="_blank" class="text-reset"><i
                                    class="fas fa-chevron-right me-2 ic-ft"></i>Certifications
                            </a>
                        </p>
                        <p class="footer-contenty">
                            <a href="https://vnetpro.in/" target="_blank" class="text-reset"><i
                                    class="fas fa-chevron-right me-2 ic-ft"></i>Insurance
                            </a>
                        </p>


                        <style>
                            @media screen and (max-width:500px) {
                                #footersocial {
                                    justify-content: center;
                                }
                            }

                            @media screen and (max-width:768px) {
                                .footer-maincard {
                                    margin-top: 25rem;
                                }
                            }
                        </style>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-3 col-xl-4 mx-auto mb-md-0 mb-4 mt-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4 footer-heading">Contact</h6>

                        <p class="footer-content"><i class="fas fa-home me-3"></i> No-7, 2nd Floor, YRL B. Sardar
                            Basha
                            Tower, Hemavathi Block, Bettadasanapura, Electronic City Phase-1, Bangalore-560100</p>
                        <p class="footer-content"><i class="fas fa-phone-alt me-3"></i>+91 88671 32805, 81972 41034
                        </p>
                        <p class="footer-content">
                            <i class="fas fa-envelope me-3"></i>
                            admissions@vneteducation.com <br>
                            contact@vneteducation.com
                        </p>




                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="d-flex copy-right-content">
            <div class="text-start p-4">
                All Rights Reserved | @Vincerenet Solutions (Vnet Education) 2025
            </div>
            <div class="ms-auto p-4">
                Powered by <a href="https://rainbowmedia.co.in/" target="_blank" class="rm">RAINBOW MEDIA</a>
            </div>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>

    <script>
        // First Swiper (Banner)
        var swiper_banner = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 5000, // 5 seconds
                disableOnInteraction: false, // Continue autoplay after interaction
                pauseOnMouseEnter: true, // Autoplay will pause on hover
            },
        });





        // Second Swiper (Carousel)
        var swiper_co = new Swiper(".co-swiper", {
            slidesPerView: 3,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 3000, // 5 seconds
                disableOnInteraction: false, // Continue autoplay after interaction
                pauseOnMouseEnter: true, // Autoplay will pause on hover
            },
            breakpoints: {
                320: {  // Mobile
                    slidesPerView: 1
                },
                768: {  // Tablet
                    slidesPerView: 2
                },
                1024: { // Desktop
                    slidesPerView: 3
                }
            }
        });
    </script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>


    <script>
        /* Owl Carousel */
        $('.owl-carousel').owlCarousel({
            center: true,
            loop: true,
            margin: 0,
            nav: true,
            items: 3,
            smartSpeed: 750,

            autoplay: true, // Enables auto-slide
            autoplayTimeout: 3000, // Time between slides (in milliseconds)
            autoplayHoverPause: true, // Pauses on hover
            navText: ['<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>'],
            responsive: {
                0: {
                    items: 1
                },
                641: {
                    items: 3
                }
            }

        });

    </script>
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function(){
    $("#survey-form").submit(function(e){
        e.preventDefault(); // Prevent form from reloading the page
        console.log("Form Data:", $(this).serialize());
        $.ajax({
            type: "POST",
            url: "send_mail.php", // The PHP file to handle the email sending
            data: $(this).serialize(),
            success: function(response) {
                if(response.includes("success")){
                    $("#success-message").show();
                    $("#error-message").hide();
                    $("#survey-form")[0].reset();
                } else {
                    $("#error-message").show();
                    $("#success-message").hide();
                }
            }
        });
    });
});
</script>
<script>
$(document).ready(function(){
    $("#survey-forms").submit(function(e){
        e.preventDefault(); // Prevent form from reloading the page
        console.log("Form Data:", $(this).serialize());
        $.ajax({
            type: "POST",
            url: "sendmail.php", // The PHP file to handle the email sending
            data: $(this).serialize(),
            success: function(response) {
                if(response.includes("success")){
                    $("#success-message1").show();
                    $("#error-message1").hide();
                    $("#survey-forms")[0].reset();
                } else {
                    $("#error-message1").show();
                    $("#success-message1").hide();
                }
            }
        });
    });
});
</script>
</body>

</html>