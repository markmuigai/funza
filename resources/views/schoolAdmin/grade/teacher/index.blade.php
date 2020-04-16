@extends('layouts.schoolAdmin')
@section('page-title', 'School Admin Dashboard')
    
@section('content')
    <div class="container-fluid pt-4">
		<div class="card">
			<div class="card-header">Assign teacher to subject</div>
			<div class="card-body">
				<form action="#" method="POST">
					@csrf
					<div class="form-row">
						<div class="form-group col-md-2">
							<select name="grade" id="grade" class="form-control">
								<option selected>Teacher</option>
							</select>
						</div>
						<div class="form-group col-md-2">
							<select name="class" id="class" class="form-control">
								<option selected>Subject</option>
							</select>
						</div>
						<div class="col-md-2">
							<button type="submit" class="btn btn-primary">Assign</button>
						</div>
					</div>
				</form>
			</div>
		</div>
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
										<a href="#" class="btn btn-danger btn-sm">Remove</a>
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