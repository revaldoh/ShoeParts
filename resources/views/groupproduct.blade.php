@extends('layouts.dashboard')
@section('content')

<div class="col-12">
   
    <a href="#"> <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">Add Class Product</button></a>
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
                      <th class="col-4">ID</th>
                      <th class="col-4">Group Product</th>
                      <th class="col-4" colspan="2">Action</th>
                    </tr>
                  </thead>
                  @foreach ($prodgroup as $prodgroup)
                  <tbody>
                    <tr>
                      <td>{{$prodgroup->id}}</td>
                      <td>{{$prodgroup->product_group}}</td>
                      <td>
                      <a href="#"> <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-edit">Update</button></a>  
                          @include('layouts.modalgroup.editgroup') 
                      </td>
                      <td>
                        
                      <form action="{{route('delete-groupproduct',$prodgroup->id)}}" method="post">
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
          @include('layouts.modalgroup.creategroup') 
@endsection
