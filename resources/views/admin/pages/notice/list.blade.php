@extends('admin.layouts.admin')
@section('content')
<div class="container-fluid" id="app">
    <h2 class="text-center">List Notice</h2>

     @if(session('message'))
    <div class="alert alert-danger">
        {{ session('message') }}
    </div>

    @endif

    {{ $notices->links() }}
    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">I.D.</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Status</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
      @foreach($notices as $notice)
    <tr>
     <td>{{$notice->id}}</td>
      <td>{{$notice->title}}</td>
      <td>{!!$notice->description!!}</td>
      <td>{{$notice->status}}</td>
      <td>
          <a  href="{{route('notice.edit',$notice->id)}}" class="btn btn-info">Edit</a>
      </td>
      <td>
      <form action="{{action('NoticeController@destroy', $notice['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
    </td>
    </tr>
    @endforeach
  </tbody>
</table>

{{ $notices->links() }}
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