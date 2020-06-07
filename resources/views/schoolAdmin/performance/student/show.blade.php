@extends('layouts.schoolAdmin')
@section('page-title', 'School Admin Dashboard')
@section('header', $student->name.' detailed performance')
@section('content')
  <div class="container-fluid">
    <h3>Performance By Subject</h3>
    <div class="form-row">
      <div class="form-group col-md-2">
          <select name="grade" id="grade" class="form-control">
              <option value="{{ $student->currentGrade()->id }}">Current Grade: {{ $student->currentGrade()->name }}</option>
              @foreach ($grades as $grade)
                  <option value="{{ $grade->id }}">{{ $grade->name }}</option>
              @endforeach
          </select>
      </div>
      <div class="form-group col-md-4">
          <select name="subject" id="action" class="form-control">
              {{-- <option selected>Select subject</option> --}}
              @foreach ($student->currentGrade()->subjects as $subject)
                  <option value="{{ $subject->id }}">{{ $subject->name }}</option>
              @endforeach
          </select>
      </div>
      <div class="col-md-2">
          <button type="submit" class="btn btn-primary">Filter</button>
      </div>
    </div>
    <div class="row">
      @php
        $colors = ['blue', 'green',  'purple', 'red'];
        $scores = [80,85,70,90];
        $strands = $subjects->first()->strands
      @endphp
      @foreach ($strands->take(4) as $key => $strand)
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-{{$colors[$key]}} text-white">
            <div class="inner">
              <h3>{{$scores[$key]}}<sup style="font-size: 20px">%</sup></h3>

              <p>{{ $strand->name }}</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="{{ Route('schoolAdmin.performance.results.students.strands.show', ['student' => $student, 'strand' => $strand  ]) }}" class="small-box-footer white">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
      @endforeach
    </div>
    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseTopicsPerformance" aria-expanded="false" aria-controls="collapseTopicsPerformance">View All Strands</button>
    <div class="collapse mt-4" id="collapseTopicsPerformance">
      <div class="row">
        @foreach ($strands->except($strands->take(4)->keys()->toArray()) as $key => $strand)
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-{{$colors[$key % 4]}} text-white">
              <div class="inner">
                <h3>{{$scores[$key % 4]}}<sup style="font-size: 20px">%</sup></h3>
  
                <p>{{ $strand->name }}</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{ Route('schoolAdmin.performance.results.students.strands.show', ['student' => $student, 'strand' => $strand  ]) }}" class="small-box-footer white">
                More info <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
        @endforeach
      </div>
    </div>
    <div class="card mt-5">
      <div class="card-header">
        Overall performance Chart
      </div>
      <div class="card-body">
        scores
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
    });
</script>
@endsection