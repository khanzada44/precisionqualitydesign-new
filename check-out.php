<?php
$page_title = "Shipping Instructions | Precision Design Quilting";
$current_page = "shipping";
include_once 'includes/header.php';
?>
<!-- Hero Banner -->
<section class="position-relative text-white d-flex align-items-center justify-content-center" style="background: url('assets/img/hero-banner.png') no-repeat center center; background-size: cover; padding-top: 70px; padding-bottom: 70px;">
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(135deg, rgba(31,58,91,0.92) 0%, rgba(45,84,132,0.88) 100%);"></div>
    <div class="container position-relative z-1 py-3 text-center">
        <p class="text-uppercase mb-3 text-white small" data-type-heading style="letter-spacing:8px;">Custom Design Quilting</p>
        <h1 class="display-4 fw-bold mb-2" data-type-heading style>Choose Your Quilt Design</h1>
        <p class="lead mb-0 fs-6 text-white-50 mx-auto" style="max-width: 650px;">
            Step-by-step instructions for safely shipping your quilt to Precision Design Quilting.
        </p>
    </div>
</section>
<!-- Main Wrapper -->

<div style="background-color: #f1f3fd; min-height: 100vh; padding: clamp(12px, 3vw, 32px); font-family: system-ui, -apple-system, sans-serif; box-sizing: border-box;">

    <!-- Main Outer Container -->
    <div style="max-width: 1100px; margin: 0 auto; background-color: #ffffff; border-radius: 20px; padding: clamp(16px, 4vw, 32px); box-shadow: 0 10px 30px rgba(0,0,0,0.05); border: 1px solid #e2e8f0; box-sizing: border-box;">

        <!-- Header Section -->
        <div style="display: flex; align-items: flex-start; gap: 12px; margin-bottom: 24px;">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#2c3e50" stroke-width="2" style="flex-shrink: 0; margin-top: 2px;">
                <rect x="2" y="4" width="20" height="16" rx="2"></rect>
                <line x1="2" y1="10" x2="22" y2="10"></line>
            </svg>
            <div>
                <h1 style="margin: 0; font-size: clamp(20px, 4vw, 26px); font-weight: 700; color: #1e293b; font-family: Georgia, serif;">Checkout</h1>
                <p style="margin: 4px 0 0 0; font-size: clamp(12px, 2.8vw, 14px); color: #64748b;">Use PayPal sandbox/test checkout to complete payment and create the order.</p>
            </div>
        </div>

        <!-- Main Layout (Form + Summary Grid) -->
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(min(100%, 320px), 1fr)); gap: 24px; align-items: start;">

            <!-- Left Column: Checkout Form -->
            <div style="display: flex; flex-direction: column; gap: 20px; min-width: 0;">

                <!-- Personal Info Fields -->
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(min(100%, 200px), 1fr)); gap: 16px;">
                    <div>
                        <label style="display: block; font-size: 11px; font-weight: 700; color: #475569; letter-spacing: 0.5px; margin-bottom: 6px; text-transform: uppercase;">First Name</label>
                        <input type="text" value="John" style="width: 100%; padding: 10px 14px; border: 1px solid #e2e8f0; border-radius: 8px; font-size: 14px; color: #1e293b; outline: none; box-sizing: border-box; background-color: #f8fafc;" />
                    </div>
                    <div>
                        <label style="display: block; font-size: 11px; font-weight: 700; color: #475569; letter-spacing: 0.5px; margin-bottom: 6px; text-transform: uppercase;">Last Name</label>
                        <input type="text" value="Doe" style="width: 100%; padding: 10px 14px; border: 1px solid #e2e8f0; border-radius: 8px; font-size: 14px; color: #1e293b; outline: none; box-sizing: border-box; background-color: #f8fafc;" />
                    </div>
                </div>

                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(min(100%, 200px), 1fr)); gap: 16px;">
                    <div>
                        <label style="display: block; font-size: 11px; font-weight: 700; color: #475569; letter-spacing: 0.5px; margin-bottom: 6px; text-transform: uppercase;">Email</label>
                        <input type="email" value="johndoe@example.com" style="width: 100%; padding: 10px 14px; border: 1px solid #e2e8f0; border-radius: 8px; font-size: 14px; color: #1e293b; outline: none; box-sizing: border-box; background-color: #f8fafc;" />
                    </div>
                    <div>
                        <label style="display: block; font-size: 11px; font-weight: 700; color: #475569; letter-spacing: 0.5px; margin-bottom: 6px; text-transform: uppercase;">Phone</label>
                        <input type="text" value="+1 555 123 4567" style="width: 100%; padding: 10px 14px; border: 1px solid #e2e8f0; border-radius: 8px; font-size: 14px; color: #1e293b; outline: none; box-sizing: border-box; background-color: #f8fafc;" />
                    </div>
                </div>

                <!-- Required Address Box -->
                <div style="background-color: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 16px; display: flex; flex-direction: column; gap: 16px;">
                    <div style="display: flex; align-items: flex-start; gap: 10px;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#475569" stroke-width="2" style="flex-shrink: 0; margin-top: 2px;">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                        <div>
                            <div style="font-size: 13px; font-weight: 700; color: #1e293b;">Required address</div>
                            <div style="font-size: 12px; color: #64748b;">Confirm the address for this quilt request before payment.</div>
                        </div>
                    </div>

                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(min(100%, 180px), 1fr)); gap: 12px;">
                        <div>
                            <label style="display: block; font-size: 10px; font-weight: 700; color: #64748b; letter-spacing: 0.5px; margin-bottom: 4px; text-transform: uppercase;">Street Address</label>
                            <input type="text" value="Sed vel provident i" style="width: 100%; padding: 8px 12px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 13px; background-color: #fff; box-sizing: border-box;" />
                        </div>
                        <div>
                            <label style="display: block; font-size: 10px; font-weight: 700; color: #64748b; letter-spacing: 0.5px; margin-bottom: 4px; text-transform: uppercase;">City</label>
                            <input type="text" value="Fugit at lorem labo" style="width: 100%; padding: 8px 12px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 13px; background-color: #fff; box-sizing: border-box;" />
                        </div>
                        <div>
                            <label style="display: block; font-size: 10px; font-weight: 700; color: #64748b; letter-spacing: 0.5px; margin-bottom: 4px; text-transform: uppercase;">State</label>
                            <input type="text" value="Aut deserunt velit" style="width: 100%; padding: 8px 12px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 13px; background-color: #fff; box-sizing: border-box;" />
                        </div>
                        <div>
                            <label style="display: block; font-size: 10px; font-weight: 700; color: #64748b; letter-spacing: 0.5px; margin-bottom: 4px; text-transform: uppercase;">Zip</label>
                            <input type="text" value="Illum similique nih" style="width: 100%; padding: 8px 12px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 13px; background-color: #fff; box-sizing: border-box;" />
                        </div>
                    </div>
                </div>

                <!-- Paypal Sandbox Notice Box -->
                <div style="background-color: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 16px; display: flex; align-items: flex-start; gap: 12px;">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#475569" stroke-width="2" style="flex-shrink: 0; margin-top: 2px;">
                        <rect x="2" y="5" width="20" height="14" rx="2"></rect>
                        <line x1="2" y1="10" x2="22" y2="10"></line>
                    </svg>
                    <div>
                        <div style="font-size: 13px; font-weight: 700; color: #1e293b;">PayPal sandbox checkout</div>
                        <div style="font-size: 12px; color: #64748b; line-height: 1.4; margin-top: 2px;">
                            Use a PayPal sandbox buyer account for testing. Client ID is read from <code style="background-color: #e2e8f0; padding: 2px 4px; border-radius: 4px; font-size: 11px;">VITE_PAYPAL_CLIENT_ID</code> falling back to PayPal's test client.
                        </div>
                    </div>
                </div>

                <!-- Order Notes Field -->
                <div>
                    <label style="display: block; font-size: 11px; font-weight: 700; color: #475569; letter-spacing: 0.5px; margin-bottom: 6px; text-transform: uppercase;">Order Notes</label>
                    <textarea rows="3" placeholder="Any pickup, timing, or production notes..." style="width: 100%; padding: 10px 14px; border: 1px solid #e2e8f0; border-radius: 8px; font-size: 13px; color: #1e293b; outline: none; resize: vertical; box-sizing: border-box; font-family: inherit;"></textarea>
                </div>

                <!-- Payment Buttons Container -->
                <div style="display: flex; flex-direction: column; gap: 10px; margin-top: 8px;">
                    <!-- PayPal Button -->
                    <button style="width: 100%; background-color: #ffc439; color: #003087; border: none; padding: 12px; border-radius: 6px; font-weight: bold; font-style: italic; font-size: 16px; cursor: pointer; display: flex; justify-content: center; align-items: center; gap: 4px; box-shadow: 0 2px 4px rgba(0,0,0,0.05);">
                        <span>Pay</span><span style="color: #0079c1;">Pal</span>
                    </button>

                    <!-- Pay Later Button -->
                    <button style="width: 100%; background-color: #ffc439; color: #003087; border: none; padding: 12px; border-radius: 6px; font-weight: bold; font-size: 14px; cursor: pointer; display: flex; justify-content: center; align-items: center; gap: 6px; box-shadow: 0 2px 4px rgba(0,0,0,0.05);">
                        <span style="font-style: italic;"><span style="color: #003087;">Pay</span><span style="color: #0079c1;">Pal</span></span>
                        <span>Pay Later</span>
                    </button>

                    <!-- Debit or Credit Card Button -->
                    <button style="width: 100%; background-color: #2c2e2f; color: #ffffff; border: none; padding: 12px; border-radius: 6px; font-weight: 600; font-size: 14px; cursor: pointer; display: flex; justify-content: center; align-items: center; gap: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.05);">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                            <line x1="1" y1="10" x2="23" y2="10"></line>
                        </svg>
                        Debit or Credit Card
                    </button>

                    <!-- Powered by PayPal footer -->
                    <div style="text-align: center; margin-top: 4px;">
                        <span style="font-size: 11px; color: #94a3b8; font-weight: 500;">Powered by </span>
                        <span style="font-size: 11px; font-weight: bold; font-style: italic; color: #003087;">Pay<span style="color: #0079c1;">Pal</span></span>
                    </div>
                </div>

            </div>

            <!-- Right Column: Order Summary Card -->
            <div style="background-color: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: clamp(16px, 3vw, 24px); min-width: 0;">
                <h3 style="margin: 0 0 16px 0; font-size: 16px; font-weight: 700; color: #1e293b;">Order Total</h3>

                <div style="display: flex; flex-direction: column; gap: 12px; font-size: 13px;">
                    <div style="display: flex; justify-content: space-between; color: #64748b;">
                        <span>Quilt estimate</span>
                        <span style="font-weight: 600; color: #1e293b;">$46.19</span>
                    </div>

                    <div style="display: flex; justify-content: space-between; color: #64748b;">
                        <span>Payment</span>
                        <span style="font-weight: 600; color: #1e293b;">PayPal sandbox</span>
                    </div>

                    <hr style="border: none; border-top: 1px solid #e2e8f0; margin: 8px 0;" />

                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span style="font-weight: 700; color: #1e293b; font-size: 15px;">Order total</span>
                        <span style="font-weight: 800; color: #1e293b; font-size: clamp(18px, 3vw, 22px);">$46.19</span>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Bottom Action Button -->
    <div style="max-width: 1100px; margin: 16px auto 0 auto;">
        <button style="background-color: #ffffff; border: 1px solid #cbd5e1; color: #334155; padding: 8px 16px; border-radius: 6px; font-size: 13px; font-weight: 600; cursor: pointer;">
            <a href="cart.php" style="text-decoration: none; color: inherit;">Back to Cart</a>
        </button>

    </div>
</div>

</div>


<?php include_once 'includes/footer.php'; ?>