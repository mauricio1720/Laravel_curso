@extends('layout')
@section('title', 'Tema ==' . $ayuda->titulo)
@section('contenido')
   <h1>{{$ayuda->titulo}}</h1> 
   <h2>{{$ayuda->nombre}}</h2>
   <p>{{$ayuda->descripcion}}</p>
   <p>{{$ayuda->updated_at->diffForHumans()}}</p>
 
@endsection
