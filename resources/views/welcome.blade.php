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
        <div class="col-sm-6 col-xs-12 order-sm-2 align-self-md-start">
          <img class="img-fluid px-8 px-md-0" data-src="{{ asset('assets/img/features/features-img4.jpg') }}" src="{{ asset('assets/img/features/features-img4.jpg') }}" height="525px" width="525px" alt="about-school">
        </div>
  
        <div class="col-sm-6 col-xs-12">
          <div class="mb-lg-7 mb-xl-10">
            {{-- 524  x 445 --}}
            <div class="section-title align-items-baseline mt-5 mt-md-0 mb-3 px-5 pl-md-1">
              <h2 class="text-color text-uppercase pl-lg-0"><span class="small text-danger font-weight-bold">Welcome to <br> </span> Funza Progress tracking Tool</h2>
            </div>
            <p class="font-size-18 font-weight-medium px-7 pl-md-6 pr-md-0 pl-lg-0">Funza is a software tool that enhances the application of individualized learning curriculum such as the Competency Based Curriculum.</p>
            <h3>How?</h3>
            <p class="text-title text-dark font-size-18 font-weight-medium px-7 pl-md-6 pr-md-0 pl-lg-0">We enable schools to capture student performance, monitor student progress,
               and generate reports that provide insight to teachers on interventions for helping each student.
            </p>
            <div class="px-7 pr-md-0 pl-md-6 pl-lg-0">
              <a href="{{Route('school.create')}}" class="btn btn-danger text-uppercase mt-5">Register your school</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- ====================================
  ———	CALL TO ACTION
  ===================================== -->
  <section class="py-9 bg-parallax" style="background-image: url(assets/img/background/footer-bg-img.jpg);">
    <div class="container">
      <div class="wow fadeInUp">
        <div class="section-title justify-content-center">
          <h2 class="text-white text-center">Need More Information?</h2>
        </div>
        <div class="text-center">
          <p class="text-white font-size-18 mb-0">Whether you have a question about features, trials, need a demo or anything else, our team is ready to answer all your questions.</p>
          <a href="#contact" class="btn btn-danger shadow-sm text-uppercase mt-4">
            <i class="fa fa-envelope mr-2" aria-hidden="true"></i>Get in Touch
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- ====================================
  ———	TESTIMONIALS SECTION
  ===================================== -->
  <section class="pt-10">
    <div class="container">
      <div class="section-title justify-content-center mb-9 mb-md-10 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
        <span class="shape shape-left bg-info"></span>
        <h2 class="text-danger">Testimonials</h2>
        <span class="shape shape-right bg-info"></span>
      </div>
  
      <div class="row wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
        <div class="col-md-6 col-lg-4">
          <div class="card bg-warning card-hover mb-9">
            <div class="card-body text-center px-md-5 px-lg-6 my-2">
              <div class="card-icon-border-large border-warning mtn-80">
                <i class="fa fa-quote-left text-warning" aria-hidden="true"></i>
              </div>
              <blockquote class="blockquote blockquote-sm mt-2">
                <p class="font-normal mb-5"> Integrating Funza has improved the quality of service we provide as a learning institution.</p>
                <footer class="blockquote-footer text-uppercase text-white">Amanda Bett<cite class="d-block text-capitalize font-size-14 opacity-70" title="Source Title">Precious Blood Academy Director</cite></footer>
              </blockquote>
            </div>
          </div>
        </div>
  
        <div class="col-md-6 col-lg-4">
          <div class="card bg-success card-hover mb-9">
            <div class="card-body text-center px-md-5 px-lg-6 my-2">
              <div class="card-icon-border-large border-success mtn-80">
                <i class="fa fa-quote-left text-success" aria-hidden="true"></i>
              </div>
              <blockquote class="blockquote blockquote-sm mt-2">
                <p class="font-normal mb-5">Funza has reduced the effort in identifying where students are struggling and how to help them.</p>
                <footer class="blockquote-footer text-uppercase text-white">Jeff Gichira <cite class="d-block text-capitalize font-size-14 opacity-70" title="Source Title">Teacher</cite></footer>
              </blockquote>
            </div>
          </div>
        </div>
  
        <div class="col-md-6 col-lg-4">
          <div class="card bg-danger card-hover mb-9">
            <div class="card-body text-center px-md-5 px-lg-6 my-2">
              <div class="card-icon-border-large border-danger mtn-80">
                <i class="fa fa-quote-left text-danger" aria-hidden="true"></i>
              </div>
              <blockquote class="blockquote blockquote-sm mt-2">
                <p class="font-normal mb-5">Funza collects and analyzes detaied student performance data that helps us form effective strategy </p>
                <footer class="blockquote-footer text-uppercase text-white">Derek Otiende<cite class="d-block text-capitalize font-size-14 opacity-70" title="Source Title">KNEC Official</cite></footer>
              </blockquote>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

    <!-- ====================================
  ———	CONTACT US SECTION
  ===================================== -->
  <section class="pt-10">
  <div class="pt-8 pb-7  bg-repeat" style="background-image: url(assets/img/background/footer-bg-img-1.png);">
    <div class="container" id="contact">
      <div class="row wow fadeInUp">
        <div class="col-sm-6 col-xs-12">
          <div class="section-title align-items-baseline mb-4">
            <h2 class="text-danger px-0 mb-0">Our Address</h2>
          </div>
          <ul class="list-unstyled">
            <li class="media align-items-center mb-3">
              <div class="icon-rounded-circle-small bg-warning mr-2">
                <i class="fa fa-map-marker text-white"></i>
              </div>
              <div class="media-body">
                <p class="mb-0">Riverside Drive, Chiromo</p>
              </div>
            </li>
            <li class="media align-items-center mb-3">
              <div class="icon-rounded-circle-small bg-success mr-2">
                <i class="fa fa-envelope text-white"></i>
              </div>
              <div class="media-body">
                <p class="mb-0"><a class="text-color" href="mailto:hello@example.com">info@funza.com</a></p>
              </div>
            </li>
            <li class="media align-items-center mb-3">
              <div class="icon-rounded-circle-small bg-info mr-2">
                <i class="fa fa-phone text-white"></i>
              </div>
              <div class="media-body">
                <p class="mb-0"><a class="text-color" href="tel:[00] 333 555 888">(+254) 717831279</a></p>
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
              <button type="submit" class="btn btn-danger text-uppercase">
                Send Message
              </button>
          </form>
        </div>
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

