@extends('layouts.dashboard')
@section('content')
                <!-- Form -->
              <div class="col-12">
              <form action="{{route('simpan-classproduct')}}" method="post">
                @csrf
               <div class="col-6">
                <p>Name Class Product</p>   
                <input class="form-control " type="text" name="classprod" >
                 </div>
            </div>
            <div class="col-10"><input type="submit" class="btn btn-primary col-md1"></div>
            <br>
            <br>
          
            
          </form>
              </div>
              <!--end Form-->
              @include('layouts.modal.createclassmodal') 
@endsection
