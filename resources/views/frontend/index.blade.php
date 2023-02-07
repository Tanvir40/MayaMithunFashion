@include('../frontend/inc/header')

<!-- Slider Section -->
       
<br><br>
<section class="imagess">
  <div class="container">
  <img width="100%" src="{{asset('Image/Capture1.PNG')}}" alt="image">
  </div>
</section>


<!-- <section id="slider-section">
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    
    <div class="carousel-indicators">

      @php
        $i = 0;
      @endphp
      @if(isset($slider))
        @foreach($slider as $key => $value)
           <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$i++}}" class="active" aria-current="true" aria-label="Slide 1"></button>
        @endforeach
      @endif

    </div>


    <div class="carousel-inner">

    @if(isset($slider))
      @foreach($slider as $key => $value)
        @if($key == 0)
            <div class="carousel-item active">
              <img src="{{$value->name}}" class="d-block w-10" alt="...">
            </div>
        @else
             <div class="carousel-item">
              <img src="{{$value->name}}" class="d-block w-10" alt="...">
            </div>
        @endif
      @endforeach
    @endif

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section> -->
<section>
  <br>
  <!-- <h4 class="all-cats text-center mb-4" style="font-weight:400;">All categories</h4> -->

  <header class="section-header">
          <p>All categories</p>
  </header>

  <div class="container">
   <div class="owl-carousel owl-theme">
    @if(isset($slider))
          @foreach($slider as $key => $value)
            @if($key == 0)
                <div class="item">
                  <img src="{{$value->name}}" class="d-block w-100 " alt="...">
                </div>
            @else
                <div class="item">
                  <img src="{{$value->name}}" class="d-block w-100 " alt="...">
                </div>
            @endif
          @endforeach
        @endif
    </div>


  </div>
