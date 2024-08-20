<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tyre Zone | New & Part Worn Tyres | Tyres in Manchester</title>
    <link rel="icon" href="speed.png">


    <!-- LIGHT GALLERY CSS -->
    <link rel="stylesheet" href="assets/css/lightbox.min.css" />

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
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

    <div class="wrapper">
        @php
    $product = \App\Models\Manufacturer::all(); // Fetch products or any data needed in the navbar
@endphp
       
        @includeif("includes.navbar",['product' => $product])

        <!-- HERO BANNER SECTION START -->
        <section class="hero-banner "
            style="background-image: url('assets/imgs/1718708419car-wheel-with-new-tires-close-up-2-scaled.jpg');">
            <div class="container">
                <div class="banner-text">
                    <h1>Part Worn Tyres Manchester</h1>
                </div>
            </div>
        </section>
        <!-- HERO BANNER SECTION END -->


        <!-- NEW PARTS TYRES START -->
        <section class="new-part mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="about-text">
                            <h4>New and Quality A Grade Part Worn Tyres Manchester, All Brands and Sizes are Available
                            </h4>

                            <p>Open 7 Days a week. Massive Stock available, All brands and sizes available. Tyre sizes
                                start from 10-24 inch”. Tyre Pressure Sensor is provided at TYRE ZONE Tyres Ltd.</p>

                            <p>If you’re looking to purchase a brand a set of high-quality part worn tyres Manchester
                                for your vehicle at great prices, look no further than TYRE ZONE Tyres. Since 2006, TYRE
                                ZONE
                                Tyres has provided a great tyre selling service across Greater Manchester and
                                surrounding areas. To inquire about our excellent tyre sales, be sure to contact us
                                today.</p>

                            <p>TYRE ZONE Tyres offers its customers a wide range of part worn tyres Manchester and
                                always
                                has plenty of stock. We only stock the highest-quality tyre make and brands, so you’ll
                                more than be happy with the tyres we provide.</p>

                            <p>
                                <strong>1. 4X4, Run Flat Tyre</strong>
                            </p>
                            <p>
                                <strong>2. Commercial Tyre</strong>
                            </p>
                            <p>
                                <strong>3. Low Profile Tyre</strong>
                            </p>
                            <p>
                                <strong>4. SUV Tyre</strong>
                            </p>
                            <p>
                                <strong>5. Caravan Tyre</strong>
                            </p>
                            <p>
                                <strong>6. Premium Tyre</strong>
                            </p>
                            <p>
                                <strong>7. Trailer Tyres</strong>
                            </p>

                            <h4>Looking for other tyre services</h4>
                            <p>As well as providing tyre sales at excellent, affordable prices, we also provide
                                profession tyre fitting and tyre repairs services. So, if you’re having tyre problems in
                                the Greater Manchester area and require high-quality tyre services at affordable prices,
                                be sure to call TYRE ZONE Tyres today, or visit our store.</p>

                        </div>

                    </div>
                    <div class="col-md-5">
                        <div class="part-img mt-sm-5">
                            <img src="assets/imgs/filter-board-bg.png" width="100%" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- NEW PARTS TYRES END -->


        @includeIf('includes.footer')



    </div>


    <!-- JQUERY  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- OWL CAROUSEL -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- LIGHT GALLERY CDN -->
    <script src="assets/js/lightbox.min.js"></script>

    <!-- BOOTSTRAP 5 JS CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>


    <!-- CUSTOM JS -->
    <script src="assets/js/app.js"></script>


</body>

</html>
