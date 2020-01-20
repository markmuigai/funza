@extends('layouts.teacher')
@section('page-title', 'Teacher Dashboard')
    
@section('content')

<section class="py-5 py-md-5">
	<div class="container-fluid ">
		<div class="row">
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">
						Subjects
					</div>
					<div class="card-body">
						@component('components.tables.subjects',[
							'subjects' => $subjects,
							'classroom' => $classroom
						])
						@endcomponent
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">
						Students
					</div>
					<div class="card-body">
						@component('components.tables.students',[
							'students' => $students
						])
						@endcomponent
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection


