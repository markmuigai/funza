@extends('layouts.schoolAdmin')
@section('page-title', 'School Admin Dashboard')
@section('header', $substrand->name.' detailed performance')
@section('content')
  <div class="container-fluid">
    <div class="form-row">
      <div class="form-group col-md-2">
          <select name="grade" id="grade" class="form-control">
              <option selected>Select Grade</option>
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
    <h3 class="mt-2">Substrand performance</h3>
    @foreach($substrand->outcomes as $outcome)
			<div class="card mt-2">
				<div class="card-header">
					{{$outcome->name}}
				</div>
				<div class="card-body">
					<table class="table">
						<thead>
							<tr>
								<th colspan="2">
									<div class="row">
										<div class="col-md-5">
											Assessment Rubric
										</div>
										<div class="col-md-2 d-flex justify-content-center">
											Student percentage
										</div>
									</div>
								</th>
							</tr>
						</thead>
						<tbody>
							@foreach($outcome->outcomeOptions as $outcomeOption)
								<tr>
									<td colspan="2">
										<div class="row">
											<div class="col-md-5">
												{{$outcomeOption->name}}
											</div>
											<div class="col-md-2 d-flex justify-content-center">
												20%
											</div>
										</div>
									</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
    @endforeach
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