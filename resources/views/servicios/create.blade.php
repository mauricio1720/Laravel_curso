@extends('layout')
@section('title', 'Servicios')

@section('contenido')   

    <h1>Llenar el formulario para el nuevo servicios</h1>
    
    <form action="{{route('rutaservicios.store')}}" method="post">
        @csrf
        <label>
            codigo del Servicio <br>
            <input name='codigo' placeholder="Codigo" type="text">
        </label><br>

        <label>
            Nombre del servicios <br>
            <input name='nombre' placeholder="Nombre" type="text">
        </label><br>

        <label>
            Descripcion detallada <br>
            <textarea name="descripcion" placeholder="Descripcion detallada"></textarea>
        </label><br>
        
        <button>Enviar</button>



    </form>

@endsection

