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
                            
                            <?php for ($i=0; $i < 5; $i++) { ?>
                                <x-frontend.layouts.partials.productCard>
                                
                                </x-frontend.layouts.partials.productCard>
                            <?php } ?>
                        </div>
                    </div>
                </section>

                <section class="category-section mt-10 pt-1">
                    <div class="container">
                        <div class="row justify-content-center">
                        <x-frontend.layouts.partials.genderCategoryCard></x-frontend.layouts.partials.genderCategoryCard>

                        <x-frontend.layouts.partials.discountCard></x-frontend.layouts.partials.discountCard>

                        <x-frontend.layouts.partials.genderCategoryCard></x-frontend.layouts.partials.genderCategoryCard>
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
                            <?php for ($i=0; $i < 4; $i++) { ?>
                                <x-frontend.layouts.partials.featuredProductCard></x-frontend.layouts.partials.featuredProductCard>
                            <?php } ?>
                        </div>
                    </div>
                </section>

                <x-frontend.layouts.partials.bannerVideo></x-frontend.layouts.partials.bannerVideo>
                

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
                            <?php for ($i=0; $i < 3; $i++) { ?>
                                <x-frontend.layouts.partials.blogPostCard/>
                            <?php } ?>
                        </div>
                    </div>
                </section>

                <x-frontend.layouts.partials.discountBannerVideo></x-frontend.layouts.partials.discountBannerVideo>

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
                                        <?php for ($i=0; $i < 3; $i++) { ?>
                                            <x-frontend.layouts.partials.listProductCard></x-frontend.layouts.partials.listProductCard>
                                        <?php } ?>
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
                                    
                                    <?php for ($i=0; $i < 3; $i++) { ?>
                                        <x-frontend.layouts.partials.listProductCard></x-frontend.layouts.partials.listProductCard>
                                    <?php } ?>

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
                                    <?php for ($i=0; $i < 3; $i++) { ?>
                                        <x-frontend.layouts.partials.listProductCard></x-frontend.layouts.partials.listProductCard>
                                    <?php } ?>
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
                                    <?php for ($i=0; $i < 3; $i++) { ?>
                                        <x-frontend.layouts.partials.listProductCard></x-frontend.layouts.partials.listProductCard>
                                    <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            
        </main>
</x-frontend.layouts.master>