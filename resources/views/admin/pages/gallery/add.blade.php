@extends('admin.layouts.admin')
@section('content')
<div class="container-fluid" id="app">
    <h2 class="text-center">Add Notice</h2>

    @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>

    @endif

    @if(session('authmessage'))
    <div class="alert alert-danger">
        {{ session('authmessage') }}
    </div>

    @endif
    
<form method="POST" action="{{ route('gallery.store')}}" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        
      <label>Title</label>
        <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter Title" name="name">
       

      <label>Image</label>
      <input type="file" name="image" id="" class="form-control">
    </div>

    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>


@endsection