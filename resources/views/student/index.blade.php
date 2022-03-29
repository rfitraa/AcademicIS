@extends('student.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>INFORMATION TECHNOLOGY-STATE POLYTECHNIC OF MALANG</h2>
            </div>            
            <div class="float-right my-2">
                <a href="{{ route('student.create') }}" class="btn btn-success">Input Student Data</a>
            </div>
        </div>
    </div>

    @if($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Nim</th>
            <th>Name</th>
            <th>Class</th>
            <th>Major</th>
            <th width="280px">Action</th>
        </tr>
        @foreach($student as $mhs)
        <tr>
            <td>{{ $mhs->nim }}</td>
            <td>{{ $mhs->name }}</td>
            <td>{{ $mhs->class }}</td>
            <td>{{ $mhs->major }}</td>
            <td>
                <form action="{{ route('student.destroy',['student' =>$mhs->nim]) }}" method="POST">
                    <a href="{{ route('student.show',$mhs->nim) }}" class="btn btn-info">Show</a>
                    <a href="{{ route('student.edit',$mhs->nim) }}" class="btn btn-primary">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection