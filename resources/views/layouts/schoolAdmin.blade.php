@extends('layouts.admin')
@section('app.content')
    @include('layouts.alerts')
    <div id="content" class="withdrawn">
        @yield('content')
    </div>  
@endsection
@section('app.js')
    @yield('js')
@endsection
