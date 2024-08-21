<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tyre Zone | New & Part Worn Tyres | Tyres in Manchester</title>
    <link rel="icon" href="{{ asset("speed.png") }}" />


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
        <section class="hero-banner " style="background-image: url('assets/imgs/contact-us-banner.jpg');">
            <div class="container">
                <div class="banner-text">
                    <h1>Contact Us</h1>
                </div>
            </div>
        </section>
        <!-- HERO BANNER SECTION END -->


        <!-- CONTACT SECTION START -->
        <section class="contacts container-fluid">
            <h5 class="text-center col-md-8 col-lg-6 mx-auto my-5">Get in touch for us regarding any enquiries, we will
                endeavour to get back to you as soon as possible.</h5>
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4 order-0 order-lg-2">
                    <h3 class="contact-label">CONTACT US</h3>

                    <div class="contact-text border">


                        <div class="row">
                            <!-- <div class="col-6">
                                <h6>Address</h6>
                                <p><i class="fa-solid fa-location-dot"></i> Unit 4 Church Street, Middleton Manchester
                                    M24 2PY, UK</p>
                            </div> -->

                            <div class="col-12">
                                <h6>ADDRESS</h6>
                                <p>
                                    Buckley Transport, The Old Gas Works, Higginshaw Lane, Oldham, OL2 6HQ
                                </p>
                            </div>
                            <div class="col-12">
                                <h6>Give us a call.</h6>
                                <p>
                                    <i class="fa-solid fa-phone"></i>
                                    <a href="tel:07563896325">07563 896325</a><br />
                                </p>
                            </div>
                        </div>

                        <div class="border-top py-3">
                            <h5>Find Us on Facebook</h5>
                            <p>
                                <i class="fa-regular fab-facebook"></i>
                                <a href="https://www.facebook.com/TyreZoneOldhamLTD
                                "
                                    target="_blank"><i class="fa-brands fa-facebook-f"></i>
                                    facebook.com/TyreZoneOldhamLTD
                                </a>
                            </p>
                        </div>

                        <!-- <div class="border-top pt-3">
                            <h5>Opening Times</h5>
                            <p>24/7 Open</p>
                        </div> -->


                    </div>



                </div>

                <div class="col-lg-5  order-3 order-lg-2 mb-4">
                    <div class="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9480.285751932723!2d-2.106041!3d53.5564922!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487bb9d23709f79f%3A0x7aabb72222a5e61c!2sTyre%20Zone%20Ltd!5e0!3m2!1sen!2s!4v1721287623269!5m2!1sen!2s"
                            width="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div>
                </div>

                <div class="col-lg-4 col-md-6 order-2 order-lg-3 mb-4">
                    <h3 class="contact-label">Contact Us</h3>
                    <div class="contact-form border">
                        <div class="row">

                            <div class="col-6 mb-3 px-2">
                                <div class="form-group">
                                    <input type="text" placeholder="Your Name" class="form-control">
                                </div>
                            </div>

                            <div class="col-6 mb-3 px-2">
                                <div class="form-group">
                                    <input type="email" placeholder="E-Mail Address" class="form-control">
                                </div>
                            </div>

                            <div class="col-12 mb-3 px-2">
                                <div class="form-group">
                                    <input type="number" placeholder="Phone Number" class="form-control">
                                </div>
                            </div>

                        

                            <div class="col-12 mb-3 px-2">
                                <div class="form-group">
                                    <textarea name="" rows="5" placeholder="Inquiry" class="form-control" id=""></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="main-btn">Submit</button>
                            </div>


                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- CONTACT SECTION END -->



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
