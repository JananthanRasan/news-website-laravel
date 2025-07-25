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
                <h2><a href="/student/create" class="btn btn-primary col-sm-12 mb-2">Create New Student</a></h2>
                <table class="table table-striped" width="100%">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Action</th>
                            <th scope="col">Action</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Janan</td>
                            <td>Rasan</td>
                            <td>
                                <form action="/student/1" method="get">
                                    <input type="submit" value="Show" class="form-control bg-info">
                                </form>
                            </td>
                            <td>
                                <form action="/student/1/edit" method="get">
                                    <input type="submit" value="Edit" class="form-control bg-success">
                                </form>
                            </td>
                            <td>
                                <form action="/student/1" method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" value="Delete" class="form-control bg-warning">
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Mathi</td>
                            <td>Varman</td>
                            <td>
                                <form action="/student/1" method="get">
                                    <input type="submit" value="Show" class="form-control bg-info">
                                </form>
                            </td>
                            <td>
                                <form action="/student/2/edit" method="get">
                                    <input type="submit" value="Edit" class="form-control bg-success">
                                </form>
                            </td>
                            <td>
                                <form action="/student/2" method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" value="Delete" class="form-control bg-warning">
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>abish</td>
                            <td>Shan</td>
                            <td>
                                <form action="/student/1" method="get">
                                    <input type="submit" value="Show" class="form-control bg-info">
                                </form>
                            </td>
                            <td>
                                <form action="/student/3/edit" method="get">
                                    <input type="submit" value="Edit" class="form-control bg-success">
                                </form>
                            </td>
                            <td>
                                <form action="/student/3" method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" value="Delete" class="form-control bg-warning">
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
