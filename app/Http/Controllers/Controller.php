<?php

namespace App\Http\Controllers;

use App\Auto;
use http\Env\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function index()
    {
        $autos = Auto::all();

        return view('inicio', compact('autos'));
    }

    public function contacto()
    {
        return view('contacto.contacto');
    }

    public function busqueda(){


        $marca = $_GET['marca'];

        $autos = Auto::all()->where('marca',$marca);



        return view('autos.busqueda', compact('autos'));
    }
}
