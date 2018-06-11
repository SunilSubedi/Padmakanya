@extends('admin.layouts.admin')
@section('content')
<div class="container-fluid" id="app">
    <h2 class="text-center">Add Faculties</h2>
<form method="POST" action="{{ route('faculty.store')}}">
    @csrf

    <div class="form-group">
      <label>Name</label>
      <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter name" name="name">

      <label>Address</label>
      <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter Address" name="address">

      <label>Contact</label>
      <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter Contact Number" name="contact">

      <label>Designation</label>
      <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter the Designation/Position" name="designation">

    </div>
   
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

@endsection