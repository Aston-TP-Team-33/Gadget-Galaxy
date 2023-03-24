<!-- <link href="{{ asset('css/app.css?v=').time()}}" rel="stylesheet" type="text/css"> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css?v=').time()}}" rel="stylesheet" type="text/css">
    <link rel="icon" href="images/icon_logo.svg">
    <title>About Us</title>
</head>

<body>
    @include('nav&footer/nav')

    <h1>About Us</h1>
<div class="about-us-container">

  <div class="about-us">
    <h2>Our Story</h2>
    <pGadget Galaxy is the one stop shop for all things tech related. We specialize in providing our customers with the latest and greatest electronics. If you're looking for a new smartphone, laptop or gaming console, we've got you covered.</p>
  </div>

  <div class="about-us">
    <h2>Our Team</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod nulla nec congue ullamcorper. Vestibulum non mi eget augue efficitur faucibus nec quis mi. Suspendisse vel lacinia nisl. </p>
    <p>Mauris et varius velit, sit amet dictum enim. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc auctor turpis et dolor maximus efficitur. Vivamus malesuada nisi vel sem venenatis sollicitudin.</p>
  </div>

  <div class="about-us">
    <h2>Our Mission</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod nulla nec congue ullamcorper. Vestibulum non mi eget augue efficitur faucibus nec quis mi. Suspendisse vel lacinia nisl. </p>
  </div>

  <div class="about-us">
    <h2>Our Values</h2>
    <ul>
      <li>Lorem ipsum dolor sit amet</li>
      <li>Consectetur adipiscing elit</li>
      <li>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</li>
      <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
    </ul>
  </div>

</div>



    @include('nav&footer/footer')
</body>

</html>