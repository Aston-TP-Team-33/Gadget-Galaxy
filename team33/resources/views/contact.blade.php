<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css?v=').time()}}" rel="stylesheet" type="text/css">
  <title>Contact Us</title>

  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    form {
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

  <form>
    <h1>Contact Us</h1>
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" name="name" id="name" required>
    </div>

    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" name="email" id="email" required>
    </div>

    <div class="form-group">
      <label for="query">Query</label>
      <textarea name="query" id="query" required></textarea>
    </div>

    <div class="form-group">
      <input type="submit" value="Send">
    </div>
  </form>

  @include('nav&footer/footer')
</body>

</html>
