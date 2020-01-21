@extends('layouts.teacher')
@section('page-title', 'Teacher Dashboard')
    
@section('content')
  @component('components.breadcrumb',[
    'title' => 'Assess '.$topic->name.' outcomes'
  ])  
  @endcomponent

  <section class="py-8 py-md-10">
    <div class="container">
      <form action="{{ Route('teacher.classroom.subject.topic.outcome-result.store', ['classroom' => $classroom, 'subject'=> $subject, 'topic' => $topic]) }}" method="POST">
        @csrf
        <div class="card">
          <div class="card-header bg-success text-white">
            <span style="font-weight: 600">SELECT STUDENT</span>
          </div>
          <div class="card-body border bg-white">
            <select class="select2-select-student w-100" name="students[]" multiple="multiple">
              @foreach ($classroom->students as $student)
                <option value="{{ $student->id }}">{{ $student->name }}</option>    
              @endforeach
          </select>
          </div>
        </div>
        <div class="table-responsive-sm table-cart">
            <table class="table mb-0">
              <thead>
                <tr>
                  <th scope="col">Student's Ability To:</th>
                  <th scope="col">Weak</th>
                  <th scope="col">Average</th>
                  <th scope="col">Good</th>
                  <th scope="col">Outstanding</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($topic->outcomes as $outcome)
                  <tr>
                    <td>{{ $outcome->name }}</td>
                    <td>
                      <div class="pretty p-icon p-round p-pulse">
                          <input type="radio" name="'results[{{$outcome->id}}]'" />
                          <div class="state p-danger">
                              <i class="icon mdi mdi-check"></i>
                              <label></label>
                          </div>
                      </div>
                    </td>
                    <td>
                      <div class="pretty p-icon p-round p-pulse">
                          <input type="radio" name="'results[{{$outcome->id}}]'" />
                          <div class="state p-warning">
                              <i class="icon mdi mdi-check"></i>
                              <label></label>
                          </div>
                      </div>
                    </td>
                    <td>
                      <div class="pretty p-icon p-round p-pulse">
                          <input type="radio" name="'results[{{$outcome->id}}]'" />
                          <div class="state p-primary">
                              <i class="icon mdi mdi-check"></i>
                              <label></label>
                          </div>
                      </div>
                    </td>
                    <td>
                      <div class="pretty p-icon p-round p-pulse">
                          <input type="radio" name="'results[{{$outcome->id}}]'" />
                          <div class="state p-success">
                              <i class="icon mdi mdi-check"></i>
                              <label></label>
                          </div>
                      </div>
                    </td>
                  </tr>
                  @endforeach
              </tbody>
            </table>
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