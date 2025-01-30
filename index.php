<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vnet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <style>
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
                            <a class="nav-link" href="./index.php">About Us </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./service.php">Distance Education</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Professional services
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Apprenticeship</a></li>
                                <li><a class="dropdown-item" href="#">HR Services & Recruitment</a></li>
                                <li><a class="dropdown-item" href="#">Registrations & Certifications</a></li>
                                <li><a class="dropdown-item" href="#">Skill Development Schemes</a></li>
                                <li><a class="dropdown-item" href="#">Corporate Insurance</a></li>

                            </ul>
                        </li>
                        <li class="nav-item mobile_dis">
                            <a class="nav-link" href="./contact.php">Contact us </a>
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
                <div class="swiper-slide"><img src="./image/ban-test1.webp" alt="vnet"></div>
                <div class="swiper-slide"><img src="./image/banner2.webp" alt="vnet"></div>
                <div class="swiper-slide"><img src="./image/banner3.webp" alt="vnet"></div>
            </div>
        </div>
    </div>
    <!-- banner end -->

    <!-- about us frame -->
    <div class="container">
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
    <div class="container co-container">
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
    <div class="container fl-container">
        <div class="row">
            <div class="col-md-11 mx-auto">
                <img src="./image/fl-bg.webp" class="img-fluid" alt="vnet">
            </div>
        </div>
    </div>
    <!-- end Flexible Learning -->

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Footer -->
    <footer class="text-center text-lg-start bg-body-tertiary text-muted pt-1">
        <style>
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
                                <a href="https://www.facebook.com/profile.php?id=61563851213696" target="_blank"
                                    class="follow-up-link me-2">
                                    <img src="./image/ft-fb.png" class="img-fluid" alt="">
                                </a>

                                <a href="https://www.instagram.com/cogniwellness_tharamani?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                                    target="_blank" class="follow-up-link me-2">
                                    <img src="./image/li.png" class="img-fluid" alt="">
                                </a>
                                <a href="https://www.instagram.com/cogniwellness_tharamani?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                                    target="_blank" class="follow-up-link me-2">
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
                            <a href="./service.php#SALON SERVICES" class="text-reset"><i
                                    class="fas fa-chevron-right me-2 ic-ft"></i>About Us
                            </a>
                        </p>
                        <p class="footer-contenty">
                            <a href="./service.php#SPA SERVICES" class="text-reset"><i
                                    class="fas fa-chevron-right me-2 ic-ft"></i>Services
                            </a>
                        </p>
                        <p class="footer-contenty">
                            <a href="./service.php#SLIMMING SERVICES" class="text-reset"><i
                                    class="fas fa-chevron-right me-2 ic-ft"></i>Contact Us
                            </a>
                        </p>
                        <p class="footer-contenty">
                            <a href="./service.php#AESTHETIC SERVICES" class="text-reset"><i
                                    class="fas fa-chevron-right me-2 ic-ft"></i>Home
                            </a>
                        </p>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-3 col-xl-2 mx-auto mb-4 mt-4 ser-menu">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold footer-heading mb-4">
                            Service Menu
                        </h6>
                        <p class="footer-contenty">
                            <a href="./service.php#SALON SERVICES" class="text-reset"><i
                                    class="fas fa-chevron-right me-2 ic-ft"></i>NAPS & NATS (Apprenticeship)
                            </a>
                        </p>
                        <p class="footer-contenty">
                            <a href="./service.php#SPA SERVICES" class="text-reset"><i
                                    class="fas fa-chevron-right me-2 ic-ft"></i>HR Services
                            </a>
                        </p>
                        <p class="footer-contenty">
                            <a href="./service.php#SLIMMING SERVICES" class="text-reset"><i
                                    class="fas fa-chevron-right me-2 ic-ft"></i>Certifications
                            </a>
                        </p>
                        <p class="footer-contenty">
                            <a href="./service.php#AESTHETIC SERVICES" class="text-reset"><i
                                    class="fas fa-chevron-right me-2 ic-ft"></i>Insurance
                            </a>
                        </p>


                        <style>
                            @media screen and (max-width:500px) {
                                #footersocial {
                                    justify-content: center;
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


    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 8000, // 8 seconds
                disableOnInteraction: false, // Continue autoplay after user interaction
            },
        });

        var swiper = new Swiper(".co-swiper", {
            slidesPerView: 3,
            spaceBetween: 30,
            loop: true,
            // autoplay: {
            //     delay: 4000, // 8 seconds
            //     disableOnInteraction: false, // Continue autoplay after user interaction
            // },

        });
    </script>





</body>

</html>