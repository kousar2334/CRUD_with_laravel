@extends('master')
@section('content')
<div class="col-sm-12 col-xs-12" style="margin-top:30px;">
	<h3>User Information</h3>
	<hr>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Country</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @php $i=0;@endphp
    @foreach($userinfo as $user)
    @php $i++; @endphp
    <tr>
      <th scope="row">{{ $i}}</th>
      <td>{{ $user->name }}</td>
      <td>{{ $user->email }}</td>
       <td>{{ $user->country }}</td>
      <td >
        <a href="{{ route('view',$user->id)}}"class="btn btn-info">View</a>
        <a href="{{ route('edit',$user->id)}}" class="btn btn-primary">Edit</a>
        <form action="{{route('delete',$user->id)}}" method="post">
          {{ csrf_field()}}
          <input type="submit" value="Delete" class="btn btn-danger" style="float:right;margin-top:-40px;">
          
        </form>
        

      </td>
    </tr>
   
    @endforeach
  </tbody>
</table>	

</div>
@endsection