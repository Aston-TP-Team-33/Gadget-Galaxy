<!DOCTYPE html>
<html lang="en">

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="{{ asset('css/app.css?v=').time()}}" rel="stylesheet" type="text/css">
<link rel="icon" href="images/icon_logo.svg">
<title>Homepage</title>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  @include('nav&footer/nav')

  <!-- Hero section -->
  <section class="hero" style="background-image: url('images/Spacebackground2.gif');">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1>Welcome to Gadget Galaxy</h1>
          <p>Get the latest smartphones, laptops, tablets, TVs, and cameras at competitive prices</p>
          <div class="text-center"><a href="{{route('productsPage')}}" class="btn btn-primary">Shop Now</a></div>
        </div>
    </section>
  <!-- Featured products section -->
  <section class="featured-products">
    <div class="container">
      <h2>Featured Products</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="block">
            <img src="images/iphone14pro.jpg" alt="Product 1">
            <div class="block-body">
              <h5 class="block-title">Iphone 14 Pro Max</h5>
              <p class="block-text">£1149</p>
              <a href="{{route('productsPage')}}" class="btn btn-primary">Products Page</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="block">
            <img src="images/Xps13.png" alt="Product 2">
            <div class="block-body">
              <h5 class="block-title">Dell XPS 13</h5>
              <p class="block-text">£999</p>
              <a href="{{route('productsPage')}}" class="btn btn-primary">Products Page</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="block">
            <img src="images/NikonD750.jpg" alt="Product 3">
            <div class="block-body">
              <h5 class="block-title">Nikon D750</h5>
              <p class="block-text">£999</p>
              <a href="{{route('productsPage')}}" class="btn btn-primary">Products Page</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="block">
            <img src="images/LGoled55.jpg" alt="Product 4">
            <div class="block-body">
              <h5 class="block-title">LG 55" OLED TV</h5>
              <p class="block-text">£1,499</p>
              <a href="{{route('productsPage')}}" class="btn btn-primary">Products Page</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="block">
            <img src="images/IpadPro.jpg" alt="Product 5">
            <div class="block-body">
              <h5 class="block-title">Ipad Pro 11" 2022</h5>
              <p class="block-text">£899</p>
              <a href="{{route('productsPage')}}" class="btn btn-primary">Products Page</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="block">
            <img src="images/S22Ultra.jpg" alt="Product 6">
            <div class="block-body">
              <h5 class="block-title">Samsung Galaxy S22 Ultra</h5>
              <p class="block-text">£1249</p>
              <a href="{{route('productsPage')}}" class="btn btn-primary">Products Page</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Categories section -->
  <section class="categories">
    <div class="container">
      <h2 class="text-center mb-5">Shop by Category</h2>
      <div class="row justify-content-center">
        <div class="col-6 col-sm-4 col-md-2 mb-4 text-center">
          <form action="{{route('product.category',['category'=>'smartphones'])}}" method="GET">
            <a href="" class="drop-txt-btn">
              <button class="drop-txt-btn" type="submit">
                <img src="images/phoneicon.png" alt="Smartphones" class="img-fluid mb-2">
              </button>
            </a>
            <a href="" class="drop-txt-btn"><button class="drop-txt-btn" type="submit">Smartphones</button></a>
          </form>
        </div>

        <div class="col-6 col-sm-4 col-md-2 mb-4 text-center">
          <form action="{{route('product.category',['category'=>'laptops'])}}" method="GET">
            <a href="" class="drop-txt-btn">
              <button class="drop-txt-btn" type="submit">
                <img src="images/laptopicon.png" alt="Laptops" class="img-fluid mb-2">
              </button>
            </a>
            <a href="" class="drop-txt-btn"><button class="drop-txt-btn" type="submit">Laptops</button></a>
          </form>
        </div>

        <div class="col-6 col-sm-4 col-md-2 mb-4 text-center">
          <form action="{{route('product.category',['category'=>'tablets'])}}" method="GET">
            <a href="" class="drop-txt-btn">
              <button class="drop-txt-btn" type="submit">
                <img src="images/tableticon2.png" alt="Tablets" class="img-fluid mb-2">
              </button>
            </a>
            <a href="" class="drop-txt-btn"><button class="drop-txt-btn" type="submit">Tablets</button></a>
          </form>
        </div>

        <div class="col-6 col-sm-4 col-md-2 mb-4 text-center">
          <form action="{{route('product.category',['category'=>'tvs'])}}" method="GET">
            <a href="" class="drop-txt-btn">
              <button class="drop-txt-btn" type="submit">
                <img src="images/tvicon.png" alt="TVs" class="img-fluid mb-2">
              </button>
            </a>
            <a href="" class="drop-txt-btn"><button class="drop-txt-btn" type="submit">TVs</button></a>
          </form>
        </div>

        <div class="col-6 col-sm-4 col-md-2 mb-4 text-center">
          <form action="{{route('product.category',['category'=>'cameras'])}}" method="GET">
            <a href="" class="drop-txt-btn">
              <button class="drop-txt-btn" type="submit">
                <img src="images/cameraicon.png" alt="Cameras" class="img-fluid mb-2">
              </button>
            </a>
            <a href="" class="drop-txt-btn"><button class="drop-txt-btn" type="submit">Cameras</button></a>
          </form>

        </div>
      </div>
    </div>
  </section>

 @include('nav&footer/footer')
