<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

{{ Form::model($country,['route' => ['country-update',$country->id],'method'=>'put']) }}
    <div class="form-group">
    {{ Form::label('name', 'Name', array('class'=>'conrtrol-label mb-1'))}}
    {{ Form::text('name',null,['class'=>'form-control','id'=>'name'] ) }}
    </div>
    <div class="form-group">
    {{ Form::label('code', 'Code', array('class'=>'conrtrol-label mb-1'))}}
    {{ Form::text('code',null,['class'=>'form-control','id'=>'code'] ) }}

    </div>
    <div class="form-group">
    {{ Form::label('currency', 'Currency', array('class'=>'conrtrol-label mb-1'))}}
    {{ Form::text('currency',null,['class'=>'form-control','id'=>'currency'] ) }}

    </div>
    <div class="form-group">
    {{ Form::label('phone_extension', 'Phone extension', array('class'=>'conrtrol-label mb-1'))}}
    {{ Form::text('phone_extension',null,['class'=>'form-control','id'=>'phone_extension'] ) }}

    </div>
    <div class="form-group">
    <button id="button" type="submit" class="btn btn-primary">Submit</button>
    </div>
</body>
</html>