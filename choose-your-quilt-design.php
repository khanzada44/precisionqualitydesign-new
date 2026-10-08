<?php
$page_title = "Shipping Instructions | Precision Design Quilting";
$current_page = "shipping";
include_once 'includes/header.php';
?>
<style>
    /* Base Modal Animations & Styles */
    .radio-label {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 14px 16px;
        background: #ffffff;
        border-radius: 12px;
        cursor: pointer;
        border: 1px solid transparent;
        /* Border hide rakhne ke liye */
        font-size: 14px;
        font-weight: 600;
        color: #334155;
        transition: border-color 0.2s ease;
    }

    /* Select hone par Border show hoga */
    .radio-label:has(input[type="radio"]:checked) {
        border-color: #3b3f8c;
    }

    .pattern-modal-overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        background: rgba(15, 23, 42, 0.4);
        z-index: 9999;
        align-items: center;
        justify-content: center;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    }

    .pattern-modal-box {
        background: #ffffff;
        width: 90%;
        max-width: 960px;
        height: 85vh;
        border-radius: 16px;
        display: flex;
        flex-direction: column;
        overflow: hidden;
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
    }

    /* Card Active / Selected States */
    .pattern-card {
        border: 1px solid #e2e8f0;
        border-radius: 12px;
        padding: 12px;
        background: #fff;
        display: flex;
        flex-direction: column;
        position: relative;
        transition: border-color 0.2s ease, box-shadow 0.2s ease;
    }

    .pattern-card.selected {
        border: 2px solid #3b3f8c !important;
        box-shadow: 0 4px 12px rgba(59, 63, 140, 0.15);
    }

    .pattern-card .select-btn {
        width: 100%;
        background-color: #3b3f8c;
        color: #fff;
        border: none;
        padding: 8px;
        border-radius: 8px;
        font-size: 12px;
        font-weight: 600;
        cursor: pointer;
        margin-top: auto;
        transition: background-color 0.2s ease;
    }

    .pattern-card.selected .select-btn {
        background-color: #9395d3 !important;
    }

    .check-badge {
        position: absolute;
        top: 18px;
        left: 18px;
        width: 22px;
        height: 22px;
        background: #3b3f8c;
        border-radius: 50%;
        display: none;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-size: 12px;
        font-weight: bold;
        z-index: 2;
    }

    .pattern-card.selected .check-badge {
        display: flex;
    }

    .top-choice-tag {
        position: absolute;
        top: 18px;
        right: 18px;
        font-size: 9px;
        font-weight: 700;
        color: #3b3f8c;
        background: #eef2ff;
        padding: 2px 6px;
        border-radius: 4px;
    }

    .batting-label {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 14px 16px;
        background: #ffffff;
        border-radius: 12px;
        cursor: pointer;
        border: 1px solid transparent;
        /* By default border hide rahe ga */
        font-size: 14px;
        font-weight: 600;
        color: #334155;
        transition: border-color 0.2s ease;
    }

    /* Select hone par Border show hoga */
    .batting-label:has(input[type="radio"]:checked) {
        border-color: #3b3f8c;
    }

    .form-container {
        display: grid;
        grid-template-columns: 1fr 1fr;
        /* 2 barabar columns */
        gap: 20px;
        /* Cards ke beech ka gap */
        max-width: 1200px;
        margin: 0 auto;
    }

    /* Left Column Container */
    .left-column,
    .right-column {
        display: flex;
        flex-direction: column;
        gap: 20px;
        /* Vertical gap cards ke darmiyan */
    }

    /* Mobile screens par 1 column layout ke liye */
    @media (max-width: 768px) {
        .form-container {
            grid-template-columns: 1fr;
        }
    }

    .thread-modal-overlay {
        display: none;
        position: fixed;
        inset: 0;
        background: rgba(15, 23, 42, 0.4);
        z-index: 99999;
        align-items: center;
        justify-content: center;
        font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
    }

    /* Modal Main Container */
    .thread-modal-box {
        background: #ffffff;
        width: 92%;
        max-width: 860px;
        height: 85vh;
        border-radius: 16px;
        display: flex;
        flex-direction: column;
        overflow: hidden;
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
    }

    /* Header */
    .thread-modal-header {
        padding: 24px 28px 16px 28px;
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
    }

    .thread-modal-title {
        margin: 0 0 6px 0;
        font-size: 26px;
        font-weight: 700;
        color: #2b3a8c;
        font-family: Georgia, serif;
    }

    .thread-modal-subtitle {
        margin: 0;
        font-size: 13.5px;
        color: #64748b;
    }

    .thread-close-btn {
        background: none;
        border: none;
        font-size: 24px;
        color: #475569;
        cursor: pointer;
        line-height: 1;
    }

    /* Controls Section (Search + Tabs) */
    .thread-modal-controls {
        padding: 0 28px 20px 28px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 16px;
        flex-wrap: wrap;
    }

    .thread-search-box {
        display: flex;
        align-items: center;
        gap: 10px;
        background: #f1f5f9;
        padding: 8px 14px;
        border-radius: 8px;
        border: 1px solid #e2e8f0;
        width: 260px;
    }

    .thread-search-box input {
        border: none;
        background: transparent;
        outline: none;
        font-size: 13px;
        width: 100%;
        color: #1e293b;
    }

    .thread-filter-tabs {
        display: flex;
        align-items: center;
        gap: 6px;
        background: #eef2ff;
        padding: 4px;
        border-radius: 10px;
    }

    .filter-label {
        font-size: 11px;
        font-weight: 700;
        color: #475569;
        margin: 0 8px;
    }

    .tab-btn {
        border: none;
        background: transparent;
        padding: 6px 14px;
        border-radius: 6px;
        font-size: 12.5px;
        font-weight: 600;
        color: #475569;
        cursor: pointer;
        transition: all 0.2s ease;
    }

    .tab-btn.active {
        background: #2b3a8c;
        color: #ffffff;
    }

    /* Grid Body */
    .thread-modal-body {
        flex: 1;
        overflow-y: auto;
        padding: 10px 28px 20px 28px;
    }

    .thread-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 16px;
    }

    /* Thread Card Item */
    .thread-card {
        border: 1px solid #edf2f7;
        border-radius: 12px;
        padding: 14px;
        background: #ffffff;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        transition: all 0.2s ease;
    }

    .thread-card:hover {
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    }

    .thread-card.selected {
        border: 2px solid #2b3a8c;
        background: #f8fafc;
    }

    .thread-img-box {
        width: 100%;
        height: 120px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #f8fafc;
        border-radius: 8px;
        margin-bottom: 12px;
    }

    .thread-img-box img {
        max-height: 100px;
        object-fit: contain;
    }

    .thread-code {
        font-size: 13px;
        font-weight: 700;
        color: #2b3a8c;
        font-family: Georgia, serif;
        margin-bottom: 2px;
    }

    .thread-name {
        font-size: 12px;
        color: #64748b;
        margin-bottom: 12px;
        font-weight: 500;
    }

    .btn-select-thread {
        width: 100%;
        padding: 8px 0;
        background: #eef2ff;
        color: #2b3a8c;
        border: 1px solid #dbe2ef;
        border-radius: 8px;
        font-size: 12px;
        font-weight: 700;
        cursor: pointer;
    }

    .thread-card.selected .btn-select-thread {
        background: #2b3a8c;
        color: #ffffff;
        border-color: #2b3a8c;
    }

    /* Footer */
    .thread-modal-footer {
        padding: 16px 28px;
        background: #f8fafc;
        border-top: 1px solid #e2e8f0;
        display: flex;
        justify-content: flex-end;
        gap: 12px;
    }

    .btn-cancel {
        background: #eef2ff;
        color: #2b3a8c;
        border: 1px solid #dbe2ef;
        padding: 10px 24px;
        border-radius: 8px;
        font-weight: 600;
        cursor: pointer;
    }

    .btn-confirm {
        background: #2b3a8c;
        color: #ffffff;
        border: none;
        padding: 10px 24px;
        border-radius: 8px;
        font-weight: 600;
        cursor: pointer;
    }

    /* Responsive Support */
    @media (max-width: 768px) {
        .thread-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .thread-modal-controls {
            flex-direction: column;
            align-items: stretch;
        }

        .thread-search-box {
            width: 100%;
            box-sizing: border-box;
        }

        .thread-filter-tabs {
            overflow-x: auto;
        }
    }
