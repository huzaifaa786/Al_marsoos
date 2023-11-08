@extends('Admin.layout')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card mx-5 p-3 rounded-4">
        <div class="card-body">
            <h5 class="card-title">Update Students</h5>

            <form method="POST" enctype="multipart/form-data" action="{{ route('student.update') }}">
                @csrf
                <input type="text" name="id" value="{{ $student->id }}" hidden>
                <div class="row mt-3">
                    <div class="col">
                        <label for="inputEmail4" class="form-label">First Name</label>
                        <input type="text" name="first_name" class="form-control" id="mall"
                            value="{{ $student->first_name }}" placeholder="Enter first name">
                    </div>
                    <div class="col">
                        <label for="inputEmail4" class="form-label">Last name</label>
                        <input type="text" name="last_name" class="form-control" id="mall"
                            value="{{ $student->last_name }}" placeholder="Enter last name">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label for="inputEmail4" class="form-label"> Father name</label>
                        <input type="text" name="father_name" class="form-control" id="mall"
                            value="{{ $student->father_name }}" placeholder="Enter father name">
                    </div>
                    <div class="col">
                        <label for="inputNanme4" class="form-label">Phone number</label>
                        <input type="text" class="form-control" id="name" name="number"
                            value="{{ $student->number }}" placeholder="Please enter phone #">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label for="inputNanme4" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email"
                            value="{{ $student->email }}" placeholder="Please enter email">
                    </div>
                    <div class="col">
                        <label for="inputNanme4" class="form-label">Gender</label>
                        <select class="form-select" name="gender">
                            <option value="Male" @if ($student->gender == 'Male') selected @endif>Male</option>
                            <option value="Female" @if ($student->gender == 'Female') selected @endif>Female</option>
                            <option value="Others" @if ($student->gender == 'Others') selected @endif>Others</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label for="inputNanme4" class="form-label">Date of birth</label>
                        <input type="date" class="form-control" id="suv price" name="date_of_birth"
                            value="{{ $student->date_of_birth }}">
                    </div>
                    <div class="col">
                        <label for="address" class="form-label">Admission date<sub> (optional)</sub></label>
                        <input type="date" class="form-control" id="address" name="admission_date"
                            value="{{ $student->admission_date }}">
                    </div>
                </div>
                <div class="mt-3">
                    <label for="inputNanme4" class="form-label">Address</label>
                    <input type="text" class="form-control" id="suv price" name="address"
                        value="{{ $student->address }}" placeholder="Please enter address">
                </div>
                <div class="d-flex  justify-content-end mt-3">
                    <button type="submit" class="btn btn-primary m-1">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
