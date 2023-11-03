@extends('Admin.layout')

@section('content')


<div class="card">
    <div class="card-body">
      <h5 class="card-title">Add Students</h5>

      <!-- Vertical Form -->
      <form class="row g-3"  method="POST"   enctype="multipart/form-data" action="{{ route('addstudents') }}">
        @csrf
     
        <div class="col-12">
          <label for="inputEmail4" class="form-label">First Name</label>
          <input type="text" name="fname" class="form-control" id="mall" required>
        </div>
        <div class="col-12">
            <label for="inputEmail4" class="form-label">Last name</label>
            <input type="text" name="lname" class="form-control" id="mall"required>
          </div>
          <div class="col-12">
            <label for="inputEmail4" class="form-label"> father name</label>
            <input type="text" name="fathername" class="form-control" id="mall"required>
          </div>
          <div class="col-12">
            <label for="inputNanme4" class="form-label">Phone number</label>
            <input type="text" class="form-control" id="name" name="number"required>
          </div>
          <div class="col-12">
              <label for="inputNanme4" class="form-label">Email</label>
              <input type="text" class="form-control" id="email" name="email"required>
            </div>
            <div class="col-12">
              <label for="inputNanme4" class="form-label">Gender</label>
              <input type="text" class="form-control" id="phone" name="gender"required>
            </div>
            {{-- <div class="col-12">
              <label for="inputNanme4" class="form-label">vendor password</label>
              <input type="text" class="form-control" id="password" name="password" required>
            </div> --}}
              <div class="col-12">
              <label for="inputNanme4" class="form-label">Address</label>
              <input type="text" class="form-control" id="suv price" name="address" required>
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
