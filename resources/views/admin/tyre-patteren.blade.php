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
                <div class="top-bar d-flex w-100">
                    <button class="sidebar-toggler" id="sideToggler">
                        <i class="fa-solid fa-bars-staggered"></i>
                    </button>
                    <h4 class="m-0">Dashboard</h4>

                    <div class="right-top dropwdown ms-auto">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">Admin</a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">Profile</a>
                            <a href="../php/logout.html" class="dropdown-item">Logout</a>
                        </ul>
                    </div>

                </div>
                <div class="content-area mt-5">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="m-0">Tyre Pattern</h5>

                        <a href="{{route("adminAddTyrepattren")}}">Add Patteren</a>

                    </div>

                    <p class="text-danger"></p>
                    <p class="text-success"></p>

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Patteren Name</th>
                                    <th>manufacture</th>
                                    <th>Created At</th>
                                    <th>Actions</th>

                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>ECONO DRIVE</td>
                                    <td>Dunlop</td>
                                    <td>2024-07-11 08:17:07050</td>


                                    <td>
                                        <a href="{{route("adminEditTyrepattren")}}" class="btn btn-sm btn-info"><i
                                                class="fa-solid fa-pen"></i></a>

                                        <a href="php/delete-patteren.html?id=8" class="btn btn-sm btn-danger"><i
                                                class="fa-solid fa-trash-can"></i></a>

                                    </td>
                                </tr>
                                <tr>
                                    <td>FASTRESPONSE</td>
                                    <td>Antares</td>
                                    <td>2024-07-11 08:18:08050</td>


                                    <td>
                                        <a href="{{route("adminEditTyrepattren")}}" class="btn btn-sm btn-info"><i
                                                class="fa-solid fa-pen"></i></a>

                                        <a href="php/delete-patteren.html?id=9" class="btn btn-sm btn-danger"><i
                                                class="fa-solid fa-trash-can"></i></a>

                                    </td>
                                </tr>
                                <tr>
                                    <td>GRANDTREK AT20</td>
                                    <td>Dunlop</td>
                                    <td>2024-07-11 08:17:07050</td>


                                    <td>
                                        <a href="{{route("adminEditTyrepattren")}}0" class="btn btn-sm btn-info"><i
                                                class="fa-solid fa-pen"></i></a>

                                        <a href="php/delete-patteren.html?id=10" class="btn btn-sm btn-danger"><i
                                                class="fa-solid fa-trash-can"></i></a>

                                    </td>
                                </tr>
                                <tr>
                                    <td>AC808</td>
                                    <td>Anchee</td>
                                    <td>2024-07-11 08:17:56050</td>


                                    <td>
                                        <a href="{{route("adminEditTyrepattren")}}1" class="btn btn-sm btn-info"><i
                                                class="fa-solid fa-pen"></i></a>

                                        <a href="php/delete-patteren.html?id=11" class="btn btn-sm btn-danger"><i
                                                class="fa-solid fa-trash-can"></i></a>

                                    </td>
                                </tr>
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