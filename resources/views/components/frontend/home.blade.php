<x-frontend.layouts.master>
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
                                    
                                <x-frontend.layouts.partials.biggerGridProductCategory>
                                    
                                </x-frontend.layouts.partials.biggerGridProductCategory>
                                    
                                    
                                </div>
                            </div>
                            
                            
                            <?php for ($i=0; $i < 4; $i++) { ?>
                                <x-frontend.layouts.partials.gridProductCategoryCard></x-frontend.layouts.partials.gridProductCategory>
                            <?php } ?>
                            
                            <x-frontend.layouts.partials.mediumGridProductCategoryCard></x-frontend.layouts.partials.mediumGridProductCategoryCard>
                            <?php for ($i=0; $i < 2; $i++) { ?>
                                <x-frontend.layouts.partials.gridProductCategoryCard></x-frontend.layouts.partials.gridProductCategoryCard>
                            <?php } ?>
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
</x-frontend.layouts.master>