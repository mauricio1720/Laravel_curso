<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\serviciosmodel;
class rutaserviciosController extends Controller
{
    public function index()
    {
       
        $datos=serviciosmodel::get();
        return view('servicios.index',compact('datos'));
        /* return view('glosario.index',[
            'pReservadasModel' =>pReservadasModel::latest()->paginate() */
        
        
    }

    public function show($id)
    {
        return view('servicios.show',[
            'servicios'=>serviciosmodel::findOrFail($id),
        ]
        );
    }
    public function create()
    {
        return view('servicios.create');
    }
    public function store()
    {
        $fields = request()->validate([
            'codigo'=>'required',
            'nombre'=>'required',
            'descripcion'=>'required',
        ]);
        //return request();
        /* serviciosmodel::create([
            'codigo'=>request('codigo'),
            'nombre'=>request('nombre'),
            'descripcion'=>request('descripcion'), 

        ]); */
        serviciosmodel::create($fields);
        return redirect()->route('rutaservicios.index');

    }
}
