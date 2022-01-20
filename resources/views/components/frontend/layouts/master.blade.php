<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Riode - Ultimate eCommerce Template</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Riode - Ultimate eCommerce Template">
    <meta name="author" content="D-THEMES">

    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('ui/frontend/images/icons/favicon.png') }}">
    <!-- Preload Font -->
    <link rel="preload" href="fonts/riode.ttf?5gap68" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="vendor/fontawesome-free/webfonts/fa-solid-900.woff2" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="vendor/fontawesome-free/webfonts/fa-brands-400.woff2" as="font" type="font/woff2"
        crossorigin="anonymous">
    <script>
        WebFontConfig = {
            google: { families: [ 'Poppins:400,500,600,700,800' ] }
        };
        ( function ( d ) {
            var wf = d.createElement( 'script' ), s = d.scripts[ 0 ];
            wf.src = 'js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore( wf, s );
        } )( document );
    </script>


{{ asset('ui/frontend/') }}

    
    <link rel="stylesheet" type="text/css" href="{{ asset('ui/frontend/vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('ui/frontend/vendor/animate/animate.min.css') }}">

    <!-- Plugins CSS File -->
    <link rel="stylesheet" type="text/css" href="{{ asset('ui/frontend/vendor/magnific-popup/magnific-popup.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('ui/frontend/vendor/owl-carousel/owl.carousel.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('ui/frontend/vendor/sticky-icon/stickyicon.css') }}">

    <!-- Main CSS File -->
    <link rel="stylesheet" type="text/css" href="{{ asset('ui/frontend/css/demo4.min.css') }}">
</head>

