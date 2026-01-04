<section class="categories-section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Shop by Category</h2>
            <p class="section-subtitle">Explore our wide range of fresh products</p>
        </div>

        <div class="categories-grid">
            <!-- Vegetables -->
            <div class="category-card">
                <div class="category-image-wrapper">
                    <div class="category-image">
                        <img src="{{ asset('assets/images/categories/vegetables.png') }}" alt="Vegetables">
                    </div>
                </div>
                <h3 class="category-name">Vegetables</h3>
            </div>

            <!-- Fruits -->
            <div class="category-card">
                <div class="category-image-wrapper">
                    <div class="category-image">
                        <img src="{{ asset('assets/images/categories/fruits.png') }}" alt="Fruits">
                    </div>
                </div>
                <h3 class="category-name">Fruits</h3>
            </div>

            <!-- Dairy -->
            <div class="category-card">
                <div class="category-image-wrapper">
                    <div class="category-image">
                        <img src="{{ asset('assets/images/categories/dairy.png') }}" alt="Dairy">
                    </div>
                </div>
                <h3 class="category-name">Dairy</h3>
            </div>

            <!-- Bakery -->
            <div class="category-card">
                <div class="category-image-wrapper">
                    <div class="category-image">
                        <img src="{{ asset('assets/images/categories/bakery.png') }}" alt="Bakery">
                    </div>
                </div>
                <h3 class="category-name">Bakery</h3>
            </div>

            <!-- Meat & Seafood -->
            <div class="category-card">
                <div class="category-image-wrapper">
                    <div class="category-image">
                        <img src="{{ asset('assets/images/categories/meat-seafood.png') }}" alt="Meat & Seafood">
                    </div>
                </div>
                <h3 class="category-name">Meat & Seafood</h3>
            </div>

            <!-- Beverages -->
            <div class="category-card">
                <div class="category-image-wrapper">
                    <div class="category-image">
                        <img src="{{ asset('assets/images/categories/beverages.png') }}" alt="Beverages">
                    </div>
                </div>
                <h3 class="category-name">Beverages</h3>
            </div>

            <!-- Snacks -->
            <div class="category-card">
                <div class="category-image-wrapper">
                    <div class="category-image">
                        <img src="{{ asset('assets/images/categories/snacks.png') }}" alt="Snacks">
                    </div>
                </div>
                <h3 class="category-name">Snacks</h3>
            </div>

            <!-- Frozen Foods -->
            <div class="category-card">
                <div class="category-image-wrapper">
                    <div class="category-image">
                        <img src="{{ asset('assets/images/categories/frozen-foods.png') }}" alt="Frozen Foods">
                    </div>
                </div>
                <h3 class="category-name">Frozen Foods</h3>
            </div>

            <!-- Personal Care -->
            <div class="category-card">
                <div class="category-image-wrapper">
                    <div class="category-image">
                        <img src="{{ asset('assets/images/categories/personal-care.png') }}" alt="Personal Care">
                    </div>
                </div>
                <h3 class="category-name">Personal Care</h3>
            </div>

            <!-- Household -->
            <div class="category-card">
                <div class="category-image-wrapper">
                    <div class="category-image">
                        <img src="{{ asset('assets/images/categories/household.png') }}" alt="Household">
                    </div>
                </div>
                <h3 class="category-name">Household</h3>
            </div>

            <!-- Baby Products -->
            <div class="category-card">
                <div class="category-image-wrapper">
                    <div class="category-image">
                        <img src="{{ asset('assets/images/categories/baby-products.png') }}" alt="Baby Products">
                    </div>
                </div>
                <h3 class="category-name">Baby Products</h3>
            </div>

            <!-- Pet Supplies -->
            <div class="category-card">
                <div class="category-image-wrapper">
                    <div class="category-image">
                        <img src="{{ asset('assets/images/categories/pet-supplies.png') }}" alt="Pet Supplies">
                    </div>
                </div>
                <h3 class="category-name">Pet Supplies</h3>
            </div>
        </div>

        <!-- All Categories Button -->
        <div class="all-categories-btn-wrapper">
            <button class="all-categories-btn" data-bs-toggle="modal" data-bs-target="#categoriesModal">
                <i class="fas fa-th"></i> View All Categories
            </button>
        </div>
    </div>
</section>

