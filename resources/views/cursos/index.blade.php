@extends('layouts.plantilla')

@section('title', 'Cursos')

@section('content') 
   
        <h1 >Bienvenido a la página cursos</h1><br>
        <a  href="{{route('cursos.create')}}">Crear curso</a><br><br>
        
        <ul>
            @foreach ($cursos as $curso)
                <li>
                    <a href="{{route('cursos.show', $curso->id)}}">{{$curso->name}}</a>
                </li> 
            @endforeach
        </ul>
        <br>
        {{$cursos->links()}} 
    
    
@endsection
