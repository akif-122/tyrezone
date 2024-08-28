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

</head>

<body>

    <div class="wrapper">
        @php
    $product = \App\Models\Manufacturer::all(); // Fetch products or any data needed in the navbar
@endphp
       
        @includeif("includes.navbar",['product' => $product])


        <!-- SEARCH SECTION START -->
        <section class="man-search">
            <div class="search-wrap">
                <div class="row">
                    <div class="col-md-5 mb-4 mb-md-0">
                        <div class="search-reg-number">
                            <form action="#">
                                <h3>Search Tyres by Vehicle Registration</h3>
                                <div class="row">
                                    <div class="col-lg-5 mb-2 px-1">
                                        <div class="form-group reg">
                                            <input type="text" class="form-control" placeholder="ENTER REG">
                                        </div>

                                    </div>

                                    <div class="col-lg-3 col-md-6 mb-2 px-1">
                                        <div class="form-group ">
                                            <select name="" id="" class="form-select">
                                                <option value="">Garage Fitted</option>
                                                <option value="">Mobile Fitted</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 mb-2 px-1">
                                        <button class="search-btn w-100">
                                            Search
                                        </button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>


                    <div class="col-md-7 ">
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



        <!-- TYRES PATTERN SECTION START -->
        <section class="tyres-detail tyre-pattern">
            <div class="container pattern-container">

                <!-- TYRES START-->
                <section class="tyres">
                    <!-- <div class="col-lg-3 col-md-4  col-sm-6 mb-3 mb-md-5 px-2"> -->
                    <div class="row">
                        <!-- CARD -->
                        <div class="col-lg-3 col-md-4  col-sm-6 mb-3 mb-md-5 px-2">
                            <div class="pattern-card border rounded p-2">
                                <div class="patt-card-head">
                                    <div class="pt-img">
                                        <img src="assets/imgs/tyres/econodrive.jpg" alt="">
                                    </div>



                                </div>
                                <div class="feature">

                                    <ul class="list-unstyled">
                                        <li
                                            class="d-flex align-items-center flex-column justify-content-center text-center">
                                            <div class="">
                                                <img src="assets/imgs/fuel-tyre.jpg" alt="">
                                            </div>
                                            <span class="green">B</span>
                                        </li>

                                        <li
                                            class="d-flex align-items-center flex-column justify-content-center text-center">
                                            <div class="">
                                                <img src="assets/imgs/wet_grip.jpg" alt="">
                                            </div>
                                            <span class="orange">B</span>
                                        </li>

                                        <li
                                            class="d-flex align-items-center flex-column justify-content-center text-center">
                                            <div class="">
                                                <img src="assets/imgs/road-noise-icon.jpg" alt="">
                                            </div>
                                            <span class="black">72</span>
                                        </li>
                                    </ul>

                                </div>

                                <div class="tyre-detail ">
                                    <h5>ECONO DRIVE <span>225/55 R17 109/107H</span></h5>
                                </div>

                                <div class="labels">
                                    <a href="#">
                                        Dunlop
                                    </a>
                                    <a href="#">Summer</a>
                                </div>

                                <div class="price">
                                    <form a>

                                        <div
                                            class="price-label d-flex align-items-center justify-content-between flex-wrap mb-2">
                                            <h4 class="m-0">£127.05</h4>
                                            <p>Garage Fitted</p>
                                        </div>

                                        <div class="form-group mb-2">
                                            <select name="quantity" class="form-select">
                                                <option value="1">1 Tyre £<!--  -->127.05</option>
                                                <option value="2">2 Tyre £<!--  -->254.1</option>
                                                <option value="3">3 Tyre £<!--  -->381.15</option>
                                                <option value="4">4 Tyre £<!--  -->508.2</option>
                                            </select>
                                        </div>

                                    </form>
                                    <a href="booking.html">
                                        <button class="main-btn w-100">
                                            BUY <i class="fa-solid fa-angle-right"></i>
                                        </button>
                                    </a>
                                </div>


                            </div>
                        </div>
                        <!-- CARD -->

                        <!-- CARD -->
                        <div class="col-lg-3 col-md-4  col-sm-6 mb-3 mb-md-5 px-2">
                            <div class="pattern-card border rounded p-2">
                                <div class="patt-card-head">
                                    <div class="pt-img">
                                        <img src="assets/imgs/tyres/econodrive.jpg" alt="">
                                    </div>



                                </div>
                                <div class="feature">

                                    <ul class="list-unstyled">
                                        <li
                                            class="d-flex align-items-center flex-column justify-content-center text-center">
                                            <div class="">
                                                <img src="assets/imgs/fuel-tyre.jpg" alt="">
                                            </div>
                                            <span class="green">B</span>
                                        </li>

                                        <li
                                            class="d-flex align-items-center flex-column justify-content-center text-center">
                                            <div class="">
                                                <img src="assets/imgs/wet_grip.jpg" alt="">
                                            </div>
                                            <span class="orange">B</span>
                                        </li>

                                        <li
                                            class="d-flex align-items-center flex-column justify-content-center text-center">
                                            <div class="">
                                                <img src="assets/imgs/road-noise-icon.jpg" alt="">
                                            </div>
                                            <span class="black">72</span>
                                        </li>
                                    </ul>

                                </div>

                                <div class="tyre-detail ">
                                    <h5>ECONO DRIVE <span>225/55 R17 109/107H</span></h5>
                                </div>

                                <div class="labels">
                                    <a href="#">
                                        Dunlop
                                    </a>
                                    <a href="#">Summer</a>
                                </div>

                                <div class="price">
                                    <form a>

                                        <div
                                            class="price-label d-flex align-items-center justify-content-between flex-wrap mb-2">
                                            <h4 class="m-0">£127.05</h4>
                                            <p>Garage Fitted</p>
                                        </div>

                                        <div class="form-group mb-2">
                                            <select name="quantity" class="form-select">
                                                <option value="1">1 Tyre £<!--  -->127.05</option>
                                                <option value="2">2 Tyre £<!--  -->254.1</option>
                                                <option value="3">3 Tyre £<!--  -->381.15</option>
                                                <option value="4">4 Tyre £<!--  -->508.2</option>
                                            </select>
                                        </div>

                                    </form>
                                    <a href="booking.html">
                                        <button class="main-btn w-100">
                                            BUY <i class="fa-solid fa-angle-right"></i>
                                        </button>
                                    </a>
                                </div>


                            </div>
                        </div>
                        <!-- CARD -->
                        <!-- CARD -->
                        <div class="col-lg-3 col-md-4  col-sm-6 mb-3 mb-md-5 px-2">
                            <div class="pattern-card border rounded p-2">
                                <div class="patt-card-head">
                                    <div class="pt-img">
                                        <img src="assets/imgs/tyres/econodrive.jpg" alt="">
                                    </div>



                                </div>
                                <div class="feature">

                                    <ul class="list-unstyled">
                                        <li
                                            class="d-flex align-items-center flex-column justify-content-center text-center">
                                            <div class="">
                                                <img src="assets/imgs/fuel-tyre.jpg" alt="">
                                            </div>
                                            <span class="green">B</span>
                                        </li>

                                        <li
                                            class="d-flex align-items-center flex-column justify-content-center text-center">
                                            <div class="">
                                                <img src="assets/imgs/wet_grip.jpg" alt="">
                                            </div>
                                            <span class="orange">B</span>
                                        </li>

                                        <li
                                            class="d-flex align-items-center flex-column justify-content-center text-center">
                                            <div class="">
                                                <img src="assets/imgs/road-noise-icon.jpg" alt="">
                                            </div>
                                            <span class="black">72</span>
                                        </li>
                                    </ul>

                                </div>

                                <div class="tyre-detail ">
                                    <h5>ECONO DRIVE <span>225/55 R17 109/107H</span></h5>
                                </div>

                                <div class="labels">
                                    <a href="#">
                                        Dunlop
                                    </a>
                                    <a href="#">Summer</a>
                                </div>

                                <div class="price">
                                    <form a>

                                        <div
                                            class="price-label d-flex align-items-center justify-content-between flex-wrap mb-2">
                                            <h4 class="m-0">£127.05</h4>
                                            <p>Garage Fitted</p>
                                        </div>

                                        <div class="form-group mb-2">
                                            <select name="quantity" class="form-select">
                                                <option value="1">1 Tyre £<!--  -->127.05</option>
                                                <option value="2">2 Tyre £<!--  -->254.1</option>
                                                <option value="3">3 Tyre £<!--  -->381.15</option>
                                                <option value="4">4 Tyre £<!--  -->508.2</option>
                                            </select>
                                        </div>

                                    </form>
                                    <a href="booking.html">
                                        <button class="main-btn w-100">
                                            BUY <i class="fa-solid fa-angle-right"></i>
                                        </button>
                                    </a>
                                </div>


                            </div>
                        </div>
                        <!-- CARD -->
                        <!-- CARD -->
                        <div class="col-lg-3 col-md-4  col-sm-6 mb-3 mb-md-5 px-2">
                            <div class="pattern-card border rounded p-2">
                                <div class="patt-card-head">
                                    <div class="pt-img">
                                        <img src="assets/imgs/tyres/econodrive.jpg" alt="">
                                    </div>



                                </div>
                                <div class="feature">

                                    <ul class="list-unstyled">
                                        <li
                                            class="d-flex align-items-center flex-column justify-content-center text-center">
                                            <div class="">
                                                <img src="assets/imgs/fuel-tyre.jpg" alt="">
                                            </div>
                                            <span class="green">B</span>
                                        </li>

                                        <li
                                            class="d-flex align-items-center flex-column justify-content-center text-center">
                                            <div class="">
                                                <img src="assets/imgs/wet_grip.jpg" alt="">
                                            </div>
                                            <span class="orange">B</span>
                                        </li>

                                        <li
                                            class="d-flex align-items-center flex-column justify-content-center text-center">
                                            <div class="">
                                                <img src="assets/imgs/road-noise-icon.jpg" alt="">
                                            </div>
                                            <span class="black">72</span>
                                        </li>
                                    </ul>

                                </div>

                                <div class="tyre-detail ">
                                    <h5>ECONO DRIVE <span>225/55 R17 109/107H</span></h5>
                                </div>

                                <div class="labels">
                                    <a href="#">
                                        Dunlop
                                    </a>
                                    <a href="#">Summer</a>
                                </div>

                                <div class="price">
                                    <form a>

                                        <div
                                            class="price-label d-flex align-items-center justify-content-between flex-wrap mb-2">
                                            <h4 class="m-0">£127.05</h4>
                                            <p>Garage Fitted</p>
                                        </div>

                                        <div class="form-group mb-2">
                                            <select name="quantity" class="form-select">
                                                <option value="1">1 Tyre £<!--  -->127.05</option>
                                                <option value="2">2 Tyre £<!--  -->254.1</option>
                                                <option value="3">3 Tyre £<!--  -->381.15</option>
                                                <option value="4">4 Tyre £<!--  -->508.2</option>
                                            </select>
                                        </div>

                                    </form>
                                    <a href="booking.html">
                                        <button class="main-btn w-100">
                                            BUY <i class="fa-solid fa-angle-right"></i>
                                        </button>
                                    </a>
                                </div>


                            </div>
                        </div>
                        <!-- CARD -->
                        <!-- CARD -->
                        <div class="col-lg-3 col-md-4  col-sm-6 mb-3 mb-md-5 px-2">
                            <div class="pattern-card border rounded p-2">
                                <div class="patt-card-head">
                                    <div class="pt-img">
                                        <img src="assets/imgs/tyres/econodrive.jpg" alt="">
                                    </div>



                                </div>
                                <div class="feature">

                                    <ul class="list-unstyled">
                                        <li
                                            class="d-flex align-items-center flex-column justify-content-center text-center">
                                            <div class="">
                                                <img src="assets/imgs/fuel-tyre.jpg" alt="">
                                            </div>
                                            <span class="green">B</span>
                                        </li>

                                        <li
                                            class="d-flex align-items-center flex-column justify-content-center text-center">
                                            <div class="">
                                                <img src="assets/imgs/wet_grip.jpg" alt="">
                                            </div>
                                            <span class="orange">B</span>
                                        </li>

                                        <li
                                            class="d-flex align-items-center flex-column justify-content-center text-center">
                                            <div class="">
                                                <img src="assets/imgs/road-noise-icon.jpg" alt="">
                                            </div>
                                            <span class="black">72</span>
                                        </li>
                                    </ul>

                                </div>

                                <div class="tyre-detail ">
                                    <h5>ECONO DRIVE <span>225/55 R17 109/107H</span></h5>
                                </div>

                                <div class="labels">
                                    <a href="#">
                                        Dunlop
                                    </a>
                                    <a href="#">Summer</a>
                                </div>

                                <div class="price">
                                    <form a>

                                        <div
                                            class="price-label d-flex align-items-center justify-content-between flex-wrap mb-2">
                                            <h4 class="m-0">£127.05</h4>
                                            <p>Garage Fitted</p>
                                        </div>

                                        <div class="form-group mb-2">
                                            <select name="quantity" class="form-select">
                                                <option value="1">1 Tyre £<!--  -->127.05</option>
                                                <option value="2">2 Tyre £<!--  -->254.1</option>
                                                <option value="3">3 Tyre £<!--  -->381.15</option>
                                                <option value="4">4 Tyre £<!--  -->508.2</option>
                                            </select>
                                        </div>

                                    </form>
                                    <a href="booking.html">
                                        <button class="main-btn w-100">
                                            BUY <i class="fa-solid fa-angle-right"></i>
                                        </button>
                                    </a>
                                </div>


                            </div>
                        </div>
                        <!-- CARD -->
                        <!-- CARD -->
                        <div class="col-lg-3 col-md-4  col-sm-6 mb-3 mb-md-5 px-2">
                            <div class="pattern-card border rounded p-2">
                                <div class="patt-card-head">
                                    <div class="pt-img">
                                        <img src="assets/imgs/tyres/econodrive.jpg" alt="">
                                    </div>



                                </div>
                                <div class="feature">

                                    <ul class="list-unstyled">
                                        <li
                                            class="d-flex align-items-center flex-column justify-content-center text-center">
                                            <div class="">
                                                <img src="assets/imgs/fuel-tyre.jpg" alt="">
                                            </div>
                                            <span class="green">B</span>
                                        </li>

                                        <li
                                            class="d-flex align-items-center flex-column justify-content-center text-center">
                                            <div class="">
                                                <img src="assets/imgs/wet_grip.jpg" alt="">
                                            </div>
                                            <span class="orange">B</span>
                                        </li>

                                        <li
                                            class="d-flex align-items-center flex-column justify-content-center text-center">
                                            <div class="">
                                                <img src="assets/imgs/road-noise-icon.jpg" alt="">
                                            </div>
                                            <span class="black">72</span>
                                        </li>
                                    </ul>

                                </div>

                                <div class="tyre-detail ">
                                    <h5>ECONO DRIVE <span>225/55 R17 109/107H</span></h5>
                                </div>

                                <div class="labels">
                                    <a href="#">
                                        Dunlop
                                    </a>
                                    <a href="#">Summer</a>
                                </div>

                                <div class="price">
                                    <form a>

                                        <div
                                            class="price-label d-flex align-items-center justify-content-between flex-wrap mb-2">
                                            <h4 class="m-0">£127.05</h4>
                                            <p>Garage Fitted</p>
                                        </div>

                                        <div class="form-group mb-2">
                                            <select name="quantity" class="form-select">
                                                <option value="1">1 Tyre £<!--  -->127.05</option>
                                                <option value="2">2 Tyre £<!--  -->254.1</option>
                                                <option value="3">3 Tyre £<!--  -->381.15</option>
                                                <option value="4">4 Tyre £<!--  -->508.2</option>
                                            </select>
                                        </div>

                                    </form>
                                    <a href="booking.html">
                                        <button class="main-btn w-100">
                                            BUY <i class="fa-solid fa-angle-right"></i>
                                        </button>
                                    </a>
                                </div>


                            </div>
                        </div>
                        <!-- CARD -->

                        <!-- CARD -->
                        <div class="col-lg-3 col-md-4  col-sm-6 mb-3 mb-md-5 px-2">
                            <div class="pattern-card border rounded p-2">
                                <div class="patt-card-head">
                                    <div class="pt-img">
                                        <img src="assets/imgs/tyres/econodrive.jpg" alt="">
                                    </div>



                                </div>
                                <div class="feature">

                                    <ul class="list-unstyled">
                                        <li
                                            class="d-flex align-items-center flex-column justify-content-center text-center">
                                            <div class="">
                                                <img src="assets/imgs/fuel-tyre.jpg" alt="">
                                            </div>
                                            <span class="green">B</span>
                                        </li>

                                        <li
                                            class="d-flex align-items-center flex-column justify-content-center text-center">
                                            <div class="">
                                                <img src="assets/imgs/wet_grip.jpg" alt="">
                                            </div>
                                            <span class="orange">B</span>
                                        </li>

                                        <li
                                            class="d-flex align-items-center flex-column justify-content-center text-center">
                                            <div class="">
                                                <img src="assets/imgs/road-noise-icon.jpg" alt="">
                                            </div>
                                            <span class="black">72</span>
                                        </li>
                                    </ul>

                                </div>

                                <div class="tyre-detail ">
                                    <h5>ECONO DRIVE <span>225/55 R17 109/107H</span></h5>
                                </div>

                                <div class="labels">
                                    <a href="#">
                                        Dunlop
                                    </a>
                                    <a href="#">Summer</a>
                                </div>

                                <div class="price">
                                    <form a>

                                        <div
                                            class="price-label d-flex align-items-center justify-content-between flex-wrap mb-2">
                                            <h4 class="m-0">£127.05</h4>
                                            <p>Garage Fitted</p>
                                        </div>

                                        <div class="form-group mb-2">
                                            <select name="quantity" class="form-select">
                                                <option value="1">1 Tyre £<!--  -->127.05</option>
                                                <option value="2">2 Tyre £<!--  -->254.1</option>
                                                <option value="3">3 Tyre £<!--  -->381.15</option>
                                                <option value="4">4 Tyre £<!--  -->508.2</option>
                                            </select>
                                        </div>

                                    </form>
                                    <a href="booking.html">
                                        <button class="main-btn w-100">
                                            BUY <i class="fa-solid fa-angle-right"></i>
                                        </button>
                                    </a>
                                </div>


                            </div>
                        </div>
                        <!-- CARD -->
                        <!-- CARD -->
                        <div class="col-lg-3 col-md-4  col-sm-6 mb-3 mb-md-5 px-2">
                            <div class="pattern-card border rounded p-2">
                                <div class="patt-card-head">
                                    <div class="pt-img">
                                        <img src="assets/imgs/tyres/econodrive.jpg" alt="">
                                    </div>



                                </div>
                                <div class="feature">

                                    <ul class="list-unstyled">
                                        <li
                                            class="d-flex align-items-center flex-column justify-content-center text-center">
                                            <div class="">
                                                <img src="assets/imgs/fuel-tyre.jpg" alt="">
                                            </div>
                                            <span class="green">B</span>
                                        </li>

                                        <li
                                            class="d-flex align-items-center flex-column justify-content-center text-center">
                                            <div class="">
                                                <img src="assets/imgs/wet_grip.jpg" alt="">
                                            </div>
                                            <span class="orange">B</span>
                                        </li>

                                        <li
                                            class="d-flex align-items-center flex-column justify-content-center text-center">
                                            <div class="">
                                                <img src="assets/imgs/road-noise-icon.jpg" alt="">
                                            </div>
                                            <span class="black">72</span>
                                        </li>
                                    </ul>

                                </div>

                                <div class="tyre-detail ">
                                    <h5>ECONO DRIVE <span>225/55 R17 109/107H</span></h5>
                                </div>

                                <div class="labels">
                                    <a href="#">
                                        Dunlop
                                    </a>
                                    <a href="#">Summer</a>
                                </div>

                                <div class="price">
                                    <form a>

                                        <div
                                            class="price-label d-flex align-items-center justify-content-between flex-wrap mb-2">
                                            <h4 class="m-0">£127.05</h4>
                                            <p>Garage Fitted</p>
                                        </div>

                                        <div class="form-group mb-2">
                                            <select name="quantity" class="form-select">
                                                <option value="1">1 Tyre £<!--  -->127.05</option>
                                                <option value="2">2 Tyre £<!--  -->254.1</option>
                                                <option value="3">3 Tyre £<!--  -->381.15</option>
                                                <option value="4">4 Tyre £<!--  -->508.2</option>
                                            </select>
                                        </div>

                                    </form>
                                    <a href="booking.html">
                                        <button class="main-btn w-100">
                                            BUY <i class="fa-solid fa-angle-right"></i>
                                        </button>
                                    </a>
                                </div>


                            </div>
                        </div>
                        <!-- CARD -->
                        <!-- CARD -->
                        <div class="col-lg-3 col-md-4  col-sm-6 mb-3 mb-md-5 px-2">
                            <div class="pattern-card border rounded p-2">
                                <div class="patt-card-head">
                                    <div class="pt-img">
                                        <img src="assets/imgs/tyres/econodrive.jpg" alt="">
                                    </div>



                                </div>
                                <div class="feature">

                                    <ul class="list-unstyled">
                                        <li
                                            class="d-flex align-items-center flex-column justify-content-center text-center">
                                            <div class="">
                                                <img src="assets/imgs/fuel-tyre.jpg" alt="">
                                            </div>
                                            <span class="green">B</span>
                                        </li>

                                        <li
                                            class="d-flex align-items-center flex-column justify-content-center text-center">
                                            <div class="">
                                                <img src="assets/imgs/wet_grip.jpg" alt="">
                                            </div>
                                            <span class="orange">B</span>
                                        </li>

                                        <li
                                            class="d-flex align-items-center flex-column justify-content-center text-center">
                                            <div class="">
                                                <img src="assets/imgs/road-noise-icon.jpg" alt="">
                                            </div>
                                            <span class="black">72</span>
                                        </li>
                                    </ul>

                                </div>

                                <div class="tyre-detail ">
                                    <h5>ECONO DRIVE <span>225/55 R17 109/107H</span></h5>
                                </div>

                                <div class="labels">
                                    <a href="#">
                                        Dunlop
                                    </a>
                                    <a href="#">Summer</a>
                                </div>

                                <div class="price">
                                    <form a>

                                        <div
                                            class="price-label d-flex align-items-center justify-content-between flex-wrap mb-2">
                                            <h4 class="m-0">£127.05</h4>
                                            <p>Garage Fitted</p>
                                        </div>

                                        <div class="form-group mb-2">
                                            <select name="quantity" class="form-select">
                                                <option value="1">1 Tyre £<!--  -->127.05</option>
                                                <option value="2">2 Tyre £<!--  -->254.1</option>
                                                <option value="3">3 Tyre £<!--  -->381.15</option>
                                                <option value="4">4 Tyre £<!--  -->508.2</option>
                                            </select>
                                        </div>

                                    </form>
                                    <a href="booking.html">
                                        <button class="main-btn w-100">
                                            BUY <i class="fa-solid fa-angle-right"></i>
                                        </button>
                                    </a>
                                </div>


                            </div>
                        </div>
                        <!-- CARD -->


                        <!-- CARD -->
                        <div class="col-lg-3 col-md-4  col-sm-6 mb-3 mb-md-5 px-2">
                            <div class="pattern-card border rounded p-2">
                                <div class="patt-card-head">
                                    <div class="pt-img">
                                        <img src="assets/imgs/tyres/econodrive.jpg" alt="">
                                    </div>



                                </div>
                                <div class="feature">

                                    <ul class="list-unstyled">
                                        <li
                                            class="d-flex align-items-center flex-column justify-content-center text-center">
                                            <div class="">
                                                <img src="assets/imgs/fuel-tyre.jpg" alt="">
                                            </div>
                                            <span class="green">B</span>
                                        </li>

                                        <li
                                            class="d-flex align-items-center flex-column justify-content-center text-center">
                                            <div class="">
                                                <img src="assets/imgs/wet_grip.jpg" alt="">
                                            </div>
                                            <span class="orange">B</span>
                                        </li>

                                        <li
                                            class="d-flex align-items-center flex-column justify-content-center text-center">
                                            <div class="">
                                                <img src="assets/imgs/road-noise-icon.jpg" alt="">
                                            </div>
                                            <span class="black">72</span>
                                        </li>
                                    </ul>

                                </div>

                                <div class="tyre-detail ">
                                    <h5>ECONO DRIVE <span>225/55 R17 109/107H</span></h5>
                                </div>

                                <div class="labels">
                                    <a href="#">
                                        Dunlop
                                    </a>
                                    <a href="#">Summer</a>
                                </div>

                                <div class="price">
                                    <form a>

                                        <div
                                            class="price-label d-flex align-items-center justify-content-between flex-wrap mb-2">
                                            <h4 class="m-0">£127.05</h4>
                                            <p>Garage Fitted</p>
                                        </div>

                                        <div class="form-group mb-2">
                                            <select name="quantity" class="form-select">
                                                <option value="1">1 Tyre £<!--  -->127.05</option>
                                                <option value="2">2 Tyre £<!--  -->254.1</option>
                                                <option value="3">3 Tyre £<!--  -->381.15</option>
                                                <option value="4">4 Tyre £<!--  -->508.2</option>
                                            </select>
                                        </div>

                                    </form>
                                    <a href="booking.html">
                                        <button class="main-btn w-100">
                                            BUY <i class="fa-solid fa-angle-right"></i>
                                        </button>
                                    </a>
                                </div>


                            </div>
                        </div>
                        <!-- CARD -->


                    </div>
                </section>
                <!-- TYRES END -->

            </div>
        </section>
        <!-- TYRES PATTERN SECTION END -->



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
