<?php

namespace App\Http\Controllers;

use App\Models\NotaVenta;
use App\Models\Notaventaservicio;
use Illuminate\Http\Request;

class NotaventaservicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(NotaVenta::all(),200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cita_id = $request["cita_id"];
        $nota_venta_id = $request["nota_venta_id"];
        $servicio_id=$request["servicio_id"];
        $descripcion=$request["descripcion"];
        $cantidad=$request["cantidad"];
        $costo=$request["costo"];
        $notaventaservicio = new Notaventaservicio();
        $notaventaservicio->cita_id=$cita_id;
        $notaventaservicio->nota_venta_id=$nota_venta_id;
        $notaventaservicio->servicio_id=$servicio_id;
        $notaventaservicio->descripcion=$descripcion;
        $notaventaservicio->cantidad=$cantidad;
        $notaventaservicio->costo=$costo;
        $notaventaservicio->save();
        return response()->json(["message"=>"OK"],201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $notaventaservicio = Notaventaservicio::find($id);
        if($id){
            return response()->json($notaventaservicio,200);
        }
        return response()->json(["message"=>"Nota denta servicio no encontrada"],200);
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
