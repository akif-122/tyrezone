<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tyre Zone | New & Part Worn Tyres | Tyres in Manchester</title>
    <link rel="icon" href="{{ asset('speed.png') }}" />

    <!-- FONTAWESOME ICON -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

    <!-- BOOTSTRAP 5 CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" />

    <!-- OWL CAROUSEL  -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body>

    <div class="wrapper">
        @php
            $product = \App\Models\Manufacturer::all(); // Fetch products or any data needed in the navbar
        @endphp

        @includeif('includes.navbar', ['product' => $product])



        {{-- SHOP PAGE START --}}
        <section class="shop">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 mb-5 pe-lg-5 ">
                        <div class="shop-content">
                            <h2>Tyres</h2>

                            <div class="row">
                                <div class="col-md-4 col-sm-6 px-2">
                                    <a href="{{ route("shop-detail") }}">
                                        <div class="product-card border">
                                            <div class="p-card-img">
                                                <img src="{{ asset('assets/imgs/shop/Bridgestone-Alenza-1.webp') }}"
                                                    alt="" width="100%">
                                            </div>

                                            <div class="product-cart-text">
                                                <h3>Bridgestone Alenza 001 215/60 R17</h3>
                                                <p>The Bridgestone Alenza 001 215/60 R17 has been carefully engineered
                                                    to meet the high-performance demands of luxury SUVs, offering
                                                    drivers a dynamic yet luxurious driving experience. Alenza 001 tyre
                                                    is designed to thrive on both wet and dry roads alike. The tyre
                                                    offers superior performance with outstanding comfort and longevity
                                                    for optimal driving.
                                                </p>
                                                <div class="text-center">
                                                    <a href="{{ route("shop-detail") }}" class="main-btn sm d-inline-block">Shop Now</a>
                                                </div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4 col-sm-6 px-2">
                                    <a href="{{ route("shop-detail") }}">
                                        <div class="product-card border">
                                            <div class="p-card-img">
                                                <img src="{{ asset('assets/imgs/shop/Bridgestone-Alenza-1.webp') }}"
                                                    alt="" width="100%">
                                            </div>

                                            <div class="product-cart-text">
                                                <h3>Bridgestone Alenza 001 215/60 R17</h3>
                                                <p>The Bridgestone Alenza 001 215/60 R17 has been carefully engineered
                                                    to meet the high-performance demands of luxury SUVs, offering
                                                    drivers a dynamic yet luxurious driving experience. Alenza 001 tyre
                                                    is designed to thrive on both wet and dry roads alike. The tyre
                                                    offers superior performance with outstanding comfort and longevity
                                                    for optimal driving.
                                                </p>
                                                <div class="text-center">
                                                    <a href="{{ route("shop-detail") }}" class="main-btn sm d-inline-block">Shop Now</a>
                                                </div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4 col-sm-6 px-2">
                                    <a href="{{ route("shop-detail") }}">
                                        <div class="product-card border">
                                            <div class="p-card-img">
                                                <img src="{{ asset('assets/imgs/shop/Bridgestone-Alenza-1.webp') }}"
                                                    alt="" width="100%">
                                            </div>

                                            <div class="product-cart-text">
                                                <h3>Bridgestone Alenza 001 215/60 R17</h3>
                                                <p>The Bridgestone Alenza 001 215/60 R17 has been carefully engineered
                                                    to meet the high-performance demands of luxury SUVs, offering
                                                    drivers a dynamic yet luxurious driving experience. Alenza 001 tyre
                                                    is designed to thrive on both wet and dry roads alike. The tyre
                                                    offers superior performance with outstanding comfort and longevity
                                                    for optimal driving.
                                                </p>
                                                <div class="text-center">
                                                    <a href="{{ route("shop-detail") }}" class="main-btn sm d-inline-block">Shop Now</a>
                                                </div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4 col-sm-6 px-2">
                                    <a href="{{ route("shop-detail") }}">
                                        <div class="product-card border">
                                            <div class="p-card-img">
                                                <img src="{{ asset('assets/imgs/shop/Bridgestone-Alenza-1.webp') }}"
                                                    alt="" width="100%">
                                            </div>

                                            <div class="product-cart-text">
                                                <h3>Bridgestone Alenza 001 215/60 R17</h3>
                                                <p>The Bridgestone Alenza 001 215/60 R17 has been carefully engineered
                                                    to meet the high-performance demands of luxury SUVs, offering
                                                    drivers a dynamic yet luxurious driving experience. Alenza 001 tyre
                                                    is designed to thrive on both wet and dry roads alike. The tyre
                                                    offers superior performance with outstanding comfort and longevity
                                                    for optimal driving.
                                                </p>
                                                <div class="text-center">
                                                    <a href="{{ route("shop-detail") }}" class="main-btn sm d-inline-block">Shop Now</a>
                                                </div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4 col-sm-6 px-2">
                                    <a href="{{ route("shop-detail") }}">
                                        <div class="product-card border">
                                            <div class="p-card-img">
                                                <img src="{{ asset('assets/imgs/shop/Bridgestone-Alenza-1.webp') }}"
                                                    alt="" width="100%">
                                            </div>

                                            <div class="product-cart-text">
                                                <h3>Bridgestone Alenza 001 215/60 R17</h3>
                                                <p>The Bridgestone Alenza 001 215/60 R17 has been carefully engineered
                                                    to meet the high-performance demands of luxury SUVs, offering
                                                    drivers a dynamic yet luxurious driving experience. Alenza 001 tyre
                                                    is designed to thrive on both wet and dry roads alike. The tyre
                                                    offers superior performance with outstanding comfort and longevity
                                                    for optimal driving.
                                                </p>
                                                <div class="text-center">
                                                    <a href="{{ route("shop-detail") }}" class="main-btn sm d-inline-block">Shop Now</a>
                                                </div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4 col-sm-6 px-2">
                                    <a href="{{ route("shop-detail") }}">
                                        <div class="product-card border">
                                            <div class="p-card-img">
                                                <img src="{{ asset('assets/imgs/shop/Bridgestone-Alenza-1.webp') }}"
                                                    alt="" width="100%">
                                            </div>

                                            <div class="product-cart-text">
                                                <h3>Bridgestone Alenza 001 215/60 R17</h3>
                                                <p>The Bridgestone Alenza 001 215/60 R17 has been carefully engineered
                                                    to meet the high-performance demands of luxury SUVs, offering
                                                    drivers a dynamic yet luxurious driving experience. Alenza 001 tyre
                                                    is designed to thrive on both wet and dry roads alike. The tyre
                                                    offers superior performance with outstanding comfort and longevity
                                                    for optimal driving.
                                                </p>
                                                <div class="text-center">
                                                    <a href="{{ route("shop-detail") }}" class="main-btn sm d-inline-block">Shop Now</a>
                                                </div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4 col-sm-6 px-2">
                                    <a href="{{ route("shop-detail") }}">
                                        <div class="product-card border">
                                            <div class="p-card-img">
                                                <img src="{{ asset('assets/imgs/shop/Bridgestone-Alenza-1.webp') }}"
                                                    alt="" width="100%">
                                            </div>

                                            <div class="product-cart-text">
                                                <h3>Bridgestone Alenza 001 215/60 R17</h3>
                                                <p>The Bridgestone Alenza 001 215/60 R17 has been carefully engineered
                                                    to meet the high-performance demands of luxury SUVs, offering
                                                    drivers a dynamic yet luxurious driving experience. Alenza 001 tyre
                                                    is designed to thrive on both wet and dry roads alike. The tyre
                                                    offers superior performance with outstanding comfort and longevity
                                                    for optimal driving.
                                                </p>
                                                <div class="text-center">
                                                    <a href="{{ route("shop-detail") }}" class="main-btn sm d-inline-block">Shop Now</a>
                                                </div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4 col-sm-6 px-2">
                                    <a href="{{ route("shop-detail") }}">
                                        <div class="product-card border">
                                            <div class="p-card-img">
                                                <img src="{{ asset('assets/imgs/shop/Bridgestone-Alenza-1.webp') }}"
                                                    alt="" width="100%">
                                            </div>

                                            <div class="product-cart-text">
                                                <h3>Bridgestone Alenza 001 215/60 R17</h3>
                                                <p>The Bridgestone Alenza 001 215/60 R17 has been carefully engineered
                                                    to meet the high-performance demands of luxury SUVs, offering
                                                    drivers a dynamic yet luxurious driving experience. Alenza 001 tyre
                                                    is designed to thrive on both wet and dry roads alike. The tyre
                                                    offers superior performance with outstanding comfort and longevity
                                                    for optimal driving.
                                                </p>
                                                <div class="text-center">
                                                    <a href="{{ route("shop-detail") }}" class="main-btn sm d-inline-block">Shop Now</a>
                                                </div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4 col-sm-6 px-2">
                                    <a href="{{ route("shop-detail") }}">
                                        <div class="product-card border">
                                            <div class="p-card-img">
                                                <img src="{{ asset('assets/imgs/shop/Bridgestone-Alenza-1.webp') }}"
                                                    alt="" width="100%">
                                            </div>

                                            <div class="product-cart-text">
                                                <h3>Bridgestone Alenza 001 215/60 R17</h3>
                                                <p>The Bridgestone Alenza 001 215/60 R17 has been carefully engineered
                                                    to meet the high-performance demands of luxury SUVs, offering
                                                    drivers a dynamic yet luxurious driving experience. Alenza 001 tyre
                                                    is designed to thrive on both wet and dry roads alike. The tyre
                                                    offers superior performance with outstanding comfort and longevity
                                                    for optimal driving.
                                                </p>
                                                <div class="text-center">
                                                    <a href="{{ route("shop-detail") }}" class="main-btn sm d-inline-block">Shop Now</a>
                                                </div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4 col-sm-6 px-2">
                                    <a href="{{ route("shop-detail") }}">
                                        <div class="product-card border">
                                            <div class="p-card-img">
                                                <img src="{{ asset('assets/imgs/shop/Bridgestone-Alenza-1.webp') }}"
                                                    alt="" width="100%">
                                            </div>

                                            <div class="product-cart-text">
                                                <h3>Bridgestone Alenza 001 215/60 R17</h3>
                                                <p>The Bridgestone Alenza 001 215/60 R17 has been carefully engineered
                                                    to meet the high-performance demands of luxury SUVs, offering
                                                    drivers a dynamic yet luxurious driving experience. Alenza 001 tyre
                                                    is designed to thrive on both wet and dry roads alike. The tyre
                                                    offers superior performance with outstanding comfort and longevity
                                                    for optimal driving.
                                                </p>
                                                <div class="text-center">
                                                    <a href="{{ route("shop-detail") }}" class="main-btn sm d-inline-block">Shop Now</a>
                                                </div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="shop-sidebar mb-5 ">
                            <div class="product-search">
                                <h2>Search Tyre</h2>
                                <form action="" class="border rounded p-3">
                                    <div class="form-group mb-3">
                                        <label for="">Vehicle</label>
                                        <select name=""class="form-select  shadow-none">
                                            <option selected="selected" value="0">Select Your Car</option>
                                            <option value="accord-2021">Accord 2021 - ( 4 )</option>
                                            <option value="audi-a3">Audi A3 - ( 2 )</option>
                                            <option value="audi-a4">Audi A4 - ( 1 )</option>
                                            <option value="audi-a5">Audi A5 - ( 2 )</option>
                                            <option value="audi-a6">Audi A6 - ( 3 )</option>
                                            <option value="chevrolet-joy">Chevrolet Joy - ( 4 )</option>
                                            <option value="daihatsu-coure">Daihatsu Coure - ( 5 )</option>
                                            <option value="daihatsu-esse">Daihatsu Esse - ( 10 )</option>
                                            <option value="daihatsu-mira">Daihatsu Mira - ( 2 )</option>
                                            <option value="daihatsu-move">Daihatsu&nbsp;Move - ( 2 )</option>
                                            <option value="faw-carry-van">FAW Carry Van - ( 2 )</option>
                                            <option value="faw-v2">Faw v2 - ( 3 )</option>
                                            <option value="faw-xpv">FAW XPV - ( 2 )</option>
                                            <option value="honda">Honda - ( 1 )</option>
                                            <option value="honda-brv">Honda BRV - ( 4 )</option>
                                            <option value="honda-brv-2016-2018">Honda BRV 2016 - 2018 - ( 2 )</option>
                                            <option value="honda-city">Honda City - ( 1 )</option>
                                            <option value="honda-city-1998-2008">Honda City 1998 - 2008 - ( 4 )</option>
                                            <option value="honda-city-2009-2017">Honda City 2009 - 2017 - ( 1 )</option>
                                            <option value="honda-city-2009-2018">Honda City 2009 - 2018 - ( 4 )</option>
                                            <option value="honda-civic-1-8-2020">Honda Civic 1.8 2020 - ( 10 )</option>
                                            <option value="honda-civic-2002-2006">Honda Civic 2002 - 2006 - ( 1 )
                                            </option>
                                            <option value="honda-civic-2006-2016">Honda Civic 2006 - 2016 - ( 17 )
                                            </option>
                                            <option value="honda-civic-2016-2018">Honda Civic 2016 - 2018 - ( 12 )
                                            </option>
                                            <option value="honda-civic-exi-2002-2006">Honda Civic Exi 2002 - 2006 - ( 5
                                                )</option>
                                            <option value="honda-civic-vti-oriel-2002-2006">Honda Civic Vti Oriel 2002 -
                                                2006 - ( 29 )</option>
                                            <option value="honda-crz">Honda CRZ - ( 2 )</option>
                                            <option value="honda-fit">Honda Fit - ( 4 )</option>
                                            <option value="honda-fit-shuttle">Honda Fit Shuttle - ( 3 )</option>
                                            <option value="honda-grace">Honda Grace - ( 5 )</option>
                                            <option value="honda-insight">Honda Insight - ( 4 )</option>
                                            <option value="honda-n-one-wagon">Honda N One Wagon - ( 2 )</option>
                                            <option value="honda-n-one">Honda N-One - ( 2 )</option>
                                            <option value="honda-spark">Honda Spark - ( 6 )</option>
                                            <option value="honda-vezel">Honda Vezel - ( 8 )</option>
                                            <option value="honda-zest">Honda Zest - ( 6 )</option>
                                            <option value="hyundai-santro">Hyundai Santro - ( 1 )</option>
                                            <option value="hyundai-shehzore">Hyundai Shehzore - ( 1 )</option>
                                            <option value="kia-picanto-2020">Kia Picanto 2020 - ( 6 )</option>
                                            <option value="kia-sportage-2020">Kia Sportage 2020 - ( 2 )</option>
                                            <option value="mercedes-benz">Mercedes Benz - ( 1 )</option>
                                            <option value="mercedes-c180">Mercedes C180 - ( 1 )</option>
                                            <option value="mercedes-c200">Mercedes C200 - ( 2 )</option>
                                            <option value="mercedes-compressor-c200">Mercedes Compressor C200 - ( 3 )
                                            </option>
                                            <option value="mercedes-e-200">Mercedes E 200 - ( 3 )</option>
                                            <option value="nissan-clipper">Nissan clipper - ( 1 )</option>
                                            <option value="nissan-dayz">Nissan Dayz - ( 2 )</option>
                                            <option value="nissan-juke">Nissan Juke - ( 8 )</option>
                                            <option value="nissan-mocco">Nissan Mocco - ( 6 )</option>
                                            <option value="suzuki-alto">Suzuki Alto - ( 8 )</option>
                                            <option value="suzuki-alto-2020">Suzuki Alto 2020 - ( 2 )</option>
                                            <option value="suzuki-alto-japanese">Suzuki Alto Japanese - ( 2 )</option>
                                            <option value="suzuki-apv">Suzuki APV - ( 1 )</option>
                                            <option value="suzuki-bolan">Suzuki Bolan - ( 1 )</option>
                                            <option value="suzuki-cervo">Suzuki Cervo - ( 6 )</option>
                                            <option value="suzuki-ciaz">Suzuki Ciaz - ( 13 )</option>
                                            <option value="suzuki-cultus-2000-2016">Suzuki Cultus 2000 - 2016 - ( 4 )
                                            </option>
                                            <option value="suzuki-cultus-2016-2018">Suzuki Cultus 2016 - 2018 - ( 6 )
                                            </option>
                                            <option value="suzuki-every-van">Suzuki Every Van - ( 7 )</option>
                                            <option value="suzuki-fx">Suzuki FX - ( 5 )</option>
                                            <option value="suzuki-grand-vitara">Suzuki Grand Vitara - ( 4 )</option>
                                            <option value="suzuki-hustler">Suzuki Hustler - ( 1 )</option>
                                            <option value="suzuki-mehran">Suzuki Mehran - ( 5 )</option>
                                            <option value="suzuki-ravi">Suzuki Ravi - ( 1 )</option>
                                            <option value="suzuki-stanley">Suzuki Stanley - ( 2 )</option>
                                            <option value="suzuki-swift">Suzuki Swift - ( 3 )</option>
                                            <option value="suzuki-wagon-r-2014-2018">Suzuki Wagon R 2014 - 2018 - ( 2 )
                                            </option>
                                            <option value="toyota-aqua">Toyota Aqua - ( 4 )</option>
                                            <option value="toyota-axio">Toyota Axio - ( 3 )</option>
                                            <option value="toyota-belta">Toyota Belta - ( 3 )</option>
                                            <option value="toyota-camry">Toyota Camry - ( 1 )</option>
                                            <option value="toyota-chr">Toyota CHR - ( 4 )</option>
                                            <option value="toyota-corolla-1992-2001">Toyota Corolla 1992 - 2001 - ( 10
                                                )</option>
                                            <option value="toyota-corolla-2002-2008">Toyota Corolla 2002 - 2008 - ( 3 )
                                            </option>
                                            <option value="toyota-corolla-2009-2017">Toyota Corolla 2009 - 2017 - ( 16
                                                )</option>
                                            <option value="toyota-corolla-grande-2017-2018">Toyota Corolla Grande 2017
                                                - 2018 - ( 4 )</option>
                                            <option value="toyota-fortuner-2013-2017">Toyota Fortuner 2013 - 2017 - ( 6
                                                )</option>
                                            <option value="toyota-fortuner-2017-2018">Toyota Fortuner 2017-2018 - ( 2 )
                                            </option>
                                            <option value="toyota-grand-cabin">Toyota Grand Cabin - ( 1 )</option>
                                            <option value="toyota-hiace-1989-1994">Toyota Hiace 1989 - 1994 - ( 2 )
                                            </option>
                                            <option value="toyota-hilux">Toyota Hilux - ( 1 )</option>
                                            <option value="toyota-hilux-revo">Toyota Hilux Revo - ( 6 )</option>
                                            <option value="toyota-hilux-vigo">Toyota Hilux Vigo - ( 2 )</option>
                                            <option value="toyota-land-cruiser-1990-1997">Toyota Land Cruiser 1990 -
                                                1997 - ( 3 )</option>
                                            <option value="toyota-land-cruiser-2002">Toyota Land Cruiser 2002 - ( 3 )
                                            </option>
                                            <option value="toyota-land-cruiser-v8-2007-2012">Toyota Land Cruiser V8
                                                2007-2012 - ( 3 )</option>
                                            <option value="toyota-land-cruiser-v8-zx-2012-2018">Toyota Land Cruiser V8
                                                Zx 2012- 2018 - ( 2 )</option>
                                            <option value="toyota-land-cruiser-zx-2008-2013">Toyota Land Cruiser Zx
                                                2008 - 2013 - ( 1 )</option>
                                            <option value="toyota-land-cruiser-zx-2012-2018">Toyota Land Cruiser ZX
                                                2012- 2018 - ( 3 )</option>
                                            <option value="toyota-mark-x-2-5-g">Toyota Mark X 2.5 G - ( 2 )</option>
                                            <option value="toyota-mark-x-3-0-g">Toyota Mark X 3.0 G - ( 1 )</option>
                                            <option value="toyota-passo">Toyota Passo - ( 7 )</option>
                                            <option value="toyota-prado-1996-2002">Toyota Prado 1996 - 2002 - ( 3 )
                                            </option>
                                            <option value="toyota-prado-2003-2011">Toyota Prado 2003 - 2011 - ( 6 )
                                            </option>
                                            <option value="toyota-premio">Toyota Premio - ( 18 )</option>
                                            <option value="toyota-prius">Toyota Prius - ( 20 )</option>
                                            <option value="toyota-prius-alpha">Toyota Prius Alpha - ( 1 )</option>
                                            <option value="toyota-surf">Toyota Surf - ( 3 )</option>
                                            <option value="toyota-vigo-thai">Toyota Vigo Thai - ( 6 )</option>
                                            <option value="toyota-vitz">Toyota Vitz - ( 3 )</option>
                                            <option value="toyota-yaris">Toyota Yaris - ( 2 )</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">Brand</label>
                                        <select class=" form-select shadow-none">
                                            <option selected="selected" value="0">Select Brand</option>
                                            <option value="0">Brand 1</option>
                                            <option value="0">Brand 2</option>
                                            <option value="0">Brand 3</option>

                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">Patteren</label>
                                        <select class=" form-select shadow-none">
                                            <option selected="selected" value="0">Select Patteren</option>
                                            <option value="0">Patteren 1</option>
                                            <option value="0">Patteren 2</option>
                                            <option value="0">Patteren 3</option>

                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">Tyre Size</label>
                                        <select class="form-select shadow-none">
                                            <option selected="selected" value="0">Select Size</option>
                                            <option value="145-r12-c">145 R12 C - ( 2 )</option>
                                            <option value="145-70-r12">145/70 R12 - ( 5 )</option>
                                            <option value="145-80-r12">145/80 R12 - ( 3 )</option>
                                            <option value="145-80-r13">145/80 R13 - ( 2 )</option>
                                            <option value="155-r12-c">155 R12 C - ( 2 )</option>
                                            <option value="155-65-r13">155/65 R13 - ( 4 )</option>
                                            <option value="155-65-r14">155/65 R14 - ( 4 )</option>
                                            <option value="155-70-r12-2">155/70 R12 - ( 1 )</option>
                                            <option value="155-70-r12">155/70 R12 - ( 8 )</option>
                                            <option value="155-70-r13">155/70 R13 - ( 1 )</option>
                                            <option value="155-80-r13">155/80 R13 - ( 4 )</option>
                                            <option value="165-r13-c">165 R13 C - ( 2 )</option>
                                            <option value="165-55-r15">165/55 R15 - ( 2 )</option>
                                            <option value="165-65-r13">165/65 R13 - ( 8 )</option>
                                            <option value="165-65-r14">165/65 R14 - ( 8 )</option>
                                            <option value="165-70-r12">165/70 R12 - ( 6 )</option>
                                            <option value="165-70-r13">165/70 R13 - ( 4 )</option>
                                            <option value="165-70-r14">165/70 R14 - ( 6 )</option>
                                            <option value="175-r13-c">175 / R13 C - ( 1 )</option>
                                            <option value="175-60-r15">175/60 R15 - ( 1 )</option>
                                            <option value="175-65-r14">175/65 R14 - ( 3 )</option>
                                            <option value="175-65-r15">175/65 R15 - ( 4 )</option>
                                            <option value="175-70-r13">175/70 R13 - ( 9 )</option>
                                            <option value="175-70-r14">175/70 R14 - ( 3 )</option>
                                            <option value="185-r14-2">185 R14 - ( 2 )</option>
                                            <option value="185-r14-c">185 R14 C - ( 2 )</option>
                                            <option value="185-55-r15">185/55 R15 - ( 1 )</option>
                                            <option value="185-55-r16">185/55 R16 - ( 1 )</option>
                                            <option value="185-60-r15">185/60 R15 - ( 5 )</option>
                                            <option value="185-65-r14">185/65 R14 - ( 5 )</option>
                                            <option value="185-65-r15">185/65 R15 - ( 17 )</option>
                                            <option value="185-70-r13-2">185/70 R13 - ( 3 )</option>
                                            <option value="185-70-r13">185/70 R13 - ( 3 )</option>
                                            <option value="185-70-r14">185/70 R14 - ( 4 )</option>
                                            <option value="185-70-r14-2">185/70 R14 - ( 2 )</option>
                                            <option value="195-r15-c">195 / R15 C - ( 2 )</option>
                                            <option value="195-r14-c">195 R14 C - ( 2 )</option>
                                            <option value="195-55-r16">195/55 R16 - ( 1 )</option>
                                            <option value="195-60-r16">195/60 R16 - ( 4 )</option>
                                            <option value="195-65-r15">195/65 R15 - ( 22 )</option>
                                            <option value="195-70-r14">195/70 R14 - ( 1 )</option>
                                            <option value="195-70-r15-c">195/70 R15 C - ( 1 )</option>
                                            <option value="205-r14-c">205 R14 C - ( 2 )</option>
                                            <option value="205-40-r17">205/40 R17 - ( 1 )</option>
                                            <option value="205-55-r16">205/55 R16 - ( 8 )</option>
                                            <option value="205-60-r16">205/60 R16 - ( 6 )</option>
                                            <option value="205-65-r15">205/65 R15 - ( 8 )</option>
                                            <option value="205-65-r16">205/65 R16 - ( 1 )</option>
                                            <option value="205-70-r15">205/70 R15 - ( 1 )</option>
                                            <option value="215-45-r17">215/45 R17 - ( 1 )</option>
                                            <option value="215-50-r17">215/50 R17 - ( 7 )</option>
                                            <option value="215-55-r16">215/55 R16 - ( 12 )</option>
                                            <option value="215-55-r17">215/55 R17 - ( 10 )</option>
                                            <option value="215-55-r17-2">215/55 R17 - ( 1 )</option>
                                            <option value="215-60-r16">215/60 R16 - ( 3 )</option>
                                            <option value="215-60-r17">215/60 R17 - ( 5 )</option>
                                            <option value="225-45-r17">225/45 R17 - ( 3 )</option>
                                            <option value="225-45-r18">225/45 R18 - ( 2 )</option>
                                            <option value="225-50-r17">225/50 R17 - ( 4 )</option>
                                            <option value="225-50-r18">225/50 R18 - ( 3 )</option>
                                            <option value="225-55-r16">225/55 R16 - ( 5 )</option>
                                            <option value="225-55-r17">225/55 R17 - ( 1 )</option>
                                            <option value="225-55-r18">225/55 R18 - ( 6 )</option>
                                            <option value="225-55-r19">225/55 R19 - ( 2 )</option>
                                            <option value="225-60-r17">225/60 R17 - ( 3 )</option>
                                            <option value="235-45-r18">235/45 R18 - ( 2 )</option>
                                            <option value="235-50-r18">235/50 R18 - ( 3 )</option>
                                            <option value="235-55-r18">235/55 R18 - ( 3 )</option>
                                            <option value="235-55-r19">235/55 R19 - ( 1 )</option>
                                            <option value="235-60-r18">235/60 R18 - ( 2 )</option>
                                            <option value="235-60r18">235/60R18 - ( 1 )</option>
                                            <option value="235-65-r17">235/65 R17 - ( 1 )</option>
                                            <option value="235-70-r16">235/70 R16 - ( 1 )</option>
                                            <option value="235-75-r15">235/75 R15 - ( 2 )</option>
                                            <option value="245-40-r18">245/40 R18 - ( 2 )</option>
                                            <option value="245-40-r20">245/40 R20 - ( 1 )</option>
                                            <option value="245-45-r17">245/45 R17 - ( 1 )</option>
                                            <option value="245-45-r18">245/45 R18 - ( 4 )</option>
                                            <option value="245-45-r19">245/45 R19 - ( 1 )</option>
                                            <option value="245-50-r18">245/50 R18 - ( 1 )</option>
                                            <option value="255-70-r15">255/70 R15 - ( 4 )</option>
                                            <option value="265-45-r21">265/45 R21 - ( 2 )</option>
                                            <option value="265-55-r19">265/55 R19 - ( 1 )</option>
                                            <option value="265-60-r18">265/60 R18 - ( 6 )</option>
                                            <option value="265-60-r18-2">265/60 R18 - ( 3 )</option>
                                            <option value="265-65-r17-2">265/65 R17 - ( 1 )</option>
                                            <option value="265-65-r17">265/65 R17 - ( 6 )</option>
                                            <option value="265-70-r16-2">265/70 R16 - ( 2 )</option>
                                            <option value="265-70-r16">265/70 R16 - ( 5 )</option>
                                            <option value="275-45-r20">275/45 R20 - ( 1 )</option>
                                            <option value="275-65-r18">275/65 R18 - ( 1 )</option>
                                            <option value="275-70-r16">275/70 R16 - ( 3 )</option>
                                            <option value="285-50-r20">285/50 R20 - ( 6 )</option>
                                            <option value="285-60-r18">285/60 R18 - ( 6 )</option>
                                            <option value="285-80-r18">285/80 R18 - ( 1 )</option>
                                            <option value="31x10-50-r15">31x10.50 R15 - ( 3 )</option>
                                            <option value="450-r12-c">450 R12 C - ( 1 )</option>
                                            <option value="650-r14-c">650 R14 C - ( 1 )</option>
                                        </select>
                                    </div>

                                    <div class="text-end">
                                        <button class="main-btn sm"> Show Result</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- SHOP PAGE END --}}





        @php
            $product = \App\Models\Manufacturer::all(); // Fetch products or any data needed in the navbar
        @endphp

        @includeIf('includes.footer', ['product' => $product])



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
