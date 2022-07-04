@extends('layouts.plantilla')

@section('title', 'Cursos edit')

@section('content') 
    <h1>En esta pagina puedes editar el curso</h1>

    <form action="{{route('cursos.update',$curso)}}" method="PUT">
        @csrf
        <label>
            Nombre:
            <br>
            <input type="text" value="{{$curso->name}}" name="name">
        </label>

        <br>
        <label>
            Descripcion: 
            <br>
            <textarea name="descripcion" rows="5">{{$curso->descripcion}}</textarea>
        </label>

        <br>
        <label>
            Categoria:
            <br>
            <input type="text" name="categoria" value="{{$curso->categoria}}">
        </label>
        <br><br>
        <button type="submit">Actualizar formulario</button>
    </form>
@endsection
