@extends('layouts.master')
@section('title', 'Show Subject')
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
                <form action="/subjects" method="get" class="mb-4 col-sm-6">
                    <input type="submit" value="Back" class="custom form-control bg-secondary mb-4">
                </form>
                <h2 class="text-center mb-3">{{ $subject->subject_name }}'s Details</h2>
                <table width="100%s">
                    <tr>
                        <td><label for="subject_name" class="col-form-label">Subject Name</label></td>
                        <td><input type="text" name="subject_name" id="subject_name" class="form-control"
                                value="{{ $subject->subject_name }}" disabled></td>
                    </tr>
                    <tr>
                        <td><label for="subject_index" class="col-form-label mt-2">Subject Index</label></td>
                        <td><input type="text" name="subject_index" id="subject_index" class="form-control mt-2"
                                value="{{ $subject->subject_index }}" disabled></td>
                    </tr>
                    <tr>
                        <td><label for="subject_order_no" class="col-form-label mt-2">Subject Order No</label></td>
                        <td><input type="number" name="subject_order_no" id="subject_order_no" class="form-control mt-2"
                                step="any" value="{{ $subject->subject_order_no }}" disabled></td>
                    </tr>
                    <tr>
                        <td><label for="subject_type" class="col-form-label mt-2 mb-3" value="{{ $subject->subject_type }}"
                                disabled>Subject Type</label></td>
                        <td>
                            <select name="subject_type" id="subject_type" class="form-control mt-2 mb-3" disabled>
                                <option value="Mandatory" {{ $subject->subject_type == 'Mandatory' ? 'selected' : '' }}>
                                    Mandatory</option>
                                <option value="Optional" {{ $subject->subject_type == 'Optional' ? 'selected' : '' }}>
                                    Optional</option>
                            </select>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-5 mx-auto border p-3 shadow bg-light mt-2" id="input">
                <h2 class="text-center mb-3">{{ $subject->subject_name }}'s Students</h2>
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
                <h2 class="text-center mb-3">{{ $subject->subject_name }} Containing Grades</h2>
                <table width="100%" class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Grade Name</th>
                            <th scope="col">Grade Color</th>
                        </tr>
                    </thead>
                    @foreach ($grades as $grade)
                        <tbody>
                            <tr>
                                <td>{{ $grade->grade_name }}</td>
                                <td>{{ $grade->grade_color }}</td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
