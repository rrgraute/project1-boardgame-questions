<!doctype html>
<html>
<head>
    <link href="/css/app.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
</head>
<body>
    @yield('content')
    <script src="/js/app.js"></script>
</body>
</html>