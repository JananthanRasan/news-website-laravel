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
            <div class="col-sm-5 mx-auto border p-3 shadow bg-light mt-5 mb-5" id="input">
                <h2 class="text-center mb-3">Show grade</h2>
                <table width="100%" class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Admission No</th>
                            <th scope="col">Student Name</th>
                            <th scope="col">NIC No</th>
                        </tr>
                    </thead>
                    @foreach ($students as $student)
                        <tbody>
                            <tr>
                                <td>{{ $student->admission_no }}</td>
                                <td>{{ $student->student_name }}</td>
                                <td>{{ $student->nic_no }}</td>
                            </tr>
                        </tbody>
                    @endforeach

                </table>
                <form action="/grades" method="get">
                    <input type="submit" value="Back" class="custom form-control bg-secondary mt-4 mb-4">
                </form>
            </div>
        </div>
    </div>
@endsection
