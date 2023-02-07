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
        .mains{
          display:flex;
        }
        .star{
          color:#FFBB1E;
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
        }  
    </style>

<section>
    <div class="about" width="100%">
            <h1 class="abouts text-center mt-5"><b> About</b></h1>
            
    </div>
</section>

<img src="{{asset('Image/basil-leaf.png')}}" alt="leaf" style="margin:auto;display:block;margin-top: -45px;">
<section>
        <div class="Introduction" width="100%">
            <h1 class=" text-center "><b>Introduction</b></h1>
            <p class="container-xl">Nankar Fashions  is a world class buying house with highly skilled Merchandiser to meet the challenge of the requirement of apparel sector in the world. The key management persons have wide long experience from yarn manufacturing to garments production and shipment. It is our believe that our expertise, knowledge and practical experience can easily offer better services to the customer and fill up their satisfaction. As all of us have come from liaison with the best manufacturers Bangladesh, we can handle the total affairs of the undertaking effectively and efficiently with a motto to provide best service to the customer.</p>
        </div>

        <div class="cha text-center">
            <h1 class="pt-5">
                OWNER & MANAGING DIRECTOR
            </h1>
            <h3>Md. Arzu Mia Razu</h3>
        </div>

        <div class=" mt-5">
            <center>
            <img class="img bg-body " src="{{asset('Image/tanvir.jpg')}}" alt="photo" width="260px">
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
  <div class="container mains">

        <div class="row">

        <div class="col-md-6">
                    <div class="big-img">
                                <!-- <img class="big-imgs" src="{{asset('Image/dftu.jpeg')}}" alt="image"> -->
                                <div id="carouselExampleCaptions" class="big-imgs carousel slide" data-bs-ride="carousel">
                                  <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                  </div>
                                  <div class="carousel-inner">
                                    <div class="carousel-item active">
                                      <img src="{{asset('Image/dghd.jpg')}}" class="d-block w-100 radius" alt="...">
                                      <div class="carousel-caption d-none d-md-block">
                                        </div>

                                        <div class="mt-4 text-center star">
                                          <i class="fa fa-star" aria-hidden="true"></i>
                                          <i class="fa fa-star" aria-hidden="true"></i>
                                          <i class="fa fa-star" aria-hidden="true"></i>
                                          <i class="fa fa-star" aria-hidden="true"></i>
                                          <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>

                                        <p class="mt-3">Nankar Fashions is very helpful, calculative & Quality concious. We got any message or solution at a glance. Their dept of knowledge of garments is significance. So we recommend them as our prime supplier</p>
                                        

                                    </div>
                                    <div class="carousel-item">
                                      <img src="{{asset('Image/dftu.jpeg')}}" class="d-block w-100 radius" alt="...">
                                      <div class="carousel-caption d-none d-md-block">
                                        </div>
                                        <div class="mt-4 text-center star">
                                          <i class="fa fa-star" aria-hidden="true"></i>
                                          <i class="fa fa-star" aria-hidden="true"></i>
                                          <i class="fa fa-star" aria-hidden="true"></i>
                                          <i class="fa fa-star" aria-hidden="true"></i>
                                          <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                        <p class="mt-3">Nankar Fashions is very helpful, calculative & Quality concious. We got any message or solution at a glance. Their dept of knowledge of garments is significance. So we recommend them as our prime supplier</p>
                                    </div>
                                    <div class="carousel-item">
                                      <img src="{{asset('Image/fdhf.png')}}" class="d-block w-100 radius" alt="...">
                                      <div class="carousel-caption d-none d-md-block">
                                        </div>
                                        <div class="mt-4 text-center star">
                                          <i class="fa fa-star" aria-hidden="true"></i>
                                          <i class="fa fa-star" aria-hidden="true"></i>
                                          <i class="fa fa-star" aria-hidden="true"></i>
                                          <i class="fa fa-star" aria-hidden="true"></i>
                                          <i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                        <p class="mt-3">Nankar Fashions is very helpful, calculative & Quality concious. We got any message or solution at a glance. Their dept of knowledge of garments is significance. So we recommend them as our prime supplier</p>
                                      </div>
                                  </div>
                                
                                </div>
                          </div>

        </div>


          <div class="col-md-6">

                    <div class="row text-center">
                      <div class="col-md-3">
                            <img src="{{asset('Image/Nankar-5-150x150.png')}}" alt="">
                                </div>
                                <div class="col-md-9">
                                <div class="bg">
                                <div class="content">
                                  <h2>Certified Products</h2>
                                  <p>Nankar Fashion is one of the leading, influential and most experienced Garments Buying Agent located in Mirpur DOHS, Dhaka, The Capital City of Bangladesh.</p>
                                </div>
                        </div>
                        
                                </div>
                              </div>
                              <div class="text-left">
                                  <h1>We Deal With Various Quality Garments Products!</h1> 
                                  <img src="{{asset('Image/logo-leaf-new.png')}}" alt="image">
                                </div>
                      
          </div>

          



        </div> 
  </div>

</section>



  @include('../frontend/inc/footer')
