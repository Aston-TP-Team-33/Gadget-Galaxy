<!-- <link href="{{ asset('css/app.css?v=').time()}}" rel="stylesheet" type="text/css"> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css?v=').time()}}" rel="stylesheet" type="text/css">
    <link rel="icon" href="images/icon_logo.svg">
    <title>Product Page</title>


</head>

<body class="product-page">
    @include('nav&footer/nav')
    <form method="GET" action="{{url('searchProduct')}}" role="search">
        <input type="search" name="search" value="" placeholder="Search Product">
        <button type="submit">Search</button>
    </form>
    
    <section class="product-page-space">
        <!-- <img src="{{asset('primg/Spacebackground2.gif')}}" style="background-size: cover;
  background-position: center;"> -->
        <h1 class="product-page-header">
            Searched Product
        </h1>
    </section>

    <div class="product-container">

        @foreach($retProduct as $product) <!-- 1 -->
        <div class="product">
            <img src="{{url($product->image)}}" alt="" class="product-image">
            <!--  <img width="200px" src="images/facebook.png" alt="product image"> -->
            <h2 class="product-title">{{$product->title}}</h2>
            <p class="product-desc">Description: {{$product->description}}</p>
            <p2 class="product-quantity">Quantity: {{$product->quantity}}</p2>
            <p3 class="product-price">Price: £{{$product->price}}</p3>

            <form action="{{url('home',$product->id)}}" method="POST">
                @csrf
                <input type="number" value="1" min="1" max="{{$product->quantity}}" class="product-quantity" name="quantity">

                <button type="submit" onclick="alert('Basket Updated Successfully')" class="product-button">Add to Basket</button>


            </form>
        </div>
        @endforeach


        <!-- <form action="{{route('product.category',['category'=>'smartphones'])}}" method="GET">
        <button type="submit">Smartphone</button>
     </form> -->
    </div>


    @include('nav&footer/footer')
</body>

</html>