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
        <section class="shop-detail">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-12 mx-auto mb-5">
                        <div class="product-view ">
                            <div class="main-img d-flex ">
                                <div class="p-img">
                                    <img src="{{ asset('assets/imgs/shop/Bridgestone-Alenza-1.png') }}" width="100%"
                                    alt="">
                                </div>

                                <div class="p-img">
                                    <img src="{{ asset('assets/imgs/shop/Bridgestone-Alenza-2.png') }}" width="100%"
                                    alt="">
                                </div>
                                <p class="p-img">
                                    <img src="{{ asset('assets/imgs/shop/Bridgestone-Alenza-3.png') }}" width="100%"
                                    alt="">
                                </p>
                            </div>
                            <div class="img-filter d-flex align-items-center justify-content-around">
                                <div class="filter active" data-filter="1">
                                    <img src="{{ asset('assets/imgs/shop/Bridgestone-Alenza-1.png') }}" width="100px"
                                        alt="">
                                </div>
                                <div class="filter" data-filter="2">
                                    <img src="{{ asset('assets/imgs/shop/Bridgestone-Alenza-2.png') }}" width="100px"
                                        alt="">
                                </div>
                                <div class="filter" data-filter="3">
                                    <img src="{{ asset('assets/imgs/shop/Bridgestone-Alenza-3.png') }}" width="100px"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="product-detail">
                            <h2>Bridgestone Alenza 001 215/60 R17</h2>
                            <p>The Bridgestone Alenza 001 215/60 R17 has been carefully engineered to meet the
                                high-performance demands of luxury SUVs, offering drivers a dynamic yet luxurious
                                driving experience. Alenza 001 tyre is designed to thrive on both wet and dry roads
                                alike. The tyre offers superior performance with outstanding comfort and longevity... <a
                                    href="#description">More Detail</a> </p>

                            <h5 class="price">$ 300.00</h5>

                            <div class="btns d-flex gap-3 my-4">
                                <button class="main-btn rounded-0 py-2 btn-outline">Add To Cart </button>
                                <button class="main-btn rounded-0 py-2">Buy Now </button>
                            </div>

                            <div class="tyre-detail pt-3">
                                <h4>Alenza 215/60 R17 Specifications</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped border">
                                        <tbody>
                                            <tr>
                                                <td>Tyre Size</td>
                                                <td class="text-end">
                                                    <span>215/60 R17</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Rim Size</td>
                                                <td class="text-end">
                                                    <span>17 Inches</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Tyre Width</td>
                                                <td class="text-end">
                                                    <span>215 mm</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Tyre Aspect Ratio (Height)</td>
                                                <td class="text-end">
                                                    <span>60 %</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Pattern Name</td>
                                                <td class="text-end">
                                                    <span>Alenza</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Load Index / Maximum Load</td>
                                                <td class="text-end">
                                                    <span>/ Kgs</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Speed Index / Maximum Speed</td>
                                                <td class="text-end">
                                                    <span>/ Km/h</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>



                        </div>
                    </div>
                </div>

                {{-- DESCRIPTION --}}
                <div class="description col-md-12" id="description">
                    <div class="details">
                        <h3>Product Description</h3>

                        <p>The Bridgestone Alenza 001 215/60 R17 has been carefully engineered to meet the
                            high-performance demands of luxury SUVs, offering drivers a dynamic yet luxurious driving
                            experience. Alenza 001 tyre is designed to thrive on both wet and dry roads alike. The tyre
                            offers superior performance with outstanding comfort and longevity for optimal driving.</p>

                        <h4>Performance and Comfort</h4>

                        <h5>Superior Wet/Dry Performance</h5>
                        <p>The Alenza 001 215/60 R17 delivers unparalleled safety for wet and dry driving conditions
                            alike, boasting high braking performance and enhanced grip in wet or dry conditions alike.
                            Drivers can trust this tire for unrivaled control when traversing city streets or highway
                            driving alike.</p>

                        <h5>Superb Riding Comfort</h5>
                        <p>Crafted to maximize rider comfort, the Alenza 001 delivers an excellent driving experience
                            for its occupants. Thanks to advanced construction techniques and innovative features that
                            ensure a quiet and smooth journey experience for drivers and passengers.</p>

                        <h5>Long Wear Life</h5>
                        <p>With its extended wear life, the Alenza 001 215/60 R17 promotes longevity and value for SUV
                            owners. Engineered to withstand daily driving rigors, this tyre offers extended tread life
                            for decreased replacement needs and greater cost-effectiveness.</p>
                    </div>
                </div>
                {{-- DESCRIPTION --}}


            </div>
        </section>
        {{-- SHOP PAGE END --}}

        {{-- RELATED PRODUCT --}}

        <section class="shop mt-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mb-5 pe-lg-5 ">
                        <div class="shop-content">
                            <h2>Related Products</h2>

                            <div class="row">
                                <div class="col-lg-3 col-sm-6 px-2">
                                    <a href="{{ route("shop-detail") }}">
                                        <div class="product-card border">
                                            <div class="p-card-img">
                                                <img src="{{ asset('assets/imgs/shop/Bridgestone-Alenza-1.png') }}"
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
                                                    <a href="#" class="main-btn sm d-inline-block">Shop Now</a>
                                                </div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-sm-6 px-2">
                                    <a href="{{ route("shop-detail") }}">
                                        <div class="product-card border">
                                            <div class="p-card-img">
                                                <img src="{{ asset('assets/imgs/shop/Bridgestone-Alenza-1.png') }}"
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
                                                    <a href="#" class="main-btn sm d-inline-block">Shop Now</a>
                                                </div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-sm-6 px-2">
                                    <a href="{{ route("shop-detail") }}">
                                        <div class="product-card border">
                                            <div class="p-card-img">
                                                <img src="{{ asset('assets/imgs/shop/Bridgestone-Alenza-1.png') }}"
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
                                                    <a href="#" class="main-btn sm d-inline-block">Shop Now</a>
                                                </div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-3 col-sm-6 px-2">
                                    <a href="{{ route("shop-detail") }}">
                                        <div class="product-card border">
                                            <div class="p-card-img">
                                                <img src="{{ asset('assets/imgs/shop/Bridgestone-Alenza-1.png') }}"
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
                                                    <a href="#" class="main-btn sm d-inline-block">Shop Now</a>
                                                </div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                  
                </div>
            </div>
        </section>
        
        

        <script>
            let filters = document.querySelectorAll(".filter");
            let filterImgs = document.querySelectorAll(".main-img .p-img");

            filters.forEach(fitler => {
                fitler.addEventListener("click", function(e) {
                    filters.forEach(filter => {
                        filter.classList.remove("active");
                    })
                    let filterVal = fitler.getAttribute("data-filter") - 1;
                    filterImgs.forEach(img => {
                        img.style.transform = `translateX(-${100 * filterVal}%)`
                    });


                    fitler.classList.add("active");

                })
            });
        </script>





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
