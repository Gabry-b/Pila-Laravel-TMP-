<?php

namespace App\Http\Controllers;

use App\Models\newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Redirect;

class NewsletterController extends Controller
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
    public function create(Request $request)
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
     * @param  \App\Models\newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function show(newsletter $newsletter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function edit(newsletter $newsletter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, newsletter $newsletter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function destroy(newsletter $newsletter)
    {
        //
    }

    public function detalle($id){
        $nota = App\Newsletter::findorfail($id);

        return view('home', compact('newsletters'));
    }

    public function crear(Request $request){
        // return $request->all();
        $datosnews = request()->except('_token');
        Newsletter::insert($datosnews);

        return Redirect::to('/send-email');
        
        
    }
}
