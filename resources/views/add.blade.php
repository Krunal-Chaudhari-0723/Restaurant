@extends('layout')

@section('content')
    <div class="col-sm-6">
        <h1>Add new Restaurant</h1>
        <form method="POST" action="/add">
            @csrf
        <div class="form-group">
            <label for="exampleInputName">Name</label>
            <input type="text" class="form-control" id="exmapleInputName" placeholder="Enter Name" name="name" aria-describedby="nameHelp">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email" name="email" aria-describedby="emailHelp">
            {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Address</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Address" name="address">
        </div>
       
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
@endsection