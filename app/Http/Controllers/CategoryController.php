<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function edit($id) {
        return view('editCategory', ['data' => Category::find($id)] );
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'name' => 'required',
        ]);
        $category = Category::find($id);
        $category->name = $request->name;
        $category->save();

        return redirect(route('listCategory'))->with('successMsg', 'Product Successfully Updated!');
    }
    public function delete($id){
        Category::find($id)->delete();
        return redirect(route('listCategory'))->with('successMsg', 'Product Delete Successfully ');
    }
}
