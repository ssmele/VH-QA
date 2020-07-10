<html>
    <head>
        <link href="/css/app.css" rel="stylesheet">
        <title>@yield('title')</title>
    </head>
    <body>
        <script src="/js/app.js"></script>
        <div class="container">
            <h1 class="text-lg-center my-5">Question/Answers!</h1>
            <hr/>
            @yield('content')
        </div>
    </body>
</html>
