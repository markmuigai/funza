@extends('layouts.schoolAdmin')
@section('page-title', 'School Admin Dashboard')
    
@section('content')
    <div class="container-fluid pt-4">
			<div class="card">
				<div class="card-header">Class {{$classroom->name}} teachers</div>
				<div class="card-body">
					@if($teachers->isEmpty())
						<h4>No teachers have been assigned to this class</h4>
					@else
						<table class="table table-hover">
							<tbody>
								<tr>
										<th>Name</th>
										<th>Email</th>
										<th>Subjects</th>
										<th>Actions</th>
								</tr>
								@foreach ($teachers as $teacher)
										<tr>
												<td>{{ $teacher->name }}</td>
												<td>{{ $teacher->email }}</td>
												<td>
													@foreach($teacher->subjectsForClass($classroom->id) as $subject)
														<h5><span class="badge badge-primary">{{ $subject->name }}</span></h5>
													@endforeach
												</td>
												<td>
													<a href="#" class="btn btn-primary btn-sm">View Performance</a>
												</td>
										</tr>
								@endforeach
						</tbody>
					</table>
					@endif
				</div>
			</div>
    </div>
@endsection