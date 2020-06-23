@extends('layouts.schoolAdmin')
@section('page-title', 'School Admin Dashboard')
@section('header', $student->name.' '.$strand->name.' performance')	
@section('content')

	<div class="container-fluid pt-4">
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
									<td>{{$student->80%</td>
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
		<div class="accordion" id="accordionExample">
			@foreach ($student->substrandsAssessed($strand->id) as $substrand)
				<div class="card">
					<div class="card-header" id="headingOne">
						<h4 class="mb-0">
							<div class="row">
								<div class="col-md-2">
									{{ $substrand->name }}
								</div>
								<div class="col-md-2">
									<span class="">Total Score: 80%</span>
								</div>
								<div class="col-md-6 offset-md-2">
									<button class="btn btn-primary float-right" type="button" data-toggle="collapse" data-target="#collapseOne{{$substrand->id}}" aria-expanded="true" aria-controls="collapseOne">
										Assessment 3 Results
									</button>
									<button class="btn btn-primary float-right mr-2" type="button" data-toggle="collapse" data-target="#collapseOne{{$substrand->id}}" aria-expanded="true" aria-controls="collapseOne">
										Assessment 2 Results
									</button>
									<button class="btn btn-primary float-right mr-2" type="button" data-toggle="collapse" data-target="#collapseOne{{$substrand->id}}" aria-expanded="true" aria-controls="collapseOne">
										Assessment 1 Results
									</button>
								</div>
							</div>

						</h4>
					</div>
					<div id="collapseOne{{$substrand->id}}" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
						<div class="card-body">
							@if($student->outcomeResultsForSubstrand($substrand->id, 2)->isEmpty())
								<h3>The substrand has not been assessed yet</h3>
							@else
								<table class="table table-hover">
									<tbody>
										<tr>
												<th>Outcome</th>
												<th>Score (Out of 5)</th>
												<th>Outcome Results</th>
										</tr>
										@foreach ($student->outcomeResultsForSubstrand($substrand->id, 1) as $outcomeResult)
											<tr>
													<td>{{ $outcomeResult->outcome->name }}</td>
													<td>{{$outcomeResult->outcomeOption->score}}</td>
													<td>
														{{$outcomeResult->outcomeOption->name}}
													</td>
											</tr>
										@endforeach
									</tbody>
								</table>	
							@endif						
						</div>
					</div>
				</div>
			@endforeach
			{{-- {{$strand->substrands->links()}} --}}
		</div>
	</div>

@endsection

@section('js')
<script>
</script>
@endsection