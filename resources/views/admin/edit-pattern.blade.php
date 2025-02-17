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
    <link rel="stylesheet" href="{{ asset("admin/assets/css/style.css") }}">

    <style>
        .cke_notification_warning {
            display: none !important;
        }
    </style>

</head>

<body>


    <div class="wrapper">
        <div class="main">
            @includeIf('admin.includes.sidebar')


            <script>

            </script>
            <div class="main-wrap" id="mainArea">


            @includeIf('admin.includes.topbar')

                
                <div class="content-area mt-5">
                    <div class="col-md-5 mx-auto">

                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="m-0">Edit Patteren</h5>

                            <a class="main-btn sm" href="{{route("adminTyrepattren")}}">All Patteren</a>

                        </div>

                        <p class="mb-0 mt-4 text-danger"></p>
                        <p class="m-0  text-success"> </p>

                        <div class="form form-wrap sign-up-wrap ">



                            <form action="{{ route('update_pattern') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                        <div class="form-group">
                                            <label for="">Name:</label>
                                            <input type="hidden" name="id" value="{{ $record->id }}">
                                            <input type="text" name="name" value="{{ $record->name_of_manufacturer }}" class="form-control" placeholder="Name">
                                        </div>
                                    </div>
                            
                                    <div class="col-md-12 mb-4">
                                        <div class="form-group">
                                            <label for="">Manufacturers:</label>
                                            <select name="manu_id" class="form-select">
                                                <option value="" disabled selected>Select</option>
                                                @foreach ($manufacturers as $item)
                                                     <option value="{{$item->name}}">{{$item->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                            
                                    <div class="col-12 text-center">
                                        <button type="submit" class="main-btn sm">Update Pattern</button>
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

    <!-- BOOTSTRAP 5 JS CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>

    <script src="assets/ckeditor/ckeditor.js"></script>

    <script>
        CKEDITOR.replace("desc");
    </script>



    <script>
        let sideBar = document.getElementById("sideBar");
        let sideToggler = document.getElementById("sideToggler");
        let mainArea = document.getElementById("mainArea");
        let closeBtn = document.getElementById("sideCloseBtn");

        sideToggler.addEventListener("click", function (e) {
            sideBar.classList.toggle("none")
            mainArea.classList.toggle("side-none")
        })

        closeBtn.addEventListener("click", function (e) {
            sideBar.classList.remove("none")
            mainArea.classList.remove("side-none")
        })

    </script>

</body>

</html>