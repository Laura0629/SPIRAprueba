@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <form action="{{ route('subjects.update', $subject->id) }}" method="POST">
    @csrf
    @method('put')
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" value="{{$subject->name}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Intensidad</label>
    <input type="number" class="form-control" id="intensity" name="intensity" value="{{$subject->intensity}}">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
</div>
@endsection
