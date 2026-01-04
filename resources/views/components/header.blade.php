
    <!-- Top Bar -->
    <div class="top-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <span><i class="fas fa-phone"></i> +1 234 567 8900</span>
                    <span class="ms-3"><i class="fas fa-envelope"></i> info@freshmarket.com</span>
                </div>
                <div class="col-md-6 text-end">
                    <a href="#" class="me-3"><i class="fas fa-user"></i> Sign In</a>
                    <a href="#"><i class="fas fa-heart"></i> Wishlist</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Header -->
    <header class="main-header">
        <div class="container py-3">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <a href="#" class="logo">
                        <i class="fas fa-shopping-basket"></i>
                        <span>FreshMarket</span>
                    </a>
                </div>
                <div class="col-md-6">
                    <div class="search-bar">
                        <input type="text" id="searchInput" placeholder="Search for products, brands, and more...">
                        <button id="searchBtn"><i class="fas fa-search"></i></button>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="header-icons justify-content-end">
                        <div class="header-icon" id="accountIcon">
                            <i class="fas fa-user-circle"></i>
                        </div>
                        <div class="header-icon" id="wishlistIcon">
                            <i class="fas fa-heart"></i>
                            <span class="badge">3</span>
                        </div>
                        <div class="header-icon" id="cartIcon">
                            <i class="fas fa-shopping-cart"></i>
                            <span class="badge">5</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation Bar -->
        <nav class="nav-bar">
            <div class="container">
                <ul class="nav justify-content-center">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                            <i class="fas fa-bars me-1"></i> Categories
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"><i class="fas fa-carrot me-2"></i> Vegetables</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-apple-alt me-2"></i> Fruits</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-cheese me-2"></i> Dairy</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-bread-slice me-2"></i> Bakery</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-drumstick-bite me-2"></i> Meat & Seafood</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">Deals</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Organic</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Fresh Produce</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>



    @push('scripts')
        <script>
            $(document).ready(function() {
                // Sticky header animation on scroll
            $(window).scroll(function() {
                if ($(this).scrollTop() > 50) {
                    $('.main-header').addClass('scrolled');
                } else {
                    $('.main-header').removeClass('scrolled');
                }
            });

            // Icon click animations
            $('.header-icon').click(function() {
                $(this).addClass('animate__animated animate__pulse');
                setTimeout(() => {
                    $(this).removeClass('animate__animated animate__pulse');
                }, 500);
            });
            // Smooth hover effects for nav items
            $('.nav-link').hover(
                function() {
                    $(this).css('transform', 'translateY(-2px)');
                },
                function() {
                    $(this).css('transform', 'translateY(0)');
                }
            );
        });
    </script>
    @endpush

