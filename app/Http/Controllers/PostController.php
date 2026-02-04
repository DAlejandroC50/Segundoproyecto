<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function Mensaje(){
        return "Hola desde el controlador de Post Controller";
    }

    public function About($param=null,$nombre=null){
        $datos=['parametro'=>$param, 'nombre'=>$nombre];
        return view('about',$datos);
        //return view('about',compact('param','nombre'));
    }
    //About es el nombre de la vista, seguido por los parametros de datos

    public function Contacto(){
        return view('Contacto',['mensaje'=>"Esto es un mensaje"]);
    }

    public function llamado_componente(){
        return view('llamadocomponente');
    }

    public function principal(){
        return view('principal');
    }
}
