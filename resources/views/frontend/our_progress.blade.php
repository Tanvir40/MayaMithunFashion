@include('../frontend/inc/header')

    <br><br><br><br><br>
    <div class="container">
              
                <!-- <p class="text-center" style="font-family: 'Poppins', sans-serif; font-weight:800;color:black; font-size:45px;">OUR PROGRESS</p> -->
                <header class="section-header">
                    <p>OUR PROGRESS</p>
                </header>

            <br>

            <h2 class="text-center poopins">DESIGN AT OUR CORE, CARE FROM THE START.</h2>
            <br>
            <p class="text-center">We manage all key areas of the supply chain with dedicated teams allocated to your account to proactively offer support and guidance. From product development through to delivery our team have the experience and knowledge to deliver the right product on time at the right price.</p>

            <section id="about" class="about">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
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

    </div>



@include('../frontend/inc/footer')