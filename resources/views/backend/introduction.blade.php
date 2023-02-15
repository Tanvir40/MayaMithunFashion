@section('title' , 'Teams')
@include('backend.Inc.Header')
@include('backend.Inc.Sidebar')


    <!-- banner section 1 start -->

    <div class="col-md-10">

      <div class="m-2 my-4">
        <div class="card my-2">
        <div class="card-body">


            <div style="overflow: hidden;">
              <h3 class="float-left">Introduction</h3>
            </div>
            <hr>

            @if($errors->any())
              <div class="alert alert-danger">
                @foreach($errors->all() as $key)
                    <p>{{$key}}</p>
                @endforeach
              </div>
            @endif
                
            @if(Session::has("sucess"))
              <div class="alert alert-success">{{Session::get("sucess")}}</div>
            @endif

            <div class="row">
              <div class="col-md-6 m-auto">

                <form method="POST" class="my-4" action="{{Route('introduction_post')}}" >
                  @csrf
                  
                    <input type="hidden" name="id" value="{{$introduction->id}}">
                  <div class="mb-3 mb-2">
                    <label for="text_one" class="form-label">Introduction 1</label>
                    <textarea class="form-control" id="text_one" rows="3" name="text_one">@if(isset($introduction->text_one)){{$introduction->text_one}}@endif</textarea>
                  </div>

                  <button type="submit" class="btn btn-primary">Save</button>

                </form>

              </div>


              <div class="col-md-6 m-auto">

                <form method="POST" class="my-4" action="{{Route('introduction_post')}}">
                  @csrf
                    <input type="hidden" name="id" value="{{$introduction->id}}">
                  <div class="mb-3 mb-2">
                    <label for="text_two" class="form-label">Introduction 2</label>
                    <textarea class="form-control" id="text_two" rows="3" name="text_two">@if(isset($introduction->text_two)){{$introduction->text_two}}@endif</textarea>
                  </div>

                  <button type="submit" class="btn btn-primary">Save</button>

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
    <!-- banner section 1 end -->
 
</section>
@include("backend.Inc.Footer")