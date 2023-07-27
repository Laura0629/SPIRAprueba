@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <form action="{{ route('users.storeEnrrolle', $user->id) }}" method="POST">
    @csrf

  <select class="custom-select" id="selectEnrroll" name="selectEnrroll">
  <option selected>Seleccione materia</option>
  @foreach($subjects as $subject)
  <option value="{{$subject->id}}">{{$subject->name}}</option>
  @endforeach

</select>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre Usuario</th>
      <th scope="col">Materia</th>

    </tr>
  </thead>
</table>
</div>
@endsection