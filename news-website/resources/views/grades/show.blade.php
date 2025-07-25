@extends('layouts.master')
@section('title', 'Show Grade')
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
    <div class="container mt-4 mb-4" id="form">
        <div class="row">
            <div class="col-sm-5 m-auto border p-3 shadow bg-light mt-5 mb-5" id="input">
                <h2 class="text-center mb-3">Show grade</h2>
                <table width="100%s">
                    <tr>
                        <td><label for="grade_name" class="col-form-label">Grade Name</label></td>
                        <td><input type="text" name="grade_name" id="grade_name" class="form-control" value="{{ $grade->grade_name }}" disabled></td>
                    </tr>
                    <tr>
                        <td><label for="grade_color" class="col-form-label mt-2">Grade Color</label></td>
                        <td><input type="text" name="grade_color" id="grade_color" class="form-control mt-2" value="{{ $grade->grade_color}}" disabled></td>
                    </tr>
                    <tr>
                        <td><label for="grade_order_no" class="col-form-label mt-2 mb-2">Grade Order No</label></td>
                        <td><input type="number" name="grade_order_no" id="grade_order_no" class="form-control mt-2 mb-2" value="{{ $grade->grade_order_no }}" disabled></td>
                    </tr>
                    <tr>
                        <td><label for="grade_group" class="col-form-label mb-4 mt-2">Grade Group</label></td>
                        <td><input type="number" name="grade_group" id="grade_group" class="form-control mb-4 mt-2" value="{{ $grade->grade_group }}" disabled></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <form action="/grades" method="get">
                                <input type="submit" value="Back" class="custom form-control bg-secondary mb-4">
                            </form>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
