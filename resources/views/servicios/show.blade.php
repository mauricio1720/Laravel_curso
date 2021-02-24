@extends('layout')
@section('title', 'Servicios ='. $servicios->nombre)

@section('contenido')    
    <h1>Contenido</h1>
    <h2>{{$servicios->codigo}}</h2>
    <p>{{$servicios->nombre}}</p>
    <p>{{$servicios->descripcion}}</p>
    <a href={{route('rutaservicios.index')}}>Regresar</a>
@endsection