<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        xmp {
            white-space: pre-line;
            padding: 20px;
            background-color: #D5D4D4;
            border-radius: 3px;
            color: #000;
            font-weight: 700;
        }

        .tg {
            border-collapse: collapse;
            border-spacing: 0;
            border-color: #ccc;
        }

        .tg td {
            font-family: Arial,sans-serif;
            font-size: 14px;
            padding: 10px 5px;
            border-style: solid;
            border-width: 1px;
            overflow: hidden;
            word-break: normal;
            border-color: #ccc;
            color: #333;
            background-color: #fff;
        }

        .tg th {
            font-family: Arial,sans-serif;
            font-size: 14px;
            font-weight: 400;
            padding: 10px 5px;
            border-style: solid;
            border-width: 1px;
            overflow: hidden;
            word-break: normal;
            border-color: #ccc;
            color: #333;
            background-color: #f0f0f0;
        }

        .tg .tg-yw4l {
            vertical-align: top;
        }

    </style>
</head>
<body>
<h2>Genarate Tracking URL</h2>
<h2>Fill the form below to get tracking URL</h2>

{!! Form::open(['method'=>'POST', 'route'=>'generate','files'=>true]) !!}

<div class="form-group">
    {!! Form::label('user_id','User_ID:') !!}
    {!! Form::text('user_id',null,['class'=>'form-control']) !!}
</div>

<br/>

<div class="form-group">
    {!! Form::label('name','Recepient name:') !!}
    {!! Form::text('name',null,['class'=>'form-control']) !!}
</div>

<br/>

<div class="form-group">
    {!! Form::label('subject','subject:') !!}
    {!! Form::text('subject',null,['class'=>'form-control']) !!}
</div>

<br/>

<div class="form-group">
    {!! Form::label('email','email:') !!}
    {!! Form::text('email',null,['class'=>'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::submit('Generate', ['class'=>'btn btn-primary']) !!}
</div>

{!! Form::close() !!}




<h3>Click Generate to generate code</h3>
<p></p>
<p id="urlGen">
<?php //echo $url?>
</p>
<div>
@include ('email.report')
</div>
</body>
</html>