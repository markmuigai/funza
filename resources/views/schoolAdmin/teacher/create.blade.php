@extends('layouts.schoolAdmin')
@section('page-title', 'School Admin Dashboard')
    
@section('content')
	<div class="container pt-4">
		<div class="card">
			<div class="card-body">
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Create new teacher</h3>
					</div>
					<!-- /.box-header -->
					<!-- form start -->
					<form action="{{ Route('schoolAdmin.teachers.store') }}" method="POST">
						@csrf
						<div class="box-body">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span style="color:red">*</span>
										<label for="name">Name</label>
										<input type="text" class="form-control" name="name" id="teacher-name" placeholder="Enter name" value="{{ old('name') ?: ($teacher->name ?? 'Jane Luffy') }}">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span style="color:red">*</span>
										<label for="email">Email address</label>
										<input type="email" class="form-control" name="email" id="teacher-email" placeholder="Enter email" value="{{ old('email') ?: ($teacher->name ?? 'jluffy@gmail.com') }}">
									</div>
								</div>
							</div>
							<label for="assign-class">Assign class and subject</label>

						</div>
						<!-- /.box-body -->

						<div class="box-footer">
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('js')
<script type="text/javascript">
        // Function to clone assign classes row on button click
        function Clone(clonebutton) {
            // Row to clone
            var row = $(clonebutton).parent(),
                // Inital row 
                original = $('#divRow0'),

                // Clone function 
                clone = $(original).clone(true, true);

            // Update id of parent row 
            clone.find('#divRow0').prop('id', 'divRow' + $('.clonerow').length);

            // // Update id of child row 
            clone.find('#innerDivRow0').prop('id', 'innerDivRow' + $('.clonerow').length);
            console.log($('.clonerow').length)

            // Update photo field  
            clone.find('select[name="assignments[0][grade]"]').attr('name', 'assignments['+ $('.clonerow').length +'][grade]');

            // Update name field 
            clone.find('select[name="assignments[0][class]"]').attr('name', 'assignments['+ $('.clonerow').length +'][class]');

            // Update description field
            clone.find('select[name="assignments[0][subject]"]').attr('name', 'assignments['+ $('.clonerow').length +'][subject]');

            // Append clone to parent container
            $('#container').append(clone);

            // length variable
            length = $('.clonerow').length

            console.log($('#innerDivRow' + (length-1)));

            // Append a remove testimonials button
            $('#innerDivRow' + (length-1)).append("<button type='button' class='btn btn-danger' onclick='DeleteClone(this)'>Remove</button>")

        }

        // Function to delete cloned row on button click
        function DeleteClone(deletebutton){
            // Delete the row and its children
            $(deletebutton).parent().remove()
        }
    $(document).ready(function() {
        $('select[name*="grade"]').attr('disabled', 'disabled');
				$('select[name*="class"]').attr('disabled', 'disabled');

        $('select[name*="subject"]').on('change', function() {
            var gradeID = $(this).val();
            if(gradeID) {
                $.ajax({
                    url: '/school-admin/teachers/classAssignment/fetchClasses/'+gradeID,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {

                        
                        $('select[name*="class"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name*="class"]').append('<option value="'+ key +'">'+ value +'</option>');
                        });
                        
                        $('select[name*="class"]').removeAttr('disabled');
												$('select[name*="subject"]').removeAttr('disabled');

                    }
                });
            }else{
                $('select[name*="class"]').empty();
            }
        });
    });
</script>
@endsection