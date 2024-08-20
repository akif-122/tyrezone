<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tyre Zone | New & Part Worn Tyres | Tyres in Manchester</title>
    <link rel="icon" href="speed.png">

    <!-- BOOTSTRAP 5 CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" />
</head>

<body>

    <div class="container mt-5">
        <h1>All Products</h1>
        
        @if(isset($products) && $products->isNotEmpty())
            <div class="row">
                @foreach($products as $product)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="{{ $product->image }}" class="card-img-top" alt="{{ $product->name }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text">Manufacturer: {{ $product->manufacturer_name }}</p>
                                <p class="card-text">Pattern: {{ $product->patteren_type }}</p>
                                <p class="card-text">Fuel Efficiency: {{ $product->fuel }}</p>
                                <p class="card-text">Wet Grip: {{ $product->wet_grip }}</p>
                                <p class="card-text">Road Noise: {{ $product->road_noise }}</p>
                                <p class="card-text">Size: {{ $product->size }}</p>
                                <p class="card-text">Type: {{ $product->type }}</p>
                                <p class="card-text">Season: {{ $product->season }}</p>
                                <p class="card-text">Budget Tyre: {{ $product->budget ? 'Yes' : 'No' }}</p>
                                <p class="card-text">Price: ${{ $product->price }}</p>
                                {{-- <a href="{{ route('products.edit', ['name' => $product->name, 'manufacturer' => $product->manufacturer_name]) }}" class="btn btn-primary">Edit</a> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-center">No products availabe</p>
        @endif
    </div>

    <!-- BOOTSTRAP 5 JS CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>
