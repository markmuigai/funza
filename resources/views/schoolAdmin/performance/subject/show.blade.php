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
              @if($classroom->recentStrandScore($strand->id)==null)
                <h3>Pending</h3>
              @else
                <h3>{{$classroom->recentStrandScore($strand->id)}}<sup style="font-size: 20px">%</sup></h3>
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
                @if($classroom->recentStrandScore($strand->id)==null)
                  <h3>Pending</h3>
                @else
                  <h3>{{$classroom->recentStrandScore($strand->id)}}<sup style="font-size: 20px">%</sup></h3>
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
    <h3 class="mt-2">Substrand performance</h3>
    <div class="card">
      <div class="card-body">
        <form style="display: inline-block float-left" action="" method="POST">
          @csrf
          <div class="box">
            <div class="box-header">
              <div class="box-tools">
                <div class="form-row">
                  <div class="form-group col-md-2">
                      <select name="grade" id="grade" class="form-control">
                          <option selected>Select Strand</option>
                          @foreach ($subject->strands as $strand)
                              <option value="{{ $strand->id }}">{{ $strand->name }}</option>
                          @endforeach
                      </select>
                  </div>
                  <div class="col-md-2">
                      <button type="submit" class="btn btn-primary">Filter</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              @component('components.schoolAdmin.tables.strands.performance', [
                'subject' => $subject,
                'substrands' => $subject->substrands
              ])   
              @endcomponent
            </div>
            <!-- /.box-body -->
          </div>
        </form>
      </div>
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
        var dataset = @json($classroom->getStrandAverageChartScores($subject));
        var labels = @json($classroom->getStrandAverageChartScores($subject)->pluck('strands')->first());
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