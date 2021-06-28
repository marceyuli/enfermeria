<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Enfermera;
use App\Models\Usuario;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Usuario::all(), 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ci = $request["ci"];
        $nombre = $request["nombre"];
        $rol_id = $request["rol_id"];
        $username = $request["username"];
        $usuario = new Usuario();
        $usuario->ci = $ci;
        $usuario->nombre = $nombre;
        $usuario->rol_id = $rol_id;
        $usuario->username = $username;
        $usuario->save();
        if ($rol_id == 2) {
            $enfermera = new Enfermera();
            $enfermera->especialidad = $request["especialidad"];
            $enfermera->usuario_id = $usuario->id;
            $enfermera->save();
        }
        if ($rol_id == 3) {
            $cliente = new Cliente();
            $cliente->telefono = $request["telefono"];
            $cliente->usuario_id = $usuario->id;
            $cliente->save();
        }
        return response()->json(["message" => "usuario creado"], 201);
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (!Auth::attempt(['username' => $request['username'], 'password' => $request['password']])) {
            // Authentication was successful...
            return response()->json(
                "Contraseña incorrecta",200
            );
        }
        return response()->json(
            "login ok",200
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = Usuario::find($id);
        if ($usuario) {
            return response()->json($usuario, 200);
        }
        return response()->json(["message" => "usuario no existe"], 404);
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
