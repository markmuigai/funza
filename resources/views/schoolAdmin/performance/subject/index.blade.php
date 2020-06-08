@extends('layouts.schoolAdmin')
@section('page-title', 'School Admin Dashboard')
@section('header', 'Subject performance')
@section('content')
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-4 col-xs-6">
						<!-- small box -->
						<div class="small-box bg-blue text-white">
							<div class="inner">
									<h3>Mathematics</h3>

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
								<h3>English Language Activities</h3>

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
		</div>
    <div class="container-fluid pt-4">
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
                @component('components.schoolAdmin.tables.subjects.performance', [
                  'subjects' => $subjects
                ])   
                @endcomponent
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
    });
</script>
@endsection