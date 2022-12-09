<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    DB::table('recurso')->insert(['rol'=>'Auditor intermodelo', 'tipo'=>'Recurso Humano', 'regimen'=>'Subcontratado', 
    'descripcion'=>'Evalúa procesos en más de dos sectores, modelos o normas especializados', 'unidad'=>'Dia', 'costo'=>5000]);
    DB::table('recurso')->insert(['rol'=>'Auditor especialista', 'tipo'=>'Recurso Humano', 'regimen'=>'Subcontratado',
    'descripcion'=>'Evalúa procesos de un sector, modelo o norma especializados', 'unidad'=>'Dia', 'costo'=>5000]);
    DB::table('recurso')->insert(['rol'=>'Auditor líder', 'tipo'=>'Recurso Humano', 'regimen'=>'Subcontratado', 
    'descripcion'=>'Planea, dirige y ejectua una auditoría.', 'unidad'=>'Dia', 'costo'=>3000]);
    DB::table('recurso')->insert(['rol'=>'Instructor intermodelo', 'tipo'=>'Recurso Humano', 'regimen'=>'Subcontratado', 
    'descripcion'=>'Brinda capacitación en más de dos modelos,', 'unidad'=>'Dia', 'costo'=>4000]);
    DB::table('recurso')->insert(['rol'=>'Instructor especialista', 'tipo'=>'Recurso Humano', 'regimen'=>'Subcontratado', 
    'descripcion'=>'Brinda capacitación en algún modelo, norma o sector especializado', 'unidad'=>'Dia', 'costo'=>4000]);
    DB::table('recurso')->insert(['rol'=>'Instructor', 'tipo'=>'Recurso Humano', 'regimen'=>'Subcontratado', 
    'descripcion'=>'Proporciona capacitación en temas básicos.', 'unidad'=>'Dia', 'costo'=>3000]);
    DB::table('recurso')->insert(['rol'=>'Kit de capacitación Básico', 'tipo'=>'Recurso Material', 'regimen'=>'Fabricado', 
    'descripcion'=>'Constancias, Examen', 'unidad'=>'Pieza', 'costo'=>41.2]);
    DB::table('recurso')->insert(['rol'=>'Kit de capacitación con manuales', 'tipo'=>'Recurso Material', 'regimen'=>'Fabricado', 
    'descripcion'=>'Incluye carpeta, hojas de trabajo, Manual de participante, constancias, examen. Pluma BIC', 'unidad'=>'Pieza', 'costo'=>82.40]);
    DB::table('recurso')->insert(['rol'=>'Kit de capacitación de lujo', 'tipo'=>'Recurso Material', 'regimen'=>'Fabricado', 
    'descripcion'=>'Incluye carpeta, hojas de trabajo, Manual de participante, constancias, examen, pluma BIC', 'unidad'=>'Pieza', 'costo'=>123.60]);
    DB::table('recurso')->insert(['rol'=>'Consultor Intermodelo', 'tipo'=>'Recurso Humano', 'regimen'=>'Subcontratado', 
    'descripcion'=>'Propone mejoras y soluciones en los diferentes procesos en más de dos normas, modelos o sectores en los que es especialista.', 'unidad'=>'Dia', 'costo'=>4000]);
    DB::table('recurso')->insert(['rol'=>'Consultor Especialista', 'tipo'=>'Recurso Humano', 'regimen'=>'Subcontratado', 
    'descripcion'=>'Propone mejoras y soluciones en los diferentes procesos en una norma, modelo o sector en el que es especialista.', 'unidad'=>'Dia', 'costo'=>3500]);
    DB::table('recurso')->insert(['rol'=>'Consultor Líder', 'tipo'=>'Recurso Humano', 'regimen'=>'Subcontratado', 
    'descripcion'=>'Planea, dirige, propone e implementa mejoras y soluciones en los diferentes procesos de acuerdo al alcance del proyecto con el cliente.', 'unidad'=>'Dia', 'costo'=>2500.00]);
    DB::table('recurso')->insert(['rol'=>'Consultor Intermodelo TC', 'tipo'=>'Recurso Humano', 'regimen'=>'Tiempo completo', 
    'descripcion'=>'Propone mejoras y soluciones en los diferentes procesos en más de dos normas, modelos o sectores en los que es especialista.', 'unidad'=>'Dia', 'costo'=>2611.64]);
    DB::table('recurso')->insert(['rol'=>'Consultor Especialista TC', 'tipo'=>'Recurso Humano', 'regimen'=>'Tiempo completo', 
    'descripcion'=>'Propone mejoras y soluciones en los diferentes procesos en una norma, modelo o sector en el que es especialista.', 'unidad'=>'Dia', 'costo'=>2000.39]);
    DB::table('recurso')->insert(['rol'=>'Consultor Líder TC', 'tipo'=>'Recurso Humano', 'regimen'=>'Tiempo completo', 
    'descripcion'=>'Planea, dirige, propone e implementa mejoras y soluciones en los diferentes procesos de acuerdo al alcance del proyecto con el cliente.', 'unidad'=>'Dia', 'costo'=>1330.39]);
    DB::table('recurso')->insert(['rol'=>'Consultor', 'tipo'=>'Recurso Humano', 'regimen'=>'Tiempo completo', 
    'descripcion'=>'Propone e implementa mejoras y soluciones en los diferentes procesos de acuerdo al alcance del proyecto con el cliente.', 'unidad'=>'Dia', 'costo'=>924.14]);
    DB::table('recurso')->insert(['rol'=>'Ingeniero de procesos', 'tipo'=>'Recurso Humano', 'regimen'=>'Tiempo completo', 
    'descripcion'=>'Analiza procesos para identificar posibles.', 'unidad'=>'Dia', 'costo'=>861.64]);
    }
}