<?php

namespace App\Http\Controllers;
use Spatie\GoogleCalendar\Event;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CitaController extends Controller
{
    public function cita(){
        return view('dash.cita');
    }
    public function agendar(Request $req){
    
        $event = new Event;
    
        $event->name = "El usuario ".  $req->Nombre. " con el correo ".$req->Correo. " ha agendado una cita.";
       
        $fecha= Carbon::createFromFormat('Y-m-d H:i', $req ->Fecha.' '.$req->Hora, $req->timezone);
       
        $event->startDateTime =$fecha;
        $event->endDateTime = $fecha->addHour();
        
        $event->save();
        
        $e = Event::get();
        return view('dash.citaok');
    }
}
