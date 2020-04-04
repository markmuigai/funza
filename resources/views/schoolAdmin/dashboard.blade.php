@extends('layouts.schoolAdmin')
@section('page-title', 'School Admin Dashboard')
    
@section('content')
<div class="container-fluid pt-4">
    <h4 class="my-3 text-center">Dashboard</h4>
    <div class="row">
        <div class="col-md-6">
            <h5 class="my-3">Students</h5>
            @if($students->isEmpty())
                <div class="card p-2 align-items-center">
                    <div class="card-body">
                        <h4>No students uploaded </h4>
                    </div>
                </div>
            @else   
                @component('components.tables.students', [
                    'students' => $students
                ])   
                @endcomponent
                <a href="{{ Route('schoolAdmin.students.index') }}" class="btn btn-primary">View More</a>
            @endif
        </div>
        <div class="col-md-6">
            <h5 class="my-3">Teachers</h5>
            @if($teachers->isEmpty())
                <div class="card p-2 align-items-center">
                    <div class="card-body">
                        <h4>No teachers uploaded</h4>
                    </div>
                </div>
            @else   
                @component('components.tables.teachers', [
                    'teachers' => $teachers
                ])   
                @endcomponent
                <a href="{{ Route('schoolAdmin.teachers.index') }}" class="btn btn-primary">View More</a>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h5 class="my-3">Performance Summary</h5>
            <div class="card p-2 align-items-center">
                <div class="card-body">
                    <h4>Performance Metrics Unavailable </h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
