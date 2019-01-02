<!doctype html>
<html lang="en">
<head>
    @include("partial._head")
</head>
<body>
@include('partial._navbar')

<div class="container">
    @yield('content')
    @include('partial._footer')
</div><!-- end of container -->
@include('partial._script')
</body>
</html>