</style>
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
<div style="background-color: #f7f9fe; padding: 40px 20px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">

    <!-- Title Section -->
    <div style="text-align: center; margin-bottom: 35px;">
        <h1 style="margin: 0 0 8px 0; font-size: 32px; font-weight: 700; color: #1e293b; font-family: Georgia, serif;">Let's Bring Your Quilt to Life</h1>
        <p style="margin: 0; font-size: 14px; color: #64748b; font-weight: 500;">Every quilt tells a story - PDQ helps make yours unforgettable.</p>
    </div>

    <!-- 2-Column Grid Container -->
    <div style="max-width: 1100px; margin: 0 auto; display: flex; flex-wrap: wrap; gap: 24px; align-items: flex-start;">

        <!-- LEFT COLUMN -->
        <div style="flex: 1 1 450px; display: flex; flex-direction: column; gap: 24px; width: 50%;">

            <!-- 1. Quilt Details -->
            <div style="background-color: #f1f3fd; padding: 28px; border-radius: 20px; box-shadow: 0 10px 25px rgba(0,0,0,0.03); border: 1px solid #e2e8f0;">
                <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 4px;">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#2c3e50" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="4" y="2" width="16" height="20" rx="2" ry="2"></rect>
                        <path d="M9 22v-4h6v4"></path>
                    </svg>
                    <h2 style="margin: 0; font-size: 20px; font-weight: 700; color: #1e293b; font-family: Georgia, serif;">Quilt Details</h2>
                </div>
                <p style="margin: 0 0 20px 0; font-size: 13px; color: #64748b; font-weight: 500;">Tell us about your quilt</p>

                <form style="display: flex; flex-direction: column; gap: 16px;">
                    <div>
                        <label style="display: block; font-size: 11px; font-weight: 700; color: #475569; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 6px;">QUILT NAME</label>
                        <input type="text" value="Minham" style="width: 100%; padding: 11px 14px; border-radius: 10px; border: 1px solid #e2e8f0; background: #fff; font-size: 14px; color: #0f172a; outline: none; box-sizing: border-box;">
                    </div>

                    <div>
                        <label style="display: block; font-size: 11px; font-weight: 700; color: #475569; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 6px;">QUILT SIZE</label>
                        <select style="width: 100%; padding: 11px 14px; border-radius: 10px; border: 1px solid #e2e8f0; background: #fff; font-size: 14px; color: #0f172a; outline: none; box-sizing: border-box; cursor: pointer;">
                            <option selected>King</option>
                            <option>Queen</option>
                            <option>Full</option>
                            <option>Twin</option>
                        </select>
                    </div>

                    <div style="display: flex; gap: 14px;">
                        <div style="flex: 1;">
                            <label style="display: block; font-size: 11px; font-weight: 700; color: #475569; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 6px;">WIDTH</label>
                            <input type="text" value="312" style="width: 100%; padding: 11px 14px; border-radius: 10px; border: 1px solid #e2e8f0; background: #fff; font-size: 14px; color: #0f172a; outline: none; box-sizing: border-box;">
                        </div>
                        <div style="flex: 1;">
                            <label style="display: block; font-size: 11px; font-weight: 700; color: #475569; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 6px;">HEIGHT</label>
                            <input type="text" value="321" style="width: 100%; padding: 11px 14px; border-radius: 10px; border: 1px solid #e2e8f0; background: #fff; font-size: 14px; color: #0f172a; outline: none; box-sizing: border-box;">
                        </div>
                    </div>

                    <div>
                        <label style="display: block; font-size: 11px; font-weight: 700; color: #475569; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 6px;">QUILT TYPE</label>
                        <select style="width: 100%; padding: 11px 14px; border-radius: 10px; border: 1px solid #e2e8f0; background: #fff; font-size: 14px; color: #0f172a; outline: none; box-sizing: border-box; cursor: pointer;">
                            <option selected>Machine Pieced</option>
                            <option>Hand Pieced</option>
                        </select>
                    </div>

                    <div>
                        <label style="display: block; font-size: 11px; font-weight: 700; color: #475569; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 6px;">FABRIC STYLE [OPTIONAL]</label>
                        <input type="text" value="Khanzada" style="width: 100%; padding: 11px 14px; border-radius: 10px; border: 1px solid #e2e8f0; background: #fff; font-size: 14px; color: #0f172a; outline: none; box-sizing: border-box;">
                    </div>
                </form>
            </div>

            <!-- 2. Choose Your Batting -->
            <div style="background-color: #f1f3fd; padding: 24px; border-radius: 20px; box-shadow: 0 10px 25px rgba(0,0,0,0.03); border: 1px solid #e2e8f0;">
                <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 4px;">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#2c3e50" stroke-width="2">
                        <path d="M12 2v20M2 12h20"></path>
                    </svg>
                    <h2 style="margin: 0; font-size: 20px; font-weight: 700; color: #1e293b; font-family: Georgia, serif;">Choose Your Batting</h2>
                </div>
                <p style="margin: 0 0 16px 0; font-size: 13px; color: #64748b; font-weight: 500;">The foundation of your quilt's feel, warmth, and texture.</p>

                <div style="display: flex; flex-direction: column; gap: 10px;">
                    <label class="batting-label">
                        <input type="radio" name="batting" style="accent-color: #3b3f8c;">
                        <span>Winline 80/20 Quilting Cotton Poly Blend <span style="font-weight: 700; color: #1e293b;">+$0.02 / sq in</span></span>
                    </label>

                    <label class="batting-label">
                        <input type="radio" name="batting" checked style="accent-color: #3b3f8c;">
                        <span>Winline Bamboo Batting <span style="font-weight: 700; color: #1e293b;">+$0.02 / sq in</span></span>
                    </label>
                </div>
            </div>

            <!-- 3. Trimming And Binding -->
            <div style="background-color: #f1f3fd; padding: 24px; border-radius: 20px; box-shadow: 0 10px 25px rgba(0,0,0,0.03); border: 1px solid #e2e8f0;">
                <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 4px;">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#2c3e50" stroke-width="2">
                        <circle cx="6" cy="6" r="3"></circle>
                        <circle cx="6" cy="18" r="3"></circle>
                        <line x1="20" y1="4" x2="8.12" y2="15.88"></line>
                        <line x1="14.47" y1="14.48" x2="20" y2="20"></line>
                        <line x1="8.12" y1="8.12" x2="12" y2="12"></line>
                    </svg>
                    <h2 style="margin: 0; font-size: 20px; font-weight: 700; color: #1e293b; font-family: Georgia, serif;">Trimming And Binding</h2>
                </div>
                <p style="margin: 0 0 16px 0; font-size: 13px; color: #64748b; font-weight: 500;">Clean edges, beautiful borders. The final step that brings your quilt together.</p>

                <div style="display: flex; flex-direction: column; gap: 10px;">
                    <label class="radio-label">
                        <input type="radio" name="trimming" style="accent-color: #3b3f8c;">
                        <span>Trim and bind my quilt <b>(Free)</b></span>
                    </label>

                    <label class="radio-label">
                        <input type="radio" name="trimming" checked style="accent-color: #3b3f8c;">
                        <span>Trim but do not bind <b>+$15.00</b></span>
                    </label>

                    <label class="radio-label">
                        <input type="radio" name="trimming" style="accent-color: #3b3f8c;">
                        <span>No thanks <b>(Free)</b></span>
                    </label>
                </div>
            </div>

        </div>

        <!-- RIGHT COLUMN -->
        <div style="flex: 1 1 500px; display: flex; flex-direction: column; gap: 24px; width: 50%;">

            <!-- 1. Choose Your Quilting Design -->
            <div style="background-color: #f1f3fd; padding: clamp(12px, 3vw, 24px); border-radius: 20px; box-shadow: 0 10px 25px rgba(0,0,0,0.03); border: 1px solid #e2e8f0; width: 100%; max-width: 1280px; margin: 0 auto; box-sizing: border-box;">

                <!-- Header Section -->
                <div style="display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center; gap: 12px; margin-bottom: 16px;">
                    <div>
                        <div style="display: flex; align-items: center; gap: 8px;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#2c3e50" stroke-width="2" style="flex-shrink: 0;">
                                <rect x="3" y="3" width="7" height="7"></rect>
                                <rect x="14" y="3" width="7" height="7"></rect>
                                <rect x="14" y="14" width="7" height="7"></rect>
                                <rect x="3" y="14" width="7" height="7"></rect>
                            </svg>
                            <h2 style="margin: 0; font-size: clamp(16px, 4vw, 20px); font-weight: 700; color: #1e293b; font-family: Georgia, serif;">Choose Your Quilting Design</h2>
                        </div>
                        <p style="margin: 4px 0 0 28px; font-size: 13px; color: #64748b; font-weight: 500;">Not sure? We'll help you decide.</p>
                    </div>

                    <!-- Trigger Button -->
                    <button type="button" onclick="openPatternModal()" style="background-color: #3b3f8c; color: #fff; border: none; padding: 10px 20px; border-radius: 8px; font-size: 14px; font-weight: 600; cursor: pointer; flex-shrink: 0;">
                        View More
                    </button>
                </div>

                <!-- Pattern Slider Container -->
                <div style="position: relative; display: flex; align-items: center; margin-bottom: 12px;">
                    <button onclick="slidePatterns(-1)" style="position: absolute; left: -10px; z-index: 2; background: #fff; border: 1px solid #cbd5e1; border-radius: 50%; width: 28px; height: 28px; display: flex; align-items: center; justify-content: center; color: #64748b; font-size: 14px; cursor: pointer; box-shadow: 0 2px 5px rgba(0,0,0,0.1); flex-shrink: 0;">&#10094;</button>

                    <div id="patternSlider" style="display: flex; gap: 12px; overflow-x: auto; scrollbar-width: none; scroll-behavior: smooth; width: 100%; padding: 4px 0;">
                        <!-- Pattern items render dynamically -->
                    </div>

                    <button onclick="slidePatterns(1)" style="position: absolute; right: -10px; z-index: 2; background: #fff; border: 1px solid #cbd5e1; border-radius: 50%; width: 28px; height: 28px; display: flex; align-items: center; justify-content: center; color: #64748b; font-size: 14px; cursor: pointer; box-shadow: 0 2px 5px rgba(0,0,0,0.1); flex-shrink: 0;">&#10095;</button>
                </div>

                <p style="margin: 0; font-size: 12px; color: #475569; font-style: italic;">Selected: <span id="selectedPatternLabel" style="font-weight: 700; font-style: normal; color: #1e293b;">Aaron's Train</span></p>

                <!-- Modal Popup Structure -->
                <div id="patternModal" class="pattern-modal-overlay" style="display: none; position: fixed; inset: 0; background: rgba(0,0,0,0.5); z-index: 1000; align-items: end; justify-content: center; padding: 7px; box-sizing: border-box;">
                    <div class="pattern-modal-box" style="background: #fff; width: 100%; max-width: 900px; max-height: 80vh; height: 100%; border-radius: 16px; display: flex; flex-direction: column; overflow: hidden; box-shadow: 0 20px 25px -5px rgba(0,0,0,0.1);">

                        <!-- Modal Header -->
                        <div style="padding: 16px 20px; border-bottom: 1px dashed #e2e8f0; display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center; gap: 12px;">
                            <div>
                                <h2 style="margin: 0; font-size: clamp(18px, 4vw, 24px); font-weight: 700; color: #1e293b; font-family: Georgia, serif;">Choose a Pattern</h2>
                                <p style="margin: 4px 0 0 0; font-size: 12px; color: #64748b;">Select a digital quilting design for your heritage project</p>
                            </div>

                            <div style="display: flex; align-items: center; gap: 12px; width: auto;">
                                <!-- Search Input -->
                                <div style="position: relative; flex: 1;">
                                    <input type="text" id="patternSearch" oninput="filterPatterns()" placeholder="Search patterns..." style="padding: 8px 12px 8px 36px; border-radius: 8px; border: 1px solid #e2e8f0; background: #f8fafc; font-size: 13px; outline: none; width: 100%; max-width: 220px; box-sizing: border-box;">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#64748b" stroke-width="2" style="position: absolute; left: 10px; top: 50%; transform: translateY(-50%);">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                    </svg>
                                </div>
                                <!-- Close Cross Button -->
                                <button onclick="closePatternModal()" style="background: none; border: none; font-size: 24px; color: #64748b; cursor: pointer; line-height: 1; padding: 0 4px;">&times;</button>
                            </div>
                        </div>

                        <!-- Modal Body (Responsive Layout) -->
                        <div style="display: flex; flex-wrap: wrap; flex: 1; overflow: auto;">

                            <!-- Left Sidebar Filters -->
                            <div style="flex: 1 1 200px; min-width: 200px; padding: 16px; border-right: 1px dashed #e2e8f0; border-bottom: 1px dashed #e2e8f0; overflow-y: auto; box-sizing: border-box;">

                                <div style="margin-bottom: 20px;">
                                    <label style="display: block; font-size: 11px; font-weight: 700; color: #64748b; margin-bottom: 8px;">Sort By</label>
                                    <select id="sortSelect" onchange="filterPatterns()" style="width: 100%; padding: 8px 12px; border-radius: 8px; border: 2px solid #3b3f8c; font-size: 13px; color: #1e293b; outline: none; background: #fff; font-weight: 500;">
                                        <option value="high-low">Price: High to Low</option>
                                        <option value="low-high">Price: Low to High</option>
                                        <option value="name">Name A-Z</option>
                                    </select>
                                </div>

                                <div style="margin-bottom: 20px; display: flex; flex-direction: column; gap: 10px; font-size: 13px; color: #475569;">
                                    <label style="display: flex; align-items: center; gap: 8px; cursor: pointer;"><input type="checkbox" class="category-checkbox" value="Geometric" onchange="filterPatterns()"> Geometric</label>
                                    <label style="display: flex; align-items: center; gap: 8px; cursor: pointer;"><input type="checkbox" class="category-checkbox" value="Floral" onchange="filterPatterns()"> Floral</label>
                                    <label style="display: flex; align-items: center; gap: 8px; cursor: pointer;"><input type="checkbox" class="category-checkbox" value="Traditional" onchange="filterPatterns()"> Traditional</label>
                                    <label style="display: flex; align-items: center; gap: 8px; cursor: pointer;"><input type="checkbox" class="category-checkbox" value="Modern Abstract" onchange="filterPatterns()"> Modern Abstract</label>
                                </div>

                                <div>
                                    <label style="display: block; font-size: 11px; font-weight: 700; color: #64748b; margin-bottom: 8px;">Price Range</label>
                                    <input type="range" id="priceRange" min="2.00" max="5.00" step="0.05" value="5.00" oninput="updatePriceLabel(this.value); filterPatterns();" style="width: 100%; accent-color: #3b3f8c;">
                                    <div style="display: flex; justify-content: space-between; font-size: 11px; color: #64748b; margin-top: 6px;">
                                        <span>2.00 cents</span>
                                        <span id="priceRangeVal">5.00 cents</span>
                                    </div>
                                </div>

                            </div>

                            <!-- Pattern Grid Container -->
                            <div style="flex: 3 1 300px; padding: 16px; overflow-y: auto; box-sizing: border-box;">
                                <div id="patternGrid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(140px, 1fr)); gap: 16px;">
                                    <!-- Cards render dynamically -->
                                </div>
                            </div>

                        </div>

                        <!-- Modal Footer -->
                        <div style="padding: 16px 20px; border-top: 1px dashed #e2e8f0; display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center; gap: 12px; background: #fff;">
                            <span id="patternCountLabel" style="font-size: 13px; color: #64748b;">Showing 0 of 0 patterns</span>
                            <div style="display: flex; gap: 12px; width: auto;">
                                <button onclick="closePatternModal()" style="background: #fff; color: #3b3f8c; border: 1px solid #3b3f8c; padding: 8px 16px; border-radius: 8px; font-size: 13px; font-weight: 600; cursor: pointer;">Cancel</button>
                                <button onclick="closePatternModal()" style="background: #3b3f8c; color: #fff; border: none; padding: 8px 20px; border-radius: 8px; font-size: 13px; font-weight: 600; cursor: pointer;">Confirm Selection</button>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <!-- 2. Choose Your Thread -->
            <!-- Main Container -->
            <div style="background-color: #f1f3fd; padding: 24px; border-radius: 20px; box-shadow: 0 10px 25px rgba(0,0,0,0.03); border: 1px solid #e2e8f0; width: 100%; box-sizing: border-box;">

                <!-- Header Section -->
                <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 16px; gap: 12px; flex-wrap: wrap;">
                    <div>
                        <div style="display: flex; align-items: center; gap: 8px;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#2c3e50" stroke-width="2" style="flex-shrink: 0;">
                                <path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                            </svg>
                            <h2 style="margin: 0; font-size: 20px; font-weight: 700; color: #1e293b; font-family: Georgia, serif;">Choose Your Thread</h2>
                        </div>
                        <p style="margin: 4px 0 0 28px; font-size: 13px; color: #64748b; font-weight: 500;">Choose from our thread library!</p>
                    </div>

                    <button type="button" onclick="openThreadModal()" style="background-color: #3b3f8c; color: #fff; border: none; padding: 8px 16px; border-radius: 8px; font-size: 13px; font-weight: 600; cursor: pointer; white-space: nowrap; flex-shrink: 0;">
                        View More
                    </button>

                    <!-- Modal -->
                    <div id="threadModalOverlay" class="thread-modal-overlay">
                        <div class="thread-modal-box">

                            <!-- Modal Header -->
                            <div class="thread-modal-header">
                                <div>
                                    <h2 class="thread-modal-title">Choose a Thread</h2>
                                    <p class="thread-modal-subtitle">We use high quality Omni thread. It runs smoothly through our machines and leaves very little lint.</p>
                                </div>
                                <button class="thread-close-btn" onclick="closeThreadModal()">&times;</button>
                            </div>

                            <!-- Controls: Search Bar + Filter Tabs -->
                            <div class="thread-modal-controls">
                                <div class="thread-search-box">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#94a3b8" stroke-width="2">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                    </svg>
                                    <input type="text" id="threadSearchInput" placeholder="Search thread name or number..." oninput="filterThreads()">
                                </div>

                                <div class="thread-filter-tabs">
                                    <span class="filter-label">COLORS:</span>
                                    <button class="tab-btn active" onclick="setThreadCategory('All', this)">All</button>
                                    <button class="tab-btn" onclick="setThreadCategory('Whites', this)">Whites</button>
                                    <button class="tab-btn" onclick="setThreadCategory('Neutrals', this)">Neutrals</button>
                                    <button class="tab-btn" onclick="setThreadCategory('Warm', this)">Warm</button>
                                    <button class="tab-btn" onclick="setThreadCategory('Cool', this)">Cool</button>
                                </div>
                            </div>

                            <!-- Modal Body -->
                            <div class="thread-modal-body">
                                <div id="threadGrid" class="thread-grid">
                                    <!-- Dynamic Cards JS se render honge -->
                                </div>
                            </div>

                            <!-- Modal Footer -->
                            <div class="thread-modal-footer">
                                <button class="btn-cancel" onclick="closeThreadModal()">Cancel</button>
                                <button class="btn-confirm" onclick="confirmThreadSelection()">Confirm Selection</button>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Slider Section -->
                <div id="threadSliderContainer" style="position: relative; display: flex; align-items: center; margin-bottom: 12px; width: 100%;">
                    <!-- Left Button -->
                    <button onclick="slideThreads(-1)" style="position: absolute; left: -10px; z-index: 2; background: #fff; border: 1px solid #cbd5e1; border-radius: 50%; width: 28px; height: 28px; display: flex; align-items: center; justify-content: center; color: #64748b; font-size: 14px; cursor: pointer; box-shadow: 0 2px 5px rgba(0,0,0,0.1); flex-shrink: 0;">&#10094;</button>

                    <!-- Slider Track -->
                    <div id="threadSlider" style="display: flex; gap: 12px; overflow-x: auto; scrollbar-width: none; -ms-overflow-style: none; scroll-behavior: smooth; width: 100%; padding: 4px;">
                        <!-- Images JS se dynamically load hongi -->
                    </div>

                    <!-- Right Button -->
                    <button onclick="slideThreads(1)" style="position: absolute; right: -10px; z-index: 2; background: #fff; border: 1px solid #cbd5e1; border-radius: 50%; width: 28px; height: 28px; display: flex; align-items: center; justify-content: center; color: #64748b; font-size: 14px; cursor: pointer; box-shadow: 0 2px 5px rgba(0,0,0,0.1); flex-shrink: 0;">&#10095;</button>
                </div>

                <!-- Selected Text -->
                <p style="margin: 0 0 16px 0; font-size: 12px; color: #475569; font-style: italic;">
                    Selected: <span style="font-weight: 700; font-style: normal; color: #1e293b;">OMNI 3001 - Bright White</span>
                </p>

                <!-- Checkbox Label -->
                <label style="display: flex; gap: 10px; align-items: flex-start; cursor: pointer; padding: 12px; border: 1px solid #cbd5e1; border-radius: 8px; background: #fff; margin-bottom: 12px;">
                    <input type="checkbox" id="quilterChoice" onchange="toggleThreadSlider(this)" style="margin-top: 3px; accent-color: #3b3f8c; cursor: pointer; flex-shrink: 0;">
                    <div>
                        <span style="font-size: 13px; font-weight: 700; color: #1e293b; display: block;">Let the quilter choose what they think looks best</span>
                        <span style="font-size: 11px; color: #64748b;">Use this when you want us to match the thread to your quilt top, backing, and pattern.</span>
                    </div>
                </label>

            </div>

            <!-- 3. Choose Your Backing -->
            <div style="background-color: #f1f3fd; padding: clamp(12px, 3vw, 24px); border-radius: 20px; box-shadow: 0 10px 25px rgba(0,0,0,0.03); border: 1px solid #e2e8f0; width: 100%; box-sizing: border-box;">
    
    <!-- Header Area -->
    <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 12px; margin-bottom: 16px;">
        <div style="flex: 1 1 200px;">
            <div style="display: flex; align-items: center; gap: 8px;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#2c3e50" stroke-width="2" style="flex-shrink: 0;">
                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                    <line x1="3" y1="9" x2="21" y2="9"></line>
                    <line x1="9" y1="21" x2="9" y2="9"></line>
                </svg>
                <h2 style="margin: 0; font-size: clamp(16px, 4vw, 20px); font-weight: 700; color: #1e293b; font-family: Georgia, serif;">Choose Your Backing</h2>
            </div>
            <p style="margin: 4px 0 0 28px; font-size: clamp(11px, 3vw, 13px); color: #64748b; font-weight: 500;">Choose from our backing library!</p>
        </div>
        
        <!-- Trigger Button -->
        <button onclick="document.getElementById('backingModal').style.display='flex'" style="background-color: #3b3f8c; color: #fff; border: none; padding: 8px 16px; border-radius: 8px; font-size: 12px; font-weight: 600; cursor: pointer; white-space: nowrap;">
            View More
        </button>
    </div>

    <!-- Modal Overlay -->
    <div id="backingModal" style="display: none; position: fixed; top: 0; left: 0; width: 100vw; height: 100vh; background-color: rgba(0, 0, 0, 0.5); justify-content: center; align-items: center; z-index: 9999; font-family: sans-serif; padding: 12px; box-sizing: border-box;">

        <!-- Modal Content Box -->
        <div style="background-color: #ffffff; border-radius: 16px; width: 100%; max-width: 900px; max-height: 90vh; overflow-y: auto; padding: clamp(16px, 4vw, 28px); box-shadow: 0 10px 30px rgba(0,0,0,0.15); position: relative; box-sizing: border-box;">

            <!-- Close Button -->
            <button onclick="document.getElementById('backingModal').style.display='none'" style="position: absolute; top: 16px; right: 16px; background: none; border: none; font-size: 20px; color: #6b7280; cursor: pointer; padding: 4px; line-height: 1;">
                ✕
            </button>

            <!-- Header -->
            <h2 style="font-family: Diranista, serif; font-size: clamp(22px, 5vw, 36px); font-weight: 600; color: rgb(60, 64, 141); line-height: 1.3; margin-top: 0; padding-right: 24px;">Choose a Backing Fabric</h2>
            <p style="color: rgb(75, 79, 107); font-size: clamp(13px, 3.5vw, 16px); margin-top: 8px; max-width: 600px;">The backing calculator takes into account the width of fabric and the quilt dimensions for each quilt.</p>

            <!-- Search & Filters Row -->
            <div style="display: flex; flex-wrap: wrap; gap: 12px; margin-bottom: 24px;">
                <div style="position: relative; flex: 1 1 240px; min-width: 200px;">
                    <!-- Search Icon -->
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#64748b" stroke-width="2" style="position: absolute; left: 12px; top: 50%; transform: translateY(-50%); pointer-events: none;">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                    <!-- Input Field -->
                    <input type="text" placeholder="Search fabrics, colors, widths..." style="width: 100%; padding: 10px 14px 10px 36px; border: 1px solid #e5e7eb; border-radius: 8px; font-size: 13px; background-color: #f9fafb; outline: none; box-sizing: border-box;" />
                </div>

                <select style="flex: 1 1 140px; min-width: 130px; padding: 10px 14px; border: 1px solid #e5e7eb; border-radius: 8px; font-size: 13px; background-color: #ffffff; color: #374151;">
                    <option>All Colors</option>
                </select>

                <select style="flex: 1 1 140px; min-width: 130px; padding: 10px 14px; border: 1px solid #e5e7eb; border-radius: 8px; font-size: 13px; background-color: #ffffff; color: #374151;">
                    <option>All Fabric Types</option>
                </select>
            </div>

            <!-- Fabrics Grid (Responsive Columns) -->
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(160px, 1fr)); gap: 16px; margin-bottom: 24px;">

                <!-- Card 1 -->
                <div style="border: 1px solid #e5e7eb; border-radius: 12px; padding: 10px; position: relative; background-color: #fff; display: flex; flex-direction: column;">
                    <span style="position: absolute; top: 16px; right: 16px; background-color: #3b3f8c; color: #fff; font-size: 10px; font-weight: 700; padding: 3px 8px; border-radius: 12px;">+$5.00</span>
                    <img src="https://precisiondesignquilting.shop/uploads/backings/1778113237435-unnamed-3.png" alt="Fabric" style="width: 100%; height: 130px; object-fit: cover; border-radius: 8px; margin-bottom: 10px;" />
                    <h4 style="margin: 0 0 4px 0; font-size: 12px; font-weight: 700; color: #1f2937;">Cuddle Dimple Ivory - 6...</h4>
                    <p style="margin: 0 0 8px 0; font-size: 12px; color: #6b7280; flex-grow: 1;">$15.50/yard</p>
                    <button onclick="selectPattern(7)" style="width: 100%; background: #f1f5f9; color: #475569; border: none; padding: 8px; border-radius: 6px; font-size: 12px; font-weight: 600; cursor: pointer;">
                        Select Pattern
                    </button>
                </div>

                <!-- Card 2 -->
                <div style="border: 1px solid #e5e7eb; border-radius: 12px; padding: 10px; position: relative; background-color: #fff; display: flex; flex-direction: column;">
                    <span style="position: absolute; top: 16px; right: 16px; background-color: #3b3f8c; color: #fff; font-size: 10px; font-weight: 700; padding: 3px 8px; border-radius: 12px;">+$5.00</span>
                    <img src="https://precisiondesignquilting.shop/uploads/backings/1778113207589-unnamed-2.png" alt="Fabric" style="width: 100%; height: 130px; object-fit: cover; border-radius: 8px; margin-bottom: 10px;" />
                    <h4 style="margin: 0 0 4px 0; font-size: 12px; font-weight: 700; color: #1f2937;">Cuddle Dimple Ivory - 6...</h4>
                    <p style="margin: 0 0 8px 0; font-size: 12px; color: #6b7280; flex-grow: 1;">$15.50/yard</p>
                    <button onclick="selectPattern(7)" style="width: 100%; background: #f1f5f9; color: #475569; border: none; padding: 8px; border-radius: 6px; font-size: 12px; font-weight: 600; cursor: pointer;">
                        Select Pattern
                    </button>
                </div>

                <!-- Card 3 -->
                <div style="border: 1px solid #e5e7eb; border-radius: 12px; padding: 10px; position: relative; background-color: #fff; display: flex; flex-direction: column;">
                    <span style="position: absolute; top: 16px; right: 16px; background-color: #3b3f8c; color: #fff; font-size: 10px; font-weight: 700; padding: 3px 8px; border-radius: 12px;">+$5.00</span>
                    <img src="https://precisiondesignquilting.shop/uploads/backings/1778113286219-unnamed-4.png" alt="Fabric" style="width: 100%; height: 130px; object-fit: cover; border-radius: 8px; margin-bottom: 10px;" />
                    <h4 style="margin: 0 0 4px 0; font-size: 12px; font-weight: 700; color: #1f2937;">Cuddle Dimple Ivory - 6...</h4>
                    <p style="margin: 0 0 8px 0; font-size: 12px; color: #6b7280; flex-grow: 1;">$15.50/yard</p>
                    <button onclick="selectPattern(7)" style="width: 100%; background: #f1f5f9; color: #475569; border: none; padding: 8px; border-radius: 6px; font-size: 12px; font-weight: 600; cursor: pointer;">
                        Select Pattern
                    </button>
                </div>

                <!-- Card 4 -->
                <div style="border: 1px solid #e5e7eb; border-radius: 12px; padding: 10px; position: relative; background-color: #fff; display: flex; flex-direction: column;">
                    <span style="position: absolute; top: 16px; right: 16px; background-color: #3b3f8c; color: #fff; font-size: 10px; font-weight: 700; padding: 3px 8px; border-radius: 12px;">+$5.00</span>
                    <img src="https://precisiondesignquilting.shop/uploads/backings/1778113275260-unnamed-5.png" alt="Fabric" style="width: 100%; height: 130px; object-fit: cover; border-radius: 8px; margin-bottom: 10px;" />
                    <h4 style="margin: 0 0 4px 0; font-size: 12px; font-weight: 700; color: #1f2937;">Cuddle Dimple Ivory - 6...</h4>
                    <p style="margin: 0 0 8px 0; font-size: 12px; color: #6b7280; flex-grow: 1;">$15.50/yard</p>
                    <button onclick="selectPattern(7)" style="width: 100%; background: #f1f5f9; color: #475569; border: none; padding: 8px; border-radius: 6px; font-size: 12px; font-weight: 600; cursor: pointer;">
                        Select Pattern
                    </button>
                </div>

            </div>

            <!-- Footer Bar -->
            <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 12px; background-color: #f3f4f6; padding: 12px 16px; border-radius: 12px;">
                <div>
                    <div style="font-size: 10px; text-transform: uppercase; letter-spacing: 0.5px; color: #6b7280; font-weight: 700;">Current Selection</div>
                    <div style="font-size: 13px; font-weight: 700; color: #3b3f8c;">Linen Blend - Soft Coral</div>
                </div>
                <div style="display: flex; gap: 10px; width: auto; flex-wrap: wrap;">
                    <button onclick="document.getElementById('backingModal').style.display='none'" style="flex: 1 1 auto; background-color: transparent; border: 1px solid #d1d5db; color: #374151; padding: 8px 16px; border-radius: 8px; font-size: 13px; font-weight: 600; cursor: pointer;">
                        Cancel
                    </button>
                    <button style="flex: 1 1 auto; background-color: #3b3f8c; color: #ffffff; border: none; padding: 8px 18px; border-radius: 8px; font-size: 13px; font-weight: 600; cursor: pointer;">
                        Confirm Backing
                    </button>
                </div>
            </div>

        </div>
    </div>

    <!-- Slider Section -->
    <div id="BackingSliderContainer" style="position: relative; display: flex; align-items: center; margin-bottom: 12px;">
        <!-- Left Button -->
        <button onclick="slideBackings(-1)" style="position: absolute; left: -10px; z-index: 2; background: #fff; border: 1px solid #cbd5e1; border-radius: 50%; width: 28px; height: 28px; display: flex; align-items: center; justify-content: center; color: #64748b; font-size: 14px; cursor: pointer; box-shadow: 0 2px 5px rgba(0,0,0,0.1); flex-shrink: 0;">&#10094;</button>

        <!-- Slider Container -->
        <div id="BackingSlider" style="display: flex; gap: 12px; overflow-x: auto; scrollbar-width: none; scroll-behavior: smooth; width: 100%; padding: 4px;">
            <div style="border: 1px solid #e2e8f0; border-radius: 12px; padding: 8px; background-color: #ffffff; flex: 0 0 clamp(90px, 25vw, 120px); box-sizing: border-box;">
                <img src="https://precisiondesignquilting.shop/uploads/backings/1778113237435-unnamed-3.png" alt="Design 1" style="width: 100%; height: auto; display: block; object-fit: contain;" />
            </div>

            <!-- Selected / Active Item -->
            <div style="border: 2px solid #1e1b4b; border-radius: 12px; padding: 8px; background-color: #ffffff; flex: 0 0 clamp(90px, 25vw, 120px); box-sizing: border-box;">
                <img src="https://precisiondesignquilting.shop/uploads/backings/1778113207589-unnamed-2.png" alt="Design 2" style="width: 100%; height: auto; display: block; object-fit: contain;" />
            </div>

            <div style="border: 1px solid #e2e8f0; border-radius: 12px; padding: 8px; background-color: #ffffff; flex: 0 0 clamp(90px, 25vw, 120px); box-sizing: border-box;">
                <img src="https://precisiondesignquilting.shop/uploads/backings/1778113286219-unnamed-4.png" alt="Design 3" style="width: 100%; height: auto; display: block; object-fit: contain;" />
            </div>

            <div style="border: 1px solid #e2e8f0; border-radius: 12px; padding: 8px; background-color: #ffffff; flex: 0 0 clamp(90px, 25vw, 120px); box-sizing: border-box;">
                <img src="https://precisiondesignquilting.shop/uploads/backings/1778113275260-unnamed-5.png" alt="Design 4" style="width: 100%; height: auto; display: block; object-fit: contain;" />
            </div>

            <div style="border: 1px solid #e2e8f0; border-radius: 12px; padding: 8px; background-color: #ffffff; flex: 0 0 clamp(90px, 25vw, 120px); box-sizing: border-box;">
                <img src="https://precisiondesignquilting.shop/uploads/backings/1778113237435-unnamed-3.png" alt="Design 5" style="width: 100%; height: auto; display: block; object-fit: contain;" />
            </div>
        </div>

        <!-- Right Button -->
        <button onclick="slideBackings(1)" style="position: absolute; right: -10px; z-index: 2; background: #fff; border: 1px solid #cbd5e1; border-radius: 50%; width: 28px; height: 28px; display: flex; align-items: center; justify-content: center; color: #64748b; font-size: 14px; cursor: pointer; box-shadow: 0 2px 5px rgba(0,0,0,0.1); flex-shrink: 0;">&#10095;</button>
    </div>

    <p style="margin: 0; font-size: 12px; color: #475569; font-style: italic;">Selected: <span style="font-weight: 700; font-style: normal; color: #1e293b;">Linen Blend - Soft Coral</span></p>
