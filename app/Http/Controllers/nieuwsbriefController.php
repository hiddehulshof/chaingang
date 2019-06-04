<?php

namespace App\Http\Controllers;

use App\NewsLetter;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class nieuwsbriefController extends Controller
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
    public function store()
    {
        $newsletters = new NewsLetter();

        try {
            $newsletters->Email = Request("email");
            $newsletters->save();
        }
        catch (QueryException $ex)
        {}
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Nieuwsbrief  $nieuwsbrief
     * @return \Illuminate\Http\Response
     */
    public function show(Nieuwsbrief $nieuwsbrief)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Nieuwsbrief  $nieuwsbrief
     * @return \Illuminate\Http\Response
     */
    public function edit(Nieuwsbrief $nieuwsbrief)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Nieuwsbrief  $nieuwsbrief
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nieuwsbrief $nieuwsbrief)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Nieuwsbrief  $nieuwsbrief
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nieuwsbrief $nieuwsbrief)
    {
        //
    }
}
