<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ETYRE ZONE Tyres</title>

    <!-- FONTAWESOME ICON -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

    <!-- BOOTSTRAP 5 CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" />

    <!-- OWL CAROUSEL -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- Include jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>

    <div class="wrapper">
        @php
            $product = \App\Models\Manufacturer::all();
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

                        @if (session('cart') && count(session('cart')) > 0)
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
                                            @php
                                                $total = 0;
                                            @endphp

                                            @foreach (session('cart', []) as $id => $product)
                                                @php
                                                    $quantity = intval($product['quantity']);
                                                    $price = floatval($product['price']);
                                                    $itemTotal = $price * $quantity;
                                                    $total += $itemTotal;
                                                @endphp


                                                <tr>
                                                    <td class="text-center">
                                                        <img src="{{ $product['image'] }}" alt="image"
                                                            class="serviceicon" width="65">
                                                    </td>
                                                    <td data-th="Product Name:" class="text-left">
                                                        {{ $product['season'] }} Tyre
                                                        {{ $product['manufacturer_name'] }} DRIVE {{ $product['size'] }}
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="quantity">
                                                            <div class="d-flex ">
                                                                <button class="main-btn decrease-quantity"
                                                                    data-id="{{ $id }}"><i
                                                                        class="fa-solid fa-minus"></i></button>
                                                                <input type="text" min="1"
                                                                    value="{{ $quantity }}" class="quantity-input"
                                                                    data-id="{{ $id }}" readonly>
                                                                <button class="main-btn increase-quantity"
                                                                    data-id="{{ $id }}"><i
                                                                        class="fa-solid fa-plus"></i></button>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td data-th="Unit Price:" class="text-right">
                                                        £{{ $product['price'] }}</td>
                                                    <td data-th="Total:" class="text-right item-total"
                                                        id="item-total-{{ $id }}">£{{ $itemTotal }}</td>
                                                    <td class="text-start">
                                                        <form action="{{ route('cart.remove', $id) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="remove"><i
                                                                    class="fa-solid fa-trash-can"></i></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach

                                            <tr class="hidden-xs">
                                                <td colspan="5" class="text-end"><strong>Sub-Total:</strong></td>
                                                <td colspan="5" class="text-end" id="subtotal">£{{ $total }}
                                                </td>
                                            </tr>
                                            <tr class="hidden-xs">
                                                <td colspan="5" class="text-end"><strong>Total:</strong></td>
                                                <td colspan="5" class="text-end" id="total">£{{ $total }}
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        @else
                            <div class="alert alert-warning" role="alert">
                                No products have been added to the cart.
                            </div>
                        @endif

                        <div class="buttons d-flex justify-content-between align-items-center flex-wrap gap-2">
                            <a class="main-btn" href="{{ route('home') }}">Continue Shopping</a>
                            @if (session('cart') && count(session('cart')) > 0)
                                <a class="main-btn" href="{{ route('checkout') }}">Checkout</a>
                            @endif
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>

        @php
            $product = \App\Models\Manufacturer::all();
        @endphp

        @includeIf('includes.footer', ['product' => $product])
    </div>

    <!-- BOOTSTRAP 5 JS CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function() {
            // Update cart quantity
            function updateCart(id, quantity) {
                $.ajax({
                    url: "{{ route('cart.update') }}",
                    type: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        id: id,
                        quantity: quantity
                    },
                    success: function(response) {
                        if (response.success) {
                            // Update item total and overall totals
                            $('#item-total-' + id).text('£' + response.itemTotal);
                            $('#subtotal').text('£' + response.subtotal);
                            $('#total').text('£' + response.total);
                        }
                    },
                    error: function(response) {
                        console.log('Error:', response);
                    }
                });
            }

            // Increase quantity
            $('.increase-quantity').on('click', function() {
                let input = $(this).siblings('input');
                let quantity = parseInt(input.val()) + 1;
                input.val(quantity);

                let id = $(this).data('id');
                updateCart(id, quantity);
            });

            // Decrease quantity
            $('.decrease-quantity').on('click', function() {
                let input = $(this).siblings('input');
                let quantity = parseInt(input.val()) - 1;
                if (quantity < 1) quantity = 1;
                input.val(quantity);

                let id = $(this).data('id');
                updateCart(id, quantity);
            });
        });
    </script>

</body>

</html>