</section>
<br><br>
<section class="img-pro mb-5 p-0">
      <div class="products">
        <aside class="image-side">
            <img width="100%" src="{{asset('Image/UP-TO-70-OFF-2-1536x768.png')}}" alt="">
        </aside>

        <aside class="product-side">
            <h6 class="all-cat text-center">Featured Product</h6>

                <div class="product m-0 p-0">

                <div class="card border-0 mb-4 p-0">
                    <div class="card-body">
                      <a href="{{route('product.details')}}">
                        <img class="card-product" src="{{asset('Image/Untitled-design-2022-03-05T190713.817.png')}}" alt="">
                      </a>
                    </div>
                  </div>

                  <div class="card border-0 mb-4 p-0">
                    <div class="card-body">
                      <a href="{{route('product.details')}}">
                        <img class="card-product" src="{{asset('Image/Untitled-design-2022-03-05T190713.817.png')}}" alt="">
                      </a>
                    </div>
                  </div>

                  <div class="card border-0 mb-4 p-0">
                    <div class="card-body">
                      <a href="{{route('product.details')}}">
                        <img class="card-product" src="{{asset('Image/Untitled-design-2022-03-05T190713.817.png')}}" alt="">
                      </a>
                    </div>
                  </div>

                  <div class="card border-0 mb-4 p-0">
                    <div class="card-body">
                      <a href="{{route('product.details')}}">
                        <img class="card-product" src="{{asset('Image/Untitled-design-2022-03-05T190713.817.png')}}" alt="">
                      </a>
                    </div>
                  </div>

                  <div class="card border-0 mb-4 p-0">
                    <div class="card-body">
                      <a href="{{route('product.details')}}">
                        <img class="card-product" src="{{asset('Image/Untitled-design-2022-03-05T190713.817.png')}}" alt="">
                      </a>
                    </div>
                  </div>

                  <div class="card border-0 mb-4 p-0">
                    <div class="card-body">
                      <a href="{{route('product.details')}}">
                        <img class="card-product" src="{{asset('Image/Untitled-design-2022-03-05T190713.817.png')}}" alt="">
                      </a>
                    </div>
                  </div>

                  <div class="card border-0 mb-4 p-0">
                    <div class="card-body">
                      <a href="{{route('product.details')}}">
                        <img class="card-product" src="{{asset('Image/Untitled-design-2022-03-05T190713.817.png')}}" alt="">
                      </a>
                    </div>
                  </div>

                  <div class="card border-0 mb-4 p-0">
                    <div class="card-body">
                      <a href="{{route('product.details')}}">
                        <img class="card-product" src="{{asset('Image/Untitled-design-2022-03-05T190713.817.png')}}" alt="">
                      </a>
                    </div>
                  </div>

                  <div class="card border-0 mb-4 p-0">
                    <div class="card-body">
                      <a href="{{route('product.details')}}">
                        <img class="card-product" src="{{asset('Image/Untitled-design-2022-03-05T190713.817.png')}}" alt="">
                      </a>
                    </div>
                  </div>

                  <div class="card border-0 mb-4 p-0">
                    <div class="card-body">
                      <a href="{{route('product.details')}}">
                        <img class="card-product" src="{{asset('Image/Untitled-design-2022-03-05T190713.817.png')}}" alt="">
                      </a>
                    </div>
                  </div>

                  <div class="card border-0 mb-4 p-0">
                    <div class="card-body">
                      <a href="{{route('product.details')}}">
                        <img class="card-product" src="{{asset('Image/Untitled-design-2022-03-05T190713.817.png')}}" alt="">
                      </a>
                    </div>
                  </div>

                  <div class="card border-0 mb-4 p-0">
                    <div class="card-body">
                      <a href="{{route('product.details')}}">
                        <img class="card-product" src="{{asset('Image/Untitled-design-2022-03-05T190713.817.png')}}" alt="">
                      </a>
                    </div>
                  </div>

                  <div class="card border-0 mb-4 p-0">
                    <div class="card-body">
                      <a href="{{route('product.details')}}">
                        <img class="card-product" src="{{asset('Image/Untitled-design-2022-03-05T190713.817.png')}}" alt="">
                      </a>
                    </div>
                  </div>

                  <div class="card border-0 mb-4 p-0">
                    <div class="card-body">
                      <a href="{{route('product.details')}}">
                        <img class="card-product" src="{{asset('Image/Untitled-design-2022-03-05T190713.817.png')}}" alt="">
                      </a>
                    </div>
                  </div>

                  <div class="card border-0 mb-4 p-0">
                    <div class="card-body">
                      <a href="{{route('product.details')}}">
                        <img class="card-product" src="{{asset('Image/Untitled-design-2022-03-05T190713.817.png')}}" alt="">
                      </a>
                    </div>
                  </div>

                  <div class="card border-0 mb-4 p-0">
                    <div class="card-body">
                      <a href="{{route('product.details')}}">
                        <img class="card-product" src="{{asset('Image/Untitled-design-2022-03-05T190713.817.png')}}" alt="">
                      </a>
                    </div>
                  </div>

                  <div class="card border-0 mb-4 p-0">
                    <div class="card-body">
                      <a href="{{route('product.details')}}">
                        <img class="card-product" src="{{asset('Image/Untitled-design-2022-03-05T190713.817.png')}}" alt="">
                      </a>
                    </div>
                  </div>

                  <div class="card border-0 mb-4 p-0">
                    <div class="card-body">
                      <a href="{{route('product.details')}}">
                        <img class="card-product" src="{{asset('Image/Untitled-design-2022-03-05T190713.817.png')}}" alt="">
                      </a>
                    </div>
                  </div>

                  <div class="card border-0 mb-4 p-0">
                    <div class="card-body">
                      <a href="{{route('product.details')}}">
                        <img class="card-product" src="{{asset('Image/Untitled-design-2022-03-05T190713.817.png')}}" alt="">
                      </a>
                    </div>
                  </div>

                  <div class="card border-0 mb-4 p-0">
                    <div class="card-body">
                      <a href="{{route('product.details')}}">
                        <img class="card-product" src="{{asset('Image/Untitled-design-2022-03-05T190713.817.png')}}" alt="">
                      </a>
                    </div>
                  </div>


                  </div>
                
        </aside>
      </div>
    </section>
  <!-- ======= Hero Section ======= -->
  <!-- <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-12 d-flex flex-column justify-content-center text-center">
          <h1 data-aos="fade-up" class="mb-4">About Us</h1>

         <h3 style="text-align: justify;font-size: 20px;line-height: 30px;letter-spacing: 1px;">@if(isset($aboutus->description)){{$aboutus->description}}@endif</h3>

        </div>

      </div>
    </div>

  </section> -->
  <!-- End Hero -->

  <main id="main">
    <!-- <h1 class="all-cats text-center">Welcome To Nankar Fashions</h1> -->
    <header class="section-header">
      <p>Welcome To Nankar Fashions</p>
    </header>
    
    <!-- ======= About Section 1 ======= -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content" style="overflow:hidden;">
              <h2>@if(isset($bannersection->name)){{$bannersection->name}}@endif</h2>
              <p>
                @if(isset($bannersection->description)){{$bannersection->description}}@endif
              </p>
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">

            @if(isset($bannersection->description))

            <img src="{{asset($bannersection->image)}}" class="img-fluid" alt="">

            @endif


            
          </div>

        </div>
      </div>

    </section>
    <!-- End About 1 Section -->

    <!-- ======= About Section 2 ======= -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">

        <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">

            @if(isset($bannersection->description))

            <img src="{{asset($bannersection->image)}}" class="img-fluid" alt="">

            @endif

          </div>
          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h2>@if(isset($bannersection->name)){{$bannersection->name}}@endif</h2>
              <p>
                @if(isset($bannersection->description)){{$bannersection->description}}@endif
              </p>
            </div>
          </div>

        </div>
      </div>

    </section>
    <!-- End About 2 Section -->

    

