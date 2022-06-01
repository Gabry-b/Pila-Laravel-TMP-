<?php

namespace App\Http\Controllers;

use App\Models\Perfil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        if ($request) {
            $searchText = trim((string)$request->get('searchText'));
            $perfils = DB::table('perfils as u')
            ->select('u.biografia', 'u.direccioN','u.telefono', 'u.interesadoen', 'u.fecha_nacimiento', 'u.imagen_fondo', 'u.imagen_perfil')
            ->where('u.direccioN','LIKE','%d%')
            ->paginate(6);
    
            return view('perfil.index', compact('perfils','searchText'));
        
       
    }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function show(Perfil $perfil)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function edit(Perfil $perfil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perfil $perfil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Perfil  $perfil
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function crear(Request $request){
        $datosPerfil = request()->except('_token');

        if($request->hasFile('imagen_perfil')){
            $datosPerfil['imagen_perfil']=$request->file('imagen_perfil')->store('img','public');
        }
        if($request->hasFile('imagen_fondo')){
            $datosPerfil['imagen_fondo']=$request->file('imagen_fondo')->store('img','public');
        }
        Perfil::insert($datosPerfil); 

        return view ('/index');

        
        
        
        
    }

    
}
