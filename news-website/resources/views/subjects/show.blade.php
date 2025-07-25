@extends('layouts.master')
@section('title', 'Show Student')
@push('styles')
    #form{
    background-color: rgb(161, 194, 205);
    border-radius: 10px;
    }
    #input{
    border-radius: 10px;
    }
    .custom{
    color:white;
    }
@endpush
@section('content')
    <div class="container mt-3 mb-4" id="form">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4  border p-3 shadow bg-light mb-5 mt-5" id="input">

                <h2 class="text-center mb-3">Show Student</h2>
                <table width="100%">
                    <tr>
                        <td><label for="fname" class="col-form-label">First Name</label></td>
                        <td><input type="text" name="fname" id="fname" class="form-control" value="Jananthan"
                                readonly></td>
                    </tr>
                    <tr>
                        <td><label for="lname" class="col-form-label mb-4 mt-2">Last Name</label></td>
                        <td><input type="text" name="lname" id="lname" class="form-control mb-4 mt-2"
                                value="Rasan" readonly></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <form action="/student" method="get">
                                <input type="submit" value="Back" class="custom form-control bg-secondary mb-4">
                            </form>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
