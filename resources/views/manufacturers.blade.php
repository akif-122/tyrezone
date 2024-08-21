<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tyre Zone | New & Part Worn Tyres | Tyres in Manchester</title>
    <link rel="icon" href="{{ asset("speed.png") }}" />

    <!-- FONTAWESOME ICON -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

    <!-- BOOTSTRAP 5 CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" />

    <!-- OWL CAROUSEL  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">

</head>

<body>

    <div class="wrapper">
        @php
            $product = \App\Models\Manufacturer::all(); // Fetch products or any data needed in the navbar
        @endphp

        @includeif('includes.navbar', ['product' => $product])

        <!-- HERO BANNER SECTION START -->
        <section class="hero-banner overlay" style="background-image: url('{{ asset("assets/imgs/dunlop-banner.jpg") }}');">
            <div class="container">
                <div class="banner-text">
                    {{-- @foreach ($all as $product) --}}
                    <h1>{{ $all->manufacturer_name }} Tyres</h1>
                    {{-- @endforeach --}}
                </div>
            </div>
        </section>
        <!-- HERO BANNER SECTION END -->

        <!-- SEARCH SECTION START -->
        <section class="man-search">
            <div class="search-wrap">
                <div class="row">



                    <div class="col-12 ">
                        <div class="search-by-tyres">
                            <h3>Search by Tyre size</h3>

                            <form action="">
                                <div class="row">
                                    <div class="col-lg-2 col-6 mb-2 px-1">
                                        <div class="form-group">
                                            <select name="" class="form-select" id="">
                                                <option value="215">215</option>
                                                <option value="22">22</option>
                                                <option value="225">225</option>
                                                <option value="235">235</option>
                                                <option value="24">24</option>
                                                <option value="245">245</option>
                                                <option value="25">25</option>
                                                <option value="255">255</option>
                                                <option value="265">265</option>
                                                <option value="275">275</option>
                                                <option value="285">285</option>
                                                <option value="295">295</option>
                                                <option value="305">305</option>
                                                <option value="31">31</option>
                                                <option value="315">315</option>
                                                <option value="325">325</option>
                                                <option value="33">33</option>
                                                <option value="335">335</option>
                                                <option value="345">345</option>
                                                <option value="350">350</option>
                                                <option value="355">355</option>
                                                <option value="500">500</option>
                                                <option value="7.50">7.50</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-2 col-6 mb-2 px-1">
                                        <div class="form-group">
                                            <select name="profile" class="form-select">
                                                <option value="">Profile</option>
                                                <option value="40">40</option>
                                                <option value="45">45</option>
                                                <option value="50">50</option>
                                                <option value="55" selected="">55</option>
                                                <option value="60">60</option>
                                                <option value="65">65</option>
                                                <option value="70">70</option>
                                                <option value="75">75</option>
                                                <option value="80">80</option>
                                            </select>

                                        </div>

                                    </div>


                                    <div class="col-lg-2 col-6 mb-2 px-1">
                                        <div class="form-group">
                                            <select name="diameter" class="form-control">
                                                <option value="">Rim Size</option>
                                                <option value="15">15</option>
                                                <option value="16" selected="">16</option>
                                                <option value="17">17</option>
                                                <option value="19">19</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-2 col-6 mb-2 px-1">
                                        <div class="form-group">
                                            <select name="speed" class="form-select">
                                                <option value="">Any</option>
                                                <option value="H">H</option>
                                                <option value="T">T</option>
                                                <option value="V">V</option>
                                                <option value="W">W</option>
                                                <option value="Y">Y</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-2 col-6 mb-2 px-1">
                                        <div class="form-group">
                                            <select name="order_type" class="form-select">
                                                <option selected="selected" value="fullyfitted">Garage Fitted</option>
                                                <option value="mobilefitted">Mobile Fitted</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-2 col-6 mb-2 px-1">
                                        <button class="search-btn w-100">
                                            Search
                                        </button>
                                    </div>


                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- SEARCH SECTION END -->


        <!-- TYRES DETAIL SECTION START -->
        <section class="tyres-detail">
            <div class="container">
                {{-- @foreach ($products as $product) --}}
                <h2 class="text-center">{{ $all->manufacturer_name }} Tyres</h2>
                {{-- @endforeach --}}


                <div class="tyres-text">
                    <p>We can all agree that a set of good tyres is a must-have to keep the vehicle up and running for a
                        long time. If you have been driving with worn-out tyres for years or are looking for some
                        quality tyres, wait no more. A set of good tyres can have a huge impact on your overall driving
                        experience. To ease this task for you, <strong>TYRE ZONE TYRES LTD</strong>. recommends premier
                        <strong>Dunlop tyres Manchester</strong>. Their latest range is available online at our garage.
                    </p>

                    <p>Pneumatic tyre pioneer John Boyd Dunlop founded Dunlop in Birmingham, England, in 1889. It is
                        operated and owned by Goodyear Tire and Rubber Company in North America, Europe, New Zealand,
                        and Australia. The company has extensive manufacturing operations worldwide.

                    </p>

                    <p>What do their tyres have that makes them stand apart? It’s their reliable quality and dependable
                        performance. They ensure a quiet and smooth drive and seem to hold the road well. Breaking down
                        its performance, Dunlop tyres provide superb handling, fantastic dry grip (they do not suddenly
                        lose grip even in wet weather conditions), and stiff sidewalls, because of which the driver will
                        not feel any flex or roll-over in hard cornering. Their tyres can sustain significant long,
                        spirited driving without being prone to wear and tear.</p>

                    <p>Dunlop has been the favourite of motorsport events such as the Le Mans 24-Hour and the Isle of
                        Man TT. They have been the leading tyre developers on four-wheels and two-wheels, on-track and
                        off-road. All the experience gathered from such events is converted into better technology by
                        the tyre manufacturers. These new technologies are tested and then adapted for road use.</p>

                    <p>Additionally, Dunlop is a proud technical partner to Mercedes AMG Customer Sports and many of the
                        world’s leading vehicle manufacturers, which include Audi, Porsche, BMW, Lexus, Honda, and
                        Mercedes-Benz. It is no surprise that Dunlop has become one of the most iconic and recognisable
                        tyre brands in the world today. It has an entire 120-year history of pioneering groundbreaking
                        innovations in car performance and safety.</p>

                    <p>Affordable <strong>Dunlop Tyres Manchester</strong> can be ordered online for delivery to car
                        owners around the globe. These tyres are available for vans, cars, SUVs and 4x4s. The turn-in is
                        that these tyres are razor-sharp and suitable even for sporty driving. TYRE ZONE TYRES LTD.
                        offers
                        a complete range of dunlop tyres Manchester from this renowned brand at affordable price levels.
                        Take time to meet our technicians to get the best tyres for your vehicle and enjoy a host of
                        after-care services, all within your budget.</p>

                </div>


                <!-- TYRES START-->
                <section class="tyres">
                    {{-- @foreach ($products as $product) --}}
                    <h2 class="text-center mb-4">All tyres by {{ $all->manufacturer_name }}</h2>
                    {{-- @endforeach --}}
                    {{-- <h3 class="text-center mb-4">All tyres by <strong>Dunlop Tyres</strong></h3> --}}
                    <div class="row">
                        <div class="col-lg-3 col-md-4 mb-5 side">
                            <h5>All Manufacturers</h5>
                            <div class="tyres-manu">
                                <ul>
                                    @if (@isset($record) && $record->isNotEmpty())
                                        @foreach ($record as $record)
                                            <li>
                                                <a
                                                    href="{{ route('manufacturer', ['manufacturer' => $record->name]) }}"><strong>{{ $record->name }}</strong>
                                                    Tyres <i class="fa-solid fa-angle-right"></i> </a>
                                            </li>
                                        @endforeach
                                    @else
                                        <p>Manufacturers Not available</p>
                                    @endif

                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-8">

                            <div class="row">

                                <!-- Tyre Cards Container -->
                                {{-- <div class="row"> --}}
                                @foreach ($products as $product)
                                    <!-- Tyre Card -->
                                    <div class="col-lg-4 col-md-6 col-sm-6 mb-3 px-2">
                                        <div class="tyre-card">
                                            <div class="card-body border-0">
                                                <!-- Tyre Image -->
                                                <div class="tyre-img border-bottom mx-auto">
                                                    <img src="{{ $product->image }}" 
                                                        alt="{{ $product->name }}" >
                                                </div>

                                                <!-- Tyre Details -->
                                                <div class="tyre-card-text">
                                                    <a href=""
                                                        class="card-title">{{ $product->manufacturer_name }}
                                                        {{ $product->tyre_pattern }}</a>
                                                    <p>Price from
                                                        <strong>£{{ number_format($product->price, 2) }}</strong></p>
                                                    <div class="tyre-card-btn">
                                                        <a href='{{ route('index-pattern') }}'
                                                            class="btn btn-primary">Find Out More <i
                                                                class="fa-solid fa-angle-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                {{-- </div> --}}


                                {{-- <div class="col-lg-3 col-lg-4 col-sm-6 mb-3 px-2">
                                    <div class="tyre-card">
                                        <div class="card-body border-0">

                                            <div class="trye-img border-bottom mx-auto w-100">
                                                <img src="assets/imgs/tyres/econodrive.jpg" width="100%"
                                                    alt="">
                                            </div>

                                            <div class="tyre-card-text">
                                                <a href="{{route("tyre-pattren")}}">Dunlop ECONO DRIVE</a>
                                                <p>Price from <strong>£127.05</strong></p>
                                                <div class="tyre-card-btn">
                                                    <a href="{{route("tyre-pattren")}}">Find OUT MORE <i
                                                            class="fa-solid fa-angle-right"></i></a>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div> --}}

                                {{-- <div class="col-lg-3 col-lg-4 col-sm-6 mb-3 px-2">
                                    <div class="tyre-card">
                                        <div class="card-body border-0">

                                            <div class="trye-img border-bottom mx-auto w-100">
                                                <img src="assets/imgs/tyres/econodrive.jpg" width="100%"
                                                    alt="">
                                            </div>

                                            <div class="tyre-card-text">
                                                <a href="{{route("tyre-pattren")}}">Dunlop ECONO DRIVE</a>
                                                <p>Price from <strong>£127.05</strong></p>
                                                <div class="tyre-card-btn">
                                                    <a href="{{route("tyre-pattren")}}">Find OUT MORE <i
                                                            class="fa-solid fa-angle-right"></i></a>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div> --}}

                                {{-- <div class="col-lg-3 col-lg-4 col-sm-6 mb-3 px-2">
                                    <div class="tyre-card">
                                        <div class="card-body border-0">

                                            <div class="trye-img border-bottom mx-auto w-100">
                                                <img src="assets/imgs/tyres/econodrive.jpg" width="100%"
                                                    alt="">
                                            </div>

                                            <div class="tyre-card-text">
                                                <a href="{{route("tyre-pattren")}}">Dunlop ECONO DRIVE</a>
                                                <p>Price from <strong>£127.05</strong></p>
                                                <div class="tyre-card-btn">
                                                    <a href="{{route("tyre-pattren")}}">Find OUT MORE <i
                                                            class="fa-solid fa-angle-right"></i></a>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div> --}}

                                {{-- <div class="col-lg-3 col-lg-4 col-sm-6 mb-3 px-2">
                                    <div class="tyre-card">
                                        <div class="card-body border-0">

                                            <div class="trye-img border-bottom mx-auto w-100">
                                                <img src="assets/imgs/tyres/econodrive.jpg" width="100%"
                                                    alt="">
                                            </div>

                                            <div class="tyre-card-text">
                                                <a href="{{route("tyre-pattren")}}">Dunlop ECONO DRIVE</a>
                                                <p>Price from <strong>£127.05</strong></p>
                                                <div class="tyre-card-btn">
                                                    <a href="{{route("tyre-pattren")}}">Find OUT MORE <i
                                                            class="fa-solid fa-angle-right"></i></a>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div> --}}

                                {{-- <div class="col-lg-3 col-lg-4 col-sm-6 mb-3 px-2">
                                    <div class="tyre-card">
                                        <div class="card-body border-0">

                                            <div class="trye-img border-bottom mx-auto w-100">
                                                <img src="assets/imgs/tyres/econodrive.jpg" width="100%"
                                                    alt="">
                                            </div>

                                            <div class="tyre-card-text">
                                                <a href="{{route("tyre-pattren")}}">Dunlop ECONO DRIVE</a>
                                                <p>Price from <strong>£127.05</strong></p>
                                                <div class="tyre-card-btn">
                                                    <a href="{{route("tyre-pattren")}}">Find OUT MORE <i
                                                            class="fa-solid fa-angle-right"></i></a>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div> --}}


                            </div>

                        </div>
                    </div>
                </section>
                <!-- TYRES END -->

            </div>
        </section>
        <!-- TYRES DETAIL SECTION END -->
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
    <script src="{{ asset("assets/js/app.js") }}"></script>


</body>

</html>
