@section('title' , 'Teams')
@include('backend.Inc.Header')
@include('backend.Inc.Sidebar')


    <div class="col-md-10">

    <div class="m-2 my-4">
      <div class="card my-2">
      <div class="card-body">
          <div style="overflow: hidden;">
            <h3 class="float-left">Add New Product</h3>
          </div>
          <hr>

        @if(session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        @endif
          <div class="row">
            <div class="col-md-6 m-auto">

              <form method="POST" class="my-4" action="{{url('insert_product')}}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 mb-2">
                  <label for="image" class="form-label">Select Image</label><br>
                  <input type="file" class="form-control" id="image" aria-describedby="emailHelp" name="image" accept="image/*">
                    @error('image')
                        <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>

                <div class="mb-3 mb-2">
                  <label for="product_name" class="form-label">Product Name</label>
                  <input type="text" class="form-control"  name="product_name" max="5">
                    @error('name')
                        <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>

                <div class="mb-3 mb-2">
                  <label for="product_short_title" class="form-label">Product Short Description</label>
                  <input type="text" class="form-control"  name="product_short_title" max="5">
                    @error('name')
                        <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>

                <div class="mb-3 mb-2">
                  <label for="long_desp" class="form-label">Description</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="long_desp"></textarea>
                    @error('desp')
                        <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Add Product</button>

              </form>

            </div>
          </div>


          </div>
      </div>
        </div>

      </div>
    </div>
      </div>
    </div>
     
</section>
@include("backend.Inc.Footer")