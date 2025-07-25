@extends('layouts.master')
@section('title', 'Show Student')
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
                <a href="/students" class="btn btn-secondary mt-2">Back</a>
                <h2 class="text-center mt-3 mb-3">Show Student</h2>
                <table width="100%s">
                    <tr>
                        <td><label for="admission_no" class="col-form-label">Admission No</label></td>
                        <td><input type="text" name="admission_no" id="admission_no" class="form-control" value="{{ $student->admission_no }}" disabled></td>
                    </tr>
                    <tr>
                        <td><label for="student_name" class="col-form-label mt-2">Student Name</label></td>
                        <td><input type="text" name="student_name" id="student_name" class="form-control mt-2" value="{{ $student->student_name }}" disabled></td>
                    </tr>
                    <tr>
                        <td><label for="father_name" class="col-form-label mt-2 mb-2">Father Name</label></td>
                        <td><input type="text" name="father_name" id="father_name" class="form-control mt-2 mb-2" value="{{ $student->father_name }}" disabled></td>
                    </tr>
                    <tr>
                        <td><label for="gender" class="col-form-label">Gender</label></td>
                        <td>
                            <input type="radio" name="gender" id="male" value="Male" class="col-form-check-input ml-2" {{ $student->gender == 'Male' ? 'checked' : '' }} disabled>
                            <label for="male" class="form-check-label">Male</label>
                            <input type="radio" name="gender" id="female" value="Female" class="col-form-check-input ml-2" {{ $student->gender == 'Female' ? 'checked' : '' }} disabled>
                            <label for="female" class="form-check-label">Female</label>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="telephone_no" class="col-form-label mt-2">Telephone No</label></td>
                        <td><input type="text" name="telephone_no" id="telephone_no" class="form-control mt-2" value="{{ $student->telephone_no }}" disabled></td>
                    </tr>
                    <tr>
                        <td><label for="nic_no" class="col-form-label mt-2">NIC No</label></td>
                        <td><input type="text" name="nic_no" id="nic_no" class="form-control mt-2" value="{{ $student->nic_no }}" disabled></td>
                    </tr>
                    <tr>
                        <td><label for="date_of_birth" class="col-form-label mt-2">Date of Birth</label></td>
                        <td><input type="date" name="date_of_birth" id="date_of_birth" class="form-control mt-2" value="{{ $student->date_of_birth }}" disabled></td>
                    </tr>
                    <tr>
                        <td><label for="address" class="col-form-label mt-2">Address</label></td>
                        <td>
                            <textarea name="address" id="address" class="form-control mt-2" required rows="3" disabled>{{ $student->address }}</textarea>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="join_date" class="col-form-label mb-4 mt-2">Join Date</label></td>
                        <td><input type="date" name="join_date" id="join_date" class="form-control mb-4 mt-2" value="{{ $student->join_date }}" disabled></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
