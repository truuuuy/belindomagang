<!DOCTYPE html>
<html lang="en">


<!-- molla/index-11.html  22 Nov 2019 09:58:23 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Belindo</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Molla - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ asset('landingpage/assets/images/icons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('landingpage/assets/images/icons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('landingpage/assets/images/icons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('landingpage/assets/images/icons/site.html') }}">
    <link rel="mask-icon" href="{{ asset('landingpage/assets/images/icons/safari-pinned-tab.svg') }}" color="#666666">
    <link rel="shortcut icon" href="{{ asset('landingpage/assets/images/icons/favicon.ico') }}">
    <meta name="apple-mobile-web-app-title" content="Molla">
    <meta name="application-name" content="Molla">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="{{ asset('landingpage/assets/images/icons/browserconfig.xml') }}">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet"
        href="{{ asset('landingpage/assets/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css') }}">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{ asset('landingpage/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landingpage/assets/css/plugins/owl-carousel/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('landingpage/assets/css/plugins/magnific-popup/magnific-popup.css') }}">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{ asset('landingpage/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('landingpage/assets/css/plugins/nouislider/nouislider.css') }}">
    <link rel="stylesheet" href="{{ asset('landingpage/assets/css/demos/demo-11.css') }}">
</head>

<body>
    <div class="page-wrapper">
        <header class="header header-7">
            <div class="header-middle sticky-header">
                <div class="container">
                    <div class="header-left">
                        <button class="mobile-menu-toggler">
                            <span class="sr-only">Toggle mobile menu</span>
                            <i class="icon-bars"></i>
                        </button>

                        <a href="index.html" class="logo">
                            <img src="{{ asset('../assets/images/belindo.png') }}" alt="Molla Logo" width="100"
                                height="25">
                        </a>
                    </div><!-- End .header-left -->

                    <div class="header-right">

                        <nav class="main-nav">
                            <ul class="menu sf-arrows">

                                <li>
                                    <a href="category.html" class="sf-with-ul">Shop</a>

                                    <div class="megamenu megamenu-md">
                                        <div class="row no-gutters">
                                            <div class="col-md-8">
                                                <div class="menu-col">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="menu-title">Shop with sidebar</div>
                                                            <!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="category-list.html">Shop List</a></li>
                                                                <li><a href="category-2cols.html">Shop Grid 2
                                                                        Columns</a></li>
                                                                <li><a href="category.html">Shop Grid 3 Columns</a>
                                                                </li>
                                                                <li><a href="category-4cols.html">Shop Grid 4
                                                                        Columns</a></li>
                                                                <li><a href="category-market.html"><span>Shop
                                                                            Market<span
                                                                                class="tip tip-new">New</span></span></a>
                                                                </li>
                                                            </ul>

                                                            <div class="menu-title">Shop no sidebar</div>
                                                            <!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="category-boxed.html"><span>Shop Boxed No
                                                                            Sidebar<span
                                                                                class="tip tip-hot">Hot</span></span></a>
                                                                </li>
                                                                <li><a href="category-fullwidth.html">Shop Fullwidth No
                                                                        Sidebar</a></li>
                                                            </ul>
                                                        </div><!-- End .col-md-6 -->

                                                        <div class="col-md-6">
                                                            <div class="menu-title">Product Category</div>
                                                            <!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="product-category-boxed.html">Product
                                                                        Category Boxed</a></li>
                                                                <li><a href="product-category-fullwidth.html"><span>Product
                                                                            Category Fullwidth<span
                                                                                class="tip tip-new">New</span></span></a>
                                                                </li>
                                                            </ul>
                                                            <div class="menu-title">Shop Pages</div>
                                                            <!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="cart.html">Cart</a></li>
                                                                <li><a href="checkout.html">Checkout</a></li>
                                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                                <li><a href="dashboard.html">My Account</a></li>
                                                                <li><a href="#">Lookbook</a></li>
                                                            </ul>
                                                        </div><!-- End .col-md-6 -->
                                                    </div><!-- End .row -->
                                                </div><!-- End .menu-col -->
                                            </div><!-- End .col-md-8 -->

                                            <div class="col-md-4">
                                                <div class="banner banner-overlay">
                                                    <a href="category.html" class="banner banner-menu">
                                                        <img src="{{ asset('landingpage/assets/images/menu/banner-1.jpg') }}"
                                                            alt="Banner">

                                                        <div class="banner-content banner-content-top">
                                                            <div class="banner-title text-white">Last
                                                                <br>Chance<br><span><strong>Sale</strong></span>
                                                            </div>
                                                            <!-- End .banner-title -->
                                                        </div><!-- End .banner-content -->
                                                    </a>
                                                </div><!-- End .banner banner-overlay -->
                                            </div><!-- End .col-md-4 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .megamenu megamenu-md -->
                                </li>
                                <li>
                                    <a href="product.html" class="sf-with-ul">Product</a>

                                    <div class="megamenu megamenu-sm">
                                        <div class="row no-gutters">
                                            <div class="col-md-6">
                                                <div class="menu-col">
                                                    <div class="menu-title">Product Details</div>
                                                    <!-- End .menu-title -->
                                                    <ul>
                                                        <li><a href="product.html">Default</a></li>
                                                        <li><a href="product-centered.html">Centered</a></li>
                                                        <li><a href="product-extended.html"><span>Extended Info<span
                                                                        class="tip tip-new">New</span></span></a></li>
                                                        <li><a href="product-gallery.html">Gallery</a></li>
                                                        <li><a href="product-sticky.html">Sticky Info</a></li>
                                                        <li><a href="product-sidebar.html">Boxed With Sidebar</a></li>
                                                        <li><a href="product-fullwidth.html">Full Width</a></li>
                                                        <li><a href="product-masonry.html">Masonry Sticky Info</a></li>
                                                    </ul>
                                                </div><!-- End .menu-col -->
                                            </div><!-- End .col-md-6 -->

                                            <div class="col-md-6">
                                                <div class="banner banner-overlay">
                                                    <a href="category.html">
                                                        <img src="{{ asset('landingpage/assets/images/menu/banner-2.jpg') }}"
                                                            alt="Banner">

                                                        <div class="banner-content banner-content-bottom">
                                                            <div class="banner-title text-white">New
                                                                Trends<br><span><strong>spring 2019</strong></span>
                                                            </div><!-- End .banner-title -->
                                                        </div><!-- End .banner-content -->
                                                    </a>
                                                </div><!-- End .banner -->
                                            </div><!-- End .col-md-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .megamenu megamenu-sm -->
                                </li>
                                <li>
                                    <a href="#" class="sf-with-ul">Pages</a>

                                    <ul>
                                        <li>
                                            <a href="about.html" class="sf-with-ul">About</a>

                                            <ul>
                                                <li><a href="about.html">About 01</a></li>
                                                <li><a href="about-2.html">About 02</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="contact.html" class="sf-with-ul">Contact</a>

                                            <ul>
                                                <li><a href="contact.html">Contact 01</a></li>
                                                <li><a href="contact-2.html">Contact 02</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="faq.html">FAQs</a></li>
                                        <li><a href="404.html">Error 404</a></li>
                                        <li><a href="coming-soon.html">Coming Soon</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="blog.html" class="sf-with-ul">Blog</a>

                                    <ul>
                                        <li><a href="blog.html">Classic</a></li>
                                        <li><a href="blog-listing.html">Listing</a></li>
                                        <li>
                                            <a href="#">Grid</a>
                                            <ul>
                                                <li><a href="blog-grid-2cols.html">Grid 2 columns</a></li>
                                                <li><a href="blog-grid-3cols.html">Grid 3 columns</a></li>
                                                <li><a href="blog-grid-4cols.html">Grid 4 columns</a></li>
                                                <li><a href="blog-grid-sidebar.html">Grid sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Masonry</a>
                                            <ul>
                                                <li><a href="blog-masonry-2cols.html">Masonry 2 columns</a></li>
                                                <li><a href="blog-masonry-3cols.html">Masonry 3 columns</a></li>
                                                <li><a href="blog-masonry-4cols.html">Masonry 4 columns</a></li>
                                                <li><a href="blog-masonry-sidebar.html">Masonry sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Mask</a>
                                            <ul>
                                                <li><a href="blog-mask-grid.html">Blog mask grid</a></li>
                                                <li><a href="blog-mask-masonry.html">Blog mask masonry</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Single Post</a>
                                            <ul>
                                                <li><a href="single.html">Default with sidebar</a></li>
                                                <li><a href="single-fullwidth.html">Fullwidth no sidebar</a></li>
                                                <li><a href="single-fullwidth-sidebar.html">Fullwidth with sidebar</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="elements-list.html" class="sf-with-ul">Elements</a>

                                    <ul>
                                        <li><a href="elements-products.html">Products</a></li>
                                        <li><a href="elements-typography.html">Typography</a></li>
                                        <li><a href="elements-titles.html">Titles</a></li>
                                        <li><a href="elements-banners.html">Banners</a></li>
                                        <li><a href="elements-product-category.html">Product Category</a></li>
                                        <li><a href="elements-video-banners.html">Video Banners</a></li>
                                        <li><a href="elements-buttons.html">Buttons</a></li>
                                        <li><a href="elements-accordions.html">Accordions</a></li>
                                        <li><a href="elements-tabs.html">Tabs</a></li>
                                        <li><a href="elements-testimonials.html">Testimonials</a></li>
                                        <li><a href="elements-blog-posts.html">Blog Posts</a></li>
                                        <li><a href="elements-portfolio.html">Portfolio</a></li>
                                        <li><a href="elements-cta.html">Call to Action</a></li>
                                        <li><a href="elements-icon-boxes.html">Icon Boxes</a></li>
                                    </ul>
                                </li>
                            </ul><!-- End .menu -->
                        </nav><!-- End .main-nav -->

                        <div class="header-search">
                            <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                            <form action="#" method="get">
                                <div class="header-search-wrapper">
                                    <label for="q" class="sr-only">Search</label>
                                    <input type="search" class="form-control" name="q" id="q"
                                        placeholder="Search in..." required>
                                </div><!-- End .header-search-wrapper -->
                            </form>
                        </div><!-- End .header-search -->

                        <a href="wishlist.html" class="wishlist-link">
                            <i class="icon-heart-o"></i>
                            <span class="wishlist-count">3</span>
                        </a>

                        <div class="dropdown cart-dropdown">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" data-display="static">
                                <i class="icon-shopping-cart"></i>
                                <span class="cart-count">{{ $jumlah_item }}</span>
                                <!-- Ubah ini untuk menampilkan jumlah item di keranjang -->
                                <span class="cart-txt">{{ $total_harga }}</span>
                                <!-- Ubah ini untuk menampilkan total harga -->
                            </a>


                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-cart-products">
                                    <div class="product">
                                        <div class="product-cart-details">
                                            <h4 class="product-title">
                                                <a href="product.html">Beige knitted elastic runner shoes</a>
                                            </h4>

                                            <span class="cart-product-info">
                                                <span class="cart-product-qty">1</span>
                                                x $84.00
                                            </span>
                                        </div><!-- End .product-cart-details -->

                                        <figure class="product-image-container">
                                            <a href="product.html" class="product-image">
                                                <img src="{{ asset('landingpage/assets/images/products/cart/product-1.jpg') }}"
                                                    alt="product">
                                            </a>
                                        </figure>
                                        <a href="#" class="btn-remove" title="Remove Product"><i
                                                class="icon-close"></i></a>
                                    </div><!-- End .product -->

                                    <div class="product">
                                        <div class="product-cart-details">
                                            <h4 class="product-title">
                                                <a href="product.html">Blue utility pinafore denim dress</a>
                                            </h4>

                                            <span class="cart-product-info">
                                                <span class="cart-product-qty">1</span>
                                                x $76.00
                                            </span>
                                        </div><!-- End .product-cart-details -->

                                        <figure class="product-image-container">
                                            <a href="product.html" class="product-image">
                                                <img src="{{ asset('landingpage/assets/images/products/cart/product-2.jpg') }}"
                                                    alt="product">
                                            </a>
                                        </figure>
                                        <a href="#" class="btn-remove" title="Remove Product"><i
                                                class="icon-close"></i></a>
                                    </div><!-- End .product -->
                                </div><!-- End .cart-product -->

                                <div class="dropdown-cart-total">
                                    <span>Total</span>

                                    <span class="cart-total-price">$160.00</span>
                                </div><!-- End .dropdown-cart-total -->

                                <div class="dropdown-cart-action">
                                    <a href="cart.html" class="btn btn-primary">View Cart</a>
                                    <a href="checkout.html" class="btn btn-outline-primary-2"><span>Checkout</span><i
                                            class="icon-long-arrow-right"></i></a>
                                </div><!-- End .dropdown-cart-total -->
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .cart-dropdown -->
                        <div class="px-5 mb-1">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="dropdown-item btn-light" type="submit">
                                    <i class="fe-log-out"></i>Logout
                                </button>
                            </form>
                        </div>
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-middle -->
        </header><!-- End .header -->

        <main class="main">
            <div class="intro-slider-container mb-4">
                <div class="intro-slider owl-carousel owl-simple owl-nav-inside" data-toggle="owl"
                    data-owl-options='{
                        "nav": false, 
                        "dots": true,
                        "responsive": {
                            "992": {
                                "nav": true,
                                "dots": false
                            }
                        }
                    }'>
                    <div class="intro-slide"
                        style="background-image: url({{ asset('landingpage/assets/images/demos/demo-11/slider/slide-1.jpg') }});">
                        <div class="container intro-content">
                            <h3 class="intro-subtitle text-primary">SEASONAL PICKS</h3><!-- End .h3 intro-subtitle -->
                            <h1 class="intro-title">Get All <br>The Good Stuff</h1><!-- End .intro-title -->

                            <a href="category.html" class="btn btn-outline-primary-2">
                                <span>DISCOVER MORE</span>
                                <i class="icon-long-arrow-right"></i>
                            </a>
                        </div><!-- End .intro-content -->
                    </div><!-- End .intro-slide -->

                    <div class="intro-slide"
                        style="background-image: url({{ asset('landingpage/assets/images/demos/demo-11/slider/slide-2.jpg') }});">
                        <div class="container intro-content">
                            <h3 class="intro-subtitle text-primary">all at 50% off</h3><!-- End .h3 intro-subtitle -->
                            <h1 class="intro-title text-white">The Most Beautiful <br>Novelties In Our Shop</h1>
                            <!-- End .intro-title -->

                            <a href="category.html" class="btn btn-outline-primary-2 min-width-sm">
                                <span>SHOP NOW</span>
                                <i class="icon-long-arrow-right"></i>
                            </a>
                        </div><!-- End .intro-content -->
                    </div><!-- End .intro-slide -->
                </div><!-- End .intro-slider owl-carousel owl-simple -->

                <span class="slider-loader"></span><!-- End .slider-loader -->
            </div><!-- End .intro-slider-container -->

            <div class="container">
                <div class="toolbox toolbox-filter">
                    <div class="toolbox-left">
                        <a href="#" class="filter-toggler">Filters</a>

                    </div><!-- End .toolbox-left -->
                    <div class="toolbox-right">
                        <ul class="nav-filter product-filter">
                            <li class="active"><a href="#" data-filter="*">All</a></li>
                            <li><a href="#" data-filter=".furniture">Furniture</a></li>
                            <li><a href="#" data-filter=".lighting">Lighting</a></li>
                            <li><a href="#" data-filter=".accessories">Accessories</a></li>
                            <li><a href="#" data-filter=".sale">Sale</a></li>
                        </ul>
                    </div><!-- End .toolbox-right -->
                </div><!-- End .filter-toolbox -->

                <div class="widget-filter-area" id="product-filter-area">
                    <a href="#" class="widget-filter-clear">Clean All</a>

                    <div class="filter-area-wrapper">
                        <div class="row">
                            <div class="col-sm-6 col-lg-3">
                                <div class="widget">
                                    <h3 class="widget-title">
                                        Category:
                                    </h3><!-- End .widget-title -->

                                    <div class="filter-items filter-items-count">
                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="cat-1">
                                                <label class="custom-control-label" for="cat-1">All</label>
                                            </div><!-- End .custom-checkbox -->
                                            <span class="item-count">24</span>
                                        </div><!-- End .filter-item -->

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="cat-2">
                                                <label class="custom-control-label" for="cat-2">Furniture</label>
                                            </div><!-- End .custom-checkbox -->
                                            <span class="item-count">3</span>
                                        </div><!-- End .filter-item -->

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="cat-3">
                                                <label class="custom-control-label" for="cat-3">Lighting</label>
                                            </div><!-- End .custom-checkbox -->
                                            <span class="item-count">2</span>
                                        </div><!-- End .filter-item -->

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="cat-4">
                                                <label class="custom-control-label" for="cat-4">Accessories</label>
                                            </div><!-- End .custom-checkbox -->
                                            <span class="item-count">4</span>
                                        </div><!-- End .filter-item -->

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="cat-5">
                                                <label class="custom-control-label" for="cat-5">Sale</label>
                                            </div><!-- End .custom-checkbox -->
                                            <span class="item-count">2</span>
                                        </div><!-- End .filter-item -->
                                    </div><!-- End .filter-items -->
                                </div><!-- End .widget -->
                            </div><!-- End .col-sm-6 col-lg-3 -->

                            <div class="col-sm-6 col-lg-3">
                                <div class="widget">
                                    <h3 class="widget-title">
                                        Sort by:
                                    </h3><!-- End .widget-title -->

                                    <div class="filter-items">
                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="radio" class="custom-control-input" checked
                                                    id="sort-1" name="sortby">
                                                <label class="custom-control-label" for="sort-1">Default</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .filter-item -->

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="radio" class="custom-control-input" id="sort-2"
                                                    name="sortby">
                                                <label class="custom-control-label" for="sort-2">Popularity</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .filter-item -->

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="radio" class="custom-control-input" id="sort-3"
                                                    name="sortby">
                                                <label class="custom-control-label" for="sort-3">Average
                                                    Rating</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .filter-item -->

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="radio" class="custom-control-input" id="sort-4"
                                                    name="sortby">
                                                <label class="custom-control-label" for="sort-4">Newness</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .filter-item -->

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="radio" class="custom-control-input" id="sort-5"
                                                    name="sortby">
                                                <label class="custom-control-label" for="sort-5">Price: Low to
                                                    High</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .filter-item -->

                                        <div class="filter-item">
                                            <div class="custom-control custom-checkbox">
                                                <input type="radio" class="custom-control-input" id="sort-6"
                                                    name="sortby">
                                                <label class="custom-control-label" for="sort-6">Price: High to
                                                    Low</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .filter-item -->
                                    </div><!-- End .filter-items -->
                                </div><!-- End .widget -->
                            </div><!-- End .col-sm-6 col-lg-3 -->

                            <div class="col-sm-6 col-lg-3">
                                <div class="widget">
                                    <h3 class="widget-title">
                                        Colour:
                                    </h3><!-- End .widget-title -->

                                    <div class="filter-colors filter-colors-vertical">
                                        <a href="#" style="background: #b87145;"><span>Brown</span></a>
                                        <a href="#" style="background: #f0c04a;"><span>Yellow</span></a>
                                        <a href="#" style="background: #333333;"><span>Black</span></a>
                                        <a href="#" class="selected"
                                            style="background: #cc3333;"><span>Red</span></a>
                                        <a href="#" style="background: #ebebeb;"><span>White</span></a>
                                    </div><!-- End .filter-colors -->
                                </div><!-- End .widget -->
                            </div><!-- End .col-sm-6 col-lg-3 -->

                            <div class="col-sm-6 col-lg-3">
                                <div class="widget">
                                    <h3 class="widget-title">
                                        Price:
                                    </h3><!-- End .widget-title -->

                                    <div class="filter-price">
                                        <div class="filter-price-text">
                                            Price Range:
                                            <span id="filter-price-range"></span>
                                        </div><!-- End .filter-price-text -->

                                        <div id="price-slider"></div><!-- End #price-slider -->
                                    </div><!-- End .filter-price -->
                                </div><!-- End .widget -->
                            </div><!-- End .col-sm-6 col-lg-3 -->
                        </div><!-- End .row -->
                    </div><!-- End .filter-area-wrapper -->
                </div><!-- End #product-filter-area.widget-filter-area -->

                <div class="products-container" data-layout="fitRows">
                    @foreach ($data as $item)
                        <div class="product-item furniture col-6 col-md-4 col-lg-3 mx-5">
                            <div class="product product-4">
                                <figure class="product-media">
                                    <a href="product.html">
                                        @if ($item->gambar_produk)
                                            <img src="{{ asset('storage/produk/' . $item->gambar_produk) }}"
                                                alt="Gambar Produk">
                                        @else
                                            <span>Tidak ada gambar</span>
                                        @endif
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#"
                                            class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                                to wishlist</span></a>
                                    </div><!-- End .product-action -->

                                    <div class="product-action">
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                            title="Quick view"><span>quick view</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <h3 class="product-title"><a href="product.html">{{ $item->nama_produk }}</a>
                                    </h3>
                                    <!-- End .product-title -->
                                    <div class="product-action">
                                        <form action="/addCart/{{$produk->id}}" method="POST">
                                            @csrf
                                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                            <!-- Ubah ini jika Anda menggunakan otentikasi -->
                                            <input type="hidden" name="id" value="{{ $produk->id }}">
                                            <!-- Ubah ini untuk menyesuaikan dengan produk yang ditampilkan -->
                                            <input type="hidden" name="jumlah" value="1">
                                            <!-- Misalnya, tambahkan 1 item -->
                                            <button type="submit" class="btn-product btn-cart">
                                                <span>Add to Cart</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>
                                        </form>
                                    </div><!-- End .product-action -->

                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .product-item -->
                    @endforeach


                </div><!-- End .products-container -->
            </div><!-- End .container -->

            <div class="more-container text-center mt-0 mb-7">
                <a href="category.html" class="btn btn-outline-dark-3 btn-more"><span>more products</span><i
                        class="la la-refresh"></i></a>
            </div><!-- End .more-container -->
        </main><!-- End .main -->

        <footer class="footer footer-2">
            <div class="footer-bottom">
                <div class="container">
                    <p class="footer-copyright">Copyright © 2019 Belindo. All Rights Reserved.</p>


                    <div class="social-icons social-icons-color">
                        <a href="#" class="social-icon social-facebook" title="Facebook" target="_blank"><i
                                class="icon-facebook-f"></i></a>
                        <a href="#" class="social-icon social-twitter" title="Twitter" target="_blank"><i
                                class="icon-twitter"></i></a>
                        <a href="#" class="social-icon social-instagram" title="Instagram" target="_blank"><i
                                class="icon-instagram"></i></a>
                        <a href="#" class="social-icon social-youtube" title="Youtube" target="_blank"><i
                                class="icon-youtube"></i></a>
                        <a href="#" class="social-icon social-pinterest" title="Pinterest" target="_blank"><i
                                class="icon-pinterest"></i></a>
                    </div><!-- End .soial-icons -->
                </div><!-- End .container -->
            </div><!-- End .footer-bottom -->
        </footer><!-- End .footer -->
    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-close"></i></span>

            <form action="#" method="get" class="mobile-search">
                <label for="mobile-search" class="sr-only">Search</label>
                <input type="search" class="form-control" name="mobile-search" id="mobile-search"
                    placeholder="Search in..." required>
                <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
            </form>

            <nav class="mobile-nav">
                <ul class="mobile-menu">
                    <li class="active">
                        <a href="index.html">Home</a>

                        <ul>
                            <li><a href="index-1.html">01 - furniture store</a></li>
                            <li><a href="index-2.html">02 - furniture store</a></li>
                            <li><a href="index-3.html">03 - electronic store</a></li>
                            <li><a href="index-4.html">04 - electronic store</a></li>
                            <li><a href="index-5.html">05 - fashion store</a></li>
                            <li><a href="index-6.html">06 - fashion store</a></li>
                            <li><a href="index-7.html">07 - fashion store</a></li>
                            <li><a href="index-8.html">08 - fashion store</a></li>
                            <li><a href="index-9.html">09 - fashion store</a></li>
                            <li><a href="index-10.html">10 - shoes store</a></li>
                            <li><a href="index-11.html">11 - furniture simple store</a></li>
                            <li><a href="index-12.html">12 - fashion simple store</a></li>
                            <li><a href="index-13.html">13 - market</a></li>
                            <li><a href="index-14.html">14 - market fullwidth</a></li>
                            <li><a href="index-15.html">15 - lookbook 1</a></li>
                            <li><a href="index-16.html">16 - lookbook 2</a></li>
                            <li><a href="index-17.html">17 - fashion store</a></li>
                            <li><a href="index-18.html">18 - fashion store (with sidebar)</a></li>
                            <li><a href="index-19.html">19 - games store</a></li>
                            <li><a href="index-20.html">20 - book store</a></li>
                            <li><a href="index-21.html">21 - sport store</a></li>
                            <li><a href="index-22.html">22 - tools store</a></li>
                            <li><a href="index-23.html">23 - fashion left navigation store</a></li>
                            <li><a href="index-24.html">24 - extreme sport store</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="category.html">Shop</a>
                        <ul>
                            <li><a href="category-list.html">Shop List</a></li>
                            <li><a href="category-2cols.html">Shop Grid 2 Columns</a></li>
                            <li><a href="category.html">Shop Grid 3 Columns</a></li>
                            <li><a href="category-4cols.html">Shop Grid 4 Columns</a></li>
                            <li><a href="category-boxed.html"><span>Shop Boxed No Sidebar<span
                                            class="tip tip-hot">Hot</span></span></a></li>
                            <li><a href="category-fullwidth.html">Shop Fullwidth No Sidebar</a></li>
                            <li><a href="product-category-boxed.html">Product Category Boxed</a></li>
                            <li><a href="product-category-fullwidth.html"><span>Product Category Fullwidth<span
                                            class="tip tip-new">New</span></span></a></li>
                            <li><a href="cart.html">Cart</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                            <li><a href="wishlist.html">Wishlist</a></li>
                            <li><a href="#">Lookbook</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="product.html" class="sf-with-ul">Product</a>
                        <ul>
                            <li><a href="product.html">Default</a></li>
                            <li><a href="product-centered.html">Centered</a></li>
                            <li><a href="product-extended.html"><span>Extended Info<span
                                            class="tip tip-new">New</span></span></a></li>
                            <li><a href="product-gallery.html">Gallery</a></li>
                            <li><a href="product-sticky.html">Sticky Info</a></li>
                            <li><a href="product-sidebar.html">Boxed With Sidebar</a></li>
                            <li><a href="product-fullwidth.html">Full Width</a></li>
                            <li><a href="product-masonry.html">Masonry Sticky Info</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Pages</a>
                        <ul>
                            <li>
                                <a href="about.html">About</a>

                                <ul>
                                    <li><a href="about.html">About 01</a></li>
                                    <li><a href="about-2.html">About 02</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="contact.html">Contact</a>

                                <ul>
                                    <li><a href="contact.html">Contact 01</a></li>
                                    <li><a href="contact-2.html">Contact 02</a></li>
                                </ul>
                            </li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="faq.html">FAQs</a></li>
                            <li><a href="404.html">Error 404</a></li>
                            <li><a href="coming-soon.html">Coming Soon</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="blog.html">Blog</a>

                        <ul>
                            <li><a href="blog.html">Classic</a></li>
                            <li><a href="blog-listing.html">Listing</a></li>
                            <li>
                                <a href="#">Grid</a>
                                <ul>
                                    <li><a href="blog-grid-2cols.html">Grid 2 columns</a></li>
                                    <li><a href="blog-grid-3cols.html">Grid 3 columns</a></li>
                                    <li><a href="blog-grid-4cols.html">Grid 4 columns</a></li>
                                    <li><a href="blog-grid-sidebar.html">Grid sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Masonry</a>
                                <ul>
                                    <li><a href="blog-masonry-2cols.html">Masonry 2 columns</a></li>
                                    <li><a href="blog-masonry-3cols.html">Masonry 3 columns</a></li>
                                    <li><a href="blog-masonry-4cols.html">Masonry 4 columns</a></li>
                                    <li><a href="blog-masonry-sidebar.html">Masonry sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Mask</a>
                                <ul>
                                    <li><a href="blog-mask-grid.html">Blog mask grid</a></li>
                                    <li><a href="blog-mask-masonry.html">Blog mask masonry</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Single Post</a>
                                <ul>
                                    <li><a href="single.html">Default with sidebar</a></li>
                                    <li><a href="single-fullwidth.html">Fullwidth no sidebar</a></li>
                                    <li><a href="single-fullwidth-sidebar.html">Fullwidth with sidebar</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="elements-list.html">Elements</a>
                        <ul>
                            <li><a href="elements-products.html">Products</a></li>
                            <li><a href="elements-typography.html">Typography</a></li>
                            <li><a href="elements-titles.html">Titles</a></li>
                            <li><a href="elements-banners.html">Banners</a></li>
                            <li><a href="elements-product-category.html">Product Category</a></li>
                            <li><a href="elements-video-banners.html">Video Banners</a></li>
                            <li><a href="elements-buttons.html">Buttons</a></li>
                            <li><a href="elements-accordions.html">Accordions</a></li>
                            <li><a href="elements-tabs.html">Tabs</a></li>
                            <li><a href="elements-testimonials.html">Testimonials</a></li>
                            <li><a href="elements-blog-posts.html">Blog Posts</a></li>
                            <li><a href="elements-portfolio.html">Portfolio</a></li>
                            <li><a href="elements-cta.html">Call to Action</a></li>
                            <li><a href="elements-icon-boxes.html">Icon Boxes</a></li>
                        </ul>
                    </li>
                </ul>
            </nav><!-- End .mobile-nav -->

            <div class="social-icons">
                <a href="#" class="social-icon" target="_blank" title="Facebook"><i
                        class="icon-facebook-f"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Twitter"><i
                        class="icon-twitter"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Instagram"><i
                        class="icon-instagram"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Youtube"><i
                        class="icon-youtube"></i></a>
            </div><!-- End .social-icons -->
        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->

    <div class="container newsletter-popup-container mfp-hide" id="newsletter-popup-form">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row no-gutters bg-white newsletter-popup-content">
                    <div class="col-xl-3-5col col-lg-7 banner-content-wrap">
                        <div class="banner-content text-center">
                            <img src="{{ asset('landingpage/assets/images/popup/newsletter/logo.png') }}"
                                class="logo" alt="logo" width="60" height="15">
                            <h2 class="banner-title">get <span>25<light>%</light></span> off</h2>
                            <p>Subscribe to the Molla eCommerce newsletter to receive timely updates from your favorite
                                products.</p>
                            <form action="#">
                                <div class="input-group input-group-round">
                                    <input type="email" class="form-control form-control-white"
                                        placeholder="Your Email Address" aria-label="Email Adress" required>
                                    <div class="input-group-append">
                                        <button class="btn" type="submit"><span>go</span></button>
                                    </div><!-- .End .input-group-append -->
                                </div><!-- .End .input-group -->
                            </form>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="register-policy-2" required>
                                <label class="custom-control-label" for="register-policy-2">Do not show this popup
                                    again</label>
                            </div><!-- End .custom-checkbox -->
                        </div>
                    </div>
                    <div class="col-xl-2-5col col-lg-5 ">
                        <img src="{{ asset('landingpage/assets/images/popup/newsletter/img-1.jpg') }}"
                            class="newsletter-img" alt="newsletter">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Plugins JS File -->
    <script src="{{ asset('landingpage/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('landingpage/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('landingpage/assets/js/jquery.hoverIntent.min.js') }}"></script>
    <script src="{{ asset('landingpage/assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('landingpage/assets/js/superfish.min.js') }}"></script>
    <script src="{{ asset('landingpage/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('landingpage/assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('landingpage/assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('landingpage/assets/js/wNumb.js') }}"></script>
    <script src="{{ asset('landingpage/assets/js/nouislider.min.js') }}"></script>
    <script src="{{ asset('landingpage/assets/js/bootstrap-input-spinner.js') }}"></script>
    <script src="{{ asset('landingpage/assets/js/jquery.magnific-popup.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('landingpage/assets/js/main.js') }}"></script>
    <script src="{{ asset('landingpage/assets/js/demos/demo-11.js') }}"></script>
</body>
@include('sweetalert::alert')

<!-- molla/index-11.html  22 Nov 2019 09:58:42 GMT -->

</html>
