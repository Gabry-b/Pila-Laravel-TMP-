<?php

namespace App\Http\Controllers;

use App\Models\Contacta;
use Illuminate\Http\Request;

class ContactaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\Contacta  $contacta
     * @return \Illuminate\Http\Response
     */
    public function show(Contacta $contacta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contacta  $contacta
     * @return \Illuminate\Http\Response
     */
    public function edit(Contacta $contacta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contacta  $contacta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contacta $contacta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contacta  $contacta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contacta $contacta)
    {
        //
    }

    public function detalle($id){
        $notas = App\Contacta::findorfail($id);

        return view('home', compact('contactas'));
    }

    public function crear(Request $request){
        // return $request->all();
        $datoscontacta = request()->except('_token');
        Contacta::insert($datoscontacta); 
        
        return redirect('/home');
    }
}
