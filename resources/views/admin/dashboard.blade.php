<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- FONTAWESOME ICON -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

    <!-- BOOTSTRAP 5 CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" />

    <!-- OWL CAROUSEL  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="../admin/assets/css/style.css">

</head>

<body>


    <div class="wrapper">
        <div class="main">

            {{-- @includeIf('admin.includes.sidebar',['admin' => $admin]) --}}
            @includeIf('admin.includes.sidebar')


            <div class="main-wrap" id="mainArea">

                @includeIf('admin.includes.topbar')




                <div class="content-area mt-5">


                    <div class="row dashboard">
                       
                        <div class="col-xl col-md-4 px-1 col-sm-6 mb-3">
                             <a href="{{route('adminProducts')}}">
                                <div class="dash-card">
                                <h4>Products</h4>
                                <h5>{{$productCount}}</h5>
                                <i class="fa-solid fa-box-archive"></i>
                            </div>
                             </a>
                        </div>

                        <div class="col-xl col-md-4 px-1 col-sm-6 mb-3">
                            <a href="{{route('adminTyrepattren')}}">
                                <div class="dash-card">
                                <h4>Patteren</h4>
                                <h5>{{$patternCount}}</h5>
                                <i class="fa-solid fa-sliders"></i>
                            </div>
                            </a>
                            
                        </div>

                        <div class="col-xl col-md-4 px-1 col-sm-6 mb-3">
                            <a href="{{route('adminManufacturers')}}">
                            <div class="dash-card">
                                <h4>Manufacturers</h4>
                                <h5>{{$manufacturersCount}}</h5>
                                <i class="fa-solid fa-list"></i>
                            </div>
                            </a>
                        </div>
                        <div class="col-xl col-md-4 px-1 col-sm-6 mb-3">
                            <a href="{{route('adminUsers')}}">
                            <div class="dash-card">
                                <h4>Users</h4>
                                <h5>{{$usersCount}}</h5>
                                <i class="fa-solid fa-users"></i>
                            </div>
                            </a>
                        </div>
                        <div class="col-xl col-md-4 px-1 col-sm-6 mb-3">
                            <a href="#">
                            <div class="dash-card">
                                <h4>Orders</h4>
                                <h5>45</h5>
                                <i class="fa-solid fa-cart-flatbed"></i>
                            </div>
                            </a>
                        </div>
                    </div>


                    <div class="row mb-5 mt-5">
                        <div class="col-md-6">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="m-0">Manufacturers</h5>
                            </div>


                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Manufacturer Name</th>
                                            <th>Image</th>
                                            <th>Description</th>
                                            <th>Created At</th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($manufacturers as $item)
                                            <tr>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->image }}</td>
                                                <td>
    {{-- Decode HTML entities, strip tags, and truncate description to 100 characters with ellipses --}}
    {{ Str::limit(strip_tags(html_entity_decode($item->description)), 100, '...') }}
</td>

                                                <!-- Truncate to 50 characters -->
                                                <td>{{ $item->created_at }}</td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="m-0">Tyre Pattern</h5>


                            </div>

                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Patteren Name</th>
                                            <th>manufacture</th>
                                            <th>Created At</th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($pattern as $item)
                                            <tr>
                                                <td>{{ $item->type_of_pattern }}</td>
                                                <td>{{ $item->name_of_manufacturer }}</td>
                                                <td>{{ $item->created_at }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="m-0">Products</h5>


                    </div>


                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Tyre Name</th>
                                    <th>Image</th>
                                    <th>Manufac. Name</th>
                                    <th>Tyre Patteren</th>
                                    <th>fuel Effic.</th>
                                    <th>Wet Grip</th>
                                    <th>Road Noise</th>
                                    <th>Size</th>
                                    <th>Price</th>

                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($product as $item)
                                    <tr>
                                        <td>{{ $item->name }}</td>
                                        <td>
                                            <img src="{{ $item->image }}" alt="">
                                        </td>
                                        <td>{{ $item->manufacturer_name }}</td>
                                        <td>{{ $item->tyre_pattern }}</td>
                                        <td>{{ $item->fuel_efficiency }}</td>
                                        <td>{{ $item->wet_grip }}</td>
                                        <td>{{ $item->road_noise }}</td>
                                        <td>{{ $item->size }}</td>

                                        <td>${{ $item->price }}</td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>


            </div>

        </div>
    </div>

    <!-- JQUERY  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- OWL CAROUSEL -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- BOOTSTRAP 5 JS CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>



    <script>
        let sideBar = document.getElementById("sideBar");
        let sideToggler = document.getElementById("sideToggler");
        let mainArea = document.getElementById("mainArea");
        let closeBtn = document.getElementById("sideCloseBtn");

        sideToggler.addEventListener("click", function(e) {
            sideBar.classList.toggle("none")
            mainArea.classList.toggle("side-none")
        })

        closeBtn.addEventListener("click", function(e) {
            sideBar.classList.remove("none")
            mainArea.classList.remove("side-none")
        })
    </script>

</body>

</html>
