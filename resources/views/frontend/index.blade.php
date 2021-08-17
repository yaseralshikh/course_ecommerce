@extends('layouts.app')

@section('content')
    <section class="pb-3 bg-center bg-cover hero d-flex align-items-center"
        style="background: url({{ asset('frontend/img/hero-banner-alt.jpg') }})">
        <div class="container py-5">
            <div class="px-4 row px-lg-5">
                <div class="col-lg-6">
                    <p class="mb-2 text-muted small text-uppercase">New Inspiration 2020</p>
                    <h1 class="mb-3 h2 text-uppercase">20% off on new season</h1><a class="btn btn-dark"
                        href="shop.html">Browse collections</a>
                </div>
            </div>
        </div>
    </section>
    <!-- CATEGORIES SECTION-->
    <section class="pt-5">
        <header class="text-center">
            <p class="mb-1 small text-muted text-uppercase">Carefully created collections</p>
            <h2 class="mb-4 h5 text-uppercase">Browse our categories</h2>
        </header>
        <div class="row">
            <div class="mb-4 col-md-4 mb-md-0"><a class="category-item" href="shop.html"><img class="img-fluid"
                        src="{{ asset('frontend/img/cat-img-1.jpg') }}" alt=""><strong
                        class="category-item-title">Clothes</strong></a></div>
            <div class="mb-4 col-md-4 mb-md-0"><a class="mb-4 category-item" href="shop.html"><img class="img-fluid"
                        src="{{ asset('frontend/img/cat-img-2.jpg') }}" alt=""><strong
                        class="category-item-title">Shoes</strong></a><a class="category-item" href="shop.html"><img
                        class="img-fluid" src="{{ asset('frontend/img/cat-img-3.jpg') }}" alt=""><strong
                        class="category-item-title">Watches</strong></a></div>
            <div class="col-md-4"><a class="category-item" href="shop.html"><img class="img-fluid"
                        src="{{ asset('frontend/img/cat-img-4.jpg') }}" alt=""><strong
                        class="category-item-title">Electronics</strong></a></div>
        </div>
    </section>
    <!-- TRENDING PRODUCTS-->
    <section class="py-5">
        <header>
            <p class="mb-1 small text-muted text-uppercase">Made the hard way</p>
            <h2 class="mb-4 h5 text-uppercase">Top trending products</h2>
        </header>
        <div class="row">
            <!-- PRODUCT-->
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="text-center product">
                    <div class="mb-3 position-relative">
                        <div class="text-white badge badge-"></div><a class="d-block" href="detail.html"><img
                                class="img-fluid w-100" src="{{ asset('frontend/img/product-1.jpg') }}" alt="..."></a>
                        <div class="product-overlay">
                            <ul class="mb-0 list-inline">
                                <li class="p-0 m-0 list-inline-item"><a class="btn btn-sm btn-outline-dark" href="#"><i
                                            class="far fa-heart"></i></a></li>
                                <li class="p-0 m-0 list-inline-item"><a class="btn btn-sm btn-dark" href="cart.html">Add to
                                        cart</a></li>
                                <li class="mr-0 list-inline-item"><a class="btn btn-sm btn-outline-dark" href="#productView"
                                        data-toggle="modal"><i class="fas fa-expand"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <h6> <a class="reset-anchor" href="detail.html">Kui Ye Chen’s AirPods</a></h6>
                    <p class="small text-muted">$250</p>
                </div>
            </div>
            <!-- PRODUCT-->
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="text-center product">
                    <div class="mb-3 position-relative">
                        <div class="text-white badge badge-primary">Sale</div><a class="d-block" href="detail.html"><img
                                class="img-fluid w-100" src="{{ asset('frontend/img/product-2.jpg') }}" alt="..."></a>
                        <div class="product-overlay">
                            <ul class="mb-0 list-inline">
                                <li class="p-0 m-0 list-inline-item"><a class="btn btn-sm btn-outline-dark" href="#"><i
                                            class="far fa-heart"></i></a></li>
                                <li class="p-0 m-0 list-inline-item"><a class="btn btn-sm btn-dark" href="cart.html">Add to
                                        cart</a></li>
                                <li class="mr-0 list-inline-item"><a class="btn btn-sm btn-outline-dark" href="#productView"
                                        data-toggle="modal"><i class="fas fa-expand"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <h6> <a class="reset-anchor" href="detail.html">Air Jordan 12 gym red</a></h6>
                    <p class="small text-muted">$300</p>
                </div>
            </div>
            <!-- PRODUCT-->
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="text-center product">
                    <div class="mb-3 position-relative">
                        <div class="text-white badge badge-"></div><a class="d-block" href="detail.html"><img
                                class="img-fluid w-100" src="{{ asset('frontend/img/product-3.jpg') }}" alt="..."></a>
                        <div class="product-overlay">
                            <ul class="mb-0 list-inline">
                                <li class="p-0 m-0 list-inline-item"><a class="btn btn-sm btn-outline-dark" href="#"><i
                                            class="far fa-heart"></i></a></li>
                                <li class="p-0 m-0 list-inline-item"><a class="btn btn-sm btn-dark" href="cart.html">Add to
                                        cart</a></li>
                                <li class="mr-0 list-inline-item"><a class="btn btn-sm btn-outline-dark" href="#productView"
                                        data-toggle="modal"><i class="fas fa-expand"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <h6> <a class="reset-anchor" href="detail.html">Cyan cotton t-shirt</a></h6>
                    <p class="small text-muted">$25</p>
                </div>
            </div>
            <!-- PRODUCT-->
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="text-center product">
                    <div class="mb-3 position-relative">
                        <div class="text-white badge badge-info">New</div><a class="d-block" href="detail.html"><img
                                class="img-fluid w-100" src="{{ asset('frontend/img/product-4.jpg') }}" alt="..."></a>
                        <div class="product-overlay">
                            <ul class="mb-0 list-inline">
                                <li class="p-0 m-0 list-inline-item"><a class="btn btn-sm btn-outline-dark" href="#"><i
                                            class="far fa-heart"></i></a></li>
                                <li class="p-0 m-0 list-inline-item"><a class="btn btn-sm btn-dark" href="cart.html">Add to
                                        cart</a></li>
                                <li class="mr-0 list-inline-item"><a class="btn btn-sm btn-outline-dark" href="#productView"
                                        data-toggle="modal"><i class="fas fa-expand"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <h6> <a class="reset-anchor" href="detail.html">Timex Unisex Originals</a></h6>
                    <p class="small text-muted">$351</p>
                </div>
            </div>
            <!-- PRODUCT-->
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="text-center product">
                    <div class="mb-3 position-relative">
                        <div class="text-white badge badge-danger">Sold</div><a class="d-block" href="detail.html"><img
                                class="img-fluid w-100" src="{{ asset('frontend/img/product-5.jpg') }}" alt="..."></a>
                        <div class="product-overlay">
                            <ul class="mb-0 list-inline">
                                <li class="p-0 m-0 list-inline-item"><a class="btn btn-sm btn-outline-dark" href="#"><i
                                            class="far fa-heart"></i></a></li>
                                <li class="p-0 m-0 list-inline-item"><a class="btn btn-sm btn-dark" href="cart.html">Add to
                                        cart</a></li>
                                <li class="mr-0 list-inline-item"><a class="btn btn-sm btn-outline-dark" href="#productView"
                                        data-toggle="modal"><i class="fas fa-expand"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <h6> <a class="reset-anchor" href="detail.html">Red digital smartwatch</a></h6>
                    <p class="small text-muted">$250</p>
                </div>
            </div>
            <!-- PRODUCT-->
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="text-center product">
                    <div class="mb-3 position-relative">
                        <div class="text-white badge badge-"></div><a class="d-block" href="detail.html"><img
                                class="img-fluid w-100" src="{{ asset('frontend/img/product-6.jpg') }}" alt="..."></a>
                        <div class="product-overlay">
                            <ul class="mb-0 list-inline">
                                <li class="p-0 m-0 list-inline-item"><a class="btn btn-sm btn-outline-dark" href="#"><i
                                            class="far fa-heart"></i></a></li>
                                <li class="p-0 m-0 list-inline-item"><a class="btn btn-sm btn-dark" href="cart.html">Add to
                                        cart</a></li>
                                <li class="mr-0 list-inline-item"><a class="btn btn-sm btn-outline-dark" href="#productView"
                                        data-toggle="modal"><i class="fas fa-expand"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <h6> <a class="reset-anchor" href="detail.html">Nike air max 95</a></h6>
                    <p class="small text-muted">$300</p>
                </div>
            </div>
            <!-- PRODUCT-->
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="text-center product">
                    <div class="mb-3 position-relative">
                        <div class="text-white badge badge-"></div><a class="d-block" href="detail.html"><img
                                class="img-fluid w-100" src="{{ asset('frontend/img/product-7.jpg') }}" alt="..."></a>
                        <div class="product-overlay">
                            <ul class="mb-0 list-inline">
                                <li class="p-0 m-0 list-inline-item"><a class="btn btn-sm btn-outline-dark" href="#"><i
                                            class="far fa-heart"></i></a></li>
                                <li class="p-0 m-0 list-inline-item"><a class="btn btn-sm btn-dark" href="cart.html">Add to
                                        cart</a></li>
                                <li class="mr-0 list-inline-item"><a class="btn btn-sm btn-outline-dark" href="#productView"
                                        data-toggle="modal"><i class="fas fa-expand"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <h6> <a class="reset-anchor" href="detail.html">Joemalone Women prefume</a></h6>
                    <p class="small text-muted">$25</p>
                </div>
            </div>
            <!-- PRODUCT-->
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="text-center product">
                    <div class="mb-3 position-relative">
                        <div class="text-white badge badge-"></div><a class="d-block" href="detail.html"><img
                                class="img-fluid w-100" src="{{ asset('frontend/img/product-8.jpg') }}" alt="..."></a>
                        <div class="product-overlay">
                            <ul class="mb-0 list-inline">
                                <li class="p-0 m-0 list-inline-item"><a class="btn btn-sm btn-outline-dark" href="#"><i
                                            class="far fa-heart"></i></a></li>
                                <li class="p-0 m-0 list-inline-item"><a class="btn btn-sm btn-dark" href="cart.html">Add to
                                        cart</a></li>
                                <li class="mr-0 list-inline-item"><a class="btn btn-sm btn-outline-dark" href="#productView"
                                        data-toggle="modal"><i class="fas fa-expand"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <h6> <a class="reset-anchor" href="detail.html">Apple Watch</a></h6>
                    <p class="small text-muted">$351</p>
                </div>
            </div>
        </div>
    </section>
    <!-- SERVICES-->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center row">
                <div class="mb-3 col-lg-4 mb-lg-0">
                    <div class="d-inline-block">
                        <div class="media align-items-end">
                            <svg class="svg-icon svg-icon-big svg-icon-light">
                                <use xlink:href="#delivery-time-1"> </use>
                            </svg>
                            <div class="ml-3 text-left media-body">
                                <h6 class="mb-1 text-uppercase">Free shipping</h6>
                                <p class="mb-0 text-small text-muted">Free shipping worlwide</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3 col-lg-4 mb-lg-0">
                    <div class="d-inline-block">
                        <div class="media align-items-end">
                            <svg class="svg-icon svg-icon-big svg-icon-light">
                                <use xlink:href="#helpline-24h-1"> </use>
                            </svg>
                            <div class="ml-3 text-left media-body">
                                <h6 class="mb-1 text-uppercase">24 x 7 service</h6>
                                <p class="mb-0 text-small text-muted">Free shipping worlwide</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-inline-block">
                        <div class="media align-items-end">
                            <svg class="svg-icon svg-icon-big svg-icon-light">
                                <use xlink:href="#label-tag-1"> </use>
                            </svg>
                            <div class="ml-3 text-left media-body">
                                <h6 class="mb-1 text-uppercase">Festival offer</h6>
                                <p class="mb-0 text-small text-muted">Free shipping worlwide</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- NEWSLETTER-->
    <section class="py-5">
        <div class="container p-0">
            <div class="row">
                <div class="mb-3 col-lg-6 mb-lg-0">
                    <h5 class="text-uppercase">Let's be friends!</h5>
                    <p class="mb-0 text-small text-muted">Nisi nisi tempor consequat laboris nisi.</p>
                </div>
                <div class="col-lg-6">
                    <form action="#">
                        <div class="mb-3 input-group flex-column flex-sm-row">
                            <input class="py-3 form-control form-control-lg" type="email"
                                placeholder="Enter your email address" aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-dark btn-block" id="button-addon2" type="submit">Subscribe</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
