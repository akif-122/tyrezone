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
                                                    @foreach ($size as $item)
                                                        <option value="{{$item->width}}">{{$item->width}}</option>        
                                                    @endforeach
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <div class="form-group">
                                            <label for="">Profile</label>
                                            <select name="profile" class="form-select" required="">
                                                <option value="" selected="" style="display:none">
                                                    Select</option>
                                                @foreach ($size as $item)
                                                        <option value="{{$item->profile}}">{{$item->profile}}</option>        
                                                    @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <div class="form-group">
                                            <label for="">Rim Size</label>
                                            <select name="rim" class="form-select" required="">
                                                <option value="" selected="" style="display:none">
                                                    Select</option>
                                                @foreach ($size as $item)
                                                        <option value="{{$item->rim_size}}">{{$item->rim_size}}</option>        
                                                    @endforeach
                                                
                                            </select>
                                        </div>
                                    </div>

                                  
                                    <div class="col-md-4 mb-4">
                                        <div class="form-group">
                                            <label for="">Speed</label>
                                            <select name="speed" class="form-select">
                                                <option value="" selected="" style="display:none">
                                                    Select</option>
                                                @foreach ($size as $item)
                                                        <option value="{{$item->speed}}">{{$item->speed}}</option>        
                                                    @endforeach
                                                
                                                
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
