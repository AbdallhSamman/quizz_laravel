@extends('layout.master')
@section('content')
<style>
  td{
    font-size: 15px;
    font-weight: 500;
  }
</style>
<div class="container mt-5">
<table class="table table-bordered">
    <thead>
      <tr>
        <th>name</th>
        <th>Exam name</th>
        <th>mark</th>
        <th>status</th>
        <th>Date</th>
      </tr>
    </thead>
    @foreach ($results as $result)
    <tbody>  
        @if ($result->status==='Passed')
        <tr class="table-success">
            <td>{{ $user->name }}</td>
            <td>{{ $result->exam_name }}</td>
            <td>{{ $result->mark }}</td>
            <td>{{ $result->status }}</td>
            <td>{{ $result->created_at }}</td>
          @else
        </tr>
        <tr class="table-danger">
            <td>{{ $user->name }}</td>
            <td>{{ $result->exam_name }}</td>
            <td>{{ $result->mark }}</td>
            <td>{{ $result->status }}</td>
            <td>{{ $result->created_at }}</td>
        </tr>
        @endif 
    @endforeach
   
    </tbody>
  </table>
</div>
@endsection