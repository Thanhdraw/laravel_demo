<!-- resources/views/products.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product List</title>
    <!-- Thêm Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Danh sách sản phẩm</h2>
        <ul class="list-group">
            @foreach ($products as $item)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $item['id'] }} - {{ $item['name'] }}  <img src="{{ $item['img'] }}" alt="" style="max-width: 100px;"> <p>Giá:</p>{{ $item['price'] }}
                    <!-- Nút sửa đổi -->
                    <a href="{{ route('products.edit', $item['id']) }}" class="btn btn-primary btn-lg">Sửa</a>
                    <!-- Nút xóa -->
                    <form action="{{ route('products.destroy', $item['id']) }}" method="post" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger ml-2 btn-lg">Xóa</button>
                    </form>
                </li>
            @endforeach
        </ul>
        <!-- Nút thêm sản phẩm -->
        <a href="{{ route('products.create') }}" class="btn btn-success mt-3">Thêm Sản Phẩm</a>
    </div>
    
    <!-- Thêm Bootstrap JS và Popper.js (cần thiết cho Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
</body>
</html>
