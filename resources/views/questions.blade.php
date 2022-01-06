@extends('layout.master')
@section('content')
{{-- <section class="questions-section"> --}}
<style>
  label{
    font-size: 1.7rem;
     margin-left: 30px;
     cursor: pointer;
  }
  input{
    font-size: 1.7rem;
     margin-left: 0px !important;
      margin-top: 8px;
  }
</style>
 
      <div class="container mt-5">
        <h1 class="section-title">Questions</h1>
        <div class="row">
          
                @php
                  $counter=1;
                @endphp
             @foreach ($qs as $question)
             <div class="col-12">
          
            <form action="{{route('result.store', $questions->id)}}" method="POST" >
              @csrf
              <input type="hidden" value="{{$questions->id}}" name="exam_id">
                  <div class="card border-dark mb-3 " >
                    <div class="card-header d-flex justify-content-between">

                      <h2 class="question">{{$question->question_titel}}  </h2>
                      <h3 class="card-title">{{ $counter }}/{{ $questions->question->count()}}</h3>
                    </div>
                    <div class="card-body text-dark">
                      
                      <div class="card-text">
                        <div class="answers-section">
                        <div class="form-check">
                          
                          <input id="answer1{{$question->id}}" class="form-check-input" type="radio" name="answer{{$question->id}}" value="{{$question->answer_one}}" >
                          <label for="answer1{{$question->id}}" >
                            {{$question->answer_one}}
                          </label>
                        </div>
                        <div class="form-check">
                          <input id="answer2{{$question->id}}" class="form-check-input" type="radio"
                           name="answer{{$question->id}}" value="{{$question->answer_two}}">
                          <label for="answer2{{$question->id}}" >
                            {{$question->answer_two}}
                          </label>
                        </div>
                        <div class="form-check">
                          <input id="answer3{{$question->id}}" class="form-check-input" type="radio"
                           name="answer{{$question->id}}" value="{{$question->answer_three}}">
                          <label for="answer3{{$question->id}}" >
                            {{$question->answer_three}}
                          </label>
                        </div>
                        <div class="form-check">
                          <input id="answer4{{$question->id}}" class="form-check-input" type="radio"
                           name="answer{{$question->id}}" value="{{$question->answer_four}}">
                          <label for="answer4{{$question->id}}" >
                            {{$question->answer_four}}
                          </label>
                        </div>
                        <input class="form-check-input" type="hidden" name="correct{{$question->id}}" value="{{$question->correct_answer}}">
                      </div>
                    </div>
                    </div>
                  </div>
                      
              {{-- <div class="timer">30</div> --}}
            
              @php
                  $counter++
              @endphp
                
                  @endforeach
                </div>
                </div>
                <div class="d-flex align-items-center justify-content-between mb-5 mr-5">
                <button class="btn d-block btn-primary ms-auto w-25  next-btn"  type="submit">submit all
                </button>
             </div>
      </div>
      </form>
    {{-- </section> --}}
@endsection