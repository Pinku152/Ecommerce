
@extends('layout')
@section('content')

    <!-- START SLIDER AREA -->
    <div class="slider-area  plr-185  mb-80">
        <div class="container-fluid">
            <div class="slider-content">
                <div class="row">
                    <div class="active-slider-1 slick-arrow-1 slick-dots-1">
                        <!-- layer-1 Start -->
                        <div class="col-md-12">
                            <div class="layer-1">
                                <div class="slider-img">
                                    <img src="img/slider/slider-1/1.jpg" alt="">
                                </div>
                                <div class="slider-info gray-bg">
                                    <div class="slider-info-inner">
                                        <h1 class="slider-title-1 text-uppercase text-black-1">WaterProof smartphone</h1>
                                        <div class="slider-brief text-black-2">
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum,</p>
                                        </div>
                                        <a href="#" class="button extra-small button-black">
                                            <span class="text-uppercase">Buy now</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- layer-1 end -->
                        <!-- layer-1 Start -->
                        <div class="col-md-12">
                            <div class="layer-1">
                                <div class="slider-img">
                                    <img src="img/slider/slider-1/2.jpg" alt="">
                                </div>
                                <div class="slider-info gray-bg">
                                    <div class="slider-info-inner">
                                        <h1 class="slider-title-1 text-uppercase text-black-1">WaterProof smartphone</h1>
                                        <div class="slider-brief text-black-2">
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum,</p>
                                        </div>
                                        <a href="#" class="button extra-small button-black">
                                            <span class="text-uppercase">Buy now</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- layer-1 end -->
                        <!-- layer-1 Start -->
                        <div class="col-md-12">
                            <div class="layer-1">
                                <div class="slider-img">
                                    <img src="img/slider/slider-1/1.jpg" alt="">
                                </div>
                                <div class="slider-info gray-bg">
                                    <div class="slider-info-inner">
                                        <h1 class="slider-title-1 text-uppercase text-black-1">WaterProof smartphone</h1>
                                        <div class="slider-brief text-black-2">
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum,</p>
                                        </div>
                                        <a href="#" class="button extra-small button-black">
                                            <span class="text-uppercase">Buy now</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- layer-1 end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SLIDER AREA -->

    <!-- Start page content -->

        <!-- BY BRAND SECTION START-->
        <div class="by-brand-section mb-80">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-left mb-40">
                            <h2 class="uppercase">By Brands</h2>
                            <h6>There are many variations of passages of brands available,</h6>
                        </div>
                    </div>
                </div>
                <div class="by-brand-product">
                    <div class="row active-by-brand slick-arrow-2">
                        <!-- single-brand-product start -->
                        <div class="col-xs-12">
                            <div class="single-brand-product">
                                <a href="single-product.html"><img src="img/product/5.jpg" alt=""></a>
                                <h3 class="brand-title text-gray">
                                    <a href="#">Brand name</a>
                                </h3>
                            </div>
                        </div>
                        <!-- single-brand-product end -->
                        <!-- single-brand-product start -->
                        <div class="col-xs-12">
                            <div class="single-brand-product">
                                <a href="single-product.html"><img src="img/product/6.jpg" alt=""></a>
                                <h3 class="brand-title text-gray">
                                    <a href="#">Brand name</a>
                                </h3>
                            </div>
                        </div>
                        <!-- single-brand-product end -->
                        <!-- single-brand-product start -->
                        <div class="col-xs-12">
                            <div class="single-brand-product">
                                <a href="single-product.html"><img src="img/product/7.jpg" alt=""></a>
                                <h3 class="brand-title text-gray">
                                    <a href="#">Brand name</a>
                                </h3>
                            </div>
                        </div>
                        <!-- single-brand-product end -->
                        <!-- single-brand-product start -->
                        <div class="col-xs-12">
                            <div class="single-brand-product">
                                <a href="single-product.html"><img src="img/product/8.jpg" alt=""></a>
                                <h3 class="brand-title text-gray">
                                    <a href="#">Brand name</a>
                                </h3>
                            </div>
                        </div>
                        <!-- single-brand-product end -->
                        <!-- single-brand-product start -->
                        <div class="col-xs-12">
                            <div class="single-brand-product">
                                <a href="single-product.html"><img src="img/product/8.jpg" alt=""></a>
                                <h3 class="brand-title text-gray">
                                    <a href="#">Brand name</a>
                                </h3>
                            </div>
                        </div>
                        <!-- single-brand-product end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- BY BRAND SECTION END -->

        <!-- FEATURED PRODUCT SECTION START -->
        <div class="featured-product-section mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-left mb-40">
                            <h2 class="uppercase">Featured product</h2>
                            <h6>There are many variations of passages of brands available,</h6>
                        </div>
                    </div>
                </div>
                <div class="featured-product">
                    <div class="row active-featured-product slick-arrow-2">
                    @foreach($products as $product)
                        <!-- product-item start -->
                            <div class="col-xs-12">
                                <div class="product-item">
                                    <div class="product-img">
                                        <a href="/product-detail/{{$product->id}}">
                                            <img src="storage/{{$product->gallery}}" alt="" width="270px" height="300px"/>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h6 class="product-title">
                                            <a href="single-product.html">{{$product->name}}</a>
                                        </h6>
                                        <div class="pro-rating">
                                            <a href="#"><i class="zmdi zmdi-star"></i></a>
                                            <a href="#"><i class="zmdi zmdi-star"></i></a>
                                            <a href="#"><i class="zmdi zmdi-star"></i></a>
                                            <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                            <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                        </div>
                                        <h3 class="pro-price">Rs {{$product->price}}</h3>
                                        <ul class="action-button">
                                            <li>
                                                <a href="#" title="Wishlist"><i class="zmdi zmdi-favorite"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" data-toggle="modal"  data-target="#productModal" title="Quickview"><i class="zmdi zmdi-zoom-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="Compare"><i class="zmdi zmdi-refresh"></i></a>
                                            </li>
                                            <li>
                                                <form action="/add_to_cart" method="post">
                                                    @csrf
                                                    <input type="hidden" name="product_id" value="{{$product->id}}">
                                                    <!--
                                                <a href="" title="Add to cart" tabindex="0"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                -->
                                                    <button type="submit"><i class="zmdi zmdi-shopping-cart-plus"></i></button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                    @endforeach
                    <!-- product-item end -->

                    </div>
                </div>
            </div>
        </div>
        <!-- FEATURED PRODUCT SECTION END -->

        <!-- UP COMMING PRODUCT SECTION START -->
        <div class="up-comming-product-section mb-80">
            <div class="container">
                <div class="row">
                    <!-- up-comming-pro -->
                    <div class="col-md-8 col-sm-12 col-xs-12">
                        <div class="up-comming-pro gray-bg clearfix">
                            <div class="up-comming-pro-img f-left">
                                <a href="#">
                                    <img src="img/up-comming/1.jpg" alt="">
                                </a>
                            </div>
                            <div class="up-comming-pro-info f-left">
                                <h3><a href="#">Dummy Product Name</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elitest, sed do eiusmod tempor incididunt ut labore et dolores top magna aliqua. Ut enim ad minim veniam, quis nostrud exer citation ullamco laboris nisi ut aliquip ex ea commodo consequat. laborum. </p>
                                <div class="up-comming-time">
                                    <div data-countdown="2017/02/02"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 hidden-sm col-xs-12">
                        <div class="banner-item banner-1">
                            <div class="ribbon-price">
                                <span>$ 896.00</span>
                            </div>
                            <div class="banner-img">
                                <a href="#"><img src="img/banner/1.jpg" alt=""></a>
                            </div>
                            <div class="banner-info">
                                <h3><a href="#">Product Name</a></h3>
                                <ul class="banner-featured-list">
                                    <li>
                                        <i class="zmdi zmdi-check"></i><span>Lorem ipsum dolor</span>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-check"></i><span>amet, consectetur</span>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-check"></i><span>adipisicing elitest,</span>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-check"></i><span>eiusmod tempor</span>
                                    </li>
                                    <li>
                                        <i class="zmdi zmdi-check"></i><span>labore et dolore.</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- UP COMMING PRODUCT SECTION END -->


        <!-- BLOG SECTION START -->
        <div class="blog-section mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-left mb-40">
                            <h2 class="uppercase">Latest blog</h2>
                            <h6>There are many variations of passages of brands available,</h6>
                        </div>
                    </div>
                </div>
                <div class="blog">
                    <div class="row active-blog">
                        <!-- blog-item start -->
                        <div class="col-xs-12">
                            <div class="blog-item">
                                <img src="img/blog/1.jpg" alt="">
                                <div class="blog-desc">
                                    <h5 class="blog-title"><a href="single-blog.html">dummy Blog name</a></h5>
                                    <p>There are many variations of passages of psum available, but the majority have suffered alterat on in some form, by injected humour, randomis words which don't look even slightly.</p>
                                    <div class="read-more">
                                        <a href="single-blog.html">Read more</a>
                                    </div>
                                    <ul class="blog-meta">
                                        <li>
                                            <a href="#"><i class="zmdi zmdi-favorite"></i>89 Like</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="zmdi zmdi-comments"></i>59 Comments</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="zmdi zmdi-share"></i>29 Share</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- blog-item end -->
                        <!-- blog-item start -->
                        <div class="col-xs-12">
                            <div class="blog-item">
                                <img src="img/blog/2.jpg" alt="">
                                <div class="blog-desc">
                                    <h5 class="blog-title"><a href="single-blog.html">dummy Blog name</a></h5>
                                    <p>There are many variations of passages of psum available, but the majority have suffered alterat on in some form, by injected humour, randomis words which don't look even slightly.</p>
                                    <div class="read-more">
                                        <a href="single-blog.html">Read more</a>
                                    </div>
                                    <ul class="blog-meta">
                                        <li>
                                            <a href="#"><i class="zmdi zmdi-favorite"></i>89 Like</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="zmdi zmdi-comments"></i>59 Comments</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="zmdi zmdi-share"></i>29 Share</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- blog-item end -->
                        <!-- blog-item start -->
                        <div class="col-xs-12">
                            <div class="blog-item">
                                <img src="img/blog/3.jpg" alt="">
                                <div class="blog-desc">
                                    <h5 class="blog-title"><a href="single-blog.html">dummy Blog name</a></h5>
                                    <p>There are many variations of passages of psum available, but the majority have suffered alterat on in some form, by injected humour, randomis words which don't look even slightly.</p>
                                    <div class="read-more">
                                        <a href="single-blog.html">Read more</a>
                                    </div>
                                    <ul class="blog-meta">
                                        <li>
                                            <a href="#"><i class="zmdi zmdi-favorite"></i>89 Like</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="zmdi zmdi-comments"></i>59 Comments</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="zmdi zmdi-share"></i>29 Share</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- blog-item end -->
                        <!-- blog-item start -->
                        <div class="col-xs-12">
                            <div class="blog-item">
                                <img src="img/blog/1.jpg" alt="">
                                <div class="blog-desc">
                                    <h5 class="blog-title"><a href="single-blog.html">dummy Blog name</a></h5>
                                    <p>There are many variations of passages of psum available, but the majority have suffered alterat on in some form, by injected humour, randomis words which don't look even slightly.</p>
                                    <div class="read-more">
                                        <a href="single-blog.html">Read more</a>
                                    </div>
                                    <ul class="blog-meta">
                                        <li>
                                            <a href="#"><i class="zmdi zmdi-favorite"></i>89 Like</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="zmdi zmdi-comments"></i>59 Comments</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="zmdi zmdi-share"></i>29 Share</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- blog-item end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- BLOG SECTION END -->

    <!-- End page content -->



    <!-- START QUICKVIEW PRODUCT -->
    <div id="quickview-wrapper">
        <!-- Modal -->
        <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-product clearfix">
                            <div class="product-images">
                                <div class="main-image images">
                                    <img alt="" src="img/product/quickview.jpg">
                                </div>
                            </div><!-- .product-images -->

                            <div class="product-info">
                                <h1>Aenean eu tristique</h1>
                                <div class="price-box-3">
                                    <div class="s-price-box">
                                        <span class="new-price">£160.00</span>
                                        <span class="old-price">£190.00</span>
                                    </div>
                                </div>
                                <a href="single-product-left-sidebar.html" class="see-all">See all features</a>
                                <div class="quick-add-to-cart">
                                    <form method="post" class="cart">
                                        <div class="numbers-row">
                                            <input type="number" id="french-hens" value="3">
                                        </div>
                                        <button class="single_add_to_cart_button" type="submit">Add to cart</button>
                                    </form>
                                </div>
                                <div class="quick-desc">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero.
                                </div>
                                <div class="social-sharing">
                                    <div class="widget widget_socialsharing_widget">
                                        <h3 class="widget-title-modal">Share this product</h3>
                                        <ul class="social-icons clearfix">
                                            <li>
                                                <a class="facebook" href="#" target="_blank" title="Facebook">
                                                    <i class="zmdi zmdi-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="google-plus" href="#" target="_blank" title="Google +">
                                                    <i class="zmdi zmdi-google-plus"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="twitter" href="#" target="_blank" title="Twitter">
                                                    <i class="zmdi zmdi-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="pinterest" href="#" target="_blank" title="Pinterest">
                                                    <i class="zmdi zmdi-pinterest"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="rss" href="#" target="_blank" title="RSS">
                                                    <i class="zmdi zmdi-rss"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- .product-info -->
                        </div><!-- .modal-product -->
                    </div><!-- .modal-body -->
                </div><!-- .modal-content -->
            </div><!-- .modal-dialog -->
        </div>
        <!-- END Modal -->
    </div>
    <!-- END QUICKVIEW PRODUCT -->
@endsection
