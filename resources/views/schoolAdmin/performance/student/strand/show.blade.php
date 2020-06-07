@extends('layouts.schoolAdmin')
@section('page-title', 'School Admin Dashboard')
@section('header', $student->name.' '.$strand->name.' performance')
@section('content')

	<div class="container-fluid pt-4">
		<h3>Substrands</h3>
		<div class="accordion" id="accordionExample">
			@foreach ($strand->substrands as $substrand)
				<div class="card">
					<div class="card-header" id="headingOne">
						<h4 class="mb-0">
							<div class="row">
								<div class="col-md-2">
									{{ $substrand->name }}
								</div>
								<div class="col-md-2">
									<span class="">Average score: 30% </span>
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
							@if($student->outcomeResultsForSubstrand($substrand->id, 1)->isEmpty())
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