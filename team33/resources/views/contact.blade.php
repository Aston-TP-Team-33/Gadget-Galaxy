<!-- <link href="{{ asset('css/app.css?v=').time()}}" rel="stylesheet" type="text/css"> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css?v=').time()}}" rel="stylesheet" type="text/css">
    <title>Contact Us</title>
</head>
<body>
    @include('nav&footer/nav')

    <h1>Contact Us</h1>

    <form method="POST" action="{{ route('contact.send') }}">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
        </div>

        <div>
            <label for="query">Query:</label>
            <textarea name="query" id="query" required></textarea>
        </div>

        <button type="submit">Send</button>
    </form>

    @include('nav&footer/footer')
</body>
</html>