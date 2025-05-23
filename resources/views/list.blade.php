@extends('layout')

@section('content')
    <div>
        <h1>List Of Restaurant</h1>
        @if (Session::get('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Hey</strong> Restaurant Addedd SuccessFully!.....
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
</div> 
        @endif
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Actions</th> 
    </tr>
  </thead>
  <tbody>
  @foreach ($data as $item)
    <tr>
      <th scope="row"> <p>{{$item->id}}</p> </th>
      <td> <p>{{$item->name}}</p> </td>
      <td> <p>{{$item->email}}</p> </td>
      <td> <p>{{$item->address}}</p> </td>
      <td ><a href="delete/{{$item->id}}"><i class="fa fa-trash"></i></a></td>
    </tr>
   @endforeach
  </tbody>
</table>
</div>
@endsection