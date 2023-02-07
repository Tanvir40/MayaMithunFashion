@include('../frontend/inc/header')

<br><br>
  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">

<div class="container" data-aos="fade-up">

  <header class="section-header">
    <h2>Contact</h2>
    <p>Contact Us</p>
  </header>

  <div class="row gy-4">

    <div class="col-lg-6">

      <div class="row gy-4">
        <div class="col-md-6">
          <div class="info-box">
            <i class="bi bi-geo-alt"></i>
            <h3>Address</h3>
           
            <p> {{$contact->first()->address_one}}<br>{{$contact->first()->address_two}}</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="info-box">
            <i class="bi bi-telephone"></i>
            <h3>Call Us</h3>
            <p>{{$contact->first()->number_one}}<br>{{$contact->first()->number_two}}</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="info-box">
            <i class="bi bi-envelope"></i>
            <h3>Email Us</h3>
            <p>{{$contact->first()->email_one}}<br>{{$contact->first()->email_two}}</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="info-box">
            <i class="bi bi-clock"></i>
            <h3>Open Hours</h3>
            <p>{{$contact->first()->days}}<br>{{$contact->first()->times}}</p>
          </div>
        </div>
      </div>

    </div>

    <div class="col-lg-6">

      <form action="" method="post" id="myForm" class="php-email-form">
        @csrf
        <div class="row gy-4">
          <div class="col-md-6">
            <input type="text" name="name" required class="form-control" placeholder="Your Name">
          </div>

          <div class="col-md-6 ">
            <input type="email" class="form-control" required name="email" placeholder="Your Email">
          </div>

          <div class="col-md-12">
            <input type="text" class="form-control" required name="subject" placeholder="Subject">
          </div>

          <div class="col-md-12">
            <textarea class="form-control" name="message" required rows="6" placeholder="Message"></textarea>
          </div>

          <div class="col-md-12 text-center">
            <div class="loading">Loading</div>
            <div class="error-message" style="display: none !important;">Loading</div>
            <div class="message" style="display: none;">Your message has been sent. Thank you!</div>
            <button type="submit" id="mySubmit">Send Message</button>
          </div>

          

        </div>
      </form>

    </div>

  </div>

</div>

</section><!-- End Contact Section -->

  @include('../frontend/inc/footer')
