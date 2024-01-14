<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        // $products = [
        //     ['id' => 1, 'name' => 'Product 1', 'price' => 19.99],
        //     ['id' => 2, 'name' => 'Product 2', 'price' => 29.99],
        //     ['id' => 3, 'name' => 'Product 3', 'price' => 39.99],
        //     // Thêm các sản phẩm khác nếu cần
        // ];
        $products = Product::all();
        return view('products', ["products" => $products]);
    }

    // Phương thức hiển thị form thêm sản phẩm
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric',
            'img' => 'required|url',
        ]);

        Product::create([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'img' => $request->input('img'),
        ]);

        return redirect()->route('products.index');
    }
    public function show($id)
    {
        $product = Product::find($id);

        if (!$product) {
            // Xử lý khi không tìm thấy sản phẩm
            abort(404);
        }

        return view('show', ['product' => $product]);
    }
    public function edit($id)
    {
        $product = Product::find($id);

        if (!$product) {
            // Xử lý khi không tìm thấy sản phẩm
            abort(404);
        }

        return view('edit', ['product' => $product]);
    }
    // Phương thức cập nhật
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric',
            'img' => 'required|url',
        ]);

        $product = Product::find($id);

        if (!$product) {
            // Xử lý khi không tìm thấy sản phẩm
            abort(404);
        }

        $product->update([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'img' => $request->input('img'),
        ]);

        return redirect()->route('products.index');
    }

    // Phương thức xóa
    public function destroy($id)
    {
        $product = Product::find($id);

        if (!$product) {
            // Xử lý khi không tìm thấy sản phẩm
            abort(404);
        }

        $product->delete();

        return redirect()->route('products.index');
    }
}
