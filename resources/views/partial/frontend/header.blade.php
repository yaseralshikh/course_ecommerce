<!-- navbar-->
<header class="bg-white header">
    <div class="container px-0 px-lg-3">
        <nav class="py-3 navbar navbar-expand-lg navbar-light px-lg-0"><a class="navbar-brand" href="index.html"><span
                    class="font-weight-bold text-uppercase text-dark">{{ config('app.name') }}</span></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
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
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="pagesDropdown" href="#"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                        <div class="mt-3 dropdown-menu" aria-labelledby="pagesDropdown"><a
                                class="border-0 dropdown-item transition-link"
                                href="{{ route('frontend.index') }}">Homepage</a><a
                                class="border-0 dropdown-item transition-link" href="#">Category</a><a
                                class="border-0 dropdown-item transition-link"
                                href="{{ route('frontend.detail') }}">Product
                                detail</a><a class="border-0 dropdown-item transition-link"
                                href="{{ route('frontend.cart') }}">Shopping cart</a><a
                                class="border-0 dropdown-item transition-link"
                                href="{{ route('frontend.checkout') }}">Checkout</a>
                        </div>
                    </li>
                </ul>
                <ul class="ml-auto navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="{{ route('frontend.cart') }}"> <i
                                class="mr-1 fas fa-dolly-flatbed text-gray"></i>Cart<small
                                class="text-gray">(2)</small></a></li>
                    <li class="nav-item"><a class="nav-link" href="#"> <i class="mr-1 far fa-heart"></i><small
                                class="text-gray"> (0)</small></a></li>
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">
                                <i class="mr-1 fas fa-user-alt text-gray"></i>Login
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">
                                <i class="mr-1 fas fa-user-alt text-gray"></i>Register
                            </a>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="authDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="{{ route('register') }}">
                                <i class="mr-1 fas fa-user-alt text-gray"></i>Welcome, {{ auth()->user()->full_name }}
                            </a>
                            <div class="dropdown-menu mt-3" aria-labelledby="authDropdown">
                                <a href="#" class="dropdown-item border-0">Dashboard</a>
                                <a href="javascript:void(0);" class="dropdown-item border-0" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                <form action="{{ route('logout') }}" method="post" id="logout-form" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </nav>
    </div>
</header>
