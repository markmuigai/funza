@extends('layouts.schoolAdmin')
@section('page-title', 'School Admin Dashboard')
    
@section('content')
<div class="container-fluid pt-4">
    <div class="card">
        <div class="card-header">{{ $teacher->name }} classes</div>
        <div class="card-body">
            <form action="{{ Route('schoolAdmin.teachers.class-assignment.store', ['teacher' => $teacher]) }}" method="POST">
                @csrf
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
                        <button type="submit" class="btn btn-primary">Assign</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-header">Assigned classes</div>
        <div class="card-body">
            @if($teacher->classroomSubject()->get()->isEmpty())
              <h4 class="text-center pt-3">No classes and subjects assigned</h4>
            @else
							<table class="table table-hover">
									<tbody>
									<tr>
										<th>Grade</th>
										<th>Classes</th>
										<th>Subjects</th>
										<th>Actions</th>
									</tr>
									@foreach ($teacher->classroomSubject()->get() as $classromSubject)
										<tr>
											<td>{{ $classromSubject->classroom->grade->name }}</td>
											<td>{{ $classromSubject->classroom->name }}</td>
											<td>{{ $classromSubject->subject->name }}</td>
											<td>
													<a href="#" class="btn btn-warning btn-sm">Remove</a>
											</td>
										</tr>
									@endforeach
									</tbody>
							</table>
            @endif
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