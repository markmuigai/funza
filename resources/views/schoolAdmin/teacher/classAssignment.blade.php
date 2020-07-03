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
											<select name="subject" id="subject" class="form-control">
												<option selected>Subject</option>
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
                    @foreach ($teacher->classroomSubject()->get() as $classroomSubject)
                        <tr>
                            <td>{{ $classroomSubject->classroom->grade->name }}</td>
                            <td>{{ $classroomSubject->classroom->name }}</td>
                            <td>{{ $classroomSubject->subject->name }}</td>
                            <td>
															<form method="POST" action="{{route('schoolAdmin.teachers.class-assignment.destroy', ['teacher'=> $teacher, 'classroomSubject' => $classroomSubject])}}">
															@csrf
															@method('DELETE')
															<button type="submit" class="btn btn-warning btn-sm">Remove</a>
															</form>
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
												$('select[name="class"]').append('<option>Select Class</option>');
                        $.each(data, function(key, value) {
                            $('select[name="class"]').append('<option value="'+ key +'">'+ value +'</option>');
                        });
                        
                        $('select[name="class"]').removeAttr('disabled');
												// $('select[name="subject"]').removeAttr('disabled');

                    }
                });
            }else{
                $('select[name="class"]').empty();
            }
        });

				$('select[name="class"]').on('change', function() {
            var classID = $(this).val();
            if(classID) {
								var userID = @json($teacher->id);
                $.ajax({
                    url: '/school-admin/teachers/classAssignment/fetchSubjects/'+classID+'/'+userID,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {

                        
                        $('select[name="subject"]').empty();
												$('select[name="subject"]').append('<option>Select Subject</option>');
                        $.each(data, function(key, value) {
                            $('select[name="subject"]').append('<option value="'+ key +'">'+ value +'</option>');
                        });
                        
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