@extends('layouts.teacher')
@section('page-title', 'Teacher Dashboard')
    
@section('content')
<!-- ====================================
———	COURSES SECTION
===================================== -->
<section class="py-8 py-md-10">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-xl-3 col-sm-12 mb-4 mb-md-0 order-2 order-lg-0">
				<div class="row">
					<div class="col-md-6 col-lg-12">
						<form class="" action="search-result.html">
							<div class="card shadow-none bg-transparent">
								<h3 class="card-header bg-warning font-weight-bold rounded-top text-white">Search</h3>
								<div class="card-body border border-top-0 rounded-bottom">
									<div class="input-group border-bottom pb-3 pt-4">
										<input type="text" class="form-control border-0 px-1" placeholder="Enter Your Search" aria-describedby="basic-addon2">
										<span class="input-group-addon" id="basic-addon2">
											<input class="btn btn-sm btn-warning text-uppercase text-white shadow-sm" type="submit" value="Search">
										</span>
									</div>
								</div>
							</div>
						</form>

						<div class="card shadow-none bg-transparent overflow-hidden">
							<h3 class="card-header bg-success font-weight-bold rounded-top text-white">Filter By</h3>
							<div class="card-body border border-top-0 rounded-bottom">
								<div class="filter">
									<div class="mb-4 pt-3">
										<select class="select2-select w-100 bg-white" name="state">
											<option value="0">All Classes</option>
											<option value="1">One</option>
											<option value="2">Two</option>
											<option value="3">Three</option>
										</select>
									</div>
									<div class="mb-4">
										<select class="select2-select w-100" name="state">
											<option value="0">Ages</option>
											<option value="1">05</option>
											<option value="2">06</option>
											<option value="3">07</option>
											<option value="3">08</option>
											<option value="3">09</option>
										</select>
									</div>
								</div>

								<div class="price-range mt-6" id="price-range">
									<div class="mb-6" id="slider-non-linear-step"></div>
									<div class="price-range-content">
										<input class="btn btn-success text-white text-uppercase" type="submit" value="Filter">
										<span class="price-text">Price:</span>
										<span class="price-value" id="lower-value"></span>
										<span class="price-value" id="upper-value"></span>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6 col-lg-12">
						<div class="card shadow-none rounded courseCountTimer" style="background-image: url(assets/img/courses/course-count.jpg)">
							<div class="card-body text-white p-2">
								<div class="border rounded">
									<h3 class="font-weight-bold text-center mb-6">Next Course Start In</h3>
									<div id="courseTimer" class="mb-6"></div>
									<div class="text-center">
										<a href="course-single.html" class="btn btn-white text-info text-uppercase">view details</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-8 col-xl-9 col-sm-12">
				<div class="row">
					<div class="col-sm-6 col-xl-4 col-xs-12">
						<div class="card">
							<a href="course-single.html" class="position-relative">
								<img class="card-img-top" src="assets/img/courses/courses-img1.jpg" alt="Card image">
								<div class="card-img-overlay">
									<span class="badge badge-warning badge-rounded-circle">$50</span>
								</div>
							</a>
							<div class="card-body border-top-5 px-3 rounded-bottom border-warning">
								<h3 class="card-title">
									<a class="text-warning text-capitalize d-block text-truncate" href="course-single.html">Morbi Scelerisque Nibh.</a>
								</h3>
								<ul class="list-unstyled text-muted">
									<li>
										<i class="fa fa-calendar-o mr-2" aria-hidden="true"></i>Age 2 to 4 Years
									</li>
									<li>
										<i class="fa fa-clock-o mr-2" aria-hidden="true"></i>9.00AM-11.00AM
									</li>
								</ul>
								<p> It is a long established fact that a reader will be distracted by the readable content of a page when
									looking at its layout. </p>
								<div class="d-block">
									<a href="product-cart.html" class="btn btn-white text-uppercase mb-1 btn-hover-warning">
										<i class="fa fa-shopping-basket mr-2" aria-hidden="true"></i>Add to Cart
									</a>
									<a href="course-single.html" class="btn btn-link text-hover-warning pl-2 pl-lg-0">
										<i class="fa fa-angle-double-right mr-1" aria-hidden="true"></i> More
									</a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-xl-4 col-xs-12">
						<div class="card">
							<a href="course-single.html" class="position-relative">
								<img class="card-img-top" src="assets/img/courses/courses-img2.jpg" alt="Card image">
								<div class="card-img-overlay">
									<span class="badge badge-success badge-rounded-circle">$50</span>
								</div>
							</a>
							<div class="card-body border-top-5 px-3 rounded-bottom border-success">
								<h3 class="card-title">
									<a class="text-success text-capitalize d-block text-truncate" href="course-single.html">Phasellus convallis eros.</a>
								</h3>
								<ul class="list-unstyled text-muted">
									<li>
										<i class="fa fa-calendar-o mr-2" aria-hidden="true"></i>Age 2 to 4 Years
									</li>
									<li>
										<i class="fa fa-clock-o mr-2" aria-hidden="true"></i>9.00AM-11.00AM
									</li>
								</ul>
								<p> It is a long established fact that a reader will be distracted by the readable content of a page when
									looking at its layout. </p>
								<div class="d-block">
									<a href="product-cart.html" class="btn btn-white text-uppercase mb-1 btn-hover-success">
										<i class="fa fa-shopping-basket mr-2" aria-hidden="true"></i>Add to Cart
									</a>
									<a href="course-single.html" class="btn btn-link text-hover-success pl-2 pl-md-0">
										<i class="fa fa-angle-double-right mr-1" aria-hidden="true"></i> More
									</a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-xl-4 col-xs-12">
						<div class="card">
							<a href="course-single.html" class="position-relative">
								<img class="card-img-top" src="assets/img/courses/courses-img3.jpg" alt="Card image">
								<div class="card-img-overlay">
									<span class="badge badge-danger badge-rounded-circle">$50</span>
								</div>
							</a>
							<div class="card-body border-top-5 px-3 rounded-bottom border-danger">
								<h3 class="card-title">
									<a class="text-danger text-capitalize d-block text-truncate" href="course-single.html">Suspendisse a libero da.</a>
								</h3>
								<ul class="list-unstyled text-muted">
									<li>
										<i class="fa fa-calendar-o mr-2" aria-hidden="true"></i>Age 2 to 4 Years
									</li>
									<li>
										<i class="fa fa-clock-o mr-2" aria-hidden="true"></i>9.00AM-11.00AM
									</li>
								</ul>
								<p> It is a long established fact that a reader will be distracted by the readable content of a page when
									looking at its layout. </p>
								<div class="d-block">
									<a href="product-cart.html" class="btn btn-white text-uppercase mb-1 btn-hover-danger">
										<i class="fa fa-shopping-basket mr-2" aria-hidden="true"></i>Add to Cart
									</a>
									<a href="course-single.html" class="btn btn-link text-hover-danger pl-2 pl-md-0">
										<i class="fa fa-angle-double-right mr-1" aria-hidden="true"></i> More
									</a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-xl-4 col-xs-12">
						<div class="card">
							<a href="course-single.html" class="position-relative">
								<img class="card-img-top" src="assets/img/courses/courses-img4.jpg" alt="Card image">
								<div class="card-img-overlay">
									<span class="badge badge-info badge-rounded-circle">$50</span>
								</div>
							</a>
							<div class="card-body border-top-5 px-3 rounded-bottom border-info">
								<h3 class="card-title">
									<a class="text-info text-capitalize d-block text-truncate" href="course-single.html">Aenean cursus urna nec.</a>
								</h3>
								<ul class="list-unstyled text-muted">
									<li>
										<i class="fa fa-calendar-o mr-2" aria-hidden="true"></i>Age 2 to 4 Years
									</li>
									<li>
										<i class="fa fa-clock-o mr-2" aria-hidden="true"></i>9.00AM-11.00AM
									</li>
								</ul>
								<p> It is a long established fact that a reader will be distracted by the readable content of a page when
									looking at its layout. </p>
								<div class="d-block">
									<a href="product-cart.html" class="btn btn-white text-uppercase mb-1 btn-hover-info">
										<i class="fa fa-shopping-basket mr-2" aria-hidden="true"></i>Add to Cart
									</a>
									<a href="course-single.html" class="btn btn-link text-hover-info pl-2 pl-md-0">
										<i class="fa fa-angle-double-right mr-1" aria-hidden="true"></i> More
									</a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-xl-4 col-xs-12">
						<div class="card">
							<a href="course-single.html" class="position-relative">
								<img class="card-img-top" src="assets/img/courses/courses-img3.jpg" alt="Card image">
								<div class="card-img-overlay">
									<span class="badge badge-purple badge-rounded-circle">$50</span>
								</div>
							</a>
							<div class="card-body border-top-5 px-3 rounded-bottom border-purple">
								<h3 class="card-title">
									<a class="text-purple text-capitalize d-block text-truncate" href="course-single.html">Suspendisse a libero da.</a>
								</h3>
								<ul class="list-unstyled text-muted">
									<li>
										<i class="fa fa-calendar-o mr-2" aria-hidden="true"></i>Age 2 to 4 Years
									</li>
									<li>
										<i class="fa fa-clock-o mr-2" aria-hidden="true"></i>9.00AM-11.00AM
									</li>
								</ul>
								<p> It is a long established fact that a reader will be distracted by the readable content of a page when
									looking at its layout. </p>
								<div class="d-block">
									<a href="product-cart.html" class="btn btn-white text-uppercase mb-1 btn-hover-purple">
										<i class="fa fa-shopping-basket mr-2" aria-hidden="true"></i>Add to Cart
									</a>
									<a href="course-single.html" class="btn btn-link text-hover-purple pl-2 pl-md-0">
										<i class="fa fa-angle-double-right mr-1" aria-hidden="true"></i> More
									</a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-xl-4 col-xs-12">
						<div class="card">
							<a href="course-single.html" class="position-relative">
								<img class="card-img-top" src="assets/img/courses/courses-img4.jpg" alt="Card image">
								<div class="card-img-overlay">
									<span class="badge badge-pink badge-rounded-circle">$50</span>
								</div>
							</a>
							<div class="card-body border-top-5 px-3 rounded-bottom border-pink">
								<h3 class="card-title">
									<a class="text-pink text-capitalize d-block text-truncate" href="course-single.html">Aenean cursus urna nec.</a>
								</h3>
								<ul class="list-unstyled text-muted">
									<li>
										<i class="fa fa-calendar-o mr-2" aria-hidden="true"></i>Age 2 to 4 Years
									</li>
									<li>
										<i class="fa fa-clock-o mr-2" aria-hidden="true"></i>9.00AM-11.00AM
									</li>
								</ul>
								<p> It is a long established fact that a reader will be distracted by the readable content of a page when
									looking at its layout. </p>
								<div class="d-block">
									<a href="product-cart.html" class="btn btn-white text-uppercase mb-1 btn-hover-pink">
										<i class="fa fa-shopping-basket mr-2" aria-hidden="true"></i>Add to Cart
									</a>
									<a href="course-single.html" class="btn btn-link text-hover-pink pl-2 pl-md-0">
										<i class="fa fa-angle-double-right mr-1" aria-hidden="true"></i> More
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="mt-4">
		<!-- ====================================
———	PAGINATION
===================================== -->
<section class="py-5">
  <div class="container">
    <nav aria-label="Page navigation example">
      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center align-items-center">
          <li class="page-item"><a class="page-link" href="#">
            <i class="fa fa-arrow-left mr-1" aria-hidden="true"></i>
            Prev
          </a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">...</a></li>
          <li class="page-item"><a class="page-link" href="#">15</a></li>
          <li class="page-item"><a class="page-link" href="#">
            Next <i class="fa fa-arrow-right ml-1" aria-hidden="true"></i>
          </a>
          </li>
        </ul>
      </nav>      
    </nav>
  </div>
</section>

	</div>
</section>

@endsection