<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CS Lee Knit Composite Ltd.</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="{{url('/')}}/@if(isset($websetup->icon)){{$websetup->icon}}@endif" rel="icon">
  <link href="{{url('/')}}/@if(isset($websetup->icon)){{$websetup->icon}}@endif" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Rubik+Spray+Paint&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700;800&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('frontend/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}" >
  <!-- <link href="fontawesome/css/fontawesome-all.min.css" rel="stylesheet"> -->
  

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="{{asset('backend/css/font-awesome.min.css')}}"/>
  <!-- =======================================================
  * Template Name: FlexStart - v1.9.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style type="text/css">

    /* #slider-section{
      margin-top:90px;
      padding: 0;
    }


    #slider-section img{
      max-height: 550px;
    } */
    .poopins{
      font-family: 'Poppins', sans-serif; 
      font-weight:800;
      color:#000;
    }

    .roboto{
      font-family: 'Roboto', sans-serif;
      color: black !important;
    }
    .opensans{
      font-family: 'Open Sans', sans-serif;
      font-weight:800;
    }
    
    #hero{
      height: auto !important
    }

    .mysuccess{
        display: block !important;
        color: #fff;
        background: #18d26e;
        text-align: center;
        padding: 15px;
        margin-bottom: 24px;
        font-weight: 600;
    }

.nav-link{
      background-color: #8BC43A;
  }

  .nav-link:hover{
    background-color: #E75656;
     transform: scale(1.2); 
     z-index: 2; 
  }
  .category{
      border: 0px;
      background-color: #8BC43A;
      padding: 9px;
      list-style-type: none;
      color: #000;
  }

  .category-list{
    padding-top:10px;
    width:auto;
    height: auto;
    border-color: #000;
    position: absolute;
    visibility: hidden;
    left:7%;
  }

  ul li{
    list-style: none;
    color: #fff;
  }
  .categories{
    padding: 10px;
    color: #000;
    background-color:white;
  }

.category:hover .category-list{
  visibility: visible;
  float:right;
}

.imagess img{
  margin-top:7%;
  margin-left:auto;
  margin-right:auto;
  padding:auto;
}
.all-cat{
  font-family: 'Rubik Spray Paint', cursive;
}
.all-cats{
  font-family: 'Itim', cursive;
}
.image-side{
  display: inline-block;
  width: 42%;
  float:left;
  margin-left:5%;
}
.product-side{
  display: inline-block;
  width: 52%;
  float:right;
}
.img-pro{
  margin:0;
  padding:0;
}
.card-product{
  width:95px;
}
.card .card-product{
  border: 3px solid black;
}
.card{
  display:inline-flex;
}
.product{
  margin-left:60px;
}
.app-img{
  display:flex;
}
.store-img{
  width:50%;
}
.our-ser{
  font-size:50px;
  text-decoration:bold;
}



@media only screen and (max-width: 600px) and (min-width: 350px) {
  .product-side{
    margin-top: 20px;
    display: inline-block;
    width: 86%;
    float: right;
  }
  .card-product{
    width:110px;
  }
  .image-side{
  display: inline-block;
  width: 90%;
  }
  .all-cat{
  font-family: 'Rubik Spray Paint', cursive;
  font-size:24px;
  }
  .logo{
    float:right;
  }
  .category{
    display:none;
  }

}

  </style>

</head>

<body>




  



  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">

    <div class="container d-flex align-items-center justify-content-between">
      
    <a class="category" href="" onclick="" id="category">
        <li class="pro px-3">Products</li>
        <div class="category-list">
          <ul class="gro">
            <li class="categories shadow-lg">buhlbhul</li>
            <li class="categories shadow-lg">dhzsdrh</li>
            <li class="categories shadow-lg">dhzsdrh</li>
            <li class="categories shadow-lg">dhzsdrh</li>
            <li class="categories shadow-lg">dhzsbhulbh</li>
            <li class="categories shadow-lg">buhlbhul</li>
            <li class="categories shadow-lg">dhzsdrh</li>
            <li class="categories shadow-lg">dhzsdrh</li>
            <li class="categories shadow-lg">dhzsdrh</li>
            <li class="categories shadow-lg">dhzsbhulbhudrh</li>
          </ul>
    </div>
      </a>

      <a href="{{url('/')}}" class="logo d-flex align-items-center">
        <img src="{{url('/')}}/@if(isset($websetup->icon)){{$websetup->icon}}@endif" width="120" alt="">
        <!-- <span>Soft creation</span> -->
      </a>

    <!-- Nav bar -->
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto  roboto" href="{{url('/')}}">Home</a></li>
          <li><a class="nav-link scrollto roboto" href="{{route('about')}}">About US</a></li>
          <li><a class="nav-link scrollto roboto" href="{{route('our_progress')}}">OUR PROGRESS</a></li>
          <li><a class="nav-link scrollto roboto" href="{{route('contact')}}">Contact</a></li>

          @if(isset($narbar))

            @foreach($narbar as $data)

              @if(App\Models\subnavbar::where("navbar_id", $data->id)->exists())
                  
                  <li class="dropdown"><a class="nav-link scrollto roboto" href="#"><span>{{$data->name}}</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                      @foreach($data->subnavbar as $subnav)
                        <li><a class="roboto" href="{{$subnav->link}}">{{$subnav->name}}</a></li>
                      @endforeach
                    </ul>
                  </li>

                @else
                 <li><a class="nav-link scrollto roboto" href="{{$data->link}}">{{$data->name}}</a></li>
              @endif

            @endforeach
            
          @endif

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

      <!-- .navbar -->

      

    </div>
  </header>
  <!-- End Header -->

  <main>