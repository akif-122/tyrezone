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

        <!-- HERO BANNER SECTION START -->
        <section class="hero-banner overlay" style="background-image: url('assets/imgs/service-bg.jpg');">
            <div class="container">
                <div class="banner-text">
                    <h1>Wheel Balancing Manchester</h1>
                </div>
            </div>
        </section>
        <!-- HERO BANNER SECTION END -->



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
                                        <button class="search-btn px-0 w-100">
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
                                        <button class="search-btn px-0 w-100">
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

        <!-- GET QOUTES  POPUP START -->
        <div class="qoutes-popup">


            <div class="d-flex justify-content-center gap-3 align-items-center">
                <h3>Get a quote today</h3>
                <button class="main-btn" data-bs-toggle="modal" data-bs-target="#quote-modal">Quote Now</button>
            </div>


            <div class="modal fade" id="quote-modal">
                <div class="modal-dialog modal-lg modal-dialog-centered ">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="m-0">Request a quote</h5>
                            <button class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body form-wrap ">
                            <div class="row ">
                                <div class="col-lg-6">

                                    <!-- LICENNS PLATE  -->
                                    <div class="license-plate mb-3">
                                        <div class="row">
                                            <div class="col-sm-8 mb-2">
                                                <div class="form-group">
                                                    <label for="">License plate <span>*</span></label>
                                                    <input type="text" class="form-control"
                                                        placeholder="LICENSE PLATE">
                                                </div>
                                            </div>

                                            <div class="col-sm-3 mb-2 px-sm-0 align-self-end">
                                                <button class="main-btn w-100 px-0 d-block">Lookup</button>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- LICENNS PLATE  -->

                                    <div class="form-group mb-3">
                                        <label for="">Vehicle Mileage</label>
                                        <input type="number" class="form-control"
                                            placeholder="Vehicle Mileage (Miles)">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="">Your Name <span>*</span></label>
                                        <input type="text" class="form-control" placeholder="Your Name">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="">Preferred contact</label>
                                        <select name="" class="form-select" id="">
                                            <option value="">By Email</option>
                                            <option value="">By Phone</option>
                                        </select>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="">E-mail Address <span>*</span></label>
                                        <input type="email" class="form-control" placeholder="name@gmail.com">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="">Phone Number <span>*</span></label>
                                        <input type="text" class="form-control" placeholder="Phone Number">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="">Post Code Number </label>
                                        <input type="text" class="form-control" placeholder="Post Code Number">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="">Message </label>
                                        <textarea name="" rows="4" class="form-control" id=""></textarea>
                                    </div>

                                </div>

                                <div class="col-lg-6">
                                    <label>Frequently selected services *</label>

                                    <div class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input" id="home-work">
                                        <label for="home-work"> 24X7 Service Home Work Roadside </label>
                                    </div>

                                    <div class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input" id="Locking-Nut-Removal">
                                        <label for="Locking-Nut-Removal"> Locking Nut Removal </label>
                                    </div>

                                    <div class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input" id="Puncture">
                                        <label for="Puncture"> Puncture Rim Repair</label>
                                    </div>

                                    <div class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input" id="Tyre-Pressure">
                                        <label for="Tyre-Pressure">The Impact of Hot Weather on Tyre Pressure</label>
                                    </div>

                                    <div class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input" id="Tyre-Puncture">
                                        <label for="Tyre-Puncture">Tyre Puncture Repair</label>
                                    </div>

                                    <div class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input" id="Roadside-Assistance">
                                        <label for="Roadside-Assistance">Roadside Assistance Redefined Mobile Tyre
                                            Fitting Manchester</label>
                                    </div>

                                    <div class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input" id="Emergency-Tyre-Changing">
                                        <label for="Emergency-Tyre-Changing">Emergency Tyre Changing Services in
                                            Manchester by TYRE ZONE -Tyres</label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input" id="Valves">
                                        <label for="Valves">Valves</label>
                                    </div>

                                    <div class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input"
                                            id="Emergency-Tyre-Replacement">
                                        <label for="Emergency-Tyre-Replacement">Emergency Tyre Replacement </label>
                                    </div>


                                    <div class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input" id="Rim-Crack-Repair">
                                        <label for="Rim-Crack-Repair">Rim Crack Repair
                                        </label>
                                    </div>

                                    <div class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input" id="Tyre-Repair">
                                        <label for="Tyre-Repair">Tyre Repair
                                        </label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input" id="Long-Lasting-Tyres">
                                        <label for="Long-Lasting-Tyres">15 Tips to Ensure Long-Lasting Tyres: Expert
                                            Advice by TYRE ZONE -tyres
                                        </label>
                                    </div>


                                    <div class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input" id="Energy-Efficiency">
                                        <label for="Energy-Efficiency">The Road to Energy Efficiency: A Deep Dive into
                                            Energy-Saving Tyres and the Role of Mobile Tyre Serv
                                        </label>
                                    </div>

                                    <div class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input" id="TPMS">
                                        <label for="TPMS">TPMS
                                        </label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input" id="TYRE ZONE -Tyres">
                                        <label for="TYRE ZONE -Tyres">TYRE ZONE -Tyres: Your Ultimate Guide to Mobile
                                            Tyre
                                            Fitting
                                        </label>
                                    </div>




                                </div>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="main-btn btn-sm">Request a quote</button>
                            <button type="button" class="btn b-close" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- GET QOUTES  POPUP END -->


        <!-- SERVICES TEXT -->
        <div class="container my-5">
            <div class="about-text">

                <p>Perfectly balanced wheels not only enhance your driving experience by making the ride smooth and
                    comfortable but are also crucial for safety and vehicle longevity. Therefore, it becomes important
                    to keep the wheel balance in optimal condition. If you go for regular wheel balancing checks, any
                    issues can be detected at an early stage, resulting in the prevention of further damage. Unusual
                    noises and poor fuel economy are a few indications of unbalanced wheels.</p>

                <p>Look no further than <strong>TYRE ZONE TYRES LTD</strong>. if you are searching for a reliable
                    workshop
                    offering quality wheel balancing Manchester services at reasonable prices. Here, our skilled
                    technicians use advanced machinery to offer prompt and accurate services. We aim to ensure optimum
                    vehicle performance and driving safety.</p>

                <h4>Benefits of balanced wheels</h4>

                <p>While there are several advantages to perfectly balanced wheels, a few of them are:</p>

                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <li>Smoother ride</li>
                            <li>Improved vehicle handling</li>
                        </ul>
                    </div>

                    <div class="col-md-6">
                        <ul>
                            <li>Prolong tyres’ life</li>
                            <li>Better mileage</li>
                        </ul>
                    </div>
                </div>

                <h4>When should you visit us?</h4>

                <p>Our experts suggest connecting with us once a year, or every 12,000–16,000 miles, for routine wheel
                    balancing checks. Given are a few of the signs of unbalanced wheels:</p>

                <h6>Increased fuel consumption</h6>
                <p>Wheel imbalance has a greater impact on your vehicle’s fuel efficiency. The vehicle consumes more
                    fuel when the wheels are not perfectly balanced, as the engine has to put in extra effort to keep
                    the vehicle running normally.</p>

                <h6>Screeching noise from tyres</h6>

                <p>A screeching noise or humming noise coming from the tyres when driving at high speeds is caused by
                    imperfect wheel balance.</p>

                <h4>Excessive vibration</h4>

                <p>If you feel the vibration in the steering wheel, it is a clear indication of unbalanced whe</p>
                <h6>A few more are:</h6>

                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <li>Uneven tyre wear</li>
                            <li>Poor steering response</li>
                        </ul>
                    </div>

                    <div class="col-md-6">
                        <ul>
                            <li>Bad cornering</li>
                        </ul>
                    </div>
                </div>

                <h4>Reach us</h4>

                <p>If you are experiencing any of the above signs, we recommend you seek professional assistance from us
                    as soon as possible. We are one of the most reputed service providers in the area, offering
                    impeccable <strong>wheel balancing Manchester.</strong></p>

                <p>You can directly visit our garage at <strong>Unit 4 Church Street, Middleton, Manchester, M24
                        2PY</strong>.</p>

                <p>We are 24/7 Open.</p>

                <p>For detailed information, feel free to talk to our experts at <a href="tel:0161 654 7756">0161 654
                        7756</a>, or drop us your queries at <a href="mailto:TYRE ZONE tyres@hotmail.com">TYRE ZONE
                        tyres@hotmail.com</a> .</p>

                <strong>We are happy to assist you!</strong>



            </div>
        </div>
        <!-- SERVICES TEXT END -->


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
