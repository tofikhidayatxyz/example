<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
	<title></title>
</head>
<body>

<div class="container py-5">
	<div class="table-responsive">
		<table class="table table-striped">
			<thead>
				<th>No</th>
				<th>invoice</th>
				<th>date</th>
				<th>atas produk</th>
				<th>harga</th>
				<th>bayar</th>
				<th>status</th>
				<th>resi</th>
				<th>batalkan</th>
			</thead>
		<tbody>
			@foreach($invoice as $key=>$data)
				<tr>
					<td>{{$key+1}}</td>
					<td>{{$data->invoice}}</td>
					<td>{{$data->created_at}}</td>
					<td><a href="/user/show/{{$data->product->id}}">{{$data->product->name}}</a></td>
					<td>Rp.{{$data->price}}</td>
					<td>
						<a href="/user/payment/{{$data->id}}" class="btn btn-info text-white">bayar sekarang</a>
					</td>
					<td>
					@if($data->payment != "[]" &&  $data->payment != "")
					{{ $data->payment->status}}
					@else 
					belum d bayar
					@endif

					</td>
					<th>@if($data->resi) {{$data->resi}} @else paket belum di kirim @endif </th>
					<td>
						@if($data->payment != "[]" &&  $data->payment != "" )
						<button class="btn btn-disabled">batalkan</button>
						@else
						<form method="post" action="{{route('invoice.delete')}}">
							@csrf
							<input type="hidden" name="id" value="{{$data->id}}">
							<button type="submit" class="btn btn-danger">batalkan</button>
						</form>
						@endif
					</td>
				</tr>
			@endforeach
		</tbody>
		</table>
	</div>
</div>
</body>
</html>