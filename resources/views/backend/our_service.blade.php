@section('title' , 'Teams')
@include('backend.Inc.Header')
@include('backend.Inc.Sidebar')


    <div class="col-md-10">

    <div class="m-2 my-4">
      <div class="card my-2">
      <div class="card-body">
          <div style="overflow: hidden;">
            <h3 class="float-left">Add Our Service</h3>
          </div>
          <hr>

        @if(session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        @endif
          <div class="row">
            <div class="col-md-6 m-auto">

              <form method="POST" class="my-4" action="{{url('/our-services')}}" enctype="multipart/form-data">
                @csrf

                <div class="mb-3 mb-2">
                  <label for="position" class="form-label">Service Heading</label>
                  <input type="text" class="form-control"  name="heading">
                    @error('position')
                        <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>

                <div class="mb-3 mb-2">
                  <label for="desp" class="form-label">Service Text</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="text"></textarea>
                    @error('desp')
                        <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Add Service</button>

              </form>

            </div>

            <div class="col-md-10">

<div class="m-2 my-4">
  <div class="card my-2">
  <div class="card-body">
      <div style="overflow: hidden;">
        <h3 class="float-left">Our Service list</h3>
      </div>
      <hr>

    @if(isset($our_service))

      <table class="table">
          <tbody>
            <tr>
              <th width="20%">#SL</th>
              <th width="50%">#Heading</th>
              <th width="30%">#Text</th>
            </tr>

  @php
    $i = 1;
  @endphp

  @foreach($our_service as $data)



            <tr>

                <td>{{$i++}}</td>
                <td>{{$data->heading}}</td>
                <td>{{$data->text}}</td>

                <td>
                  <a href="{{url('our-services-del', $data->id)}}">
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
        </div>

      </div>

      


  


    

     
</section>
@include("backend.Inc.Footer")