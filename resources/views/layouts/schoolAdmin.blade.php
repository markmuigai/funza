@extends('layouts.admin')
@include('layouts.alerts')
@section('app.content')
    <div id="content" class="withdrawn">
        @yield('content')
    </div>  
@endsection
@section('app.js')
    @yield('js')
@endsection
