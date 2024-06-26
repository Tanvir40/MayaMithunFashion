@include('../frontend/inc/header')
    <style>
        .about{
            height:250px;
            background-color:#F8F6F3;
        }
        .abouts{
            padding-top:7%;
        }
        .img{
            padding:4px;
            border-radius:18px;
            box-shadow: inset 0 -4em 4em rgba(0, 0, 0, 0.1), 0 0 0 2px rgb(255, 255, 255),
            0.5em 0.5em 1em rgba(0, 0, 0, 0.3);

        }
        .new{
          margin-top:100px;
        }
        .big-img{
          margin-top:-62px !important;
          padding-left:50px;
          background-color:#F8F6F3;
          width:87%;
          height:640px;
          border-radius:18px;
        }
        .big-imgs{
          border-radius: radius8px;
          width:380px;
          position: absolute;
        }
        .text{
          padding-top: 400px;
          padding-right:30px;
          font-size: 13px;
          display:block;
          text-align:justify;
        }
        .radius{
          border-radius: 2%;
        }
        
        .star{
          color:#FFBB1E;
        }
        .fa-hand-o-right{
          color:green;
        }
        .fa-phone-square{
          color:white;
          font-size:25px;
        }
        .garments{
          align:center;
        }
        .num {
          padding-left: 30px !important;
          border-radius: 26px !important;
        }
      @media only screen and (max-width: 600px) and (min-width: 350px) {
          .about{
            height:130px;
            background-color:#F8F6F3;
        }
          .counts .count-boxs {
            display: flex;
            align-items: center;
            padding: 30px;
            width: 100%;
            background: #fff;
            box-shadow: 0px 0 30px rgba(1, 41, 112, 0.08);
          }

          .big-img{
          margin-top:-62px !important; 
          background-color:#F8F6F3;
          width:100%;
          height:560px;
          border-radius:18px;
        }
        .big-imgs{
          border-radius:8px;
          width:300px;
          position: absolute;
          padding-right: auto;
        }
        .text{
          padding-top: 320px;
          padding-right:30px;
          font-size: 15px;
          display:block;
          text-align:justify;
        }
        .quality{
          padding:20px;
        }
        .num {
          padding-left: 30px !important;
          border-radius: 26px !important;
          width: 210px;
        }
      }  

      @media only screen and (max-width: 992px) and (min-width: 772px) {
        .about{
            height:190px;
            background-color:#F8F6F3;
        }
          .big-img{
          margin-top:-62px !important; 
          background-color:#F8F6F3;
          width:100%;
          height:560px;
          border-radius:18px;
        }
        .big-imgs{
          border-radius:8px;
          width:300px;
          position: absolute;
          padding-right: auto;
        }
        .text{
          padding-top: 320px;
          padding-right:30px;
          font-size: 15px;
          display:block;
          text-align:justify;
        }
        .quality{
          padding:20px;
        }
        .num {
          padding-left: 30px !important;
          border-radius: 26px !important;
          width: 210px;
        }
      }
    </style>

<section>
    <div class="about" width="100%">
            <h1 class="abouts text-center mt-5 poopins"><b> About</b></h1>
            
    </div>
</section>

<img src="{{asset('Image/basil-leaf.png')}}" alt="leaf" style="margin:auto;display:block;margin-top: -45px;">
<section>
        <div class="Introduction" width="100%">
            <h1 class=" text-center poopins"><b>Introduction</b></h1>
            <p class="container-xl">@if(isset($introduction->text_one)){{$introduction->text_one}}@endif</p>
        </div>

        <div class="cha text-center">
            <h1 class="pt-5 opensans">
                Managing Director
            </h1>
            <h3 class="roboto">Md. Nahid Hasan Mukul</h3>
        </div>

        <div class=" mt-5">
            <center>
            <img class="img bg-body " src="{{asset('Image/ManagingDirector.jpeg')}}" alt="photo" width="260px">
            </center>
        </div>
</section>


