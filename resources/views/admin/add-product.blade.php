<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="icon" href="{{ asset("speed.png") }}" />

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
                            <a class="main-btn sm" href="{{route("adminProducts")}}">All Products</a>
                        </div>

                        <div class="form form-wrap sign-up-wrap mt-3 ">
                            <form action="{{ route('add') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4 mb-4">
                                        <div class="form-group">
                                            <label for="">Name:</label>
                                            <input type="text" name="name" class="form-control" placeholder="name" >
                                        </div>
                                    </div>
                            
                                    <div class="col-md-4 mb-4">
                                        <div class="form-group">
                                            <label for="">Image:</label>
                                            <input type="file" name="image" class="form-control" placeholder="Image URL" >
                                        </div>
                                    </div>
                            
                                    <div class="col-md-4 mb-4">
                                        <div class="form-group">
                                            <label for="">Manufacture Name:</label>
                                            <select class="form-select" name="manu_name">
                                                @foreach ($manufacturer as $item)
                                                    <option value="{{ $item->name }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>                                            
                                        </div>
                                    </div>
                            
                                    <div class="col-md-4 mb-4">
                                        <div class="form-group">
                                            <label for="">Pattern Type:</label>
                                            <select class="form-select" name="pattern_type">
                                                @foreach ($pattern as $item)
                                                    <option value="{{ $item->name_of_manufacturer }}">{{ $item->name_of_manufacturer }}</option>
                                                @endforeach
                                            </select>   
                                        </div>
                                    </div>
                            
                                    <div class="col-md-4 mb-4">
                                        <div class="form-group">
                                            <label for="">Fuel Efficiency:</label>
                                            <input type="text" name="fuel" class="form-control" placeholder="Fuel Efficiency" >
                                        </div>
                                    </div>
                            
                                    <div class="col-md-4 mb-4">
                                        <div class="form-group">
                                            <label for="">Wet Grip:</label>
                                            <input type="text" name="wet_grip" class="form-control" placeholder="Wet Grip" >
                                        </div>
                                    </div>
                            
                                    <div class="col-md-4 mb-4">
                                        <div class="form-group">
                                            <label for="">Road Noise:</label>
                                            <input type="text" name="road_noise" class="form-control" placeholder="Road Noise" >
                                        </div>
                                    </div>
                            
                                    <div class="col-md-4 mb-4">
                                        <div class="form-group">
                                            <label for="">Size:</label>
                                            <input type="text" name="size" class="form-control" placeholder="Size" >
                                        </div>
                                    </div>
                            
                                    <div class="col-md-4 mb-4">
                                        <div class="form-group">
                                            <label for="">Tyre Type:</label>
                                            <input type="text" name="type" class="form-control" placeholder="Tyre Type" value="Car">
                                        </div>
                                    </div>
                            
                                    <div class="col-md-5 mb-4">
                                        <label for="">Season Type:</label>
                                        <div class="">
                                            <div class="form-check form-check-inline mt-2">
                                                <label for="winter" class="form-check-label">Winter</label>
                                                <input type="radio" class="form-check-input" name="season" value="2" id="winter">
                                            </div>
                            
                                            <div class="form-check form-check-inline mt-2">
                                                <label for="summer" class="form-check-label">Summer</label>
                                                <input type="radio" class="form-check-input" name="season" value="1" id="summer">
                                            </div>
                            
                                            <div class="form-check form-check-inline mt-2">
                                                <label for="all" class="form-check-label">All Season</label>
                                                <input type="radio" class="form-check-input" name="season" value="0" id="all">
                                            </div>
                                        </div>
                                    </div>
                            
                                    <div class="col-md-3 mb-3">
                                        <label for="budget">Budget Tyre</label>
                                        <div class="form-check mt-2">
                                            <label for="budget">Yes Budget Tyre</label>
                                            <input id="budget" type="checkbox" name="budget" value="1" class="form-check-input" checked>
                                        </div>
                                    </div>
                            
                                    <div class="col-md-4 mb-4">
                                        <div class="form-group">
                                            <label for="">Price:</label>
                                            <input type="text" name="price" class="form-control" placeholder="Price">
                                        </div>
                                    </div>
                            
                                    <div class="col-12 text-center">
                                        <button class="main-btn sm">Add Product</button>
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
