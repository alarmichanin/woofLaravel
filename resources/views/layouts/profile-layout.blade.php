<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{csrf_token()}}">
{{--    TODO: change to profiles ones--}}
{{--    <link rel="stylesheet" href="/less/login.css">--}}
{{--    <script src="/js/login.js"></script>--}}
    <title>@yield('title')</title>
</head>
<body>
@yield('content')
</body>
</html>