</div>

        </div>

        <!-- JavaScript Integration Logic -->

        <!-- Where Can We Reach You Card -->
        <div style="background-color: #f0f3ff; border: 1px solid #dbe2ef; border-radius: 16px; padding: 32px 24px; max-width: 900px; margin: 0 auto; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.03); font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;">

            <!-- Heading Section -->
            <div style="text-align: center; margin-bottom: 24px;">
                <div style="display: flex; align-items: center; justify-content: center; gap: 8px; margin-bottom: 6px;">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#2c3e50" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                    <h2 style="margin: 0; font-size: 24px; font-weight: 700; color: #1e293b; font-family: Georgia, serif;">Where Can We Reach You?</h2>
                </div>
                <p style="margin: 0; font-size: 13px; color: #64748b;">Add the address for this quilt request. Name, phone, and email are collected at checkout.</p>
            </div>

            <!-- Form Inputs Row -->
            <div style="display: flex; gap: 16px; flex-wrap: wrap;">

                <!-- Street Address -->
                <div style="flex: 2; min-width: 220px;">
                    <label style="display: block; font-size: 11px; font-weight: 700; color: #475569; letter-spacing: 0.5px; text-transform: uppercase; margin-bottom: 6px;">Street Address</label>
                    <input type="text" name="street_address" placeholder="House#356Unit9#BlackD#latif" style="width: 100%; padding: 12px 14px; border-radius: 8px; border: 1px solid #e2e8f0; background-color: #ffffff; font-size: 14px; color: #1e293b; outline: none; box-sizing: border-box;">
                </div>

                <!-- City -->
                <div style="flex: 1.5; min-width: 140px;">
                    <label style="display: block; font-size: 11px; font-weight: 700; color: #475569; letter-spacing: 0.5px; text-transform: uppercase; margin-bottom: 6px;">City</label>
                    <input type="text" name="city" placeholder="hyd" style="width: 100%; padding: 12px 14px; border-radius: 8px; border: 1px solid #e2e8f0; background-color: #ffffff; font-size: 14px; color: #1e293b; outline: none; box-sizing: border-box;">
                </div>

                <!-- State -->
                <div style="flex: 1.5; min-width: 140px;">
                    <label style="display: block; font-size: 11px; font-weight: 700; color: #475569; letter-spacing: 0.5px; text-transform: uppercase; margin-bottom: 6px;">State</label>
                    <input type="text" name="state" placeholder="wq" style="width: 100%; padding: 12px 14px; border-radius: 8px; border: 1px solid #e2e8f0; background-color: #ffffff; font-size: 14px; color: #1e293b; outline: none; box-sizing: border-box;">
                </div>

                <!-- Zip -->
                <div style="flex: 1; min-width: 100px;">
                    <label style="display: block; font-size: 11px; font-weight: 700; color: #475569; letter-spacing: 0.5px; text-transform: uppercase; margin-bottom: 6px;">Zip</label>
                    <input type="text" name="zip" placeholder="w" style="width: 100%; padding: 12px 14px; border-radius: 8px; border: 1px solid #e2e8f0; background-color: #ffffff; font-size: 14px; color: #1e293b; outline: none; box-sizing: border-box;">
                </div>

            </div>
        </div>

        <!-- Review Cart Button -->
    </div>
    <div style="text-align: center; margin-top: 24px;">
        <a href="cart.php" style="background-color: #3b3f8c; color: #ffffff; border: none; padding: 12px 32px; border-radius: 8px; font-size: 15px; font-weight: 600; cursor: pointer; transition: background-color 0.2s ease; text-decoration: none;">Review Cart</a>
    </div>
