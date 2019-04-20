<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>



<div class="row">

    <div class="col-md-8 offset-2">

        <h2>contact form</h2>
        {!! Form::open(['url' => 'contact/store']) !!}


        {{ Form::text('name', '', array('class'=>'form-control','placeholder'=>'enter your name','requred'))}}
        {{ Form::text('mobile', '', array('class'=>'form-control','placeholder'=>'mobile','requred'))}}
        {{ Form::text('address', '', array('class'=>'form-control','placeholder'=>'address','requred'))}}



        {{Form::submit('save',['class'=>'btn btn-primary'])}}

        {!! Form::close() !!}

        <!doctype html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport"
                  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
            <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
                  integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <title>Document</title>
        </head>
        <body>



        <div class="row">

            <div class="col-md-12">


<table class="table table-stripped">
    <tr>

    <th>id</th>
    <th>name</th>
    <th>mobile</th>
    <th>address</th>
    <th>added at</th>
    <th>action</th>
    </tr>


                @foreach($contact as $contact)
               <tr>
                   <td>{{$contact->id}}</td>
                   <td>{{$contact->name}}</td>
                   <td>{{$contact->mobile}}</td>
                   <td>{{$contact->address}}</td>
                   <td>{{$contact->created_at}}</td>
                   <td></td>

               </tr>

                    @endforeach
</table>
 </div>
</div>





</body>
</html>
