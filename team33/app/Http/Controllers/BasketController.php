<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Products;
use App\Models\Basket;
use App\Models\UserOrders;

use Illuminate\Support\Facades\Auth;
use DB;

class BasketController extends Controller
{
    public function basket(Request $request, $id) #Request is needed everytime we get data from a form
    {

    if(Auth::id()){ #if user is loged in

    $user=auth()->user();
    $product=Products::find($id); #get the id from the input of the user for the add to basket button

    $basket = new Basket;
    
 

    $product_quantity =$request->quantity;
    $product_price = $product->price;
    $totalOfProduct = $product_price*$product_quantity;

    $basket->user_id=$user->id;
    $basket->product_id=$product->id;
    $basket->name=$user->name;
    $basket->email=$user->email;
    $basket->product_name=$product->title;
    $basket->price=$totalOfProduct;
    $basket->quantity=$request->quantity;
    $basket->save();

    $MaxQuantity = $product->quantity;
    $ToRemove = $request->quantity;
    $TotalLeft = $MaxQuantity - $ToRemove;
    $product->quantity= $TotalLeft;

    $product->save();

    return redirect('/userAccount');
    
     #stay on same page
    }

    else
    {
    return redirect('login'); #else: go to login and log in first
    }

    }
    
    #update basket
    function update(Request $request, $id){

        
   
        DB::table('baskets')
        ->where('id', $id)
        ->update(array('quantity' => $request->quantity));
        
        $basket_row = DB::table('baskets')->where('id', $id)->first();
        $get_product_id = strval($basket_row->product_id);
        $product=Products::find($get_product_id);
        $price = strval($product->price);
        $total = $price * $request->quantity;
 
        

        DB::table('baskets')
        ->where('id', $id)
        ->update(array('price' => $total));

    
        return redirect('userAccount');
        
    
        }

        /** remove product from basket*/

    function remove(Request $request, $id){
    

        DB::table('baskets')
        ->where('id', $id)
        ->delete();
        
    
        return redirect('userAccount');
        
    
        }


        public function addToOrders(Request $request) #Request is needed everytime we get data from a form
    {

    if(Auth::id()){ #if user is loged in

    $user_id = Auth::id();
    $user = User::find($user_id);
    $baskets = basket::where('user_id', Auth::id())->get();
    $order = new UserOrders;

    foreach($baskets as $basket){
    $order = new UserOrders();

    $order->name=$request->name;
    $order->user_id= $user_id;
    $order->product_id= $basket->product_id;
    $order->email= $basket->email; 
    $order->product_name= $basket->product_name; 
    $order->quantity= $basket->quantity; 
    $order->price= $basket->price; 
    $order->house_number=$request->house_number;
    $order->street=$request->street_address;
    $order->postcode=$request->post_code;
    $order->city=$request->city;
    $order->name=$request->name;
    $order->name=$request->name;
    $order->order_status='Placed';

    $order->save();

    DB::table('baskets')
    ->where('id', $basket->id)
    ->delete();

    }
    
    return redirect('userAccount');



     #stay on same page
    }

}

#admin update order status of purchase
public function updateStatus(Request $request, $id){

    DB::table('user_orders')
    ->where('id', $id)
    ->update(array('order_status' => $request->newStatus));

    return redirect('/adminAccount');
   
    }
    
}
