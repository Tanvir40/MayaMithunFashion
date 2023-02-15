@section("title","Admin Panel")
@include("backend.Inc.Header")
@include("backend.Inc.Sidebar")


<div class="col-md-10">

    <div class="m-2 my-4">
      <div class="card my-2">
      <div class="card-body">
          <div style="overflow: hidden;">
            <h3 class="float-left">Blog list</h3>
          </div>
          <hr>

        @if(isset($blog))

          <table class="table">
              <tbody>
                <tr>
                  <th width="10%">#SL</th>
                  <th width="20%">#Name</th>
                  <th width="30%">#Image</th>
                  <th width="30%">#Description</th>
                  <th width="30%">#Action</th>
                </tr>

      @php
        $i = 1;
      @endphp

      @foreach($blog as $data)


    
                <tr>

                    <td>{{$i++}}</td>
                    <td>{{$data->name}}</td>
                    <td><img src="{{$data->image}}" width="80"></td>
                    <td>{{$data->Description}}</td>
                    <td>
                      <a href="{{url('blog_delete', $data->id)}}">
                        <button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash"></i></button>
                      </a>
                    </td>

                  </tr>


      @endforeach

            </tbody>

          </table>

          @else
            <h4 class="text-center">Data not found!</h4>
          @endif





          </div>
      </div>
        </div>

      </div>
    </div>
      </div>
    </div>
  </section>

@include("backend.Inc.Footer")

