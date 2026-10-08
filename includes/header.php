<?php
if (!isset($page_title)) {
    $page_title = "PDQ | Precision Design Quilting";
}
if (!isset($current_page)) {
    $current_page = "home";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $page_title; ?></title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <!-- Header Top Bar -->
    <div class="top-bar text-white py-2" style="background-color: #1f3a5b; font-size: 0.85rem;">
        <div class="container">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center gap-2">
                
                <!-- Left Side: Email & Phone -->
                <div class="d-flex align-items-center flex-wrap justify-content-center justify-content-md-start gap-3">
                    <a href="mailto:pdquilting@gmail.com" class="text-white text-decoration-none d-inline-flex align-items-center opacity-90">
                        <i class="fa-solid fa-envelope me-2" style="color: #d8b46a;"></i>
                        <span>pdquilting@gmail.com</span>
                    </a>
                    <span class="text-white-50 d-none d-sm-inline">|</span>
                    <a href="tel:+18016418240" class="text-white text-decoration-none d-inline-flex align-items-center opacity-90">
                        <i class="fa-solid fa-phone me-2" style="color: #d8b46a;"></i>
                        <span>+1 (801) 641-8240</span>
                    </a>
                </div>

                <!-- Right Side: Address & Social Icons -->
                <div class="d-flex align-items-center flex-wrap justify-content-center justify-content-md-end gap-3">
                    <span class="text-white-50 d-none d-lg-inline-flex align-items-center">
                        <i class="fa-solid fa-location-dot me-2" style="color: #d8b46a;"></i>
                        <span class="text-white">103 East 6980 South Midvale, Utah</span>
                    </span>
                    <span class="text-white-50 d-none d-lg-inline">|</span>
                    <div class="d-flex align-items-center gap-3">
                        <a href="#" class="text-white text-decoration-none" title="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white text-decoration-none" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white text-decoration-none" title="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white text-decoration-none" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Main Navigation Header -->
    <header id="site-header" class="bg-white border-bottom">
        <nav class="navbar navbar-expand-lg">
            <div class="container">

                <a class="navbar-brand d-flex align-items-center" href="index.php">
                    <img src="assets/img/header-logo.png" alt="Precision Design Quilting">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainMenu"
                    aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="mainMenu">

                    <ul class="navbar-nav align-items-lg-center gap-lg-2">

                        <li class="nav-item">
                            <a class="nav-link text-dark <?php echo ($current_page == 'home') ? 'active' : ''; ?>" href="index.php">Home</a>
                        </li>

                        <li class="nav-item dropdown hover-dropdown">
                            <a class="nav-link text-dark shop-dropdown-toggle <?php echo ($current_page == 'shop') ? 'active' : ''; ?>" href="#" data-bs-toggle="dropdown">
                                Shop <i class="fa fa-chevron-down" style="font-size:11px; margin-left:2px;"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="choose-your-quilt-design.php">Choose the Quilting Design</a></li>
                                <li><a class="dropdown-item" href="#">Collections</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-dark <?php echo ($current_page == 'pattern') ? 'active' : ''; ?>" href="pattern.php">Patterns</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-dark <?php echo ($current_page == 'threads') ? 'active' : ''; ?>" href="#">Threads</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-dark <?php echo ($current_page == 'backings') ? 'active' : ''; ?>" href="#">Backings</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-dark <?php echo ($current_page == 'about') ? 'active' : ''; ?>" href="about-us.php">About Us</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-dark <?php echo ($current_page == 'Order Form' || $current_page == 'order-form') ? 'active' : ''; ?>" href="order-form.php">Order Form</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-dark <?php echo ($current_page == 'Contact' || $current_page == 'contact') ? 'active' : ''; ?>" href="contact-us.php">Contact Us</a>
                        </li>

                    </ul>

                </div>

            </div>
        </nav>
    </header>
