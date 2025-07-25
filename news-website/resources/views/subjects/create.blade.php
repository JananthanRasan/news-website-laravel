@extends('layouts.master')
@section('title', 'Create Subject')
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
    <form action="/subjects" method="post" class="container mt-4 mb-4" id="form">
        @csrf
        <div class="row">
            <div class="col-sm-5 mx-auto border p-3 shadow bg-light mt-5 mb-5" id="input">
                <a href="/subjects" class="btn btn-secondary mt-2">Back</a>
                <h2 class="text-center mb-3 mt-3">Create Subject</h2>
                <table width="100%s">
                    <tr>
                        <td><label for="subject_name" class="col-form-label">Subject Name</label></td>
                        <td><input type="text" name="subject_name" id="subject_name" class="form-control" required></td>
                    </tr>
                    <tr>
                        <td><label for="subject_index" class="col-form-label mt-2">Subject Index</label></td>
                        <td><input type="text" name="subject_index" id="subject_index" class="form-control mt-2" required></td>
                    </tr>
                    <tr>
                        <td><label for="subject_order_no" class="col-form-label mt-2">Subject Order No</label></td>
                        <td><input type="number" name="subject_order_no" id="subject_order_no" class="form-control mt-2" step="any" required></td>
                    </tr>
                    <tr>
                        <td><label for="subject_type" class="col-form-label mt-2 mb-3">Subject Type</label></td>
                        <td>
                            <select name="subject_type" id="subject_type" class="form-control mt-2 mb-3">
                                <option value="Mandatory">Mandatory</option>
                                <option value="Optional">Optional</option>
                            </select>
                        </td>
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
