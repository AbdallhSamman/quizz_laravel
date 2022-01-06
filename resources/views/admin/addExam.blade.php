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
            <form action="{{ route('exam.index') }}" method="post" enctype="multipart/form-data"">
                @csrf
                <div class="form-group">
                    <label for="cc-payment" class="control-label mb-1">Exam Name</label>
                    <input id="cc-pament" name="exam_name" type="text" class="form-control" 
                    aria-required="true" aria-invalid="false"  >
                </div>
                
                    <div class="form-group">
                        <label for="textarea-input" class=" form-control-label">Exam descreption</label>
                        <textarea name="exam_desc" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="textarea-input" class=" form-control-label">Exam image</label>
                        <input type="file" name="image" id="textarea-input"  class="form-control"></input>
                    </div>
                <div>
                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                        
                        <span id="payment-button-amount">add Exam</span>
                        <span id="payment-button-sending" style="display:none;">Sending…</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection