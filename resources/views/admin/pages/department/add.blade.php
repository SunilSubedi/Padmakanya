@extends('admin.layouts.admin')
@section('content')
<div class="container-fluid" id="app">
    <h2 class="text-center">Add Department</h2>
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
<form method="POST" action="{{ route('department.store')}}"enctype="multipart/form-data" >
    @csrf

    <div class="form-group">
      <label>Name</label>
      <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label>Slug</label>
      <input type="text" class="form-control" placeholder="Slug" name="slug">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>


@endsection