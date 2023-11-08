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
            <h5 class="card-title">Update Course</h5>

            <form method="POST" enctype="multipart/form-data" action="{{ route('course.update') }}">
                @csrf
                <input type="text" name="id" id="" value="{{ $course->id }}" hidden>
                <div class="row mt-3">
                    <div class="col">
                        <label for="name" class="form-label">Course Name</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{ $course->name }}"
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
                            value="{{ $course->duration }}" placeholder="e.g 6 month, 1 year ...">
                    </div>
                    <div class="col">
                        <label for="start_time" class="form-label">Start time</label>
                        <input type="time" class="form-control" id="start_time" name="start_time"
                            value="{{ $course->start_time }}">
                    </div>
                    <div class="col">
                        <label for="end_time" class="form-label">End time</label>
                        <input type="time" class="form-control" id="end_time" name="end_time"
                            value="{{ $course->end_time }}">
                    </div>
                </div>
                <div class="mt-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" rows="3" name="description" placeholder="Enter new desciption">{{ $course->description }}</textarea>
                </div>
                <div class="d-flex  justify-content-end mt-3">
                    <button type="submit" class="btn btn-primary m-1">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
