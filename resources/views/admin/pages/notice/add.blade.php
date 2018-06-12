@extends('admin.layouts.admin')
@section('content')
<div class="container-fluid" id="app">
    <h2 class="text-center">Add Notice</h2>
    
<form method="POST" action="{{ route('notice.store')}}">
    @csrf

    <div class="form-group">
      <label>Description</label>
      <input type="textarea" class="form-control" aria-describedby="emailHelp" placeholder="Enter description" name="description">

      <label>Name</label>
      <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter name" name="name">

      <label>Address</label>
      <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter Address" name="address">

    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>


@endsection