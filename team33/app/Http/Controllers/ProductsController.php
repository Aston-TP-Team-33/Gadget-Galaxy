<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use Auth;
use App\Models\User;
use App\Models\Basket;
use App\Models\UserOrders;
use App\Models\UserQueries;
use DB;



class ProductsController extends Controller
{
    public function index()
    {
        $min = 1;
        $storeData = Products::where('quantity', '>=', $min)->get();
        #$storeData = Products::all(); #store data from table
        return view('product', compact('storeData')); # bring data into the products page
        
    }

    #admin updatequantity
    public function updatequantity(Request $request, $id){

        DB::table('products')
        ->where('id', $id)
        ->update(array('quantity' => $request->quantity));
    
        return redirect('/adminAccount');
       
        }
}
