<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Site Tittle -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Funza</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Dosis:300,400,600,700|Open+Sans:300,400,600,700" rel="stylesheet">

  <!-- Custom css -->
  <!-- Styles -->
  <link href="{{ url('css/app.css') }}" rel="stylesheet">

  {{-- Funza --}}
  <link href="{{ asset('css/kidz.css') }}" rel="stylesheet">
  <link href="{{ asset('css/kidz-color5.css') }}" rel="stylesheet"> 

  <!-- Favicon -->
  <link href="assets/img/favicon.png" rel="shortcut icon">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body id="body" class="up-scroll">
  <!-- ====================================
  ——— PRELOADER
  ===================================== -->
  <div id="preloader" class="smooth-loader-wrapper">
    <div class="smooth-loader">
      <div class="loader">
        <span class="dot dot-1"></span>
        <span class="dot dot-2"></span>
        <span class="dot dot-3"></span>
        <span class="dot dot-4"></span>
      </div>
    </div>
  </div>

  {{-- include header --}}
  @include('layouts.header')
  
  <div class="main-wrapper home">


  <!--====================================
  ——— BEGIN MAIN SLIDE LIST
  ===================================== -->
  <section class="py-7 pb-lg-0 pt-lg-10">
    <div class="container">
      <div class="row align-items-center wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
        <div class="col-sm-6 col-xs-12 order-sm-2 align-self-md-start align-self-lg-end">
          <img class="img-fluid px-8 px-md-0" data-src="assets/img/features/features-img4.png" src="assets/img/features/features-img4.png" alt="about-school">
        </div>
  
        <div class="col-sm-6 col-xs-12">
          <div class="mb-lg-7 mb-xl-10">
            <div class="section-title align-items-baseline mt-5 mt-md-0 mb-3 px-5 pl-md-1">
              <h2 class="text-color text-uppercase pl-lg-0"><span class="small text-danger font-weight-bold">Welcome to <br> </span> Funza Progress tracking Tool</h2>
            </div>
            <p class="text-title text-dark font-size-18 font-weight-medium px-7 pl-md-6 pr-md-0 pl-lg-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt. </p>
            <p class="font-size-18 font-weight-medium px-7 pl-md-6 pr-md-0 pl-lg-0">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            <div class="px-7 pr-md-0 pl-md-6 pl-lg-0">
              <a href="about-us.html" class="btn btn-danger text-uppercase mt-5">Register your school</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ====================================
  ———	HOME FEATURE
  ===================================== -->
  <section class="pt-9 pb-6 py-md-7">
    <div class="container">
      <div class="section-title justify-content-center mb-4 mb-md-8 wow fadeInUp">
        <span class="shape shape-left bg-info"></span>
        <h2 class="text-danger">Our Features</h2>
        <span class="shape shape-right bg-info"></span>
      </div>

      <div class="row wow fadeInUp">
        <!-- Media -->
        <div class="col-sm-6 col-xl-4 col-xs-12">
          <div class="media mb-6">
            <div class="media-icon-large bg-warning mr-xl-4">
              <i class="fa fa-graduation-cap" aria-hidden="true"></i>
            </div>

            <div class="media-body">
              <h3 class="text-warning">Experienced Teachers</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
            </div>
          </div>
        </div>

        <!-- Media -->
        <div class="col-sm-6 col-xl-4 col-xs-12">
          <div class="media mb-6">
            <div class="media-icon-large bg-success mr-xl-4">
              <i class="fa fa-leaf" aria-hidden="true"></i>
            </div>

            <div class="media-body">
              <h3 class="text-success">Physical Activity</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
            </div>
          </div>
        </div>

        <!-- Media -->
        <div class="col-sm-6 col-xl-4 col-xs-12">
          <div class="media mb-6">
            <div class="media-icon-large bg-danger mr-xl-4">
              <i class="fa fa-car" aria-hidden="true"></i>
            </div>
            <div class="media-body">
              <h3 class="text-danger">Transportation</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
            </div>
          </div>
        </div>

        <!-- Media -->
        <div class="col-sm-6 col-lg-4 col-xs-12">
          <div class="media mb-6">
            <div class="media-icon-large bg-info mr-xl-4">
              <i class="fa fa-cutlery" aria-hidden="true"></i>
            </div>
            <div class="media-body">
              <h3 class="text-info">Delicious Food</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
            </div>
          </div>
        </div>

        <!-- Media -->
        <div class="col-sm-6 col-xl-4 col-xs-12">
          <div class="media mb-6">
            <div class="media-icon-large bg-purple mr-xl-4">
              <i class="fa fa-heart" aria-hidden="true"></i>
            </div>
            <div class="media-body">
              <h3 class="text-purple">Love & Care</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
            </div>
          </div>
        </div>

        <!-- Media -->
        <div class="col-sm-6 col-xl-4 col-xs-12">
          <div class="media mb-7">
            <div class="media-icon-large bg-pink mr-xl-4">
              <i class="fa fa-shield" aria-hidden="true"></i>
            </div>
            <div class="media-body">
              <h3 class="text-pink">Annual Sports</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ====================================
  ———	CALL TO ACTION
  ===================================== -->
  <section class="py-9 bg-parallax" style="background-image: url(assets/img/background/background-img-1.jpg);">
    <div class="container">
      <div class="wow fadeInUp">
        <div class="section-title justify-content-center">
          <h2 class="text-white text-center">Need More Information?</h2>
        </div>
        <div class="text-center">
          <p class="text-white font-size-18 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod</p>
          <a href="contact-us.html" class="btn btn-danger shadow-sm text-uppercase mt-4">
            <i class="fa fa-phone mr-2" aria-hidden="true"></i>Contact
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- ====================================
  ———	COURSES SECTION
  ===================================== -->
  <section class="py-9" id="courses">
    <div class="container">
      <div class="section-title justify-content-center mb-4 mb-md-8 wow fadeInUp">
        <span class="shape shape-left bg-info"></span>
        <h2 class="text-danger">Our Courses</h2>
        <span class="shape shape-right bg-info"></span>
      </div>

      <div class="row wow fadeInUp">
        <div class="col-sm-6 col-lg-3 col-xs-12">
          <div class="card">
            <a href="course-single-left-sidebar.html" class="position-relative">
              <img class="card-img-top lazyestload" data-src="assets/img/courses/courses-img1.jpg" src="assets/img/courses/courses-img1.jpg" alt="Card image">
              <div class="card-img-overlay">
                <span class="badge badge-warning badge-rounded-circle">$50</span>
              </div>
            </a>
            <div class="card-body border-top-5 px-3 border-warning">
              <h3 class="card-title">
                <a class="text-warning text-capitalize d-block text-truncate" href="course-single-left-sidebar.html">Morbi Scelerisque Nibh.</a>
              </h3>
              <ul class="list-unstyled text-muted">
                <li class="mb-1">
                  <i class="fa fa-calendar-o mr-2" aria-hidden="true"></i>Age 2 to 4 Years
                </li>
                <li>
                  <i class="fa fa-clock-o mr-2" aria-hidden="true"></i>9.00AM-11.00AM
                </li>
              </ul>

              <p> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
              <div class="d-block">
                <a href="product-cart.html" class="btn btn-white text-uppercase mb-1 btn-hover-warning">
                  <i class="fa fa-shopping-basket mr-2" aria-hidden="true"></i>Add to Cart
                </a>
                <a href="course-single-left-sidebar.html" class="btn btn-link text-hover-warning pl-2 pl-lg-0">
                  <i class="fa fa-angle-double-right mr-1" aria-hidden="true"></i> More
                </a>
              </div>
            </div>
          </div>
        </div>

        <!-- Card -->
        <div class="col-sm-6 col-lg-3 col-xs-12">
          <div class="card">
            <a href="course-single-left-sidebar.html" class="position-relative">
              <img class="card-img-top lazyestload" data-src="assets/img/courses/courses-img2.jpg" src="assets/img/courses/courses-img2.jpg" alt="Card image">
              <div class="card-img-overlay">
                <span class="badge badge-success badge-rounded-circle">$50</span>
              </div>
            </a>
            <div class="card-body border-top-5 px-3 border-success">
              <h3 class="card-title">
                <a class="text-success text-capitalize d-block text-truncate" href="course-single-left-sidebar.html">Phasellus convallis eros.</a>
              </h3>
              <ul class="list-unstyled text-muted">
                <li class="mb-1">
                  <i class="fa fa-calendar-o mr-2" aria-hidden="true"></i>Age 2 to 4 Years
                </li>
                <li>
                  <i class="fa fa-clock-o mr-2" aria-hidden="true"></i>9.00AM-11.00AM
                </li>
              </ul>
              <p> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
              <div class="d-block">
                <a href="product-cart.html" class="btn btn-white text-uppercase mb-1 btn-hover-success">
                  <i class="fa fa-shopping-basket mr-2" aria-hidden="true"></i>Add to Cart
                </a>
                <a href="course-single-left-sidebar.html" class="btn btn-link text-hover-success pl-2 pl-lg-0">
                  <i class="fa fa-angle-double-right mr-1" aria-hidden="true"></i> More
                </a>
              </div>
            </div>
          </div>
        </div>

        <!-- Card -->
        <div class="col-sm-6 col-lg-3 col-xs-12">
          <div class="card">
            <a href="course-single-left-sidebar.html" class="position-relative">
              <img class="card-img-top lazyestload" data-src="assets/img/courses/courses-img3.jpg" src="assets/img/courses/courses-img3.jpg" alt="Card image">
              <div class="card-img-overlay">
                <span class="badge badge-danger badge-rounded-circle">$50</span>
              </div>
            </a>
            <div class="card-body border-top-5 px-3 border-danger">
              <h3 class="card-title">
                <a class="text-danger text-capitalize d-block text-truncate" href="course-single-left-sidebar.html">Suspendisse a libero da.</a>
              </h3>
              <ul class="list-unstyled text-muted">
                <li class="mb-1">
                  <i class="fa fa-calendar-o mr-2" aria-hidden="true"></i>Age 2 to 4 Years
                </li>
                <li>
                  <i class="fa fa-clock-o mr-2" aria-hidden="true"></i>9.00AM-11.00AM
                </li>
              </ul>
              <p> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
              <div class="d-block">
                <a href="product-cart.html" class="btn btn-white text-uppercase mb-1 btn-hover-danger">
                  <i class="fa fa-shopping-basket mr-2" aria-hidden="true"></i>Add to Cart
                </a>
                <a href="course-single-left-sidebar.html" class="btn btn-link text-hover-danger pl-2 pl-lg-0">
                  <i class="fa fa-angle-double-right mr-1" aria-hidden="true"></i> More
                </a>
              </div>
            </div>
          </div>
        </div>

        <!-- Card -->
        <div class="col-sm-6 col-lg-3 col-xs-12">
          <div class="card">
            <a href="course-single-left-sidebar.html" class="position-relative">
              <img class="card-img-top lazyestload" data-src="assets/img/courses/courses-img4.jpg" src="assets/img/courses/courses-img4.jpg" alt="Card image">
              <div class="card-img-overlay">
                <span class="badge badge-info badge-rounded-circle">$50</span>
              </div>
            </a>
            <div class="card-body border-top-5 px-3 border-info">
              <h3 class="card-title">
                <a class="text-info text-capitalize d-block text-truncate" href="course-single-left-sidebar.html">Aenean cursus urna nec.</a>
              </h3>
              <ul class="list-unstyled text-muted">
                <li class="mb-1">
                  <i class="fa fa-calendar-o mr-2" aria-hidden="true"></i>Age 2 to 4 Years
                </li>
                <li>
                  <i class="fa fa-clock-o mr-2" aria-hidden="true"></i>9.00AM-11.00AM
                </li>
              </ul>
              <p> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
              <div class="d-block">
                <a href="product-cart.html" class="btn btn-white text-uppercase mb-1 btn-hover-info">
                  <i class="fa fa-shopping-basket mr-2" aria-hidden="true"></i>Add to Cart
                </a>
                <a href="course-single-left-sidebar.html" class="btn btn-link text-hover-info pl-2 pl-lg-0">
                  <i class="fa fa-angle-double-right mr-1" aria-hidden="true"></i> More
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ====================================
  ———	TEACHERS SECTION
  ===================================== -->
  <section class="pt-9 pb-2 py-md-10 bg-purple" id="teachers" style="background-image: url(assets/img/background/avator-bg.png);">
    <div class="container">
      <div class="section-title justify-content-center mb-2 mb-md-8 wow fadeInUp">
        <span class="shape shape-left bg-danger"></span>
        <h2 class="text-white">Meet Our Teachers</h2>
        <span class="shape shape-right bg-danger"></span>
      </div>

      <div class="team-slider owl-carousel owl-theme wow fadeInUp" dir="ltr">
        <div class="card card-hover card-transparent shadow-none">
          <div class="card-img-wrapper position-relative shadow-sm rounded-circle mx-auto">
            <img class="card-img-top rounded-circle lazyestload" data-src="assets/img/avator/avator-img1.jpg" src="assets/img/avator/avator-img1.jpg" alt="carousel-img"/>
            <div class="card-img-overlay text-center rounded-circle">
              <ul class="list-unstyled mb-0 d-flex align-items-center h-100 justify-content-center">
                <li class="mr-2">
                  <a href="#" class="text-white">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="mr-2">
                  <a href="#" class="text-white">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="mr-2">
                  <a href="#" class="text-white">
                    <i class="fa fa-google-plus" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="mr-2">
                  <a href="#" class="text-white">
                    <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="card-body text-center">
            <a class="font-size-20 font-weight-medium d-block" href="teachers-details.html">Amanda Smith</a>
            <span class="text-white">English Teacher</span>
          </div>
        </div>

        <div class="card card-hover card-transparent shadow-none">
          <div class="card-img-wrapper position-relative shadow-sm rounded-circle mx-auto">
            <img class="card-img-top rounded-circle lazyestload" data-src="assets/img/avator/avator-img2.jpg" src="assets/img/avator/avator-img2.jpg" alt="carousel-img"/>
            <div class="card-img-overlay text-center rounded-circle">
              <ul class="list-unstyled mb-0 d-flex align-items-center h-100 justify-content-center">
                <li class="mr-2">
                  <a href="#" class="text-white">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="mr-2">
                  <a href="#" class="text-white">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="mr-2">
                  <a href="#" class="text-white">
                    <i class="fa fa-google-plus" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="mr-2">
                  <a href="#" class="text-white">
                    <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="card-body position-relative text-center pb-0">
            <a class="font-size-20 font-weight-medium d-block" href="teachers-details.html">Katrina Owen</a>
            <span class="text-white">History Teacher</span>
          </div>
        </div>

        <div class="card card-hover card-transparent shadow-none">
          <div class="card-img-wrapper position-relative shadow-sm rounded-circle mx-auto">
            <img class="card-img-top rounded-circle lazyestload" data-src="assets/img/avator/avator-img3.jpg" src="assets/img/avator/avator-img3.jpg" alt="carousel-img"/>
            <div class="card-img-overlay text-center rounded-circle">
              <ul class="list-unstyled mb-0 d-flex align-items-center h-100 justify-content-center">
                <li class="mr-2">
                  <a href="#" class="text-white">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="mr-2">
                  <a href="#" class="text-white">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="mr-2">
                  <a href="#" class="text-white">
                    <i class="fa fa-google-plus" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="mr-2">
                  <a href="#" class="text-white">
                    <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="card-body position-relative text-center pb-0">
            <a class="font-size-20 font-weight-medium d-block" href="teachers-details.html">Samanta Doe</a>
            <span class="text-white">Math Teacher</span>
          </div>
        </div>

        <div class="card card-hover card-transparent shadow-none">
          <div class="card-img-wrapper position-relative shadow-sm rounded-circle mx-auto">
            <img class="card-img-top rounded-circle lazyestload" data-src="assets/img/avator/avator-img4.jpg" src="assets/img/avator/avator-img4.jpg" alt="carousel-img"/>
            <div class="card-img-overlay text-center rounded-circle">
              <ul class="list-unstyled mb-0 d-flex align-items-center h-100 justify-content-center">
                <li class="mr-2">
                  <a href="#" class="text-white">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="mr-2">
                  <a href="#" class="text-white">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="mr-2">
                  <a href="#" class="text-white">
                    <i class="fa fa-google-plus" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="mr-2">
                  <a href="#" class="text-white">
                    <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="card-body position-relative text-center pb-0">
            <a class="font-size-20 font-weight-medium d-block" href="teachers-details.html">Monica Dincule</a>
            <span class="text-white">Languages Teacher</span>
          </div>
        </div>

        <div class="card card-hover card-transparent shadow-none">
          <div class="card-img-wrapper position-relative shadow-sm rounded-circle mx-auto">
            <img class="card-img-top rounded-circle lazyestload" data-src="assets/img/avator/avator-img3.jpg" src="assets/img/avator/avator-img3.jpg" alt="carousel-img"/>
            <div class="card-img-overlay text-center rounded-circle">
              <ul class="list-unstyled mb-0 d-flex align-items-center h-100 justify-content-center">
                <li class="mr-2">
                  <a href="#" class="text-white">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="mr-2">
                  <a href="#" class="text-white">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="mr-2">
                  <a href="#" class="text-white">
                    <i class="fa fa-google-plus" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="mr-2">
                  <a href="#" class="text-white">
                    <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="card-body position-relative text-center pb-0">
            <a class="font-size-20 font-weight-medium d-block" href="teachers-details.html">Jone Doe</a>
            <span class="text-white">History Teacher</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ====================================
  ———	GALLERY
  ===================================== -->
  <section class="pt-9 pb-7 py-md-10" id="gallery">
    <div class="container">
      <div class="section-title justify-content-center mb-4 mb-md-8 wow fadeInUp">
        <span class="shape shape-left bg-info"></span>
        <h2 class="text-danger">Our Gallery</h2>
        <span class="shape shape-right bg-info"></span>
      </div>

      <div class="d-flex justify-content-center wow fadeInUp">
        <div id="filters" class="button-group">
          <button class="button is-checked" data-filter="*">View All</button>
          <button class="button" data-filter=".charity">Charity</button>
          <button class="button" data-filter=".nature">Nature</button>
          <button class="button" data-filter=".children">Children</button>
        </div>
      </div>

      <div id="gallery-grid">
        <div class="row grid wow fadeInUp">
          <div class="col-md-4 col-lg-3 col-xs-12 element-item nature">
            <div class="media media-hoverable justify-content-center">
              <div class="position-relative w-100">
                <img class="media-img w-100 lazyestload" data-src="assets/img/gallery/gallery-img1.jpg" src="assets/img/gallery/gallery-img1.jpg" alt="gallery-img">
                <a class="media-img-overlay" data-fancybox="gallery" href="assets/img/gallery/gallery-lg-img1.jpg">
                  <div class="btn btn-squre">
                    <i class="fa fa-search-plus"></i>
                  </div>
                </a>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-lg-3 col-xs-12 element-item charity">
            <div class="media media-hoverable justify-content-center">
              <div class="position-relative w-100">
                <img class="media-img w-100 lazyestload" data-src="assets/img/gallery/gallery-img2.jpg" src="assets/img/gallery/gallery-img2.jpg" alt="gallery-img">
                <a class="media-img-overlay" data-fancybox="gallery" href="assets/img/gallery/gallery-lg-img2.jpg">
                  <div class="btn btn-squre">
                    <i class="fa fa-search-plus"></i>
                  </div>
                </a>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-lg-3 col-xs-12 element-item children nature">
            <div class="media media-hoverable justify-content-center">
              <div class="position-relative w-100">
                <img class="media-img w-100 lazyestload" data-src="assets/img/gallery/gallery-img3.jpg" src="assets/img/gallery/gallery-img3.jpg" alt="gallery-img">
                <a class="media-img-overlay" data-fancybox="gallery" href="assets/img/gallery/gallery-lg-img3.jpg">
                  <div class="btn btn-squre">
                    <i class="fa fa-search-plus"></i>
                  </div>
                </a>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-lg-3 col-xs-12 element-item children charity">
            <div class="media media-hoverable justify-content-center">
              <div class="position-relative w-100">
                <img class="media-img w-100 lazyestload" data-src="assets/img/gallery/gallery-img4.jpg" src="assets/img/gallery/gallery-img4.jpg" alt="gallery-img">
                <a class="media-img-overlay" data-fancybox="gallery" href="assets/img/gallery/gallery-lg-img4.jpg">
                  <div class="btn btn-squre">
                    <i class="fa fa-search-plus"></i>
                  </div>
                </a>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-lg-3 col-xs-12 element-item nature">
            <div class="media media-hoverable justify-content-center">
              <div class="position-relative w-100">
                <img class="media-img w-100 lazyestload" data-src="assets/img/gallery/gallery-img5.jpg" src="assets/img/gallery/gallery-img5.jpg" alt="gallery-img">
                <a class="media-img-overlay" data-fancybox="gallery"
                href="assets/img/gallery/gallery-lg-img5.jpg">
                  <div class="btn btn-squre">
                    <i class="fa fa-search-plus"></i>
                  </div>
                </a>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-lg-3 col-xs-12 element-item children charity">
            <div class="media media-hoverable justify-content-center">
              <div class="position-relative w-100">
                <img class="media-img w-100 lazyestload" data-src="assets/img/gallery/gallery-img6.jpg" src="assets/img/gallery/gallery-img6.jpg" alt="gallery-img">
                <a class="media-img-overlay" data-fancybox="gallery" href="assets/img/gallery/gallery-lg-img6.jpg">
                  <div class="btn btn-squre">
                    <i class="fa fa-search-plus"></i>
                  </div>
                </a>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-lg-3 col-xs-12 element-item children charity">
            <div class="media media-hoverable justify-content-center">
              <div class="position-relative w-100">
                <img class="media-img w-100 lazyestload" data-src="assets/img/gallery/gallery-img7.jpg" src="assets/img/gallery/gallery-img7.jpg" alt="gallery-img">
                <a class="media-img-overlay" data-fancybox="gallery" href="assets/img/gallery/gallery-lg-img7.jpg">
                  <div class="btn btn-squre">
                    <i class="fa fa-search-plus"></i>
                  </div>
                </a>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-lg-3 col-xs-12 element-item nature">
            <div class="media media-hoverable justify-content-center">
              <div class="position-relative w-100">
                <img class="media-img w-100 lazyestload" data-src="assets/img/gallery/gallery-img8.jpg" src="assets/img/gallery/gallery-img8.jpg" alt="gallery-img">
                <a class="media-img-overlay" data-fancybox="gallery" href="assets/img/gallery/gallery-lg-img8.jpg">
                  <div class="btn btn-squre">
                    <i class="fa fa-search-plus"></i>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="btn-aria text-center mt-4 wow fadeInUp">
        <a href="photo-gallery.html" class="btn btn-danger text-uppercase box-shadow">View More</a>
      </div>
    </div>
  </section>

  <!-- ====================================
  ———	COUNTER-UP SECTION
  ===================================== -->
  <section class="py-9 pb-8 bg-parallax" style="background-image: url(assets/img/background/countup-bg-img.jpg);">
    <div class="container">
      <div class="sectionTitleSmall text-center mb-7 wow fadeInUp">
        <h2 class="font-weight-bold text-white">Some Fun Facts</h2>
        <p class="text-white font-size-15">Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod</p>
      </div>

      <div class="row wow fadeInUp" id="counter">
        <div class="col-sm-3 col-xs-12">
          <div  class="text-center text-white mb-5">
            <div class="counter-value" data-count="179">0</div>
            <span class="d-inline-block bg-warning text-uppercase font-weight-medium rounded-sm shadow-sm mt-1 py-2 px-3">Events Held</span>
          </div>
        </div>

        <div class="col-sm-3 col-xs-12">
          <div class="text-center text-white mb-5">
            <div class="counter-value" data-count="548">0</div>
            <span class="d-inline-block bg-success text-uppercase font-weight-medium rounded-sm shadow-sm mt-1 py-2 px-3">happy funs</span>
          </div>
        </div>

        <div class="col-sm-3 col-xs-12">
          <div class="text-center text-white mb-5">
            <div class="counter-value" data-count="305">0</div>
            <span class="d-inline-block bg-danger text-uppercase font-weight-medium rounded-sm shadow-sm mt-1 py-2 px-3">happy Clients</span>
          </div>
        </div>

        <div class="col-sm-3 col-xs-12">
          <div class="text-center text-white mb-5">
            <div class="counter-value" data-count="1000">0</div>
            <span class="d-inline-block bg-info text-uppercase font-weight-medium rounded-sm shadow-sm mt-1 py-2 px-3">hours support</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ====================================
  ———	BLOG SECTION
  ===================================== -->
  <section class="pt-9 pb-7" id="blog">
    <div class="container">
      <div class="section-title justify-content-center mb-4 mb-md-8 wow fadeInUp">
        <span class="shape shape-left bg-info"></span>
        <h2 class="text-danger">Latest News</h2>
        <span class="shape shape-right bg-info"></span>
      </div>

      <div class="row wow fadeInUp">
        <div class="col-md-4">
          <div class="card">
            <div class="position-relative">
              <a href="blog-single-left-sidebar.html">
                <img class="card-img-top lazyestload" data-src="assets/img/blog/blog-img1.jpg" src="assets/img/blog/blog-img1.jpg" alt="Card image">
              </a>
              <div class="card-img-overlay p-0">
                <span class="badge badge-rounded badge-warning m-4"> 10 <br> July</span>
              </div>
            </div>

            <div class="card-body border-top-5 px-3 border-warning">
              <h3 class="card-title">
                <a class="text-warning text-capitalize d-block text-truncate" href="blog-single-left-sidebar.html">The standard chunk of Lorem.</a>
              </h3>
              <ul class="list-unstyled d-flex flex-md-column flex-lg-row">
                <li class="mr-2">
                  <a class="text-muted" href="blog-single-left-sidebar.html">
                    <i class="fa fa-user mr-2" aria-hidden="true"></i>Jone Doe
                  </a>
                </li>
                <li class="mr-2">
                  <a class="text-muted" href="blog-single-left-sidebar.html">
                    <i class="fa fa-comments-o mr-2" aria-hidden="true"></i>4 Comments
                  </a>
                </li>
              </ul>
              <p class="mb-2"> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classi cal Latin literature.</p>
              <a class="btn btn-link text-hover-warning pl-0" href="blog-single-left-sidebar.html">
                <i class="fa fa-angle-double-right mr-1" aria-hidden="true"></i> Read More
              </a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card">
            <div class="position-relative">
              <a href="blog-single-left-sidebar.html">
                <img class="card-img-top lazyestload" data-src="assets/img/blog/blog-img2.jpg" src="assets/img/blog/blog-img2.jpg" alt="Card image">
              </a>
              <div class="card-img-overlay p-0">
                <span class="badge badge-success badge-rounded m-4"> 14 <br> Jun</span>
              </div>
            </div>

            <div class="card-body border-top-5 px-3 border-success">
              <h3 class="card-title">
                <a class="text-success text-capitalize d-block text-truncate" href="blog-single-left-sidebar.html">Vestibulum congue massa vitae.</a>
              </h3>
              <ul class="list-unstyled d-flex flex-md-column flex-lg-row">
                <li class="mr-2">
                  <a class="text-muted" href="blog-single-left-sidebar.html">
                    <i class="fa fa-user mr-2" aria-hidden="true"></i>Jone Doe
                  </a>
                </li>
                <li class="mr-2">
                  <a class="text-muted" href="blog-single-left-sidebar.html">
                    <i class="fa fa-comments-o mr-2" aria-hidden="true"></i>4 Comments
                  </a>
                </li>
              </ul>
              <p class="mb-2"> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classi cal Latin literature.</p>
              <a class="btn btn-link text-hover-success pl-0" href="blog-single-left-sidebar.html">
                <i class="fa fa-angle-double-right mr-1" aria-hidden="true"></i> Read More
              </a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card">
            <div class="position-relative">
              <a href="blog-single-left-sidebar.html">
                <img class="card-img-top lazyestload" data-src="assets/img/blog/blog-img3.jpg" src="assets/img/blog/blog-img3.jpg" alt="Card image">
              </a>
              <div class="card-img-overlay p-0">
                <span class="badge badge-danger badge-rounded m-4"> 14 <br> Jun</span>
              </div>
            </div>

            <div class="card-body border-top-5 px-3 border-danger">
              <h3 class="card-title">
                <a class="text-danger text-capitalize d-block text-truncate" href="blog-single-left-sidebar.html">Vestibulum congue massa vitae.</a>
              </h3>
              <ul class="list-unstyled d-flex flex-md-column flex-lg-row">
                <li class="mr-2">
                  <a class="text-muted" href="blog-single-left-sidebar.html">
                    <i class="fa fa-user mr-2" aria-hidden="true"></i>Jone Doe
                  </a>
                </li>
                <li class="mr-2">
                  <a class="text-muted" href="blog-single-left-sidebar.html">
                    <i class="fa fa-comments-o mr-2" aria-hidden="true"></i>4 Comments
                  </a>
                </li>
              </ul>
              <p class="mb-2"> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classi cal Latin literature.</p>
              <a class="btn btn-link text-hover-danger pl-0" href="blog-single-left-sidebar.html">
                <i class="fa fa-angle-double-right mr-1" aria-hidden="true"></i> Read More
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="btn-aria text-center mt-4 wow fadeInUp">
        <a href="blog-grid.html" class="btn btn-danger text-uppercase">View More</a>
      </div>
    </div>
  </section>

  <!-- ====================================
  ———	CONTACT SECTION
  ===================================== -->
  <section class="bg-light py-7 py-md-10">
    <div class="container">
      <div class="row wow fadeInUp">
        <div class="col-sm-6 col-xs-12">
          <div class="section-title align-items-baseline mb-4">
            <h2 class="text-danger px-0 mb-0">Our Address</h2>
          </div>
          <p class="text-dark font-size-15">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <ul class="list-unstyled">
            <li class="media align-items-center mb-3">
              <div class="icon-rounded-circle-small bg-warning mr-2">
                <i class="fa fa-map-marker text-white"></i>
              </div>
              <div class="media-body">
                <p class="mb-0">9/4/C Ring Road,Garden Street Dhaka,Bangladesh-1200</p>
              </div>
            </li>
            <li class="media align-items-center mb-3">
              <div class="icon-rounded-circle-small bg-success mr-2">
                <i class="fa fa-envelope text-white"></i>
              </div>
              <div class="media-body">
                <p class="mb-0"><a class="text-color" href="mailto:hello@example.com">hello@example.com</a></p>
              </div>
            </li>
            <li class="media align-items-center mb-3">
              <div class="icon-rounded-circle-small bg-info mr-2">
                <i class="fa fa-phone text-white"></i>
              </div>
              <div class="media-body">
                <p class="mb-0"><a class="text-color" href="tel:[00] 333 555 888">333 555 888</a></p>
              </div>
            </li>
          </ul>
        </div>
        <div class="col-sm-6 col-xs-12">
          <form>
            <div class="form-group form-group-icon">
              <i class="fa fa-user "></i>
              <input type="text" class="form-control border-warning" placeholder="First name" required>
            </div>
            <div class="form-group form-group-icon">
              <i class="fa fa-envelope "></i>
              <input type="email" class="form-control border-success" placeholder="Email address" required>
            </div>
            <div class="form-group form-group-icon">
              <i class="fa fa-comments "></i>
              <textarea class="form-control border-info" placeholder="Write message" rows="6"></textarea>
            </div>
              <button type="submit" class="btn btn-danger float-right text-uppercase">
                Send Message
              </button>
          </form>
        </div>
      </div>
    </div>
  </section>

  </div> <!-- element wrapper ends -->

  {{-- Login Modal --}}
  @include('components.modals.login')

  {{-- Include Footer --}}
  @include('layouts.guest.footer')

  <!-- Modal Create Account -->
  <div class="modal fade" id="modal-createAccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-sm rounded" role="document">
      <div class="modal-content">
        <div class="bg-warning rounded-top p-2">
          <h3 class="text-white font-weight-bold mb-0 ml-2">Create An Account</h3>
        </div>

        <div class="border rounded-bottom-md border-top-0">
          <div class="p-3">
            <form action="#" method="POST" role="form">
              <div class="form-group form-group-icon">
                <input type="text" class="form-control border" placeholder="Name" required="">
              </div>

              <div class="form-group form-group-icon">
                <input type="text" class="form-control border" placeholder="User name" required="">
              </div>

              <div class="form-group form-group-icon">
                <input type="text" class="form-control border" placeholder="Phone" required="">
              </div>

              <div class="form-group form-group-icon">
                <input type="password" class="form-control border" placeholder="Password" required="">
              </div>

              <div class="form-group form-group-icon">
                <input type="password" class="form-control border" placeholder="Re-Password" required="">
              </div>

              <div class="form-group">
                <button type="submit" class="btn btn-danger text-uppercase w-100">Register</button>
              </div>

              <div class="form-group text-center text-secondary mb-0">
                <p class="mb-0">Allready have an account? <a class="text-danger" href="#">Log in</a></p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Enroll -->
  <div class="modal fade" id="modal-enrolAccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-sm rounded" role="document">
      <div class="modal-content">
        <div class="bg-pink rounded-top p-2">
          <h3 class="text-white font-weight-bold mb-0 ml-2">Create An Account</h3>
        </div>

        <div class="border rounded-bottom-md border-top-0">
          <div class="p-3">
            <form action="#" method="POST" role="form">
              <div class="form-group form-group-icon">
                <input type="text" class="form-control border" placeholder="Name" required="">
              </div>

              <div class="form-group form-group-icon">
                <input type="text" class="form-control border" placeholder="User name" required="">
              </div>

              <div class="form-group form-group-icon">
                <input type="text" class="form-control border" placeholder="Phone" required="">
              </div>

              <div class="form-group form-group-icon">
                <input type="password" class="form-control border" placeholder="Password" required="">
              </div>

              <div class="form-group form-group-icon">
                <input type="password" class="form-control border" placeholder="Re-Password" required="">
              </div>

              <div class="form-group">
                <button type="submit" class="btn btn-pink text-uppercase text-white w-100">Register</button>
              </div>

              <div class="form-group text-center text-secondary mb-0">
                <p class="mb-0">Allready have an account? <a class="text-pink" href="#">Log in</a></p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Products -->
  <div class="modal fade" id="modal-products" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header border-0">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-sm-6 col-xs-12">
              <img class="img-fluid d-block mx-auto" src="assets/img/products/products-preview01.jpg" alt="preview01.jpg">
            </div>
            <div class="col-sm-6 col-xs-12">
              <div class="product-single">
                <h1>Barbie Racing Car</h1>

                <span class="pricing font-size-55">$50 <del>$60</del></span>

                <p class="mb-7">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                  incididunt ut
                  labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.</p>

                <div class="add-cart mb-0">
                  <div class="count-input">
                    <input class="quantity btn-primary" type="text" value="1">
                    <a class="incr-btn incr-up" data-action="decrease" href="#"><i class="fa fa-caret-up" aria-hidden="true"></i></a>
                    <a class="incr-btn incr-down" data-action="increase" href="#"><i class="fa fa-caret-down" aria-hidden="true"></i></a>
                  </div>
                  <button type="button" class="btn btn-danger text-uppercase" onclick="location.href='product-cart.html';">Add to cart</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--scrolling-->
  <div class="scrolling">
    <a href="#pageTop" class="back-to-top" id="back-to-top" style="opacity: 1;">
      <i class="fa fa-arrow-up" aria-hidden="true"></i>
    </a>
  </div>

  <!-- Javascript -->
  {{-- <script src="assets/plugins/jquery/jquery.min.js"></script>
  <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/plugins/owl-carousel/owl.carousel.min.js"></script>
  <script src="assets/plugins/fancybox/jquery.fancybox.min.js"></script>
  <script src="assets/plugins/isotope/isotope.min.js"></script>
  <script src="assets/plugins/syotimer/jquery.syotimer.min.js"></script>
  <script src="assets/plugins/select2/js/select2.min.js"></script>
  <script src="assets/plugins/no-ui-slider/nouislider.min.js"></script>
  <script src="assets/plugins/lazyestload/lazyestload.js"></script>
  <script src="assets/plugins/velocity/velocity.min.js"></script>
  <script src="assets/plugins/images-loaded/js/imagesloaded.pkgd.min.js"></script>
  <script src="assets/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
  <script src="assets/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script> --}}

  <!-- Load revolution slider only on Local File Systems. The following part can be removed on Server -->
  <!-- 
  <script src="assets/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
  <script src="assets/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
  <script src="assets/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script> 
  -->

  {{-- <script src="assets/plugins/wow/wow.min.js"></script> --}}
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDU79W1lu5f6PIiuMqNfT1C6M0e_lq1ECY"></script>

  {{-- <script src="assets/js/kidz.js"></script> --}}
  <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
  <script type="text/javascript" src="{{ mix('js/kidz.js') }}"></script>

    {{-- If there is error, the modal will be trigger.
    {{dd($errors)}}
    @if(!empty($errors) )
      <script>
      $(function() {
          $('#modal-login').modal('show');
      });
      </script>
    @endif --}}

  @yield('app.js')
</body>

</html>

