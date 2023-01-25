<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('./frontend/css/styles.css')}}">
    <title>Document</title>
</head>
<body>

    @include('frontend_layout.header')

    @yield('content')

    @include('frontend_layout.footer')
    
</body>
</html>