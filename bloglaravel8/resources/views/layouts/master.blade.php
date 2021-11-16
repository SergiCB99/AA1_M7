<html>
<head>
    <title>Blog Laravel - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="{{ URL::asset('/css/style.css'); }}" rel="stylesheet" type="text/css"/>

</head>
<body>
@include('layouts.navbar')

<div class="container">
    @yield('content')
</div>

@include('layouts.footer')
</body>
</html>
