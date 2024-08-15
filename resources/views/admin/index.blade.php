<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
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
    <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}">
</head>

<body>
    <div class="d-flex align-items-center justify-content-center w-100" style="min-height: 100vh;">
        <!-- REGISTRATION FORM START -->
        <section class="registration form-wrap w-100">
            <div class="container">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('dashboard') }}" method="POST">
                    @csrf
                    <div class="col-lg-5 col-md-6 mx-auto sign-up-wrap px-2 px-sm-3">
                        <h5 class="text-center mb-4">Admin Login</h5>
                        <div class="row">
                            <div class="col-12 mb-4 mb-lg-0">
                                <div class="form-group mb-3">
                                    <label for="email">Email Address <span>*</span></label>
                                    <input type="email" id="email" name="email" placeholder="Email Address" class="form-control">
                                </div>
                
                                <div class="form-group mb-1">
                                    <label for="password">Password <span>*</span></label>
                                    <input type="password" id="password" name="password" placeholder="Password" class="form-control">
                                </div>
                
                                <div class="d-flex flex-wrap flex-row-reverse align-items-center justify-content-between">
                                    <div class="text-end">
                                        <p class="m-0"><a href="{{ url('forget-password') }}">Forgot Password?</a></p>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" name="remember_me" value="1" class="form-check-input" id="remember">
                                        <label for="remember">Remember me</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-2 px-0">
                            <button type="submit" class="main-btn w-100">Sign In</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- REGISTRATION FORM END -->
    </div>
</body>

</html>
