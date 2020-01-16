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

                @guest
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
                  @else
                    <li class="nav-item dropdown">
                      <a id="navbarDropdown" class=" text-white nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                      </div>
                    </li>
                @endguest

            </ul>
            </div>
        </div>
        </div>
    </div>


    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-scrollUp navbar-sticky navbar-white">
      <div class="container">
        <h2 class="text-danger">Funza</h2>

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