@extends('layouts.schoolAdmin')
@section('page-title', 'School Admin Dashboard')
@section('header', $student->name.' detailed performance')
@section('content')
  <div class="container-fluid">
    <div class="card">
      <h5 class="my-4 text-center">All Subjects Perfomance over time</h5>
      <div class="card-body">
        <canvas id="allSubjectScores" width="1500" height="400"></canvas>
        <form id ="fetchChartSubject">
          @foreach (App\Subject::all() as $subject)
            <div class="pretty p-icon p-round p-pulse">
              <input id="subject{{ $subject->id }}" class="filterSubject" type="checkbox" name="subjects[]" value="{{ $subject->id }}"/>
              <div class="state p-danger">
                  <i class="icon mdi mdi-check"></i>
                  <label>{{ $subject->name }}</label>
              </div>
            </div>
          @endforeach
        </form>
      </div>
    </div>
  </div>
  <div class="container-fluid">
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
                          <option selected>Grade</option>
                          @foreach ($grades as $grade)
                              <option value="{{ $grade->id }}">Grade: {{ $grade->name }}</option>
                          @endforeach
                      </select>
                  </div>
                  <div class="form-group col-md-2">
                      <select name="class" id="class" class="form-control">
                          <option selected>Class</option>
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
              @component('components.schoolAdmin.tables.students.subjects', [
                'subjects' => $subjects,
                'student' => $student
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
          if ($(this).text() == 'View All Strands') {
              $(this).text('View less');
          } else {
              $(this).text('View All Strands');
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
        $('#subject1').prop( "checked", true );

        var ctx = $('#allSubjectScores');
        var dataset = @json($student->getSubjectChartScores([1]));
        var labels = ['Jan', 'Feb', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        var allSubjectScores = new Chart(ctx, {
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
    });
</script>
@endsection