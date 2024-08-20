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

        <!-- REGISTRATION FORM START-->
        <section class="registration form-wrap">
            <div class="container ">
                <div class="col-lg-5 col-md-6 mx-auto sign-up-wrap px-2 px-sm-3">
                    <h5 class="text-center mb-4">FORGOT PASSWORD</h5>
                    <div class="row">

                        <div class="col-12  mb-4 mb-lg-0">

                            <div class="form-group mb-3">
                                <label for="">Email Address <span>*</span></label>
                                <input type="email" placeholder="Email Address" class="form-control">
                            </div>



                        </div>



                    </div>
                    <div class="mt-2 px-0">
                        <button class="main-btn w-100">Reset Password</button>
                    </div>
                    <p class="px-0 my-2">Login Here <a href="{{route("login")}}">Login</a> </p>





                </div>
            </div>
        </section>
        <!-- REGISTRATION FORM END -->

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
