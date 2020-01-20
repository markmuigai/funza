@extends('layouts.teacher')
@section('page-title', 'Teacher Dashboard')
    
@section('content')

<section class="py-5 py-md-5">
	<div class="container-fluid px-5">
    <h2 class="my-3">Topics</h2>
      <div class="accordion" id="accordionExample">
        @foreach ($topics as $topic)
        <div class="card">
          <div class="card-header" id="headingOne"> 
              <h4 class="float-left m-3">{{ $topic->name }}</h4>
              <button class="btn btn-warning float-right m-2 text-white btn-sm" type="button" data-toggle="collapse" data-target="#collapseOne{{$topic->id}}" aria-expanded="true" aria-controls="collapseOne{{$topic->id}}">
                Update Topic Details
              </button>
              <a class="btn btn-primary btn-sm float-right m-2" href="">Assess Learning outcomes</a>
              <button class="btn btn-success float-right m-2 text-white btn-sm" type="button" data-toggle="collapse" data-target="#collapseOne{{$topic->id}}" aria-expanded="true" aria-controls="collapseOne{{$topic->id}}">
                View Learning Outcomes
              </button>
          </div>
      
          <div id="collapseOne{{$topic->id}}" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
              @component('components.tables.outcomes',[
                'outcomes' => $topic->outcomes
              ])
              @endcomponent
            </div>
          </div>
        </div>
        @endforeach
      </div>
      {{ $topics->links() }}
	</div>
</section>
@endsection

