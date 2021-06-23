@extends('layout')
@section('content')
<!-- BREADCRUMBS SETCTION START -->
<div class="breadcrumbs-section plr-200 mb-80">
    <div class="breadcrumbs overlay-bg">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="breadcrumbs-inner">
                        <h1 class="breadcrumbs-title">product grid view</h1>
                        <ul class="breadcrumb-list">
                            <li><a href="index.html">Home</a></li>
                            <li>product grid view</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMBS SETCTION END -->

<!-- Start page content -->
<div id="page-content" class="page-wrapper">

    <!-- SHOP SECTION START -->
    <div class="shop-section mb-80">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-md-push-3 col-xs-12">
                    <div class="shop-content">
                        <!-- shop-option start -->
                        <div class="shop-option box-shadow mb-30 clearfix">
                            <!-- Nav tabs -->
                            <ul class="shop-tab f-left" role="tablist">
                                <li class="active">
                                    <a href="#grid-view" data-toggle="tab"><i class="zmdi zmdi-view-module"></i></a>
                                </li>
                                <li>
                                    <a href="#list-view" data-toggle="tab"><i class="zmdi zmdi-view-list-alt"></i></a>
                                </li>
                            </ul>
                            <!-- short-by -->
                            <div class="short-by f-left text-center">
                                <span>Sort by :</span>
                                <select>
                                    <option value="volvo">Newest items</option>
                                    <option value="saab">Saab</option>
                                    <option value="mercedes">Mercedes</option>
                                    <option value="audi">Audi</option>
                                </select>
                            </div>
                            <!-- showing -->
                            <div class="showing f-right text-right">
                                <span>Showing : 05 Results.</span>
                            </div>
                        </div>
                        <!-- shop-option end -->
                        <!-- Tab Content start -->
                        <div class="tab-content">
                            <!-- grid-view -->
                            <div role="tabpanel" class="tab-pane active" id="grid-view">
                                <div class="row">
                                    @foreach($products as $item)
                                    <!-- product-item start -->
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img src="../storage/{{$item->gallery}}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <h6 class="product-title">
                                                    <a href="product-detail/{{$item->id}}">{{$item->name}}</a>
                                                </h6>
                                                <div class="pro-rating">
                                                    <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                    <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                    <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                                </div>
                                                <h3 class="pro-price">Rs. {{$item->price}}</h3>
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
                                                            <input type="hidden" name="product_id" value="{{$item->id}}">
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
                                    <!-- product-item end -->
                                        @endforeach
                                </div>
                            </div>
                            <!-- list-view -->
                            <div role="tabpanel" class="tab-pane" id="list-view">
                                <div class="row">
                                    <!-- product-item start -->
                                    @foreach($products as $item)
                                    <div class="col-md-12">
                                        <div class="shop-list product-item">
                                            <div class="product-img">
                                                <a href="product-detail/{{$item->id}}">
                                                    <img src="../storage/{{$item->gallery}}" alt=""/>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <div class="clearfix">
                                                    <h6 class="product-title f-left">
                                                        <a href="product-detail/{{$item->id}}">{{$item->name}}</a>
                                                    </h6>
                                                    <div class="pro-rating f-right">
                                                        <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                        <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                        <a href="#"><i class="zmdi zmdi-star"></i></a>
                                                        <a href="#"><i class="zmdi zmdi-star-half"></i></a>
                                                        <a href="#"><i class="zmdi zmdi-star-outline"></i></a>
                                                    </div>
                                                </div>
                                                <h6 class="brand-name mb-30">{{$category->name}}</h6>
                                                <h3 class="pro-price">Rs. {{$item->price}}</h3>
                                                <p>{{$item->description}}</p>
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
                                    @endforeach

                                </div>
                            </div>
                        </div>
                        <!-- Tab Content end -->
                        <!-- shop-pagination start -->
                        <ul class="shop-pagination box-shadow text-center ptblr-10-30">
                             <li>{{ $products->links()}}</li>
                            <!--
                            <li><a href="#"><i class="zmdi zmdi-chevron-left"></i></a></li>
                            <li><a href="#">01</a></li>
                            <li><a href="#">02</a></li>
                            <li><a href="#">03</a></li>
                            <li><a href="#">...</a></li>
                            <li><a href="#">05</a></li>
                            <li class="active"><a href="#"><i class="zmdi zmdi-chevron-right"></i></a></li>
                            -->
                        </ul>
                        <!-- shop-pagination end -->
                    </div>
                </div>
                <div class="col-md-3 col-md-pull-9 col-xs-12">
                    <!-- widget-search -->
                    <aside class="widget-search mb-30">
                        <form action="#">
                            <input type="text" placeholder="Search here...">
                            <button type="submit"><i class="zmdi zmdi-search"></i></button>
                        </form>
                    </aside>
                    <!-- widget-categories -->
                    <aside class="widget widget-categories box-shadow mb-30">
                        <h6 class="widget-title border-left mb-20">Categories</h6>
                        <div id="cat-treeview" class="product-cat">
                            <ul>
                                @foreach($categories as $item2)
                                <li class="open"><a href="{{$item2->id}}">{{$item2->name}}</a>
                                </li>
                                @endforeach

                            </ul>
                        </div>
                    </aside>
                    <!-- shop-filter -->
                    <aside class="widget shop-filter box-shadow mb-30">
                        <h6 class="widget-title border-left mb-20">Price</h6>
                        <div class="price_filter">
                            <div class="price_slider_amount">
                                <input type="submit"  value="You range :"/>
                                <input type="text" id="amount" name="price"  placeholder="Add Your Price" />
                            </div>
                            <div id="slider-range"></div>
                        </div>
                    </aside>

                </div>
            </div>
        </div>
    </div>
    <!-- SHOP SECTION END -->
</div>
<!-- End page content -->
@endsection
