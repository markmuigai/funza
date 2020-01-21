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
				</div>
			</div>
			<div class="col-lg-8 col-xl-9 col-sm-12">
				<div class="row">
					@foreach($classes as $class)
					<div class="col-sm-6 col-xl-4 col-xs-12">
						<div class="card">
							<div class="card-body border-top-5 px-3 rounded-bottom">
								<h3 class="card-title">
									Grade {{ $class->name }}
								</h3>
								<ul class="list-unstyled text-muted">
									<li>
										<i class="fa fa-calendar-o mr-2" aria-hidden="true"></i>Grade {{ $class->grade->name }}
									</li>
									<li>
										<i class="fa fa-clock-o mr-2" aria-hidden="true"></i>{{ $class->students->count() }} Students
									</li>
									<li>
										<i class="fa fa-clock-o mr-2" aria-hidden="true"></i>0 parents
									</li>
								</ul>
								<p> It is a long established fact that a reader will be distracted by the readable content of a page when
									looking at its layout. </p>
								<div class="d-block">
									<a href="{{ Route('teacher.classroom', ['classroom' => $class ]) }}" class="btn btn-white text-uppercase mb-1 btn-hover-warning">
										<i class="fa fa-shopping-basket mr-2" aria-hidden="true"></i>Subjects
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
			</div>
		</section>
	</div>
</section>

@endsection