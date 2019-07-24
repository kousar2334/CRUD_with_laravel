@extends('master')
@section('content')
<div class="col-sm-3 col-md-3"></div>

<div class="col-sm-6 col-md-6 col-xs-12" style="background-color: #eceeef;padding:0px;">
	<div class="col-sm-12 col-md-12 col-xs-12" style="background-color:#3c7ee6;padding:10px;margin-top:5px">
		<h2 style="margin:0px;color:white">USER REGISTRATION FORM</h2>
		<p style="color:white;">Register here to becoame a member of our website</p>
		
	</div>
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
	<form data-parsley-validate style="padding:15px;padding-top:25px;" action="{{ route('store')}}" method="POST" >
    {{ csrf_field() }}
  <div class="form-group row">
  	<div class="col-sm-1"></div>
    <label for="inputEmail3" class="col-sm-3 col-form-label">User Name</label>
    <div class="col-sm-7">
      <input type="text" class="form-control"  name="name" required="">
    </div>
  </div>
  <div class="form-group row">
  	<div class="col-sm-1"></div>
    <label for="inputEmail3" class="col-sm-3 col-form-label">Password</label>
    <div class="col-sm-7">
      <input type="password" class="form-control" name="password" required="">
    </div>
  </div>
  <div class="form-group row">
  	<div class="col-sm-1"></div>
    <label for="inputEmail3" class="col-sm-3 col-form-label">Email ID</label>

    <div class="col-sm-7">
      <input type="email" class="form-control"  name="email" required="" unique="">
    </div>
  </div>
  <div class="form-group row">
  	<div class="col-sm-1"></div>
    <label for="inputEmail3" class="col-sm-3 col-form-label">Date of Birth</label>
    <div class="col-sm-2">
      <input type="number" class="form-control" name="day" placeholder="dd" Min="1" Max="31" Minlength="1" Maxlength="2">
    </div>
    <div class="col-sm-2">
      <input type="number" class="form-control" name="month" placeholder="mm" Min="1" Max="12" Minlength="1" Maxlength="2">
    </div>
    <div class="col-sm-3">
      <input type="number" class="form-control" name="year" placeholder="yyyy"  Minlength="4" Maxlength="4">
    </div>

  </div>
  <div class="form-group row">
  	<div class="col-sm-1"></div>
    <label for="inputEmail3" class="col-sm-3 col-form-label">City</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" name="city" required="">
    </div>
  </div>
  <div class="form-group row">
  	<div class="col-sm-1"></div>
    <label for="inputEmail3" class="col-sm-3 col-form-label">Country</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" name="country" required="">
    </div>
  </div>
  <div class="form-group row" style="margin-bottom: 0px;">
     <div class="col-sm-4"></div>
    <div class="col-sm-7">
     <p style="color:#047082;margin-bottom: 0px;">Terms & condition</p>
     <p style="font-size:12px;">Agreed and content to our <a style="color:red;text-decoration:underline;">Terms of Service</a> and End User License Agreement</p>
    </div>
  </div>
  <div class="form-group row">
     <div class="col-sm-4"></div>
    <div class="col-sm-7">
     
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="terms" id="inlineRadio1" value="1" checked="">
        <label class="form-check-label" for="inlineRadio1">I Agree</label>
        </div>
        <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="terms" id="inlineRadio2" value="0">
        <label class="form-check-label" for="inlineRadio2">I Do Not Agree</label>
      </div>
    </div>
  </div>


  <div class="form-group row">
  	<div class="col-sm-4"></div>
    <div class="col-sm-8">
      <input type="submit" class="btn btn-primary col-sm-10 col-xs-12" value="CREATE NEW ACCOUNT" >
    </div>
  </div>
</form>
</div>
<div class="col-sm-3 col-md-3"></div>

@endsection