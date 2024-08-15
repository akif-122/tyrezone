@includeIf('includes.header')
@php
    $product = \App\Models\Manufacturer::all(); // Fetch products or any data needed in the navbar
@endphp
       
        @includeif("includes.navbar",['product' => $product])

</div>


<div class="user-dashboard">
    <div class="">
        <div class="row">
            <div class="col-lg-3">
                @include('includes.user-sidebar')
            </div>
            
            <div class="col-lg-9 pe-4 my-lg-4">
                <div class="user-main border rounded my-5">
                    <h5>User Information</h5>
                    <div class="user-profile">
                        @foreach ($users as $user)
                            <h4 id="userName">{{$user->f_name ." ".  $user->last_name }}</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <p><strong>Email:</strong> <span id="userEmail">{{ $user->email }}</span></p>
                                </div>
                                <div class="col-md-6">
                                    <p><strong>Phone:</strong> <span id="userPhone">{{ $user->phone }}</span></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <p><strong>Company Name:</strong> <span
                                            id="userCompany">{{ $user->company_name }}</span></p>
                                </div>
                                <div class="col-md-6">
                                    <p><strong>Country:</strong> <span id="userCountry">{{ $user->country }}</span></p>
                                </div>
                                <div class="col-md-6">
                                    <p><strong>City:</strong> <span id="userCity">{{ $user->city }}</span></p>
                                </div>
                                <div class="col-md-6">
                                    <p><strong>Address:</strong> <span id="userAddress">{{ $user->address }}</span></p>
                                </div>
                                <div class="col-md-6">
                                    <p><strong>Post Code:</strong> <span id="userPostCode">{{ $user->postcode }}</span>
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <p><strong>Company Phone:</strong> <span
                                            id="userCompanyPhone">{{ $user->company_phone }}</span></p>
                                </div>
                            </div>
                        @endforeach
                        <div class="col-12 mt-3">
                            <a href="{{ url('edit-profile') }}" class="main-btn d-inline-block">Update Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Include your JavaScript files at the bottom of the page -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('logoutButton').addEventListener('click', function(event) {
            event.preventDefault(); // Prevent default link behavior

            fetch('{{ route('logout') }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}' // Include CSRF token
                },
                credentials: 'same-origin' // Include credentials with the request
            }).then(response => {
                if (response.ok) {
                    // Redirect to index
                    window.location.href = '{{ url('/login') }}';

                    // Disable navigation (Forward and Backward)
                    window.history.pushState(null, null, window.location.href);
                    window.onpopstate = function() {
                        window.history.go(1);
                    };
                } else {
                    // Handle any errors that may occur
                    window.location.href = '{{ url('/login') }}';
                }
            }).catch(error => {
                console.error('Error:', error);
            });
        });
    });
</script>

@includeIf('includes.footer')
