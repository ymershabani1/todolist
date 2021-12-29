<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Todos List</title>
</head>
<body>
@include('inc.navbar')
@include('inc.messages')
<div class="container">
     @yield('content')
</div>
</body>
<footer class="text-center">Copyright 2021</footer>
</html>
