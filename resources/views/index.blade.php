@extends('layouts.dashboard')
@section('content')
@foreach($prod as $prod)
<div class="card ml-2" style="width: 30rem;">
    <img src="" class="card-img-top" >
    <div class="card-body">
      <strong><h2 class="" >{{$prod->nama}}</h2></strong>
      <br>
      <p><img src="/image/{{$prod->img}}" alt="" width="70%" height="60%"></p>
      <h3>Rp. {{$prod->harga}}</h3>
      <p class="card-text">{{$prod->deskripsi}}</p>
      <a href="#" class="btn btn-primary">Detail</a>
    </div>
</div>
@endforeach
@endsection
