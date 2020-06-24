@extends('layouts.teacher')
@section('page-title', 'Teacher Dashboard')
    
@section('content')
@component('components.breadcrumb',[
    'title' => $subject->name.' Lesson Plan'
  ])  
  @endcomponent
<section class="py-5 py-md-5">
	<div class="container-fluid p-5">
    <div class="table-responsive table-class-schedule">
      <table class="table table-bordered text-center mb-0">
        <thead>
          <tr>
            <th class="bg-success text-white text-uppercase" scope="col">Substrand Name</th>
            <th class="bg-success text-white text-uppercase" scope="col">N.o of Lessons</th>
            <th class="bg-danger text-white text-uppercase" scope="col">Start Date</th>
            <th class="bg-info text-white text-uppercase" scope="col">Assessment Deadline</th>
            <th class="bg-purple text-white text-uppercase" scope="col">Status</th>
            <th class="bg-pink text-white text-uppercase" scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($subject->lessonPlans() as $lessonPlan)
          <tr>
            <td class=" align-middle text-muted font-weight-medium">{{$lessonPlan->substrand->name}}</td>
            <td class="py-4 text-muted">
              {{$lessonPlan->lesson_count}}
            </td>
            <td class="py-4 text-muted">
              {{$lessonPlan->start_date}}
            </td>
            <td class="text-muted">
              {{$lessonPlan->end_date}}
            </td>
            <td class=" text-muted">
              {{$lessonPlan->status}}
            </td>
            <td class="text-muted">
              <a href="#" class="btn btn-primary">Mark as Complete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
	</div>
</section>
@endsection


