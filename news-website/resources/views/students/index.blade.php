@extends('layouts.master')
@section('title', 'Show All Data')
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
            <div class="col-sm-3">
            </div>
            <div class="col-sm-6  bg-light mb-5 mt-5" id="input">
                <h2 class="text-center text-danger mb-2 mt-3">All Student Details</h2>
                <h2><a href="/students/create" class="btn btn-primary col-sm-12 mb-2">Create New Student</a></h2>
                <table class="table table-striped" width="100%">
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
                            <th scope="col">Action</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    @foreach ($students as $student)
                        <tbody>
                            <tr>
                                <th scope="row">{{ $student->id }}</th>
                                <td>Janan</td>
                                <td>Rasan</td>
                                <td>
                                    <form action="/students/1" method="get">
                                        <input type="submit" value="Show" class="form-control bg-info">
                                    </form>
                                </td>
                                <td>
                                    <form action="/students/1/edit" method="get">
                                        <input type="submit" value="Edit" class="form-control bg-success">
                                    </form>
                                </td>
                                <td>
                                    <form action="/students/1" method="post">
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

@endsection
