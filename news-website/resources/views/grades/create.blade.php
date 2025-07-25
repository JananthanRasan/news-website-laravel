@extends('layouts.master')
@section('title', 'Create Grade')
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
    <form action="/grades" method="post" class="container mt-4 mb-4" id="form">
        @csrf
        <div class="row">
            <div class="col-sm-5 mx-auto border p-3 shadow bg-light mt-5 mb-5" id="input">
                <a href="/grades" class="btn btn-secondary mt-2">Back</a>
                <h2 class="text-center mb-3 mt-3">Create Grade</h2>
                <table width="100%s">
                    <tr>
                        <td><label for="grade_name" class="col-form-label">Grade Name</label></td>
                        <td><input type="text" name="grade_name" id="grade_name" class="form-control" required></td>
                    </tr>
                    <tr>
                        <td><label for="grade_color" class="col-form-label mt-2">Grade Color</label></td>
                        <td><input type="text" name="grade_color" id="grade_color" class="form-control mt-2" required></td>
                    </tr>
                    <tr>
                        <td><label for="grade_order_no" class="col-form-label mt-2 mb-2">Grade Order No</label></td>
                        <td><input type="number" name="grade_order_no" id="grade_order_no" class="form-control mt-2 mb-2" step="any" required></td>
                    </tr>
                    <tr>
                        <td><label for="grade_group" class="col-form-label mt-2 mb-4">Grade Group</label></td>
                        <td><input type="number" name="grade_group" id="grade_group" class="form-control mt-2 mb-4" required></td>
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
