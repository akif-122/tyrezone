@includeIf('includes.header')

@php
    $product = \App\Models\Manufacturer::all(); // Fetch products or any data needed in the navbar
@endphp
       
        @includeif("includes.navbar",['product' => $product])


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
                <h3 class="text-center mb-4">Registration</h3>
                <div class="row">

                    <div class="col-md-6 mb-4 mb-lg-0">
                        <h5>Primary Contact Information</h5>
                        <div class="form-group mb-3">
                            <label for="">First Name <span>*</span></label>
                            <input type="text" required name="fname" placeholder="First Name" value=""
                                 class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Last Name <span>*</span></label>
                            <input type="text" required name="lname" placeholder="Last Name" value=""
                                 class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Email Address <span>*</span></label>
                            <input required type="email" name="email" placeholder="Email Address" value=""
                                 class="form-control">
                        </div>

                        {{-- <div class="form-group mb-3">
                            <label for="">Phone <span>*</span></label>
                            <input required type="number" name="phone" placeholder="Phone" value=""
                                name="phone" class="form-control">
                        </div> --}}


                        <div class="form-group mb-3">
                            <label for="">Password <span>*</span> </label>
                            <input required type="password" name="password" placeholder="Password" value=""
                                 class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Confirm Password <span>*</span> </label>
                            <input required type="password" placeholder="Confirm Password"
                                value="" name="cpassword" class="form-control">
                        </div>

                    </div>

                    <div class="col-md-6">
                        <h5>Company Information</h5>

                        <div class="form-group mb-3">
                            <label for="">Company</label>
                            <input type="text" name="company" placeholder="Company" value=""
                                 class="form-control">
                        </div>

                        {{-- <div class="form-group mb-3">
                            <label for="">Country</label>
                            <select name="country" class="form-select" id="">
                                <option value="uk">United Kingdom</option>
                            </select>
                        </div> --}}

                        <div class="form-group mb-3">
                            <label for="">City</label>
                            <input type="text" name="city" placeholder="City" value=""
                                class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Address </label>
                            <input name="address" type="text" placeholder="Address" value=""
                                class="form-control">
                        </div>


                        <div class="form-group mb-3">
                            <label for="">Postcode</label>
                            <input type="text" placeholder="Postcode" value="" name="postcode"
                                class="form-control">
                        </div>
                        {{-- <div class="form-group mb-3">
                            <label for="">Company Phone</label>
                            <input name="c_phone" type="number" placeholder="Phone" value=""
                                name="company_phone" class="form-control">
                        </div> --}}

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
@includeIf('includes.footer')
