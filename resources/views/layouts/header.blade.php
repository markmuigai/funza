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
                <a href="mailto:info@yourdomain.com" class="mr-lg-4 mr-xl-6 text-white opacity-80">info@funza.io</a>
                </li>
                <li>
                <span class="bg-success icon-header mr-xl-2">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                </span>
                <a href="tel:+1 234 567 8900" class="mr-lg-4 mr-xl-6 text-white opacity-80"> +254 717 831 279 </a>
                </li>
            </ul>
            </div>

            <div class="col-lg-5">
            <ul class="list-inline d-flex mb-0 justify-content-xl-end justify-content-center align-items-center mr-xl-2">
                @guest
                  <li class="text-white mr-md-3 mr-lg-2 mr-xl-5">
                  <span class="bg-purple icon-header mr-1 mr-md-2 mr-lg-1 mr-xl-2">
                      <i class="fa fa-unlock-alt text-white font-size-13" aria-hidden="true"></i>
                  </span>
                  <a class="text-white font-weight-medium opacity-80" href="{{ route('login') }}">
                      Login
                  </a>
                  <span class="text-white opacity-80">or</span>
                  <a class="text-white font-weight-medium opacity-80" href="{{Route('school.create')}}">Register your school</a>
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
                  <a class="dropdown-item  active " href="index.html">Dashboard</a>
                </li>
                <li>
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
                  <a class="dropdown-item " href="#">About Us</a>
                </li>
                <li>
                  <a class="dropdown-item " href="javascript:void(0)">
                    Team <i class="fa fa-chevron-right" aria-hidden="true"></i>
                  </a>
                  <ul class="sub-menu">
                    <li><a class="" href="#">Teachers</a></li>
                    <li><a class="" href="#">Teachers
                        Details</a></li>
                  </ul>
                </li>
                <li>
                  <a class="dropdown-item " href="#">Testimonial</a>
                </li>
                <li>
                  <a class="dropdown-item " href="#">Services</a>
                </li>
                <li>
                  <a class="dropdown-item " href="#">Services
                    Details</a>
                </li>
                <li>
                  <a class="dropdown-item " href="#">Contact Us</a>
                </li>
                <li>
                  <a class="dropdown-item " href="#">FAQ</a>
                </li>
              </ul>
            </li>

            <li class="nav-item dropdown bg-purple">
              <a class="nav-link dropdown-toggle " href="javascript:void(0)" id="stores"
                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-calendar nav-icon" aria-hidden="true"></i>
                <span>Assessment</span>
              </a>
            </li>

            <li class="nav-item dropdown bg-pink">
              <a class="nav-link dropdown-toggle " href="component-default.html">
                <i class="fa fa-home nav-icon" aria-hidden="true"></i>
                <span>Lesson Plans</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
</header>