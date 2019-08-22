<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Nikado || Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="{{asset('')}}">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="\nikado\nikado-v1.1\nikado\images\icons\icon-logo.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="\nikado\nikado-v1.1\nikado\css\bootstrap.min.css">
    <link rel="stylesheet" href="\nikado\nikado-v1.1\nikado\css\css-plugins-call.css">
    <link rel="stylesheet" href="\nikado\nikado-v1.1\nikado\css\bundle.css">
    <link rel="stylesheet" href="\nikado\nikado-v1.1\nikado\css\main.css">
    <link rel="stylesheet" href="\nikado\nikado-v1.1\nikado\css\responsive.css">
</head>
<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- Add your site or application content here -->

<!-- Body main wrapper start -->
<div class="wrapper">
    <!-- HEADER AREA START -->
      @include('Home.layouts.header')
    <!-- HRADER AREA END -->

      @yield('bodycontent')

    <!-- BRAND AREA START -->
    <div class="brand-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-1">
                        <h2>BRAND LOGO</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="brand-carousel-active owl-carousel arrow-style-1">
                        <!-- single-brand-wrapper -->
                        <div class="single-brand-wrapper">
                            <a href="#"><img src="images\brand\1.png" alt="Brand Logo"></a>
                        </div>
                        <!-- single-brand-wrapper -->
                        <div class="single-brand-wrapper">
                            <a href="#"><img src="images\brand\2.png" alt="Brand Logo"></a>
                        </div>
                        <!-- single-brand-wrapper -->
                        <div class="single-brand-wrapper">
                            <a href="#"><img src="images\brand\3.png" alt="Brand Logo"></a>
                        </div>
                        <!-- single-brand-wrapper -->
                        <div class="single-brand-wrapper">
                            <a href="#"><img src="images\brand\4.png" alt="Brand Logo"></a>
                        </div>
                        <!-- single-brand-wrapper -->
                        <div class="single-brand-wrapper">
                            <a href="#"><img src="images\brand\5.png" alt="Brand Logo"></a>
                        </div>
                        <!-- single-brand-wrapper -->
                        <div class="single-brand-wrapper">
                            <a href="#"><img src="images\brand\1.png" alt="Brand Logo"></a>
                        </div>
                        <!-- single-brand-wrapper -->
                        <div class="single-brand-wrapper">
                            <a href="#"><img src="images\brand\2.png" alt="Brand Logo"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BRAND AREA END -->

    <!-- BANNER CALL TO ACTION START -->
    <div class="banner-call-to-action-area text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <!-- single-banner-call-to-action-wrapper -->
                    <div class="single-banner-call-to-action-wrapper">
                        <img src="images\icons\arrow-left-2.png" alt="Arrow Image">
                    </div>
                </div>
                <div class="col-lg-8">
                    <!-- single-banner-call-to-action-wrapper -->
                    <div class="single-banner-call-to-action-wrapper">
                        <img src="images\banner\4.png" alt="Image of Banner">
                    </div>
                </div>
                <div class="col-lg-2">
                    <!-- single-banner-call-to-action-wrapper -->
                    <div class="single-banner-call-to-action-wrapper">
                        <img src="images\icons\arrow-right-2.png" alt="Arrow Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BANNER CALL TO ACTION AREA END -->

    <!-- FOOTER AREA START -->
    <footer class="footer-area">
        <!-- footer-top-area start -->
        <div class="footer-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-12">
                        <div class="footer-logo">
                            <img src="images\logo\footer-logo.png" alt="Nikado Footer Logo">
                        </div>
                    </div>
                    <div class="col-lg-9 col-12">
                        <div class="footer-newsletter-form">
                            <form action="#">
                                <label>Newsletter Sign Up</label>
                                <input type="text" name="signup" placeholder="Your email address">
                                <input type="submit" name="submit" value="Subscribe">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-top-area end -->
        <!-- footer-middle-area start -->
        <div class="footer-middle-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- single-footer-wrapper -->
                        <div class="single-footer-wrapper">
                            <h4 class="footer-title">Information</h4>
                            <div class="footer-menu">
                                <nav>
                                    <ul>
                                        <li><a href="blog.html">Our Blog</a></li>
                                        <li><a href="shop.html">About Our Shop</a></li>
                                        <li><a href="single-product.html">Secure Shopping</a></li>
                                        <li><a href="checkout.html">Delivery infomation</a></li>
                                        <li><a href="contact.html">Store Locations</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- single-footer-wrapper -->
                        <div class="single-footer-wrapper">
                            <h4 class="footer-title">My Account</h4>
                            <div class="footer-menu">
                                <nav>
                                    <ul>
                                        <li><a href="my-account.html">My Account</a></li>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="cart.html">Shopping cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- single-footer-wrapper -->
                        <div class="single-footer-wrapper">
                            <h4 class="footer-title">Customer Service</h4>
                            <div class="footer-menu">
                                <nav>
                                    <ul>
                                        <li><a href="contact.html">International Shipping</a></li>
                                        <li><a href="terms-conditions.html">Terms & Condition</a></li>
                                        <li><a href="shop-list-view.html">Affiliates</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li><a href="blog.html">Blog</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- single-footer-wrapper -->
                        <div class="single-footer-wrapper">
                            <h4 class="footer-title">Extras</h4>
                            <div class="footer-menu">
                                <nav>
                                    <ul>
                                        <li><a href="contact.html">Store Locations</a></li>
                                        <li><a href="checkout.html">Gift Vouchers</a></li>
                                        <li><a href="shop-list-view.html">Affiliates</a></li>
                                        <li><a href="service.html">Specials</a></li>
                                        <li><a href="index.html">Brands</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-middle-area end -->
        <!-- footer-call-to-action-area start -->
        <div class="footer-call-to-action-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-12">
                        <!-- single-footer-call-to-wrapper -->
                        <div class="single-footer-call-to-wrapper">
                            <label><i class="fa fa-phone"></i>Do you have<br>a question?</label>
                            <strong class="content"><a href="tel:+0123456789">+0123 456 789</a></strong>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <!-- single-footer-call-to-wrapper -->
                        <div class="single-footer-call-to-wrapper">
                            <label><i class="fa fa-phone"></i>Offer<br>Quiction?</label>
                            <strong class="content"><a href="mailto:Contact@nikado.com">Contact@nikado.com</a></strong>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <!-- single-footer-call-to-wrapper -->
                        <div class="single-footer-call-to-wrapper">
                            <label><i class="fa fa-phone"></i>Support<br>Question?</label>
                            <strong class="content"><a href="mailto:support@nikado.com">support@nikado.com</a></strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-call-to-action-area end -->
        <!-- footer-bottom-area start -->
        <div class="footer-bottom-area text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text">
                            <p>Copyright Nikado. All Rights Reserved </p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="payment-accept">
                            <ul>
                                <li><a href="#" title="PayPal"><img src="images\icons\1.png" alt="Payment"></a></li>
                                <li><a href="#" title="Discover"><img src="images\icons\2.png" alt="Payment"></a></li>
                                <li><a href="#" title="Visa"><img src="images\icons\3.png" alt="Payment"></a></li>
                                <li><a href="#" title="PayPal"><img src="images\icons\4.png" alt="Payment"></a></li>
                                <li><a href="#" title="MasterCard"><img src="images\icons\5.png" alt="Payment"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom-area end -->
    </footer>
    <!-- FOOTER AREA END -->

    <!-- QUICKVIEW PRODUCT START -->
    <div id="quickview-wrapper">
        <!-- Modal -->
        <div class="modal fade" id="product_modal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-close-btn">
                        <button class="close" data-dismiss="modal">
                            <i class="fa fa-times"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6">
                                    <!-- modal-product-image -->
                                    <div class="modal-product-image">
                                        <!-- product-details-gallery -->
                                        <div class="product-details-tab-1 mb-80">
                                            <div class="tab-content product-details-large">
                                                <div class="tab-pane active" id="product-details-tab-1-1">
                                                    <div class="easyzoom easyzoom--overlay">
                                                        <a href="images\product\1.jpeg"><img src="images\product\1.jpeg" alt="Images of Product"></a>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="product-details-tab-1-2">
                                                    <div class="easyzoom easyzoom--overlay">
                                                        <a href="images\product\2.jpeg"><img src="images\product\2.jpeg" alt="Images of Product"></a>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="product-details-tab-1-3">
                                                    <div class="easyzoom easyzoom--overlay">
                                                        <a href="images\product\3.jpeg"><img src="images\product\3.jpeg" alt="Images of Product"></a>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="product-details-tab-1-4">
                                                    <div class="easyzoom easyzoom--overlay">
                                                        <a href="images\product\4.jpeg"><img src="images\product\4.jpeg" alt="Images of Product"></a>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="product-details-tab-1-5">
                                                    <div class="easyzoom easyzoom--overlay">
                                                        <a href="images\product\5.jpeg"><img src="images\product\5.jpeg" alt="Images of Product"></a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="nav product-details-small modal-tab-carousel-active owl-carousel arrow-style-3">
                                                <a class="active" href="#product-details-tab-1-1">
                                                    <img src="images\product\1.jpeg" alt="Images of Product">
                                                </a>
                                                <a href="#product-details-tab-1-2">
                                                    <img src="images\product\2.jpeg" alt="Images of Product">
                                                </a>
                                                <a href="#product-details-tab-1-3">
                                                    <img src="images\product\3.jpeg" alt="Images of Product">
                                                </a>
                                                <a href="#product-details-tab-1-4">
                                                    <img src="images\product\4.jpeg" alt="Images of Product">
                                                </a>
                                                <a href="#product-details-tab-1-5">
                                                    <img src="images\product\5.jpeg" alt="Images of Product">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!-- modal-product-info -->
                                    <div class="modal-product-info">
                                        <h3>Handcrafted Supper Mug</h3>
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
                                        <p class="in-stock">1000 In Stock</p>
                                        <div class="see-all-features">
                                            <a href="#">See all features</a>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do tempor incididun ut labore et dolore magna aliqua. Ut enim ad mi , quis nostrud veniam exercitation .</p>
                                        <!-- modal-product-color -->
                                        <div class="modal-product-color clearfix">
                                            <select class="nice-select-menu">
                                                <option data-display="Color">Nothing</option>
                                                <option value="1">Black</option>
                                                <option value="2">White</option>
                                                <option value="2">Gold</option>
                                                <option value="3" disabled="">Red</option>
                                                <option value="4">Blue</option>
                                            </select>
                                        </div>
                                        <!-- product-quantity -->
                                        <div class="product-quantity clearfix">
                                            <label class="pull-left">Qty : </label>
                                            <div class="cart-plus-minus pull-left">
                                                <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                            </div>
                                        </div>
                                        <div class="modal-product-action clearfix">
                                            <a href="#" class="addtocart" data-toggle="tooltip" data-original-title="Add to cart"><i class="fa fa-shopping-bag"></i>Add to Cart</a>
                                            <a href="#" data-toggle="tooltip" data-original-title="Compare"><i class="fa fa-exchange"></i></a>
                                            <a href="wishlist.html" data-toggle="tooltip" data-original-title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- .modal-content -->
            </div><!-- .modal-dialog -->
        </div><!-- END Modal -->
    </div>
    <!-- QUICKVIEW PRODUCT END -->
</div>
<!-- Body main wrapper end -->


<!-- jQuery Local -->
<script src="\nikado\nikado-v1.1\nikado\js\jquery-3.2.1.min.js"></script>

<!-- Popper min js -->
<script src="\nikado\nikado-v1.1\nikado\js\popper.min.js"></script>
<!-- Bootstrap min js  -->
<script src="\nikado\nikado-v1.1\nikado\js\bootstrap.min.js"></script>
<!-- All plugins here -->
<script src="\nikado\nikado-v1.1\nikado\js\plugins.js"></script>
<!-- Main js  -->
<script src="\nikado\nikado-v1.1\nikado\js\main.js"></script>
</body>
</html>

