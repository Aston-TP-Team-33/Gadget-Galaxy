<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css?v=').time()}}" rel="stylesheet" type="text/css">
    <link rel="icon" href="images/icon_logo.svg">
    <title>Homepage</title>
</head>

<body>
    @include('nav&footer/nav')

    <h1>Welcome Admin!</h1>

    

<!--From here-->

    </style>
<section class="products">
<h1>List of Users</h1>
<table class="content-table">
<thead>
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
</tr>
</thead>
@foreach($users as $user)
<tr>
<td>{{$user['id']}}</td>
<td>{{$user['name']}}</td>
<td>{{$user['email']}}</td>
</tr>
@endforeach
</table>


<h1>List of Products in stock</h1>
<table class="content-table">
<thead>
<tr>
<td>ID</td>
<td>Title</td>
<td>Description</td>
<td>Quantity</td>
<td> &nbsp &nbsp -- </td>
<td>Price</td>
</tr>
</thead>
@foreach($products as $product)
<tr>
<td>{{$product['id']}}</td>
<td>{{$product->title}}</td>
<td>{{$product->description}}</td>

<form action="{{url('updatequantity',$product->id)}}" method="POST">
      @csrf
<td><input type= "number" value= "{{$product->quantity}}" min="0" class="form" name="quantity"></td>
<!--update button-->
<td><button style="background-color:#73b59e;box-shadow:0 0 20px rgba(0,0,0,0.15);" type="submit" onclick="alert('Quantity Updated Successfully')" class="btn">Update Quantity</button></td>
      </form>

<td>£{{$product->price}}</td>
</tr>
@endforeach
</table>


<h1>All orders from users</h1>
<table class="content-table">
<thead>
<tr>
<td>Order ID</td>
<td>User ID</td>
<td>Product ID</td>
<td>Product</td>
<td>Quantity</td>
<td>Price</td>
<td>Order Date:</td>
<td>Email Address</td>
<td>Full Name</td>
<td>House Number</td>
<td>Address</td>
<td>Post Code</td>
<td>Status</td>
<td>Update Status </td>
<td><div style="text-align:center;">Update Order Status</div></td>

</tr>
</thead>
@foreach($orders as $order)
<tr>
<td>{{$order['id']}}</td>
<td>{{$order['user_id']}}</td>
<td>{{$order['product_id']}}</td>
<td>{{$order['product_name']}}</td>
<td>{{$order['quantity']}}</td>
<td>{{$order['price']}}</td>
<td>{{$order['created_at']}}</td>
<td>{{$order['email']}}</td>
<td>{{$order['name']}}</td>
<td>{{$order['house_number']}}</td>
<td>{{$order['street']}}</td>
<td>{{$order['postcode']}}</td>
<td>{{$order['order_status']}}</td>

<form action="{{url('updateStatus',$order->id)}}" method="POST">
      @csrf

<td><select id="order status" name="newStatus">
  <option value="Placed">Placed</option>
  <option value="Dispached">Dispached</option>
  <option value="Delivered">Delivered</option>
</select></td>
<!--update button-->
<td><button style="background-color:#73b59e;box-shadow:0 0 20px rgba(0,0,0,0.15);" type="submit" onclick="alert('Order Status Changed Successfully')" class="btn">Update Status</button></td>
      </form>

</tr>
@endforeach
</table>



<h1>Customers' Queries</h1>
<table class="content-table">
<thead>
<tr>
<td>Query ID</td>
<td>Email</td>
<td>Full Name</td>
<td>Message</td>

</tr>
</thead>
@foreach($queries as $query)
<tr>
<td>{{$query['id']}}</td>
<td>{{$query['email']}}</td>
<td>{{$query['name']}}</td>
<td>{{$query['query']}}</td>
</tr>
@endforeach
</table>


   </div>

   @include('nav&footer/footer')

</body>

</html>