@extends('admin.layout.master')
@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- DATA TABLE -->
        <h3 class="title-5 m-b-35">data table</h3>
        <div class="table-data__tool">
          
            <div class="table-data__tool-right">
                <a class="au-btn au-btn-icon au-btn--green au-btn--small" href="{{ route('exam.create') }}">
                    <i class="zmdi zmdi-plus"></i>add item</a>
                <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                    
                    <div class="dropDownSelect2"></div>
                </div>
            </div>
        </div>
        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
                <thead>
                    <tr>
                       
                        <th>image</th>
                        <th>name</th>
                        <th>description</th>
                        <th>date</th>
                       
                        
                    </tr>
                </thead>
                <tbody>

                    @foreach ($exams as $exam)
                    <tr class="tr-shadow">
                        <td> <img src="{{ asset('images/'. $exam->image) }}" width="100px" height="70px" alt="Image"></td>
                        <td>{{ $exam->exam_name }}</td>
                        
                        <td class="desc">{{ $exam->exam_desc }}</td>
                        <td>{{ $exam->updated_at }}</td>
                       
                        <td>
                            <div class="table-data-feature">
                              <a href="{{ route('exam.edit', $exam->id) }}">
                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                    <i class="zmdi zmdi-edit"></i>
                                </button>
                              </a>
                               
                                <form action="{{ route('exam.destroy' , $exam->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                        <i class="zmdi zmdi-delete"></i>
                                    </button>
                                </form>
                          
                               
                            </div>
                        </td>               
                    </tr>
                    <tr class="spacer"></tr>
                    @endforeach
                    
                    
                
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE -->
    </div>
</div>
@endsection