@extends('layouts.master')
@section('title', 'Create Student')
@push('styles')
    body{
        background-color: rgb(161, 194, 205);
    }
    #input{
        border-radius: 15px;
    }
@endpush
@section('content')
    <form action="/student" method="post" class="container mt-5 mb-4">
        @csrf
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4  border p-3 shadow bg-light" id="input">
                <h2 class="text-center mb-3">Create Student</h2>
                <table width="100%">
                    <tr>
                        <td><label for="fname" class="col-form-label">First Name</label></td>
                        <td><input type="text" name="fname" id="fname" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><label for="lname" class="col-form-label mb-4 mt-2">Last Name</label></td>
                        <td><input type="text" name="lname" id="lname" class="form-control mb-4 mt-2"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" value="Submit" class="form-control bg-success">
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </form>
@endsection
