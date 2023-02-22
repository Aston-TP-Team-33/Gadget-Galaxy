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
    <!-- Hero section -->
    <section class="hero" style="background-image: url('images/Galaxy.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Welcome to Gadget Galaxy</h1>
                    <p>Get the latest smartphones, laptops, tablets, TVs, and cameras at competitive prices</p>
                    <div class="text-center"><a href="#" class="btn btn-primary">Shop Now</a></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured products section -->
    <section class="featured-products">
    <div class="container">
        <h2>Featured Products</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="images/iphone14pro.jpg" alt="Product 1">
                    <div class="card-body">
                        <h5 class="card-title">Iphone 14 Pro Max</h5>
                        <p class="card-text">£1149</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="images/Xps13.png" alt="Product 2">
                    <div class="card-body">
                        <h5 class="card-title">Dell XPS 13</h5>
                        <p class="card-text">£999</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="images/NikonD750.jpg" alt="Product 3">
                    <div class="card-body">
                        <h5 class="card-title">Nikon D750</h5>
                        <p class="card-text">$£999</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="images/product-4.jpg" alt="Product 4">
                    <div class="card-body">
                        <h5 class="card-title">LG 55" OLED TV</h5>
                        <p class="card-text">$1,499</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="images/product-5.jpg" alt="Product 5">
                    <div class="card-body">
                        <h5 class="card-title">Dell XPS 13</h5>
                        <p class="card-text">$1,199</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="images/product-6.jpg" alt="Product 6">
                    <div class="card-body">
                        <h5 class="card-title">Nikon D850</h5>
                        <p class="card-text">$3,299</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    <!-- Categories section -->
    <section class="categories">
        <div class="container">
            <h2>Shop by Category</h2>
            <div class="row">
                <div class="col-md-3">
                    <a href="#">Smartphones</a>
                </div>
                <div class="col-md-3">
                    <a href="#">Laptops</a>
                </div>
                <div class="col-md-3">
                    <a href="#">Tablets</a>
                </div>
                <div class="col-md-3">
                    <a href="#">TVs</a>
                </div>
                <div class="col-md-3">
                    <a href="#">Cameras</a>

    </section>               

    @include('nav&footer/footer')
</body>

</html>