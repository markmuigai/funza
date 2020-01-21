@extends('layouts.teacher')
@section('page-title', 'Teacher Dashboard')
    
@section('content')
{{-- Bread crumb --}}
@component('components.breadcrumb',[
	'title' => $student->name.' student portfolio',
	'link_text' => 'Home',
	'link' => Route('teacher.dashboard') 
])	
@endcomponent
<!-- ====================================
———	COURSES SECTION
===================================== -->
<section class="py-8 py-md-8">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-xl-3 col-sm-12 mb-4 mb-md-0 order-2 order-lg-0 pt-8">
				<div class="row">
					{{-- Search component --}}
					@include('components.search')
				</div>
			</div>
			<div class="col-lg-8 col-xl-9 col-sm-12">
				<div class="row">
					@foreach($classroom->grade->subjects as $subject)
            <div class="container-fluid px-5">
              <h2 class="my-3">{{ $subject->name }}</h2>
                <div class="accordion" id="accordionExample">
                  @foreach ($subject->topics as $topic)
                    <div class="card">
                      <div class="card-header" id="headingOne"> 
                          <h4 class="float-left m-3">{{ $topic->name }}</h4>
                          <a class="btn btn-primary btn-sm float-right m-2" 
                            href="{{ Route('teacher.classroom.subject.topic.outcome-result.create', ['classroom' => $classroom, 'subject'=> $subject, 'topic' => $topic]) }}">
                            Recommended Actions
                          </a>
                          <button class="btn btn-success float-right m-2 text-white btn-sm" type="button" data-toggle="collapse" data-target="#collapseOne{{$topic->id}}" aria-expanded="true" aria-controls="collapseOne{{$topic->id}}">
                            View Learning Outcomes Assessment
                          </button>
                      </div>
                  
                      <div id="collapseOne{{$topic->id}}" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
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
                                      <div class="pretty p-icon p-round p-pulse p-locked">
                                          <input type="radio" name="results[{{$outcome->id}}]" value="weak" {{ $outcome->outcomeResultForStudent($student->id) == 'weak' ? 'checked' : '' }}>
                                          <div class="state p-danger">
                                              <i class="icon mdi mdi-check"></i>
                                              <label></label>
                                          </div>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="pretty p-icon p-round p-pulse p-locked">
                                          <input type="radio" name="results[{{$outcome->id}}]" value="average" {{ $outcome->outcomeResultForStudent($student->id) == 'average' ? 'checked' : '' }}/>
                                          <div class="state p-warning">
                                              <i class="icon mdi mdi-check"></i>
                                              <label></label>
                                          </div>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="pretty p-icon p-round p-pulse p-locked">
                                        <input type="radio" name="results[{{$outcome->id}}]" value="good" {{ $outcome->outcomeResultForStudent($student->id) == 'good' ? 'checked' : '' }}/>
                                          <div class="state p-primary">
                                              <i class="icon mdi mdi-check"></i>
                                              <label></label>
                                          </div>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="pretty p-icon p-round p-pulse p-locked">
                                        <input type="radio" name="results[{{$outcome->id}}]" value="outstanding" {{ $outcome->outcomeResultForStudent($student->id) == 'outstanding' ? 'checked' : '' }}/>
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
                        </div>
                      </div>
                    </div>
                  @endforeach
                </div>
            </div>
					@endforeach
				</div>
			</div>
		</div>
  </div>
  
</section>

@endsection