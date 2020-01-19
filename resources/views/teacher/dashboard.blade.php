@extends('layouts.teacher')
@section('page-title', 'Teacher Dashboard')
    
@section('content')
{{-- Bread crumb --}}
@component('components.breadcrumb',[
	'title' => 'My Classes',
	'link_text' => 'Home',
	'link' => Route('teacher.dashboard') 
])	
@endcomponent
<!-- ====================================
———	COURSES SECTION
===================================== -->
<section class="py-8 py-md-10">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-xl-3 col-sm-12 mb-4 mb-md-0 order-2 order-lg-0">
				<div class="row">
				{{-- Search component --}}
				@include('components.search')

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
					@foreach($classes as $class)
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
					@endforeach
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