</div>

<script>
    // Filter functionality (Search + Category for Threads)
    function filterThreads() {
        // Thread Search Input
        const queryInput = document.getElementById('threadSearchInput');
        const query = queryInput ? queryInput.value.toLowerCase().trim() : '';

        // ALWAYS filter ThreadData (not patternsData)
        const filtered = ThreadData.filter(item => {
            const matchesSearch = item.name.toLowerCase().includes(query) ||
                (item.code && item.code.toLowerCase().includes(query));
            const matchesCategory = (activeCategory === 'All') || (item.category === activeCategory);

            return matchesSearch && matchesCategory;
        });

        renderThreads(filtered);
    }

    // Render Threads to Modal Grid
    function renderThreads(data) {
        const grid = document.getElementById('threadGrid');
        if (!grid) return;

        grid.innerHTML = '';

        if (!data || data.length === 0) {
            grid.innerHTML = `<p style="grid-column: 1/-1; text-align: center; color: #94a3b8; padding: 40px 0;">No threads found.</p>`;
            return;
        }

        data.forEach(item => {
            const isSelected = selectedThreadObj && selectedThreadObj.id === item.id;
            const card = document.createElement('div');
            card.className = `thread-card ${isSelected ? 'selected' : ''}`;
            card.onclick = () => selectCard(item);

            card.innerHTML = `
            <div class="thread-img-box">
                <img src="${item.image}" alt="${item.name}">
            </div>
            <div class="thread-code">${item.code || item.name}</div>
            <div class="thread-name">${item.name}</div>
            <button class="btn-select-thread">${isSelected ? 'Selected' : 'Select'}</button>
        `;
            grid.appendChild(card);
        });
    }

    // Change Category Tab
    function setThreadCategory(category, btnElement) {
        activeCategory = category;

        // Tab active class reset
        document.querySelectorAll('.tab-btn').forEach(btn => btn.classList.remove('active'));
        if (btnElement) {
            btnElement.classList.add('active');
        }

        filterThreads();
    }

    // Search Input Listener Fix
    document.addEventListener('DOMContentLoaded', () => {
        const threadSearch = document.getElementById('threadSearchInput');
        if (threadSearch) {
            threadSearch.addEventListener('input', filterThreads);
        }
    });

    function toggleThreadSlider(checkbox) {
        const sliderContainer = document.getElementById('threadSliderContainer');
        if (!sliderContainer) return;

        if (checkbox.checked) {
            // Checkbox checked: Hide slider & deselect thread selection
            sliderContainer.style.display = 'none';
            selectedThreadObj = null;

            const label = document.getElementById('selectedThreadLabel');
            if (label) {
                label.innerText = 'Let quilter choose';
            }
        } else {
            // Checkbox unchecked: Show slider back
            sliderContainer.style.display = 'flex';
            renderThreadSlider();
        }
    }
    const ThreadData = [{
            id: 1,
            name: 'Cream',
            code: 'OMNI #3004',
            category: 'Whites',
            image: 'https://precisiondesignquilting.shop/uploads/threads/1778095064751-omni-3004cream-jpg-w-1000-h-1000.webp'
        },
        {
            id: 2,
            name: 'Natural White',
            code: 'OMNI #3002',
            category: 'Whites',
            image: 'https://precisiondesignquilting.shop/uploads/threads/1778095053446-3002naturalwhite-jpg-w-1000-h-1000.webp'
        },
        {
            id: 3,
            name: 'Silver Dust',
            code: 'OMNI #3008',
            category: 'Neutrals',
            image: 'https://precisiondesignquilting.shop/uploads/threads/1778095071563-omni-3008sesameseeds.webp'
        },
        {
            id: 4,
            name: 'Sandstone',
            code: 'OMNI #3012',
            category: 'Warm',
            image: 'https://precisiondesignquilting.shop/uploads/threads/1778095096052-omni-3016sandstone-jpg-w-1000-h-1000.webp'
        },
        {
            id: 5,
            name: 'Taupe',
            code: 'OMNI #3015',
            category: 'Warm',
            image: 'https://precisiondesignquilting.shop/uploads/threads/1778095110870-omni-3010sandbar-jpg-w-1000-h-1000.webp'
        },
        {
            id: 6,
            name: 'Slate Gray',
            code: 'OMNI #3020',
            category: 'Cool',
            image: 'https://precisiondesignquilting.shop/uploads/threads/1778095123932-omni-3017canyon-jpg-w-1000-h-1000.webp'
        },
        {
            id: 7,
            name: 'Classic White',
            code: 'OMNI #3001',
            category: 'Whites',
            image: 'https://precisiondesignquilting.shop/uploads/threads/1778095123932-omni-3017canyon-jpg-w-1000-h-1000.webp'
        }
    ];

    let selectedThreadObj = null;
    let activeCategory = 'All';

    // Render Threads to Grid
    function renderThreads(data) {
        const grid = document.getElementById('threadGrid');
        grid.innerHTML = '';

        if (data.length === 0) {
            grid.innerHTML = `<p style="grid-column: 1/-1; text-align: center; color: #94a3b8; padding: 40px 0;">No threads found.</p>`;
            return;
        }

        data.forEach(item => {
            const isSelected = selectedThreadObj && selectedThreadObj.id === item.id;
            const card = document.createElement('div');
            card.className = `thread-card ${isSelected ? 'selected' : ''}`;
            card.onclick = () => selectCard(item);

            card.innerHTML = `
        <div class="thread-img-box">
          <img src="${item.image}" alt="${item.name}">
        </div>
        <div class="thread-code">${item.code || item.name}</div>
        <div class="thread-name">${item.name}</div>
        <button class="btn-select-thread">${isSelected ? 'Selected' : 'Select'}</button>
      `;
            grid.appendChild(card);
        });
    }
    // Horizontal Slider for Thread Images
    function renderThreadSlider() {
        const container = document.getElementById('threadSlider');
        if (!container) return;

        container.innerHTML = '';

        ThreadData.forEach(item => {
            const isSelected = selectedThreadObj && selectedThreadObj.id === item.id;

            const card = document.createElement('div');
            card.style.cssText = `
            min-width: 100px;
            max-width: 100px;
            height: 120px;
            background: #fff;
            border-radius: 8px;
            border: ${isSelected ? '2px solid #3b3f8c' : '1px solid #e2e8f0'};
            padding: 6px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            flex-shrink: 0;
            transition: all 0.2s ease;
        `;

            card.onclick = () => selectCard(item);

            card.innerHTML = `
            <div style="width: 100%; height: 70px; display: flex; align-items: center; justify-content: center;">
                <img src="${item.image}" alt="${item.name}" style="max-width: 100%; max-height: 100%; object-fit: contain; border-radius: 4px;">
            </div>
            <div style="font-size: 11px; font-weight: 600; color: #1e293b; margin-top: 6px; text-align: center; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; width: 100%;">
                ${item.name}
            </div>
        `;

            container.appendChild(card);
        });
    }

    // Fixed filterThreads function (Fixing patternsData bug)
    function filterThreads() {
        const query = document.getElementById('threadSearchInput')?.value.toLowerCase() || '';

        const filtered = ThreadData.filter(item => {
            const matchesSearch = item.name.toLowerCase().includes(query) || (item.code && item.code.toLowerCase().includes(query));
            const matchesCategory = activeCategory === 'All' || item.category === activeCategory;
            return matchesSearch && matchesCategory;
        });

        renderThreads(filtered);
    }

    // Updated selectCard to trigger both Modal Grid & Horizontal Slider update
    function selectCard(item) {
        selectedThreadObj = item;

        // Label Update
        const label = document.getElementById('selectedThreadLabel');
        if (label) {
            label.innerText = `${item.code || ''} - ${item.name}`;
        }

        renderThreads(ThreadData);
        renderThreadSlider(); // Refresh horizontal slider state
    }

    // DOMContentLoaded mein Call karein
    document.addEventListener('DOMContentLoaded', () => {
        selectPattern(selectedPatternId);
        renderThreadSlider(); // Render Thread Slider on Page Load
    });
    // Handle Card Click
    function selectCard(item) {
        selectedThreadObj = item;
        filterThreads(); // Re-render to update selected UI state
    }

    // Filter functionality (Search + Category)
    function filterThreads() {
        const query = document.getElementById('threadSearchInput').value.toLowerCase();

        const filtered = patternsData.filter(item => {
            const matchesSearch = item.name.toLowerCase().includes(query) || (item.code && item.code.toLowerCase().includes(query));
            const matchesCategory = activeCategory === 'All' || item.category === activeCategory;
            return matchesSearch && matchesCategory;
        });

        renderThreads(filtered);
    }

    // Change Category Tab
    function setThreadCategory(category, btnElement) {
        activeCategory = category;
        document.querySelectorAll('.tab-btn').forEach(btn => btn.classList.remove('active'));
        btnElement.classList.add('active');
        filterThreads();
    }

    // Modal Open & Close Triggers
    function openThreadModal() {
        document.getElementById('threadModalOverlay').style.display = 'flex';
        renderThreads(ThreadData);
    }

    function closeThreadModal() {
        document.getElementById('threadModalOverlay').style.display = 'none';
    }

    // Save Selection On Confirm
    function confirmThreadSelection() {
        if (selectedThreadObj) {
            document.getElementById('selectedThreadLabel').innerText = `${selectedThreadObj.code || ''} - ${selectedThreadObj.name}`;
            closeThreadModal();
        } else {
            alert('Please select a thread first.');
        }
    }
    // Database Array of Patterns
    const patternsData = [{
            id: 1,
            name: 'Abstract Waves',
            price: 3.25,
            category: 'Geometric',
            isTopChoice: false,
            image: 'https://precisiondesignquilting.shop/uploads/patterns/1778094898791-andes-cactus.webp'
        },
        {
            id: 2,
            name: "Aaron's Train",
            price: 3.00,
            category: 'Modern Abstract',
            isTopChoice: true,
            image: 'https://precisiondesignquilting.shop/uploads/patterns/1778094861439-abbie-e2e-1.webp'
        },
        {
            id: 3,
            name: 'Afton Ivy',
            price: 2.85,
            category: 'Floral',
            isTopChoice: false,
            image: 'https://precisiondesignquilting.shop/uploads/patterns/1778094889121-allhallowseveedge-to-edgerepeat.webp'
        },
        {
            id: 4,
            name: 'Spider Web',
            price: 2.50,
            category: 'Traditional',
            isTopChoice: false,
            image: 'https://precisiondesignquilting.shop/uploads/patterns/1778094889121-allhallowseveedge-to-edgerepeat.webp'
        },
        {
            id: 5,
            name: 'Geometric Grid',
            price: 4.10,
            category: 'Geometric',
            isTopChoice: false,
            image: 'https://precisiondesignquilting.shop/uploads/patterns/1784576297158-kacey-haycox.png'
        },
        {
            id: 6,
            name: 'Floral Rose',
            price: 3.75,
            category: 'Floral',
            isTopChoice: false,
            image: 'https://precisiondesignquilting.shop/uploads/patterns/1785270579104-img-5497-jpg.jpg'
        },
        {
            id: 7,
            name: 'Classic Heritage',
            price: 4.50,
            category: 'Traditional',
            isTopChoice: false,
            image: 'https://precisiondesignquilting.shop/uploads/patterns/1778094898791-andes-cactus.webp'
        }
    ];

    // Currently Selected Pattern ID (Default Aaron's Train: ID 2)
    let selectedPatternId = 2;

    // Render Function
    function renderPatterns() {
        const grid = document.getElementById('patternGrid');
        grid.innerHTML = '';

        const searchValue = document.getElementById('patternSearch').value.toLowerCase();
        const sortVal = document.getElementById('sortSelect').value;
        const maxPrice = parseFloat(document.getElementById('priceRange').value);

        // Get selected categories
        const selectedCategories = Array.from(document.querySelectorAll('.category-checkbox:checked')).map(cb => cb.value);

        // 1. Filter Logic
        let filtered = patternsData.filter(p => {
            const matchesSearch = p.name.toLowerCase().includes(searchValue);
            const matchesCategory = selectedCategories.length === 0 || selectedCategories.includes(p.category);
            const matchesPrice = p.price <= maxPrice;
            return matchesSearch && matchesCategory && matchesPrice;
        });

        // 2. Sort Logic
        if (sortVal === 'high-low') filtered.sort((a, b) => b.price - a.price);
        if (sortVal === 'low-high') filtered.sort((a, b) => a.price - b.price);
        if (sortVal === 'name') filtered.sort((a, b) => a.name.localeCompare(b.name));

        // Update footer count text
        document.getElementById('patternCountLabel').innerText = `Showing ${filtered.length} of ${patternsData.length} patterns`;

        // 3. Render Cards HTML
        filtered.forEach(p => {
            const isSelected = p.id === selectedPatternId;

            const card = document.createElement('div');
            card.className = `pattern-card ${isSelected ? 'selected' : ''}`;

            card.innerHTML = `
                    <div class="check-badge">✓</div>
                    ${p.isTopChoice ? '<span class="top-choice-tag">TOP CHOICE</span>' : ''}
                    
                    <div style="width: 100%; height: 160px; background: #fdfdfd; border-radius: 8px; border: 1px solid #f1f5f9; display: flex; align-items: center; justify-content: center; margin-bottom: 12px;">
                        ${p.image ? `<img src="${p.image}" alt="${p.name}" style="max-width: 100%; max-height: 100%; object-fit: contain; border-radius: 6px;">` : '<span style="color: #94a3b8; font-size: 12px;">No Image</span>'}
                    </div>
                    
                    <div style="width: 100%; text-align: left;">
                        <h4 style="margin: 0; font-size: 15px; color: #1e293b; font-family: Georgia, serif;">${p.name}</h4>
                        <p style="margin: 4px 0 12px 0; font-size: 12px; color: #64748b;">${p.price.toFixed(2)} cents / sq inch</p>
                    </div>

                    <button class="select-btn" onclick="selectPattern(${p.id})">
                        ${isSelected ? 'Selected' : 'Select Pattern'}
                    </button>
                `;

            grid.appendChild(card);
        });
    }

    // Action Handlers
    function selectPattern(id) {
        selectedPatternId = id;
        renderPatterns(); // Re-render to update blue active border & text
    }

    function openPatternModal() {
        document.getElementById('patternModal').style.display = 'flex';
        renderPatterns();
    }

    function closePatternModal() {
        document.getElementById('patternModal').style.display = 'none';
    }

    function confirmSelection() {
        const selectedObj = patternsData.find(p => p.id === selectedPatternId);
        if (selectedObj) {
            alert(`Selected Pattern: ${selectedObj.name}`);
        }
        closePatternModal();
    }

    // Attach Event Listeners for Live Filtering
    document.getElementById('patternSearch').addEventListener('input', renderPatterns);
    document.getElementById('sortSelect').addEventListener('change', renderPatterns);
    document.getElementById('priceRange').addEventListener('input', function(e) {
        document.getElementById('priceRangeVal').innerText = parseFloat(e.target.value).toFixed(2) + ' cents';
        renderPatterns();
    });

    document.querySelectorAll('.category-checkbox').forEach(cb => {
        cb.addEventListener('change', renderPatterns);
    });
    const patternsDatas = [{
            id: 1,
            name: 'Abstract Waves',
            price: 3.25,
            category: 'Geometric',
            isTopChoice: false,
            image: 'https://precisiondesignquilting.shop/uploads/patterns/1778094898791-andes-cactus.webp'
        },
        {
            id: 2,
            name: "Aaron's Train",
            price: 3.00,
            category: 'Modern Abstract',
            isTopChoice: true,
            image: 'https://precisiondesignquilting.shop/uploads/patterns/1778094861439-abbie-e2e-1.webp'
        },
        {
            id: 3,
            name: 'Afton Ivy',
            price: 2.85,
            category: 'Floral',
            isTopChoice: false,
            image: 'https://precisiondesignquilting.shop/uploads/patterns/1778094889121-allhallowseveedge-to-edgerepeat.webp'
        },
        {
            id: 4,
            name: 'Spider Web',
            price: 2.50,
            category: 'Traditional',
            isTopChoice: false,
            image: 'https://precisiondesignquilting.shop/uploads/patterns/1778094889121-allhallowseveedge-to-edgerepeat.webp'
        },
        {
            id: 5,
            name: 'Geometric Grid',
            price: 4.10,
            category: 'Geometric',
            isTopChoice: false,
            image: 'https://precisiondesignquilting.shop/uploads/patterns/1784576297158-kacey-haycox.png'
        },
        {
            id: 6,
            name: 'Floral Rose',
            price: 3.75,
            category: 'Floral',
            isTopChoice: false,
            image: 'https://precisiondesignquilting.shop/uploads/patterns/1785270579104-img-5497-jpg.jpg'
        },
        {
            id: 7,
            name: 'Classic Heritage',
            price: 4.50,
            category: 'Traditional',
            isTopChoice: false,
            image: 'https://precisiondesignquilting.shop/uploads/patterns/1778094898791-andes-cactus.webp'
        }
    ];

    let selectedPatternIds = 2; // Default to Aaron's Train

    // Render Slider Cards
    function renderSlider() {
        const sliderContainer = document.getElementById('patternSlider');
        if (!sliderContainer) return;

        sliderContainer.innerHTML = '';
        patternsDatas.forEach(p => {
            const isSelected = p.id === selectedPatternIds;
            const slideItem = document.createElement('div');
            slideItem.style.cssText = `
            min-width: 130px;
            max-width: 130px;
            height: 180px;
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-sizing: border-box;
            cursor: pointer;
            transition: all 0.2s ease;
            border: ${isSelected ? '2px solid #3b3f8c' : '1px solid #cbd5e1'};
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 6px;
        `;
            slideItem.onclick = () => selectPattern(p.id);
            slideItem.innerHTML = `<img src="${p.image}" alt="${p.name}" style="width: 100%; height: 100%; object-fit: contain;">`;
            sliderContainer.appendChild(slideItem);
        });
    }

    // Render Modal Grid
    function renderPatterns() {
        const grid = document.getElementById('patternGrid');
        if (!grid) return;

        let filtered = filterData();
        grid.innerHTML = '';

        filtered.forEach(p => {
            const isSelected = p.id === selectedPatternId;
            const card = document.createElement('div');
            card.style.cssText = `
            background: #fff;
            border-radius: 12px;
            border: ${isSelected ? '2px solid #3b3f8c' : '1px solid #e2e8f0'};
            padding: 12px;
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
        `;

            card.innerHTML = `
            ${p.isTopChoice ? '<span style="position: absolute; top: 8px; left: 8px; background: #e0e7ff; color: #3730a3; font-size: 9px; font-weight: 700; padding: 2px 6px; border-radius: 4px;">TOP CHOICE</span>' : ''}
            <div style="width: 100%; height: 140px; margin-bottom: 10px;">
                <img src="${p.image}" alt="${p.name}" style="width: 100%; height: 100%; object-fit: contain;">
            </div>
            <h4 style="margin: 0; font-size: 14px; color: #1e293b; text-align: center; width: 100%; font-family: Georgia, serif;">${p.name}</h4>
            <p style="margin: 4px 0 10px 0; font-size: 12px; color: #64748b;">${p.price.toFixed(2)} cents / sq in</p>
            <button onclick="selectPattern(${p.id})" style="width: 100%; background: ${isSelected ? '#3b3f8c' : '#f1f5f9'}; color: ${isSelected ? '#fff' : '#475569'}; border: none; padding: 8px; border-radius: 6px; font-size: 12px; font-weight: 600; cursor: pointer;">
                ${isSelected ? 'Selected' : 'Select Pattern'}
            </button>
        `;
            grid.appendChild(card);
        });

        const countLabel = document.getElementById('patternCountLabel');
        if (countLabel) {
            countLabel.innerText = `Showing ${filtered.length} of ${patternsData.length} patterns`;
        }
    }

    // Global Selection Manager
    function selectPattern(id) {
        selectedPatternId = id;
        const item = patternsData.find(p => p.id === id);
        if (item) {
            document.getElementById('selectedPatternLabel').innerText = item.name;
        }
        renderSlider();
        renderPatterns();
    }

    // Slide Control
    function slidePatterns(direction) {
        const slider = document.getElementById('patternSlider');
        slider.scrollBy({
            left: direction * 142,
            behavior: 'smooth'
        });
    }

    function slideThreads(direction) {
        const slider = document.getElementById('threadSlider');
        slider.scrollBy({
            left: direction * 142,
            behavior: 'smooth'
        });
    }

    function slideBackings(direction) {
        const slider = document.getElementById('BackingSlider');
        slider.scrollBy({
            left: direction * 142,
            behavior: 'smooth'
        });
    }

    // Modal Toggle Controls
    function openPatternModal() {
        document.getElementById('patternModal').style.display = 'flex';
        renderPatterns();
    }

    function closePatternModal() {
        document.getElementById('patternModal').style.display = 'none';
    }

    // Filter Logic Helper
    function filterData() {
        const searchText = (document.getElementById('patternSearch')?.value || '').toLowerCase();
        const selectedCats = Array.from(document.querySelectorAll('.category-checkbox:checked')).map(cb => cb.value);
        const maxPrice = parseFloat(document.getElementById('priceRange')?.value || 5.00);
        const sortBy = document.getElementById('sortSelect')?.value || 'high-low';

        let result = patternsData.filter(p => {
            const matchesSearch = p.name.toLowerCase().includes(searchText);
            const matchesCat = selectedCats.length === 0 || selectedCats.includes(p.category);
            const matchesPrice = p.price <= maxPrice;
            return matchesSearch && matchesCat && matchesPrice;
        });

        if (sortBy === 'high-low') result.sort((a, b) => b.price - a.price);
        else if (sortBy === 'low-high') result.sort((a, b) => a.price - b.price);
        else if (sortBy === 'name') result.sort((a, b) => a.name.localeCompare(b.name));

        return result;
    }

    function filterPatterns() {
        renderPatterns();
    }

    function updatePriceLabel(val) {
        document.getElementById('priceRangeVal').innerText = `${parseFloat(val).toFixed(2)} cents`;
    }

    // Initial Render
    document.addEventListener('DOMContentLoaded', () => {
        selectPattern(selectedPatternId);
    });
</script>

<?php include_once 'includes/footer.php'; ?>