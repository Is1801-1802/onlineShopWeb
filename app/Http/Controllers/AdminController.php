<?php

namespace App\Http\Controllers;

use App\Category;
use App\Order;
use App\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function listProd () {
        return view('lists', ['products' => Product::all()] );
    }

    public function listCat () {
        return view('listCategory', ['category' => Category::all()] );
    }

    public function listOrder () {
        return view('listOrder', ['orders' => Order::all()] );
    }

    public function deleteOrder($id){
        Order::find($id)->delete();
        return redirect(route('listOrder'))->with('successMsg', 'Product Delete Successfully ');
    }


}
