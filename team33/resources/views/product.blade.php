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

    <div class="product">
        <img width="200px" src="images/facebook.png" alt="product image">
        <h2>product title </h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
        <p2>cost </p2>
        <p3>category</p3>
        <form id="item" method="post"> </form>
    </div>

    <div class="product">
        <img width="200px" src="images/facebook.png" alt="product image">
        <h2>product title </h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
        <p2>cost </p2>
        <p3>category</p3>
        <form id="item" method="post"> </form>
    </div>

    <div class="product">
        <img width="200px" src="images/facebook.png" alt="product image">
        <h2>product title </h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
        <p2>cost </p2>
        <p3>category</p3>
        <form id="item" method="post"> </form>
    </div>



</div>

    @include('nav&footer/footer')
</body>

</html>