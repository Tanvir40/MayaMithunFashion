@include('../frontend/inc/header')

  <section class="section my-5 py-5">
      <div class="container">
        <div class="row">
         
          <div class="col-md-6 col-12 text-center">
            <img src="{{asset('backend/img/product')}}/{{$products->image}}" class="img-fluid" width="70%">
          </div>

          <div class="col-md-6 col-12">
            <h4>{{$products->product_name}}</h4>
            <p>{{$products->product_short_title}}</p>
            <span class="posted_in">Categories: <a href="" rel="tag">Knitwear Item</a>, <a href="" rel="tag">Men</a></span>
          </div>

          <div class="col-12">
              <h6 class="mb-4" style="font-weight: bold;border-top: 3px solid #50bb26;padding-top: 3px;display: inline-block;">Description</h6>
              <p>{{$products->long_desp}}</p>
              <h4 style="font-weight: bold;">Related products</h4>
              
              <div class="row">

              @forelse($rel_products as $rel_product)

                <div class="col-md-4 col-12 text-center">
                  <a href="{{route('product.details' , $rel_product->id)}}"><img src="{{asset('backend/img/product')}}/{{$rel_product->image}}" class="img-fluid" width="60%"></a>
                  <h4 style="text-align: left;">{{$rel_product->product_name}}</h4>
                  <a style="text-align: left;" href="{{route('product.details' , $rel_product->id)}}" class=""><h2 class="text-dark" style="font-size: 18px;">{{$rel_product->product_short_title}}</h2></a>
                  <p style="text-align: left;">Star</p>
                </div>

              @empty

              @endforelse


              </div>


          </div>

        </div>
      </div>
  </section>


@include('../frontend/inc/footer')

