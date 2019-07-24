@extends('master')
@section('content')
<div class="col-sm-3 col-md-3"></div>

<div class="col-sm-6 col-md-6 col-xs-12" style="background-color: #eceeef;padding:0px;">
	<div class="col-sm-12 col-md-12 col-xs-12" style="background-color:#3c7ee6;padding:10px;margin-top:5px">
		<h2 style="margin:0px;color:white">EDIT USER INFORMATION </h2>
		
		
	</div>
	<form style="padding:15px;padding-top:25px;" action="{{ route('update')}}" method="POST">
    {{ csrf_field() }}
  <div class="form-group row">
  	<div class="col-sm-1"></div>
    <label for="inputEmail3" class="col-sm-3 col-form-label">User Name</label>
    <div class="col-sm-7">
      <input type="text" class="form-control"  name="name" value="{{ $userinfo->name}}">
    </div>
  </div>
  <div class="form-group row">
  	<div class="col-sm-1"></div>
    
    <div class="col-sm-7">
      <input type="hidden" class="form-control" name="password" value="{{ $userinfo->password}}">
      <input type="hidden" class="form-control" name="id" value="{{ $userinfo->id}}">
    </div>
  </div>
  <div class="form-group row">
  	<div class="col-sm-1"></div>
    <label for="inputEmail3" class="col-sm-3 col-form-label">Email ID</label>

    <div class="col-sm-7">
      <input type="email" class="form-control"  name="email" value="{{ $userinfo->email}}">
    </div>
  </div>
  
  @php
  $date=explode('-',$userinfo->birthday);

  @endphp

  <div class="form-group row">
  	<div class="col-sm-1"></div>
    <label for="inputEmail3" class="col-sm-3 col-form-label">Date of Birth</label>
    <div class="col-sm-2">
      <input type="number" class="form-control" name="day"  value="{{ $date[0]}}">
    </div>
    <div class="col-sm-2">
      <input type="number" class="form-control" name="month" value="{{ $date[1]}}">
    </div>
    <div class="col-sm-3">
      <input type="number" class="form-control" name="year" value="{{ $date[2]}}">
    </div>

  </div>
  <div class="form-group row">
  	<div class="col-sm-1"></div>
    <label for="inputEmail3" class="col-sm-3 col-form-label">City</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" name="city" value="{{ $userinfo->city}}">
    </div>
  </div>
  <div class="form-group row">
  	<div class="col-sm-1"></div>
    <label for="inputEmail3" class="col-sm-3 col-form-label">Country</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" name="country" value="{{ $userinfo->country}}">
    </div>
  </div>
  
  <div class="form-group row">
  	<div class="col-sm-4"></div>
    <div class="col-sm-8">
      <input type="submit" class="btn btn-primary col-sm-6" value="UPDATE" >
      <a href="{{ route('home')}}" class="btn btn-danger col-sm-4" style="border-radius: 0px;">Cancel</a>
    </div>
  </div>
</form>
</div>
@endsection