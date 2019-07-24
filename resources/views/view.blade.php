@extends('master')
@section('content')
<div class="col-sm-3 col-xs-12" style="margin-top:30px;"></div>
<div class="col-sm-6 col-xs-12" style="margin-top:30px;">
	<h3>User Information</h3>
	<hr>
<table class="table table-bordered">
  <tbody>
   
    <tr>
      <th>Name</th>
      <td>{{ $userinfo->name }}</td>
      
    </tr>
    <tr>
      <th>Email</th>
      <td>{{ $userinfo->email }}</td>
      
    </tr>
    <tr>
      <th>Date of Birth</th>
      <td>{{ $userinfo->birthday }}</td>
      
    </tr>
    <tr>
      <th>City</th>
      <td>{{ $userinfo->city }}</td>
      
    </tr>
    <tr>
      <th>Country</th>
      <td>{{ $userinfo->country }}</td>
      
    </tr>
    <tr>
    	<th></th>
      <td><a href="{{ route('home')}}" class="btn btn-success col-sm-4" style="border-radius: 0px;">Back</a></td>
     
      
    </tr>
   
    
  </tbody>
</table>	

</div>
@endsection