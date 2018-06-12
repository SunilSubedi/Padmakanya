@extends('admin.layouts.admin')
@section('content')
<div class="container-fluid" id="app">
    <h2 class="text-center">Faculties</h2>
<form method="POST" action="{{ route('faculty.store')}}">
    @csrf

    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Contact</th>
      <th scope="col1">Designation</th>
     
    </tr>
  </thead>
  <tbody>
  @foreach($faculties as $faculty)
    <tr>
      
      <td>{{ $faculty->id}}</td>
      <td>{{ $faculty->name }}</td>
      <td>{{ $faculty->address }}</td>
      <td>{{ $faculty->contact }}</td>
      <td>{{ $faculty->designation }}</td>
     
      <td>
          <a  href="{{ route('faculty.edit',$faculty->id) }}" class="btn btn-info">Edit</a>
      </td>
      <td>
      <form action="{{ action('FacultyController@destroy', $faculty['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
    </td>
    </tr>
    @endforeach
  </tbody>
</table>
   
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

@endsection