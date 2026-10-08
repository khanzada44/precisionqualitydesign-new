<?php
$page_title = "Longarm Quilting Order Form | Precision Design Quilting";
$current_page = "Order Form";
include_once 'includes/header.php';
?>

<!-- Banner Section -->
<section class="position-relative text-white d-flex align-items-center justify-content-center" style="background: url('assets/img/hero-banner.png') no-repeat center center; background-size: cover; padding-top: 60px; padding-bottom: 60px;">
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(135deg, rgba(31,58,91,0.92) 0%, rgba(45,84,132,0.88) 100%);"></div>
    <div class="container position-relative z-1 text-left py-3">
         <p class="text-uppercase mb-3 text-white small" data-type-heading style="letter-spacing:8px;">
                    Custom Order Request
                </p>
        <h1 class="display-4 fw-bold mb-2" data-type-heading >Longarm Quilting Order Form</h1>
        <p class="lead mb-0 fs-6 text-white-50 col-lg-12">
            Complete the form below to place your quilt order with us. Review our simple preparation guidelines for a seamless quilting experience from start to finish.
        </p>
    </div>
</section>

<!-- Order Form Section -->
<section class="py-5" style="background: #f5f5f5ff;">
    <div class="container py-2">
        <div class="row justify-content-center">
            <div class="col-lg-11 col-xl-12">
                
                <!-- Multi-Step Progress -->
                <div class="card border-0 shadow-sm rounded-4 mb-4">
                    <div class="card-body p-3 p-md-4">
                        <div class="step-wizard">
                            <div class="step-wizard-line"></div>
                            <div class="step-wizard-progress" id="wizard-progress-bar"></div>

                            <div class="step-item active" id="step-item-1">
                                <div class="step-circle" id="step-circle-1">1</div>
                                <div class="step-title">Customer</div>
                                <div class="step-subtitle">Contact &amp; Shipping</div>
                            </div>
                            <div class="step-item" id="step-item-2">
                                <div class="step-circle" id="step-circle-2">2</div>
                                <div class="step-title">Quilt Specs</div>
                                <div class="step-subtitle">Design &amp; Dimensions</div>
                            </div>
                            <div class="step-item" id="step-item-3">
                                <div class="step-circle" id="step-circle-3">3</div>
                                <div class="step-title">Review</div>
                                <div class="step-subtitle">Guidelines &amp; Submit</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Main Form -->
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
                    <div class="card-body p-4 p-md-5">
                        
                        <form action="" id="longarmOrderForm" class="needs-validation" novalidate>
                            
                            <!--  STEP 1  -->
                            <div class="form-step" id="step-1">
                                <div class="d-flex align-items-center gap-3 mb-4 pb-3 border-bottom">
                                    <div class="p-2 rounded-circle text-white d-flex align-items-center justify-content-center" style="background: linear-gradient(135deg, #1f3a5b, #2d5484); width: 44px; height: 44px;">
                                        <i class="fa-solid fa-user fs-5"></i>
                                    </div>
                                    <div>
                                        <h5 class="mb-0 text-dark fw-bold">Customer Information</h5>
                                        <small class="text-muted">Enter your contact and shipping details</small>
                                    </div>
                                </div>

                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label class="form-label-modern">First Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control form-control-modern" id="firstName" name="first_name" placeholder="First Name" required>
                                        <div class="invalid-feedback small">Please enter your first name.</div>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label-modern">Last Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control form-control-modern" id="lastName" name="last_name" placeholder="Last Name" required>
                                        <div class="invalid-feedback small">Please enter your last name.</div>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label-modern">Email Address <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-light text-muted border-0" style="border-radius: 10px 0 0 10px;"><i class="fa-solid fa-envelope"></i></span>
                                            <input type="email" class="form-control form-control-modern" id="email" name="email" placeholder="name@example.com" required style="border-radius: 0 10px 10px 0;">
                                            <div class="invalid-feedback small">Please enter a valid email address.</div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label-modern">Phone Number <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-light text-muted border-0" style="border-radius: 10px 0 0 10px;"><i class="fa-solid fa-phone"></i></span>
                                            <input type="tel" class="form-control form-control-modern" id="phone" name="phone" placeholder="(801) 000-0000" required style="border-radius: 0 10px 10px 0;">
                                            <div class="invalid-feedback small">Please enter your phone number.</div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <label class="form-label-modern">Preferred Communication <span class="text-danger">*</span></label>
                                        <select class="form-select form-select-modern" id="prefComm" name="preferred_communication" required>
                                            <option value="" selected disabled>Select preferred communication...</option>
                                            <option value="Email">Email</option>
                                            <option value="Phone Call">Phone Call</option>
                                        </select>
                                        <div class="invalid-feedback small">Please select your preferred communication method.</div>
                                    </div>

                                    <div class="col-12 mt-4">
                                        <h6 class="fw-bold mb-2 text-dark d-flex align-items-center gap-2 border-bottom pb-2">
                                            <i class="fa-solid fa-truck-fast text-primary"></i> Shipping Address
                                        </h6>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label-modern">Address Line 1 <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control form-control-modern" id="addressLine1" name="address_line1" placeholder="Street address, P.O. box, company name" required>
                                        <div class="invalid-feedback small">Please enter your street address.</div>
                                    </div>

                                    <div class="col-md-12">
                                        <label class="form-label-modern">Address Line 2 <span class="text-muted">(Optional)</span></label>
                                        <input type="text" class="form-control form-control-modern" id="addressLine2" name="address_line2" placeholder="Apartment, suite, unit, building, floor, etc.">
                                    </div>

                                    <div class="col-md-4">
                                        <label class="form-label-modern">City <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control form-control-modern" id="city" name="city" placeholder="City" required>
                                        <div class="invalid-feedback small">Please enter your city.</div>
                                    </div>

                                    <div class="col-md-4">
                                        <label class="form-label-modern">State / Province <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control form-control-modern" id="state" name="state" placeholder="State / Province" required>
                                        <div class="invalid-feedback small">Please enter your state or province.</div>
                                    </div>

                                    <div class="col-md-4">
                                        <label class="form-label-modern">ZIP / Postal Code <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control form-control-modern" id="zip" name="zip" placeholder="ZIP / Postal Code" required>
                                        <div class="invalid-feedback small">Please enter your ZIP / Postal Code.</div>
                                    </div>

                                    <div class="col-md-12">
                                        <label class="form-label-modern">Country <span class="text-danger">*</span></label>
                                        <select class="form-select form-select-modern" id="country" name="country" required>
                                            <option value="" selected disabled>Select country...</option>
                                            <option value="United States">United States</option>
                                            <option value="Canada">Canada</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="Australia">Australia</option>
                                            <option value="New Zealand">New Zealand</option>
                                            <option value="Other">Other</option>
                                        </select>
                                        <div class="invalid-feedback small">Please select your country.</div>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-end mt-4 pt-3 border-top">
                                    <button type="button" class="btn btn-modern-primary d-inline-flex align-items-center gap-2" id="btnNext1">
                                        <span>Next Step</span>
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </button>
                                </div>
                            </div>

                            <!--  STEP 2 -->
                            <div class="form-step d-none" id="step-2">
                                <div class="d-flex align-items-center gap-3 mb-4 pb-3 border-bottom">
                                    <div class="p-2 rounded-circle text-white d-flex align-items-center justify-content-center" style="background: linear-gradient(135deg, #1f3a5b, #2d5484); width: 44px; height: 44px;">
                                        <i class="fa-solid fa-ruler-combined fs-5"></i>
                                    </div>
                                    <div>
                                        <h5 class="mb-0 text-dark fw-bold">Design Choice &amp; Quilt Specifications</h5>
                                        <small class="text-muted">Specify thread color, quilt dimensions, and batting preferences</small>
                                    </div>
                                </div>

                                <div class="row g-3">
                                    <div class="col-12">
                                        <div class="p-3 bg-light rounded-3 border">
                                            <h6 class="fw-bold mb-3 text-dark d-flex align-items-center gap-2">
                                                <i class="fa-solid fa-expand text-primary"></i> Quilt Top Dimensions
                                            </h6>
                                            <div class="row g-3">
                                                <div class="col-md-6">
                                                    <label class="form-label-modern">Width (inches) <span class="text-danger">*</span></label>
                                                    <div class="input-group">
                                                        <input type="number" step="0.25" min="1" class="form-control form-control-modern" id="widthInches" name="width_inches" placeholder="e.g. 60" required>
                                                        <span class="input-group-text bg-white border-0">in</span>
                                                        <div class="invalid-feedback small">Please enter valid width.</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label-modern">Height (inches) <span class="text-danger">*</span></label>
                                                    <div class="input-group">
                                                        <input type="number" step="0.25" min="1" class="form-control form-control-modern" id="heightInches" name="height_inches" placeholder="e.g. 70" required>
                                                        <span class="input-group-text bg-white border-0">in</span>
                                                        <div class="invalid-feedback small">Please enter valid height.</div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="alert alert-info border-0 shadow-sm mt-3 mb-0 d-flex align-items-start gap-3 rounded-3" id="backing-calculator-box">
                                                <i class="fa-solid fa-calculator fs-4 mt-1 text-info"></i>
                                                <div>
                                                    <span class="fw-bold d-block mb-1">Required Backing Size Calculation</span>
                                                    <span class="small text-body-secondary" id="backing-size-text">
                                                        Enter width and height above to calculate required backing dimensions (+4" on all sides / +8" overall).
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label-modern">Thread Color <span class="text-danger">*</span></label>
                                        <select class="form-select form-select-modern" id="threadColor" name="thread_color" required>
                                            <option value="" selected disabled>Select thread color...</option>
                                            <option value="Match Quilt Top (Blends In)">Match Quilt Top</option>
                                            <option value="Superior Omni - Soft White #3001">Soft White #3001</option>
                                            <option value="Superior Omni - Natural Cream #3002">Natural Cream #3002</option>
                                            <option value="Superior Omni - Light Grey #3010">Light Grey #3010</option>
                                            <option value="Superior Omni - Medium Grey #3015">Medium Grey #3015</option>
                                            <option value="Superior Omni - Charcoal #3018">Charcoal #3018</option>
                                            <option value="Superior Omni - Navy #3045">Navy #3045</option>
                                            <option value="Superior Omni - Gold / Tan #3030">Gold / Tan #3030</option>
                                            <option value="Superior Omni - Sage Green #3060">Sage Green #3060</option>
                                            <option value="Superior Omni - Wine Red #3080">Wine Red #3080</option>
                                            <option value="Custom Thread Request">Custom Thread Request</option>
                                        </select>
                                        <div class="invalid-feedback small">Please select thread color option.</div>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="form-label-modern">Batting Choice <span class="text-danger">*</span></label>
                                        <select class="form-select form-select-modern" id="battingChoice" name="batting_choice" required>
                                            <option value="" selected disabled>Select batting choice...</option>
                                            <option value="Bleached Cotton">Bleached Cotton</option>
                                            <option value="80/20 Cotton/Wool">80/20 Cotton/Wool</option>
                                            <option value="80/20 Cotton/Poly Blend">80/20 Cotton/Poly Blend</option>
                                            <option value="100% Wool">100% Wool</option>
                                            <option value="Customer Provided Batting">Customer Provided Batting</option>
                                        </select>
                                        <small class="text-muted d-block mt-1">We offer Bleached Cotton, 80/20 Cotton/Wool, and premium blends.</small>
                                        <div class="invalid-feedback small">Please select a batting choice.</div>
                                    </div>

                                    <div class="col-12">
                                        <label class="form-label-modern">Quilting Pattern / Style</label>
                                        <input type="text" class="form-control form-control-modern" id="patternStyle" name="pattern_style" placeholder="e.g. Edge-to-Edge Geometric, Floral, Modern, or specific pattern name">
                                    </div>

                                    <div class="col-12">
                                        <label class="form-label-modern">Special Instructions</label>
                                        <textarea class="form-control form-control-modern textarea-modern" id="specialInstructions" name="special_instructions" rows="3" placeholder="Any additional notes or instructions for our longarm quilter..."></textarea>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between mt-4 pt-3 border-top">
                                    <button type="button" class="btn btn-modern-outline d-inline-flex align-items-center gap-2" id="btnPrev2">
                                        <i class="fa-solid fa-arrow-left"></i>
                                        <span>Back</span>
                                    </button>
                                    <button type="button" class="btn btn-modern-primary d-inline-flex align-items-center gap-2" id="btnNext2">
                                        <span>Next Step</span>
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </button>
                                </div>
                            </div>

                            <!-- STEP 3  -->
                            <div class="form-step d-none" id="step-3">
                                <div class="d-flex align-items-center gap-3 mb-4 pb-3 border-bottom">
                                    <div class="p-2 rounded-circle text-white d-flex align-items-center justify-content-center" style="background: linear-gradient(135deg, #1f3a5b, #2d5484); width: 44px; height: 44px;">
                                        <i class="fa-solid fa-clipboard-check fs-5"></i>
                                    </div>
                                    <div>
                                        <h5 class="mb-0 text-dark fw-bold">Preparation Guidelines &amp; Review</h5>
                                        <small class="text-muted">Review guidelines and verify your order details before submitting</small>
                                    </div>
                                </div>

                                <!-- Guidelines -->
                                <div class="card border border-warning-subtle bg-warning-subtle bg-opacity-10 rounded-4 mb-4">
                                    <div class="card-body p-3 p-md-4">
                                        <h6 class="fw-bold text-dark mb-2 d-flex align-items-center gap-2">
                                            <i class="fa-solid fa-scissors text-warning fs-5"></i> How to Prepare Your Quilt
                                        </h6>
                                        <p class="small text-secondary mb-2">
                                            Proper preparation helps ensure the best quilting results and allows us to load your quilt smoothly and efficiently.
                                        </p>

                                        <div class="accordion accordion-flush rounded-3 overflow-hidden shadow-sm" id="prepGuidelinesAccordion">
                                            <div class="accordion-item border-0 border-bottom">
                                                <h2 class="accordion-header" id="headingTopPrep">
                                                    <button class="accordion-button fw-bold text-dark bg-white small py-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTopPrep" aria-expanded="true">
                                                        <i class="fa-solid fa-shirt text-primary me-2"></i> Quilt Top Preparation
                                                    </button>
                                                </h2>
                                                <div id="collapseTopPrep" class="accordion-collapse collapse show" data-bs-parent="#prepGuidelinesAccordion">
                                                    <div class="accordion-body bg-white pt-1 pb-2">
                                                        <ul class="list-unstyled small mb-0 d-flex flex-column gap-1">
                                                            <li class="d-flex align-items-start gap-2">
                                                                <i class="fa-solid fa-check text-success mt-1 fs-6"></i>
                                                                <span><strong>Press and square</strong> your quilt top — press seams flat and remove wrinkles.</span>
                                                            </li>
                                                            <li class="d-flex align-items-start gap-2">
                                                                <i class="fa-solid fa-check text-success mt-1 fs-6"></i>
                                                                <span><strong>Trim loose threads</strong> — dark threads can show through lighter fabrics.</span>
                                                            </li>
                                                            <li class="d-flex align-items-start gap-2">
                                                                <i class="fa-solid fa-check text-success mt-1 fs-6"></i>
                                                                <span><strong>Check seam security</strong> — make sure seams are fully stitched and secure.</span>
                                                            </li>
                                                            <li class="d-flex align-items-start gap-2">
                                                                <i class="fa-solid fa-check text-success mt-1 fs-6"></i>
                                                                <span><strong>Remove pins and embellishments</strong> — buttons and beads should be added after quilting.</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item border-0 border-bottom">
                                                <h2 class="accordion-header" id="headingBackingPrep">
                                                    <button class="accordion-button collapsed fw-bold text-dark bg-white small py-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBackingPrep">
                                                        <i class="fa-solid fa-ruler-horizontal text-primary me-2"></i> Backing Fabric Requirements
                                                    </button>
                                                </h2>
                                                <div id="collapseBackingPrep" class="accordion-collapse collapse" data-bs-parent="#prepGuidelinesAccordion">
                                                    <div class="accordion-body bg-white pt-1 pb-2">
                                                        <p class="small text-muted mb-2">Backing must be larger than the quilt top to load properly onto the longarm frame.</p>
                                                        <div class="p-2 bg-light rounded border mb-2">
                                                            <strong class="d-block text-dark small">Backing size requirements:</strong>
                                                            <span class="small text-primary fw-bold">&bull; At least 4" larger on all sides (8" longer and wider overall)</span>
                                                            <div class="small text-muted mt-1"><em>Example: 60" x 70" top needs 68" x 78" backing.</em></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item border-0">
                                                <h2 class="accordion-header" id="headingBattingPrep">
                                                    <button class="accordion-button collapsed fw-bold text-dark bg-white small py-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBattingPrep">
                                                        <i class="fa-solid fa-layer-group text-primary me-2"></i> Batting Requirements
                                                    </button>
                                                </h2>
                                                <div id="collapseBattingPrep" class="accordion-collapse collapse" data-bs-parent="#prepGuidelinesAccordion">
                                                    <div class="accordion-body bg-white pt-1 pb-2">
                                                        <strong class="d-block text-dark small">If providing your own batting:</strong>
                                                        <ul class="list-unstyled small mb-0 d-flex flex-column gap-1">
                                                            <li class="d-flex align-items-start gap-2">
                                                                <i class="fa-solid fa-angle-right text-muted mt-1"></i>
                                                                <span>Batting should be at least 4" larger than the quilt top on all sides.</span>
                                                            </li>
                                                            <li class="d-flex align-items-start gap-2">
                                                                <i class="fa-solid fa-angle-right text-muted mt-1"></i>
                                                                <span>Ensure batting is clean and free of folds or heavy creasing.</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--  ORDER SUMMARY  -->
                                <div class="summary-highlight mb-4">
                                    <div class="summary-header">
                                        <div class="icon-box">
                                            <i class="fa-solid fa-receipt"></i>
                                        </div>
                                        <div>
                                            <h5>Order Summary Review</h5>
                                            <small>Please verify all details before submitting</small>
                                        </div>
                                    </div>

                                    <div class="summary-grid" id="summaryContainer">
                                        <div>
                                            <div class="summary-item m-2">
                                                <span class="label"><i class="fa-regular fa-user me-1"></i> Full Name</span>
                                                <span class="value" id="sumName">-</span>
                                            </div>
                                            <div class="summary-item m-2">
                                                <span class="label"><i class="fa-regular fa-envelope me-1"></i> Email</span>
                                                <span class="value" id="sumEmail">-</span>
                                            </div>
                                            <div class="summary-item m-2">
                                                <span class="label"><i class="fa-regular fa-phone me-1"></i> Phone</span>
                                                <span class="value" id="sumPhone">-</span>
                                            </div>
                                            <div class="summary-item m-2">
                                                <span class="label"><i class="fa-regular fa-comment me-1"></i> Preferred Contact</span>
                                                <span class="value" id="sumComm">-</span>
                                            </div>
                                            <div class="summary-item m-2">
                                                <span class="label"><i class="fa-regular fa-location-dot me-1"></i> Shipping Address</span>
                                                <span class="value" id="sumAddress" style="font-size:0.8rem;">-</span>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="summary-item m-2" style="border-left-color: #198754;">
                                                <span class="label"><i class="fa-regular fa-ruler-combined me-1"></i> Quilt Top Size</span>
                                                <span class="value text-success" id="sumDimensions">-</span>
                                            </div>
                                            <div class="summary-item m-2" style="border-left-color: #0d6efd;">
                                                <span class="label"><i class="fa-regular fa-calculator me-1"></i> Required Backing</span>
                                                <span class="value text-primary" id="sumBacking">-</span>
                                            </div>
                                            <div class="summary-item m-2" style="border-left-color: #6f42c1;">
                                                <span class="label"><i class="fa-regular fa-palette me-1"></i> Thread Color</span>
                                                <span class="value" id="sumThread">-</span>
                                            </div>
                                            <div class="summary-item m-2" style="border-left-color: #fd7e14;">
                                                <span class="label"><i class="fa-regular fa-layer-group me-1"></i> Batting Choice</span>
                                                <span class="value" id="sumBatting">-</span>
                                            </div>
                                            <div class="summary-item m-2" style="border-left-color: #20c997;">
                                                <span class="label"><i class="fa-regular fa-pen-ruler me-1"></i> Pattern Style</span>
                                                <span class="value" id="sumPattern">-</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Guidelines Checkbox -->
                                <div class="form-check p-3 bg-white border rounded-3 mb-4">
                                    <input class="form-check-input ms-0 me-2" type="checkbox" id="guidelinesCheck" required>
                                    <label class="form-check-label fw-semibold text-dark small" for="guidelinesCheck">
                                        I have reviewed and followed the Quilt Preparation Guidelines. <span class="text-danger">*</span>
                                    </label>
                                    <div class="invalid-feedback ms-4 small">You must review and check this box to confirm preparation guidelines before submitting.</div>
                                </div>

                                <div class="d-flex justify-content-between mt-4 pt-3 border-top">
                                    <button type="button" class="btn btn-modern-outline d-inline-flex align-items-center gap-2" id="btnPrev3">
                                        <i class="fa-solid fa-arrow-left"></i>
                                        <span>Back</span>
                                    </button>
                                    <button type="submit" class="btn btn-modern-success d-inline-flex align-items-center gap-2" id="submitBtn">
                                        <i class="fa-solid fa-paper-plane"></i>
                                        <span>Submit Order</span>
                                    </button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- SUCCESS MODAL -->
