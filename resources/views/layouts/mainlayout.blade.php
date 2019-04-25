<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
@include('layouts.partials.head')
</head>
<body>
@include('layouts.partials.nav')
@include('layouts.partials.header')
@yield('content')
@include('layouts.partials.footer')
@include('layouts.partials.footer-scripts')
 </body>
</html>