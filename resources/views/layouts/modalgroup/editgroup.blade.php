<!-- Modal Form -->
<div class="modal fade" id="modal-edit">
        <div class="modal-dialog modal-default">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title ">Edit Product</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                              <!-- Form -->
              <div class="col-12">
              <div class="col-12">
              <form action="{{route('update-groupproduct',$prodgroup->id)}}" method="post">
              @method('PATCH')  
              @csrf
               <div class="col-6">
                <p>Name Class Product</p>   
                <input value="{{$prodgroup->product_group}}"class="form-control " type="text" name="prodgroup"  required >
                 </div>
            </div>
            <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <div class=""><input type="submit" class="btn btn-primary col-md1"></div>
          </form>
              </div>
               </div>
              <!--end Form-->
            </div>
              <!--end Form  -->
           </div> 
          <!-- /.modal-content -->
        </div> 
        <!-- /.modal-dialog -->
      </div> 