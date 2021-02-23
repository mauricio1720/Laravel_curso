{{-- @extends('layout')
@section('title', 'Ayudaaaaaaaaa')


@section('contenido')    
    <h1>ayudas</h1>
    <table>
        <tr><td>palabra</td> <td>descripcion</td> </tr>
    @forelse($pReservadasModel as $reservadasItem)         
        <ul><tr><td> <a href="{{route('ayuda.show',$reservadasItem)}}">{{ $reservadasItem->titulo}}</a> </td></tr></ul> 
    @empty
        <ul>No hay palabras</ul>
    @endforelse
    </table>
@endsection --}}