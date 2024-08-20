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
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

    <div class="wrapper">

        @php
    $product = \App\Models\Manufacturer::all(); // Fetch products or any data needed in the navbar
@endphp
       
        @includeif("includes.navbar",['product' => $product])


        <!-- HERO BANNER SECTION START -->
        <section class="hero-banner overlay" style="background-image: url('assets/imgs/blog-banner.jpg'); ">
            <div class="container">
                <div class="banner-text">
                    <h1>Blogs</h1>
                </div>
            </div>
        </section>
        <!-- HERO BANNER SECTION END -->


        <!-- BLOGS SECTION START -->
        <section class="blog">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">

                        <!-- BLOG CARD -->
                        <div class="card rounded-0 mb-4 blog-card">
                            <div class="card-body">
                                <h4><a href="{{route("blog-detail")}}">15 Tips to Ensure Long-Lasting Tyres: Expert Advice by
                                        TYRE ZONE -tyres</a></h4>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <a href="{{route("blog-detail")}}">
                                            <img src="assets/imgs/blogs/Untitled-1.jpg" width="100%"
                                                alt="">
                                        </a>
                                    </div>

                                    <div class="col-md-6">
                                        <p>24 hours Mobile Tyre Fitting | 15 Tips for better tyres performance
                                            Introduction: The performa</p>
                                        <div class="text-end">
                                            <a href="{{route("blog-detail")}}" class="main-btn">Read More</a>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="card-footer">
                                <div
                                    class="d-flex flex-column flex-sm-row  align-items-start align-self-sm-center justify-content-between">
                                    <p class="m-0">Posted on: 18 Jun, 2024</p>
                                    <p class="m-0">Total Comment: 0</p>
                                    <p class="m-0">Total view: 0</p>
                                </div>
                            </div>
                        </div>
                        <!-- BLOG CARD  END-->

                        <!-- BLOG CARD -->
                        <div class="card rounded-0 mb-4 blog-card">
                            <div class="card-body">
                                <h4><a href="{{route("blog-detail")}}">Emergency Tyre Changing Services in Manchester –
                                        TYRE ZONE -tyres is Here To Help</a></h4>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <a href="{{route("blog-detail")}}">
                                            <img src="assets/imgs/blogs/Untitled-1-1.jpg" width="100%"
                                                alt="">
                                        </a>
                                    </div>

                                    <div class="col-md-6">
                                        <p>Quick Response for Emergency Tyre Changing Services in Manchester Our crew at
                                            TYRE ZONE -Tyres is well aware that ty</p>
                                        <div class="text-end">
                                            <a href="{{route("blog-detail")}}" class="main-btn">Read More</a>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="card-footer">
                                <div
                                    class="d-flex flex-column flex-sm-row  align-items-start align-self-sm-center justify-content-between">
                                    <p class="m-0">Posted on: 18 Jun, 2024</p>
                                    <p class="m-0">Total Comment: 0</p>
                                    <p class="m-0">Total view: 0</p>
                                </div>
                            </div>
                        </div>
                        <!-- BLOG CARD  END-->

                        <!-- BLOG CARD -->
                        <div class="card rounded-0 mb-4 blog-card">
                            <div class="card-body">
                                <h4><a href="{{route("blog-detail")}}">TYRE ZONE -Tyres: Your Ultimate Guide to Mobile Tyre
                                        Fitting</a></h4>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <a href="{{route("blog-detail")}}">
                                            <img src="assets/imgs/blogs/TYRE ZONE -tyres-scaled.jpg" width="100%"
                                                alt="">
                                        </a>
                                    </div>

                                    <div class="col-md-6">
                                        <p>Introduction :TYRE ZONE -Tyres Convenience frequently ranks at the top of
                                            peoples’ lists of priorities in today’s fast-pa</p>
                                        <div class="text-end">
                                            <a href="{{route("blog-detail")}}" class="main-btn">Read More</a>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="card-footer">
                                <div
                                    class="d-flex flex-column flex-sm-row  align-items-start align-self-sm-center justify-content-between">
                                    <p class="m-0">Posted on: 18 Jun, 2024</p>
                                    <p class="m-0">Total Comment: 0</p>
                                    <p class="m-0">Total view: 0</p>
                                </div>
                            </div>
                        </div>
                        <!-- BLOG CARD  END-->



                    </div>

                    <div class="col-md-4">
                        <div class="related-blog card">
                            <div class="card-header py-3">
                                <h6 class="mb-0">RELATED BLOGS</h6>
                            </div>

                            <div class="card-body">
                                <p class="border-bottom m-0 py-2">
                                    <a href="{{route("blog-detail")}}"><i class="fa-solid fa-caret-right"></i> TYRE ZONE
                                        -Tyres:
                                        Your Ultimate Guide to Mobile Tyre Fitting</a>
                                </p>
                                <p class="border-bottom m-0 py-2">
                                    <a href="{{route("blog-detail")}}"><i class="fa-solid fa-caret-right"></i> Emergency Tyre
                                        Changing Services in Manchester – TYRE ZONE -tyres is Here To Help</a>
                                </p>
                                <p class=" m-0 py-2">
                                    <a href="{{route("blog-detail")}}"><i class="fa-solid fa-caret-right"></i> 15 Tips to
                                        Ensure
                                        Long-Lasting Tyres: Expert Advice by TYRE ZONE -tyres</a>
                                </p>
                            </div>

                        </div>
                    </div>


                </div>

            </div>
        </section>
        <!-- BLOGS SECTION END -->


        @includeIf('includes.footer')



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
