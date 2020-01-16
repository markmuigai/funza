@extends('layouts.app')
@section('app.content')
    <div id="content" class="withdrawn">
        @yield('content')
    </div>  
    @include('layouts.teacher.footer')
@endsection

@section('app.js')
    @yield('js')
@endsection