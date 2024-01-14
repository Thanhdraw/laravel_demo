<!-- resources/views/products/show.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Detail</title>
    <!-- Thêm Bootstrap CSS nếu cần -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Product Detail</h2>
        <div>
            <p><strong>ID:</strong> {{ $product->id }}</p>
            <p><strong>Name:</strong> {{ $product->name }}</p>
            <p><strong>Price:</strong> {{ $product->price }}</p>
            <p><strong>Image:</strong> <img src="{{ $product->img }}" alt="" style="max-width: 200px;"></p>
        </div>
        <a href="{{ route('products.index') }}" class="btn btn-primary mt-3">Back to Product List</a>
    </div>
    <!-- Thêm Bootstrap JS và Popper.js nếu cần -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
