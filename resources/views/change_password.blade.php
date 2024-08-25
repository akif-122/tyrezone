@includeIf('includes.header')
@php
        $product = \App\Models\Manufacturer::all(); // Fetch products or any data needed in the navbar
    @endphp

    @includeif('includes.navbar', ['product' => $product])

<!-- USER DASHBOARD -->
<div class="user-dashboard">

    <div class="">



        <div class="row">
            <div class="col-lg-3">
                @include('includes.user-sidebar')

            </div>

            <div class="col-lg-9 pe-4 my-lg-4">



                <div class="user-main ">
                    <h5>Change Password</h5>

                    <section class="registration form-wrap  py-3 mt-0">
                        <div class="container px-0">

                            <form action="{{route('changePassword')}}" method="POST">
                                <div class="col-lg-6 col-md-12   sign-up-wrap px-2 px-sm-3">
                                    <div class="row ">

                                        <div class="col-12  mb-4 mb-lg-0">
                                            <input type="hidden" value="7" name="user-id">



                                            <div class="form-group mb-3">
                                                <label for="">Old Password <span>*</span></label>
                                                <input type="password" name="opassword" placeholder="Enter Old Password"
                                                    class="form-control">
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="">New Password <span>*</span></label>
                                                <input type="password" name="npassword" placeholder="Enter New Password"
                                                    class="form-control">
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
<!-- USER DASHBOARD END -->



@includeIf('includes.footer')
