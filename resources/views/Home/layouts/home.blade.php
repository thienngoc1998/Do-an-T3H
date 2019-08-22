@extends('Home.index')
@section('bodycontent')
    <!-- PRODUCT AREA START -->
    <div class="product-area pt-60 pb-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-tab-menu">
                        <div class="nav">
                            <a class="active" data-toggle="tab" href="#product-link-1-1">Sản phẩm hot</a>
                            <a data-toggle="tab" href="#product-link-1-2">Giảm giá</a>
                            <a data-toggle="tab" href="#product-link-1-3">Sản phẩm mới </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="product-link-1-1">
                            <div class="row">

                                <div class="product-carousel-active owl-carousel arrow-style-1">
                                    @foreach($productFeatured as $item)
                                    <div class="col-lg-12">
                                        <!-- single-product-wrapper -->
                                        <div class="single-product-wrapper">
                                            <div class="product-img">
                                                <a href="single-product.html"><img src="{{asset('/products/iphone/'.$item->avatar)}}" alt="Image of Product"></a>
                                                <div class="product-hover">
                                                    <div class="quick-view">
                                                        <button class="btn btn-primary" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</button>
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <button class="btn btn-primary" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></button>
                                                        <button class="btn btn-primary" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></button>
                                                        <button  class="btn btn-primary" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-info -->
                                            <div class="product-info">
                                                <h4><a href="single-product.html">{{$item->name}}</a></h4>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span>£{{$item->unit_pr}}</span><del>{{$item->promotion_pr}}</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="product-link-1-2">
                            <div class="row">
                                <div class="product-carousel-active owl-carousel arrow-style-1">
                                    @foreach($productSale as $item)
                                    <div class="col-lg-12">
                                        <!-- single-product-wrapper -->
                                        <div class="single-product-wrapper">
                                            <div class="product-img">
                                                <a href="single-product.html"><img src="{{asset('/products/iphone/'.$item->avatar)}}" alt="Image of Product"></a>
                                                <div class="product-hover">
                                                    <div class="quick-view">
                                                        <button class="btn btn-primary" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</button>
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <button class="btn btn-primary" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></button>
                                                        <button class="btn btn-primary" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></button>
                                                        <button  class="btn btn-primary" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-info -->
                                            <div class="product-info">
                                                <h4><a href="single-product.html">{{$item->name}}</a></h4>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span>£{{$item->unit_pr}}</span><del>{{$item->promotion_pr}}</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="product-link-1-3">
                            <div class="row">
                                <div class="product-carousel-active owl-carousel arrow-style-1">
                                    @foreach($productNew as $item)
                                    <div class="col-lg-12">
                                        <!-- single-product-wrapper -->
                                        <div class="single-product-wrapper">
                                            <div class="product-img">
                                                <a href="single-product.html"><img src="{{asset('/products/iphone/'.$item->avatar)}}" alt="Image of Product"></a>
                                                <div class="product-hover">
                                                    <div class="quick-view">
                                                        <button class="btn btn-primary" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</button>
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <button class="btn btn-primary" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></button>
                                                        <button class="btn btn-primary" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></button>
                                                        <button  class="btn btn-primary" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-info -->
                                            <div class="product-info">
                                                <h4><a href="single-product.html">{{$item->name}}</a></h4>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span>£{{$item->unit_pr}}</span><del>{{$item->promotion_pr}}</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                     @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PRODUCT AREA END -->

    <!-- SERVICE AREA START -->
    <div class="service-area bg-1 color-white text-center pt-60 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <!-- single-service-wrapper -->
                    <div class="single-service-wrapper">
                        <div class="service-icon">
                            <i class="fa fa-truck"></i>
                        </div>
                        <div class="service-info">
                            <h4 class="color-theme">FREE SHIPPING</h4>
                            <p>Free shipping on all orders over $100</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <!-- single-service-wrapper -->
                    <div class="single-service-wrapper">
                        <div class="service-icon">
                            <i class="fa fa-diamond"></i>
                        </div>
                        <div class="service-info">
                            <h4 class="color-theme">MONEY BACK</h4>
                            <p>100% money back guarantee</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <!-- single-service-wrapper -->
                    <div class="single-service-wrapper">
                        <div class="service-icon">
                            <i class="fa fa-life-bouy"></i>
                        </div>
                        <div class="service-info">
                            <h4 class="color-theme">ONLINE SUPPORT</h4>
                            <p>Service support fast 24/7</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SERVICE AREA END -->

    <!-- PRODUCT AREA 2 START -->
    <div class="product-area product-area-2 pt-60 pb-30 mt--145">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-tab-menu">
                        <div class="nav">
                            <a class="active" data-toggle="tab" href="#product-link-2-1">APPLE</a>
                            <a data-toggle="tab" href="#product-link-2-2">SAM SUNG</a>
                            <a data-toggle="tab" href="#product-link-2-3">XIAOMI</a>
                            <a data-toggle="tab" href="#product-link-2-4">HUAWEI</a>
                            <a data-toggle="tab" href="#product-link-2-4">PHỤ KIỆN</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="product-link-2-1">
                            <div class="row">
                                <div class="product-carousel-active-2 owl-carousel arrow-style-1">
                                    @foreach($productApple as $item)
                                        <div class="col-lg-12">
                                            <!-- single-product-wrapper -->
                                            <div class="single-product-wrapper">
                                                <div class="product-img">
                                                    <a href="single-product.html"><img src="{{asset('/products/iphone/'.$item->avatar)}}" alt="Image of Product"></a>
                                                    <div class="product-hover">
                                                        <div class="quick-view">
                                                            <button class="btn btn-primary" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</button>
                                                        </div>
                                                        <div class="product-action clearfix">
                                                            <button class="btn btn-primary" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></button>
                                                            <button class="btn btn-primary" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></button>
                                                            <button  class="btn btn-primary" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- product-info -->
                                                <div class="product-info">
                                                    <h4><a href="single-product.html">{{$item->name}}</a></h4>
                                                    <div class="product-rattings">
                                                        <span><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star-half-o"></i></span>
                                                        <span><i class="fa fa-star-o"></i></span>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>£{{$item->unit_pr}}</span><del>{{$item->promotion_pr}}</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="product-link-2-2">
                            <div class="row">
                                <div class="product-carousel-active-2 owl-carousel arrow-style-1">
                                    @foreach($productSamSung as $item)
                                        <div class="col-lg-12">
                                            <!-- single-product-wrapper -->
                                            <div class="single-product-wrapper">
                                                <div class="product-img">
                                                    <a href="single-product.html"><img src="{{asset('/products/samsung/'.$item->avatar)}}" alt="Image of Product"></a>
                                                    <div class="product-hover">
                                                        <div class="quick-view">
                                                            <button class="btn btn-primary" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</button>
                                                        </div>
                                                        <div class="product-action clearfix">
                                                            <button class="btn btn-primary" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></button>
                                                            <button class="btn btn-primary" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></button>
                                                            <button  class="btn btn-primary" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- product-info -->
                                                <div class="product-info">
                                                    <h4><a href="single-product.html">{{$item->name}}</a></h4>
                                                    <div class="product-rattings">
                                                        <span><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star-half-o"></i></span>
                                                        <span><i class="fa fa-star-o"></i></span>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>£{{$item->unit_pr}}</span><del>{{$item->promotion_pr}}</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="product-link-2-3">
                            <div class="row">
                                <div class="product-carousel-active-2 owl-carousel arrow-style-1">
                                    @foreach($productXiaomi as $item)
                                        <div class="col-lg-12">
                                            <!-- single-product-wrapper -->
                                            <div class="single-product-wrapper">
                                                <div class="product-img">
                                                    <a href="single-product.html"><img src="{{asset('/products/xiaomi/'.$item->avatar)}}" alt="Image of Product"></a>
                                                    <div class="product-hover">
                                                        <div class="quick-view">
                                                            <button class="btn btn-primary" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</button>
                                                        </div>
                                                        <div class="product-action clearfix">
                                                            <button class="btn btn-primary" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></button>
                                                            <button class="btn btn-primary" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></button>
                                                            <button  class="btn btn-primary" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- product-info -->
                                                <div class="product-info">
                                                    <h4><a href="single-product.html">{{$item->name}}</a></h4>
                                                    <div class="product-rattings">
                                                        <span><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star-half-o"></i></span>
                                                        <span><i class="fa fa-star-o"></i></span>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>£{{$item->unit_pr}}</span><del>{{$item->promotion_pr}}</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="product-link-2-4">
                            <div class="row">
                                <div class="product-carousel-active-2 owl-carousel arrow-style-1">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PRODUCT AREA 2 END -->

    <!-- PRODUCT DEAL START -->
    <div class="product-deal-area bg-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-1">
                        <h2>DEAL OF THE DAYS</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="deal-carousel-active owl-carousel arrow-style-1">
                        <!-- single-deal-wrapper -->
                        <div class="single-deal-wrapper">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <!-- deal-img -->
                                    <div class="deal-img">
                                        <a href="single-product.html"><img src="images\product\1.jpeg" alt="Image of Product"></a>
                                        <div class="quick-view">
                                            <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <!-- deal-info -->
                                    <div class="deal-info">
                                        <div class="deal-counter">
                                            <div data-countdown="2019/02/02"></div>
                                        </div>
                                        <h4><a href="single-product.html">Handbag lobortis</a></h4>
                                        <div class="product-rattings">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star-half-o"></i></span>
                                            <span><i class="fa fa-star-o"></i></span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                        <div class="deal-price">
                                            <span>£145.00</span><del>£150.00</del>
                                        </div>
                                        <div class="select-option">
                                            <a href="#"><i class="fa fa-shopping-bag"></i>Select option</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single-deal-wrapper -->
                        <div class="single-deal-wrapper">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <!-- deal-img -->
                                    <div class="deal-img">
                                        <a href="single-product.html"><img src="images\product\2.jpeg" alt="Image of Product"></a>
                                        <div class="quick-view">
                                            <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <!-- deal-info -->
                                    <div class="deal-info">
                                        <div class="deal-counter">
                                            <div data-countdown="2019/08/02"></div>
                                        </div>
                                        <h4><a href="single-product.html">Handbag lobortis2</a></h4>
                                        <div class="product-rattings">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star-half-o"></i></span>
                                            <span><i class="fa fa-star-o"></i></span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.</p>
                                        <div class="deal-price">
                                            <span>£145.00</span><del>£150.00</del>
                                        </div>
                                        <div class="select-option">
                                            <a href="#"><i class="fa fa-shopping-bag"></i>Select option</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- - -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- DEAL OF THE DAYS AREA END -->

    <!-- PRODUCT AREA 3 START -->
    <div class="product-area product-area-3 pt-60 pb-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-tab-menu">
                        <div class="nav">
                            <a class="active" data-toggle="tab" href="#product-link-3-1">RANDOM</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="product-link-3-1">
                            <div class="row">
                                <div class="product-carousel-active owl-carousel arrow-style-1">
                                    <div class="col-lg-12">
                                        <!-- single-product-wrapper -->
                                        <div class="single-product-wrapper">
                                            <div class="product-img">
                                                <a href="single-product.html"><img src="images\product\1.jpeg" alt="Image of Product"></a>
                                                <div class="product-hover">
                                                    <div class="quick-view">
                                                        <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <a href="cart.html" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                        <a href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-info -->
                                            <div class="product-info">
                                                <h4><a href="single-product.html">Aliquam lobortis</a></h4>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span>£145.00</span><del>£150.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrapper -->
                                        <div class="single-product-wrapper">
                                            <div class="product-img">
                                                <a href="single-product.html"><img src="images\product\2.jpeg" alt="Image of Product"></a>
                                                <div class="product-hover">
                                                    <div class="quick-view">
                                                        <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <a href="cart.html" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                        <a href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-info -->
                                            <div class="product-info">
                                                <h4><a href="single-product.html">Ornare sed consequat</a></h4>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span>£145.00</span><del>£150.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrapper -->
                                        <div class="single-product-wrapper">
                                            <div class="product-img">
                                                <a href="single-product.html"><img src="images\product\3.jpeg" alt="Image of Product"></a>
                                                <div class="product-hover">
                                                    <div class="quick-view">
                                                        <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <a href="cart.html" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                        <a href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-info -->
                                            <div class="product-info">
                                                <h4><a href="single-product.html">The Shirt Women</a></h4>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span>£145.00</span><del>£150.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrapper -->
                                        <div class="single-product-wrapper">
                                            <div class="product-img">
                                                <a href="single-product.html"><img src="images\product\4.jpeg" alt="Image of Product"></a>
                                                <div class="product-hover">
                                                    <div class="quick-view">
                                                        <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <a href="cart.html" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                        <a href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-info -->
                                            <div class="product-info">
                                                <h4><a href="single-product.html">Phasellus shirt women</a></h4>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span>£145.00</span><del>£150.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrapper -->
                                        <div class="single-product-wrapper">
                                            <div class="product-img">
                                                <a href="single-product.html"><img src="images\product\5.jpeg" alt="Image of Product"></a>
                                                <div class="product-hover">
                                                    <div class="quick-view">
                                                        <a href="#" data-toggle="modal" data-target="#product_modal" title="Quick View"><i class="fa fa-search"></i>Quick View</a>
                                                    </div>
                                                    <div class="product-action clearfix">
                                                        <a href="cart.html" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                        <a href="#" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                                        <a href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product-info -->
                                            <div class="product-info">
                                                <h4><a href="single-product.html">Pellentesque men</a></h4>
                                                <div class="product-rattings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star-half-o"></i></span>
                                                    <span><i class="fa fa-star-o"></i></span>
                                                </div>
                                                <div class="product-price">
                                                    <span>£145.00</span><del>£150.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PRODUCT AREA 3 END -->

    <!-- BLOG AREA START -->
    <div class="blog-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-1">
                        <h2>BLOG POSTS</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="blog-carousel-active owl-carousel arrow-style-1">
                            <div class="col-lg-12">
                                <!-- single-blog-wrapper -->
                                <div class="single-blog-wrapper">
                                    <div class="blog-img">
                                        <a href="single-blog.html"><img src="images\blog\1.jpeg" alt="Nikado"></a>
                                    </div>
                                    <div class="blog-content clearfix">
                                        <div class="blog-date-pin">
                                            <span>10</span>
                                            <span class="month">Mar</span>
                                        </div>
                                        <div class="blog-info">
                                            <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor ac ante</p>
                                            <div class="button-2">
                                                <a href="single-blog.html">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <!-- single-blog-wrapper -->
                                <div class="single-blog-wrapper">
                                    <div class="blog-img">
                                        <a href="single-blog.html"><img src="images\blog\2.jpeg" alt="Nikado"></a>
                                    </div>
                                    <div class="blog-content clearfix">
                                        <div class="blog-date-pin">
                                            <span>10</span>
                                            <span class="month">Mar</span>
                                        </div>
                                        <div class="blog-info">
                                            <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor ac ante</p>
                                            <div class="button-2">
                                                <a href="single-blog.html">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <!-- single-blog-wrapper -->
                                <div class="single-blog-wrapper">
                                    <div class="blog-img">
                                        <a href="single-blog.html"><img src="images\blog\3.jpeg" alt="Nikado"></a>
                                    </div>
                                    <div class="blog-content clearfix">
                                        <div class="blog-date-pin">
                                            <span>10</span>
                                            <span class="month">Mar</span>
                                        </div>
                                        <div class="blog-info">
                                            <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor ac ante</p>
                                            <div class="button-2">
                                                <a href="single-blog.html">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <!-- single-blog-wrapper -->
                                <div class="single-blog-wrapper">
                                    <div class="blog-img">
                                        <a href="single-blog.html"><img src="images\blog\3.jpeg" alt="Nikado"></a>
                                    </div>
                                    <div class="blog-content clearfix">
                                        <div class="blog-date-pin">
                                            <span>10</span>
                                            <span class="month">Mar</span>
                                        </div>
                                        <div class="blog-info">
                                            <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor ac ante</p>
                                            <div class="button-2">
                                                <a href="single-blog.html">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BLOG AREA END -->
@endsection
