@extends('layouts.master')
@section('title', 'Edit Subject')
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
    <form action="/subjects/{{ $subject->id }}" method="post" class="container mt-4 mb-4" id="form">
        @csrf
        @method('put')
        <div class="row">
            <div class="col-sm-5 mx-auto border p-3 shadow bg-light mt-5 mb-5" id="input">
                <h2 class="text-center mb-3">Edit Subject</h2>
                <table width="100%s">
                    <tr>
                        <td><label for="subject_name" class="col-form-label">Subject Name</label></td>
                        <td><input type="text" name="subject_name" id="subject_name" class="form-control" value="{{ $subject->subject_name }}" required></td>
                    </tr>
                    <tr>
                        <td><label for="subject_index" class="col-form-label mt-2">Subject Index</label></td>
                        <td><input type="text" name="subject_index" id="subject_index" class="form-control mt-2" value="{{ $subject->subject_index }}" required></td>
                    </tr>
                    <tr>
                        <td><label for="subject_order_no" class="col-form-label mt-2">Subject Order No</label></td>
                        <td><input type="number" name="subject_order_no" id="subject_order_no" class="form-control mt-2" step="any" value="{{ $subject->subject_order_no }}" required></td>
                    </tr>
                    <tr>
                        <td><label for="subject_type" class="col-form-label mt-2 mb-3" value="{{ $subject->subject_type }}" required>Subject Type</label></td>
                        <td>
                            <select name="subject_type" id="subject_type" class="form-control mt-2 mb-3" disabled>
                                <option value="Mandatory" {{ $subject->subject_type == 'Mandatory' ? 'selected' : ''}}>Mandatory</option>
                                <option value="Optional" {{ $subject->subject_type == 'Optional' ? 'selected' : ''}}>Optional</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="/subjects" class="btn btn-secondary">Back</a>
                        </td>
                        <td>
                            <input type="submit" value="Update" class="form-control bg-success">
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </form>
@endsection