<body class="home">

    <div class="page-wrapper">
        <h1 class="d-none">Riode - Responsive eCommerce HTML Template</h1>
        <x-frontend.layouts.partials.header></x-frontend.layouts.partials.header>
        <!-- End of Header -->
        <main class="main">
            <div class="page-content">
                <section class="intro-section">
                    <div class="container">
                        <div class="grid row">
                            <div class="grid-item col-lg-6 col-md-8 height-x2">
                                <div class="intro-slider owl-carousel owl-theme owl-full-height owl-dot-inner owl-dot-white owl-full-height row  animation-slider cols-1 gutter-no appear-animate"
                                    data-animation-options="{
                                    'name': 'fadeInRightShorter',
                                    'delay': '.3s'
                                }" data-owl-options="{
                                    'items': 1,
                                    'nav': false,
                                    'loop': true, 
                                    'dots': true,
                                    'autoplay': false,
                                    'animateOut': 'fadeOutLeft'
                                }">
                                    <div
                                        class="intro-slide intro-slide1 banner banner-radius banner-fixed overlay-dark">
                                        <figure>
                                            <img src="images/demos/demo4/slides/1.jpg" width="580" height="510"
                                                alt="banner" style="background-color: #232024;" />
                                        </figure>
                                        <div class="banner-content y-50">
                                            <h4 class="banner-subtitle font-weight-bold text-primary ls-1 slide-animate"
                                                data-animation-options="{
                                                'name': 'fadeInRightShorter',
                                                'duration': '1s'
                                            }">New Arrivals</h4>
                                            <h3 class="banner-title text-white ls-s font-weight-bold slide-animate"
                                                data-animation-options="{
                                                'name': 'fadeInUpShorter',
                                                'delay': '.5s',
                                                'duration': '1s'
                                            }">Biometric<br>Fingerprints<br>Padlock</h3>
                                            <a href="demo4-shop.html"
                                                class="btn btn-link btn-underline btn-white slide-animate"
                                                data-animation-options="{
                                                'name': 'fadeInUpShorter',
                                                'delay': '1s',
                                                'duration': '1s'
                                            }">Shop now<i class="d-icon-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <div
                                        class="intro-slide intro-slide2 banner banner-fixed banner-radius overlay-dark">
                                        <figure>
                                            <img src="images/demos/demo4/slides/2.jpg" width="580" height="510"
                                                alt="banner" style="background-color: #efefef;" />
                                        </figure>
                                        <div class="banner-content y-50">
                                            <div class="slide-animate" data-animation-options="{
                                                'name': 'fadeInRightShorter'
                                            }">
                                                <h4
                                                    class="banner-subtitle  font-weight-bold text-primary text-uppercase ls-1">
                                                    New Collection
                                                </h4>
                                                <h3 class="banner-title font-weight-bold mb-6 slide-animate"
                                                    data-animation-options="{
                                                    'name': 'fadeInRightShorter'
                                                }">Fashionable<br>partner</h3>
                                                <a class="btn btn-link btn-underline btn-dark"
                                                    href="demo4-shop.html">Shop now<i
                                                        class="d-icon-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item col-lg-3 col-md-4 col-6 height-x1">
                                <div class="category category-absolute text-dark overlay-light overlay-zoom banner-radius appear-animate"
                                    data-animation-options="{
                                    'name': 'fadeInLeftShorter',
                                    'delay': '.3s'
                                }" style="background-color: #fbfbfb">
                                    <a href="demo4-shop.html">
                                        <figure class="category-media">
                                            <img src="images/demos/demo4/categories/1.jpg" alt="category" width="280"
                                                height="245" />
                                        </figure>
                                    </a>
                                    <div class="category-content">
                                        <h4 class="category-name"><a href="demo4-shop.html">For Fitness</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item col-lg-3 col-md-4 col-6 height-x1">
                                <div class="category category-absolute text-dark overlay-light overlay-zoom banner-radius appear-animate"
                                    data-animation-options="{
                                    'name': 'fadeInLeftShorter',
                                    'delay': '.3s'
                                }" style="background-color: #f5f5f5">
                                    <a href="demo4-shop.html">
                                        <figure class="category-media">
                                            <img src="images/demos/demo4/categories/2.jpg" alt="category" width="280"
                                                height="245" />
                                        </figure>
                                    </a>
                                    <div class="category-content">
                                        <h4 class="category-name"><a href="demo4-shop.html">Brand Sale</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item col-lg-3 col-md-4 col-6 height-x1">
                                <div class="category category-absolute text-white overlay-dark overlay-zoom banner-radius appear-animate"
                                    data-animation-options="{
                                    'name': 'fadeInLeftShorter',
                                    'delay': '.3s'
                                }" style="background-color: #191d25">
                                    <a href="demo4-shop.html">
                                        <figure class="category-media">
                                            <img src="images/demos/demo4/categories/3.jpg" alt="category" width="280"
                                                height="245" />
                                        </figure>
                                    </a>
                                    <div class="category-content">
                                        <h4 class="category-name"><a href="demo4-shop.html">Top Watches</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item col-lg-3 col-md-4 col-6 height-x1">
                                <div class="category category-absolute text-white overlay-dark overlay-zoom banner-radius appear-animate"
                                    data-animation-options="{
                                    'name': 'fadeInLeftShorter',
                                    'delay': '.3s'
                                }" style="background-color: #cc8e70">
                                    <a href="demo4-shop.html">
                                        <figure class="category-media">
                                            <img src="images/demos/demo4/categories/4.jpg" alt="category" width="280"
                                                height="245" />
                                        </figure>
                                    </a>
                                    <div class="category-content">
                                        <h4 class="category-name"><a href="demo4-shop.html">Sneakers</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item col-lg-6 col-md-8 height-x1">
                                <div class="banner banner-fixed intro-banner1 overlay-light overlay-zoom banner-radius appear-animate"
                                    data-animation-options="{
                                    'name': 'fadeInUpShorter',
                                    'delay': '.3s'
                                }" style="background-color: #f5f5f5">
                                    <figure>
                                        <img src="images/demos/demo4/categories/5.jpg" alt="category" width="580"
                                            height="245" />
                                    </figure>
                                    <div class="banner-content text-right y-50">
                                        <h4 class="banner-title mb-2 font-weight-bold text-dark">Springwear Sale</h4>
                                        <p class="mb-0 ls-m">Our vision is to supply the best<br>
                                            equipment & expertise within the arb<br>
                                            most importantly, to keep our<br>
                                            customers at the heart of all we do.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item col-lg-3 col-md-4 col-xs-6 height-x1">
                                <div class="category category-absolute text-dark overlay-light overlay-zoom banner-radius appear-animate"
                                    data-animation-options="{
                                    'name': 'fadeInUpShorter',
                                    'delay': '.3s'
                                }" style="background-color: #e2e7f1">
                                    <a href="demo4-shop.html">
                                        <figure class="category-media">
                                            <img src="images/demos/demo4/categories/6.jpg" alt="category" width="280"
                                                height="245" />
                                        </figure>
                                    </a>
                                    <div class="category-content">
                                        <h4 class="category-name"><a href="demo4-shop.html">For Kids</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item col-lg-3 col-md-4 col-xs-6 height-x1">
                                <div class="banner banner-fixed intro-banner2 banner-radius overlay-zoom overlay-dark banner-radius appear-animate"
                                    data-animation-options="{
                                    'name': 'fadeInUpShorter',
                                    'delay': '.3s'
                                }" style="background-color: #aa4722">
                                    <figure>
                                        <img src="images/demos/demo4/categories/7.jpg" alt="category" width="280"
                                            height="245" />
                                    </figure>
                                    <div class="banner-content w-100 x-50 y-50 text-center pl-2 pr-2">
                                        <h4 class="banner-title text-uppercase font-weight-bold text-white ls-s">
                                            Hey!</h4>
                                        <p class="text-white ls-s mb-0">Spend $60 and get FREE US<br>mainland
                                            delivery*<br />(Order under $60 only /$4.75)</p>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-space col-1"></div>
                        </div>
                    </div>
                </section>

                <section class="mt-10 appear-animate">
                    <div class="container">
                        <h2 class="title title-line title-underline with-link">New Arrivals<a href="#">View more<i
                                    class="d-icon-arrow-right"></i></a></h2>

                        <div class="owl-carousel owl-theme row owl-nav-full cols-2 cols-md-3 cols-lg-4"
                            data-owl-options="{
                            'items': 5,
                            'nav': false,
                            'loop': false,
                            'dots': true,
                            'margin': 20,
                            'responsive': {
                                '0': {
                                    'items': 2
                                },
                                '768': {
                                    'items': 3
                                },
                                '992': {
                                    'items': 4,
                                    'dots': false,
                                    'nav': true
                                }
                            }
                        }">
                            <div class="product">
                                <figure class="product-media">
                                    <a href="demo4-product.html" style="background-color: #f7f8fa;">
                                        <img src="images/demos/demo4/products/1.jpg" alt="Blue Pinafore Denim Dress"
                                            width="280" height="315">
                                    </a>
                                    <div class="product-label-group">
                                        <label class="product-label label-new">new</label>
                                    </div>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                            data-target="#addCartModal" title="Add to cart"><i
                                                class="d-icon-bag"></i></a>
                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                class="d-icon-heart"></i></a>
                                    </div>
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <div class="product-cat">
                                        <a href="demo4-shop.html">Watches</a>
                                    </div>
                                    <h3 class="product-name">
                                        <a href="demo4-product.html">Fashion Men’s Watches</a>
                                    </h3>
                                    <div class="product-price">
                                        <span class="price">$230.99</span>
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width:60%"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="demo4-product.html" class="rating-reviews">( 6 reviews )</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product">
                                <figure class="product-media">
                                    <a href="demo4-product.html" style="background-color: #f7f8fa;">
                                        <img src="images/demos/demo4/products/2.jpg" alt="Blue Pinafore Denim Dress"
                                            width="280" height="315">
                                    </a>
                                    <div class="product-label-group">
                                        <label class="product-label label-new">new</label>
                                    </div>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                            data-target="#addCartModal" title="Add to cart"><i
                                                class="d-icon-bag"></i></a>
                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                class="d-icon-heart"></i></a>
                                    </div>
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <div class="product-cat">
                                        <a href="demo4-shop.html">Watches</a>
                                    </div>
                                    <h3 class="product-name">
                                        <a href="demo4-product.html">Man's Black Wrist Watch</a>
                                    </h3>
                                    <div class="product-price">
                                        <span class="price">$384.23</span>
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width:100%"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="demo4-product.html" class="rating-reviews">( 21 reviews )</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product">
                                <figure class="product-media">
                                    <a href="demo4-product.html" style="background-color: #f7f8fa;">
                                        <img src="images/demos/demo4/products/3.jpg" alt="Blue Pinafore Denim Dress"
                                            width="280" height="315">
                                    </a>

                                    <div class="product-label-group">
                                        <label class="product-label label-new">New</label>
                                    </div>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                            data-target="#addCartModal" title="Add to cart"><i
                                                class="d-icon-bag"></i></a>
                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                class="d-icon-heart"></i></a>
                                    </div>
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <div class="product-cat">
                                        <a href="demo4-shop.html">Clothing</a>
                                    </div>
                                    <h3 class="product-name">
                                        <a href="demo4-product.html">Fashionable Orginal Trucker</a>
                                    </h3>
                                    <div class="product-price">
                                        <span class="price">$78.64</span>
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width:40%"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="demo4-product.html" class="rating-reviews">( 2 reviews )</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product">
                                <figure class="product-media">
                                    <a href="demo4-product.html" style="background-color: #f7f8fa;">
                                        <img src="images/demos/demo4/products/4.jpg" alt="Blue Pinafore Denim Dress"
                                            width="280" height="315">
                                    </a>
                                    <div class="product-label-group">
                                        <label class="product-label label-new">new</label>
                                    </div>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                            data-target="#addCartModal" title="Add to cart"><i
                                                class="d-icon-bag"></i></a>
                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                class="d-icon-heart"></i></a>
                                    </div>
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <div class="product-cat">
                                        <a href="demo4-shop.html">Bags & Backpacks</a>
                                    </div>
                                    <h3 class="product-name">
                                        <a href="demo4-product.html">Mackintosh Poket Backpack</a>
                                    </h3>
                                    <div class="product-price">
                                        <span class="price">$125.99</span>
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width:60%"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="demo4-product.html" class="rating-reviews">( 8 reviews )</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product">
                                <figure class="product-media">
                                    <a href="demo4-product.html" style="background-color: #f7f8fa;">
                                        <img src="images/demos/demo4/products/3.jpg" alt="Blue Pinafore Denim Dress"
                                            width="280" height="315">
                                    </a>

                                    <div class="product-label-group">
                                        <label class="product-label label-new">New</label>
                                    </div>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                            data-target="#addCartModal" title="Add to cart"><i
                                                class="d-icon-bag"></i></a>
                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                class="d-icon-heart"></i></a>
                                    </div>
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <div class="product-cat">
                                        <a href="demo4-shop.html">Clothing</a>
                                    </div>
                                    <h3 class="product-name">
                                        <a href="demo4-product.html">Fashionable Orginal Trucker</a>
                                    </h3>
                                    <div class="product-price">
                                        <span class="price">$78.64</span>
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width:40%"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="demo4-product.html" class="rating-reviews">( 2 reviews )</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="category-section mt-10 pt-1">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-sm-6 mb-4">
                                <div class="category category-light category-absolute overlay-zoom"
                                    style="background-color: #c0c4c8;">
                                    <a href="demo4-shop.html">
                                        <figure class="category-media">
                                            <img src="images/demos/demo4/categories/8.jpg" alt="category" width="280"
                                                height="245" />
                                        </figure>
                                    </a>
                                    <div class="category-content">
                                        <a href="demo4-shop.html"
                                            class="btn btn-white font-weight-semi-bold btn-rounded text-capitalize">Shop
                                            Men</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-6 mb-4 order-lg-last">
                                <div class="category category-light category-absolute overlay-zoom"
                                    style="background-color: #1e1e1e;">
                                    <a href="demo4-shop.html">
                                        <figure class="category-media">
                                            <img src="images/demos/demo4/categories/10.jpg" alt="category" width="280"
                                                height="245" />
                                        </figure>
                                    </a>
                                    <div class="category-content">
                                        <a href="demo4-shop.html"
                                            class="btn btn-white font-weight-semi-bold btn-rounded text-capitalize">Shop
                                            Women</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-6 mb-4">
                                <div class="banner banner-fixed category-banner overlay-effect4 text-center"
                                    style="background-color: #e6e7e7;">
                                    <figure>
                                        <img src="images/demos/demo4/categories/9.jpg" alt="category" width="280"
                                            height="245" />
                                    </figure>
                                    <div class="banner-content x-50 y-50 w-100">
                                        <h4 class="banner-subtitle text-white font-weight-bold mb-2">Black Friday Sale
                                        </h4>
                                        <h3 class="banner-title text-primary font-weight-bold text-uppercase">Up to 70%
                                            Off</h3>
                                        <h5 class="text-white font-weight-normal ls-normal text-uppercase">Everything
                                        </h5>
                                        <a href="demo4-shop.html"
                                            class="btn btn-white btn-link btn-underline text-uppercase">shop
                                            now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="mt-7 appear-animate">
                    <div class="container">
                        <h2 class="title title-line title-underline with-link pt-4">Our Featured<a href="#">View more<i
                                    class="d-icon-arrow-right"></i></a></h2>

                        <div class="owl-carousel owl-theme row owl-nav-full cols-2 cols-md-3 cols-lg-4"
                            data-owl-options="{
                            'items': 5,
                            'nav': false,
                            'loop': false,
                            'dots': true,
                            'margin': 20,
                            'responsive': {
                                '0': {
                                    'items': 2
                                },
                                '768': {
                                    'items': 3
                                },
                                '992': {
                                    'items': 4,
                                    'dots': false,
                                    'nav': true
                                }
                            }
                        }">
                            <div class="product">
                                <figure class="product-media" style="background-color: #f6f7f9;">
                                    <a href="demo4-product.html">
                                        <img src="images/demos/demo4/products/5.jpg" alt="Blue Pinafore Denim Dress"
                                            width="280" height="315">
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                            data-target="#addCartModal" title="Add to cart"><i
                                                class="d-icon-bag"></i></a>
                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                class="d-icon-heart"></i></a>
                                    </div>
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <div class="product-cat">
                                        <a href="demo4-shop.html">shoes</a>
                                    </div>
                                    <h3 class="product-name">
                                        <a href="demo4-product.html">Converse Training Shoes</a>
                                    </h3>
                                    <div class="product-price">
                                        <span class="price">$113.00</span>
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width:60%"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="demo4-product.html" class="rating-reviews">( 12 reviews )</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product">
                                <figure class="product-media" style="background-color: #f6f7f9;">
                                    <a href="demo4-product.html">
                                        <img src="images/demos/demo4/products/6.jpg" alt="Blue Pinafore Denim Dress"
                                            width="280" height="315">
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                            data-target="#addCartModal" title="Add to cart"><i
                                                class="d-icon-bag"></i></a>
                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                class="d-icon-heart"></i></a>
                                    </div>
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <div class="product-cat">
                                        <a href="demo4-shop.html">bag</a>
                                    </div>
                                    <h3 class="product-name">
                                        <a href="demo4-product.html">Women's Fashion Handbag</a>
                                    </h3>
                                    <div class="product-price">
                                        <span class="price">$74.34</span>
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width:20%"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="demo4-product.html" class="rating-reviews">( 6 reviews )</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product">
                                <figure class="product-media" style="background-color: #f6f7f9;">
                                    <a href="demo4-product.html">
                                        <img src="images/demos/demo4/products/7.jpg" alt="Blue Pinafore Denim Dress"
                                            width="280" height="315">
                                    </a>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                            data-target="#addCartModal" title="Add to cart"><i
                                                class="d-icon-bag"></i></a>
                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                class="d-icon-heart"></i></a>
                                    </div>
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <div class="product-cat">
                                        <a href="demo4-shop.html">Women’s</a>
                                    </div>
                                    <h3 class="product-name">
                                        <a href="demo4-product.html">Women Beautiful headgear</a>
                                    </h3>
                                    <div class="product-price">
                                        <span class="price">$22.43</span>
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width:100%"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="demo4-product.html" class="rating-reviews">( 23 reviews )</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product">
                                <figure class="product-media" style="background-color: #f6f7f9;">
                                    <a href="demo4-product.html">
                                        <img src="images/demos/demo4/products/8.jpg" alt="Blue Pinafore Denim Dress"
                                            width="280" height="315">
                                    </a>
                                    <div class="product-label-group">
                                        <label class="product-label label-new">New</label>
                                    </div>
                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-cart" data-toggle="modal"
                                            data-target="#addCartModal" title="Add to cart"><i
                                                class="d-icon-bag"></i></a>
                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i
                                                class="d-icon-heart"></i></a>
                                    </div>
                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-quickview" title="Quick View">Quick View</a>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <div class="product-cat">
                                        <a href="demo4-shop.html">Women’s</a>
                                    </div>
                                    <h3 class="product-name">
                                        <a href="demo4-product.html">Hempen Hood a Mourner</a>
                                    </h3>
                                    <div class="product-price">
                                        <span class="price">$29.22</span>
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width:60%"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="demo4-product.html" class="rating-reviews">( 12 reviews )</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="banner video-banner"
                    style="background-image: url(images/demos/demo4/banner.jpg); background-color: #7ca7bf;">
                    <div class="banner-content ml-3 mr-3 text-uppercase text-center appear-animate"
                        data-animation-options="{
                        'name': 'fadeInUpShorter',
                        'delay': '.3s'
                    }">
                        <h4 class="banner-subtitle ls-s text-white mb-0">Brand experience</h4>
                        <h3 class="banner-title mb-4 font-weight-bold text-white">Premium for the pros 2021</h3>
                        <a class="btn-play btn-iframe d-inline-flex justify-content-center align-items-center"
                            href="video/memory-of-a-woman.mp4" title="play">
                            <i class="d-icon-play-solid"></i>
                        </a>
                    </div>
                </section>

                <section class="mt-10 pt-1 appear-animate">
                    <div class="container">
                        <h2 class="title title-line title-underline with-link pt-4">Latest News<a href="#">View more<i
                                    class="d-icon-arrow-right"></i></a></h2>
                        <div class="owl-carousel owl-theme row cols-lg-3 cols-sm-2 cols-1" data-owl-options="{
                            'items': 3,
                            'margin': 20,
                            'loop': false,
                            'nav': false,   
                            'dots': true,
                            'responsive': {
                                '0': {
                                    'items': 1
                                },
                                '576': {
                                    'items': 2
                                },
                                '992': {
                                    'items': 3,
                                    'dots': false
                                }
                            }
                        }">
                            <div class="post post-sm overlay-dark">
                                <figure class="post-media" style="background-color: #eef1f2;">
                                    <a href="post-single.html">
                                        <img src="images/demos/demo4/blog/1.jpg" width="380" height="200" alt="post" />
                                    </a>
                                </figure>
                                <div class="post-details">
                                    <div class="post-meta">
                                        on <a href="#" class="post-date">Sep 6 , 2020</a>
                                        | <a href="#" class="post-comment"><span>3</span> Comments</a>
                                    </div>
                                    <h4 class="post-title"><a href="post-single.html">Just a Cool Blog Post With
                                            Images</a></h4>
                                    <a href="post-single.html" class="btn btn-link btn-underline btn-underline">Read
                                        More<i class="d-icon-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="post post-sm overlay-dark">
                                <figure class="post-media" style="background-color: #54a2d1;">
                                    <a href="post-single.html">
                                        <img src="images/demos/demo4/blog/2.jpg" width="380" height="200" alt="post" />
                                    </a>
                                </figure>
                                <div class="post-details">
                                    <div class="post-meta">
                                        on <a href="#" class="post-date">Sep 6 , 2020</a>
                                        | <a href="#" class="post-comment"><span>3</span> Comments</a>
                                    </div>
                                    <h4 class="post-title"><a href="post-single.html">Riode store Now Open</a></h4>
                                    <a href="post-single.html" class="btn btn-link btn-underline">Read
                                        More<i class="d-icon-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="post post-sm overlay-dark">
                                <figure class="post-media" style="background-color: #ddd9d9;">
                                    <a href="post-single.html">
                                        <img src="images/demos/demo4/blog/3.jpg" width="380" height="200" alt="post" />
                                    </a>
                                </figure>
                                <div class="post-details">
                                    <div class="post-meta">
                                        on <a href="#" class="post-date">Sep 6 , 2020</a>
                                        | <a href="#" class="post-comment"><span>3</span> Comments</a>
                                    </div>
                                    <h4 class="post-title"><a href="post-single.html">Quick riode store Service
                                            Guide</a></h4>
                                    <a href="post-single.html" class="btn btn-link btn-underline">Read
                                        More<i class="d-icon-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="container banner-section mt-10">
                    <div class="banner banner-cta banner-radius"
                        style="background-image: url(images/demos/demo4/cta.jpg); background-color: #403a38; ">
                        <div class="banner-content appear-animate d-flex flex-column align-items-center"
                            data-animation-options="{
                            'name': 'blurIn',
                            'delay': '.3s'
                        }">
                            <h4 class="banner-subtitle font-weight-normal text-uppercase text-white lh-1 ls-normal">Up
                                To 15% Discount</h4>
                            <h3
                                class="banner-title d-inline-block text-center font-weight-bold text-uppercase text-white ls-l">
                                For Fitness Collection</h3>
                            <a href="demo4-shop.html" class="btn btn-primary btn-rounded">shop now<i
                                    class="d-icon-arrow-right"></i></a>
                        </div>
                    </div>
                </section>

                <section class="pt-10 pb-10">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6 mb-4">
                                <div class="widget widget-products appear-animate" data-animation-options="{
                                    'name': 'fadeInRightShorter',
                                    'delay': '.3s'
                                }">
                                    <h4 class="widget-title font-weight-bold">Best of the Week</h4>
                                    <div class="products-col">
                                        <div class="product product-list-sm">
                                            <figure class="product-media" style="background-color: #f5f5f5;">
                                                <a href="demo4-product.html">
                                                    <img src="images/demos/demo4/products/9.jpg" alt="product"
                                                        width="100" height="100">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="demo4-product.html">Blue Sports Shoes</a>
                                                </h3>
                                                <div class="product-price">
                                                    <span class="price">$36.00</span>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width:20%"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product product-list-sm">
                                            <figure class="product-media" style="background-color: #f5f5f5;">
                                                <a href="demo4-product.html">
                                                    <img src="images/demos/demo4/products/10.jpg" alt="product"
                                                        width="100" height="100">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="demo4-product.html">Fashion Handbag</a>
                                                </h3>
                                                <div class="product-price">
                                                    <ins class="new-price">$53.99</ins><del
                                                        class="old-price">$67.99</del>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width:100%"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product product-list-sm">
                                            <figure class="product-media" style="background-color: #f5f5f5;">
                                                <a href="demo4-product.html">
                                                    <img src="images/demos/demo4/products/11.jpg" alt="product"
                                                        width="100" height="100">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="demo4-product.html">Women’s Beautiful
                                                        Headgear</a>
                                                </h3>
                                                <div class="product-price">
                                                    <span class="price">$82.23</span>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width:60%"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 mb-4">
                                <div class="widget widget-products appear-animate" data-animation-options="{
                                    'name': 'fadeInRightShorter',
                                    'delay': '.5s'
                                }">
                                    <h4 class="widget-title font-weight-bold">Sale Products</h4>
                                    <div class="products-col">
                                        <div class="product product-list-sm">
                                            <figure class="product-media" style="background-color: #f5f5f5;">
                                                <a href="demo4-product.html">
                                                    <img src="images/demos/demo4/products/12.jpg" alt="product"
                                                        width="100" height="100">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="demo4-product.html">Women’s Beautiful
                                                        Headgear</a>
                                                </h3>
                                                <div class="product-price">
                                                    <span class="price">$78.24</span>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width:40%"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product product-list-sm">
                                            <figure class="product-media" style="background-color: #f5f5f5;">
                                                <a href="demo4-product.html">
                                                    <img src="images/demos/demo4/products/13.jpg" alt="product"
                                                        width="100" height="100">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="demo4-product.html">Hand Electric Cell</a>
                                                </h3>
                                                <div class="product-price">
                                                    <span class="price">$26.00</span>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width:100%"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product product-list-sm">
                                            <figure class="product-media" style="background-color: #f5f5f5;">
                                                <a href="demo4-product.html">
                                                    <img src="images/demos/demo4/products/14.jpg" alt="product"
                                                        width="100" height="100">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="demo4-product.html">Women Hempen Hood
                                                        a Mourner</a>
                                                </h3>
                                                <div class="product-price">
                                                    <span class="price">$30.00</span>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width:20%"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 mb-4">
                                <div class="widget widget-products appear-animate" data-animation-options="{
                                    'name': 'fadeInLeftShorter',
                                    'delay': '.5s'
                                }">
                                    <h4 class="widget-title font-weight-bold">Latest Products</h4>
                                    <div class="products-col">
                                        <div class="product product-list-sm">
                                            <figure class="product-media" style="background-color: #f5f5f5;">
                                                <a href="demo4-product.html">
                                                    <img src="images/demos/demo4/products/15.jpg" alt="product"
                                                        width="100" height="100">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="demo4-product.html">Fashionable Orginal
                                                        Trucker</a>
                                                </h3>
                                                <div class="product-price">
                                                    <span class="price">$78.64</span>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width:40%"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product product-list-sm">
                                            <figure class="product-media" style="background-color: #f5f5f5;">
                                                <a href="demo4-product.html">
                                                    <img src="images/demos/demo4/products/16.jpg" alt="product"
                                                        width="100" height="100">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="demo4-product.html">Men Summer Sneaker</a>
                                                </h3>
                                                <div class="product-price">
                                                    <span class="price">$79.45</span>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width:60%"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product product-list-sm">
                                            <figure class="product-media" style="background-color: #f5f5f5;">
                                                <a href="demo4-product.html">
                                                    <img src="images/demos/demo4/products/17.jpg" alt="product"
                                                        width="100" height="100">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="demo4-product.html">Season Sports Cap</a>
                                                </h3>
                                                <div class="product-price">
                                                    <span class="price">$64.27</span>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width:20%"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 mb-4">
                                <div class="widget widget-products appear-animate" data-animation-options="{
                                    'name': 'fadeInLeftShorter',
                                    'delay': '.3s'
                                }">
                                    <h4 class="widget-title font-weight-bold">Feature Product</h4>
                                    <div class="products-col">
                                        <div class="product product-list-sm">
                                            <figure class="product-media" style="background-color: #f5f5f5;">
                                                <a href="demo4-product.html">
                                                    <img src="images/demos/demo4/products/18.jpg" alt="product"
                                                        width="100" height="100">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="demo4-product.html">Blue Sports Shoes</a>
                                                </h3>
                                                <div class="product-price">
                                                    <span class="price">$36.00</span>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width:20%"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product product-list-sm">
                                            <figure class="product-media" style="background-color: #f5f5f5;">
                                                <a href="demo4-product.html">
                                                    <img src="images/demos/demo4/products/19.jpg" alt="product"
                                                        width="100" height="100">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="demo4-product.html">Fashion Handbag</a>
                                                </h3>
                                                <div class="product-price">
                                                    <ins class="new-price">$126.23</ins><del
                                                        class="old-price">$178.34</del>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width:40%"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product product-list-sm">
                                            <figure class="product-media" style="background-color: #f5f5f5;">
                                                <a href="demo4-product.html">
                                                    <img src="images/demos/demo4/products/20.jpg" alt="product"
                                                        width="100" height="100">
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-name">
                                                    <a href="demo4-product.html">Hempen Hood a
                                                        Mourner</a>
                                                </h3>
                                                <div class="product-price">
                                                    <span class="price">$82.23</span>
                                                </div>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width:60%"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            
        </main>
        <!-- End of Main -->

        <footer class="footer appear-animate">
            <div class="footer-middle">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="widget">
                                        <h4 class="widget-title">Get To Know Us</h4>
                                        <ul class="widget-body">
                                            <li><a href="#">About Riode</a></li>
                                            <li><a href="#">Careers</a></li>
                                            <li><a href="#">Affiliate Program</a></li>
                                            <li><a href="#">Show Hosts</a></li>
                                            <li><a href="#">Riode Cares</a></li>
                                            <li><a href="#">Submit Your Product</a></li>
                                        </ul>
                                    </div>
                                    <!-- End of Widget -->
                                </div>
                                <div class="col-md-4">
                                    <div class="widget">
                                        <h4 class="widget-title">Account</h4>
                                        <ul class="widget-body">
                                            <li><a href="account.html">My Account</a></li>
                                            <li><a href="#">Our Guarantees</a></li>
                                            <li><a href="#">Terms And Conditions</a></li>
                                            <li><a href="#">Privacy Policy</a></li>
                                            <li><a href="#">Intellectual Property Claims</a></li>
                                            <li><a href="#">Site Map</a></li>
                                        </ul>
                                    </div>
                                    <!-- End of Widget -->
                                </div>
                                <div class="col-md-4">
                                    <div class="widget">
                                        <h4 class="widget-title">Get Help</h4>
                                        <ul class="widget-body">
                                            <li><a href="#">Shipping &amp; Delivery</a></li>
                                            <li><a href="#">Order Status</a></li>
                                            <li><a href="#">Brand</a></li>
                                            <li><a href="#">Returns</a></li>
                                            <li><a href="#">Payment Options</a></li>
                                            <li><a href="contact-us.html">Contact Us</a></li>
                                        </ul>
                                    </div>
                                    <!-- End of Widget -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="widget">
                                <h4 class="widget-title">Newsletter</h4>
                                <div class="widget-body widget-newsletter">
                                    <p>Sign up for newsletter today</p>
                                    <form action="#" class="input-wrapper input-wrapper-inline">
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="Email address here..." required />
                                        <button class="btn btn-primary btn-sm btn-rounded btn-icon-right"
                                            type="submit">subscribe<i class="d-icon-arrow-right"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="footer-info d-flex align-items-center justify-content-between">
                                <div class="social-links">
                                    <a href="#" title="social-link"
                                        class="social-link social-facebook fab fa-facebook-f"></a>
                                    <a href="#" title="social-link"
                                        class="social-link social-twitter fab fa-twitter"></a>
                                    <a href="#" title="social-link"
                                        class="social-link social-linkedin fab fa-linkedin-in"></a>
                                </div>
                                <figure class="payment">
                                    <img src="images/demos/demo4/payment.png" alt="payment" width="135" height="24" />
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of FooterMiddle -->
            <div class="footer-bottom">
                <div class="container justify-content-center">
                    <p class="copyright">Riode eCommerce &copy; 2021. All Rights Reserved</p>
                </div>
            </div>
            <!-- End of FooterBottom -->
        </footer>
        <!-- End of Footer -->
    </div>

    <!-- Sticky Footer -->
    <div class="sticky-footer sticky-content fix-bottom">
        <a href="demo4.html" class="sticky-link">
            <i class="d-icon-home"></i>
            <span>Home</span>
        </a>
        <a href="demo4-shop.html" class="sticky-link">
            <i class="d-icon-volume"></i>
            <span>Categories</span>
        </a>
        <a href="wishlist.html" class="sticky-link">
            <i class="d-icon-heart"></i>
            <span>Wishlist</span>
        </a>
        <a href="account.html" class="sticky-link">
            <i class="d-icon-user"></i>
            <span>Account</span>
        </a>
        <div class="header-search hs-toggle dir-up">
            <a href="#" class="search-toggle sticky-link">
                <i class="d-icon-search"></i>
                <span>Search</span>
            </a>
            <form action="#" class="input-wrapper">
                <input type="text" class="form-control" name="search" autocomplete="off"
                    placeholder="Search your keyword..." required />
                <button class="btn btn-search" type="submit">
                    <i class="d-icon-search"></i>
                </button>
            </form>
        </div>
    </div>

    <!-- Scroll Top -->
    <a id="scroll-top" href="#top" title="Top" role="button" class="scroll-top"><i class="d-icon-arrow-up"></i></a>

    <!-- MobileMenu -->
    <div class="mobile-menu-wrapper">
        <div class="mobile-menu-overlay">
        </div>
        <!-- End of Overlay -->
        <a class="mobile-menu-close" href="#"><i class="d-icon-times"></i></a>
        <!-- End of CloseButton -->
        <div class="mobile-menu-container scrollable">
            <form action="#" class="input-wrapper">
                <input type="text" class="form-control" name="search" autocomplete="off"
                    placeholder="Search your keyword..." required />
                <button class="btn btn-search" type="submit">
                    <i class="d-icon-search"></i>
                </button>
            </form>
            <!-- End of Search Form -->
            <ul class="mobile-menu mmenu-anim">
                <li>
                    <a href="demo4.html">Home</a>
                </li>
                <li>
                    <a href="demo4-shop.html">Categories</a>
                    <ul>
                        <li>
                            <a href="#">
                                Variations 1
                            </a>
                            <ul>
                                <li><a href="shop-classic-filter.html">Classic Filter</a></li>
                                <li><a href="shop-left-toggle-sidebar.html">Left Toggle Filter</a></li>
                                <li><a href="shop-right-toggle-sidebar.html">Right Toggle Sidebar</a></li>
                                <li><a href="shop-horizontal-filter.html">Horizontal Filter </a>
                                </li>
                                <li><a href="shop-navigation-filter.html">Navigation Filter</a></li>

                                <li><a href="shop-off-canvas-filter.html">Off-Canvas Filter </a></li>
                                <li><a href="shop-top-banner.html">Top Banner</a></li>
                                <li><a href="shop-inner-top-banner.html">Inner Top Banner</a></li>
                                <li><a href="shop-with-bottom-block.html">With Bottom Block</a></li>
                                <li><a href="shop-category-in-page-header.html">Category In Page Header</a>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                Variations 2
                            </a>
                            <ul>
                                <li><a href="shop-grid-3cols.html">3 Columns Mode</a></li>
                                <li><a href="shop-grid-4cols.html">4 Columns Mode</a></li>
                                <li><a href="shop-grid-5cols.html">5 Columns Mode</a></li>
                                <li><a href="shop-grid-6cols.html">6 Columns Mode</a></li>
                                <li><a href="shop-grid-7cols.html">7 Columns Mode</a></li>
                                <li><a href="shop-grid-8cols.html">8 Columns Mode</a></li>
                                <li><a href="shop-list-mode.html">List Mode</a></li>
                                <li><a href="shop-pagination.html">Pagination</a></li>
                                <li><a href="shop-infinite-ajaxscroll.html">Infinite Ajaxscroll </a></li>
                                <li><a href="shop-loadmore-button.html">Loadmore Button</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                Variations 3
                            </a>
                            <ul>
                                <li><a href="shop-category-grid-shop.html">Category Grid Shop</a></li>
                                <li><a href="shop-category+products.html">Category + Products</a></li>
                                <li><a href="shop-default-1.html">Shop Default 1 </a>
                                </li>
                                <li><a href="shop-default-2.html">Shop Default 2</a></li>
                                <li><a href="shop-default-3.html">Shop Default 3</a></li>
                                <li><a href="shop-default-4.html">Shop Default 4</a></li>
                                <li><a href="shop-default-5.html">Shop Default 5</a></li>
                                <li><a href="shop-default-6.html">Shop Default 6</a></li>
                                <li><a href="shop-default-7.html">Shop Default 7</a></li>
                                <li><a href="shop-default-8.html">Shop Default 8</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="demo4-product.html">Products</a>
                    <ul>
                        <li>
                            <a href="#">Product Pages</a>
                            <ul>
                                <li><a href="product-simple.html">Simple Product</a></li>
                                <li><a href="product-featured.html">Featured &amp; On Sale</a></li>
                                <li><a href="product.html">Variable Product</a></li>
                                <li><a href="product-variable-swatch.html">Variation Swatch
                                        Product</a></li>
                                <li><a href="product-grouped.html">Grouped Product </a></li>
                                <li><a href="product-external.html">External Product</a></li>
                                <li><a href="product-in-stock.html">In Stock Product</a></li>
                                <li><a href="product-out-stock.html">Out of Stock Product</a></li>
                                <li><a href="product-upsell.html">Upsell Products</a></li>
                                <li><a href="product-cross-sell.html">Cross Sell Products</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Product Layouts</a>
                            <ul>
                                <li><a href="product-vertical.html">Vertical Thumb</a></li>
                                <li><a href="product-horizontal.html">Horizontal Thumb</a></li>
                                <li><a href="product-gallery.html">Gallery Type</a></li>
                                <li><a href="product-grid.html">Grid Images</a></li>
                                <li><a href="product-masonry.html">Masonry Images</a></li>
                                <li><a href="product-sticky.html">Sticky Info</a></li>
                                <li><a href="product-sticky-both.html">Left & Right Sticky</a></li>
                                <li><a href="product-left-sidebar.html">With Left Sidebar</a></li>
                                <li><a href="product-right-sidebar.html">With Right Sidebar</a></li>
                                <li><a href="product-full.html">Full Width Layout </a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Product Features</a>
                            <ul>
                                <li><a href="product-sale.html">Sale Countdown</a></li>
                                <li><a href="product-hurryup.html">Hurry Up Notification </a></li>
                                <li><a href="product-attribute-guide.html">Attribute Guide </a></li>
                                <li><a href="product-sticky-cart.html">Add Cart Sticky</a></li>
                                <li><a href="product-thumbnail-label.html">Labels on Thumbnail</a>
                                </li>
                                <li><a href="product-more-description.html">More Description
                                        Tabs</a></li>
                                <li><a href="product-accordion-data.html">Data In Accordion</a></li>
                                <li><a href="product-tabinside.html">Data Inside</a></li>
                                <li><a href="product-video.html">Video Thumbnail </a>
                                </li>
                                <li><a href="product-360-degree.html">360 Degree Thumbnail </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Pages</a>
                    <ul>
                        <li><a href="about-us.html">About</a></li>
                        <li><a href="contact-us.html">Contact Us</a></li>
                        <li><a href="account.html">Login</a></li>
                        <li><a href="faq.html">FAQs</a></li>
                        <li><a href="error-404.html">Error 404</a>
                            <ul>
                                <li><a href="error-404.html">Error 404-1</a></li>
                                <li><a href="error-404-1.html">Error 404-2</a></li>
                                <li><a href="error-404-2.html">Error 404-3</a></li>
                                <li><a href="error-404-3.html">Error 404-4</a></li>
                            </ul>
                        </li>
                        <li><a href="coming-soon.html">Coming Soon</a></li>
                    </ul>
                </li>
                <li>
                    <a href="blog-classic.html">Blog</a>
                    <ul>
                        <li><a href="blog-classic.html">Classic</a></li>
                        <li><a href="blog-listing.html">Listing</a></li>
                        <li>
                            <a href="#">Grid</a>
                            <ul>
                                <li><a href="blog-grid-2col.html">Grid 2 columns</a></li>
                                <li><a href="blog-grid-3col.html">Grid 3 columns</a></li>
                                <li><a href="blog-grid-4col.html">Grid 4 columns</a></li>
                                <li><a href="blog-grid-sidebar.html">Grid sidebar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Masonry</a>
                            <ul>
                                <li><a href="blog-masonry-2col.html">Masonry 2 columns</a></li>
                                <li><a href="blog-masonry-3col.html">Masonry 3 columns</a></li>
                                <li><a href="blog-masonry-4col.html">Masonry 4 columns</a></li>
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
                            <a href="post-single.html">Single Post</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="element.html">Elements</a>
                    <ul>
                        <li>
                            <a href="#">Elements 1</a>
                            <ul>
                                <li><a href="element-accordions.html">Accordions</a></li>
                                <li><a href="element-alerts.html">Alert &amp; Notification</a></li>

                                <li><a href="element-banner-effect.html">Banner Effect

                                    </a></li>
                                <li><a href="element-banner.html">Banner
                                    </a></li>
                                <li><a href="element-blog-posts.html">Blog Posts</a></li>
                                <li><a href="element-breadcrumb.html">Breadcrumb
                                    </a></li>
                                <li><a href="element-buttons.html">Buttons</a></li>
                                <li><a href="element-cta.html">Call to Action</a></li>
                                <li><a href="element-countdown.html">Countdown
                                    </a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Elements 2</a>
                            <ul>
                                <li><a href="element-counter.html">Counter </a></li>
                                <li><a href="element-creative-grid.html">Creative Grid

                                    </a></li>
                                <li><a href="element-animation.html">Entrance Effect

                                    </a></li>
                                <li><a href="element-floating.html">Floating

                                    </a></li>
                                <li><a href="element-hotspot.html">Hotspot

                                    </a></li>
                                <li><a href="element-icon-boxes.html">Icon Boxes</a></li>
                                <li><a href="element-icons.html">Icons</a></li>
                                <li><a href="element-image-box.html">Image box

                                    </a></li>
                                <li><a href="element-instagrams.html">Instagrams</a></li>

                            </ul>
                        </li>
                        <li>
                            <a href="#">Elements 3</a>
                            <ul>

                                <li><a href="element-categories.html">Product Category</a></li>
                                <li><a href="element-products.html">Products</a></li>
                                <li><a href="element-product-banner.html">Products + Banner

                                    </a></li>
                                <li><a href="element-product-grid.html">Products + Grid

                                    </a></li>
                                <li><a href="element-product-single.html">Product Single

                                    </a>
                                </li>
                                <li><a href="element-product-tab.html">Products + Tab

                                    </a></li>
                                <li><a href="element-single-product.html">Single Product

                                    </a></li>
                                <li><a href="element-slider.html">Slider

                                    </a></li>
                                <li><a href="element-social-link.html">Social Icons </a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Elements 4</a>
                            <ul>
                                <li><a href="element-subcategory.html">Subcategory

                                    </a></li>
                                <li><a href="element-svg-floating.html">Svg Floating

                                    </a></li>
                                <li><a href="element-tabs.html">Tabs</a></li>
                                <li><a href="element-testimonials.html">Testimonials
                                    </a></li>
                                <li><a href="element-titles.html">Title</a></li>
                                <li><a href="element-typography.html">Typography</a></li>
                                <li><a href="element-vendor.html">Vendor

                                    </a></li>
                                <li><a href="element-video.html">Video

                                    </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="https://d-themes.com/buynow/riodehtml">Buy Riode!</a></li>
            </ul>
            <!-- End of MobileMenu -->
        </div>
    </div>

    <!-- newsletter-popup default -->
    <div class="newsletter-popup newsletter-pop1 mfp-hide" id="newsletter-popup"
        style="background-image: url(images/newsletter-popup.jpg)">
        <div class="newsletter-content">
            <h4 class="text-uppercase text-dark">Up to <span class="text-primary">20% Off</span></h4>
            <h2 class="font-weight-semi-bold">Sign up to <span>RIODE</span></h2>
            <p class="text-grey">Subscribe to the Riode eCommerce newsletter to receive timely updates from your
                favorite
                products.</p>
            <form action="#" method="get" class="input-wrapper input-wrapper-inline input-wrapper-round">
                <input type="email" class="form-control email" name="email" id="email2"
                    placeholder="Email address here..." required="">
                <button class="btn btn-dark" type="submit">SUBMIT</button>
            </form>
            <div class="form-checkbox justify-content-center">
                <input type="checkbox" class="custom-checkbox" id="hide-newsletter-popup" name="hide-newsletter-popup"
                    required />
                <label for="hide-newsletter-popup">Don't show this popup again</label>
            </div>
        </div>
    </div>

    <!-- sticky icons-->
	<div class="sticky-icons-wrapper">
		<div class="sticky-icon-links">
			<ul>
				<li><a href="#" class="demo-toggle"><i class="fas fa-home"></i><span>Demos</span></a></li>
				<li><a href="documentation.html"><i class="fas fa-info-circle"></i><span>Documentation</span></a>
				</li>
				<li><a href="https://themeforest.net/downloads/"><i class="fas fa-star"></i><span>Reviews</span></a>
				</li>
				<li><a href="https://d-themes.com/buynow/riodehtml"><i class="fas fa-shopping-cart"></i><span>Buy
							now!</span></a></li>
			</ul>
		</div>
		<div class="demos-list">
			<div class="demos-overlay"></div>
			<a class="demos-close" href="#"><i class="close-icon"></i></a>
			<div class="demos-content scrollable scrollable-light">
				<h3 class="demos-title">Demos</h3>
				<div class="demos">
				</div>
			</div>
		</div>
	</div>
	<!-- Plugins JS File -->
    <script src="{{ asset('ui/frontend/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('ui/frontend/vendor/elevatezoom/jquery.elevatezoom.min.js') }}"></script>
    <script src="{{ asset('ui/frontend/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

    <script src="{{ asset('ui/frontend/vendor/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('ui/frontend/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('ui/frontend/vendor/isotope/isotope.pkgd.min.js') }}"></script>
    <!-- Main JS File -->
    <script src="{{ asset('ui/frontend/js/main.min.js') }}"></script>
</body>

</html>