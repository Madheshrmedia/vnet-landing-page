<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- font awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<style>
    .header-logo {
        width: 404px;
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
</style>
<header class="header header-sticky" id="headerall">


    <nav class="navbar navbar-expand-lg navbar-light shadow px-5  sticky-top">
        <div class="container-fluid nav-container">
            <a class="navbar-brand" href="./index.php"><img src="./image/logo.png" alt="cogni logo"
                    class="header-logo"></a>
            <button class="navbar-toggler " type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">

                <span><i class="fas fa-bars" style="color:black"></i></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="./index.php">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./service.php">About Us</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="./product.php">Services</a>
                    </li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Services
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
                <div class="d-flex header-cont align-items-center">
                    <a href="https://www.facebook.com/p/Rainbow-Media-100077423194944/" target="_blank"
                        class="contact-info form-inline d-flex">
                        <img src="./image/fb.png" class="header-icon" alt="">
                    </a>
                    <a href="https://www.instagram.com/rainbowmedia_digital/?igshid=ZDdkNTZiNTM%3D" target="_blank"
                        class="contact-info form-inline d-flex">
                        <img src="./image/ig.png" class="header-icon" alt="">
                    </a>
                    <a href="https://x.com/rmedia_digital?t=g6071ALXzJJGwoHnHE6rCA&s=08" target="_blank"
                        class="contact-info form-inline d-flex">
                        <img src="./image/x.png" class="header-icon" alt="">
                    </a>
                    <a href="https://www.linkedin.com/company/rainbow-media/" target="_blank"
                        class="contact-info form-inline d-flex" style="border-right: 1px solid;">
                        <img src="./image/lin.png" class="header-icon" alt="">
                    </a>

                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="booknow-btn">
                        Get started
                    </a>

                </div>
            </div>
        </div>
    </nav>
</header>