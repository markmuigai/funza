@extends('layouts.teacher')
@section('page-title', 'Teacher Dashboard')
    
@section('content')
  @component('components.breadcrumb',[
    'title' => 'Assess '.$substrand->name.' outcomes'
  ])  
  @endcomponent

  <section class="py-8 py-md-10">
    <div class="container">
      <div class="row">
        <div
  data-preset="circle"
  class="ldBar label-center"
  data-value="35"
></div>
      </div>
      <ul class="nav nav-pills my-3">
        <li class="nav-item">
          <a class="nav-link active" href="#">Assessment 1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Assessment 2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Assessment 3</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form action="{{ Route('teacher.classroom.subject.topic.outcome-result.store', ['classroom' => $classroom, 'subject'=> $subject, 'substrand' => $substrand]) }}" method="POST">
        @csrf
        <div class="card">
          <div class="card-header bg-success text-white">
            <span style="font-weight: 600">SELECT STUDENT</span>
          </div>
          <div class="card-body border bg-white">
            <select class="select2-select-student w-100" name="students[]" multiple="multiple">
              @foreach ($classroom->currentStudents() as $student)
                <option value="{{ $student->id }}">{{ $student->name }}</option>    
              @endforeach
          </select>
          </div>
        </div>
        <div class="card">
          <div class="card-header bg-secondary text-white">
            <span style="font-weight: 600">STUDENT'S ABILITY TO</span>
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
     </script>
 @endsection