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

<body>
    @include('nav&footer/nav')

    <h1>Products Page</h1>
    <div class="product-container">
    
    @foreach($storeData as $product)    <!-- 1 -->
        <div class="product">
        <img src="{{$product->image}}" alt="">  
        <!--  <img width="200px" src="images/facebook.png" alt="product image"> -->
        <h2>product title: {{$product->title}}</h2> 
        <p>Description: {{$product->description}}</p>
        <p2>Quantity: {{$product->quantity}}</p2>
        <p3>Price: £{{$product->price}}</p3>

        <form action="{{url('home',$product->id)}}" method="POST">
      @csrf
      <input type= "number" value="1" min="1" max="{{$product->quantity}}" class="selectQuantity" name="quantity">

      <button type="submit" onclick="alert('Basket Updated Successfully')" class="btn">Add to Basket</button>

      </form>
    </div>
     @endforeach
</div>

    @include('nav&footer/footer')
</body>

</html>