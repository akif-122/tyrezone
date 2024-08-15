@includeIf('includes.header');
<div class="main-hero">
    @php
    $product = \App\Models\Manufacturer::all(); // Fetch products or any data needed in the navbar
@endphp
       
        @includeif("includes.navbar",['product' => $product])

    <!-- HERO SECTION START -->
    <section class="hero-section">
        <div class="container">



            <div class="tab-wrap">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#tyre-fitting">Add
                            Product
                        </button>
                </ul>

                <div class="tab-content">
                    <!-- <div class="tab-content  pt-4"> -->

                    <div class="tab-pane fade show active position-relative" id="tyre-fitting">

                        <div class="row ">

                            <div class="col-lg-12">
                                <div class="size" style="height: auto;">

                                    <h4 class="">Add Tyre Detail</h4>
                                    <!-- Update the form action and include CSRF token -->
                                    <form action="{{ url('add') }}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-6 ">
                                                <div class="form-group">
                                                    <label for="width">Width</label>
                                                    <select name="width" id="width" class="form-select">
                                                        <option value="155">155</option>
                                                        <option value="100">100</option>
                                                        <option value="205">205</option>
                                                        <option value="263">263</option>
                                                        <option value="22">22</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-6 ">
                                                <div class="form-group">
                                                    <label for="profile">Profile</label>
                                                    <select name="profile" id="profile" class="form-select">
                                                        <option value="155">155</option>
                                                        <option value="100">100</option>
                                                        <option value="205">205</option>
                                                        <option value="263">263</option>
                                                        <option value="22">22</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-6 ">
                                                <div class="form-group">
                                                    <label for="rim_size">Rim Size</label>
                                                    <select name="rim_size" id="rim_size" class="form-select">
                                                        <option value="155">155</option>
                                                        <option value="100">100</option>
                                                        <option value="205">205</option>
                                                        <option value="263">263</option>
                                                        <option value="22">22</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-6 ">
                                                <div class="form-group">
                                                    <label for="reg_no">Reg No</label>
                                                    <input type="text" name="reg_no" id="reg_no"
                                                        class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-6 ">
                                                <div class="form-group">
                                                    <label for="speed">Speed</label>
                                                    <select name="speed" id="speed" class="form-select">
                                                        <option value="Any">Any</option>
                                                        <option value="H">H</option>
                                                        <option value="T">T</option>
                                                        <option value="V">V</option>
                                                        <option value="W">W</option>
                                                        <option value="Y">Y</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-12 mt-3">
                                                <button type="submit" class="main-btn w-100">Add</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>


                            @includeIf('includes.footer')
