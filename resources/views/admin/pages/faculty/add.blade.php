@extends('admin.layouts.admin')
@section('content')
<div class="container-fluid" id="app">
    <h2 class="text-center">Add Faculties</h2>
<<<<<<< HEAD
    @foreach ($errors->all() as $message) 
    <div class="alert alert-danger w-50" role="alert">    
          <p class="">{{$message}}</p>
    </div>
    @endforeach
    @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>

    @endif

<form method="POST" action="{{ route('faculty.store')}}">
=======
<form method="POST" action="{{ route('faculty.store')}}"  enctype="multipart/form-data" >
>>>>>>> 6561c85a02eca3663d2c02a9aefb5a685c783d3c
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

    <label for="exampleInputFile">Image</label>
    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="image">
    <small id="fileHelp" class="form-text text-muted">Download the image of the member mention above ...</small>

    </div>
   
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

@endsection