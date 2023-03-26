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
    <p>Gadget Galaxy is the one stop shop for all things tech related. We specialize in providing our customers with the latest and greatest electronics. If you're looking for a new smartphone, laptop or gaming console, we've got you covered.</p>
  </div>

  <div class="about-us">
    <h2>Our Team</h2>
    <p>Our wonderful team consists of tech enthusiasts who are passionate about providing the best possible experience for our customers. We pride ourselves on our excellent customer service and our commitment to providing high-quality products at competitive prices.</p>
  </div>

  <div class="about-us">
    <h2>Our Mission</h2>
    <p>At Gadget Galaxy, we believe that technology should be accessible to everyone and has the power to transform lives. We're committed to providing our customers with gadgets and electronics at affordable prices.</p>
  </div>

  <div class="about-us">
    <h2>Our Values</h2>
    <ul>
      <li>Customer satisfaction: We're dedicated to providing our customers with the best possible experience.</li>
      <li>Quality: We only sell high-quality products from reputable brands.</li>
      <li>Affordability: We believe that technology should be accessible to everyone, so we offer competitive prices.</li>
      <li>Integrity: We're committed to conducting business with honesty and transparency.</li>
    </ul>
  </div>

</div>



    @include('nav&footer/footer')
</body>

</html>