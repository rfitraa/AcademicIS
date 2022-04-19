@extends('student.layout')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Edit Student Data
            </div>
            <div class="card-body">
                @if($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops! </strong>There were some problem with your input. <br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            
            <form action="{{ route('student.update', $student->nim) }}" method="post" id="myForm" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="Nim">Nim</label>
                    <input type="text" name="Nim" class="form-control" id="Nim" aria-describedby="Nim" value="{{ $student->nim }}">
                </div>
                <div class="form-group">
                    <label for="Name">Name</label>
                    <input type="text" name="Name" class="form-control" id="Name" aria-describedby="Name" value="{{ $student->name }}">
                </div>
                <div class="form-group">
                    <label for="Class">Class</label>
                    <select name="Class" class="form-control" id="">
                        @foreach($class as $kls)
                        <option value=" {{ $kls->id }} ">{{ $kls->class_name }}</option>
                        @endforeach
                    </select>  
                </div>
                <div class="form-group">
                    <label for="Major">Major</label>
                    <input type="text" name="Major" class="form-control" id="Major" aria-describedby="Major" value="{{ $student->major }}">
                </div>
                <div class="form-group">
                    <label for="Address">Address</label>
                    <input type="text" name="Address" class="form-control" id="Address" aria-describedby="Address" value="{{ $student->address }}">
                </div>
                <div class="form-group">
                    <label for="DateOfBirth">Date Of Birth</label>
                    <input type="date" name="DateOfBirth" class="form-control" id="DateOfBirth" aria-describedby="DateOfBirth" value="{{ $student->dateofbirth }}">
                </div>
                <div class="form-group">
                    <label for="Photo">Photo</label>
                    <input type="file" name="Photo" class="form-control" id="Photo" aria-describedby="Photo"  value="{{ $student->photo }}">
                    <img width="150px" src="{{ asset('storage/'.$student->photo )}}" alt="">
                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection