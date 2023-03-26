<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css?v=').time()}}" rel="stylesheet" type="text/css">
  <title>Contact Us</title>

  <style>
    .contact-form {
      width: 90%; 
      max-width: 800px;
      box-sizing: border-box;
      padding: 50px;
      background-color: #f5f5f5;
      border: 1px solid #ddd;
      border-radius: 5px;
      margin-top: 20px; 
    }

    h1 {
      text-align: center;
      color: black;
    }

    .form-container{
      display: flex;
      justify-content: center;
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-weight: 600;
      color: black; 
    }

    input[type="text"],
    input[type="email"],
    textarea {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border-radius: 5px;
      border: none;
      background-color: #eee;
      color: black; 
    }

    input[type="submit"] {
      display: inline-block;
      padding: 10px 20px;
      background-color: #000;
      color: #fff;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #333;
    }
  </style>
</head>

<body>
  @include('nav&footer/nav')
  <div class="form-container">
    <form action = "{{url('/contactForm')}}" class="contact-form">
    @csrf
      <h1>Contact Us</h1>
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" placeholder="Name" class="box" name="name1" required>
      </div>
  
      <div class="form-group">
        <label for="email">Email</label>
        <input type="text" id="email" placeholder="Enter Email" class="box" name="email1" required>
      </div>
  
      <div class="form-group">
        <label for="query">Query</label>
        <textarea id="query" placeholder="Query" class="box" name="query1" required></textarea>
      </div>
  
      <button type="submit" onclick="alert('Thanks for you message)" class="btn">Send Query</button>
    </form>
  </div>

  @include('nav&footer/footer')
</body>

</html>
