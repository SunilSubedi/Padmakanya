@extends('admin.layouts.admin')
@section('content')
<div class="container-fluid" id="app">
    <h2 class="text-center">List Department</h2>

    {{ $departments->links() }}
    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">I.D.</th>
      <th scope="col">Name</th>
      <th scope="col">Slug</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
      @foreach($departments as $department)
    <tr>
     <td>{{$department->id}}</td>
      <td>{{$department->name}}</td>
      <td>{{$department->slug}}</td>
      <td>
          <a  href="{{route('department.edit',$department->id)}}" class="btn btn-info">Edit</a>
      </td>
      <td>
      <form action="{{action('DepartmentController@destroy', $department['id'])}}" method="post" onsubmit='return ConfirmDelete()'>
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
    </td>
    </tr>
    @endforeach
  </tbody>
</table>

{{ $departments->links() }}
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