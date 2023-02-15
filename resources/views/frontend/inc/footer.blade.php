</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

<!--     <div class="footer-newsletter">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12 text-center">
          <h4>Our Newsletter</h4>
          <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
        </div>
        <div class="col-lg-6">
          <form action="" method="post">
            <input type="email" name="email"><input type="submit" value="Subscribe">
          </form>
        </div>
      </div>
    </div>
  </div> -->

  <div class="footer-top">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-12 footer-info">
          <a href="{{url('/')}}" class="logo d-flex align-items-center">
            <img src="@if(isset($websetup->icon)){{$websetup->icon}}@endif" width="120" alt="">
          </a>

          <p>@if(isset($websetup->description)){{$websetup->description}}@endif</p>

          <div class="social-links mt-3">
            <a target="_blank" href="@if(isset($websetup->fb)){{$websetup->fb}}@endif" class="twitter"><i class="bi bi-twitter"></i></a>
            <a target="_blank" href="@if(isset($websetup->tw)){{$websetup->tw}}@endif" class="facebook"><i class="bi bi-facebook"></i></a>
            <a target="_blank" href="@if(isset($websetup->ins)){{$websetup->ins}}@endif" class="instagram"><i class="bi bi-instagram"></i></a>
            <a target="_blank" href="@if(isset($websetup->ldin)){{$websetup->ldin}}@endif" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-12 footer-links">
          <h4>Google map</h4>

          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3645.14275447265!2d89.9850758153248!3d23.99073558546863!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe036cecc85593%3A0x361e586da8a6bfff!2sTara%20Mia%20Hen%20Store!5e0!3m2!1sbn!2sbd!4v1670312810293!5m2!1sbn!2sbd" width="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          
        </div>
        
        <div class="col-lg-4 col-12">
            <h2 class="mt-2">Links</h2>
          <ul>
          <li><a class=" roboto" href="{{url('/')}}">Home</a></li>
          <li><a class=" roboto" href="{{route('about')}}">About US</a></li>
          <li><a class=" roboto" href="{{route('our_progress')}}">OUR PROGRESS</a></li>
          <li><a class=" roboto" href="{{route('contact')}}">Contact</a></li>
          </ul>
        </div>


        

      </div>
    </div>
  </div>

  <div class="container">
    <div class="copyright">
      &copy; Copyright <strong><span>Maya Mithu Fashion Ltd.</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
      Designed by <a href="https://softcreation.tech/">Soft Creation Limited</a>
    </div>
  </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<!-- Vendor JS Files -->
<script src="{{asset('frontend/assets/vendor/purecounter/purecounter.js')}}"></script>
<script src="{{asset('frontend/assets/vendor/aos/aos.js')}}"></script>
<script src="{{asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('frontend/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('frontend/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('frontend/assets/vendor/php-email-form/validate.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Template Main JS File -->
<script src="{{asset('frontend/assets/js/main.js')}}"></script>




<script type="text/javascript">

  $("#myForm").submit(function(){

      var myForm = $("#myForm").get(0);

      $.ajax({
        url         : "{{url('/sendmail')}}",
        method      : "post",
        data        : new FormData(myForm),
        contentType : false,
        processData : false,
        success     : function(data){
          if (data.status == 1) {
              $(".message").addClass("mysuccess");
              $("#myForm")[0].reset();
          }
        }
      });
  });

</script>

</body>

</html>