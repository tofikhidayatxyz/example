<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</head>
<body>

	<div class="container py-5">
		<form method="post"  action="{{route('admin.create')}}" enctype="multipart/form-data">
		@csrf	

			 <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}"   autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                         <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">image</label>

                            <div class="col-md-6">
                                <input id="image" type="file" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" name="image" value="{{ old('image') }}"   accept="image/*">

                                @if ($errors->has('image'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="color" class="col-md-4 col-form-label text-md-right">color</label>

                            <div class="col-md-6">
                                <input id="color" type="text" class="form-control{{ $errors->has('color') ? ' is-invalid' : '' }}" name="color" value="{{ old('color') }}"  >

                                @if ($errors->has('color'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('color') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                         <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">price</label>

                            <div class="col-md-6">
                                <input id="price" type="number" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" value="{{ old('price') }}"  >

                                @if ($errors->has('price'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                         <div class="form-group row">
                            <label for="brand" class="col-md-4 col-form-label text-md-right">brand</label>

                            <div class="col-md-6">
                                <input id="brand" type="text" class="form-control{{ $errors->has('brand') ? ' is-invalid' : '' }}" name="brand" value="{{ old('brand') }}"  >

                                @if ($errors->has('brand'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('brand') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="specification" class="col-md-4 col-form-label text-md-right">specification</label>

                            <div class="col-md-6">
                                <textarea id="specification" type="text" class="form-control{{ $errors->has('specification') ? ' is-invalid' : '' }}" specification="specification"   name="specification" >
                                	{{ old('specification') }}
                                </textarea>
                                @if ($errors->has('specification'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('specification') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


 <div class="form-group row">
                            <label for="amount" class="col-md-4 col-form-label text-md-right">amount</label>

                            <div class="col-md-6">
                                <input id="amount" type="number" class="form-control{{ $errors->has('amount') ? ' is-invalid' : '' }}" amount="amount" value="{{ old('amount') }}"  name="amount" >

                                @if ($errors->has('amount'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('amount') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                         <div class="form-group row">
                            <label for="remaining" class="col-md-4 col-form-label text-md-right">remaining</label>

                            <div class="col-md-6">
                                <input id="remaining" type="number" class="form-control{{ $errors->has('remaining') ? ' is-invalid' : '' }}" remaining="remaining" value="{{ old('remaining') }}"  name="remaining">

                                @if ($errors->has('remaining'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('remaining') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
<div class="form-group row pt-5">
	 <div class="col-md-6 mx-auto">
                        <button class="btn btn-success text-white px-5" type="submit" name="submit">Add</button>
                    </div>
                    </div>

		</form>
	</div>

</body>
</html>