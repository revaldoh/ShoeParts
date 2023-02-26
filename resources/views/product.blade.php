@extends('layouts.dashboard')
@section('content')

<div class="col-12">
    <a href="#"> <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-product">Add Class Product</button></a>
    <br>
    <br>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Product Class</h3>
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed  col-12">
                  <thead>
                    <tr>
                      <th >ID</th>
                      <th >Product Name</th>
                      <th>Product Class</th>
                      <th>Product Group</th>
                      <th>harga</th>
                      <th>qty</th>
                      <th>img</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  @foreach ($prod as $prod)
                  <tbody>
                    <tr>
                      <td>{{$prod->id}}</td>
                      <td>{{$prod->nama}}</td>
                      <td>{{$prod->product_class}}</td>
                      <td>{{$prod->product_group}}</td>
                      <td>{{$prod->harga}}</td>
                      <td>{{$prod->qty}}</td>
                      <td><img src="/image/{{$prod->img}}"></td>
                      <td>{{$prod->deskripsi}}</td>
                      <td>
                          <a href="#"> <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-edit">Update</button></a>
                          @include('layouts.modalprod.editprod')
                      </td>
                      <td>
                      <form action="{{route('delete-product',$prod->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Delete</button>
                          </form>
                      </td>
                    </tr>
                  </tbody>
                  @endforeach
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          
          </div>
          </div>
          @include('layouts.modalprod.createproduct') 
@endsection
