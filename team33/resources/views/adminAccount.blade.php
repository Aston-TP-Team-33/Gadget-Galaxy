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

    <h1>Homepage</h1>

    @include('nav&footer/footer')
</body>

</html>