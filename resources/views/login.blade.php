@includeIf('includes.header')

@php
    // Fetch products or any data needed in the navbar
    $product = \App\Models\Manufacturer::all();
@endphp

@includeIf('includes.navbar', ['product' => $product])

<!-- TOP BAR SECTION END -->

@if (Auth::check())
    <!-- Show this section only to logged-in users -->
    <section class="account-buttons">
        <div class="container text-center ">
            <p>You are already loggedin! Go to your dashboard OR logout.  </p>
            <a href="{{ route('userDash') }}" class="main-btn">Go to  Dashboard</a>
            <a href="{{ route('logout') }}" class="btn btn-link text-decoration-none" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log Out</a>
            <form id="logout-form" action="{{ route('logout') }}" style="display: none;">
                @csrf
            </form>
        </div>
    </section>
@else
    <!-- Show this section only to logged-out users -->
    <section class="registration form-wrap">
        <div class="container">
            <form action="{{ url('profile') }}" method="post">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="col-lg-5 col-md-6 mx-auto sign-up-wrap px-2 px-sm-3">
                    <h5 class="text-center mb-4">PLEASE LOGIN</h5>
                    <div class="row">
                        <div class="col-12 mb-4 mb-lg-0">
                            <div class="form-group mb-3">
                                <label for="">Email Address <span>*</span></label>
                                <input required name="email" type="email" placeholder="Email Address" class="form-control">
                            </div>

                            <div class="form-group mb-1">
                                <label for="">Password <span>*</span></label>
                                <input required name="password" type="password" placeholder="Password" class="form-control">
                            </div>

                            <div class="d-flex flex-wrap flex-row-reverse align-items-center justify-content-between">
                                <div class="text-end">
                                    <p class="m-0"><a href="{{ route('forget-password') }}">Forgot Password?</a></p>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="remember">
                                    <label for="remember">Remember me</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-2 px-0">
                        <button class="main-btn w-100" type="submit">Signin</button>
                    </div>
                    <p class="px-0 my-2">Don't have an account? <a href="{{ route('register') }}">Register</a></p>
                </div>
            </form>
        </div>
    </section>
@endif

@includeIf('includes.footer')