<!-- Categories Modal -->
<div class="modal fade" id="categoriesModal" tabindex="-1" aria-labelledby="categoriesModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="categoriesModalLabel">
                    <i class="fas fa-list"></i> All Categories & Subcategories
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <div class="categories-subcategories-container">
                    <!-- Left Side: Categories List -->
                    <div class="modal-categories-sidebar">
                        <div class="sidebar-header">
                            <h6>Categories</h6>
                        </div>
                        <div class="categories-list">
                            <div class="sidebar-category-item active" data-category="vegetables">
                                <img src="{{ asset('assets/images/categories/vegetables.png') }}" alt="Vegetables">
                                <span>Vegetables</span>
                                <i class="fas fa-chevron-right"></i>
                            </div>
                            <div class="sidebar-category-item" data-category="fruits">
                                <img src="{{ asset('assets/images/categories/fruits.png') }}" alt="Fruits">
                                <span>Fruits</span>
                                <i class="fas fa-chevron-right"></i>
                            </div>
                            <div class="sidebar-category-item" data-category="dairy">
                                <img src="{{ asset('assets/images/categories/dairy.png') }}" alt="Dairy">
                                <span>Dairy</span>
                                <i class="fas fa-chevron-right"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Right Side: Subcategories Grid -->
                    <div class="modal-subcategories-content">
                        <div class="subcategories-header">
                            <h6 id="selectedCategoryName">Vegetables</h6>
                            <p id="selectedCategoryDesc">Fresh & Organic</p>
                        </div>
                        
                        <!-- Vegetables Subcategories -->
                        <div class="subcategories-grid" id="subcategories-vegetables">
                            <div class="subcategory-item">
                                <div class="subcategory-image">
                                    <img src="{{ asset('assets/images/subcategories/leafy-greens.png') }}" alt="Leafy Greens">
                                </div>
                                <h6>Leafy Greens</h6>
                            </div>
                            <div class="subcategory-item">
                                <div class="subcategory-image">
                                    <img src="{{ asset('assets/images/subcategories/root-vegetables.png') }}" alt="Root Vegetables">
                                </div>
                                <h6>Root Vegetables</h6>
                            </div>
                            <div class="subcategory-item">
                                <div class="subcategory-image">
                                    <img src="{{ asset('assets/images/categories/vegetables.png') }}" alt="Tomatoes">
                                </div>
                                <h6>Tomatoes</h6>
                            </div>
                            <div class="subcategory-item">
                                <div class="subcategory-image">
                                    <img src="{{ asset('assets/images/categories/vegetables.png') }}" alt="Peppers">
                                </div>
                                <h6>Peppers</h6>
                            </div>
                        </div>

                        <!-- Fruits Subcategories -->
                        <div class="subcategories-grid" id="subcategories-fruits" style="display: none;">
                            <div class="subcategory-item">
                                <div class="subcategory-image">
                                    <img src="{{ asset('assets/images/subcategories/apples.png') }}" alt="Apples">
                                </div>
                                <h6>Apples</h6>
                            </div>
                            <div class="subcategory-item">
                                <div class="subcategory-image">
                                    <img src="{{ asset('assets/images/subcategories/bananas.png') }}" alt="Bananas">
                                </div>
                                <h6>Bananas</h6>
                            </div>
                            <div class="subcategory-item">
                                <div class="subcategory-image">
                                    <img src="{{ asset('assets/images/categories/fruits.png') }}" alt="Berries">
                                </div>
                                <h6>Berries</h6>
                            </div>
                            <div class="subcategory-item">
                                <div class="subcategory-image">
                                    <img src="{{ asset('assets/images/categories/fruits.png') }}" alt="Citrus">
                                </div>
                                <h6>Citrus</h6>
                            </div>
                        </div>

                        <!-- Dairy Subcategories -->
                        <div class="subcategories-grid" id="subcategories-dairy" style="display: none;">
                            <div class="subcategory-item">
                                <div class="subcategory-image">
                                    <img src="{{ asset('assets/images/subcategories/milk.png') }}" alt="Milk">
                                </div>
                                <h6>Milk</h6>
                            </div>
                            <div class="subcategory-item">
                                <div class="subcategory-image">
                                    <img src="{{ asset('assets/images/subcategories/cheese.png') }}" alt="Cheese">
                                </div>
                                <h6>Cheese</h6>
                            </div>
                            <div class="subcategory-item">
                                <div class="subcategory-image">
                                    <img src="{{ asset('assets/images/categories/dairy.png') }}" alt="Yogurt">
                                </div>
                                <h6>Yogurt</h6>
                            </div>
                            <div class="subcategory-item">
                                <div class="subcategory-image">
                                    <img src="{{ asset('assets/images/categories/dairy.png') }}" alt="Butter">
                                </div>
                                <h6>Butter</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const categoryItems = document.querySelectorAll('.sidebar-category-item');
            const subcategoryGrids = document.querySelectorAll('.subcategories-grid');
            const categoryNameEl = document.getElementById('selectedCategoryName');
            const categoryDescEl = document.getElementById('selectedCategoryDesc');

            const categoryData = {
                'vegetables': { name: 'Vegetables', desc: 'Fresh & Organic' },
                'fruits': { name: 'Fruits', desc: 'Sweet & Juicy' },
                'dairy': { name: 'Dairy', desc: 'Pure & Fresh' }
            };

            categoryItems.forEach(item => {
                item.addEventListener('click', function () {
                    // Remove active class from all items
                    categoryItems.forEach(i => i.classList.remove('active'));
                    
                    // Add active class to clicked item
                    this.classList.add('active');
                    
                    // Get selected category
                    const category = this.getAttribute('data-category');
                    
                    // Update header
                    if (categoryData[category]) {
                        categoryNameEl.textContent = categoryData[category].name;
                        categoryDescEl.textContent = categoryData[category].desc;
                    }
                    
                    // Hide all subcategory grids
                    subcategoryGrids.forEach(grid => {
                        grid.style.display = 'none';
                    });
                    
                    // Show selected subcategory grid
                    const selectedGrid = document.getElementById('subcategories-' + category);
                    if (selectedGrid) {
                        selectedGrid.style.display = 'grid';
                    }
                });
            });
        });
    </script>
@endpush