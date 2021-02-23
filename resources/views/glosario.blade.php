@extends('layout')
@section('title', 'Glosario')

@section('contenido')    
    <h1>Glosario</h1>
    {{-- <table>
        <tr><td>Palabra</td> <td>descripcion</td> </tr>
    @forelse($pReservadasModel as $reservadasItem)         
        <tr><td>{{ $reservadasItem->palabra}}</td><td>{{ $reservadasItem->descripcion}}</td></tr>
    @empty
    <ul>No hay palabras</ul>
    @endforelse
    </table> --}}

    <table>
        <tr><td>palabra</td> <td>descripcion</td> </tr>
    @forelse($pReservadasModel as $reservadasItem)         
        <ul><tr><td> <a href="{{route('glosario.show',$reservadasItem)}}">{{ $reservadasItem->titulo}}</a> </td></tr></ul> 
    @empty
        <ul>No hay palabras</ul>
    @endforelse
    </table>
{{-- {{ $pReservadasModel->links()}} --}}
@endsection


