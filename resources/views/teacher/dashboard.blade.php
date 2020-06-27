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
		@if ($classes->isEmpty())
		<div class="card">
			<div class="card-body">
				<h3 class="m-5 text-center">You have not been assigned to any class yet</h3>
			</div>
		</div>
		@else
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
							<div class="d-block">
								<a href="{{ Route('teacher.classroom', ['classroom' => $class ]) }}" class="btn btn-white text-uppercase mb-1 btn-hover-warning">
									<i class="fa fa-shopping-basket mr-2" aria-hidden="true"></i>Subjects
								</a>
							</div>
						</div>
					</div>
				</div>
			@endforeach
		@endif
	</div>

</section>

@endsection