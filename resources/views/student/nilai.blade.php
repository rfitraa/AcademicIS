@extends('student.layout')
@section('content')
<div class="container mt-5">
    <div class="pull-left mt-2 text-center">
        <h2>INFORMATION TECHNOLOGY-STATE POLYTECHNIC OF MALANG</h2>
    </div>
    <div class="pull-left mt-5 text-center">
        <h2>KARTU HASIL SEMESTER (KHS)</h2>
    </div>
    <div class="my-3">
        <p><b>Name &ensp; : </b>{{  $student->name }}</p>
        <p><b>Nim &ensp;&ensp;&ensp;: </b>{{ $student->nim }}</p>
        <p><b>Class &ensp;&ensp; : </b>{{ $student->class->class_name }}</p>
    </div>
    <div class="row justify-content-center align-items-center">
        <table class="table table-bordered">
            <tr>
                <th>Mata Kuliah</th>
                <th>SKS</th>
                <th>Semester</th>
                <th>Nilai</th>
            </tr>
            @foreach($student->course as $mhs)
            <tr>
                <td>{{ $mhs->course_name }}</td>                
                <td>{{ $mhs->sks }}</td>                
                <td>{{ $mhs->hour }}</td>                
                <td>{{ $mhs->pivot->value }}</td>                
            </tr>
            @endforeach
        </table>
    </div>    
</div>
<a href="{{ route('student.index') }}" class="btn btn-success">Back</a>
@endsection