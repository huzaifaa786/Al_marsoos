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
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    <div class="card mx-5 p-3 rounded-4">
        <div class="card-body">
            <h5 class="card-title">Add Course</h5>

            <form method="POST" enctype="multipart/form-data" action="{{ route('course.store') }}">
                @csrf
                <div class="row mt-3">
                    <div class="col">
                        <label for="name" class="form-label">Course Name</label>
                        <input type="text" name="name" class="form-control" id="name"
                            placeholder="Enter course name">
                    </div>
                    <div class="col">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" name="image" class="form-control" id="image">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label for="duration" class="form-label">Course duration</label>
                        <input type="text" name="duration" class="form-control" id="duration"
                            placeholder="e.g 6 month, 1 year ...">
                    </div>
                    <div class="col">
                        <label for="start_time" class="form-label">Start time</label>
                        <input type="time" class="form-control" id="start_time" name="start_time">
                    </div>
                    <div class="col">
                        <label for="end_time" class="form-label">End time</label>
                        <input type="time" class="form-control" id="end_time" name="end_time">
                    </div>
                </div>
                <div class="mt-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" rows="3" name="description" placeholder="Add description of the course"></textarea>
                </div>
                <div class="d-flex  justify-content-end mt-3">
                    <button type="reset" class="btn btn-secondary m-1">Cancel</button>
                    <button type="submit" class="btn btn-primary m-1">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
