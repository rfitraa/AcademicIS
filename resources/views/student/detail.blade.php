@extends('student.layout')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Student Detail Data
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Nim : </b>{{ $student->nim }}</li>
                    <li class="list-group-item"><b>Name : </b>{{ $student->name }}</li>
                    <li class="list-group-item"><b>Class : </b>{{ $student->class }}</li>
                    <li class="list-group-item"><b>Major : </b>{{ $student->major }}</li>
                    <li class="list-group-item"><b>Address : </b>{{ $student->address }}</li>
                    <li class="list-group-item"><b>Date Of Birth : </b>{{ $student->dateofbirth }}</li>
                </ul>
            </div>
            <a href="{{ route('student.index') }}" class="btn btn-success">Back</a>
        </div>
    </div>
</div>
@endsection