<!-- ======= Counts Section ======= -->
<section id="counts" class="counts">

  <div data-aos="fade-up" style="background-color:#303030;">
    
    <div class="row gy-4">



        <div class="col-lg-3 col-md-6">
          <div class="count-boxs"style="background-color:#303030;">
            <i class="bi bi-emoji-smile"></i>
            <div>
              <span  data-purecounter-start="0" data-purecounter-end="{{$clint_count}}" data-purecounter-duration="1" class="purecounter"></span>
              <p class="text-white">Curated Products</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="count-boxs"style="background-color:#303030;">
            <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
            <div>
              <span  data-purecounter-start="0" data-purecounter-end="{{$brands_count}}" data-purecounter-duration="1" class="purecounter"></span>
              <p class="text-white">Curated Products</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="count-boxs"style="background-color:#303030;">
            <i class="bi bi-headset" style="color: #15be56;"></i>
            <div>
              <span >24/7</span>
              <p class="text-white">Hours Of Support</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="count-boxs"style="background-color:#303030;">
            <i class="bi bi-people" style="color: #bb0852;"></i>
            <div>
              <span  data-purecounter-start="0" data-purecounter-end="{{$teams_count}}" data-purecounter-duration="1" class="purecounter"></span>
              <p class="text-white">Product Categories</p>
            </div>
          </div>
        </div>

     

    </div>

  </div>
</section>
<!-- End Counts Section -->

<section class="new">
  <div class="container-lg">

        <div class="row">
                
                        <div class="col-md-6">
                          
                            <div class="big-img">
                                        <div id="carouselExampleCaptions" class="big-imgs carousel slide" data-bs-ride="carousel">
                                          <div class="carousel-indicators">
                                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                          </div>
                                          <div class="carousel-inner">

                                        @foreach($teams as $key => $team)


                                            <div class="carousel-item @if($key == 0) active @endif">
                                              <img src="{{asset('backend/img/team')}}/{{$team->image}}" class="d-block w-100 radius" alt="...">
                                              <div class="carousel-caption d-none d-md-block">
                                                </div>

                                                <div class="mt-4 text-center star">
                                                @for($i=1; $i <= $team->name; $i++)
                                                  <i class="fa fa-star" aria-hidden="true"></i>
                                                @endfor
                                                </div>
                                               

                                                <p class="mt-3">{{$team->desp}}</p>
                                                

                                            </div>
                                        
                                        @endforeach
                                            

                                            
                                          </div>
                                        
                                        </div>
                                  </div>

                        </div>


                                <div class="col-md-6">

                                  <div class="row text-center">

                                  <div class="row">
                                      <div class="col-md-3 mt-5">
                                            <img src="{{$websetup->icon}}" alt="" width="150px">
                                      </div>
                                      <div class="col-md-9">
                                            <div class="bg">
                                              <div class="content">
                                                  <h2 class="poopins">Certified Products</h2>
                                                  <p>@if(isset($introduction->text_two)){{$introduction->text_two}}@endif</p>
                                              </div>
                                            </div>
                                        
                                      </div>
                                    </div>
                                  </div>


                                            <div class="garments text-left">
                                                <h2 class="opensans text-align-justify">We Deal With Various Quality Garments Products!</h2> 
                                                <img src="{{asset('Image/logo-leaf-new.png')}}" alt="image">
                                            </div>

                                              <div class="quality row mt-3">
                                                    <div class="col-6">
                                                      <p>
                                                        <i class="fa fa-hand-o-right" aria-hidden="true"></i>&ensp; WORLDWIDE DELIVERY
                                                      </p>
                                                      <p>
                                                      <i class="fa fa-hand-o-right" aria-hidden="true"></i>&ensp; FAST SHIPPING
                                                      </p>
                                                      <p>
                                                      <i class="fa fa-hand-o-right" aria-hidden="true"></i>&ensp; QUALITY
                                                      </p>
                                                      <p>
                                                      <i class="fa fa-hand-o-right" aria-hidden="true"></i>&ensp; SALES NOTIFICATIONS
                                                      </p>
                                                      <p>
                                                      <i class="fa fa-hand-o-right" aria-hidden="true"></i>&ensp; AMAZING SUPPORT
                                                      </p>
                                                    <br>
                                                      <div class="text-white num d-flex border border rounded py-2" style="background-color:#7BAF42;">
                                                          <i class="fa fa-phone-square" aria-hidden="true" ></i>&emsp;
                                                          +88- 02 9513828
                                                      </div>
                                                    </div>
                                                                                
                                                    <div class="col-6">
                                                      <p>
                                                        <i class="fa fa-hand-o-right" aria-hidden="true"></i>&ensp; RELIABILITY
                                                      </p> 
                                                      <p>
                                                      <i class="fa fa-hand-o-right" aria-hidden="true"></i>&ensp; 20 YEARS OF EXPERIENCE
                                                      </p> 
                                                    </div>
                                              </div>
                                </div>

                                

        </div> 
  </div>

</section>



  @include('../frontend/inc/footer')
