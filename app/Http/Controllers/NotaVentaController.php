<?php

namespace App\Http\Controllers;

use App\Models\NotaVenta;
use Illuminate\Http\Request;

class NotaVentaController extends Controller
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
        $enfermera_usuario_id=$request["enfermera_usuario_id"];
        $cliente_usuario_id=$request["cliente_usuario_id"];
        $ubicacion_id=$request["ubicacion_id"];
        $metodopago_id = $request["metodopago_id"];
        $total = $request["total"];
        $nota_venta = new NotaVenta();
        $nota_venta->enfermera_usuario_id=$enfermera_usuario_id;
        $nota_venta->cliente_usuario_id=$cliente_usuario_id;
        $nota_venta->ubicacion_id=$ubicacion_id;
        $nota_venta->metodopago_id = $metodopago_id;
        $nota_venta->total=$total;
        $nota_venta->save();
        return response()->json(["message"=>"Nota venta creada"],201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nota_venta = NotaVenta::find($id);
        if($id){
            return response()->json($nota_venta,200);
        }
        return response()->json(["message"=>"Nota venta no encontrada"],404);
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
