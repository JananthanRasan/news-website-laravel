@extends('layouts.master')
@section('title', 'All Grades')
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
                <h2 class="text-center text-danger mb-2 mt-3">All Grades Details</h2>
                <h2><a href="/grades/create" class="btn btn-primary col-sm-12 mb-2">Create New Grade</a></h2>
                <table class="table table-striped" width="100%">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Grade Name</th>
                            <th scope="col">Grade Color</th>
                            <th scope="col">Grade Order No</th>
                            <th scope="col">Grade Group</th>
                            <th scope="col">Show Students</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    @foreach ($grades as $grade)
                        <tbody>
                            <tr>
                                <th>{{ $grade->id }}</th>
                                <td>{{ $grade->grade_name }}</td>
                                <td>{{ $grade->grade_color }}</td>
                                <td>{{ $grade->grade_order_no }}</td>
                                <td>{{ $grade->grade_group }}</td>
                                <td>
                                    <form action="/grades/{{ $grade->id }}" method="get">
                                        <input type="submit" value="Show" class="form-control bg-info">
                                    </form>
                                </td>
                                <td>
                                    <form action="/grades/{{ $grade->id }}/edit" method="get">
                                        <input type="submit" value="Edit" class="form-control bg-success">
                                    </form>
                                </td>
                                <td>
                                    <form action="/grades/{{ $grade->id }}" method="post" onsubmit="return confirm('Do you want to delete this grade')";>
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
