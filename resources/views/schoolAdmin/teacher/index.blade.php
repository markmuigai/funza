@extends('layouts.schoolAdmin')
@section('page-title', 'School Admin Dashboard')
    
@section('content')
    <div class="container-fluid pt-4">
        <h2 class="text-center p-2">All Teachers</h2>
        <a href="{{ Route('schoolAdmin.teachers.create') }}" class="btn btn-primary my-3">Add New Teacher</a>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#staticBackdrop">
          Upload Teachers CSV
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
                      <select name="action" id="action" class="form-control">
                          <option selected>Bulk Actions</option>
                          <option>Activate</option>
                          <option>Deactivate</option>
                      </select>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-primary">Apply</button>
                    </div>
                </div>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body table-responsive no-padding">
                @component('components.schoolAdmin.tables.teachers', [
                  'teachers' => $teachers
                ])   
                @endcomponent
                {{$teachers->links()}}
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
            <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Understood</button>
          </div>
        </div>
      </div>
    </div>
@endsection