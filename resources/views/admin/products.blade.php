<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="icon" href="{{ asset("speed.png") }}" />

    <!-- FONTAWESOME ICON -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

    <!-- BOOTSTRAP 5 CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" />

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="../admin/assets/css/style.css">
</head>

<body>

    <div class="main">
        {{-- @includeIf('admin.includes.sidebar',['admin' => $admin]) --}}
        @includeIf('admin.includes.sidebar')


        <div class="main-wrap" id="mainArea">

            {{-- @includeIf('admin.includes.topbar',['admin' => $admin]) --}}
            @includeIf('admin.includes.topbar')



            <div class="content-area mt-5">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="m-0">Products</h5>
                    <a class="main-btn sm " href="{{ route('adminAddProducts') }}">Add Product</a> <!-- Updated route -->
                </div>

                <p class="text-danger"></p>
                <p class="text-success"></p>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tyre Name</th>
                                <th>Image</th>
                                <th>Manufac. Name</th>
                                <th>Tyre Pattern</th>
                                <th>Fuel Efficiency</th>
                                <th>Wet Grip</th>
                                <th>Road Noise</th>
                                <th>Size</th>
                                {{-- <th>Type</th> --}}
                                <th>Season</th>
                                <th>Budget Tyre</th>
                                <th>Price</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $id = 0 ?>
                            @forelse($products as $product)
                            @php $id++ @endphp
                                <tr>
                                    <td>{{ $id }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td><img src="{{ $product->image }}" alt="{{ $product->name }}"></td>
                                    <td>{{ $product->manufacturer_name }}</td>
                                    <td>{{ $product->tyre_pattern }}</td>
                                    <td>{{ $product->fuel_efficiency }}</td>
                                    <td>{{ $product->wet_grip }}</td>
                                    <td>{{ $product->road_noise }}</td>
                                    <td>{{ $product->size }}</td>
                                    {{-- <td>{{ $product->type }}</td> --}}
                                    <td>{{ $product->season }}</td>
                                    <td>{{ $product->budget ? 'Yes' : 'No' }}</td>
                                    <td>${{ number_format($product->price, 2) }}</td>
                                    <td>
                                        <div class="last-btns">

                                            <a href="{{ route('editProduct', ['id' => $product->id]) }}"
                                                class="btn btn-success">
                                                <i class="fa-solid fa-pen"></i>
                                            </a>


                                            <form action="{{ route('products.destroy') }}" method="POST"
                                                style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <input type="hidden" name="name" value="{{ $product->name }}">
                                                <input type="hidden" name="manufacturer_name"
                                                    value="{{ $product->manufacturer_name }}">
                                                <button type="submit" class="btn btn-danger"
                                                    onclick="return confirm('Are you sure you want to delete this product?')"><i
                                                        class="fa-solid fa-trash-can"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="13" class="text-center">No products available</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>


        </div>

    </div>



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
