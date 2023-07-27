@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <form action="{{ route('subjects.store') }}" method="POST">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
    @if ($errors->has('name'))
    <p class="text-danger">{{ $errors->first('name') }}</p>
    @endif
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Intensidad</label>
    <input type="number" class="form-control" id="intensity" name="intensity">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
</div>
@endsection
