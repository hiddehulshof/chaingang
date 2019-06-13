<?php

namespace App\Http\Controllers;

use App\Bike;
use App\BikeCatagory;
use App\Gebruiker;
use Illuminate\Http\Request;

class gebruikerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $bikes = Bike::all();

        return view("admin.admin", compact('bikes'));

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
     * @param  \App\Gebruiker  $gebruiker
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


    }

    public function editproduct($id)
    {
        $bike = Bike::find($id);
        $categorySelected = BikeCatagory::find($bike->typeId);
        $categories = BikeCatagory::all();

        return view("admin.products.edit", compact('bike','categories', 'categorySelected' ));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gebruiker  $gebruiker
     * @return \Illuminate\Http\Response
     */
    public function edit(Gebruiker $gebruiker)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gebruiker  $gebruiker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gebruiker $gebruiker)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gebruiker  $gebruiker
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gebruiker $gebruiker)
    {
        //
    }
}
