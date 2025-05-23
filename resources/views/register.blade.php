@extends('layout')
@section('content')
    <div>
        <h1>User Registration Form </h1>
        <div class="col-sm-8">
         <form method="POST" action="register"> 
            @csrf
        <div class="form-group">
            <label for="exampleInputName">Name</label>
            <input type="text" class="form-control" id="exmapleInputName" placeholder="Enter Name" name="name" aria-describedby="nameHelp">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail">Email</label>
            <input type="email" class="form-control" id="exmapleInputEmail" placeholder="Enter Email" name="email" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword">Password</label>
            <input type="password" class="form-control" id="exmapleInputPassword" placeholder="Enter Password" name="password" aria-describedby="passwordHelp">
        </div>

        <div class="form-group">
            <label for="exampleInputNumber">Contact No</label>
            <input type="number" class="form-control" id="exmapleInputNumber" placeholder="Enter Contact Number" name="number" aria-describedby="numberHelp">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>
@endsection