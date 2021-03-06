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
            <th class="bg-warning text-white text-uppercase" scope="col">Substrand Name</th>
            <th class="bg-success text-white text-uppercase" scope="col">N.o of Lessons</th>
            <th style="width: 214px" class="bg-purple text-white text-uppercase" scope="col">N.o of Assessments Required</th>
            <th style="width: 214px" class="bg-success text-white text-uppercase" scope="col">N.o of Assessments Done</th>
            <th class="bg-danger text-white text-uppercase" scope="col">Start Date</th>
            <th style="width: 158px" class="bg-info text-white text-uppercase" scope="col">Assessment Deadline</th>
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
              {{$lessonPlan->assessmentcount()}}
            </td>
            <td class="py-4 text-muted">
              {{$lessonPlan->substrand->assessmentcount($classroom->currentStudents())-1}}
            </td>
            <td class="py-4 text-muted">
              {{$lessonPlan->start_date}}
            </td>
            <td class="text-muted">
              {{$lessonPlan->end_date}}
            </td>
            <td class="text-muted">
              @if ($lessonPlan->substrand->assessmentcount($classroom->currentStudents()) <= $lessonPlan->assessmentCount())
                  <a class="btn btn-primary btn-sm m-2" 
                    href="{{ Route('teacher.classroom.subject.topic.outcome-result.create', ['classroom' => $classroom, 'subject'=> $subject, 'substrand' => $lessonPlan->substrand, 'assessment_count' => $lessonPlan->substrand->assessmentcount($classroom->currentStudents())]) }}" disabled>
                    Assess Learning outcomes
                  </a>
                  <a href="#" class="btn btn-success text-white btn-sm m-2">Mark as Complete</a>
              @else
              <a href="#" class="btn btn-primary text-white btn-sm m-2">Marked as Complete</a>
              @endif
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
	</div>
</section>
@endsection
@section('js')
<script type="text/javascript">
$(document).ready(function() {
  
});
</script>
@endsection

