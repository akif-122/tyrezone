<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="icon" href="{{ asset('speed.png') }}" />

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
    <link rel="stylesheet" href="../admin/assets/css/style.css">

</head>

<body>

    <div class="wrapper">
        <div class="main">
            @includeIf('admin.includes.sidebar')


            <div class="main-wrap" id="mainArea">

                @includeIf('admin.includes.topbar')


                <div class="content-area mt-5">
                    <div class="col-md-9 mx-auto">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="m-0">Add Product</h5>
                            <a class="main-btn sm" href="{{ route('adminProducts') }}">All Products</a>
                        </div>

                        <div class="form form-wrap sign-up-wrap mt-3 ">
                            <form action="{{ route('add') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4 mb-4">
                                        <div class="form-group">
                                            <label for="">Name:</label>
                                            <input type="text" name="name" class="form-control" placeholder="Name"
                                                required>
                                        </div>
                                    </div>

                                    <div class="col-md-4 mb-4">
                                        <div class="form-group">
                                            <label for="">Image:</label>
                                            <input type="file" name="image" class="form-control"
                                                placeholder="Image">
                                        </div>
                                    </div>

                                    <div class="col-md-4 mb-4">
                                        <div class="form-group">
                                            <label for="">Manufacturer Name:</label>
                                            <select class="form-select" name="manu_name" required>
                                                @foreach ($manufacturer as $item)
                                                    <option value="{{ $item->name }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4 mb-4">
                                        <div class="form-group">
                                            <label for="">Pattern Type:</label>
                                            <select class="form-select" name="pattern_type" required>
                                                @foreach ($pattern as $item)
                                                    <option value="{{ $item->name_of_manufacturer }}">
                                                        {{ $item->name_of_manufacturer }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4 mb-4">
                                        <div class="form-group">
                                            <label for="">Fuel Efficiency:</label>
                                            <input type="text" name="fuel" class="form-control"
                                                placeholder="Fuel Efficiency" required>
                                        </div>
                                    </div>

                                    <div class="col-md-4 mb-4">
                                        <div class="form-group">
                                            <label for="">Wet Grip:</label>
                                            <input type="text" name="wet_grip" class="form-control"
                                                placeholder="Wet Grip" required>
                                        </div>
                                    </div>

                                    <div class="col-md-4 mb-4">
                                        <div class="form-group">
                                            <label for="">Road Noise:</label>
                                            <input type="text" name="road_noise" class="form-control"
                                                placeholder="Road Noise" required>
                                        </div>
                                    </div>

                                    <div class="col-md-4 mb-4">
                                        <div class="form-group">
                                            <label for="">Width</label>
                                            <select name="width" class="form-select" required="">
                                                <option value="" selected="" style="display:none">
                                                    Select</option>
                                                <option value="6">6</option>
                                                <option value="7.5">7.5</option>
                                                <option value="8.5">8.5</option>
                                                <option value="8.25">8.25</option>
                                                <option value="9">9</option>
                                                <option value="9.5">9.5</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="11.5">11.5</option>
                                                <option value="12">12</option>
                                                <option value="12.5">12.5</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15.5">15.5</option>
                                                <option value="17">17</option>
                                                <option value="24">24</option>
                                                <option value="27">27</option>
                                                <option value="30">30</option>
                                                <option value="31">31</option>
                                                <option value="32">32</option>
                                                <option value="33">33</option>
                                                <option value="35">35</option>
                                                <option value="37">37</option>
                                                <option value="38">38</option>
                                                <option value="39">39</option>
                                                <option value="40">40</option>
                                                <option value="105">105</option>
                                                <option value="115">115</option>
                                                <option value="125">125</option>
                                                <option value="135">135</option>
                                                <option value="145">145</option>
                                                <option value="155">155</option>
                                                <option value="165">165</option>
                                                <option value="175">175</option>
                                                <option value="180">180</option>
                                                <option value="185">185</option>
                                                <option value="190">190</option>
                                                <option value="195">195</option>
                                                <option value="200">200</option>
                                                <option value="205">205</option>
                                                <option value="210">210</option>
                                                <option value="215">215</option>
                                                <option value="220">220</option>
                                                <option value="225">225</option>
                                                <option value="230">230</option>
                                                <option value="235">235</option>
                                                <option value="240">240</option>
                                                <option value="245">245</option>
                                                <option value="250">250</option>
                                                <option value="255">255</option>
                                                <option value="265">265</option>
                                                <option value="270">270</option>
                                                <option value="275">275</option>
                                                <option value="280">280</option>
                                                <option value="285">285</option>
                                                <option value="295">295</option>
                                                <option value="305">305</option>
                                                <option value="315">315</option>
                                                <option value="325">325</option>
                                                <option value="335">335</option>
                                                <option value="345">345</option>
                                                <option value="355">355</option>
                                                <option value="385">385</option>
                                                <option value="420">420</option>
                                                <option value="425">425</option>
                                                <option value="435">435</option>
                                                <option value="445">445</option>
                                                <option value="455">455</option>
                                                <option value="520">520</option>
                                                <option value="550">550</option>
                                                <option value="600">600</option>
                                                <option value="640">640</option>
                                                <option value="650">650</option>
                                                <option value="670">670</option>
                                                <option value="700">700</option>
                                                <option value="725">725</option>
                                                <option value="750">750</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <div class="form-group">
                                            <label for="">Profile</label>
                                            <select name="profile" class="form-select" required="">
                                                <option value="" selected="" style="display:none">
                                                    Select</option>

                                                <option value="10.0">10.0</option>
                                                <option value="25">25</option>
                                                <option value="30">30</option>
                                                <option value="35">35</option>
                                                <option value="40">40</option>
                                                <option value="45">45</option>
                                                <option value="50">50</option>
                                                <option value="55">55</option>
                                                <option value="60">60</option>
                                                <option value="65">65</option>
                                                <option value="70">70</option>
                                                <option value="75">75</option>
                                                <option value="80">80</option>
                                                <option value="85">85</option>
                                                <option value="90">90</option>
                                                <option value="95">95</option>
                                                <option value="100">100</option>
                                                <option value="650">650</option>
                                                <option value="700">700</option>
                                                <option value="850">850</option>
                                                <option value="950">950</option>
                                                <option value="1050">1050</option>
                                                <option value="1150">1150</option>
                                                <option value="1250">1250</option>
                                                <option value="1350">1350</option>
                                                <option value="1450">1450</option>
                                                <option value="1550">1550</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <div class="form-group">
                                            <label for="">Rim Size</label>
                                            <select name="rim" class="form-select" required="">
                                                <option value="" selected="" style="display:none">
                                                    Select</option>

                                                <option value="-11">-11</option>
                                                <option value="-15.3">-15.3</option>
                                                <option value="-16">-16</option>
                                                <option value="-18">-18</option>
                                                <option value="-21">-21</option>
                                                <option value="-24">-24</option>
                                                <option value="-25">-25</option>
                                                <option value="R01">R01</option>
                                                <option value="R02">R02</option>
                                                <option value="R03">R03</option>
                                                <option value="R05">R05</option>
                                                <option value="R06">R06</option>
                                                <option value="R07">R07</option>
                                                <option value="R9">R9</option>
                                                <option value="R10">R10</option>
                                                <option value="R12">R12</option>
                                                <option value="R13">R13</option>
                                                <option value="R14">R14</option>
                                                <option value="R15">R15</option>
                                                <option value="R16">R16</option>
                                                <option value="R17">R17</option>
                                                <option value="R17.5">R17.5</option>
                                                <option value="R18">R18</option>
                                                <option value="R19">R19</option>
                                                <option value="R19.5">R19.5</option>
                                                <option value="R20">R20</option>
                                                <option value="R21">R21</option>
                                                <option value="R22">R22</option>
                                                <option value="R22.5">R22.5</option>
                                                <option value="R23">R23</option>
                                                <option value="R24">R24</option>
                                                <option value="R25">R25</option>
                                                <option value="R26">R26</option>
                                                <option value="R28">R28</option>
                                                <option value="R30">R30</option>
                                                <option value="R32">R32</option>
                                                <option value="R38">R38</option>
                                                <option value="R340">R340</option>
                                                <option value="R365">R365</option>
                                                <option value="R390">R390</option>
                                                <option value="R400">R400</option>
                                                <option value="R415">R415</option>
                                            </select>
                                        </div>
                                    </div>

                                  
                                    <div class="col-md-4 mb-4">
                                        <div class="form-group">
                                            <label for="">Speed</label>
                                            <select name="speed" class="form-select">
                                                <option value="" selected="" style="display:none">
                                                    Select</option>
                                                <option value="Any">Any</option>
                                                <option value="B">B</option>
                                                <option value="F">F</option>
                                                <option value="G">G</option>
                                                <option value="H">H</option>
                                                <option value="J">J</option>
                                                <option value="K">K</option>
                                                <option value="L">L</option>
                                                <option value="M">M</option>
                                                <option value="N">N</option>
                                                <option value="NHS">NHS</option>
                                                <option value="P">P</option>
                                                <option value="Q">Q</option>
                                                <option value="R">R</option>
                                                <option value="S">S</option>
                                                <option value="T">T</option>
                                                <option value="V">V</option>
                                                <option value="W">W</option>
                                                <option value="Y">Y</option>
                                                <option value="Z">Z</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <div class="form-group">
                                            <label for="">Tyre Type:</label>
                                            <input type="text" name="type" class="form-control"
                                                placeholder="Tyre Type" value="Car" required>
                                        </div>
                                    </div>

                                    <div class="col-md-5 mb-4">
                                        <label for="">Season Type:</label>
                                        <div class="">
                                            <div class="form-check form-check-inline mt-2">
                                                <label for="winter" class="form-check-label">Winter</label>
                                                <input type="radio" class="form-check-input" name="season"
                                                    value="2" id="winter" required>
                                            </div>

                                            <div class="form-check form-check-inline mt-2">
                                                <label for="summer" class="form-check-label">Summer</label>
                                                <input type="radio" class="form-check-input" name="season"
                                                    value="1" id="summer" required>
                                            </div>

                                            <div class="form-check form-check-inline mt-2">
                                                <label for="all" class="form-check-label">All Season</label>
                                                <input type="radio" class="form-check-input" name="season"
                                                    value="0" id="all" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 mb-3">
                                        <label for="budget">Budget Tyre</label>
                                        <div class="form-check mt-2">
                                            <input id="budget" type="checkbox" name="budget" value="1"
                                                class="form-check-input">
                                            <label for="budget">Yes Budget Tyre</label>
                                        </div>
                                    </div>

                                    <div class="col-md-4 mb-4">
                                        <div class="form-group">
                                            <label for="">Price:</label>
                                            <input type="text" name="price" class="form-control"
                                                placeholder="Price" required>
                                        </div>
                                    </div>

                                    <div class="col-12 text-center">
                                        <button class="main-btn sm" type="submit">Add Product</button>
                                    </div>
                                </div>
                            </form>


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JQUERY  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- OWL CAROUSEL -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- BOOTSTRAP 5 JS CDN
