<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ETYRE ZONE Tyeres</title>

    <!-- FONTAWESOME ICON -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

    <!-- BOOTSTRAP 5 CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" />

    <!-- OWL CAROUSEL  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="{{ asset("assets/css/style.css") }}">

</head>

<body>

    <div class="wrapper">
        @php
            $product = \App\Models\Manufacturer::all(); // Fetch products or any data needed in the navbar
        @endphp

        @includeif('includes.navbar', ['product' => $product])

        <div class="container cart-page">



            <div class="row">
                <div id="content" class="col-md-12 col-sm-12">
                    <div class="contenttitle">
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <h4>Shopping Cart</h4>
                            </div>
                        </div>



                        <div class="order-detail-content">
                            <div class="table-responsive">
                                <table id="cart" class="table table-bordered cart_summary">
                                    <thead>
                                        <tr>
                                            <td class="text-center"><b>Image</b></td>
                                            <td class="text-left"><b>Product Name</b></td>

                                            <td class="text-left"><b>Quantity</b></td>
                                            <td class="text-right"><b>Unit Price</b></td>
                                            <td class="text-right"><b>Total</b></td>
                                            <td class="text-left"><b>Remove</b></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- @foreach ($product as $product) --}}
                                            <tr>
                                                <td class="text-center">
                                                    <img src="{{ $record->image }}" alt="image" class="serviceicon"
                                                        width="65">
                                                </td>
                                                <td data-th="Product Name:" class="text-left">
                                                    {{ $record->season }} Tyre {{ $record->manufacturer_name }} DRIVE
                                                    {{ $record->size }}
                                                </td>
                                                <td class="text-center">
                                                    <div class="quantity">
                                                        <div class="d-flex align-items-center">
                                                            <button class="main-btn"><i
                                                                    class="fa-solid fa-minus"></i></button>
                                                            <input type="text" min="1" value="1">
                                                            <button class="main-btn"><i
                                                                    class="fa-solid fa-plus"></i></button>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td data-th="Unit Price:" class="text-right">£{{ $record->price }}</td>
                                                <td data-th="Total:" class="text-right">£{{ $record->price * 1 }}</td>
                                                <!-- Assuming quantity 1 for now -->
                                                <td class="text-start">
                                                    <span class="input-group-btn">
                                                        <button type="button" class="remove"><i
                                                                class="fa-solid fa-trash-can"></i></button>
                                                    </span>
                                                </td>
                                            </tr>

                                            <tr class="hidden-xs">
                                                <td colspan="5" class="text-end"><strong>Sub-Total:</strong></td>
                                                <td colspan="5" class="text-end">£{{ $record->price }}</td>
                                                <!-- Assuming quantity 1 for now -->
                                            </tr>
                                            <tr class="hidden-xs">
                                                <td colspan="5" class="text-end"><strong>Total:</strong></td>
                                                <td colspan="5" class="text-end">£{{ $record->price }}</td>
                                                <!-- Assuming quantity 1 for now -->
                                            </tr>
                                        {{-- @endforeach --}}
                                    </tbody>

                                </table>
                            </div>
                        </div>

                        <div class="buttons d-flex justify-content-between align-items-center flex-wrap gap-2">
                            <a class="main-btn" href="{{ route("home") }}">Continue Shopping</a>
                            <a class="main-btn" href="{{ route("checkout") }}">Checkout</a>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>

        @php
            $product = \App\Models\Manufacturer::all(); // Fetch products or any data needed in the navbar
        @endphp

        @includeIf('includes.footer',['product'=> $product])
