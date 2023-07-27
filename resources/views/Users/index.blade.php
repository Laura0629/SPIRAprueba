@extends('layouts.app')

@section('content')
<div class="container">
    <div style="position: absolute; top: 20px; right: 20px;">
      @if(auth()->user()->role_id == 1) 
        <a href="{{ route('users.create') }}" class="btn btn-primary">Agregar usuario</a>
      @endif
    </div>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Email</th>
      <th scope="col">Teléfono</th>
      <th scope="col">Opciones</th>


    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td scope="row">{{$user->name}}</td>
      <td scope="row">{{$user->email}}</td>
      <td scope="row">{{$user->phone}}</td>
      <td>
          @if(auth()->user()->role_id == 1)
          <a href="{{ route('users.enrroll', $user->id) }}" class="btn btn-success">Matricular</a> <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Editar</a>
            <button type="submit" class="btn btn-danger">Eliminar</button>
                <form action="{{ route('users.delete', $user->id) }}" method="POST">
                    @csrf
                    @method('delete')
                </form>
            
          @endif
        </td>
    </tr>
    @endforeach
   
  </tbody>
</table>
    </div>
</div>
@endsection