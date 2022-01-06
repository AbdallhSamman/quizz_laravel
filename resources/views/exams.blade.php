@extends('layout.master')
@section('content')
<div class="container">
  
    <div class="intro-text py-5">
      <h3 class="welcome-name text-center mb-4 fw-bold">Welcome <span class="name">${name}</span>, Are You Ready?</h3>
    </div>
    <div class="row">
        @foreach ($exams as $exam)
        <div class="col-md-4">
            <div class="card mb-3 text-center">
              <img src="{{asset('images/'.$exam->image)}}" class="card-img-top w-50 h-50 m-auto pt-4" alt="HTML Quiz">
              <div class="card-body">
                <h4 class="card-title">{{ $exam->exam_name }}</h4>
                <p class="card-text">{{ $exam->exam_desc }}</p>
                <a href="{{ route('questions.show', $exam->id) }}" class="btn HTML html-btn-logo d-block w-100 m-auto">Start Quiz</a>
              </div>
            </div>
          </div>
        @endforeach
     
     
    </div>
  </div>
    
@endsection