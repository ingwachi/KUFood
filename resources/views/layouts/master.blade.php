<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KU Food Blog - blog for food lovers </title>
    <link rel="stylesheet" href="{{ url('css/bootstrap-4.4.1/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('css/mystyle.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Kanit|Lemonada|Poppins&display=swap" rel="stylesheet">
    @yield('style')
</head>
<body>
@include('layouts.menu')

<div>
    @yield('content')
</div>

@yield('script')
</body>
</html>
