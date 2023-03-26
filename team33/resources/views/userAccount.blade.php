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

<body class="my-account">
    @include('nav&footer/nav')

    <h1>My Account</h1>

    <section class="products">
        <div class="container">
            <br>
            <div class="row">
                <h2>My Basket</h2>
            </div>
            <table>
                <br>
                <tr>
                    <td class="table-header">&nbsp Product &nbsp</td>
                    <td class="table-header">&nbsp Quantity &nbsp</td>
                    <td class="table-header">&nbsp Price &nbsp</td>
                    <td class="table-header">&nbsp Update &nbsp</td>
                    <td class="table-header">&nbsp Remove &nbsp</td>
                </tr>
                @foreach($basket_orders as $basket)
                <tr>
                    <td>&nbsp{{$basket['product_name']}}</td>

                    <!--basket view-->
                    <form action="{{url('update',$basket->id)}}" method="POST">
                        @csrf

                        <td>
                            <input type="number" value="{{$basket['quantity']}}" min="1" class="form" name="quantity">
                        </td>
                        <td>£{{$basket['price']}}</td>

                        <!--update button-->
                        <td>
                            <button type="submit" onclick="alert('Quantity Updated Successfully')" class="btn">Update</button>
                        </td>
                    </form>

                    <!--Remove Button-->

                    <form action="{{url('remove',$basket->id)}}" method="POST">
                        @csrf

                        <td>
                            <button type="submit" onclick="alert('Product Removed')" class="btn">Remove</button>
                        </td>
                    </form>

                    <!--end form-->

                </tr>
                @endforeach
            </table>

            <table>
                <tr>
                <td><h3 class="total-text">Total = &nbsp</td>
                <td>£{{$total}}</td>
                </tr>
            </table>
        </div>
        <br>

        <!--Delivery Address take input-->
        <div class="container">
            <br>
            <div class="row">
                <h2> Checkout </h2>
            </div>

            <table>
                <tr>
                    <td class="table-header">Full Name</td>
                    <td class="table-header">House Number</td>
                    <td class="table-header">Street Address</td>
                    <td class="table-header">PostCode</td>
                    <td class="table-header">City</td>
                    <td class="table-header">Card Number</td>
                    <td class="table-header">Expiry Date</td>
                    <td class="table-header">CCV</td>
                    <td class="table-header">Checkout</td>
                </tr>

                <form action="{{url('checkout')}}" method="POST">
                    @csrf
                    <tr>
                        <td><input type="text" value="" class="form" name="name"></td>
                        <td><input type="text" value="" class="form" name="house_number"></td>
                        <td><input type="text" value="" class="form" name="street_address"></td>
                        <td><input type="text" value="" class="form" name="post_code"></td>
                        <td><input type="text" value="" class="form" name="city"></td>
                        <td><input type="text" value="" class="form" name="card_number"></td>
                        <td><input type="date" value="" class="form" name="expiry_date"></td>
                        <td><input type="password" value="" class="form" name="cvv"></td>
                        <br>

                        <!--Submit Order-->
                        <td>
                            <button type="submit" onclick="alert('Thank You For Shopping with Us!')" class="btn">Checkout</button>
                        </td>
                    </tr>
                </form>
            </table>
        </div>
        <br>
        <!--Show user's orders-->

        <div class="container">
            <br>
            <div class="row">
                <h2>My Order History</h2>
            </div>
            <table>
                <tr>
                    <td class="table-header">&nbsp Product &nbsp</td>
                    <td class="table-header">&nbsp Quantity &nbsp</td>
                    <td class="table-header">&nbsp Price &nbsp</td>
                    <td class="table-header">&nbsp Status &nbsp</td>
                    <td class="table-header">&nbsp Order Date: &nbsp</td>
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
    </section>

    @include('nav&footer/footer')
</body>

</html>

