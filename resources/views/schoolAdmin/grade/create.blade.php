@extends('layouts.schoolAdmin')
@section('page-title', 'School Admin Dashboard')
    
@section('content')
	<div class="container pt-4">
		<div class="card">
			<div class="card-body">
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title my-3">Create classes</h3>
					</div>
					<!-- /.box-header -->
					<!-- form start -->
					<form action="{{ Route('schoolAdmin.grades.store') }}" method="POST">
						@csrf
						<div class="box-body">
              <label for="assign-class">Select grades</label>
              <div class="form-row mb-4">
                @foreach ($grades as $grade)
                  <div class="pretty p-icon p-round p-pulse">
                    <input type="checkbox" name="grades[]" value="{{ $grade->id }}"/>
                    <div class="state p-danger">
                        <i class="icon mdi mdi-check"></i>
                        <label>{{ $grade->name }}</label>
                    </div>
                  </div>
							  @endforeach
              </div>
						</div>
						<!-- /.box-body -->

            <div id="container">
              <div id="divRow0" class=clonerow>
                  <div id="innerDivRow0">
                      <div class="form-row">
                          <div class="form-group col-md-6">
                              <label for="user_name">Stream Name</label>
                              <input type="text" class="form-control" placeholder="Stream Name" name="streams[0][name]" value="{{ old('steam_name') ?: '' }}">
                          </div>
                      </div>
                      <input class="btn btn-primary my-2" type="button" onclick="Clone(this)" value="Add a stream" />
                  </div>
                </div>
            </div>
						<div class="box-footer">
							<button type="submit" class="btn btn-primary mt-5">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('js')
<script type="text/javascript">
  // Function to clone testimonial row on button click
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
    clone.find('input[name="streams[0][name]"]').attr('name', 'streams['+ $('.clonerow').length +'][name]');

    // Append clone to parent container
    $('#container').append(clone);

    // length variable
    length = $('.clonerow').length

    console.log($('#innerDivRow' + (length-1)));

    // Append a remove testimonials button
    $('#innerDivRow' + (length-1)).append("<button type='button' class='btn btn-danger' onclick='DeleteClone(this)'>Remove stream</button>")

}

// Function to delete testimonial row on button click
function DeleteClone(deletebutton){
    // Delete the row and its children
    $(deletebutton).parent().remove()
}
</script>
@endsection

