<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() 
    {
        $products = Product::get();
        //dd($products);
        return view('products.index', compact('products'));
    }

    public function addEdit(Request $request, $id=null) 
    {
        //Pecahkan kpd 2 bahagian create dan edit
        if ($id == "") {                                     //create mana ada id
            //$message = "";
            $title = "Create Product";
            $productdata = new Product;
        } else {                                             //edit confirm ada id
            //$message = "";
            $title = "Edit Product";
            $productdata = Product::find($id);
        }

        if ($request->isMethod('post')) {
            $data = $request->all();
            
            //create + edit
            $productdata->name        = $data['name'];
            $productdata->description = $data['description'];
            $productdata->price       = $data['price'];
            $productdata->image_url   = $data['image_url'];

            $productdata->save();

            return redirect('products');
        }

        return view('products.create_edit', compact('title','productdata'));
    }

    public function destroy($id)
    {
        $productdelete = Product::findOrFail($id)->delete();
        return redirect()->back();
    }
    
}


// Tutorial completed :
#6 Tambah Data ke table database - Series Tutorial Toko Online Laravel 8 + Flutter part 
#10 Membuat API bagian 2 - Series Tutorial Toko Online Laravel 8 + Flutter