<!--      ======= Values Section ======= -->
    <!-- <section id="values" class="values">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Our Values</h2>
          <p>Odit est perspiciatis laborum et dicta</p>
        </header>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="box">
              <img src="assets/img/values-1.png" class="img-fluid" alt="">
              <h3>Ad cupiditate sed est odio</h3>
              <p>Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit. Et veritatis id.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <img src="assets/img/values-2.png" class="img-fluid" alt="">
              <h3>Voluptatem voluptatum alias</h3>
              <p>Repudiandae amet nihil natus in distinctio suscipit id. Doloremque ducimus ea sit non.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
            <div class="box">
              <img src="assets/img/values-3.png" class="img-fluid" alt="">
              <h3>Fugit cupiditate alias nobis.</h3>
              <p>Quam rem vitae est autem molestias explicabo debitis sint. Vero aliquid quidem commodi.</p>
            </div>
          </div>

        </div>

      </div>

    </section> --><!-- End Values Section -->

    <section>
      <img width="100%" src="{{asset('Image/Capture1.PNG')}}" alt="">
    </section>



    <section>

      <!-- <p class="our-ser text-center">Our services</p> -->
      <header class="section-header">
          <p>Our services</p>
      </header>
      <div class="container">
          <div class="row">

            <div class="col-sm-12 col-md-4 col-lg-4">
              <div class="card border-0">
                <div class="card-header bg-transparent border-0">
                  <h2 class="text-center fw-bolder" style="font-family: 'Poppins', sans-serif; font-weight:300;color:#000;">Sweater Products</h2>
                </div>
                <div class="card-body border-0">
                  <p class="text-center">pullover - v neck , crew neck, hi neck , mock neck, turtle neck, cardigan, hooded cardigan, vest, school dress, open cardigan, zipper or button cardigan, all kind of jaqwark knitted sweaters with fancy print, stone, enbroidery attached. we can do with 1.5gg, 3gg, 5gg,7gg,10gg,12gg,14gg sweater with any kind of washed and stitches sweaters.</p>
                </div>
              </div>
            </div>

            <div class="col-sm-12 col-md-4 col-lg-4">
              <div class="card border-0">
                <div class="card-header bg-transparent border-0">
                  <h2 class="text-center fw-bolder" style="font-family: 'Poppins', sans-serif; font-weight:300;color:#000;">Sweater Products</h2>
                </div>
                <div class="card-body border-0">
                  <p class="text-center">pullover - v neck , crew neck, hi neck , mock neck, turtle neck, cardigan, hooded cardigan, vest, school dress, open cardigan, zipper or button cardigan, all kind of jaqwark knitted sweaters with fancy print, stone, enbroidery attached. we can do with 1.5gg, 3gg, 5gg,7gg,10gg,12gg,14gg sweater with any kind of washed and stitches sweaters.</p>
                </div>
              </div>
            </div>

            <div class="col-sm-12 col-md-4 col-lg-4">
              <div class="card border-0">
                <div class="card-header bg-transparent border-0">
                  <h2 class="text-center fw-bolder" style="font-family: 'Poppins', sans-serif; font-weight:300;color:#000;">Sweater Products</h2>
                </div>
                <div class="card-body border-0">
                  <p class="text-center">pullover - v neck , crew neck, hi neck , mock neck, turtle neck, cardigan, hooded cardigan, vest, school dress, open cardigan, zipper or button cardigan, all kind of jaqwark knitted sweaters with fancy print, stone, enbroidery attached. we can do with 1.5gg, 3gg, 5gg,7gg,10gg,12gg,14gg sweater with any kind of washed and stitches sweaters.</p>
                </div>
              </div>
            </div>

            <div class="col-sm-12 col-md-4 col-lg-4">
              <div class="card border-0">
                <div class="card-header bg-transparent border-0">
                  <h2 class="text-center fw-bolder" style="font-family: 'Poppins', sans-serif; font-weight:300;color:#000;">Sweater Products</h2>
                </div>
                <div class="card-body border-0">
                  <p class="text-center">pullover - v neck , crew neck, hi neck , mock neck, turtle neck, cardigan, hooded cardigan, vest, school dress, open cardigan, zipper or button cardigan, all kind of jaqwark knitted sweaters with fancy print, stone, enbroidery attached. we can do with 1.5gg, 3gg, 5gg,7gg,10gg,12gg,14gg sweater with any kind of washed and stitches sweaters.</p>
                </div>
              </div>
            </div>

            <div class="col-sm-12 col-md-4 col-lg-4">
              <div class="card border-0">
                <div class="card-header bg-transparent border-0">
                  <h2 class="text-center fw-bolder" style="font-family: 'Poppins', sans-serif; font-weight:300;color:#000;">Sweater Products</h2>
                </div>
                <div class="card-body border-0">
                  <p class="text-center">pullover - v neck , crew neck, hi neck , mock neck, turtle neck, cardigan, hooded cardigan, vest, school dress, open cardigan, zipper or button cardigan, all kind of jaqwark knitted sweaters with fancy print, stone, enbroidery attached. we can do with 1.5gg, 3gg, 5gg,7gg,10gg,12gg,14gg sweater with any kind of washed and stitches sweaters.</p>
                </div>
              </div>
            </div>

            <div class="col-sm-12 col-md-4 col-lg-4">
              <div class="card border-0">
                <div class="card-header bg-transparent border-0">
                  <h2 class="text-center fw-bolder" style="font-family: 'Poppins', sans-serif; font-weight:300;color:#000;">Sweater Products</h2>
                </div>
                <div class="card-body border-0">
                  <p class="text-center">pullover - v neck , crew neck, hi neck , mock neck, turtle neck, cardigan, hooded cardigan, vest, school dress, open cardigan, zipper or button cardigan, all kind of jaqwark knitted sweaters with fancy print, stone, enbroidery attached. we can do with 1.5gg, 3gg, 5gg,7gg,10gg,12gg,14gg sweater with any kind of washed and stitches sweaters.</p>
                </div>
              </div>
            </div>
            
          </div>
        </div>

    </section>


    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">

    <!-- <h1 class="all-cats text-center">Creative charts</h1> -->
      <header class="section-header">
          <p>Creative charts</p>
      </header>
      <div class="container" data-aos="fade-up">
        
        <div class="row gy-4">

  

            <div class="col-lg-3 col-md-6 col-12">
              <div class="count-box"style="background-color:#303030;">
                <i class="bi bi-emoji-smile"></i>
                <div>
                  <span  data-purecounter-start="0" data-purecounter-end="{{$clint_count}}" data-purecounter-duration="1" class="purecounter"></span>
                  <p class="text-white">Happy Clients</p>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12">
              <div class="count-box"style="background-color:#303030;">
                <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
                <div>
                  <span  data-purecounter-start="0" data-purecounter-end="{{$brands_count}}" data-purecounter-duration="1" class="purecounter"></span>
                  <p class="text-white">Our Brands</p>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12">
              <div class="count-box"style="background-color:#303030;">
                <i class="bi bi-headset" style="color: #15be56;"></i>
                <div>
                  <span >24/7</span>
                  <p class="text-white">Hours Of Support</p>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 col-12">
              <div class="count-box"style="background-color:#303030;">
                <i class="bi bi-people" style="color: #bb0852;"></i>
                <div>
                  <span  data-purecounter-start="0" data-purecounter-end="{{$teams_count}}" data-purecounter-duration="1" class="purecounter"></span>
                  <p class="text-white">Team Member</p>
                </div>
              </div>
            </div>

         

        </div>

      </div>
    </section><!-- End Counts Section -->


    



    <!-- ======= Services Section ======= -->

    <!-- <section id="services" class="services">
