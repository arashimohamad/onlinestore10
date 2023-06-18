<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductApiController extends Controller
{
    public function index() 
    {
        $products = Product::get();
        return response()->json(['message'=>'Success', 'data'=>$products]);
    }

    public function store(Request $request) 
    {
        $product = Product::create($request->all());
        return response()->json(['message'=>'Data Has Been Saved Successfully', 'data'=>$product]);
    }

    public function update(Request $request, $id) 
    {
        $product = Product::find($id);
        $product->update($request->all());
        return response()->json(['message'=>'Success', 'data'=>$product]);
    }

    public function show($id) 
    {
        $product = Product::find($id);
        return response()->json(['message'=>'Success', 'data'=>$product]);
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id)->delete();
        return response()->json(['message'=>'Data Has Been Deleted Successfully', 'data'=>null]);
    }
}


// Tutorial completed :
#6 Tambah Data ke table database - Series Tutorial Toko Online Laravel 8 + Flutter part 
#10 Membuat API bagian 2 - Series Tutorial Toko Online Laravel 8 + Flutter