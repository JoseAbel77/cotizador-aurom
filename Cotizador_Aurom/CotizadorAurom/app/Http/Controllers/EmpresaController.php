<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    /*public function insertarE(Request $req){
        
        $validacion = Validator::make($req->all(), [
            'nombre_empresa' => 'required|min:4|max:100',
            'correo' => 'required',
            'telefono_empresa' =>'required|min:5',
            'direccion' =>'required|min:4|max:100',
            'num_trabajadores' =>'required',
            'giro' =>'required|min:4|max:100'
        ]);
        if($validacion->fails()){
            return back()
                ->withInput()
                ->with('ErrorInsert', 'Favor de llenar todos los campos')
                ->withErrors($validacion);
        }else{
            $nuevo = Empresa::create([
                'nombre'=>$req->nombre,
                'correo'=>$req->correo,
                'telefono_empresa'=>$req->telefono_empresa,
                'direccion'=>$req->direccion,
                'num_trabajadores'=>$req->num_trabajadores,
                'giro'=>$req->giro
            ]);
            return back()->with('Listo', 'Se ha insertado correctamente');
        }//llave else

    }//llave funcion*/
}
