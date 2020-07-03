@extends('layouts.app')
@section('app.content')
@include('layouts.alerts')
    <div id="content" class="withdrawn" style="min-height: 698px;">
        @yield('content')
    </div>  
    @include('layouts.teacher.footer')
@endsection

@section('app.js')
    @yield('js')
@endsection