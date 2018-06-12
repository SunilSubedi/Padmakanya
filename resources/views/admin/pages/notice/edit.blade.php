@extends('admin.layouts.admin')
@section('content')
<div class="container-fluid" id="app">
    <h2 class="text-center">Edit Notice</h2>
<form method="POST" action="{{ route('notice.update',$notice->id)}}">
    @method('PUT')
    @csrf

    
    <div class="form-group">
      <label>Name</label>
      <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter Description" name="description" value="{{$notice->name}}">
    </div>
    <div class="form-group">
      <label>Slug</label>
      <input type="text" class="form-control" placeholder="Slug" name="slug" value="{{$notice->slug}}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

@endsection