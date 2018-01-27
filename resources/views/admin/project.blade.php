 @extends('home')

@section('content')

<h1>Add new Project Data <a href="/admin/project/add"><i class="fa fa-upload" aria-hidden="true"></i></a></h1>
<div class="line"></div> 
@include('includes.admin_first')
<body>

<table>
  <tr>
    <th>image</th>
    <th>Title</th>
    <th>Description</th>
    <th>URL</th>
    <th></th>
    <th></th>
  </tr>

  @foreach($data as $data)
  <tr>
    <td><a href="{{URL::asset($data->image)}}"><img src="{{URL::asset($data->image)}}" style="width: 25%;height: 25%"></a></td>
    <td>{{$data->title}}</td>
    <td>{{$data->description}}</td>
    <td>{{$data->url}}</td>
      <td><a href="/admin/project/update/{{$data->id}}"><button type="button" class="btn btn-primary">Update</button></a></td>
  <td><a href="/admin/project/delete/{{$data->id}}"><button type="button" class="btn btn-danger">Delete</button></a></td>
      </tr>

  @endforeach

</table>

</body>

@endsection