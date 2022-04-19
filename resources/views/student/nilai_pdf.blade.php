<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container mt-5">
        <div class="pull-left mt-2 text-center">
            <h2>INFORMATION TECHNOLOGY-STATE POLYTECHNIC OF MALANG</h2>
        </div>
        <div class="pull-left mt-5 text-center">
            <h2>KARTU HASIL SEMESTER (KHS)</h2>
        </div>

        <div class="row justify-content-center mb-3 mt-3">
            <div class="col-md-6">
                <div class="my-3">
                    <p><b>Name &ensp; : </b>{{ $student->name }}</p>
                    <p><b>Nim &ensp;&ensp;&ensp;: </b>{{ $student->nim }}</p>
                    <p><b>Class &ensp;&ensp; : </b>{{ $student->class->class_name }}</p>
                </div>

            </div>
            <div class="col-md-6">
                <div class="input-group my-3">
                    <div class="input-group">
                        <button class="btn btn-success" type="submit"><a
                                href="{{ route('student.print') }}">Print</a></button>
                    </div>
                </div>
            </div>
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
                    <td>{{ $mhs->semester }}</td>
                    <td>{{ $mhs->pivot->value }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    <a href="{{ route('student.index') }}" class="btn btn-success">Back</a>
</body>

</html>