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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body class="product-page">
    @include('nav&footer/nav')
    



  <section class="hero" style="background-image: url('images/Spacebackground2.gif');">
        <section class="product-page-space">
            <!-- <img src="{{asset('primg/Spacebackground2.gif')}}" style="background-size: cover;
    background-position: center;"> -->
            <h1 class="product-page-header">
                <?php
                $pTitle = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
                $getTitle = array_pop($pTitle);
                if ($getTitle == 'smartphones') {
                    echo ('Smartphones');
                } else if ($getTitle == 'laptops') {
                    echo ('Laptops');
                } else if ($getTitle == 'tablets') {
                    echo ('Tablets');
                } else if ($getTitle == 'tvs') {
                    echo ('TVs');
                } else if ($getTitle == 'cameras') {
                    echo ('Cameras');
                } else {
                    echo ('Products Page');
                }
                ?>
            </h1>
        </section>
    </section>
    <form method="GET" action="{{url('searchProduct')}}" role="search" class="product-searchbar-container">
        <input type="search" name="search" value="" placeholder="Search Product" class="product-searchbar">
        <button type="submit" class="product-searchbar-btn fa fa-search" style="font-size: 2.5em;"></button>



    </form>

    <div class="product-container">

        @foreach($storeData as $product) <!-- 1 -->
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
