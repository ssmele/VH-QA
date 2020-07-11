<html>
<head>
    <link href="/css/app.css" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body>
<script src="/js/app.js"></script>
<div class="container col-lg-9 offset-lg-1 my-3">
    @include('navbar')
    @yield('content')
</div>
</body>
</html>
