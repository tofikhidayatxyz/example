<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</head>
<body>

	<div class="container py-5">
		<div class="table-responsive">
			<table class="table table-striped">
				<thead>
					<th>no</th>
					<th>invoice</th>
					<th>nama</th>
					<th>norek</th>
					<th>total</th>
					<th>bank</th>
					<th>resi</th>
					<th>pembayan</th>
					<th>status</th>
				</thead>
				<tbody>
					@foreach ($pay as $key=>$data)
					<tr>
						<td>{{$key+1}}</td>
						<td>{{$data->invoice}}</td>
						<td>{{$data->user->name}}</td>
						<td>{{$data->rekening}}</td>

						<td>{{$data->price}}</td>
						<td>{{$data->bank}}</td>
						<th>{{$data->resi}}</th>
						<td><a href="/admin/payment/image/{{$data->image}}" target="_blank">lihat struk </a></td>
						<td><a href="/admin/payment/edit/{{$data->id}}">{{$data->status}}</a></td>
					</tr>
					@endforeach
				</tbody>	
			</table>
		</div>
	</div>
</body>
</html>