@extends('layouts.schoolAdmin')
@section('page-title', 'School Admin Dashboard')
    
@section('content')
    <div class="container-fluid pt-4">
        <h2 class="text-center p-2">All Users</h2>
        <a href="{{ Route('schoolAdmin.teachers.create') }}" class="btn btn-primary my-3">Add New User</a>
        <div class="row">
            <div class="col-md-12 col-sm-2">
                <form style="display: inline-block float-left" action="" method="POST">
                    @csrf
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
                    @component('components.schoolAdmin.tables.teachers', [
                        'teachers' => $teachers
                    ])   
                    @endcomponent
                </form>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Responsive Hover Table</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>ID</th>
                  <th>User</th>
                  <th>Date</th>
                  <th>Status</th>
                  <th>Reason</th>
                </tr>
                <tr>
                  <td>183</td>
                  <td>John Doe</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-success">Approved</span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
                <tr>
                  <td>219</td>
                  <td>Alexander Pierce</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-warning">Pending</span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
                <tr>
                  <td>657</td>
                  <td>Bob Doe</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-primary">Approved</span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
                <tr>
                  <td>175</td>
                  <td>Mike Doe</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-danger">Denied</span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
    </div>
@endsection