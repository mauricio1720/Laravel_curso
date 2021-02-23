<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pReservadasModel;
class ayudaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('temas.index',[
            'pReservadasModel' =>pReservadasModel::latest()->paginate()
        
        ]);
        
    }

 

    public function show($id)
    {
        return view('ayuda.show',[
            //ayuda es elnombre de la tabla
            'ayuda'=>pReservadasModel::findOrFail($id)

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
