<!-- <link href="{{ asset('css/app.css?v=').time()}}" rel="stylesheet" type="text/css"> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css?v=').time()}}" rel="stylesheet" type="text/css">
    <link rel="icon" href="images/icon_logo.svg">
    <title>Contact Us</title>
</head>
<body>
    @include('nav&footer/nav')

    <h1>Contact Us</h1>

    <form action = "{{url('/contactForm')}}" class="form-container">
   @csrf

       <label for="email">Email</label>
       <input type="text" id="email" placeholder="Enter Email" class="box" name="email1" required = "Please Insert Email">

       <label for="name">Name</label>
       <input type="text" id="name" placeholder="Name" class="box" name="name1" required = "Please Insert Name">

       <label for="query">Query</label>
       <input type="text" id="query" placeholder="Query" class="box" name="query1" required = "Please Insert Your Query">

       <button type="submit" onclick="alert('Query Sent Successfully')" class="btn">Send Message</button>
       
   </form>

    @include('nav&footer/footer')
</body>
</html>