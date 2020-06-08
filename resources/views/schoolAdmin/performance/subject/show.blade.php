@extends('layouts.schoolAdmin')
@section('page-title', 'School Admin Dashboard')
@section('header', $subject->name.' detailed performance')
@section('content')
  <div class="container-fluid">
    <h3>Overall Strand Stats</h3>
    <div class="row">
      <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue text-white">
            <div class="inner">
                <h3>Subtraction</h3>

                <p>Best Performance</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
          </div>
      </div>
      <div class="col-lg-4 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green text-white">
          <div class="inner">
              <h3>Multiplication</h3>

              <p>Worst Performance</p>
          </div>
          <div class="icon">
              <i class="ion ion-stats-bars"></i>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-purple text-white">
          <div class="inner">
              <h3>20%</h3>

              <p>Assessment Completion</p>
          </div>
          <div class="icon">
              <i class="ion ion-stats-bars"></i>
          </div>
        </div>
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
                'substrands' => $strand->first()->substrands
              ])   
              @endcomponent
            </div>
            <!-- /.box-body -->
          </div>
        </form>
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
</script>
@endsection