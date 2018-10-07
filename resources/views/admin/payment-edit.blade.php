<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</head>
<body>

<div class="container">
	<form method="post" action="{{route('payment.admin.update')}}">
			@csrf
			<input type="hidden" name="_method" value="PATCH">
			<input type="hidden" name="id" value="{{$pay->id}}">

			<div class="form-group form-check">
					<label>status</label>
					<br>
					<span>waiting</span>
					<input type="radio" name="status" value="waiting" @if($pay->status == "waiting")  checked @endif>

					<span>cionfirmed</span>
					<input type="radio" name="status" value="confirmed" @if($pay->status == "confirmed")  checked @endif>

					<span>send</span>
					<input type="radio" name="status" value="send" @if($pay->status == "send")  checked @endif>

					<span>arrived</span>
					<input type="radio" name="status" value="arrived" @if($pay->status == "arrived")  checked @endif>
			</div>
			<div class="form-group">
				<label>input resi</label>
				<input type="text" name="resi" class="form-control">
			</div>
			<button type="submit" class="btn btn-info text-white">perbarui</button>
	</form>
</div>

</body>
</html>