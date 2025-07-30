<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Grade;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $subjects = Subject::all();
        $grades = Grade::all();
        return view('students.create',compact('subjects','grades'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student = new Student;
        $student->admission_no = $request->admission_no;
        $student->student_name = $request->student_name;
        $student->father_name = $request->father_name;
        $student->gender = $request->gender;
        $student->telephone_no = $request->telephone_no;
        $student->nic_no = $request->nic_no;
        $student->date_of_birth = $request->date_of_birth;
        $student->address = $request->address;
        $student->join_date = $request->join_date;
        $student->grade_id = $request->grade_id;

        $student->save();

        // Add subjects
        $student->subjects()->attach($request->subjects);



        return redirect('/students');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Student::Find($id);
        $subjects = Student::Find($id)->subjects;
        return view('students.show',compact('student','subjects'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::Find($id);
        return view('students.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student = Student::find($id);

        $student->admission_no = $request->admission_no;
        $student->student_name = $request->student_name;
        $student->father_name = $request->father_name;
        $student->gender = $request->gender;
        $student->telephone_no = $request->telephone_no;
        $student->nic_no = $request->nic_no;
        $student->date_of_birth = $request->date_of_birth;
        $student->address = $request->address;
        $student->join_date = $request->join_date;

        $student->save();
        return redirect('/students');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect('/students');
    }
}
