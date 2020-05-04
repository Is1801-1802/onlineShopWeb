<?php

namespace App\Http\Controllers;

use App\Category;
use App\Info;
use App\Order;
use App\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        return view('index', ['data' => Info::all()] );
    }

    public function category($code) {
        $category = Category::where('code', $code)->first();
        return view("products", compact('category'));
    }

    public function about() {
        return view('about');
    }

    public function order() {
        $cart = session()->get('cart');
        return view('makeOrder');
    }

    public function storeOrder(Request $request) {
        $this->validate($request, [
            'fullname' => 'required',
            'address' => 'required',
            'email' => 'required',
            'telNum' => 'required',
            'total' => 'required'
        ]);

        $order = new Order;
        $order->fullname = $request->fullname;
        $order->address = $request->address;
        $order->email = $request->email;
        $order->telNum = $request->telNum;
        $order->total = $request->total;
        $order->save();

        return redirect(route('cart'))->with('successMsg', 'Your order is accepted!');
    }

}
