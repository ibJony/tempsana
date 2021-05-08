@extends('app.layout.app')

@section('content')

@php
$featured = DB::table('products')->where('status',1)->orderBy('id','desc')->limit(12)->get();

$trend = DB::table('products')->where('status',1)->where('trend',1)->orderBy('id','desc')->limit(8)->get();

$best = DB::table('products')->where('status',1)->where('best_rated',1)->orderBy('id','desc')->limit(8)->get();

$hot = DB::table('products')
->join('brands','products.brand_id','brands.id')
->select('products.*','brands.brand_name')
->where('products.status',1)->where('hot_deal',1)->orderBy('id','desc')->limit(3)
->get();

@endphp

<!-- Hero Slider Area Start -->
@php
$category = DB::table('categories')->get();
@endphp


<!-- Banner -->
@php
$mid = DB::table('products')
->join('categories','products.category_id','categories.id')
->join('brands','products.brand_id','brands.id')
->select('products.*','brands.brand_name','categories.category_name')
->where('products.mid_slider',1)->orderBy('id','DESC')->limit(3)
->get();

@endphp

<div class="hero-area hero-slider-four">
    <div class="single-hero-slider-four" data-title="01">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero-content-wrap">
                        <div class="hero-text-7 mt-lg-5">
                            <h1> The easiest way to <br> buy furniture </h1>

                            <p class="mt-30">Order artisan-made furniture from brands you love <br/> and discover new ones, all in one place.</p>

                            <div class="button-box section-space--mt_60">
                                <a href="#" class="text-btn-normal font-weight--reguler font-lg-p"> Browse collection <i class="arrow_carrot-2right"></i></a>
                            </div>
                        </div>
                        <div class="inner-images">
                            <div class="image-one">
                                <img src="{{ asset('sanaaspace/assets/images/banners/banner1.png')}}" class="img-fluid" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    
</div>
<!-- Hero Slider Area End -->

<!-- Shopping Support Area Start -->
<div class="shopping-support-area section-space--pt_60 mb-30 ">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-shopping-support">
                    <div class="content">
                        <h6>1. Create an account</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-shopping-support">
                    <div class="content">
                        <h6>2. Shop for furniture</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6s">
                <div class="single-shopping-support">
                    <div class="content">
                        <h6>3. Get it delivered and enjoy!</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Shopping Support Area End -->

<!-- Product Area Start -->
<div class="product-wrapper section-space--ptb_120">
    <div class="container">
        <div class="tab-content mt-30">
            <div class="tab-pane fade show active" id="tab_list_01">
                <!-- product-slider-active -->
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <!-- Single Product Item Start -->
                        <div class="single-product-item text-center">
                            <div class="products-images">
                                <a href="#" class="product-thumbnail">
                                    <img src="{{ asset('sanaaspace/assets/images/living.jpeg')}}" class="img-fluid" alt="Product Images">
                                </a>
                                <div class="product-actions">
                                    <a href="#" data-toggle="modal" data-target="#prodect-modal"><i class="p-icon icon-plus"></i><span class="tool-tip">Quick View</span></a>
                                    <a href="#"><i class="p-icon icon-bag2"></i> <span class="tool-tip">Add to cart</span></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h6 class="prodect-title"><a href="#l">Living Room Furniture</a></h6>
                            </div>
                        </div><!-- Single Product Item End -->
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <!-- Single Product Item Start -->
                        <div class="single-product-item text-center">
                            <div class="products-images">
                                <a href="#" class="product-thumbnail">
                                    <img src="{{ asset('sanaaspace/assets/images/bedroom.jpeg')}}" class="img-fluid" alt="Product Images">

                                </a>
                                <div class="product-actions">
                                    <a href="#" data-toggle="modal" data-target="#prodect-modal"><i class="p-icon icon-plus"></i><span class="tool-tip">Quick View</span></a>
                                    <a href="#"><i class="p-icon icon-bag2"></i> <span class="tool-tip">Add to cart</span></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h6 class="prodect-title"><a href="#">Bedroom Furniture</a></h6>
                            </div>
                        </div><!-- Single Product Item End -->
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <!-- Single Product Item Start -->
                        <div class="single-product-item text-center">
                            <div class="products-images">
                                <a href="#" class="product-thumbnail">
                                    <img src="{{ asset('sanaaspace/assets/images/dining.jpeg')}}" class="img-fluid" alt="Product Images">

                                </a>
                                <div class="product-actions">
                                    <a href="#" data-toggle="modal" data-target="#prodect-modal"><i class="p-icon icon-plus"></i><span class="tool-tip">Quick View</span></a>
                                    <a href="#"><i class="p-icon icon-bag2"></i> <span class="tool-tip">Add to cart</span></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h6 class="prodect-title"><a href="#">Dining Room Furniture</a></h6>
                            </div>
                        </div><!-- Single Product Item End -->
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <!-- Single Product Item Start -->
                        <div class="single-product-item text-center">
                            <div class="products-images">
                                <a href="#" class="product-thumbnail">
                                    <img src="{{ asset('sanaaspace/assets/images/storage.jpeg')}}" class="img-fluid" alt="Product Images">
                                </a>
                                <div class="product-actions">
                                    <a href="#" data-toggle="modal" data-target="#prodect-modal"><i class="p-icon icon-plus"></i><span class="tool-tip">Quick View</span></a>
                                    <a href="#"><i class="p-icon icon-bag2"></i> <span class="tool-tip">Add to cart</span></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h6 class="prodect-title"><a href="#">Storage & Organization</a></h6>
                            </div>
                        </div><!-- Single Product Item End -->
                    </div>
                </div>
            </div>


</div>
<!-- Product Area End -->

