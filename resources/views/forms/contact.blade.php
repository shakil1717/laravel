<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<h2>hi</h2>

<div class="row">

    <div class="col-md-8 offset-2">

        {!! Form::open(['url' => 'contact']) !!}


        {{ Form::text('name', '', array('class'=>'form-control','placeholder'=>'enter your name','requred'))}}
        {{ Form::text('name', '', array('class'=>'form-control','placeholder'=>'mobile','requred'))}}
        {{ Form::text('name', '', array('class'=>'form-control','placeholder'=>'address','requred'))}}



        {{Form::submit('save',['class'=>'btn btn-primary'])}}

        {!! Form::close() !!}
    </div>

</div>





</body>
</html>
