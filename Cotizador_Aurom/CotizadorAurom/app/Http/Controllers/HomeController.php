<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\Recurso;
use PDF;
use File;
use App\Models\Cliente;
use App\Models\Empresa;
use App\Models\Cotizacion;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function reporte(){
        $cotizacion=\DB::table('cotizacion')
        ->select('cotizacion.*', 'cliente.nombre', 'cliente.AP', 'cliente.AM', 'empresa.nombre_empresa')
        ->join('cliente', 'cotizacion.id_cliente', '=', 'cliente.id')
        ->join('empresa', 'cotizacion.id_empresa', '=', 'empresa.id')
        ->orderBy('created_at', 'DESC')->first();
        $datos=[
            'fecha'=>date('Y-m-d'),
            'cotizacion'=>$cotizacion
        ];
        return PDF::loadView('reportes.form',$datos)->stream('reporte.pdf');
    }
    public function insertar(Request $req){
        //dd($req);
        $validacion = Validator::make($req->all(), [
            'nombre'=>'required',
            'AP' => 'required',
            'AM' => 'required',
            'numero'=>'required',
            'email'=>'required'
        ]);
        if($validacion->fails()){
            return back()
                ->withInput()
                ->with('ErrorInsert', 'Favor de llenar todos los campos')
                ->withErrors($validacion);
        }else{
            
            $cliente = Cliente::create([
                'nombre'=>$req->nombre,
                'AP'=>$req->AP,
                'AM'=>$req->AM,
                'telefono'=>$req->numero,
                'email'=>$req->email,
            ]);
            $recurso = "";
            $precio = "";
            if(!is_null($req->capacitacionCheck)){
                $recurso=$req->capacitacionCheck;
                $precio=$req->capacitacionSuma;
            }else if(!is_null($req->auditoriaCheck)){
                $recurso=$req->auditoriaCheck;
                $precio=$req->auditoriaSuma;
            }else if(!is_null($req->consultoriaCheck)){
                $recurso=$req->consultoriaCheck;
                $precio=$req->consultoriaSuma;
            }
            
            $em = Empresa::create([
                'nombre_empresa'=>$req->nombre_empresa, 
                'correo'=>$req->correo, 
                'telefono_empresa'=>$req->telefono_empresa, 
                'direccion'=>$req->direccion, 
                'num_trabajadores'=>$req->num_trabajadores, 
                'giro'=>$req->giro 
            ]);
            $todo="";
            $recursos=explode(",", $recurso);
            
            foreach($recursos as $re){
                if($re!=""){
                    $arr = explode( "-",$re);
                
                    $todo.="".$arr[1].", ";
                }
                
            }
            $coti = Cotizacion::create([
                'servicio'=>$req->tipoServicio,
                'recursos'=>$todo,
                'precio'=>$precio,
                'id_cliente'=>$cliente->id,
                'id_empresa'=>$em->id
            ]);

            
        }//llave else
        echo "listo";
    }//llave funcion
}
