<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $student = Student::all(); //take all data from table
        // $paginate = Student::orderBy('id_student', 'asc')->simplePaginate(3)->withQueryString();
        return view('student.index', [
            'student' => Student::orderBy('id_student', 'asc')->search(request(['search']))->paginate(3)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Nim' => 'required',
            'Name' => 'required',
            'Class' => 'required',
            'Major' => 'required',
            'Address' => 'required',
            'DateOfBirth' => 'required'
        ]);

        Student::create($request->all());

        return redirect()->route('student.index')
            ->with('success', 'Student Sucessfully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show($nim)
    {
        $student = Student::where('nim', $nim)->first();
        return view('student.detail', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($nim)
    {
        $student = Student::where('nim', $nim)->first();
        return view('student.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $nim)
    {
        $request->validate([
            'Nim' => 'required',
            'Name' => 'required',
            'Class' => 'required',
            'Major' => 'required',
            'Address' => 'required',
            'DateOfBirth' => 'required'
        ]);

        Student::where('nim', $nim)->update([
            'nim' => $request->Nim,
            'name' => $request->Name,
            'class' => $request->Class,
            'major' => $request->Major,
            'address' => $request->Address,
            'dateofbirth' => $request->DateOfBirth,
        ]);

        return redirect()->route('student.index')
            ->with('success', 'Student Succesfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($nim)
    {
        Student::where('nim', $nim)->delete();
        return redirect()->route('student.index')
            ->with('success', 'Student Successfully Deleted');
    }
}
