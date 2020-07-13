@extends('layouts.schoolAdmin')
@section('page-title', 'School Admin Dashboard')
    
@section('content')
	<div class="container-fluid pt-4">
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
														<a href="#" class="btn btn-primary btn-sm">View Class Performance</a>
														<a href="{{ Route('schoolAdmin.grades.classroom.teacher.index', ['grade' => $grade, 'classroom' => $classroom])}}"
																class="btn btn-success btn-sm">View Teachers</a>
														<a href="{{ Route('schoolAdmin.grades.classroom.student.index', ['grade' => $grade, 'classroom' => $classroom])}}" class="btn btn-secondary btn-sm">View Students</a>
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
	</div>
@endsection