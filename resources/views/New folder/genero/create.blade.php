<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
	
	<link rel="shortcut icon" href="{{URL::to('/')}}/images/favicon.ico" type="image/x-icon">
<link rel="icon" href="{{URL::to('/')}}/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{URL::to('/')}}/libraries/theme/bootstrap.min.css">
    <script src="{{URL::to('/')}}/libraries/theme/jquery.js"></script>
    <script src="{{URL::to('/')}}/libraries/theme/bootstrap.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/libraries/css/footer.css"/>

@yield('head')
</head>
<body >

<div class="container">
<div class="row"> 
   <div class="col-md-12">
   <div class="form-group">
       {!!Form::open()!!}
               
        <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
        {!!Form::label('genre','Nombre: ')!!}
    {!!Form::text('genre',null, ['id'=>'genre','class'=>'form-control', 'placeholder' => 'Ingresa el nombre'])!!}
        {!!link_to('#', $title='Registrar', $attributes = ['id'=>'registro', 'class'=>'btn btn-primary'], $secure = null)!!}
       {!!Form::close()!!}
       </div>
   </div>

    </div>
    
</div>


</footer>
</body>
</html>
