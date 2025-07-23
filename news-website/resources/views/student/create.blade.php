@extends('layouts.master')
@section('title', 'Create Student')
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
    <form action="/student" method="post" class="container mt-3 mb-4" id="form">
        @csrf
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4  border p-3 shadow bg-light mt-5 mb-5" id="input">
                <h2 class="text-center mb-3">Create Student</h2>
                <table width="100%s">
                    <tr>
                        <td><label for="fname" class="col-form-label">First Name</label></td>
                        <td><input type="text" name="fname" id="fname" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><label for="lname" class="col-form-label mb-4 mt-2">Last Name</label></td>
                        <td><input type="text" name="lname" id="lname" class="form-control mb-4 mt-2"></td>
                    </tr>
                    <tr>
                        <td>
                            <a href="/student" class="btn btn-secondary">Back</a>
                        </td>
                        <td>
                            <input type="submit" value="Submit" class="form-control bg-success">
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </form>
@endsection
