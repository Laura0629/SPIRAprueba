@extends('layouts.app')

@section('content')
<div class="container">
    <div style="position: absolute; top: 20px; right: 20px;">
        <a href="{{ route('subjects.create') }}" class="btn btn-primary">Asignar materia</a>
    </div>


    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Intensidad</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($subjects as $subject)
    <tr>
      <th scope="row">{{$subject->id}}</th>
      <td scope="row">{{$subject->name}}</td>
      <td scope="row">{{$subject->intensity}}</td>
      <td>
            <a href="{{ route('subjects.edit', $subject->id) }}" class="btn btn-warning">Editar</a><button type="submit" class="btn btn-danger">Eliminar</button>
                <form action="{{ route('subjects.delete', $subject->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    
                    </form>


        </td>
    </tr>
    @endforeach
   
  </tbody>
</table>
    </div>
</div>
@endsection
