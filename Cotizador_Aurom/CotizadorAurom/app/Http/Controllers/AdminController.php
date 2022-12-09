<?php

namespace App\Http\Controllers;
use App\Models\Cotizacion;
use App\Models\Cliente;
use App\Models\Empresa;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
   
    public function __construct(){
        //Verifica si está logeado
        $this->middleware('auth');
    }
    public function index(){
        $cotizacion = \DB::table('cotizacion')
        ->select('cotizacion.*', 'cliente.nombre', 'cliente.AP', 'cliente.AM', 
        'cliente.telefono', 'cliente.email', 'empresa.nombre_empresa', 'empresa.correo', 
        'empresa.telefono_empresa', 'empresa.direccion', 'empresa.num_trabajadores', 'empresa.giro')
        ->join('cliente', 'cotizacion.id_cliente', '=', 'cliente.id')
        ->join('empresa', 'cotizacion.id_empresa', '=', 'empresa.id')

        ->orderBy('created_at', 'DESC')->get();
        return view('admin')->with("cotizacion",$cotizacion);
    }
    public function destroy($id){
        
        
        $cotizacion = Cotizacion::find($id);
        $cliente = Cliente::where('id', $cotizacion->id_cliente)->first();
        $empresa = Empresa::where('id', $cotizacion->id_empresa)->first();

        $cotizacion->delete();
        $empresa->delete();
        $cliente->delete();
        //return redirect()->route('admin');
        return back()->with('Listo',' El registro se elimino correctamente');
    }
    public function detalles($id){
        $cotizacion = \DB::table('cotizacion')
        ->select('cotizacion.*', 'cliente.nombre', 'cliente.AP', 'cliente.AM', 
        'cliente.telefono', 'cliente.email', 'empresa.nombre_empresa', 'empresa.correo', 
        'empresa.telefono_empresa', 'empresa.direccion', 'empresa.num_trabajadores', 'empresa.giro')
        ->join('cliente', 'cotizacion.id_cliente', '=', 'cliente.id')
        ->join('empresa', 'cotizacion.id_empresa', '=', 'empresa.id')

        ->where('cotizacion.id', $id)->first();
        return view('detalles')->with("detalles",$cotizacion);
    }
}
