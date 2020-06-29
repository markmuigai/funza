@extends('layouts.teacher')
@section('page-title', 'Teacher Dashboard')
    
@section('content')
  @component('components.breadcrumb',[
    'title' => 'Assess '.$substrand->name.' outcomes'
  ])  
  @endcomponent

  <section class="py-8 py-md-10">
    <div class="container">
      <form action="{{ Route('teacher.classroom.subject.topic.outcome-result.store', ['classroom' => $classroom, 'subject'=> $subject, 'substrand' => $substrand, 'assessment_count' => $assessment_count]) }}" method="POST">
        @csrf
        <div class="card">
          <div class="card-header bg-success text-white">
            <h3>
              Select Student
              <span class="badge badge-primary float-right">Assessment {{$assessment_count}}/{{$substrand->lessonPlan->assessmentCount()}} </span>
            </h3>
          </div>
          <div class="card-body border bg-white">
            <select class="select2-select-student w-100" name="students[]" multiple="multiple">
              @foreach ($classroom->currentStudents() as $student)
                @if($student->assessmentsCountForSubstrand($substrand->id) == $assessment_count-1)
                  <option value="{{ $student->id }}">{{ $student->name }}</option>    
                @endif
              @endforeach
          </select>
          <input class="mt-2" type="checkbox" id="checkbox" >Select All
          </div>
        </div>
        <div class="card">
          <div class="card-header bg-secondary text-white">
            <h3>Student's Ability to</h3>
          </div>
          <div class="card-body border bg-white">
              @foreach ($substrand->outcomes as $outcome)
                <h4>{{ $outcome->name }}</h4>
                @foreach ($outcome->outcomeOptions as $outcomeOption)
                  <div class="form-check my-1">
                    <div class="pretty p-icon p-round p-pulse">
                      <input type="radio" name="results[{{$outcome->id}}]" value="{{ $outcomeOption->id }}"/>
                      <div class="state p-danger">
                          <i class="icon mdi mdi-check"></i>
                          <label>{{ $outcomeOption->name }}</label>
                      </div>
                    </div>
                  </div>
                @endforeach
              @endforeach
          </div>
        </div>
        <button class="btn btn-primary my-3" type="submit">Submit</button>
      </form>
    </div>
  </section>
 @endsection

 @section('js')
     <script>
       $(".select2-select-student").select2({
          placeholder: "Click to select a student",
          allowClear: true
        });

        $("#checkbox").click(function(){
            if($("#checkbox").is(':checked') ){
                $("select > option").prop("selected","selected");
            }else{
                $("select > option").removeAttr("selected");
            }
        });
        // Dynamic assess
     </script>
 @endsection