@extends('layouts.teacher')
@section('page-title', 'School Admin Dashboard')
@section('header', $student->name.' detailed performance')
@section('content')
@component('components.breadcrumb',[
    'title' => $student->name.' Performance'
  ])  
  @endcomponent
  <div class="container-fluid p-5">
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
        $colors = ['primary', 'warning',  'info', 'success'];
        $scores = [80,85,70,90];
        $strands = $subjects->first()->strands
      @endphp
      @foreach ($strands->take(4) as $key => $strand)
        <div class="col-lg-3 col-xs-6">
          <div class="card bg-{{$colors[$key]}} text-white">
            <div class="card-body">
              @if($student->strandScore($strand->id)==0)
                <h3>Pending</h3>
              @else
                <h3>{{$student->strandScore($strand->id)}}%</h3>
              @endif
              <h3>{{ ucfirst($strand->name) }}</h3>
              <a href="{{ Route('teacher.performance.results.students.strands.show', ['student' => $student, 'strand' => $strand  ]) }}" class="btn text-white btn-sm text-uppercase text-hover-success">
                More info <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseTopicsPerformance" aria-expanded="false" aria-controls="collapseTopicsPerformance">View All Strands</button>
    <div class="collapse mt-4" id="collapseTopicsPerformance">
      <div class="row">
        @foreach ($strands->except($strands->take(4)->keys()->toArray()) as $key => $strand)
          <div class="col-lg-3 col-xs-6">
            <div class="card bg-{{$colors[$key]}} text-white">
              <div class="card-body">
                @if($student->strandScore($strand->id)==0)
                  <h3>Pending</h3>
                @else
                  <h3>{{$student->strandScore($strand->id)}}%</h3>
                @endif
                <h3>{{ ucfirst($strand->name) }}</h3>
                <a href="{{ Route('teacher.performance.results.students.strands.show', ['student' => $student, 'strand' => $strand  ]) }}" class="btn text-white btn-sm text-uppercase text-hover-success">
                  More info <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
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