<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	<script type="text/javascript" src="{{asset('js/app.js')}}" defer></script>
	<title></title>
</head>
<body>

	<div class="container py-5">

            @if($pay->payment != "[]" &&  $pay->payment != "")
                  <div class="col-md-9 mx-auto pl-5">
                       <div class="alert alert-warning ml-5">
                       <p>anda sudah melakukan pembayaran</p>
                   </div>
                  </div>
            @endif
		<form method="post" action="{{route('payment.pay')}}" enctype="multipart/form-data">
			@csrf
			<input type="hidden" name="product_id" value="{{$pay->product_id}}" >
			 <div class="form-group row">
                            <label for="invoice" class="col-md-4 col-form-label text-md-right">kode invoice</label>

                            <div class="col-md-6">
                                <input id="invoice" type="text" class="form-control{{ $errors->has('invoice') ? ' is-invalid' : '' }}"  name="invoice"  required  value="{{$pay->invoice}}">

                                @if ($errors->has('invoice'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('invoice') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">atas nama</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                         <div class="form-group row">
                            <label for="rekening" class="col-md-4 col-form-label text-md-right">nomer rekening</label>

                            <div class="col-md-6">
                                <input id="rekening" type="text" class="form-control{{ $errors->has('rekening') ? ' is-invalid' : '' }}" name="rekening" value="{{ old('rekening') }}" required autofocus>

                                @if ($errors->has('rekening'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('rekening') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


			 <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">yang di bayar</label>

                            <div class="col-md-6">
                                <input id="price" type="number" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" value="{{ old('price') }}" required autofocus>

                                @if ($errors->has('price'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

 <div class="form-group row">
                            <label for="bank" class="col-md-4 col-form-label text-md-right">bank</label>

                            <div class="col-md-6">
                                <select  id="bank" type="" class="form-control{{ $errors->has('bank') ? ' is-invalid' : '' }}" name="bank" value="{{ old('bank') }}" required >
                                	<option disabled="" selected=""></option>
                                	<option  value="bri">Bri</option>
                                	<option value="bca">bca</option>
                                </select>
                                @if ($errors->has('bank'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('bank') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                         <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">struk pembayaran</label>

                            <div class="col-md-6">
                                <input id="image" type="file" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" name="image" value="{{ old('image') }}" required accept="image/*" >

                                @if ($errors->has('image'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
 <div class="form-group row">
 	<div class="col-md-6 mx-auto pl-5">
                        <button type="submit" class="btn btn-info text-white ml-5">bayar sekarang</button>
                    </div>
                    </div>
		</form>
	</div>

</body>
</html>