@extends('admin.layouts.admin')
@section('content')
<div class="container-fluid" id="app">
    <h2 class="text-center">Add Notice</h2>
    
<form method="POST" action="{{ route('notice.store')}}">
    @csrf

    <div class="form-group">
        
      <label>Name</label>
        <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter name" name="name">
       
       <label for="">Department</label>
       <select name="department" id="" class="form-control">
         @foreach ($departments as $department)
         <option value="{{$department->id}}">{{$department->name}}</option>  
         @endforeach
       
       </select>

       <label>Description</label>
       <textarea id="description" class="form-control" name="description"></textarea>
               
      <label>Status</label>
      <select name="status" id="" class="form-control">

        <option value="active">Active</option>
        <option value="inactive">Inactive</option>
      </select>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
<script>
    CKEDITOR.replace( 'description' );
 
</script>


@endsection