<!doctype html>
<html>
<head>
    <link href="/css/app.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    @yield('content')
    <script src="/js/app.js"></script>
</body>
</html>