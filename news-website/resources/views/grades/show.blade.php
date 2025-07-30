@extends('layouts.master')
@section('title', 'Show Grade')
@push('styles')
    #form{
    background-color: rgb(161, 194, 205);
    border-radius: 15px;
    }
    #input{
    border-radius: 15px;
    }
@endpush
@section('content')
    <div class="container mt-4 mb-4" id="form">
        <div class="row">
            <div class="col-sm-5 mx-auto border p-3 shadow bg-light mt-5" id="input">
                <form action="/grades" method="get" class="mb-4 col-sm-6">
                                <input type="submit" value="Back" class="custom form-control bg-secondary mb-4">
                            </form>
                <h2 class="text-center mb-3">{{$grade->grade_name}}'s Details</h2>
                <table width="100%s">
                    <tr>
                        <td><label for="grade_name" class="col-form-label">Grade Name</label></td>
                        <td><input type="text" name="grade_name" id="grade_name" class="form-control" value="{{ $grade->grade_name }}" disabled></td>
                    </tr>
                    <tr>
                        <td><label for="grade_color" class="col-form-label mt-2">Grade Color</label></td>
                        <td><input type="text" name="grade_color" id="grade_color" class="form-control mt-2" value="{{ $grade->grade_color }}" disabled></td>
                    </tr>
                    <tr>
                        <td><label for="grade_order_no" class="col-form-label mt-2">Subject Order No</label></td>
                        <td><input type="number" name="grade_order_no" id="grade_order_no" class="form-control mt-2" step="any" value="{{ $grade->grade_order_no }}" disabled></td>
                    </tr>
                    <tr>
                        <td><label for="grade_group" class="col-form-label mt-2">Grade Group</label></td>
                        <td><input type="number" name="grade_group" id="grade_group" class="form-control mt-2" step="any" value="{{ $grade->grade_group }}" disabled></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-5 mx-auto border p-3 shadow bg-light mt-2" id="input">
                <h2 class="text-center mb-3">{{$grade->grade_name}}'s Students</h2>
                <table width="100%" class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Admission No</th>
                            <th scope="col">Student Name</th>
                        </tr>
                    </thead>
                    @foreach ($students as $student)
                        <tbody>
                            <tr>
                                <td>{{ $student->admission_no }}</td>
                                <td>{{ $student->student_name }}</td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-5 mx-auto border p-3 shadow bg-light mt-2 mb-5" id="input">
                <h2 class="text-center mb-3">{{$grade->grade_name}}'s Subjects</h2>
                <table width="100%" class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Subject Name</th>
                            <th scope="col">Subject Type</th>
                        </tr>
                    </thead>
                    @foreach ($subjects as $subject)
                        <tbody>
                            <tr>
                                <td>{{ $subject->subject_name }}</td>
                                <td>{{ $subject->subject_type }}</td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
