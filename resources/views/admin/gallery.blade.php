 @extends('home')

@section('content')

<h1>Add new photo <a href="/admin/gallery/add"><i class="fa fa-upload" aria-hidden="true"></i></a></h1>
<div class="line"></div> 
@include('includes.admin_first')
<body>

<table>
  <tr>
    <th>image</th>
    <th>Description</th>
    <th></th>
    <th></th>
  </tr>

  @foreach($data as $data)
  <tr>
    <td><a href="{{URL::asset($data->dir)}}"><img src="{{URL::asset($data->dir)}}" style="width: 25%;height: 25%"></a></td>
    <td>{{$data->description}}</td>
      <td><a href="/admin/gallery/update/{{$data->id}}"><button type="button" class="btn btn-primary">Update</button></a></td>
  <td><a href="/admin/gallery/delete/{{$data->id}}"><button type="button" class="btn btn-danger">Delete</button></a></td>
      </tr>

  @endforeach

</table>

</body>

@endsection