 @extends('home')

@section('content')

<h1>Add new Announcement <a href="/admin/announcement/add"><i class="fa fa-upload" aria-hidden="true"></i></a></h1>
<div class="line"></div> 
@include('includes.admin_first')
<body>

<table>
  <tr>
    <th>Title</th>
    <th>Content</th>
    <th>Date</th>
    <th></th>
    <th></th>
  </tr>

  @foreach($data as $data)
  <tr>
    <td>{{$data->title}}</td>
    <td>{{$data->content}}</td>
    <td>{{$data->date}}</td>
      <td><a href="/admin/announcement/update/{{$data->id}}"><button type="button" class="btn btn-primary">Update</button></a></td>
  <td><a href="/admin/announcement/delete/{{$data->id}}"><button type="button" class="btn btn-danger">Delete</button></a></td>
      </tr>

  @endforeach

</table>

</body>

@endsection