//
    {{-- <section id="services" class="services">
//>>>>>>> main

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Services</h2>
          <p>Veritatis et dolores facere numquam et praesentium</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-box blue">
              <i class="ri-discuss-line icon"></i>
              <h3>Nesciunt Mete</h3>
              <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.</p>
              <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-box orange">
              <i class="ri-discuss-line icon"></i>
              <h3>Eosle Commodi</h3>
              <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p>
              <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-box green">
              <i class="ri-discuss-line icon"></i>
              <h3>Ledo Markt</h3>
              <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p>
              <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-box red">
              <i class="ri-discuss-line icon"></i>
              <h3>Asperiores Commodi</h3>
              <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident adipisci neque.</p>
              <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-box purple">
              <i class="ri-discuss-line icon"></i>
              <h3>Velit Doloremque.</h3>
              <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem alias eius labore.</p>
              <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
            <div class="service-box pink">
              <i class="ri-discuss-line icon"></i>
              <h3>Dolori Architecto</h3>
              <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>
              <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

        </div>

      </div>

//<<<<<<< Jiya
    </section> -->
//=======
    </section> --}}
//>>>>>>> main


    <!-- End Services Section -->

    <!-- ======= Pricing Section ======= -->
    <!-- <section id="pricing" class="pricing">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Pricing</h2>
          <p>Check our Pricing</p>
        </header>

        <div class="row gy-4" data-aos="fade-left">

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="box">
              <h3 style="color: #07d5c0;">Free Plan</h3>
              <div class="price"><sup>$</sup>0<span> / mo</span></div>
              <img src="assets/img/pricing-free.png" class="img-fluid" alt="">
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li class="na">Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <a href="#" class="btn-buy">Buy Now</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="box">
              <span class="featured">Featured</span>
              <h3 style="color: #65c600;">Starter Plan</h3>
              <div class="price"><sup>$</sup>19<span> / mo</span></div>
              <img src="assets/img/pricing-starter.png" class="img-fluid" alt="">
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <a href="#" class="btn-buy">Buy Now</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="box">
              <h3 style="color: #ff901c;">Business Plan</h3>
              <div class="price"><sup>$</sup>29<span> / mo</span></div>
              <img src="assets/img/pricing-business.png" class="img-fluid" alt="">
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <a href="#" class="btn-buy">Buy Now</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
            <div class="box">
              <h3 style="color: #ff0071;">Ultimate Plan</h3>
              <div class="price"><sup>$</sup>49<span> / mo</span></div>
              <img src="assets/img/pricing-ultimate.png" class="img-fluid" alt="">
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <a href="#" class="btn-buy">Buy Now</a>
            </div>
          </div>

        </div>

      </div>

    </section> End Pricing Section --> 

    <!-- ======= Portfolio Section ======= -->
    <!-- <section id="portfolio" class="portfolio">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Portfolio</h2>
          <p>Check our latest work</p>
        </header>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 1"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 2"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 2</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 2"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 2</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 2"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 3"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 1</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 1"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 3</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 3"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <p>Our Clients</p>
        </header>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
          <div class="swiper-wrapper">

            @foreach($OurClient as $Client)

              <div class="swiper-slide">
                <div class="testimonial-item">
                  <p>
                    {{$Client->desp}}
                  </p>
                  <div class="profile mt-auto">
                    <img src="{{asset('backend/img/clint')}}/{{$Client->image}}" class="testimonial-img" alt="">
                    <h3>{{$Client->name}}</h3>
                    <h4>{{$Client->position}}</h4>
                  </div>
                </div>
              </div> 
              <!-- End testimonial item -->
              
            @endforeach

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section>
    
    <!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->

      <!-- <section id="team" class="team">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Team</h2>
          <p>Our hard working team</p>
        </header>

        <div class="row gy-4">

        @foreach ($teams as $team)

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="{{asset('backend/img/team')}}/{{$team->image}}" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>{{$team->name}}</h4>
                <span>{{$team->position}}</span>
                <p>{{$team->desp}}</p>
              </div>
            </div>
          </div>
        @endforeach

        </div>

      </div>

    </section> -->

    <!-- End Team Section -->

    <!-- ======= Clients Section ======= -->

    @if(isset($ourbrands))

    <section id="clients" class="clients">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <p>Our Brands</p>
        </header>

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">

            @foreach($ourbrands as $data)
              <div class="swiper-slide"><img src="{{$data->name}}" class="img-fluid" alt=""></div>
            @endforeach
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>

    </section>

    @endif


    <!-- End Clients Section -->









    @include('../frontend/inc/footer')