@extends('layouts.schoolAdmin')
@section('page-title', 'School Admin Dashboard')
@section('header', $subject->name.' detailed performance')
@section('content')
  <div class="container-fluid">
    <div class="card">
      <h5 class="my-4 text-center">{{$subject->name}} Strand Perfomance</h5>
      <div class="card-body">
        <canvas id="allSubjectScores" width="1500" height="400"></canvas>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <h3>Recent Strand Scores</h3>
    <div class="row">
      @php
        $colors = ['blue', 'green',  'purple', 'red'];
      @endphp
      @foreach ($subject->strands->take(4) as $key => $strand)
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-{{$colors[$key]}} text-white">
            <div class="inner">
              @if($student->recentStrandScore($strand->id)==null)
                <h3>Pending</h3>
              @else
                <h3>{{$student->recentStrandScore($strand->id)}}<sup style="font-size: 20px">%</sup></h3>
              @endif
              <p>{{ $strand->name }}</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
          </div>
        </div>
      @endforeach
    </div>
    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseTopicsPerformance" aria-expanded="false" aria-controls="collapseTopicsPerformance">View All Strands</button>
    <div class="collapse mt-4" id="collapseTopicsPerformance">
      <div class="row">
        @foreach ($subject->strands->except($subject->strands->take(4)->keys()->toArray()) as $key => $strand)
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-{{$colors[$key % 4]}} text-white">
              <div class="inner">
                @if($student->recentStrandScore($strand->id)==null)
                  <h3>Pending</h3>
                @else
                  <h3>{{$student->recentStrandScore($strand->id)}}<sup style="font-size: 20px">%</sup></h3>
                @endif
                <p>{{ $strand->name }}</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
    <h3 class="mt-4 ">Substrand performance</h3>
		<div class="card">
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
            @foreach ($student->assessedSubstrands() as $substrand)
              <tr>
                <td>{{$substrand->name}}</td>
                <td>{{$student->recentSubstrandScore($substrand->id)}}%</td>
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
@endsection

@section('js')
<script type="text/javascript">
      $(".btn[data-toggle='collapse']").click(function() {
          if ($(this).text() == 'View All Substrands') {
              $(this).text('View less');
          } else {
              $(this).text('View All Substrands');
          }
      });

    $(document).ready(function() {
        $('select[name="class"]').attr('disabled', 'disabled');
				$('select[name="subject"]').attr('disabled', 'disabled');

        $('select[name="grade"]').on('change', function() {
            var gradeID = $(this).val();
            if(gradeID) {
                $.ajax({
                    url: '/school-admin/teachers/classAssignment/fetchClasses/'+gradeID,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        $('select[name="class"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="class"]').append('<option value="'+ key +'">'+ value +'</option>');
                        });
                        
                        $('select[name="class"]').removeAttr('disabled');
												$('select[name="subject"]').removeAttr('disabled');
                    }
                });
            }else{
                $('select[name="class"]').empty();
            }
        });
    });

        var ctx = $('#allSubjectScores');
        var dataset = @json($student->getStrandAverageChartScores($subject));
        var labels = @json($student->getStrandAverageChartScores($subject)->pluck('strands')->first());
        var allSubjectScores = new Chart(ctx, {
          type: 'line',
          data: {
            labels: labels,
            datasets: dataset 
          },
          options: {
            title: {
              display: true,
              text: 'Strand scores over time'
            },
            responsive: false
          }
        });

        $(".filterSubject").change(function(){
          var subjects = [];
          $('input:checkbox.filterSubject').each(function () {
              (this.checked ? subjects.push($(this).val()): "");
          });

          $.ajax({
            url: '/school-admin/performance/subjects/chartFilter',
            data: {'subjects': subjects},
            type: "get",
            dataType: "json",
            success:function(data) {
              newdata = data

              allSubjectScores.data.datasets = [];

              allSubjectScores.data.datasets = data;
              
              allSubjectScores.update();
            }
          });

        });
</script>
@endsection