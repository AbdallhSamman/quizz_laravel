@extends('admin.layout.master')
@section('content')
<div class="col-lg-10">
    <div class="card">
        <div class="card-header">Credit Card</div>
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center title-2">Pay Invoice</h3>
            </div>
            <hr>
            <form action="{{ route('question.index') }}" method="post" enctype="multipart/form-data"">
                @csrf
                <div class="form-group">
                    <label for="cc-payment" class="control-label mb-1">question Name</label>
                    <input id="cc-pament" name="question_titel" type="text" class="form-control" 
                    aria-required="true" aria-invalid="false"  >
                </div>
                <div class="form-group">
                    <label for="cc-payment" class="control-label mb-1">answer one</label>
                    <input id="cc-pament" name="answer_one" type="text" class="form-control" 
                    aria-required="true" aria-invalid="false"  >
                </div>
                <div class="form-group">
                    <label for="cc-payment" class="control-label mb-1">answer two</label>
                    <input id="cc-pament" name="answer_two" type="text" class="form-control" 
                    aria-required="true" aria-invalid="false"  >
                </div>
                <div class="form-group">
                    <label for="cc-payment" class="control-label mb-1">answer three</label>
                    <input id="cc-pament" name="answer_three" type="text" class="form-control" 
                    aria-required="true" aria-invalid="false"  >
                </div>
                <div class="form-group">
                    <label for="cc-payment" class="control-label mb-1">answer four</label>
                    <input id="cc-pament" name="answer_four" type="text" class="form-control" 
                    aria-required="true" aria-invalid="false"  >
                </div>
                <div class="form-group">
                    <label for="cc-payment" class="control-label mb-1">correct answer</label>
                    <input id="cc-pament" name="correct_answer" type="text" class="form-control" 
                    aria-required="true" aria-invalid="false"  >
                </div>

                <div class="col col-md-3">
                    <label for="select" class=" form-control-label">related Exam</label>
                </div>
                <div class="col-12 col-md-9">
                    <select name="exam_id" id="select" class="form-control">
                        <option >Please select an Exam</option>
                        @foreach ($relatedExams as $relatedExam)
                        <option value="{{ $relatedExam->id }}">{{ $relatedExam->exam_name }}</option>
                        @endforeach
                        
                        
                    </select>
                </div>
                
                    
                <div>
                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                        
                        <span id="payment-button-amount">add question</span>
                        <span id="payment-button-sending" style="display:none;">Sending…</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection