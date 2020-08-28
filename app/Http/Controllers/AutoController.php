<?php

namespace App\Http\Controllers;

use App\Auto;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AutoController extends Controller
{

    public function __construct()
    {

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autos = Auto::paginate(1);

        $todos = Auto::all();

        $cantidad = $todos->count();

        return view('autos.index',compact('autos', 'cantidad'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        $user = Auth::user();

         return view('autos.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $entrada = $request->all();



        if($archivo= $request->file('foto')){

            $nombre = $archivo->getClientOriginalName();

            $archivo->move('images', $nombre);

            $entrada['foto']=$nombre;
        }

        Auto::create($entrada);



        return redirect('/users');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Auto  $auto
     * @return \Illuminate\Http\Response
     */
    public function show(Auto $auto)
    {



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Auto  $auto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $auto = Auto::find($id);

        $user = Auth::user();

        return view('autos.edit', compact('auto','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Auto  $auto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $auto = Auto::find($id);


        $auto->update($request->all());


        Session::flash('actualizar_auto', 'La publicación fue actualizada con éxito!!');

        return redirect('/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Auto  $auto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $auto= Auto::find($id);

        $auto->delete();


        Session::flash('eliminar_auto', 'La publicación fue eliminada con éxito!!');

        return redirect('/users');
    }



}
