@extends('vendor.ezp.layout')
@section('title', __('Shop'))
@section('content')
<!-- ***** Quick View Modal Area Start ***** -->
<div class="modal fade" id="quickview" tabindex="-1" role="dialog" aria-labelledby="quickview" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close btn" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body">
                <div class="quickview_body">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-5">
                                <div class="quickview_pro_img">
                                    <img class="first_img" src="img/product-img/new-1-back.png" alt="">
                                    <img class="hover_img" src="img/product-img/new-1.png" alt="">
                                    <!-- Product Badge -->
                                    <div class="product_badge">
                                        <span class="badge-new">New</span>
                                    </div>

                                </div>
                            </div>
                            <div class="col-12 col-lg-7">
                                <div class="quickview_pro_des">
                                    <h4 class="title">Boutique Silk Dress</h4>
                                    <div class="top_seller_product_rating mb-15">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <h5 class="price">$120.99 <span>$130</span></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia expedita
                                        quibusdam aspernatur, sapiente consectetur accusantium perspiciatis praesentium
                                        eligendi, in fugiat?</p>
                                    <a href="#">View Full Product Details</a>
                                </div>
                                <!-- Add to Cart Form -->
                                <form class="cart" method="post">
                                    <div class="quantity">
                                        <span class="qty-minus"
                                            onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i
                                                class="fa fa-minus" aria-hidden="true"></i></span>
                                        <input type="number" class="qty-text" id="qty" step="1" min="1" max="12"
                                            name="quantity" value="1">
                                        <span class="qty-plus"
                                            onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i
                                                class="fa fa-plus" aria-hidden="true"></i></span>
                                    </div>
                                    <button type="submit" name="addtocart" value="5" class="cart-submit">Add to
                                        cart</button>
                                    <!-- Wishlist -->
                                    <div class="modal_pro_wishlist">
                                        <a href="wishlist.html" target="_blank"><i class="ti-heart"></i></a>
                                    </div>
                                    <!-- Compare -->
                                    <div class="modal_pro_compare">
                                        <a href="compare.html" target="_blank"><i class="ti-stats-up"></i></a>
                                    </div>
                                </form>

                                <div class="share_wf mt-30">
                                    <p>Share With Friend</p>
                                    <div class="_icon">
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
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
<!-- ***** Quick View Modal Area End ***** -->

