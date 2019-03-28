@extends('vendor.ezp.layout')
@section('title', __('Homepage'))
@section('body-class', 'home')
@section('content')
@include('vendor.ezp.partials.slider')
<!-- ***** New Arrivals Area Start ***** -->
<section class="new_arrivals_area section_padding_100 clearfix">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_heading new_arrivals">
                    <h5>Brands</h5>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="new_arrivals_slides">
                    @foreach (App\Company::all() as $item)
                    <!-- Singel Arrivals Slide Start -->
                    <div class="single_arrivals_slide">
                        <a href="/home" class="product_image">
                            <!-- Product Image -->
                            <img class="normal_img" src="{{ asset('storage/'. $item->image)}}" alt="">
                            <img class="hover_img" src="{{ asset('storage/'. $item->image)}}" alt="">

                            <!-- Product Badge -->
                            <div class="product_badge">
                                <span class="badge-new">{{ $item->name }}</span>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** New Arrivals Area End ***** -->
<!-- ***** New Arrivals Area Start ***** -->
<div class="new_arrival home-3 section_padding_70">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="popular_section_heading mb-50 text-center">
                    <h5>POPULAR Cards</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach (App\Product::with('company')->get() as $item)
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="single_popular_item">
                        <div class="product_image">
                            <!-- Product Image -->
                            <img class="first_img" src="{{ asset('storage/'.$item->image) }}" alt="">
                            <img class="hover_img" src="{{ asset('storage/'.$item->image) }}" alt="">
                            <!-- Wishlist -->
                            <div class="product_wishlist">
                                <a href="wishlist.html" target="_blank"><i class="ti-heart"></i></a>
                            </div>
                            <!-- Add to cart -->
                            <div class="product_add_to_cart">
                                <a href="#"><i class="ti-shopping-cart" aria-hidden="true"></i> Add to Cart</a>
                            </div>
                        </div>
                        <!-- Product Description -->
                        <div class="product_description">
                            <h5><a href="#">{{ $item->name }}</a></h5>
                            <p>{{ $item->company->name }}</p>
                            <h6>{{ $item->price }} <span>{{ $item->price }}</span></h6>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- ***** New Arrivals Area End ***** -->
<!-- ***** Popular Brands Area Start ***** -->
<section class="popular_brands_area section_padding_100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="popular_section_heading mb-30">
                    <h5>Popular Brands</h5>
                </div>
            </div>
            <div class="col-12">
                <div class="popular_brands_slide">
                    @foreach (App\Company::all() as $item)
                    <div class="single_brands filter-grey">
                        <img src="{{ asset('storage/'. $item->image)}}" alt="">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
<!-- ***** Popular Brands Area End ***** -->
@section('extra-css')
<style>
    .filter-grey {
        -webkit-filter: grayscale(100%);
        filter: grayscale(100%);
    }

</style>
@endsection
