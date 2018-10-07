<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</head>

<body>

    <div class="container py-5">
        <form method="post" action="{{route('admin.update')}}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="_method" value="patch">
            <input type="hidden" name="id" value="{{$id}}">
            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">name</label>
                <div class="col-md-6">
                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $product->name }}" autofocus>
                </div>
            </div>
            <div class="form-group row">
                <label for="image" class="col-md-4 col-form-label text-md-right">image</label>
                <div class="col-md-6">
                    <input id="image" type="file" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" name="image" accept="image/*">
                </div>
            </div>
            <div class="form-group row">
                <label for="color" class="col-md-4 col-form-label text-md-right">color</label>

                <div class="col-md-6">
                    <input id="color" type="text" class="form-control{{ $errors->has('color') ? ' is-invalid' : '' }}" name="color" value="{{ $product->color }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="price" class="col-md-4 col-form-label text-md-right">price</label>
                <div class="col-md-6">
                    <input id="price" type="number" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" value="{{ $product->price }}">

                </div>
            </div>
            <div class="form-group row">
                <label for="brand" class="col-md-4 col-form-label text-md-right">brand</label>
                <div class="col-md-6">
                    <input id="brand" type="text" class="form-control{{ $errors->has('brand') ? ' is-invalid' : '' }}" name="brand" value="{{ $product->brand }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="specification" class="col-md-4 col-form-label text-md-right">specification</label>

                <div class="col-md-6">
                    <textarea id="specification" type="text" class="form-control{{ $errors->has('specification') ? ' is-invalid' : '' }}" specification="specification" name="specification">w{{ $product->specification }}</textarea>

                </div>
            </div>
            <div class="form-group row">
                <label for="amount" class="col-md-4 col-form-label text-md-right">amount</label>

                <div class="col-md-6">
                    <input id="amount" type="number" class="form-control{{ $errors->has('amount') ? ' is-invalid' : '' }}" amount="amount" value="{{ $product->amount }}" name="amount">
                </div>
            </div>
            <div class="form-group row">
                <label for="remaining" class="col-md-4 col-form-label text-md-right">remaining</label>

                <div class="col-md-6">
                    <input id="remaining" type="number" class="form-control{{ $errors->has('remaining') ? ' is-invalid' : '' }}" remaining="remaining" value="{{ $product->remain }}" name="remaining">

                </div>
            </div>
            <div class="form-group row pt-5">
                <div class="col-md-6 mx-auto">
                    <button class="btn btn-success text-white px-5" type="submit">update</button>
                </div>
            </div>

        </form>
    </div>

</body>

</html>