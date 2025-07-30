{{-- @extends('layouts.master')
@section('title', 'All Students')
@push('styles')
    #form{
    background-color: rgb(161, 194, 205);
    border-radius: 10px;
    }
    #input{
    border-radius: 10px;
    }
@endpush
@section('content')
    <div class="container mt-3 mb-4" id="form">
        <div class="row">
            <div class="col-sm-12 m-auto bg-light mb-5 mt-5" id="input">
                <h2 class="text-center text-danger mb-2 mt-3">All Student Details</h2>
                <h2><a href="/students/create" class="btn btn-primary col-sm-12 mb-2">Create New Student</a></h2>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Action</th>
                                <th scope="col">Admission No</th>
                                <th scope="col">Student Name</th>
                                <th scope="col">Father Name</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Grade</th>
                                <th scope="col">Date of Birth</th>
                                <th scope="col">Address</th>
                                <th scope="col">Join Date</th>

                            </tr>
                        </thead>
                        @foreach ($students as $student)
                            <tbody>
                                <tr>
                                    <td>
                                        <form action="/students/{{ $student->id }}" method="get">
                                            <input type="submit" value="Show" class="form-control bg-info">
                                        </form>
                                        <form action="/students/{{ $student->id }}/edit" method="get">
                                            <input type="submit" value="Edit" class="form-control bg-success">
                                        </form>
                                        <form action="/students/{{ $student->id }}" method="post"
                                            onsubmit="return confirm('Do you want to delete this student')";>
                                            @csrf
                                            @method('delete')
                                            <input type="submit" value="Delete" class="form-control bg-warning">
                                        </form>
                                    </td>
                                    <td>{{ $student->admission_no }}</td>
                                    <td>{{ $student->student_name }}</td>
                                    <td>{{ $student->father_name }}</td>
                                    <td>{{ $student->gender }}</td>
                                    <td>{{ $student->grade->grade_name }}</td>
                                    <td>{{ $student->date_of_birth }}</td>
                                    <td>{{ $student->address }}</td>
                                    <td>{{ $student->join_date }}</td>
                                </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>

            </div>
        </div>
    </div>

@endsection --}}

@extends('layouts.master')
@section('title', 'All Students')

@push('styles')
    <style>
        #form {
            background: linear-gradient(to right, #a1c2cd, #dbeef3);
            border-radius: 15px;
            padding: 20px;
        }

        #input {
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
    </style>
@endpush

@section('content')
    <div class="container mt-3 mb-4 px-3 px-md-5" id="form">
        <div class="row">
            <div class="col-sm-12 m-auto bg-light mb-5 mt-5" id="input">
                <h2 class="text-center text-primary mb-3 fs-4 fw-bold">All Student Details</h2>
                <h2>
                    <a href="/students/create" class="btn btn-outline-primary w-100 w-md-50 mx-auto mb-3">Create New
                        Student</a>
                </h2>
                <div class="table-responsive-lg">
                    <table class="table table-bordered table-striped table-hover align-middle text-center">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">Action</th>
                                <th scope="col">Admission No</th>
                                <th scope="col">Student Name</th>
                                <th scope="col">Father Name</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Grade</th>
                                <th scope="col">Date of Birth</th>
                                <th scope="col">Address</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                                    <tr>
                                        <td>
                                            <div class="d-flex flex-column flex-md-row gap-2">
                                                <a href="/students/{{ $student->id }}" class="btn btn-info">Show</a>
                                                <a href="/students/{{ $student->id }}/edit"
                                                    class="btn btn-success">Edit</a>
                                                <form action="/students/{{ $student->id }}" method="post"
                                                    onsubmit="return confirm('Do you want to delete this student?')">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-warning">Delete</button>
                                                </form>
                                            </div>
                                        </td>
                                        <td>{{ $student->admission_no }}</td>
                                        <td>{{ $student->student_name }}</td>
                                        <td>{{ $student->father_name }}</td>
                                        <td>{{ $student->gender }}</td>
                                        <td>
                                            <span @style(['color: Red', 'font-weight: bold'])>
                                                {{ $student->grade->grade_name }}
                                                {{ $student->grade->grade_color }}
                                            </span>
                                        </td>
                                        <td>{{ $student->date_of_birth }}</td>
                                        <td>{{ $student->address }}</td>
                                    </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
