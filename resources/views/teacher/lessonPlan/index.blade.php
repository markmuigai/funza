@extends('layouts.teacher')
@section('page-title', 'Teacher Dashboard')
    
@section('content')
@component('components.breadcrumb',[
    'title' => $subject->name.' Lesson Plan'
  ])  
  @endcomponent
<section class="py-5 py-md-5">
	<div class="container-fluid p-5">

	</div>
</section>
@endsection


