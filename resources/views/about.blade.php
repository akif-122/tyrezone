<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tyre Zone | New & Part Worn Tyres | Tyres in Manchester</title>


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

        @includeif('includes.navbar', ['product' => $product])
        <!-- TOP BAR SECTION END -->



        <!-- HERO BANNER SECTION START -->
        <section class="hero-banner overlay" style="background-image: url('assets/imgs/dunlop-banner.jpg');">
            <div class="container">
                <div class="banner-text">
                    <h1>About Us</h1>
                </div>
            </div>
        </section>
        <!-- HERO BANNER SECTION END -->



        <!-- ABOUT SECTION START START -->
        <section class="about ">
            <div class="container">
                {{-- <h2 class="text-center">About Us</h2> --}}

                <div class="row">


                    <div class="col-md-6 ms-md-auto">
                        <div class="about-text  mt-0">
                            <h2>TYRE ZONE OLDHAM</h2>
                            <p>PROVIDING QUALITY PART WORN TYRES.</p>
                            <p>We pride ourselves in providing <strong>superior quality</strong> products at
                                <strong>affordable prices</strong>. All our tyres are
                                thoroughly checked visually by trained tyre technicians and mechanically with a tyre
                                pressure
                                testing machine with a aqua system, which allows us to examine the tyres for any
                                punctures or
                                damages, we do this to ensure you get a safe and quality product.
                            </p>


                            <p><strong>It is in the nature of part worn tyres to have puncture repairs, tiny cuts or
                                    nicks to the side wall protectors however this does not affect the use and
                                    performance of the tyre.</strong></p>


                            <div class="mt-4">
                                <a href="{{ route("contact") }}" class="main-btn">Contact Us</a>
                            </div>


                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-img">
                            <img src="https://img.freepik.com/free-photo/car-mechanic-changing-wheels-car_1303-27461.jpg?w=740&t=st=1723530481~exp=1723531081~hmac=4659475c787f0fff9515f7af427b5290cffd36ee47f3ceb1b391a9e8628f214a"
                                alt="" width="100%">
                        </div>
                    </div>

                </div>



            </div>
        </section>
        <!-- ABOUT SECTION START END -->


        <!-- WHY CHOOSE US START -->
        <section class="why-choose">
            <div class="container">
                <h2 class="text-center">Why Tyre Zone?</h2>

                <div class="row mt-5">

                    <div class="col-lg-4 mb-5 mb-lg-3">
                        <div class="why-card h-100">
                            <div class="why-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                    width="24px" fill="#e8eaed">
                                    <path
                                        d="M42-120v-112q0-33 17-62t47-44q51-26 115-44t141-18q77 0 141 18t115 44q30 15 47 44t17 62v112H42Zm80-80h480v-32q0-11-5.5-20T582-266q-36-18-92.5-36T362-320q-71 0-127.5 18T142-266q-9 5-14.5 14t-5.5 20v32Zm240-240q-66 0-113-47t-47-113h-10q-9 0-14.5-5.5T172-620q0-9 5.5-14.5T192-640h10q0-45 22-81t58-57v38q0 9 5.5 14.5T302-720q9 0 14.5-5.5T322-740v-54q9-3 19-4.5t21-1.5q11 0 21 1.5t19 4.5v54q0 9 5.5 14.5T422-720q9 0 14.5-5.5T442-740v-38q36 21 58 57t22 81h10q9 0 14.5 5.5T552-620q0 9-5.5 14.5T532-600h-10q0 66-47 113t-113 47Zm0-80q33 0 56.5-23.5T442-600H282q0 33 23.5 56.5T362-520Zm300 160-6-30q-6-2-11.5-4.5T634-402l-28 10-20-36 22-20v-24l-22-20 20-36 28 10q4-4 10-7t12-5l6-30h40l6 30q6 2 12 5t10 7l28-10 20 36-22 20v24l22 20-20 36-28-10q-5 5-10.5 7.5T708-390l-6 30h-40Zm20-70q12 0 21-9t9-21q0-12-9-21t-21-9q-12 0-21 9t-9 21q0 12 9 21t21 9Zm72-130-8-42q-9-3-16.5-7.5T716-620l-42 14-28-48 34-30q-2-5-2-8v-16q0-3 2-8l-34-30 28-48 42 14q6-6 13.5-10.5T746-798l8-42h56l8 42q9 3 16.5 7.5T848-780l42-14 28 48-34 30q2 5 2 8v16q0 3-2 8l34 30-28 48-42-14q-6 6-13.5 10.5T818-602l-8 42h-56Zm28-90q21 0 35.5-14.5T832-700q0-21-14.5-35.5T782-750q-21 0-35.5 14.5T732-700q0 21 14.5 35.5T782-650ZM362-200Z" />
                                </svg>
                            </div>

                            <div class="card-text">
                                <h5>Highly-trained technicians</h5>
                                <p>When it comes to safety on the road, it's vital to have expert technicians working on
                                    your car. Our recruitment process includes industry-leading, Ofsted-accredited
                                    training to ensure that, when our technicians get out of the academy to start
                                    inspecting, servicing, and repairing your vehicle, they're the best in the trade.
                                </p>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-4 mb-5 mb-lg-3">
                        <div class="why-card h-100">
                            <div class="why-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                    width="24px" fill="#e8eaed">
                                    <path
                                        d="M440-346q-43-14-70.5-50T342-480q0-58 41-99t99-41q58 0 99 41t41 99h-42q-11 0-20.5 1.5T541-474v-7q0-25-17-42t-42-17q-25 0-42.5 17.5T422-480q0 21 12.5 36.5T467-423q-12 17-19 36t-8 41Zm42-134ZM370-80l-16-128q-13-5-24.5-12T307-235l-119 50L78-375l103-78q-1-7-1-13.5v-27q0-6.5 1-13.5L78-585l110-190 119 50q11-8 23-15t24-12l16-128h220l16 128q13 5 24.5 12t22.5 15l119-50 110 190-103 78q1 7 1 13.5v13.5h-80q-1-19-3-33.5t-6-27.5l86-65-39-68-99 42q-22-23-48.5-38.5T533-694l-13-106h-79l-14 106q-31 8-57.5 23.5T321-633l-99-41-39 68 86 64q-5 15-7 30t-2 32q0 16 2 31t7 30l-86 65 39 68 99-42q24 25 54 42t65 22v184h-70Zm210 0q-25 0-42.5-17.5T520-140v-200q0-18 9-32t24-22l27 54h60l-30-60h60l30 60h60l-30-60h60l30 60h60l-30-60h10q25 0 42.5 17.5T920-340v200q0 25-17.5 42.5T860-80H580Zm0-60h280v-140H580v140Zm-98-340Z" />
                                </svg>
                            </div>

                            <div class="card-text">
                                <!-- to suit your needs & budget -->
                                <h5>Vehicle maintenance </h5>
                                <p>It's not just about the tyres. Our services run the whole range of what you need to
                                    keep your car reliable and happy – from MOT tests and vehicle servicing, to battery
                                    and brake inspections & replacements, exhausts, suspension components, and much
                                    more.
                                </p>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-4 mb-5 mb-lg-3">
                        <div class="why-card h-100">
                            <div class="why-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                    width="24px" fill="#e8eaed">
                                    <path
                                        d="M519-82v-80q42-6 81.5-23t74.5-43l58 58q-47 37-101 59.5T519-82Zm270-146-56-56q26-33 42-72.5t22-83.5h82q-8 62-30.5 115.5T789-228Zm8-292q-6-45-22-84.5T733-676l56-56q38 44 61.5 98T879-520h-82ZM439-82q-153-18-255.5-131T81-480q0-155 102.5-268T439-878v80q-120 17-199 107t-79 211q0 121 79 210.5T439-162v80Zm238-650q-36-27-76-44t-82-22v-80q59 5 113 27.5T733-790l-56 58ZM480-280q-58-49-109-105t-51-131q0-68 46.5-116T480-680q67 0 113.5 48T640-516q0 75-51 131T480-280Zm0-200q18 0 30.5-12.5T523-523q0-17-12.5-30T480-566q-18 0-30.5 13T437-523q0 18 12.5 30.5T480-480Z" />
                                </svg>
                            </div>

                            <div class="card-text">
                                <h5>Centres on your doorstep</h5>
                                <p>What's more, we have over 600 centres in the United Kingdom with centres across
                                    England, Scotland, Wales, and Northern Ireland, so you'll be hard pressed to find a
                                    Tyre Zone centre that's not local to you!
                                </p>
                            </div>

                        </div>
                    </div>


                </div>


            </div>
        </section>
        <!-- WHY CHOOSE US END -->



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
