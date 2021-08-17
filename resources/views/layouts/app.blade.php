<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <meta name="robots" content="all,follow"> --}}

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('frontend/img/favicon.png') }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;400;700&amp;display=swap">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Martel+Sans:wght@300;400;800&amp;display=swap">
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Styles - Lightbox-->
    <link rel="stylesheet" href="{{ asset('frontend/vendor/lightbox2/css/lightbox.min.css') }}">
    <!-- Styles - Range slider-->
    <link rel="stylesheet" href="{{ asset('frontend/vendor/nouislider/nouislider.min.css') }}">
    <!-- Styles - Bootstrap select-->
    <link rel="stylesheet" href="{{ asset('frontend/vendor/bootstrap-select/css/bootstrap-select.min.css') }}">
    <!-- Styles - Owl Carousel-->
    <link rel="stylesheet" href="{{ asset('frontend/vendor/owl.carousel2/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/vendor/owl.carousel2/assets/owl.theme.default.css') }}">
    <!-- Styles - theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.default.css') }}" id="theme-stylesheet">
    <!-- Styles - Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}">

    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]> -->
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>

<body>
    <div id="app" class="page-holder {{ request()->routeIs('frontend.detail') ? ' bg-light' : null }}">
        <!-- navbar-->
        <header class="bg-white header">
            <div class="container px-0 px-lg-3">
                <nav class="py-3 navbar navbar-expand-lg navbar-light px-lg-0"><a class="navbar-brand"
                        href="index.html"><span class="font-weight-bold text-uppercase text-dark">Boutique</span></a>
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation"><span
                            class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="mr-auto navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('frontend.index') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('frontend.shop') }}">Shop</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('frontend.detail') }}">Product detail</a>
                            </li>
                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="pagesDropdown"
                                    href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                                <div class="mt-3 dropdown-menu" aria-labelledby="pagesDropdown"><a
                                        class="border-0 dropdown-item transition-link" href="{{ route('frontend.index') }}">Homepage</a><a
                                        class="border-0 dropdown-item transition-link" href="#">Category</a><a
                                        class="border-0 dropdown-item transition-link" href="{{ route('frontend.detail') }}">Product
                                        detail</a><a class="border-0 dropdown-item transition-link"
                                        href="{{ route('frontend.cart') }}">Shopping cart</a><a
                                        class="border-0 dropdown-item transition-link" href="{{ route('frontend.checkout') }}">Checkout</a>
                                </div>
                            </li>
                        </ul>
                        <ul class="ml-auto navbar-nav">
                            <li class="nav-item"><a class="nav-link" href="{{ route('frontend.cart') }}"> <i
                                        class="mr-1 fas fa-dolly-flatbed text-gray"></i>Cart<small
                                        class="text-gray">(2)</small></a></li>
                            <li class="nav-item"><a class="nav-link" href="#"> <i class="mr-1 far fa-heart"></i><small
                                        class="text-gray"> (0)</small></a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}"> <i
                                        class="mr-1 fas fa-user-alt text-gray"></i>Login</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>

        <div class="container">
            @yield('content')
        </div>

        <footer class="text-white bg-dark">
            <div class="container py-4">
                <div class="py-5 row">
                    <div class="mb-3 col-md-4 mb-md-0">
                        <h6 class="mb-3 text-uppercase">Customer services</h6>
                        <ul class="mb-0 list-unstyled">
                            <li><a class="footer-link" href="#">Help &amp; Contact Us</a></li>
                            <li><a class="footer-link" href="#">Returns &amp; Refunds</a></li>
                            <li><a class="footer-link" href="#">Online Stores</a></li>
                            <li><a class="footer-link" href="#">Terms &amp; Conditions</a></li>
                        </ul>
                    </div>
                    <div class="mb-3 col-md-4 mb-md-0">
                        <h6 class="mb-3 text-uppercase">Company</h6>
                        <ul class="mb-0 list-unstyled">
                            <li><a class="footer-link" href="#">What We Do</a></li>
                            <li><a class="footer-link" href="#">Available Services</a></li>
                            <li><a class="footer-link" href="#">Latest Posts</a></li>
                            <li><a class="footer-link" href="#">FAQs</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h6 class="mb-3 text-uppercase">Social media</h6>
                        <ul class="mb-0 list-unstyled">
                            <li><a class="footer-link" href="#">Twitter</a></li>
                            <li><a class="footer-link" href="#">Instagram</a></li>
                            <li><a class="footer-link" href="#">Tumblr</a></li>
                            <li><a class="footer-link" href="#">Pinterest</a></li>
                        </ul>
                    </div>
                </div>
                <div class="pt-4 border-top" style="border-color: #1d1d1d !important">
                    <div class="row">
                        <div class="col-lg-6">
                            <p class="mb-0 small text-muted">&copy; 2020 All rights reserved.</p>
                        </div>
                        <div class="col-lg-6 text-lg-right">
                            <p class="mb-0 small text-muted">Template designed by <a class="text-white reset-anchor"
                                    href="https://bootstraptemple.com/p/bootstrap-ecommerce">Bootstrap Temple</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>

    <!--  Modal -->
    <div class="modal fade" id="productView" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="p-0 modal-body">
                    <div class="row align-items-stretch">
                        <div class="col-lg-6 p-lg-0"><a class="bg-center bg-cover product-view d-block h-100"
                                style="background: url({{ asset('frontend/img/product-5.jpg') }})"
                                href="{{ asset('frontend/img/product-5.jpg') }}" data-lightbox="productview"
                                title="Red digital smartwatch"></a><a class="d-none"
                                href="{{ asset('frontend/img/product-5-alt-1.jpg') }}" title="Red digital smartwatch"
                                data-lightbox="productview"></a><a class="d-none"
                                href="{{ asset('frontend/img/product-5-alt-2.jpg') }}" title="Red digital smartwatch"
                                data-lightbox="productview"></a>
                        </div>
                        <div class="col-lg-6">
                            <button class="p-4 close" type="button" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">×</span></button>
                            <div class="p-5 my-md-4">
                                <ul class="mb-2 list-inline">
                                    <li class="m-0 list-inline-item"><i class="fas fa-star small text-warning"></i>
                                    </li>
                                    <li class="m-0 list-inline-item"><i class="fas fa-star small text-warning"></i>
                                    </li>
                                    <li class="m-0 list-inline-item"><i class="fas fa-star small text-warning"></i>
                                    </li>
                                    <li class="m-0 list-inline-item"><i class="fas fa-star small text-warning"></i>
                                    </li>
                                    <li class="m-0 list-inline-item"><i class="fas fa-star small text-warning"></i>
                                    </li>
                                </ul>
                                <h2 class="h4">Red digital smartwatch</h2>
                                <p class="text-muted">$250</p>
                                <p class="mb-4 text-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    In ut ullamcorper leo, eget euismod orci. Cum sociis natoque penatibus et magnis
                                    dis parturient montes nascetur ridiculus mus. Vestibulum ultricies aliquam
                                    convallis.</p>
                                <div class="mb-4 row align-items-stretch">
                                    <div class="col-sm-7 pr-sm-0">
                                        <div class="px-3 py-1 border d-flex align-items-center justify-content-between">
                                            <span class="mr-4 small text-uppercase text-gray no-select">Quantity</span>
                                            <div class="quantity">
                                                <button class="p-0 dec-btn"><i class="fas fa-caret-left"></i></button>
                                                <input class="p-0 border-0 form-control shadow-0" type="text" value="1">
                                                <button class="p-0 inc-btn"><i class="fas fa-caret-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 pl-sm-0"><a
                                            class="px-0 btn btn-dark btn-sm btn-block h-100 d-flex align-items-center justify-content-center"
                                            href="cart.html">Add to cart</a>
                                    </div>
                                </div><a class="p-0 btn btn-link text-dark" href="#"><i
                                        class="mr-2 far fa-heart"></i>Add to wish list</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- JavaScript files-->
    <script src="{{ asset('frontend/vendor/lightbox2/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/owl.carousel2/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js') }}"></script>
    <script src="{{ asset('frontend/js/front.js') }}"></script>
    <script>
        // ------------------------------------------------------- //
        //   Inject SVG Sprite -
        //   see more here
        //   https://css-tricks.com/ajaxing-svg-sprite/
        // ------------------------------------------------------ //
        function injectSvgSprite(path) {

            var ajax = new XMLHttpRequest();
            ajax.open("GET", path, true);
            ajax.send();
            ajax.onload = function(e) {
                var div = document.createElement("div");
                div.className = 'd-none';
                div.innerHTML = ajax.responseText;
                document.body.insertBefore(div, document.body.childNodes[0]);
            }
        }
        // this is set to BootstrapTemple website as you cannot
        // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
        // while using file:// protocol
        // pls don't forget to change to your domain :)
        injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg');
    </script>
</body>

</html>
