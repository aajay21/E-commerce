@extends('master')
@section('content')




<div class="container flex-fill">
    <div class="row">
        <div class="col-sm-4 col-oofset-4">
    <h2 class="text-center">Login form</h2>
    <form action="">
      <div class="form-group mb-1">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
      <div class="form-group mb-2">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
    </div>
</div>
@endsection







