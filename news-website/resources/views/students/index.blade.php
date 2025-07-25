@extends('layouts.master')
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
                                <th scope="col">ID</th>
                                <th scope="col">Admission No</th>
                                <th scope="col">Student Name</th>
                                <th scope="col">Father Name</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Telephone No</th>
                                <th scope="col">NIC No</th>
                                <th scope="col">Date of Birth</th>
                                <th scope="col">Address</th>
                                <th scope="col">Join Date</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        @foreach ($students as $student)
                            <tbody>
                                <tr>
                                    <th>{{ $student->id }}</th>
                                    <td>{{ $student->admission_no }}</td>
                                    <td>{{ $student->student_name }}</td>
                                    <td>{{ $student->father_name }}</td>
                                    <td>{{ $student->gender }}</td>
                                    <td>{{ $student->telephone_no }}</td>
                                    <td>{{ $student->nic_no }}</td>
                                    <td>{{ $student->date_of_birth }}</td>
                                    <td>{{ $student->address }}</td>
                                    <td>{{ $student->join_date }}</td>
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
                                </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>

            </div>
        </div>
    </div>

@endsection
