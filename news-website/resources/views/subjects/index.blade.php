@extends('layouts.master')
@section('title', 'All Subjects')
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
                <h2 class="text-center text-danger mb-2 mt-3">All Subject Details</h2>
                <h2><a href="/subjects/create" class="btn btn-primary col-sm-12 mb-2">Create New Subject</a></h2>
                <table class="table table-striped" width="100%">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Subject Name</th>
                            <th scope="col">Subject Index</th>
                            <th scope="col">Subject Order No</th>
                            <th scope="col">Subject Type</th>
                            <th scope="col">Show</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    @foreach ($subjects as $subject)
                        <tbody>
                            <tr>
                                <th>{{ $subject->id }}</th>
                                <td>{{ $subject->subject_name }}</td>
                                <td>{{ $subject->subject_index }}</td>
                                <td>{{ $subject->subject_order_no }}</td>
                                <td>{{ $subject->subject_type }}</td>
                                <td>
                                    <form action="/subjects/{{ $subject->id }}" method="get">
                                        <input type="submit" value="Show" class="form-control bg-info">
                                    </form>
                                </td>
                                <td>
                                    <form action="/subjects/{{ $subject->id }}/edit" method="get">
                                        <input type="submit" value="Edit" class="form-control bg-success">
                                    </form>
                                </td>
                                <td>
                                    <form action="/subjects/{{ $subject->id }}" method="post" onsubmit="return confirm('Do you want to delete this subject')";>
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
