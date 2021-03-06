@extends('layout')
@section('content')
<!-- BREADCRUMBS SETCTION START -->
<div class="breadcrumbs-section plr-200 mb-80">
    <div class="breadcrumbs overlay-bg">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="breadcrumbs-inner">
                        <h1 class="breadcrumbs-title">Single Product Without Sidebar</h1>
                        <ul class="breadcrumb-list">
                            <li><a href="index.html">Home</a></li>
                            <li>Single Product Without Sidebar</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMBS SETCTION END -->

<!-- Start page content -->
<section id="page-content" class="page-wrapper">

    <!-- SHOP SECTION START -->
    <div class="shop-section mb-80">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <!-- single-product-area start -->
                    <div class="single-product-area mb-80">
                        <div class="row">
                            <!-- imgs-zoom-area start -->
                            <div class="col-md-5 col-sm-5 col-xs-12">
                                <div class="imgs-zoom-area">
                                    <img id="zoom_03" src="../storage/{{$product->gallery}}" data-zoom-image="../storage/{{$product->gallery}}" alt="">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div id="gallery_01" class="carousel-btn slick-arrow-3 mt-30">
                                                <div class="p-c">
                                                    <a href="#" data-image="../storage/{{$product->gallery}}" data-zoom-image="../storage/{{$product->gallery}}">
                                                        <img class="zoom_03" src="../storage/{{$product->gallery}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="p-c">
                                                    <a href="#" data-image="../storage/{{$product->gallery}}" data-zoom-image="../storage/{{$product->gallery}}">
                                                        <img class="zoom_03" src="../storage/{{$product->gallery}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="p-c">
                                                    <a href="#" data-image="../storage/{{$product->gallery}}" data-zoom-image="../storage/{{$product->gallery}}">
                                                        <img class="zoom_03" src="../storage/{{$product->gallery}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="p-c">
                                                    <a href="#" data-image="../storage/{{$product->gallery}}" data-zoom-image="../storage/{{$product->gallery}}">
                                                        <img class="zoom_03" src="../storage/{{$product->gallery}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="p-c">
                                                    <a href="#" data-image="../storage/{{$product->gallery}}" data-zoom-image="../storage/{{$product->gallery}}">
                                                        <img class="zoom_03" src="../storage/{{$product->gallery}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="p-c">
                                                    <a href="#" data-image="../storage/{{$product->gallery}}" data-zoom-image="../storage/{{$product->gallery}}">
                                                        <img class="zoom_03" src="../storage/{{$product->gallery}}" alt="">
                                                    </a>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- imgs-zoom-area end -->
                            <!-- single-product-info start -->
                            <div class="col-md-7 col-sm-7 col-xs-12">
                                <div class="single-product-info">
                                    <h3 class="text-black-1">{{$product->name}}</h3>
                                    <h6 class="brand-name-2">{{$category->name}}</h6>
                                    <!-- hr -->
                                    <hr>
                                    <!-- single-product-tab -->
                                    <div class="single-product-tab">
                                        <ul class="reviews-tab mb-20">
                                            <li  class="active"><a href="#description" data-toggle="tab">description</a></li>
                                            <li ><a href="#information" data-toggle="tab">information</a></li>
                                            <li ><a href="#reviews" data-toggle="tab">reviews</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane active" id="description">
                                                <p>{{$product->description}}</p>
                                            </div>
                                            <div role="tabpanel" class="tab-pane" id="information">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, neque fugit inventore quo dignissimos est iure natus quis nam illo officiis,  deleniti consectetur non ,aspernatur.</p>
                                                <p>rerum blanditiis dolore dignissimos expedita consequatur deleniti consectetur non exercitationem.</p>
                                            </div>
                                            <div role="tabpanel" class="tab-pane" id="reviews">
                                                <!-- reviews-tab-desc -->
                                                <div class="reviews-tab-desc">
                                                    <!-- single comments -->
                                                    <div class="media mt-30">
                                                        <div class="media-left">
                                                            <a href="#"><img class="media-object" src="img/author/1.jpg" alt="#"></a>
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="clearfix">
                                                                <div class="name-commenter pull-left">
                                                                    <h6 class="media-heading"><a href="#">Gerald Barnes</a></h6>
                                                                    <p class="mb-10">27 Jun, 2016 at 2:30pm</p>
                                                                </div>
                                                                <div class="pull-right">
                                                                    <ul class="reply-delate">
                                                                        <li><a href="#">Reply</a></li>
                                                                        <li>/</li>
                                                                        <li><a href="#">Delate</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas .</p>
                                                        </div>
                                                    </div>
                                                    <!-- single comments -->
                                                    <div class="media mt-30">
                                                        <div class="media-left">
                                                            <a href="#"><img class="media-object" src="img/author/2.jpg" alt="#"></a>
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="clearfix">
                                                                <div class="name-commenter pull-left">
                                                                    <h6 class="media-heading"><a href="#">Gerald Barnes</a></h6>
                                                                    <p class="mb-10">27 Jun, 2016 at 2:30pm</p>
                                                                </div>
                                                                <div class="pull-right">
                                                                    <ul class="reply-delate">
                                                                        <li><a href="#">Reply</a></li>
                                                                        <li>/</li>
                                                                        <li><a href="#">Delate</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas .</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  hr -->
                                    <hr>
                                    <!-- single-pro-color-rating -->
                                    <div class="single-pro-color-rating clearfix">
                                        <div class="sin-pro-color f-left">
                                            <p class="color-title f-left">Color</p>
                                            <div class="widget-color f-left">
                                                <ul>
                                                    <li class="color-1"><a href="#"></a></li>
                                                    <li class="color-2"><a href="#"></a></li>
                                                    <li class="color-3"><a href="#"></a></li>
                                                    <li class="color-4"><a href="#"></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="pro-rating sin-pro-rating f-right">
                                            <a href="#" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                            <a href="#" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                            <a href="#" tabindex="0"><i class="zmdi zmdi-star"></i></a>
                                            <a href="#" tabindex="0"><i class="zmdi zmdi-star-half"></i></a>
                                            <a href="#" tabindex="0"><i class="zmdi zmdi-star-outline"></i></a>
                                            <span class="text-black-5">( 27 Rating )</span>
                                        </div>
                                    </div>
                                    <!-- hr -->
                                    <hr>
                                    <!-- plus-minus-pro-action -->
                                    <div class="plus-minus-pro-action">
                                        <div class="sin-plus-minus f-left clearfix">
                                            <p class="color-title f-left">Qty</p>
                                            <div class="cart-plus-minus f-left">
                                                <input type="text" value="01" readonly="readonly" name="qtybutton" class="cart-plus-minus-box">
                                            </div>
                                        </div>
                                        <div class="sin-pro-action f-right">
                                            <ul class="action-button">
                                                <li>
                                                    <a href="#" title="Wishlist" tabindex="0"><i class="zmdi zmdi-favorite"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" data-toggle="modal" data-target="#productModal" title="Quickview" tabindex="0"><i class="zmdi zmdi-zoom-in"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Compare" tabindex="0"><i class="zmdi zmdi-refresh"></i></a>
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
                            </div>
                            <!-- single-product-info end -->
                        </div>
                    </div>
                    <!-- single-product-area end -->
                    <div class="related-product-area">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title text-left mb-40">
                                    <h2 class="uppercase">related product</h2>
                                    <h6>There are many variations of passages of brands available,</h6>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="active-related-product">
                                <!-- product-item start -->
                                <div class="col-xs-12">
                                    <div class="product-item">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="img/product/1.jpg" alt=""/>
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product.html">Product Name</a>
                                            </h6>
                                            <div class="pro-rating">
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                            </div>
                                            <h3 class="pro-price">$ 869.00</h3>
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
                                                    <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class="col-xs-12">
                                    <div class="product-item">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="img/product/1.jpg" alt=""/>
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product.html">Product Name</a>
                                            </h6>
                                            <div class="pro-rating">
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                            </div>
                                            <h3 class="pro-price">$ 869.00</h3>
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
                                                    <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class="col-xs-12">
                                    <div class="product-item">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="img/product/1.jpg" alt=""/>
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product.html">Product Name</a>
                                            </h6>
                                            <div class="pro-rating">
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                            </div>
                                            <h3 class="pro-price">$ 869.00</h3>
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
                                                    <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- product-item end -->
                                <!-- product-item start -->
                                <div class="col-xs-12">
                                    <div class="product-item">
                                        <div class="product-img">
                                            <a href="single-product.html">
                                                <img src="img/product/1.jpg" alt=""/>
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h6 class="product-title">
                                                <a href="single-product.html">Product Name</a>
                                            </h6>
                                            <div class="pro-rating">
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                            </div>
                                            <h3 class="pro-price">$ 869.00</h3>
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
                                                    <a href="#" title="Add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- product-item end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SHOP SECTION END -->



</section>
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
                                    <span class="new-price">??160.00</span>
                                    <span class="old-price">??190.00</span>
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
@endsection
