<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</head>
<body>

	<div class="container py-5">
            <a href="{{route('admin.store')}}">buat data baru</a>
        <div class="row">
          @foreach($product as $key )
            <div class="col-md-3">
              <div class="container-fluid">
                    <img src="/storage/images/product/{{$key->image}}" class="col-12 ">
              </div>   
              <div class="conatiner-fluid">
                  <h4 class="text-center font-weight-normal">{{$key->name}}</h4>
                    <h5 class="text-center font-weight-normal">{{$key->brand}}</h5>
                      <h5 class="text-center font-weight-normal">{{$key->price}}</h5>
              </div>
              <div class="container-fluid">
                  <div class="row">
                      <div class="col-6 ">
                          <p class="text-left">{{$key->amount}}</p>
                      </div>
                      <div class="col-6 ">
                          <p class="text-right">{{$key->remain}}</p>
                      </div>
                  </div>
              </div>
              <div class="container-fluid">
                  <div class="row">
                      <div class="col-6 ">
                       <form method="get">
                           <a href="/admin/product/store/edit/{{$key->id}}" class="btn btn-warning px-4" >edit</a>
                       </form>
                      </div>
                      <div class="col-6 ">
                         <form method="post" action="{{route('admin.destroy')}}">
                             @csrf
                             <input type="hidden" name="_mehtod" value="DELETE">
                             <input type="hidden" name="id" value="{{$key->id}}">
                             <button type="submit" class="btn btn-danger px-4" >delete</button>
                         </form>
                      </div>
                  </div>
              </div>
            </div>  
            @endforeach  
        </div>
    </div>

</body>
</html>