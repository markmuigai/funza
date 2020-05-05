@extends('layouts.teacher')
@section('page-title', 'Teacher Dashboard')
    
@section('content')
  @component('components.breadcrumb',[
    'title' => $subject->name
  ])  
  @endcomponent
  <section class="py-5 py-md-5">
    <div class="container-fluid px-5">
      <h2 class="my-3">Strands</h2>
        <div class="accordion" id="accordionExample">
          @foreach ($substrands as $substrand)
          <div class="card">
            <div class="card-header" id="headingOne"> 
                <h4 class="float-left m-3">{{ $substrand->name }}</h4>
                <button class="btn btn-warning float-right m-2 text-white btn-sm" type="button" data-toggle="collapse" data-target="#collapseOne{{$substrand->id}}" aria-expanded="true" aria-controls="collapseOne{{$substrand->id}}">
                  Update Topic Details
                </button>
                <a class="btn btn-primary btn-sm float-right m-2" 
                  href="{{ Route('teacher.classroom.subject.topic.outcome-result.create', ['classroom' => $classroom, 'subject'=> $subject, 'substrand' => $substrand]) }}">
                  Assess Learning outcomes
                </a>
                <button class="btn btn-success float-right m-2 text-white btn-sm" type="button" data-toggle="collapse" data-target="#collapseOne{{$substrand->id}}" aria-expanded="true" aria-controls="collapseOne{{$substrand->id}}">
                  View Learning Outcomes
                </button>
            </div>
        
            <div id="collapseOne{{$substrand->id}}" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                @component('components.tables.outcomes',[
                  'outcomes' => $substrand->outcomes
                ])
                @endcomponent
              </div>
            </div>
          </div>
          @endforeach
        </div>
        {{ $substrands->links() }}
    </div>
  </section>
  @endsection

