@extends('layouts.master')
@section('title', 'Show Student')
@push('styles')
        body{
            background-color: rgb(161, 194, 205);
        }
        #input{
            border-radius: 15px;
        }
@endpush
@section('content')
    <div class="container mt-5 mb-4">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4  border p-3 shadow bg-light" id="input">
                <h2 class="text-center mb-3">Show Student</h2>
                <table width="100%">
                    <tr>
                        <td><label for="fname" class="col-form-label">First Name</label></td>
                        <td><input type="text" name="fname" id="fname" class="form-control" value="Jananthan" readonly></td>
                    </tr>
                    <tr>
                        <td><label for="lname" class="col-form-label mb-4 mt-2">Last Name</label></td>
                        <td><input type="text" name="lname" id="lname" class="form-control mb-4 mt-2" value="Rasan" readonly></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
