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
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>


    <div class="wrapper">
        <div class="main">
            @includeIf('admin.includes.sidebar')


            <div class="main-wrap" id="mainArea">

            @includeIf('admin.includes.topbar')

                
                <div class="content-area mt-5">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="m-0">Add User</h5>

                        <a class="main-btn sm" href="{{route("adminUsers")}}">All Users</a>

                    </div>

                    <!-- REGISTRATION FORM START-->
                    <section class="registration form-wrap">
    <div class="container ">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ url('insert') }}" method="post">
            @csrf
            <p class="text-danger col-lg-10 mx-auto"></p>

            <div class="col-lg-10 mx-auto sign-up-wrap">
                <div class="row">

                    <div class="col-md-6 mb-4 mb-lg-0">
                        <h5>Primary Contact Information</h5>
                        <div class="form-group mb-3">
                            <label for="">First Name <span>*</span></label>
                            <input type="text" required name="fname" placeholder="First Name" value=""
                                name="fname" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Last Name <span>*</span></label>
                            <input type="text" required name="lname" placeholder="Last Name" value=""
                                name="lname" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Email Address <span>*</span></label>
                            <input required type="email" name="email" placeholder="Email Address" value=""
                                name="email" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Phone <span>*</span></label>
                            <input required type="number" name="phone" placeholder="Phone" value=""
                                name="phone" class="form-control">
                        </div>


                        <div class="form-group mb-3">
                            <label for="">Password <span>*</span> </label>
                            <input required type="password" name="password" placeholder="Password" value=""
                                name="password" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Confirm Password <span>*</span> </label>
                            <input required type="password" name="c_password" placeholder="Confirm Password"
                                value="" name="cpassword" class="form-control">
                        </div>

                    </div>

                    <div class="col-md-6">
                        <h5>Company Information</h5>

                        <div class="form-group mb-3">
                            <label for="">Company</label>
                            <input type="text" name="company" placeholder="Company" value=""
                                name="company_name" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Country</label>
                            <select name="country" class="form-select" id="">
                                <option value="uk">United Kingdom</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="">City</label>
                            <input type="text" name="city" placeholder="City" value="" name="city"
                                class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Address </label>
                            <input name="address" type="text" placeholder="Address" value="" name="address"
                                class="form-control">
                        </div>


                        <div class="form-group mb-3">
                            <label for="">Postcode</label>
                            <input name="post_code" type="text" placeholder="Postcode" value="" name="postcode"
                                class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Company Phone</label>
                            <input name="c_phone" type="number" placeholder="Phone" value=""
                                name="company_phone" class="form-control">
                        </div>

                    </div>


                </div>

                <div class="d-flex flex-column align-items-center justify-content-center">
                    <div class="form-check">
                        <input type="checkbox" value="" name="agree" class="form-check-input"
                            id="p-p">
                        <label for="p-p">I have read and agree to the <a href="#">Privacy
                                Policy</a></label>

                    </div>

                    <div class="mt-2">
                        <button class="main-btn" type="submit">Register</button>
                    </div>

                </div>

            </div>
        </form>
    </div>
</section>
                    <!-- REGISTRATION FORM END -->


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