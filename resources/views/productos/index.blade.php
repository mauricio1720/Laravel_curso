@extends('layout')
@section('title', 'Productos')

@section('contenido')    
    <h1>Catalogo Producto</h1>
    {{-- <a href="{{route('rutaservicios.create')}}">Agregar nuevo </a> --}}


   {{--  <table>
        <tr><td>Producto</td> 
    @forelse($datos as $reservadasItem)         
        <ul><tr><td> <a href="{{route('rutaservicios.show',$reservadasItem)}}">{{ $reservadasItem->nombre}}</a> </td></tr></ul> 
    @empty
        <ul>No hay palabras</ul>
    @endforelse
    </table>
 --}}
@endsection