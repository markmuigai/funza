@extends('layouts.teacher')
@section('page-title', 'Teacher Dashboard')
    
@section('content')
@component('components.breadcrumb',[
    'title' => $subject->name.' Lesson Plan'
  ])  
  @endcomponent
<section class="py-5 py-md-5">
	<div class="container-fluid p-5">
		@php
        // Term 1
        $term1_start_date = Carbon\Carbon::parse('1/3/2020');
        $term1_end_date = Carbon\Carbon::parse('3/28/2020'); 

        // Term 2
        $term2_start_date = Carbon\Carbon::parse('5/3/2020');
        $term2_end_date = Carbon\Carbon::parse('7/28/2020'); 

        // Term 3
        $term3_start_date = Carbon\Carbon::parse('9/3/2020');
				$term3_end_date = Carbon\Carbon::parse('11/28/2020');
				
				$json = '{"numbers":{"whole numbers":20,"addition":8,"subtraction":8,"multiplication":8,"division":8,"fractions":6,"decimals":10},"measurements":{"length":10,"area":8,"mass":6,"volume":6,"capacity":6,"time":10,"money":8},"geometry":{"position and direction":4,"angles":4,"2-D shapes":6},"data handling":{"data":8},"algebra":{"user of letters":6}}';
				
				// Lesson Plans
				$lesson_plans = json_decode($json);

				function generateDates($start_date, $end_date)
				{
					$period = Carbon\CarbonPeriod::create($start_date, $end_date);

					// Initialize dates array
					$term_days = [];

					// Iterate over the period
					foreach ($period as $date) {
						if($date->isWeekday()){
							array_push($term_days, $date->format('Y-m-d'));
						}
					}

					return $term_days;
				}

				// Term 1
				$term_1_dates = generateDates($term1_start_date, $term1_end_date);

				// Term 2
				$term_2_dates = generateDates($term2_start_date, $term2_end_date);

				// Term 3
				$term_3_dates = generateDates($term3_start_date, $term3_end_date);
				
				// Create all year dates array
				$all_dates = array_merge($term_1_dates, $term_2_dates, $term_3_dates);

		@endphp

		@foreach ($lesson_plans as $key => $strand)
				{{$key}} <br>
				@foreach ($strand as $substrand => $lessons)
					{{$substrand}}: {{$lessons}},
					
				@endforeach
		@endforeach

		@foreach ($all_dates as $day)
				{{Carbon\Carbon::parse($day)->toRfc1036String() }} <br>
		@endforeach
	</div>
</section>
@endsection


