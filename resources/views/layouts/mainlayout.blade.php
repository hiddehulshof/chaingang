
<!DOCTYPE html>
<html lang="en">
<head>
@include('layouts.partials.head')
</head>
<body>
@include('layouts.partials.nav')

@if($page == 'login')
@include('layouts.partials.header',['page' => 'login'])
 @else
 @include('layouts.partials.header')
@endif
@yield('content')
@include('layouts.partials.footer')
@include('layouts.partials.footer-scripts')
 </body>
</html>