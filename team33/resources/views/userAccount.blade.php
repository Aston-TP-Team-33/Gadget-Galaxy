<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css?v=').time()}}" rel="stylesheet" type="text/css">
    <title>Homepage</title>
</head>

<body>
    @include('nav&footer/nav')

    <h1>My Account</h1>
    
</style>
<section class="products">
<div class="container">
<br>
<div class="row"><h1>My Basket</h1></div>
<table>
<br>
<tr>
<td style="font-size: 20px;" ><div class""><h2>&nbsp Product &nbsp</h2></div></div></td>
<td style="font-size: 20px;" ><div class""><h2>&nbsp Quantity &nbsp</h2></div></div></td>
<td style="font-size: 20px;" ><div class""><h2>&nbsp Price &nbsp</h2></div></div></td>
</tr>
@foreach($basket_orders as $basket)
<tr>
<td>&nbsp{{$basket['product_name']}}</td>


<!--basket view-->
<form action="{{url('update',$basket->id)}}" method="POST">
      @csrf

<td><input type= "number" value= "{{$basket['quantity']}}" min="1" class="form" name="quantity"></td>
<td>£{{$basket['price']}}</td>



<!--update button-->
<td><button type="submit" onclick="alert('Quantity Updated Successfully')" class="btn">Update</button></td>
      </form>

      <!--Remove Button-->

      <form action="{{url('remove',$basket->id)}}" method="POST">
      @csrf

<td><button type="submit" onclick="alert('Product Removed')" class="btn">Remove</button></td>
      </form>


<!--end form-->

</tr>
@endforeach
</table>

<table>
<tr>
<td><h3>Total = &nbsp</td><td>£{{$total}}</td>
</tr>


</table>
</div>
<br>

<!--Delivery Address take input-->
<div class="container">
<br>
<div class="row"><h1> Checkout </h1></div>

<table>
<tr>
<td style="font-size: 20px;"><div class"col"><div class="checkoutSec"><h3>Full Name</h3></div></div></td>
<td style="font-size: 20px;"><div class"col"><div class="checkoutSec"><h3>House Number</h3></div></div></td>
<td style="font-size: 20px;"><div class"col"><div class="checkoutSec"><h3>Street Address</h3></div></div></td>
<td style="font-size: 20px;"><div class"col"><div class="checkoutSec"><h3>PostCode</h3></div></div></td>
<td style="font-size: 20px;"><div class"col"><div class="checkoutSec"><h3>City</h3></div></div></td>
<td style="font-size: 20px;"><div class"col"><div class="checkoutSec"><h3>Card Number</h3></div></div></td>
<td style="font-size: 20px;"><div class"col"><div class="checkoutSec"><h3>Expiry Date</h3></div></div></td>
<td style="font-size: 20px;"><div class"col"><div class="checkoutSec"><h3>CCV</h3></div></div></td>

</tr>



<form action="{{url('checkout')}}" method="POST">
      @csrf
<tr>
<td><input type= "text" value= "" class="form" name="name"></td>
<td><input type= "text" value= "" class="form" name="house_number"></td>
<td><input type= "text" value= "" class="form" name="street_address"></td>
<td><input type= "text" value= "" class="form" name="post_code"></td>
<td><input type= "text" value= "" class="form" name="city"></td>
<td><input type= "text" value= "" class="form" name="card_number"></td>
<td><input type= "date" value= "" class="form" name="expiry_date"></td>
<td><input type= "password" value= "" class="form" name="cvv"></td>
<br>

<!--Submit Order-->
<td><button type="submit" onclick="alert('Thank You For Shopping with Us!')" class="btn">Checkout</button></td>
</form>


</tr>

</table>
</div>
<br>
<!--Show user's orders-->

<div class="container">
<br>
<div class="row"><h1>My Order History</h1></div>
<table>
<tr>
<td style="font-size: 20px;"><div class"col"><div class="Myorderhistory"><h3>&nbsp Product &nbsp</h3></div></div></td>
<td style="font-size: 20px;"><div class"col"><div class="Myorderhistory"><h3>&nbsp Quantity &nbsp</h3></div></div></td>
<td style="font-size: 20px;"><div class"col"><div class="Myorderhistory"><h3>&nbsp Price &nbsp</h3></div></div></td>
<td style="font-size: 20px;"><div class"col"><div class="Myorderhistory"><h3>&nbsp Status &nbsp</h3></div></div></td>
<td style="font-size: 20px;"><div class"col"><div class="Myorderhistory"><h3>&nbsp Order Date: &nbsp</h3></div></div></td>
</tr>
@foreach($orders_list as $order)
<tr>
<td>{{$order['product_name']}}</td>
<td>{{$order['quantity']}}</td>
<td>£{{$order['price']}}</td>
<td>{{$order['order_status']}}</td>
<td>{{$order['created_at']}}</td>
</tr>
@endforeach
</table>
</div>

</div>

    @include('nav&footer/footer')
</body>

</html>