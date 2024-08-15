<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ETYRE ZONE Tyeres</title>

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



        <section class="registration form-wrap">
            <div class="container ">
                <form action="php/register.php" method="post">
                    <p class="text-danger col-lg-10 mx-auto">
                    </p>
                    <div class="col-lg-10 mx-auto sign-up-wrap">
                        <h3 class="text-center mb-4">Registration</h3>
                        <div class="row">

                            <div class="col-md-6 mb-4 mb-lg-0">
                                <h5>Primary Contact Information</h5>

                                <div class="form-group mb-3">
                                    <label for="">First Name <span>*</span></label>
                                    <input type="text" placeholder="First Name" value="" name="fname"
                                        class="form-control">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="">Last Name <span>*</span></label>
                                    <input type="text" placeholder="Last Name" value="" name="lname"
                                        class="form-control">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="">Email Address <span>*</span></label>
                                    <input type="email" placeholder="Email Address" value="" name="email"
                                        class="form-control">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="">Phone <span>*</span></label>
                                    <input type="number" placeholder="Phone" value="" name="phone"
                                        class="form-control">
                                </div>


                                <div class="form-group mb-3">
                                    <label for="">Password <span>*</span> </label>
                                    <input type="password" placeholder="Password" value="" name="password"
                                        class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Confirm Password <span>*</span> </label>
                                    <input type="password" placeholder="Confirm Password" value=""
                                        name="cpassword" class="form-control">
                                </div>

                            </div>

                            <div class="col-md-6">
                                <h5>Company Information</h5>

                                <div class="form-group mb-3">
                                    <label for="">Company</label>
                                    <input type="text" placeholder="Company" value="" name="company_name"
                                        class="form-control">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="">Country</label>
                                    <select value="" name="country" class="form-select" id="">
                                        <option value="uk">United Kingdom</option>
                                    </select>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="">City</label>
                                    <input type="text" placeholder="City" value="" name="city"
                                        class="form-control">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="">Address </label>
                                    <input type="text" placeholder="Address" value="" name="address"
                                        class="form-control">
                                </div>


                                <div class="form-group mb-3">
                                    <label for="">Postcode</label>
                                    <input type="text" placeholder="Postcode" value="" name="postcode"
                                        class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Company Phone</label>
                                    <input type="number" placeholder="Phone" value="" name="company_phone"
                                        class="form-control">
                                </div>

                            </div>


                        </div>

                        <div class="d-flex flex-column align-items-center justify-content-center">
                            <div class="form-check">
                                <input type="checkbox" value="" name="agree" class="form-check-input"
                                    id="p-p">
                                <label for="p-p">I have read and agree to the <a href="#">Privacy
                                        Policy</a></label>

                            </div>

                            <div class="mt-2">
                                <button class="main-btn">Register</button>
                            </div>

                        </div>

                    </div>
                </form>
            </div>
        </section>
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
