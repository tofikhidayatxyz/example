<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" type="text/css" href="{{asset('js/app.js')}}" defer>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
</head>
<body>

	<div class="container">
		
	</div>
	<div class="container py-5">
		<div class="row">
			@foreach($product as $key)
			<div class="col-md-3">
				<div class="container-fluid p-0">
					<img src="/storage/images/product/{{$key->image}}" class="col-12 p-0">
				</div>
				<div class="col-12 p-0">
					<p class="text-left">{{$key->name}}</p>
				</div>
				<div class="row">
					<div class="col-md-6">
					<span>{{$key->price}}</span>
				</div>
				<div class="col-md-6">
					<span class="text-right">{{$key->remain}}</span>
				</div>
				</div>
				<a href="/user/show/{{$key->id}}" class="btn btn-info">add to chart</a>
			</div>

			@endforeach
		</div>
	</div>

</body>
</html>