<section class="shop_grid_area section_padding_100_70">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3">
                <div class="shop_sidebar_area">
                    <div class="widget catagory mb-30">
                        <h6 class="widget-title">Product Categories</h6>
                        <div class="widget-desc">
                            <!-- Single Checkbox -->
                            <div class="custom-control custom-radio d-flex align-items-center mb-2">
                                <input type="radio" class="custom-control-input" name="cat" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">Men <span
                                        class="text-muted">(109)</span></label>
                            </div>
                            <!-- Single Checkbox -->
                            <div class="custom-control custom-radio d-flex align-items-center mb-2">
                                    <input type="radio" class="custom-control-input" name="cat" id="customCheck2">
                                    <label class="custom-control-label" for="customCheck2">Men <span
                                            class="text-muted">(109)</span></label>
                                </div>
                        </div>
                    </div>

                    {{-- <div class="widget price mb-30">
                        <h6 class="widget-title">Filter by Price</h6>
                        <div class="widget-desc">
                            <div class="slider-range">
                                <div data-min="0" data-max="3000" data-unit="$"
                                    class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"
                                    data-value-min="0" data-value-max="1350" data-label-result="Price:">
                                    <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                    <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                    <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                </div>
                                <div class="range-price">Price: 0 - 1350</div>
                            </div>
                        </div>
                    </div>

                    <div class="widget color mb-30">
                        <h6 class="widget-title">Filter by Color</h6>
                        <div class="widget-desc">
                            <!-- Single Checkbox -->
                            <div class="custom-control custom-checkbox d-flex align-items-center mb-2">
                                <input type="checkbox" class="custom-control-input" id="customCheck6">
                                <label class="custom-control-label black" for="customCheck6">Black <span
                                        class="text-muted">(9)</span></label>
                            </div>
                            <!-- Single Checkbox -->
                            <div class="custom-control custom-checkbox d-flex align-items-center mb-2">
                                <input type="checkbox" class="custom-control-input" id="customCheck7">
                                <label class="custom-control-label pink" for="customCheck7">Pink <span
                                        class="text-muted">(6)</span></label>
                            </div>
                            <!-- Single Checkbox -->
                            <div class="custom-control custom-checkbox d-flex align-items-center mb-2">
                                <input type="checkbox" class="custom-control-input" id="customCheck8">
                                <label class="custom-control-label red" for="customCheck8">Red <span
                                        class="text-muted">(8)</span></label>
                            </div>
                            <!-- Single Checkbox -->
                            <div class="custom-control custom-checkbox d-flex align-items-center mb-2">
                                <input type="checkbox" class="custom-control-input" id="customCheck9">
                                <label class="custom-control-label purple" for="customCheck9">Purple <span
                                        class="text-muted">(4)</span></label>
                            </div>
                            <!-- Single Checkbox -->
                            <div class="custom-control custom-checkbox d-flex align-items-center">
                                <input type="checkbox" class="custom-control-input" id="customCheck10">
                                <label class="custom-control-label white" for="customCheck10">White <span
                                        class="text-muted">(7)</span></label>
                            </div>
                        </div>
                    </div> --}}

                    {{-- <div class="widget rating mb-30">
                        <h6 class="widget-title">Average Rating</h6>
                        <div class="widget-desc">
                            <ul>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star"
                                            aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i
                                            class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star"
                                            aria-hidden="true"></i> <span class="text-muted">(103)</span></a></li>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star"
                                            aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i
                                            class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o"
                                            aria-hidden="true"></i> <span class="text-muted">(78)</span></a></li>
                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star"
                                            aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i
                                            class="fa fa-star-o" aria-hidden="true"></i> <i class="fa fa-star-o"
                                            aria-hidden="true"></i> <span class="text-muted">(47)</span></a></li>
                            </ul>
                        </div>
                    </div> --}}

                </div>
            </div>

            <div class="col-12 col-md-9">
                <div class="shop_grid_product_area">
                    <div class="shop_top_sidebar_area mb-30">
                        <div class="view_area d-inline-block">
                            <div class="grid_view d-inline-block"><a href="shop-grid-left-sidebar.html"><i
                                        class="fa fa-th" aria-hidden="true"></i></a></div>
                            <div class="list_view ml-15 d-inline-block"><a href="shop-list-left-sidebar.html"><i
                                        class="fa fa-th-list" aria-hidden="true"></i></a></div>
                        </div>
                        {{-- <div class="search_by_terms">
                            <select class="custom-select widget-title">
                                <option selected>Short by Popularity</option>
                                <option value="1">Short by Newest</option>
                                <option value="2">Short by Sales</option>
                                <option value="3">Short by Ratings</option>
                            </select> --}}
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="single_product_area mb-30">
                                <div class="single_arrivals_slide">
                                    <div class="product_image">
                                        <!-- Product Image -->
                                        <img class="normal_img" src="img/product-img/new-1-back.png" alt="">
                                        <img class="hover_img" src="img/product-img/new-1.png" alt="">

                                        <!-- Product Badge -->
                                        <div class="product_badge">
                                            <span class="badge-new">New</span>
                                        </div>
                                        <!-- Wishlist -->
                                        <div class="product_wishlist">
                                            <a href="#" title="Wishlist"><i class="ti-heart"></i></a>
                                        </div>
                                        <!-- Compare -->
                                        <div class="product_compare">
                                            <a href="#" title="Compare"><i class="ti-stats-up"></i></a>
                                        </div>
                                        <!-- Add to cart -->
                                        <div class="product_add_to_cart">
                                            <a href="#"><i class="ti-shopping-cart" aria-hidden="true"></i> Add to
                                                Cart</a>
                                        </div>
                                        <!-- Quick View -->
                                        <div class="product_quick_view">
                                            <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-eye"
                                                    aria-hidden="true"></i> Quick View</a>
                                        </div>
                                    </div>
                                    <!-- Product Description -->
                                    <div class="product_description">
                                        <p class="brand_name">Top</p>
                                        <h5><a href="#">Flowered Dress</a></h5>
                                        <h6>$69.99 <span>$78.99</span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="single_product_area mb-30">
                                <div class="single_arrivals_slide">
                                    <div class="product_image">
                                        <!-- Product Image -->
                                        <img class="normal_img" src="img/product-img/new-2.png" alt="">
                                        <img class="hover_img" src="img/product-img/new-2-back.png" alt="">

                                        <!-- Product Badge -->
                                        <div class="product_badge">
                                            <span class="badge-featured">Featured</span>
                                        </div>
                                        <!-- Wishlist -->
                                        <div class="product_wishlist">
                                            <a href="#" title="Wishlist"><i class="ti-heart"></i></a>
                                        </div>
                                        <!-- Compare -->
                                        <div class="product_compare">
                                            <a href="#" title="Compare"><i class="ti-stats-up"></i></a>
                                        </div>
                                        <!-- Add to cart -->
                                        <div class="product_add_to_cart">
                                            <a href="#"><i class="ti-shopping-cart" aria-hidden="true"></i> Add to
                                                Cart</a>
                                        </div>
                                        <!-- Quick View -->
                                        <div class="product_quick_view">
                                            <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-eye"
                                                    aria-hidden="true"></i> Quick View</a>
                                        </div>
                                    </div>
                                    <!-- Product Description -->
                                    <div class="product_description">
                                        <p class="brand_name">Top</p>
                                        <h5><a href="#">Boutique Silk Dress</a></h5>
                                        <h6>$69.99 <span>$78.99</span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="single_product_area mb-30">
                                <div class="single_arrivals_slide">
                                    <div class="product_image">
                                        <!-- Product Image -->
                                        <img class="normal_img" src="img/product-img/new-3.png" alt="">
                                        <img class="hover_img" src="img/product-img/new-3-back.png" alt="">

                                        <!-- Product Badge -->
                                        <div class="product_badge">
                                            <span class="badge-offer">-27%</span>
                                        </div>
                                        <!-- Wishlist -->
                                        <div class="product_wishlist">
                                            <a href="#" title="Wishlist"><i class="ti-heart"></i></a>
                                        </div>
                                        <!-- Compare -->
                                        <div class="product_compare">
                                            <a href="#" title="Compare"><i class="ti-stats-up"></i></a>
                                        </div>
                                        <!-- Add to cart -->
                                        <div class="product_add_to_cart">
                                            <a href="#"><i class="ti-shopping-cart" aria-hidden="true"></i> Add to
                                                Cart</a>
                                        </div>
                                        <!-- Quick View -->
                                        <div class="product_quick_view">
                                            <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-eye"
                                                    aria-hidden="true"></i> Quick View</a>
                                        </div>
                                    </div>
                                    <!-- Product Description -->
                                    <div class="product_description">
                                        <p class="brand_name">Top</p>
                                        <h5><a href="#">Silk Dress</a></h5>
                                        <h6>$69.99 <span>$78.99</span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="single_product_area mb-30">
                                <div class="single_arrivals_slide">
                                    <div class="product_image">
                                        <!-- Product Image -->
                                        <img class="normal_img" src="img/product-img/new-4.png" alt="">
                                        <img class="hover_img" src="img/product-img/new-4-back.png" alt="">

                                        <!-- Product Badge -->
                                        <div class="product_badge">
                                            <span class="badge-sale">New</span>
                                        </div>
                                        <!-- Wishlist -->
                                        <div class="product_wishlist">
                                            <a href="#" title="Wishlist"><i class="ti-heart"></i></a>
                                        </div>
                                        <!-- Compare -->
                                        <div class="product_compare">
                                            <a href="#" title="Compare"><i class="ti-stats-up"></i></a>
                                        </div>
                                        <!-- Add to cart -->
                                        <div class="product_add_to_cart">
                                            <a href="#"><i class="ti-shopping-cart" aria-hidden="true"></i> Add to
                                                Cart</a>
                                        </div>
                                        <!-- Quick View -->
                                        <div class="product_quick_view">
                                            <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-eye"
                                                    aria-hidden="true"></i> Quick View</a>
                                        </div>
                                    </div>
                                    <!-- Product Description -->
                                    <div class="product_description">
                                        <p class="brand_name">Top</p>
                                        <h5><a href="#">Printed Dress</a></h5>
                                        <h6>$69.99 <span>$78.99</span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="single_product_area mb-30">
                                <div class="single_arrivals_slide">
                                    <div class="product_image">
                                        <!-- Product Image -->
                                        <img class="normal_img" src="img/product-img/new-5.png" alt="">
                                        <img class="hover_img" src="img/product-img/new-5-back.png" alt="">

                                        <!-- Product Badge -->
                                        <div class="product_badge">
                                            <span class="badge-new">New</span>
                                        </div>
                                        <!-- Wishlist -->
                                        <div class="product_wishlist">
                                            <a href="#" title="Wishlist"><i class="ti-heart"></i></a>
                                        </div>
                                        <!-- Compare -->
                                        <div class="product_compare">
                                            <a href="#" title="Compare"><i class="ti-stats-up"></i></a>
                                        </div>
                                        <!-- Add to cart -->
                                        <div class="product_add_to_cart">
                                            <a href="#"><i class="ti-shopping-cart" aria-hidden="true"></i> Add to
                                                Cart</a>
                                        </div>
                                        <!-- Quick View -->
                                        <div class="product_quick_view">
                                            <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-eye"
                                                    aria-hidden="true"></i> Quick View</a>
                                        </div>
                                    </div>
                                    <!-- Product Description -->
                                    <div class="product_description">
                                        <p class="brand_name">Top</p>
                                        <h5><a href="#">Cotton Dress</a></h5>
                                        <h6>$69.99 <span>$78.99</span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="single_product_area mb-30">
                                <div class="single_arrivals_slide">
                                    <div class="product_image">
                                        <!-- Product Image -->
                                        <img class="normal_img" src="img/product-img/new-6.png" alt="">
                                        <img class="hover_img" src="img/product-img/new-6-back.png" alt="">

                                        <!-- Product Badge -->
                                        <div class="product_badge">
                                            <span class="badge-new">New</span>
                                        </div>
                                        <!-- Wishlist -->
                                        <div class="product_wishlist">
                                            <a href="#" title="Wishlist"><i class="ti-heart"></i></a>
                                        </div>
                                        <!-- Compare -->
                                        <div class="product_compare">
                                            <a href="#" title="Compare"><i class="ti-stats-up"></i></a>
                                        </div>
                                        <!-- Add to cart -->
                                        <div class="product_add_to_cart">
                                            <a href="#"><i class="ti-shopping-cart" aria-hidden="true"></i> Add to
                                                Cart</a>
                                        </div>
                                        <!-- Quick View -->
                                        <div class="product_quick_view">
                                            <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-eye"
                                                    aria-hidden="true"></i> Quick View</a>
                                        </div>
                                    </div>
                                    <!-- Product Description -->
                                    <div class="product_description">
                                        <p class="brand_name">Top</p>
                                        <h5><a href="#">Flowered Printed Jeans</a></h5>
                                        <h6>$69.99 <span>$78.99</span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="single_product_area mb-30">
                                <div class="single_arrivals_slide">
                                    <div class="product_image">
                                        <!-- Product Image -->
                                        <img class="normal_img" src="img/product-img/new-7.png" alt="">
                                        <img class="hover_img" src="img/product-img/new-7-back.png" alt="">

                                        <!-- Product Badge -->
                                        <div class="product_badge">
                                            <span class="badge-new">New</span>
                                        </div>
                                        <!-- Wishlist -->
                                        <div class="product_wishlist">
                                            <a href="#" title="Wishlist"><i class="ti-heart"></i></a>
                                        </div>
                                        <!-- Compare -->
                                        <div class="product_compare">
                                            <a href="#" title="Compare"><i class="ti-stats-up"></i></a>
                                        </div>
                                        <!-- Add to cart -->
                                        <div class="product_add_to_cart">
                                            <a href="#"><i class="ti-shopping-cart" aria-hidden="true"></i> Add to
                                                Cart</a>
                                        </div>
                                        <!-- Quick View -->
                                        <div class="product_quick_view">
                                            <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-eye"
                                                    aria-hidden="true"></i> Quick View</a>
                                        </div>
                                    </div>
                                    <!-- Product Description -->
                                    <div class="product_description">
                                        <p class="brand_name">Top</p>
                                        <h5><a href="#">Boutique Dress</a></h5>
                                        <h6>$69.99 <span>$78.99</span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="single_product_area mb-30">
                                <div class="single_arrivals_slide">
                                    <div class="product_image">
                                        <!-- Product Image -->
                                        <img class="normal_img" src="img/product-img/new-8.png" alt="">
                                        <img class="hover_img" src="img/product-img/new-8-back.png" alt="">

                                        <!-- Product Badge -->
                                        <div class="product_badge">
                                            <span class="badge-new">New</span>
                                        </div>
                                        <!-- Wishlist -->
                                        <div class="product_wishlist">
                                            <a href="#" title="Wishlist"><i class="ti-heart"></i></a>
                                        </div>
                                        <!-- Compare -->
                                        <div class="product_compare">
                                            <a href="#" title="Compare"><i class="ti-stats-up"></i></a>
                                        </div>
                                        <!-- Add to cart -->
                                        <div class="product_add_to_cart">
                                            <a href="#"><i class="ti-shopping-cart" aria-hidden="true"></i> Add to
                                                Cart</a>
                                        </div>
                                        <!-- Quick View -->
                                        <div class="product_quick_view">
                                            <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-eye"
                                                    aria-hidden="true"></i> Quick View</a>
                                        </div>
                                    </div>
                                    <!-- Product Description -->
                                    <div class="product_description">
                                        <p class="brand_name">Asos</p>
                                        <h5><a href="#"> Hoodie Crop</a></h5>
                                        <h6>$69.99 <span>$78.99</span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="single_product_area mb-30">
                                <div class="single_arrivals_slide">
                                    <div class="product_image">
                                        <!-- Product Image -->
                                        <img class="normal_img" src="img/product-img/new-9.png" alt="">
                                        <img class="hover_img" src="img/product-img/new-9-back.png" alt="">

                                        <!-- Product Badge -->
                                        <div class="product_badge">
                                            <span class="badge-new">New</span>
                                        </div>
                                        <!-- Wishlist -->
                                        <div class="product_wishlist">
                                            <a href="#" title="Wishlist"><i class="ti-heart"></i></a>
                                        </div>
                                        <!-- Compare -->
                                        <div class="product_compare">
                                            <a href="#" title="Compare"><i class="ti-stats-up"></i></a>
                                        </div>
                                        <!-- Add to cart -->
                                        <div class="product_add_to_cart">
                                            <a href="#"><i class="ti-shopping-cart" aria-hidden="true"></i> Add to
                                                Cart</a>
                                        </div>
                                        <!-- Quick View -->
                                        <div class="product_quick_view">
                                            <a href="#" data-toggle="modal" data-target="#quickview"><i class="ti-eye"
                                                    aria-hidden="true"></i> Quick View</a>
                                        </div>
                                    </div>
                                    <!-- Product Description -->
                                    <div class="product_description">
                                        <p class="brand_name">Top</p>
                                        <h5><a href="#">Golden Singlasses</a></h5>
                                        <h6>$69.99 <span>$78.99</span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="shop_pagination_area">
                    <nav aria-label="Page navigation">
                        <ul class="pagination pagination-sm justify-content-center">
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">8</a></li>
                            <li class="page-item"><a class="page-link" href="#">9</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- ***** Special Featured Area Start ***** -->
