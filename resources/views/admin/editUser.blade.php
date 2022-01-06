@extends('admin.layout.master')
@section('content')
<div class="col-lg-10">
    <div class="card">
        <div class="card-header">Credit Card</div>
        <div class="card-body">
            <div class="card-title">
                <h3 class="text-center title-2">Edit Exam</h3>
            </div>
            <hr>
            <form action="{{ route('user.update',$user->id) }}" method="post" enctype="multipart/form-data"">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="cc-payment" class="control-label mb-1">user Name</label>
                    <input id="cc-pament" name="name" type="text"
                     class="form-control" aria-required="true" aria-invalid="false" value="{{ $user->name }}">
                </div>
                <div class="form-group">
                    <label for="cc-payment" class="control-label mb-1">user email</label>
                    <input id="cc-pament" name="email" type="text"
                     class="form-control" aria-required="true" aria-invalid="false" value="{{ $user->email }}">
                </div>
                <div class="form-group">
                    <label for="cc-payment" class="control-label mb-1">user password</label>
                    <input id="cc-pament" name="password" type="password"
                     class="form-control" aria-required="true" aria-invalid="false" value="{{ $user->password }}">
                </div>
                <div class="col-12 col-md-9 mb-3">
                    <label for="select" class=" form-control-label">user role</label>
                    <select name="role_type" id="select" class="form-control">
                        <option selected value="{{ $user->role_type }}">{{ $user->role_type }}</option>
                        <option value="user">user</option>
                        <option value="admin">admin</option>
                    </select>
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