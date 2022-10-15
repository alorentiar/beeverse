<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('blueprint.cdn')
    <title>@yield('title')</title>
</head>
<body>
    @include('sweetalert::alert')
    @include('blueprint.header')
    @include('blueprint.navbar')
    @yield('content')
    @include('blueprint.footer')
</body>
</html>

<style>
    body{
        font-family: 'Poppins', sans-serif;
    }
</style>
