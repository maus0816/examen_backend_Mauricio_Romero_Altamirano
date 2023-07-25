<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuarios;

class usuariosController extends Controller
{
    public function index()
    {
        $usuarios = usuarios::all();
        return $usuarios;
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        try {
            $usuario = new usuarios();
            $usuario->name = $request->name;
            $usuario->email = $request->email;
            $usuario->password = bcrypt($request->password); 
            $usuario->direccion = $request->direccion;
            $usuario->telefono = $request->telefono;
            $usuario->fecha_nac = $request->fecha_nac;
    
            $usuario->save();
    
            return response()->json(['message' => 'Usuario creado correctamente'], 201);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al crear el usuario: ' . $e->getMessage()], 500);
        }
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        try {
            $usuario = usuarios::findOrFail($id);
            $usuario->name = $request->name;
            $usuario->email = $request->email;
            if (!empty($request->password)) {
                $usuario->password = bcrypt($request->password);
            }
            $usuario->direccion = $request->direccion;
            $usuario->telefono = $request->telefono;
            $usuario->fecha_nac = $request->fecha_nac;
    
            $usuario->save();
            return response()->json(['message' => 'Usuario actualizado correctamente'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function destroy(Request $request)
    {
        try {
            $usuario = usuarios::findOrFail($request->id);
            $usuario->delete();
            return response()->json(['message' => 'Usuario eliminado correctamente'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
