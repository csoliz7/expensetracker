<!doctype html>
<html class="no-js" lang="en">
<head>
@include('partials.head')
</head>


<body>

<div class="row">
    <div class="medium-12 columns medium-centered">
@yield('content')
</div>
</div>

<div class="row">
    <div class="medium-12 columns medium-centered">
<footer>

@include('partials.footer')

</footer>

</div>
</div>

</body>
</html>
