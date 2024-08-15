
<aside class="side-bar" id="sideBar">

    <button class="side-close d-lg-none" id="sideCloseBtn"><i
            class="fa-regular fa-circle-xmark"></i></button>

    <div class="logo">
        <!-- <img src="" alt=""> -->
        {{-- <h4 class="text-center text-white">{{$admin->name}}</h4> --}}
        <h4 class="text-center text-white">Admin</h4>
    </div>
    <div class="navs">
        <ul>
            <li>
                <a class="{{ Route::is("adminDashboard") ? "active" : "" }}"  href="{{route("adminDashboard")}}"><i class="fa-solid fa-table-cells"></i> Dashboard</a>
            </li>
            <li>
                <a class="{{ Route::is("adminProducts") ? "active" : "" }}" href="{{route("adminProducts")}}"><i class="fa-solid fa-box-archive"></i> Products</a>
            </li>
            <li>
                <a class="{{ Route::is("adminManufacturers") ? "active" : "" }}" href="{{route("adminManufacturers")}}"><i class="fa-solid fa-list"></i>
                    Manufacturers</a>
            </li>
            <li>
                <a class="{{ Route::is("adminTyrepattren") ? "active" : "" }}" href="{{route("adminTyrepattren")}}"><i class="fa-solid fa-sliders"></i> Tyre Patteren</a>
            </li>
            <li>
                <a class="{{ Route::is("adminUsers") ? "active" : "" }}"  href="{{route("adminUsers")}}"><i class="fa-solid fa-users"></i> All users</a>
            </li>
            <li>
                <a class="{{ Route::is("adminOrder") ? "active" : "" }}"  href="{{route("adminOrder")}}"><i class="fa-solid fa-cart-flatbed"></i> Orders</a>
            </li>
            
        </ul>
    </div>


</aside>