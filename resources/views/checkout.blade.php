<!DOCTYPE html>
<html lang="en">

<head>
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tyre Zone | New & Part Worn Tyres | Tyres in ManchesterETYRE ZONE Tyeres</title>
    <link rel="icon" href="{{ asset('speed.png') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
        @php
            $product = \App\Models\Manufacturer::all(); // Fetch products or any data needed in the navbar
        @endphp

        @includeif('includes.navbar', ['product' => $product])


        <!-- CHECKOUT DETAILS START -->
        <div class="checkout">
            <form id="loginForm" action="{{ route('checkoutValidate') }}">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Launch demo modal
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title " id="exampleModalLabel">Please login to continue.</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div id="error-message" class="text-danger"></div> <!-- For displaying errors -->

                                <div class="mb-3">
                                    <label for="emailInput" class="">Email address</label>
                                    <input type="email" class="form-control" id="emailInput" required placeholder="Enter your email...">
                                </div>
                                <div class="mb-3">
                                    <label for="passwordInput" class="">Password</label>
                                    <input type="password" class="form-control" id="passwordInput" placeholder="Enter your password" required>
                                </div>
                                <button type="button" class="main-btn w-100" onclick="validate()">Sign In</button>
                                <p class="mt-3 text-center">Don't have an account? <a href="{{ route("register") }}">Register Here</a></p>

                            </div>
                            {{-- <div class="modal-footer">
                               
                                <p type="button" class=""
                                    onclick="(function() {
        window.location.href = '{{ route('register') }}'; // Adjust the URL for your registration page
    })()">Sign
                                    Up</p>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </form>

            <div class="container">
                <form>

                    <div class="row">
                        <div class="col-lg-7">
                            <h3>Enter your details</h3>

                            <div class="checkout-form form-wrap">

                                <div class="row">

                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="first_name">First Name <span>*</span></label>
                                            <input type="text" id="first_name" class="form-control"
                                                placeholder="First Name">
                                        </div>
                                    </div>

                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="last_name">Last Name <span>*</span></label>
                                            <input type="text" id="last_name" class="form-control"
                                                placeholder="Last Name">
                                        </div>
                                    </div>

                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="email">Email <span>*</span></label>
                                            <input type="email" id="email" class="form-control"
                                                placeholder="Email">
                                        </div>
                                    </div>

                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="telephone">Telephone <span>*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-text">+44</div>
                                                <input type="number" id="telephone" class="form-control"
                                                    placeholder="Telephone">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="reg_no">Reg. No. <span>*</span></label>
                                            <div class="input-group">
                                                <input type="text" id="reg_no" class="form-control"
                                                    placeholder="REG No.">
                                                <button class="input-group-text igt-btn">Lookup</button>
                                            </div>
                                        </div>
                                    </div>

                                    @auth
                                        <div class="col-sm-6 mb-3 align-self-end">
                                            <div class="form-group">
                                                <button type="button" onclick="fetchData()" class="main-btn w-100">
                                                    Magic
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        fill="currentColor" class="bi bi-stars" viewBox="0 0 16 16">
                                                        <path
                                                            d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.73 1.73 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.73 1.73 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.73 1.73 0 0 0 3.407 2.31zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.16 1.16 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.16 1.16 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732z" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    @endauth

                                </div>

                                <h4 class="mt-4">Your Address</h4>
                                <div class="row">

                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="postcode">Post Code <span>*</span></label>
                                            <div class="input-group">
                                                <input type="text" id="postcode" class="form-control"
                                                    placeholder="Post Code">
                                                <button class="input-group-text igt-btn">Lookup</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="company">Company <span>*</span></label>
                                            <input type="text" id="company" class="form-control"
                                                placeholder="Company">
                                        </div>
                                    </div>

                                    <div class="col-sm-12 mb-3">
                                        <div class="form-group">
                                            <label for="address">Address <span>*</span></label>
                                            <input type="text" id="address" class="form-control"
                                                placeholder="Address">
                                        </div>
                                    </div>

                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="city">City <span>*</span></label>
                                            <input type="text" id="city" class="form-control"
                                                placeholder="City">
                                        </div>
                                    </div>

                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="state">Country <span>*</span></label>
                                            <select id="state" class="form-select">
                                                <!-- Options as before -->
                                                <option value="Aberdeen">Aberdeen</option>
                                                <!-- More options -->
                                                <option value="Worcestershire">Worcestershire</option>
                                                <option value="Wrexham">Wrexham</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="country">Country <span>*</span></label>
                                            <select id="country" class="form-select">
                                                <option value="235">United Kingdom</option>
                                                <option value="237">United States</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="additional_info">Additional Information</label>
                                            <textarea id="additional_info" class="form-control" rows="3" placeholder="Additional Information"></textarea>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="col-lg-5">
                            <h3>Order Summary</h3>
                            <div class="checkout-summary">

                                <div class="summary-item">
                                    <span>Total Amount:</span>
                                    <span class="amount">£200.00</span>
                                </div>

                                <div class="summary-item">
                                    <span>Discount:</span>
                                    <span class="discount">-£20.00</span>
                                </div>

                                <div class="summary-item">
                                    <span>Subtotal:</span>
                                    <span class="subtotal">£180.00</span>
                                </div>

                            </div>

                            {{-- <button type="submit" class="main-btn w-100 mt-4">Place Order</button> --}}
                        </div>

                    </div>

                </form>
            </div>
        </div>
        <!-- CHECKOUT DETAILS END -->
        <!-- JQUERY  -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <!-- OWL CAROUSEL -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

        <!-- BOOTSTRAP 5 JS CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>


        <!-- CUSTOM JS -->
        <script src="assets/js/app.js"></script>
        <script>
            // alert(magicButton+"---->");
            function fetchData() {

                // Perform AJAX request to fetch user data
                fetch('{{ route('fetch.user.data') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        }
                    })

                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {

                            // Populate form fields with user data
                            const userData = data.data;
                            document.getElementById('first_name').value = userData.first_name || '';
                            document.getElementById('last_name').value = userData.last_name || '';
                            document.getElementById('email').value = userData.email || '';
                            document.getElementById('telephone').value = ''; // Optional
                            document.getElementById('reg_no').value = ''; // Optional
                            document.getElementById('postcode').value = userData.postcode || '';
                            document.getElementById('company').value = userData.company || '';
                            document.getElementById('city').value = userData.city || '';
                            document.getElementById('additional_info').value = ''; // Optional
                        } else {
                            // Handle failure (optional)
                        }
                    })
                    .catch(error => {
                        console.error('Error fetching user data:', error);
                    });
            }
            //storing the values
            first_name = document.getElementById('first_name').value,
                last_name = document.getElementById('last_name').value,
                email = document.getElementById('email').value,
                telephone = document.getElementById('telephone').value,
                reg_no = document.getElementById('reg_no').value,
                postcode = document.getElementById('postcode').value,
                company = document.getElementById('company').value,
                address = document.getElementById('address').value,
                city = document.getElementById('city').value,
                state = document.getElementById('state').value,
                country = document.getElementById('country').value,
                additional_info = document.getElementById('additional_info').value

            // Function to populate form fields from localStorage

            // Function to handle form validation and login
            async function validate() {
                const emailInput = document.getElementById('emailInput').value;
                const password = document.getElementById('passwordInput').value;
                const errorMessageElement = document.getElementById('error-message');

                // Clear previous error messages
                errorMessageElement.textContent = '';

                try {
                    const response = await fetch('/checkoutValidate', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-Token': document.querySelector('meta[name="csrf-token"]').getAttribute(
                                'content') // CSRF token for Laravel
                        },
                        body: JSON.stringify({
                            emailInput: emailInput,
                            password: password
                        })
                    });

                    const result = await response.json();

                    if (response.ok) {
                        // Handle successful login
                        alert('Login successful!');

                        // Clear localStorage after successful login
                        localStorage.removeItem('formData');

                        // Optionally, close the modal or redirect
                        const modal = bootstrap.Modal.getInstance(document.getElementById('exampleModal'));
                        modal.hide();

                        // Refresh the page
                        location.reload();
                    } else {
                        // Handle errors, e.g., show error message
                        errorMessageElement.textContent = result.message || 'Invalid email or password.';
                    }
                } catch (error) {
                    console.error('Error during validation:', error);
                    errorMessageElement.textContent = 'An error occurred. Please try again.';
                }
            }

            // Function to save form data to localStorage
            function saveFormData() {
                const formData = {
                    first_name: document.getElementById('first_name').value,
                    last_name: document.getElementById('last_name').value,
                    email: document.getElementById('email').value,
                    telephone: document.getElementById('telephone').value,
                    reg_no: document.getElementById('reg_no').value,
                    postcode: document.getElementById('postcode').value,
                    company: document.getElementById('company').value,
                    address: document.getElementById('address').value,
                    city: document.getElementById('city').value,
                    state: document.getElementById('state').value,
                    country: document.getElementById('country').value,
                    additional_info: document.getElementById('additional_info').value
                };
                localStorage.setItem('formData', JSON.stringify(formData));
            }

            // Function to populate form fields from localStorage
            function populateForm() {
                const formData = JSON.parse(localStorage.getItem('formData'));
                if (formData) {
                    document.getElementById('first_name').value = formData.first_name || '';
                    document.getElementById('last_name').value = formData.last_name || '';
                    document.getElementById('email').value = formData.email || '';
                    document.getElementById('telephone').value = formData.telephone || '';
                    document.getElementById('reg_no').value = formData.reg_no || '';
                    document.getElementById('postcode').value = formData.postcode || '';
                    document.getElementById('company').value = formData.company || '';
                    document.getElementById('address').value = formData.address || '';
                    document.getElementById('city').value = formData.city || '';
                    document.getElementById('state').value = formData.state || '';
                    document.getElementById('country').value = formData.country || '';
                    document.getElementById('additional_info').value = formData.additional_info || '';
                }
            }

            function signup() {

            }

            // Populate the form on page load
            window.addEventListener('load', populateForm);

            // Save form data before the page unloads
            window.addEventListener('beforeunload', saveFormData);
        </script>


</body>

</html>
