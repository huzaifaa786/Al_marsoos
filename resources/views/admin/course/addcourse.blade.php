@extends('Admin.layout')

@section('content')


<div class="card">
    <div class="card-body">
      <h5 class="card-title">Add Course</h5>

      <!-- Vertical Form -->
      <form class="row g-3"  method="POST"   enctype="multipart/form-data" action="{{ route('addcourse') }}">
        @csrf
     
        <div class="col-12">
          <label for="inputEmail4" class="form-label">Course Name</label>
          <input type="text" name="name" class="form-control" id="mall" required>
        </div>
        <div class="col-12">
            <label for="inputEmail4" class="form-label">Image</label>
            <input type="file" name="image" class="form-control" id="inage"required>
          </div>
          <div class="col-12">
            <label for="inputEmail4" class="form-label">Duration</label>
            <input type="text" name="duration" class="form-control" id="duration"required>
          </div>
          <div class="col-12">
            <label for="inputNanme4" class="form-label">Timing</label>
            <input type="text" class="form-control" id="name" name="timing"required>
          </div>
          <div class="col-12">
              <label for="inputNanme4" class="form-label">Discription</label>
              <input type="text" class="form-control" id="email" name="discription"required>
            </div>
            {{-- <div class="col-12">
              <label for="inputNanme4" class="form-label">Gender</label>
              <input type="text" class="form-control" id="phone" name="gender"required>
            </div> --}}
            {{-- <div class="col-12">
              <label for="inputNanme4" class="form-label">vendor password</label>
              <input type="text" class="form-control" id="password" name="password" required>
            </div> --}}
              {{-- <div class="col-12">
              <label for="inputNanme4" class="form-label">Address</label>
              <input type="text" class="form-control" id="suv price" name="address" required> --}}
            {{-- </div>
              <div class="col-12">
              <label for="inputNanme4" class="form-label">Roll number</label>
              <input type="text" class="form-control" id="sedan price" name="sedan_price"required>
            </div> --}}


        <div class="d-flex  justify-content-end">
            <button type="reset" class="btn btn-secondary m-1">Cancel</button>
          <button type="submit" class="btn btn-primary m-1">Submit</button>

        </div>
      </form><!-- Vertical Form -->

    </div>
  </div>
  @endsection
