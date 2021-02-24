@extends('layout')
@section('title', 'Servicios')

@section('contenido')    
    <h1>Servicios</h1>
    <a href="{{route('rutaservicios.create')}}">Agregar nuevo </a>


    <table>
        <tr><td>palabra</td> <td>descripcion</td> </tr>
    @forelse($datos as $reservadasItem)         
        <ul><tr><td> <a href="{{route('rutaservicios.show',$reservadasItem)}}">{{ $reservadasItem->nombre}}</a> </td></tr></ul> 
    @empty
        <ul>No hay palabras</ul>
    @endforelse
    </table>

@endsection