@extends('admin.layouts.admin')
@section('content')
<div class="container-fluid" id="app">
    <h2 class="text-center">Edit Notice</h2>
<form method="POST" action="{{ route('notice.update',$notice->id)}}">
    @method('PUT')
    @csrf

    
    <div class="form-group">
      <label>Name</label>
        <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter name" name="title" value="{{$notice->title}}">
       
      

       <label>Description</label>
       <textarea id="description" class="form-control" name="description">{{$notice->description}}</textarea>
               
      <label>Status</label>
      <select name="status" id="" class="form-control">

        <option value="active"<?php if($notice->status=='active') { echo 'selected="selected"' ;} ?>>
        Active
        </option>
        <option value="inactive" <?php if($notice->status=='inactive') { echo 'selected="selected"' ;}?>>Inactive</option>
      </select>

      <label>Image</label>
      <input type="file" name="image" id="" class="form-control" value="{{$notice->image}}">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
<script>
    CKEDITOR.replace( 'description' );
 
</script>

@endsection