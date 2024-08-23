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
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/user-dashboard.css">

</head>

<body>

    <div class="wrapper">
        @php
    $product = \App\Models\Manufacturer::all(); // Fetch products or any data needed in the navbar
@endphp
       
        @includeif("includes.navbar",['product' => $product])

        <!-- USER DASHBOARD -->
        <div class="user-dashboard">

            <div class="">



                <div class="row">
                    <div class="col-lg-3">
                        @include('includes.user-sidebar')

                    </div>

                    <div class="col-lg-9 pe-4 my-lg-4">



                        <div class="content-area mt-5">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="m-0">Orders</h5>


                            </div>


                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Product Name</th>
                                            <th>Image</th>
                                            <th>Manufac. Name</th>
                                            <th>Tyre Patteren</th>
                                            <th>fuel Effic.</th>
                                            <th>Wet Grip</th>
                                            <th>Road Noise</th>
                                            <th>Size</th>
                                            <th>Qty</th>
                                            <th>Price</th>

                                        </tr>
                                    </thead>

                                    <tbody>


                                        <tr>
                                            <td>Tyre</td>
                                            <td> <img src="assets/imgs/tyres/econodrive.jpg" width="40px"
                                                    alt="">
                                            </td>
                                            <td>Dunlop</td>
                                            <td>ECONO DRIVE</td>
                                            <td>C</td>
                                            <td>B</td>
                                            <td>70</td>
                                            <td>225/45 R17 94Y</td>
                                            <td>4</td>
                                            <td>40000</td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!-- USER DASHBOARD END -->



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
