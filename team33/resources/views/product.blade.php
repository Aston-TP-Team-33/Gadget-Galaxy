<!-- <link href="{{ asset('css/app.css?v=').time()}}" rel="stylesheet" type="text/css"> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css?v=').time()}}" rel="stylesheet" type="text/css">
    <title>Product Page</title>


</head>

<body class="product-page">
    @include('nav&footer/nav')
    <section class="product-page-space" style="background-image: url('images/Spacebackground2.gif');">
        <h1 class="product-page-header">Products Page</h1>
</section>
    <div class="product-container">
        @foreach($storeData as $product)    <!-- 1 -->
            <div class="product">
                <img src="{{$product->image}}" alt="" class="product-image">  
                <!--  <img width="200px" src="images/facebook.png" alt="product image"> -->
                <h2 class="product-title"> {{$product->title}}</h2> 
                <p class="product-desc"> {{$product->description}}</p>
                <p2 class="product-quantity">Quantity: {{$product->quantity}}</p2>
                <p3 class="product-price">Price: £{{$product->price}}</p3>

                <form action="{{url('home',$product->id)}}" method="POST">
            @csrf
            <input type= "number" value="1" min="1" max="{{$product->quantity}}" class="product-quantity" name="quantity">

            <button type="submit" onclick="alert('Basket Updated Successfully')" class="product-button">Add to Basket</button>

            </form>
        </div>
        @endforeach
</div>

    @include('nav&footer/footer')
</body>

</html>