@include('../frontend/inc/header')


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-12 d-flex flex-column justify-content-center text-center mt-5">
          @php
            echo $page->description;
          @endphp
        </div>

      </div>
    </div>

  </section><!-- End Hero -->

  @include('../frontend/inc/footer')




 