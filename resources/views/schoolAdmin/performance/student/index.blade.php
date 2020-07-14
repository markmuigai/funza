@extends('layouts.schoolAdmin')
@section('page-title', 'School Admin Dashboard')
@section('header', 'Class '.$classroom->name.' students performance')
@section('content')
@if(!$classroom)
<div class="card p-2 align-items-center">
  <div class="card-body">
      <h4>Performance summary unavailable</h4>
  </div>
</div>
@else
    <div class="container-fluid">
      <div class="card">
        <h5 class="my-4 text-center">Class {{$classroom->name}} Average Perfomance over time</h5>
        <div class="card-body">
          <canvas id="studentScoreTotals" width="1500" height="400"></canvas>
        </div>
      </div>
    </div>
    <div class="container-fluid">
        <a href="{{ Route('schoolAdmin.students.create') }}" class="btn btn-primary my-3">Add New Student</a>
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#staticBackdrop">
          Download Performance PDF
        </button>
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
                                <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <select name="class" id="class" class="form-control">
                            <option selected>Class</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <select name="subject" id="action" class="form-control">
                            <option selected>subject</option>
                            @foreach ($subjects as $subject)
                                <option value="{{ $subject->id }}">{{ $subject->name }}</option>
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
                @component('components.schoolAdmin.tables.students.performance', [
                  'students' => $students,
                  'subjects' => $subjects,
                  'classroom' => $classroom
                ])   
                @endcomponent
                {{$students->links()}}
              </div>
              <!-- /.box-body -->
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Import Students CSV</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <a href="{{ Route('schoolAdmin.students.export.csv-template') }}" class="btn btn-primary">Download CSV Template </a>
            <a href="{{ Route('schoolAdmin.students.import') }}" class="btn btn-success">Import</a>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
@endif
@endsection

@section('js')
<script type="text/javascript">
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
            },
            responsive: false
          }
        });
    });
</script>
@endsection