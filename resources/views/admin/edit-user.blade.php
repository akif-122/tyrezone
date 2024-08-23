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
                    <div class="d-flex justify-content-between align-items-center col-lg-11 mx-auto px-2">
                        <h5 class="m-0">Edit User</h5>

                        <a class="main-btn sm" href="{{route("adminUsers")}}">All User</a>

                    </div>

                    <!-- REGISTRATION FORM START-->
                    <section class="registration form-wrap mt-3">
                        <div class="container ">
                            <form action="{{ route('updateUserAdmin') }}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{ $user->id }}" />
    <div class="col-lg-11 mx-auto sign-up-wrap">
        <div class="row">
            <div class="col-md-6 mb-4 mb-lg-0">
                <h5>Primary Contact Information</h5>
                <div class="form-group mb-3">
                    <label for="">First Name <span>*</span></label>
                    <input name="fname" type="text" value="{{ old('fname', $user->f_name) }}" placeholder="First Name" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Last Name <span>*</span></label>
                    <input name="lname" type="text" value="{{ old('lname', $user->last_name) }}" placeholder="Last Name" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Email Address <span>*</span></label>
                    <input name="email" type="email" value="{{ old('email', $user->email) }}" placeholder="Email Address" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Phone</label>
                    <input name="phone" type="number" value="{{ old('phone', $user->phone) }}" placeholder="Phone" class="form-control">
                </div>
                
            </div>
            <div class="col-md-6">
                <h5>Company Information</h5>
                <div class="form-group mb-3">
                    <label for="">Company</label>
                    <input name="company_name" type="text" value="{{ old('company_name', $user->company_name) }}" placeholder="Company" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Country</label>
                    <input name="country" type="text" value="{{ old('country', $user->country) }}" placeholder="Country" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">City</label>
                    <input name="city" type="text" value="{{ old('city', $user->city) }}" placeholder="City" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Address</label>
                    <input name="address" type="text" value="{{ old('address', $user->address) }}" placeholder="Address" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Postcode</label>
                    <input name="postcode" type="text" value="{{ old('postcode', $user->postcode) }}" placeholder="Postcode" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="">Company Phone</label>
                    <input name="company_phone" type="number" value="{{ old('company_phone', $user->company_phone) }}" placeholder="Company Phone" class="form-control">
                </div>
            </div>
        </div>
        <div class="d-flex flex-column align-items-center justify-content-center">
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="p-p" required>
                <label for="p-p">I have read and agree to the <a href="#">Privacy Policy</a></label>
            </div>
            <div class="mt-2">
                <button class="main-btn sm">Update User</button>
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