@extends('layouts.teacher')
@section('page-title', 'Teacher Dashboard')
    
@section('content')
    <div class="container-fuid">
        <h3>Your Classes</h3>
        @if($classes->isEmpty())
            You have not added any classes
        @else
            @foreach ($class as $class)
                <div class="card">
                    Class
                </div>
            @endforeach
        @endif
    </div>
@endsection