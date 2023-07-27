@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <form action="{{ route('users.update', $user->id) }}" method="POST">
    @csrf
    @method('put')
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" value="{{$user->name}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="text" class="form-control" id="email" name="email" value="{{$user->email}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Teléfono</label>
    <input type="number" class="form-control" id="phone" name="phone" value="{{$user->phone}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="text" class="form-control" id="password" name="password" value="{{$user->phone}}">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
</div>
@endsection