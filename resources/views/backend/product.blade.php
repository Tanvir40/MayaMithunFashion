@section('title' , 'Our Team')
@include('backend.Inc.Header')
@include('backend.Inc.Sidebar')


<div class="col-md-10">

    <div class="m-2 my-4">
      <div class="card my-2">
      <div class="card-body">
          <div style="overflow: hidden;">
            <h3 class="float-left">All Product List</h3>
          </div>
            @if(session('updated'))
                <div class="alert alert-success">
                {{session('updated')}}
                </div>                
            @endif
             @if (session('delete'))
                <div class="alert alert-success">
                {{session('delete')}}
                </div>                
            @endif
          <hr>

          <table class="table table-striped">
              <tbody>
                <tr>
                  <th width="5%">#SL</th>
                  <th width="15%">#Product Image</th>
                  <th width="15%">#Product Name</th>
                  <th width="20%">#Short Description</th>
                  <th width="30%">#Description</th>
                  <th width="15%">#Action</th>
                </tr>

      @foreach($products as $key=> $product)
                <tr>

                    <td>{{$key+1}}</td>
                    <td><img src="{{asset('backend/img/product')}}/{{$product->image}}" width="90"></td>
                    <td>{{$product->product_name}}</td>
                    <td>{{$product->product_short_title}}</td>
                    <td>{{$product->long_desp}}</td>
                    <td>
                      <a href="{{route('edit.products',$product->id)}}">
                        <button class="btn btn-primary"><i class="fa fa-edit"></i></button>
                      </a>
                      <a href="{{route('products.delete' , $product->id)}}">
                        <button class="btn btn-danger" type="button" onclick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash"></i></button>
                        </a>
                    </td>

                  </tr>


      @endforeach

            </tbody>

          </table>

        





          </div>
      </div>
        </div>

      </div>
    </div>
      </div>
    </div>
</section

@include('backend.Inc.Footer')