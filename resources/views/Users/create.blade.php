@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <form action="{{ route('users.store') }}" method="POST">
    @csrf
  <div class="form-group">
    <label for="exampleInputName">Nombre</label>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp">
    @if ($errors->has('name'))
    <p class="text-danger">{{ $errors->first('name') }}</p>
    @endif
  </div>
  <div class="form-group">
    <label for="exampleInputEmail">Email</label>
    <input type="text" class="form-control" id="email" name="email">
  </div>
  <div class="form-group">
    <label for="exampleInputPhone">Celular</label>
    <input type="number" class="form-control" id="phone" name="phone">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword">Password</label>
    <input type="text" class="form-control" id="password" name="password">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
</div>
@endsection

