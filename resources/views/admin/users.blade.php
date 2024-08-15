<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- FONTAWESOME ICON -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

    <!-- BOOTSTRAP 5 CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" />

    <!-- OWL CAROUSEL  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>


    <div class="wrapper">
        <div class="main">
            @includeIf('admin.includes.sidebar')


            <div class="main-wrap" id="mainArea">

                @includeIf('admin.includes.topbar')



                <div class="content-area mt-5">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="m-0">All Users</h5>

                        <a class="main-btn sm" href="{{ route('adminAddUsers') }}">Add User</a>

                    </div>

                    <p class="text-danger"></p>
                    <p class="text-success"></p>

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Company</th>
                                    <th>Country</th>
                                    <th>City</th>
                                    <th>Address</th>
                                    <th>Postcode</th>
                                    <th>Role</th>
                                    <th>Actions</th>

                                </tr>
                            </thead>

                            <tbody>
                                @if (isset($users) && $users->isNotEmpty())
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->f_name }}</td>
                                            <td>{{ $user->last_name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->phone }}</td>
                                            <td>{{ $user->company_name }}</td>
                                            <td>{{ $user->country }}</td>
                                            <td>{{ $user->city }}</td>
                                            <td>{{ $user->address }}</td>
                                            <td>{{ $user->postcode }}</td>
                                            <td>{{ $user->company_phone }}</td>


                                            <td>
                                                <div class="last-btns">

                                                    <a href="{{ route('editAdminUser', ['id' => $user->id]) }}"
                                                        class="btn btn-success"><i class="fa-solid fa-pen"></i></a>

                                                    <form action="{{ route('delete_user') }}" method="POST"
                                                        style="display:inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <input type="hidden" name="email"
                                                            value="{{ $user->email }}">
                                                        <button type="submit" class="btn btn-danger"
                                                            onclick="return confirm('Are you sure you want to delete this user?')"><i
                                                                class="fa-solid fa-trash-can"></i></button>
                                                    </form>
                                                </div>

                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <p>No Users Found</p>
                                @endif

                            </tbody>
                        </table>
                    </div>

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

        sideToggler.addEventListener("click", function(e) {
            sideBar.classList.toggle("none")
            mainArea.classList.toggle("side-none")
        })

        closeBtn.addEventListener("click", function(e) {
            sideBar.classList.remove("none")
            mainArea.classList.remove("side-none")
        })
    </script>

</body>

</html>
