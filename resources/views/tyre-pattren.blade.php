<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tyre Zone | New & Part Worn Tyres | Tyres in Manchester</title>
    <link rel="icon" href="speed.png">

    <!-- FONTAWESOME ICON -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

    <!-- BOOTSTRAP 5 CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" />

    <!-- OWL CAROUSEL  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="{{ asset("assets/css/style.css") }}">

</head>

<body>

    <div class="wrapper">
        @php
    $product = \App\Models\Manufacturer::all(); // Fetch products or any data needed in the navbar
@endphp
       
        @includeif("includes.navbar",['product' => $product])







        <!-- TYRES PATTERN SECTION START -->
        <section class="tyres-detail tyre-pattern">
            <div class="container pattern-container">
                <h2>{{$all->name}} Tyre Patterns</h2>

                <!-- TYRES START-->
                <section class="tyres">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 mb-5 side">
                            <h5>ALL TYRES PATTERNS</h5>
                            <div class="tyres-manu pattern">
                                <ul>
                                    @foreach ($tyre_pattern as $pattern)
                                    <li><a href="{{ route('pattern', ['pattern' => $pattern->name_of_manufacturer])}}">{{$pattern->name_of_manufacturer}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-8">

                            <div class="row">

                                <!-- CARD -->
                                @foreach ($products as $product)
                                <div class="col-lg-4 col-sm-6 mb-5 px-2">
                                    <div class="pattern-card border rounded p-2">
                                        <div class="patt-card-head">
                                            <div class="pt-img">
                                                <img src="{{$product->image}}" alt="">
                                            </div>



                                        </div>
                                        <div class="feature">

                                            <ul class="list-unstyled">
                                                <li
                                                    class="d-flex align-items-center flex-column justify-content-center text-center">
                                                    <div class="">
                                                        <img src="{{ asset("assets/imgs/fuel-tyre.jpg") }}" alt="">
                                                    </div>
                                                    <span class="green">{{$product->fuel_efficiency}}</span>
                                                </li>

                                                <li
                                                    class="d-flex align-items-center flex-column justify-content-center text-center">
                                                    <div class="">
                                                        <img src="{{ asset("assets/imgs/wet_grip.jpg") }}" alt="">
                                                    </div>
                                                    <span class="orange">{{$product->wet_grip}}</span>
                                                </li>

                                                <li
                                                    class="d-flex align-items-center flex-column justify-content-center text-center">
                                                    <div class="">
                                                        <img src="{{ asset("assets/imgs/road-noise-icon.jpg") }}" alt="">
                                                    </div>
                                                    <span class="black">{{$product->road_noise}}</span>
                                                </li>
                                            </ul>

                                        </div>

                                        <div class="tyre-detail ">
                                            <h5>{{$product->manufacturer_name}} <span>{{$product->size}}</span></h5>
                                        </div>

                                        <div class="labels">
                                            <a href="#">
                                                {{$product->name}}
                                            </a>
                                            <a href="#">{{$product->season}}</a>
                                        </div>

                                        <div class="price">
                                            <form a>

                                                <div
                                                    class="price-label d-flex align-items-center justify-content-between flex-wrap mb-2">
                                                    <h4 class="m-0">£{{$product->price}}</h4>
                                                    <p>Garage Fitted</p>
                                                </div>

                                                <div class="form-group mb-2">
                                                    <select name="quantity" class="form-select">
                                                        <option value="1">1 Tyre £<!--  -->127.05</option>
                                                        <option value="2">2 Tyre £<!--  -->254.1</option>
                                                        <option value="3">3 Tyre £<!--  -->381.15</option>
                                                        <option value="4">4 Tyre £<!--  -->508.2</option>
                                                    </select>
                                                </div>

                                            </form>
                                            <a href="{{ route('MainCart',['id' => $product->id])}}">
                                                <button class="main-btn w-100">
                                                    BUY <i class="fa-solid fa-angle-right"></i>
                                                </button>
                                            </a>
                                        </div>


                                    </div>
                                </div>
                                @endforeach
                                <!-- CARD -->
                            </div>

                        </div>
                    </div>
                </section>
                <!-- TYRES END -->

            </div>
        </section>
        <!-- TYRES PATTERN SECTION END -->

@php
    $product = \App\Models\Manufacturer::all(); // Fetch products or any data needed in the navbar
@endphp

        @includeIf('includes.footer',['product' => $product])



    </div>


    <!-- JQUERY  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- OWL CAROUSEL -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- BOOTSTRAP 5 JS CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>


    <!-- CUSTOM JS -->
    <script src="assets/js/app.js"></script>

</body>

</html>
