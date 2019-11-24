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
<div class="country-header">
  <strong class="country-title">{{$page_name }}</strong>
  <a href="{{ url('country/create') }} " class="btn btn-primary">Create</a>
</div>
<div class="country-body">
    <table id="bootstrap-data-table" class="table table-striped table-bordered">
     <thead>
        <th>#</th>
        <th>Name</th>
        <th>Code</th>
        <th>Currency</th>
        <th>Phone Extension</th>
        <th>Option</th>
     </thead>
     <tbody>

     @foreach($data as $i=>$row)
      <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $row->name }}</td>
        <td>{{ $row->code }}</td>
        <td>{{ $row->currency }}</td>
        <td>{{ $row->phone_extension }}</td>
        <td>
          <a href="{{ url('/country/edit/'.$row->id) }}" class="btn btn-primary">Edit</a>
          {{ Form::open(['method'=>'DELETE','url'=>['/country/delete/'.$row->id],'style'=>'display:inline']) }}
          {{ Form::submit('Delete',['class'=>'btn btn-danger']) }}
        </td>
      </tr>
      @endforeach
     </tbody>
    </table>
    </div>
</body>
</html>