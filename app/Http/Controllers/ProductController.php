<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProd () {
        return view('addProduct');
    }

    public function store (Request $request) {
        $this->validate($request, [
            'category_id' => 'required',
            'name' => 'required',
            'description' => 'required',
            'image' => 'required',
            'price' => 'required'
        ]);

        $product = new Product;
        $product->category_id = $request->category_id;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->image = $request->image;
        $product->price = $request->price;
        $product->save();

        return redirect(route('listProduct'))->with('successMsg', 'Product Successfully added!');
    }

    public function edit($id) {
        return view('edit', ['data' => Product::find($id)] );
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'category_id',
            'name',
            'description',
            'image',
            'price'
        ]);
        $product = Product::find($id);
        $product->category_id = $request->category_id;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->image = $request->image;
        $product->price = $request->price;
        $product->save();

        return redirect(route('listProduct'))->with('successMsg', 'Product Successfully Updated!');
    }

    public function delete($id){
        Product::find($id)->delete();
        return redirect(route('listProduct'))->with('successMsg', 'Product Delete Successfully ');
    }
}
