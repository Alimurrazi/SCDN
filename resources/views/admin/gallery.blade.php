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
    <th>Status</th>
    <th></th>
    <th></th>
  </tr>

{{--

  @foreach($user as $user)
  <tr>
    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>
    @if($user->status==0)
    <td>Normal</td>
    @else
    <td>Teacher</td>
    @endif
      <td><a href="/admin_user_update/{{$user->id}}"><button type="button" class="btn btn-primary">Update</button></a></td>
  <td><a href="/admin_user_delete/{{$user->id}}"><button type="button" class="btn btn-danger">Delete</button></a></td>
      </tr>

  @endforeach

--}}

</table>

</body>

@endsection