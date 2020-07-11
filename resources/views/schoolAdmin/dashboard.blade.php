@extends('layouts.schoolAdmin')
@section('page-title', 'School Admin Dashboard')
    
@section('content')
<div class="container-fluid pt-4">
    <h4 class="my-3 text-center">Dashboard</h4>
    <div class="row">
        <div class="col-md-6">
            <h5 class="my-3">Students</h5>
            @if($students->isEmpty())
                <div class="card p-2 align-items-center">
                    <div class="card-body">
												<h4>No students uploaded </h4>
												{{-- Student --}}
												<canvas id="studentScores" width="400" height="400"></canvas>
                    </div>
                </div>
            @else   
                @component('components.tables.students', [
                    'students' => $students
                ])   
                @endcomponent
                <a href="{{ Route('schoolAdmin.students.index') }}" class="btn btn-primary">View More</a>
            @endif
        </div>
        <div class="col-md-6">
            <h5 class="my-3">Teachers</h5>
            @if($teachers->isEmpty())
                <div class="card p-2 align-items-center">
                    <div class="card-body">
                        <h4>No teachers uploaded</h4>
                    </div>
                </div>
            @else   
                @component('components.tables.teachers', [
                    'teachers' => $teachers
                ])   
                @endcomponent
                <a href="{{ Route('schoolAdmin.teachers.index') }}" class="btn btn-primary">View More</a>
            @endif
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
					}, { 
						data: [282,350,411,502,635,809,947,1402,3700,5267],
						label: "Asia",
						borderColor: "#8e5ea2",
						fill: false
					}, { 
						data: [168,170,178,190,203,276,408,547,675,734],
						label: "Europe",
						borderColor: "#3cba9f",
						fill: false
					}, { 
						data: [40,20,10,16,24,38,74,167,508,784],
						label: "Latin America",
						borderColor: "#e8c3b9",
						fill: false
					}, { 
						data: [6,3,2,2,7,26,82,172,312,433],
						label: "North America",
						borderColor: "#c45850",
						fill: false
					}
				]
			},
			options: {
				title: {
					display: true,
					text: 'World population per region (in millions)'
				}
			}
		});
});
</script>
@endsection