<div class="modal fade success-modal" id="orderSuccessModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header-custom">
                <div class="check-icon">
                    <i class="fa-solid fa-check"></i>
                </div>
                <h3 class="text-white fw-bold mb-1" style="font-size:1.5rem;">ORDER PLACED!</h3>
                <p class="text-white-50 mb-0">Your quilt order has been successfully submitted</p>
            </div>
            <div class="modal-body-custom">
                <div class="text-center mb-3">
                    <p class="text-muted mb-3 small">
                        Thank you for placing your quilt order with <strong>Precision Design Quilting</strong>.
                        Our team will review your project details and contact you shortly.
                    </p>
                    <div class="order-ref">
                        <i class="fa-regular fa-hashtag text-muted me-1"></i>
                        <span id="orderRefNumber">PDQ-2026-08-07-001</span>
                    </div>
                    <small class="text-muted d-block mt-2">Keep this reference number for future correspondence</small>
                </div>
                
                <div class="row g-2 mb-3">
                    <div class="col-md-6">
                        <div class="bg-light rounded-3 p-2 text-center">
                            <small class="text-muted d-block">Customer</small>
                            <span class="fw-semibold text-dark" id="modalCustomerName">-</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="bg-light rounded-3 p-2 text-center">
                            <small class="text-muted d-block">Quilt Size</small>
                            <span class="fw-semibold text-dark" id="modalQuiltSize">-</span>
                        </div>
                    </div>
                </div>

                <div class="d-flex flex-wrap gap-2 justify-content-center">
                    <button type="button" class="btn btn-modern-primary px-4" data-bs-dismiss="modal" onclick="window.location.reload();">
                        <i class="fa-solid fa-check me-1"></i> Done
                    </button>
                    <button type="button" class="btn btn-modern-outline px-4" data-bs-dismiss="modal" onclick="window.print();">
                        <i class="fa-solid fa-print me-1"></i> Print Summary
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    let currentStep = 1;
    const form = document.getElementById('longarmOrderForm');

    const step1 = document.getElementById('step-1');
    const step2 = document.getElementById('step-2');
    const step3 = document.getElementById('step-3');

    const item1 = document.getElementById('step-item-1');
    const item2 = document.getElementById('step-item-2');
    const item3 = document.getElementById('step-item-3');
    const progressBar = document.getElementById('wizard-progress-bar');

    const widthInput = document.getElementById('widthInches');
    const heightInput = document.getElementById('heightInches');
    const backingText = document.getElementById('backing-size-text');

    function updateBackingCalculator() {
        const w = parseFloat(widthInput.value) || 0;
        const h = parseFloat(heightInput.value) || 0;

        if (w > 0 && h > 0) {
            const reqW = w + 8;
            const reqH = h + 8;
            backingText.innerHTML = `For a quilt top of <strong>${w}" × ${h}"</strong>, your backing fabric must be at least <strong>${reqW}" × ${reqH}"</strong> (4" extra on all sides).`;
            document.getElementById('sumDimensions').textContent = `${w}" × ${h}"`;
            document.getElementById('sumBacking').textContent = `${reqW}" × ${reqH}"`;
        } else {
            backingText.innerHTML = `Enter width and height above to calculate required backing dimensions (+4" on all sides / +8" overall).`;
            document.getElementById('sumDimensions').textContent = `-`;
            document.getElementById('sumBacking').textContent = `-`;
        }
    }

    widthInput.addEventListener('input', updateBackingCalculator);
    heightInput.addEventListener('input', updateBackingCalculator);

    function updateStepUI(step) {
        step1.classList.add('d-none');
        step2.classList.add('d-none');
        step3.classList.add('d-none');

        if (step === 1) progressBar.style.width = '0%';
        else if (step === 2) progressBar.style.width = '45%';
        else if (step === 3) progressBar.style.width = '90%';

        [item1, item2, item3].forEach((item, idx) => {
            const circle = item.querySelector('.step-circle');
            const num = idx + 1;
            item.classList.remove('active', 'completed');
            if (num === step) {
                item.classList.add('active');
                circle.innerHTML = num;
            } else if (num < step) {
                item.classList.add('completed');
                circle.innerHTML = '<i class="fa-solid fa-check"></i>';
            } else {
                circle.innerHTML = num;
            }
        });

        if (step === 1) step1.classList.remove('d-none');
        else if (step === 2) step2.classList.remove('d-none');
        else if (step === 3) {
            step3.classList.remove('d-none');
            populateSummary();
        }

        window.scrollTo({ top: document.querySelector('.step-wizard').offsetTop - 100, behavior: 'smooth' });
    }

    function validateStep(step) {
        const el = document.getElementById(`step-${step}`);
        const inputs = el.querySelectorAll('input[required], select[required]');
        let valid = true;
        inputs.forEach(input => {
            if (!input.checkValidity()) {
                input.classList.add('is-invalid');
                valid = false;
            } else {
                input.classList.remove('is-invalid');
                input.classList.add('is-valid');
            }
        });
        return valid;
    }

    function populateSummary() {
        const fname = document.getElementById('firstName').value.trim();
        const lname = document.getElementById('lastName').value.trim();
        const email = document.getElementById('email').value.trim();
        const phone = document.getElementById('phone').value.trim();
        const comm = document.getElementById('prefComm').value || '-';
        const addr1 = document.getElementById('addressLine1').value.trim();
        const addr2 = document.getElementById('addressLine2').value.trim();
        const city = document.getElementById('city').value.trim();
        const state = document.getElementById('state').value.trim();
        const zip = document.getElementById('zip').value.trim();
        const country = document.getElementById('country').value || '-';
        const thread = document.getElementById('threadColor').value || '-';
        const batting = document.getElementById('battingChoice').value || '-';
        const pattern = document.getElementById('patternStyle').value.trim() || 'Not specified';

        let fullAddress = addr1;
        if (addr2) fullAddress += ', ' + addr2;
        fullAddress += ', ' + city + ', ' + state + ' ' + zip + ', ' + country;

        document.getElementById('sumName').textContent = `${fname} ${lname}` || '-';
        document.getElementById('sumEmail').textContent = email || '-';
        document.getElementById('sumPhone').textContent = phone || '-';
        document.getElementById('sumComm').textContent = comm;
        document.getElementById('sumAddress').textContent = fullAddress || '-';
        document.getElementById('sumThread').textContent = thread;
        document.getElementById('sumBatting').textContent = batting;
        document.getElementById('sumPattern').textContent = pattern;

        document.getElementById('modalCustomerName').textContent = `${fname} ${lname}` || '-';
        const w = parseFloat(widthInput.value) || 0;
        const h = parseFloat(heightInput.value) || 0;
        document.getElementById('modalQuiltSize').textContent = w > 0 && h > 0 ? `${w}" × ${h}"` : '-';

        updateBackingCalculator();
    }

    function generateOrderRef() {
        const now = new Date();
        const date = now.getFullYear() + '-' + 
                     String(now.getMonth() + 1).padStart(2, '0') + '-' + 
                     String(now.getDate()).padStart(2, '0');
        const rand = String(Math.floor(Math.random() * 900) + 100);
        document.getElementById('orderRefNumber').textContent = `PDQ-${date}-${rand}`;
    }

    document.getElementById('btnNext1').addEventListener('click', function() {
        if (validateStep(1)) { currentStep = 2; updateStepUI(currentStep); }
    });

    document.getElementById('btnPrev2').addEventListener('click', function() {
        currentStep = 1; updateStepUI(currentStep);
    });

    document.getElementById('btnNext2').addEventListener('click', function() {
        if (validateStep(2)) { currentStep = 3; updateStepUI(currentStep); }
    });

    document.getElementById('btnPrev3').addEventListener('click', function() {
        currentStep = 2; updateStepUI(currentStep);
    });

    form.addEventListener('submit', function(e) {
        e.preventDefault();
        if (!validateStep(3)) return;

        const check = document.getElementById('guidelinesCheck');
        if (!check.checked) { check.classList.add('is-invalid'); return; }
        else { check.classList.remove('is-invalid'); }

        generateOrderRef();
        const modal = new bootstrap.Modal(document.getElementById('orderSuccessModal'));
        modal.show();

        const btn = document.getElementById('submitBtn');
        btn.disabled = true;
        btn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span> Submitting...';
        setTimeout(() => { btn.disabled = false; btn.innerHTML = '<i class="fa-solid fa-paper-plane"></i> Submit Order'; }, 2000);
    });

    document.querySelectorAll('.form-control-modern, .form-select-modern').forEach(el => {
        el.addEventListener('input', function() {
            if (this.value && this.checkValidity()) {
                this.classList.remove('is-invalid');
                this.classList.add('is-valid');
            }
        });
        el.addEventListener('blur', function() {
            if (this.value && this.checkValidity()) this.classList.add('is-valid');
        });
    });

    document.getElementById('guidelinesCheck').addEventListener('change', function() {
        if (this.checked) this.classList.remove('is-invalid');
    });
});
</script>

<?php include_once 'includes/footer.php'; ?>