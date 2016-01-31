<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>Laravel Ajax CRUD Example</title>

    <!-- Load Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2>Laravel Ajax ToDo App</h2>
   
<div class="form-group">
      {!!Form::open()!!}
              {!!Form::label('genre','Nombre: ')!!}
    {!!Form::text('genre',null,['id'=>'genere','class'=>'form-control','placeholder'=>'Insert data'])!!}
       {!!Form::close()!!}
        </form>
    </div>
    </div>
    <meta name="_token" content="{!! csrf_token() !!}" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
   <script type="text/javascript">
        $(document).ready(function(){
            $('#getRequest').click(function(){
               $.get('getRequest',function (data) {
                  console.log(data);
               });
            });
        });
   </script>
</body>
</html>