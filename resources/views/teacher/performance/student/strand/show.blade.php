@extends('layouts.teacher')
@section('page-title', 'School Admin Dashboard')
@section('header', $student->name.' '.$strand->name.' performance')	
@section('content')
@component('components.breadcrumb',[
	'title' => $student->name.' '.$strand->name.' performance'
])  
@endcomponent
	<div class="container-fluid p-5">
		<div class="card">
			<div class="card-header">
				<h3>Assessed Substrands</h3>
			</div>
			<div class="card-body">
				<table class="table">
					<thead>
						<tr>
							<th>Substrand</th>
							<th>Total Average score</th>
							<th>N.o of assessments</th>
							<th>Assessment scores</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($student->substrandsAssessed($strand->id) as $substrand)
								<tr>
									<td>{{$substrand->name}}</td>
									<td>{{$student->averageSubstrandScore($substrand->id)}}%</td>
									<td>{{$student->assessmentsCountForSubstrand($substrand->id)}}</td>
									<td>
										@foreach($student->assessmentScoresPercentage($substrand->id) as $score)
											<span class="badge badge-pill badge-primary rem-2" style="font-size:1.2em">{{$score}}%</span>
										@endforeach
									</td>
									<td>
										<button class="btn btn-primary">
											View Detailed Results
										</button>
									</td>
								</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection

@section('js')
<script>
</script>
@endsection