<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Session;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return response(['data' => $products]);
    }

    public function show(Product $product)
    {
        $category = $product->category;
        return response(['data' => $category]);
        // sebelunya $product setelah data
    }

    public function searchByCategory(Category $category)
    {
        $products = $category->products;
        return response(['data' => $products]);
    }

    public function searchByKey(Request $request)
    {
        $products = Product::where('name', 'LIKE', "%$request->key%")
                           ->orWhere('description', 'LIKE', "%$request->key%")->get();
        return response(['data' => $products]);
    }


}

