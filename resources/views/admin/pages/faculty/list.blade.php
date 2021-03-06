@extends('admin.layouts.admin')
@section('content')
<div class="container-fluid" id="app">
    <br>
    <h2 class="text-center bg-success font-weight-bold text-dark">Faculty Members</h2>
    <br>
<form method="POST" action="{{ route('faculty.store')}}" enctype="multipart/form-data">
    @csrf

    {{ $faculties->links() }}
    <table class="table">
  <thead>
    <tr class="bg-success text-dark">
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Contact</th>
      <th scope="col">Designation</th>
      <th scope="col">Image</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
     
    </tr>
  </thead>
  <tbody class="bg-success">
  @foreach($faculties as $faculty)
    <tr>
      
      <td>{{ $faculty->id}}</td>
      <td>{{ $faculty->name }}</td>
      <td>{{ $faculty->address }}</td>
      <td>{{ $faculty->contact }}</td>
      <td>{{ $faculty->designation }}</td>
      <td><img class= "w-25 h-25" src="{{asset('images/'.$faculty->image)}}"></td>
     
      <td>
          <a  href="{{ route('faculty.edit',$faculty->id) }}" class="btn btn-info">Edit</a>
      </td>
      <td>
      <form action="{{ action('FacultyController@destroy', $faculty['id'])}}" method="post" onsubmit= 'return ConfirmDelete()'>
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
    </td>
    </tr>
    @endforeach
  </tbody>
</table>
{{ $faculties->links() }}
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>


<script>

function ConfirmDelete()
{
var x = confirm("Are you sure you want to delete?");
if (x)
  return true;
else
  return false;
}

</script>

@endsection