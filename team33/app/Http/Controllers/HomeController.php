<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\Basket;
use App\Models\Products;
use App\Models\UserOrders;
use App\Models\UserQueries;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
       $basket_orders = Basket::where('user_id', Auth::id())->get();  #get basket items where field 'user-id' in basket table is == to Auth::id
       $orders_list = UserOrders::where('user_id', Auth::id())->get();
       $total = Basket::where('user_id', Auth::id())->sum('price');


        return view('userAccount', compact('basket_orders', 'total','orders_list')); # return /home + stored data
    }

    public function admin()
    {
        $store = User::all(); #store users in $store
        $products = Products::all(); #store products in this variable
        $orders = UserOrders::all(); #store products in this variable
        $queries = UserQueries::all(); #store products in this variable
        return view('adminAccount', ['users' => $store], compact('products','orders','queries','store')); #memebers is a key that can be used as a variables in html page using $members
        
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
      }

    
}
