<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
	<title></title>
</head>
<body>
<div class="container">
	<div class="row">
		<img src="/storage/images/product/{{$product->image}}" class="col-12 p-0 " style="max-height: 400px;">
	</div>
	<div class="row mt-4 border-top">
		<div class="col-md-3 border-right border-left">
			<p>nama:</p>
			<p>{{$product->name}}</p>
		</div>
		<div class="col-md-3 border-right">
			<p>warna:</p>
			<p>{{$product->color}}</p>
		</div>
		<div class="col-md-3 border-right">
			<p>merek:</p>
			<p>{{$product->brand}}</p>
		</div>

		<div class="col-md-3 border-right">
			<p>harga:</p>
			<p>{{$product->price}}</p>
		</div>

	</div>
	<hr>
	<div class="row border-bottom">
		<div class="col-md-4 border-right border-left">
			<p>tersisa:</p>
			<p>{{$product->remain}}</p>
		</div>
		<div class="col-md-4 border-right">
			<p>spesifikasi:</p>
			<p>{{$product->specification}}</p>
		</div>
		<div class="col-md-4">
			<form method="post" action="{{route('user.product.add')}}">
				@csrf
				<input type="hidden" name="id" value="{{$product->id}}">
				<input type="number" name="amount" placeholder="jumlah beli" min="1" value="1">
				<button type="submit" class=" btn btn-info">add to chart</button>
			</form>
		</div>
	</div>

</div>


</body>
</html>