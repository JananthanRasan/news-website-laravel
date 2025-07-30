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
    <form action="/students" method="post" class="container mt-4 mb-4" id="form">
        @csrf
        <div class="row">
            <div class="col-sm-5 mx-auto border p-3 shadow bg-light mt-5 mb-5" id="input">
                <a href="/students" class="btn btn-secondary mt-2">Back</a>
                <h2 class="text-center mb-3 mt-3">Create Student</h2>
                <table width="100%s">
                    <tr>
                        <td><label for="admission_no" class="col-form-label">Admission No</label></td>
                        <td><input type="text" name="admission_no" id="admission_no" class="form-control" required></td>
                    </tr>
                    <tr>
                        <td><label for="student_name" class="col-form-label mt-2">Student Name</label></td>
                        <td><input type="text" name="student_name" id="student_name" class="form-control mt-2" required></td>
                    </tr>
                    <tr>
                        <td><label for="father_name" class="col-form-label mt-2 mb-2">Father Name</label></td>
                        <td><input type="text" name="father_name" id="father_name" class="form-control mt-2 mb-2" required></td>
                    </tr>
                    <tr>
                        <td><label for="gender" class="col-form-label">Gender</label></td>
                        <td>
                            <input type="radio" name="gender" id="male" value="Male" class="col-form-check-input ml-2" checked>
                            <label for="male" class="form-check-label">Male</label>
                            <input type="radio" name="gender" id="female" value="Female" class="col-form-check-input ml-2">
                            <label for="female" class="form-check-label">Female</label>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="telephone_no" class="col-form-label mt-2">Telephone No</label></td>
                        <td><input type="text" name="telephone_no" id="telephone_no" class="form-control mt-2" required></td>
                    </tr>
                    <tr>
                        <td><label for="grade" class="col-form-label mt-2">Grade</label></td>
                        <td>
                            <select name="grade_id" id="grade" class="form-control mt-2">
                                @foreach ($grades as $grade)
                                    <option value="{{ $grade->id }}">{{ $grade->grade_name }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="subjects" class="col-form-label mt-2">Subjects</label></td>
                        <td>
                            <select name="subjects[]" id="subjects" class="form-control mt-2" multiple>
                                @foreach ($subjects as $subject)
                                    <option value="{{ $subject->id }}">{{ $subject->subject_name }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="nic_no" class="col-form-label mt-2">NIC No</label></td>
                        <td><input type="text" name="nic_no" id="nic_no" class="form-control mt-2" required></td>
                    </tr>
                    <tr>
                        <td><label for="date_of_birth" class="col-form-label mt-2">Date of Birth</label></td>
                        <td><input type="date" name="date_of_birth" id="date_of_birth" class="form-control mt-2" required></td>
                    </tr>
                    <tr>
                        <td><label for="address" class="col-form-label mt-2">Address</label></td>
                        <td>
                            <textarea name="address" id="address" class="form-control mt-2" required rows="3"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="join_date" class="col-form-label mb-4 mt-2">Join Date</label></td>
                        <td><input type="date" name="join_date" id="join_date" class="form-control mb-4 mt-2" required></td>
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
