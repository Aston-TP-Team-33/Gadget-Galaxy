<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css?v=').time() }}" rel="stylesheet" type="text/css">
    <title>Admin Dashboard</title>
</head>

<body>
    @include('nav&footer/nav')
<div class = "admin-page">
    <main>
        <h1>Welcome Admin!</h1>

        <section class="users">
            <h2>List of Users</h2>
            <table class="content-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{$user['id']}}</td>
                        <td>{{$user['name']}}</td>
                        <td>{{$user['email']}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </section>

        <section class="products">
            <h2>List of Products in Stock</h2>
            <table class="content-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Quantity</th>
                        <th>Update</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td>{{$product['id']}}</td>
                        <td>{{$product->title}}</td>
                        <td>{{$product->description}}</td>
                        <td>
                            <form action="{{url('updatequantity', $product->id)}}" method="POST">
                                @csrf
                                <input type="number" value="{{$product->quantity}}" min="0" class="form" name="quantity">
                                <button style="background-color:#73b59e;box-shadow:0 0 20px rgba(0,0,0,0.15);" type="submit" onclick="alert('Quantity Updated Successfully')" class="btn">Update Quantity</button>
                            </form>
                        </td>
                        <td>£{{$product->price}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </section>

        <section class="orders">
            <h2>All Orders from Users</h2>
            <table class="content-table">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>User ID</th>
                        <th>Product ID</th>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Order Date</th>
                        <th>Email Address</th>
                        <th>Full Name</th>
                        <th>House Number</th>
                        <th>Address</th>
                        <th>Post Code</th>
                        <th>Status</th>
                        <th>Update Status</th>
                    </tr>
                </thead>
                <tbody>
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
                        <td>
                            <form action="{{url('updateStatus', $order->id)}}" method="POST">
                                @csrf
                                <select id="order_status" name="newStatus">
                                    <option value="Placed">Placed</option>
                                    <option value="Dispached">Dispached</option>
                                    <option value="Delivered">Delivered</option>
                                </select>
                                <button style="background-color:#73b59e;box-shadow:0 0 20px rgba(0,0,0,0.15);" type="submit" onclick="alert('Order Status Changed Successfully')" class="btn">Update Status</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </section>

        <section class="queries">
            <h2>Customers' Queries</h2>
            <table class="content-table">
                <thead>
                    <tr>
                        <th>Query ID</th>
                        <th>Email</th>
                        <th>Full Name</th>
                        <th>Message</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($queries as $query)
                    <tr>
                        <td>{{$query['id']}}</td>
                        <td>{{$query['email']}}</td>
                        <td>{{$query['name']}}</td>
                        <td>{{$query['query']}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    </main>
</div>
    @include('nav&footer/footer')

</body>

</html>


