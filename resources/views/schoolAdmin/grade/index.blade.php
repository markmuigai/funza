@extends('layouts.schoolAdmin')
@section('page-title', 'School Admin Dashboard')
    
@section('content')
	<div class="container-fluid pt-2">
		@if ($grades->isEmpty())
		<a href="{{route('schoolAdmin.grades.create')}}" class="btn btn-success my-3">Upload classes</a>
		<div class="card">
			<div class="card-body">
				<h3 class="m-5 text-center">No classes have been created</h3>
			</div>
		</div>
		@else
		<h3>Grades</h3>
		<div class="accordion" id="accordionExample">
			@foreach ($grades as $grade)
				<div class="card">
					<div class="card-header" id="headingOne">
						<h4 class="mb-0">
							Grade {{ $grade->name }}
							<button class="btn btn-primary float-right" type="button" data-toggle="collapse" data-target="#collapseOne{{$grade->id}}" aria-expanded="true" aria-controls="collapseOne">
								Create Class
							</button>
							<button class="btn btn-primary float-right mr-2" type="button" data-toggle="collapse" data-target="#collapseOne{{$grade->id}}" aria-expanded="true" aria-controls="collapseOne">
								View Classes
							</button>
							<button class="btn btn-primary float-right mr-2" type="button" data-toggle="collapse" data-target="#collapseOne{{$grade->id}}" aria-expanded="true" aria-controls="collapseOne">
								View Grade Performance
							</button>
						</h4>
					</div>
					<div id="collapseOne{{$grade->id}}" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
						<div class="card-body">
							<table class="table table-hover">
								<tbody>
									<tr>
											<th>Class</th>
											<th>Actions</th>
									</tr>
									@foreach ($grade->classrooms(auth()->user()->schools()->first()) as $classroom)
											<tr>
													<td>{{ $classroom->name }}</td>
													<td>
														@if ($classroom->currentStudents()->isEmpty())
															<a href="{{ Route('schoolAdmin.grades.classroom.student.index', ['grade' => $grade, 'classroom' => $classroom])}}" class="btn btn-success btn-sm">Upload Students</a>
														@else
															<a href="{{ Route('schoolAdmin.grades.classroom.teacher.index', ['grade' => $grade, 'classroom' => $classroom])}}"
																class="btn btn-success btn-sm">View Teachers</a>
															<a href="{{ Route('schoolAdmin.grades.classroom.student.index', ['grade' => $grade, 'classroom' => $classroom])}}" class="btn btn-secondary btn-sm">View Students</a>
														@endif
													</td>
											</tr>
										@endforeach
								</tbody>
							</table>							
						</div>
					</div>
				</div>
			@endforeach
		</div>
		@endif
	</div>
@endsection