@extends('layouts.teacher')
@section('page-title', 'Teacher Dashboard')
    
@section('content')
  @component('components.breadcrumb',[
    'title' => $subject->name
  ])  
  @endcomponent
  <section class="py-5 py-md-5">
		<div class="container-fluid">
				<div class="card">
					<div class="card-header bg-primary text-white">
						<h3>Substrands</h3>
					</div>
					<div class="card-body">
						@component('components.tables.substrands',[
							'substrands' => $substrands,
							'classroom' => $classroom,
							'subject' => $subject
						])
						@endcomponent
					</div>
				</div>
		</div>
  </section>
  @endsection

