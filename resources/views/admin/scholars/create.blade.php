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
            <h5 class="card-title">Add Scholars</h5>

            <form method="POST" enctype="multipart/form-data" action="{{route('scholar.store')}}">
                @csrf
                <div class="row mt-3">
                    <div class="col">
                        <label for="name" class="form-label">Scholar Name</label>
                        <input type="text" name="name" class="form-control" required id="name"
                            placeholder="Enter Scholar name">
                    </div>
                    <div class="col">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" name="image" class="form-control" required id="image">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" required id="email"
                            placeholder="email">
                    </div>
                    <div class="col">
                        <label for="mobileno" class="form-label">Mobile Number</label>
                        <input type="integer" class="form-control" id="mobileno" required name="mobileno">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label for="qualification" class="form-label">Qualification</label>
                        <input type="text" name="qualification" class="form-control" required id="qualification"
                            placeholder=" Enter Qualification">
                    </div>
                    <div class="col">
                        <label for="experience" class="form-label">Experience</label>
                        <input type="text" class="form-control" id="experience" required name="experience">
                    </div>
                </div>
                <div class="mt-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" rows="3" required  name="description" placeholder="Add description of the course"></textarea>
                </div>
                <div class="d-flex  justify-content-end mt-3">
                    <button type="reset" class="btn btn-secondary m-1">Cancel</button>
                    <button type="submit" class="btn btn-primary m-1">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
