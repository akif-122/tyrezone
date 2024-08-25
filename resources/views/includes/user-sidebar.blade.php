<aside class="side-bar">
    <ul>
        <li><a href="" ><i class="fa-solid fa-user"></i>Profile</a></li>
        <li><a href="" class="{{ Route::is("change-password")? "active": ""}}"><i class="fa-solid fa-lock"></i>Change
                Password</a></li>
        <li><a href="{{route('orders')}}" class="{{ Route::is("orders")? "active": ""}}"><i class="fa-solid fa-cart-flatbed"></i>My Orders</a></li>
        <li><a href="{{url('logout')}}"><i class="fa-solid fa-right-from-bracket"></i>Logout</a>
        </li>
    </ul>
</aside>