@extends('layouts.schoolAdmin')
@section('page-title', 'School Admin Dashboard')
    
@section('content')
    <div class="container-fluid pt-4">
        <h2 class="text-center p-2">Class {{$classroom->name}} students</h2>
        <a href="{{ Route('schoolAdmin.students.create') }}" class="btn btn-primary my-3">Add New Student</a>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#staticBackdrop">
          Upload students CSV
        </button>
    </div>
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
					@if($students->isEmpty())
							<h4 class="text-center">No students have been uploaded to this class</h4>
					@else
						<form style="display: inline-block float-left" action="" method="POST">
							@csrf
							<div class="box">
								<div class="box-header">
									<div class="box-tools">
										<div class="form-row">
											<div class="form-group col-md-2">
												<select name="action" id="action" class="form-control">
														<option selected>Bulk Actions</option>
														<option>Activate</option>
														<option>Deactivate</option>
												</select>
											</div>
											<div class="col-md-2">
													<button type="submit" class="btn btn-primary">Apply</button>
											</div>
											<div class="col-md-2 offset-md-6">
												<a href="{{ Route('schoolAdmin.students.export') }}" class="btn btn-success">Export CSV</a>
											</div>
										</div>
									</div>
								</div>
								<!-- /.box-header -->
								<div class="box-body table-responsive no-padding">
									@component('components.schoolAdmin.tables.students', [
										'students' => $students
									])   
									@endcomponent
									{{$students->links()}}
								</div>
								<!-- /.box-body -->
							</div>
						</form>
          @endif
        </div>
      </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Import Students CSV </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <a href="{{ Route('schoolAdmin.students.export.csv-template') }}" class="btn btn-primary mb-3">Download CSV Template </a>
            <form method="POST" action="{{route('schoolAdmin.students.import', ['classroom' =>  $classroom->id])}}" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="exampleFormControlFile1">Select CSV file</label>
                <input type="file" class="form-control-file" name="studentsCsv" id="exampleFormControlFile1">
              </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success">Import</button>
            </form>            
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
@endsection