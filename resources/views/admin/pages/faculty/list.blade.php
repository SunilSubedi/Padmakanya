@extends('admin.layouts.admin')
@section('content')
<div class="container-fluid" id="app">
    <h2 class="text-center">Add Faculties</h2>
<form method="POST" action="{{ route('faculty.store')}}">
    @csrf

    {{ $faculties->links() }}
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
      <td>{{ $faculty->contact }}}</td>
      <td>{{ $faculty->designation }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
{{ $faculties->links() }}
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

@endsection