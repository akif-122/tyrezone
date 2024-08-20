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
        <h1 class="mb-4">Admin Dashboard</h1>

        <!-- Button to navigate to Add Product page -->
        <button id="addProductBtn" class="btn btn-primary">Add Product</button>

        <!-- Dummy text -->
        <p class="mt-4">Welcome to the admin dashboard. Click the button above to add new products.</p>
    </div>

    <!-- BOOTSTRAP 5 JS CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>

    <!-- Laravel Blade directive to output URL for the button -->
    <script>
        document.getElementById('addProductBtn').addEventListener('click', function() {
            // Use Laravel's route helper function to get the correct URL
            window.location.href = "{{ route('addByAdmin') }}";
        });
    </script>
</body>

</html>
