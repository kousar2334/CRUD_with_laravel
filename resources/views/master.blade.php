<!DOCTYPE html>
<html>
<head>
	<title>Crud</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha374-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ774/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha374-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style>
    	input[type=TEXT]{
    		background-color:#eceeef;border-radius: 0px;
    	}
    	input[type=EMAIL]{
    		background-color:#eceeef;border-radius: 0px;
    	}
    	input[type=PASSWORD]{
    		background-color:#eceeef;border-radius: 0px;
    	}
      input[type=number]{
        background-color:#eceeef;border-radius: 0px;
      }
    	input[type=submit]{
    		border-radius: 0px;
    	}
    	.btn{
         border-radius: 0px;
    	}
    </style>
	<link rel="stylesheet" type="text/css" href="{{asset('public/css/parsley.css')}}">
</head>
<body class="container">

<div class="row">
	@yield('content')
	</div>
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
<script type="text/javascript" src="{{asset('public/js/parsley.min.js')}}"></script>
</body>
</html>