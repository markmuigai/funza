@extends('layouts.schoolAdmin')
@section('page-title', 'School Admin Dashboard')
    
@section('content')
    <div class="container-fluid pt-4">
        <h2 class="text-center p-2">All Students</h2>
        <a href="{{ Route('schoolAdmin.students.create') }}" class="btn btn-primary my-3">Add New User</a>
        <div class="row">
            <div class="col-md-12 col-sm-2">
                <form style="display: inline-block float-left" action="{{Route('')}}" method="POST">
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
                    @component('components.schoolAdmin.tables.students', [
                        'students' => $students
                    ])   
                    @endcomponent
                </form>
            </div>
        </div>
    </div>
@endsection