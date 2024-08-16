<div class="header p-0">
    <!-- TOP BAR SECTION START -->
    <section class="top-bar  ">
        <div class="container-xl d-flex align-items-center justify-content-between">
            <ul class="m-0 d-flex flex-wrap align-items-center list-unstyled">
                <li><a href="tel:07563896325"><i class="fa-solid fa-phone"></i> 07563 896325</a></li>
            </ul>
            <div class="top-right-account dropdown  position-relative ms-auto me-3">
                <a href="#" class="text-uppercase d-flex"><i class="fa-solid fa-user"></i> <i
                        class="fa-solid fa-caret-down ms-2"></i></a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a href="{{route("register")}}" class="dropdown-item">Sign Up / Regiser</a>
                    <a href="{{route("login")}}" class="dropdown-item">Login</a>
                </div>
            </div>
        </div>



    </section>
    <!-- TOP BAR SECTION END -->

    <!-- SIDE CART -->
    <div class="side-cart" id="side-cart">


        <div class="side-card-header  d-flex align-items-center justify-content-between">
            <button class="cart-close" id="cart-close"><i class="fa-regular fa-circle-xmark"></i></button>
            <h5 class="m-0">Your Cart</h5>
            <i class="fa-solid fa-cart-shopping"></i>
        </div>


        <div class="cart border-0">
            <div class="cart-item d-flex ">
                <div class="img">
                    <img src="assets/imgs/tyres/econodrive.jpg" width="40px" alt="">
                </div>
                <div class="item-detail">
                    <p class="title">Summer Tyre Dunlop ECONO DRIVE 225/55</p>

                    <div class="d-flex  align-items-center justify-content-between">
                        <div class="qty-wrap d-flex align-items-center">
                            <button><i class="fa-solid fa-minus"></i></button>
                            <input type="text" min="1" value="1">
                            <button><i class="fa-solid fa-plus"></i></button>
                        </div>
                        <p class=" price">£ 127.05</p>
                    </div>

                </div>
                <a href="#" class="ms-auto remove-icon"><i class="fa-solid fa-xmark"></i></a>
            </div>

            <div class="cart-item d-flex ">
                <div class="img">
                    <img src="assets/imgs/tyres/econodrive.jpg" width="40px" alt="">
                </div>
                <div class="item-detail">
                    <p class="title">Summer Tyre Dunlop ECONO DRIVE 225/55</p>

                    <div class="d-flex  align-items-center justify-content-between">
                        <div class="qty-wrap d-flex align-items-center">
                            <button><i class="fa-solid fa-minus"></i></button>
                            <input type="text" min="1" value="1">
                            <button><i class="fa-solid fa-plus"></i></button>
                        </div>
                        <p class=" price">£ 127.05</p>
                    </div>

                </div>
                <a href="#" class="ms-auto remove-icon"><i class="fa-solid fa-xmark"></i></a>
            </div>

            <div class="cart-item d-flex ">
                <div class="img">
                    <img src="assets/imgs/tyres/econodrive.jpg" width="40px" alt="">
                </div>
                <div class="item-detail">
                    <p class="title">Summer Tyre Dunlop ECONO DRIVE 225/55</p>

                    <div class="d-flex  align-items-center justify-content-between">
                        <div class="qty-wrap d-flex align-items-center">
                            <button><i class="fa-solid fa-minus"></i></button>
                            <input type="text" min="1" value="1">
                            <button><i class="fa-solid fa-plus"></i></button>
                        </div>
                        <p class=" price">£ 127.05</p>
                    </div>

                </div>
                <a href="#" class="ms-auto remove-icon"><i class="fa-solid fa-xmark"></i></a>
            </div>





        </div>

        <div class="cart-btns">
            <div class="text-end ">
                <h6 class="mb-3">Total <strong>£127.05</strong></h6>
            </div>
            <div class=" d-flex justify-content-between">
                <a href="{{ route("MainCart", ["id"=>4]) }}" class="main-btn">View Cart</a>
                <a href="{{route("checkout")}}" class="main-btn">Checkout</a>
            </div>
        </div>

    </div>
    <!-- SIDE END -->


    <!-- NAVBAR SECTION START -->
    <nav class="navbar navbar-dark navbar-expand-lg main-nav p-0 ">
        <div class="container-xl h-100">
            <a href="{{route("home")}}" class="logo me-3">
                <img src="{{ asset("assets/imgs/logo (2).png") }}" width="150px" alt="">
            </a>

            <button class="navbar-toggle order-3 d-lg-none d-block" id="navToggler"
                data-bs-toggle="collapse">
                <i class="fa-solid fa-bars-staggered"></i>
            </button>

            <div class="collapse order-4 order-lg-2 navbar-collapse" id="myNav">
                <button id="navClose" class="navClose d-block d-lg-none"><i
                        class="fa-regular fa-circle-xmark"></i></button>
                <ul class="navbar-nav pt-4 pt-lg-0">
                    <li><a href="{{route("home")}}" class="active">Home</a></li>

                    <li class="dropdown mega-dropdown">
                        <a href="#" data-bs-toggle="dropdown" class="dropdown-toggle">
                            TYRE MANUFACTURERS</a>

                        <div class="dropdown-menu mega-dropdown-menu">
                            <div class="row">
                                @foreach($product as $product)
                                <div class="col-12">
                                    <a href="{{ route('manufacturer', ['manufacturer' => $product->name]) }}">{{$product->name}}</a>
                                </div>
                                @endforeach
                            </div>
                        </div>

                    </li>

                    <li class="dropdown mega-dropdown">
                        <a href="#" data-bs-toggle="dropdown" class="dropdown-toggle">
                            Services</a>

                        <div class="dropdown-menu mega-dropdown-menu">
                            <div class="row">
                                <div class="col-12">
                                    <a href="{{route("services")}}">Wheel Balancing</a>
                                </div>

                                <div class="col-12">
                                    <a href="{{route("services")}}">24X7 Service Home Work Roadside</a>
                                </div>

                                <div class="col-12">
                                    <a href="{{route("services")}}">Roadside Tire Fitting Assistance</a>
                                </div>

                                <div class="col-12">
                                    <a href="{{route("services")}}">Mobile Tyre Repair</a>
                                </div>

                                <div class="col-12">
                                    <a href="{{route("services")}}">Continental Tyres</a>
                                </div>

                                <div class="col-12">
                                    <a href="{{route("services")}}">Emergency Tyre Fitting</a>
                                </div>



                            </div>
                        </div>
                    </li>

                    <li><a href="{{route("gallery")}}">Gallery</a></li>
                    <li><a href="{{route("blogs")}}">Blog</a></li>
                    <li><a href="{{route("about")}}">About</a></li>
                    <li><a href="{{route("contact")}}">Contact</a></li>


                </ul>
            </div>

            <div class="order-2 ms-auto order-lg-4 align-self-center me-2 ">


                <div
                    class="h-icon-box cart-box d-flex flex-column justify-content-center align-items-end align-items-sm-center ">
                    <a href="#" class="">
                        <div class="icon" id="side-cart-toggler">
                            <i class="fa-solid fa-cart-shopping"></i>
                            <span id="count">0</span>
                        </div>
                    </a>


                </div>

            </div>
        </div>
    </nav>
    <!-- NAVBAR SECTION END -->
</div>