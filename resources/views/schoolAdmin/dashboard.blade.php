@extends('layouts.schoolAdmin')
@section('page-title', 'School Admin Dashboard')
    
@section('content')
<div class="container-fluid pt-4">
	@if(!$classroom)
		<div class="card p-2 align-items-center">
			<div class="card-body">
					<h4>Performance summary unavailable</h4>
			</div>
		</div>
	@else
		<h4 class="my-3 text-center">Dashboard</h4>
		<div class="row">
				<div class="col-md-6">
					<div class="card">
						<h5 class="my-4 text-center">Students Average Perfomance over time</h5>
						<div class="card-body">
							<canvas id="studentScoreTotals" width="700" height="400"></canvas>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card p-2 align-items-center">
						<h5 class="my-3">Average Subject Performance</h5>
							<div class="card-body">
								<canvas id="subjectScores" width="600" height="400"></canvas>
							</div>
					</div>
				</div>
		</div>
		<div class="row">
				<div class="col-md-12">
						<h5 class="my-3">Performance Summary</h5>
						<div class="card p-2 align-items-center">
								<div class="card-body">
										<h4>Performance Metrics Unavailable </h4>
										
								</div>
						</div>
				</div>
		</div>
	@endif
</div>
@endsection
@section('js')
<script type="text/javascript">
	$(document).ready(function() {
		var ctx = $('#studentScores');
		var studentScores = new Chart(ctx, {
			type: 'line',
			data: {
				labels: [1500,1600,1700,1750,1800,1850,1900,1950,1999,2050],
				datasets: [{ 
						data: [86,114,106,106,107,111,133,221,783,2478],
						label: "Africa",
						borderColor: "#3e95cd",
						fill: false
					}
				]
			},
			options: {
				title: {
					display: true,
					responsive: false,
					text: 'World population per region (in millions)'
				}
			}
		});

		var ctx = $('#subjectScores');
		var labels = @json($subjectAverageChartLabels);
		var scores = @json($subjectAverageChartScores);
		var studentScores = new Chart(ctx, {
			type: 'horizontalBar',
			data: {
				labels: labels,
				datasets: [
					{
						label: "Score(Percent)",
						backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850", "#3e95cd","#8e5ea2", "#3cba9f"],
						data: scores,
					}
				]
			},
			options: {
				legend: { display: false },
				title: {
					display: true,
					text: 'Average subject scores'
				},
				responsive: false
			}
		});

		var ctx = $('#studentScoreTotals');
        var dataset = @json($studentScoreTotalsChart);
        var labels = ['Jan', 'Feb', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        var studentScoreTotals = new Chart(ctx, {
          type: 'line',
          data: {
            labels: labels,
            datasets: dataset 
          },
          options: {
            scales: {
              xAxes: [{
                  display: true,
                  scaleLabel: {
                    display: true,
                    labelString: 'Performance over time'
                  }
              }],
              yAxes: [{
                display: true,
                ticks: {
                    // beginAtZero: true,
                    // steps: 10,
                    // stepValue: 5,
                    max:100
                  }
              }]
            },
            title: {
              display: true,
              text: 'Subject scores over Time'
            },
            responsive: false
          }
        });
});
</script>
@endsection