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
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>


    <div class="wrapper">
        <div class="main">
            @includeIf('admin.includes.sidebar')


            <div class="main-wrap" id="mainArea">

                @includeIf('admin.includes.topbar')


                <div class="content-area px-4 px-sm-5 mt-5">

                    <h5 class="m-0">Profile</h5>
                    <div class="row d-flex justify-content-between ">

                        <div class="col-md-6 mb-5 form form-wrap sign-up-wrap col-md-6">
                            <form action="" method="post">
                                @csrf
                                <div class="row">

                                    <div class="col-md-12 mb-4">
                                        <div class="form-group">
                                            <label for="">Name:</label>
                                            <input type="text" name="name" class="form-control"
                                                placeholder="name">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-4">
                                        <div class="form-group">
                                            <label for="">Email:</label>
                                            <input type="text" name="name" class="form-control"
                                                placeholder="Email">
                                        </div>
                                    </div>

                                    <div class="col-md-12 mb-4">
                                        <div class="form-group">
                                            <label for="">Phone:</label>
                                            <input type="text" name="name" class="form-control"
                                                placeholder="Phone">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-4">
                                        <div class="form-group">
                                            <label for="">Address:</label>
                                            <input type="text" name="name" class="form-control"
                                                placeholder="Address">
                                        </div>
                                    </div>





                                    <div class="col-12 text-center">
                                        <button class="main-btn w-100">Update Profile</button>
                                    </div>

                                </div>
                            </form>
                        </div>

                        <div class="user-main col-md-5 px-0  ms-auto">
                            <h5>Change Logo</h5>

                            <section class="registration form-wrap  py-3 mt-0">
                                <div class=" px-0">

                                    <form action="php/change-password.html" method="POST">
                                        <div class=" col-md-12 sign-up-wrap px-2 px-sm-3">
                                            <div class="row ">
                                                <div class="col-12  mb-4 mb-lg-0">

                                                    <div class="form-group mb-3">
                                                        <label for="">Logo <span>*</span></label>
                                                        <input type="file" name="" class="form-control">
                                                    </div>

                                                    <div class="mt-2 px-0">
                                                        <button class="main-btn w-100">Change Logo</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </section>

                        </div>

                        <div class="user-main col-md-6 px-0 ">
                            <h5>Change Password</h5>

                            <section class="registration form-wrap  py-3 mt-0">
                                <div class=" px-0">

                                    <form action="php/change-password.html" method="POST">
                                        <div class=" col-md-12  sign-up-wrap px-2 px-sm-3">
                                            <div class="row ">

                                                <div class="col-12  mb-4 mb-lg-0">
                                                    <input type="hidden" value="7" name="user-id">



                                                    <div class="form-group mb-3">
                                                        <label for="">Old Password <span>*</span></label>
                                                        <input type="password" name="opassword"
                                                            placeholder="Enter Old Password" class="form-control">
                                                    </div>

                                                    <div class="form-group mb-3">
                                                        <label for="">New Password <span>*</span></label>
                                                        <input type="password" name="npassword"
                                                            placeholder="Enter New Password" class="form-control">
                                                    </div>

                                                    <div class="form-group mb-3">
                                                        <label for="">Confirm Password <span>*</span></label>
                                                        <input type="password" name="cnpassword"
                                                            placeholder="Enter Confirm Password" class="form-control">
                                                    </div>



                                                </div>



                                            </div>
                                            <div class="mt-2 px-0">
                                                <button class="main-btn w-100">Change Password</button>
                                            </div>





                                        </div>
                                    </form>
                                </div>
                            </section>

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
