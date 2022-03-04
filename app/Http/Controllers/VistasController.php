<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\unidad1;
use App\Models\unidad2;

class VistasController extends Controller
{
    public function Unidad1()
    {
        $unidad1=unidad1::all();
          $unidades=[];
          foreach ($unidad1 as $unidad1) {
               $unidades[]=[
                    'titulo'=>$unidad1->titulo,
                    'descripcion'=>$unidad1->contenido,
                    'url'=>$unidad1->imagen,
               ];
               
          } 
          return view('Unidad1',['unidades'=>$unidades]);
    }

    public function Unidad2()
     {
          $unidad1=unidad2::all();
          $unidades=[];
          foreach ($unidad1 as $unidad1) {
               $unidades[]=[
                    'titulo'=>$unidad1->titulo,
                    'descripcion'=>$unidad1->contenido,
                    'url'=>$unidad1->imagen,
               ];
               
          } 
          return view('Unidad2',['unidades'=>$unidades]);
     }
}