<!-- About us Area Start -->
<div class="about-us-home-area overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="about-us-min-content ">
                    <div class="container-fluid pl-0 pr-0">
                        <div class="row no-gutters align-items-center bg-gray">
                            
                            <div class="col-lg-8">
                                <div class="image-one img-fluid">
                                    <img src="{{ asset('sanaaspace/assets/images/banners/aboutus.jpg')}}" class="img-fluid" alt="Image">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="about-us-content-4 ">
                                    <h5 class="mb-30">We make furniture shopping simple</h5>
                                    <p class="pb-lg-5">Sanaa Space is an online artisan-made furniture marketplace. <br/> Enjoy a familiar e-commerce experience with all your favorite brands to choose from - and easily find what best suits your needs</p>
                                    <div class="button-box section-space--mt_60">
                                        <a href="#" class="btn--text-icon">Shop now <i class="arrow_carrot-2right"></i></a>
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
<!-- About us Area End -->

<!-- Product Area Start -->
<div class="product-wrapper section-space--ptb_120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center mb-20">
                    <h3 class="section-title">Featured Furniture</h3>
                </div>
            </div>
        </div>

        <div class="tab-content mt-30">
            <div class="tab-pane fade show active" id="tab_list_01">
                <!-- product-slider-active -->
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <!-- Single Product Item Start -->
                        <div class="single-product-item text-center">
                            <div class="products-images">
                                <a href="#" class="product-thumbnail img-fluid">
                                    <img src="{{ asset('sanaaspace/assets/products/BenchiII.jpg')}}" class="h-100 img-fluid" alt="Product Images">
                                </a>
                                <div class="product-actions">
                                    <a href="#" data-toggle="modal" data-target="#prodect-modal"><i class="p-icon icon-plus"></i><span class="tool-tip">Quick View</span></a>
                                    <a href="#"><i class="p-icon icon-bag2"></i> <span class="tool-tip">Add to cart</span></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h6 class="prodect-title"><a href="#">Benchi tiled bench</a></h6>
                                <h2 class="prodect-title"><a href="#">Achuli Design</a></h2>
                                <div class="prodect-price">
                                    <p class="new-price">Ksh. 70,000</p>
                                </div>
                            </div>
                        </div><!-- Single Product Item End -->
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <!-- Single Product Item Start -->
                        <div class="single-product-item text-center">
                            <div class="products-images">
                                <a href="#" class="product-thumbnail img-fluid">
                                    <img src="{{ asset('sanaaspace/assets/products/coffetable.jpg')}}" class="h-100 img-fluid" alt="Product Images">
                                </a>
                                <div class="product-actions">
                                    <a href="#" data-toggle="modal" data-target="#prodect-modal"><i class="p-icon icon-plus"></i><span class="tool-tip">Quick View</span></a>
                                    <a href="#"><i class="p-icon icon-bag2"></i> <span class="tool-tip">Add to cart</span></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h6 class="prodect-title"><a href="#">Mchemraba coffee table</a></h6>
                                <h2 class="prodect-title"><a href="#">Achuli Design</a></h2>
                                <div class="prodect-price">
                                    <p class="new-price">Ksh. 38,000</p>
                                </div>
                            </div>
                        </div><!-- Single Product Item End -->
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <!-- Single Product Item Start -->
                        <div class="single-product-item text-center">
                            <div class="products-images">
                                <a href="" class="product-thumbnail">
                                    <img src="{{ asset('sanaaspace/assets/products/amchair.jpg')}}" class="h-100 img-fluid" alt="Product Images">

                                </a>
                                <div class="product-actions">
                                    <a href="#" data-toggle="modal" data-target="#prodect-modal"><i class="p-icon icon-plus"></i><span class="tool-tip">Quick View</span></a>
                                    <a href=""><i class="p-icon icon-bag2"></i> <span class="tool-tip">Add to cart</span></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h6 class="prodect-title"><a href="#">The Achuli Armchair</a></h6>
                                <h2 class="prodect-title"><a href="#">Achuli Design</a></h2>
                                <div class="prodect-price">
                                    <p class="new-price">Ksh. 25,000</p>
                                </div>
                            </div>
                        </div><!-- Single Product Item End -->
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <!-- Single Product Item Start -->
                        <div class="single-product-item text-center">
                            <div class="products-images">
                                <a href="" class="product-thumbnail">
                                    <img src="{{ asset('sanaaspace/assets/products/steelarm.jpg')}}" class="h-100 img-fluid" alt="Product Images">

                                    <span class="ribbon onsale">14%</span>
                                </a>
                                <div class="product-actions">
                                    <a href="#" data-toggle="modal" data-target="#prodect-modal"><i class="p-icon icon-plus"></i><span class="tool-tip">Quick View</span></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <h6 class="prodect-title"><a href="#">The Steeler Armchair</a></h6>
                                <h2 class="prodect-title"><a href="#">Achuli Design</a></h2>
                                <div class="prodect-price">
                                    <p class="new-price">Ksh. 28,000</p>
                                </div>
                            </div>
                        </div><!-- Single Product Item End -->
                    </div>
                </div>
            </div>
            
        </div>

    </div>
</div>
<!-- Product Area End -->

<div class="our-newsletter-area section-space--pb_120">

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="newsletter--box">
                    <div class="row align-items-center">
                        <div class="col-lg-10">
                            <div class="section-title small-mb__40 tablet-mb__40">
                                <h4 class="section-title">Are you an artisan-made furniture brand?</h4>
                                <p>We would love to add your furniture to our collection. Connect with us - add an additional online sales channel for your brand.</p>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-8">
                            <div class="newsletter-wrap">
                                <div class="button-box mt-30">
                                    <a href="#" class="hero-btn-one btn">Contact us <i class="icon-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection