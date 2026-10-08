<?php
$page_title = "Quilting Patterns | Precision Design Quilting";
$current_page = "pattern";
include_once 'includes/header.php';

// Dynamic pattern
$patterns = [
    [
        "id" => 1,
        "title" => "From Utah To Everywhere",
        "category" => "edge-to-edge",
        "category_name" => "Edge-to-Edge",
        "style" => "modern",
        "style_name" => "Modern Geometric",
        "density" => "medium",
        "density_name" => "Medium Density",
        "price" => "$14.99",
        "price_val" => 14.99,
        "image" => "assets/img/from-utah.png",
        "badge" => "Popular",
        "badge_class" => "badge-popular",
        "description" => "A sleek edge-to-edge quilting pattern featuring clean flowing geometric waves."
    ],
    [
        "id" => 2,
        "title" => "Edge-to-Edge Classic",
        "category" => "edge-to-edge",
        "category_name" => "Edge-to-Edge",
        "style" => "traditional",
        "style_name" => "Traditional",
        "density" => "light",
        "density_name" => "Light Density",
        "price" => "$12.50",
        "price_val" => 12.50,
        "image" => "assets/img/edge-to-edge.png",
        "badge" => "Featured",
        "badge_class" => "",
        "description" => "Classic continuous digital quilting design for consistent and elegant texture."
    ],
    [
        "id" => 3,
        "title" => "Treasured Keepsakes",
        "category" => "custom",
        "category_name" => "Custom Keepsakes",
        "style" => "floral",
        "style_name" => "Floral & Nature",
        "density" => "dense",
        "density_name" => "Dense Stitching",
        "price" => "$18.00",
        "price_val" => 18.00,
        "image" => "assets/img/treasured.png",
        "badge" => "Best Seller",
        "badge_class" => "badge-popular",
        "description" => "Intricate floral and heart quilting motifs designed to elevate heirloom quilts."
    ],
    [
        "id" => 4,
        "title" => "Modern Diamond Edge",
        "category" => "edge-to-edge",
        "category_name" => "Edge-to-Edge",
        "style" => "modern",
        "style_name" => "Modern Geometric",
        "density" => "medium",
        "density_name" => "Medium Density",
        "price" => "$15.00",
        "price_val" => 15.00,
        "image" => "assets/img/edge.png",
        "badge" => "New",
        "badge_class" => "",
        "description" => "Bold diamond geometric stitches perfect for modern quilt tops."
    ],
    [
        "id" => 5,
        "title" => "Botanical Harmony",
        "category" => "floral",
        "category_name" => "Floral & Nature",
        "style" => "floral",
        "style_name" => "Floral & Nature",
        "density" => "dense",
        "density_name" => "Dense Stitching",
        "price" => "$16.50",
        "price_val" => 16.50,
        "image" => "assets/img/story.png",
        "badge" => "Organic",
        "badge_class" => "",
        "description" => "Soft botanical leaves flowing seamlessly across the quilt top."
    ],
    [
        "id" => 6,
        "title" => "Precision Grid Waves",
        "category" => "edge-to-edge",
        "category_name" => "Edge-to-Edge",
        "style" => "minimalist",
        "style_name" => "Minimalist",
        "density" => "light",
        "density_name" => "Light Density",
        "price" => "$13.99",
        "price_val" => 13.99,
        "image" => "assets/img/mission.png",
        "badge" => "Minimalist",
        "badge_class" => "",
        "description" => "Clean minimal lines designed for a subtle textured finish."
    ]
];

// PHP Server-Side Filter Processing
$selected_category = $_GET['category'] ?? 'all';
$selected_style = $_GET['style'] ?? 'all';
$selected_density = $_GET['density'] ?? 'all';
$search_query = isset($_GET['search']) ? trim($_GET['search']) : '';

$filtered_patterns = array_filter($patterns, function($item) use ($selected_category, $selected_style, $selected_density, $search_query) {
    if ($selected_category !== 'all' && $item['category'] !== $selected_category) return false;
    if ($selected_style !== 'all' && $item['style'] !== $selected_style) return false;
    if ($selected_density !== 'all' && $item['density'] !== $selected_density) return false;
    if (!empty($search_query) && stripos($item['title'], $search_query) === false && stripos($item['description'], $search_query) === false) return false;
    return true;
});
?>

    <!-- Pattern Banner -->
    <section class="position-relative text-white d-flex align-items-center justify-content-center" style="background: url('assets/img/hero-banner.png') no-repeat center center; background-size: cover; padding-top: 90px; padding-bottom: 90px;">
        <div class="position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(31, 58, 91, 0.80);"></div>
        <div class="container position-relative z-1 text-center py-4">
            <h1 class="display-4 fw-bold mb-2">QUILTING PATTERNS</h1>
            <p class="lead mb-0 fs-5">Browse our edge-to-edge digital quilting catalog</p>
        </div>
    </section>

    <!-- Main Content: Filters + Product Cards Row -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row g-4">
                
                <div class="col-lg-3 col-md-4">
                    <div class="filter-sidebar">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h4 class="filter-title mb-0 border-0 p-0"><i class="fa-solid fa-sliders me-2"></i>Filters</h4>
                            <span class="badge bg-dark rounded-pill px-3 py-2" id="activeFilterCount">All Patterns</span>
                        </div>

                        <div class="filter-group">
                            <label class="filter-group-title">Search</label>
                            <div class="position-relative">
                                <input type="text" id="searchInput" value="<?php echo htmlspecialchars($search_query); ?>" class="form-control filter-search-input pe-4" placeholder="Search patterns...">
                            </div>
                        </div>

                        <div class="filter-group">
                            <label class="filter-group-title">Category</label>
                            <div class="filter-checkbox-list">
                                <div class="form-check">
                                    <input class="form-check-input filter-category" type="radio" name="categoryFilter" id="cat_all" value="all" <?php echo ($selected_category == 'all') ? 'checked' : ''; ?>>
                                    <label class="form-check-label" for="cat_all">All Categories</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input filter-category" type="radio" name="categoryFilter" id="cat_edge" value="edge-to-edge" <?php echo ($selected_category == 'edge-to-edge') ? 'checked' : ''; ?>>
                                    <label class="form-check-label" for="cat_edge">Edge-to-Edge</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input filter-category" type="radio" name="categoryFilter" id="cat_custom" value="custom" <?php echo ($selected_category == 'custom') ? 'checked' : ''; ?>>
                                    <label class="form-check-label" for="cat_custom">Custom Keepsakes</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input filter-category" type="radio" name="categoryFilter" id="cat_floral" value="floral" <?php echo ($selected_category == 'floral') ? 'checked' : ''; ?>>
                                    <label class="form-check-label" for="cat_floral">Floral & Nature</label>
                                </div>
                            </div>
                        </div>

                        <div class="filter-group">
                            <label class="filter-group-title">Design Style</label>
                            <div class="filter-checkbox-list">
                                <div class="form-check">
                                    <input class="form-check-input filter-style" type="radio" name="styleFilter" id="style_all" value="all" <?php echo ($selected_style == 'all') ? 'checked' : ''; ?>>
                                    <label class="form-check-label" for="style_all">All Styles</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input filter-style" type="radio" name="styleFilter" id="style_modern" value="modern" <?php echo ($selected_style == 'modern') ? 'checked' : ''; ?>>
                                    <label class="form-check-label" for="style_modern">Modern Geometric</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input filter-style" type="radio" name="styleFilter" id="style_traditional" value="traditional" <?php echo ($selected_style == 'traditional') ? 'checked' : ''; ?>>
                                    <label class="form-check-label" for="style_traditional">Traditional</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input filter-style" type="radio" name="styleFilter" id="style_minimalist" value="minimalist" <?php echo ($selected_style == 'minimalist') ? 'checked' : ''; ?>>
                                    <label class="form-check-label" for="style_minimalist">Minimalist</label>
                                </div>
                            </div>
                        </div>

                        <div class="filter-group">
                            <label class="filter-group-title">Stitch Density</label>
                            <div class="filter-checkbox-list">
                                <div class="form-check">
                                    <input class="form-check-input filter-density" type="radio" name="densityFilter" id="density_all" value="all" <?php echo ($selected_density == 'all') ? 'checked' : ''; ?>>
                                    <label class="form-check-label" for="density_all">Any Density</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input filter-density" type="radio" name="densityFilter" id="density_light" value="light" <?php echo ($selected_density == 'light') ? 'checked' : ''; ?>>
                                    <label class="form-check-label" for="density_light">Light</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input filter-density" type="radio" name="densityFilter" id="density_medium" value="medium" <?php echo ($selected_density == 'medium') ? 'checked' : ''; ?>>
                                    <label class="form-check-label" for="density_medium">Medium</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input filter-density" type="radio" name="densityFilter" id="density_dense" value="dense" <?php echo ($selected_density == 'dense') ? 'checked' : ''; ?>>
                                    <label class="form-check-label" for="density_dense">Dense</label>
                                </div>
                            </div>
                        </div>

                        <button type="button" id="btnResetFilters" class="btn btn-reset-filters">
                            <i class="fa-solid fa-arrows-rotate me-2"></i>Reset All Filters
                        </button>
                    </div>
                </div>

                <div class="col-lg-9 col-md-8">

                    <div class="results-bar">
                        <div class="text-white fs-6">
                            Showing <strong id="patternCountDisplay" class="text-white"><?php echo count($filtered_patterns); ?></strong> patterns
                        </div>

                        <div class="d-flex align-items-center gap-2">
                            <label for="sortSelect" class="form-label mb-0 small fw-semibold text-white d-none d-sm-inline">Sort By:</label>
                            <select id="sortSelect" class="form-select form-select-sm border-secondary-subtle" style="width: auto; border-radius: 20px;">
                                <option value="default">Featured</option>
                                <option value="price-low">Price: Low to High</option>
                                <option value="price-high">Price: High to Low</option>
                                <option value="name-asc">Name: A to Z</option>
                            </select>
                        </div>
                    </div>

                    <div class="row g-4" id="patternsContainer">
                        <?php if (empty($filtered_patterns)): ?>
                            <div class="col-12 text-center py-5" id="noResultsMsg">
                                <i class="fa-solid fa-magnifying-glass fs-1 text-muted mb-3 d-block"></i>
                                <h4 class="fw-normal">No Patterns Found</h4>
                                <p class="text-muted">Try adjusting your filters or search keywords.</p>
                            </div>
                        <?php else: ?>
                            <?php foreach ($filtered_patterns as $item): ?>
                                <div class="col-lg-4 col-sm-6 pattern-item-wrapper" 
                                     data-category="<?php echo $item['category']; ?>"
                                     data-style="<?php echo $item['style']; ?>"
                                     data-density="<?php echo $item['density']; ?>"
                                     data-title="<?php echo strtolower($item['title']); ?>"
                                     data-price="<?php echo $item['price_val']; ?>">
                                    
                                    <div class="pattern-card-item">
                                        <div class="pattern-card-thumb">
                                            <img src="<?php echo $item['image']; ?>" alt="<?php echo htmlspecialchars($item['title']); ?>">
                                            <?php if (!empty($item['badge'])): ?>
                                                <span class="pattern-badge <?php echo $item['badge_class']; ?>">
                                                    <?php echo $item['badge']; ?>
                                                </span>
                                            <?php endif; ?>
                                        </div>
                                        
                                        <div class="pattern-card-body">
                                            <span class="pattern-category-tag"><?php echo $item['category_name']; ?> &bull; <?php echo $item['density_name']; ?></span>
                                            <h5 class="pattern-title"><?php echo $item['title']; ?></h5>
                                            <p class="pattern-desc"><?php echo $item['description']; ?></p>
                                            
                                            <div class="pattern-meta">
                                                <div class="pattern-price"><?php echo $item['price']; ?></div>
                                                <a href="#" class="btn-pattern-action">
                                                    Select <i class="fa-solid fa-arrow-right ms-1"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('searchInput');
        const categoryFilters = document.querySelectorAll('.filter-category');
        const styleFilters = document.querySelectorAll('.filter-style');
        const densityFilters = document.querySelectorAll('.filter-density');
        const sortSelect = document.getElementById('sortSelect');
        const btnReset = document.getElementById('btnResetFilters');
        const container = document.getElementById('patternsContainer');
        const items = document.querySelectorAll('.pattern-item-wrapper');
        const countDisplay = document.getElementById('patternCountDisplay');

        function filterAndSortItems() {
            const searchVal = searchInput.value.toLowerCase().trim();
            const selectedCat = document.querySelector('.filter-category:checked')?.value || 'all';
            const selectedStyle = document.querySelector('.filter-style:checked')?.value || 'all';
            const selectedDensity = document.querySelector('.filter-density:checked')?.value || 'all';
            const sortVal = sortSelect.value;

            let visibleCount = 0;
            let itemsArray = Array.from(items);

            itemsArray.forEach(item => {
                const title = item.getAttribute('data-title');
                const cat = item.getAttribute('data-category');
                const style = item.getAttribute('data-style');
                const density = item.getAttribute('data-density');

                const matchesSearch = title.includes(searchVal);
                const matchesCat = selectedCat === 'all' || cat === selectedCat;
                const matchesStyle = selectedStyle === 'all' || style === selectedStyle;
                const matchesDensity = selectedDensity === 'all' || density === selectedDensity;

                if (matchesSearch && matchesCat && matchesStyle && matchesDensity) {
                    item.style.display = '';
                    visibleCount++;
                } else {
                    item.style.display = 'none';
                }
            });

            itemsArray.sort((a, b) => {
                const priceA = parseFloat(a.getAttribute('data-price'));
                const priceB = parseFloat(b.getAttribute('data-price'));
                const titleA = a.getAttribute('data-title');
                const titleB = b.getAttribute('data-title');

                if (sortVal === 'price-low') return priceA - priceB;
                if (sortVal === 'price-high') return priceB - priceA;
                if (sortVal === 'name-asc') return titleA.localeCompare(titleB);
                return 0; 
            });

            itemsArray.forEach(item => container.appendChild(item));

            countDisplay.textContent = visibleCount;
        }

        searchInput?.addEventListener('input', filterAndSortItems);
        categoryFilters.forEach(f => f.addEventListener('change', filterAndSortItems));
        styleFilters.forEach(f => f.addEventListener('change', filterAndSortItems));
        densityFilters.forEach(f => f.addEventListener('change', filterAndSortItems));
        sortSelect?.addEventListener('change', filterAndSortItems);

        btnReset?.addEventListener('click', function() {
            searchInput.value = '';
            document.getElementById('cat_all').checked = true;
            document.getElementById('style_all').checked = true;
            document.getElementById('density_all').checked = true;
            sortSelect.value = 'default';
            filterAndSortItems();
        });
    });
    </script>

<?php include_once 'includes/footer.php'; ?>
