<?php
$page_title = "Testimonials | Precision Design Quilting";
$current_page = "Testimonials";
include_once 'includes/header.php';
include_once 'includes/testimonials-data.php';
?>

    <!-- Banner Section -->
    <section class="position-relative text-white d-flex align-items-center justify-content-center" style="background: url('assets/img/hero-banner.png') no-repeat center center; background-size: cover; padding-top: 90px; padding-bottom: 90px;">
        <div class="position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(31, 58, 91, 0.80);"></div>
        <div class="container position-relative z-1 text-left py-4">
            <p class="text-uppercase mb-2 text-white small" data-type-heading style="letter-spacing: 6px;">Testimonials</p>
            <h1 class="display-4 fw-bold mb-3" data-type-heading>What Client Says About Us</h1>
            <p class="lead mb-0 fs-5 text-white mx-auto text-left">
                Working with this team was a fantastic experience. They understood our requirements perfectly and delivered a high-quality solution on time. Their professionalism and support exceeded our expectations.
            </p>
        </div>
    </section>


    <!-- testimonials section start -->
    <section class="py-5 testimonial-section">
        <div class="container">
            <div class="row g-4">
                <?php foreach ($testimonials as $testimonial): ?>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card border-0 rounded-4 shadow-sm h-100">
                            <div class="card-body-testi p-4 d-flex flex-column">
                                <div class="d-flex align-items-center mb-4">
                                    <img src="<?php echo htmlspecialchars($testimonial['image']); ?>" class="rounded-circle me-3" width="45" height="45" alt="<?php echo htmlspecialchars($testimonial['name']); ?>">
                                    <div>
                                        <h6 class="mb-0 fw-normal"><?php echo htmlspecialchars($testimonial['name']); ?></h6>
                                        <small><?php echo htmlspecialchars($testimonial['role']); ?></small>
                                    </div>
                                </div>
                                <p class="small flex-grow-1">
                                    <?php echo htmlspecialchars($testimonial['text']); ?>
                                </p>
                                <div class="d-flex justify-content-between align-items-center mt-4">
                                    <div class="text-warning fs-5">
                                        <?php echo $testimonial['rating']; ?>
                                    </div>
                                    <small><?php echo htmlspecialchars($testimonial['date']); ?></small>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- testimonials section end -->

<?php include_once 'includes/footer.php'; ?>
