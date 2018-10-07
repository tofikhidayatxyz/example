<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</head>
<body>
	<div class="container py-5">
			<a href="{{route('admin.home')}}">admin</a>

			<div class="table-responsive">
				<table class="table table-striped">
				<thead class="bg-dark text-white ">
					<th>no</th>
					<th>name</th>
					<th>phone</th>
					<th>address</th>
					<th>email</th>
					<th>join at</th>
					<th>action</th>
				</thead>	
				<tbody>
					@foreach($users as $key=>$user)
					<tr>
							<td>{{$key+1}}</td>
							<td>{{$user->name}}</td>
							<td>{{$user->phone}}</td>
							<td>{{$user->address}}</td>
							<td>{{$user->email}}</td>
							<td>{{$user->created_at}}</td>
							<td><a href="/admin/user/edit/{{$user->id}}" class=" btn btn-warning text-dark float-left mr-2">edit</a></td>
					</tr>
					@endforeach
				</tbody>	
			</table>

			</div>
			{{$users->links()}}

	</div>

</body>
</html>