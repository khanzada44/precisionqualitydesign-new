<?php
$page_title = "Cart | Precision Design Quilting";
$current_page = "Cart";
include_once 'includes/header.php';
?>

    <!-- Banner Section -->
    <section class="position-relative text-white d-flex align-items-center justify-content-center" style="background: url('assets/img/hero-banner.png') no-repeat center center; background-size: cover; padding-top: 90px; padding-bottom: 90px;">
        <div class="position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(31, 58, 91, 0.80);"></div>
        <div class="container position-relative z-1 text-left py-4">
            <p class="text-uppercase mb-2 text-white small" data-type-heading style="letter-spacing: 6px;">Shopping Cart</p>
            <h1 class="display-4 fw-bold mb-3" data-type-heading>Review Your Items</h1>
            <p class="lead mb-0 fs-5 text-white mx-auto text-left">
                Have questions about our quilting services or ready to start a project? Reach out to us today!
            </p>
        </div>
    </section>

    <!-- 2. Cart Section -->

<main style="max-width: 1280px; margin: 0 auto; padding: 24px 16px; font-family: system-ui, -apple-system, sans-serif;">
  
  <!-- Main Outer Card -->
  <section style="background-color: #f8f9ff; border: 1px solid #adb0ef; border-radius: 16px; padding: 32px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1); box-sizing: border-box;">
    
    <!-- Top Header -->
    <div style="display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center; gap: 16px; margin-bottom: 32px;">
      <div style="display: flex; align-items: center; gap: 12px; flex: 1 1 300px;">
        <div style="padding: 10px; border-radius: 8px; border: 1px solid #d6d3d1; background-color: #ffffff; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#44403c" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
          </svg>
        </div>
        <div>
          <h2 style="margin: 0; font-size: 28px; font-weight: 700; color: #292524;">Cart Review</h2>
          <p style="margin: 4px 0 0 0; font-size: 14px; color: #57534e;">Confirm the design, materials, and pricing before checkout.</p>
        </div>
      </div>

      <!-- Estimated Total Badge -->
      <div style="border-radius: 12px; padding: 12px 20px; border: 1px solid rgba(215, 217, 242, 0.6); background-color: #ffffff; text-align: right; flex-shrink: 0;">
        <p style="margin: 0; font-size: 10px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.05em; color: #78716c;">Estimated Total</p>
        <p style="margin: 2px 0 0 0; font-size: 28px; font-weight: 700; color: #1c1917;">$5.63</p>
      </div>
    </div>

    <!-- Main Content Layout (Responsive Auto-Fit Grid) -->
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 32px;">
      
      <!-- Left Area (Selected Options & Includes) -->
      <div >
        
        <!-- Selected Options Section -->
        <div>
          <h3 style="margin: 0 0 16px 0; font-size: 20px; font-weight: 700; color: #292524;">Selected Options</h3>
          
          <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 16px;">
            
            <!-- Pattern Card -->
            <article style="background-color: #ffffff; border-radius: 12px; border: 1px solid rgba(215, 217, 242, 0.6); overflow: hidden; box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05); display: flex; flex-direction: column;">
              <div style="position: relative; width: 100%; height: 140px; background-color: #e4e7ff;">
                <img src="https://precisiondesignquilting.shop/uploads/patterns/1778094880016-aboriginalart2e2erepeat.webp" alt="Abstract Waves" style="width: 100%; height: 100%; object-fit: cover; display: block;" />
                <span style="position: absolute; top: 12px; left: 12px; border-radius: 9999px; padding: 4px 12px; font-size: 10px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.05em; background-color: #3c408d; color: #ffffff;">Pattern</span>
              </div>
              <div style="padding: 16px;">
                <p style="margin: 0; font-size: 10px; text-transform: uppercase; letter-spacing: 0.05em; font-weight: 700; color: #78716c;">3.25 cents / sq in</p>
                <h4 style="margin: 4px 0 0 0; font-size: 16px; font-weight: 700; color: #1c1917; line-height: 1.4;">Abstract Waves</h4>
              </div>
            </article>

            <!-- Thread Card -->
            <article style="background-color: #ffffff; border-radius: 12px; border: 1px solid rgba(215, 217, 242, 0.6); overflow: hidden; box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05); display: flex; flex-direction: column;">
              <div style="position: relative; width: 100%; height: 140px; background-color: #e4e7ff;">
                <img src="https://precisiondesignquilting.shop/uploads/threads/1778095096052-omni-3016sandstone-jpg-w-1000-h-1000.webp" alt="OMNI #3012 - Sandstone" style="width: 100%; height: 100%; object-fit: cover; display: block;" />
                <span style="position: absolute; top: 12px; left: 12px; border-radius: 9999px; padding: 4px 12px; font-size: 10px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.05em; background-color: #3c408d; color: #ffffff;">Thread</span>
              </div>
              <div style="padding: 16px;">
                <p style="margin: 0; font-size: 10px; text-transform: uppercase; letter-spacing: 0.05em; font-weight: 700; color: #78716c;">Thread choice</p>
                <h4 style="margin: 4px 0 0 0; font-size: 16px; font-weight: 700; color: #1c1917; line-height: 1.4;">OMNI #3012 - Sandstone</h4>
              </div>
            </article>

            <!-- Backing Card -->
            <article style="background-color: #ffffff; border-radius: 12px; border: 1px solid rgba(215, 217, 242, 0.6); overflow: hidden; box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05); display: flex; flex-direction: column;">
              <div style="position: relative; width: 100%; height: 140px; background-color: #e4e7ff;">
                <img src="https://precisiondesignquilting.shop/uploads/backings/1778113237435-unnamed-3.png" alt='Cuddle Dimple Ivory - 60" Wide' style="width: 100%; height: 100%; object-fit: cover; display: block;" />
                <span style="position: absolute; top: 12px; left: 12px; border-radius: 9999px; padding: 4px 12px; font-size: 10px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.05em; background-color: #3c408d; color: #ffffff;">Backing</span>
              </div>
              <div style="padding: 16px;">
                <p style="margin: 0; font-size: 10px; text-transform: uppercase; letter-spacing: 0.05em; font-weight: 700; color: #78716c;">$15.50/yard</p>
                <h4 style="margin: 4px 0 0 0; font-size: 16px; font-weight: 700; color: #1c1917; line-height: 1.4;">Cuddle Dimple Ivory - 60" Wide</h4>
              </div>
            </article>

          </div>
        </div>

        <!-- What This Includes Section -->
        <div style="margin-top: 32px;">
        <div style="border-radius: 12px; background-color: #ffffff; border: 1px solid rgba(215, 217, 242, 0.6); padding: 20px;">
          <h3 style="margin: 0 0 12px 0; font-size: 20px; font-weight: 700; color: #292524;">What This Includes</h3>
          <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); gap: 12px;">
            <div style="border-radius: 8px; padding: 16px; background-color: #f7f8ff;">
              <p style="margin: 0; font-size: 14px; font-weight: 700; color: #292524;">Longarm quilting</p>
              <p style="margin: 8px 0 0 0; font-size: 12px; color: #57534e; line-height: 1.4;">Pattern priced by square inch</p>
            </div>
            <div style="border-radius: 8px; padding: 16px; background-color: #f7f8ff;">
              <p style="margin: 0; font-size: 14px; font-weight: 700; color: #292524;">Thread service</p>
              <p style="margin: 8px 0 0 0; font-size: 12px; color: #57534e; line-height: 1.4;">Included in quilting request</p>
            </div>
            <div style="border-radius: 8px; padding: 16px; background-color: #f7f8ff;">
              <p style="margin: 0; font-size: 14px; font-weight: 700; color: #292524;">Material handling</p>
              <p style="margin: 8px 0 0 0; font-size: 12px; color: #57534e; line-height: 1.4;">Backing and finishing shown separately</p>
            </div>
          </div>
        </div>
    </div>

      </div>
    
      <!-- Right Area (Checkout Pricing Sidebar) -->
      <aside style="border-radius: 12px; border: 1px solid rgba(215, 217, 242, 0.6); background-color: #ffffff; overflow: hidden; height: fit-content;">
        <div style="padding: 20px; border-bottom: 1px solid rgba(215, 217, 242, 0.6); background-color: #f7f8ff;">
          <p style="margin: 0; font-size: 10px; text-transform: uppercase; letter-spacing: 0.05em; font-weight: 700; color: #57534e;">Checkout Pricing</p>
          <h3 style="margin: 4px 0 0 0; font-size: 24px; font-weight: 700; color: #1c1917;">$5.63</h3>
        </div>

        <div style="padding: 20px;">
          <div style="display: flex; justify-content: space-between; gap: 16px; padding: 12px 0; border-bottom: 1px solid rgba(215, 217, 242, 0.6);">
            <div>
              <p style="margin: 0; font-size: 14px; font-weight: 600; color: #292524;">Quilting pattern</p>
              <p style="margin: 4px 0 0 0; font-size: 12px; color: #78716c;">3.25 cents / sq in</p>
            </div>
            <span style="font-size: 14px; font-weight: 700; color: #1c1917; white-space: nowrap;">$0.39</span>
          </div>

          <div style="display: flex; justify-content: space-between; gap: 16px; padding: 12px 0; border-bottom: 1px solid rgba(215, 217, 242, 0.6);">
            <div>
              <p style="margin: 0; font-size: 14px; font-weight: 600; color: #292524;">Batting</p>
              <p style="margin: 4px 0 0 0; font-size: 12px; color: #78716c;">Calculated from quilt area</p>
            </div>
            <span style="font-size: 14px; font-weight: 700; color: #1c1917; white-space: nowrap;">$0.24</span>
          </div>

          <div style="display: flex; justify-content: space-between; gap: 16px; padding: 12px 0; border-bottom: 1px solid rgba(215, 217, 242, 0.6);">
            <div>
              <p style="margin: 0; font-size: 14px; font-weight: 600; color: #292524;">Backing fabric</p>
              <p style="margin: 4px 0 0 0; font-size: 12px; color: #78716c;">Cuddle Dimple Ivory - 60" Wide</p>
            </div>
            <span style="font-size: 14px; font-weight: 700; color: #1c1917; white-space: nowrap;">$5.00</span>
          </div>

          <div style="display: flex; justify-content: space-between; gap: 16px; padding: 12px 0; border-bottom: 1px solid rgba(215, 217, 242, 0.6);">
            <div>
              <p style="margin: 0; font-size: 14px; font-weight: 600; color: #292524;">Backing preparation</p>
              <p style="margin: 4px 0 0 0; font-size: 12px; color: #78716c;">One piece or piecing service</p>
            </div>
            <span style="font-size: 14px; font-weight: 700; color: #1c1917; white-space: nowrap;">$0.00</span>
          </div>

          <div style="display: flex; justify-content: space-between; gap: 16px; padding: 12px 0;">
            <div>
              <p style="margin: 0; font-size: 14px; font-weight: 600; color: #292524;">Trim / binding</p>
              <p style="margin: 4px 0 0 0; font-size: 12px; color: #78716c;">Based on selected finishing option</p>
            </div>
            <span style="font-size: 14px; font-weight: 700; color: #1c1917; white-space: nowrap;">$0.00</span>
          </div>
        </div>

        <div style="padding: 20px; border-top: 1px solid rgba(215, 217, 242, 0.6); background-color: #eef0ff;">
          <div style="display: flex; justify-content: space-between; align-items: center;">
            <span style="font-size: 16px; font-weight: 700; color: #292524;">Estimated total</span>
            <span style="font-size: 24px; font-weight: 700; color: #1c1917;">$5.63</span>
          </div>
          <p style="margin: 12px 0 0 0; font-size: 12px; color: #57534e; line-height: 1.4;">Final confirmation can change if dimensions or material details are adjusted before production.</p>
        </div>
      </aside>

    </div>
  </section>

  <!-- Bottom Action Buttons Layout -->
  <div style="display: flex; flex-wrap: wrap; justify-content: space-between; gap: 16px; padding: 32px 0 16px 0;">
    <div style="display: flex; flex-wrap: wrap; gap: 12px; flex: 1 1 auto;">
      <a href="/" style="display: inline-flex; justify-content: center; align-items: center; padding: 12px 32px; border-radius: 8px; border: 1px solid #5b61c9; color: #3c408d; font-size: 14px; font-weight: 600; text-decoration: none; text-align: center; box-sizing: border-box;">
        Back to Request
      </a>
      <button type="button" style="display: inline-flex; justify-content: center; align-items: center; padding: 12px 32px; border-radius: 8px; border: 1px solid #5b61c9; color: #5b61c9; font-size: 14px; font-weight: 600; background: transparent; cursor: pointer; box-sizing: border-box;">
        Clear Cart
      </button>
    </div>

    <a href="check-out.php" style="display: inline-flex; justify-content: center; align-items: center; padding: 12px 40px; border-radius: 8px; background-color: #3c408d; color: #ffffff; font-size: 16px; font-weight: 600; text-decoration: none; text-align: center; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1); box-sizing: border-box;">
      Continue to Checkout
    </a>
  </div>

</main>

<?php include_once 'includes/footer.php'; ?>
