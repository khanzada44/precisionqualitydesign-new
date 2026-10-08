<?php
$page_title = "Contact Us | Precision Design Quilting";
$current_page = "Contact";
include_once 'includes/header.php';
?>

    <!-- Banner Section -->
    <section class="position-relative text-white d-flex align-items-center justify-content-center" style="background: url('assets/img/hero-banner.png') no-repeat center center; background-size: cover; padding-top: 90px; padding-bottom: 90px;">
        <div class="position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(31, 58, 91, 0.80);"></div>
        <div class="container position-relative z-1 text-left py-4">
            <p class="text-uppercase mb-2 text-white small" data-type-heading style="letter-spacing: 6px;">Contact Us</p>
            <h1 class="display-4 fw-bold mb-3" data-type-heading>Get In Touch</h1>
            <p class="lead mb-0 fs-5 text-white mx-auto text-left">
                Have questions about our quilting services or ready to start a project? Reach out to us today!
            </p>
        </div>
    </section>


    <!-- 2. Contact Form Section -->
    <section class="py-5 bg-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-10 col-12">
                    <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5">
                        <div class="text-center mb-4">
                            <span class="text-uppercase small fw-semibold text-muted" style="letter-spacing: 2px;">Send Us A Message</span>
                            <h2 class="fw-bold display-6 mt-1" data-type-heading style="color: #1f3a5b;">We'd Love To Hear From You</h2>
                            <p class="text-muted">Fill out the form below and our team will get back to you shortly.</p>
                        </div>

                        <form action="#" method="POST">
                            <div class="row g-3">
                                <div class="col-md-6 col-12">
                                    <label for="firstName" class="form-label fw-medium text-dark">First Name</label>
                                    <input type="text" class="form-control form-control-lg rounded-3 fs-6" id="firstName" placeholder="Enter first name" required>
                                </div>
                                <div class="col-md-6 col-12">
                                    <label for="lastName" class="form-label fw-medium text-dark">Last Name</label>
                                    <input type="text" class="form-control form-control-lg rounded-3 fs-6" id="lastName" placeholder="Enter last name" required>
                                </div>
                                <div class="col-md-6 col-12">
                                    <label for="email" class="form-label fw-medium text-dark">Email Address</label>
                                    <input type="email" class="form-control form-control-lg rounded-3 fs-6" id="email" placeholder="name@example.com" required>
                                </div>
                                <div class="col-md-6 col-12">
                                    <label for="phone" class="form-label fw-medium text-dark">Phone Number</label>
                                    <input type="tel" class="form-control form-control-lg rounded-3 fs-6" id="phone" placeholder="(801) 000-0000">
                                </div>
                                <div class="col-12">
                                    <label for="subject" class="form-label fw-medium text-dark">Subject</label>
                                    <input type="text" class="form-control form-control-lg rounded-3 fs-6" id="subject" placeholder="How can we help you?">
                                </div>
                                <div class="col-12">
                                    <label for="message" class="form-label fw-medium text-dark">Message</label>
                                    <textarea class="form-control form-control-lg rounded-3 fs-6" id="message" rows="5" placeholder="Write your message here..." required></textarea>
                                </div>
                                <div class="col-12 text-center mt-4">
                                    <button type="submit" class="btn text-white rounded-pill px-5 py-3 fs-6 fw-semibold shadow-sm" style="background-color: #1f3a5b;">
                                        Send Message <i class="fa-solid fa-paper-plane ms-2"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 1. Contact Info Cards Section (Phone, Email, Address) -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row g-4">

                <!-- Phone Card -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card border-0 shadow-sm rounded-4 h-100 text-center p-4">
                        <div class="card-body d-flex flex-column align-items-center justify-content-center">
                            <div class="rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 70px; height: 70px; background-color: rgba(31, 58, 91, 0.1); color: #1f3a5b;">
                                <i class="fa-solid fa-phone fs-3"></i>
                            </div>
                            <h4 class="card-title fw-semibold mb-2" style="color: #1f3a5b;">Phone Number</h4>
                            <p class="card-text text-muted mb-3">Give us a call anytime during working hours.</p>
                            <a href="tel:+18016418240" class="fw-bold text-decoration-none fs-5" style="color: #1f3a5b;">
                                +1 (801) 641-8240
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Email Card -->
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card border-0 shadow-sm rounded-4 h-100 text-center p-4">
                        <div class="card-body d-flex flex-column align-items-center justify-content-center">
                            <div class="rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 70px; height: 70px; background-color: rgba(31, 58, 91, 0.1); color: #1f3a5b;">
                                <i class="fa-solid fa-envelope fs-3"></i>
                            </div>
                            <h4 class="card-title fw-semibold mb-2" style="color: #1f3a5b;">Email Address</h4>
                            <p class="card-text text-muted mb-3">Send us an email and we will reply promptly.</p>
                            <a href="mailto:pdquilting@gmail.com" class="fw-bold text-decoration-none fs-5" style="color: #1f3a5b;">
                                pdquilting@gmail.com
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Location Card -->
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="card border-0 shadow-sm rounded-4 h-100 text-center p-4">
                        <div class="card-body d-flex flex-column align-items-center justify-content-center">
                            <div class="rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 70px; height: 70px; background-color: rgba(31, 58, 91, 0.1); color: #1f3a5b;">
                                <i class="fa-solid fa-location-dot fs-3"></i>
                            </div>
                            <h4 class="card-title fw-semibold mb-2" style="color: #1f3a5b;">Our Location</h4>
                            <p class="card-text text-muted mb-3">Visit our workshop or send your quilt top.</p>
                            <span class="fw-bold fs-6" style="color: #1f3a5b;">
                                103 East 6980 South Midvale,<br>Utah, 84047
                            </span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    

    <!-- 3. Google Location Map Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-4">
                <span class="text-uppercase small fw-semibold text-muted" style="letter-spacing: 2px;">Find Us On The Map</span>
                <h2 class="fw-bold display-6 mt-1" style="color: #1f3a5b;">Our Location</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
                        <div class="ratio ratio-21x9" style="min-height: 380px;">
                            <iframe 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3027.854652230235!2d-111.89069152345511!3d40.62426997140706!2m3!1f0!0f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87528b70ec08d179%3A0xc3b10b005ffc873f!2s103%20E%206980%20S%2C%20Midvale%2C%20UT%2084047%2C%20USA!5e0!3m2!1sen!2s!4v1700000000000!5m2!1sen!2s" 
                                style="border:0;" 
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include_once 'includes/footer.php'; ?>
