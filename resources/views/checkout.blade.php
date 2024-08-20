<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tyre Zone | New & Part Worn Tyres | Tyres in ManchesterETYRE ZONE Tyeres</title>
    <link rel="icon" href="speed.png">
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


        <!-- CHECKOUT DETAILS START -->
        <div class="checkout">
            <div class="container">
                <form action="">

                    <div class="row">
                        <div class="col-lg-7">
                            <h3>Enter your details</h3>


                            <div class="checkout-form form-wrap">

                                <div class="row">

                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="">First Name <span>*</span></label>
                                            <input type="text" class="form-control" placeholder="First Name">
                                        </div>
                                    </div>

                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="">Last Name <span>*</span></label>
                                            <input type="text" class="form-control" placeholder="Last Name">
                                        </div>
                                    </div>

                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="">Email Name <span>*</span></label>
                                            <input type="email" class="form-control" placeholder="Email">
                                        </div>
                                    </div>

                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="">Telephone <span>*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    +44
                                                </div>
                                                <input type="number" class="form-control" placeholder="Telephone">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="">Reg. No. <span>*</span></label>
                                            <div class="input-group">
                                                <input type="Text" class="form-control" placeholder="REG No.">
                                                <button class="input-group-text igt-btn">
                                                    Lookup
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <h4 class="mt-4">Your Address</h4>
                                <div class="row">

                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="">Post Code <span>*</span></label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Post Code">
                                                <button class="input-group-text igt-btn">
                                                    Lookup
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="">Company <span>*</span></label>
                                            <input type="text" class="form-control" placeholder="Company">
                                        </div>
                                    </div>

                                    <div class="col-sm-12 mb-3">
                                        <div class="form-group">
                                            <label for="">Address <span>*</span></label>
                                            <input type="text" class="form-control" placeholder="Company">
                                        </div>
                                    </div>

                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="">City <span>*</span></label>
                                            <input type="text" class="form-control" placeholder="City">
                                        </div>
                                    </div>

                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="">Country <span>*</span></label>
                                            <select class="form-select">
                                                <option value="Aberdeen">Aberdeen</option>
                                                <option value="Aberdeenshire">Aberdeenshire</option>
                                                <option value="Anglesey">Anglesey</option>
                                                <option value="Angus">Angus</option>
                                                <option value="Argyll and Bute">Argyll and Bute</option>
                                                <option value="Bedfordshire">Bedfordshire</option>
                                                <option value="Berkshire">Berkshire</option>
                                                <option value="Blaenau Gwent">Blaenau Gwent</option>
                                                <option value="Bridgend">Bridgend</option>
                                                <option value="Bristol">Bristol</option>
                                                <option value="Buckinghamshire">Buckinghamshire</option>
                                                <option value="Caerphilly">Caerphilly</option>
                                                <option value="Cambridgeshire">Cambridgeshire</option>
                                                <option value="Cardiff">Cardiff</option>
                                                <option value="Carmarthenshire">Carmarthenshire</option>
                                                <option value="Ceredigion">Ceredigion</option>
                                                <option value="Cheshire">Cheshire</option>
                                                <option value="Clackmannanshire">Clackmannanshire</option>
                                                <option value="Conwy">Conwy</option>
                                                <option value="Cornwall">Cornwall</option>
                                                <option value="Denbighshire">Denbighshire</option>
                                                <option value="Derbyshire">Derbyshire</option>
                                                <option value="Devon">Devon</option>
                                                <option value="Dorset">Dorset</option>
                                                <option value="Dumfries and Galloway">Dumfries and Galloway</option>
                                                <option value="Dundee">Dundee</option>
                                                <option value="Durham">Durham</option>
                                                <option value="East Ayrshire">East Ayrshire</option>
                                                <option value="East Dunbartonshire">East Dunbartonshire</option>
                                                <option value="East Lothian">East Lothian</option>
                                                <option value="East Renfrewshire">East Renfrewshire</option>
                                                <option value="East Riding of Yorkshire">East Riding of Yorkshire
                                                </option>
                                                <option value="East Sussex">East Sussex</option>
                                                <option value="Edinburgh">Edinburgh</option>
                                                <option value="Essex">Essex</option>
                                                <option value="Falkirk">Falkirk</option>
                                                <option value="Fife">Fife</option>
                                                <option value="Flintshire">Flintshire</option>
                                                <option value="Glasgow">Glasgow</option>
                                                <option value="Gloucestershire">Gloucestershire</option>
                                                <option value="Greater London">Greater London</option>
                                                <option value="Greater Manchester">Greater Manchester</option>
                                                <option value="Gwynedd">Gwynedd</option>
                                                <option value="Hampshire">Hampshire</option>
                                                <option value="Herefordshire">Herefordshire</option>
                                                <option value="Hertfordshire">Hertfordshire</option>
                                                <option value="Highlands">Highlands</option>
                                                <option value="Inverclyde">Inverclyde</option>
                                                <option value="Isle of Wight">Isle of Wight</option>
                                                <option value="Kent">Kent</option>
                                                <option value="Lancashire">Lancashire</option>
                                                <option value="Leicestershire">Leicestershire</option>
                                                <option value="Lincolnshire">Lincolnshire</option>
                                                <option value="Merseyside">Merseyside</option>
                                                <option value="Merthyr Tydfil">Merthyr Tydfil</option>
                                                <option value="Midlothian">Midlothian</option>
                                                <option value="Monmouthshire">Monmouthshire</option>
                                                <option value="Moray">Moray</option>
                                                <option value="Neath Port Talbot">Neath Port Talbot</option>
                                                <option value="Newport">Newport</option>
                                                <option value="Norfolk">Norfolk</option>
                                                <option value="North Ayrshire">North Ayrshire</option>
                                                <option value="North Lanarkshire">North Lanarkshire</option>
                                                <option value="North Yorkshire">North Yorkshire</option>
                                                <option value="Northamptonshire">Northamptonshire</option>
                                                <option value="Northumberland">Northumberland</option>
                                                <option value="Nottinghamshire">Nottinghamshire</option>
                                                <option value="Orkney Islands">Orkney Islands</option>
                                                <option value="Oxfordshire">Oxfordshire</option>
                                                <option value="Pembrokeshire">Pembrokeshire</option>
                                                <option value="Perth and Kinross">Perth and Kinross</option>
                                                <option value="Powys">Powys</option>
                                                <option value="Renfrewshire">Renfrewshire</option>
                                                <option value="Rhondda Cynon Taff">Rhondda Cynon Taff</option>
                                                <option value="Rutland">Rutland</option>
                                                <option value="Scottish Borders">Scottish Borders</option>
                                                <option value="Shetland Islands">Shetland Islands</option>
                                                <option value="Shropshire">Shropshire</option>
                                                <option value="Somerset">Somerset</option>
                                                <option value="South Ayrshire">South Ayrshire</option>
                                                <option value="South Lanarkshire">South Lanarkshire</option>
                                                <option value="South Yorkshire">South Yorkshire</option>
                                                <option value="Staffordshire">Staffordshire</option>
                                                <option value="Stirling">Stirling</option>
                                                <option value="Suffolk">Suffolk</option>
                                                <option value="Surrey">Surrey</option>
                                                <option value="Swansea">Swansea</option>
                                                <option value="Torfaen">Torfaen</option>
                                                <option value="Tyne and Wear">Tyne and Wear</option>
                                                <option value="Vale of Glamorgan">Vale of Glamorgan</option>
                                                <option value="Warwickshire">Warwickshire</option>
                                                <option value="West Dunbartonshire">West Dunbartonshire</option>
                                                <option value="West Lothian">West Lothian</option>
                                                <option value="West Midlands">West Midlands</option>
                                                <option value="West Sussex">West Sussex</option>
                                                <option value="West Yorkshire">West Yorkshire</option>
                                                <option value="Western Isles">Western Isles</option>
                                                <option value="Wiltshire">Wiltshire</option>
                                                <option value="Worcestershire">Worcestershire</option>
                                                <option value="Wrexham">Wrexham</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="">Country <span>*</span></label>
                                            <select class="form-select">
                                                <!-- <option value=""></option> -->
                                                <option value="235" selected="">United Kingdom</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-12 mb-3">
                                        <div class="form-group ">
                                            <label for="">Comment/Notes</label>
                                            <textarea name="" class="form-control" rows="4" id=""></textarea>
                                        </div>
                                    </div>


                                </div>


                            </div>

                        </div>

                        <!-- CART SECTION START -->
                        <div class="col-lg-5">
                            <h3>Your Order</h3>

                            <!-- CART START -->
                            <div class="cart">
                                <div class="cart-items">
                                    <div class="table-responsive">
                                        <table class="table ">
                                            <tbody>

                                                <tr>
                                                    <td>
                                                        <div class="item-title">
                                                            <p>Balancing And Repairs</p>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="qty-wrap d-flex align-items-center">
                                                            <button><i class="fa-solid fa-minus"></i></button>
                                                            <input type="text" min="1" value="1">
                                                            <button><i class="fa-solid fa-plus"></i></button>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="price mb-0">£10.00</p>
                                                    </td>
                                                    <td>
                                                        <div class="text-end">
                                                            <button class="remove-item">
                                                                <i class="fa-solid fa-trash-can"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="item-title">
                                                            <p>Summer Tyre Dunlop GRANDTREK AT20 265/65R17 112 S
                                                                (Garage Fitted)</p>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="qty-wrap d-flex align-items-center">
                                                            <button><i class="fa-solid fa-minus"></i></button>
                                                            <input type="text" min="1" value="1">
                                                            <button><i class="fa-solid fa-plus"></i></button>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="price mb-0">£10.00</p>
                                                    </td>
                                                    <td>
                                                        <div class="text-end">
                                                            <button class="remove-item">
                                                                <i class="fa-solid fa-trash-can"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td colspan="2"></td>
                                                    <td class="px-0"><strong>Sub-Total</strong></td>
                                                    <td>
                                                        <p class="m-0 text-end">£132.65</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"></td>
                                                    <td class="px-0"><strong>Total</strong></td>
                                                    <td>
                                                        <p class="m-0 text-end">£132.65</p>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- CART END -->

                            <!-- APPOINTMENT DETAIL START-->
                            <div class="appointment-detail mt-4">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th colspan="2">Appointment Details</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Centre Locator</td>
                                                <td>
                                                    <strong>TYRE ZONE TYRES LTD
                                                        Unit 4 Church Street, Middleton Manchester M24 2PY, UK</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Date time</td>
                                                <td>
                                                    <strong>07th, Jul 2024 morning</strong>
                                                </td>
                                            </tr>
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                            <!-- APPOINTMENT DETAIL END-->

                            <div class="form-check my-3">
                                <input type="radio" class="form-check-input" id="atFitting">
                                <label for="atFitting">Pay at Fitting Time</label>
                            </div>

                            <div class="form-check my-3">
                                <input type="checkbox" class="form-check-input" id="terms">
                                <label for="terms">I have read and agree to the <a href="#">Terms &
                                        Conditions of
                                        Use</a></label>
                            </div>
                            <div class="text-center text-sm-end">
                                <button class="main-btn">PROCEED TO BOOKING</button>
                            </div>

                        </div>
                        <!-- CART SECTION END -->
                    </div>

                </form>

            </div>
        </div>
        <!-- CHECKOUT DETAILS END -->




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