<section class="special_feature_area d-md-flex align-items-center">
    <!-- Single Feature Area -->
    <div class="single_feature_area d-flex align-items-center justify-content-center">
        <div class="feature_icon">
            <i class="ti-truck"></i>
            <span><i class="ti-check" aria-hidden="true"></i></span>
        </div>
        <div class="feature_content">
            <h6>FREE SHIPPING</h6>
            <p>For orders above $100</p>
        </div>
    </div>
    <!-- Single Feature Area -->
    <div class="single_feature_area d-flex align-items-center justify-content-center">
        <div class="feature_icon">
            <i class="ti-headphone-alt"></i>
            <span><i class="ti-check" aria-hidden="true"></i></span>
        </div>
        <div class="feature_content">
            <h6>Customer Care</h6>
            <p>24/7 Friendly Support</p>
        </div>
    </div>
    <!-- Single Feature Area -->
    <div class="single_feature_area d-flex align-items-center justify-content-center">
        <div class="feature_icon">
            <i class="ti-back-left"></i>
            <span><i class="ti-check" aria-hidden="true"></i></span>
        </div>
        <div class="feature_content">
            <h6>Happy Returns</h6>
            <p>7 Days free Returns</p>
        </div>
    </div>
    <!-- Single Feature Area -->
    <div class="single_feature_area d-flex align-items-center justify-content-center">
        <div class="feature_icon">
            <i class="ti-credit-card"></i>
            <span><i class="ti-check" aria-hidden="true"></i></span>
        </div>
        <div class="feature_content">
            <h6>100% Money Back</h6>
            <p>If product is damaged</p>
        </div>
    </div>
</section>
<!-- ***** Special Featured Area End ***** -->
@endsection
