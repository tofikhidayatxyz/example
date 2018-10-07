<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</head>
<body>
	<div class="container py-5">
		<form method="post" action="{{route('user.update')}}">
			@csrf
			<input type="hidden" name="_method" value="PATCH">
			<input type="hidden" name="id" value="{{$user->id}}">	
			<div class="form-group">
				<label>name</label>	
				<input type="text" name="name" value="{{$user->name}}" class="form-control">
			</div>
			<div class="form-group">
				<label>password</label>	
				<input type="password" name="password" value="encrypted" class="form-control" disabled="">
			</div>
			<div class="form-group">
				<label>address</label>	
				<input type="text" name="address" value="{{$user->address}}" class="form-control">
			</div>
			<div class="form-group">
				<label>phone</label>	
				<input type="phone" name="phone" value="{{$user->phone}}" class="form-control">
			</div>
			<div class="form-group">
				<label>provinsi</label>	
				<input type="text" name="province" value="{{$user->province}}" class="form-control">
			</div>
			<div class="form-group">
				<label>email</label>	
				<input type="text" name="email" value="{{$user->email}}" class="form-control">
			</div>

			<button type="submit" class="btn btn-info text-white">Update</button>


		</form>
	</div>

</body>
</html>