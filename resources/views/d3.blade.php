<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

{!! Charts::assets() !!}

<!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="/bootstrap/dist/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/bootstrap/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="/css/app.css">

    <!-- Styles -->
</head>
<body>

<center><span style="font-size: 40px;font-weight: 900;color: white">
        Welcome !</b>
    </span>
</center>

<div class="container" style="padding: 30px ;background-color: white">


    <div class="container"><h2>Statics and Analytics</h2></div>


    {!! $c->render() !!}
    <div style="float: left;">
        {!! $a[0]->render() !!}
    </div>
    <div>
        {!! $a[1]->render() !!}
    </div>

</div>

<script src="/js/jquery.min.js"></script>
<script src="/bootstrap/dist/js/bootstrap.min.js"></script>

</body>
</html>
