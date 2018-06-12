@extends('admin.layouts.admin')
@section('content')
<div class="container-fluid" id="app">
    <h2 class="text-center">Edit Faculties</h2>
<form method="POST" action="{{ route('faculty.update',$faculty->id)}}" enctype="multipart/form-data">
    @method('PUT')
    @csrf

    <div class="form-group">
      <label>Name</label>
      <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter name" name="name" value="{{ $faculty->name }}">

      <label>Address</label>
      <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter Address" name="address" value="{{ $faculty->address }}">

      <label>Contact</label>
      <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter Contact Number" name="contact" value="{{ $faculty->contact }}">

      <label>Designation</label>
      <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter the Designation/Position" name="designation" value="{{ $faculty->designation }}">

    <label for="exampleInputFile">Image</label>
    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="image">
    <small id="fileHelp" class="form-text text-muted">Download the image of the member mention above ...</small>


    </div>
   
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

@endsection