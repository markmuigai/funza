@extends('layouts.teacher')
@section('page-title', 'Teacher Dashboard')
    
@section('content')
@component('components.breadcrumb',[
    'title' => $classroom->name
  ])  
  @endcomponent
<section class="py-5 py-md-5">
	<div class="container-fluid p-5">
		<h3>My Subjects </h3>
		<div class="row">
      @php
        $colors = ['primary', 'warning',  'info', 'success'];
        $scores = [80,85,70,90];
      @endphp
      @foreach ($subjects->take(2) as $key => $subject)
        <div class="col-lg-6 col-xs-6">
          <div class="card  text-primary">
            <div class="card-body">
							<h3>{{ucfirst($subject->name)}}</h3>
							<a href="{{ Route('teacher.classroom.subject', ['classroom'=> $classroom, 'subject' => $subject])}}" class="btn btn-success text-white">Track Learning outcomes</a>
							<a href="{{ Route('teacher.performance.results.subjects.show', ['subject' => $subject]) }}" class="btn btn-success text-white">View Performance</a>
            </div>
          </div>
        </div>
      @endforeach
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header bg-primary text-white">
						<h3>Students</h3>
					</div>
					<div class="card-body">
						@component('components.tables.students',[
							'students' => $students,
							'classroom' => $classroom
						])
						@endcomponent
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection


