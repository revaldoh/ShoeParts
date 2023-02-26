<!-- Modal Form -->
<div class="modal fade" id="modal-product">
        <div class="modal-dialog modal-default">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title ">Input Product</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form id="quickForm" action="{{route('simpan-product')}}"  method="post"  enctype="multipart/form-data" >
            @csrf
                <div class="card-body">
                  <div class="form-group">
                  <label >Product Name</label>
                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Enter name" required>
                  </div>
                  <div class="form-group">
                  <label for="exampleInputPassword1">Product Class</label>
                    <select class="form-control select2" style="width: 100%;" name="prodclass" id="prodclass">
                    @foreach($prodclass as $proc)
                    <option value="{{$proc->product_class}}">{{$proc->product_class}}</option>
                    @endforeach
                  </select>
                  <label for="exampleInputPassword1">Product Group</label>
                    <select class="form-control select2" style="width: 100%;" name="prodgrouop" id="prodgrouop">
                    @foreach($prodgroup as $prop)
                    <option value="{{$prop->product_group}}">{{$prop->product_group}}</option>
                    @endforeach
                  </select>
                  <label for="harga">Price</label>
                  <input type="text" name="harga" class="form-control" id="harga" placeholder="Enter price" required>
                  <label for="harga">Quantity</label>
                  <input type="text" name="qty" class="form-control" id="qty" placeholder="Enter quantity" required>
                  <div class="form-group">
                    <label for="exampleInputFile">Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="img" name="img" required>
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..." name="desc"></textarea>
                      </div>
                  </div>
                  <div class="form-group mb-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                      <label class="custom-control-label" for="exampleCheck1">I agree to the <a href="#">terms of service</a>.</label>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
              <div class="col-12">
              
              </div>
              <!--end Form-->
            </div>
              <!--end Form  -->
          </div>
          
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

      <!-- Eend Modal Form -->