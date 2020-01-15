<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Site Tittle -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Funza</title>

  <!-- Plugins css Style -->
  <link href="{{ url('assets/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ url('assets/plugins/no-ui-slider/nouislider.min.css') }}" rel="stylesheet" />
  <link href="{{ url('assets/plugins/owl-carousel/owl.carousel.min.css') }}" rel="stylesheet" media="screen">
  <link href="{{ url('assets/plugins/owl-carousel/owl.theme.default.min.css') }}" rel="stylesheet" media="screen">
  <link href="{{ url('assets/plugins/fancybox/jquery.fancybox.min.css') }}" rel="stylesheet" />
  <link href="{{ url('assets/plugins/isotope/isotope.min.css') }}" rel="stylesheet" />
  <link href="{{ url('assets/plugins/animate/animate.css') }}" rel="stylesheet">
  <link href="{{ url('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
  <link href="{{ url('assets/plugins/revolution/css/settings.css') }}" rel="stylesheet">
  <link href="{{ url('assets/plugins/revolution/css/layers.css') }}" rel="stylesheet">
  <link href="{{ url('assets/plugins/revolution/css/navigation.css') }}" rel="stylesheet">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Dosis:300,400,600,700|Open+Sans:300,400,600,700" rel="stylesheet">

  <!-- Custom css -->
  <!-- Styles -->
  <link href="{{ url('css/app.css') }}" rel="stylesheet">

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

  <!-- ====================================
  ——— HEADER
  ===================================== -->
  <header class="header" id="pageTop">
    <!-- Top Color Bar -->
    <div class="color-bars">
      <div class="container-fluid">
        <div class="row">
          <div class="col color-bar bg-warning d-none d-md-block"></div>
          <div class="col color-bar bg-success d-none d-md-block"></div>
          <div class="col color-bar bg-danger d-none d-md-block"></div>
          <div class="col color-bar bg-info d-none d-md-block"></div>
          <div class="col color-bar bg-purple d-none d-md-block"></div>
          <div class="col color-bar bg-pink d-none d-md-block"></div>
          <div class="col color-bar bg-warning"></div>
          <div class="col color-bar bg-success"></div>
          <div class="col color-bar bg-danger"></div>
          <div class="col color-bar bg-info"></div>
          <div class="col color-bar bg-purple"></div>
          <div class="col color-bar bg-pink"></div>
        </div>
      </div>
    </div>

            <!-- Top Bar-->
        <!-- d-none d-md-block -->
        <div class=" bg-stone  top-bar">
          <div class="container">
            <div class="row">
              <div class="col-lg-7 d-none d-lg-block">
                <ul class="list-inline d-flex justify-content-xl-start align-items-center h-100 mb-0">
                  <li>
                    <span class="bg-warning icon-header mr-xl-2">
                      <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                    <a href="mailto:info@yourdomain.com" class="mr-lg-4 mr-xl-6 text-white opacity-80">info@yourdomain.com</a>
                  </li>
                  <li>
                    <span class="bg-success icon-header mr-xl-2">
                      <i class="fa fa-phone" aria-hidden="true"></i>
                    </span>
                    <a href="tel:+1 234 567 8900" class="mr-lg-4 mr-xl-6 text-white opacity-80"> +1 234 567 8900 </a>
                  </li>
                  <li class="text-white">
                    <span class="bg-pink icon-header">
                      <i class="fa fa-clock-o" aria-hidden="true"></i>
                    </span>
                    <span class="opacity-80">Open: 9am - 6pm</span>
                  </li>
                </ul>
              </div>

              <div class="col-lg-5">
                <ul class="list-inline d-flex mb-0 justify-content-xl-end justify-content-center align-items-center mr-xl-2">
                  <li>
                    <span class="bg-info icon-header mr-lg-0 mr-xl-1">
                      <i class="fa fa-globe" aria-hidden="true"></i>
                    </span>
                  </li>
                  <li class="mr-3 mr-md-4 mr-lg-3 mr-xl-5 dropdown dropdown-sm">
                    <button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false"> Language </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">English</a>
                      <a class="dropdown-item" href="#">Spanish</a>
                      <a class="dropdown-item" href="#">Hindi</a>
                    </div>
                  </li>

                  <li class="text-white mr-md-3 mr-lg-2 mr-xl-5">
                    <span class="bg-purple icon-header mr-1 mr-md-2 mr-lg-1 mr-xl-2">
                      <i class="fa fa-unlock-alt text-white font-size-13" aria-hidden="true"></i>
                    </span>
                    <a class="text-white font-weight-medium opacity-80" href="javascript:void(0)" data-toggle="modal"
                      data-target="#modal-login">
                      Login
                    </a>
                    <span class="text-white opacity-80">or</span>
                    <a class="text-white font-weight-medium opacity-80" href="javascript:void(0)" data-toggle="modal" data-target="#modal-createAccount">Create
                      an account</a>
                  </li>

                  <li class="cart-dropdown d-none d-md-block">
                    <div data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                      <a href="javascript:void(0)">
                        <span class="rounded-sm bg-pink icon-small icon-badge d-none">
                          <i class="fa fa-close text-white" aria-hidden="true"></i>
                        </span>
                        <span class="rounded-sm bg-pink icon-small icon-badge">
                          <i class="fa fa-shopping-basket text-white" aria-hidden="true"></i>
                          <span class="badge bg-warning">3</span>
                        </span>
                      </a>
                    </div>
                    <div class="dropdown-menu dropdown-menu-right">
                      <ul class="bg-white list-unstyled">
                        <li class="d-flex align-items-center">
                          <i class="fa fa-shopping-basket font-size-20 mr-3" aria-hidden="true"></i>
                          <h3 class="text-capitalize font-weight-bold mb-0">3 items in your cart</h3>
                        </li>
                        <hr>
                        <li>
                          <a href="product-single.html">
                            <div class="media">
                              <div class="image">
                                <img class="bg-light rounded-sm px-5 py-3 mr-4" src="assets/img/products/product-sm.png" alt="cart-Image">
                              </div>
                              <div class="media-body">
                                <div class="d-flex justify-content-between">
                                  <h4 class="text-dark">Barbie Racing Car</h4>
                                  <span class="cancel">
                                    <i class="fa fa-close text-muted" aria-hidden="true"></i>
                                  </span>
                                </div>
                                <div class="price">
                                  <span class="text-warning font-weight-medium">$50</span>
                                </div>
                                <span class="text-muted font-weight-medium text-muted">Qnt: 1</span>
                              </div>
                            </div>
                          </a>
                          <hr>
                        </li>
                        <li>
                          <a href="product-single.html">
                            <div class="media">
                              <div class="image">
                                <img class="bg-light rounded-sm px-5 py-3 mr-4" src="assets/img/products/product-sm.png" alt="cart-Image">
                              </div>
                              <div class="media-body">
                                <div class="d-flex justify-content-between">
                                  <h4 class="text-dark">Barbie Racing Car</h4>
                                  <span class="cancel">
                                    <i class="fa fa-close text-muted" aria-hidden="true"></i>
                                  </span>
                                </div>
                                <div class="price">
                                  <span class="text-warning font-weight-medium">$50</span>
                                </div>
                                <span class="text-muted font-weight-medium">Qnt: 1</span>
                              </div>
                            </div>
                          </a>
                          <hr>
                        </li>
                        <li>
                          <a href="product-single.html">
                            <div class="media">
                              <div class="image">
                                <img class="bg-light rounded-sm px-5 py-3 mr-4" src="assets/img/products/product-sm.png" alt="cart-Image">
                              </div>
                              <div class="media-body">
                                <div class="d-flex justify-content-between">
                                  <h4 class="text-dark font-weight-bold">Barbie Racing Car</h4>
                                  <span class="cancel">
                                    <i class="fa fa-close text-muted" aria-hidden="true"></i>
                                  </span>
                                </div>
                                <div class="price">
                                  <span class="text-warning font-weight-medium">$50</span>
                                </div>
                                <span class="text-muted font-weight-medium">Qnt: 1</span>
                              </div>
                            </div>
                          </a>
                          <hr>
                        </li>
                        <li>
                          <div class="d-flex justify-content-between mb-3">
                            <h3 class="cart-total font-weight-bold">Subtotal</h3>
                            <h3 class="cart-price font-weight-bold">$150</h3>
                          </div>
                          <div class="cart-button d-flex justify-content-between">
                            <button type="button" class="btn btn-danger text-uppercase px-4 shadow-sm mr-3" onclick="location.href='product-checkout-step-1.html';">Checkout</button>
                            <button type="button" class="btn btn-danger text-uppercase px-4 shadow-sm" onclick="location.href='product-cart.html';">View
                              Cart</button>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>


    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-scrollUp navbar-sticky navbar-white">
      <div class="container">
        <a class="navbar-brand" href="index.html">
          <img class="d-inline-block" src="assets/img/logo-school.png" alt="Kidz School">
        </a>

        <!-- cart-dropdown -->
        <div class="dropdown cart-dropdown ml-auto mr-5 d-md-none">
          <div data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <a href="javascript:void(0)">
              <span class="rounded-sm bg-pink icon-small icon-badge d-none">
                <i class="fa fa-close text-white" aria-hidden="true"></i>
              </span>
              <span class="rounded-sm bg-pink icon-small icon-badge ">
                <i class="fa fa-shopping-basket text-white" aria-hidden="true"></i>
                <span class="badge bg-warning">3</span>
              </span>
            </a>
          </div>
          <div class="dropdown-menu dropdown-menu-right">
            <ul class="bg-white list-unstyled">
              <li class="d-flex align-items-center">
                <i class="fa fa-shopping-basket font-size-20 mr-3" aria-hidden="true"></i>
                <h3 class="text-capitalize font-weight-bold mb-0">3 items in your cart</h3>
              </li>
              <hr>
              <li>
                <a href="product-single.html">
                  <div class="media">
                    <div class="image">
                      <img class="bg-light rounded-sm px-5 py-3 mr-4" src="assets/img/products/product-sm.png" alt="cart-Image">
                    </div>
                    <div class="media-body">
                      <div class="d-flex justify-content-between">
                        <h4 class="text-dark">Barbie Racing Car</h4>
                        <span class="cancel">
                          <i class="fa fa-close text-muted" aria-hidden="true"></i>
                        </span>
                      </div>
                      <div class="price">
                        <span class="text-warning font-weight-medium">$50</span>
                      </div>
                      <span class="text-muted font-weight-medium text-muted">Qnt: 1</span>
                    </div>
                  </div>
                </a>
                <hr>
              </li>
              <li>
                <a href="product-single.html">
                  <div class="media">
                    <div class="image">
                      <img class="bg-light rounded-sm px-5 py-3 mr-4" src="assets/img/products/product-sm.png" alt="cart-Image">
                    </div>
                    <div class="media-body">
                      <div class="d-flex justify-content-between">
                        <h4 class="text-dark">Barbie Racing Car</h4>
                        <span class="cancel">
                          <i class="fa fa-close text-muted" aria-hidden="true"></i>
                        </span>
                      </div>
                      <div class="price">
                        <span class="text-warning font-weight-medium">$50</span>
                      </div>
                      <span class="text-muted font-weight-medium">Qnt: 1</span>
                    </div>
                  </div>
                </a>
                <hr>
              </li>
              <li>
                <a href="product-single.html">
                  <div class="media">
                    <div class="image">
                      <img class="bg-light rounded-sm px-5 py-3 mr-4t" src="assets/img/products/product-sm.png" alt="cart-Image">
                    </div>
                    <div class="media-body">
                      <div class="d-flex justify-content-between">
                        <h4 class="text-dark font-weight-bold">Barbie Racing Car</h4>
                        <span class="cancel">
                          <i class="fa fa-close text-muted" aria-hidden="true"></i>
                        </span>
                      </div>
                      <div class="price">
                        <span class="text-warning font-weight-medium">$50</span>
                      </div>
                      <span class="text-muted font-weight-medium">Qnt: 1</span>
                    </div>
                  </div>
                </a>
                <hr>
              </li>
              <li>
                <div class="d-flex justify-content-between mb-3">
                  <h3 class="cart-total font-weight-bold">Subtotal</h3>
                  <h3 class="cart-price font-weight-bold">$150</h3>
                </div>
                <div class="cart-button d-flex justify-content-between">
                  <button type="button" class="btn btn-danger text-uppercase px-4 shadow-sm mr-3" onclick="location.href='product-checkout-step-1.html';">Checkout</button>
                  <button type="button" class="btn btn-danger text-uppercase px-4 shadow-sm" onclick="location.href='product-cart.html';">View
                    Cart</button>
                </div>
              </li>
            </ul>
          </div>
        </div>

        <button class="navbar-toggler py-2" type="button" data-toggle="collapse" data-target="#navbarContent"
          aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarContent">
          <ul class="navbar-nav ml-lg-auto">
            <li class="nav-item dropdown bg-warning">
              <a class="nav-link dropdown-toggle  active " href="javascript:void(0)"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-home nav-icon" aria-hidden="true"></i>
                <span>Home</span>
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                <li>
                  <a class="dropdown-item  active " href="index.html">Kidz School</a>
                </li>
                <li>
                  <a class="dropdown-item " href="index-v2.html">Kidz Store</a>
                </li>
                <li>
                  <a class="dropdown-item " href="index-v3.html">Kidz Daycare</a>
                </li>
                <li>
                  <a class="dropdown-item " href="index-v4.html">Kidz Fashion</a>
                </li>
              </ul>
            </li>

            <li class="nav-item dropdown bg-danger">
              <a class="nav-link dropdown-toggle " href="javascript:void(0)" role="button"
                data-toggle="dropdown">
                <i class="fa fa-list-ul nav-icon" aria-hidden="true"></i>
                <span>Pages</span>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item " href="about-us.html">About Us</a>
                </li>
                <li>
                  <a class="dropdown-item " href="javascript:void(0)">
                    Team <i class="fa fa-chevron-right" aria-hidden="true"></i>
                  </a>
                  <ul class="sub-menu">
                    <li><a class="" href="teachers.html">Teachers</a></li>
                    <li><a class="" href="teachers-details.html">Teachers
                        Details</a></li>
                  </ul>
                </li>
                <li>
                  <a class="dropdown-item " href="testimonial.html">Testimonial</a>
                </li>
                <li>
                  <a class="dropdown-item
                   ||
                   ||
                  
                  "
                    href="javascript:void(0)">Events<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                  <ul class="sub-menu">
                    <li><a class=" " href="events.html">All Events</a></li>
                    <li>
                      <a class="" href="event-single-left-sidebar.html">Events
                        Left Sidebar</a>
                    </li>
                    <li>
                      <a class="" href="event-single-right-sidebar.html">Events
                        Right Sidebar</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a class="dropdown-item " href="photo-gallery.html">Photo
                    Gallery</a>
                </li>
                <li>
                  <a class="dropdown-item " href="pricing-table.html">Pricing
                    Table</a>
                </li>
                <li>
                  <a class="dropdown-item " href="services.html">Services</a>
                </li>
                <li>
                  <a class="dropdown-item " href="services-details.html">Services
                    Details</a>
                </li>
                <li>
                  <a class="dropdown-item " href="search-result.html">Search
                    Result</a>
                </li>
                <li>
                  <a class="dropdown-item " href="contact-us.html">Contact Us</a>
                </li>
                <li>
                  <a class="dropdown-item " href="faq.html">FAQ</a>
                </li>
                <li>
                  <a class="dropdown-item " href="sign-up-or-login.html">Sign
                    Up / Login</a>
                </li>
                <li>
                  <a class="dropdown-item " href="404.html">Error 404</a>
                </li>
                <li>
                  <a class="dropdown-item" href="coming-soon.html">Coming Soon</a>
                </li>
              </ul>
            </li>

            <li class="nav-item dropdown mega-dropdown bg-success">
              <a class="nav-link dropdown-toggle " href="#" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-file-text-o nav-icon" aria-hidden="true"></i>
                <span>Courses</span>
              </a>
              <div class="dropdown-menu row">
                <div class="col-12 col-md-3">
                  <ul class="list-unstyled">
                    <li>Courses Grid</li>
                    <li><a class="" href="courses-grid-full.html">Courses
                        Grid Fullwidth</a></li>
                    <li><a class="" href="courses-grid-left-sidebar.html">Courses
                        Grid Left Sidebar</a></li>
                    <li><a class="" href="courses-grid-right-sidebar.html">Courses
                        Grid Right Sidebar</a></li>
                  </ul>
                </div>

                <div class="col-12 col-md-3">
                  <ul class="list-unstyled">
                    <li>Courses List</li>
                    <li><a class="" href="course-list-fullwidth.html">Courses
                        List Fullwidth</a></li>
                    <li><a class="" href="course-list-left-sidebar.html">Courses
                        List left Sidebar</a></li>
                    <li><a class="" href="course-list-right-sidebar.html">Courses
                        List Right Sidebar</a></li>
                  </ul>
                </div>

                <div class="col-12 col-md-3">
                  <ul class="list-unstyled">
                    <li>Single Course</li>
                    <li><a class="" href="course-single.html">Single Course
                        Fullwidth</a></li>
                    <li><a class="" href="course-single-left-sidebar.html">Single
                        Course left Sidebar</a></li>
                    <li><a class="" href="course-single-right-sidebar.html">Single
                        Course Right Sidebar</a></li>
                  </ul>
                </div>

                <div class="col-12 col-md-3">
                  <ul class="list-unstyled">
                    <li>Checkout</li>
                    <li><a class="" href="product-checkout-step-1.html">Personal
                        Info</a></li>
                    <li><a class="" href="product-checkout-step-2.html">Payment
                        Info</a></li>
                    <li><a class="" href="product-checkout-step-3.html">Confirmation</a></li>
                  </ul>
                </div>
              </div>
            </li>

            <li class="nav-item dropdown bg-info">
              <a class="nav-link dropdown-toggle " href="javascript:void(0)" id="stores"
                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-pencil-square-o nav-icon" aria-hidden="true"></i>
                <span>Store</span>
              </a>
              <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="stores">
                <li>
                  <a class="dropdown-item
                   ||
                   ||
                  

                  "
                    href="javascript:void(0)">Products<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                  <ul class="sub-menu">
                    <li><a class="" href="products.html">Products Fullwidth</a></li>
                    <li><a class="" href="product-left-sidebar.html">Products
                        Left Sidebar</a></li>
                    <li><a class="" href="product-right-sidebar.html">Products
                        Right Sidebar</a></li>
                  </ul>
                </li>
                <li>
                  <a class="dropdown-item " href="product-single.html">Single
                    Product</a>
                </li>
                <li>
                  <a class="dropdown-item " href="product-category.html">Product
                    Categories</a>
                </li>
                <li>
                  <a class="dropdown-item " href="product-cart.html">Cart</a>
                </li>
                <li>
                  <a class="dropdown-item
                     ||
                     ||
                    
                    "
                    href="javascript:void(0)">Checkout<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                  <ul class="sub-menu">
                    <li>
                      <a class="" href="product-checkout-step-1.html">Personal
                        Info</a>
                    </li>
                    <li>
                      <a class="" href="product-checkout-step-2.html">Payment
                        Info</a>
                    </li>
                    <li>
                      <a class="" href="product-checkout-step-3.html">Confirmation</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>

            <li class="nav-item dropdown bg-purple">
              <a class="nav-link dropdown-toggle " href="javascript:void(0)" id="stores"
                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-calendar nav-icon" aria-hidden="true"></i>
                <span>Blog</span>
              </a>
              <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="stores">
                <li>
                  <a class="dropdown-item
                     ||
                     ||
                    
                  "
                    href="javascript:void(0)">Blog Grid<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                  <ul class="sub-menu">
                    <li><a class="" href="blog-grid.html">Blog Grid Fullwidth</a></li>
                    <li><a class="" href="blog-grid-left-sidebar.html">Blog
                        Grid Left Sidebar</a></li>
                    <li><a class="" href="blog-grid-right-sidebar.html">Blog
                        Grid Right Sidebar</a></li>
                  </ul>
                </li>
                <li>
                  <a class="dropdown-item
                     ||
                     ||
                    "
                    href="javascript:void(0)">Blog List<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                  <ul class="sub-menu">
                    <li><a class="" href="blog-list.html">Blog List Fullwidth</a></li>
                    <li><a class="" href="blog-list-left-sidebar.html">Blog
                        List Left Sidebar</a></li>
                    <li><a class="" href="blog-list-right-sidebar.html">Blog
                        List Right Sidebar</a></li>
                  </ul>
                </li>
                <li>
                  <a class="dropdown-item
                     ||
                     ||
                    
                  "
                    href="javascript:void(0)">Single Blog<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                  <ul class="sub-menu">
                    <li><a class="" href="blog-single.html">Blog Single
                        Fullwidth</a></li>
                    <li><a class="" href="blog-single-left-sidebar.html">Blog
                        Single Left Sidebar</a></li>
                    <li><a class="" href="blog-single-right-sidebar.html">Blog
                        Single Right Sidebar</a></li>
                  </ul>
                </li>
              </ul>
            </li>

            <li class="nav-item dropdown bg-pink">
              <a class="nav-link dropdown-toggle " href="component-default.html">
                <i class="fa fa-home nav-icon" aria-hidden="true"></i>
                <span>components</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <div class="main-wrapper home">


  <!--====================================
  ——— BEGIN MAIN SLIDE LIST
  ===================================== -->
  <section class="rev_slider_wrapper fullwidthbanner-container over" dir="ltr">

    <!-- the ID here will be used in the JavaScript below to initialize the slider -->
    <div id="rev_slider_1" class="rev_slider rev-slider-kidz-school" data-version="5.4.5" style="display:none">

      <ul>
        <!-- SLIDE 1  -->
        <li data-transition="fade">
          <img src="assets/img/banner/slider-1/img-1.jpg" alt="Sky" class="rev-slidebg">
          <!-- LAYERS -->
          
          <!-- LAYER NR. 1 -->
          <div class="tp-caption tp-resizeme font-dosis font-weight-bold"
            data-frames='[{
              "delay":1600,"speed":1000,"frame":"500","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},
              {"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

            data-visibility="on"
            data-x="left"
            data-y="middle"
            data-hoffset="['10', '40', '15', '30']"
            data-voffset="['-75', '-75', '-65', '-45']"
            data-fontsize="['50', '45', '40', '30']"
            data-lineheight="['50', '45', '40', '30']"
            data-color="#FFF"
            data-width="auto"
            data-basealign="grid"
            data-responsive_offset="off"
            style="z-index: 1;">
              <span class="text-white">Kindergarten</span> Website
          </div>
          
          <!-- LAYER NR. 2 -->
          <div class="tp-caption tp-resizeme"
            data-frames='[{
            "delay":2000,"speed":1300,"frame":"500","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},
            {"delay":"wait","speed":200,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

            data-visibility="on"
            data-x="left"
            data-y="middle"
            data-hoffset="['10', '40', '15', '30']"
            data-voffset="['0', '0', '0', '0']"
            data-width="['550','500','500','420']"
            data-fontsize="['25', '23', '23', '23']"
            data-lineheight="['30', '25', '25', '25']"
            data-color="#FFF"
            data-textAlign="left"
            data-basealign="grid"
            data-responsive_offset="off"
            data-type="text"
            data-whitespace="normal"
            style="z-index: 10;">
              Kidz is a perfect theme for kindergarten school, very easy to use.
          </div>
          
          <!-- LAYER NR. 3 -->
          <a href="https://wrapbootstrap.com/theme/kidz-multipurpose-children-kids-theme-WB059350N"
            class="tp-caption tp-resizeme slide-layer-3 btn btn-white"
            data-frames='[{
              "delay":2200,"speed":1300,"frame":"500","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},
              {"delay":"wait","speed":200,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

            data-visibility="on"
            data-x="left"
            data-y="middle"
            data-hoffset="['10', '40', '15', '30']"
            data-voffset="['90', '80', '70', '55']"
            data-width="['auto']"
            data-height="['auto']"
            data-fontsize="['18', '17', '16', '15']"
            data-lineheight="['25', '23', '21', '20']"
            data-color="#e7655a"
            data-textAlign="left"
            data-basealign="grid"
            data-responsive_offset="off"
            style="text-transform: uppercase; z-index: 1;">
            purchase
          </a>

        </li>

        <!-- SLIDE 2  -->
        <li data-transition="fade">
          <img src="assets/img/banner/slider-1/img-2.jpg" alt="Sky" class="rev-slidebg">
          <!-- LAYERS-->

          <!-- LAYER NR. 1 -->
          <div class="tp-caption tp-resizeme font-dosis font-weight-bold"
            data-frames='[{
            "delay":1600,"speed":1000,"frame":"500","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},
            {"delay":"wait","speed":200,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

            data-visibility="on"
            data-x="center"
            data-y="middle"
            data-hoffset="['0', '0', '0', '0']"
            data-voffset="['-75', '-75', '-65', '-45']"
            data-fontsize="['50', '45', '40', '30']"
            data-lineheight="['50', '45', '40', '30']"
            data-color="#FFF"
            data-width="auto"
            data-basealign="grid"
            data-responsive_offset="off"
            style="z-index: 1;">
              Sell <span class="text-white">Kids Products</span>
          </div>
        
          <!-- LAYER NR. 2 -->
          <div class="tp-caption tp-resizeme"
            data-frames='[{
            "delay":2000,"speed":1300,"frame":"500","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},
            {"delay":"wait","speed":200,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

            data-visibility="on"
            data-x="center"
            data-y="middle"
            data-hoffset="['0', '0', '0', '0']"
            data-voffset="['0', '0', '0', '0']"
            data-width="['550','400','400','420']"
            data-fontsize="['25', '23', '23', '23']"
            data-lineheight="['30', '25', '25', '25']"
            data-color="#FFF"
            data-textAlign="center"
            data-basealign="grid"
            data-responsive_offset="on"
            data-responsive="on"
            data-type="text"
            data-whitespace="normal"
            style="z-index: 10;">
              All ecommerce features are included with KIDZ, Build your site.
          </div>
        
          <!-- LAYER NR. 3 -->
          <a href="https://wrapbootstrap.com/theme/kidz-multipurpose-children-kids-theme-WB059350N"
            class="tp-caption tp-resizeme slide-layer-3 btn btn-white"
            data-frames='[{
            "delay":2200,"speed":1300,"frame":"500","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},
            {"delay":"wait","speed":200,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

            data-visibility="on"
            data-x="center"
            data-y="middle"
            data-hoffset="['0', '0', '0', '0']"
            data-voffset="['90', '80', '70', '55']"
            data-width="['auto']"
            data-height="['auto']"
            data-fontsize="['18', '17', '16', '15']"
            data-lineheight="['25', '23', '21', '20']"
            data-color="#e7655a"
            data-textAlign="left"
            data-basealign="grid"
            data-responsive_offset="off"
            style="text-transform: uppercase; z-index: 1;">
              purchase
          </a>

        </li>

        <!-- SLIDE 3 -->
        <li data-transition="fade">
          <img src="assets/img/banner/slider-1/img-3.jpg" alt="Sky" class="rev-slidebg">
          <!-- LAYERS -->

          <!-- LAYER NR. 1 -->
          <div class="tp-caption tp-resizeme font-dosis font-weight-bold"
            data-frames='[{
            "delay":1600,"speed":1200,"frame":"500","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},
            {"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

            data-visibility="on"
            data-x="['left','left','left','right']"
            data-y="middle"
            data-hoffset="['650', '500', '350', '60']"
            data-voffset="['-75', '-75', '-65', '-60']"
            data-fontsize="['50', '45', '40', '30']"
            data-lineheight="['50', '45', '40', '30']"
            data-color="#FFF"
            data-width="none"
            data-height="auto"
            data-basealign="grid"
            data-textAlign="['left','left','left','right']"
            data-type="text"
            data-responsive_offset="on"
            style="z-index: 1;">
              Impress Your <span class="text-white">Clients</span>
          </div>
      
          <!-- LAYER NR. 2 -->
          <div class="tp-caption tp-resizeme"
            data-frames='[{
            "delay":2000,"speed":1300,"frame":"500","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},
            {"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

            data-visibility="on"
            data-x="['left','left','left','right']"
            data-y="middle"
            data-hoffset="['650', '500', '350', '60']"
            data-voffset="['0', '0', '0', '0']"
            data-width="['550','400','400','420']"
            data-fontsize="['25', '23', '23', '23']"
            data-lineheight="['30', '25', '25', '25']"
            data-color="#FFF"
            data-textAlign="['left', 'left', 'left', 'right']"
            data-basealign="grid"
            data-responsive_offset="on"
            data-type="text"
            data-whitespace="normal"
            style="z-index: 10;">
              Kidz is created for a better impression on your client's mind.
          </div>
          
          <!-- LAYER NR. 3 -->
          <a href="https://wrapbootstrap.com/theme/kidz-multipurpose-children-kids-theme-WB059350N"
            class="tp-caption tp-resizeme slide-layer-3 btn btn-white"
            data-frames='[{
            "delay":2200,"speed":1300,"frame":"500","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},
            {"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

            data-visibility="on"
            data-x="['left','left','left','right']"
            data-y="middle"
            data-hoffset="['650', '500', '350', '60']"
            data-voffset="['90', '80', '75', '75']"
            data-width="none"
            data-height="none"
            data-fontsize="['18', '17', '16', '15']"
            data-lineheight="['25', '23', '21', '20']"
            data-color="#e7655a"
            data-basealign="grid"
            data-textAlign="['left','left','left','right']"
            data-responsive_offset="on"
            data-type="text"
            style="text-transform: uppercase; z-index: 1;">
              purchase
          </a>
          
        </li>

        <!-- SLIDE 4  -->
        <li data-transition="fade">
          <img src="assets/img/banner/slider-1/img-4.jpg" alt="Sky" class="rev-slidebg">
          <!-- LAYERS -->

          <!-- LAYER NR. 1 -->
          <div class="tp-caption tp-resizeme font-dosis font-weight-bold"
            data-frames='[{
            "delay":1600,"speed":1000,"frame":"500","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},
            {"delay":"wait","speed":200,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

            data-visibility="on"
            data-x="center"
            data-y="middle"
            data-hoffset="['0', '0', '0', '0']"
            data-voffset="['-75', '-75', '-65', '-45']"
            data-fontsize="['50', '45', '40', '30']"
            data-lineheight="['50', '45', '40', '30']"
            data-color="#FFF"
            data-width="auto"
            data-basealign="grid"
            data-responsive_offset="off"
            style="z-index: 1;">
              Bright <span class="text-white">Playful Colors</span>
          </div>
      
          <!-- LAYER NR. 2 -->
          <div class="tp-caption tp-resizeme"
            data-frames='[{
            "delay":2000,"speed":1300,"frame":"500","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},
              {"delay":"wait","speed":200,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

            data-visibility="on"
            data-x="center"
            data-y="middle"
            data-hoffset="['0', '0', '0', '0']"
            data-voffset="['0', '0', '0', '0']"
            data-width="['550','400','400','420']"
            data-fontsize="['25', '23', '23', '23']"
            data-lineheight="['30', '25', '25', '25']"
            data-color="#FFF"
            data-textAlign="center"
            data-basealign="grid"
            data-responsive_offset="on"
            data-responsive="on"
            data-type="text"
            data-whitespace="normal"
            style="z-index: 10;">
              Combination of bright playful colors help you make users happy.
          </div>
          
          <!-- LAYER NR. 3 -->
          <a href="https://wrapbootstrap.com/theme/kidz-multipurpose-children-kids-theme-WB059350N"
            class="tp-caption tp-resizeme slide-layer-3 btn btn-white"
            data-frames='[{
            "delay":2200,"speed":1300,"frame":"500","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},
            {"delay":"wait","speed":200,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

            data-visibility="on"
            data-x="center"
            data-y="middle"
            data-hoffset="['0', '0', '0', '0']"
            data-voffset="['90', '80', '70', '55']"
            data-width="['auto']"
            data-height="['auto']"
            data-fontsize="['18', '17', '16', '15']"
            data-lineheight="['25', '23', '21', '20']"
            data-color="#e7655a"
            data-textAlign="left"
            data-basealign="grid"
            data-responsive_offset="off"
            style="text-transform: uppercase; z-index: 1;">
              purchase
          </a>
          
        </li>
      </ul>
    </div>
  </section>

  <!-- ====================================
  ———	BOX SECTION
  ===================================== -->
  <section class="d-none d-sm-block section-top">
    <div class="container">
      <div class="row wow fadeInUp">
        <div class="col-sm-3">
          <a href="#courses">
            <div class="card bg-warning card-hover scrolling">
              <div class="card-body text-center p-0">
                <div class="card-icon-border-large border-warning">
                  <i class="fa fa-file-text-o" aria-hidden="true"></i>
                </div>
                <h2 class="text-white font-size-32 pt-1 pt-lg-5 pb-2 pb-lg-6 mb-0 font-dosis">Courses</h2>
                <a href="#courses" class="btn-scroll-down d-block pb-4 pb-lg-5">
                  <i class="fa fa-chevron-down" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </a>
        </div>

        <div class="col-sm-3">
          <a href="#teachers">
            <div class="card bg-success card-hover scrolling">
              <div class="card-body text-center p-0">
                <div class="card-icon-border-large border-success">
                  <i class="fa fa-calendar-o" aria-hidden="true"></i>
                </div>
                <h2 class="text-white font-size-32 pt-1 pt-lg-5 pb-2 pb-lg-6 mb-0 font-dosis">Teachers</h2>
                <a href="#teachers" class="btn-scroll-down d-block pb-4 pb-lg-5">
                  <i class="fa fa-chevron-down" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </a>
        </div>

        <div class="col-sm-3">
          <a href="#gallery">
            <div class="card bg-danger card-hover scrolling">
              <div class="card-body text-center p-0">
                <div class="card-icon-border-large border-danger">
                  <i class="fa fa-picture-o" aria-hidden="true"></i>
                </div>
                <h2 class="text-white font-size-32 pt-1 pt-lg-5 pb-2 pb-lg-6 mb-0 font-dosis">Gallery</h2>
                <a href="#gallery" class="btn-scroll-down d-block pb-4 pb-lg-5">
                  <i class="fa fa-chevron-down" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </a>
        </div>

        <div class="col-sm-3">
          <a href="#blog">
            <div class="card bg-info card-hover scrolling">
              <div class="card-body text-center p-0">
                <div class="card-icon-border-large border-info">
                  <i class="fa fa-files-o" aria-hidden="true"></i>
                </div>
                <h2 class="text-white font-size-32 pt-1 pt-lg-5 pb-2 pb-lg-6 mb-0 font-dosis">News</h2>
                <a href="#blog" class="btn-scroll-down d-block pb-4 pb-lg-5">
                  <i class="fa fa-chevron-down" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </a>
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

  <!-- ====================================
        ———	FOOTER
        ===================================== -->
  <footer class="footer-bg-img">
    <!-- Footer Color Bar -->
    <div class="color-bar">
      <div class="container-fluid">
        <div class="row">
          <div class="col color-bar bg-warning"></div>
          <div class="col color-bar bg-danger"></div>
          <div class="col color-bar bg-success"></div>
          <div class="col color-bar bg-info"></div>
          <div class="col color-bar bg-purple"></div>
          <div class="col color-bar bg-pink"></div>
          <div class="col color-bar bg-warning d-none d-md-block"></div>
          <div class="col color-bar bg-danger d-none d-md-block"></div>
          <div class="col color-bar bg-success d-none d-md-block"></div>
          <div class="col color-bar bg-info d-none d-md-block"></div>
          <div class="col color-bar bg-purple d-none d-md-block"></div>
          <div class="col color-bar bg-pink d-none d-md-block"></div>
        </div>
      </div>
    </div>

    <div class="pt-8 pb-7  bg-repeat" style="background-image: url(assets/img/background/footer-bg-img-1.png);">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-lg-3 col-xs-12">
            <a class="mb-6 d-block" href="index.html">
              <img class="img-fluid d-inline-block w-50 lazyestload" data-src="assets/img/logo-footer.png" src="assets/img/logo-footer.png">
            </a>
            <p class="mb-6">Excepteur sint occaecat cupidatat non proident, sunt in culpa officia.Lorem ipsum dolor sit
              amet.</p>
            <p class="mb-6">consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
              aliqua.</p>
          </div>

          <div class="col-sm-6 col-lg-3 col-xs-12">
            <h4 class="section-title-sm font-weight-bold text-white mb-6">Useful Links</h4>
            <ul class="list-unstyled">
              <li class="mb-4">
                <a href="index.html">
                  <i class="fa fa-angle-double-right mr-2" aria-hidden="true"></i>Kidz School
                </a>
              </li>
              <li class="mb-4">
                <a href="about-us.html">
                  <i class="fa fa-angle-double-right mr-2" aria-hidden="true"></i>About Kidz School
                </a>
              </li>
              <li class="mb-4">
                <a href="index-v2.html">
                  <i class="fa fa-angle-double-right mr-2" aria-hidden="true"></i>Kidz Store
                </a>
              </li>
              <li class="mb-4">
                <a href="index-v3.html">
                  <i class="fa fa-angle-double-right mr-2" aria-hidden="true"></i>Kidz Daycare
                </a>
              </li>
              <li class="mb-3">
                <a href="photo-gallery.html">
                  <i class="fa fa-angle-double-right mr-2" aria-hidden="true"></i>
                  Photo Gallery
                </a>
              </li>
            </ul>
          </div>

          <div class="col-sm-6 col-lg-3 col-xs-12">
            <h4 class="section-title-sm font-weight-bold text-white mb-6">Recent Post</h4>
            <ul class="list-unstyled list-item-border-bottom">
              <li class="mb-4 pb-4">
                <div class="media">
                  <a class="mr-2" href="blog-single-left-sidebar.html">
                    <img class="rounded-lg w-100 border-warning border-2 d-block" data-src="assets/img/blog/blog-sm-img5.jpg"
                      src="assets/img/blog/blog-sm-img5.jpg" alt="blog-sm-img5.jpg">
                  </a>
                  <div class="media-body">
                    <h5 class="line-hight-16 mb-1">
                      <a class="font-base font-size-14" href="blog-single-left-sidebar.html">A Clean Website Gives More Experience To The
                        Visitors</a>
                    </h5>
                    <time class="text-white">July 7 - 2018</time>
                  </div>
                </div>
              </li>

              <li class="mb-4 pb-4">
                <div class="media">
                  <a class="mr-2" href="blog-single-left-sidebar.html">
                    <img class="rounded-lg w-100 border-success border-2 d-block" data-src="assets/img/blog/blog-sm-img-12.jpg"
                      src="assets/img/blog/blog-sm-img-12.jpg" alt="blog-sm-img-12.jpg">
                  </a>
                  <div class="media-body">
                    <h5 class="line-hight-16 mb-1">
                      <a class="font-base font-size-14" href="blog-single-left-sidebar.html">Duis aute irure dolor in reprehenderit
                        in voluptate.</a>
                    </h5>
                    <time class="text-white">Jun 7 - 2018</time>
                  </div>
                </div>
              </li>

              <li class="mb-4 pb-4">
                <div class="media">
                  <a class="mr-2" href="blog-single-left-sidebar.html">
                    <img class="rounded-lg w-100 border-info border-2 d-block" data-src="assets/img/blog/blog-sm-img7.jpg"
                      src="assets/img/blog/blog-sm-img7.jpg" alt="blog-sm-img7.jpg">
                  </a>
                  <div class="media-body">
                    <h5 class="line-hight-16 mb-1">
                      <a class="font-base font-size-14" href="blog-single-left-sidebar.html">Duis aute irure dolor in reprehenderit
                        in voluptate.</a>
                    </h5>
                    <time class="text-white">Jun 7 - 2018</time>
                  </div>
                </div>
              </li>
            </ul>
          </div>

          <div class="col-sm-6 col-lg-3 col-xs-12">
            <h4 class="section-title-sm font-weight-bold text-white mb-6">Mailing List</h4>
            <p class="mb-4">Sign up for our mailing list to get latest updates and offers.</p>
            <form class="mb-4" action="">
              <div class="input-group shadow-light rounded-sm input-addon">
                <input type="text" class="form-control py-4" placeholder="Email address" aria-describedby="basic-addon21">
                <div class="input-group-append ">
                  <div class="input-group-text bg-danger">
                    <i class="fa fa-check text-white" aria-hidden="true"></i></div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Copy Right -->
    <div class="copyright">
      <div class="container">
        <div class="row py-4 align-items-center">
          <div class="col-sm-7 col-xs-12 order-1 order-md-0">
            <p class="copyright-text"> © 2018 Copyright Kidz School Bootstrap Template by <a href="http://www.iamabdus.com/" target="_blank">Abdus.</a></p>
          </div>

          <div class="col-sm-5 col-xs-12">
            <ul class="list-inline d-flex align-items-center justify-content-md-end justify-content-center mb-md-0">
              <li class="mr-3">
                <a class="icon-rounded-circle-small bg-warning" href="javascript:void(0)">
                  <i class="fa fa-facebook text-white" aria-hidden="true"></i>
                </a>
              </li>
              <li class="mr-3">
                <a class="icon-rounded-circle-small bg-success" href="javascript:void(0)">
                  <i class="fa fa-twitter text-white" aria-hidden="true"></i>
                </a>
              </li>
              <li class="mr-3">
                <a class="icon-rounded-circle-small bg-danger" href="javascript:void(0)">
                  <i class="fa fa-google-plus text-white" aria-hidden="true"></i>
                </a>
              </li>
              <li class="mr-3">
                <a class="icon-rounded-circle-small bg-info" href="javascript:void(0)">
                  <i class="fa fa-pinterest-p text-white" aria-hidden="true"></i>
                </a>
              </li>
              <li class="">
                <a class="icon-rounded-circle-small bg-purple" href="javascript:void(0)">
                  <i class="fa fa-vimeo text-white" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Modal Login -->
  <div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="bg-warning rounded-top p-2">
          <h3 class="text-white font-weight-bold mb-0 ml-2">Login</h3>
        </div>

        <div class="border rounded-bottom-md border-top-0">
          <div class="p-3">
            <form action="#" method="POST" role="form">
              <div class="form-group form-group-icon">
                <input type="text" class="form-control border" placeholder="User name" required="">
              </div>

              <div class="form-group form-group-icon">
                <input type="password" class="form-control border" placeholder="Password" required="">
              </div>

              <div class="form-group">
                <button type="submit" class="btn btn-danger text-uppercase w-100">Log In</button>
              </div>

              <div class="form-group text-center text-secondary mb-0">
                <a class="text-danger" href="#">Forgot password?</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

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

  <script src="assets/plugins/wow/wow.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDU79W1lu5f6PIiuMqNfT1C6M0e_lq1ECY"></script>

  {{-- <script src="assets/js/kidz.js"></script> --}}
  <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
  <script type="text/javascript" src="{{ mix('js/kidz.js') }}"></script>
  @yield('app.js')
</body>

</html>

