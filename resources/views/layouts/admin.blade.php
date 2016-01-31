<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    {!!Html::style('css/bootstrap.min.css')!!}
    {!!Html::style('css/metisMenu.min.css')!!}
    {!!Html::style('css/sb-admin-2.css')!!}
    {!!Html::style('css/font-awesome.min.css')!!}
</head>

<body>

        <div id="page-wrapper">
            @yield('content')
        </div>


    

<script src="{{URL::to('/')}}/js/jquery.min.js"></script>
<script src="{{URL::to('/')}}/js/script.js"></script>
<script src="{{URL::to('/')}}/js/bootstrap.min.js"></script>
<script src="{{URL::to('/')}}/js/metisMenu.min.js"></script>
<script src="{{URL::to('/')}}/js/sb-admin-2.js"></script>

</body>

</html>
